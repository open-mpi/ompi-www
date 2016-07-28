<?
$subject_val = "[hwloc-devel] More memory binding questions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  4 16:22:23 2011" -->
<!-- isoreceived="20110104212223" -->
<!-- sent="Tue, 4 Jan 2011 16:22:18 -0500" -->
<!-- isosent="20110104212218" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] More memory binding questions" -->
<!-- id="88202EB7-0F38-4CD5-815B-4844C47E7718_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] More memory binding questions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-04 16:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1774.php">Jiri Hladky: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>Previous message:</strong> <a href="1772.php">Jeff Squyres: "[hwloc-devel] questions about memory binding flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1779.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Maybe reply:</strong> <a href="1779.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Maybe reply:</strong> <a href="1788.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Maybe reply:</strong> <a href="1793.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Maybe reply:</strong> <a href="1798.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The previous mail was about the constants; now I have questions about the functions.  :-)
<br>
<p>hwloc_alloc_membind
<br>
hwloc_alloc_membind_nodeset
<br>
<p>What does &quot;binding cannot be enforced&quot; mean (i.e., when EXDEV is returned)?  Assumedly the system supports binding (otherwise ENOSYS would have been returned).  Does it mean, for example, that I asked for X memory on node Y, but node Y didn't have X memory available on node Y?
<br>
<p>When EXDEV is returned, is valid memory returned (that must be freed via hwloc_free), or does the entire allocation fail?
<br>
<p>hwloc_get_area_membind
<br>
hwloc_get_area_membind_nodeset
<br>
<p>Is the purpose of these 2 functions to query the memory binding policy for an (addr, len) tuple in the current process?
<br>
<p>If so, what happens if there are multiple memory binding policies in effect for that tuple?
<br>
<p>What is the purpose of the IN flags argument?  Taking a guess: can you pass _PROCESS or _THREAD in to query the binding policy for this specific thread or the entire process?  (and all other flags are ignored or illegal?)
<br>
<p>hwloc_get_membind
<br>
hwloc_get_membind_nodeset
<br>
<p>Is the purpose of these 2 functions to query the memory binding polocy for the entire current process (or a thread in the current process)?
<br>
<p>(assuming the other questions/answers from _get_area_membind are also relevant here)
<br>
<p>hwloc_get_proc_membind
<br>
hwloc_get_proc_membind_nodeset
<br>
<p>It took me a while to notice the PID argument in this function, and that this was the main difference from hwloc_get_membind*.  I assume that the documentation statement &quot;Get current process memory binding in cpuset cpuset.&quot; is actually incorrect -- right?  It shouldn't say &quot;current&quot; -- it should indicate that you can query the memory binding policy for the process specified by the pid argument, right?  If so, is it equivalent to calling hwloc_get_membind* in that process?
<br>
<p>Assumedly, you need some kind of rights on the target process -- either you're the owner of the process, or are superuser, ...or have some other administrative rights on the target.  Right?
<br>
<p>Several of the above questions (more-or-less) apply to hwloc_set_*mem*, so I'll refrain form listing them explicitly here.
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
<li><strong>Next message:</strong> <a href="1774.php">Jiri Hladky: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>Previous message:</strong> <a href="1772.php">Jeff Squyres: "[hwloc-devel] questions about memory binding flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1779.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Maybe reply:</strong> <a href="1779.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Maybe reply:</strong> <a href="1788.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Maybe reply:</strong> <a href="1793.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Maybe reply:</strong> <a href="1798.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
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
