<?
$subject_val = "[hwloc-devel] multinode/network topology status";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 21 02:54:31 2011" -->
<!-- isoreceived="20110921065431" -->
<!-- sent="Wed, 21 Sep 2011 08:54:26 +0200" -->
<!-- isosent="20110921065426" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] multinode/network topology status" -->
<!-- id="4E798A22.3070705_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] multinode/network topology status<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-21 02:54:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2425.php">Jiri Hladky: "[hwloc-devel] xmlbuffer self check on PPC"</a>
<li><strong>Previous message:</strong> <a href="2423.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3821)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/10/2490.php">Samuel Thibault: "Re: [hwloc-devel] multinode/network topology status"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/10/2490.php">Samuel Thibault: "Re: [hwloc-devel] multinode/network topology status"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/10/2495.php">Samuel Thibault: "Re: [hwloc-devel] multinode/network topology status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
People interested in multinode topology support (or network topology),
<br>
please look at this and send your thoughts.
<br>
<p>The &quot;custom&quot; branch is in good shape, I'd like some feedback before
<br>
merging it to trunk.
<br>
<p>Example of C interface use (assembling 3 nodes in a global topology with
<br>
3 levels of switches):
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/tests/hwloc_custom.c#L23">https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/tests/hwloc_custom.c#L23</a>
<br>
<p>C interface doc:
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/include/hwloc.h#L1904">https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/include/hwloc.h#L1904</a>
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/include/hwloc.h#L803">https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/include/hwloc.h#L803</a>
<br>
<p>Manpages of the command-line tools (with examples at the end):
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/utils/hwloc-assembler.1in">https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/utils/hwloc-assembler.1in</a>
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/utils/hwloc-assembler-remote.1in">https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/utils/hwloc-assembler-remote.1in</a>
<br>
<p>General doc about all this:
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/doc/hwloc.doxy#L1224">https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/doc/hwloc.doxy#L1224</a>
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2425.php">Jiri Hladky: "[hwloc-devel] xmlbuffer self check on PPC"</a>
<li><strong>Previous message:</strong> <a href="2423.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3821)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/10/2490.php">Samuel Thibault: "Re: [hwloc-devel] multinode/network topology status"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/10/2490.php">Samuel Thibault: "Re: [hwloc-devel] multinode/network topology status"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/10/2495.php">Samuel Thibault: "Re: [hwloc-devel] multinode/network topology status"</a>
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
