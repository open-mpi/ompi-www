<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 28 16:23:14 2006" -->
<!-- isoreceived="20060428202314" -->
<!-- sent="Fri, 28 Apr 2006 14:23:05 -0600" -->
<!-- isosent="20060428202305" -->
<!-- name="Marcus G. Daniels" -->
<!-- email="mdaniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] crash inside mca_btl_tcp_proc_remove" -->
<!-- id="445279A9.5020901_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44513355.5040906_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-04-28 16:23:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1167.php">Ogden, Jeffry Brandon: "[OMPI users] Default number of slots when using Torque"</a>
<li><strong>Previous message:</strong> <a href="1165.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] missing mpi_allgather_f90.f90.shinopenmpi-1.2a1r9704"</a>
<li><strong>In reply to:</strong> <a href="1161.php">Marcus G. Daniels: "[OMPI users] crash inside mca_btl_tcp_proc_remove"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, don't know if this helps, but looks like the cause for me is 
<br>
btl_endpoint-&gt;endpoint_addr being NULL in this line:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_endpoint-&gt;endpoint_addr-&gt;addr_inuse--;
<br>
<p>I.e. if in ompi/mca/btl/tcp/btl_tcp_proc.c in mca_btl_tcp_proc_remove 
<br>
in, I put an
<br>
&quot;if (btl_endpoint-&gt;endpoint_addr)&quot; before the decrement, apparently 
<br>
things work...
<br>
<p>Marcus G. Daniels wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I built 1.0.2 on Fedora 5 for x86_64 on a cluster setup as described 
</span><br>
<span class="quotelev1">&gt; below and I witness the same behavior when I try to run a job.  Any 
</span><br>
<span class="quotelev1">&gt; ideas on the cause?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One additional question: are you using TCP as your communications
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network, and if so, do either of the nodes that you are running on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have more than one TCP NIC? We recently fixed a bug for situations
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where at least one node in on multiple TCP networks, not all of which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; were shared by the nodes where the peer MPI processes were running.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If this situation describes your network setup (e.g., a cluster where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the head node has a public and a private network, and where the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster nodes only have a private network -- and your MPI process was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running on the head node and a compute node), can you try upgrading
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the latest 1.0.2 release candidate tarball:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.0/">http://www.open-mpi.org/software/ompi/v1.0/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec -machinefile ../bhost -np 9 ./ng
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0x6
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/opt/openmpi/1.0.2a9/lib/libopal.so.0 [0x2aaaac062d0c]
</span><br>
<span class="quotelev2">&gt;&gt; [1] func:/lib64/tls/libpthread.so.0 [0x3b8d60c320]
</span><br>
<span class="quotelev2">&gt;&gt; [2]
</span><br>
<span class="quotelev2">&gt;&gt; func:/opt/openmpi/1.0.2a9/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_proc_remove+0xb5) 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaae6e4c65]
</span><br>
<span class="quotelev2">&gt;&gt; [3] func:/opt/openmpi/1.0.2a9/lib/openmpi/mca_btl_tcp.so [0x2aaaae6e2b09]
</span><br>
<span class="quotelev2">&gt;&gt; [4]
</span><br>
<span class="quotelev2">&gt;&gt; func:/opt/openmpi/1.0.2a9/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_add_procs+0x157) 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaae6dfdd7]
</span><br>
<span class="quotelev2">&gt;&gt; [5]
</span><br>
<span class="quotelev2">&gt;&gt; func:/opt/openmpi/1.0.2a9/lib/openmpi/mca_bml_r2.so(mca_bml_r2_add_procs+0x231) 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaae3cd1e1]
</span><br>
<span class="quotelev2">&gt;&gt; [6]
</span><br>
<span class="quotelev2">&gt;&gt; func:/opt/openmpi/1.0.2a9/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0x94) 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaae1b1f44]
</span><br>
<span class="quotelev2">&gt;&gt; [7] func:/opt/openmpi/1.0.2a9/lib/libmpi.so.0(ompi_mpi_init+0x3af)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaabdd2d7f]
</span><br>
<span class="quotelev2">&gt;&gt; [8] func:/opt/openmpi/1.0.2a9/lib/libmpi.so.0(MPI_Init+0x93)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaabdbeb33]
</span><br>
<span class="quotelev2">&gt;&gt; [9] func:/opt/openmpi/1.0.2a9/lib/libmpi.so.0(MPI_INIT+0x28)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaabdce948]
</span><br>
<span class="quotelev2">&gt;&gt; [10] func:./ng(MAIN__+0x38) [0x4022a8]
</span><br>
<span class="quotelev2">&gt;&gt; [11] func:./ng(main+0xe) [0x4126ce]
</span><br>
<span class="quotelev2">&gt;&gt; [12] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x3b8cb1c4bb]
</span><br>
<span class="quotelev2">&gt;&gt; [13] func:./ng [0x4021da]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bye,
</span><br>
<span class="quotelev2">&gt;&gt; Czarek 
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1167.php">Ogden, Jeffry Brandon: "[OMPI users] Default number of slots when using Torque"</a>
<li><strong>Previous message:</strong> <a href="1165.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] missing mpi_allgather_f90.f90.shinopenmpi-1.2a1r9704"</a>
<li><strong>In reply to:</strong> <a href="1161.php">Marcus G. Daniels: "[OMPI users] crash inside mca_btl_tcp_proc_remove"</a>
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
