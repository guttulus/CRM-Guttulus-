
Session "default" started at 2012-02-18T08:30:39+0000
#1 ERROR: Error: chmod() [<a href='function.chmod'>function.chmod</a>]: Operation not permitted in '/var/www/pms/environment/classes/AutoLoader.class.php' on line 151 (error code: 2)
Time since start: 0.17345809936523 seconds
-------------------------------------------------------------------------------

Session "default" started at 2012-02-18T08:32:46+0000
#1 ERROR: Error: Use of undefined constant ADMINISTRATION_TAB_TIME - assumed 'ADMINISTRATION_TAB_TIME' in '/var/www/pms/application/views/user/time.php' on line 4 (error code: 8)
Time since start: 0.057696104049683 seconds
-------------------------------------------------------------------------------

Session "default" started at 2012-02-18T12:45:18+0000
#1 ERROR: Error: gmmktime() [<a href='function.gmmktime'>function.gmmktime</a>]: The is_dst parameter is deprecated in '/var/www/pms/application/views/milestone/calendar.php' on line 55 (error code: 8192)
Time since start: 0.079306125640869 seconds
-------------------------------------------------------------------------------

Session "default" started at 2012-02-18T12:45:25+0000
#1 ERROR: Error: Assigning the return value of new by reference is deprecated in '/var/www/pms/application/plugins/reports/library/jpgraph/src/jpgraph_plotmark.inc' on line 62 (error code: 8192)
Time since start: 0.16349792480469 seconds
-------------------------------------------------------------------------------

Session "default" started at 2012-02-18T12:45:34+0000
#1 ERROR: Error: Assigning the return value of new by reference is deprecated in '/var/www/pms/application/plugins/reports/library/jpgraph/src/jpgraph_plotmark.inc' on line 62 (error code: 8192)
Time since start: 0.11162710189819 seconds
-------------------------------------------------------------------------------

Session "default" started at 2012-02-22T10:03:27+0000
#1 FATAL: exception 'DBQueryError' with message 'Query failed with message 'Table 'pms_lemosys.pp088_config_options' doesn't exist'' in /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php:373
    Stack trace:
    #0 /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php(289): AbstractDBAdapter->prepareAndExecute('SELECT * FROM `...', NULL)
    #1 /var/www/pms/environment/library/database/DB.class.php(193): AbstractDBAdapter->executeAll('SELECT * FROM `...', NULL)
    #2 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(184): DB::executeAll('SELECT * FROM `...')
    #3 /var/www/pms/application/models/config_options/base/BaseConfigOptions.class.php(101): DataManager->find(Array)
    #4 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(239): BaseConfigOptions->find(Array)
    #5 /var/www/pms/application/models/config_options/base/BaseConfigOptions.class.php(135): DataManager->findOne(Array)
    #6 /var/www/pms/application/models/config_options/base/BaseConfigOptions.class.php(137): BaseConfigOptions->findOne(Array)
    #7 /var/www/pms/application/models/config_options/ConfigOptions.class.php(67): BaseConfigOptions::findOne(Array)
    #8 /var/www/pms/application/models/config_options/ConfigOptions.class.php(53): ConfigOptions::getByName('session_lifetim...')
    #9 /var/www/pms/application/functions.php(302): ConfigOptions::getOptionValue('session_lifetim...', 3600)
    #10 /var/www/pms/init.php(136): config_option('session_lifetim...', 3600)
    #11 /var/www/pms/index.php(11): require('/var/www/pms/in...')
    #12 {main}
Time since start: 0.0052120685577393 seconds
-------------------------------------------------------------------------------

Session "default" started at 2012-02-22T10:03:30+0000
#1 FATAL: exception 'DBQueryError' with message 'Query failed with message 'Table 'pms_lemosys.pp088_config_options' doesn't exist'' in /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php:373
    Stack trace:
    #0 /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php(289): AbstractDBAdapter->prepareAndExecute('SELECT * FROM `...', NULL)
    #1 /var/www/pms/environment/library/database/DB.class.php(193): AbstractDBAdapter->executeAll('SELECT * FROM `...', NULL)
    #2 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(184): DB::executeAll('SELECT * FROM `...')
    #3 /var/www/pms/application/models/config_options/base/BaseConfigOptions.class.php(101): DataManager->find(Array)
    #4 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(239): BaseConfigOptions->find(Array)
    #5 /var/www/pms/application/models/config_options/base/BaseConfigOptions.class.php(135): DataManager->findOne(Array)
    #6 /var/www/pms/application/models/config_options/base/BaseConfigOptions.class.php(137): BaseConfigOptions->findOne(Array)
    #7 /var/www/pms/application/models/config_options/ConfigOptions.class.php(67): BaseConfigOptions::findOne(Array)
    #8 /var/www/pms/application/models/config_options/ConfigOptions.class.php(53): ConfigOptions::getByName('session_lifetim...')
    #9 /var/www/pms/application/functions.php(302): ConfigOptions::getOptionValue('session_lifetim...', 3600)
    #10 /var/www/pms/init.php(136): config_option('session_lifetim...', 3600)
    #11 /var/www/pms/index.php(11): require('/var/www/pms/in...')
    #12 {main}
