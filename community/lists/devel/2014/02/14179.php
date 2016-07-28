<?
$subject_val = "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 18 12:30:03 2014" -->
<!-- isoreceived="20140218173003" -->
<!-- sent="Tue, 18 Feb 2014 18:30:02 +0100" -->
<!-- isosent="20140218173002" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process" -->
<!-- id="20140218173002.GB24474_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjEkBLEijVh6XnO82gjB0_yZJWKsifXauv0opHpUPU8sFAA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-02-18 12:30:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<li><strong>Previous message:</strong> <a href="14178.php">Josh Hursey: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<li><strong>In reply to:</strong> <a href="14177.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14181.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Reply:</strong> <a href="14181.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Feb 18, 2014 at 10:21:23AM -0600, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; So when a process is restarted with CRIU, does it resume execution after
</span><br>
<span class="quotelev1">&gt; the criu_dump() or somewhere else?
</span><br>
<p>The process is resumed at the same point it was checkpointed with
<br>
criu_dump().
<br>
<p><span class="quotelev1">&gt; In a continue/leave-running mode after checkpoint the MPI library does not
</span><br>
<span class="quotelev1">&gt; need to do quite a much work since we can depend on some things not
</span><br>
<span class="quotelev1">&gt; changing (such as the machine name, orted pid, ...).
</span><br>
<p>During criu_dump() nothing changes.
<br>
<p><span class="quotelev1">&gt; In a restart mode then the entire library has to be updated - much more
</span><br>
<span class="quotelev1">&gt; expensive than the continue mode.
</span><br>
<p>Ah. If I understand you correctly there are C/R methods which require
<br>
that the checkpointed process is terminated and needs to be restarted to
<br>
continue running. CRIU is completely transparent for the process. It
<br>
needs no special environment (LD_PRELOAD) nor any special handling.
<br>
criu_dump() pauses the process, checkpoints it and (if desired) lets it
<br>
continue in the same state it was before.
<br>
<p><span class="quotelev1">&gt; The CRS components that we have supported emerge from their checkpointing
</span><br>
<span class="quotelev1">&gt; function (criu_dump in your case) knowing if they are in the continue or
</span><br>
<span class="quotelev1">&gt; restart mode. So that CRS function sets the flag according so the rest of
</span><br>
<span class="quotelev1">&gt; the library can do the right thing afterwards.
</span><br>
<p>So, I would say CRIU CRS is in continue mode after criu_dump().
<br>
<p><span class="quotelev1">&gt; The restart function is called by the opal_restart tool to restart the
</span><br>
<span class="quotelev1">&gt; process from an image. Some checkpointers have a library call to restart a
</span><br>
<span class="quotelev1">&gt; process others used external tools to do so. So that interface just let's
</span><br>
<span class="quotelev1">&gt; the checkpointer decide, given a snapshot image, how it should restart that
</span><br>
<span class="quotelev1">&gt; process. The restarted process is assumed to wake up in the
</span><br>
<span class="quotelev1">&gt; opal_crs_*_checkpoint function, not opal_crs_*_restart. So the restart
</span><br>
<span class="quotelev1">&gt; function name can be a bit misleading.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that help?
</span><br>
<p>That helps a lot. Thanks. I am not 100% sure I understand the restart
<br>
case, but I will try to implement it and probably then I will understand
<br>
how it works.
<br>
<p>Would you say, that for the checkpoint only functionality in continue
<br>
mode the patch can be checked in?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p><span class="quotelev1">&gt; On Tue, Feb 18, 2014 at 4:08 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think I do not understand your question. So far I have only implemented
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; checkpoint part and not the restart part.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Using criu_dump() the process can  be left in three different
</span><br>
<span class="quotelev2">&gt; &gt; states. Without any special handling the process is dumped and then
</span><br>
<span class="quotelev2">&gt; &gt; killed. I can also tell criu to leave the process stopped (--leave-stopped)
</span><br>
<span class="quotelev2">&gt; &gt; or running (--leave-running). I decided to default to --leave-running so
</span><br>
<span class="quotelev2">&gt; &gt; that after the checkpoint has been performed the process continues
</span><br>
<span class="quotelev2">&gt; &gt; running where it stopped.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What would be the difference between 'being restarted versus continuing
</span><br>
<span class="quotelev2">&gt; &gt; after checkpointing'? Right now only 'continuing after checkpoint' is
</span><br>
<span class="quotelev2">&gt; &gt; implemented. I do not understand how process 'is being restarted' fits
</span><br>
<span class="quotelev2">&gt; &gt; in the checkpoint function.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In opal_crs_criu_checkpoint() I am using criu_dump() to
</span><br>
<span class="quotelev2">&gt; &gt; checkpoint the process and the plan is to use criu_restore() in
</span><br>
<span class="quotelev2">&gt; &gt; opal_crs_criu_restart() (which I have not yet implemented).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Feb 17, 2014 at 03:45:49PM -0600, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It look fine except that the restart state is not flagged. When a process
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is restarted does it resume execution inside the criu_dump() function? If
</span><br>
<span class="quotelev3">&gt; &gt; &gt; so, is there a way to tell from its return code (or some other mechanism)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that it is being restarted versus continuing after checkpointing?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mon, Feb 17, 2014 at 2:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Great - looks fine to me!!
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Feb 17, 2014, at 11:39 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I have prepared a patch I would like to commit which adds to code to
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; actually checkpoint a process. Thanks for the pointers about the
</span><br>
<span class="quotelev2">&gt; &gt; string
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; variables I tried to do implement it correctly.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; CRIU currently has problems with the new OOB usock but I will contact
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; the CRIU developers about this error. Using tcp, checkpointing works.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; CRIU also has problems with --np &gt; 1, but I am sure this can also be
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; resolved.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; The patch is at:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=89c9c27c87598706e8f798f84fe9520ee5884492">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=89c9c27c87598706e8f798f84fe9520ee5884492</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;               Adrian
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<li><strong>Previous message:</strong> <a href="14178.php">Josh Hursey: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<li><strong>In reply to:</strong> <a href="14177.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14181.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Reply:</strong> <a href="14181.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
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
