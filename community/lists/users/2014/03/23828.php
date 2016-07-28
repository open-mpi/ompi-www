<?
$subject_val = "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 23:54:55 2014" -->
<!-- isoreceived="20140313035455" -->
<!-- sent="Wed, 12 Mar 2014 20:54:11 -0700" -->
<!-- isosent="20140313035411" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2" -->
<!-- id="04588FA8-DCB7-427A-BC8D-A27F25D76210_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF484B952C.BBEE780A-ON49257C9A.0013993D-49257C9A.0014FCCE_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-12 23:54:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23829.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Previous message:</strong> <a href="23827.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>In reply to:</strong> <a href="23827.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23830.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Reply:</strong> <a href="23830.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I know - I am just finishing the fix now.
<br>
<p>On Mar 12, 2014, at 8:48 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph, this problem is not fixed completely by today's latest
</span><br>
<span class="quotelev1">&gt; ticket #4383, I guess ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4383">https://svn.open-mpi.org/trac/ompi/ticket/4383</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, in case of returing with ORTE_ERR_SILENT from the line 514
</span><br>
<span class="quotelev1">&gt; in rmaps_rr_mapper.c file, the problem still occurs. I executed the job
</span><br>
<span class="quotelev1">&gt; under the unmanaged condition - rsh without torque:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage openmpi-1.7.5rc2]$ mpirun -np 6 -host node05,node06
</span><br>
<span class="quotelev1">&gt; -nooversubscribe ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 6 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;  /home/mishima/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Either request fewer slots for your application, or make more slots
</span><br>
<span class="quotelev1">&gt; available
</span><br>
<span class="quotelev1">&gt; for use.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Abort is in progress...hit ctrl-c again within 5 seconds to forcibly
</span><br>
<span class="quotelev1">&gt; terminate
</span><br>
<span class="quotelev1">&gt; Abort is in progress...hit ctrl-c again within 5 seconds to forcibly
</span><br>
<span class="quotelev1">&gt; terminate
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rmaps_rr_mapper.c:
</span><br>
<span class="quotelev1">&gt;   509      /* quick check to see if we can map all the procs */
</span><br>
<span class="quotelev1">&gt;   510      if (num_slots &lt; (app-&gt;num_procs *
</span><br>
<span class="quotelev1">&gt; orte_rmaps_base.cpus_per_rank)) {
</span><br>
<span class="quotelev1">&gt;   511          if (ORTE_MAPPING_NO_OVERSUBSCRIBE &amp;
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_DIRECTIVE(jdata-&gt;map-&gt;mapping)) {
</span><br>
<span class="quotelev1">&gt;   512              orte_show_help(&quot;help-orte-rmaps-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;orte-rmaps-base:alloc-error&quot;,
</span><br>
<span class="quotelev1">&gt;   513                             true, app-&gt;num_procs, app-&gt;app);
</span><br>
<span class="quotelev1">&gt;   514              return ORTE_ERR_SILENT;
</span><br>
<span class="quotelev1">&gt;   515          }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tetsuya
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
<li><strong>Next message:</strong> <a href="23829.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Previous message:</strong> <a href="23827.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>In reply to:</strong> <a href="23827.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23830.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Reply:</strong> <a href="23830.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
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
