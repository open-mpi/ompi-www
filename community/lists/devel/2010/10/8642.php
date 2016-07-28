<?
$subject_val = "Re: [OMPI devel] Cost  for AllGatherV() Operation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 16:01:25 2010" -->
<!-- isoreceived="20101029200125" -->
<!-- sent="Fri, 29 Oct 2010 16:01:19 -0400" -->
<!-- isosent="20101029200119" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Cost  for AllGatherV() Operation" -->
<!-- id="DFF6CD1F-80EC-4391-A47B-4BD21F23EB0A_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CCB2393.5010803_at_nd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Cost  for AllGatherV() Operation<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 16:01:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8643.php">Shamis, Pavel: "Re: [OMPI devel] 1.5.x plans"</a>
<li><strong>Previous message:</strong> <a href="8641.php">Tim Stitt: "[OMPI devel] Cost  for AllGatherV() Operation"</a>
<li><strong>In reply to:</strong> <a href="8641.php">Tim Stitt: "[OMPI devel] Cost  for AllGatherV() Operation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim,
<br>
<p>The collective in Open MPI works differently than in MPICH. They are dynamically selected based on the number of processes involved and the amount of data to be exchanged. Therefore, it is difficult to answer your question without knowing this information.
<br>
<p>There are 4 algorithms for MPI_Allgather in Open MPI:
<br>
- recursive doubling
<br>
- Bruck
<br>
- ring
<br>
- neighbor exchange
<br>
<p>I think their complexity is described in &quot;Performance analysis of MPI collective operations&quot; (<a href="http://www.springerlink.com/content/542207241006p64h/">http://www.springerlink.com/content/542207241006p64h/</a>).
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Oct 29, 2010, at 15:42 , Tim Stitt wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI Developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful if someone could briefly describe the cost (complexity) for the allgatherv() collective operation in the current release of OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For MPICH2 I believe the cost is ceiling(lg p). Can anyone comment on the algorithms and cost used in the OpenMPI implementation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8643.php">Shamis, Pavel: "Re: [OMPI devel] 1.5.x plans"</a>
<li><strong>Previous message:</strong> <a href="8641.php">Tim Stitt: "[OMPI devel] Cost  for AllGatherV() Operation"</a>
<li><strong>In reply to:</strong> <a href="8641.php">Tim Stitt: "[OMPI devel] Cost  for AllGatherV() Operation"</a>
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
