<?
$subject_val = "Re: [hwloc-devel] More memory binding questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 17:51:11 2011" -->
<!-- isoreceived="20110105225111" -->
<!-- sent="Wed, 5 Jan 2011 23:51:06 +0100" -->
<!-- isosent="20110105225106" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] More memory binding questions" -->
<!-- id="20110105225106.GH4618_at_const.famille.thibault.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1210479909.2419991.1294265698650.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-01-05 17:51:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1794.php">Jiri Hladky: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>Previous message:</strong> <a href="1792.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Maybe in reply to:</strong> <a href="1773.php">Jeff Squyres: "[hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1797.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Reply:</strong> <a href="1797.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 05 Jan 2011 23:14:58 +0100, a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; On Jan 5, 2011, at 11:20 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &#226;&#128;&#156;When retrieving the binding of a memory range, this flag checks
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; whether all its pages actually have the same binding.  If the flag is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; not given, the binding of each page will be accumulated.&#226;&#128;&#157;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The memory nodes set to which pages are bound. For now it's only
</span><br>
<span class="quotelev2">&gt; &gt; implemented on windows and the policy is only returned as being
</span><br>
<span class="quotelev2">&gt; &gt; MEMBIND_BIND (because there is no smarter policy on windows actually).
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure which policy we will want to return when several subareas
</span><br>
<span class="quotelev2">&gt; &gt; have differing policies.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Forgive me, I still don't understand.  Here's a guess at what happens -- is this anywhere close to correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When STRICT is passed: if all pages have the same policy, the nodeset is cleared and then the corresponding numa nodes are set, and the policy output param is set to the correct value.  If all pages don't have the same policy, ... what happens?  Is an error returned and the nodeset value is untouched / undefined?
</span><br>
<p>EXDEV, and untouched, yes.
<br>
<p><span class="quotelev1">&gt; When STRICT is not passed: the nodeset is cleared and then the corresponding numa nodes are set, regardless of whether all pages have the same policy or not.
</span><br>
<p>More precisely, if there are two pages that reside on two different
<br>
numa nodes, these two nodes will be set in the bitmap.
<br>
<p><span class="quotelev1">&gt; If all nodes have the same policy, the policy output param is set to that value.  If they don't have the same value, what value is set in the policy output param?
</span><br>
<p>That's precisely what I said above: I'm not sure what we want to return
<br>
in that case. For now it's easy because it's only implemented on
<br>
windows, which only has one policy...
<br>
<p><span class="quotelev1">&gt; Also, does your middle statement mean that hwloc_get_membind will return ENOSYS on all systems except Windows?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; &gt;&gt;&gt;&gt; What is the purpose of the IN flags argument?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Answered above :) At least the STRICT flag.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is the STRICT flag the only flag that is allowable in all the _get_ functions?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; THREAD/PROCESS are also allowed in the hwloc_get_membind() function
</span><br>
<span class="quotelev2">&gt; &gt; case.  Migrate and nocpubind don't make sense.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I keep getting mixed up because both the flags and the policies are HWLOC_MEMBIND_&lt;foo&gt; -- there's no name delineation between the policies and the flags.
</span><br>
<p>Ah. Too bad it's a bit late to rename them for 1.1 :/
<br>
<p><span class="quotelev3">&gt; &gt;&gt; If other flags are passed, are they ignored or do they cause an error?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; IIRC they are just ignored for now. We could easily make them cause an
</span><br>
<span class="quotelev2">&gt; &gt; error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think I have an opinion either way; I was just looking for clarification.
</span><br>
<p>Ok. I guess returning an error would make it clearer.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1794.php">Jiri Hladky: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>Previous message:</strong> <a href="1792.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Maybe in reply to:</strong> <a href="1773.php">Jeff Squyres: "[hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1797.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Reply:</strong> <a href="1797.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
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
