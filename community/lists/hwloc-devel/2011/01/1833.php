<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 18 14:00:22 2011" -->
<!-- isoreceived="20110118190022" -->
<!-- sent="Tue, 18 Jan 2011 14:00:17 -0500" -->
<!-- isosent="20110118190017" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046" -->
<!-- id="0A9FAB15-240C-4F59-B696-957F5F6C4124_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110112151036.GV5617_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2011-01-18 14:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1834.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>Previous message:</strong> <a href="1832.php">Bernd Kallies: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>In reply to:</strong> <a href="1816.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1835.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Reply:</strong> <a href="1835.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 12, 2011, at 10:10 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; This is not what I meant: hwloc_alloc_membind_policy's purpose is only
</span><br>
<span class="quotelev1">&gt; to allocate bound memory. It happens that hwloc_alloc_membind_policy
</span><br>
<span class="quotelev1">&gt; _may_ change the process policy in order to be able to bind memory
</span><br>
<span class="quotelev1">&gt; at all (when the underlying OS does not have a directed allocation
</span><br>
<span class="quotelev1">&gt; primitive), but that's not necessary. If hwloc can simply call a
</span><br>
<span class="quotelev1">&gt; directed allocation primitive, it will do it. If the OS doesn't support
</span><br>
<span class="quotelev1">&gt; binding at all, then hwloc will just allocate memory.
</span><br>
<p>How's this?
<br>
<p>&nbsp;* Setting this policy will cause the OS to try to bind a new memory
<br>
&nbsp;* allocation to the specified set.  As a side effect, some operating
<br>
&nbsp;* systems may change the current memory binding policy; others may
<br>
&nbsp;* simply ignore the policy (i.e., not bind the new memory allocation
<br>
&nbsp;* at all).  Note that since HWLOC_MEMBIND_STRICT was not specified,
<br>
&nbsp;* failures to bind will not be reported -- generally, only memory
<br>
&nbsp;* allocation failures will be reported (e.g., even a plain malloc()
<br>
&nbsp;* would have failed with ENOMEM).
<br>
<p><span class="quotelev2">&gt;&gt; +  HWLOC_MEMBIND_INTERLEAVE =	3,	/**&lt; \brief Allocate memory on
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is not really correct: if the threads were splitting the memory
</span><br>
<span class="quotelev1">&gt; amongst themselves, FIRSTTOUCH should be used instead, to migrate pages
</span><br>
<span class="quotelev1">&gt; close to where they are referenced from. I have rephrased that
</span><br>
<p>What's a good simple example scenario when it would be good to use INTERLEAVE, then?
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
<li><strong>Next message:</strong> <a href="1834.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>Previous message:</strong> <a href="1832.php">Bernd Kallies: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>In reply to:</strong> <a href="1816.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1835.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Reply:</strong> <a href="1835.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
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
