<?
$subject_val = "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 19:15:00 2014" -->
<!-- isoreceived="20140128001500" -->
<!-- sent="Mon, 27 Jan 2014 16:14:56 -0800" -->
<!-- isosent="20140128001456" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output" -->
<!-- id="FF517430-0019-454B-BEF3-4DF02F2B5A5B_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF58EDA99B.C2475EEA-ON49257C6E.00003B91-49257C6E.0000C6D7_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 19:14:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23482.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Previous message:</strong> <a href="23480.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>In reply to:</strong> <a href="23480.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23482.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Reply:</strong> <a href="23482.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kewl - thanks!
<br>
<p>On Jan 27, 2014, at 4:08 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Ralph. I quickly checked the fix. It worked fine for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I fixed that in today's final cleanup
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 27, 2014, at 3:17 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As for the NEWS - it is actually already correct. We default to map-by
</span><br>
<span class="quotelev2">&gt;&gt; core, not slot, as of 1.7.4.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is it correct? As far as I browse the source code, map-by slot is used if
</span><br>
<span class="quotelev2">&gt;&gt; np &lt;=2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [mishima_at_manage openmpi-1.7.4rc2r30425]$ cat -n
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/rmaps/base/rmaps_base_map_job.c
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;   107              /* default based on number of procs */
</span><br>
<span class="quotelev2">&gt;&gt;   108              if (nprocs &lt;= 2) {
</span><br>
<span class="quotelev2">&gt;&gt;   109                  opal_output_verbose(5,
</span><br>
<span class="quotelev2">&gt;&gt; orte_rmaps_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt;&gt;   110                                      &quot;mca:rmaps mapping not given -
</span><br>
<span class="quotelev2">&gt;&gt; using byslot&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;   111                  ORTE_SET_MAPPING_POLICY(map-&gt;mapping,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_MAPPING_BYSLOT);
</span><br>
<span class="quotelev2">&gt;&gt;   112              } else {
</span><br>
<span class="quotelev2">&gt;&gt;   113                  opal_output_verbose(5,
</span><br>
<span class="quotelev2">&gt;&gt; orte_rmaps_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt;&gt;   114                                      &quot;mca:rmaps mapping not given -
</span><br>
<span class="quotelev2">&gt;&gt; using bysocket&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;   115                  ORTE_SET_MAPPING_POLICY(map-&gt;mapping,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_MAPPING_BYSOCKET);
</span><br>
<span class="quotelev2">&gt;&gt;   116              }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 26, 2014, at 3:02 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried latest nightly snapshots of openmpi-1.7.4rc2r30425.tar.gz.
</span><br>
<span class="quotelev2">&gt;&gt; Almost everything works fine, except that the unexpected output appears
</span><br>
<span class="quotelev2">&gt;&gt; as below:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [mishima_at_node04 ~]$ mpirun -cpus-per-proc 4 ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev2">&gt;&gt; App launch reported: 3 (out of 3) daemons - 8 (out of 12) procs
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You dropped the if-statement checking &quot;orte_report_launch_progress&quot; in
</span><br>
<span class="quotelev2">&gt;&gt; plm_base_receive.c @ r30423, which causes the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --- orte/mca/plm/base/plm_base_receive.c.org2014-01-25
</span><br>
<span class="quotelev2">&gt;&gt; 11:51:59.000000000 +0900
</span><br>
<span class="quotelev2">&gt;&gt; +++ orte/mca/plm/base/plm_base_receive.c2014-01-26
</span><br>
<span class="quotelev2">&gt;&gt; 12:20:10.000000000
</span><br>
<span class="quotelev2">&gt;&gt; +0900
</span><br>
<span class="quotelev2">&gt;&gt; @@ -315,9 +315,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;            /* record that we heard back from a daemon during app
</span><br>
<span class="quotelev2">&gt;&gt; launch
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;            if (running &amp;&amp; NULL != jdata) {
</span><br>
<span class="quotelev2">&gt;&gt;                jdata-&gt;num_daemons_reported++;
</span><br>
<span class="quotelev2">&gt;&gt; -                if (0 == jdata-&gt;num_daemons_reported % 100 ||
</span><br>
<span class="quotelev2">&gt;&gt; -                    jdata-&gt;num_daemons_reported ==
</span><br>
<span class="quotelev2">&gt;&gt; orte_process_info.num_procs) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    ORTE_ACTIVATE_JOB_STATE(jdata,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_JOB_STATE_REPORT_PROGRESS);
</span><br>
<span class="quotelev2">&gt;&gt; +                if (orte_report_launch_progress) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    if (0 == jdata-&gt;num_daemons_reported % 100 ||
</span><br>
<span class="quotelev2">&gt;&gt; +                        jdata-&gt;num_daemons_reported ==
</span><br>
<span class="quotelev2">&gt;&gt; orte_process_info.num_procs) {
</span><br>
<span class="quotelev2">&gt;&gt; +                        ORTE_ACTIVATE_JOB_STATE(jdata,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_JOB_STATE_REPORT_PROGRESS);
</span><br>
<span class="quotelev2">&gt;&gt; +                    }
</span><br>
<span class="quotelev2">&gt;&gt;                }
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;            /* prepare for next job */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; P.S. It's also better to change the line 65 in NEWS.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 64   * Mapping:
</span><br>
<span class="quotelev2">&gt;&gt; 65   *   if #procs &lt;= 2, default to map-by core  -&gt; map-by slot
</span><br>
<span class="quotelev2">&gt;&gt;                                   ^^^^^^^^^^^
</span><br>
<span class="quotelev2">&gt;&gt; 66   *   if #procs &gt; 2, default to map-by socket
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23482.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Previous message:</strong> <a href="23480.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>In reply to:</strong> <a href="23480.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23482.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Reply:</strong> <a href="23482.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
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
