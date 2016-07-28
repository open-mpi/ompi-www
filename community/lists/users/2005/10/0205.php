<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 18 09:48:48 2005" -->
<!-- isoreceived="20051018144848" -->
<!-- sent="Tue, 18 Oct 2005 08:48:45 -0600" -->
<!-- isosent="20051018144845" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Hpl Bench mark and Openmpi rc3 (Jeff Squyres)" -->
<!-- id="43550B4D.6080509_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43544EA9.80501_at_sympatico.ca" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-18 09:48:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0206.php">Parrott, Chris: "Re: [O-MPI users] OpenMPI hang issue"</a>
<li><strong>Previous message:</strong> <a href="0204.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI hang issue"</a>
<li><strong>In reply to:</strong> <a href="0203.php">Allan Menezes: "Re: [O-MPI users] Hpl Bench mark and Openmpi rc3 (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;    I installed two versions of open mpi slightly different. One on 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi or I would get the gfortran error and the other in 
</span><br>
<span class="quotelev1">&gt; /home/allan/openmpi
</span><br>
<span class="quotelev1">&gt; However I do not think that is the problem as the path names are 
</span><br>
<span class="quotelev1">&gt; specified in the bahrc and bash_profile files of the /home/allan directory.
</span><br>
<span class="quotelev1">&gt; I also log into user allan who is not a superuser.On running the open 
</span><br>
<span class="quotelev1">&gt; mpi with HPL I use the following command line:
</span><br>
<span class="quotelev1">&gt; a1&gt; mpirun -mca pls_rsh_orted /home/allan/openmpi/bin/orted -hostfile aa 
</span><br>
<span class="quotelev1">&gt; -np 16 ./xhpl
</span><br>
<span class="quotelev1">&gt; from the directory where xhpl resides such as /homer/open/bench and I 
</span><br>
<span class="quotelev1">&gt; use the -mca command pls_rsh_orted as it otherwise comes up with an 
</span><br>
<span class="quotelev1">&gt; error that it cannot find the ORTED daemon on machines a1, a2 etc. That 
</span><br>
<span class="quotelev1">&gt; is probaly aconfiguration error. However the commands above and the 
</span><br>
<span class="quotelev1">&gt; setup described works fine and there are no errors in the HPL.out file, 
</span><br>
<span class="quotelev1">&gt; except that it is slow.
</span><br>
<span class="quotelev1">&gt; I use an atlas BLAS library for creating xhpl from hpl.tar.gz. The make 
</span><br>
<span class="quotelev1">&gt; file for hpl uses the atlas libs and the open mpi mpicc compiler for 
</span><br>
<span class="quotelev1">&gt; both compilation and linking. and I have zeroed out the MPI macro paths 
</span><br>
<span class="quotelev1">&gt; in Make.open(that's what I reanmed the hpl makefile) for make arch=open 
</span><br>
<span class="quotelev1">&gt; in hpl directory. Please find attached the ompi_info -all file as 
</span><br>
<span class="quotelev1">&gt; requested. Thank you very much:
</span><br>
<span class="quotelev1">&gt; Allan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>We've done linpack runs recently w/ Infiniband, which result in performance
<br>
comparable to mvapich, but not w/ the tcp port. Can you try running w/ an
<br>
earlier version, specify on the command line:
<br>
<p>-mca pml teg
<br>
<p>I'm interested in seeing if there is any performance difference.
<br>
<p>Thanks,
<br>
Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0206.php">Parrott, Chris: "Re: [O-MPI users] OpenMPI hang issue"</a>
<li><strong>Previous message:</strong> <a href="0204.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI hang issue"</a>
<li><strong>In reply to:</strong> <a href="0203.php">Allan Menezes: "Re: [O-MPI users] Hpl Bench mark and Openmpi rc3 (Jeff Squyres)"</a>
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
