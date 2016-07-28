<?
$subject_val = "Re: [OMPI users] What flags for configure for a single machineinstallation ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 21:23:36 2009" -->
<!-- isoreceived="20090605012336" -->
<!-- sent="Thu, 4 Jun 2009 21:23:28 -0400" -->
<!-- isosent="20090605012328" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What flags for configure for a single machineinstallation ?" -->
<!-- id="3E9E8D4F-D570-4161-BE1A-F80CDA42D6EC_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI users] What flags for configure for a single machineinstallation ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 21:23:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9551.php">jody: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>Previous message:</strong> <a href="9549.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>In reply to:</strong> <a href="9544.php">DEVEL Michel: "[OMPI users] What flags for configure for a single machine installation ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 4, 2009, at 12:01 PM, DEVEL Michel wrote:
<br>
<p><span class="quotelev1">&gt; 1&#176;) In fact I just want to install openmpi on my machine (single i7  
</span><br>
<span class="quotelev1">&gt; 920)
</span><br>
<span class="quotelev1">&gt; to be able to develop parallel codes (using eclipse/photran/PTP)  
</span><br>
<span class="quotelev1">&gt; that I
</span><br>
<span class="quotelev1">&gt; will execute on a cluster later (using SGE batch queue system).
</span><br>
<span class="quotelev1">&gt; I therefore wonder what kind of configure flags I could put to have a
</span><br>
<span class="quotelev1">&gt; basic single-machine installation ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Nope, you shouldn't need anything special.
<br>
<p><span class="quotelev1">&gt; 2&#176;) For GCC, &quot;./configure --prefix=/usr/local --with-sge
</span><br>
<span class="quotelev1">&gt; --enable-static&quot; worked but when I try to statically link a test  
</span><br>
<span class="quotelev1">&gt; code by
</span><br>
<span class="quotelev1">&gt; gfortran -m64 -O3 -fPIC -fopenmp -fbounds-check -pthread --static
</span><br>
<span class="quotelev1">&gt; testmpirun.f  -o bin/testmpirun_gfortran_static -I/usr/local/include
</span><br>
<span class="quotelev1">&gt; -L/usr/local/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl
</span><br>
<span class="quotelev1">&gt; -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt; It fails because the link step does not find Infiniband routines  
</span><br>
<span class="quotelev1">&gt; (ibv_*).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Per the other thread, static linking with OpenFabrics is not for the  
<br>
meek.  See the OMPI FAQ in the OpenFabrics section for a question on  
<br>
exactly this issue.
<br>
<p><span class="quotelev1">&gt; If I use dynamical link, it works but asks me for a password when I  
</span><br>
<span class="quotelev1">&gt; try
</span><br>
<span class="quotelev1">&gt; to do
</span><br>
<span class="quotelev1">&gt; &quot;/usr/bin/local/mpirun -np 4 bin/testmpirun_gfortran_static&quot; though I
</span><br>
<span class="quotelev1">&gt; have an a priori valid .rhosts file...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Also per the other thread, this is not a static linking/dynamic  
<br>
linking issue.
<br>
<p><span class="quotelev1">&gt; 3&#176;) for the intel compiler suite case
</span><br>
<span class="quotelev1">&gt; &quot;./configure --prefix=/opt/intel/Compiler/11.0/074 --with-sge
</span><br>
<span class="quotelev1">&gt; --enable-static CC='icc' CFLAGS=' -xHOST -ip -O3 -C' LDFLAGS='-xHOST  
</span><br>
<span class="quotelev1">&gt; -ip
</span><br>
<span class="quotelev1">&gt; -O3 -C -static-intel' AR='ar' F77='ifort' FC='ifort' FFLAGS=' -xHOST  
</span><br>
<span class="quotelev1">&gt; -ip
</span><br>
<span class="quotelev1">&gt; -O3 -C' FCFLAGS=' -xHOST -ip -O3 -C' CXX='icpc' CXXFLAGS=' -xHOST -ip
</span><br>
<span class="quotelev1">&gt; -O3 -C'&quot;
</span><br>
<span class="quotelev1">&gt; worked but I have the same problem with missing ibv_ * routines if I  
</span><br>
<span class="quotelev1">&gt; try
</span><br>
<span class="quotelev1">&gt; a static link
</span><br>
<span class="quotelev1">&gt; &quot;ifort -Bdynamic -fast -C -openmp -check noarg_temp_created
</span><br>
<span class="quotelev1">&gt; testmpirun.f  -o bin/testmpirun_ifort_dynamic
</span><br>
<span class="quotelev1">&gt; -I/opt/intel/Compiler/11.0/074/include
</span><br>
<span class="quotelev1">&gt; -L/opt/intel/Compiler/11.0/074/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen- 
</span><br>
<span class="quotelev1">&gt; rte
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
<p>Is there a reason you need static linking?  It should be tremendously  
<br>
simpler to get dynamic linking working.
<br>
<p><span class="quotelev1">&gt; If I use dynamic link, I get the executable but then
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
<p><p>What is your MPI application?  Are you able to run simple MPI  
<br>
applications, such as &quot;hello world&quot; and &quot;ring&quot;?  (these are in the  
<br>
examples/ directory in the OMPI tarball)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9551.php">jody: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>Previous message:</strong> <a href="9549.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>In reply to:</strong> <a href="9544.php">DEVEL Michel: "[OMPI users] What flags for configure for a single machine installation ?"</a>
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
