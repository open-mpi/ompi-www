<?
$subject_val = "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  6 09:43:40 2013" -->
<!-- isoreceived="20131206144340" -->
<!-- sent="Fri, 6 Dec 2013 08:43:39 -0600" -->
<!-- isosent="20131206144339" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)" -->
<!-- id="CAANzjEm9XEe0H8oMtNNHKWPbzKfDZ3ZxSN9yckjuF3h9O+uhTA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMD57ockX50SFuY7z4OnOpp-BcN3L2X6du4WPtahzb-qip6W4w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-06 09:43:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13394.php">Josh Hursey: "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13392.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="13385.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13399.php">Adrian Reber: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13399.php">Adrian Reber: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13401.php">Adrian Reber: "[OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did the mca_base_component_distill_checkpoint_ready paramter go away? Its
<br>
intention was to allow a user to have a build with C/R compiled in and then
<br>
choose at runtime if they want to restrict their component section to just
<br>
C/R enabled components or not. I have reservations about that part of the
<br>
patch.
<br>
<p>If it is a compilation issue and that MCA parameter was lost, then I would
<br>
leave the code in an #ifdef so we come back and make sure that
<br>
functionality is preserved in the final version.
<br>
<p>I think if you fix the distill_checkpoint issue, then this patch is ok with
<br>
me.
<br>
<p>As per my other messages, I agree with the comments from Jeff and Paul
<br>
about existing code. I think a good compromise at this time would be to
<br>
#ifdef out the code (so it is preserved for later re-design) and leave a
<br>
big comment that we need to return there in the next stage. Leave the
<br>
replacement code in a comment below it.
<br>
<p>Thanks!
<br>
Josh
<br>
<p><p>On Thu, Dec 5, 2013 at 4:49 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Adrian - I think that will silence the questions in a fair way.
</span><br>
<span class="quotelev1">&gt; Appreciate your flexibility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 5, 2013 at 1:55 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Dec 04, 2013 at 08:07:39PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Dec 4, 2013, at 11:29 AM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Jeff - you are jumping way ahead. I already said this needs further
</span><br>
<span class="quotelev2">&gt;&gt; work to resolve blocking. These patches (per Adrian's email) just makes
</span><br>
<span class="quotelev2">&gt;&gt; things compile
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Fair enough.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But in some ways, having uncompilable code is a *good* thing, because
</span><br>
<span class="quotelev2">&gt;&gt; it tells you exactly where you need to work on the architecture.  Just
</span><br>
<span class="quotelev2">&gt;&gt; updating it to *compile* removes that safeguard -- will you
</span><br>
<span class="quotelev2">&gt;&gt; remember/re-find all those places where it *used* to block and convert the
</span><br>
<span class="quotelev2">&gt;&gt; architecture to workaround the blocking?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I guess I'm saying: what exactly does updating it to compile get for
</span><br>
<span class="quotelev2">&gt;&gt; us, if we know the code still won't work?  It seems like all we'll be doing
</span><br>
<span class="quotelev2">&gt;&gt; is removing the grep-able places where we *know* we'll have to do work in
</span><br>
<span class="quotelev2">&gt;&gt; the future.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My goal was to let people see what I am doing and especially to decrease
</span><br>
<span class="quotelev2">&gt;&gt; the number of patches I have to carry locally. I am not familiar enough
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; the Open MPI code (yet) to fix it correctly in the first try. Without
</span><br>
<span class="quotelev2">&gt;&gt; having a code which compiles I personally cannot continue fixing the
</span><br>
<span class="quotelev2">&gt;&gt; functionality. These patches are the first step which I wanted to make
</span><br>
<span class="quotelev2">&gt;&gt; public. I can update the patches to include 'FIXME' in all the place if
</span><br>
<span class="quotelev2">&gt;&gt; required.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Adrian
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13393/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13394.php">Josh Hursey: "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13392.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="13385.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13399.php">Adrian Reber: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13399.php">Adrian Reber: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13401.php">Adrian Reber: "[OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
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
