<?
$subject_val = "Re: [OMPI users] Missing F90 modules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 16:23:15 2008" -->
<!-- isoreceived="20080730202315" -->
<!-- sent="Wed, 30 Jul 2008 16:23:08 -0400" -->
<!-- isosent="20080730202308" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing F90 modules" -->
<!-- id="2718CF70-82EE-4B02-9094-1F5D45371D8F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4890A8AC.2070009_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Missing F90 modules<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 16:23:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6225.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6223.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6221.php">Scott Beardsley: "[OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6230.php">Ashley Pittman: "Re: [OMPI users] Missing F90 modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is correct; Open MPI only generates MPI.mod so that you can &quot;use  
<br>
mpi&quot; in your Fortran app.
<br>
<p>I'm not sure that MPI1.mod and MPI2.mod and f90base are -- perhaps  
<br>
those are somehow specific artifacts of the other MPI implementation,  
<br>
and/or artifacts of the Fortran compiler...?
<br>
<p><p>On Jul 30, 2008, at 1:45 PM, Scott Beardsley wrote:
<br>
<p><span class="quotelev1">&gt; I'm attempting to move to OpenMPI from another MPICH-derived  
</span><br>
<span class="quotelev1">&gt; implementation. I compiled openmpi 1.2.6 using the following  
</span><br>
<span class="quotelev1">&gt; configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --build=x86_64-redhat-linux-gnu --host=x86_64-redhat- 
</span><br>
<span class="quotelev1">&gt; linux-gnu --target=x86_64-redhat-linux-gnu --program-prefix= -- 
</span><br>
<span class="quotelev1">&gt; prefix=/usr/mpi/pathscale/openmpi-1.2.6 --exec-prefix=/usr/mpi/ 
</span><br>
<span class="quotelev1">&gt; pathscale/openmpi-1.2.6 --bindir=/usr/mpi/pathscale/openmpi-1.2.6/ 
</span><br>
<span class="quotelev1">&gt; bin --sbindir=/usr/mpi/pathscale/openmpi-1.2.6/sbin --sysconfdir=/ 
</span><br>
<span class="quotelev1">&gt; usr/mpi/pathscale/openmpi-1.2.6/etc --datadir=/usr/mpi/pathscale/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.6/share --includedir=/usr/mpi/pathscale/openmpi-1.2.6/ 
</span><br>
<span class="quotelev1">&gt; include --libdir=/usr/mpi/pathscale/openmpi-1.2.6/lib64 -- 
</span><br>
<span class="quotelev1">&gt; libexecdir=/usr/mpi/pathscale/openmpi-1.2.6/libexec --localstatedir=/ 
</span><br>
<span class="quotelev1">&gt; var --sharedstatedir=/usr/mpi/pathscale/openmpi-1.2.6/com --mandir=/ 
</span><br>
<span class="quotelev1">&gt; usr/mpi/pathscale/openmpi-1.2.6/share/man --infodir=/usr/share/info  
</span><br>
<span class="quotelev1">&gt; --with-openib=/usr --with-openib-libdir=/usr/lib64 CC=pathcc  
</span><br>
<span class="quotelev1">&gt; CXX=pathCC F77=pathf90 FC=pathf90 --with-psm-dir=/usr --enable- 
</span><br>
<span class="quotelev1">&gt; mpirun-prefix-by-default --with-mpi-f90-size=large
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like there is a single MPI.mod generated upon compilation  
</span><br>
<span class="quotelev1">&gt; and installation. Is this normal? I have a user complaining that  
</span><br>
<span class="quotelev1">&gt; MPI1.mod, MPI2.mod, and the f90base directory among others are  
</span><br>
<span class="quotelev1">&gt; missing (and thus the installation is incomplete). Are these modules  
</span><br>
<span class="quotelev1">&gt; provided by OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see in the configure help that the f90 bindings are enabled by  
</span><br>
<span class="quotelev1">&gt; default so I didn't add the &quot;--enable-mpi-f90&quot; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scot
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="6225.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6223.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6221.php">Scott Beardsley: "[OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6230.php">Ashley Pittman: "Re: [OMPI users] Missing F90 modules"</a>
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
