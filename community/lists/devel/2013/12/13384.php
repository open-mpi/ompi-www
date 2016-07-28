<?
$subject_val = "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  5 04:56:01 2013" -->
<!-- isoreceived="20131205095601" -->
<!-- sent="Thu, 5 Dec 2013 10:55:59 +0100" -->
<!-- isosent="20131205095559" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)" -->
<!-- id="20131205095559.GO6156_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5F88A8FB-C3C8-4B33-A2EA-44D7BFEB76B2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-05 04:55:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13385.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13383.php">Christopher Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>In reply to:</strong> <a href="13380.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13385.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13385.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Dec 04, 2013 at 08:07:39PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Dec 4, 2013, at 11:29 AM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff - you are jumping way ahead. I already said this needs further work to resolve blocking. These patches (per Adrian's email) just makes things compile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fair enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But in some ways, having uncompilable code is a *good* thing, because it tells you exactly where you need to work on the architecture.  Just updating it to *compile* removes that safeguard -- will you remember/re-find all those places where it *used* to block and convert the architecture to workaround the blocking?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess I'm saying: what exactly does updating it to compile get for us, if we know the code still won't work?  It seems like all we'll be doing is removing the grep-able places where we *know* we'll have to do work in the future.
</span><br>
<p>My goal was to let people see what I am doing and especially to decrease
<br>
the number of patches I have to carry locally. I am not familiar enough with
<br>
the Open MPI code (yet) to fix it correctly in the first try. Without
<br>
having a code which compiles I personally cannot continue fixing the
<br>
functionality. These patches are the first step which I wanted to make
<br>
public. I can update the patches to include 'FIXME' in all the place if
<br>
required.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13385.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13383.php">Christopher Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>In reply to:</strong> <a href="13380.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13385.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13385.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
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
