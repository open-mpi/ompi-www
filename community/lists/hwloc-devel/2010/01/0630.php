<?
$subject_val = "Re: [hwloc-devel] memory size attributes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 15:14:38 2010" -->
<!-- isoreceived="20100126201438" -->
<!-- sent="Tue, 26 Jan 2010 15:14:33 -0500" -->
<!-- isosent="20100126201433" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] memory size attributes" -->
<!-- id="8F044819-90E0-4C3E-ACFD-0A3701ECD56E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B5F0599.3020303_at_inria.fr" -->
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
<strong>Date:</strong> 2010-01-26 15:14:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0631.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0629.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>In reply to:</strong> <a href="0626.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0628.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 26, 2010, at 10:09 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; * should we enforce the ordering of pages size+count structures ? I am
</span><br>
<span class="quotelev1">&gt; sorting by page size for now
</span><br>
<p>Seems like a neighborly thing to do.  If it's not hard, I say keep that functionality.
<br>
<p><span class="quotelev1">&gt; * how is the pages array terminated ? size = 0 ? or both size and count
</span><br>
<span class="quotelev1">&gt; = 0 ? if some OS fail to give the size of normal pages or huge pages, we
</span><br>
<span class="quotelev1">&gt; might have count !=0 while size = 0 in some cases.
</span><br>
<span class="quotelev1">&gt; * or should we add pages_count to the memory strcuture to explictly
</span><br>
<span class="quotelev1">&gt; store the length of the pages array ?
</span><br>
<p>If there's a question about what some OS's may do (e.g., report 0), then I'd be in favor of explicitly storing the pages_count.  Who knows; someone may need to allocate some resources based on the length of that array (E.g., a GUI showing all the different page sizes); so if that length is available without the application needing to traverse the array just to count the length, that's another neighborly thing to do.
<br>
<p>(for the purposes of this email, &quot;neighborly&quot; = &quot;nice to do and might be useful to some people, but not strictly required and I wouldn't fight if we didn't do it&quot;)
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
<li><strong>Next message:</strong> <a href="0631.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0629.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>In reply to:</strong> <a href="0626.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0628.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
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
