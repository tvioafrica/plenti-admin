<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bkash/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JVDZ3DhiNK7of18h',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bkash/create-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bkash-create-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bkash/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bkash-callBack',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bkash/refund' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bkash-refund',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bkash/refund/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bkash-refund-status',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/refresh-token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ooeWQDiuN2Nv3q1c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/login-mobile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.generated::UoB1rJYsC4F6C3Zo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/mobile-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.generated::mpUGZOk59vhcv1Sr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.forgot-password.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/forgot-password/verify-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.forgot-password.generated::MyWkVnl75Tt7PQd5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/forgot-password/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.forgot-password.generated::DjroFwJLUj3ABuh4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/signup/otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.signup.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/signup/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.signup.generated::SyESffCI1rqgM7ln',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/signup/verify-merchant' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.signup.generated::OHScRzMqUXh8IEXV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/signup/verify-advertiser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.signup.generated::RsPYPxQEBUxMxSJh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/signup/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.signup.generated::pF8clkBVT0gfJJWm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/signup/register-merchant' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.signup.generated::Dj4dibHLBufzivHo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/signup/register-advertiser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.signup.generated::GAe47SXZz17XprnM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/signup/register-offline' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.signup.generated::EpCw42qMfNqLG5cq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/guest-signup/otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.guest-signup.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/guest-signup/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.guest-signup.generated::fh86YTcwhRHYTubm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.generated::k2pieJmhBO7V6EKP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/delete-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.generated::kUlxLVRrrc6Wj4PX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'profile.generated::Uh9WPTcA8IZ3GQgH',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.generated::rSURI9ABUVYFq3E3',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/change-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.generated::Lx9AvfefRVbtydV8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/default-access' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.default-access.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.default-access.generated::oCwcRa032ug78ND1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.company.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.company.generated::Z9SqnwFnoN2jjphA',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/site' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.site.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.site.generated::ipOHJmZwFgXETxin',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/order-setup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.order-setup.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.order-setup.generated::P115KdgzrOXTayLz',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.mail.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.mail.generated::o3EADEi9vNHEfGCh',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.currency.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.currency.generated::7H902X3X5xom01JS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/tax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.tax.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.tax.generated::I5vk4qcV2bW4scyz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/item-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.item-category.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.item-category.generated::QkLxI9cfVLZBbjLi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/item-attribute' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.item-attribute.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.item-attribute.generated::w1QeN5b3sbM5IYjg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.slider.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.slider.generated::raio5aMiDjA9dj2b',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/branch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.branch.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.branch.generated::h9AajC2ygkOnfODM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/menu-section' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.menu-section.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/menu-template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.menu-template.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.menu-template.generated::JYsAoJosymECiWhw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.page.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.page.generated::p29uzxMk5ZxGa4r2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/license' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.license.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.license.generated::wQUUNmIhUKHp2ahq',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/theme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.theme.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.theme.generated::431VkMsAiD7gZX46',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/sms-gateway' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.sms-gateway.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.sms-gateway.generated::Oej8prqfMi9aqWTB',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/payment-gateway' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.payment-gateway.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.payment-gateway.generated::ESNqpOjvkGnNee6l',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.notification.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.notification.generated::vosfL7Cjy2oElJJr',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/social-media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.social-media.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.social-media.generated::M5q0M4onc3n9pgOC',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/analytic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.analytic.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.analytic.generated::N8ObIjaShKxA9i0h',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.otp.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.otp.generated::YvR6xG9nh65yXFxZ',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.role.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.role.generated::TCIHaKGFdizJyEmG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/cookies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.cookies.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.cookies.generated::2XjhafX5ZreOhTwE',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/time-slot' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.time-slot.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.time-slot.generated::Os8RlnSUVkPKfLv9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.language.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.language.generated::aHgVnvy80NIv83bk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/language/file-text/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.language.generated::3AiznfzD7cLIureZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/setting/notification-alert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.notification-alert.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.notification-alert.generated::IBn6qnPU9YJ6ANf8',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/subscriber' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subscriber.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::4o5ffz7CPvqWcHPL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/billers/airtime-operators' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.my-order.generated::IMUjExarpVgy29gd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/billers/data-operators' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.my-order.generated::b7Hvo1hTmI79N2pi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/billers/buy-airtime' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.my-order.generated::d8JYQCE7OLn0Imif',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/billers/buy-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.my-order.generated::SBnsZEYmXKLlZdB0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.employee.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.employee.generated::zVgfG9u3yxvDN3Om',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/delivery-boy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivery-boy.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivery-boy.generated::gcc78bUyhVo5yDpD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/advertisers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisers.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisers.generated::deEQViGLC3HphFpK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.generated::jS5C0kKa8Ll8qrB2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/offer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.offer.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.offer.generated::S7X6jFMRcqKDgpXf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::Z3OvG81eq57vT0J9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/pos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pos.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/pos-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posOrder.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/online-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.onlineOrder.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/table-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tableOrder.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/push-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.push-notification.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.push-notification.generated::7g5ccFRfwoXKgmhA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/administrator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.administrator.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.administrator.generated::84b7LLm7c8gKBOYy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/timezone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.timezone.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dashboard/total-sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dashboard/total-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.generated::oHP4C6uJUo4xwrBz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dashboard/total-customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.generated::nBj2AMlGIHMXHyIX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dashboard/total-menu-items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.generated::OBE45QwCa6JbMH1R',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dashboard/order-statistics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.generated::BcTIkoVui4srsvZW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dashboard/order-summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.generated::39vPNu8icUgby0F8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dashboard/sales-summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.generated::CIK1FzfVh75QA270',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dashboard/customer-states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.generated::xoDPZnhY6RGMRzh2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dashboard/top-customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.generated::TFgdBek7ZWv7vlrL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dashboard/featured-items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.generated::MHlRFqH2HE2D6YnG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dashboard/popular-items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.generated::B0piF9X6UjX66rj4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dashboard/trends' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.generated::F4uFVlg7Y5GccYzO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dashboard/get-advertisers-stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.generated::xFKSLkHIAkIW3guY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dashboard/get-transaction-by-gender' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.generated::qlIJfn2MqCNPkjm7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dashboard/get-product-category-achievements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.generated::Jcq1vQrh15ZqHkdD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/sales-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales-report.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/sales-report/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales-report.generated::VpUkUy1IMUR2Sr1U',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/items-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items-report.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/items-report/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items-report.generated::1QcsEsTRWnXzoASd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/credit-balance-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.credit-balance-report.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/credit-balance-report/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.credit-balance-report.generated::3ImueCRaQQWk5Abc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.message.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.message.generated::lBG1d93ggXTEscOG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/country-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country-code.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/transaction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transaction.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/transaction/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transaction.generated::fOxsLk2ytKdknmAM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/pos-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pos-category.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dining-table' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dining-table.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dining-table.generated::bFeqFtKZbLYs6ICU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/operators' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.operators.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.setting.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.page.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/subscriber' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.subscriber.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.address.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.address.generated::UNQod5cmtDGcCaV7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/branch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.branch.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.language.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.order.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.order.generated::KJUhjyHAH9YgVhh9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/offer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.offer.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/offer/today' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.offer.generated::rh6laKXTATpI7tkM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.item.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/item/featured-items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.item.generated::a3ElECpvkMFDsqzB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/item/popular-items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.item.generated::WXtssoYNr1j7ZskP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/item-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.item-category.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.message.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.message.generated::m9BK8tP2iGJqxP4H',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/time-slot/today' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.time-slot.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/time-slot/tomorrow' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.time-slot.generated::Sfn7yZ0ElNIfIG2V',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.coupon.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/coupon/coupon-checking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.coupon.generated::28nLXZJrXbVkbqzT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.slider.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/country-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.country-code.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/cookies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.cookies.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.cookies.generated::ujb86ZSAKFaQPxg9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/device-token/web' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.device-token.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/device-token/mobile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.device-token.generated::yMB8rubZ2t4FFrse',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/delivery-boy-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.delivery-boy-order.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/frontend/delivery-boy-order/count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.delivery-boy-order.generated::Gsjcp1LYjpr1dpYV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/table/item-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'table.item-category.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/table/dining-table' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'table.dining-table.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/table/dining-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'table.dining-order.generated::b5vZJ6AzbK83c9Wc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/requirement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installer.requirement',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installer.permission',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/license' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installer.license',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'installer.licenseStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/site' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installer.site',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'installer.siteStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installer.database',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'installer.databaseStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/final' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installer.final',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/final-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installer.finalStore',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment/senangpay-webhook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.senangpay.webhook',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/bkash/search/([^/]++)(*:103)|/api/(?|admin/(?|setting/(?|currency/(?|show/([^/]++)(*:164)|([^/]++)(?|(*:183)))|t(?|ax/(?|show/([^/]++)(*:216)|([^/]++)(?|(*:235)))|ime\\-slot/([^/]++)(*:263))|item\\-(?|category/(?|show/([^/]++)(*:306)|([^/]++)(?|(*:325)))|attribute/(?|show/([^/]++)(*:361)|([^/]++)(?|(*:380))))|slider/(?|show/([^/]++)(*:414)|([^/]++)(?|(*:433)))|branch/(?|show/([^/]++)(*:466)|([^/]++)(?|(*:485)))|menu\\-template/(?|show/([^/]++)(*:526)|([^/]++)(?|(*:545)))|p(?|age/(?|show/([^/]++)(*:579)|([^/]++)(?|(*:598)))|ermission/([^/]++)(?|(*:629)))|analytic(?|/(?|show/([^/]++)(*:667)|([^/]++)(?|(*:686)))|\\-section/([^/]++)(?|(*:717)|/([^/]++)(?|(*:737))))|role/(?|show/([^/]++)(*:769)|([^/]++)(?|(*:788)))|language/(?|show/([^/]++)(*:823)|update/([^/]++)(*:846)|([^/]++)(*:862)|file\\-(?|list/([^/]++)(*:892)|text(*:904))))|c(?|ustomer/(?|show/([^/]++)(*:943)|([^/]++)(?|(*:962))|e(?|arn\\-p(?|oints/([^/]++)(*:998)|romo\\-reward/([^/]++)(*:1027))|xport(*:1042))|change\\-(?|password/([^/]++)(*:1080)|image/([^/]++)(*:1103))|my\\-order/([^/]++)(*:1131)|address/(?|([^/]++)(*:1159)|show/([^/]++)/([^/]++)(*:1190)|([^/]++)(?|(*:1210)|/([^/]++)(?|(*:1231)))))|ou(?|pon/(?|show/([^/]++)(*:1269)|([^/]++)(?|(*:1289))|export(*:1305))|ntry\\-code/show/([^/]++)(*:1339)))|m(?|y\\-order/show/([^/]++)/([^/]++)(*:1385)|essage/(?|show/([^/]++)(*:1417)|([^/]++)(?|(*:1437))|change\\-status/([^/]++)/([^/]++)(*:1479)))|employee/(?|show/([^/]++)(*:1515)|([^/]++)(?|(*:1535))|export(*:1551)|change\\-(?|password/([^/]++)(*:1588)|image/([^/]++)(*:1611))|my\\-order/([^/]++)(*:1639)|address/(?|([^/]++)(*:1667)|show/([^/]++)/([^/]++)(*:1698)|([^/]++)(?|(*:1718)|/([^/]++)(?|(*:1739)))))|d(?|elivery\\-boy/(?|show/([^/]++)(*:1785)|([^/]++)(?|(*:1805))|export(*:1821)|change\\-(?|password/([^/]++)(*:1858)|image/([^/]++)(*:1881))|my\\-order/([^/]++)(*:1909)|delivered\\-order/(?|([^/]++)(*:1946)|show/([^/]++)/([^/]++)(*:1977))|address/(?|([^/]++)(*:2006)|show/([^/]++)/([^/]++)(*:2037)|([^/]++)(?|(*:2057)|/([^/]++)(?|(*:2078)))))|ining\\-table/(?|show/([^/]++)(*:2120)|([^/]++)(?|(*:2140))|export(*:2156)))|ad(?|vertisers/(?|show/([^/]++)(*:2198)|([^/]++)(?|(*:2218))|export(*:2234)|change\\-(?|password/([^/]++)(*:2271)|image/([^/]++)(*:2294))|my\\-order/([^/]++)(*:2322)|delivered\\-order/(?|([^/]++)(*:2359)|show/([^/]++)/([^/]++)(*:2390))|address/(?|([^/]++)(*:2419)|show/([^/]++)/([^/]++)(*:2450)|([^/]++)(?|(*:2470)|/([^/]++)(?|(*:2491)))))|ministrator/(?|show/([^/]++)(*:2532)|([^/]++)(?|(*:2552))|export(*:2568)|change\\-(?|password/([^/]++)(*:2605)|image/([^/]++)(*:2628))|my\\-order/([^/]++)(*:2656)|address/(?|([^/]++)(*:2684)|show/([^/]++)/([^/]++)(*:2715)|([^/]++)(?|(*:2735)|/([^/]++)(?|(*:2756))))))|o(?|ffer/(?|show/([^/]++)(*:2795)|([^/]++)(?|(*:2815))|export(*:2831)|change\\-image/([^/]++)(*:2862)|item/([^/]++)(?|(*:2887)|/([^/]++)(*:2905)))|nline\\-order/(?|show/([^/]++)(*:2945)|([^/]++)(*:2962)|export(*:2977)|change\\-(?|status/([^/]++)(*:3012)|payment\\-status/([^/]++)(*:3045))|select\\-delivery\\-boy/([^/]++)(*:3085)))|item/(?|show/([^/]++)(*:3117)|([^/]++)(?|(*:3137))|change\\-image/([^/]++)(*:3169)|ex(?|port(*:3187)|tra/([^/]++)(?|(*:3211)|/(?|([^/]++)(?|(*:3235))|show/([^/]++)(*:3258))))|variation/(?|([^/]++)(*:3291)|group\\-by\\-attribute/([^/]++)(*:3329)|([^/]++)(?|(*:3349)|/(?|([^/]++)(?|(*:3373))|show/([^/]++)(*:3396))))|addon/([^/]++)(?|(*:3425)|/([^/]++)(*:3443)))|p(?|os\\-order/(?|show/([^/]++)(*:3484)|([^/]++)(*:3501)|export(*:3516)|change\\-(?|status/([^/]++)(*:3551)|payment\\-status/([^/]++)(*:3584)))|ush\\-notification/(?|show/([^/]++)(*:3629)|([^/]++)(*:3646)|export(*:3661)))|table\\-order/(?|show/([^/]++)(*:3701)|([^/]++)(*:3718)|export(*:3733)|change\\-(?|status/([^/]++)(*:3768)|payment\\-status/([^/]++)(*:3801))|token\\-create/([^/]++)(*:3833)))|frontend/(?|page/(?|show/([^/]++)(*:3877)|page\\-info/([^/]++)(*:3905))|address/(?|show/([^/]++)(*:3939)|([^/]++)(?|(*:3959)))|branch/show/([^/]++)(*:3990)|language/show/([^/]++)(*:4021)|o(?|rder/(?|show/([^/]++)(*:4055)|change\\-status/([^/]++)(*:4087))|ffer/show/([^/]++)(*:4115))|item\\-category/show/([^/]++)(*:4153)|message/(?|show/([^/]++)(*:4186)|([^/]++)(?|(*:4206)))|country\\-code/show/([^/]++)(*:4244)|delivery\\-boy\\-order/(?|show/([^/]++)(*:4290)|change\\-status/([^/]++)(*:4322)))|table/(?|item\\-category/show/([^/]++)(*:4370)|dining\\-(?|table/show/([^/]++)(*:4409)|order/show/([^/]++)(*:4437))))|/payment/(?|([^/]++)/(?|pay(?|(*:4479))|([^/]++)/(?|success(*:4508)|fail(*:4521)|cancel(*:4536)))|successful/([^/]++)(*:4566)))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bkash-serach',
          ),
          1 => 
          array (
            0 => 'trxID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      164 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.currency.generated::oIXYxE7W6n9VvhTy',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.currency.generated::jHE4peIClFfC0Cop',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.currency.generated::bRVbsKhi5Mcl6e0G',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.tax.generated::Yvd8j5JDgXeTC1Qm',
          ),
          1 => 
          array (
            0 => 'tax',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      235 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.tax.generated::s6Uq8pFCngh5X6JC',
          ),
          1 => 
          array (
            0 => 'tax',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.tax.generated::AXkPlvpiN6ce1w8k',
          ),
          1 => 
          array (
            0 => 'tax',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.time-slot.generated::wjpucOA29wgeZFaF',
          ),
          1 => 
          array (
            0 => 'timeSlot',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      306 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.item-category.generated::UZnGsEaeAyCFHvSS',
          ),
          1 => 
          array (
            0 => 'itemCategory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.item-category.generated::RHTQaHcCU6YcTgfv',
          ),
          1 => 
          array (
            0 => 'itemCategory',
          ),
          2 => 
          array (
            'POST' => 0,
            'PUT' => 1,
            'PATCH' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.item-category.generated::h9dpjlK6clmfCJR1',
          ),
          1 => 
          array (
            0 => 'itemCategory',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.item-attribute.generated::BWOmcNV9TW4cmmAi',
          ),
          1 => 
          array (
            0 => 'itemAttribute',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      380 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.item-attribute.generated::4Yzc889KYwZVNZHd',
          ),
          1 => 
          array (
            0 => 'itemAttribute',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.item-attribute.generated::grEr21GondLlsk0u',
          ),
          1 => 
          array (
            0 => 'itemAttribute',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      414 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.slider.generated::d0KD6wqDwQDJTWWF',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      433 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.slider.generated::079vDRSj6jcRT53X',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'POST' => 0,
            'PUT' => 1,
            'PATCH' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.slider.generated::nJKb85figXVZf3nG',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      466 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.branch.generated::foClbWDLSVcxyRYY',
          ),
          1 => 
          array (
            0 => 'branch',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.branch.generated::oOXY2wUcCtCwLdl6',
          ),
          1 => 
          array (
            0 => 'branch',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.branch.generated::rxMe8FBt3eXkmjPj',
          ),
          1 => 
          array (
            0 => 'branch',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      526 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.menu-template.generated::SLSLSHkypx7y2Kez',
          ),
          1 => 
          array (
            0 => 'menuTemplate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.menu-template.generated::xApJbMpoJEMZMVM8',
          ),
          1 => 
          array (
            0 => 'menuTemplate',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.menu-template.generated::gYxPKzc0UhvC2ARp',
          ),
          1 => 
          array (
            0 => 'menuTemplate',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      579 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.page.generated::SmaJoCBJhiSHhwlQ',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      598 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.page.generated::Imz9SDbtjKuTX45y',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'POST' => 0,
            'PUT' => 1,
            'PATCH' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.page.generated::UNhebgtN19WeFF6f',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      629 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.permission.',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.permission.generated::hlHNw9xSyy9hOoXX',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      667 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.analytic.generated::qwvqcl6RCFLrPuBh',
          ),
          1 => 
          array (
            0 => 'analytic',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.analytic.generated::ZLZz5DaGtecym6KY',
          ),
          1 => 
          array (
            0 => 'analytic',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.analytic.generated::w2WAxXZrKDTE7BZ7',
          ),
          1 => 
          array (
            0 => 'analytic',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.analytic-section.',
          ),
          1 => 
          array (
            0 => 'analytic',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.analytic-section.generated::dt7TgDh9FtkRg0w2',
          ),
          1 => 
          array (
            0 => 'analytic',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      737 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.analytic-section.generated::IvA3OTznngynK45x',
          ),
          1 => 
          array (
            0 => 'analytic',
            1 => 'analyticSection',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.analytic-section.generated::ZZkQ6qwjM4leTg7G',
          ),
          1 => 
          array (
            0 => 'analytic',
            1 => 'analyticSection',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      769 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.role.generated::ur3Q0eSCMl1CCeDc',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      788 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.role.generated::EBIYRhJcqNSn0vG3',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.role.generated::5KFqxkaP9H9dqRPU',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      823 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.language.generated::rAW75pPdAx7VtUt7',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      846 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.language.generated::IUGRM8qttKNOcX9A',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'POST' => 0,
            'PUT' => 1,
            'PATCH' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.language.generated::STfuPmyvwAFk4sao',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.language.generated::QyMBBijYUG0am3FV',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      904 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.language.generated::9SKo4y5px3644qCz',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      943 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::fkiX7unqr8iwZdYG',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      962 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::4gF1RGIWlFbYidZG',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'POST' => 0,
            'PUT' => 1,
            'PATCH' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::BDBFK2lEhGQD6MCa',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      998 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::2mp5m3zYCrN8JQzC',
          ),
          1 => 
          array (
            0 => 'branch',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1027 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::xSjwmOqTyfVnx4Ea',
          ),
          1 => 
          array (
            0 => 'branch',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::URIi2xy2zl0aHeK5',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1080 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::3gLQKKtpEdHfWCjT',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::IuT7g7lYNgSf4Sd7',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::wRBIk39WjutL7Kda',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1159 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::ALVxiuT6DC3pXPj2',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::W3bHvh9uhCPyA1MJ',
          ),
          1 => 
          array (
            0 => 'customer',
            1 => 'address',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1210 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::Bc2FfQvodfEka5g7',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1231 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::zzDSRBw3pjpgkWfp',
          ),
          1 => 
          array (
            0 => 'customer',
            1 => 'address',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::RZqONlFvrOfyo0rg',
          ),
          1 => 
          array (
            0 => 'customer',
            1 => 'address',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.generated::XsZYA4Co4JgGXeTG',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1289 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.generated::qOVdQNhmTiKXMzv6',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'POST' => 0,
            'PUT' => 1,
            'PATCH' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.generated::ShmV3iWLF99MRK1L',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1305 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.generated::PmDUSu0WjPmDlJn2',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1339 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country-code.generated::2wbiWlJE5EUNC6Ht',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1385 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.my-order.',
          ),
          1 => 
          array (
            0 => 'user',
            1 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1417 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.message.generated::lBZaBaIsYIEc0MMr',
          ),
          1 => 
          array (
            0 => 'message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.message.generated::pKBgj4Qx3L1VYmoI',
          ),
          1 => 
          array (
            0 => 'message',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.message.generated::yPSlviVqce03cJu0',
          ),
          1 => 
          array (
            0 => 'message',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1479 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.message.generated::UT60c39UYUrhkY7n',
          ),
          1 => 
          array (
            0 => 'message',
            1 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1515 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.employee.generated::PkBYiyYDvJr5p73n',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1535 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.employee.generated::iFcBGWzM6FnrH9M0',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.employee.generated::JCv0BNLTMo1FFfE4',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.employee.generated::5HHrFdn7TPc5DsST',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1588 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.employee.generated::RGDF6pp16bZqMPmI',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1611 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.employee.generated::09OVFjvO1bKvIIZK',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1639 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.employee.generated::aErJEXxylOAUGT6b',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1667 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.employee.generated::OmnbstlNdMlHdPet',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.employee.generated::XqaBgSJuF2gjc4QQ',
          ),
          1 => 
          array (
            0 => 'employee',
            1 => 'address',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1718 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.employee.generated::UfS1ZT55Qjj71qM9',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1739 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.employee.generated::KoRbySl7H47jYQYz',
          ),
          1 => 
          array (
            0 => 'employee',
            1 => 'address',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.employee.generated::bpyfrdL5ZVEt0m8r',
          ),
          1 => 
          array (
            0 => 'employee',
            1 => 'address',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1785 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivery-boy.generated::9adc0ErA1b8kH1HB',
          ),
          1 => 
          array (
            0 => 'deliveryBoy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1805 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivery-boy.generated::dfNpSWNX3DqxFQH8',
          ),
          1 => 
          array (
            0 => 'deliveryBoy',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivery-boy.generated::c3r0mCfR55nuKS9A',
          ),
          1 => 
          array (
            0 => 'deliveryBoy',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1821 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivery-boy.generated::qPCb9q3PHUcoQQl8',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivery-boy.generated::DFD3MJNGcgFPR31e',
          ),
          1 => 
          array (
            0 => 'deliveryBoy',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1881 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivery-boy.generated::Ud2Tlq9YEikkgz29',
          ),
          1 => 
          array (
            0 => 'deliveryBoy',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1909 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivery-boy.generated::m8wfoq721qcE7vVU',
          ),
          1 => 
          array (
            0 => 'deliveryBoy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1946 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivery-boy.generated::WYl6PqT7JjdZB6VT',
          ),
          1 => 
          array (
            0 => 'deliveryBoy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1977 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivery-boy.generated::1oCxp1BRjMWAOegG',
          ),
          1 => 
          array (
            0 => 'deliveryBoy',
            1 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2006 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivery-boy.generated::K5IPT2C60V326pZo',
          ),
          1 => 
          array (
            0 => 'deliveryBoy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2037 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivery-boy.generated::f90J4yY5KHCuMNlv',
          ),
          1 => 
          array (
            0 => 'deliveryBoy',
            1 => 'address',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2057 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivery-boy.generated::LuBBo8u4kue57P6e',
          ),
          1 => 
          array (
            0 => 'deliveryBoy',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2078 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivery-boy.generated::WYx47UU1ev6Gbn53',
          ),
          1 => 
          array (
            0 => 'deliveryBoy',
            1 => 'address',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delivery-boy.generated::lT5UPtZRnYE0IqtZ',
          ),
          1 => 
          array (
            0 => 'deliveryBoy',
            1 => 'address',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2120 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dining-table.generated::aLvSvTFiBBbkUtYN',
          ),
          1 => 
          array (
            0 => 'diningTable',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dining-table.generated::wneu059achm0B33J',
          ),
          1 => 
          array (
            0 => 'diningTable',
          ),
          2 => 
          array (
            'POST' => 0,
            'PUT' => 1,
            'PATCH' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dining-table.generated::EWH6k0sVLMMO5jxk',
          ),
          1 => 
          array (
            0 => 'diningTable',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dining-table.generated::p8BWaSU87ndaLAWW',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisers.generated::uV0jYAJP0W6qLvSn',
          ),
          1 => 
          array (
            0 => 'advertisers',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisers.generated::ZMZoWgrzrpbbB87U',
          ),
          1 => 
          array (
            0 => 'advertisers',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisers.generated::cMi5YyYJG0xyokzb',
          ),
          1 => 
          array (
            0 => 'advertisers',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2234 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisers.generated::lFa98DdYk52KSIXE',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2271 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisers.generated::Sl9fmrGsCMBYPRqh',
          ),
          1 => 
          array (
            0 => 'advertisers',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisers.generated::NGYLljCnfzZXdTmp',
          ),
          1 => 
          array (
            0 => 'advertisers',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2322 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisers.generated::IjtkThZWOQOzMPQR',
          ),
          1 => 
          array (
            0 => 'advertisers',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2359 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisers.generated::ZbdZ2QiFzklB7mUH',
          ),
          1 => 
          array (
            0 => 'advertisers',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2390 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisers.generated::rpLsKmKXl62lJukB',
          ),
          1 => 
          array (
            0 => 'advertisers',
            1 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisers.generated::sN6cMyw4JqZshMvv',
          ),
          1 => 
          array (
            0 => 'advertisers',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2450 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisers.generated::FKAxmnXXZMi3FYRn',
          ),
          1 => 
          array (
            0 => 'advertisers',
            1 => 'address',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2470 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisers.generated::2bqStXzcMWWd7GLH',
          ),
          1 => 
          array (
            0 => 'advertisers',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisers.generated::OpXBJarWmcEybhM8',
          ),
          1 => 
          array (
            0 => 'advertisers',
            1 => 'address',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisers.generated::ks9v7PHjhsMikxnI',
          ),
          1 => 
          array (
            0 => 'advertisers',
            1 => 'address',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2532 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.administrator.generated::fzXPaiL4zyi5nGHn',
          ),
          1 => 
          array (
            0 => 'administrator',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2552 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.administrator.generated::CoAvEbPFcVAZiVHy',
          ),
          1 => 
          array (
            0 => 'administrator',
          ),
          2 => 
          array (
            'POST' => 0,
            'PUT' => 1,
            'PATCH' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.administrator.generated::5onLDycBlluHPbwf',
          ),
          1 => 
          array (
            0 => 'administrator',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2568 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.administrator.generated::Cgy6bZS30nTxHW5J',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2605 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.administrator.generated::GTaBN3VrLuOQnJxN',
          ),
          1 => 
          array (
            0 => 'administrator',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.administrator.generated::KYEFF22CRDoAjDED',
          ),
          1 => 
          array (
            0 => 'administrator',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2656 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.administrator.generated::dAn4AMMqpmjOKo9r',
          ),
          1 => 
          array (
            0 => 'administrator',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2684 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.administrator.generated::7NG4XROCdfLALIOb',
          ),
          1 => 
          array (
            0 => 'administrator',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2715 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.administrator.generated::dBL2v9RxJxV8Eyvq',
          ),
          1 => 
          array (
            0 => 'administrator',
            1 => 'address',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2735 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.administrator.generated::WcVYpKxispZp3bAZ',
          ),
          1 => 
          array (
            0 => 'administrator',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2756 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.administrator.generated::ZImNVWd7I20iT4lI',
          ),
          1 => 
          array (
            0 => 'administrator',
            1 => 'address',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.administrator.generated::32pfIarTO8QfufKL',
          ),
          1 => 
          array (
            0 => 'administrator',
            1 => 'address',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2795 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.offer.generated::sAkmV7DxwvinSWif',
          ),
          1 => 
          array (
            0 => 'offer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2815 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.offer.generated::fh8QVuxUaCghhNR1',
          ),
          1 => 
          array (
            0 => 'offer',
          ),
          2 => 
          array (
            'POST' => 0,
            'PUT' => 1,
            'PATCH' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.offer.generated::klDxu9KqFI9Bfl7V',
          ),
          1 => 
          array (
            0 => 'offer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2831 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.offer.generated::ZecVMqIXC6MBNMIw',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.offer.generated::4zsHf5bSquZ0OtHD',
          ),
          1 => 
          array (
            0 => 'offer',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2887 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.offer.generated::ZEW7zwDSyyA8m73t',
          ),
          1 => 
          array (
            0 => 'offer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.offer.generated::QsVkkbPIUweJfxXN',
          ),
          1 => 
          array (
            0 => 'offer',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2905 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.offer.generated::IcUUWSNSS0MhH6u7',
          ),
          1 => 
          array (
            0 => 'offer',
            1 => 'offerItem',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2945 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.onlineOrder.generated::ZarIivj18ROXc7UR',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2962 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.onlineOrder.generated::GKRCGOVVVaZ4dbmZ',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2977 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.onlineOrder.generated::eWZRUIrQTMpmpVQM',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3012 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.onlineOrder.generated::CmaZ8gCcyRQCyjua',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3045 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.onlineOrder.generated::IdsDhLIcu97czEjR',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3085 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.onlineOrder.generated::3Bw8czS2wUb3JRQl',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::MgNF8WcZQkWLKDwT',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::26YJdtNMKuNMw9Ky',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
            'PUT' => 1,
            'PATCH' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::uVD36Cte5gHyHCJX',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::TUXZG2LZHoYLfxIP',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::FNEgmlJn4xSDTjtc',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::vMmeTag7v0lmhhic',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::wj6njmLobFSlntvs',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3235 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::Pds8vt5REwxPrQ2q',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'itemExtra',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::8jwg9wodWAPD45iU',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'itemExtra',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3258 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::0tdD5FEeY1DwY2kM',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'itemExtra',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::kbyw9QJ3nT5t8HsQ',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::HUyVGS7Lxcyb9J2X',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3349 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::6eVls3jC5zbwo7E8',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::PuPwG5YibBBfKLxv',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'itemVariation',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::L1VtLvNJeiN2pSFy',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'itemVariation',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3396 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::IpTqrus9GPwTzWgv',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'itemVariation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::g4RTKpddQjiat0lp',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::jUuK4GyJaGPeuKC3',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3443 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.generated::ZBZ3JfgXNS0GWowk',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'itemAddon',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3484 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posOrder.generated::kL2vTwHoZjKxINRi',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3501 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posOrder.generated::59x07o55jDl2Qrw7',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3516 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posOrder.generated::5Emkul1DjRFC4jei',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posOrder.generated::MkSk9jWHwuHXJYXn',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posOrder.generated::0E3pdW4fZEb3ctfW',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3629 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.push-notification.generated::cjTorSVa2HXD7MPC',
          ),
          1 => 
          array (
            0 => 'pushNotification',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3646 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.push-notification.generated::vE9Wlvj5L7JJB2K0',
          ),
          1 => 
          array (
            0 => 'pushNotification',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3661 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.push-notification.generated::NpkTMqVNlEZwyMds',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tableOrder.generated::A31XV8I5uYVW3M8e',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3718 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tableOrder.generated::zjyWvPi5N3tl3tUl',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3733 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tableOrder.generated::zjk58nT8jZIFYQuz',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tableOrder.generated::O89qypGmlvMdsghj',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3801 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tableOrder.generated::FC1rBoSPxCwitg7a',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3833 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tableOrder.generated::8rt4Oe52d5XFgjSO',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3877 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.page.generated::hjoQzbwmqKZXlMN3',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3905 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.page.generated::4lVoIJioXCa7gZf3',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3939 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.address.generated::ptryGutideQiPNiR',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3959 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.address.generated::3f7T6hlThPQZc1bo',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.address.generated::gq52qci4CavW5Rfw',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3990 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.branch.generated::6JkKwg8EmJE4vKAC',
          ),
          1 => 
          array (
            0 => 'branch',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4021 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.language.generated::p9rumZqIhQRhOLkC',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4055 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.order.generated::ViZ1zy89uGWVMM8k',
          ),
          1 => 
          array (
            0 => 'frontendOrder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4087 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.order.generated::3dZSAYZqtWA1OTYB',
          ),
          1 => 
          array (
            0 => 'frontendOrder',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.offer.generated::NsFHE9jRhaBXSeuW',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.item-category.generated::rs3kG21KB59HowbR',
          ),
          1 => 
          array (
            0 => 'itemCategory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.message.generated::Gnld0I9iv0W2P5nF',
          ),
          1 => 
          array (
            0 => 'message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4206 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.message.generated::bpdTE7KK2cJrLUBq',
          ),
          1 => 
          array (
            0 => 'message',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.message.generated::COUUxLorPsgD9Yge',
          ),
          1 => 
          array (
            0 => 'message',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.country-code.generated::FBnmcWOqawdFc54q',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.delivery-boy-order.generated::XqBQLJ5ujXrNaTLt',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4322 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.delivery-boy-order.generated::5rBiOOve0rg9MGjQ',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'table.item-category.generated::KooRSE6maxKtfBMn',
          ),
          1 => 
          array (
            0 => 'itemCategory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4409 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'table.dining-table.generated::OfaXVNxFF9ibDslV',
          ),
          1 => 
          array (
            0 => 'frontendDiningTable',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'table.dining-order.',
          ),
          1 => 
          array (
            0 => 'frontendOrder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4479 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.index',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payment.store',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4508 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.success',
          ),
          1 => 
          array (
            0 => 'paymentGateway',
            1 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4521 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.fail',
          ),
          1 => 
          array (
            0 => 'paymentGateway',
            1 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4536 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.cancel',
          ),
          1 => 
          array (
            0 => 'paymentGateway',
            1 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4566 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.successful',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JVDZ3DhiNK7of18h' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bkash/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BkashTokenizePaymentController@index',
        'controller' => 'App\\Http\\Controllers\\BkashTokenizePaymentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JVDZ3DhiNK7of18h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bkash-create-payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bkash/create-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BkashTokenizePaymentController@createPayment',
        'controller' => 'App\\Http\\Controllers\\BkashTokenizePaymentController@createPayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bkash-create-payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bkash-callBack' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bkash/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BkashTokenizePaymentController@callBack',
        'controller' => 'App\\Http\\Controllers\\BkashTokenizePaymentController@callBack',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bkash-callBack',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bkash-serach' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bkash/search/{trxID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BkashTokenizePaymentController@searchTnx',
        'controller' => 'App\\Http\\Controllers\\BkashTokenizePaymentController@searchTnx',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bkash-serach',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bkash-refund' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bkash/refund',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BkashTokenizePaymentController@refund',
        'controller' => 'App\\Http\\Controllers\\BkashTokenizePaymentController@refund',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bkash-refund',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bkash-refund-status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bkash/refund/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BkashTokenizePaymentController@refundStatus',
        'controller' => 'App\\Http\\Controllers\\BkashTokenizePaymentController@refundStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bkash-refund-status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:301:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:83:"function () {
    return \\response()->json([\'errors\' => \'unauthenticated\'], 401);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009310000000000000000";}";s:4:"hash";s:44:"WoeDh3ENa4YbmQrdwMrT6R/5EtjRYLTf+p8JVQ7zLws=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ooeWQDiuN2Nv3q1c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'api/refresh-token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RefreshTokenController@refreshToken',
        'controller' => 'App\\Http\\Controllers\\Auth\\RefreshTokenController@refreshToken',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ooeWQDiuN2Nv3q1c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'as' => 'auth.',
        'namespace' => 'Auth',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.generated::UoB1rJYsC4F6C3Zo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/login-mobile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@loginMobile',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@loginMobile',
        'as' => 'auth.generated::UoB1rJYsC4F6C3Zo',
        'namespace' => 'Auth',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.generated::mpUGZOk59vhcv1Sr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/mobile-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@findUserByMobile',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@findUserByMobile',
        'as' => 'auth.generated::mpUGZOk59vhcv1Sr',
        'namespace' => 'Auth',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.forgot-password.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@forgotPassword',
        'as' => 'auth.forgot-password.',
        'namespace' => 'Auth',
        'prefix' => 'api/auth/forgot-password',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.forgot-password.generated::MyWkVnl75Tt7PQd5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/forgot-password/verify-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@verifyCode',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@verifyCode',
        'as' => 'auth.forgot-password.generated::MyWkVnl75Tt7PQd5',
        'namespace' => 'Auth',
        'prefix' => 'api/auth/forgot-password',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.forgot-password.generated::DjroFwJLUj3ABuh4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/forgot-password/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@resetPassword',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@resetPassword',
        'as' => 'auth.forgot-password.generated::DjroFwJLUj3ABuh4',
        'namespace' => 'Auth',
        'prefix' => 'api/auth/forgot-password',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.signup.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/signup/otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SignupController@otp',
        'controller' => 'App\\Http\\Controllers\\Auth\\SignupController@otp',
        'as' => 'auth.signup.',
        'namespace' => 'Auth',
        'prefix' => 'api/auth/signup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.signup.generated::SyESffCI1rqgM7ln' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/signup/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SignupController@verify',
        'controller' => 'App\\Http\\Controllers\\Auth\\SignupController@verify',
        'as' => 'auth.signup.generated::SyESffCI1rqgM7ln',
        'namespace' => 'Auth',
        'prefix' => 'api/auth/signup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.signup.generated::OHScRzMqUXh8IEXV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/signup/verify-merchant',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SignupController@verifyMerchant',
        'controller' => 'App\\Http\\Controllers\\Auth\\SignupController@verifyMerchant',
        'as' => 'auth.signup.generated::OHScRzMqUXh8IEXV',
        'namespace' => 'Auth',
        'prefix' => 'api/auth/signup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.signup.generated::RsPYPxQEBUxMxSJh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/signup/verify-advertiser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SignupController@verifyAdvertiser',
        'controller' => 'App\\Http\\Controllers\\Auth\\SignupController@verifyAdvertiser',
        'as' => 'auth.signup.generated::RsPYPxQEBUxMxSJh',
        'namespace' => 'Auth',
        'prefix' => 'api/auth/signup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.signup.generated::pF8clkBVT0gfJJWm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/signup/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SignupController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\SignupController@register',
        'as' => 'auth.signup.generated::pF8clkBVT0gfJJWm',
        'namespace' => 'Auth',
        'prefix' => 'api/auth/signup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.signup.generated::Dj4dibHLBufzivHo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/signup/register-merchant',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SignupController@registerMerchant',
        'controller' => 'App\\Http\\Controllers\\Auth\\SignupController@registerMerchant',
        'as' => 'auth.signup.generated::Dj4dibHLBufzivHo',
        'namespace' => 'Auth',
        'prefix' => 'api/auth/signup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.signup.generated::GAe47SXZz17XprnM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/signup/register-advertiser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SignupController@registerAdvertiser',
        'controller' => 'App\\Http\\Controllers\\Auth\\SignupController@registerAdvertiser',
        'as' => 'auth.signup.generated::GAe47SXZz17XprnM',
        'namespace' => 'Auth',
        'prefix' => 'api/auth/signup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.signup.generated::EpCw42qMfNqLG5cq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/signup/register-offline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SignupController@registerOffline',
        'controller' => 'App\\Http\\Controllers\\Auth\\SignupController@registerOffline',
        'as' => 'auth.signup.generated::EpCw42qMfNqLG5cq',
        'namespace' => 'Auth',
        'prefix' => 'api/auth/signup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.guest-signup.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/guest-signup/otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\GuestSignupController@otp',
        'controller' => 'App\\Http\\Controllers\\Auth\\GuestSignupController@otp',
        'as' => 'auth.guest-signup.',
        'namespace' => 'Auth',
        'prefix' => 'api/auth/guest-signup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.guest-signup.generated::fh86YTcwhRHYTubm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/guest-signup/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\GuestSignupController@verify',
        'controller' => 'App\\Http\\Controllers\\Auth\\GuestSignupController@verify',
        'as' => 'auth.guest-signup.generated::fh86YTcwhRHYTubm',
        'namespace' => 'Auth',
        'prefix' => 'api/auth/guest-signup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.generated::k2pieJmhBO7V6EKP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
          5 => 'verify.api',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'as' => 'auth.generated::k2pieJmhBO7V6EKP',
        'namespace' => 'Auth',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.generated::kUlxLVRrrc6Wj4PX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/delete-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
          5 => 'verify.api',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\DeactivateController@deleteAccount',
        'controller' => 'App\\Http\\Controllers\\Auth\\DeactivateController@deleteAccount',
        'as' => 'auth.generated::kUlxLVRrrc6Wj4PX',
        'namespace' => 'Auth',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\ProfileController@profile',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ProfileController@profile',
        'as' => 'profile.',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile.generated::Uh9WPTcA8IZ3GQgH' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\ProfileController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ProfileController@update',
        'as' => 'profile.generated::Uh9WPTcA8IZ3GQgH',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile.generated::rSURI9ABUVYFq3E3' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/profile/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\ProfileController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ProfileController@changePassword',
        'as' => 'profile.generated::rSURI9ABUVYFq3E3',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile.generated::Lx9AvfefRVbtydV8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profile/change-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\ProfileController@changeImage',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ProfileController@changeImage',
        'as' => 'profile.generated::Lx9AvfefRVbtydV8',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.default-access.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/default-access',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DefaultAccessController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DefaultAccessController@index',
        'as' => 'admin.default-access.',
        'namespace' => NULL,
        'prefix' => 'api/admin/default-access',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.default-access.generated::oCwcRa032ug78ND1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/default-access',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DefaultAccessController@storeOrUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\DefaultAccessController@storeOrUpdate',
        'as' => 'admin.default-access.generated::oCwcRa032ug78ND1',
        'namespace' => NULL,
        'prefix' => 'api/admin/default-access',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.company.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@index',
        'as' => 'admin.setting.company.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.company.generated::Z9SqnwFnoN2jjphA' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyController@update',
        'as' => 'admin.setting.company.generated::Z9SqnwFnoN2jjphA',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.site.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/site',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SiteController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SiteController@index',
        'as' => 'admin.setting.site.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.site.generated::ipOHJmZwFgXETxin' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/site',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SiteController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SiteController@update',
        'as' => 'admin.setting.site.generated::ipOHJmZwFgXETxin',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.order-setup.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/order-setup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderSetupController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderSetupController@index',
        'as' => 'admin.setting.order-setup.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/order-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.order-setup.generated::P115KdgzrOXTayLz' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/order-setup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderSetupController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderSetupController@update',
        'as' => 'admin.setting.order-setup.generated::P115KdgzrOXTayLz',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/order-setup',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.mail.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MailController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\MailController@index',
        'as' => 'admin.setting.mail.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/mail',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.mail.generated::o3EADEi9vNHEfGCh' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MailController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\MailController@update',
        'as' => 'admin.setting.mail.generated::o3EADEi9vNHEfGCh',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/mail',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.currency.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CurrencyController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CurrencyController@index',
        'as' => 'admin.setting.currency.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/currency',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.currency.generated::oIXYxE7W6n9VvhTy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/currency/show/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CurrencyController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CurrencyController@show',
        'as' => 'admin.setting.currency.generated::oIXYxE7W6n9VvhTy',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/currency',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.currency.generated::7H902X3X5xom01JS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/setting/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CurrencyController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CurrencyController@store',
        'as' => 'admin.setting.currency.generated::7H902X3X5xom01JS',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/currency',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.currency.generated::jHE4peIClFfC0Cop' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/currency/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CurrencyController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CurrencyController@update',
        'as' => 'admin.setting.currency.generated::jHE4peIClFfC0Cop',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/currency',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.currency.generated::bRVbsKhi5Mcl6e0G' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/setting/currency/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CurrencyController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CurrencyController@destroy',
        'as' => 'admin.setting.currency.generated::bRVbsKhi5Mcl6e0G',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/currency',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.tax.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/tax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@index',
        'as' => 'admin.setting.tax.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/tax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.tax.generated::Yvd8j5JDgXeTC1Qm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/tax/show/{tax}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@show',
        'as' => 'admin.setting.tax.generated::Yvd8j5JDgXeTC1Qm',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/tax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.tax.generated::I5vk4qcV2bW4scyz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/setting/tax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@store',
        'as' => 'admin.setting.tax.generated::I5vk4qcV2bW4scyz',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/tax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.tax.generated::s6Uq8pFCngh5X6JC' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/tax/{tax}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@update',
        'as' => 'admin.setting.tax.generated::s6Uq8pFCngh5X6JC',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/tax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.tax.generated::AXkPlvpiN6ce1w8k' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/setting/tax/{tax}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@destroy',
        'as' => 'admin.setting.tax.generated::AXkPlvpiN6ce1w8k',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/tax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.item-category.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/item-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCategoryController@index',
        'as' => 'admin.setting.item-category.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/item-category',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.item-category.generated::UZnGsEaeAyCFHvSS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/item-category/show/{itemCategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCategoryController@show',
        'as' => 'admin.setting.item-category.generated::UZnGsEaeAyCFHvSS',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/item-category',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.item-category.generated::QkLxI9cfVLZBbjLi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/setting/item-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCategoryController@store',
        'as' => 'admin.setting.item-category.generated::QkLxI9cfVLZBbjLi',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/item-category',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.item-category.generated::RHTQaHcCU6YcTgfv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'PUT',
        2 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/item-category/{itemCategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCategoryController@update',
        'as' => 'admin.setting.item-category.generated::RHTQaHcCU6YcTgfv',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/item-category',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.item-category.generated::h9dpjlK6clmfCJR1' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/setting/item-category/{itemCategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCategoryController@destroy',
        'as' => 'admin.setting.item-category.generated::h9dpjlK6clmfCJR1',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/item-category',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.item-attribute.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/item-attribute',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemAttributeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemAttributeController@index',
        'as' => 'admin.setting.item-attribute.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/item-attribute',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.item-attribute.generated::BWOmcNV9TW4cmmAi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/item-attribute/show/{itemAttribute}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemAttributeController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemAttributeController@show',
        'as' => 'admin.setting.item-attribute.generated::BWOmcNV9TW4cmmAi',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/item-attribute',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.item-attribute.generated::w1QeN5b3sbM5IYjg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/setting/item-attribute',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemAttributeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemAttributeController@store',
        'as' => 'admin.setting.item-attribute.generated::w1QeN5b3sbM5IYjg',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/item-attribute',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.item-attribute.generated::4Yzc889KYwZVNZHd' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/item-attribute/{itemAttribute}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemAttributeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemAttributeController@update',
        'as' => 'admin.setting.item-attribute.generated::4Yzc889KYwZVNZHd',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/item-attribute',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.item-attribute.generated::grEr21GondLlsk0u' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/setting/item-attribute/{itemAttribute}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemAttributeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemAttributeController@destroy',
        'as' => 'admin.setting.item-attribute.generated::grEr21GondLlsk0u',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/item-attribute',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.slider.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@index',
        'as' => 'admin.setting.slider.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.slider.generated::d0KD6wqDwQDJTWWF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/slider/show/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@show',
        'as' => 'admin.setting.slider.generated::d0KD6wqDwQDJTWWF',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.slider.generated::raio5aMiDjA9dj2b' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/setting/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@store',
        'as' => 'admin.setting.slider.generated::raio5aMiDjA9dj2b',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.slider.generated::079vDRSj6jcRT53X' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'PUT',
        2 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/slider/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@update',
        'as' => 'admin.setting.slider.generated::079vDRSj6jcRT53X',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.slider.generated::nJKb85figXVZf3nG' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/setting/slider/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SliderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SliderController@destroy',
        'as' => 'admin.setting.slider.generated::nJKb85figXVZf3nG',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.branch.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/branch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BranchController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BranchController@index',
        'as' => 'admin.setting.branch.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/branch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.branch.generated::foClbWDLSVcxyRYY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/branch/show/{branch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BranchController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\BranchController@show',
        'as' => 'admin.setting.branch.generated::foClbWDLSVcxyRYY',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/branch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.branch.generated::h9AajC2ygkOnfODM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/setting/branch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BranchController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\BranchController@store',
        'as' => 'admin.setting.branch.generated::h9AajC2ygkOnfODM',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/branch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.branch.generated::oOXY2wUcCtCwLdl6' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/branch/{branch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BranchController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BranchController@update',
        'as' => 'admin.setting.branch.generated::oOXY2wUcCtCwLdl6',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/branch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.branch.generated::rxMe8FBt3eXkmjPj' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/setting/branch/{branch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BranchController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\BranchController@destroy',
        'as' => 'admin.setting.branch.generated::rxMe8FBt3eXkmjPj',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/branch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.menu-section.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/menu-section',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuSectionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuSectionController@index',
        'as' => 'admin.setting.menu-section.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/menu-section',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.menu-template.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/menu-template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuTemplateController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuTemplateController@index',
        'as' => 'admin.setting.menu-template.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/menu-template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.menu-template.generated::SLSLSHkypx7y2Kez' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/menu-template/show/{menuTemplate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuTemplateController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuTemplateController@show',
        'as' => 'admin.setting.menu-template.generated::SLSLSHkypx7y2Kez',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/menu-template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.menu-template.generated::JYsAoJosymECiWhw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/setting/menu-template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuTemplateController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuTemplateController@store',
        'as' => 'admin.setting.menu-template.generated::JYsAoJosymECiWhw',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/menu-template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.menu-template.generated::xApJbMpoJEMZMVM8' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/menu-template/{menuTemplate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuTemplateController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuTemplateController@update',
        'as' => 'admin.setting.menu-template.generated::xApJbMpoJEMZMVM8',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/menu-template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.menu-template.generated::gYxPKzc0UhvC2ARp' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/setting/menu-template/{menuTemplate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuTemplateController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuTemplateController@destroy',
        'as' => 'admin.setting.menu-template.generated::gYxPKzc0UhvC2ARp',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/menu-template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.page.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageController@index',
        'as' => 'admin.setting.page.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/page',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.page.generated::SmaJoCBJhiSHhwlQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/page/show/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageController@show',
        'as' => 'admin.setting.page.generated::SmaJoCBJhiSHhwlQ',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/page',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.page.generated::p29uzxMk5ZxGa4r2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/setting/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageController@store',
        'as' => 'admin.setting.page.generated::p29uzxMk5ZxGa4r2',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/page',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.page.generated::Imz9SDbtjKuTX45y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'PUT',
        2 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/page/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageController@update',
        'as' => 'admin.setting.page.generated::Imz9SDbtjKuTX45y',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/page',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.page.generated::UNhebgtN19WeFF6f' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/setting/page/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageController@destroy',
        'as' => 'admin.setting.page.generated::UNhebgtN19WeFF6f',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/page',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.license.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/license',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LicenseController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\LicenseController@index',
        'as' => 'admin.setting.license.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/license',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.license.generated::wQUUNmIhUKHp2ahq' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/license',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LicenseController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LicenseController@update',
        'as' => 'admin.setting.license.generated::wQUUNmIhUKHp2ahq',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/license',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.theme.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/theme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ThemeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ThemeController@index',
        'as' => 'admin.setting.theme.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/theme',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.theme.generated::431VkMsAiD7gZX46' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/setting/theme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ThemeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ThemeController@update',
        'as' => 'admin.setting.theme.generated::431VkMsAiD7gZX46',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/theme',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.sms-gateway.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/sms-gateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SmsGatewayController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SmsGatewayController@index',
        'as' => 'admin.setting.sms-gateway.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/sms-gateway',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.sms-gateway.generated::Oej8prqfMi9aqWTB' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/sms-gateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SmsGatewayController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SmsGatewayController@update',
        'as' => 'admin.setting.sms-gateway.generated::Oej8prqfMi9aqWTB',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/sms-gateway',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.payment-gateway.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/payment-gateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@index',
        'as' => 'admin.setting.payment-gateway.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/payment-gateway',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.payment-gateway.generated::ESNqpOjvkGnNee6l' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/payment-gateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@update',
        'as' => 'admin.setting.payment-gateway.generated::ESNqpOjvkGnNee6l',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/payment-gateway',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.notification.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@index',
        'as' => 'admin.setting.notification.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.notification.generated::vosfL7Cjy2oElJJr' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@update',
        'as' => 'admin.setting.notification.generated::vosfL7Cjy2oElJJr',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.social-media.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/social-media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@index',
        'as' => 'admin.setting.social-media.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/social-media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.social-media.generated::M5q0M4onc3n9pgOC' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/social-media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@update',
        'as' => 'admin.setting.social-media.generated::M5q0M4onc3n9pgOC',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/social-media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.analytic.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/analytic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticController@index',
        'as' => 'admin.setting.analytic.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/analytic',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.analytic.generated::qwvqcl6RCFLrPuBh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/analytic/show/{analytic}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticController@show',
        'as' => 'admin.setting.analytic.generated::qwvqcl6RCFLrPuBh',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/analytic',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.analytic.generated::N8ObIjaShKxA9i0h' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/setting/analytic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticController@store',
        'as' => 'admin.setting.analytic.generated::N8ObIjaShKxA9i0h',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/analytic',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.analytic.generated::ZLZz5DaGtecym6KY' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/analytic/{analytic}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticController@update',
        'as' => 'admin.setting.analytic.generated::ZLZz5DaGtecym6KY',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/analytic',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.analytic.generated::w2WAxXZrKDTE7BZ7' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/setting/analytic/{analytic}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticController@destroy',
        'as' => 'admin.setting.analytic.generated::w2WAxXZrKDTE7BZ7',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/analytic',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.analytic-section.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/analytic-section/{analytic}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticSectionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticSectionController@index',
        'as' => 'admin.setting.analytic-section.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/analytic-section',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.analytic-section.generated::dt7TgDh9FtkRg0w2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/setting/analytic-section/{analytic}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticSectionController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticSectionController@store',
        'as' => 'admin.setting.analytic-section.generated::dt7TgDh9FtkRg0w2',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/analytic-section',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.analytic-section.generated::IvA3OTznngynK45x' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/analytic-section/{analytic}/{analyticSection}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticSectionController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticSectionController@update',
        'as' => 'admin.setting.analytic-section.generated::IvA3OTznngynK45x',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/analytic-section',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.analytic-section.generated::ZZkQ6qwjM4leTg7G' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/setting/analytic-section/{analytic}/{analyticSection}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AnalyticSectionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AnalyticSectionController@destroy',
        'as' => 'admin.setting.analytic-section.generated::ZZkQ6qwjM4leTg7G',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/analytic-section',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.otp.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OtpController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\OtpController@index',
        'as' => 'admin.setting.otp.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/otp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.otp.generated::YvR6xG9nh65yXFxZ' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OtpController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\OtpController@update',
        'as' => 'admin.setting.otp.generated::YvR6xG9nh65yXFxZ',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/otp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.role.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@index',
        'as' => 'admin.setting.role.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/role',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.role.generated::TCIHaKGFdizJyEmG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/setting/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@store',
        'as' => 'admin.setting.role.generated::TCIHaKGFdizJyEmG',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/role',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.role.generated::ur3Q0eSCMl1CCeDc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/role/show/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@show',
        'as' => 'admin.setting.role.generated::ur3Q0eSCMl1CCeDc',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/role',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.role.generated::EBIYRhJcqNSn0vG3' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/role/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@update',
        'as' => 'admin.setting.role.generated::EBIYRhJcqNSn0vG3',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/role',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.role.generated::5KFqxkaP9H9dqRPU' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/setting/role/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@destroy',
        'as' => 'admin.setting.role.generated::5KFqxkaP9H9dqRPU',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/role',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.permission.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/permission/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PermissionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PermissionController@index',
        'as' => 'admin.setting.permission.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/permission',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.permission.generated::hlHNw9xSyy9hOoXX' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/permission/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PermissionController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PermissionController@update',
        'as' => 'admin.setting.permission.generated::hlHNw9xSyy9hOoXX',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/permission',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.cookies.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/cookies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CookiesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CookiesController@index',
        'as' => 'admin.setting.cookies.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/cookies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.cookies.generated::2XjhafX5ZreOhTwE' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/cookies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CookiesController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CookiesController@update',
        'as' => 'admin.setting.cookies.generated::2XjhafX5ZreOhTwE',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/cookies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.time-slot.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/time-slot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TimeSlotController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TimeSlotController@index',
        'as' => 'admin.setting.time-slot.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/time-slot',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.time-slot.generated::Os8RlnSUVkPKfLv9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/setting/time-slot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TimeSlotController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\TimeSlotController@store',
        'as' => 'admin.setting.time-slot.generated::Os8RlnSUVkPKfLv9',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/time-slot',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.time-slot.generated::wjpucOA29wgeZFaF' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/setting/time-slot/{timeSlot}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TimeSlotController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\TimeSlotController@destroy',
        'as' => 'admin.setting.time-slot.generated::wjpucOA29wgeZFaF',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/time-slot',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.language.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@index',
        'as' => 'admin.setting.language.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/language',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.language.generated::aHgVnvy80NIv83bk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/setting/language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@store',
        'as' => 'admin.setting.language.generated::aHgVnvy80NIv83bk',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/language',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.language.generated::rAW75pPdAx7VtUt7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/language/show/{language}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@show',
        'as' => 'admin.setting.language.generated::rAW75pPdAx7VtUt7',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/language',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.language.generated::IUGRM8qttKNOcX9A' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'PUT',
        2 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/language/update/{language}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@update',
        'as' => 'admin.setting.language.generated::IUGRM8qttKNOcX9A',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/language',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.language.generated::STfuPmyvwAFk4sao' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/setting/language/{language}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@destroy',
        'as' => 'admin.setting.language.generated::STfuPmyvwAFk4sao',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/language',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.language.generated::QyMBBijYUG0am3FV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/language/file-list/{language}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@fileList',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@fileList',
        'as' => 'admin.setting.language.generated::QyMBBijYUG0am3FV',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/language',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
        'language' => 'code',
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.language.generated::9SKo4y5px3644qCz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/setting/language/file-text',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@fileText',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@fileText',
        'as' => 'admin.setting.language.generated::9SKo4y5px3644qCz',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/language',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.language.generated::3AiznfzD7cLIureZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/setting/language/file-text/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@fileTextStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@fileTextStore',
        'as' => 'admin.setting.language.generated::3AiznfzD7cLIureZ',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/language',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.notification-alert.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/setting/notification-alert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationAlertController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationAlertController@index',
        'as' => 'admin.setting.notification-alert.',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/notification-alert',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.notification-alert.generated::IBn6qnPU9YJ6ANf8' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/setting/notification-alert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationAlertController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationAlertController@update',
        'as' => 'admin.setting.notification-alert.generated::IBn6qnPU9YJ6ANf8',
        'namespace' => NULL,
        'prefix' => 'api/admin/setting/notification-alert',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subscriber.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/subscriber',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriberController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriberController@index',
        'as' => 'admin.subscriber.',
        'namespace' => NULL,
        'prefix' => 'api/admin/subscriber',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@index',
        'as' => 'admin.customer.',
        'namespace' => NULL,
        'prefix' => 'api/admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::4o5ffz7CPvqWcHPL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@store',
        'as' => 'admin.customer.generated::4o5ffz7CPvqWcHPL',
        'namespace' => NULL,
        'prefix' => 'api/admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::fkiX7unqr8iwZdYG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/customer/show/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@show',
        'as' => 'admin.customer.generated::fkiX7unqr8iwZdYG',
        'namespace' => NULL,
        'prefix' => 'api/admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::4gF1RGIWlFbYidZG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'PUT',
        2 => 'PATCH',
      ),
      'uri' => 'api/admin/customer/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@update',
        'as' => 'admin.customer.generated::4gF1RGIWlFbYidZG',
        'namespace' => NULL,
        'prefix' => 'api/admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::BDBFK2lEhGQD6MCa' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/customer/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@destroy',
        'as' => 'admin.customer.generated::BDBFK2lEhGQD6MCa',
        'namespace' => NULL,
        'prefix' => 'api/admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::2mp5m3zYCrN8JQzC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/customer/earn-points/{branch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@earnBurnPoints',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@earnBurnPoints',
        'as' => 'admin.customer.generated::2mp5m3zYCrN8JQzC',
        'namespace' => NULL,
        'prefix' => 'api/admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::xSjwmOqTyfVnx4Ea' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/customer/earn-promo-reward/{branch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@earnPromoReward',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@earnPromoReward',
        'as' => 'admin.customer.generated::xSjwmOqTyfVnx4Ea',
        'namespace' => NULL,
        'prefix' => 'api/admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::URIi2xy2zl0aHeK5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/customer/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@export',
        'as' => 'admin.customer.generated::URIi2xy2zl0aHeK5',
        'namespace' => NULL,
        'prefix' => 'api/admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::3gLQKKtpEdHfWCjT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/customer/change-password/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@changePassword',
        'as' => 'admin.customer.generated::3gLQKKtpEdHfWCjT',
        'namespace' => NULL,
        'prefix' => 'api/admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::IuT7g7lYNgSf4Sd7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/customer/change-image/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@changeImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@changeImage',
        'as' => 'admin.customer.generated::IuT7g7lYNgSf4Sd7',
        'namespace' => NULL,
        'prefix' => 'api/admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::wRBIk39WjutL7Kda' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/customer/my-order/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@myOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@myOrder',
        'as' => 'admin.customer.generated::wRBIk39WjutL7Kda',
        'namespace' => NULL,
        'prefix' => 'api/admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::ALVxiuT6DC3pXPj2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/customer/address/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerAddressController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerAddressController@index',
        'as' => 'admin.customer.generated::ALVxiuT6DC3pXPj2',
        'namespace' => NULL,
        'prefix' => 'api/admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::W3bHvh9uhCPyA1MJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/customer/address/show/{customer}/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerAddressController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerAddressController@show',
        'as' => 'admin.customer.generated::W3bHvh9uhCPyA1MJ',
        'namespace' => NULL,
        'prefix' => 'api/admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::Bc2FfQvodfEka5g7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/customer/address/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerAddressController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerAddressController@store',
        'as' => 'admin.customer.generated::Bc2FfQvodfEka5g7',
        'namespace' => NULL,
        'prefix' => 'api/admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::zzDSRBw3pjpgkWfp' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/customer/address/{customer}/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerAddressController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerAddressController@update',
        'as' => 'admin.customer.generated::zzDSRBw3pjpgkWfp',
        'namespace' => NULL,
        'prefix' => 'api/admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::RZqONlFvrOfyo0rg' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/customer/address/{customer}/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerAddressController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerAddressController@destroy',
        'as' => 'admin.customer.generated::RZqONlFvrOfyo0rg',
        'namespace' => NULL,
        'prefix' => 'api/admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.my-order.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/my-order/show/{user}/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MyOrderDetailsController@orderDetails',
        'controller' => 'App\\Http\\Controllers\\Admin\\MyOrderDetailsController@orderDetails',
        'as' => 'admin.my-order.',
        'namespace' => NULL,
        'prefix' => 'api/admin/my-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.my-order.generated::IMUjExarpVgy29gd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/billers/airtime-operators',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BillController@airtimeOperators',
        'controller' => 'App\\Http\\Controllers\\Admin\\BillController@airtimeOperators',
        'as' => 'admin.my-order.generated::IMUjExarpVgy29gd',
        'namespace' => NULL,
        'prefix' => 'api/admin/billers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.my-order.generated::b7Hvo1hTmI79N2pi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/billers/data-operators',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BillController@dataOperators',
        'controller' => 'App\\Http\\Controllers\\Admin\\BillController@dataOperators',
        'as' => 'admin.my-order.generated::b7Hvo1hTmI79N2pi',
        'namespace' => NULL,
        'prefix' => 'api/admin/billers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.my-order.generated::d8JYQCE7OLn0Imif' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/billers/buy-airtime',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BillController@buyAirtime',
        'controller' => 'App\\Http\\Controllers\\Admin\\BillController@buyAirtime',
        'as' => 'admin.my-order.generated::d8JYQCE7OLn0Imif',
        'namespace' => NULL,
        'prefix' => 'api/admin/billers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.my-order.generated::SBnsZEYmXKLlZdB0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/billers/buy-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BillController@buyData',
        'controller' => 'App\\Http\\Controllers\\Admin\\BillController@buyData',
        'as' => 'admin.my-order.generated::SBnsZEYmXKLlZdB0',
        'namespace' => NULL,
        'prefix' => 'api/admin/billers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.employee.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmployeeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmployeeController@index',
        'as' => 'admin.employee.',
        'namespace' => NULL,
        'prefix' => 'api/admin/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.employee.generated::zVgfG9u3yxvDN3Om' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmployeeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmployeeController@store',
        'as' => 'admin.employee.generated::zVgfG9u3yxvDN3Om',
        'namespace' => NULL,
        'prefix' => 'api/admin/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.employee.generated::PkBYiyYDvJr5p73n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/employee/show/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmployeeController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmployeeController@show',
        'as' => 'admin.employee.generated::PkBYiyYDvJr5p73n',
        'namespace' => NULL,
        'prefix' => 'api/admin/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.employee.generated::iFcBGWzM6FnrH9M0' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/employee/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmployeeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmployeeController@update',
        'as' => 'admin.employee.generated::iFcBGWzM6FnrH9M0',
        'namespace' => NULL,
        'prefix' => 'api/admin/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.employee.generated::JCv0BNLTMo1FFfE4' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/employee/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmployeeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmployeeController@destroy',
        'as' => 'admin.employee.generated::JCv0BNLTMo1FFfE4',
        'namespace' => NULL,
        'prefix' => 'api/admin/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.employee.generated::5HHrFdn7TPc5DsST' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/employee/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmployeeController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmployeeController@export',
        'as' => 'admin.employee.generated::5HHrFdn7TPc5DsST',
        'namespace' => NULL,
        'prefix' => 'api/admin/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.employee.generated::RGDF6pp16bZqMPmI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/employee/change-password/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmployeeController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmployeeController@changePassword',
        'as' => 'admin.employee.generated::RGDF6pp16bZqMPmI',
        'namespace' => NULL,
        'prefix' => 'api/admin/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.employee.generated::09OVFjvO1bKvIIZK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/employee/change-image/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmployeeController@changeImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmployeeController@changeImage',
        'as' => 'admin.employee.generated::09OVFjvO1bKvIIZK',
        'namespace' => NULL,
        'prefix' => 'api/admin/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.employee.generated::aErJEXxylOAUGT6b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/employee/my-order/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmployeeController@myOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmployeeController@myOrder',
        'as' => 'admin.employee.generated::aErJEXxylOAUGT6b',
        'namespace' => NULL,
        'prefix' => 'api/admin/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.employee.generated::OmnbstlNdMlHdPet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/employee/address/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmployeeAddressController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmployeeAddressController@index',
        'as' => 'admin.employee.generated::OmnbstlNdMlHdPet',
        'namespace' => NULL,
        'prefix' => 'api/admin/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.employee.generated::XqaBgSJuF2gjc4QQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/employee/address/show/{employee}/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmployeeAddressController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmployeeAddressController@show',
        'as' => 'admin.employee.generated::XqaBgSJuF2gjc4QQ',
        'namespace' => NULL,
        'prefix' => 'api/admin/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.employee.generated::UfS1ZT55Qjj71qM9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/employee/address/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmployeeAddressController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmployeeAddressController@store',
        'as' => 'admin.employee.generated::UfS1ZT55Qjj71qM9',
        'namespace' => NULL,
        'prefix' => 'api/admin/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.employee.generated::KoRbySl7H47jYQYz' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/employee/address/{employee}/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmployeeAddressController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmployeeAddressController@update',
        'as' => 'admin.employee.generated::KoRbySl7H47jYQYz',
        'namespace' => NULL,
        'prefix' => 'api/admin/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.employee.generated::bpyfrdL5ZVEt0m8r' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/employee/address/{employee}/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmployeeAddressController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmployeeAddressController@destroy',
        'as' => 'admin.employee.generated::bpyfrdL5ZVEt0m8r',
        'namespace' => NULL,
        'prefix' => 'api/admin/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivery-boy.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/delivery-boy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@index',
        'as' => 'admin.delivery-boy.',
        'namespace' => NULL,
        'prefix' => 'api/admin/delivery-boy',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivery-boy.generated::gcc78bUyhVo5yDpD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/delivery-boy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@store',
        'as' => 'admin.delivery-boy.generated::gcc78bUyhVo5yDpD',
        'namespace' => NULL,
        'prefix' => 'api/admin/delivery-boy',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivery-boy.generated::9adc0ErA1b8kH1HB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/delivery-boy/show/{deliveryBoy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@show',
        'as' => 'admin.delivery-boy.generated::9adc0ErA1b8kH1HB',
        'namespace' => NULL,
        'prefix' => 'api/admin/delivery-boy',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivery-boy.generated::dfNpSWNX3DqxFQH8' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/delivery-boy/{deliveryBoy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@update',
        'as' => 'admin.delivery-boy.generated::dfNpSWNX3DqxFQH8',
        'namespace' => NULL,
        'prefix' => 'api/admin/delivery-boy',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivery-boy.generated::c3r0mCfR55nuKS9A' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/delivery-boy/{deliveryBoy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@destroy',
        'as' => 'admin.delivery-boy.generated::c3r0mCfR55nuKS9A',
        'namespace' => NULL,
        'prefix' => 'api/admin/delivery-boy',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivery-boy.generated::qPCb9q3PHUcoQQl8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/delivery-boy/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@export',
        'as' => 'admin.delivery-boy.generated::qPCb9q3PHUcoQQl8',
        'namespace' => NULL,
        'prefix' => 'api/admin/delivery-boy',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivery-boy.generated::DFD3MJNGcgFPR31e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/delivery-boy/change-password/{deliveryBoy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@changePassword',
        'as' => 'admin.delivery-boy.generated::DFD3MJNGcgFPR31e',
        'namespace' => NULL,
        'prefix' => 'api/admin/delivery-boy',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivery-boy.generated::Ud2Tlq9YEikkgz29' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/delivery-boy/change-image/{deliveryBoy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@changeImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@changeImage',
        'as' => 'admin.delivery-boy.generated::Ud2Tlq9YEikkgz29',
        'namespace' => NULL,
        'prefix' => 'api/admin/delivery-boy',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivery-boy.generated::m8wfoq721qcE7vVU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/delivery-boy/my-order/{deliveryBoy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@myOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyController@myOrder',
        'as' => 'admin.delivery-boy.generated::m8wfoq721qcE7vVU',
        'namespace' => NULL,
        'prefix' => 'api/admin/delivery-boy',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivery-boy.generated::WYl6PqT7JjdZB6VT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/delivery-boy/delivered-order/{deliveryBoy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyOrderController@deliveredOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyOrderController@deliveredOrder',
        'as' => 'admin.delivery-boy.generated::WYl6PqT7JjdZB6VT',
        'namespace' => NULL,
        'prefix' => 'api/admin/delivery-boy',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivery-boy.generated::1oCxp1BRjMWAOegG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/delivery-boy/delivered-order/show/{deliveryBoy}/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyOrderController@deliveredOrderDetails',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyOrderController@deliveredOrderDetails',
        'as' => 'admin.delivery-boy.generated::1oCxp1BRjMWAOegG',
        'namespace' => NULL,
        'prefix' => 'api/admin/delivery-boy',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivery-boy.generated::K5IPT2C60V326pZo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/delivery-boy/address/{deliveryBoy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyAddressController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyAddressController@index',
        'as' => 'admin.delivery-boy.generated::K5IPT2C60V326pZo',
        'namespace' => NULL,
        'prefix' => 'api/admin/delivery-boy',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivery-boy.generated::f90J4yY5KHCuMNlv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/delivery-boy/address/show/{deliveryBoy}/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyAddressController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyAddressController@show',
        'as' => 'admin.delivery-boy.generated::f90J4yY5KHCuMNlv',
        'namespace' => NULL,
        'prefix' => 'api/admin/delivery-boy',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivery-boy.generated::LuBBo8u4kue57P6e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/delivery-boy/address/{deliveryBoy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyAddressController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyAddressController@store',
        'as' => 'admin.delivery-boy.generated::LuBBo8u4kue57P6e',
        'namespace' => NULL,
        'prefix' => 'api/admin/delivery-boy',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivery-boy.generated::WYx47UU1ev6Gbn53' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/delivery-boy/address/{deliveryBoy}/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyAddressController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyAddressController@update',
        'as' => 'admin.delivery-boy.generated::WYx47UU1ev6Gbn53',
        'namespace' => NULL,
        'prefix' => 'api/admin/delivery-boy',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delivery-boy.generated::lT5UPtZRnYE0IqtZ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/delivery-boy/address/{deliveryBoy}/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyAddressController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryBoyAddressController@destroy',
        'as' => 'admin.delivery-boy.generated::lT5UPtZRnYE0IqtZ',
        'namespace' => NULL,
        'prefix' => 'api/admin/delivery-boy',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisers.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/advertisers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@index',
        'as' => 'admin.advertisers.',
        'namespace' => NULL,
        'prefix' => 'api/admin/advertisers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisers.generated::deEQViGLC3HphFpK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/advertisers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@store',
        'as' => 'admin.advertisers.generated::deEQViGLC3HphFpK',
        'namespace' => NULL,
        'prefix' => 'api/admin/advertisers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisers.generated::uV0jYAJP0W6qLvSn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/advertisers/show/{advertisers}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@show',
        'as' => 'admin.advertisers.generated::uV0jYAJP0W6qLvSn',
        'namespace' => NULL,
        'prefix' => 'api/admin/advertisers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisers.generated::ZMZoWgrzrpbbB87U' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/advertisers/{advertisers}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@update',
        'as' => 'admin.advertisers.generated::ZMZoWgrzrpbbB87U',
        'namespace' => NULL,
        'prefix' => 'api/admin/advertisers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisers.generated::cMi5YyYJG0xyokzb' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/advertisers/{advertisers}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@destroy',
        'as' => 'admin.advertisers.generated::cMi5YyYJG0xyokzb',
        'namespace' => NULL,
        'prefix' => 'api/admin/advertisers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisers.generated::lFa98DdYk52KSIXE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/advertisers/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@export',
        'as' => 'admin.advertisers.generated::lFa98DdYk52KSIXE',
        'namespace' => NULL,
        'prefix' => 'api/admin/advertisers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisers.generated::Sl9fmrGsCMBYPRqh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/advertisers/change-password/{advertisers}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@changePassword',
        'as' => 'admin.advertisers.generated::Sl9fmrGsCMBYPRqh',
        'namespace' => NULL,
        'prefix' => 'api/admin/advertisers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisers.generated::NGYLljCnfzZXdTmp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/advertisers/change-image/{advertisers}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@changeImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@changeImage',
        'as' => 'admin.advertisers.generated::NGYLljCnfzZXdTmp',
        'namespace' => NULL,
        'prefix' => 'api/admin/advertisers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisers.generated::IjtkThZWOQOzMPQR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/advertisers/my-order/{advertisers}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@myOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisersController@myOrder',
        'as' => 'admin.advertisers.generated::IjtkThZWOQOzMPQR',
        'namespace' => NULL,
        'prefix' => 'api/admin/advertisers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisers.generated::ZbdZ2QiFzklB7mUH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/advertisers/delivered-order/{advertisers}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisersOrderController@deliveredOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisersOrderController@deliveredOrder',
        'as' => 'admin.advertisers.generated::ZbdZ2QiFzklB7mUH',
        'namespace' => NULL,
        'prefix' => 'api/admin/advertisers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisers.generated::rpLsKmKXl62lJukB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/advertisers/delivered-order/show/{advertisers}/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisersOrderController@deliveredOrderDetails',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisersOrderController@deliveredOrderDetails',
        'as' => 'admin.advertisers.generated::rpLsKmKXl62lJukB',
        'namespace' => NULL,
        'prefix' => 'api/admin/advertisers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisers.generated::sN6cMyw4JqZshMvv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/advertisers/address/{advertisers}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisersAddressController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisersAddressController@index',
        'as' => 'admin.advertisers.generated::sN6cMyw4JqZshMvv',
        'namespace' => NULL,
        'prefix' => 'api/admin/advertisers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisers.generated::FKAxmnXXZMi3FYRn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/advertisers/address/show/{advertisers}/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisersAddressController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisersAddressController@show',
        'as' => 'admin.advertisers.generated::FKAxmnXXZMi3FYRn',
        'namespace' => NULL,
        'prefix' => 'api/admin/advertisers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisers.generated::2bqStXzcMWWd7GLH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/advertisers/address/{advertisers}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisersAddressController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisersAddressController@store',
        'as' => 'admin.advertisers.generated::2bqStXzcMWWd7GLH',
        'namespace' => NULL,
        'prefix' => 'api/admin/advertisers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisers.generated::OpXBJarWmcEybhM8' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/advertisers/address/{advertisers}/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisersAddressController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisersAddressController@update',
        'as' => 'admin.advertisers.generated::OpXBJarWmcEybhM8',
        'namespace' => NULL,
        'prefix' => 'api/admin/advertisers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisers.generated::ks9v7PHjhsMikxnI' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/advertisers/address/{advertisers}/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisersAddressController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisersAddressController@destroy',
        'as' => 'admin.advertisers.generated::ks9v7PHjhsMikxnI',
        'namespace' => NULL,
        'prefix' => 'api/admin/advertisers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@index',
        'as' => 'admin.coupon.',
        'namespace' => NULL,
        'prefix' => 'api/admin/coupon',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.generated::XsZYA4Co4JgGXeTG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/coupon/show/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@show',
        'as' => 'admin.coupon.generated::XsZYA4Co4JgGXeTG',
        'namespace' => NULL,
        'prefix' => 'api/admin/coupon',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.generated::jS5C0kKa8Ll8qrB2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@store',
        'as' => 'admin.coupon.generated::jS5C0kKa8Ll8qrB2',
        'namespace' => NULL,
        'prefix' => 'api/admin/coupon',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.generated::qOVdQNhmTiKXMzv6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'PUT',
        2 => 'PATCH',
      ),
      'uri' => 'api/admin/coupon/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@update',
        'as' => 'admin.coupon.generated::qOVdQNhmTiKXMzv6',
        'namespace' => NULL,
        'prefix' => 'api/admin/coupon',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.generated::ShmV3iWLF99MRK1L' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/coupon/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@destroy',
        'as' => 'admin.coupon.generated::ShmV3iWLF99MRK1L',
        'namespace' => NULL,
        'prefix' => 'api/admin/coupon',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coupon.generated::PmDUSu0WjPmDlJn2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/coupon/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@export',
        'as' => 'admin.coupon.generated::PmDUSu0WjPmDlJn2',
        'namespace' => NULL,
        'prefix' => 'api/admin/coupon',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.offer.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/offer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OfferController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\OfferController@index',
        'as' => 'admin.offer.',
        'namespace' => NULL,
        'prefix' => 'api/admin/offer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.offer.generated::sAkmV7DxwvinSWif' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/offer/show/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OfferController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\OfferController@show',
        'as' => 'admin.offer.generated::sAkmV7DxwvinSWif',
        'namespace' => NULL,
        'prefix' => 'api/admin/offer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.offer.generated::S7X6jFMRcqKDgpXf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/offer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OfferController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\OfferController@store',
        'as' => 'admin.offer.generated::S7X6jFMRcqKDgpXf',
        'namespace' => NULL,
        'prefix' => 'api/admin/offer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.offer.generated::fh8QVuxUaCghhNR1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'PUT',
        2 => 'PATCH',
      ),
      'uri' => 'api/admin/offer/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OfferController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\OfferController@update',
        'as' => 'admin.offer.generated::fh8QVuxUaCghhNR1',
        'namespace' => NULL,
        'prefix' => 'api/admin/offer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.offer.generated::klDxu9KqFI9Bfl7V' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/offer/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OfferController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\OfferController@destroy',
        'as' => 'admin.offer.generated::klDxu9KqFI9Bfl7V',
        'namespace' => NULL,
        'prefix' => 'api/admin/offer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.offer.generated::ZecVMqIXC6MBNMIw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/offer/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OfferController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\OfferController@export',
        'as' => 'admin.offer.generated::ZecVMqIXC6MBNMIw',
        'namespace' => NULL,
        'prefix' => 'api/admin/offer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.offer.generated::4zsHf5bSquZ0OtHD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/offer/change-image/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OfferController@changeImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\OfferController@changeImage',
        'as' => 'admin.offer.generated::4zsHf5bSquZ0OtHD',
        'namespace' => NULL,
        'prefix' => 'api/admin/offer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.offer.generated::ZEW7zwDSyyA8m73t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/offer/item/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OfferItemController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\OfferItemController@index',
        'as' => 'admin.offer.generated::ZEW7zwDSyyA8m73t',
        'namespace' => NULL,
        'prefix' => 'api/admin/offer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.offer.generated::QsVkkbPIUweJfxXN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/offer/item/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OfferItemController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\OfferItemController@store',
        'as' => 'admin.offer.generated::QsVkkbPIUweJfxXN',
        'namespace' => NULL,
        'prefix' => 'api/admin/offer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.offer.generated::IcUUWSNSS0MhH6u7' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/offer/item/{offer}/{offerItem}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OfferItemController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\OfferItemController@destroy',
        'as' => 'admin.offer.generated::IcUUWSNSS0MhH6u7',
        'namespace' => NULL,
        'prefix' => 'api/admin/offer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@index',
        'as' => 'admin.item.',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::MgNF8WcZQkWLKDwT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/item/show/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@show',
        'as' => 'admin.item.generated::MgNF8WcZQkWLKDwT',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::Z3OvG81eq57vT0J9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@store',
        'as' => 'admin.item.generated::Z3OvG81eq57vT0J9',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::26YJdtNMKuNMw9Ky' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'PUT',
        2 => 'PATCH',
      ),
      'uri' => 'api/admin/item/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@update',
        'as' => 'admin.item.generated::26YJdtNMKuNMw9Ky',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::uVD36Cte5gHyHCJX' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/item/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@destroy',
        'as' => 'admin.item.generated::uVD36Cte5gHyHCJX',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::TUXZG2LZHoYLfxIP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/item/change-image/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@changeImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@changeImage',
        'as' => 'admin.item.generated::TUXZG2LZHoYLfxIP',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::FNEgmlJn4xSDTjtc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/item/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@export',
        'as' => 'admin.item.generated::FNEgmlJn4xSDTjtc',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::kbyw9QJ3nT5t8HsQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/item/variation/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemVariationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemVariationController@index',
        'as' => 'admin.item.generated::kbyw9QJ3nT5t8HsQ',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::HUyVGS7Lxcyb9J2X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/item/variation/group-by-attribute/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemVariationController@listGroupByAttribute',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemVariationController@listGroupByAttribute',
        'as' => 'admin.item.generated::HUyVGS7Lxcyb9J2X',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::6eVls3jC5zbwo7E8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/item/variation/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemVariationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemVariationController@store',
        'as' => 'admin.item.generated::6eVls3jC5zbwo7E8',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::PuPwG5YibBBfKLxv' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/item/variation/{item}/{itemVariation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemVariationController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemVariationController@update',
        'as' => 'admin.item.generated::PuPwG5YibBBfKLxv',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::L1VtLvNJeiN2pSFy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/item/variation/{item}/{itemVariation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemVariationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemVariationController@destroy',
        'as' => 'admin.item.generated::L1VtLvNJeiN2pSFy',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::IpTqrus9GPwTzWgv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/item/variation/{item}/show/{itemVariation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemVariationController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemVariationController@show',
        'as' => 'admin.item.generated::IpTqrus9GPwTzWgv',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::vMmeTag7v0lmhhic' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/item/extra/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemExtraController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemExtraController@index',
        'as' => 'admin.item.generated::vMmeTag7v0lmhhic',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::wj6njmLobFSlntvs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/item/extra/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemExtraController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemExtraController@store',
        'as' => 'admin.item.generated::wj6njmLobFSlntvs',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::Pds8vt5REwxPrQ2q' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/item/extra/{item}/{itemExtra}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemExtraController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemExtraController@update',
        'as' => 'admin.item.generated::Pds8vt5REwxPrQ2q',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::8jwg9wodWAPD45iU' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/item/extra/{item}/{itemExtra}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemExtraController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemExtraController@destroy',
        'as' => 'admin.item.generated::8jwg9wodWAPD45iU',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::0tdD5FEeY1DwY2kM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/item/extra/{item}/show/{itemExtra}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemExtraController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemExtraController@show',
        'as' => 'admin.item.generated::0tdD5FEeY1DwY2kM',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::g4RTKpddQjiat0lp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/item/addon/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemAddonController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemAddonController@index',
        'as' => 'admin.item.generated::g4RTKpddQjiat0lp',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::jUuK4GyJaGPeuKC3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/item/addon/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemAddonController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemAddonController@store',
        'as' => 'admin.item.generated::jUuK4GyJaGPeuKC3',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.generated::ZBZ3JfgXNS0GWowk' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/item/addon/{item}/{itemAddon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemAddonController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemAddonController@destroy',
        'as' => 'admin.item.generated::ZBZ3JfgXNS0GWowk',
        'namespace' => NULL,
        'prefix' => 'api/admin/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pos.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/pos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PosController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PosController@store',
        'as' => 'admin.pos.',
        'namespace' => NULL,
        'prefix' => 'api/admin/pos',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posOrder.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/pos-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PosOrderController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PosOrderController@index',
        'as' => 'admin.posOrder.',
        'namespace' => NULL,
        'prefix' => 'api/admin/pos-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posOrder.generated::kL2vTwHoZjKxINRi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/pos-order/show/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PosOrderController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\PosOrderController@show',
        'as' => 'admin.posOrder.generated::kL2vTwHoZjKxINRi',
        'namespace' => NULL,
        'prefix' => 'api/admin/pos-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posOrder.generated::59x07o55jDl2Qrw7' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/pos-order/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PosOrderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PosOrderController@destroy',
        'as' => 'admin.posOrder.generated::59x07o55jDl2Qrw7',
        'namespace' => NULL,
        'prefix' => 'api/admin/pos-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posOrder.generated::5Emkul1DjRFC4jei' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/pos-order/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PosOrderController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\PosOrderController@export',
        'as' => 'admin.posOrder.generated::5Emkul1DjRFC4jei',
        'namespace' => NULL,
        'prefix' => 'api/admin/pos-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posOrder.generated::MkSk9jWHwuHXJYXn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/pos-order/change-status/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PosOrderController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\PosOrderController@changeStatus',
        'as' => 'admin.posOrder.generated::MkSk9jWHwuHXJYXn',
        'namespace' => NULL,
        'prefix' => 'api/admin/pos-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posOrder.generated::0E3pdW4fZEb3ctfW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/pos-order/change-payment-status/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PosOrderController@changePaymentStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\PosOrderController@changePaymentStatus',
        'as' => 'admin.posOrder.generated::0E3pdW4fZEb3ctfW',
        'namespace' => NULL,
        'prefix' => 'api/admin/pos-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.onlineOrder.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/online-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OnlineOrderController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\OnlineOrderController@index',
        'as' => 'admin.onlineOrder.',
        'namespace' => NULL,
        'prefix' => 'api/admin/online-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.onlineOrder.generated::ZarIivj18ROXc7UR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/online-order/show/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OnlineOrderController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\OnlineOrderController@show',
        'as' => 'admin.onlineOrder.generated::ZarIivj18ROXc7UR',
        'namespace' => NULL,
        'prefix' => 'api/admin/online-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.onlineOrder.generated::GKRCGOVVVaZ4dbmZ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/online-order/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OnlineOrderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\OnlineOrderController@destroy',
        'as' => 'admin.onlineOrder.generated::GKRCGOVVVaZ4dbmZ',
        'namespace' => NULL,
        'prefix' => 'api/admin/online-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.onlineOrder.generated::eWZRUIrQTMpmpVQM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/online-order/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OnlineOrderController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\OnlineOrderController@export',
        'as' => 'admin.onlineOrder.generated::eWZRUIrQTMpmpVQM',
        'namespace' => NULL,
        'prefix' => 'api/admin/online-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.onlineOrder.generated::CmaZ8gCcyRQCyjua' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/online-order/change-status/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OnlineOrderController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\OnlineOrderController@changeStatus',
        'as' => 'admin.onlineOrder.generated::CmaZ8gCcyRQCyjua',
        'namespace' => NULL,
        'prefix' => 'api/admin/online-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.onlineOrder.generated::IdsDhLIcu97czEjR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/online-order/change-payment-status/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OnlineOrderController@changePaymentStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\OnlineOrderController@changePaymentStatus',
        'as' => 'admin.onlineOrder.generated::IdsDhLIcu97czEjR',
        'namespace' => NULL,
        'prefix' => 'api/admin/online-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.onlineOrder.generated::3Bw8czS2wUb3JRQl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/online-order/select-delivery-boy/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OnlineOrderController@selectDeliveryBoy',
        'controller' => 'App\\Http\\Controllers\\Admin\\OnlineOrderController@selectDeliveryBoy',
        'as' => 'admin.onlineOrder.generated::3Bw8czS2wUb3JRQl',
        'namespace' => NULL,
        'prefix' => 'api/admin/online-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tableOrder.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/table-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TableOrderController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TableOrderController@index',
        'as' => 'admin.tableOrder.',
        'namespace' => NULL,
        'prefix' => 'api/admin/table-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tableOrder.generated::A31XV8I5uYVW3M8e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/table-order/show/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TableOrderController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\TableOrderController@show',
        'as' => 'admin.tableOrder.generated::A31XV8I5uYVW3M8e',
        'namespace' => NULL,
        'prefix' => 'api/admin/table-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tableOrder.generated::zjyWvPi5N3tl3tUl' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/table-order/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TableOrderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\TableOrderController@destroy',
        'as' => 'admin.tableOrder.generated::zjyWvPi5N3tl3tUl',
        'namespace' => NULL,
        'prefix' => 'api/admin/table-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tableOrder.generated::zjk58nT8jZIFYQuz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/table-order/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TableOrderController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\TableOrderController@export',
        'as' => 'admin.tableOrder.generated::zjk58nT8jZIFYQuz',
        'namespace' => NULL,
        'prefix' => 'api/admin/table-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tableOrder.generated::O89qypGmlvMdsghj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/table-order/change-status/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TableOrderController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\TableOrderController@changeStatus',
        'as' => 'admin.tableOrder.generated::O89qypGmlvMdsghj',
        'namespace' => NULL,
        'prefix' => 'api/admin/table-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tableOrder.generated::FC1rBoSPxCwitg7a' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/table-order/change-payment-status/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TableOrderController@changePaymentStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\TableOrderController@changePaymentStatus',
        'as' => 'admin.tableOrder.generated::FC1rBoSPxCwitg7a',
        'namespace' => NULL,
        'prefix' => 'api/admin/table-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tableOrder.generated::8rt4Oe52d5XFgjSO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/table-order/token-create/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TableOrderController@tokenCreate',
        'controller' => 'App\\Http\\Controllers\\Admin\\TableOrderController@tokenCreate',
        'as' => 'admin.tableOrder.generated::8rt4Oe52d5XFgjSO',
        'namespace' => NULL,
        'prefix' => 'api/admin/table-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.push-notification.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/push-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PushNotificationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PushNotificationController@index',
        'as' => 'admin.push-notification.',
        'namespace' => NULL,
        'prefix' => 'api/admin/push-notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.push-notification.generated::7g5ccFRfwoXKgmhA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/push-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PushNotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PushNotificationController@store',
        'as' => 'admin.push-notification.generated::7g5ccFRfwoXKgmhA',
        'namespace' => NULL,
        'prefix' => 'api/admin/push-notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.push-notification.generated::cjTorSVa2HXD7MPC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/push-notification/show/{pushNotification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PushNotificationController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\PushNotificationController@show',
        'as' => 'admin.push-notification.generated::cjTorSVa2HXD7MPC',
        'namespace' => NULL,
        'prefix' => 'api/admin/push-notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.push-notification.generated::vE9Wlvj5L7JJB2K0' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/push-notification/{pushNotification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PushNotificationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PushNotificationController@destroy',
        'as' => 'admin.push-notification.generated::vE9Wlvj5L7JJB2K0',
        'namespace' => NULL,
        'prefix' => 'api/admin/push-notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.push-notification.generated::NpkTMqVNlEZwyMds' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/push-notification/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PushNotificationController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\PushNotificationController@export',
        'as' => 'admin.push-notification.generated::NpkTMqVNlEZwyMds',
        'namespace' => NULL,
        'prefix' => 'api/admin/push-notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.administrator.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/administrator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdministratorController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdministratorController@index',
        'as' => 'admin.administrator.',
        'namespace' => NULL,
        'prefix' => 'api/admin/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.administrator.generated::fzXPaiL4zyi5nGHn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/administrator/show/{administrator}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdministratorController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdministratorController@show',
        'as' => 'admin.administrator.generated::fzXPaiL4zyi5nGHn',
        'namespace' => NULL,
        'prefix' => 'api/admin/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.administrator.generated::84b7LLm7c8gKBOYy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/administrator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdministratorController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdministratorController@store',
        'as' => 'admin.administrator.generated::84b7LLm7c8gKBOYy',
        'namespace' => NULL,
        'prefix' => 'api/admin/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.administrator.generated::CoAvEbPFcVAZiVHy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'PUT',
        2 => 'PATCH',
      ),
      'uri' => 'api/admin/administrator/{administrator}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdministratorController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdministratorController@update',
        'as' => 'admin.administrator.generated::CoAvEbPFcVAZiVHy',
        'namespace' => NULL,
        'prefix' => 'api/admin/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.administrator.generated::5onLDycBlluHPbwf' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/administrator/{administrator}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdministratorController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdministratorController@destroy',
        'as' => 'admin.administrator.generated::5onLDycBlluHPbwf',
        'namespace' => NULL,
        'prefix' => 'api/admin/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.administrator.generated::Cgy6bZS30nTxHW5J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/administrator/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdministratorController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdministratorController@export',
        'as' => 'admin.administrator.generated::Cgy6bZS30nTxHW5J',
        'namespace' => NULL,
        'prefix' => 'api/admin/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.administrator.generated::GTaBN3VrLuOQnJxN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/administrator/change-password/{administrator}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdministratorController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdministratorController@changePassword',
        'as' => 'admin.administrator.generated::GTaBN3VrLuOQnJxN',
        'namespace' => NULL,
        'prefix' => 'api/admin/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.administrator.generated::KYEFF22CRDoAjDED' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/administrator/change-image/{administrator}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdministratorController@changeImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdministratorController@changeImage',
        'as' => 'admin.administrator.generated::KYEFF22CRDoAjDED',
        'namespace' => NULL,
        'prefix' => 'api/admin/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.administrator.generated::dAn4AMMqpmjOKo9r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/administrator/my-order/{administrator}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdministratorController@myOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdministratorController@myOrder',
        'as' => 'admin.administrator.generated::dAn4AMMqpmjOKo9r',
        'namespace' => NULL,
        'prefix' => 'api/admin/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.administrator.generated::7NG4XROCdfLALIOb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/administrator/address/{administrator}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdministratorAddressController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdministratorAddressController@index',
        'as' => 'admin.administrator.generated::7NG4XROCdfLALIOb',
        'namespace' => NULL,
        'prefix' => 'api/admin/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.administrator.generated::dBL2v9RxJxV8Eyvq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/administrator/address/show/{administrator}/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdministratorAddressController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdministratorAddressController@show',
        'as' => 'admin.administrator.generated::dBL2v9RxJxV8Eyvq',
        'namespace' => NULL,
        'prefix' => 'api/admin/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.administrator.generated::WcVYpKxispZp3bAZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/administrator/address/{administrator}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdministratorAddressController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdministratorAddressController@store',
        'as' => 'admin.administrator.generated::WcVYpKxispZp3bAZ',
        'namespace' => NULL,
        'prefix' => 'api/admin/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.administrator.generated::ZImNVWd7I20iT4lI' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/administrator/address/{administrator}/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdministratorAddressController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdministratorAddressController@update',
        'as' => 'admin.administrator.generated::ZImNVWd7I20iT4lI',
        'namespace' => NULL,
        'prefix' => 'api/admin/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.administrator.generated::32pfIarTO8QfufKL' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/administrator/address/{administrator}/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdministratorAddressController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdministratorAddressController@destroy',
        'as' => 'admin.administrator.generated::32pfIarTO8QfufKL',
        'namespace' => NULL,
        'prefix' => 'api/admin/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.timezone.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/timezone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TimezoneController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TimezoneController@index',
        'as' => 'admin.timezone.',
        'namespace' => NULL,
        'prefix' => 'api/admin/timezone',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dashboard/total-sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@totalSales',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@totalSales',
        'as' => 'admin.dashboard.',
        'namespace' => NULL,
        'prefix' => 'api/admin/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.generated::oHP4C6uJUo4xwrBz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dashboard/total-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@totalOrders',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@totalOrders',
        'as' => 'admin.dashboard.generated::oHP4C6uJUo4xwrBz',
        'namespace' => NULL,
        'prefix' => 'api/admin/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.generated::nBj2AMlGIHMXHyIX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dashboard/total-customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@totalCustomers',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@totalCustomers',
        'as' => 'admin.dashboard.generated::nBj2AMlGIHMXHyIX',
        'namespace' => NULL,
        'prefix' => 'api/admin/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.generated::OBE45QwCa6JbMH1R' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dashboard/total-menu-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@totalMenuItems',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@totalMenuItems',
        'as' => 'admin.dashboard.generated::OBE45QwCa6JbMH1R',
        'namespace' => NULL,
        'prefix' => 'api/admin/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.generated::BcTIkoVui4srsvZW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dashboard/order-statistics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@orderStatistics',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@orderStatistics',
        'as' => 'admin.dashboard.generated::BcTIkoVui4srsvZW',
        'namespace' => NULL,
        'prefix' => 'api/admin/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.generated::39vPNu8icUgby0F8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dashboard/order-summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@orderSummary',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@orderSummary',
        'as' => 'admin.dashboard.generated::39vPNu8icUgby0F8',
        'namespace' => NULL,
        'prefix' => 'api/admin/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.generated::CIK1FzfVh75QA270' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dashboard/sales-summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@salesSummary',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@salesSummary',
        'as' => 'admin.dashboard.generated::CIK1FzfVh75QA270',
        'namespace' => NULL,
        'prefix' => 'api/admin/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.generated::xoDPZnhY6RGMRzh2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dashboard/customer-states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@customerStates',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@customerStates',
        'as' => 'admin.dashboard.generated::xoDPZnhY6RGMRzh2',
        'namespace' => NULL,
        'prefix' => 'api/admin/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.generated::TFgdBek7ZWv7vlrL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dashboard/top-customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@topCustomers',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@topCustomers',
        'as' => 'admin.dashboard.generated::TFgdBek7ZWv7vlrL',
        'namespace' => NULL,
        'prefix' => 'api/admin/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.generated::MHlRFqH2HE2D6YnG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dashboard/featured-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@featuredItems',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@featuredItems',
        'as' => 'admin.dashboard.generated::MHlRFqH2HE2D6YnG',
        'namespace' => NULL,
        'prefix' => 'api/admin/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.generated::B0piF9X6UjX66rj4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dashboard/popular-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@mostPopularItems',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@mostPopularItems',
        'as' => 'admin.dashboard.generated::B0piF9X6UjX66rj4',
        'namespace' => NULL,
        'prefix' => 'api/admin/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.generated::F4uFVlg7Y5GccYzO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dashboard/trends',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@trends',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@trends',
        'as' => 'admin.dashboard.generated::F4uFVlg7Y5GccYzO',
        'namespace' => NULL,
        'prefix' => 'api/admin/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.generated::xFKSLkHIAkIW3guY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dashboard/get-advertisers-stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@getAdvertisersStats',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@getAdvertisersStats',
        'as' => 'admin.dashboard.generated::xFKSLkHIAkIW3guY',
        'namespace' => NULL,
        'prefix' => 'api/admin/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.generated::qlIJfn2MqCNPkjm7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dashboard/get-transaction-by-gender',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@getTransactionByGender',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@getTransactionByGender',
        'as' => 'admin.dashboard.generated::qlIJfn2MqCNPkjm7',
        'namespace' => NULL,
        'prefix' => 'api/admin/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.generated::Jcq1vQrh15ZqHkdD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dashboard/get-product-category-achievements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@getProductCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@getProductCategory',
        'as' => 'admin.dashboard.generated::Jcq1vQrh15ZqHkdD',
        'namespace' => NULL,
        'prefix' => 'api/admin/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales-report.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/sales-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesReportController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesReportController@index',
        'as' => 'admin.sales-report.',
        'namespace' => NULL,
        'prefix' => 'api/admin/sales-report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales-report.generated::VpUkUy1IMUR2Sr1U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/sales-report/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesReportController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesReportController@export',
        'as' => 'admin.sales-report.generated::VpUkUy1IMUR2Sr1U',
        'namespace' => NULL,
        'prefix' => 'api/admin/sales-report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items-report.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/items-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemsReportController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemsReportController@index',
        'as' => 'admin.items-report.',
        'namespace' => NULL,
        'prefix' => 'api/admin/items-report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items-report.generated::1QcsEsTRWnXzoASd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/items-report/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemsReportController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemsReportController@export',
        'as' => 'admin.items-report.generated::1QcsEsTRWnXzoASd',
        'namespace' => NULL,
        'prefix' => 'api/admin/items-report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.credit-balance-report.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/credit-balance-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CreditBalanceReportController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CreditBalanceReportController@index',
        'as' => 'admin.credit-balance-report.',
        'namespace' => NULL,
        'prefix' => 'api/admin/credit-balance-report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.credit-balance-report.generated::3ImueCRaQQWk5Abc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/credit-balance-report/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CreditBalanceReportController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\CreditBalanceReportController@export',
        'as' => 'admin.credit-balance-report.generated::3ImueCRaQQWk5Abc',
        'namespace' => NULL,
        'prefix' => 'api/admin/credit-balance-report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.message.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
          5 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@index',
        'as' => 'admin.message.',
        'namespace' => NULL,
        'prefix' => 'api/admin/message',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.message.generated::lBZaBaIsYIEc0MMr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/message/show/{message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
          5 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@show',
        'as' => 'admin.message.generated::lBZaBaIsYIEc0MMr',
        'namespace' => NULL,
        'prefix' => 'api/admin/message',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.message.generated::lBG1d93ggXTEscOG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
          5 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@store',
        'as' => 'admin.message.generated::lBG1d93ggXTEscOG',
        'namespace' => NULL,
        'prefix' => 'api/admin/message',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.message.generated::pKBgj4Qx3L1VYmoI' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/message/{message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
          5 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@update',
        'as' => 'admin.message.generated::pKBgj4Qx3L1VYmoI',
        'namespace' => NULL,
        'prefix' => 'api/admin/message',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.message.generated::yPSlviVqce03cJu0' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/message/{message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
          5 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@destroy',
        'as' => 'admin.message.generated::yPSlviVqce03cJu0',
        'namespace' => NULL,
        'prefix' => 'api/admin/message',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.message.generated::UT60c39UYUrhkY7n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/message/change-status/{message}/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
          5 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@changeStatus',
        'as' => 'admin.message.generated::UT60c39UYUrhkY7n',
        'namespace' => NULL,
        'prefix' => 'api/admin/message',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country-code.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/country-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryCodeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryCodeController@index',
        'as' => 'admin.country-code.',
        'namespace' => NULL,
        'prefix' => 'api/admin/country-code',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country-code.generated::2wbiWlJE5EUNC6Ht' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/country-code/show/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryCodeController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryCodeController@show',
        'as' => 'admin.country-code.generated::2wbiWlJE5EUNC6Ht',
        'namespace' => NULL,
        'prefix' => 'api/admin/country-code',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transaction.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/transaction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
          5 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransactionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransactionController@index',
        'as' => 'admin.transaction.',
        'namespace' => NULL,
        'prefix' => 'api/admin/transaction',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transaction.generated::fOxsLk2ytKdknmAM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/transaction/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
          5 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransactionController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransactionController@export',
        'as' => 'admin.transaction.generated::fOxsLk2ytKdknmAM',
        'namespace' => NULL,
        'prefix' => 'api/admin/transaction',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SimpleUserController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SimpleUserController@index',
        'as' => 'admin.users.',
        'namespace' => NULL,
        'prefix' => 'api/admin/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pos-category.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/pos-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PosCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PosCategoryController@index',
        'as' => 'admin.pos-category.',
        'namespace' => NULL,
        'prefix' => 'api/admin/pos-category',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dining-table.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dining-table',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DiningTableController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DiningTableController@index',
        'as' => 'admin.dining-table.',
        'namespace' => NULL,
        'prefix' => 'api/admin/dining-table',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dining-table.generated::aLvSvTFiBBbkUtYN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dining-table/show/{diningTable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DiningTableController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\DiningTableController@show',
        'as' => 'admin.dining-table.generated::aLvSvTFiBBbkUtYN',
        'namespace' => NULL,
        'prefix' => 'api/admin/dining-table',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dining-table.generated::bFeqFtKZbLYs6ICU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dining-table',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DiningTableController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DiningTableController@store',
        'as' => 'admin.dining-table.generated::bFeqFtKZbLYs6ICU',
        'namespace' => NULL,
        'prefix' => 'api/admin/dining-table',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dining-table.generated::wneu059achm0B33J' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'PUT',
        2 => 'PATCH',
      ),
      'uri' => 'api/admin/dining-table/{diningTable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DiningTableController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DiningTableController@update',
        'as' => 'admin.dining-table.generated::wneu059achm0B33J',
        'namespace' => NULL,
        'prefix' => 'api/admin/dining-table',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dining-table.generated::EWH6k0sVLMMO5jxk' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/dining-table/{diningTable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DiningTableController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DiningTableController@destroy',
        'as' => 'admin.dining-table.generated::EWH6k0sVLMMO5jxk',
        'namespace' => NULL,
        'prefix' => 'api/admin/dining-table',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dining-table.generated::p8BWaSU87ndaLAWW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dining-table/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'auth:sanctum',
          4 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DiningTableController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\DiningTableController@export',
        'as' => 'admin.dining-table.generated::p8BWaSU87ndaLAWW',
        'namespace' => NULL,
        'prefix' => 'api/admin/dining-table',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.operators.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/operators',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\SettingController@operators',
        'controller' => 'App\\Http\\Controllers\\Frontend\\SettingController@operators',
        'as' => 'frontend.operators.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/operators',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.setting.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\SettingController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\SettingController@index',
        'as' => 'frontend.setting.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/setting',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.page.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PageController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PageController@index',
        'as' => 'frontend.page.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/page',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.page.generated::hjoQzbwmqKZXlMN3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/page/show/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PageController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PageController@show',
        'as' => 'frontend.page.generated::hjoQzbwmqKZXlMN3',
        'namespace' => NULL,
        'prefix' => 'api/frontend/page',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
        'page' => 'slug',
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.page.generated::4lVoIJioXCa7gZf3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/page/page-info/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PageController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PageController@show',
        'as' => 'frontend.page.generated::4lVoIJioXCa7gZf3',
        'namespace' => NULL,
        'prefix' => 'api/frontend/page',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.subscriber.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/frontend/subscriber',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\SubscriberController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\SubscriberController@store',
        'as' => 'frontend.subscriber.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/subscriber',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.address.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AddressController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AddressController@index',
        'as' => 'frontend.address.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/address',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.address.generated::ptryGutideQiPNiR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/address/show/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AddressController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AddressController@show',
        'as' => 'frontend.address.generated::ptryGutideQiPNiR',
        'namespace' => NULL,
        'prefix' => 'api/frontend/address',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.address.generated::UNQod5cmtDGcCaV7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/frontend/address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AddressController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AddressController@store',
        'as' => 'frontend.address.generated::UNQod5cmtDGcCaV7',
        'namespace' => NULL,
        'prefix' => 'api/frontend/address',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.address.generated::3f7T6hlThPQZc1bo' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/frontend/address/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AddressController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AddressController@update',
        'as' => 'frontend.address.generated::3f7T6hlThPQZc1bo',
        'namespace' => NULL,
        'prefix' => 'api/frontend/address',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.address.generated::gq52qci4CavW5Rfw' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/frontend/address/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AddressController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AddressController@destroy',
        'as' => 'frontend.address.generated::gq52qci4CavW5Rfw',
        'namespace' => NULL,
        'prefix' => 'api/frontend/address',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.branch.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/branch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\BranchController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\BranchController@index',
        'as' => 'frontend.branch.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/branch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.branch.generated::6JkKwg8EmJE4vKAC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/branch/show/{branch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\BranchController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\BranchController@show',
        'as' => 'frontend.branch.generated::6JkKwg8EmJE4vKAC',
        'namespace' => NULL,
        'prefix' => 'api/frontend/branch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.language.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\LanguageController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\LanguageController@index',
        'as' => 'frontend.language.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/language',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.language.generated::p9rumZqIhQRhOLkC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/language/show/{language}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\LanguageController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\LanguageController@show',
        'as' => 'frontend.language.generated::p9rumZqIhQRhOLkC',
        'namespace' => NULL,
        'prefix' => 'api/frontend/language',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.order.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\OrderController@index',
        'as' => 'frontend.order.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.order.generated::ViZ1zy89uGWVMM8k' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/order/show/{frontendOrder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\OrderController@show',
        'as' => 'frontend.order.generated::ViZ1zy89uGWVMM8k',
        'namespace' => NULL,
        'prefix' => 'api/frontend/order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.order.generated::KJUhjyHAH9YgVhh9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/frontend/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\OrderController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\OrderController@store',
        'as' => 'frontend.order.generated::KJUhjyHAH9YgVhh9',
        'namespace' => NULL,
        'prefix' => 'api/frontend/order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.order.generated::3dZSAYZqtWA1OTYB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/frontend/order/change-status/{frontendOrder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\OrderController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\Frontend\\OrderController@changeStatus',
        'as' => 'frontend.order.generated::3dZSAYZqtWA1OTYB',
        'namespace' => NULL,
        'prefix' => 'api/frontend/order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.offer.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/offer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\OfferController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\OfferController@index',
        'as' => 'frontend.offer.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/offer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.offer.generated::NsFHE9jRhaBXSeuW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/offer/show/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\OfferController@offerItems',
        'controller' => 'App\\Http\\Controllers\\Frontend\\OfferController@offerItems',
        'as' => 'frontend.offer.generated::NsFHE9jRhaBXSeuW',
        'namespace' => NULL,
        'prefix' => 'api/frontend/offer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.offer.generated::rh6laKXTATpI7tkM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/offer/today',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\OfferController@offerItemByDate',
        'controller' => 'App\\Http\\Controllers\\Frontend\\OfferController@offerItemByDate',
        'as' => 'frontend.offer.generated::rh6laKXTATpI7tkM',
        'namespace' => NULL,
        'prefix' => 'api/frontend/offer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.item.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\ItemController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ItemController@index',
        'as' => 'frontend.item.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.item.generated::a3ElECpvkMFDsqzB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/item/featured-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\ItemController@featuredItems',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ItemController@featuredItems',
        'as' => 'frontend.item.generated::a3ElECpvkMFDsqzB',
        'namespace' => NULL,
        'prefix' => 'api/frontend/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.item.generated::WXtssoYNr1j7ZskP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/item/popular-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\ItemController@mostPopularItems',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ItemController@mostPopularItems',
        'as' => 'frontend.item.generated::WXtssoYNr1j7ZskP',
        'namespace' => NULL,
        'prefix' => 'api/frontend/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.item-category.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/item-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\ItemCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ItemCategoryController@index',
        'as' => 'frontend.item-category.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/item-category',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.item-category.generated::rs3kG21KB59HowbR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/item-category/show/{itemCategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\ItemCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ItemCategoryController@show',
        'as' => 'frontend.item-category.generated::rs3kG21KB59HowbR',
        'namespace' => NULL,
        'prefix' => 'api/frontend/item-category',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
        'itemCategory' => 'slug',
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.message.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\MessageController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\MessageController@index',
        'as' => 'frontend.message.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/message',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.message.generated::Gnld0I9iv0W2P5nF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/message/show/{message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\MessageController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\MessageController@show',
        'as' => 'frontend.message.generated::Gnld0I9iv0W2P5nF',
        'namespace' => NULL,
        'prefix' => 'api/frontend/message',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.message.generated::m9BK8tP2iGJqxP4H' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/frontend/message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\MessageController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\MessageController@store',
        'as' => 'frontend.message.generated::m9BK8tP2iGJqxP4H',
        'namespace' => NULL,
        'prefix' => 'api/frontend/message',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.message.generated::bpdTE7KK2cJrLUBq' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/frontend/message/{message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\MessageController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\MessageController@update',
        'as' => 'frontend.message.generated::bpdTE7KK2cJrLUBq',
        'namespace' => NULL,
        'prefix' => 'api/frontend/message',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.message.generated::COUUxLorPsgD9Yge' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/frontend/message/{message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\MessageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\MessageController@destroy',
        'as' => 'frontend.message.generated::COUUxLorPsgD9Yge',
        'namespace' => NULL,
        'prefix' => 'api/frontend/message',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.time-slot.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/time-slot/today',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TimeSlotController@todayTimeSlot',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TimeSlotController@todayTimeSlot',
        'as' => 'frontend.time-slot.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/time-slot',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.time-slot.generated::Sfn7yZ0ElNIfIG2V' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/time-slot/tomorrow',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TimeSlotController@tomorrowTimeSlot',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TimeSlotController@tomorrowTimeSlot',
        'as' => 'frontend.time-slot.generated::Sfn7yZ0ElNIfIG2V',
        'namespace' => NULL,
        'prefix' => 'api/frontend/time-slot',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.coupon.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CouponController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CouponController@index',
        'as' => 'frontend.coupon.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/coupon',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.coupon.generated::28nLXZJrXbVkbqzT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/frontend/coupon/coupon-checking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CouponController@couponChecking',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CouponController@couponChecking',
        'as' => 'frontend.coupon.generated::28nLXZJrXbVkbqzT',
        'namespace' => NULL,
        'prefix' => 'api/frontend/coupon',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.slider.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\SliderController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\SliderController@index',
        'as' => 'frontend.slider.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.country-code.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/country-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CountryCodeController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CountryCodeController@index',
        'as' => 'frontend.country-code.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/country-code',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.country-code.generated::FBnmcWOqawdFc54q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/country-code/show/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CountryCodeController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CountryCodeController@show',
        'as' => 'frontend.country-code.generated::FBnmcWOqawdFc54q',
        'namespace' => NULL,
        'prefix' => 'api/frontend/country-code',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.cookies.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/cookies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CookiesController@get',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CookiesController@get',
        'as' => 'frontend.cookies.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/cookies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.cookies.generated::ujb86ZSAKFaQPxg9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/frontend/cookies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CookiesController@set',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CookiesController@set',
        'as' => 'frontend.cookies.generated::ujb86ZSAKFaQPxg9',
        'namespace' => NULL,
        'prefix' => 'api/frontend/cookies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.device-token.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/frontend/device-token/web',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TokenStoreController@webToken',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TokenStoreController@webToken',
        'as' => 'frontend.device-token.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/device-token',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.device-token.generated::yMB8rubZ2t4FFrse' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/frontend/device-token/mobile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TokenStoreController@deviceToken',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TokenStoreController@deviceToken',
        'as' => 'frontend.device-token.generated::yMB8rubZ2t4FFrse',
        'namespace' => NULL,
        'prefix' => 'api/frontend/device-token',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.delivery-boy-order.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/delivery-boy-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DeliveryBoyOrderController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DeliveryBoyOrderController@index',
        'as' => 'frontend.delivery-boy-order.',
        'namespace' => NULL,
        'prefix' => 'api/frontend/delivery-boy-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.delivery-boy-order.generated::XqBQLJ5ujXrNaTLt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/delivery-boy-order/show/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DeliveryBoyOrderController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DeliveryBoyOrderController@show',
        'as' => 'frontend.delivery-boy-order.generated::XqBQLJ5ujXrNaTLt',
        'namespace' => NULL,
        'prefix' => 'api/frontend/delivery-boy-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.delivery-boy-order.generated::Gsjcp1LYjpr1dpYV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/frontend/delivery-boy-order/count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DeliveryBoyOrderController@orderCount',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DeliveryBoyOrderController@orderCount',
        'as' => 'frontend.delivery-boy-order.generated::Gsjcp1LYjpr1dpYV',
        'namespace' => NULL,
        'prefix' => 'api/frontend/delivery-boy-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.delivery-boy-order.generated::5rBiOOve0rg9MGjQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/frontend/delivery-boy-order/change-status/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
          4 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DeliveryBoyOrderController@deliveryBoyOrderChangeStatus',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DeliveryBoyOrderController@deliveryBoyOrderChangeStatus',
        'as' => 'frontend.delivery-boy-order.generated::5rBiOOve0rg9MGjQ',
        'namespace' => NULL,
        'prefix' => 'api/frontend/delivery-boy-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'table.item-category.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/table/item-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Table\\ItemCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Table\\ItemCategoryController@index',
        'as' => 'table.item-category.',
        'namespace' => NULL,
        'prefix' => 'api/table/item-category',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'table.item-category.generated::KooRSE6maxKtfBMn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/table/item-category/show/{itemCategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Table\\ItemCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Table\\ItemCategoryController@show',
        'as' => 'table.item-category.generated::KooRSE6maxKtfBMn',
        'namespace' => NULL,
        'prefix' => 'api/table/item-category',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
        'itemCategory' => 'slug',
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'table.dining-table.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/table/dining-table',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Table\\DiningTableController@index',
        'controller' => 'App\\Http\\Controllers\\Table\\DiningTableController@index',
        'as' => 'table.dining-table.',
        'namespace' => NULL,
        'prefix' => 'api/table/dining-table',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'table.dining-table.generated::OfaXVNxFF9ibDslV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/table/dining-table/show/{frontendDiningTable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Table\\DiningTableController@show',
        'controller' => 'App\\Http\\Controllers\\Table\\DiningTableController@show',
        'as' => 'table.dining-table.generated::OfaXVNxFF9ibDslV',
        'namespace' => NULL,
        'prefix' => 'api/table/dining-table',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
        'frontendDiningTable' => 'slug',
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'table.dining-order.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/table/dining-order/show/{frontendOrder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Table\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\Table\\OrderController@show',
        'as' => 'table.dining-order.',
        'namespace' => NULL,
        'prefix' => 'api/table/dining-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'table.dining-order.generated::b5vZJ6AzbK83c9Wc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/table/dining-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'installed',
          2 => 'apiKey',
          3 => 'localization',
        ),
        'uses' => 'App\\Http\\Controllers\\Table\\OrderController@store',
        'controller' => 'App\\Http\\Controllers\\Table\\OrderController@store',
        'as' => 'table.dining-order.generated::b5vZJ6AzbK83c9Wc',
        'namespace' => NULL,
        'prefix' => 'api/table/dining-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallerController@index',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallerController@index',
        'as' => 'installer.index',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installer.requirement' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/requirement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallerController@requirement',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallerController@requirement',
        'as' => 'installer.requirement',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installer.permission' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallerController@permission',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallerController@permission',
        'as' => 'installer.permission',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installer.license' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/license',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallerController@license',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallerController@license',
        'as' => 'installer.license',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installer.licenseStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/license',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallerController@licenseStore',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallerController@licenseStore',
        'as' => 'installer.licenseStore',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installer.site' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/site',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallerController@site',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallerController@site',
        'as' => 'installer.site',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installer.siteStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/site',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallerController@siteStore',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallerController@siteStore',
        'as' => 'installer.siteStore',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installer.database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallerController@database',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallerController@database',
        'as' => 'installer.database',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installer.databaseStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallerController@databaseStore',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallerController@databaseStore',
        'as' => 'installer.databaseStore',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installer.final' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/final',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallerController@final',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallerController@final',
        'as' => 'installer.final',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installer.finalStore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/final-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallerController@finalStore',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallerController@finalStore',
        'as' => 'installer.finalStore',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installed',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\RootController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\RootController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment/{order}/pay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installed',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PaymentController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PaymentController@index',
        'as' => 'payment.index',
        'namespace' => NULL,
        'prefix' => '/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payment/{order}/pay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installed',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PaymentController@payment',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PaymentController@payment',
        'as' => 'payment.store',
        'namespace' => NULL,
        'prefix' => '/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'payment/{paymentGateway}/{order}/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installed',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PaymentController@success',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PaymentController@success',
        'as' => 'payment.success',
        'namespace' => NULL,
        'prefix' => '/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
        'paymentGateway' => 'slug',
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.fail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'payment/{paymentGateway}/{order}/fail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installed',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PaymentController@fail',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PaymentController@fail',
        'as' => 'payment.fail',
        'namespace' => NULL,
        'prefix' => '/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
        'paymentGateway' => 'slug',
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'payment/{paymentGateway}/{order}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installed',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PaymentController@cancel',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PaymentController@cancel',
        'as' => 'payment.cancel',
        'namespace' => NULL,
        'prefix' => '/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
        'paymentGateway' => 'slug',
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.successful' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment/successful/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installed',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PaymentController@successful',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PaymentController@successful',
        'as' => 'payment.successful',
        'namespace' => NULL,
        'prefix' => '/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.senangpay.webhook' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'payment/senangpay-webhook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installed',
        ),
        'uses' => 'App\\Http\\PaymentGateways\\Gateways\\Senangpay@webhook',
        'controller' => 'App\\Http\\PaymentGateways\\Gateways\\Senangpay@webhook',
        'as' => 'payment.senangpay.webhook',
        'namespace' => NULL,
        'prefix' => '/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
