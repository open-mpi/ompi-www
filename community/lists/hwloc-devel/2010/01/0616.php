<?
$subject_val = "Re: [hwloc-devel] memory size attributes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 14:45:34 2010" -->
<!-- isoreceived="20100119194534" -->
<!-- sent="Tue, 19 Jan 2010 07:03:55 -0500" -->
<!-- isosent="20100119120355" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] memory size attributes" -->
<!-- id="29F43A85-730E-44EB-AFA9-B368DB8544F8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B52F528.9050405_at_inria.fr" -->
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
<strong>Date:</strong> 2010-01-19 07:03:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0617.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0615.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>In reply to:</strong> <a href="0613.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0618.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0618.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 17, 2010, at 6:31 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Right now we have total amount + number of hugepages + size of
</span><br>
<span class="quotelev1">&gt; hugepages. I was only talking about modifying the way to store all this
</span><br>
<span class="quotelev1">&gt; so as it'd be to easier to add multiple hugepage size x number one day.
</span><br>
<span class="quotelev1">&gt; I wasn't talking about adding normal page size x number.
</span><br>
<p>This may be a dumb question, but can there be multiple sized pages?
<br>
<p>E.g., can a system of multiple machines have page size X on some machines and page size Y on other machines?
<br>
<p>Additionally, I'm a little concerned about saying &quot;hugepage&quot; today, when that might be the normal tomorrow (kind of like calling something &quot;new&quot; -- someday, it won't be new anymore).  I'd rather either specify the page size or not; not use an adjective that may or may not have meaning someday / on some platforms.
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
<li><strong>Next message:</strong> <a href="0617.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0615.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>In reply to:</strong> <a href="0613.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0618.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0618.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
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
