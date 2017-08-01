<?php

namespace Strap;

use Illuminate\Support\Str as IlluminateStr;

class Str
{
    protected $string;

    public function __construct($string = '')
    {
        $this->set($string);
    }

    /**
     * Set the string.
     *
     * @param $string
     * @return $this
     */
    public function set(string $string)
    {
        $this->string = $string;

        return $this;
    }

    /**
     * Process the request.
     *
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return $this->determineReturn(
            $this->passToIlluminateStr($name, $arguments)
        );
    }

    /**
     * Determine what to return.
     *
     * @param $result
     * @return $this
     */
    protected function determineReturn($result)
    {
        switch (gettype($result)) {
            case 'string':
                return $this->set($result);
            default:
                return $result;
        }
    }

    /**
     * Pass request to IlluminateStr.
     *
     * @param $name
     * @param $arguments
     * @return mixed
     */
    protected function passToIlluminateStr($name, $arguments)
    {
        return forward_static_call_array(
            [IlluminateStr::class, $name],
            $this->orderArguments($name, $arguments)
        );
    }

    /**
     * Order the arguments to match requested IlluminateStr method signature.
     *
     * @param $name
     * @param $arguments
     * @return array
     */
    protected function orderArguments($name, $arguments)
    {
        $arguments = collect($arguments);

        switch ($this->getStringLocationForMethod($name)) {
            case 'last':
                $arguments->push((string) $this);
            case 'never':
                break;
            default:
                $arguments->prepend((string) $this);
        }

        return $arguments->toArray();
    }

    /**
     * Determine the location to add the string to the arguments.
     *
     * @param $name
     * @return mixed
     */
    protected function getStringLocationForMethod($name)
    {
        return $this->argumentLocations()->filter(function ($methods) use ($name) {
            return $methods->contains($name);
        })->keys()->first();
    }

    /**
     * The location where the string is passed into IlluminateStr.
     *
     * @return \Illuminate\Support\Collection
     */
    protected function argumentLocations()
    {
        return collect([
            'last' => collect(['is', 'replaceArray', 'replaceFirst', 'replaceLast']),
            'never' => collect(['random']),
        ]);
    }

    /**
     * Get the string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->get();
    }

    /**
     * Retrieve the string.
     *
     * @return mixed
     */
    public function get()
    {
        return $this->string;
    }
}
