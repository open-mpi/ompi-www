<?
$subject_val = "Re: [OMPI users] What flags for configure for a single machine	installation ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 20:18:01 2009" -->
<!-- isoreceived="20090605001801" -->
<!-- sent="Fri, 05 Jun 2009 10:17:49 +1000" -->
<!-- isosent="20090605001749" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What flags for configure for a single machine	installation ?" -->
<!-- id="1244161069.27569.51.camel_at_rscpc28.anu.edu.au" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4A27EFD9.2000200_at_ens2m.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] What flags for configure for a single machine	installation ?<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 20:17:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9549.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>Previous message:</strong> <a href="9547.php">Lars Andersson: "[OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>In reply to:</strong> <a href="9544.php">DEVEL Michel: "[OMPI users] What flags for configure for a single machine installation ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9553.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<li><strong>Reply:</strong> <a href="9553.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there any compelling reason you're not using the wrappers
<br>
mpif77/mpif90?
<br>
<p><p>On Thu, 2009-06-04 at 18:01 +0200, DEVEL Michel wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I still have problems with installing and using openmpi:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1&#194;&#176;) In fact I just want to install openmpi on my machine (single i7 920)
</span><br>
<span class="quotelev1">&gt; to be able to develop parallel codes (using eclipse/photran/PTP) that I
</span><br>
<span class="quotelev1">&gt; will execute on a cluster later (using SGE batch queue system).
</span><br>
<span class="quotelev1">&gt; I therefore wonder what kind of configure flags I could put to have a
</span><br>
<span class="quotelev1">&gt; basic single-machine installation ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2&#194;&#176;) For GCC, &quot;./configure --prefix=/usr/local --with-sge
</span><br>
<span class="quotelev1">&gt; --enable-static&quot; worked but when I try to statically link a test code by
</span><br>
<span class="quotelev1">&gt; gfortran -m64 -O3 -fPIC -fopenmp -fbounds-check -pthread --static 
</span><br>
<span class="quotelev1">&gt; testmpirun.f  -o bin/testmpirun_gfortran_static -I/usr/local/include
</span><br>
<span class="quotelev1">&gt; -L/usr/local/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl
</span><br>
<span class="quotelev1">&gt; -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt; It fails because the link step does not find Infiniband routines (ibv_*).
</span><br>
<span class="quotelev1">&gt; If I use dynamical link, it works but asks me for a password when I try
</span><br>
<span class="quotelev1">&gt; to do
</span><br>
<span class="quotelev1">&gt; &quot;/usr/bin/local/mpirun -np 4 bin/testmpirun_gfortran_static&quot; though I
</span><br>
<span class="quotelev1">&gt; have an a priori valid .rhosts file...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3&#194;&#176;) for the intel compiler suite case
</span><br>
<span class="quotelev1">&gt; &quot;./configure --prefix=/opt/intel/Compiler/11.0/074 --with-sge
</span><br>
<span class="quotelev1">&gt; --enable-static CC='icc' CFLAGS=' -xHOST -ip -O3 -C' LDFLAGS='-xHOST -ip
</span><br>
<span class="quotelev1">&gt; -O3 -C -static-intel' AR='ar' F77='ifort' FC='ifort' FFLAGS=' -xHOST -ip
</span><br>
<span class="quotelev1">&gt; -O3 -C' FCFLAGS=' -xHOST -ip -O3 -C' CXX='icpc' CXXFLAGS=' -xHOST -ip
</span><br>
<span class="quotelev1">&gt; -O3 -C'&quot;
</span><br>
<span class="quotelev1">&gt; worked but I have the same problem with missing ibv_ * routines if I try
</span><br>
<span class="quotelev1">&gt; a static link
</span><br>
<span class="quotelev1">&gt; &quot;ifort -Bdynamic -fast -C -openmp -check noarg_temp_created 
</span><br>
<span class="quotelev1">&gt; testmpirun.f  -o bin/testmpirun_ifort_dynamic
</span><br>
<span class="quotelev1">&gt; -I/opt/intel/Compiler/11.0/074/include
</span><br>
<span class="quotelev1">&gt; -L/opt/intel/Compiler/11.0/074/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte
</span><br>
<span class="quotelev1">&gt; -lopen-pal -ldl -lnsl -lutil -lm -ldl&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Remark: If I add &quot;-static&quot; to LDFLAGS in configure, it  stops during
</span><br>
<span class="quotelev1">&gt; the making of opal_wrapper).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I use dynamic link, I get the executable but then
</span><br>
<span class="quotelev1">&gt; /opt/intel/Compiler/11.0/074/bin/mpirun -np 4
</span><br>
<span class="quotelev1">&gt; ../../bin/testmpirun_ifort_dynamic
</span><br>
<span class="quotelev1">&gt; gives
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 16664 on node mn2s-devel
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="9549.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>Previous message:</strong> <a href="9547.php">Lars Andersson: "[OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>In reply to:</strong> <a href="9544.php">DEVEL Michel: "[OMPI users] What flags for configure for a single machine installation ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9553.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<li><strong>Reply:</strong> <a href="9553.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
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
