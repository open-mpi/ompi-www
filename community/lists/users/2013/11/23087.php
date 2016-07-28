<?
$subject_val = "Re: [OMPI users] Bug Iscatterv/Igatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 27 07:10:02 2013" -->
<!-- isoreceived="20131127121002" -->
<!-- sent="Wed, 27 Nov 2013 13:09:57 +0100" -->
<!-- isosent="20131127120957" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug Iscatterv/Igatherv" -->
<!-- id="9B958010-B8F8-4D6F-8762-BD9E249AF1B5_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9FF57972-81EE-4867-AE58-6B4A109067B9_at_ann.jussieu.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug Iscatterv/Igatherv<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-27 07:09:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23088.php">Ola.Widlund_at_[hidden]: "[OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<li><strong>Previous message:</strong> <a href="23086.php">George Bosilca: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>In reply to:</strong> <a href="23069.php">Pierre Jolivet: "[OMPI users] Bug Iscatterv/Igatherv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks this went in as r29761.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Nov 26, 2013, at 20:17 , Pierre Jolivet &lt;jolivet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; Just like r29736, I believe that there are some missing tests in ompi/mca/coll/libnbc/nbc_iscatterv.c and ompi/mca/coll/libnbc/nbc_igatherv.c
</span><br>
<span class="quotelev1">&gt; Thoughts ?
</span><br>
<span class="quotelev1">&gt; Pierre
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: nbc_igatherv.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- nbc_igatherv.c	(revision 29756)
</span><br>
<span class="quotelev1">&gt; +++ nbc_igatherv.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -36,8 +36,10 @@
</span><br>
<span class="quotelev1">&gt;  if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Comm_rank() (%i)\n&quot;, res); return res; }
</span><br>
<span class="quotelev1">&gt;  res = MPI_Comm_size(comm, &amp;p);
</span><br>
<span class="quotelev1">&gt;  if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Comm_rank() (%i)\n&quot;, res); return res; }
</span><br>
<span class="quotelev1">&gt; -  res = MPI_Type_extent(recvtype, &amp;rcvext);
</span><br>
<span class="quotelev1">&gt; -  if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Type_extent() (%i)\n&quot;, res); return res; }
</span><br>
<span class="quotelev1">&gt; +  if (rank == root) {
</span><br>
<span class="quotelev1">&gt; +      res = MPI_Type_extent(recvtype, &amp;rcvext);
</span><br>
<span class="quotelev1">&gt; +      if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Type_extent() (%i)\n&quot;, res); return res; }
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  schedule = (NBC_Schedule*)malloc(sizeof(NBC_Schedule));
</span><br>
<span class="quotelev1">&gt;  if (NULL == schedule) { printf(&quot;Error in malloc() (%i)\n&quot;, res); return res; }
</span><br>
<span class="quotelev1">&gt; Index: nbc_iscatterv.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- nbc_iscatterv.c	(revision 29756)
</span><br>
<span class="quotelev1">&gt; +++ nbc_iscatterv.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -38,8 +38,10 @@
</span><br>
<span class="quotelev1">&gt;  if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Comm_rank() (%i)\n&quot;, res); return res; }
</span><br>
<span class="quotelev1">&gt;  res = MPI_Comm_size(comm, &amp;p);
</span><br>
<span class="quotelev1">&gt;  if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Comm_size() (%i)\n&quot;, res); return res; }
</span><br>
<span class="quotelev1">&gt; -  res = MPI_Type_extent(sendtype, &amp;sndext);
</span><br>
<span class="quotelev1">&gt; -  if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Type_extent() (%i)\n&quot;, res); return res; }
</span><br>
<span class="quotelev1">&gt; +  if (rank == root) {
</span><br>
<span class="quotelev1">&gt; +      res = MPI_Type_extent(sendtype, &amp;sndext);
</span><br>
<span class="quotelev1">&gt; +      if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Type_extent() (%i)\n&quot;, res); return res; }
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  schedule = (NBC_Schedule*)malloc(sizeof(NBC_Schedule));
</span><br>
<span class="quotelev1">&gt;  if (NULL == schedule) { printf(&quot;Error in malloc()\n&quot;); return res; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23088.php">Ola.Widlund_at_[hidden]: "[OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<li><strong>Previous message:</strong> <a href="23086.php">George Bosilca: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>In reply to:</strong> <a href="23069.php">Pierre Jolivet: "[OMPI users] Bug Iscatterv/Igatherv"</a>
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
