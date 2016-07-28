<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 18 18:13:23 2011" -->
<!-- isoreceived="20110118231323" -->
<!-- sent="Wed, 19 Jan 2011 00:13:17 +0100" -->
<!-- isosent="20110118231317" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046" -->
<!-- id="20110118231317.GD5801_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2032507503.169667.1295377242005.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-18 18:13:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1837.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Previous message:</strong> <a href="1835.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Maybe in reply to:</strong> <a href="1816.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1837.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Reply:</strong> <a href="1837.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Tue 18 Jan 2011 20:00:42 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Jan 12, 2011, at 10:10 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This is not what I meant: hwloc_alloc_membind_policy's purpose is only
</span><br>
<span class="quotelev2">&gt; &gt; to allocate bound memory. It happens that hwloc_alloc_membind_policy
</span><br>
<span class="quotelev2">&gt; &gt; _may_ change the process policy in order to be able to bind memory
</span><br>
<span class="quotelev2">&gt; &gt; at all (when the underlying OS does not have a directed allocation
</span><br>
<span class="quotelev2">&gt; &gt; primitive), but that's not necessary. If hwloc can simply call a
</span><br>
<span class="quotelev2">&gt; &gt; directed allocation primitive, it will do it. If the OS doesn't support
</span><br>
<span class="quotelev2">&gt; &gt; binding at all, then hwloc will just allocate memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How's this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  * Setting this policy will cause the OS to try to bind a new memory
</span><br>
<span class="quotelev1">&gt;  * allocation to the specified set.
</span><br>
<p>Err, no, again hwloc_alloc_membind_policy's purpose is _not_ to set a
<br>
policy for future allocations, but _only_ to allocate data. It just
<br>
_happens_ to possibly have to change the current process policy in order
<br>
to achieve the binding, but that's only a side effect. Think of it as
<br>
&quot;allocate bound memory, possibly changing the policy just for that&quot;.
<br>
<p><span class="quotelev1">&gt; As a side effect, some operating
</span><br>
<span class="quotelev1">&gt;  * systems may change the current memory binding policy;
</span><br>
<p>It's not really the system that changes the current memory binding
<br>
policy, it's hwloc which explicitly requests the operating to do so, in
<br>
order to actually get the desired binding.
<br>
<p>I have rephrased it.
<br>
<p><span class="quotelev3">&gt; &gt;&gt; +  HWLOC_MEMBIND_INTERLEAVE =	3,	/**&lt; \brief Allocate memory on
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This is not really correct: if the threads were splitting the memory
</span><br>
<span class="quotelev2">&gt; &gt; amongst themselves, FIRSTTOUCH should be used instead, to migrate pages
</span><br>
<span class="quotelev2">&gt; &gt; close to where they are referenced from. I have rephrased that
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What's a good simple example scenario when it would be good to use INTERLEAVE, then?
</span><br>
<p>Well, this is what I have put instead:
<br>
<p>&quot;Interleaving can be useful when threads distributed across the
<br>
specified NUMA nodes will all be accessing the whole memory range
<br>
concurrently, since the interleave will then balance the memory
<br>
references.&quot;
<br>
<p>By &quot;the whole&quot;, I really mean _all_ the threads will access the _whole_
<br>
range, without known separation, e.g. a coefficient vector that all
<br>
threads need to read to perform some computation.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1837.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Previous message:</strong> <a href="1835.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Maybe in reply to:</strong> <a href="1816.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1837.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Reply:</strong> <a href="1837.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
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
