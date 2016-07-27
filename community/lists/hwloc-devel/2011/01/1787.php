<?
$subject_val = "Re: [hwloc-devel] questions about memory binding flags";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 11:16:46 2011" -->
<!-- isoreceived="20110105161646" -->
<!-- sent="Wed, 05 Jan 2011 17:16:41 +0100" -->
<!-- isosent="20110105161641" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] questions about memory binding flags" -->
<!-- id="4D249969.60004_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110105161325.GY5728_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] questions about memory binding flags<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-05 11:16:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1788.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Previous message:</strong> <a href="1786.php">Samuel Thibault: "Re: [hwloc-devel] Current memory binding policy"</a>
<li><strong>In reply to:</strong> <a href="1785.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1789.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/01/2011 17:13, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Jeff Squyres, le Wed 05 Jan 2011 15:06:05 +0100, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 5, 2011, at 8:58 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Actually, it's usually only supported for read-only data.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure what you mean -- if this policy is used to allocate memory, how do I write meaningful data in there that can then be read by multiple memory localities later?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Ahh... the light clicks on: can you only use REPLICATE with the hwlo_set_*membind* functions (i.e., not the hwloc_alloc* functions)?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Maybe return EINVAL when passing REPLICATE to alloc_membind?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1788.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Previous message:</strong> <a href="1786.php">Samuel Thibault: "Re: [hwloc-devel] Current memory binding policy"</a>
<li><strong>In reply to:</strong> <a href="1785.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1789.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
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
