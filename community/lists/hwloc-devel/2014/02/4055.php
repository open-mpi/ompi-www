<?
$subject_val = "Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 16:04:44 2014" -->
<!-- isoreceived="20140210210444" -->
<!-- sent="Mon, 10 Feb 2014 22:04:42 +0100" -->
<!-- isosent="20140210210442" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object" -->
<!-- id="52F93EEA.6040908_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALT_uBQO4moMNGVeo=JV-kiN-=Z5KaCHX4AdG-nCQR_YJ1o+YQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 16:04:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4056.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4054.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-76-g3d85207)"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/09/3877.php">Jiri Hladky: "[hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jirka,
<br>
<p>Can you check the new &quot;distrib-reverse&quot; branch in hwloc GIT?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/hwloc/commits/distrib-reverse">https://github.com/open-mpi/hwloc/commits/distrib-reverse</a>
<br>
It should implement what you want. I am deprecating hwloc_distribute()
<br>
and distributev() in favor a new hwloc_distrib() that adds a flag
<br>
argument. We have a flag to force reverse distribution as discussed earlier.
<br>
<p>The hwloc-distrib command-line tool gets a new --reverse option that
<br>
enables the above and singlifies using the last bit (didn't actually
<br>
need a new function to do this).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4056.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4054.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-76-g3d85207)"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/09/3877.php">Jiri Hladky: "[hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
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
