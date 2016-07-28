<?
$subject_val = "Re: [hwloc-devel] More memory binding questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 05:43:57 2011" -->
<!-- isoreceived="20110105104357" -->
<!-- sent="Wed, 5 Jan 2011 11:43:52 +0100" -->
<!-- isosent="20110105104352" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] More memory binding questions" -->
<!-- id="20110105104352.GI5728_at_const.bordeaux.inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="202775444.1989767.1294176161623.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] More memory binding questions<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-05 05:43:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1780.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Previous message:</strong> <a href="1778.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Maybe in reply to:</strong> <a href="1773.php">Jeff Squyres: "[hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1784.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Reply:</strong> <a href="1784.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Tue 04 Jan 2011 22:22:41 +0100, a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; hwloc_alloc_membind
</span><br>
<span class="quotelev1">&gt; hwloc_alloc_membind_nodeset
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What does &quot;binding cannot be enforced&quot; mean (i.e., when EXDEV is returned)?
</span><br>
<p>It's explained in more details in the header of the documentation
<br>
section:
<br>
<p>&#226;&#128;&#156;errno is set to EXDEV when the requested cpuset can not be enforced
<br>
(e.g. some systems only allow one CPU, and some other systems only allow
<br>
one NUMA node).&#226;&#128;&#157;
<br>
<p>I.e. it's the given combination of cpus or nodes which the OS doesn't
<br>
support, typically because the combination crosses some device boundary,
<br>
thus the choice of EXDEV.
<br>
<p><span class="quotelev1">&gt; Assumedly the system supports binding (otherwise ENOSYS would have been returned).  Does it mean, for example, that I asked for X memory on node Y, but node Y didn't have X memory available on node Y?
</span><br>
<p>That case would rather be OS-dependent.
<br>
<p><span class="quotelev1">&gt; When EXDEV is returned, is valid memory returned (that must be freed via hwloc_free), or does the entire allocation fail?
</span><br>
<p>It completely fails. But as documented in the header of the
<br>
documentation section, that only happens when STRICT is passed.
<br>
<p><span class="quotelev1">&gt; hwloc_get_area_membind
</span><br>
<span class="quotelev1">&gt; hwloc_get_area_membind_nodeset
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the purpose of these 2 functions to query the memory binding policy for an (addr, len) tuple in the current process?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; If so, what happens if there are multiple memory binding policies in effect for that tuple?
</span><br>
<p>It seems I forgot to copy/paste the documentation from the CPU part
<br>
about the STRICT flag, I've commited it:
<br>
<p>&#226;&#128;&#156;When retrieving the binding of a memory range, this flag checks
<br>
whether all its pages actually have the same binding.  If the flag is
<br>
not given, the binding of each page will be accumulated.&#226;&#128;&#157;
<br>
<p><span class="quotelev1">&gt; What is the purpose of the IN flags argument?
</span><br>
<p>Answered above :) At least the STRICT flag.
<br>
<p><span class="quotelev1">&gt; Taking a guess: can you pass _PROCESS or _THREAD in to query the binding policy for this specific thread or the entire process?  (and all other flags are ignored or illegal?)
</span><br>
<p>It does not make sense in the case of area_get_membind, since memory
<br>
binding for an area is related to the area, not to who accesses it (even
<br>
in the firsttouch case, where the policy is firsttouch).
<br>
<p><span class="quotelev1">&gt; hwloc_get_membind
</span><br>
<span class="quotelev1">&gt; hwloc_get_membind_nodeset
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the purpose of these 2 functions to query the memory binding polocy for the entire current process (or a thread in the current process)?
</span><br>
<p>Ah, that part of the cpubind documentation didn't get copied
<br>
either. I have commited it:
<br>
<p>&#226;&#128;&#156;When neither HWLOC_MEMBIND_PROCESS nor HWLOC_MEMBIND_THREAD
<br>
specified, the current process is assumed to be mono-thread. This is the
<br>
most portable way as it permits hwloc to use either process-based OS
<br>
functions or thread-based OS functions, whichever are available.&#226;&#128;&#157;
<br>
<p><span class="quotelev1">&gt; hwloc_get_proc_membind
</span><br>
<span class="quotelev1">&gt; hwloc_get_proc_membind_nodeset
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It took me a while to notice the PID argument in this function, and that this was the main difference from hwloc_get_membind*.  I assume that the documentation statement &quot;Get current process memory binding in cpuset cpuset.&quot; is actually incorrect -- right?
</span><br>
<p>Oops, indeed. That's the problem with painfully documenting a big series
<br>
of very similar functions...
<br>
<p><span class="quotelev1">&gt; It shouldn't say &quot;current&quot; -- it should indicate that you can query the memory binding policy for the process specified by the pid argument, right?  If so, is it equivalent to calling hwloc_get_membind* in that process?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; Assumedly, you need some kind of rights on the target process -- either you're the owner of the process, or are superuser, ...or have some other administrative rights on the target.  Right?
</span><br>
<p>Yes.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1780.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Previous message:</strong> <a href="1778.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Maybe in reply to:</strong> <a href="1773.php">Jeff Squyres: "[hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1784.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Reply:</strong> <a href="1784.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
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
