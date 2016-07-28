<?
$subject_val = "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 12:31:22 2011" -->
<!-- isoreceived="20110803163122" -->
<!-- sent="Wed, 03 Aug 2011 18:31:15 +0200" -->
<!-- isosent="20110803163115" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI + HWLOC + Static build  issue" -->
<!-- id="4E3977D3.7020006_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5C691E518F345F4882FAB9E9839E60BA0BCA4622F6_at_EXCHMB.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI + HWLOC + Static build  issue<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-03 12:31:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9597.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9595.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9595.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9599.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9599.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 03/08/2011 18:24, Shamis, Pavel a &#233;crit :
<br>
<span class="quotelev1">&gt; Hw-loc vanilla works, because static mode does not build the binaries
</span><br>
<span class="quotelev1">&gt; in static mode. If you would try to build build hwloc utilities in
</span><br>
<span class="quotelev1">&gt; static mode it fails , just like ompi.
</span><br>
<p>I get static binaries on SLES11 with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;./configure --enable-static --disable-shared LDFLAGS=-static
<br>
and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make LDFLAGS=-all-static LIBS=-lpthread
<br>
<p>$ ldd utils/lstopo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
$ utils/lstopo
<br>
Machine (24GB)
<br>
[...]
<br>
<p>No problem with libnuma here, it was disabled during configure
<br>
(libpthread is needed for another reason).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9597.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9595.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9595.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9599.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9599.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
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
