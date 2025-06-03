<?php

$page_title = "Welcome to Fresh Travel";
 
// Get the requested URL from the 'url' query parameter
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';
 
// Define available routes (URL => corresponding PHP file)
$routes = [
    '' => 'public/index.php', // Home route
    'home' => 'public/index.php', // Home route
    'homePage' => 'public/home-page.php', // Home route
    'trending' => 'public/trending.php', // Home route
    'contact' => 'public/contact.php', // contact page route
    'logout' => 'public/logout.php', // logout page route
    
    //REGISTER PAGES
    'register' => 'public/register/index.php',    // register page route
    'registerConfig' => 'public/register/register.php', // registering user page config route

    //LOGIN PAGES
    'login' => 'public/login/index.php', // login page route
    'authenticate' => 'public/login/authenticate.php', // logging in user page config route
    
    //LOGGED IN ADMIN USERS
    'admin' => 'public/admin/index.php', // admin page route
    'allRecords' => 'public/admin/all-records.php', // all records page route
    'editDetails' => 'public/admin/edit-details.php', // edit details page route
    'updateDetails' => 'public/admin/update-details.php', // update details page route
    'uploadCruise' => 'public/admin/uploads/upload-cruise.php', // upload cruise page route
     'uploadFlight' => 'public/admin/uploads/upload-flight.php', // upload flight page route
     'uploadHotel' => 'public/admin/uploads/upload-hotel.php', // upload hotel page route
    'uploadPackage' => 'public/admin/uploads/upload-package.php', // upload package holiday page route
    'uploadPage' => 'public/admin/uploads/upload-page.php', // upload page route
    'uploadTrain' => 'public/admin/uploads/upload-train.php', // upload train page route

    //LOGGED IN STAFF USER
    'staff' => 'public/staff/index.php', // account page route

    
    //LOGGED IN CUSTOMER PAGES
    'user' => 'public/user/index.php', // user page route
    'booking' => 'public/user/booking.php', // user page route
    'makePayment' => 'public/user/process-payment.php', // user page route
    'deleteAccount' => 'public/user/deleteAccount.php', //deleteAccount page route
    'processBookingAjax' => 'public/api/process_booking_ajax.php', //deleteAccount page route
    'bookingConfirm' => 'public/booking-confirmed.php', //deleteAccount page route


    //MULTI USER PAGES
    //----CUSTOMER STAFF AND ADMIN LOGGED IN
    'account' => 'public/user/account.php', // account page route
    'fullBookingDetails' => 'public/staff/full-booking-details.php', // full booking details page route

    //----STAFF AND ADMIN LOGGED IN USER
    'adminMessages' => 'public/admin/adminMessages.php', // admin messages page route
    'customerAccount' => 'public/staff/customer-account.php', // Customer Account page route
    'deleteMessage' => 'public/admin/deleteMessage.php', // delete message page route
    'searchCustomer' => 'public/staff/search-customer.php', // Search Customers page route
    'viewFullDetails' => 'public/staff/view-full-booking-details.php', // Full Booking Details page route


    //ALL OTHER NON LOGGED IN PAGES

    //-----HOLIDAYS PAGES
    'adventureHolidays' => 'public/adventure-holidays.php', // adventureHolidays page route
    'beachHolidays' => 'public/beach-holidays.php', // beachHolidays page route
    'campingBreaks' => 'public/camping-break.php', // campingBreaks page route
    'cityBreaks' => 'public/city-break.php', // cityBreaks page route
    'packageDetails' => 'public/package-details.php', // package holidays page route
    'packageHolidays' => 'public/package-holidays.php', // package holidays page route
    'skiHolidays' => 'public/ski-holidays.php', // skiHolidays page route
    'trendingPackageDetails' => 'public/trending-package-details.php', // package holidays page route
    'winterSun' => 'public/winter-sun.php', // winterSun page route
    'packageDetails2' => 'public/package-details-2.php', // winterSun page route


    //-----FLIGHTS PAGES
    'allFlights' => 'public/flights.php', // flights main page route
    'departureAirports' => 'public/departure-airports.php', // flights destinations page route
    'destinations' => 'public/destinations.php', // flights destinations page route
    'flightDetails' => 'public/flight-details.php', // flights destinations page route

    //------HOTELS PAGES
    'allHotels' => 'public/hotels.php', // Hotels main page route
    'hotelDetails' => 'public/hotel-details.php', // Hotel details page route

    //------CRUISE PAGES
    'cruiseHolidays' => 'public/cruises.php', // cruises main page route
    'cruiseDetails' => 'public/cruise-details.php', // cruises main page route
    'getPorts' => 'public/get-ports.php', // cruises main page route

    //------RAIL JOURNEY PAGES
    'railJourneys' => 'public/rail-journeys.php', // Rail Journey main page route
    'trainDetails' => 'public/train-details.php', // Train Details main page route
    'getCities' => 'public/get_cities.php', // Get Cities main page route


    //------SEARCH RESULTS SECTION
    'searchPackages' => 'public/search/search-packages.php', // search package holidays page route
    'searchFlights' => 'public/search/search-flights.php', // search flights page route
    'searchHotels' => 'public/search/search-hotels.php', // search hotels page route
    'searchCruises' => 'public/search/search-cruises.php', // search cruises page route
    'cruiseSearch' => 'public/search/search-cruises-btn.php', // search cruises via button page route
    'searchTrains' => 'public/search/search-trains.php', // search hotels page route
    'trainSearch' => 'public/search/search-rail-btn.php', // search hotels page route

 
];
 
// Check if the URL matches a route
if (array_key_exists($url, $routes)) {
    require $routes[$url];  // Load the appropriate file for the route
} else {
    // If no route matches, show a 404 page
    require '404.php';
}

?>
