<?
$subject_val = "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 18:17:33 2014" -->
<!-- isoreceived="20140127231733" -->
<!-- sent="Tue, 28 Jan 2014 08:17:14 +0900" -->
<!-- isosent="20140127231714" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output" -->
<!-- id="OF196455C5.918A7E4F-ON49257C6D.007F671D-49257C6D.007FF2E0_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9A7A2211-4612-4D1B-B9B4-9E07AE71DB59_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20openmpi-1.7.4rc2r30425%20produces%20unexpected%20output"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-01-27 18:17:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23479.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Previous message:</strong> <a href="23477.php">Gus Correa: "Re: [OMPI users] Open MPI and multiple Torque versions"</a>
<li><strong>In reply to:</strong> <a href="23472.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23479.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Reply:</strong> <a href="23479.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; As for the NEWS - it is actually already correct. We default to map-by
</span><br>
core, not slot, as of 1.7.4.
<br>
<p>Is it correct? As far as I browse the source code, map-by slot is used if
<br>
np &lt;=2.
<br>
<p>[mishima_at_manage openmpi-1.7.4rc2r30425]$ cat -n
<br>
orte/mca/rmaps/base/rmaps_base_map_job.c
<br>
...
<br>
&nbsp;&nbsp;&nbsp;107              /* default based on number of procs */
<br>
&nbsp;&nbsp;&nbsp;108              if (nprocs &lt;= 2) {
<br>
&nbsp;&nbsp;&nbsp;109                  opal_output_verbose(5,
<br>
orte_rmaps_base_framework.framework_output,
<br>
&nbsp;&nbsp;&nbsp;110                                      &quot;mca:rmaps mapping not given -
<br>
using byslot&quot;);
<br>
&nbsp;&nbsp;&nbsp;111                  ORTE_SET_MAPPING_POLICY(map-&gt;mapping,
<br>
ORTE_MAPPING_BYSLOT);
<br>
&nbsp;&nbsp;&nbsp;112              } else {
<br>
&nbsp;&nbsp;&nbsp;113                  opal_output_verbose(5,
<br>
orte_rmaps_base_framework.framework_output,
<br>
&nbsp;&nbsp;&nbsp;114                                      &quot;mca:rmaps mapping not given -
<br>
using bysocket&quot;);
<br>
&nbsp;&nbsp;&nbsp;115                  ORTE_SET_MAPPING_POLICY(map-&gt;mapping,
<br>
ORTE_MAPPING_BYSOCKET);
<br>
&nbsp;&nbsp;&nbsp;116              }
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; On Jan 26, 2014, at 3:02 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried latest nightly snapshots of openmpi-1.7.4rc2r30425.tar.gz.
</span><br>
<span class="quotelev2">&gt; &gt; Almost everything works fine, except that the unexpected output appears
</span><br>
<span class="quotelev2">&gt; &gt; as below:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_node04 ~]$ mpirun -cpus-per-proc 4 ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev2">&gt; &gt; App launch reported: 3 (out of 3) daemons - 8 (out of 12) procs
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You dropped the if-statement checking &quot;orte_report_launch_progress&quot; in
</span><br>
<span class="quotelev2">&gt; &gt; plm_base_receive.c @ r30423, which causes the problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- orte/mca/plm/base/plm_base_receive.c.org	2014-01-25
</span><br>
<span class="quotelev2">&gt; &gt; 11:51:59.000000000 +0900
</span><br>
<span class="quotelev2">&gt; &gt; +++ orte/mca/plm/base/plm_base_receive.c	2014-01-26
</span><br>
12:20:10.000000000
<br>
<span class="quotelev2">&gt; &gt; +0900
</span><br>
<span class="quotelev2">&gt; &gt; @@ -315,9 +315,11 @@
</span><br>
<span class="quotelev2">&gt; &gt;             /* record that we heard back from a daemon during app
</span><br>
launch
<br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev2">&gt; &gt;             if (running &amp;&amp; NULL != jdata) {
</span><br>
<span class="quotelev2">&gt; &gt;                 jdata-&gt;num_daemons_reported++;
</span><br>
<span class="quotelev2">&gt; &gt; -                if (0 == jdata-&gt;num_daemons_reported % 100 ||
</span><br>
<span class="quotelev2">&gt; &gt; -                    jdata-&gt;num_daemons_reported ==
</span><br>
<span class="quotelev2">&gt; &gt; orte_process_info.num_procs) {
</span><br>
<span class="quotelev2">&gt; &gt; -                    ORTE_ACTIVATE_JOB_STATE(jdata,
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_JOB_STATE_REPORT_PROGRESS);
</span><br>
<span class="quotelev2">&gt; &gt; +                if (orte_report_launch_progress) {
</span><br>
<span class="quotelev2">&gt; &gt; +                    if (0 == jdata-&gt;num_daemons_reported % 100 ||
</span><br>
<span class="quotelev2">&gt; &gt; +                        jdata-&gt;num_daemons_reported ==
</span><br>
<span class="quotelev2">&gt; &gt; orte_process_info.num_procs) {
</span><br>
<span class="quotelev2">&gt; &gt; +                        ORTE_ACTIVATE_JOB_STATE(jdata,
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_JOB_STATE_REPORT_PROGRESS);
</span><br>
<span class="quotelev2">&gt; &gt; +                    }
</span><br>
<span class="quotelev2">&gt; &gt;                 }
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt;             /* prepare for next job */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; P.S. It's also better to change the line 65 in NEWS.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 64   * Mapping:
</span><br>
<span class="quotelev2">&gt; &gt; 65   *   if #procs &lt;= 2, default to map-by core  -&gt; map-by slot
</span><br>
<span class="quotelev2">&gt; &gt;                                    ^^^^^^^^^^^
</span><br>
<span class="quotelev2">&gt; &gt; 66   *   if #procs &gt; 2, default to map-by socket
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23479.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Previous message:</strong> <a href="23477.php">Gus Correa: "Re: [OMPI users] Open MPI and multiple Torque versions"</a>
<li><strong>In reply to:</strong> <a href="23472.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23479.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Reply:</strong> <a href="23479.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
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
