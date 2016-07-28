<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 15 18:14:16 2006" -->
<!-- isoreceived="20060615221416" -->
<!-- sent="Thu, 15 Jun 2006 16:14:14 -0600" -->
<!-- isosent="20060615221414" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SEGV_MAPERR during execution" -->
<!-- id="1150409654.30726.57.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="A1477C3D-BDAF-470E-B215-9BA27D049D52_at_gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-15 18:14:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1429.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>Previous message:</strong> <a href="1427.php">Caird, Andrew J: "Re: [OMPI users] Cannot link statically against OpenMPI programs"</a>
<li><strong>In reply to:</strong> <a href="1425.php">Anoop Rajendra: "[OMPI users] SEGV_MAPERR during execution"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2006-06-15 at 13:46 -0700, Anoop Rajendra wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to run a simple pi program compiled using openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My command line and error message is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mpiuser_at_Pebble-anoop ~]$ mpirun -n 2 -hostfile /opt/openmpi/openmpi/ 
</span><br>
<span class="quotelev1">&gt; etc/openmpi-default-hostfile /home/mpiuser/cpi2
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x6
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [0] func:/opt/openmpi/openmpi/lib/libopal.so.0 [0xceb6dd]
</span><br>
<span class="quotelev1">&gt; [1] func:/lib/tls/libpthread.so.0 [0xd44880]
</span><br>
<span class="quotelev1">&gt; [2] func:/opt/openmpi/openmpi/lib/openmpi/mca_btl_tcp.so [0x746d23]
</span><br>
<span class="quotelev1">&gt; [3] func:/opt/openmpi/openmpi/lib/openmpi/mca_btl_tcp.so 
</span><br>
<span class="quotelev1">&gt; (mca_btl_tcp_add_procs+0x140) [0x744094]
</span><br>
<span class="quotelev1">&gt; [4] func:/opt/openmpi/openmpi/lib/openmpi/mca_bml_r2.so 
</span><br>
<span class="quotelev1">&gt; (mca_bml_r2_add_procs+0x202) [0x96add6]
</span><br>
<span class="quotelev1">&gt; [5] func:/opt/openmpi/openmpi/lib/openmpi/mca_pml_ob1.so 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_add_procs+0x85) [0x134259]
</span><br>
<span class="quotelev1">&gt; [6] func:/opt/openmpi/openmpi/lib/libmpi.so.0(ompi_mpi_init+0x385)  
</span><br>
<span class="quotelev1">&gt; [0x70ca7d]
</span><br>
<span class="quotelev1">&gt; [7] func:/opt/openmpi/openmpi/lib/libmpi.so.0(MPI_Init+0x8c) [0x6fb724]
</span><br>
<span class="quotelev1">&gt; [8] func:/home/mpiuser/cpi2(main+0x56) [0x804890d]
</span><br>
<span class="quotelev1">&gt; [9] func:/lib/tls/libc.so.6(__libc_start_main+0xd3) [0xaf3e23]
</span><br>
<span class="quotelev1">&gt; [10] func:/home/mpiuser/cpi2 [0x8048819]
</span><br>
<p>Which version of Open MPI are you using?  There were some problems with
<br>
the 1.0 series when certain networking configurations were found
<br>
(particularly with machines that had multiple active networks).  We
<br>
believe we have these fixed in the upcoming 1.1 release (there is a beta
<br>
available on the download page) and in the nightly snapshots of the
<br>
upcoming 1.0.3 release, which can be downloaded here:
<br>
<p>&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.1/">http://www.open-mpi.org/software/ompi/v1.1/</a>
<br>
&nbsp;<a href="http://www.open-mpi.org/nightly/v1.0/">http://www.open-mpi.org/nightly/v1.0/</a>
<br>
<p>Let us know if these help / don't help your problem.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1429.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>Previous message:</strong> <a href="1427.php">Caird, Andrew J: "Re: [OMPI users] Cannot link statically against OpenMPI programs"</a>
<li><strong>In reply to:</strong> <a href="1425.php">Anoop Rajendra: "[OMPI users] SEGV_MAPERR during execution"</a>
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
