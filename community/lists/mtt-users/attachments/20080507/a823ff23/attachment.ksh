Index: submit/index.php
===================================================================
--- submit/index.php	(revision 1200)
+++ submit/index.php	(working copy)
@@ -1,6 +1,7 @@
 <?php
 # Copyright (c) 2006      Cisco Systems, Inc.  All rights reserved.
 # Copyright (c) 2006-2007 Sun Microsystems, Inc.  All rights reserved.
+# Copyright (c) 2008      Mellanox Technologies.  All rights reserved.
 
 #
 #
@@ -24,8 +25,7 @@ if (file_exists("$topdir/config.inc")) {
 ini_set("memory_limit", "32M");
 
 $topdir = '..';
-$ompi_home = '/l/osl/www/doc/www.open-mpi.org';
-include_once("$ompi_home/dbpassword.inc");
+include_once("$topdir/database.inc");
 include_once("$topdir/reporter.inc");
 
 
@@ -1465,60 +1465,6 @@ function get_table_indexes($table_name, 
     return simple_select($sql_cmd);
 }
 
-# Function used to determine which _POST fields
-# to INSERT. Prevent non-existent fields from being
-# INSERTed
-function get_table_fields($table_name) {
-
-    global $dbname;
-    global $id;
-
-    # These indexes are special in that they link phases
-    # together and hence, can and do show up in _POST
-    if ($table_name == "test_build")
-        $special_indexes = array("mpi_install$id");
-    elseif ($table_name == "test_run")
-        $special_indexes = array("test_build$id");
-
-    # Crude way to tell whether a field is an index
-    $is_not_index_clause =
-           "\n\t (table_name = '$table_name' AND NOT " .
-           "\n\t (data_type = 'integer' AND " .
-           "\n\t column_name ~ '_id$' AND " .
-           "\n\t table_catalog = '$dbname'))";
-
-    $is_special_index_clause = 
-           "\n\t (table_name = '$table_name' AND " .
-           "\n\t (column_name = '$special_indexes[0]'))";
-
-    $is_index_columns = array(
-            "column_name",
-            "data_type",
-            "column_default");
-
-    $sql_cmd = "\n   SELECT " . join(",",$is_index_columns) .
-               "\n\t FROM information_schema.columns WHERE " .
-               "\n\t " . 
-                     $is_not_index_clause . " OR " .
-                     $is_special_index_clause . ';';
-
-    do_pg_connect();
-
-    # This table will be easier to manage if it's
-    # keyed by column, instead of index
-    $tmp = array();
-    $arr = array();
-    $arr = select($sql_cmd);
-
-    foreach ($is_index_columns as $col) {
-        $tmp[$col] = array();
-        for ($i = 0; $i < sizeof($arr); $i++) {
-            $tmp[$col][] = $arr[$i][$col];
-        }
-    }
-    return $tmp;
-}
-
 #
 # Useful display of all the parameters posted.
 # Warning: this function could explode the memory footprint causing the 
@@ -1622,90 +1568,6 @@ function is_null_($var) {
 
 ######################################################################
 
-function do_pg_connect() {
-
-    global $dbname;
-    global $user;
-    global $pass;
-    global $pgsql_conn;
-    static $connected = false;
-
-    if (!$connected) {
-        $pgsql_conn =
-            pg_connect("host=localhost port=5432 dbname=$dbname user=$user password=$pass");
-
-        # Exit if we cannot connect
-        if (!$pgsql_conn) {
-            mtt_abort("\nCould not connect to the $dbname database; " .
-                      "submit this run later.");
-        }
-        else {
-            $connected = true;
-
-            # Serialize all transactions by default - Safer that way.
-            do_pg_query("SET SESSION CHARACTERISTICS AS TRANSACTION ISOLATION LEVEL SERIALIZABLE", false);
-        }
-
-        # pg_set_error_verbosity($pgsql_conn, PGSQL_ERRORS_VERBOSE); # PHP 5 needed
-        # pg_trace($_ENV['HOME'] . "/pgsql.trace", 'w', $pgsql_conn);
-        # debug("\npg_options: " . var_export(pg_options($pgsql_conn)));
-    }
-}
-
-function do_pg_query($cmd, $silent) {
-    $db_res = null;
-
-    do_pg_connect();
-
-    debug("\nSQL: $cmd\n");
-    if (! ($db_res = pg_query($cmd))) {
-        $out = "\nSQL QUERY: " . $cmd .
-               "\nSQL ERROR: " . pg_last_error() .
-               "\nSQL ERROR: " . pg_result_error();
-
-        # Some errors are unsurprising, allow for silence in
-        # such cases
-        if (! $silent) {
-            mtt_error($out);
-            mtt_send_mail($out);
-        }
-    }
-    debug("\nDatabase rows affected: " . pg_affected_rows($db_res) . "\n");
-
-    return $db_res;
-}
-
-# Fetch scalar value
-function select_scalar($cmd) {
-
-    $set = array();
-    $set = simple_select($cmd);
-    return array_shift($set);
-}
-
-# Fetch 1D array
-function simple_select($cmd) {
-
-    do_pg_connect();
-
-    $rows = null;
-
-    debug("\nSQL: $cmd\n");
-    if (! ($result = pg_query($cmd))) {
-        $out = "\nSQL QUERY: " . $cmd .
-               "\nSQL ERROR: " . pg_last_error() .
-               "\nSQL ERROR: " . pg_result_error();
-        mtt_error($out);
-        mtt_send_mail($out);
-    }
-    $max = pg_num_rows($result);
-    for ($i = 0; $i < $max; ++$i) {
-        $row = pg_fetch_array($result, $i, PGSQL_NUM);
-        $rows[] = $row[0];
-    }
-    return $rows;
-}
-
 # Fetch an associative hash (column name => value)
 function associative_select($cmd) {
 
@@ -1722,21 +1584,6 @@ function associative_select($cmd) {
     return pg_fetch_array($result);
 }
 
-# Fetch 2D array
-function select($cmd) {
-    do_pg_connect();
-
-    debug("\nSQL: $cmd\n");
-    if (! ($result = pg_query($cmd))) {
-        $out = "\nSQL QUERY: " . $cmd .
-               "\nSQL ERROR: " . pg_last_error() .
-               "\nSQL ERROR: " . pg_result_error();
-        mtt_error($out);
-        mtt_send_mail($out);
-    }
-    return pg_fetch_all($result);
-}
-
 ######################################################################
 
 # Function for reporting errors back to the client
