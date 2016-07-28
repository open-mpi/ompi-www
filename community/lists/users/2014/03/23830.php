<?
$subject_val = "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 00:03:00 2014" -->
<!-- isoreceived="20140313040300" -->
<!-- sent="Thu, 13 Mar 2014 13:02:20 +0900" -->
<!-- isosent="20140313040220" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2" -->
<!-- id="OF49F2BBE2.065FA509-ON49257C9A.001588E0-49257C9A.00163E94_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="04588FA8-DCB7-427A-BC8D-A27F25D76210_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20ctrl%2Bc%20to%20abort%20a%20job%20with%20openmpi-1.7.5rc2"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-13 00:02:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23831.php">Ralph Castain: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Previous message:</strong> <a href="23829.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>In reply to:</strong> <a href="23828.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23832.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Reply:</strong> <a href="23832.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for disturbing, please keep going ...
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; Yes, I know - I am just finishing the fix now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2014, at 8:48 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph, this problem is not fixed completely by today's latest
</span><br>
<span class="quotelev2">&gt; &gt; ticket #4383, I guess ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4383">https://svn.open-mpi.org/trac/ompi/ticket/4383</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For example, in case of returing with ORTE_ERR_SILENT from the line 514
</span><br>
<span class="quotelev2">&gt; &gt; in rmaps_rr_mapper.c file, the problem still occurs. I executed the job
</span><br>
<span class="quotelev2">&gt; &gt; under the unmanaged condition - rsh without torque:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage openmpi-1.7.5rc2]$ mpirun -np 6 -host node05,node06
</span><br>
<span class="quotelev2">&gt; &gt; -nooversubscribe ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; There are not enough slots available in the system to satisfy the 6
</span><br>
slots
<br>
<span class="quotelev2">&gt; &gt; that were requested by the application:
</span><br>
<span class="quotelev2">&gt; &gt;  /home/mishima/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Either request fewer slots for your application, or make more slots
</span><br>
<span class="quotelev2">&gt; &gt; available
</span><br>
<span class="quotelev2">&gt; &gt; for use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; Abort is in progress...hit ctrl-c again within 5 seconds to forcibly
</span><br>
<span class="quotelev2">&gt; &gt; terminate
</span><br>
<span class="quotelev2">&gt; &gt; Abort is in progress...hit ctrl-c again within 5 seconds to forcibly
</span><br>
<span class="quotelev2">&gt; &gt; terminate
</span><br>
<span class="quotelev2">&gt; &gt; .....
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; rmaps_rr_mapper.c:
</span><br>
<span class="quotelev2">&gt; &gt;   509      /* quick check to see if we can map all the procs */
</span><br>
<span class="quotelev2">&gt; &gt;   510      if (num_slots &lt; (app-&gt;num_procs *
</span><br>
<span class="quotelev2">&gt; &gt; orte_rmaps_base.cpus_per_rank)) {
</span><br>
<span class="quotelev2">&gt; &gt;   511          if (ORTE_MAPPING_NO_OVERSUBSCRIBE &amp;
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_GET_MAPPING_DIRECTIVE(jdata-&gt;map-&gt;mapping)) {
</span><br>
<span class="quotelev2">&gt; &gt;   512              orte_show_help(&quot;help-orte-rmaps-base.txt&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; &quot;orte-rmaps-base:alloc-error&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;   513                             true, app-&gt;num_procs, app-&gt;app);
</span><br>
<span class="quotelev2">&gt; &gt;   514              return ORTE_ERR_SILENT;
</span><br>
<span class="quotelev2">&gt; &gt;   515          }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya
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
<li><strong>Next message:</strong> <a href="23831.php">Ralph Castain: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Previous message:</strong> <a href="23829.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>In reply to:</strong> <a href="23828.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23832.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Reply:</strong> <a href="23832.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
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