Time since start: 0.0040590763092041 seconds
-------------------------------------------------------------------------------

Session "default" started at 2012-02-22T10:03:32+0000
#1 FATAL: exception 'DBQueryError' with message 'Query failed with message 'Table 'pms_lemosys.pp088_config_options' doesn't exist'' in /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php:373
    Stack trace:
    #0 /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php(289): AbstractDBAdapter->prepareAndExecute('SELECT * FROM `...', NULL)
    #1 /var/www/pms/environment/library/database/DB.class.php(193): AbstractDBAdapter->executeAll('SELECT * FROM `...', NULL)
    #2 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(184): DB::executeAll('SELECT * FROM `...')
    #3 /var/www/pms/application/models/config_options/base/BaseConfigOptions.class.php(101): DataManager->find(Array)
    #4 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(239): BaseConfigOptions->find(Array)
    #5 /var/www/pms/application/models/config_options/base/BaseConfigOptions.class.php(135): DataManager->findOne(Array)
    #6 /var/www/pms/application/models/config_options/base/BaseConfigOptions.class.php(137): BaseConfigOptions->findOne(Array)
    #7 /var/www/pms/application/models/config_options/ConfigOptions.class.php(67): BaseConfigOptions::findOne(Array)
    #8 /var/www/pms/application/models/config_options/ConfigOptions.class.php(53): ConfigOptions::getByName('session_lifetim...')
    #9 /var/www/pms/application/functions.php(302): ConfigOptions::getOptionValue('session_lifetim...', 3600)
    #10 /var/www/pms/init.php(136): config_option('session_lifetim...', 3600)
    #11 /var/www/pms/index.php(11): require('/var/www/pms/in...')
    #12 {main}
Time since start: 0.0040991306304932 seconds
-------------------------------------------------------------------------------

Session "default" started at 2012-02-22T10:04:35+0000
#1 FATAL: exception 'DBQueryError' with message 'Query failed with message 'Unknown column 'updated_by_id' in 'field list''' in /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php:373
    Stack trace:
    #0 /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php(270): AbstractDBAdapter->prepareAndExecute('SELECT `id`, `u...', NULL)
    #1 /var/www/pms/environment/library/database/DB.class.php(177): AbstractDBAdapter->executeOne('SELECT `id`, `u...', NULL)
    #2 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(398): DB::executeOne('SELECT `id`, `u...')
    #3 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(359): DataManager->loadRow(1)
    #4 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(253): DataManager->load(1, false)
    #5 /var/www/pms/application/models/users/base/BaseUsers.class.php(154): DataManager->findById(1, false)
    #6 /var/www/pms/application/models/users/base/BaseUsers.class.php(156): BaseUsers->findById(1, false)
    #7 /var/www/pms/application/models/ApplicationDataObject.class.php(100): BaseUsers->findById(1)
    #8 /var/www/pms/application/models/CompanyWebsite.class.php(74): ApplicationDataObject->getCreatedBy()
    #9 /var/www/pms/application/models/CompanyWebsite.class.php(46): CompanyWebsite->initCompany()
    #10 /var/www/pms/application/models/CompanyWebsite.class.php(54): CompanyWebsite->init()
    #11 /var/www/pms/application/application.php(33): CompanyWebsite::init()
    #12 /var/www/pms/init.php(178): require('/var/www/pms/ap...')
    #13 /var/www/pms/index.php(11): require('/var/www/pms/in...')
    #14 {main}
Time since start: 0.03459906578064 seconds
-------------------------------------------------------------------------------

