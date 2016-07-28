<?
$subject_val = "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 11:57:51 2011" -->
<!-- isoreceived="20110504155751" -->
<!-- sent="Wed, 4 May 2011 17:57:37 +0200" -->
<!-- isosent="20110504155737" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD" -->
<!-- id="201105041757.45986.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="BANLkTimH=2WkooA=E42op3GmjwGjLJ9EBQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD<br>
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-04 11:57:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16444.php">Mark Dixon: "[OMPI users] configure: mpi-threads disabled by default"</a>
<li><strong>Previous message:</strong> <a href="16442.php">hi: "[OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<li><strong>In reply to:</strong> <a href="16442.php">hi: "[OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16457.php">hi: "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<li><strong>Reply:</strong> <a href="16457.php">hi: "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday, May 04, 2011 04:04:37 PM hi wrote:
<br>
<span class="quotelev1">&gt; Greetings !!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am observing following error messages when executing attached test
</span><br>
<span class="quotelev1">&gt; program...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; C:\test&gt;mpirun mar_f.exe
</span><br>
...
<br>
<span class="quotelev1">&gt; [vbgyor:9920] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [vbgyor:9920] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [vbgyor:9920] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev1">&gt; [vbgyor:9920] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<p>I'm not a fortran programmer but it seems to me that placing the MPI_Allreduce 
<br>
call in a subroutine like that broke the meaning of MPI_SUM and MPI_REAL in 
<br>
that scope. Adding:
<br>
<p>&nbsp;include 'mpif.h'
<br>
<p>after SUBROUTINE PAR_BLAS2(m, n, a, b, c, comm) helps.
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16443/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16444.php">Mark Dixon: "[OMPI users] configure: mpi-threads disabled by default"</a>
<li><strong>Previous message:</strong> <a href="16442.php">hi: "[OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<li><strong>In reply to:</strong> <a href="16442.php">hi: "[OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16457.php">hi: "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<li><strong>Reply:</strong> <a href="16457.php">hi: "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
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
