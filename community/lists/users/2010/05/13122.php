<?
$subject_val = "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 21 10:19:12 2010" -->
<!-- isoreceived="20100521141912" -->
<!-- sent="Fri, 21 May 2010 07:21:23 -0700" -->
<!-- isosent="20100521142123" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype" -->
<!-- id="4BF696E3.8060000_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DB5810118A97904784BECE13867C5CF670054240EE_at_MSX" -->
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
<strong>Subject:</strong> Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-21 10:21:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13123.php">Tom Rosmond: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE:	invalid datatype"</a>
<li><strong>Previous message:</strong> <a href="13121.php">Reuti: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>In reply to:</strong> <a href="13117.php">Pankatz, Klaus: "[OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13129.php">Pankatz, Klaus: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<li><strong>Reply:</strong> <a href="13129.php">Pankatz, Klaus: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pankatz, Klaus wrote:
<br>
<p><span class="quotelev1">&gt;Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;openMPI 1.4.1 seems to have another problem with my machine, or something on it. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This little program here (compiled with mpif90) startet with mpiexec -np 4 a.out produces the following output:
</span><br>
<span class="quotelev1">&gt;Suriprisingly the same thing written in C-Code (compiled with mpiCC) works without a problem.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Not so surprising since it's C code!
<br>
<p>For Fortran:
<br>
<p>MPI_INT -&gt; MPI_INTEGER
<br>
and add an ierror argument to your MPI_Bcast call (the way you have for 
<br>
MPI_Comm_rank/size).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13123.php">Tom Rosmond: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE:	invalid datatype"</a>
<li><strong>Previous message:</strong> <a href="13121.php">Reuti: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>In reply to:</strong> <a href="13117.php">Pankatz, Klaus: "[OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13129.php">Pankatz, Klaus: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<li><strong>Reply:</strong> <a href="13129.php">Pankatz, Klaus: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
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
