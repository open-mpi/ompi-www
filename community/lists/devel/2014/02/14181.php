<?
$subject_val = "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 18 15:47:22 2014" -->
<!-- isoreceived="20140218204722" -->
<!-- sent="Tue, 18 Feb 2014 14:47:21 -0600" -->
<!-- isosent="20140218204721" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process" -->
<!-- id="CAANzjEnUBVdBS0+2zMoivHQydaem4NWfQvzCiRgrM2UEBM5RHw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140218173002.GB24474_at_lisas.de" -->
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
<strong>Date:</strong> 2014-02-18 15:47:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14182.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Previous message:</strong> <a href="14180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<li><strong>In reply to:</strong> <a href="14179.php">Adrian Reber: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep. For the checkpoint/continue that patch looks good.
<br>
<p><p>On Tue, Feb 18, 2014 at 11:30 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Feb 18, 2014 at 10:21:23AM -0600, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt; &gt; So when a process is restarted with CRIU, does it resume execution after
</span><br>
<span class="quotelev2">&gt; &gt; the criu_dump() or somewhere else?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The process is resumed at the same point it was checkpointed with
</span><br>
<span class="quotelev1">&gt; criu_dump().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In a continue/leave-running mode after checkpoint the MPI library does
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev2">&gt; &gt; need to do quite a much work since we can depend on some things not
</span><br>
<span class="quotelev2">&gt; &gt; changing (such as the machine name, orted pid, ...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; During criu_dump() nothing changes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In a restart mode then the entire library has to be updated - much more
</span><br>
<span class="quotelev2">&gt; &gt; expensive than the continue mode.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah. If I understand you correctly there are C/R methods which require
</span><br>
<span class="quotelev1">&gt; that the checkpointed process is terminated and needs to be restarted to
</span><br>
<span class="quotelev1">&gt; continue running. CRIU is completely transparent for the process. It
</span><br>
<span class="quotelev1">&gt; needs no special environment (LD_PRELOAD) nor any special handling.
</span><br>
<span class="quotelev1">&gt; criu_dump() pauses the process, checkpoints it and (if desired) lets it
</span><br>
<span class="quotelev1">&gt; continue in the same state it was before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The CRS components that we have supported emerge from their checkpointing
</span><br>
<span class="quotelev2">&gt; &gt; function (criu_dump in your case) knowing if they are in the continue or
</span><br>
<span class="quotelev2">&gt; &gt; restart mode. So that CRS function sets the flag according so the rest of
</span><br>
<span class="quotelev2">&gt; &gt; the library can do the right thing afterwards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I would say CRIU CRS is in continue mode after criu_dump().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The restart function is called by the opal_restart tool to restart the
</span><br>
<span class="quotelev2">&gt; &gt; process from an image. Some checkpointers have a library call to restart
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev2">&gt; &gt; process others used external tools to do so. So that interface just let's
</span><br>
<span class="quotelev2">&gt; &gt; the checkpointer decide, given a snapshot image, how it should restart
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt; &gt; process. The restarted process is assumed to wake up in the
</span><br>
<span class="quotelev2">&gt; &gt; opal_crs_*_checkpoint function, not opal_crs_*_restart. So the restart
</span><br>
<span class="quotelev2">&gt; &gt; function name can be a bit misleading.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does that help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That helps a lot. Thanks. I am not 100% sure I understand the restart
</span><br>
<span class="quotelev1">&gt; case, but I will try to implement it and probably then I will understand
</span><br>
<span class="quotelev1">&gt; how it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would you say, that for the checkpoint only functionality in continue
</span><br>
<span class="quotelev1">&gt; mode the patch can be checked in?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Adrian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Feb 18, 2014 at 4:08 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I think I do not understand your question. So far I have only
</span><br>
<span class="quotelev1">&gt; implemented
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; checkpoint part and not the restart part.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Using criu_dump() the process can  be left in three different
</span><br>
<span class="quotelev3">&gt; &gt; &gt; states. Without any special handling the process is dumped and then
</span><br>
<span class="quotelev3">&gt; &gt; &gt; killed. I can also tell criu to leave the process stopped
</span><br>
<span class="quotelev1">&gt; (--leave-stopped)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; or running (--leave-running). I decided to default to --leave-running
</span><br>
<span class="quotelev1">&gt; so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that after the checkpoint has been performed the process continues
</span><br>
<span class="quotelev3">&gt; &gt; &gt; running where it stopped.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What would be the difference between 'being restarted versus continuing
</span><br>
<span class="quotelev3">&gt; &gt; &gt; after checkpointing'? Right now only 'continuing after checkpoint' is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; implemented. I do not understand how process 'is being restarted' fits
</span><br>
<span class="quotelev3">&gt; &gt; &gt; in the checkpoint function.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In opal_crs_criu_checkpoint() I am using criu_dump() to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; checkpoint the process and the plan is to use criu_restore() in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal_crs_criu_restart() (which I have not yet implemented).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mon, Feb 17, 2014 at 03:45:49PM -0600, Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; It look fine except that the restart state is not flagged. When a
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; is restarted does it resume execution inside the criu_dump()
</span><br>
<span class="quotelev1">&gt; function? If
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; so, is there a way to tell from its return code (or some other
</span><br>
<span class="quotelev1">&gt; mechanism)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; that it is being restarted versus continuing after checkpointing?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Mon, Feb 17, 2014 at 2:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Great - looks fine to me!!
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; On Feb 17, 2014, at 11:39 AM, Adrian Reber &lt;adrian_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; I have prepared a patch I would like to commit which adds to
</span><br>
<span class="quotelev1">&gt; code to
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; actually checkpoint a process. Thanks for the pointers about the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; string
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; variables I tried to do implement it correctly.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; CRIU currently has problems with the new OOB usock but I will
</span><br>
<span class="quotelev1">&gt; contact
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; the CRIU developers about this error. Using tcp, checkpointing
</span><br>
<span class="quotelev1">&gt; works.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; CRIU also has problems with --np &gt; 1, but I am sure this can
</span><br>
<span class="quotelev1">&gt; also be
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; resolved.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; The patch is at:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=89c9c27c87598706e8f798f84fe9520ee5884492">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=89c9c27c87598706e8f798f84fe9520ee5884492</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;               Adrian
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14181/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14182.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Previous message:</strong> <a href="14180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<li><strong>In reply to:</strong> <a href="14179.php">Adrian Reber: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
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
