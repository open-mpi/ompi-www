<?
$subject_val = "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 18 11:21:23 2014" -->
<!-- isoreceived="20140218162123" -->
<!-- sent="Tue, 18 Feb 2014 10:21:23 -0600" -->
<!-- isosent="20140218162123" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process" -->
<!-- id="CAANzjEkBLEijVh6XnO82gjB0_yZJWKsifXauv0opHpUPU8sFAA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140218100832.GS24474_at_lisas.de" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-18 11:21:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14178.php">Josh Hursey: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<li><strong>Previous message:</strong> <a href="14176.php">Nathan Hjelm: "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<li><strong>In reply to:</strong> <a href="14166.php">Adrian Reber: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14179.php">Adrian Reber: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Reply:</strong> <a href="14179.php">Adrian Reber: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So when a process is restarted with CRIU, does it resume execution after
<br>
the criu_dump() or somewhere else?
<br>
<p>In a continue/leave-running mode after checkpoint the MPI library does not
<br>
need to do quite a much work since we can depend on some things not
<br>
changing (such as the machine name, orted pid, ...).
<br>
<p>In a restart mode then the entire library has to be updated - much more
<br>
expensive than the continue mode.
<br>
<p>The CRS components that we have supported emerge from their checkpointing
<br>
function (criu_dump in your case) knowing if they are in the continue or
<br>
restart mode. So that CRS function sets the flag according so the rest of
<br>
the library can do the right thing afterwards.
<br>
<p>The restart function is called by the opal_restart tool to restart the
<br>
process from an image. Some checkpointers have a library call to restart a
<br>
process others used external tools to do so. So that interface just let's
<br>
the checkpointer decide, given a snapshot image, how it should restart that
<br>
process. The restarted process is assumed to wake up in the
<br>
opal_crs_*_checkpoint function, not opal_crs_*_restart. So the restart
<br>
function name can be a bit misleading.
<br>
<p>Does that help?
<br>
<p>-- Josh
<br>
<p><p><p><p><p>On Tue, Feb 18, 2014 at 4:08 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think I do not understand your question. So far I have only implemented
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; checkpoint part and not the restart part.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using criu_dump() the process can  be left in three different
</span><br>
<span class="quotelev1">&gt; states. Without any special handling the process is dumped and then
</span><br>
<span class="quotelev1">&gt; killed. I can also tell criu to leave the process stopped (--leave-stopped)
</span><br>
<span class="quotelev1">&gt; or running (--leave-running). I decided to default to --leave-running so
</span><br>
<span class="quotelev1">&gt; that after the checkpoint has been performed the process continues
</span><br>
<span class="quotelev1">&gt; running where it stopped.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What would be the difference between 'being restarted versus continuing
</span><br>
<span class="quotelev1">&gt; after checkpointing'? Right now only 'continuing after checkpoint' is
</span><br>
<span class="quotelev1">&gt; implemented. I do not understand how process 'is being restarted' fits
</span><br>
<span class="quotelev1">&gt; in the checkpoint function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In opal_crs_criu_checkpoint() I am using criu_dump() to
</span><br>
<span class="quotelev1">&gt; checkpoint the process and the plan is to use criu_restore() in
</span><br>
<span class="quotelev1">&gt; opal_crs_criu_restart() (which I have not yet implemented).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 17, 2014 at 03:45:49PM -0600, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt; &gt; It look fine except that the restart state is not flagged. When a process
</span><br>
<span class="quotelev2">&gt; &gt; is restarted does it resume execution inside the criu_dump() function? If
</span><br>
<span class="quotelev2">&gt; &gt; so, is there a way to tell from its return code (or some other mechanism)
</span><br>
<span class="quotelev2">&gt; &gt; that it is being restarted versus continuing after checkpointing?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Feb 17, 2014 at 2:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Great - looks fine to me!!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Feb 17, 2014, at 11:39 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I have prepared a patch I would like to commit which adds to code to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; actually checkpoint a process. Thanks for the pointers about the
</span><br>
<span class="quotelev1">&gt; string
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; variables I tried to do implement it correctly.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; CRIU currently has problems with the new OOB usock but I will contact
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; the CRIU developers about this error. Using tcp, checkpointing works.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; CRIU also has problems with --np &gt; 1, but I am sure this can also be
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; resolved.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The patch is at:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=89c9c27c87598706e8f798f84fe9520ee5884492">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=89c9c27c87598706e8f798f84fe9520ee5884492</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;               Adrian
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt; &gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev2">&gt; &gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14177/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14178.php">Josh Hursey: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<li><strong>Previous message:</strong> <a href="14176.php">Nathan Hjelm: "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<li><strong>In reply to:</strong> <a href="14166.php">Adrian Reber: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14179.php">Adrian Reber: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Reply:</strong> <a href="14179.php">Adrian Reber: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
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
