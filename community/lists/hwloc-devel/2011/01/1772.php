<?
$subject_val = "[hwloc-devel] questions about memory binding flags";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  4 15:57:22 2011" -->
<!-- isoreceived="20110104205722" -->
<!-- sent="Tue, 4 Jan 2011 15:57:17 -0500" -->
<!-- isosent="20110104205717" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] questions about memory binding flags" -->
<!-- id="BC64C9A8-BC41-47B9-806D-814E47BAEBE6_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] questions about memory binding flags<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-04 15:57:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1773.php">Jeff Squyres: "[hwloc-devel] More memory binding questions"</a>
<li><strong>Previous message:</strong> <a href="1771.php">Brice Goglin: "Re: [hwloc-devel] Feature request: bitmap ASCII list representation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1778.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Maybe reply:</strong> <a href="1778.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Maybe reply:</strong> <a href="1785.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Maybe reply:</strong> <a href="1789.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is it correct to assume that any hwloc_membind_flags_t flags can be or'ed together except _THREAD and _PROCESS?
<br>
<p>By their values, it looks like policy flags cannot be OR'ed.  This is probably worth mentioning in the docs (I can do so, but won't commit until the rest of these questions are answered).
<br>
<p>Here's all the policy flags:
<br>
<p>-----
<br>
&nbsp;&nbsp;HWLOC_MEMBIND_DEFAULT =	0,	/**&lt; \brief Reset the memory allocation policy to the system default.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* \hideinitializer */
<br>
&nbsp;&nbsp;HWLOC_MEMBIND_FIRSTTOUCH =	1,	/**&lt; \brief Allocate memory on the given nodes, but preferably on the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node where the first accessor is running.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* \hideinitializer */
<br>
-----
<br>
<p>I'm not quite sure what &quot;where the first accessor is running&quot; means.  Does this mean that the intent is that the memory will be bound to the numa node local to the first thread that touches the memory?
<br>
<p>If so, does this happen on a page-by-page basis, or as a whole allocation?  Consider this example (assume no race conditions):
<br>
<p>&nbsp;1. allocate 2 pages with the FIRSTTOUCH policy
<br>
&nbsp;2. thread A on node X only touches page 0
<br>
&nbsp;3. later, thread B on node Y touches page 1
<br>
<p>Where are pages 0 and 1 bound?  Are they bound to X and Y, respectively, or are both bound to X?
<br>
<p>...or is the answer OS/system specific?  If so, is there a way to find out which way it bound?
<br>
<p>-----
<br>
&nbsp;&nbsp;HWLOC_MEMBIND_BIND =		2,	/**&lt; \brief Allocate memory on the given nodes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* \hideinitializer */
<br>
&nbsp;&nbsp;HWLOC_MEMBIND_INTERLEAVE =	3,	/**&lt; \brief Allocate memory on the given nodes in a round-robin manner.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* \hideinitializer */
<br>
-----
<br>
<p>What is the unit of distribution -- is it by page?  E.g., if I specify 4 numa nodes and allocate 10 pages, are they bound like this:
<br>
<p>node A: 0, 4, 8
<br>
node B: 1, 5, 9
<br>
node C: 2, 6
<br>
node D: 3, 7
<br>
<p>Or does it (more-or-less) equally distribute the pages across the 3 nodes, like this:
<br>
<p>node A: 0, 1, 2
<br>
node B: 3, 4, 5
<br>
node C: 6, 7
<br>
node D: 8, 9
<br>
<p>...or is the answer OS/system specific?  If so, is there a way to find out which way it bound?
<br>
<p>-----
<br>
&nbsp;&nbsp;HWLOC_MEMBIND_REPLICATE =	4,	/**&lt; \brief Replicate memory on the given nodes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* \hideinitializer */
<br>
-----
<br>
<p>Does this mean that if I allocate 10 pages worth of memory with 2 nodes specified, I'm actually allocating 2x that amount and duplicating it on both nodes?  I.e., is the memory bound like this:
<br>
<p>node A: 0, 1, 2, ..., 9
<br>
node B: 0, 1, 2, ..., 9
<br>
<p>and that a write to page 0 will physically write to *both* pages?  If so, what's the cost of the write?  Is it the time to write to all nodes, or the time to write to the first node that was specified?
<br>
<p>What happens with reads?  Does the data come from the first node that was specified, and therefore the cost of a read is the cost of getting the data from the first node that was specified?
<br>
<p>More specifically, what's the point of REPLICATE?  Is it solely for memory hardware fault tolerance (e.g., intel RAS)?  
<br>
<p>What happens if the hardware/OS isn't capable of doing REPLICATE?  Will some kind of error be returned?
<br>
<p>-----
<br>
&nbsp;&nbsp;HWLOC_MEMBIND_NEXTTOUCH =	5	/**&lt; \brief On next touch of existing allocated memory, migrate it to the node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* where the memory reference happened.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* \hideinitializer */
<br>
-----
<br>
<p>What happens if the memory was not previously bound?
<br>
<p>Same questions as above with FIRSTTOUCH -- is this on a page-by-page basis, or as an entire allocation?  E.g., if I allocate/bind 10 pages, then later set it to NEXTTOUCH, and then touch the 4th page, will the entire memory be moved to the numa node that is local to the thread where the touch occurred, or just the 4th page?
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1773.php">Jeff Squyres: "[hwloc-devel] More memory binding questions"</a>
<li><strong>Previous message:</strong> <a href="1771.php">Brice Goglin: "Re: [hwloc-devel] Feature request: bitmap ASCII list representation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1778.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Maybe reply:</strong> <a href="1778.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Maybe reply:</strong> <a href="1785.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Maybe reply:</strong> <a href="1789.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
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
