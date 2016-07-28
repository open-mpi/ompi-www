<?
$subject_val = "[OMPI devel] about Mellanox Jenkins";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 21 03:53:14 2016" -->
<!-- isoreceived="20160721075314" -->
<!-- sent="Thu, 21 Jul 2016 16:53:10 +0900" -->
<!-- isosent="20160721075310" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] about Mellanox Jenkins" -->
<!-- id="a3309481-92de-7fdf-dadb-9cc2e1f1deb7_at_rist.or.jp" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] about Mellanox Jenkins<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-21 03:53:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19248.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Previous message:</strong> <a href="19246.php">Jeff Squyres (jsquyres): "[OMPI devel] Please register for the Open MPI developer meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19248.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Reply:</strong> <a href="19248.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Reply:</strong> <a href="19254.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about Mellanox Jenkins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p><p>Mellanox Jenkins marks recent PR's as failed for very surprising reasons.
<br>
<p><p>mpirun --mca btl sm,self ...
<br>
<p><p>failed because processes could not contact each other. i was able to 
<br>
reproduce this once on my workstation,
<br>
<p>and found the root cause was a dirty build and/or install dir.
<br>
<p><p>i added some debug in autogen.sh and found that :
<br>
<p>- the workspace (install dir) contains some old files
<br>
<p>- it seems all PR's use the same workspace (if it was clean, that would 
<br>
be ok as long as Jenkins process only one PR at a time)
<br>
<p>- there are currently two PR's being processed for the ompi-release 
<br>
repo, and per the log, they seem to use run from the very same directory
<br>
<p>- Jenkins for the pmix repo seems to suffer the same issue
<br>
<p><p>could someone have a look at this ?
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19248.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Previous message:</strong> <a href="19246.php">Jeff Squyres (jsquyres): "[OMPI devel] Please register for the Open MPI developer meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19248.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Reply:</strong> <a href="19248.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Reply:</strong> <a href="19254.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about Mellanox Jenkins"</a>
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
