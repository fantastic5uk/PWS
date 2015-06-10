<?php
/**
 * UserIdentity class file.
 *
 * @author Yohan Hirimuthugoda <yohandh@gmail.com>
 */

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id;
    private $_name;

    /**
     * Authenticates a user.
     * @return boolean Whether authentication succeeds.
     */
    public function authenticate()
    {
        $model = User::model()->findByAttributes(array('username' => $this->username));
        if ($model === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if ($model->password !== crypt($this->password, $model->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            $this->id = $model->id;
            $this->name = $model->username;
            $this->setState('firstName', $model->firstName);
            $this->setState('lastName', $model->lastName);
            //$this->setState('userType', $model->type);
            // Role
            $userRoles = Yii::app()->authManager->getAuthItems(CAuthItem::TYPE_ROLE, $this->id);
            $rolesKeys = array_keys($userRoles);
            //$userRole = $rolesKeys[0];
            //$this->setState('userRole', $userRole);

            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setId($value)
    {
        return $this->_id = $value;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setName($value)
    {
        return $this->_name = $value;
    }
}
