<?php
/* ----------------------------------------------------------------------------
 * Easy!Appointments - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2020, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Easy!Appointments Configuration File
 *
 * Set your installation BASE_URL * without the trailing slash * and the database
 * credentials in order to connect to the database. You can enable the DEBUG_MODE
 * while developing the application.
 *
 * Set the default language by changing the LANGUAGE constant. For a full list of
 * available languages look at the /application/config/config.php file.
 *
 * IMPORTANT:
 * If you are updating from version 1.0 you will have to create a new "config.php"
 * file because the old "configuration.php" is not used anymore.
 */
class Config {

    // ------------------------------------------------------------------------
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------

    const BASE_URL      = 'http://app-bradtke.qdbk5offhg-ewx3lvg0q6zq.p.runcloud.link';
    const LANGUAGE      = 'english';
    const DEBUG_MODE    = FALSE;

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------

    const DB_HOST       = 'localhost';
    const DB_NAME       = 'calcaldb';
    const DB_USERNAME   = 'calcalun';
    const DB_PASSWORD   = '.%*{=+*^}{+^,:..=_++{.:+-~#~+*@+';

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------

    const GOOGLE_SYNC_FEATURE   = FALSE; // Enter TRUE or FALSE
    const GOOGLE_PRODUCT_NAME   = 'plexiform-ion-309914 ';
    const GOOGLE_CLIENT_ID      = '977283241226-o2moi8mhsuluurf9l43ddpt3nrl8juih.apps.googleusercontent.com';
    const GOOGLE_CLIENT_SECRET  = 'rbwOkvXC6bQy97ToqkwojOKm';
    const GOOGLE_API_KEY        = 'AIzaSyB1ncT0wVmCMBX9ZxKhAiIo9Y1Ny7qe0Pw';
}

/* End of file config.php */
/* Location: ./config.php */
