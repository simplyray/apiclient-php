<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddUserReturn;
use Voximplant\Interfaces\DelUserReturn;
use Voximplant\Interfaces\GetUsersReturn;
use Voximplant\Interfaces\SetUserInfoReturn;
use Voximplant\Interfaces\UsersInterface;

class Users implements UsersInterface
{
	protected $client;

	/** @ objectAddUser */
	protected $AddUserReturn;

	/** @ objectDelUser */
	protected $DelUserReturn;

	/** @ objectSetUserInfo */
	protected $SetUserInfoReturn;

	/** @ objectGetUsers */
	protected $GetUsersReturn;


	public function __construct($client)
	{
		$this->client = $client;

		$this->AddUserReturn = new AddUserReturn();
		$this->DelUserReturn = new DelUserReturn();
		$this->SetUserInfoReturn = new SetUserInfoReturn();
		$this->GetUsersReturn = new GetUsersReturn();
	}


	/**
	 * @method Adds a new user.
	 */
	public function AddUser(Params\AddUserParams $params = null): AddUserReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->AddUserReturn->$key = $value;
		}
		return $this->AddUserReturn;
	}


	/**
	 * @method Deletes the user.
	 */
	public function DelUser(Params\DelUserParams $params = null): DelUserReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->DelUserReturn->$key = $value;
		}
		return $this->DelUserReturn;
	}


	/**
	 * @method Edits the user.
	 */
	public function SetUserInfo(Params\SetUserInfoParams $params = null): SetUserInfoReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->SetUserInfoReturn->$key = $value;
		}
		return $this->SetUserInfoReturn;
	}


	/**
	 * @method Shows the users of the specified account.
	 */
	public function GetUsers(Params\GetUsersParams $params = null): GetUsersReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetUsersReturn->$key = $value;
		}
		return $this->GetUsersReturn;
	}
}