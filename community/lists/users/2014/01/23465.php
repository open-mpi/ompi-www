<?
$subject_val = "[OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 26 18:03:08 2014" -->
<!-- isoreceived="20140126230308" -->
<!-- sent="Mon, 27 Jan 2014 08:02:49 +0900" -->
<!-- isosent="20140126230249" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output" -->
<!-- id="OF7EAAD0E7.46A9E7E6-ON49257C6C.007DE94A-49257C6C.007EA077_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20openmpi-1.7.4rc2r30425%20produces%20unexpected%20output"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-01-26 18:02:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23466.php">Christoph Niethammer: "[OMPI users] Open MPI and multiple Torque versions"</a>
<li><strong>Previous message:</strong> <a href="23464.php">Javier Garcia Blas: "[OMPI users] CFP: 1st International Workshop on Cloud for Bio (C4Bio 2014) at CCGrid 2014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23472.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Reply:</strong> <a href="23472.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I tried latest nightly snapshots of openmpi-1.7.4rc2r30425.tar.gz.
<br>
Almost everything works fine, except that the unexpected output appears
<br>
as below:
<br>
<p>[mishima_at_node04 ~]$ mpirun -cpus-per-proc 4 ~/mis/openmpi/demos/myprog
<br>
App launch reported: 3 (out of 3) daemons - 8 (out of 12) procs
<br>
...
<br>
<p>You dropped the if-statement checking &quot;orte_report_launch_progress&quot; in
<br>
plm_base_receive.c @ r30423, which causes the problem.
<br>
<p>--- orte/mca/plm/base/plm_base_receive.c.org	2014-01-25
<br>
11:51:59.000000000 +0900
<br>
+++ orte/mca/plm/base/plm_base_receive.c	2014-01-26 12:20:10.000000000
<br>
+0900
<br>
@@ -315,9 +315,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* record that we heard back from a daemon during app launch
<br>
*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (running &amp;&amp; NULL != jdata) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jdata-&gt;num_daemons_reported++;
<br>
-                if (0 == jdata-&gt;num_daemons_reported % 100 ||
<br>
-                    jdata-&gt;num_daemons_reported ==
<br>
orte_process_info.num_procs) {
<br>
-                    ORTE_ACTIVATE_JOB_STATE(jdata,
<br>
ORTE_JOB_STATE_REPORT_PROGRESS);
<br>
+                if (orte_report_launch_progress) {
<br>
+                    if (0 == jdata-&gt;num_daemons_reported % 100 ||
<br>
+                        jdata-&gt;num_daemons_reported ==
<br>
orte_process_info.num_procs) {
<br>
+                        ORTE_ACTIVATE_JOB_STATE(jdata,
<br>
ORTE_JOB_STATE_REPORT_PROGRESS);
<br>
+                    }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* prepare for next job */
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p>P.S. It's also better to change the line 65 in NEWS.
<br>
<p>...
<br>
64   * Mapping:
<br>
65   *   if #procs &lt;= 2, default to map-by core  -&gt; map-by slot
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^^^^^^^^^^^
<br>
66   *   if #procs &gt; 2, default to map-by socket
<br>
...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23466.php">Christoph Niethammer: "[OMPI users] Open MPI and multiple Torque versions"</a>
<li><strong>Previous message:</strong> <a href="23464.php">Javier Garcia Blas: "[OMPI users] CFP: 1st International Workshop on Cloud for Bio (C4Bio 2014) at CCGrid 2014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23472.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Reply:</strong> <a href="23472.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
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
