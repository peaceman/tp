<?php
/**
 * User: peaceman
 * Date: 4/19/12
 * Time: 9:52 PM
 */
class Application_Model_Server extends \SAP\Model\AbstractModel
{
	/**
	 * @var Application_Model_ServerType
	 */
	protected $_serverType;

	public function getName()
	{
		return $this->_get('name');
	}

	public function setName($name)
	{
		$this->_set('name', $name);
	}

	public function getServerTypeId()
	{
		return $this->_get('server_type_id');
	}

	public function setServerTypeId($serverTypeId)
	{
		$this->_set('server_type_id', $serverTypeId);
	}

	/**
	 * @return Application_Model_ServerType
	 */
	public function getServerType()
	{
		if ($this->_serverType === null) {
			$this->_serverType = $this->_getServerTypeMapper()->find($this->getServerTypeId());
		}

		return $this->_serverType;
	}

	/**
	 * @return Application_Model_ServerTypeMapper
	 */
	protected function _getServerTypeMapper()
	{
		static $serverTypeMapper;
		if ($serverTypeMapper === null) {
			$serverTypeMapper = new Application_Model_ServerTypeMapper;
		}

		return $serverTypeMapper;
	}
}