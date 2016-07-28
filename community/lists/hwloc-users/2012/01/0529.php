<?
$subject_val = "[hwloc-users] hwloc and HTX device ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 03:21:32 2012" -->
<!-- isoreceived="20120127082132" -->
<!-- sent="Fri, 27 Jan 2012 09:21:27 +0100" -->
<!-- isosent="20120127082127" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc and HTX device ?" -->
<!-- id="4F225E87.3060508_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc and HTX device ?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 03:21:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0530.php">Albert Solernou: "[hwloc-users] creation and destruction of bound threads"</a>
<li><strong>Previous message:</strong> <a href="0528.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'd like to see what hwloc reports on AMD machines with a HTX card
<br>
(hypertransport expansion card). The most widely known case would likely
<br>
be a 3-5-years old AMD cluster with Pathscale Infinipath network cards.
<br>
But I think there are also some accelerators such as clearspeed, and the
<br>
numaconnect single-image interconnect.
<br>
<p>HTX slots do not involve PCI, but AMD may have implemented some glue to
<br>
make them appear in lspci anyway. So it's not clear if hwloc will see
<br>
them or not.
<br>
<p>If anybody has access to such a machine, could you please run lstopo
<br>
(&gt;=1.3) there and tell us if the HTX device appear? if not, we'll need
<br>
to see if there are some /dev files to look at. If yes, does it appear
<br>
close to a single socket ? If so, is this the right socket ? (feel free
<br>
to tell what model of machine this is, I will check in the motherboard
<br>
manual to make sure this is the right socket).
<br>
<p>Thanks
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0530.php">Albert Solernou: "[hwloc-users] creation and destruction of bound threads"</a>
<li><strong>Previous message:</strong> <a href="0528.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
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
