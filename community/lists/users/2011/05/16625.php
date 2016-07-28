<?
$subject_val = "Re: [OMPI users] MPI_Allgather with derived type crash";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 25 13:02:59 2011" -->
<!-- isoreceived="20110525170259" -->
<!-- sent="Wed, 25 May 2011 19:02:47 +0200" -->
<!-- isosent="20110525170247" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allgather with derived type crash" -->
<!-- id="201105251902.55470.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="4ddce4f4.0e7d0e0a.4f7f.127f_at_mx.google.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allgather with derived type crash<br>
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-25 13:02:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16626.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Previous message:</strong> <a href="16624.php">George Bosilca: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>In reply to:</strong> <a href="16621.php">Andrew Senin: "[OMPI users] MPI_Allgather with derived type crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16627.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Reply:</strong> <a href="16627.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday, May 25, 2011 01:16:04 PM Andrew Senin wrote:
<br>
<span class="quotelev1">&gt; Hello list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an application which uses MPI_Allgather with derived types. It works
</span><br>
<span class="quotelev1">&gt; correctly with mpich2 and mvapich2. However it crashes periodically with
</span><br>
<span class="quotelev1">&gt; openmpi2. After investigation I found that the crash takes place when I use
</span><br>
<span class="quotelev1">&gt; derived datatypes with MPI_AllGather and number of ranks greater than 8.
</span><br>
<p>Would 8 happen to be the number of cores you have per node so what we're 
<br>
seeing is: single node OK, multi node FAIL?
<br>
<p>If so what kind of inter node network are you (trying to) use(ing)?
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16625/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16626.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Previous message:</strong> <a href="16624.php">George Bosilca: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>In reply to:</strong> <a href="16621.php">Andrew Senin: "[OMPI users] MPI_Allgather with derived type crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16627.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Reply:</strong> <a href="16627.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
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
