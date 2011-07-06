<?php
/***********************************************************
  Abstract Controller can be used as a base class for any
  fundamental controller implementation. Controller class
  by definition should be state-less, although it can have
  associated model, which it then would manipulate.

  Learn:
  http://agiletoolkit.org/learn/understad/controller

  Reference:
  http://agiletoolkit.org/doc/controller

 **ATK4*****************************************************
 This file is part of Agile Toolkit 4 
 http://agiletoolkit.org

 (c) 2008-2011 Agile Technologies Ireland Limited
 Distributed under Affero General Public License v3

 If you are using this file in YOUR web software, you
 must make your make source code for YOUR web software
 public.

 See LICENSE.txt for more information

 You can obtain non-public copy of Agile Toolkit 4 at
 http://agiletoolkit.org/commercial

 *****************************************************ATK4**/
class AbstractController extends AbstractObject {
    protected $model;

    function __clone(){
        parent::__clone();
        if($this->model)$this->model=clone $this->model;
    }
    /* Associate controller with Model */
    public function setModel($classname) {
        $this->model = $this->add($classname);
        return $this;
    }
    /* get associated model */
    public function getModel() {
        return $this->model;
    }
}
