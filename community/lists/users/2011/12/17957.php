<?
$subject_val = "Re: [OMPI users] openmpi - gfortran and ifort conflict";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 11:05:55 2011" -->
<!-- isoreceived="20111214160555" -->
<!-- sent="Wed, 14 Dec 2011 11:05:50 -0500" -->
<!-- isosent="20111214160550" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi - gfortran and ifort conflict" -->
<!-- id="EE05F801-9692-41CF-AFB3-F76A856B4FBD_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKRSGb8OD9-zk1HRbDp4pRH1J4=MmyCZ_Qqo_OyDQv++QmwiSw_at_mail.gmail.com" -->
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
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 11:05:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17958.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17956.php">Dmitry N. Mikushin: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>In reply to:</strong> <a href="17950.php">Micah Sklut: "[OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17958.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17958.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Micah
<br>
<p>Is  ifort in your PATH?
<br>
If not, the OpenMPI configure script will use any fortran compiler it finds first, which may be gfortran.
<br>
You need to run the Intel compiler startup script before you run the OpenMPI configure.
<br>
The easy thing to do is to source the Intel script inside your .profile/.bashrc or .[t]cshrc file.
<br>
I hope this helps,
<br>
<p>Gus Correa
<br>
<p>On Dec 14, 2011, at 9:49 AM, Micah Sklut wrote:
<br>
<p><span class="quotelev1">&gt; Hi All, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed openmpi for gfortran, but am now attempting to install openmpi as ifort. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have run the following configuration: 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi/intel CC=gcc CXX=g++ F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The install works successfully, but when I run /opt/openmpi/intel/bin/mpif90, it runs as gfortran. 
</span><br>
<span class="quotelev1">&gt; Oddly, when I am user: root, the same mpif90 runs as ifort. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone please alleviate my confusion as to why I mpif90 is not running as ifort? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your suggestions, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Micah
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="17958.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17956.php">Dmitry N. Mikushin: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>In reply to:</strong> <a href="17950.php">Micah Sklut: "[OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17958.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17958.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
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
