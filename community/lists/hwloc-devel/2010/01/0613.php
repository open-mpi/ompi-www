<?
$subject_val = "Re: [hwloc-devel] memory size attributes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 17 06:32:12 2010" -->
<!-- isoreceived="20100117113212" -->
<!-- sent="Sun, 17 Jan 2010 12:31:52 +0100" -->
<!-- isosent="20100117113152" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] memory size attributes" -->
<!-- id="4B52F528.9050405_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA1705669E_at_XMB-RCD-205.cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-17 06:31:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0614.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1654)"</a>
<li><strong>Previous message:</strong> <a href="0612.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1649)"</a>
<li><strong>In reply to:</strong> <a href="0611.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0616.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0616.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just so I understand - are you saying hwloc should track both the
</span><br>
<span class="quotelev1">&gt; total amount of memory *and* the makeup of that amount, broken up by
</span><br>
<span class="quotelev1">&gt; page size?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I don't know if we need this.
<br>
<p>Right now we have total amount + number of hugepages + size of
<br>
hugepages. I was only talking about modifying the way to store all this
<br>
so as it'd be to easier to add multiple hugepage size x number one day.
<br>
I wasn't talking about adding normal page size x number.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0614.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1654)"</a>
<li><strong>Previous message:</strong> <a href="0612.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1649)"</a>
<li><strong>In reply to:</strong> <a href="0611.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0616.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0616.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
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
