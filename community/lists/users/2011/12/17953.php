<?
$subject_val = "Re: [OMPI users] openmpi - gfortran and ifort conflict";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 10:48:36 2011" -->
<!-- isoreceived="20111214154836" -->
<!-- sent="Wed, 14 Dec 2011 10:48:23 -0500" -->
<!-- isosent="20111214154823" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi - gfortran and ifort conflict" -->
<!-- id="4EE8C547.5040806_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 10:48:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17954.php">Rolf vandeVaart: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>Previous message:</strong> <a href="17952.php">Matthieu Brucher: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>In reply to:</strong> <a href="17950.php">Micah Sklut: "[OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17957.php">Gustavo Correa: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/14/2011 9:49 AM, Micah Sklut wrote:
<br>
<p><span class="quotelev1">&gt; I have installed openmpi for gfortran, but am now attempting to install
</span><br>
<span class="quotelev1">&gt; openmpi as ifort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have run the following configuration:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi/intel CC=gcc CXX=g++ F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The install works successfully, but when I run
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/intel/bin/mpif90, it runs as gfortran.
</span><br>
<span class="quotelev1">&gt; Oddly, when I am user: root, the same mpif90 runs as ifort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone please alleviate my confusion as to why I mpif90 is not
</span><br>
<span class="quotelev1">&gt; running as ifort?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You might check your configure logs to be certain that ifort was found 
<br>
before gfortran at all stages (did you set paths according to sourcing 
<br>
the ifortvars or compilervars scripts which come with ifort?).
<br>
'which mpif90' should tell you whether you are executing the one from 
<br>
your installation.  You may have another mpif90 coming first on your 
<br>
PATH.  You won't be able to override your PATH and LD_LIBRARY_PATH 
<br>
correctly simply by specifying absolute path to mpif90.
<br>
<p><p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17954.php">Rolf vandeVaart: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>Previous message:</strong> <a href="17952.php">Matthieu Brucher: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>In reply to:</strong> <a href="17950.php">Micah Sklut: "[OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17957.php">Gustavo Correa: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
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
