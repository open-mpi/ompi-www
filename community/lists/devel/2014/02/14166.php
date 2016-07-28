<?
$subject_val = "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 18 05:08:33 2014" -->
<!-- isoreceived="20140218100833" -->
<!-- sent="Tue, 18 Feb 2014 11:08:32 +0100" -->
<!-- isosent="20140218100832" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process" -->
<!-- id="20140218100832.GS24474_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjEmADRESP8+Q5K_wf-4PRvMRbDUbQ-CV6E6QcQXDAULPKw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-18 05:08:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14167.php">George Bosilca: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>Previous message:</strong> <a href="14165.php">Brian Barrett: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>In reply to:</strong> <a href="14163.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14177.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Reply:</strong> <a href="14177.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I do not understand your question. So far I have only implemented the
<br>
checkpoint part and not the restart part.
<br>
<p>Using criu_dump() the process can  be left in three different
<br>
states. Without any special handling the process is dumped and then
<br>
killed. I can also tell criu to leave the process stopped (--leave-stopped)
<br>
or running (--leave-running). I decided to default to --leave-running so
<br>
that after the checkpoint has been performed the process continues
<br>
running where it stopped.
<br>
<p>What would be the difference between 'being restarted versus continuing
<br>
after checkpointing'? Right now only 'continuing after checkpoint' is
<br>
implemented. I do not understand how process 'is being restarted' fits
<br>
in the checkpoint function.
<br>
<p>In opal_crs_criu_checkpoint() I am using criu_dump() to
<br>
checkpoint the process and the plan is to use criu_restore() in
<br>
opal_crs_criu_restart() (which I have not yet implemented).
<br>
<p>On Mon, Feb 17, 2014 at 03:45:49PM -0600, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; It look fine except that the restart state is not flagged. When a process
</span><br>
<span class="quotelev1">&gt; is restarted does it resume execution inside the criu_dump() function? If
</span><br>
<span class="quotelev1">&gt; so, is there a way to tell from its return code (or some other mechanism)
</span><br>
<span class="quotelev1">&gt; that it is being restarted versus continuing after checkpointing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 17, 2014 at 2:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Great - looks fine to me!!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 17, 2014, at 11:39 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have prepared a patch I would like to commit which adds to code to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; actually checkpoint a process. Thanks for the pointers about the string
</span><br>
<span class="quotelev3">&gt; &gt; &gt; variables I tried to do implement it correctly.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CRIU currently has problems with the new OOB usock but I will contact
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the CRIU developers about this error. Using tcp, checkpointing works.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CRIU also has problems with --np &gt; 1, but I am sure this can also be
</span><br>
<span class="quotelev3">&gt; &gt; &gt; resolved.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The patch is at:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=89c9c27c87598706e8f798f84fe9520ee5884492">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=89c9c27c87598706e8f798f84fe9520ee5884492</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;               Adrian
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev1">&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev1">&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14167.php">George Bosilca: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>Previous message:</strong> <a href="14165.php">Brian Barrett: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>In reply to:</strong> <a href="14163.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14177.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Reply:</strong> <a href="14177.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
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
