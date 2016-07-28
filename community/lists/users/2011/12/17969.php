<?
$subject_val = "Re: [OMPI users] openmpi - gfortran and ifort conflict";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 15:05:44 2011" -->
<!-- isoreceived="20111214200544" -->
<!-- sent="Wed, 14 Dec 2011 15:05:34 -0500" -->
<!-- isosent="20111214200534" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi - gfortran and ifort conflict" -->
<!-- id="4EE9018E.3080402_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAASfj3SMjO-aSzRZ_UmTRYhpD0vj7KGbyWRiZjYMStu-rbidqQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi - gfortran and ifort conflict<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 15:05:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17970.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17968.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>In reply to:</strong> <a href="17965.php">Fernanda Oliveira: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17973.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/14/2011 1:20 PM, Fernanda Oliveira wrote:
<br>
<span class="quotelev1">&gt; Hi Micah,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not know if it is exactly what you need but I know that there are
</span><br>
<span class="quotelev1">&gt; environment variables to use with intel mpi. They are: I_MPI_CC,
</span><br>
<span class="quotelev1">&gt; I_MPI_CXX, I_MPI_F77, I_MPI_F90. So, you can set this using 'export'
</span><br>
<span class="quotelev1">&gt; for bash, for instance or directly when you run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use in my bashrc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export I_MPI_CC=icc
</span><br>
<span class="quotelev1">&gt; export I_MPI_CXX=icpc
</span><br>
<span class="quotelev1">&gt; export I_MPI_F77=ifort
</span><br>
<span class="quotelev1">&gt; export I_MPI_F90=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if it helps.
</span><br>
<span class="quotelev1">&gt; Fernanda Oliveira
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I didn't see any indication that Intel MPI was in play here.  Of course, 
<br>
that's one of the first thoughts, as under Intel MPI,
<br>
mpif90 uses gfortran
<br>
mpiifort uses ifort
<br>
mpicc uses gcc
<br>
mpiCC uses g++
<br>
mpiicc uses icc
<br>
mpiicpc uses icpc
<br>
and all the Intel compilers use g++ to find headers and libraries.
<br>
The advice to try 'which mpif90' would show whether you fell into this 
<br>
bunker.
<br>
If you use Intel cluster checker, you will see noncompliance if anyone's 
<br>
MPI is on the default paths.  You must set paths explicitly according to 
<br>
the MPI you want.  Admittedly, that tool didn't gain a high level of 
<br>
adoption.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17970.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17968.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>In reply to:</strong> <a href="17965.php">Fernanda Oliveira: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17973.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
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
