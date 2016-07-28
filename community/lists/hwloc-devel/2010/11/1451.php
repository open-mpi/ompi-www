<?
$subject_val = "Re: [hwloc-devel] 1.1 .so version number";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  9 12:50:05 2010" -->
<!-- isoreceived="20101109175005" -->
<!-- sent="Tue, 9 Nov 2010 18:49:54 +0100" -->
<!-- isosent="20101109174954" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.1 .so version number" -->
<!-- id="20101109174954.GM5785_at_const.umh.ac.be" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1573204353.427406.1289231864896.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.1 .so version number<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-09 12:49:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1452.php">Jeff Squyres: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Previous message:</strong> <a href="1450.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Maybe in reply to:</strong> <a href="1442.php">Jeff Squyres: "[hwloc-devel] 1.1 .so version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1452.php">Jeff Squyres: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Reply:</strong> <a href="1452.php">Jeff Squyres: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Reply:</strong> <a href="1455.php">Brice Goglin: "Re: [hwloc-devel] 1.1 .so version number"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Mon 08 Nov 2010 16:57:44 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 08/11/2010 15:38, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Short version:
</span><br>
<span class="quotelev2">&gt; &gt; --------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have not looked closely -- I *think* APIs have been added and changed since v1.0.  As such, I *think* the libtool .so version number for 1.1 should be 1:0:0.
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think any function behavior changed.
</span><br>
<p>I don't think either.
<br>
<p><span class="quotelev1">&gt; But the object structure has been extended, cache attributes were
</span><br>
<span class="quotelev1">&gt; extended,
</span><br>
<p>Extension is not a problem, provided that offsets are still the same
<br>
(i.e. the old C structure appears first in the new C structure)
<br>
<p><span class="quotelev1">&gt; machine attributes were removed.
</span><br>
<p>That is not a problem here.  The attr field of hwloc_obj will be NULL,
<br>
that's all, the application won't ever read it anyway.
<br>
<p>I don't see anything else that we removed (that's why you have added
<br>
cpuset aliases actually).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1452.php">Jeff Squyres: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Previous message:</strong> <a href="1450.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Maybe in reply to:</strong> <a href="1442.php">Jeff Squyres: "[hwloc-devel] 1.1 .so version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1452.php">Jeff Squyres: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Reply:</strong> <a href="1452.php">Jeff Squyres: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Reply:</strong> <a href="1455.php">Brice Goglin: "Re: [hwloc-devel] 1.1 .so version number"</a>
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
