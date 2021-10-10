<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.definition.factory.order' shared service.

$a = ${($_ = isset($this->services['prestashop.core.form.choice_provider.order_state_by_id']) ? $this->services['prestashop.core.form.choice_provider.order_state_by_id'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_OrderStateByIdService.php')) && false ?: '_'};

$this->services['prestashop.core.grid.definition.factory.order'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\OrderGridDefinitionFactory(${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.form.choice_provider.order_countries']) ? $this->services['prestashop.adapter.form.choice_provider.order_countries'] : ($this->services['prestashop.adapter.form.choice_provider.order_countries'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\OrderCountriesChoiceProvider())) && false ?: '_'}, $a, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->language->date_format_full, ${($_ = isset($this->services['prestashop.adapter.feature.multistore']) ? $this->services['prestashop.adapter.feature.multistore'] : $this->load('getPrestashop_Adapter_Feature_MultistoreService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.grid.action.row.accessibility_checker.print_invoice']) ? $this->services['prestashop.core.grid.action.row.accessibility_checker.print_invoice'] : ($this->services['prestashop.core.grid.action.row.accessibility_checker.print_invoice'] = new \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\PrintInvoiceAccessibilityChecker())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.grid.action.row.accessibility_checker.print_delivery_slip']) ? $this->services['prestashop.core.grid.action.row.accessibility_checker.print_delivery_slip'] : ($this->services['prestashop.core.grid.action.row.accessibility_checker.print_delivery_slip'] = new \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\PrintDeliverySlipAccessibilityChecker())) && false ?: '_'}, $a);

$instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});

return $instance;