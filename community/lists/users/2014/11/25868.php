<?
$subject_val = "[OMPI users] How to find MPI ranks located in remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 17:32:19 2014" -->
<!-- isoreceived="20141125223219" -->
<!-- sent="Tue, 25 Nov 2014 22:32:09 +0000" -->
<!-- isosent="20141125223209" -->
<!-- name="Teranishi, Keita" -->
<!-- email="knteran_at_[hidden]" -->
<!-- subject="[OMPI users] How to find MPI ranks located in remote nodes?" -->
<!-- id="D0992330.80EF3%knteran_at_sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] How to find MPI ranks located in remote nodes?<br>
<strong>From:</strong> Teranishi, Keita (<em>knteran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-25 17:32:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25869.php">Ralph Castain: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25867.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 &amp; 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25869.php">Ralph Castain: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25869.php">Ralph Castain: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying  to figure out a way for each local MPI rank to identify the ranks located in physically remote nodes (just different nodes) of cluster or MPPs such as Cray.  I am using MPI_Get_processor_name to get the node ID, but it requires some processing to map MPI rank to the node ID.  Is there any better ways doing this using MPI-2.2 (or earlier) capabilities?   It will be great if I can easily get a list of MPI ranks in the same physical node.
<br>
<p>Thanks,
<br>
-----------------------------------------------------------------------------
<br>
Keita Teranishi
<br>
Principal Member of Technical Staff
<br>
Scalable Modeling and Analysis Systems
<br>
Sandia National Laboratories
<br>
Livermore, CA 94551
<br>
+1 (925) 294-3738
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25868/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25869.php">Ralph Castain: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25867.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 &amp; 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25869.php">Ralph Castain: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25869.php">Ralph Castain: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
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
