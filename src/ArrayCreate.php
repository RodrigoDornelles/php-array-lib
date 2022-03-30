<?php

/**
 * 
 * @author RodrigoDornelles <rodrigo@dornelles.me>
 * @copyright 2022, Rodrigo Dornelles
 * 
 **
 *
 * @method construct
 * @method filter
 * @method first
 * @method flip
 * @method from
 * @method join
 * @method last
 * @method map
 * 
 **
 */
class ArrayCreate
{
    /**
     * Internal array
     * 
     * @var array
     */
    private $_array;

    /**
     * @param array $params
     */
    private function __construct($params = [])
    {
        $this->_array = isset($params['from'])? (array) ($params['from']): [];
    }

    /**
     * @return array
     */
    public function construct()
    {
        return $this->_array;
    }

    /**
     * @param Closure $func
     * 
     * @return ArrayCreate
     */
    public function filter($func)
    {
        $this->_array = array_filter($this->_array, $func);
        return $this;
    }

    /**
     * @return mixed
     */
    public function first()
    {
        $item = $this->_array[array_key_first($this->_array)];
        return is_array($item)? self::from($item): $item;
    }

    /**
     * @return ArrayCreate
     */
    public function flip()
    {
        $this->_array = array_flip($this->_array);
        return $this;
    }

    /**
     * @param array $array
     * 
     * @return ArrayCreate
     */
    public static function from($array)
    {
        return new self(['from' => $array]);
    }

    /**
     * @param string $glue
     * 
     * @return string
     */
    public function join($glue = '')
    {
        return implode($glue, $this->_array);
    }

    /**
     * @return mixed
     */
    public function last()
    {
        $item = $this->_array[array_key_last($this->_array)];
        return is_array($item)? self::from($item): $item;
    }

    /**
     * @param Closure $func
     * 
     * @return ArrayCreate
     */
    public function map($func)
    {
        $this->_array = array_map($func, $this->_array);
        return $this;
    }
}
