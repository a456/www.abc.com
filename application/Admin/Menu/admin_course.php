<?php
return array (
  'app' => 'Admin',
  'model' => 'Course',
  'action' => 'index',
  'data' => '',
  'type' => '0',
  'status' => '1',
  'name' => '课程系统',
  'icon' => '',
  'remark' => '',
  'listorder' => '0',
  'children' => 
  array (
    array (
      'app' => 'Course',
      'model' => 'AdminCoursetype',
      'action' => 'index',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '分类管理',
      'icon' => '',
      'remark' => '',
      'listorder' => '0',
    ),
    array (
      'app' => 'Course',
      'model' => 'AdminCourse',
      'action' => 'index',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '课程管理',
      'icon' => '',
      'remark' => '',
      'listorder' => '0',
    ),
    array (
      'app' => 'Course',
      'model' => 'AdminSection',
      'action' => 'index',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '课时管理',
      'icon' => '',
      'remark' => '',
      'listorder' => '0',
    ),
    array (
      'app' => 'Card',
      'model' => 'AdminCard',
      'action' => 'index',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '点卡系统',
      'icon' => '',
      'remark' => '',
      'listorder' => '0',
    ),
  ),
);