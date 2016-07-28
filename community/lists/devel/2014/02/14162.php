<?
$subject_val = "Re: [OMPI devel] OPAL_CRS_* meaning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 17 16:43:09 2014" -->
<!-- isoreceived="20140217214309" -->
<!-- sent="Mon, 17 Feb 2014 15:43:08 -0600" -->
<!-- isosent="20140217214308" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OPAL_CRS_* meaning" -->
<!-- id="CAANzjEmWr0vJUsW6sy3S0=r83nrj6rh4s_3uoMcNPg9G2-RTMw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140217152811.GP24474_at_lisas.de" -->
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
<strong>Date:</strong> 2014-02-17 16:43:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14163.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Previous message:</strong> <a href="14161.php">Ralph Castain: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>In reply to:</strong> <a href="14156.php">Adrian Reber: "[OMPI devel] OPAL_CRS_* meaning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14168.php">Adrian Reber: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<li><strong>Reply:</strong> <a href="14168.php">Adrian Reber: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These values indicate the current state of the checkpointing lifecycle. In
<br>
particular CONTINUE/RESTART are set by the checkpointer in the CRS (all
<br>
others are used by the INC mechanism). In the opal_crs.checkpoint() call
<br>
the checkpointer will capture the program state and it is possible to
<br>
emerge from this function in one of two scenarios. Either we are continuing
<br>
execution in the original process (Continue state), or we are resuming
<br>
execution from a checkpointed state (Restart state).
<br>
<p>So if the checkpoint was successful, and you are not restarting the process
<br>
then you want OPAL_CRS_CONTINUE.
<br>
<p>If the process is being restarted from a checkpoint file, then we should
<br>
emerge from this function setting the state to OPAL_CRS_RESTART.
<br>
<p>The OPAL_CR_CHECKPOINT state is used in the INC mechanism to notify all of
<br>
the components to prepare for checkpoint (we probably should have called it
<br>
OPAL_CR_PREPARE_FOR_CKPT). So not really used by the CRS mechanisms at all.
<br>
You can see it used in the opal_cr_inc_core_prep() function in
<br>
opal/runtime/opal_cr.c
<br>
<p>-- Josh
<br>
<p><p><p>On Mon, Feb 17, 2014 at 9:28 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is probably for Josh. What is the meaning of the OPAL_CRS_* enums?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They are probably used to communicate the state of the CRS modules.
</span><br>
<span class="quotelev1">&gt; OPAL_CRS_ERROR seems to be used in case an error happened. What is the
</span><br>
<span class="quotelev1">&gt; CRS module supposed to set this to if the checkpoint was successful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OPAL_CRS_CONTINUE or OPAL_CRS_CHECKPOINT?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Adrian
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14162/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14163.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Previous message:</strong> <a href="14161.php">Ralph Castain: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>In reply to:</strong> <a href="14156.php">Adrian Reber: "[OMPI devel] OPAL_CRS_* meaning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14168.php">Adrian Reber: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<li><strong>Reply:</strong> <a href="14168.php">Adrian Reber: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
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
