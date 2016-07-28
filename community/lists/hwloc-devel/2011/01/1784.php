<?
$subject_val = "Re: [hwloc-devel] More memory binding questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 09:44:41 2011" -->
<!-- isoreceived="20110105144441" -->
<!-- sent="Wed, 5 Jan 2011 09:44:35 -0500" -->
<!-- isosent="20110105144435" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] More memory binding questions" -->
<!-- id="3DF90AA2-6496-4A99-A77D-A47D23B5F86C_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20110105104352.GI5728_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2011-01-05 09:44:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1785.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Previous message:</strong> <a href="1783.php">Jeff Squyres: "[hwloc-devel] Current memory binding policy"</a>
<li><strong>In reply to:</strong> <a href="1779.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1788.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 5, 2011, at 5:43 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; It seems I forgot to copy/paste the documentation from the CPU part
</span><br>
<span class="quotelev1">&gt; about the STRICT flag, I've commited it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#147;When retrieving the binding of a memory range, this flag checks
</span><br>
<span class="quotelev1">&gt; whether all its pages actually have the same binding.  If the flag is
</span><br>
<span class="quotelev1">&gt; not given, the binding of each page will be accumulated.&#148;
</span><br>
<p>What do you mean by &quot;accumulated&quot;?
<br>
<p><span class="quotelev2">&gt;&gt; What is the purpose of the IN flags argument?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Answered above :) At least the STRICT flag.
</span><br>
<p>Is the STRICT flag the only flag that is allowable in all the _get_ functions?  If other flags are passed, are they ignored or do they cause an error?
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
<li><strong>Next message:</strong> <a href="1785.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Previous message:</strong> <a href="1783.php">Jeff Squyres: "[hwloc-devel] Current memory binding policy"</a>
<li><strong>In reply to:</strong> <a href="1779.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1788.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
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
