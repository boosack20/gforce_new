<?php

/***************************** ROUTER REDIRECTTS *****************************/

    $router->get('/', function() {
        // SET DOCUMENT ROOT
        $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        $listClasses = getAllClasses();
        
        // RENDER PAGE
        include $root.'/pages/home.php';
    });

    $router->get('/cart', function() {
        // SET DOCUMENT ROOT
        $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
        // RENDER PAGE
        include $root.'/components/forms/Cart/cart.php';
    });

    $router->get('/classes', function() {
        // SET DOCUMENT ROOT
        $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        $listClasses = getAllClasses();
        // RENDER PAGE
        include $root.'/pages/classes.php';
    });




    // $router->get('/accounts', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     // RENDER PAGE
    //     include $root.'/pages/accounts.php';
    // });

    // $router->get('/applicant', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     $listApplicant = getAllApplicants();
    //     // RENDER PAGE
    //     include $root.'/pages/applicant.php';
    // });

    // $router->get('/add-applicant', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     $listCustomerType = getCustomerTypes();
    //     $listZone = getZones();
    //     // RENDER PAGE
    //     include $root.'/components/forms/Applicant/add-applicant.php';
    // });

    // $router->get('/service-orders', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     // RENDER PAGE
    //     include $root.'/pages/service-order.php';
    // });

    // $router->get('/create-service-order', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     // RENDER PAGE
    //     include $root.'/components/forms/ServiceOrder/add-so.php';
    // });

    // $router->get('/approve-service-order', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     // RENDER PAGE
    //     include $root.'/pages/applicant.php';
    // });

    // $router->get('/print-service-order', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     // RENDER PAGE
    //     include $root.'/pages/applicant.php';
    // });

    // $router->get('/payment-entry', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     // RENDER PAGE
    //     include $root.'/pages/payment-entry.php';
    // });

    // $router->get('/cash-denomination', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     // RENDER PAGE
    //     include $root.'/pages/cash-denomination.php';
    // });

    // $router->get('/billing', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     // RENDER PAGE
    //     include $root.'/pages/billing.php';
    // });

    // $router->get('/disconnection', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     // RENDER PAGE
    //     include $root.'/pages/disconnection.php';
    // });

    // $router->get('/customer', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     // RENDER PAGE
    //     include $root.'/pages/customer.php';
    // });

    // $router->get('/zone', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     $listZone = getZones();
    //     // RENDER PAGE
    //     include $root.'/pages/zone.php';
    // });

    // $router->get('/customer-type', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     $listCustomerType = getCustomerTypes();
    //     // RENDER PAGE
    //     include $root.'/pages/customer-type.php';
    // });

    // $router->get('/meter-size', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     $listMeterSize = getMeterSize();
    //     // RENDER PAGE
    //     include $root.'/pages/meter_size.php';
    // });

    // $router->get('/water-rates', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     $listMeterSize = getMeterSize();
    //     $listCustomerType = getCustomerTypes();
    //     $listWaterRates = getWaterRates();
    //     // RENDER PAGE
    //     include $root.'/pages/water-rates.php';
    // });

    // $router->get('/chart-of-accounts', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     $listCharts = getCharts();
    //     // RENDER PAGE
    //     include $root.'/pages/chart-of-accounts.php';
    // });

    // $router->get('/view-customer/{id}', function($id) {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
    //     $parent = '.';
        
    //     // RENDER PAGE
    //     include $root.'/components/forms/Customer/view-customer.php';
    // });

    // $router->get('/reports', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     // RENDER PAGE
    //     include $root.'/pages/reports.php';
    // });

    
    // $router->get('/master-list', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     $companyDetails = getCompanyDetails();
    //     $masterList = getMasterList();
    //     // RENDER PAGE
    //     include $root.'/components/forms/Reports/master-list.php';
    // });
    
    // $router->get('/penalty', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     $listZone = getZones();
    //     $companyDetails = getCompanyDetails();
    //     // RENDER PAGE
    //     include $root.'/components/forms/Reports/penalty.php';
    // });
    
/***************************** END ROUTER REDIRECTS *****************************/

?>