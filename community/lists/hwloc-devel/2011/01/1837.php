<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 18 18:59:38 2011" -->
<!-- isoreceived="20110118235938" -->
<!-- sent="Tue, 18 Jan 2011 18:59:33 -0500" -->
<!-- isosent="20110118235933" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046" -->
<!-- id="AC9826AE-6165-4B55-BB51-F4DE837310A6_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20110118231317.GD5801_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-18 18:59:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1838.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3091)"</a>
<li><strong>Previous message:</strong> <a href="1836.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>In reply to:</strong> <a href="1836.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for fixing it up!
<br>
<p>On Jan 18, 2011, at 6:13 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres, le Tue 18 Jan 2011 20:00:42 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 12, 2011, at 10:10 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is not what I meant: hwloc_alloc_membind_policy's purpose is only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to allocate bound memory. It happens that hwloc_alloc_membind_policy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _may_ change the process policy in order to be able to bind memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at all (when the underlying OS does not have a directed allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; primitive), but that's not necessary. If hwloc can simply call a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directed allocation primitive, it will do it. If the OS doesn't support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; binding at all, then hwloc will just allocate memory.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How's this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * Setting this policy will cause the OS to try to bind a new memory
</span><br>
<span class="quotelev2">&gt;&gt; * allocation to the specified set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Err, no, again hwloc_alloc_membind_policy's purpose is _not_ to set a
</span><br>
<span class="quotelev1">&gt; policy for future allocations, but _only_ to allocate data. It just
</span><br>
<span class="quotelev1">&gt; _happens_ to possibly have to change the current process policy in order
</span><br>
<span class="quotelev1">&gt; to achieve the binding, but that's only a side effect. Think of it as
</span><br>
<span class="quotelev1">&gt; &quot;allocate bound memory, possibly changing the policy just for that&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As a side effect, some operating
</span><br>
<span class="quotelev2">&gt;&gt; * systems may change the current memory binding policy;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's not really the system that changes the current memory binding
</span><br>
<span class="quotelev1">&gt; policy, it's hwloc which explicitly requests the operating to do so, in
</span><br>
<span class="quotelev1">&gt; order to actually get the desired binding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have rephrased it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +  HWLOC_MEMBIND_INTERLEAVE =	3,	/**&lt; \brief Allocate memory on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is not really correct: if the threads were splitting the memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; amongst themselves, FIRSTTOUCH should be used instead, to migrate pages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; close to where they are referenced from. I have rephrased that
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What's a good simple example scenario when it would be good to use INTERLEAVE, then?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, this is what I have put instead:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Interleaving can be useful when threads distributed across the
</span><br>
<span class="quotelev1">&gt; specified NUMA nodes will all be accessing the whole memory range
</span><br>
<span class="quotelev1">&gt; concurrently, since the interleave will then balance the memory
</span><br>
<span class="quotelev1">&gt; references.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By &quot;the whole&quot;, I really mean _all_ the threads will access the _whole_
</span><br>
<span class="quotelev1">&gt; range, without known separation, e.g. a coefficient vector that all
</span><br>
<span class="quotelev1">&gt; threads need to read to perform some computation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="1838.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3091)"</a>
<li><strong>Previous message:</strong> <a href="1836.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>In reply to:</strong> <a href="1836.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<!-- nextthread="start" -->
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
