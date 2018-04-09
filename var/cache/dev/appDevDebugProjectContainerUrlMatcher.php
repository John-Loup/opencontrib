<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // _assetic_1c53b95
        if ('/css/1c53b95.css' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '1c53b95',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_1c53b95',);
        }

        if (0 === strpos($pathinfo, '/css/1c53b95_part_1_')) {
            // _assetic_1c53b95_0
            if ('/css/1c53b95_part_1_bootstrap-theme_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1c53b95',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_1c53b95_0',);
            }

            // _assetic_1c53b95_1
            if ('/css/1c53b95_part_1_bootstrap_2.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1c53b95',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_1c53b95_1',);
            }

            // _assetic_1c53b95_2
            if ('/css/1c53b95_part_1_css_3.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1c53b95',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_1c53b95_2',);
            }

            // _assetic_1c53b95_3
            if ('/css/1c53b95_part_1_font-awesome_4.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1c53b95',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_1c53b95_3',);
            }

            // _assetic_1c53b95_4
            if ('/css/1c53b95_part_1_font-awesome.min_5.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1c53b95',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_1c53b95_4',);
            }

        }

        elseif (0 === strpos($pathinfo, '/js/49e0cbd')) {
            // _assetic_49e0cbd
            if ('/js/49e0cbd.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '49e0cbd',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_49e0cbd',);
            }

            // _assetic_49e0cbd_0
            if ('/js/49e0cbd_part_1_bootstrap_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '49e0cbd',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_49e0cbd_0',);
            }

            // _assetic_49e0cbd_1
            if ('/js/49e0cbd_part_1_bootstrap.min_2.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '49e0cbd',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_49e0cbd_1',);
            }

        }

        elseif (0 === strpos($pathinfo, '/images')) {
            // _assetic_af59560
            if ('/images/af59560.jpg' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'af59560',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_af59560',);
            }

            // _assetic_af59560_0
            if ('/images/af59560_old-oakland-bay-bridge-don-thomas_1.jpg' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'af59560',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_af59560_0',);
            }

            // _assetic_4d9e2c6
            if ('/images/4d9e2c6.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4d9e2c6',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_4d9e2c6',);
            }

            // _assetic_4d9e2c6_0
            if ('/images/4d9e2c6_git_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4d9e2c6',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_4d9e2c6_0',);
            }

            // _assetic_0572b3f
            if ('/images/0572b3f.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0572b3f',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_0572b3f',);
            }

            // _assetic_0572b3f_0
            if ('/images/0572b3f_User_icon_BLACK-01_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0572b3f',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_0572b3f_0',);
            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/projects')) {
            // projects_index
            if ('/projects' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_projects_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'projects_index');
                }

                return array (  '_controller' => 'OpenContrib\\ProjectsBundle\\Controller\\ProjectsController::indexAction',  '_route' => 'projects_index',);
            }
            not_projects_index:

            // projects_indexHome
            if ('/projects' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_projects_indexHome;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'projects_indexHome');
                }

                return array (  '_controller' => 'OpenContrib\\ProjectsBundle\\Controller\\ProjectsController::indexHomeAction',  '_route' => 'projects_indexHome',);
            }
            not_projects_indexHome:

            // projects_new
            if ('/projects/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_projects_new;
                }

                return array (  '_controller' => 'OpenContrib\\ProjectsBundle\\Controller\\ProjectsController::newAction',  '_route' => 'projects_new',);
            }
            not_projects_new:

            // projects_show
            if (preg_match('#^/projects/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_projects_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projects_show')), array (  '_controller' => 'OpenContrib\\ProjectsBundle\\Controller\\ProjectsController::showAction',));
            }
            not_projects_show:

            // projects_edit
            if (preg_match('#^/projects/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_projects_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projects_edit')), array (  '_controller' => 'OpenContrib\\ProjectsBundle\\Controller\\ProjectsController::editAction',));
            }
            not_projects_edit:

            // projects_delete
            if (preg_match('#^/projects/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_projects_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projects_delete')), array (  '_controller' => 'OpenContrib\\ProjectsBundle\\Controller\\ProjectsController::deleteAction',));
            }
            not_projects_delete:

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/reset')) {
            // fos_user_resetting_request
            if ('/reset/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/reset/reset') && preg_match('#^/reset/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/reset/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/reset/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/user')) {
            // opencontrib_view_user
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'opencontrib_view_user')), array (  '_controller' => 'OpenContrib\\UserBundle\\Controller\\DefaultController::indexAction',));
            }

            // Opencontrib_connect_user
            if ('/user' === $pathinfo) {
                return array (  '_controller' => 'OpenContrib\\UserBundle\\Controller\\ConnectController::indexAction',  '_route' => 'Opencontrib_connect_user',);
            }

        }

        // open_contrib_view_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'open_contrib_view_homepage');
            }

            return array (  '_controller' => 'OpenContrib\\ViewBundle\\Controller\\DefaultController::indexAction',  '_route' => 'open_contrib_view_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
