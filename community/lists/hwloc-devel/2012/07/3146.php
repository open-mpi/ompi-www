<?
$subject_val = "[hwloc-devel] XML string filtering";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  6 08:50:22 2012" -->
<!-- isoreceived="20120706125022" -->
<!-- sent="Fri, 06 Jul 2012 14:49:51 +0200" -->
<!-- isosent="20120706124951" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] XML string filtering" -->
<!-- id="4FF6DEEF.4050706_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] XML string filtering<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-06 08:49:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3147.php">Jeff Squyres: "Re: [hwloc-devel] XML string filtering"</a>
<li><strong>Previous message:</strong> <a href="3145.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4564)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3147.php">Jeff Squyres: "Re: [hwloc-devel] XML string filtering"</a>
<li><strong>Reply:</strong> <a href="3147.php">Jeff Squyres: "Re: [hwloc-devel] XML string filtering"</a>
<li><strong>Reply:</strong> <a href="3148.php">Samuel Thibault: "Re: [hwloc-devel] XML string filtering"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am looking at filtering special characters out of strings to make XML
<br>
export/reimport safer when the BIOS contains ugly DMI infos or when the
<br>
user sets crazy custom object info strings.
<br>
<p>We don't want to waste time with encoding, supporting ascii is enough in
<br>
the vast majority of cases. Others invalid chars will be removed from
<br>
the XML-exported strings. But libxml doesn't like most characters
<br>
between 0 and 31. I could just use isprint() to check every character
<br>
before export and only keep those between 32 and 127. But what about \n,
<br>
\t, \r, \f which are before ? Do we want to allow them?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3147.php">Jeff Squyres: "Re: [hwloc-devel] XML string filtering"</a>
<li><strong>Previous message:</strong> <a href="3145.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4564)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3147.php">Jeff Squyres: "Re: [hwloc-devel] XML string filtering"</a>
<li><strong>Reply:</strong> <a href="3147.php">Jeff Squyres: "Re: [hwloc-devel] XML string filtering"</a>
<li><strong>Reply:</strong> <a href="3148.php">Samuel Thibault: "Re: [hwloc-devel] XML string filtering"</a>
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
