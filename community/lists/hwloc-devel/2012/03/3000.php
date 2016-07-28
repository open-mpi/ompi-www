<?
$subject_val = "[hwloc-devel] interoperability with X displays";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 29 10:08:29 2012" -->
<!-- isoreceived="20120329140829" -->
<!-- sent="Thu, 29 Mar 2012 16:08:21 +0200" -->
<!-- isosent="20120329140821" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] interoperability with X displays" -->
<!-- id="4F746CD5.2070706_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] interoperability with X displays<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-29 10:08:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3001.php">Jeffrey Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4417"</a>
<li><strong>Previous message:</strong> <a href="2999.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3002.php">Samuel Thibault: "Re: [hwloc-devel] interoperability with X displays"</a>
<li><strong>Maybe reply:</strong> <a href="3002.php">Samuel Thibault: "Re: [hwloc-devel] interoperability with X displays"</a>
<li><strong>Reply:</strong> <a href="3003.php">Christopher Samuel: "Re: [hwloc-devel] interoperability with X displays"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/04/3015.php">Samuel Thibault: "Re: [hwloc-devel] interoperability with X displays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is related to <a href="https://svn.open-mpi.org/trac/hwloc/ticket/54">https://svn.open-mpi.org/trac/hwloc/ticket/54</a>
<br>
<p>Marwan (CC'ed) is working on adding interoperability between OpenGL
<br>
displays and hwloc. The idea is that you can get the locality of the GPU
<br>
that handles a screen so as to place rendering tasks on the CPUs nearby.
<br>
This would be used in <a href="http://www.equalizergraphics.com/">http://www.equalizergraphics.com/</a>  for instance.
<br>
<p>The code is available at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/marwan-abdellah/HWLOC">https://github.com/marwan-abdellah/HWLOC</a>
<br>
<p>We discussed this recently in private. Here's what I think is worth
<br>
being noted:
<br>
* The code currently only works NVIDIA GPU's but Marwan thinks the API
<br>
could be ported to AMD too.
<br>
* The code uses NVIDIA's apparently-open-source nvctrl library. The lib
<br>
is unfortunately only built as a static lib in at least debian and
<br>
ubuntu (without -fPIC), which is annoying. So Marwan would like to
<br>
bundle it inside hwloc. I don't think that's a good idea for maintenance
<br>
and portability reasons (assuming copyrights are okay) but I am open to
<br>
opinions.
<br>
* We get new &quot;display&quot; objects in the topology
<br>
* We also get some new helpers that convert between displays and cpusets
<br>
<p>There's still some work/cleanup before this can be merged
<br>
* His institution should sign the contributor licensing agreement
<br>
* Some functions likely need renaming/prefixing
<br>
* We need to cleanup the proposed API (make the busid an actual generic
<br>
PCI bus id, find good function names and filenames, make sure
<br>
display_info is ok, ...)
<br>
* We need to check where the current X model is going with displays and
<br>
multiple GPUs. Dave Airlie is working on sharing memory objects between
<br>
GPUs (to switch between integrated and discrete GPUs) so we could have
<br>
multiple GPUs for a single X display. We need to make sure we won't have
<br>
problem if we can ever port the new API to such cases.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3000/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3001.php">Jeffrey Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4417"</a>
<li><strong>Previous message:</strong> <a href="2999.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3002.php">Samuel Thibault: "Re: [hwloc-devel] interoperability with X displays"</a>
<li><strong>Maybe reply:</strong> <a href="3002.php">Samuel Thibault: "Re: [hwloc-devel] interoperability with X displays"</a>
<li><strong>Reply:</strong> <a href="3003.php">Christopher Samuel: "Re: [hwloc-devel] interoperability with X displays"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/04/3015.php">Samuel Thibault: "Re: [hwloc-devel] interoperability with X displays"</a>
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
