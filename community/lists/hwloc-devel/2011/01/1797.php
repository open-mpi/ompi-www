<?
$subject_val = "Re: [hwloc-devel] More memory binding questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 21:39:10 2011" -->
<!-- isoreceived="20110106023910" -->
<!-- sent="Wed, 5 Jan 2011 21:39:05 -0500" -->
<!-- isosent="20110106023905" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] More memory binding questions" -->
<!-- id="420FC36F-DA91-4B40-A4CA-F2E9A730804D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110105225106.GH4618_at_const.famille.thibault.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-05 21:39:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1798.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Previous message:</strong> <a href="1796.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc6r3028)"</a>
<li><strong>In reply to:</strong> <a href="1793.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1798.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 5, 2011, at 5:51 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Also, does your middle statement mean that hwloc_get_membind will return ENOSYS on all systems except Windows?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<p>Before I commit, how's this text?  (extrapolate for the other functions)
<br>
<p>/** \brief Query the default memory binding policy and locality of the
<br>
&nbsp;* current process or thread (the locality is returned in \p nodeset).
<br>
&nbsp;*
<br>
&nbsp;* If neither HWLOC_MEMBIND_PROCESS nor HWLOC_MEMBIND_THREAD is
<br>
&nbsp;* specified, the current process is assumed to be single-threaded.
<br>
&nbsp;* This is the most portable form as it permits hwloc to use either
<br>
&nbsp;* process-based OS functions or thread-based OS functions, depending
<br>
&nbsp;* on which are available.
<br>
&nbsp;*
<br>
&nbsp;* If HWLOC_MEMBIND_STRICT is specified, the process' (or thread's)
<br>
&nbsp;* pages are first checked to see if they all have the same memory
<br>
&nbsp;* binding policy.  If they do not, -1 is returned and errno is set to
<br>
&nbsp;* EXDEV.  
<br>
&nbsp;*
<br>
&nbsp;* \note HWLOC_MEMBIND_STRICT is only supported with this function on
<br>
&nbsp;* some systems.  If it is specified on an unsupported system, -1 is
<br>
&nbsp;* returned and errno is set to ENOSYS.
<br>
&nbsp;*
<br>
&nbsp;* If HWLOC_MEMBIND_STRICT is not specified, or if all the process'
<br>
&nbsp;* (or thread's) pages have the same memory binding policy, \p nodeset
<br>
&nbsp;* is cleared.  Each page is then examined and has the bit set in \p
<br>
&nbsp;* nodeset corresponding to the NUMA node where it is located.  The
<br>
&nbsp;* resulting \p nodeset represents the set of NUMA nodes containing
<br>
&nbsp;* all the pages in the process (or thread).
<br>
&nbsp;*
<br>
&nbsp;* If any other flags are specified, -1 is returned and errno is set
<br>
&nbsp;* to EINVAL.
<br>
&nbsp;*/
<br>
HWLOC_DECLSPEC int hwloc_get_membind_nodeset(hwloc_topology_t topology, hwloc_nodeset_t nodeset, hwloc_membind_policy_t * policy, int flags);
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
<li><strong>Next message:</strong> <a href="1798.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Previous message:</strong> <a href="1796.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc6r3028)"</a>
<li><strong>In reply to:</strong> <a href="1793.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1798.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
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
