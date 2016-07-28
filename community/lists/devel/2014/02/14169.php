<?
$subject_val = "Re: [OMPI devel] OPAL_CRS_* meaning";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 18 06:28:32 2014" -->
<!-- isoreceived="20140218112832" -->
<!-- sent="Tue, 18 Feb 2014 11:28:30 +0000" -->
<!-- isosent="20140218112830" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OPAL_CRS_* meaning" -->
<!-- id="B9A9D3D8-142F-4C79-B147-59BD9B62F799_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140218102959.GT24474_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OPAL_CRS_* meaning<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-18 06:28:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14170.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>Previous message:</strong> <a href="14168.php">Adrian Reber: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<li><strong>In reply to:</strong> <a href="14168.php">Adrian Reber: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14178.php">Josh Hursey: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<li><strong>Reply:</strong> <a href="14178.php">Josh Hursey: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
opal_crs.checkpoint() is not used to restart the process, but it does return in two different cases:
<br>
<p>- in the &quot;continue&quot; case, opal_crs.checkpoint() returns in the original process and keeps executing the same process and then, IIRC, invokes opal_crs.continue().
<br>
<p>- in the &quot;restart&quot; case, opal_crs.checkpoint() returns into a new process and then, IIRC, invokes opal_crs.restart().
<br>
<p><p>On Feb 18, 2014, at 5:29 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I should have read this email before answering the other.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So opal_crs.checkpoint() is used to checkpoint the process as well as
</span><br>
<span class="quotelev1">&gt; restart the process? I would have expected opal_crs.restart() is used
</span><br>
<span class="quotelev1">&gt; for restart. I am confused. Looking at CRS/BLCR checkpoint() seems to
</span><br>
<span class="quotelev1">&gt; only checkpoint and restart() seems to only restart. The comment in
</span><br>
<span class="quotelev1">&gt; opal/mca/crs/crs.h says the same as you say.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 17, 2014 at 03:43:08PM -0600, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; These values indicate the current state of the checkpointing lifecycle. In
</span><br>
<span class="quotelev2">&gt;&gt; particular CONTINUE/RESTART are set by the checkpointer in the CRS (all
</span><br>
<span class="quotelev2">&gt;&gt; others are used by the INC mechanism). In the opal_crs.checkpoint() call
</span><br>
<span class="quotelev2">&gt;&gt; the checkpointer will capture the program state and it is possible to
</span><br>
<span class="quotelev2">&gt;&gt; emerge from this function in one of two scenarios. Either we are continuing
</span><br>
<span class="quotelev2">&gt;&gt; execution in the original process (Continue state), or we are resuming
</span><br>
<span class="quotelev2">&gt;&gt; execution from a checkpointed state (Restart state).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So if the checkpoint was successful, and you are not restarting the process
</span><br>
<span class="quotelev2">&gt;&gt; then you want OPAL_CRS_CONTINUE.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If the process is being restarted from a checkpoint file, then we should
</span><br>
<span class="quotelev2">&gt;&gt; emerge from this function setting the state to OPAL_CRS_RESTART.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The OPAL_CR_CHECKPOINT state is used in the INC mechanism to notify all of
</span><br>
<span class="quotelev2">&gt;&gt; the components to prepare for checkpoint (we probably should have called it
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_CR_PREPARE_FOR_CKPT). So not really used by the CRS mechanisms at all.
</span><br>
<span class="quotelev2">&gt;&gt; You can see it used in the opal_cr_inc_core_prep() function in
</span><br>
<span class="quotelev2">&gt;&gt; opal/runtime/opal_cr.c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Feb 17, 2014 at 9:28 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is probably for Josh. What is the meaning of the OPAL_CRS_* enums?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; They are probably used to communicate the state of the CRS modules.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_CRS_ERROR seems to be used in case an error happened. What is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CRS module supposed to set this to if the checkpoint was successful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_CRS_CONTINUE or OPAL_CRS_CHECKPOINT?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                Adrian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev2">&gt;&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14170.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>Previous message:</strong> <a href="14168.php">Adrian Reber: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<li><strong>In reply to:</strong> <a href="14168.php">Adrian Reber: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14178.php">Josh Hursey: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<li><strong>Reply:</strong> <a href="14178.php">Josh Hursey: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
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
