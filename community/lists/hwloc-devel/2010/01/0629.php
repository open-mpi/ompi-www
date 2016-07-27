<?
$subject_val = "Re: [hwloc-devel] memory size attributes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 15:11:28 2010" -->
<!-- isoreceived="20100126201128" -->
<!-- sent="Tue, 26 Jan 2010 15:11:18 -0500" -->
<!-- isosent="20100126201118" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] memory size attributes" -->
<!-- id="96D96271-34F1-4E01-BB7D-A209FBEF5179_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B5612D7.4030709_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] memory size attributes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-26 15:11:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0630.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0628.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>In reply to:</strong> <a href="0619.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0631.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0631.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 19, 2010, at 3:15 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I say &quot;bytes&quot; instead of &quot;kilobytes&quot; because it might be easier to avoid getting into the &quot;what does kilo mean -- 1000 or 1024?&quot; arguments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; kilo mean 1000, otherwise it's called kibi :)
</span><br>
<p>Forgot to mention -- I think that comment proves the point right there.  I would have never come up with &quot;kibi&quot; to mean &quot;kilobytes&quot;.
<br>
<p><span class="quotelev1">&gt; But I am ok with changing all this into bytes or whatever.
</span><br>
<p>Perfect; I think that will be least ambiguous.
<br>
<p><span class="quotelev2">&gt; &gt; Or maybe just total and local memory set to 0?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't know. I thought having memory point to NULL when the object can
</span><br>
<span class="quotelev1">&gt; obviously contain no memory could help, but it's not a big deal.
</span><br>
<p>Ya, I'm still torn -- on one hand, saving a little memory is a good thing.  On the other hand, it's nice to not have to put an &quot;if&quot; in just to calculate how much memory you have (i.e., if (ptr) size+=ptr-&gt;...).
<br>
<p>It might still be nice to have a total_descendants_memory field (or a shorter field) that represents the sum of all children memory since it is probably not an uncommon action to just want to know how much memory I can access *from this point in the hierarchy*.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0630.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0628.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>In reply to:</strong> <a href="0619.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0631.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0631.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
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
