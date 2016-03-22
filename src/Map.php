<?php namespace Dtkahl\ArrayTools;

class Map
{
  /**
   * @var array
   */
  private $_properties = [];

  public function __construct(array $properties = [])
  {
    $this->_properties = $properties;
  }

  /**
   * @param $key
   * @return bool
   */
  public function has($key)
  {
    return array_key_exists((string) $key, $this->_properties);
  }

  /**
   * @param $key
   * @param mixed $default
   * @return null
   */
  public function get($key, $default = null)
  {
    return $this->has((string) $key) ? $this->_properties[(string) $key] : $default;
  }

  /**
   * @param $key
   * @param mixed $value
   * @return $this
   */
  public function set($key, $value)
  {
    $this->_properties[(string) $key] = $value;
    return $this;
  }

  /**
   * @param $key
   * @return $this
   */
  public function remove($key)
  {
    if ($this->has((string) $key)) {
      unset($this->_properties[(string) $key]);
    }
    return $this;
  }

  /**
   * @return array
   */
  public function all()
  {
    return $this->_properties;
  }

}