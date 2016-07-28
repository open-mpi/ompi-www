<?
$subject_val = "Re: [OMPI users] OpenMPI launch problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 17:27:25 2011" -->
<!-- isoreceived="20110614212725" -->
<!-- sent="Tue, 14 Jun 2011 17:27:16 -0400" -->
<!-- isosent="20110614212716" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI launch problem" -->
<!-- id="4DF7D234.3070001_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201106142303.26523.giacomo_rossi_1982_at_libero.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI launch problem<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-14 17:27:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16723.php">Ole Kliemann: "[OMPI users] Passive target performance (was: Deadlock with barrier und RMA)"</a>
<li><strong>Previous message:</strong> <a href="16721.php">Giacomo Rossi: "[OMPI users] OpenMPI launch problem"</a>
<li><strong>In reply to:</strong> <a href="16721.php">Giacomo Rossi: "[OMPI users] OpenMPI launch problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Giacomo
<br>
<p>Save yourself from a lot of headaches and wasted time.
<br>
Download the OpenMPI 1.4.3 source tarball, install it, and use it.
<br>
All it takes is 'configure ...', 'make', and 'make install'.
<br>
<p>In the configure step you specify your favorite compilers and
<br>
the directory prefix where you want OpenMPI to be installed.
<br>
See the README file and the FAQ for the syntax details of 'configure'.
<br>
<p>Then recompile openFOAM or whatever other MPI
<br>
program with the new OpenMPI.
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<p>Giacomo Rossi wrote:
<br>
<span class="quotelev1">&gt; Hello, I try to compile a program qith mpif90 but I receive the following 
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Cannot open configuration file 
</span><br>
<span class="quotelev1">&gt; /opt/OpenFOAM/ThirdParty-1.7.1/platforms/linux64Gcc/openmpi-1.4.1/share/openmpi/mpif90-
</span><br>
<span class="quotelev1">&gt; wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; Error parsing data file mpif90: Not found&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've installed openmpi from archlinux repository and then I've compiled from 
</span><br>
<span class="quotelev1">&gt; source openfoam. Now I uninstall openfoam but I get this error again... How 
</span><br>
<span class="quotelev1">&gt; can I change the link for the correct wrapper (located in /usr/share/openmpi)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And how can I change from gfortran to ifort compiler? Can I just modify the 
</span><br>
<span class="quotelev1">&gt; mpif90-wrapper-data.txt?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Giacomo Rossi, Space Engineer, PhD Student
</span><br>
<span class="quotelev1">&gt; University of Rome - Sapienza
</span><br>
<span class="quotelev1">&gt; Department of Mechanical and Aerospace Engineering
</span><br>
<span class="quotelev1">&gt; Via Eudossiana, 18 - 00184 Rome, Italy
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
<li><strong>Next message:</strong> <a href="16723.php">Ole Kliemann: "[OMPI users] Passive target performance (was: Deadlock with barrier und RMA)"</a>
<li><strong>Previous message:</strong> <a href="16721.php">Giacomo Rossi: "[OMPI users] OpenMPI launch problem"</a>
<li><strong>In reply to:</strong> <a href="16721.php">Giacomo Rossi: "[OMPI users] OpenMPI launch problem"</a>
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
