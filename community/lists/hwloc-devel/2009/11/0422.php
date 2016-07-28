<?
$subject_val = "[hwloc-devel] PCI discovery for MacOSX";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 05:07:04 2009" -->
<!-- isoreceived="20091124100704" -->
<!-- sent="Tue, 24 Nov 2009 11:06:53 +0100" -->
<!-- isosent="20091124100653" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] PCI discovery for MacOSX" -->
<!-- id="4B0BB03D.4030307_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] PCI discovery for MacOSX<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-24 05:06:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0423.php">Jeff Squyres: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<li><strong>Previous message:</strong> <a href="0421.php">Tony Breeds: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>The current libpci branch uses the pciutils library
<br>
(/usr/lib/libpci*.so*) to discover the hierarchy of PCI bridges/devices.
<br>
pciutils works on many platforms, including windows (even if I never
<br>
actually tried it). Unfortunately, there is no official support for
<br>
MacOSX. I tried libpciaccess (used by X) which offers almost the same
<br>
abilities but it doesn't seem to work on MacOSX either. Does anybody
<br>
have any idea what we could use on MacOSX?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0423.php">Jeff Squyres: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<li><strong>Previous message:</strong> <a href="0421.php">Tony Breeds: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- nextthread="start" -->
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
