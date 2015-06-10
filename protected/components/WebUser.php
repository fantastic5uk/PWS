<?php

class WebUser extends CWebUser
{
    //public $isSuperAdmin = false;

    /**
     * Actions to be taken after logging in.
     * Overloads the parent method in order to mark SuperAdmin.
     * @param boolean $fromCookie Whether the login is based on cookie.
     */
    public function afterLogin($fromCookie)
    {
        parent::afterLogin($fromCookie);

    }

    /**
     * Performs access check for this user.
     * Overloads the parent method in order to allow SuperAdmin access implicitly.
     * @param string $operation The name of the operation that need access check.
     * @param array $params name-value pairs that would be passed to business rules associated
     * with the tasks and roles assigned to the user.
     * @param boolean $allowCaching Whether to allow caching the result of access check.
     * This parameter has been available since version 1.0.5. When this parameter
     * is true (default), if the access check of an operation was performed before,
     * its result will be directly returned when calling this method to check the same operation.
     * If this parameter is false, this method will always call {@link CAuthManager::checkAccess}
     * to obtain the up-to-date access result. Note that this caching is effective
     * only within the same request.
     * @return boolean Whether the operations can be performed by this user.
     */
    public function checkAccess($operation, $params = array(), $allowCaching = true)
    {
        $checkAccess = Yii::app()->getAuthManager()->checkAccess($operation, $this->getId(), $params);

        if ($allowCaching && !$this->getIsGuest()) {
            $permissions = !empty(Yii::app()->session['permissions']) ? Yii::app()->session['permissions'] : array();
            $permissions[$operation] = $checkAccess;
            Yii::app()->session['permissions'] = $permissions;
        }

        return $checkAccess;
    }
    /*
      public function checkAccess($operation, $params = array(), $allowCaching = true)
      {
      if ($this->getState('isSuperAdmin')) {
      return true;
      } else {
      if (null == $this->getState('permissions')) {
      return false;
      } elseif (in_array($operation, $this->getState('permissions'))) {
      return true;
      } else {
      return false;
      }
      }
      }
     */

    /**
     * Performs access list check for this user.
     * @param array $operations Array of operations
     * @return boolean Return true if user has access to at least one operation from given list.
     */
    public function checkAccessList($operations = array())
    {
        foreach ($operations as $operation) {
            if ($this->checkAccess($operation)) {
                return true;
            }
        }
        return false;
    }

    public function setAjaxFlash($type, $msg)
    {
        $output = '<div class="alert in alert-block fade alert-' . $type . '">';
        $output .= '<a class="close" data-dismiss="alert">x</a>';
        $output .= $msg;
        $output .= '</div>';

        echo $output;
        //echo "<script>jQuery('#ajax_flash').animate({opacity: 1.0}, 30000).fadeOut('slow');</script>";
    }
}
