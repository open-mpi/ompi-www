<?
$subject_val = "Re: [OMPI users] WIEN2k compilation using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 18:11:57 2008" -->
<!-- isoreceived="20080805221157" -->
<!-- sent="Tue, 5 Aug 2008 18:11:47 -0400" -->
<!-- isosent="20080805221147" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WIEN2k compilation using openmpi" -->
<!-- id="5129FD77-6DB5-4534-BFC3-8A757A85D404_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="53204.165.91.181.170.1217969574.squirrel_at_www.physics.tamu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] WIEN2k compilation using openmpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-05 18:11:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6274.php">Dirk Eddelbuettel: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>Previous message:</strong> <a href="6272.php">R.C.Pasianot: "Re: [OMPI users] WIEN2k compilation using openmpi"</a>
<li><strong>In reply to:</strong> <a href="6269.php">Sergio Yanuen Rodriguez: "[OMPI users] WIEN2k compilation using openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know anything about wien2k, but I do notice that the link line  
<br>
of your output doesn't used mpif77 or mpif90.  Is there a reason for  
<br>
that?  Indeed, I see the following in the link line:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;... -L/usr/local/lib -lmpi
<br>
<p>But you clearly installed Open MPI to /opt/intel/linux86_64.  So that  
<br>
doesn't seem right.
<br>
<p>mpif77 and mpif90 add in all the support libraries and compiler/linker  
<br>
flags that Open MPI needs.  In general, the OMPI team recommends using  
<br>
the wrapper compilers (mpif77 and mpi90) wherever possible; they can  
<br>
greatly reduce your logistics in trying to get MPI apps to compile and  
<br>
link successfully.
<br>
<p><p><p>On Aug 5, 2008, at 4:52 PM, Sergio Yanuen Rodriguez wrote:
<br>
<p><span class="quotelev1">&gt; Dear openmpi users:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to compile wien2k in parallel on a intel core quad  
</span><br>
<span class="quotelev1">&gt; processor
</span><br>
<span class="quotelev1">&gt; with fedora 8 and 8 GB in RAM but I am getting some errors. I am  
</span><br>
<span class="quotelev1">&gt; able to
</span><br>
<span class="quotelev1">&gt; install and run the serial version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My software is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kernel version 2.6.25
</span><br>
<span class="quotelev1">&gt; gcc version 4.1.2
</span><br>
<span class="quotelev1">&gt; Intel Fortran compiler 10.1.015
</span><br>
<span class="quotelev1">&gt; Intel MKL 10.0.1.014
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.2.4
</span><br>
<span class="quotelev1">&gt; WIEN2k_08.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The compilation options are:
</span><br>
<span class="quotelev1">&gt; Serial Current settings:
</span><br>
<span class="quotelev1">&gt; O   Compiler options:        -FR -mp1 -w -prec_div -pc80 -pad -ip
</span><br>
<span class="quotelev1">&gt; -DINTEL_VML -O3 -xW
</span><br>
<span class="quotelev1">&gt; L   Linker Flags:            $(FOPT) -L/opt/intel/mkl/10.0.1.014/lib/ 
</span><br>
<span class="quotelev1">&gt; em64t
</span><br>
<span class="quotelev1">&gt; -lpthread
</span><br>
<span class="quotelev1">&gt; P   Preprocessor flags       '-DParallel'
</span><br>
<span class="quotelev1">&gt; R   R_LIB (LAPACK+BLAS):     -L/opt/intel/mkl/10.0.1.014/lib/em64t
</span><br>
<span class="quotelev1">&gt; -lmkl_intel_lp64 -lmkl_intel_thread -lmkl_core -lguide -lpthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parallel Current settings:
</span><br>
<span class="quotelev1">&gt;     RP  RP_LIB(SCALAPACK+PBLAS): -L /opt/intel/mkl/10.0.1.014/lib/ 
</span><br>
<span class="quotelev1">&gt; em64t
</span><br>
<span class="quotelev1">&gt; -lmkl_intel_lp64 -lmkl_scalapack_lp64 -lmkl_blacs_openmpi_lp64
</span><br>
<span class="quotelev1">&gt; -lmkl_sequential -lmkl_core -L/usr/local/lib -lmpi
</span><br>
<span class="quotelev1">&gt;     FP  FPOPT(par.comp.options): -FR -mp1 -w -prec_div -pc80 -pad -ip
</span><br>
<span class="quotelev1">&gt; -DINTEL_VML -traceback -I /opt/intel/linux86_64/include
</span><br>
<span class="quotelev1">&gt;     MP  MPIRUN commando        : mpirun -np _NP_ -machinefile  
</span><br>
<span class="quotelev1">&gt; _HOSTS_ _EXEC_
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The errors I am getting are in the zip file attached, together with  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; openmpi compilation files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is greatly appreciated
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sergio Y. Rodriguez
</span><br>
<span class="quotelev1">&gt; Physics Department
</span><br>
<span class="quotelev1">&gt; Texas A&amp;M University
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6274.php">Dirk Eddelbuettel: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>Previous message:</strong> <a href="6272.php">R.C.Pasianot: "Re: [OMPI users] WIEN2k compilation using openmpi"</a>
<li><strong>In reply to:</strong> <a href="6269.php">Sergio Yanuen Rodriguez: "[OMPI users] WIEN2k compilation using openmpi"</a>
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
