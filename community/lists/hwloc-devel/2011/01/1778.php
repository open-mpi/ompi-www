<?
$subject_val = "Re: [hwloc-devel] questions about memory binding flags";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 05:20:22 2011" -->
<!-- isoreceived="20110105102022" -->
<!-- sent="Wed, 5 Jan 2011 11:20:16 +0100" -->
<!-- isosent="20110105102016" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] questions about memory binding flags" -->
<!-- id="20110105102016.GH5728_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="209499932.1982953.1294174676581.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] questions about memory binding flags<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-05 05:20:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1779.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Previous message:</strong> <a href="1777.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc6r3018)"</a>
<li><strong>Maybe in reply to:</strong> <a href="1772.php">Jeff Squyres: "[hwloc-devel] questions about memory binding flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1780.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Reply:</strong> <a href="1780.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Tue 04 Jan 2011 21:57:56 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Is it correct to assume that any hwloc_membind_flags_t flags can be or'ed together except _THREAD and _PROCESS?
</span><br>
<p>Yes, they really are flags (except _THREAD and _PROCESS which are
<br>
exclusive of course).
<br>
<p><span class="quotelev1">&gt; By their values, it looks like policy flags cannot be OR'ed.
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; Here's all the policy flags:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;   HWLOC_MEMBIND_DEFAULT =	0,	/**&lt; \brief Reset the memory allocation policy to the system default.
</span><br>
<span class="quotelev1">&gt; 					 * \hideinitializer */
</span><br>
<span class="quotelev1">&gt;   HWLOC_MEMBIND_FIRSTTOUCH =	1,	/**&lt; \brief Allocate memory on the given nodes, but preferably on the
</span><br>
<span class="quotelev1">&gt; 					  node where the first accessor is running.
</span><br>
<span class="quotelev1">&gt; 					 * \hideinitializer */
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not quite sure what &quot;where the first accessor is running&quot; means.  Does this mean that the intent is that the memory will be bound to the numa node local to the first thread that touches the memory?
</span><br>
<p>Err, yes. Feel free to rephrase to anything that would be clearer.
<br>
<p><span class="quotelev1">&gt; If so, does this happen on a page-by-page basis, or as a whole allocation?
</span><br>
<p>page-by-page.
<br>
<p><span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;   HWLOC_MEMBIND_BIND =		2,	/**&lt; \brief Allocate memory on the given nodes.
</span><br>
<span class="quotelev1">&gt; 					 * \hideinitializer */
</span><br>
<span class="quotelev1">&gt;   HWLOC_MEMBIND_INTERLEAVE =	3,	/**&lt; \brief Allocate memory on the given nodes in a round-robin manner.
</span><br>
<span class="quotelev1">&gt; 					 * \hideinitializer */
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the unit of distribution -- is it by page?
</span><br>
<p>Mmm, OS documentations don't specify it, they usually only talk
<br>
about &quot;round-robin allocation&quot;, &quot;interleaved allocation&quot;, &quot;stripped
<br>
allocation&quot;, or simply &quot;accessed by many processors, thus distribute the
<br>
memory&quot;.
<br>
<p><span class="quotelev1">&gt; If so, is there a way to find out which way it bound?
</span><br>
<p>We can try to benchmark memory accesses, but I don't think we should
<br>
want to be too specific, because that'd mean adding yet more policies to
<br>
choose and try for the programmer. We can however explain that it's
<br>
useful when a given range of memory is accessed by many processors, and
<br>
the memory access load should thus be distributed across nodes.
<br>
<p><span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;   HWLOC_MEMBIND_REPLICATE =	4,	/**&lt; \brief Replicate memory on the given nodes.
</span><br>
<span class="quotelev1">&gt; 					 * \hideinitializer */
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does this mean that if I allocate 10 pages worth of memory with 2 nodes specified, I'm actually allocating 2x that amount and duplicating it on both nodes?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; I.e., is the memory bound like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node A: 0, 1, 2, ..., 9
</span><br>
<span class="quotelev1">&gt; node B: 0, 1, 2, ..., 9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and that a write to page 0 will physically write to *both* pages?
</span><br>
<p>Actually, it's usually only supported for read-only data.
<br>
<p><span class="quotelev1">&gt; What happens with reads?  Does the data come from the first node that was specified, and therefore the cost of a read is the cost of getting the data from the first node that was specified?
</span><br>
<p>Each thread accesses to its local NUMA node, that's precisely the point
<br>
of replicating the data :)
<br>
<p><span class="quotelev1">&gt; More specifically, what's the point of REPLICATE?  Is it solely for memory hardware fault tolerance (e.g., intel RAS)?  
</span><br>
<p>Not at all, it's really for performance reason.
<br>
<p><span class="quotelev1">&gt; What happens if the hardware/OS isn't capable of doing REPLICATE?  Will some kind of error be returned?
</span><br>
<p>ENOSYS, as usual (and there is also the support flag for it in the
<br>
topology structure). Actually, at the moment only OSF supports it.
<br>
<p><span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;   HWLOC_MEMBIND_NEXTTOUCH =	5	/**&lt; \brief On next touch of existing allocated memory, migrate it to the node
</span><br>
<span class="quotelev1">&gt; 					 * where the memory reference happened.
</span><br>
<span class="quotelev1">&gt; 					 * \hideinitializer */
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What happens if the memory was not previously bound?
</span><br>
<p>It gets bound.
<br>
<p><span class="quotelev1">&gt; Same questions as above with FIRSTTOUCH -- is this on a page-by-page basis, or as an entire allocation?
</span><br>
<p>Page-by-page.
<br>
<p>Thanks for your review, it's really useful to make sure that things
<br>
which are obvious to me since I've written the code are properly
<br>
documented :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1779.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Previous message:</strong> <a href="1777.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc6r3018)"</a>
<li><strong>Maybe in reply to:</strong> <a href="1772.php">Jeff Squyres: "[hwloc-devel] questions about memory binding flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1780.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Reply:</strong> <a href="1780.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
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
