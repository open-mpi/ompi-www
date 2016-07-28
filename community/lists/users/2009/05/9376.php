<?
$subject_val = "Re: [OMPI users] Problem installing Dalton with OpenMPI overPelicanHPC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 21:15:24 2009" -->
<!-- isoreceived="20090519011524" -->
<!-- sent="Mon, 18 May 2009 21:15:18 -0400" -->
<!-- isosent="20090519011518" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem installing Dalton with OpenMPI overPelicanHPC" -->
<!-- id="9A55ABA7-EC16-4526-9B51-2260205526FB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="974654.11212.qm_at_web111308.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem installing Dalton with OpenMPI overPelicanHPC<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 21:15:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9377.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Previous message:</strong> <a href="9375.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>In reply to:</strong> <a href="9351.php">Silviu Groza: "Re: [OMPI users] Problem installing Dalton with OpenMPI over PelicanHPC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 15, 2009, at 1:23 AM, Silviu Groza wrote:
<br>
<p><span class="quotelev1">&gt; I still not solved these errors.
</span><br>
<span class="quotelev1">&gt; I need help in order to install Dalton quantum with OpenMPI.
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------&gt; Linking sequential dalton.x ...
</span><br>
<span class="quotelev1">&gt; mpif77.openmpi -march=x86-64 -O3 -ffast-math -fexpensive- 
</span><br>
<span class="quotelev1">&gt; optimizations -funroll-loops -fno-range-check -fsecond-underscore \
</span><br>
<p>I notice the &quot;-fsecond-underscore&quot; option here; do you know who is  
<br>
insertting this option?  If I had to guess, I'd say that that is  
<br>
forcing the Fortran linker to change its native name mangling scheme,  
<br>
and it therefore does not match the Fortran name mangling scheme that  
<br>
Open MPI was created with...?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -o /root/Fig/dalton-2.0/bin/dalton.x abacus/dalton.o cc/ 
</span><br>
<span class="quotelev1">&gt; crayio.o abacus/linux_mem_allo.o \
</span><br>
<span class="quotelev1">&gt;         abacus/herpar.o eri/eri2par.o amfi/amfi.o amfi/symtra.o gp/ 
</span><br>
<span class="quotelev1">&gt; mpi_dummy.o -Labacus -labacus -Lrsp -lrsp -Lsirius -lsirius -labacus  
</span><br>
<span class="quotelev1">&gt; -Leri -leri -Ldensfit -ldensfit -Lcc  -lcc -Ldft -ldft -Lgp -lgp - 
</span><br>
<span class="quotelev1">&gt; Lpdpack -lpdpack -L/usr/lib -llapack -lblas
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(general.o): In function `mpi_sync_data':
</span><br>
<p>What happens if you copy/paste this entire &quot;mpif77.openmpi&quot; command  
<br>
line and add &quot;--showme&quot; to the end of it?  If you chase down the  
<br>
libmpi.so that is used in that command line and run nm on it, do you  
<br>
see ompi_mpi_comm_world (and friends) listed?
<br>
<p>I'm afraid that I'm not familiar with Dalton and PelicanHPC -- are all  
<br>
of the support libraries listed above part of Darlton or Pelican HPC?   
<br>
Were they all compiled with Open MPI?  More specifically: is it  
<br>
possible that they were compiled with a different MPI implementation?
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
<li><strong>Next message:</strong> <a href="9377.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Previous message:</strong> <a href="9375.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>In reply to:</strong> <a href="9351.php">Silviu Groza: "Re: [OMPI users] Problem installing Dalton with OpenMPI over PelicanHPC"</a>
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
