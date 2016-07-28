<?
$subject_val = "[OMPI users] Running error after upgrading from OpenMPI 1.27 to 1.32";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 29 18:51:00 2009" -->
<!-- isoreceived="20091229235100" -->
<!-- sent="Tue, 29 Dec 2009 16:50:45 -0700" -->
<!-- isosent="20091229235045" -->
<!-- name="Galaxia" -->
<!-- email="galaxia.x_at_[hidden]" -->
<!-- subject="[OMPI users] Running error after upgrading from OpenMPI 1.27 to 1.32" -->
<!-- id="4B3A95D5.7070109_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Running error after upgrading from OpenMPI 1.27 to 1.32<br>
<strong>From:</strong> Galaxia (<em>galaxia.x_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-29 18:50:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11656.php">Gus Correa: "Re: [OMPI users] Running error after upgrading from OpenMPI 1.27 to 1.32"</a>
<li><strong>Previous message:</strong> <a href="11654.php">Mostyn Lewis: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11656.php">Gus Correa: "Re: [OMPI users] Running error after upgrading from OpenMPI 1.27 to 1.32"</a>
<li><strong>Reply:</strong> <a href="11656.php">Gus Correa: "Re: [OMPI users] Running error after upgrading from OpenMPI 1.27 to 1.32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am working on a computer running CentOS 5 with 2 Quad-core CPUs (only 
<br>
one computer, it is not connected with others).  Previously the OpenMPI 
<br>
version was 1.27 and my programs worked fine.  After the automatic 
<br>
upgrade to 1.32 (through yum), I can compile programs but it shows error 
<br>
in running:
<br>
<p><p># mpirun -np 2 mpi
<br>
<p>libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
--------------------------------------------------------------------------
<br>
[[948,1],0]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
<p>Module: OpenFabrics (openib)
<br>
&nbsp;&nbsp;&nbsp;Host: supernova.localdomain
<br>
<p>Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
CMA: unable to open /dev/infiniband/rdma_cm
<br>
--------------------------------------------------------------------------
<br>
WARNING: Failed to open &quot;OpenIB-cma&quot; [DAT_INTERNAL_ERROR:].
<br>
This may be a real error or it may be an invalid entry in the uDAPL
<br>
Registry which is contained in the dat.conf file. Contact your local
<br>
System Administrator to confirm the availability of the interfaces in
<br>
the dat.conf file.
<br>
--------------------------------------------------------------------------
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
CMA: unable to open /dev/infiniband/rdma_cm
<br>
<p><p>Here the &quot;mpi&quot; program is a very simple hello-world example.
<br>
<p>What is the problem it and do I need to configure OpenMPI somehow to 
<br>
make my programs running again?
<br>
<p>Thank you very much.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11656.php">Gus Correa: "Re: [OMPI users] Running error after upgrading from OpenMPI 1.27 to 1.32"</a>
<li><strong>Previous message:</strong> <a href="11654.php">Mostyn Lewis: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11656.php">Gus Correa: "Re: [OMPI users] Running error after upgrading from OpenMPI 1.27 to 1.32"</a>
<li><strong>Reply:</strong> <a href="11656.php">Gus Correa: "Re: [OMPI users] Running error after upgrading from OpenMPI 1.27 to 1.32"</a>
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
