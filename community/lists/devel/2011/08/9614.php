<?
$subject_val = "Re: [OMPI devel] Uninitialized ORTE epoch values";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  5 16:52:45 2011" -->
<!-- isoreceived="20110805205245" -->
<!-- sent="Fri, 5 Aug 2011 14:52:37 -0600" -->
<!-- isosent="20110805205237" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Uninitialized ORTE epoch values" -->
<!-- id="D35883F5-87A6-4E8E-AEE2-5212778A7F0B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMHgK352_ik5sgFbE743JvJNPBgXxh_189q+bXMdtfscHBoC5Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Uninitialized ORTE epoch values<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-05 16:52:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9615.php">Thomas Herault: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Previous message:</strong> <a href="9613.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>In reply to:</strong> <a href="9613.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9615.php">Thomas Herault: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Reply:</strong> <a href="9615.php">Thomas Herault: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Reply:</strong> <a href="9617.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Wes - it isn't the print that's the issue, it's the fact that we have epochs that aren't being initialized, and what else that may be causing to have problems.
<br>
<p><p>On Aug 5, 2011, at 2:45 PM, Wesley Bland wrote:
<br>
<p><span class="quotelev1">&gt; I don't think these are anything to worry about since they're all print statements, but I will work on these tonight.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 5, 2011 at 3:03 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ralph and I are trying to track down the mysterious ORTE error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In doing so, I have found at least one fairly repeatable error on my cluster: when running through SLURM the ibm/dynamic/spawn test, where we mpirun 3 procs and then we MPI_COMM_SPAWN 3 more.  Running the orteds through valgrind, I see a bunch of uninitialized epoch issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached at the 2 valgrind outputs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can these be fixed?  I don't know if they're actual problems or not, but seeing uninitialized values go by makes me extremely nervous.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9614/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9615.php">Thomas Herault: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Previous message:</strong> <a href="9613.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>In reply to:</strong> <a href="9613.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9615.php">Thomas Herault: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Reply:</strong> <a href="9615.php">Thomas Herault: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Reply:</strong> <a href="9617.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
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