Session "default" started at 2012-02-22T10:04:36+0000
#1 FATAL: exception 'DBQueryError' with message 'Query failed with message 'Unknown column 'updated_by_id' in 'field list''' in /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php:373
    Stack trace:
    #0 /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php(270): AbstractDBAdapter->prepareAndExecute('SELECT `id`, `u...', NULL)
    #1 /var/www/pms/environment/library/database/DB.class.php(177): AbstractDBAdapter->executeOne('SELECT `id`, `u...', NULL)
    #2 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(398): DB::executeOne('SELECT `id`, `u...')
    #3 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(359): DataManager->loadRow(1)
    #4 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(253): DataManager->load(1, false)
    #5 /var/www/pms/application/models/users/base/BaseUsers.class.php(154): DataManager->findById(1, false)
    #6 /var/www/pms/application/models/users/base/BaseUsers.class.php(156): BaseUsers->findById(1, false)
    #7 /var/www/pms/application/models/ApplicationDataObject.class.php(100): BaseUsers->findById(1)
    #8 /var/www/pms/application/models/CompanyWebsite.class.php(74): ApplicationDataObject->getCreatedBy()
    #9 /var/www/pms/application/models/CompanyWebsite.class.php(46): CompanyWebsite->initCompany()
    #10 /var/www/pms/application/models/CompanyWebsite.class.php(54): CompanyWebsite->init()
    #11 /var/www/pms/application/application.php(33): CompanyWebsite::init()
    #12 /var/www/pms/init.php(178): require('/var/www/pms/ap...')
    #13 /var/www/pms/index.php(11): require('/var/www/pms/in...')
    #14 {main}
Time since start: 0.029989957809448 seconds
-------------------------------------------------------------------------------

Session "default" started at 2012-02-22T10:04:37+0000
#1 FATAL: exception 'DBQueryError' with message 'Query failed with message 'Unknown column 'updated_by_id' in 'field list''' in /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php:373
    Stack trace:
    #0 /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php(270): AbstractDBAdapter->prepareAndExecute('SELECT `id`, `u...', NULL)
    #1 /var/www/pms/environment/library/database/DB.class.php(177): AbstractDBAdapter->executeOne('SELECT `id`, `u...', NULL)
    #2 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(398): DB::executeOne('SELECT `id`, `u...')
    #3 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(359): DataManager->loadRow(1)
    #4 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(253): DataManager->load(1, false)
    #5 /var/www/pms/application/models/users/base/BaseUsers.class.php(154): DataManager->findById(1, false)
    #6 /var/www/pms/application/models/users/base/BaseUsers.class.php(156): BaseUsers->findById(1, false)
    #7 /var/www/pms/application/models/ApplicationDataObject.class.php(100): BaseUsers->findById(1)
    #8 /var/www/pms/application/models/CompanyWebsite.class.php(74): ApplicationDataObject->getCreatedBy()
    #9 /var/www/pms/application/models/CompanyWebsite.class.php(46): CompanyWebsite->initCompany()
    #10 /var/www/pms/application/models/CompanyWebsite.class.php(54): CompanyWebsite->init()
    #11 /var/www/pms/application/application.php(33): CompanyWebsite::init()
    #12 /var/www/pms/init.php(178): require('/var/www/pms/ap...')
    #13 /var/www/pms/index.php(11): require('/var/www/pms/in...')
    #14 {main}
Time since start: 0.033092975616455 seconds
-------------------------------------------------------------------------------

Session "default" started at 2012-02-22T10:04:37+0000
#1 FATAL: exception 'DBQueryError' with message 'Query failed with message 'Unknown column 'updated_by_id' in 'field list''' in /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php:373
    Stack trace:
    #0 /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php(270): AbstractDBAdapter->prepareAndExecute('SELECT `id`, `u...', NULL)
    #1 /var/www/pms/environment/library/database/DB.class.php(177): AbstractDBAdapter->executeOne('SELECT `id`, `u...', NULL)
    #2 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(398): DB::executeOne('SELECT `id`, `u...')
    #3 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(359): DataManager->loadRow(1)
    #4 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(253): DataManager->load(1, false)
    #5 /var/www/pms/application/models/users/base/BaseUsers.class.php(154): DataManager->findById(1, false)
    #6 /var/www/pms/application/models/users/base/BaseUsers.class.php(156): BaseUsers->findById(1, false)
    #7 /var/www/pms/application/models/ApplicationDataObject.class.php(100): BaseUsers->findById(1)
    #8 /var/www/pms/application/models/CompanyWebsite.class.php(74): ApplicationDataObject->getCreatedBy()
    #9 /var/www/pms/application/models/CompanyWebsite.class.php(46): CompanyWebsite->initCompany()
    #10 /var/www/pms/application/models/CompanyWebsite.class.php(54): CompanyWebsite->init()
    #11 /var/www/pms/application/application.php(33): CompanyWebsite::init()
    #12 /var/www/pms/init.php(178): require('/var/www/pms/ap...')
    #13 /var/www/pms/index.php(11): require('/var/www/pms/in...')
    #14 {main}
