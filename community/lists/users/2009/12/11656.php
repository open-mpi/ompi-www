<?
$subject_val = "Re: [OMPI users] Running error after upgrading from OpenMPI 1.27 to 1.32";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 29 19:51:34 2009" -->
<!-- isoreceived="20091230005134" -->
<!-- sent="Tue, 29 Dec 2009 19:51:25 -0500" -->
<!-- isosent="20091230005125" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running error after upgrading from OpenMPI 1.27 to 1.32" -->
<!-- id="4B3AA40D.5010008_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B3A95D5.7070109_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running error after upgrading from OpenMPI 1.27 to 1.32<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-29 19:51:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11657.php">ilya zelenchuk: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="11655.php">Galaxia: "[OMPI users] Running error after upgrading from OpenMPI 1.27 to 1.32"</a>
<li><strong>In reply to:</strong> <a href="11655.php">Galaxia: "[OMPI users] Running error after upgrading from OpenMPI 1.27 to 1.32"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Galaxia
<br>
<p>Try:
<br>
<p>mpirun -mca btl ^openib -np 2 hello_world
<br>
<p>This should turn off openib at runtime.
<br>
<p>A better alternative is to download the OpenMPI tarball and
<br>
build it from source.
<br>
It will only build support to the hardware you have.
<br>
If you do so, use a non-standard installation directory.
<br>
This is done with the &quot;prefix&quot; flag to the configure script.
<br>
(say --prefix=/home/galaxia/opempi-1.3.4).
<br>
It will avoid confusion with other MPI versions.
<br>
Also, put /home/galaxia/opempi-1.3.4/bin on your PATH
<br>
and /home/galaxia/opempi-1.3.4/lib on your LD_LIBRARY_PATH
<br>
in your .bashrc/.cshrc file.
<br>
<p>I hope this helps.
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Galaxia wrote:
<br>
<span class="quotelev1">&gt; I am working on a computer running CentOS 5 with 2 Quad-core CPUs (only 
</span><br>
<span class="quotelev1">&gt; one computer, it is not connected with others).  Previously the OpenMPI 
</span><br>
<span class="quotelev1">&gt; version was 1.27 and my programs worked fine.  After the automatic 
</span><br>
<span class="quotelev1">&gt; upgrade to 1.32 (through yum), I can compile programs but it shows error 
</span><br>
<span class="quotelev1">&gt; in running:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # mpirun -np 2 mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [[948,1],0]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev1">&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev1">&gt;   Host: supernova.localdomain
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: Failed to open &quot;OpenIB-cma&quot; [DAT_INTERNAL_ERROR:].
</span><br>
<span class="quotelev1">&gt; This may be a real error or it may be an invalid entry in the uDAPL
</span><br>
<span class="quotelev1">&gt; Registry which is contained in the dat.conf file. Contact your local
</span><br>
<span class="quotelev1">&gt; System Administrator to confirm the availability of the interfaces in
</span><br>
<span class="quotelev1">&gt; the dat.conf file.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here the &quot;mpi&quot; program is a very simple hello-world example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the problem it and do I need to configure OpenMPI somehow to 
</span><br>
<span class="quotelev1">&gt; make my programs running again?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much.
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
<li><strong>Next message:</strong> <a href="11657.php">ilya zelenchuk: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="11655.php">Galaxia: "[OMPI users] Running error after upgrading from OpenMPI 1.27 to 1.32"</a>
<li><strong>In reply to:</strong> <a href="11655.php">Galaxia: "[OMPI users] Running error after upgrading from OpenMPI 1.27 to 1.32"</a>
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
