<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 26 10:53:12 2006" -->
<!-- isoreceived="20060626145312" -->
<!-- sent="Mon, 26 Jun 2006 16:55:08 +0200 (CEST)" -->
<!-- isosent="20060626145508" -->
<!-- name="Dani&#235;l Mantione" -->
<!-- email="daniel.mantione_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.1 backward compatible?" -->
<!-- id="Pine.LNX.4.63.0606261647120.7596_at_druifje.clustervision.com" -->
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
<strong>From:</strong> Dani&#235;l Mantione (<em>daniel.mantione_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-26 10:55:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1464.php">Patrick Jessee: "[OMPI users] &quot;mca_oob_tcp_accept: accept() failed&quot; messages with openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="1462.php">Brian Barrett: "Re: [OMPI users] hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1470.php">Peter Kjellström: "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>Reply:</strong> <a href="1470.php">Peter Kjellström: "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>Maybe reply:</strong> <a href="1501.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>Maybe reply:</strong> <a href="1502.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>Just tried out OpenMPI 1.1. First impression is that it doesn't seem to 
<br>
be able to run OpenMPI 1.0.2 executables. The result of such an attempt 
<br>
can be seen below.
<br>
<p>Is it right that OpenMPI 1.1 cannot run 1.0.2 executables? If yes, 
<br>
shouldn't the major version of the library have been increased?
<br>
<p>Dani&#235;l Mantione
<br>
<p><p>ham1:/usr/local/Cluster-Apps/openmpi/intel # cat /tmp/x
<br>
stfile hostfile -np 4 ./yafs.bin 1.2M
<br>
./yafs.bin: Symbol `ompi_mpi_comm_world' has different size in shared 
<br>
object, consider re-linking
<br>
./yafs.bin: Symbol `ompi_mpi_comm_world' has different size in shared 
<br>
object, consider re-linking
<br>
./yafs.bin: Symbol `ompi_mpi_comm_world' has different size in shared 
<br>
object, consider re-linking
<br>
./yafs.bin: Symbol `ompi_mpi_comm_world' has different size in shared 
<br>
object, consider re-linking
<br>
--------------------------------------------------------------------------
<br>
The MCA parameter &quot;mpi_paffinity_alone&quot; was set to a nonzero value,
<br>
but Open MPI was unable to bind MPI_COMM_WORLD rank 0 to a processor.
<br>
<p>Typical causes for this problem include:
<br>
<p>&nbsp;&nbsp;&nbsp;- A node was oversubscribed (more processes than processors), in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which case Open MPI will not bind any processes on that node
<br>
&nbsp;&nbsp;&nbsp;- A startup mechanism was used which did not tell Open MPI which
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processors to bind processes to
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
The MCA parameter &quot;mpi_paffinity_alone&quot; was set to a nonzero value,
<br>
but Open MPI was unable to bind MPI_COMM_WORLD rank 3 to a processor.
<br>
<p>Typical causes for this problem include:
<br>
<p>&nbsp;&nbsp;&nbsp;- A node was oversubscribed (more processes than processors), in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which case Open MPI will not bind any processes on that node
<br>
&nbsp;&nbsp;&nbsp;- A startup mechanism was used which did not tell Open MPI which
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processors to bind processes to
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
The MCA parameter &quot;mpi_paffinity_alone&quot; was set to a nonzero value,
<br>
but Open MPI was unable to bind MPI_COMM_WORLD rank 1 to a processor.
<br>
<p>Typical causes for this problem include:
<br>
<p>&nbsp;&nbsp;&nbsp;- A node was oversubscribed (more processes than processors), in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which case Open MPI will not bind any processes on that node
<br>
&nbsp;&nbsp;&nbsp;- A startup mechanism was used which did not tell Open MPI which
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processors to bind processes to
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
The MCA parameter &quot;mpi_paffinity_alone&quot; was set to a nonzero value,
<br>
but Open MPI was unable to bind MPI_COMM_WORLD rank 2 to a processor.
<br>
<p>Typical causes for this problem include:
<br>
<p>&nbsp;&nbsp;&nbsp;- A node was oversubscribed (more processes than processors), in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which case Open MPI will not bind any processes on that node
<br>
&nbsp;&nbsp;&nbsp;- A startup mechanism was used which did not tell Open MPI which
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processors to bind processes to
<br>
--------------------------------------------------------------------------
<br>
Signal:11 info.si_errno:0(Success) si_code:128()
<br>
Failing at addr:(nil)
<br>
[0] func:/usr/local/Cluster-Apps/openmpi/intel/64/1.1/lib64/libopal.so.0 
<br>
[0x2aaaab19eba9]
<br>
[1] func:/lib64/tls/libpthread.so.0 [0x2aaaabde22c0]
<br>
[2] func:/lib64/tls/libc.so.6 [0x2aaaabf91b44]
<br>
[3] func:/lib64/tls/libc.so.6 [0x2aaaabf92f73]
<br>
[4] func:./yafs.bin(_ZN6IoData11readCmdLineEiPPc+0x31) [0x4cec89]
<br>
[5] func:./yafs.bin(main+0x90) [0x4557f8]
<br>
[6] func:/lib64/tls/libc.so.6(__libc_start_main+0xda) [0x2aaaabf075aa]
<br>
[7] func:./yafs.bin(__gxx_personality_v0+0x22a) [0x4556ca]
<br>
*** End of error message ***
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1464.php">Patrick Jessee: "[OMPI users] &quot;mca_oob_tcp_accept: accept() failed&quot; messages with openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="1462.php">Brian Barrett: "Re: [OMPI users] hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1470.php">Peter Kjellström: "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>Reply:</strong> <a href="1470.php">Peter Kjellström: "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>Maybe reply:</strong> <a href="1501.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>Maybe reply:</strong> <a href="1502.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
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
