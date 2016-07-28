<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 18 17:57:00 2011" -->
<!-- isoreceived="20110118225700" -->
<!-- sent="Tue, 18 Jan 2011 17:56:55 -0500" -->
<!-- isosent="20110118225655" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046" -->
<!-- id="B78DEA79-BB5D-4F20-895C-15C7A14EDD96_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0A9FAB15-240C-4F59-B696-957F5F6C4124_at_cisco.com" -->
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
<strong>Date:</strong> 2011-01-18 17:56:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1836.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Previous message:</strong> <a href="1834.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>In reply to:</strong> <a href="1833.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1836.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I took the liberty of committing this in r3090.
<br>
<p>On Jan 18, 2011, at 2:00 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 12, 2011, at 10:10 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is not what I meant: hwloc_alloc_membind_policy's purpose is only
</span><br>
<span class="quotelev2">&gt;&gt; to allocate bound memory. It happens that hwloc_alloc_membind_policy
</span><br>
<span class="quotelev2">&gt;&gt; _may_ change the process policy in order to be able to bind memory
</span><br>
<span class="quotelev2">&gt;&gt; at all (when the underlying OS does not have a directed allocation
</span><br>
<span class="quotelev2">&gt;&gt; primitive), but that's not necessary. If hwloc can simply call a
</span><br>
<span class="quotelev2">&gt;&gt; directed allocation primitive, it will do it. If the OS doesn't support
</span><br>
<span class="quotelev2">&gt;&gt; binding at all, then hwloc will just allocate memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How's this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Setting this policy will cause the OS to try to bind a new memory
</span><br>
<span class="quotelev1">&gt; * allocation to the specified set.  As a side effect, some operating
</span><br>
<span class="quotelev1">&gt; * systems may change the current memory binding policy; others may
</span><br>
<span class="quotelev1">&gt; * simply ignore the policy (i.e., not bind the new memory allocation
</span><br>
<span class="quotelev1">&gt; * at all).  Note that since HWLOC_MEMBIND_STRICT was not specified,
</span><br>
<span class="quotelev1">&gt; * failures to bind will not be reported -- generally, only memory
</span><br>
<span class="quotelev1">&gt; * allocation failures will be reported (e.g., even a plain malloc()
</span><br>
<span class="quotelev1">&gt; * would have failed with ENOMEM).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  HWLOC_MEMBIND_INTERLEAVE =	3,	/**&lt; \brief Allocate memory on
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is not really correct: if the threads were splitting the memory
</span><br>
<span class="quotelev2">&gt;&gt; amongst themselves, FIRSTTOUCH should be used instead, to migrate pages
</span><br>
<span class="quotelev2">&gt;&gt; close to where they are referenced from. I have rephrased that
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What's a good simple example scenario when it would be good to use INTERLEAVE, then?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="1836.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Previous message:</strong> <a href="1834.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>In reply to:</strong> <a href="1833.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1836.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
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
