<?
$subject_val = "[hwloc-devel] random api questions";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 30 10:42:40 2010" -->
<!-- isoreceived="20100130154240" -->
<!-- sent="Sat, 30 Jan 2010 16:42:34 +0100" -->
<!-- isosent="20100130154234" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] random api questions" -->
<!-- id="4B64536A.6070206_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] random api questions<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-30 10:42:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0654.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Previous message:</strong> <a href="0652.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0654.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Reply:</strong> <a href="0654.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do we want a #define HWLOC_API_VERSION to help people support both the
<br>
0.9 and the 1.0 APIs at runtime ?
<br>
<p>What's the difference between obj-&gt;cpuset and the other obj-&gt;*cpuset ?
<br>
Some documentation is missing there, and os_index should probably move
<br>
outside of the list of *cpuset fields.
<br>
<p>/* FIXME: clarify what happens if ignoring the top-level type (ignore the ignoring?) */
<br>
HWLOC_DECLSPEC int hwloc_topology_ignore_type(hwloc_topology_t topology, hwloc_obj_type_t type);
<br>
<p><p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0654.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Previous message:</strong> <a href="0652.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0654.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Reply:</strong> <a href="0654.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
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
