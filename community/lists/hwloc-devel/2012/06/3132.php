<?
$subject_val = "Re: [hwloc-devel] HWLOC_NBMAXCPUS";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 03:42:48 2012" -->
<!-- isoreceived="20120625074248" -->
<!-- sent="Mon, 25 Jun 2012 09:42:42 +0200" -->
<!-- isosent="20120625074242" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] HWLOC_NBMAXCPUS" -->
<!-- id="4FE81672.3040409_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FE33277.7080309_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] HWLOC_NBMAXCPUS<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-25 03:42:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3133.php">TERRY DONTJE: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>Previous message:</strong> <a href="3131.php">TERRY DONTJE: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>Maybe in reply to:</strong> <a href="3129.php">TERRY DONTJE: "[hwloc-devel] HWLOC_NBMAXCPUS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3133.php">TERRY DONTJE: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>Reply:</strong> <a href="3133.php">TERRY DONTJE: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Terry,
<br>
<p>Here's a patch that should help. It cleans the code and makes all arrays
<br>
dynamic. I artificially set the initial array sizes to 4 to experience
<br>
the code on our 24-way T1 machine. I will set it to 256 or so in the
<br>
final commit. Please let me know if it helps on your 1440-way machine.
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3132/solaris_dynamic.patch">solaris_dynamic.patch</a>
</ul>
<!-- attachment="solaris_dynamic.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3133.php">TERRY DONTJE: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>Previous message:</strong> <a href="3131.php">TERRY DONTJE: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>Maybe in reply to:</strong> <a href="3129.php">TERRY DONTJE: "[hwloc-devel] HWLOC_NBMAXCPUS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3133.php">TERRY DONTJE: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>Reply:</strong> <a href="3133.php">TERRY DONTJE: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
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
