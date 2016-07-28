<?
$subject_val = "Re: [hwloc-devel] More memory binding questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 11:21:02 2011" -->
<!-- isoreceived="20110105162102" -->
<!-- sent="Wed, 5 Jan 2011 17:20:57 +0100" -->
<!-- isosent="20110105162057" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] More memory binding questions" -->
<!-- id="20110105162057.GA5728_at_const.bordeaux.inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="779484467.2293721.1294238698689.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-01-05 11:20:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1789.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Previous message:</strong> <a href="1787.php">Brice Goglin: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Maybe in reply to:</strong> <a href="1773.php">Jeff Squyres: "[hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1791.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Reply:</strong> <a href="1791.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 05 Jan 2011 15:44:58 +0100, a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; On Jan 5, 2011, at 5:43 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It seems I forgot to copy/paste the documentation from the CPU part
</span><br>
<span class="quotelev2">&gt; &gt; about the STRICT flag, I've commited it:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &#226;&#128;&#156;When retrieving the binding of a memory range, this flag checks
</span><br>
<span class="quotelev2">&gt; &gt; whether all its pages actually have the same binding.  If the flag is
</span><br>
<span class="quotelev2">&gt; &gt; not given, the binding of each page will be accumulated.&#226;&#128;&#157;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do you mean by &quot;accumulated&quot;?
</span><br>
<p>The memory nodes set to which pages are bound. For now it's only
<br>
implemented on windows and the policy is only returned as being
<br>
MEMBIND_BIND (because there is no smarter policy on windows actually).
<br>
I'm not sure which policy we will want to return when several subareas
<br>
have differing policies.
<br>
<p><span class="quotelev3">&gt; &gt;&gt; What is the purpose of the IN flags argument?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Answered above :) At least the STRICT flag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the STRICT flag the only flag that is allowable in all the _get_ functions?
</span><br>
<p>THREAD/PROCESS are also allowed in the hwloc_get_membind() function
<br>
case.  Migrate and nocpubind don't make sense.
<br>
<p><span class="quotelev1">&gt; If other flags are passed, are they ignored or do they cause an error?
</span><br>
<p>IIRC they are just ignored for now. We could easily make them cause an
<br>
error.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1789.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Previous message:</strong> <a href="1787.php">Brice Goglin: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Maybe in reply to:</strong> <a href="1773.php">Jeff Squyres: "[hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1791.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Reply:</strong> <a href="1791.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
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
