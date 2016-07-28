<?
$subject_val = "Re: [OMPI users] Missing F90 modules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 13:51:18 2008" -->
<!-- isoreceived="20080730175118" -->
<!-- sent="Wed, 30 Jul 2008 13:50:12 -0400" -->
<!-- isosent="20080730175012" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing F90 modules" -->
<!-- id="6DDCF651-ECB8-42FA-BA27-4A86B44ECF6D_at_umich.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 13:50:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6223.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6221.php">Scott Beardsley: "[OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6221.php">Scott Beardsley: "[OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6223.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6223.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On all MPI's I have always used there was only MPI
<br>
<p>use mpi;
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Jul 30, 2008, at 1:45 PM, Scott Beardsley wrote:
<br>
<span class="quotelev1">&gt; I'm attempting to move to OpenMPI from another MPICH-derived  
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
<span class="quotelev1">&gt; libexecdir=/usr/mpi/pathscale/openmpi-1.2.6/libexec -- 
</span><br>
<span class="quotelev1">&gt; localstatedir=/var --sharedstatedir=/usr/mpi/pathscale/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.6/com --mandir=/usr/mpi/pathscale/openmpi-1.2.6/share/ 
</span><br>
<span class="quotelev1">&gt; man --infodir=/usr/share/info --with-openib=/usr --with-openib- 
</span><br>
<span class="quotelev1">&gt; libdir=/usr/lib64 CC=pathcc CXX=pathCC F77=pathf90 FC=pathf90 -- 
</span><br>
<span class="quotelev1">&gt; with-psm-dir=/usr --enable-mpirun-prefix-by-default --with-mpi-f90- 
</span><br>
<span class="quotelev1">&gt; size=large
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like there is a single MPI.mod generated upon compilation  
</span><br>
<span class="quotelev1">&gt; and installation. Is this normal? I have a user complaining that  
</span><br>
<span class="quotelev1">&gt; MPI1.mod, MPI2.mod, and the f90base directory among others are  
</span><br>
<span class="quotelev1">&gt; missing (and thus the installation is incomplete). Are these  
</span><br>
<span class="quotelev1">&gt; modules provided by OpenMPI?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6223.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6221.php">Scott Beardsley: "[OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6221.php">Scott Beardsley: "[OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6223.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6223.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
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
