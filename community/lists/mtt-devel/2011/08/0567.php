<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1400";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 13:21:37 2011" -->
<!-- isoreceived="20110818172137" -->
<!-- sent="Thu, 18 Aug 2011 13:21:31 -0400" -->
<!-- isosent="20110818172131" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1400" -->
<!-- id="5B649181-C35F-447E-A25E-77CF934791D5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201108181720.p7IHKZ8D006640_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1400<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-18 13:21:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0568.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1400"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2011/04/0566.php">Abhishek Kulkarni: "[MTT devel] FTB runtime support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0568.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1400"</a>
<li><strong>Reply:</strong> <a href="0568.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1400"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Awesome.  :-)
<br>
<p>On Aug 18, 2011, at 1:20 PM, jjhursey_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jjhursey
</span><br>
<span class="quotelev1">&gt; Date: 2011-08-18 13:20:35 EDT (Thu, 18 Aug 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 1400
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1400">https://svn.open-mpi.org/trac/mtt/changeset/1400</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add support for Summary tables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Improve the reporting of execution time (now a float in seconds)
</span><br>
<span class="quotelev1">&gt; * Wire in the Summary table into the query path. Selected only if query is eligible
</span><br>
<span class="quotelev1">&gt; * Report if the summary table was used or direct access in the report header.
</span><br>
<span class="quotelev1">&gt; * Better accounting of time spent doing sql queries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/server/php/database.inc               |    45 +++                                     
</span><br>
<span class="quotelev1">&gt;   trunk/server/php/index.php                  |    18 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/server/php/reporter/db_iface.inc      |   462 ++++++++++++++++++++++++++++++++++++++- 
</span><br>
<span class="quotelev1">&gt;   trunk/server/php/reporter/main_reporter.inc |    22 +                                       
</span><br>
<span class="quotelev1">&gt;   4 files changed, 518 insertions(+), 29 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/server/php/database.inc
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/server/php/database.inc	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/server/php/database.inc	2011-08-18 13:20:35 EDT (Thu, 18 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -116,7 +116,8 @@
</span><br>
<span class="quotelev1">&gt; function do_pg_query($cmd, $silent) {
</span><br>
<span class="quotelev1">&gt;     do_pg_connect();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    $start = time();
</span><br>
<span class="quotelev1">&gt; +    $start = gettimeofday();
</span><br>
<span class="quotelev1">&gt; +    $start = $start['sec'] + ($start['usec'] / 1000000.0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     debug(&quot;\nSQL: $cmd\n&quot;);
</span><br>
<span class="quotelev1">&gt;     if (! ($db_res = pg_query($cmd))) {
</span><br>
<span class="quotelev1">&gt; @@ -131,10 +132,12 @@
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    $finish = time();
</span><br>
<span class="quotelev1">&gt; +    $finish = gettimeofday();
</span><br>
<span class="quotelev1">&gt; +    $finish = $finish['sec'] + ($finish['usec'] / 1000000.0);
</span><br>
<span class="quotelev1">&gt;     $elapsed = $finish - $start;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    stats(&quot;\nExecution time: &quot; . $elapsed . &quot; seconds&quot; .
</span><br>
<span class="quotelev1">&gt; +    stats(&quot;\ndo_pg_query()&quot;.
</span><br>
<span class="quotelev1">&gt; +          &quot;\nExecution time: &quot; . round($elapsed, 5) . &quot; seconds&quot; .
</span><br>
<span class="quotelev1">&gt;           &quot;\nRows affected: &quot;  . pg_affected_rows($db_res) .
</span><br>
<span class="quotelev1">&gt;           &quot;\nRows retrieved: &quot; . pg_num_rows($db_res));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -160,6 +163,9 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     $rows = null;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    $start = gettimeofday();
</span><br>
<span class="quotelev1">&gt; +    $start = $start['sec'] + ($start['usec'] / 1000000.0);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     debug(&quot;\nSQL: $cmd\n&quot;);
</span><br>
<span class="quotelev1">&gt;     if (! ($result = pg_query($cmd))) {
</span><br>
<span class="quotelev1">&gt;         $out = &quot;\nSQL QUERY: &quot; . $cmd .
</span><br>
<span class="quotelev1">&gt; @@ -173,6 +179,23 @@
</span><br>
<span class="quotelev1">&gt;         $row = pg_fetch_array($result, $i, PGSQL_NUM);
</span><br>
<span class="quotelev1">&gt;         $rows[] = $row[0];
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $finish = gettimeofday();
</span><br>
<span class="quotelev1">&gt; +    $finish = $finish['sec'] + ($finish['usec'] / 1000000.0);
</span><br>
<span class="quotelev1">&gt; +    $elapsed = $finish - $start;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    stats(&quot;\nsimple_select()&quot;.
</span><br>
<span class="quotelev1">&gt; +          &quot;\nExecution time: &quot; . round($elapsed, 5) . &quot; seconds&quot; .
</span><br>
<span class="quotelev1">&gt; +          &quot;\nRows affected: &quot;  . pg_affected_rows($result) .
</span><br>
<span class="quotelev1">&gt; +          &quot;\nRows retrieved: &quot; . pg_num_rows($result));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #if( $elapsed &gt; 0.01 ) {
</span><br>
<span class="quotelev1">&gt; +    #  print &quot;&lt;pre&gt;SQL:$cmd&lt;/pre&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    #}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    global $global_sql_time_elapsed;
</span><br>
<span class="quotelev1">&gt; +    $global_sql_time_elapsed += $elapsed;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     return $rows;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -180,6 +203,9 @@
</span><br>
<span class="quotelev1">&gt; function select($cmd) {
</span><br>
<span class="quotelev1">&gt;     do_pg_connect();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    $start = gettimeofday();
</span><br>
<span class="quotelev1">&gt; +    $start = $start['sec'] + ($start['usec'] / 1000000.0);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     debug(&quot;\nSQL: $cmd\n&quot;);
</span><br>
<span class="quotelev1">&gt;     if (! ($result = pg_query($cmd))) {
</span><br>
<span class="quotelev1">&gt;         $out = &quot;\nSQL QUERY: &quot; . $cmd .
</span><br>
<span class="quotelev1">&gt; @@ -188,6 +214,19 @@
</span><br>
<span class="quotelev1">&gt;         mtt_error($out);
</span><br>
<span class="quotelev1">&gt;         return NULL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $finish = gettimeofday();
</span><br>
<span class="quotelev1">&gt; +    $finish = $finish['sec'] + ($finish['usec'] / 1000000.0);
</span><br>
<span class="quotelev1">&gt; +    $elapsed = $finish - $start;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    stats(&quot;\nselect()&quot;.
</span><br>
<span class="quotelev1">&gt; +          &quot;\nExecution time: &quot; . round($elapsed, 5) . &quot; seconds&quot; .
</span><br>
<span class="quotelev1">&gt; +          &quot;\nRows affected: &quot;  . pg_affected_rows($result) .
</span><br>
<span class="quotelev1">&gt; +          &quot;\nRows retrieved: &quot; . pg_num_rows($result));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    global $global_sql_time_elapsed;
</span><br>
<span class="quotelev1">&gt; +    $global_sql_time_elapsed += $elapsed;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     return pg_fetch_all($result);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/server/php/index.php
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/server/php/index.php	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/server/php/index.php	2011-08-18 13:20:35 EDT (Thu, 18 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -90,7 +90,8 @@
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Keep track of time
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; -$start = time();
</span><br>
<span class="quotelev1">&gt; +$start = gettimeofday();
</span><br>
<span class="quotelev1">&gt; +$start = $start['sec'] + ($start['usec'] / 1000000.0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Track time elapsed for sql
</span><br>
<span class="quotelev1">&gt; @@ -105,10 +106,10 @@
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Report on script's execution time
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; -$finish = time();
</span><br>
<span class="quotelev1">&gt; +$finish = gettimeofday();
</span><br>
<span class="quotelev1">&gt; +$finish = $finish['sec'] + ($finish['usec'] / 1000000.0);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; $elapsed = $finish - $start;
</span><br>
<span class="quotelev1">&gt; -print(&quot;\n&lt;br&gt;&lt;p&gt;Total script execution time: &quot; . $elapsed . &quot; second(s)&quot;);
</span><br>
<span class="quotelev1">&gt; -print(&quot;\n&lt;br&gt;&lt;p&gt;Total SQL execution time: &quot; . $global_sql_time_elapsed . &quot; second(s)&lt;/p&gt;&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Display input parameters
</span><br>
<span class="quotelev1">&gt; @@ -123,8 +124,13 @@
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Footer
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; -print hidden_carryover($_GET) .
</span><br>
<span class="quotelev1">&gt; -      &quot;\n&lt;hr&gt;&lt;/form&gt;$mtt_body_html_suffix&lt;/body&gt;&lt;/html&gt;&quot;;
</span><br>
<span class="quotelev1">&gt; +print hidden_carryover($_GET) .&quot;\n&quot;.
</span><br>
<span class="quotelev1">&gt; +      &quot;&lt;hr&gt;&lt;/form&gt;\n&quot;.
</span><br>
<span class="quotelev1">&gt; +      &quot;&lt;p&gt; Time: &quot;.round($elapsed,3).&quot; sec. &quot;.
</span><br>
<span class="quotelev1">&gt; +      &quot;(PHP: &quot; .round(($elapsed - $global_sql_time_elapsed), 3).&quot; /&quot;.
</span><br>
<span class="quotelev1">&gt; +      &quot; SQL: &quot; .round($global_sql_time_elapsed,3).&quot;)&lt;br&gt;\n&quot;.
</span><br>
<span class="quotelev1">&gt; +      &quot;$mtt_body_html_suffix\n&quot;.
</span><br>
<span class="quotelev1">&gt; +      &quot;&lt;/body&gt;&lt;/html&gt;&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; exit;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/server/php/reporter/db_iface.inc
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/server/php/reporter/db_iface.inc	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/server/php/reporter/db_iface.inc	2011-08-18 13:20:35 EDT (Thu, 18 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -16,7 +16,7 @@
</span><br>
<span class="quotelev1">&gt; function db_iface_compose_sql_select($query, $report_type) {
</span><br>
<span class="quotelev1">&gt;     $sql_cmd = &quot;&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    #print &quot;&lt;pre&gt;&quot;.print_r($query, true).&quot;&lt;/pre&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    #print &quot;&lt;pre&gt;Type: (&quot;.$report_type.&quot;)\n&quot;.print_r($query, true).&quot;&lt;/pre&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     # Detail:
</span><br>
<span class="quotelev1">&gt; @@ -24,6 +24,7 @@
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     if ($report_type == 'detail') {
</span><br>
<span class="quotelev1">&gt;         $ret = compose_sql_select($query);
</span><br>
<span class="quotelev1">&gt; +        $ret['fast'] = false;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     # Performance:
</span><br>
<span class="quotelev1">&gt; @@ -31,28 +32,40 @@
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     elseif ($report_type == 'performance') {
</span><br>
<span class="quotelev1">&gt;         $ret = compose_sql_select($query);
</span><br>
<span class="quotelev1">&gt; +        $ret['fast'] = false;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     # Summary:
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     else {
</span><br>
<span class="quotelev1">&gt;         #
</span><br>
<span class="quotelev1">&gt; -        # All Phases
</span><br>
<span class="quotelev1">&gt; +        # Determine if 'summary' table eligible
</span><br>
<span class="quotelev1">&gt;         #
</span><br>
<span class="quotelev1">&gt; -        if( count($query['phases']) &gt; 1 ) {
</span><br>
<span class="quotelev1">&gt; -            $sql_cmd = INTERNAL_db_iface_compose_sql_summary_all($query);
</span><br>
<span class="quotelev1">&gt; +        if( INTERNAL_db_iface_is_summary_table_eligible($query) ) {
</span><br>
<span class="quotelev1">&gt; +            $sql_cmd = INTERNAL_db_iface_compose_sql_summary_all_fast($query);
</span><br>
<span class="quotelev1">&gt;             $ret['sql_cmd'] = $sql_cmd;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        #
</span><br>
<span class="quotelev1">&gt; -        # Single Phase:
</span><br>
<span class="quotelev1">&gt; -        # Use the old mechanism
</span><br>
<span class="quotelev1">&gt; -        #
</span><br>
<span class="quotelev1">&gt; -        else {
</span><br>
<span class="quotelev1">&gt; -            $ret = compose_sql_select($query);
</span><br>
<span class="quotelev1">&gt; +            $ret['fast'] = true;
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +            #
</span><br>
<span class="quotelev1">&gt; +            # All Phases
</span><br>
<span class="quotelev1">&gt; +            #
</span><br>
<span class="quotelev1">&gt; +            if( count($query['phases']) &gt; 1 ) {
</span><br>
<span class="quotelev1">&gt; +                # JJH Turn this off for now, not sure exactly how much of a win
</span><br>
<span class="quotelev1">&gt; +                #     this is, and it is not quite ready.
</span><br>
<span class="quotelev1">&gt; +                #$sql_cmd = INTERNAL_db_iface_compose_sql_summary_all($query);
</span><br>
<span class="quotelev1">&gt; +                #$ret['sql_cmd'] = $sql_cmd;
</span><br>
<span class="quotelev1">&gt; +                $ret = compose_sql_select($query);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            #
</span><br>
<span class="quotelev1">&gt; +            # Single Phase:
</span><br>
<span class="quotelev1">&gt; +            # Use the old mechanism
</span><br>
<span class="quotelev1">&gt; +            #
</span><br>
<span class="quotelev1">&gt; +            else {
</span><br>
<span class="quotelev1">&gt; +                $ret = compose_sql_select($query);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            $ret['fast'] = false;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    #print &quot;&lt;pre&gt;\n$sql_cmd\n&lt;/pre&gt;&quot;;
</span><br>
<span class="quotelev1">&gt; -    #exit;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return $ret;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; @@ -60,6 +73,429 @@
</span><br>
<span class="quotelev1">&gt; # -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +function INTERNAL_db_iface_phase_included($phases, $needle) {
</span><br>
<span class="quotelev1">&gt; +    foreach($phases as $key) {
</span><br>
<span class="quotelev1">&gt; +        if( 0 == strncmp($key, $needle, strlen($key)) ) {
</span><br>
<span class="quotelev1">&gt; +            return true;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    return false;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +function INTERNAL_db_iface_get_aggregation_conv() {
</span><br>
<span class="quotelev1">&gt; +    return  array(
</span><br>
<span class="quotelev1">&gt; +                  &quot;_mpi_p&quot; =&gt; &quot;_mpi_p &gt; 0&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;_mpi_f&quot; =&gt; &quot;_mpi_f &gt; 0&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;_build_p&quot; =&gt; &quot;_build_p &gt; 0&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;_build_f&quot; =&gt; &quot;_build_f &gt; 0&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;_run_p&quot; =&gt; &quot;_run_p &gt; 0&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;_run_f&quot; =&gt; &quot;_run_f &gt; 0&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;_run_s&quot; =&gt; &quot;_run_s &gt; 0&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;_run_t&quot; =&gt; &quot;_run_t &gt; 0&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;_run_l&quot; =&gt; &quot;_run_l &gt; 0&quot;,
</span><br>
<span class="quotelev1">&gt; +                  );
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +function INTERNAL_db_iface_get_summary_columns() {
</span><br>
<span class="quotelev1">&gt; +    return  array(
</span><br>
<span class="quotelev1">&gt; +                  &quot;start_timestamp&quot; =&gt; &quot;start_timestamp&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;trial&quot; =&gt; &quot;trial&quot;,
</span><br>
<span class="quotelev1">&gt; +                  # Table: submit
</span><br>
<span class="quotelev1">&gt; +                  &quot;http_username&quot; =&gt; &quot;submit_http_username&quot;,
</span><br>
<span class="quotelev1">&gt; +                  # Table: compute_cluster
</span><br>
<span class="quotelev1">&gt; +                  &quot;platform_name&quot; =&gt; &quot;compute_cluster_platform_name&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;platform_hardware&quot; =&gt; &quot;compute_cluster_platform_hardware&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;os_name&quot; =&gt; &quot;compute_cluster_os_name&quot;,
</span><br>
<span class="quotelev1">&gt; +                  # Table: mpi_get
</span><br>
<span class="quotelev1">&gt; +                  &quot;mpi_name&quot; =&gt; &quot;mpi_get_mpi_name&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;mpi_version&quot; =&gt; &quot;mpi_get_mpi_version&quot;,
</span><br>
<span class="quotelev1">&gt; +                  # Table: mpi_install_configure_args
</span><br>
<span class="quotelev1">&gt; +                  &quot;bitness&quot; =&gt; &quot;mpi_install_configure_args_bitness&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;endian&quot; =&gt; &quot;mpi_install_configure_args_endian&quot;,
</span><br>
<span class="quotelev1">&gt; +                  # Table: compiler
</span><br>
<span class="quotelev1">&gt; +                  &quot;compiler_name&quot; =&gt; &quot;compiler_compiler_name&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;compiler_version&quot; =&gt; &quot;compiler_compiler_version&quot;,
</span><br>
<span class="quotelev1">&gt; +                  # Table: test_suites
</span><br>
<span class="quotelev1">&gt; +                  &quot;suite_name&quot; =&gt; &quot;test_suites_suite_name&quot;,
</span><br>
<span class="quotelev1">&gt; +                  # Table: test_run
</span><br>
<span class="quotelev1">&gt; +                  &quot;np&quot; =&gt; &quot;np&quot;,
</span><br>
<span class="quotelev1">&gt; +                  # Aggregations
</span><br>
<span class="quotelev1">&gt; +                  &quot;_mpi_p&quot; =&gt; &quot;_mpi_p&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;_mpi_f&quot; =&gt; &quot;_mpi_f&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;_build_p&quot; =&gt; &quot;_build_p&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;_build_f&quot; =&gt; &quot;_build_f&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;_run_p&quot; =&gt; &quot;_run_p&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;_run_f&quot; =&gt; &quot;_run_f&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;_run_s&quot; =&gt; &quot;_run_s&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;_run_t&quot; =&gt; &quot;_run_t&quot;,
</span><br>
<span class="quotelev1">&gt; +                  &quot;_run_l&quot; =&gt; &quot;_run_l&quot;,
</span><br>
<span class="quotelev1">&gt; +                  );
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +function INTERNAL_db_iface_is_summary_table_eligible($query) {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # Must be a query within the past 24 hours
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    $valid_start = select_scalar(&quot;SELECT &quot;.
</span><br>
<span class="quotelev1">&gt; +                                 &quot;date_trunc('hour', timestamp '&quot;.($query['absolute_start'][0]).&quot;') &gt;= &quot;.
</span><br>
<span class="quotelev1">&gt; +                                 &quot;date_trunc('hour', now() - interval '24 hours');&quot;);
</span><br>
<span class="quotelev1">&gt; +    if( 0 != strncmp($valid_start, &quot;t&quot;, strlen(&quot;t&quot;)) ) {
</span><br>
<span class="quotelev1">&gt; +        #print &quot;&lt;pre&gt;Invalid Date Range: (&quot;.$query['absolute_start'][0].&quot;)&lt;/pre&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +        return false;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # Get eligible column set
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    $eligible_columns = INTERNAL_db_iface_get_summary_columns();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $selects = array_unique(
</span><br>
<span class="quotelev1">&gt; +        array_merge(
</span><br>
<span class="quotelev1">&gt; +            $query['select'],
</span><br>
<span class="quotelev1">&gt; +            $query['select_more'],
</span><br>
<span class="quotelev1">&gt; +            $query['performance'],
</span><br>
<span class="quotelev1">&gt; +            $query['where'],
</span><br>
<span class="quotelev1">&gt; +            $query['where_not']
</span><br>
<span class="quotelev1">&gt; +        )
</span><br>
<span class="quotelev1">&gt; +    );
</span><br>
<span class="quotelev1">&gt; +    # Skip the 'row number'
</span><br>
<span class="quotelev1">&gt; +    unset($selects['n']);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # Search for outlier columns
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    foreach (array_keys($selects) as $sel_col ) {
</span><br>
<span class="quotelev1">&gt; +        $found = false;
</span><br>
<span class="quotelev1">&gt; +        foreach (array_keys($eligible_columns) as $e_col ) {
</span><br>
<span class="quotelev1">&gt; +            if( 0 == strncmp($e_col,$sel_col, strlen($e_col)) ) {
</span><br>
<span class="quotelev1">&gt; +                $found = true;
</span><br>
<span class="quotelev1">&gt; +                #print &quot;&lt;pre&gt;Found: (&quot;.$sel_col.&quot;) as (&quot;.$e_col.&quot;)&lt;/pre&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +                break;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        # Stop on first column not found
</span><br>
<span class="quotelev1">&gt; +        if( !$found ) {
</span><br>
<span class="quotelev1">&gt; +            #print &quot;&lt;pre&gt;Missing: (&quot;.$sel_col.&quot;)&lt;/pre&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +            return false;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    #print &quot;&lt;pre&gt;Query Eligible...&lt;/pre&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    return true;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +function INTERNAL_db_iface_compose_sql_summary_all_fast($query) {
</span><br>
<span class="quotelev1">&gt; +    global $nlt, $nltt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd = &quot;&quot;;
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd_debug = &quot;&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # Get eligible column conversions
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    $eligible_columns = INTERNAL_db_iface_get_summary_columns();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $selects = array_unique(
</span><br>
<span class="quotelev1">&gt; +        array_merge(
</span><br>
<span class="quotelev1">&gt; +            $query['select'],
</span><br>
<span class="quotelev1">&gt; +            $aggregates,
</span><br>
<span class="quotelev1">&gt; +            $query['select_more'],
</span><br>
<span class="quotelev1">&gt; +            $query['performance']
</span><br>
<span class="quotelev1">&gt; +        )
</span><br>
<span class="quotelev1">&gt; +    );
</span><br>
<span class="quotelev1">&gt; +    # Skip the 'row number'
</span><br>
<span class="quotelev1">&gt; +    unset($query['select']['n']);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # Some Debugging Options
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    $explain      = isset($_GET['explain'])      ? 1 : 0;
</span><br>
<span class="quotelev1">&gt; +    $analyze      = isset($_GET['analyze'])      ? 1 : 0;
</span><br>
<span class="quotelev1">&gt; +    if ($explain) {
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd_debug .= &quot;EXPLAIN\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    if ($analyze) {
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd_debug .= &quot;ANALYZE\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # SELECT
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd .= &quot;SELECT&quot;;
</span><br>
<span class="quotelev1">&gt; +    foreach ($selects as $item ) {
</span><br>
<span class="quotelev1">&gt; +        if( 0 == strncmp($item, &quot;nextval('row_number')&quot;, strlen($item)) ) {
</span><br>
<span class="quotelev1">&gt; +            $sql_cmd .= $nlt . $item.&quot;,&quot;;
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +            $sql_cmd .= $nlt . $eligible_columns[$item].&quot; as &quot;.$item.&quot;,&quot;;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd .= $nlt;
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd .= join(&quot;,$nlt&quot;, $query['aggregates']);
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd .= &quot;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # FROM
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd .= &quot;FROM ($nlt&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # The aggregates need to be in the external where clause
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    $external_where = array();
</span><br>
<span class="quotelev1">&gt; +    $agg_conv = INTERNAL_db_iface_get_aggregation_conv();
</span><br>
<span class="quotelev1">&gt; +    foreach(array_keys($query['where']) as $where) {
</span><br>
<span class="quotelev1">&gt; +        foreach(array_keys($agg_conv) as $conv) {
</span><br>
<span class="quotelev1">&gt; +            if(0 == strncmp($where, $conv, strlen($conv)) ) {
</span><br>
<span class="quotelev1">&gt; +                unset($query['where'][$where]);# = $agg_conv[$conv];
</span><br>
<span class="quotelev1">&gt; +                $external_where[$conv] = $agg_conv[$conv];
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # Substitute the column summary names
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    foreach(array_keys($query['where']) as $where) {
</span><br>
<span class="quotelev1">&gt; +        foreach(array_keys($eligible_columns) as $col) {
</span><br>
<span class="quotelev1">&gt; +            if( 0 == strncmp($col, $where, strlen($col)) ) {
</span><br>
<span class="quotelev1">&gt; +                $query['where'][$where] = preg_replace((&quot;/&quot;.$where.&quot;/&quot;), $eligible_columns[$col], $query['where'][$where]);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # Access the summary sub-tables
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    $table_mpi_install = NULL;
</span><br>
<span class="quotelev1">&gt; +    $table_test_build = NULL;
</span><br>
<span class="quotelev1">&gt; +    $table_test_run = NULL;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    unset($selects['n']);
</span><br>
<span class="quotelev1">&gt; +    if( INTERNAL_db_iface_phase_included($query['phases'], &quot;mpi_install&quot;) ) {
</span><br>
<span class="quotelev1">&gt; +        $table_mpi_install = INTERNAL_db_iface_compose_sql_summary_fast_mpi_install($query, $selects);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    if( INTERNAL_db_iface_phase_included($query['phases'], &quot;test_build&quot;) ) {
</span><br>
<span class="quotelev1">&gt; +        $table_test_build  = INTERNAL_db_iface_compose_sql_summary_fast_test_build($query, $selects);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    if( INTERNAL_db_iface_phase_included($query['phases'], &quot;test_run&quot;) ) {
</span><br>
<span class="quotelev1">&gt; +        $table_test_run    = INTERNAL_db_iface_compose_sql_summary_fast_test_run($query, $selects);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if( NULL != $table_mpi_install ) {
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= &quot;($nlt&quot;;
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= $table_mpi_install;
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= &quot;)&quot;.$nlt;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if( NULL != $table_mpi_install &amp;&amp; NULL != $table_test_build ) {
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= &quot;UNION ALL$nlt&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if( NULL != $table_test_build ) {
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= &quot;($nlt&quot;;
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= $table_test_build .&quot;$nlt&quot;;
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= &quot;)&quot;.$nlt;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if( NULL != $table_test_build &amp;&amp; NULL != $table_test_run ) {
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= &quot;UNION ALL$nlt&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if( NULL != $table_test_run ) {
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= &quot;($nlt&quot;;
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= $table_test_run .&quot;$nlt&quot;;
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= &quot;)&quot;.$nlt;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd .= &quot;) as summary\n&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # External where (mostly aggregation options)
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    if( count($external_where) &gt; 0 ) {
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= &quot;WHERE &quot;.$nlt;
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= join(&quot; AND $nlt&quot;, array_values2($external_where));
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= &quot;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # Group By
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    $groupbys = array_unique(
</span><br>
<span class="quotelev1">&gt; +        array_merge(
</span><br>
<span class="quotelev1">&gt; +            array_keys($query['select']),
</span><br>
<span class="quotelev1">&gt; +            array_keys($query['select_more']),
</span><br>
<span class="quotelev1">&gt; +            array_keys($query['performance'])
</span><br>
<span class="quotelev1">&gt; +        )
</span><br>
<span class="quotelev1">&gt; +    );
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd .= &quot;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    if (array_keys($query['select'])) {
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= &quot;GROUP BY &quot; .$nlt;
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= join(&quot;,$nlt&quot;, $groupbys);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # Order by
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    $orderbys =  array_unique(
</span><br>
<span class="quotelev1">&gt; +        array_merge(
</span><br>
<span class="quotelev1">&gt; +            array_keys($query['select'])
</span><br>
<span class="quotelev1">&gt; +        )
</span><br>
<span class="quotelev1">&gt; +    );
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd .= &quot;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    if (array_keys($query['select'])) {
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= &quot;ORDER BY &quot; .$nlt;
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= join(&quot;,$nlt&quot;, $orderbys).&quot;\n&quot;;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # Row Numbers and offsets
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    if (array_keys($query['select'])) {
</span><br>
<span class="quotelev1">&gt; +        if( isset($_GET['rows'] ) ) {
</span><br>
<span class="quotelev1">&gt; +            $limit  = LIMIT;
</span><br>
<span class="quotelev1">&gt; +            $sql_cmd .= &quot;\nLIMIT $limit&quot;;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        $offset = offset($query);
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= &quot;\nOFFSET $offset&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd .= &quot;;&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # Explain and Analyze if requested
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    if ($explain || $analyze) {
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd_debug .= $sql_cmd;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        #
</span><br>
<span class="quotelev1">&gt; +        # Get analysis
</span><br>
<span class="quotelev1">&gt; +        #
</span><br>
<span class="quotelev1">&gt; +        $resource = do_pg_query($sql_cmd_debug);
</span><br>
<span class="quotelev1">&gt; +        $arr = pg_fetch_all($resource);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        foreach (array_keys($arr) as $i) {
</span><br>
<span class="quotelev1">&gt; +            foreach ($arr[$i] as $line) {
</span><br>
<span class="quotelev1">&gt; +                $plan[] = $line;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        #
</span><br>
<span class="quotelev1">&gt; +        # Write plan to a file (for right-click Save)
</span><br>
<span class="quotelev1">&gt; +        #
</span><br>
<span class="quotelev1">&gt; +        $filename = 'tmp/' . params2filename($_GET) . '.txt';
</span><br>
<span class="quotelev1">&gt; +        $plan_txt = join(&quot;\n&quot;, $plan);
</span><br>
<span class="quotelev1">&gt; +        write_to_file($filename, $plan_txt);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        #
</span><br>
<span class="quotelev1">&gt; +        # Write plan to browser with original sql
</span><br>
<span class="quotelev1">&gt; +        #
</span><br>
<span class="quotelev1">&gt; +        debug_sql($plan_txt, 0);
</span><br>
<span class="quotelev1">&gt; +        debug_sql($sql_cmd_debug, 0);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        #
</span><br>
<span class="quotelev1">&gt; +        # Link to query plan
</span><br>
<span class="quotelev1">&gt; +        #
</span><br>
<span class="quotelev1">&gt; +        $top = DOCROOT;
</span><br>
<span class="quotelev1">&gt; +        print &quot;&lt;br&gt;&lt;a href='$top/$filename'&gt;Query plan&lt;/a&gt;&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return $sql_cmd;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +function INTERNAL_db_iface_compose_sql_summary_fast_sub_table_base($query, $selects, $table, $agg) {
</span><br>
<span class="quotelev1">&gt; +    global $nlt, $nltt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # Get eligible column set
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    $eligible_columns = INTERNAL_db_iface_get_summary_columns();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # Build Select
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd .= &quot;SELECT$nltt&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd .= &quot;trial,&quot;.$nltt;
</span><br>
<span class="quotelev1">&gt; +    foreach($selects as $item ) {
</span><br>
<span class="quotelev1">&gt; +        $sql_cmd .= $eligible_columns[$item].&quot;,&quot;.$nltt;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # Aggregation fields (for sub-table)
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    for($i = 0; $i &lt; count($agg); ++$i ) {
</span><br>
<span class="quotelev1">&gt; +        if( $i == (count($agg)-1) ) {
</span><br>
<span class="quotelev1">&gt; +            $sql_cmd .= $agg[$i].$nlt;
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +            $sql_cmd .= $agg[$i].&quot;,&quot;.$nltt;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # FROM
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd .= &quot;FROM &quot;.$table . $nlt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # WHERE
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd .= &quot;WHERE &quot;.$nltt;
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd .= join(&quot; AND $nltt&quot;, array_values2($query['where']));
</span><br>
<span class="quotelev1">&gt; +    $sql_cmd .= join(&quot; AND $nltt&quot;, array_values2($query['where_not']));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return $sql_cmd;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +function INTERNAL_db_iface_compose_sql_summary_fast_mpi_install($query, $selects) {
</span><br>
<span class="quotelev1">&gt; +    $agg = array(
</span><br>
<span class="quotelev1">&gt; +                 &quot;pass as _mpi_p&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;fail as _mpi_f&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _build_p&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _build_f&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _run_p&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _run_f&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _run_s&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _run_t&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _run_l&quot;,
</span><br>
<span class="quotelev1">&gt; +                 );
</span><br>
<span class="quotelev1">&gt; +    return INTERNAL_db_iface_compose_sql_summary_fast_sub_table_base($query, $selects, &quot;summary_mpi_install&quot;, $agg);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +function INTERNAL_db_iface_compose_sql_summary_fast_test_build($query, $selects) {
</span><br>
<span class="quotelev1">&gt; +    $agg = array(
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _mpi_p&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _mpi_f&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;pass as _build_p&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;fail as _build_f&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _run_p&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _run_f&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _run_s&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _run_t&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _run_l&quot;,
</span><br>
<span class="quotelev1">&gt; +                 );
</span><br>
<span class="quotelev1">&gt; +    return INTERNAL_db_iface_compose_sql_summary_fast_sub_table_base($query, $selects, &quot;summary_test_build&quot;, $agg);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +function INTERNAL_db_iface_compose_sql_summary_fast_test_run($query, $selects) {
</span><br>
<span class="quotelev1">&gt; +    $agg = array(
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _mpi_p&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _mpi_f&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _build_p&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;(0)  as _build_f&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;pass     as _run_p&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;fail     as _run_f&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;skip     as _run_s&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;timeout  as _run_t&quot;,
</span><br>
<span class="quotelev1">&gt; +                 &quot;perf     as _run_l&quot;,
</span><br>
<span class="quotelev1">&gt; +                 );
</span><br>
<span class="quotelev1">&gt; +    return INTERNAL_db_iface_compose_sql_summary_fast_sub_table_base($query, $selects, &quot;summary_test_run&quot;, $agg);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; function INTERNAL_db_iface_compose_sql_summary_all($query) {
</span><br>
<span class="quotelev1">&gt;     global $nlt, $nltt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/server/php/reporter/main_reporter.inc
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/server/php/reporter/main_reporter.inc	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/server/php/reporter/main_reporter.inc	2011-08-18 13:20:35 EDT (Thu, 18 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -28,6 +28,8 @@
</span><br>
<span class="quotelev1">&gt; function display_report() {
</span><br>
<span class="quotelev1">&gt;     unset($resource);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    $is_fast_lookup = false;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     # Create or update cookie, and set
</span><br>
<span class="quotelev1">&gt;     # definitions accordingly
</span><br>
<span class="quotelev1">&gt;     process_cookie($_GET, $_COOKIE);
</span><br>
<span class="quotelev1">&gt; @@ -120,7 +122,8 @@
</span><br>
<span class="quotelev1">&gt;         $ret = db_iface_compose_sql_select($query, $report_type);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         $sql_cmd = $ret['sql_cmd'];
</span><br>
<span class="quotelev1">&gt; -        $sql_count_star = $ret['count_star']; # JJH XXXX
</span><br>
<span class="quotelev1">&gt; +        $sql_count_star = $ret['count_star']; # JJH Needed?
</span><br>
<span class="quotelev1">&gt; +        $is_fast_lookup = $ret['fast'];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         # Execute query
</span><br>
<span class="quotelev1">&gt;         $resource = do_pg_query($sql_cmd);
</span><br>
<span class="quotelev1">&gt; @@ -148,7 +151,7 @@
</span><br>
<span class="quotelev1">&gt;         return;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # Print some basic, useful info atop each report table
</span><br>
<span class="quotelev1">&gt; -    report_header($date_fields, $phases, $n);
</span><br>
<span class="quotelev1">&gt; +    report_header($date_fields, $phases, $n, $is_fast_lookup);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # Do not print an empty table
</span><br>
<span class="quotelev1">&gt;     if (pg_num_rows($resource) &lt; 1) {
</span><br>
<span class="quotelev1">&gt; @@ -2126,9 +2129,9 @@
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Print some basic, useful info atop each report table
</span><br>
<span class="quotelev1">&gt; -function report_header($date_fields, $phases, $n) {
</span><br>
<span class="quotelev1">&gt; +function report_header($date_fields, $phases, $n, $fast) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    $basic_info = basic_info($date_fields, $phases, $n);
</span><br>
<span class="quotelev1">&gt; +    $basic_info = basic_info($date_fields, $phases, $n, $fast);
</span><br>
<span class="quotelev1">&gt;     $permalinks = permalinks($date_fields);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # Print general info/links up top
</span><br>
<span class="quotelev1">&gt; @@ -2200,7 +2203,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Print current time, date range, phases, and
</span><br>
<span class="quotelev1">&gt; # result filter for the report
</span><br>
<span class="quotelev1">&gt; -function basic_info($date_fields, $phases, $num_rows) {
</span><br>
<span class="quotelev1">&gt; +function basic_info($date_fields, $phases, $num_rows, $fast) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     $current = $date_fields[&quot;current&quot;];
</span><br>
<span class="quotelev1">&gt;     $absolute = $date_fields[&quot;absolute&quot;];
</span><br>
<span class="quotelev1">&gt; @@ -2213,10 +2216,15 @@
</span><br>
<span class="quotelev1">&gt;           &quot;&lt;tr&gt;&lt;td&gt;&lt;b&gt;Current time (&quot; . strtoupper(TIMEZONE) . &quot;)&lt;/b&gt;:&lt;td&gt;&quot; . $current . 
</span><br>
<span class="quotelev1">&gt;           &quot;&lt;tr&gt;&lt;td&gt;&lt;b&gt;Date range (&quot; . strtoupper(TIMEZONE) . &quot;)&lt;/b&gt;: &lt;td&gt;&quot; .  $absolute .
</span><br>
<span class="quotelev1">&gt;           &quot;&lt;tr&gt;&lt;td&gt;&lt;b&gt;Phase(s)&lt;/b&gt;:&lt;td&gt;&quot; . en_join(array_map('label', $phases));
</span><br>
<span class="quotelev1">&gt; +    if( $fast ) {
</span><br>
<span class="quotelev1">&gt; +        $ret .= &quot;&amp;nbsp;&amp;nbsp;&lt;i&gt;(Via Summary)&lt;/i&gt;&quot;;
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +        $ret .= &quot;&amp;nbsp;&amp;nbsp;&lt;i&gt;(Via Direct Access)&lt;/i&gt;&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    if ($_GET[&quot;test_result&quot;])
</span><br>
<span class="quotelev1">&gt; +    if ($_GET[&quot;test_result&quot;]) {
</span><br>
<span class="quotelev1">&gt;         $ret .= &quot;&lt;tr&gt;&lt;td&gt;&lt;b&gt;Result&lt;/b&gt;:&lt;td&gt;&quot; . label(label($_GET[&quot;test_result&quot;])) . &quot; only&quot;;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;     $ret .= &quot;&lt;tr&gt;&lt;td&gt;&lt;b&gt;Number of rows&lt;/b&gt;:&lt;td&gt;&quot; . $num_rows .
</span><br>
<span class="quotelev1">&gt;             &quot;&lt;/table&gt;&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0568.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1400"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2011/04/0566.php">Abhishek Kulkarni: "[MTT devel] FTB runtime support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0568.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1400"</a>
<li><strong>Reply:</strong> <a href="0568.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1400"</a>
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
