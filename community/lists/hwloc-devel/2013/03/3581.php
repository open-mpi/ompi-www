<?
$subject_val = "[hwloc-devel] upcoming hwloc v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  7 17:58:57 2013" -->
<!-- isoreceived="20130307225857" -->
<!-- sent="Thu, 07 Mar 2013 23:58:51 +0100" -->
<!-- isosent="20130307225851" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] upcoming hwloc v1.7" -->
<!-- id="51391BAB.2010905_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] upcoming hwloc v1.7<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-07 17:58:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3582.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5447)"</a>
<li><strong>Previous message:</strong> <a href="3580.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5430)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3590.php">Samuel Thibault: "Re: [hwloc-devel] upcoming hwloc v1.7"</a>
<li><strong>Reply:</strong> <a href="3590.php">Samuel Thibault: "Re: [hwloc-devel] upcoming hwloc v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am starting to think about doing a first release candidate of hwloc
<br>
v1.7. We already have quite a lot of important changes in trunk
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://svn.open-mpi.org/svn/hwloc/trunk/NEWS">http://svn.open-mpi.org/svn/hwloc/trunk/NEWS</a>
<br>
<p>The addition of BlueGene/Q and NetBSD support won't hurt.
<br>
The addition of OpenCL, CUDA, NVML, GL, and MIC/XeonPhi I/O objects
<br>
shouldn't cause much problem either.
<br>
<p>The change that may be dangerous is the new hwloc/plugins.h public
<br>
headers to building external plugins:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://svn.open-mpi.org/svn/hwloc/trunk/include/hwloc/plugins.h">http://svn.open-mpi.org/svn/hwloc/trunk/include/hwloc/plugins.h</a>
<br>
We have a specific ABI field in the main component structure
<br>
(hwloc_component) to avoid problems in case we break this new ABI.
<br>
Breaking it isn't as bad as breaking the main hwloc ABI, but it'd still
<br>
be good to not break it in every major release anyway. If you see
<br>
anything to change to make things more future-proof, let me know, I'd
<br>
rather change it before v1.7. Adding a flags field to struct
<br>
hwloc_disc_component could be an idea (only hwloc_component and
<br>
hwloc_backend have one for now).
<br>
<p>If you need anything else in v1.7, let me know too. trac still says we
<br>
miss &quot;get_last_memory_location()&quot; but I still don't know what's the good
<br>
interface for this. <a href="https://svn.open-mpi.org/trac/hwloc/ticket/96">https://svn.open-mpi.org/trac/hwloc/ticket/96</a>
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3582.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5447)"</a>
<li><strong>Previous message:</strong> <a href="3580.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5430)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3590.php">Samuel Thibault: "Re: [hwloc-devel] upcoming hwloc v1.7"</a>
<li><strong>Reply:</strong> <a href="3590.php">Samuel Thibault: "Re: [hwloc-devel] upcoming hwloc v1.7"</a>
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
