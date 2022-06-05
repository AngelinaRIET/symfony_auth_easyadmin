<?php

namespace ContainerWGheMBP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EED9tAVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eED9tAV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eED9tAV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.st3ASTR', 'get_ServiceLocator_St3ASTRService', true],
            'App\\Controller\\Admin\\StudentCrudController::autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StudentCrudController::batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\StudentCrudController::configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\StudentCrudController::configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\StudentCrudController::configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\StudentCrudController::configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\StudentCrudController::configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\StudentCrudController::createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\StudentCrudController::createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\StudentCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\StudentCrudController::createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\StudentCrudController::createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\StudentCrudController::delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StudentCrudController::deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\StudentCrudController::detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StudentCrudController::edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StudentCrudController::index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StudentCrudController::new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StudentCrudController::persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\StudentCrudController::renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StudentCrudController::updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.pXhSQsU', 'get_ServiceLocator_PXhSQsUService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.Kn9Vk3z', 'get_ServiceLocator_Kn9Vk3zService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.st3ASTR', 'get_ServiceLocator_St3ASTRService', true],
            'App\\Controller\\Admin\\StudentCrudController:autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StudentCrudController:batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\StudentCrudController:configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\StudentCrudController:configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\StudentCrudController:configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\StudentCrudController:configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\StudentCrudController:configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\StudentCrudController:createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\StudentCrudController:createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\StudentCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\StudentCrudController:createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\StudentCrudController:createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\StudentCrudController:delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StudentCrudController:deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\StudentCrudController:detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StudentCrudController:edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StudentCrudController:index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StudentCrudController:new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StudentCrudController:persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\StudentCrudController:renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StudentCrudController:updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.pXhSQsU', 'get_ServiceLocator_PXhSQsUService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.Kn9Vk3z', 'get_ServiceLocator_Kn9Vk3zService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\StudentCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\StudentCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\StudentCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\StudentCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\StudentCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\StudentCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\StudentCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\StudentCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\StudentCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\StudentCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\StudentCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\StudentCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\StudentCrudController::delete' => '?',
            'App\\Controller\\Admin\\StudentCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\StudentCrudController::detail' => '?',
            'App\\Controller\\Admin\\StudentCrudController::edit' => '?',
            'App\\Controller\\Admin\\StudentCrudController::index' => '?',
            'App\\Controller\\Admin\\StudentCrudController::new' => '?',
            'App\\Controller\\Admin\\StudentCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\StudentCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\StudentCrudController::updateEntity' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\StudentCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\StudentCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\StudentCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\StudentCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\StudentCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\StudentCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\StudentCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\StudentCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\StudentCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\StudentCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\StudentCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\StudentCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\StudentCrudController:delete' => '?',
            'App\\Controller\\Admin\\StudentCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\StudentCrudController:detail' => '?',
            'App\\Controller\\Admin\\StudentCrudController:edit' => '?',
            'App\\Controller\\Admin\\StudentCrudController:index' => '?',
            'App\\Controller\\Admin\\StudentCrudController:new' => '?',
            'App\\Controller\\Admin\\StudentCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\StudentCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\StudentCrudController:updateEntity' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}