<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 17:08:06 2007" -->
<!-- isoreceived="20070725210806" -->
<!-- sent="Wed, 25 Jul 2007 15:07:20 -0600" -->
<!-- isosent="20070725210720" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Sparse group implementation" -->
<!-- id="6C9367E8-8607-4E5C-8304-599F7126F8E0_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B378A835-4B9C-499F-9AF5-49D8AF01A5D2_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-25 17:07:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2001.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="1999.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="1999.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2001.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="2001.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 25, 2007, at 2:56 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 25, 2007, at 10:39 AM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have an even bigger objection than Rich.  It's near impossible to
</span><br>
<span class="quotelev2">&gt;&gt; measure the latency impact of something like this, but it does have
</span><br>
<span class="quotelev2">&gt;&gt; an additive effect.  It doesn't make sense to have all that code in
</span><br>
<span class="quotelev2">&gt;&gt; the critical path for systems where it's not needed.  We should leave
</span><br>
<span class="quotelev2">&gt;&gt; the compile time decision available, unless there's a very good
</span><br>
<span class="quotelev2">&gt;&gt; reason (which I did not see in this e-mail) to remove it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It just adds a lot of #if's throughout the code.  Other than that,
</span><br>
<span class="quotelev1">&gt; there's no reason to remove it.
</span><br>
<p>I agree, lots of #ifs are bad.  But I guess I don't see the problem.   
<br>
The only real important thing people were directly accessing in the  
<br>
ompi_group_t is the array of proc pointers.  Indexing into them could  
<br>
be done with a static inline function that just has slightly  
<br>
different time complexity based on compile options.  Static inline  
<br>
function that just does an index in the group proc pointer would have  
<br>
almost no added overhead (none if the compiler doesn't suck).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2001.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="1999.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="1999.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2001.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="2001.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
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
