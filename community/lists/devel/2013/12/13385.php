<?
$subject_val = "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  5 05:49:30 2013" -->
<!-- isoreceived="20131205104930" -->
<!-- sent="Thu, 5 Dec 2013 02:49:28 -0800" -->
<!-- isosent="20131205104928" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)" -->
<!-- id="CAMD57ockX50SFuY7z4OnOpp-BcN3L2X6du4WPtahzb-qip6W4w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20131205095559.GO6156_at_lisas.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-05 05:49:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13386.php">Adrian Reber: "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)"</a>
<li><strong>Previous message:</strong> <a href="13384.php">Adrian Reber: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<li><strong>In reply to:</strong> <a href="13384.php">Adrian Reber: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13393.php">Josh Hursey: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13393.php">Josh Hursey: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Adrian - I think that will silence the questions in a fair way.
<br>
Appreciate your flexibility.
<br>
<p>Ralph
<br>
<p><p><p>On Thu, Dec 5, 2013 at 1:55 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Dec 04, 2013 at 08:07:39PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 4, 2013, at 11:29 AM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff - you are jumping way ahead. I already said this needs further
</span><br>
<span class="quotelev1">&gt; work to resolve blocking. These patches (per Adrian's email) just makes
</span><br>
<span class="quotelev1">&gt; things compile
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Fair enough.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But in some ways, having uncompilable code is a *good* thing, because it
</span><br>
<span class="quotelev1">&gt; tells you exactly where you need to work on the architecture.  Just
</span><br>
<span class="quotelev1">&gt; updating it to *compile* removes that safeguard -- will you
</span><br>
<span class="quotelev1">&gt; remember/re-find all those places where it *used* to block and convert the
</span><br>
<span class="quotelev1">&gt; architecture to workaround the blocking?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I guess I'm saying: what exactly does updating it to compile get for us,
</span><br>
<span class="quotelev1">&gt; if we know the code still won't work?  It seems like all we'll be doing is
</span><br>
<span class="quotelev1">&gt; removing the grep-able places where we *know* we'll have to do work in the
</span><br>
<span class="quotelev1">&gt; future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My goal was to let people see what I am doing and especially to decrease
</span><br>
<span class="quotelev1">&gt; the number of patches I have to carry locally. I am not familiar enough
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; the Open MPI code (yet) to fix it correctly in the first try. Without
</span><br>
<span class="quotelev1">&gt; having a code which compiles I personally cannot continue fixing the
</span><br>
<span class="quotelev1">&gt; functionality. These patches are the first step which I wanted to make
</span><br>
<span class="quotelev1">&gt; public. I can update the patches to include 'FIXME' in all the place if
</span><br>
<span class="quotelev1">&gt; required.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13385/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13386.php">Adrian Reber: "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)"</a>
<li><strong>Previous message:</strong> <a href="13384.php">Adrian Reber: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<li><strong>In reply to:</strong> <a href="13384.php">Adrian Reber: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13393.php">Josh Hursey: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13393.php">Josh Hursey: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
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
