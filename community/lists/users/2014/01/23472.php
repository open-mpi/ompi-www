<?
$subject_val = "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 10:19:07 2014" -->
<!-- isoreceived="20140127151907" -->
<!-- sent="Mon, 27 Jan 2014 07:19:02 -0800" -->
<!-- isosent="20140127151902" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output" -->
<!-- id="9A7A2211-4612-4D1B-B9B4-9E07AE71DB59_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF7EAAD0E7.46A9E7E6-ON49257C6C.007DE94A-49257C6C.007EA077_at_jcity.maeda.co.jp" -->
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
<strong>Date:</strong> 2014-01-27 10:19:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23473.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Previous message:</strong> <a href="23471.php">&#197;ke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>In reply to:</strong> <a href="23465.php">tmishima_at_[hidden]: "[OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23478.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Reply:</strong> <a href="23478.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've fixed the reporting flag - thanks!
<br>
<p>As for the NEWS - it is actually already correct. We default to map-by core, not slot, as of 1.7.4. However, if cpus-per-proc is given, we should probably fall back to map-by slot, so I'll make that change
<br>
<p>&nbsp;
<br>
On Jan 26, 2014, at 3:02 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; --- orte/mca/plm/base/plm_base_receive.c.org	2014-01-25
</span><br>
<span class="quotelev1">&gt; 11:51:59.000000000 +0900
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/plm/base/plm_base_receive.c	2014-01-26 12:20:10.000000000
</span><br>
<span class="quotelev1">&gt; +0900
</span><br>
<span class="quotelev1">&gt; @@ -315,9 +315,11 @@
</span><br>
<span class="quotelev1">&gt;             /* record that we heard back from a daemon during app launch
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;             if (running &amp;&amp; NULL != jdata) {
</span><br>
<span class="quotelev1">&gt;                 jdata-&gt;num_daemons_reported++;
</span><br>
<span class="quotelev1">&gt; -                if (0 == jdata-&gt;num_daemons_reported % 100 ||
</span><br>
<span class="quotelev1">&gt; -                    jdata-&gt;num_daemons_reported ==
</span><br>
<span class="quotelev1">&gt; orte_process_info.num_procs) {
</span><br>
<span class="quotelev1">&gt; -                    ORTE_ACTIVATE_JOB_STATE(jdata,
</span><br>
<span class="quotelev1">&gt; ORTE_JOB_STATE_REPORT_PROGRESS);
</span><br>
<span class="quotelev1">&gt; +                if (orte_report_launch_progress) {
</span><br>
<span class="quotelev1">&gt; +                    if (0 == jdata-&gt;num_daemons_reported % 100 ||
</span><br>
<span class="quotelev1">&gt; +                        jdata-&gt;num_daemons_reported ==
</span><br>
<span class="quotelev1">&gt; orte_process_info.num_procs) {
</span><br>
<span class="quotelev1">&gt; +                        ORTE_ACTIVATE_JOB_STATE(jdata,
</span><br>
<span class="quotelev1">&gt; ORTE_JOB_STATE_REPORT_PROGRESS);
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             /* prepare for next job */
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
<span class="quotelev1">&gt; 64   * Mapping:
</span><br>
<span class="quotelev1">&gt; 65   *   if #procs &lt;= 2, default to map-by core  -&gt; map-by slot
</span><br>
<span class="quotelev1">&gt;                                    ^^^^^^^^^^^
</span><br>
<span class="quotelev1">&gt; 66   *   if #procs &gt; 2, default to map-by socket
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23473.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Previous message:</strong> <a href="23471.php">&#197;ke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>In reply to:</strong> <a href="23465.php">tmishima_at_[hidden]: "[OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23478.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Reply:</strong> <a href="23478.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
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
