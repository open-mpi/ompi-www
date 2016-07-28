<?
$subject_val = "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 15:59:10 2012" -->
<!-- isoreceived="20120221205910" -->
<!-- sent="Tue, 21 Feb 2012 13:59:06 -0700 (MST)" -->
<!-- isosent="20120221205906" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified" -->
<!-- id="alpine.OSX.2.00.1202211357570.11396_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.OSX.2.00.1202211117060.11396_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 15:59:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10546.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>Previous message:</strong> <a href="10544.php">Nathan Hjelm: "[OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>In reply to:</strong> <a href="10544.php">Nathan Hjelm: "[OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10546.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>Reply:</strong> <a href="10546.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Opps, screwed up the title. Should be: RFC: Allocate requested free list payload even if an mpool isn't specified.
<br>
<p>-Nathan
<br>
<p>On Tue, 21 Feb 2012, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; What: Allocate free list payload even if a payload size is specified even if 
</span><br>
<span class="quotelev1">&gt; no mpool is specified.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When: Thursday, Feb 23, 2012
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why: The current behavior is to ignore the payload size if no mpool is 
</span><br>
<span class="quotelev1">&gt; specified. I see no reason why a payload buffer should't be allocated in the 
</span><br>
<span class="quotelev1">&gt; no mpool case. Thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patch is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10546.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>Previous message:</strong> <a href="10544.php">Nathan Hjelm: "[OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>In reply to:</strong> <a href="10544.php">Nathan Hjelm: "[OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10546.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>Reply:</strong> <a href="10546.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
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
