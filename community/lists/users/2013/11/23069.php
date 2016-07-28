<?
$subject_val = "[OMPI users] Bug Iscatterv/Igatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 26 14:18:03 2013" -->
<!-- isoreceived="20131126191803" -->
<!-- sent="Tue, 26 Nov 2013 13:17:26 -0600" -->
<!-- isosent="20131126191726" -->
<!-- name="Pierre Jolivet" -->
<!-- email="jolivet_at_[hidden]" -->
<!-- subject="[OMPI users] Bug Iscatterv/Igatherv" -->
<!-- id="9FF57972-81EE-4867-AE58-6B4A109067B9_at_ann.jussieu.fr" -->
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
<strong>Subject:</strong> [OMPI users] Bug Iscatterv/Igatherv<br>
<strong>From:</strong> Pierre Jolivet (<em>jolivet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-26 14:17:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23070.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23068.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under	Torque manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23087.php">George Bosilca: "Re: [OMPI users] Bug Iscatterv/Igatherv"</a>
<li><strong>Reply:</strong> <a href="23087.php">George Bosilca: "Re: [OMPI users] Bug Iscatterv/Igatherv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
Just like r29736, I believe that there are some missing tests in ompi/mca/coll/libnbc/nbc_iscatterv.c and ompi/mca/coll/libnbc/nbc_igatherv.c
<br>
Thoughts ?
<br>
Pierre
<br>
<p>Index: nbc_igatherv.c
<br>
===================================================================
<br>
--- nbc_igatherv.c	(revision 29756)
<br>
+++ nbc_igatherv.c	(working copy)
<br>
@@ -36,8 +36,10 @@
<br>
&nbsp;&nbsp;if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Comm_rank() (%i)\n&quot;, res); return res; }
<br>
&nbsp;&nbsp;res = MPI_Comm_size(comm, &amp;p);
<br>
&nbsp;&nbsp;if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Comm_rank() (%i)\n&quot;, res); return res; }
<br>
-  res = MPI_Type_extent(recvtype, &amp;rcvext);
<br>
-  if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Type_extent() (%i)\n&quot;, res); return res; }
<br>
+  if (rank == root) {
<br>
+      res = MPI_Type_extent(recvtype, &amp;rcvext);
<br>
+      if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Type_extent() (%i)\n&quot;, res); return res; }
<br>
+  }
<br>
<p>&nbsp;&nbsp;schedule = (NBC_Schedule*)malloc(sizeof(NBC_Schedule));
<br>
&nbsp;&nbsp;if (NULL == schedule) { printf(&quot;Error in malloc() (%i)\n&quot;, res); return res; }
<br>
Index: nbc_iscatterv.c
<br>
===================================================================
<br>
--- nbc_iscatterv.c	(revision 29756)
<br>
+++ nbc_iscatterv.c	(working copy)
<br>
@@ -38,8 +38,10 @@
<br>
&nbsp;&nbsp;if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Comm_rank() (%i)\n&quot;, res); return res; }
<br>
&nbsp;&nbsp;res = MPI_Comm_size(comm, &amp;p);
<br>
&nbsp;&nbsp;if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Comm_size() (%i)\n&quot;, res); return res; }
<br>
-  res = MPI_Type_extent(sendtype, &amp;sndext);
<br>
-  if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Type_extent() (%i)\n&quot;, res); return res; }
<br>
+  if (rank == root) {
<br>
+      res = MPI_Type_extent(sendtype, &amp;sndext);
<br>
+      if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Type_extent() (%i)\n&quot;, res); return res; }
<br>
+  }
<br>
<p>&nbsp;&nbsp;schedule = (NBC_Schedule*)malloc(sizeof(NBC_Schedule));
<br>
&nbsp;&nbsp;if (NULL == schedule) { printf(&quot;Error in malloc()\n&quot;); return res; }<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23070.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23068.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under	Torque manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23087.php">George Bosilca: "Re: [OMPI users] Bug Iscatterv/Igatherv"</a>
<li><strong>Reply:</strong> <a href="23087.php">George Bosilca: "Re: [OMPI users] Bug Iscatterv/Igatherv"</a>
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
