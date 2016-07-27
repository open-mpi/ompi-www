<?
$subject_val = "Re: [hwloc-devel] specifying I/O devices on the command-line";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 11:03:49 2011" -->
<!-- isoreceived="20110509150349" -->
<!-- sent="Mon, 09 May 2011 08:03:42 -0700" -->
<!-- isosent="20110509150342" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] specifying I/O devices on the command-line" -->
<!-- id="4DC8024E.4000701_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DAC0493.1040701_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] specifying I/O devices on the command-line<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-09 11:03:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2179.php">Guy Streeter: "[hwloc-devel] python bindings for hwloc 1.2"</a>
<li><strong>Previous message:</strong> <a href="2177.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3504)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/04/2153.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/04/2134.php">Samuel Thibault: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I spent some time cleaning up and documenting all this. There are likely
<br>
still some things to fix/improve, but we need some user feedback at some
<br>
point. Should start a long release-candidate cycle by doing a 1.3rc1
<br>
with the current trunk and fix many remaining things in the next RCs?
<br>
<p>The worst that could happen is people disagreeing with the way we store
<br>
I/O object in the topology. It's better to get feedback about that early.
<br>
<p>Ideally, we would only have to improve the documentation and some
<br>
&quot;minor&quot; things like the way command-line tools manipulate I/O devices.
<br>
We can fix these after rc1.
<br>
<p><p><p><p>For the record, I changed the way to specify I/O devices on the
<br>
command-line (hwloc-bind and hwloc-calc):
<br>
* pci=0000:00:03.2 for specifying a pci device by bus ID (domain is
<br>
optional, function and device are not yet)
<br>
* os=eth0 for specifying the &quot;eth0&quot; software/OS device
<br>
This new &quot;equal&quot; sign becomes a way to find a object by a unique identifier.
<br>
<p>We actually also support pci:vendor:device:index but I didn't document
<br>
this one because I am not sure it will help in the end. If there's a
<br>
single PCI device with these vendor/device IDs, no need to specify its
<br>
index. If there are multiple of them, it's nearly impossible for the
<br>
application to know whether it's using the first or the second one (PCI
<br>
numbering varies with OS/BIOS/...).
<br>
<p><p>By the way, while documenting all this, I found out that &quot;software
<br>
device&quot; may be a better name than our current &quot;OS device&quot;.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2179.php">Guy Streeter: "[hwloc-devel] python bindings for hwloc 1.2"</a>
<li><strong>Previous message:</strong> <a href="2177.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3504)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/04/2153.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/04/2134.php">Samuel Thibault: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
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
