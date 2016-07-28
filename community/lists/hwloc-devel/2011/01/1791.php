<?
$subject_val = "Re: [hwloc-devel] More memory binding questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 17:14:41 2011" -->
<!-- isoreceived="20110105221441" -->
<!-- sent="Wed, 5 Jan 2011 17:14:37 -0500" -->
<!-- isosent="20110105221437" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] More memory binding questions" -->
<!-- id="B15E8A56-DF86-4C75-9C17-2F78A6882B3F_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20110105162057.GA5728_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2011-01-05 17:14:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1792.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Previous message:</strong> <a href="1790.php">Jeff Squyres: "Re: [hwloc-devel] Current memory binding policy"</a>
<li><strong>In reply to:</strong> <a href="1788.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1793.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 5, 2011, at 11:20 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; &#147;When retrieving the binding of a memory range, this flag checks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whether all its pages actually have the same binding.  If the flag is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not given, the binding of each page will be accumulated.&#148;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The memory nodes set to which pages are bound. For now it's only
</span><br>
<span class="quotelev1">&gt; implemented on windows and the policy is only returned as being
</span><br>
<span class="quotelev1">&gt; MEMBIND_BIND (because there is no smarter policy on windows actually).
</span><br>
<span class="quotelev1">&gt; I'm not sure which policy we will want to return when several subareas
</span><br>
<span class="quotelev1">&gt; have differing policies.
</span><br>
<p>Forgive me, I still don't understand.  Here's a guess at what happens -- is this anywhere close to correct?
<br>
<p>When STRICT is passed: if all pages have the same policy, the nodeset is cleared and then the corresponding numa nodes are set, and the policy output param is set to the correct value.  If all pages don't have the same policy, ... what happens?  Is an error returned and the nodeset value is untouched / undefined?
<br>
<p>When STRICT is not passed: the nodeset is cleared and then the corresponding numa nodes are set, regardless of whether all pages have the same policy or not.  If all nodes have the same policy, the policy output param is set to that value.  If they don't have the same value, what value is set in the policy output param?
<br>
<p>Also, does your middle statement mean that hwloc_get_membind will return ENOSYS on all systems except Windows?
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; What is the purpose of the IN flags argument?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Answered above :) At least the STRICT flag.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is the STRICT flag the only flag that is allowable in all the _get_ functions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; THREAD/PROCESS are also allowed in the hwloc_get_membind() function
</span><br>
<span class="quotelev1">&gt; case.  Migrate and nocpubind don't make sense.
</span><br>
<p>I keep getting mixed up because both the flags and the policies are HWLOC_MEMBIND_&lt;foo&gt; -- there's no name delineation between the policies and the flags.
<br>
<p><span class="quotelev2">&gt;&gt; If other flags are passed, are they ignored or do they cause an error?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IIRC they are just ignored for now. We could easily make them cause an
</span><br>
<span class="quotelev1">&gt; error.
</span><br>
<p>I don't think I have an opinion either way; I was just looking for clarification.
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
<li><strong>Next message:</strong> <a href="1792.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Previous message:</strong> <a href="1790.php">Jeff Squyres: "Re: [hwloc-devel] Current memory binding policy"</a>
<li><strong>In reply to:</strong> <a href="1788.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1793.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
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
