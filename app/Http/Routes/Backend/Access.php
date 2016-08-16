<?php

Route::group([
    'prefix'     => 'access',
    'namespace'  => 'Access',
], function() {

	/**
	 * User Management
	 */
	Route::group([
		'middleware' => 'access.routeNeedsPermission:manage-users',
	], function() {
		Route::group(['namespace' => 'User'], function() {
			Route::resource('user', 'UserController', ['except' => ['show']]);

			/**
			 * For DataTables
			 */
			Route::get('user/get', 'UserController@get')->name('admin.access.user.get');

			/**
			 * User Status'
			 */
			Route::get('user/deactivated', 'UserController@deactivated')->name('admin.access.user.deactivated');
			Route::get('user/deleted', 'UserController@deleted')->name('admin.access.user.deleted');

			/**
			 * Misc
			 */
			Route::get('account/confirm/resend/{user}', 'UserController@resendConfirmationEmail')->name('admin.account.confirm.resend');

			/**
			 * Specific User
			 */
			Route::group(['prefix' => 'user/{user}'], function() {
				Route::get('mark/{status}', 'UserController@mark')->name('admin.access.user.mark')->where(['status' => '[0,1]']);
				Route::get('password/change', 'UserController@changePassword')->name('admin.access.user.change-password');
				Route::post('password/change', 'UserController@updatePassword')->name('admin.access.user.change-password');
				Route::get('login-as', 'UserController@loginAs')->name('admin.access.user.login-as');
			});

            /**
             * Deleted User
             */
            Route::group(['prefix' => 'user/{deletedUser}'], function() {
				Route::get('delete', 'UserController@delete')->name('admin.access.user.delete-permanently');
                Route::get('restore', 'UserController@restore')->name('admin.access.user.restore');
            });

            /**
             * Ajax call for history 
             */
            Route::group(['prefix' => 'user/history'], function() {
                Route::post('get-history', 'UserController@getHistory')->name('admin.access.user.history.get-history');
                Route::post('get-history-type', 'UserController@getHistoryType')->name('admin.access.user.history.get-history-type');
                Route::post('get-history-entity', 'UserController@getHistoryEntity')->name('admin.access.user.history.get-history-entity');
            });
            
		});
	});

	/**
	 * Role Management
	 */
	Route::group([
		'middleware' => 'access.routeNeedsPermission:manage-roles',
	], function() {
		Route::group(['namespace' => 'Role'], function () {
			Route::resource('role', 'RoleController', ['except' => ['show']]);

			//For DataTables
			Route::get('role/get', 'RoleController@get')->name('admin.access.role.get');

			/**
             * Ajax call for history 
             */
            Route::group(['prefix' => 'role/history'], function() {
                Route::post('get-history', 'RoleController@getHistory')->name('admin.access.role.history.get-history');
                Route::post('get-history-type', 'RoleController@getHistoryType')->name('admin.access.role.history.get-history-type');
                Route::post('get-history-entity', 'RoleController@getHistoryEntity')->name('admin.access.role.history.get-history-entity');
            });

		});
	});
});