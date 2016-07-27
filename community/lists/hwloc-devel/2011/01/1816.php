<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 10:10:41 2011" -->
<!-- isoreceived="20110112151041" -->
<!-- sent="Wed, 12 Jan 2011 16:10:36 +0100" -->
<!-- isosent="20110112151036" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046" -->
<!-- id="20110112151036.GV5617_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="800326612.2614015.1294339491099.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-01-12 10:10:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1817.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3064)"</a>
<li><strong>Previous message:</strong> <a href="1815.php">Samuel Thibault: "Re: [hwloc-devel] distances branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1833.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Reply:</strong> <a href="1833.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Maybe reply:</strong> <a href="1836.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
jsquyres_at_[hidden], le Thu 06 Jan 2011 19:44:51 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * \code
</span><br>
<span class="quotelev1">&gt; - * hwloc_alloc_membind_policy(topology, size, set, HWLOC_MEMBIND_DEFAULT, 0),
</span><br>
<span class="quotelev1">&gt; + * hwloc_alloc_membind_policy(topology, size, set, 
</span><br>
<span class="quotelev1">&gt; + *                            HWLOC_MEMBIND_DEFAULT, 0);
</span><br>
<span class="quotelev1">&gt;   * \endcode
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt; - * which will try to allocate new data bound to the given set, possibly by
</span><br>
<span class="quotelev1">&gt; - * changing the current memory binding policy, or at worse allocate memory
</span><br>
<span class="quotelev1">&gt; - * without binding it at all.  Since HWLOC_MEMBIND_STRICT is not given, this
</span><br>
<span class="quotelev1">&gt; - * will even not fail unless a mere malloc() itself would fail, i.e. ENOMEM.
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - * Each binding is available with a CPU set argument or a NUMA memory node set
</span><br>
<span class="quotelev1">&gt; - * argument. The name of the latter ends with _nodeset. It is also possible to
</span><br>
<span class="quotelev1">&gt; - * convert between CPU set and node set using ::hwloc_cpuset_to_nodeset or
</span><br>
<span class="quotelev1">&gt; - * ::hwloc_cpuset_from_nodeset.
</span><br>
<p><span class="quotelev1">&gt; + * Setting this policy will cause the OS to try to bind all new memory
</span><br>
<span class="quotelev1">&gt; + * allocations to the specified set.  Some operating systems will
</span><br>
<span class="quotelev1">&gt; + * dutifully change the current memory binding policy, but others will
</span><br>
<span class="quotelev1">&gt; + * simply ignore the policy (i.e., not bind new memory allocations at
</span><br>
<span class="quotelev1">&gt; + * all).  Note that since HWLOC_MEMBIND_STRICT was not specified,
</span><br>
<span class="quotelev1">&gt; + * failures to bind will not be reported -- generally, only memory
</span><br>
<span class="quotelev1">&gt; + * allocation failures will be reported (e.g., even a plain malloc()
</span><br>
<span class="quotelev1">&gt; + * would have failed with ENOMEM).
</span><br>
<p>This is not what I meant: hwloc_alloc_membind_policy's purpose is only
<br>
to allocate bound memory. It happens that hwloc_alloc_membind_policy
<br>
_may_ change the process policy in order to be able to bind memory
<br>
at all (when the underlying OS does not have a directed allocation
<br>
primitive), but that's not necessary. If hwloc can simply call a
<br>
directed allocation primitive, it will do it. If the OS doesn't support
<br>
binding at all, then hwloc will just allocate memory.
<br>
<p>I'm not sure whether I should rephrase myself (which my just result to
<br>
the same as what I had written previously) or let you rephrase it.
<br>
<p><span class="quotelev1">&gt; +  HWLOC_MEMBIND_INTERLEAVE =	3,	/**&lt; \brief Allocate memory on
</span><br>
<span class="quotelev1">&gt; +                                         * the given nodes in an
</span><br>
<span class="quotelev1">&gt; +                                         * interleaved / round-robin
</span><br>
<span class="quotelev1">&gt; +                                         * manner.  The precise layout
</span><br>
<span class="quotelev1">&gt; +                                         * of the memory across
</span><br>
<span class="quotelev1">&gt; +                                         * multiple NUMA nodes is
</span><br>
<span class="quotelev1">&gt; +                                         * OS/system specific.
</span><br>
<span class="quotelev1">&gt; +                                         * Interleaving can be useful
</span><br>
<span class="quotelev1">&gt; +                                         * when multiple threads from
</span><br>
<span class="quotelev1">&gt; +                                         * the specified NUMA nodes
</span><br>
<span class="quotelev1">&gt; +                                         * will be effectively
</span><br>
<span class="quotelev1">&gt; +                                         * splitting the memory
</span><br>
<span class="quotelev1">&gt; +                                         * amongst themselves.
</span><br>
<p>This is not really correct: if the threads were splitting the memory
<br>
amongst themselves, FIRSTTOUCH should be used instead, to migrate pages
<br>
close to where they are referenced from. I have rephrased that
<br>
<p>The rest is OK, thanks for your efforts!
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1817.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3064)"</a>
<li><strong>Previous message:</strong> <a href="1815.php">Samuel Thibault: "Re: [hwloc-devel] distances branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1833.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Reply:</strong> <a href="1833.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Maybe reply:</strong> <a href="1836.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
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
