<?
$subject_val = "[OMPI users] What flags for configure for a single machine installation ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 12:01:23 2009" -->
<!-- isoreceived="20090604160123" -->
<!-- sent="Thu, 04 Jun 2009 18:01:29 +0200" -->
<!-- isosent="20090604160129" -->
<!-- name="DEVEL Michel" -->
<!-- email="Michel.Devel_at_[hidden]" -->
<!-- subject="[OMPI users] What flags for configure for a single machine installation ?" -->
<!-- id="4A27EFD9.2000200_at_ens2m.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] What flags for configure for a single machine installation ?<br>
<strong>From:</strong> DEVEL Michel (<em>Michel.Devel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 12:01:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9545.php">Bogdan Costescu: "Re: [OMPI users] Best way to overlap computation and transfer using MPI over TCP/Ethernet?"</a>
<li><strong>Previous message:</strong> <a href="9543.php">Jeff Squyres: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9548.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a single machine	installation ?"</a>
<li><strong>Reply:</strong> <a href="9548.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a single machine	installation ?"</a>
<li><strong>Reply:</strong> <a href="9550.php">Jeff Squyres: "Re: [OMPI users] What flags for configure for a single machineinstallation ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I still have problems with installing and using openmpi:
<br>
<p>1&#176;) In fact I just want to install openmpi on my machine (single i7 920)
<br>
to be able to develop parallel codes (using eclipse/photran/PTP) that I
<br>
will execute on a cluster later (using SGE batch queue system).
<br>
I therefore wonder what kind of configure flags I could put to have a
<br>
basic single-machine installation ?
<br>
<p>2&#176;) For GCC, &quot;./configure --prefix=/usr/local --with-sge
<br>
--enable-static&quot; worked but when I try to statically link a test code by
<br>
gfortran -m64 -O3 -fPIC -fopenmp -fbounds-check -pthread --static 
<br>
testmpirun.f  -o bin/testmpirun_gfortran_static -I/usr/local/include
<br>
-L/usr/local/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl
<br>
-lnsl -lutil -lm -ldl
<br>
It fails because the link step does not find Infiniband routines (ibv_*).
<br>
If I use dynamical link, it works but asks me for a password when I try
<br>
to do
<br>
&quot;/usr/bin/local/mpirun -np 4 bin/testmpirun_gfortran_static&quot; though I
<br>
have an a priori valid .rhosts file...
<br>
<p>3&#176;) for the intel compiler suite case
<br>
&quot;./configure --prefix=/opt/intel/Compiler/11.0/074 --with-sge
<br>
--enable-static CC='icc' CFLAGS=' -xHOST -ip -O3 -C' LDFLAGS='-xHOST -ip
<br>
-O3 -C -static-intel' AR='ar' F77='ifort' FC='ifort' FFLAGS=' -xHOST -ip
<br>
-O3 -C' FCFLAGS=' -xHOST -ip -O3 -C' CXX='icpc' CXXFLAGS=' -xHOST -ip
<br>
-O3 -C'&quot;
<br>
worked but I have the same problem with missing ibv_ * routines if I try
<br>
a static link
<br>
&quot;ifort -Bdynamic -fast -C -openmp -check noarg_temp_created 
<br>
testmpirun.f  -o bin/testmpirun_ifort_dynamic
<br>
-I/opt/intel/Compiler/11.0/074/include
<br>
-L/opt/intel/Compiler/11.0/074/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte
<br>
-lopen-pal -ldl -lnsl -lutil -lm -ldl&quot;
<br>
<p>(Remark: If I add &quot;-static&quot; to LDFLAGS in configure, it  stops during
<br>
the making of opal_wrapper).
<br>
<p>If I use dynamic link, I get the executable but then
<br>
/opt/intel/Compiler/11.0/074/bin/mpirun -np 4
<br>
../../bin/testmpirun_ifort_dynamic
<br>
gives
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 16664 on node mn2s-devel
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
2 total processes killed (some possibly by mpirun during cleanup)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9545.php">Bogdan Costescu: "Re: [OMPI users] Best way to overlap computation and transfer using MPI over TCP/Ethernet?"</a>
<li><strong>Previous message:</strong> <a href="9543.php">Jeff Squyres: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9548.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a single machine	installation ?"</a>
<li><strong>Reply:</strong> <a href="9548.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a single machine	installation ?"</a>
<li><strong>Reply:</strong> <a href="9550.php">Jeff Squyres: "Re: [OMPI users] What flags for configure for a single machineinstallation ?"</a>
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
