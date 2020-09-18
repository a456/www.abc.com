<?php
return array (
  'app' => 'User',
  'model' => 'Indexadmin',
  'action' => 'default',
  'data' => '',
  'type' => '1',
  'status' => '1',
  'name' => '会员系统',
  'icon' => 'group',
  'remark' => '',
  'listorder' => '10',
  'children' => 
  array (
    array (
      'app' => 'User',
      'model' => 'Indexadmin',
      'action' => 'default1',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '用户组',
      'icon' => '',
      'remark' => '',
      'listorder' => '0',
      'children' => 
      array (
        array (
          'app' => 'User',
          'model' => 'Indexadmin',
          'action' => 'index',
          'data' => '',
          'type' => '1',
          'status' => '1',
          'name' => '本站用户',
          'icon' => 'leaf',
          'remark' => '',
          'listorder' => '0',
          'children' => 
          array (
            array (
              'app' => 'User',
              'model' => 'Indexadmin',
              'action' => 'ban',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '拉黑会员',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
            array (
              'app' => 'User',
              'model' => 'Indexadmin',
              'action' => 'cancelban',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '启用会员',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
          ),
        ),
        array (
          'app' => 'User',
          'model' => 'Oauthadmin',
          'action' => 'index',
          'data' => '',
          'type' => '1',
          'status' => '1',
          'name' => '第三方用户',
          'icon' => 'leaf',
          'remark' => '',
          'listorder' => '0',
          'children' => 
          array (
            array (
              'app' => 'User',
              'model' => 'Oauthadmin',
              'action' => 'delete',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '第三方用户解绑',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
          ),
        ),
      ),
    ),
    array (
      'app' => 'User',
      'model' => 'Indexadmin',
      'action' => 'default3',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '管理组',
      'icon' => '',
      'remark' => '',
      'listorder' => '0',
      'children' => 
      array (
        array (
          'app' => 'Admin',
          'model' => 'Rbac',
          'action' => 'index',
          'data' => '',
          'type' => '1',
          'status' => '1',
          'name' => '角色管理',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
          'children' => 
          array (
            array (
              'app' => 'Admin',
              'model' => 'Rbac',
              'action' => 'member',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '成员管理',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
            ),
            array (
              'app' => 'Admin',
              'model' => 'Rbac',
              'action' => 'authorize',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '权限设置',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
              'children' => 
              array (
                array (
                  'app' => 'Admin',
                  'model' => 'Rbac',
                  'action' => 'authorize_post',
                  'data' => '',
                  'type' => '1',
                  'status' => '0',
                  'name' => '提交设置',
                  'icon' => '',
                  'remark' => '',
                  'listorder' => '0',
                ),
              ),
            ),
            array (
              'app' => 'Admin',
              'model' => 'Rbac',
              'action' => 'roleedit',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '编辑角色',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
              'children' => 
              array (
                array (
                  'app' => 'Admin',
                  'model' => 'Rbac',
                  'action' => 'roleedit_post',
                  'data' => '',
                  'type' => '1',
                  'status' => '0',
                  'name' => '提交编辑',
                  'icon' => '',
                  'remark' => '',
                  'listorder' => '0',
                ),
              ),
            ),
            array (
              'app' => 'Admin',
              'model' => 'Rbac',
              'action' => 'roledelete',
              'data' => '',
              'type' => '1',
              'status' => '1',
              'name' => '删除角色',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
            ),
            array (
              'app' => 'Admin',
              'model' => 'Rbac',
              'action' => 'roleadd',
              'data' => '',
              'type' => '1',
              'status' => '1',
              'name' => '添加角色',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
              'children' => 
              array (
                array (
                  'app' => 'Admin',
                  'model' => 'Rbac',
                  'action' => 'roleadd_post',
                  'data' => '',
                  'type' => '1',
                  'status' => '0',
                  'name' => '提交添加',
                  'icon' => '',
                  'remark' => '',
                  'listorder' => '0',
                ),
              ),
            ),
          ),
        ),
        array (
          'app' => 'Admin',
          'model' => 'User',
          'action' => 'index',
          'data' => '',
          'type' => '1',
          'status' => '1',
          'name' => '管理员',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
          'children' => 
          array (
            array (
              'app' => 'Admin',
              'model' => 'User',
              'action' => 'delete',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '删除管理员',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
            ),
            array (
              'app' => 'Admin',
              'model' => 'User',
              'action' => 'edit',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '管理员编辑',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
              'children' => 
              array (
                array (
                  'app' => 'Admin',
                  'model' => 'User',
                  'action' => 'edit_post',
                  'data' => '',
                  'type' => '1',
                  'status' => '0',
                  'name' => '编辑提交',
                  'icon' => '',
                  'remark' => '',
                  'listorder' => '0',
                ),
              ),
            ),
            array (
              'app' => 'Admin',
              'model' => 'User',
              'action' => 'add',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '管理员添加',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
              'children' => 
              array (
                array (
                  'app' => 'Admin',
                  'model' => 'User',
                  'action' => 'add_post',
                  'data' => '',
                  'type' => '1',
                  'status' => '0',
                  'name' => '添加提交',
                  'icon' => '',
                  'remark' => '',
                  'listorder' => '0',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);