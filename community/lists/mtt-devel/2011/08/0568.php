<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1400";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 13:22:29 2011" -->
<!-- isoreceived="20110818172229" -->
<!-- sent="Thu, 18 Aug 2011 13:22:24 -0400" -->
<!-- isosent="20110818172224" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1400" -->
<!-- id="CAANzjE=RsQL3LW0Z3=TjZpGEWZxfjHfMP8wbGO7R6yrqapvKNw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5B649181-C35F-447E-A25E-77CF934791D5_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-18 13:22:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0569.php">Josh Hursey: "[MTT devel] Open MPI MTT Issue"</a>
<li><strong>Previous message:</strong> <a href="0567.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1400"</a>
<li><strong>In reply to:</strong> <a href="0567.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1400"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good database side stuff coming soon. Stay tuned :)
<br>
<p>On Thu, Aug 18, 2011 at 1:21 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Awesome. &#160;:-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 18, 2011, at 1:20 PM, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: jjhursey
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2011-08-18 13:20:35 EDT (Thu, 18 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 1400
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1400">https://svn.open-mpi.org/trac/mtt/changeset/1400</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Add support for Summary tables.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Improve the reporting of execution time (now a float in seconds)
</span><br>
<span class="quotelev2">&gt;&gt; * Wire in the Summary table into the query path. Selected only if query is eligible
</span><br>
<span class="quotelev2">&gt;&gt; * Report if the summary table was used or direct access in the report header.
</span><br>
<span class="quotelev2">&gt;&gt; * Better accounting of time spent doing sql queries.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt; &#160; trunk/server/php/database.inc &#160; &#160; &#160; &#160; &#160; &#160; &#160; | &#160; &#160;45 +++
</span><br>
<span class="quotelev2">&gt;&gt; &#160; trunk/server/php/index.php &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;| &#160; &#160;18 +
</span><br>
<span class="quotelev2">&gt;&gt; &#160; trunk/server/php/reporter/db_iface.inc &#160; &#160; &#160;| &#160; 462 ++++++++++++++++++++++++++++++++++++++-
</span><br>
<span class="quotelev2">&gt;&gt; &#160; trunk/server/php/reporter/main_reporter.inc | &#160; &#160;22 +
</span><br>
<span class="quotelev2">&gt;&gt; &#160; 4 files changed, 518 insertions(+), 29 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/server/php/database.inc
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/server/php/database.inc &#160; &#160; (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/server/php/database.inc &#160; &#160; 2011-08-18 13:20:35 EDT (Thu, 18 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -116,7 +116,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; function do_pg_query($cmd, $silent) {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; do_pg_connect();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160;$start = time();
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$start = gettimeofday();
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$start = $start['sec'] + ($start['usec'] / 1000000.0);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; debug(&quot;\nSQL: $cmd\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; if (! ($db_res = pg_query($cmd))) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -131,10 +132,12 @@
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; }
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160;$finish = time();
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$finish = gettimeofday();
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$finish = $finish['sec'] + ($finish['usec'] / 1000000.0);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; $elapsed = $finish - $start;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160;stats(&quot;\nExecution time: &quot; . $elapsed . &quot; seconds&quot; .
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;stats(&quot;\ndo_pg_query()&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160;&quot;\nExecution time: &quot; . round($elapsed, 5) . &quot; seconds&quot; .
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &quot;\nRows affected: &quot; &#160;. pg_affected_rows($db_res) .
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &quot;\nRows retrieved: &quot; . pg_num_rows($db_res));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -160,6 +163,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; $rows = null;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$start = gettimeofday();
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$start = $start['sec'] + ($start['usec'] / 1000000.0);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; debug(&quot;\nSQL: $cmd\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; if (! ($result = pg_query($cmd))) {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; $out = &quot;\nSQL QUERY: &quot; . $cmd .
</span><br>
<span class="quotelev2">&gt;&gt; @@ -173,6 +179,23 @@
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; $row = pg_fetch_array($result, $i, PGSQL_NUM);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; $rows[] = $row[0];
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$finish = gettimeofday();
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$finish = $finish['sec'] + ($finish['usec'] / 1000000.0);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$elapsed = $finish - $start;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;stats(&quot;\nsimple_select()&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160;&quot;\nExecution time: &quot; . round($elapsed, 5) . &quot; seconds&quot; .
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160;&quot;\nRows affected: &quot; &#160;. pg_affected_rows($result) .
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160;&quot;\nRows retrieved: &quot; . pg_num_rows($result));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#if( $elapsed &gt; 0.01 ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# &#160;print &quot;&lt;pre&gt;SQL:$cmd&lt;/pre&gt;\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;global $global_sql_time_elapsed;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$global_sql_time_elapsed += $elapsed;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; return $rows;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -180,6 +203,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; function select($cmd) {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; do_pg_connect();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$start = gettimeofday();
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$start = $start['sec'] + ($start['usec'] / 1000000.0);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; debug(&quot;\nSQL: $cmd\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; if (! ($result = pg_query($cmd))) {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; $out = &quot;\nSQL QUERY: &quot; . $cmd .
</span><br>
<span class="quotelev2">&gt;&gt; @@ -188,6 +214,19 @@
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; mtt_error($out);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; return NULL;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$finish = gettimeofday();
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$finish = $finish['sec'] + ($finish['usec'] / 1000000.0);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$elapsed = $finish - $start;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;stats(&quot;\nselect()&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160;&quot;\nExecution time: &quot; . round($elapsed, 5) . &quot; seconds&quot; .
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160;&quot;\nRows affected: &quot; &#160;. pg_affected_rows($result) .
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160;&quot;\nRows retrieved: &quot; . pg_num_rows($result));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;global $global_sql_time_elapsed;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$global_sql_time_elapsed += $elapsed;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; return pg_fetch_all($result);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/server/php/index.php
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/server/php/index.php &#160; &#160; &#160; &#160;(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/server/php/index.php &#160; &#160; &#160; &#160;2011-08-18 13:20:35 EDT (Thu, 18 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -90,7 +90,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Keep track of time
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; -$start = time();
</span><br>
<span class="quotelev2">&gt;&gt; +$start = gettimeofday();
</span><br>
<span class="quotelev2">&gt;&gt; +$start = $start['sec'] + ($start['usec'] / 1000000.0);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Track time elapsed for sql
</span><br>
<span class="quotelev2">&gt;&gt; @@ -105,10 +106,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Report on script's execution time
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; -$finish = time();
</span><br>
<span class="quotelev2">&gt;&gt; +$finish = gettimeofday();
</span><br>
<span class="quotelev2">&gt;&gt; +$finish = $finish['sec'] + ($finish['usec'] / 1000000.0);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; $elapsed = $finish - $start;
</span><br>
<span class="quotelev2">&gt;&gt; -print(&quot;\n&lt;br&gt;&lt;p&gt;Total script execution time: &quot; . $elapsed . &quot; second(s)&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -print(&quot;\n&lt;br&gt;&lt;p&gt;Total SQL execution time: &quot; . $global_sql_time_elapsed . &quot; second(s)&lt;/p&gt;&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Display input parameters
</span><br>
<span class="quotelev2">&gt;&gt; @@ -123,8 +124,13 @@
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Footer
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; -print hidden_carryover($_GET) .
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160; &#160;&quot;\n&lt;hr&gt;&lt;/form&gt;$mtt_body_html_suffix&lt;/body&gt;&lt;/html&gt;&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +print hidden_carryover($_GET) .&quot;\n&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160;&quot;&lt;hr&gt;&lt;/form&gt;\n&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160;&quot;&lt;p&gt; Time: &quot;.round($elapsed,3).&quot; sec. &quot;.
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160;&quot;(PHP: &quot; .round(($elapsed - $global_sql_time_elapsed), 3).&quot; /&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160;&quot; SQL: &quot; .round($global_sql_time_elapsed,3).&quot;)&lt;br&gt;\n&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160;&quot;$mtt_body_html_suffix\n&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160;&quot;&lt;/body&gt;&lt;/html&gt;&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; exit;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/server/php/reporter/db_iface.inc
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/server/php/reporter/db_iface.inc &#160; &#160;(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/server/php/reporter/db_iface.inc &#160; &#160;2011-08-18 13:20:35 EDT (Thu, 18 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -16,7 +16,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; function db_iface_compose_sql_select($query, $report_type) {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; $sql_cmd = &quot;&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160;#print &quot;&lt;pre&gt;&quot;.print_r($query, true).&quot;&lt;/pre&gt;\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#print &quot;&lt;pre&gt;Type: (&quot;.$report_type.&quot;)\n&quot;.print_r($query, true).&quot;&lt;/pre&gt;\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; #
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; # Detail:
</span><br>
<span class="quotelev2">&gt;&gt; @@ -24,6 +24,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; #
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; if ($report_type == 'detail') {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; $ret = compose_sql_select($query);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$ret['fast'] = false;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; }
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; #
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; # Performance:
</span><br>
<span class="quotelev2">&gt;&gt; @@ -31,28 +32,40 @@
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; #
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; elseif ($report_type == 'performance') {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; $ret = compose_sql_select($query);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$ret['fast'] = false;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; }
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; #
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; # Summary:
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; #
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; else {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; #
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160; &#160; &#160;# All Phases
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;# Determine if 'summary' table eligible
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; #
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160; &#160; &#160;if( count($query['phases']) &gt; 1 ) {
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160; &#160; &#160; &#160; &#160;$sql_cmd = INTERNAL_db_iface_compose_sql_summary_all($query);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;if( INTERNAL_db_iface_is_summary_table_eligible($query) ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$sql_cmd = INTERNAL_db_iface_compose_sql_summary_all_fast($query);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; $ret['sql_cmd'] = $sql_cmd;
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160; &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160; &#160; &#160;# Single Phase:
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160; &#160; &#160;# Use the old mechanism
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160; &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160; &#160; &#160;else {
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160; &#160; &#160; &#160; &#160;$ret = compose_sql_select($query);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$ret['fast'] = true;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;} else {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;# All Phases
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;if( count($query['phases']) &gt; 1 ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;# JJH Turn this off for now, not sure exactly how much of a win
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;# &#160; &#160; this is, and it is not quite ready.
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;#$sql_cmd = INTERNAL_db_iface_compose_sql_summary_all($query);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;#$ret['sql_cmd'] = $sql_cmd;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;$ret = compose_sql_select($query);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;# Single Phase:
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;# Use the old mechanism
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;else {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;$ret = compose_sql_select($query);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$ret['fast'] = false;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; }
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; }
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160;#print &quot;&lt;pre&gt;\n$sql_cmd\n&lt;/pre&gt;&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160;#exit;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; return $ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -60,6 +73,429 @@
</span><br>
<span class="quotelev2">&gt;&gt; # -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; +function INTERNAL_db_iface_phase_included($phases, $needle) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;foreach($phases as $key) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;if( 0 == strncmp($key, $needle, strlen($key)) ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;return true;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;return false;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +function INTERNAL_db_iface_get_aggregation_conv() {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;return &#160;array(
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_mpi_p&quot; =&gt; &quot;_mpi_p &gt; 0&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_mpi_f&quot; =&gt; &quot;_mpi_f &gt; 0&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_build_p&quot; =&gt; &quot;_build_p &gt; 0&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_build_f&quot; =&gt; &quot;_build_f &gt; 0&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_run_p&quot; =&gt; &quot;_run_p &gt; 0&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_run_f&quot; =&gt; &quot;_run_f &gt; 0&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_run_s&quot; =&gt; &quot;_run_s &gt; 0&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_run_t&quot; =&gt; &quot;_run_t &gt; 0&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_run_l&quot; =&gt; &quot;_run_l &gt; 0&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;);
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +function INTERNAL_db_iface_get_summary_columns() {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;return &#160;array(
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;start_timestamp&quot; =&gt; &quot;start_timestamp&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;trial&quot; =&gt; &quot;trial&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;# Table: submit
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;http_username&quot; =&gt; &quot;submit_http_username&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;# Table: compute_cluster
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;platform_name&quot; =&gt; &quot;compute_cluster_platform_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;platform_hardware&quot; =&gt; &quot;compute_cluster_platform_hardware&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;os_name&quot; =&gt; &quot;compute_cluster_os_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;# Table: mpi_get
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;mpi_name&quot; =&gt; &quot;mpi_get_mpi_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;mpi_version&quot; =&gt; &quot;mpi_get_mpi_version&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;# Table: mpi_install_configure_args
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;bitness&quot; =&gt; &quot;mpi_install_configure_args_bitness&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;endian&quot; =&gt; &quot;mpi_install_configure_args_endian&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;# Table: compiler
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;compiler_name&quot; =&gt; &quot;compiler_compiler_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;compiler_version&quot; =&gt; &quot;compiler_compiler_version&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;# Table: test_suites
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;suite_name&quot; =&gt; &quot;test_suites_suite_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;# Table: test_run
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;np&quot; =&gt; &quot;np&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;# Aggregations
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_mpi_p&quot; =&gt; &quot;_mpi_p&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_mpi_f&quot; =&gt; &quot;_mpi_f&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_build_p&quot; =&gt; &quot;_build_p&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_build_f&quot; =&gt; &quot;_build_f&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_run_p&quot; =&gt; &quot;_run_p&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_run_f&quot; =&gt; &quot;_run_f&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_run_s&quot; =&gt; &quot;_run_s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_run_t&quot; =&gt; &quot;_run_t&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&quot;_run_l&quot; =&gt; &quot;_run_l&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;);
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +function INTERNAL_db_iface_is_summary_table_eligible($query) {
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# Must be a query within the past 24 hours
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$valid_start = select_scalar(&quot;SELECT &quot;.
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;date_trunc('hour', timestamp '&quot;.($query['absolute_start'][0]).&quot;') &gt;= &quot;.
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;date_trunc('hour', now() - interval '24 hours');&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if( 0 != strncmp($valid_start, &quot;t&quot;, strlen(&quot;t&quot;)) ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;#print &quot;&lt;pre&gt;Invalid Date Range: (&quot;.$query['absolute_start'][0].&quot;)&lt;/pre&gt;\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;return false;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# Get eligible column set
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$eligible_columns = INTERNAL_db_iface_get_summary_columns();
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$selects = array_unique(
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;array_merge(
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$query['select'],
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$query['select_more'],
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$query['performance'],
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$query['where'],
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$query['where_not']
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;)
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# Skip the 'row number'
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;unset($selects['n']);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# Search for outlier columns
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;foreach (array_keys($selects) as $sel_col ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$found = false;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;foreach (array_keys($eligible_columns) as $e_col ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;if( 0 == strncmp($e_col,$sel_col, strlen($e_col)) ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;$found = true;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;#print &quot;&lt;pre&gt;Found: (&quot;.$sel_col.&quot;) as (&quot;.$e_col.&quot;)&lt;/pre&gt;\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;# Stop on first column not found
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;if( !$found ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;#print &quot;&lt;pre&gt;Missing: (&quot;.$sel_col.&quot;)&lt;/pre&gt;\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;return false;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#print &quot;&lt;pre&gt;Query Eligible...&lt;/pre&gt;\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;return true;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +function INTERNAL_db_iface_compose_sql_summary_all_fast($query) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;global $nlt, $nltt;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd = &quot;&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd_debug = &quot;&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# Get eligible column conversions
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$eligible_columns = INTERNAL_db_iface_get_summary_columns();
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$selects = array_unique(
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;array_merge(
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$query['select'],
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$aggregates,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$query['select_more'],
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$query['performance']
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;)
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# Skip the 'row number'
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;unset($query['select']['n']);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# Some Debugging Options
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$explain &#160; &#160; &#160;= isset($_GET['explain']) &#160; &#160; &#160;? 1 : 0;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$analyze &#160; &#160; &#160;= isset($_GET['analyze']) &#160; &#160; &#160;? 1 : 0;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if ($explain) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd_debug .= &quot;EXPLAIN\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if ($analyze) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd_debug .= &quot;ANALYZE\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# SELECT
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd .= &quot;SELECT&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;foreach ($selects as $item ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;if( 0 == strncmp($item, &quot;nextval('row_number')&quot;, strlen($item)) ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$sql_cmd .= $nlt . $item.&quot;,&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;} else {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$sql_cmd .= $nlt . $eligible_columns[$item].&quot; as &quot;.$item.&quot;,&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd .= $nlt;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd .= join(&quot;,$nlt&quot;, $query['aggregates']);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd .= &quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# FROM
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd .= &quot;FROM ($nlt&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# The aggregates need to be in the external where clause
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$external_where = array();
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$agg_conv = INTERNAL_db_iface_get_aggregation_conv();
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;foreach(array_keys($query['where']) as $where) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;foreach(array_keys($agg_conv) as $conv) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;if(0 == strncmp($where, $conv, strlen($conv)) ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;unset($query['where'][$where]);# = $agg_conv[$conv];
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;$external_where[$conv] = $agg_conv[$conv];
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# Substitute the column summary names
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;foreach(array_keys($query['where']) as $where) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;foreach(array_keys($eligible_columns) as $col) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;if( 0 == strncmp($col, $where, strlen($col)) ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;$query['where'][$where] = preg_replace((&quot;/&quot;.$where.&quot;/&quot;), $eligible_columns[$col], $query['where'][$where]);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# Access the summary sub-tables
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$table_mpi_install = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$table_test_build = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$table_test_run = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;unset($selects['n']);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if( INTERNAL_db_iface_phase_included($query['phases'], &quot;mpi_install&quot;) ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$table_mpi_install = INTERNAL_db_iface_compose_sql_summary_fast_mpi_install($query, $selects);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if( INTERNAL_db_iface_phase_included($query['phases'], &quot;test_build&quot;) ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$table_test_build &#160;= INTERNAL_db_iface_compose_sql_summary_fast_test_build($query, $selects);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if( INTERNAL_db_iface_phase_included($query['phases'], &quot;test_run&quot;) ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$table_test_run &#160; &#160;= INTERNAL_db_iface_compose_sql_summary_fast_test_run($query, $selects);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if( NULL != $table_mpi_install ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= &quot;($nlt&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= $table_mpi_install;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= &quot;)&quot;.$nlt;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if( NULL != $table_mpi_install &amp;&amp; NULL != $table_test_build ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= &quot;UNION ALL$nlt&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if( NULL != $table_test_build ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= &quot;($nlt&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= $table_test_build .&quot;$nlt&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= &quot;)&quot;.$nlt;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if( NULL != $table_test_build &amp;&amp; NULL != $table_test_run ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= &quot;UNION ALL$nlt&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if( NULL != $table_test_run ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= &quot;($nlt&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= $table_test_run .&quot;$nlt&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= &quot;)&quot;.$nlt;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd .= &quot;) as summary\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# External where (mostly aggregation options)
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if( count($external_where) &gt; 0 ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= &quot;WHERE &quot;.$nlt;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= join(&quot; AND $nlt&quot;, array_values2($external_where));
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= &quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# Group By
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$groupbys = array_unique(
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;array_merge(
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;array_keys($query['select']),
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;array_keys($query['select_more']),
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;array_keys($query['performance'])
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;)
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd .= &quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if (array_keys($query['select'])) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= &quot;GROUP BY &quot; .$nlt;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= join(&quot;,$nlt&quot;, $groupbys);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# Order by
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$orderbys = &#160;array_unique(
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;array_merge(
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;array_keys($query['select'])
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;)
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd .= &quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if (array_keys($query['select'])) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= &quot;ORDER BY &quot; .$nlt;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= join(&quot;,$nlt&quot;, $orderbys).&quot;\n&quot;;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# Row Numbers and offsets
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if (array_keys($query['select'])) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;if( isset($_GET['rows'] ) ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$limit &#160;= LIMIT;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$sql_cmd .= &quot;\nLIMIT $limit&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$offset = offset($query);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= &quot;\nOFFSET $offset&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd .= &quot;;&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# Explain and Analyze if requested
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if ($explain || $analyze) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd_debug .= $sql_cmd;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;# Get analysis
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$resource = do_pg_query($sql_cmd_debug);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$arr = pg_fetch_all($resource);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;foreach (array_keys($arr) as $i) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;foreach ($arr[$i] as $line) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;$plan[] = $line;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;# Write plan to a file (for right-click Save)
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$filename = 'tmp/' . params2filename($_GET) . '.txt';
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$plan_txt = join(&quot;\n&quot;, $plan);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;write_to_file($filename, $plan_txt);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;# Write plan to browser with original sql
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;debug_sql($plan_txt, 0);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;debug_sql($sql_cmd_debug, 0);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;# Link to query plan
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$top = DOCROOT;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;print &quot;&lt;br&gt;&lt;a href='$top/$filename'&gt;Query plan&lt;/a&gt;&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;return $sql_cmd;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +function INTERNAL_db_iface_compose_sql_summary_fast_sub_table_base($query, $selects, $table, $agg) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;global $nlt, $nltt;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# Get eligible column set
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$eligible_columns = INTERNAL_db_iface_get_summary_columns();
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# Build Select
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd .= &quot;SELECT$nltt&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd .= &quot;trial,&quot;.$nltt;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;foreach($selects as $item ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_cmd .= $eligible_columns[$item].&quot;,&quot;.$nltt;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# Aggregation fields (for sub-table)
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;for($i = 0; $i &lt; count($agg); ++$i ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;if( $i == (count($agg)-1) ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$sql_cmd .= $agg[$i].$nlt;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;} else {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160;$sql_cmd .= $agg[$i].&quot;,&quot;.$nltt;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# FROM
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd .= &quot;FROM &quot;.$table . $nlt;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;# WHERE
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;#
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd .= &quot;WHERE &quot;.$nltt;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd .= join(&quot; AND $nltt&quot;, array_values2($query['where']));
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$sql_cmd .= join(&quot; AND $nltt&quot;, array_values2($query['where_not']));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;return $sql_cmd;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +function INTERNAL_db_iface_compose_sql_summary_fast_mpi_install($query, $selects) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$agg = array(
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;pass as _mpi_p&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;fail as _mpi_f&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _build_p&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _build_f&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _run_p&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _run_f&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _run_s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _run_t&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _run_l&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; );
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;return INTERNAL_db_iface_compose_sql_summary_fast_sub_table_base($query, $selects, &quot;summary_mpi_install&quot;, $agg);
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +function INTERNAL_db_iface_compose_sql_summary_fast_test_build($query, $selects) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$agg = array(
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _mpi_p&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _mpi_f&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;pass as _build_p&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;fail as _build_f&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _run_p&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _run_f&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _run_s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _run_t&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _run_l&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; );
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;return INTERNAL_db_iface_compose_sql_summary_fast_sub_table_base($query, $selects, &quot;summary_test_build&quot;, $agg);
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +function INTERNAL_db_iface_compose_sql_summary_fast_test_run($query, $selects) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$agg = array(
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _mpi_p&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _mpi_f&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _build_p&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;(0) &#160;as _build_f&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;pass &#160; &#160; as _run_p&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;fail &#160; &#160; as _run_f&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;skip &#160; &#160; as _run_s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;timeout &#160;as _run_t&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;perf &#160; &#160; as _run_l&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; );
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;return INTERNAL_db_iface_compose_sql_summary_fast_sub_table_base($query, $selects, &quot;summary_test_run&quot;, $agg);
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; function INTERNAL_db_iface_compose_sql_summary_all($query) {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; global $nlt, $nltt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/server/php/reporter/main_reporter.inc
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/server/php/reporter/main_reporter.inc &#160; &#160; &#160; (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/server/php/reporter/main_reporter.inc &#160; &#160; &#160; 2011-08-18 13:20:35 EDT (Thu, 18 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -28,6 +28,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; function display_report() {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; unset($resource);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$is_fast_lookup = false;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; # Create or update cookie, and set
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; # definitions accordingly
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; process_cookie($_GET, $_COOKIE);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -120,7 +122,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; $ret = db_iface_compose_sql_select($query, $report_type);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; $sql_cmd = $ret['sql_cmd'];
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160; &#160; &#160;$sql_count_star = $ret['count_star']; # JJH XXXX
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$sql_count_star = $ret['count_star']; # JJH Needed?
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$is_fast_lookup = $ret['fast'];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; # Execute query
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; $resource = do_pg_query($sql_cmd);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -148,7 +151,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; return;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; # Print some basic, useful info atop each report table
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160;report_header($date_fields, $phases, $n);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;report_header($date_fields, $phases, $n, $is_fast_lookup);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; # Do not print an empty table
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; if (pg_num_rows($resource) &lt; 1) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2126,9 +2129,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Print some basic, useful info atop each report table
</span><br>
<span class="quotelev2">&gt;&gt; -function report_header($date_fields, $phases, $n) {
</span><br>
<span class="quotelev2">&gt;&gt; +function report_header($date_fields, $phases, $n, $fast) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160;$basic_info = basic_info($date_fields, $phases, $n);
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;$basic_info = basic_info($date_fields, $phases, $n, $fast);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; $permalinks = permalinks($date_fields);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; # Print general info/links up top
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2200,7 +2203,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Print current time, date range, phases, and
</span><br>
<span class="quotelev2">&gt;&gt; # result filter for the report
</span><br>
<span class="quotelev2">&gt;&gt; -function basic_info($date_fields, $phases, $num_rows) {
</span><br>
<span class="quotelev2">&gt;&gt; +function basic_info($date_fields, $phases, $num_rows, $fast) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; $current = $date_fields[&quot;current&quot;];
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; $absolute = $date_fields[&quot;absolute&quot;];
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2213,10 +2216,15 @@
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &quot;&lt;tr&gt;&lt;td&gt;&lt;b&gt;Current time (&quot; . strtoupper(TIMEZONE) . &quot;)&lt;/b&gt;:&lt;td&gt;&quot; . $current .
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &quot;&lt;tr&gt;&lt;td&gt;&lt;b&gt;Date range (&quot; . strtoupper(TIMEZONE) . &quot;)&lt;/b&gt;: &lt;td&gt;&quot; . &#160;$absolute .
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &quot;&lt;tr&gt;&lt;td&gt;&lt;b&gt;Phase(s)&lt;/b&gt;:&lt;td&gt;&quot; . en_join(array_map('label', $phases));
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if( $fast ) {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$ret .= &quot;&amp;nbsp;&amp;nbsp;&lt;i&gt;(Via Summary)&lt;/i&gt;&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;} else {
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160; &#160; &#160;$ret .= &quot;&amp;nbsp;&amp;nbsp;&lt;i&gt;(Via Direct Access)&lt;/i&gt;&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - &#160; &#160;if ($_GET[&quot;test_result&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;if ($_GET[&quot;test_result&quot;]) {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; $ret .= &quot;&lt;tr&gt;&lt;td&gt;&lt;b&gt;Result&lt;/b&gt;:&lt;td&gt;&quot; . label(label($_GET[&quot;test_result&quot;])) . &quot; only&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; + &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; $ret .= &quot;&lt;tr&gt;&lt;td&gt;&lt;b&gt;Number of rows&lt;/b&gt;:&lt;td&gt;&quot; . $num_rows .
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &quot;&lt;/table&gt;&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0569.php">Josh Hursey: "[MTT devel] Open MPI MTT Issue"</a>
<li><strong>Previous message:</strong> <a href="0567.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1400"</a>
<li><strong>In reply to:</strong> <a href="0567.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1400"</a>
<!-- nextthread="start" -->
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
