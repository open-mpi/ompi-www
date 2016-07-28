<?
$subject_val = "Re: [MTT users] MTT server side problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 04:49:24 2008" -->
<!-- isoreceived="20080507084924" -->
<!-- sent="Wed, 07 May 2008 11:49:15 +0300" -->
<!-- isosent="20080507084915" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT server side problem" -->
<!-- id="48216D0B.2020104_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080506171122.GT51303_at_sun.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [MTT users] MTT server side problem<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 04:49:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0532.php">Wen Hao Wang: "[MTT users] Fail to run MTT, maybe authorization failure"</a>
<li><strong>Previous message:</strong> <a href="0530.php">Ethan Mallove: "Re: [MTT users] MTT server side problem"</a>
<li><strong>In reply to:</strong> <a href="0530.php">Ethan Mallove: "Re: [MTT users] MTT server side problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0534.php">Josh Hursey: "Re: [MTT users] MTT server side problem"</a>
<li><strong>Reply:</strong> <a href="0534.php">Josh Hursey: "Re: [MTT users] MTT server side problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I upgraded the server side (the mtt is still running , so don't know if 
<br>
the problem was resolved)
<br>
During upgrade I had some problem with the submit/index.php script, it 
<br>
had some duplicated functions and some of them were broken.
<br>
Please review the attached patch.
<br>
<p>Pasha
<br>
<p>Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; On Tue, May/06/2008 06:29:33PM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure which cron jobs you're referring to. Do you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mean these?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="https://svn.open-mpi.org/trac/mtt/browser/trunk/server/php/cron">https://svn.open-mpi.org/trac/mtt/browser/trunk/server/php/cron</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I talked about this one: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/mtt/wiki/ServerMaintenance">https://svn.open-mpi.org/trac/mtt/wiki/ServerMaintenance</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing you would only be concerned with the below
</span><br>
<span class="quotelev1">&gt; periodic-maintenance.pl script, which just runs
</span><br>
<span class="quotelev1">&gt; ANALYZE/VACUUM queries. I think you can start that up
</span><br>
<span class="quotelev1">&gt; whenever you want (and it should optimize the Reporter).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/mtt/browser/trunk/server/sql/cron/periodic-maintenance.pl">https://svn.open-mpi.org/trac/mtt/browser/trunk/server/sql/cron/periodic-maintenance.pl</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only thing there are the regular
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-results_at_[hidden] email alerts and some out-of-date
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DB monitoring junk. You can ignore that stuff.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh, are there some nightly (DB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pruning/cleaning/vacuuming?) cron jobs that Pasha should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ethan Mallove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Pasha,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I thought this issue was solved in r1119 (see below). Do you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have the latest mtt/server scripts?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   <a href="https://svn.open-mpi.org/trac/mtt/changeset/1119/trunk/server/php/submit">https://svn.open-mpi.org/trac/mtt/changeset/1119/trunk/server/php/submit</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, May/06/2008 03:26:43PM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; About the issue:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1. On client side I see &quot;&quot;*** WARNING: MTTDatabase client did not get a 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; serial&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As result of the error some of MTT results is not visible via the web 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; reporter
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2. On server side I found follow error message:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [client 10.4.3.214] PHP Fatal error:  Allowed memory size of 33554432 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bytes exhausted (tried to allocate 23592960
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bytes) in /.autodirect/swgwork/MTT/mtt/submit/index.php(79) : eval()'d 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; code on line 77515
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:26:05 2008] [notice] caught SIGTERM, shutting down
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] suEXEC mechanism enabled (wrapper: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr/sbin/suexec)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] Digest: generating secret for digest 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; authentication ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] Digest: done
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] LDAP: Built with OpenLDAP LDAP SDK
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] LDAP: SSL support unavailable
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; My memory limit in php.ini file was set on 256MB !
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any ideas ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies

