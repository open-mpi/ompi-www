<?
$subject_val = "Re: [OMPI users] openmpi - gfortran and ifort conflict";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 15:24:21 2011" -->
<!-- isoreceived="20111214202421" -->
<!-- sent="Wed, 14 Dec 2011 15:24:17 -0500" -->
<!-- isosent="20111214202417" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi - gfortran and ifort conflict" -->
<!-- id="4EE905F1.5020309_at_ias.edu" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 15:24:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17974.php">Sabela Ramos Garea: "[OMPI users] MPI 2 support in sm btl"</a>
<li><strong>Previous message:</strong> <a href="17972.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17965.php">Fernanda Oliveira: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17975.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17975.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/14/2011 01:20 PM, Fernanda Oliveira wrote:
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
<p>Those environment variables are for Intel MPI.  For OpenMPI, the
<br>
equivalent variables would be OMPI_CC, OMPI_CXX, OMPI_F77, and OMPI_FC,
<br>
respectively.
<br>
<p><pre>
--
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17974.php">Sabela Ramos Garea: "[OMPI users] MPI 2 support in sm btl"</a>
<li><strong>Previous message:</strong> <a href="17972.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17965.php">Fernanda Oliveira: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17975.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17975.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
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
