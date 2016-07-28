<?
$subject_val = "[OMPI users] How does MPI_Allreduce work?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 23:41:22 2015" -->
<!-- isoreceived="20150925034122" -->
<!-- sent="Thu, 24 Sep 2015 23:41:19 -0400" -->
<!-- isosent="20150925034119" -->
<!-- name="Yang Zhang" -->
<!-- email="yang.zhang_at_[hidden]" -->
<!-- subject="[OMPI users] How does MPI_Allreduce work?" -->
<!-- id="F4574A61-E3F3-4B65-932D-356261D45BB2_at_nyu.edu" -->
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
<strong>Subject:</strong> [OMPI users] How does MPI_Allreduce work?<br>
<strong>From:</strong> Yang Zhang (<em>yang.zhang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-24 23:41:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27676.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Previous message:</strong> <a href="27674.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27678.php">Rolf vandeVaart: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<li><strong>Reply:</strong> <a href="27678.php">Rolf vandeVaart: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello OpenMPI users,
<br>
<p>Is there any document on MPI_Allreduce() implementation? I&#226;&#128;&#153;m using
<br>
it to do summation on GPU data. I wonder if OpenMPI will first do
<br>
summation on processes in the same node, and then do summation on the
<br>
intermediate results across nodes. This would be preferable since it
<br>
reduces cross node communication and should be faster?
<br>
<p>I&#226;&#128;&#153;m using OpenMPI 1.10.0 and CUDA 7.0. I need to sum 40 million float
<br>
numbers on 6 nodes, each node running 4 processes. The nodes are
<br>
connected via InfiniBand.
<br>
<p>Thanks very much!
<br>
<p>Best,
<br>
Yang
<br>
<p>------------------------------------------------------------------------
<br>
<p>Sent by Apple Mail
<br>
<p>Yang ZHANG
<br>
<p>PhD candidate
<br>
<p>Networking and Wide-Area Systems Group
<br>
Computer Science Department
<br>
New York University
<br>
<p>715 Broadway Room 705
<br>
New York, NY 10003
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27676.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Previous message:</strong> <a href="27674.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27678.php">Rolf vandeVaart: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<li><strong>Reply:</strong> <a href="27678.php">Rolf vandeVaart: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
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