</pre>
<p>
Index: submit/index.php
<br>
===================================================================
<br>
--- submit/index.php	(revision 1200)
<br>
+++ submit/index.php	(working copy)
<br>
@@ -1,6 +1,7 @@
<br>
&nbsp;&lt;?php
<br>
&nbsp;# Copyright (c) 2006      Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;# Copyright (c) 2006-2007 Sun Microsystems, Inc.  All rights reserved.
<br>
+# Copyright (c) 2008      Mellanox Technologies.  All rights reserved.
<br>
&nbsp;
<br>
&nbsp;#
<br>
&nbsp;#
<br>
@@ -24,8 +25,7 @@ if (file_exists(&quot;$topdir/config.inc&quot;)) {
<br>
&nbsp;ini_set(&quot;memory_limit&quot;, &quot;32M&quot;);
<br>
&nbsp;
<br>
&nbsp;$topdir = '..';
<br>
-$ompi_home = '/l/osl/www/doc/www.open-mpi.org';
<br>
-include_once(&quot;$ompi_home/dbpassword.inc&quot;);
<br>
+include_once(&quot;$topdir/database.inc&quot;);
<br>
&nbsp;include_once(&quot;$topdir/reporter.inc&quot;);
<br>
&nbsp;
<br>
&nbsp;
<br>
@@ -1465,60 +1465,6 @@ function get_table_indexes($table_name, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return simple_select($sql_cmd);
<br>
&nbsp;}
<br>
&nbsp;
<br>
-# Function used to determine which _POST fields
<br>
-# to INSERT. Prevent non-existent fields from being
<br>
-# INSERTed
<br>
-function get_table_fields($table_name) {
<br>
-
<br>
-    global $dbname;
<br>
-    global $id;
<br>
-
<br>
-    # These indexes are special in that they link phases
<br>
-    # together and hence, can and do show up in _POST
<br>
-    if ($table_name == &quot;test_build&quot;)
<br>
-        $special_indexes = array(&quot;mpi_install$id&quot;);
<br>
-    elseif ($table_name == &quot;test_run&quot;)
<br>
-        $special_indexes = array(&quot;test_build$id&quot;);
<br>
-
<br>
-    # Crude way to tell whether a field is an index
<br>
-    $is_not_index_clause =
<br>
-           &quot;\n\t (table_name = '$table_name' AND NOT &quot; .
<br>
-           &quot;\n\t (data_type = 'integer' AND &quot; .
<br>
-           &quot;\n\t column_name ~ '_id$' AND &quot; .
<br>
-           &quot;\n\t table_catalog = '$dbname'))&quot;;
<br>
-
<br>
-    $is_special_index_clause = 
<br>
-           &quot;\n\t (table_name = '$table_name' AND &quot; .
<br>
-           &quot;\n\t (column_name = '$special_indexes[0]'))&quot;;
<br>
-
<br>
-    $is_index_columns = array(
<br>
-            &quot;column_name&quot;,
<br>
-            &quot;data_type&quot;,
<br>
-            &quot;column_default&quot;);
<br>
-
<br>
-    $sql_cmd = &quot;\n   SELECT &quot; . join(&quot;,&quot;,$is_index_columns) .
<br>
-               &quot;\n\t FROM information_schema.columns WHERE &quot; .
<br>
-               &quot;\n\t &quot; . 
<br>
-                     $is_not_index_clause . &quot; OR &quot; .
<br>
-                     $is_special_index_clause . ';';
<br>
-
<br>
-    do_pg_connect();
<br>
-
<br>
-    # This table will be easier to manage if it's
<br>
-    # keyed by column, instead of index
<br>
-    $tmp = array();
<br>
-    $arr = array();
<br>
-    $arr = select($sql_cmd);
<br>
-
<br>
-    foreach ($is_index_columns as $col) {
<br>
-        $tmp[$col] = array();
<br>
-        for ($i = 0; $i &lt; sizeof($arr); $i++) {
<br>
-            $tmp[$col][] = $arr[$i][$col];
<br>
-        }
<br>
-    }
<br>
-    return $tmp;
<br>
-}
<br>
-
<br>
&nbsp;#
<br>
&nbsp;# Useful display of all the parameters posted.
<br>
&nbsp;# Warning: this function could explode the memory footprint causing the 
<br>
@@ -1622,90 +1568,6 @@ function is_null_($var) {
<br>
&nbsp;
<br>
&nbsp;######################################################################
<br>
&nbsp;
<br>
-function do_pg_connect() {
<br>
-
<br>
-    global $dbname;
<br>
-    global $user;
<br>
-    global $pass;
<br>
-    global $pgsql_conn;
<br>
-    static $connected = false;
<br>
-
<br>
-    if (!$connected) {
<br>
-        $pgsql_conn =
<br>
-            pg_connect(&quot;host=localhost port=5432 dbname=$dbname user=$user password=$pass&quot;);
<br>
-
<br>
-        # Exit if we cannot connect
<br>
-        if (!$pgsql_conn) {
<br>
-            mtt_abort(&quot;\nCould not connect to the $dbname database; &quot; .
<br>
-                      &quot;submit this run later.&quot;);
<br>
-        }
<br>
-        else {
<br>
-            $connected = true;
<br>
-
<br>
-            # Serialize all transactions by default - Safer that way.
<br>
-            do_pg_query(&quot;SET SESSION CHARACTERISTICS AS TRANSACTION ISOLATION LEVEL SERIALIZABLE&quot;, false);
<br>
-        }
<br>
-
<br>
-        # pg_set_error_verbosity($pgsql_conn, PGSQL_ERRORS_VERBOSE); # PHP 5 needed
<br>
-        # pg_trace($_ENV['HOME'] . &quot;/pgsql.trace&quot;, 'w', $pgsql_conn);
<br>
-        # debug(&quot;\npg_options: &quot; . var_export(pg_options($pgsql_conn)));
<br>
-    }
<br>
-}
<br>
-
<br>
-function do_pg_query($cmd, $silent) {
<br>
-    $db_res = null;
<br>
-
<br>
-    do_pg_connect();
<br>
-
<br>
-    debug(&quot;\nSQL: $cmd\n&quot;);
<br>
-    if (! ($db_res = pg_query($cmd))) {
<br>
-        $out = &quot;\nSQL QUERY: &quot; . $cmd .
<br>
-               &quot;\nSQL ERROR: &quot; . pg_last_error() .
<br>
-               &quot;\nSQL ERROR: &quot; . pg_result_error();
<br>
-
<br>
-        # Some errors are unsurprising, allow for silence in
<br>
-        # such cases
<br>
-        if (! $silent) {
<br>
-            mtt_error($out);
<br>
-            mtt_send_mail($out);
<br>
-        }
<br>
-    }
<br>
-    debug(&quot;\nDatabase rows affected: &quot; . pg_affected_rows($db_res) . &quot;\n&quot;);
<br>
-
<br>
-    return $db_res;
<br>
-}
<br>
-
<br>
-# Fetch scalar value
<br>
-function select_scalar($cmd) {
<br>
-
<br>
-    $set = array();
<br>
-    $set = simple_select($cmd);
<br>
-    return array_shift($set);
<br>
-}
<br>
-
<br>
-# Fetch 1D array
<br>
-function simple_select($cmd) {
<br>
-
<br>
-    do_pg_connect();
<br>
-
<br>
-    $rows = null;
<br>
-
<br>
-    debug(&quot;\nSQL: $cmd\n&quot;);
<br>
-    if (! ($result = pg_query($cmd))) {
<br>
-        $out = &quot;\nSQL QUERY: &quot; . $cmd .
<br>
-               &quot;\nSQL ERROR: &quot; . pg_last_error() .
<br>
-               &quot;\nSQL ERROR: &quot; . pg_result_error();
<br>
-        mtt_error($out);
<br>
-        mtt_send_mail($out);
<br>
-    }
<br>
-    $max = pg_num_rows($result);
<br>
-    for ($i = 0; $i &lt; $max; ++$i) {
<br>
-        $row = pg_fetch_array($result, $i, PGSQL_NUM);
<br>
-        $rows[] = $row[0];
<br>
-    }
<br>
-    return $rows;
<br>
-}
<br>
-
<br>
&nbsp;# Fetch an associative hash (column name =&gt; value)
<br>
&nbsp;function associative_select($cmd) {
<br>
&nbsp;
<br>
@@ -1722,21 +1584,6 @@ function associative_select($cmd) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return pg_fetch_array($result);
<br>
&nbsp;}
<br>
&nbsp;
<br>
-# Fetch 2D array
<br>
-function select($cmd) {
<br>
-    do_pg_connect();
<br>
-
<br>
-    debug(&quot;\nSQL: $cmd\n&quot;);
<br>
-    if (! ($result = pg_query($cmd))) {
<br>
-        $out = &quot;\nSQL QUERY: &quot; . $cmd .
<br>
-               &quot;\nSQL ERROR: &quot; . pg_last_error() .
<br>
-               &quot;\nSQL ERROR: &quot; . pg_result_error();
<br>
-        mtt_error($out);
<br>
-        mtt_send_mail($out);
<br>
-    }
<br>
-    return pg_fetch_all($result);
<br>
-}
<br>
-
<br>
&nbsp;######################################################################
<br>
&nbsp;
<br>
&nbsp;# Function for reporting errors back to the client
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0532.php">Wen Hao Wang: "[MTT users] Fail to run MTT, maybe authorization failure"</a>
<li><strong>Previous message:</strong> <a href="0530.php">Ethan Mallove: "Re: [MTT users] MTT server side problem"</a>
<li><strong>In reply to:</strong> <a href="0530.php">Ethan Mallove: "Re: [MTT users] MTT server side problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0534.php">Josh Hursey: "Re: [MTT users] MTT server side problem"</a>
<li><strong>Reply:</strong> <a href="0534.php">Josh Hursey: "Re: [MTT users] MTT server side problem"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
