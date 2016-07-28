<?
$subject_val = "Re: [hwloc-devel] questions about memory binding flags";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 11:13:31 2011" -->
<!-- isoreceived="20110105161331" -->
<!-- sent="Wed, 5 Jan 2011 17:13:25 +0100" -->
<!-- isosent="20110105161325" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] questions about memory binding flags" -->
<!-- id="20110105161325.GY5728_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1536469379.2283168.1294236365716.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-05 11:13:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1786.php">Samuel Thibault: "Re: [hwloc-devel] Current memory binding policy"</a>
<li><strong>Previous message:</strong> <a href="1784.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Maybe in reply to:</strong> <a href="1772.php">Jeff Squyres: "[hwloc-devel] questions about memory binding flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1787.php">Brice Goglin: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Reply:</strong> <a href="1787.php">Brice Goglin: "Re: [hwloc-devel] questions about memory binding flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 05 Jan 2011 15:06:05 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Jan 5, 2011, at 8:58 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Actually, it's usually only supported for read-only data.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure what you mean -- if this policy is used to allocate memory, how do I write meaningful data in there that can then be read by multiple memory localities later?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ahh... the light clicks on: can you only use REPLICATE with the hwlo_set_*membind* functions (i.e., not the hwloc_alloc* functions)?
</span><br>
<p>Yes.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1786.php">Samuel Thibault: "Re: [hwloc-devel] Current memory binding policy"</a>
<li><strong>Previous message:</strong> <a href="1784.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Maybe in reply to:</strong> <a href="1772.php">Jeff Squyres: "[hwloc-devel] questions about memory binding flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1787.php">Brice Goglin: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Reply:</strong> <a href="1787.php">Brice Goglin: "Re: [hwloc-devel] questions about memory binding flags"</a>
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