Time since start: 0.034149885177612 seconds
-------------------------------------------------------------------------------

Session "default" started at 2012-02-22T10:04:37+0000
#1 FATAL: exception 'DBQueryError' with message 'Query failed with message 'Unknown column 'updated_by_id' in 'field list''' in /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php:373
    Stack trace:
    #0 /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php(270): AbstractDBAdapter->prepareAndExecute('SELECT `id`, `u...', NULL)
    #1 /var/www/pms/environment/library/database/DB.class.php(177): AbstractDBAdapter->executeOne('SELECT `id`, `u...', NULL)
    #2 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(398): DB::executeOne('SELECT `id`, `u...')
    #3 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(359): DataManager->loadRow(1)
    #4 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(253): DataManager->load(1, false)
    #5 /var/www/pms/application/models/users/base/BaseUsers.class.php(154): DataManager->findById(1, false)
    #6 /var/www/pms/application/models/users/base/BaseUsers.class.php(156): BaseUsers->findById(1, false)
    #7 /var/www/pms/application/models/ApplicationDataObject.class.php(100): BaseUsers->findById(1)
    #8 /var/www/pms/application/models/CompanyWebsite.class.php(74): ApplicationDataObject->getCreatedBy()
    #9 /var/www/pms/application/models/CompanyWebsite.class.php(46): CompanyWebsite->initCompany()
    #10 /var/www/pms/application/models/CompanyWebsite.class.php(54): CompanyWebsite->init()
    #11 /var/www/pms/application/application.php(33): CompanyWebsite::init()
    #12 /var/www/pms/init.php(178): require('/var/www/pms/ap...')
    #13 /var/www/pms/index.php(11): require('/var/www/pms/in...')
    #14 {main}
Time since start: 0.028519153594971 seconds
-------------------------------------------------------------------------------

Session "default" started at 2012-02-22T10:04:43+0000
#1 FATAL: exception 'DBQueryError' with message 'Query failed with message 'Unknown column 'updated_by_id' in 'field list''' in /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php:373
    Stack trace:
    #0 /var/www/pms/environment/library/database/adapters/AbstractDBAdapter.class.php(270): AbstractDBAdapter->prepareAndExecute('SELECT `id`, `u...', NULL)
    #1 /var/www/pms/environment/library/database/DB.class.php(177): AbstractDBAdapter->executeOne('SELECT `id`, `u...', NULL)
    #2 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(398): DB::executeOne('SELECT `id`, `u...')
    #3 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(359): DataManager->loadRow(1)
    #4 /var/www/pms/environment/classes/dataaccess/DataManager.class.php(253): DataManager->load(1, false)
    #5 /var/www/pms/application/models/users/base/BaseUsers.class.php(154): DataManager->findById(1, false)
    #6 /var/www/pms/application/models/users/base/BaseUsers.class.php(156): BaseUsers->findById(1, false)
    #7 /var/www/pms/application/models/ApplicationDataObject.class.php(100): BaseUsers->findById(1)
    #8 /var/www/pms/application/models/CompanyWebsite.class.php(74): ApplicationDataObject->getCreatedBy()
    #9 /var/www/pms/application/models/CompanyWebsite.class.php(46): CompanyWebsite->initCompany()
    #10 /var/www/pms/application/models/CompanyWebsite.class.php(54): CompanyWebsite->init()
    #11 /var/www/pms/application/application.php(33): CompanyWebsite::init()
    #12 /var/www/pms/init.php(178): require('/var/www/pms/ap...')
    #13 /var/www/pms/index.php(11): require('/var/www/pms/in...')
    #14 {main}
Time since start: 0.03375506401062 seconds
-------------------------------------------------------------------------------

Session "default" started at 2012-02-29T15:39:07+0000
#1 ERROR: Error: Use of undefined constant ADMINISTRATION_TAB_TIME - assumed 'ADMINISTRATION_TAB_TIME' in '/var/www/pms/application/views/user/time.php' on line 4 (error code: 8)
Time since start: 0.070154905319214 seconds
-------------------------------------------------------------------------------

Session "default" started at 2012-02-29T15:39:57+0000
#1 ERROR: Error: Use of undefined constant ADMINISTRATION_TAB_TIME - assumed 'ADMINISTRATION_TAB_TIME' in '/var/www/pms/application/views/user/time.php' on line 4 (error code: 8)
Time since start: 0.062199115753174 seconds
-------------------------------------------------------------------------------
