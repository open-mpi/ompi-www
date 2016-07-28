<?
$subject_val = "Re: [hwloc-devel] 1.1 .so version number";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  9 12:48:32 2010" -->
<!-- isoreceived="20101109174832" -->
<!-- sent="Tue, 9 Nov 2010 18:47:52 +0100" -->
<!-- isosent="20101109174752" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.1 .so version number" -->
<!-- id="20101109174752.GL5785_at_const.umh.ac.be" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="223777767.420848.1289227111421.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2010-11-09 12:47:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1451.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Previous message:</strong> <a href="1449.php">Samuel Thibault: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<li><strong>Maybe in reply to:</strong> <a href="1442.php">Jeff Squyres: "[hwloc-devel] 1.1 .so version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1451.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Mon 08 Nov 2010 15:38:31 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; The last one is what I'm not sure about, but what I'm inferring from Samuel's statement about &quot;API breaks&quot;.
</span><br>
<p>Actually you can have an API break without an ABI break. Here, old
<br>
applications should work fine.  They'll just not be able to reach the
<br>
DMI strings, as they're now in &quot;infos&quot;.  But they won't crash since
<br>
attrs will just be empty.  So I believe we can use 1:0:1.  That's why we
<br>
have kept aliases in src/cpuset.c for, actually.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1451.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Previous message:</strong> <a href="1449.php">Samuel Thibault: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<li><strong>Maybe in reply to:</strong> <a href="1442.php">Jeff Squyres: "[hwloc-devel] 1.1 .so version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1451.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
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
