<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 10 10:52:39 2006" -->
<!-- isoreceived="20060310155239" -->
<!-- sent="Fri, 10 Mar 2006 16:50:53 +0100" -->
<!-- isosent="20060310155053" -->
<!-- name="Cezary Sliwa" -->
<!-- email="sliwa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]" -->
<!-- id="4411A05D.9070608_at_blue.cft.edu.pl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8C5AB196-B8B4-4510-B765-5A61FF8E87E9_at_open-mpi.org" -->
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
<strong>From:</strong> Cezary Sliwa (<em>sliwa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-10 10:50:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0827.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0825.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0819.php">Jeff Squyres: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; One additional question: are you using TCP as your communications  
</span><br>
<span class="quotelev1">&gt; network, and if so, do either of the nodes that you are running on  
</span><br>
<span class="quotelev1">&gt; have more than one TCP NIC?  We recently fixed a bug for situations  
</span><br>
<span class="quotelev1">&gt; where at least one node in on multiple TCP networks, not all of which  
</span><br>
<span class="quotelev1">&gt; were shared by the nodes where the peer MPI processes were running.   
</span><br>
<span class="quotelev1">&gt; If this situation describes your network setup (e.g., a cluster where  
</span><br>
<span class="quotelev1">&gt; the head node has a public and a private network, and where the  
</span><br>
<span class="quotelev1">&gt; cluster nodes only have a private network -- and your MPI process was  
</span><br>
<span class="quotelev1">&gt; running on the head node and a compute node), can you try upgrading  
</span><br>
<span class="quotelev1">&gt; to the latest 1.0.2 release candidate tarball:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.0/">http://www.open-mpi.org/software/ompi/v1.0/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
$ mpiexec -machinefile ../bhost -np 9 ./ng
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x6
<br>
[0] func:/opt/openmpi/1.0.2a9/lib/libopal.so.0 [0x2aaaac062d0c]
<br>
[1] func:/lib64/tls/libpthread.so.0 [0x3b8d60c320]
<br>
[2] 
<br>
func:/opt/openmpi/1.0.2a9/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_proc_remove+0xb5) 
<br>
[0x2aaaae6e4c65]
<br>
[3] func:/opt/openmpi/1.0.2a9/lib/openmpi/mca_btl_tcp.so [0x2aaaae6e2b09]
<br>
[4] 
<br>
func:/opt/openmpi/1.0.2a9/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_add_procs+0x157) 
<br>
[0x2aaaae6dfdd7]
<br>
[5] 
<br>
func:/opt/openmpi/1.0.2a9/lib/openmpi/mca_bml_r2.so(mca_bml_r2_add_procs+0x231) 
<br>
[0x2aaaae3cd1e1]
<br>
[6] 
<br>
func:/opt/openmpi/1.0.2a9/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0x94) 
<br>
[0x2aaaae1b1f44]
<br>
[7] func:/opt/openmpi/1.0.2a9/lib/libmpi.so.0(ompi_mpi_init+0x3af) 
<br>
[0x2aaaabdd2d7f]
<br>
[8] func:/opt/openmpi/1.0.2a9/lib/libmpi.so.0(MPI_Init+0x93) 
<br>
[0x2aaaabdbeb33]
<br>
[9] func:/opt/openmpi/1.0.2a9/lib/libmpi.so.0(MPI_INIT+0x28) 
<br>
[0x2aaaabdce948]
<br>
[10] func:./ng(MAIN__+0x38) [0x4022a8]
<br>
[11] func:./ng(main+0xe) [0x4126ce]
<br>
[12] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x3b8cb1c4bb]
<br>
[13] func:./ng [0x4021da]
<br>
*** End of error message ***
<br>
<p>Bye,
<br>
Czarek
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0827.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0825.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0819.php">Jeff Squyres: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
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
