<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 27 17:10:51 2006" -->
<!-- isoreceived="20060427211051" -->
<!-- sent="Thu, 27 Apr 2006 15:10:45 -0600" -->
<!-- isosent="20060427211045" -->
<!-- name="Marcus G. Daniels" -->
<!-- email="mdaniels_at_[hidden]" -->
<!-- subject="[OMPI users] crash inside mca_btl_tcp_proc_remove" -->
<!-- id="44513355.5040906_at_lanl.gov" -->
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
<strong>From:</strong> Marcus G. Daniels (<em>mdaniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-27 17:10:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1162.php">Jorge Parra: "[OMPI users] error running MPI"</a>
<li><strong>Previous message:</strong> <a href="1160.php">Brian Barrett: "Re: [OMPI users] mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1166.php">Marcus G. Daniels: "Re: [OMPI users] crash inside mca_btl_tcp_proc_remove"</a>
<li><strong>Reply:</strong> <a href="1166.php">Marcus G. Daniels: "Re: [OMPI users] crash inside mca_btl_tcp_proc_remove"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I built 1.0.2 on Fedora 5 for x86_64 on a cluster setup as described 
<br>
below and I witness the same behavior when I try to run a job.  Any 
<br>
ideas on the cause?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; One additional question: are you using TCP as your communications
</span><br>
<span class="quotelev2">&gt; &gt; network, and if so, do either of the nodes that you are running on
</span><br>
<span class="quotelev2">&gt; &gt; have more than one TCP NIC? We recently fixed a bug for situations
</span><br>
<span class="quotelev2">&gt; &gt; where at least one node in on multiple TCP networks, not all of which
</span><br>
<span class="quotelev2">&gt; &gt; were shared by the nodes where the peer MPI processes were running.
</span><br>
<span class="quotelev2">&gt; &gt; If this situation describes your network setup (e.g., a cluster where
</span><br>
<span class="quotelev2">&gt; &gt; the head node has a public and a private network, and where the
</span><br>
<span class="quotelev2">&gt; &gt; cluster nodes only have a private network -- and your MPI process was
</span><br>
<span class="quotelev2">&gt; &gt; running on the head node and a compute node), can you try upgrading
</span><br>
<span class="quotelev2">&gt; &gt; to the latest 1.0.2 release candidate tarball:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/software/ompi/v1.0/">http://www.open-mpi.org/software/ompi/v1.0/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; $ mpiexec -machinefile ../bhost -np 9 ./ng
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x6
</span><br>
<span class="quotelev1">&gt; [0] func:/opt/openmpi/1.0.2a9/lib/libopal.so.0 [0x2aaaac062d0c]
</span><br>
<span class="quotelev1">&gt; [1] func:/lib64/tls/libpthread.so.0 [0x3b8d60c320]
</span><br>
<span class="quotelev1">&gt; [2]
</span><br>
<span class="quotelev1">&gt; func:/opt/openmpi/1.0.2a9/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_proc_remove+0xb5) 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0x2aaaae6e4c65]
</span><br>
<span class="quotelev1">&gt; [3] func:/opt/openmpi/1.0.2a9/lib/openmpi/mca_btl_tcp.so [0x2aaaae6e2b09]
</span><br>
<span class="quotelev1">&gt; [4]
</span><br>
<span class="quotelev1">&gt; func:/opt/openmpi/1.0.2a9/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_add_procs+0x157) 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0x2aaaae6dfdd7]
</span><br>
<span class="quotelev1">&gt; [5]
</span><br>
<span class="quotelev1">&gt; func:/opt/openmpi/1.0.2a9/lib/openmpi/mca_bml_r2.so(mca_bml_r2_add_procs+0x231) 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0x2aaaae3cd1e1]
</span><br>
<span class="quotelev1">&gt; [6]
</span><br>
<span class="quotelev1">&gt; func:/opt/openmpi/1.0.2a9/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0x94) 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0x2aaaae1b1f44]
</span><br>
<span class="quotelev1">&gt; [7] func:/opt/openmpi/1.0.2a9/lib/libmpi.so.0(ompi_mpi_init+0x3af)
</span><br>
<span class="quotelev1">&gt; [0x2aaaabdd2d7f]
</span><br>
<span class="quotelev1">&gt; [8] func:/opt/openmpi/1.0.2a9/lib/libmpi.so.0(MPI_Init+0x93)
</span><br>
<span class="quotelev1">&gt; [0x2aaaabdbeb33]
</span><br>
<span class="quotelev1">&gt; [9] func:/opt/openmpi/1.0.2a9/lib/libmpi.so.0(MPI_INIT+0x28)
</span><br>
<span class="quotelev1">&gt; [0x2aaaabdce948]
</span><br>
<span class="quotelev1">&gt; [10] func:./ng(MAIN__+0x38) [0x4022a8]
</span><br>
<span class="quotelev1">&gt; [11] func:./ng(main+0xe) [0x4126ce]
</span><br>
<span class="quotelev1">&gt; [12] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x3b8cb1c4bb]
</span><br>
<span class="quotelev1">&gt; [13] func:./ng [0x4021da]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bye,
</span><br>
<span class="quotelev1">&gt; Czarek 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1162.php">Jorge Parra: "[OMPI users] error running MPI"</a>
<li><strong>Previous message:</strong> <a href="1160.php">Brian Barrett: "Re: [OMPI users] mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1166.php">Marcus G. Daniels: "Re: [OMPI users] crash inside mca_btl_tcp_proc_remove"</a>
<li><strong>Reply:</strong> <a href="1166.php">Marcus G. Daniels: "Re: [OMPI users] crash inside mca_btl_tcp_proc_remove"</a>
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
