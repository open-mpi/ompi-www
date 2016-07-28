<?
$subject_val = "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 19:08:30 2014" -->
<!-- isoreceived="20140128000830" -->
<!-- sent="Tue, 28 Jan 2014 09:08:11 +0900" -->
<!-- isosent="20140128000811" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output" -->
<!-- id="OF58EDA99B.C2475EEA-ON49257C6E.00003B91-49257C6E.0000C6D7_at_jcity.maeda.co.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20454973-8233-472B-AA60-51DFF62EC48B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-01-27 19:08:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23481.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Previous message:</strong> <a href="23479.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>In reply to:</strong> <a href="23479.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23481.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Reply:</strong> <a href="23481.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Ralph. I quickly checked the fix. It worked fine for me.
<br>
<p>Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; I fixed that in today's final cleanup
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 27, 2014, at 3:17 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for the NEWS - it is actually already correct. We default to map-by
</span><br>
<span class="quotelev1">&gt; core, not slot, as of 1.7.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it correct? As far as I browse the source code, map-by slot is used if
</span><br>
<span class="quotelev1">&gt; np &lt;=2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage openmpi-1.7.4rc2r30425]$ cat -n
</span><br>
<span class="quotelev1">&gt; orte/mca/rmaps/base/rmaps_base_map_job.c
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; &#160;&#160;107 &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;/* default based on number of procs */
</span><br>
<span class="quotelev1">&gt; &#160;&#160;108 &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;if (nprocs &lt;= 2) {
</span><br>
<span class="quotelev1">&gt; &#160;&#160;109 &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;opal_output_verbose(5,
</span><br>
<span class="quotelev1">&gt; orte_rmaps_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; &#160;&#160;110 &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&quot;mca:rmaps mapping not given -
</span><br>
<span class="quotelev1">&gt; using byslot&quot;);
</span><br>
<span class="quotelev1">&gt; &#160;&#160;111 &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;ORTE_SET_MAPPING_POLICY(map-&gt;mapping,
</span><br>
<span class="quotelev1">&gt; ORTE_MAPPING_BYSLOT);
</span><br>
<span class="quotelev1">&gt; &#160;&#160;112 &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;} else {
</span><br>
<span class="quotelev1">&gt; &#160;&#160;113 &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;opal_output_verbose(5,
</span><br>
<span class="quotelev1">&gt; orte_rmaps_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; &#160;&#160;114 &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&quot;mca:rmaps mapping not given -
</span><br>
<span class="quotelev1">&gt; using bysocket&quot;);
</span><br>
<span class="quotelev1">&gt; &#160;&#160;115 &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;ORTE_SET_MAPPING_POLICY(map-&gt;mapping,
</span><br>
<span class="quotelev1">&gt; ORTE_MAPPING_BYSOCKET);
</span><br>
<span class="quotelev1">&gt; &#160;&#160;116 &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 26, 2014, at 3:02 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried latest nightly snapshots of openmpi-1.7.4rc2r30425.tar.gz.
</span><br>
<span class="quotelev1">&gt; Almost everything works fine, except that the unexpected output appears
</span><br>
<span class="quotelev1">&gt; as below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mishima_at_node04 ~]$ mpirun -cpus-per-proc 4 ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; App launch reported: 3 (out of 3) daemons - 8 (out of 12) procs
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You dropped the if-statement checking &quot;orte_report_launch_progress&quot; in
</span><br>
<span class="quotelev1">&gt; plm_base_receive.c @ r30423, which causes the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- orte/mca/plm/base/plm_base_receive.c.org2014-01-25
</span><br>
<span class="quotelev1">&gt; 11:51:59.000000000 +0900
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/plm/base/plm_base_receive.c2014-01-26
</span><br>
<span class="quotelev1">&gt; 12:20:10.000000000
</span><br>
<span class="quotelev1">&gt; +0900
</span><br>
<span class="quotelev1">&gt; @@ -315,9 +315,11 @@
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;/* record that we heard back from a daemon during app
</span><br>
<span class="quotelev1">&gt; launch
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;if (running &amp;&amp; NULL != jdata) {
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;jdata-&gt;num_daemons_reported++;
</span><br>
<span class="quotelev1">&gt; - &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;if (0 == jdata-&gt;num_daemons_reported % 100 ||
</span><br>
<span class="quotelev1">&gt; - &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;jdata-&gt;num_daemons_reported ==
</span><br>
<span class="quotelev1">&gt; orte_process_info.num_procs) {
</span><br>
<span class="quotelev1">&gt; - &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;ORTE_ACTIVATE_JOB_STATE(jdata,
</span><br>
<span class="quotelev1">&gt; ORTE_JOB_STATE_REPORT_PROGRESS);
</span><br>
<span class="quotelev1">&gt; + &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;if (orte_report_launch_progress) {
</span><br>
<span class="quotelev1">&gt; + &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;if (0 == jdata-&gt;num_daemons_reported % 100 ||
</span><br>
<span class="quotelev1">&gt; + &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;jdata-&gt;num_daemons_reported ==
</span><br>
<span class="quotelev1">&gt; orte_process_info.num_procs) {
</span><br>
<span class="quotelev1">&gt; + &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;ORTE_ACTIVATE_JOB_STATE(jdata,
</span><br>
<span class="quotelev1">&gt; ORTE_JOB_STATE_REPORT_PROGRESS);
</span><br>
<span class="quotelev1">&gt; + &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;}
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;}
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;}
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;/* prepare for next job */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. It's also better to change the line 65 in NEWS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 64 &#160;&#160;* Mapping:
</span><br>
<span class="quotelev1">&gt; 65 &#160;&#160;* &#160;&#160;if #procs &lt;= 2, default to map-by core &#160;-&gt; map-by slot
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;^^^^^^^^^^^
</span><br>
<span class="quotelev1">&gt; 66 &#160;&#160;* &#160;&#160;if #procs &gt; 2, default to map-by socket
</span><br>
<span class="quotelev1">&gt; ...
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
<br>
<p><span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23481.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Previous message:</strong> <a href="23479.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>In reply to:</strong> <a href="23479.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23481.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Reply:</strong> <a href="23481.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
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
