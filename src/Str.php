<?php

namespace Strap;

use Illuminate\Support\Str as Support;

class Str
{
    protected $string;

    protected $argumentLocations;

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
    public function set($string)
    {
        $this->string = $string;

        return $this;
    }

    /**
     * Forward the called method to Support.
     *
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return $this->determineReturn(
            forward_static_call_array(
                [Support::class, $name],
                $this->orderArguments($name, $arguments)
            )
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
     * Order the arguments to be sent to Support.
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
     * The location where the string is passed into Support.
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

    public function get()
    {
        return $this->string;
    }
}
