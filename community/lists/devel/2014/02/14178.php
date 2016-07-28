<?
$subject_val = "Re: [OMPI devel] OPAL_CRS_* meaning";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 18 11:22:29 2014" -->
<!-- isoreceived="20140218162229" -->
<!-- sent="Tue, 18 Feb 2014 10:22:28 -0600" -->
<!-- isosent="20140218162228" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OPAL_CRS_* meaning" -->
<!-- id="CAANzjEnJKC9PN--5A5+DCLyas+THO3iSGsJEOnJMqdRqV+GubA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B9A9D3D8-142F-4C79-B147-59BD9B62F799_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-18 11:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14179.php">Adrian Reber: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Previous message:</strong> <a href="14177.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>In reply to:</strong> <a href="14169.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just replied to your other email before seeing this. Take a look at those
<br>
comments and let me know if that helps differentiate those interfaces.
<br>
<p><p>On Tue, Feb 18, 2014 at 5:28 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; opal_crs.checkpoint() is not used to restart the process, but it does
</span><br>
<span class="quotelev1">&gt; return in two different cases:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - in the &quot;continue&quot; case, opal_crs.checkpoint() returns in the original
</span><br>
<span class="quotelev1">&gt; process and keeps executing the same process and then, IIRC, invokes
</span><br>
<span class="quotelev1">&gt; opal_crs.continue().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - in the &quot;restart&quot; case, opal_crs.checkpoint() returns into a new process
</span><br>
<span class="quotelev1">&gt; and then, IIRC, invokes opal_crs.restart().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 18, 2014, at 5:29 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I should have read this email before answering the other.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So opal_crs.checkpoint() is used to checkpoint the process as well as
</span><br>
<span class="quotelev2">&gt; &gt; restart the process? I would have expected opal_crs.restart() is used
</span><br>
<span class="quotelev2">&gt; &gt; for restart. I am confused. Looking at CRS/BLCR checkpoint() seems to
</span><br>
<span class="quotelev2">&gt; &gt; only checkpoint and restart() seems to only restart. The comment in
</span><br>
<span class="quotelev2">&gt; &gt; opal/mca/crs/crs.h says the same as you say.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Feb 17, 2014 at 03:43:08PM -0600, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; These values indicate the current state of the checkpointing lifecycle.
</span><br>
<span class="quotelev1">&gt; In
</span><br>
<span class="quotelev3">&gt; &gt;&gt; particular CONTINUE/RESTART are set by the checkpointer in the CRS (all
</span><br>
<span class="quotelev3">&gt; &gt;&gt; others are used by the INC mechanism). In the opal_crs.checkpoint() call
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the checkpointer will capture the program state and it is possible to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; emerge from this function in one of two scenarios. Either we are
</span><br>
<span class="quotelev1">&gt; continuing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; execution in the original process (Continue state), or we are resuming
</span><br>
<span class="quotelev3">&gt; &gt;&gt; execution from a checkpointed state (Restart state).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So if the checkpoint was successful, and you are not restarting the
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev3">&gt; &gt;&gt; then you want OPAL_CRS_CONTINUE.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If the process is being restarted from a checkpoint file, then we should
</span><br>
<span class="quotelev3">&gt; &gt;&gt; emerge from this function setting the state to OPAL_CRS_RESTART.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The OPAL_CR_CHECKPOINT state is used in the INC mechanism to notify all
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the components to prepare for checkpoint (we probably should have
</span><br>
<span class="quotelev1">&gt; called it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OPAL_CR_PREPARE_FOR_CKPT). So not really used by the CRS mechanisms at
</span><br>
<span class="quotelev1">&gt; all.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You can see it used in the opal_cr_inc_core_prep() function in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal/runtime/opal_cr.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mon, Feb 17, 2014 at 9:28 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This is probably for Josh. What is the meaning of the OPAL_CRS_* enums?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; They are probably used to communicate the state of the CRS modules.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OPAL_CRS_ERROR seems to be used in case an error happened. What is the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; CRS module supposed to set this to if the checkpoint was successful.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OPAL_CRS_CONTINUE or OPAL_CRS_CHECKPOINT?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                Adrian
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev3">&gt; &gt;&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14178/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14179.php">Adrian Reber: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Previous message:</strong> <a href="14177.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>In reply to:</strong> <a href="14169.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
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
