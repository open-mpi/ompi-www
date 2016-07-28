<?
$subject_val = "[OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 15:28:13 2010" -->
<!-- isoreceived="20100426192813" -->
<!-- sent="Mon, 26 Apr 2010 15:28:05 -0400" -->
<!-- isosent="20100426192805" -->
<!-- name="Pooja Varshneya" -->
<!-- email="pooja.varshneya_at_[hidden]" -->
<!-- subject="[OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages" -->
<!-- id="5C565838-45AF-4DAA-856C-420CC9929BB7_at_gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="463D5767-0E57-478F-B2FE-5886F664685B_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages<br>
<strong>From:</strong> Pooja Varshneya (<em>pooja.varshneya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 15:28:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12808.php">Prentice Bisbal: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>Previous message:</strong> <a href="12806.php">Ralph Castain: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>In reply to:</strong> <a href="12806.php">Ralph Castain: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12815.php">Timur Magomedov: "Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<li><strong>Reply:</strong> <a href="12815.php">Timur Magomedov: "Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I am using OpenMPI 1.4 on a cluster of Intel quad-core processors  
<br>
running Linux and connected by ethernet.
<br>
<p>In an application, i m trying  to send and receive large messages of  
<br>
sizes ranging from 1 KB upto 500 MB.
<br>
The application works fine if the messages sizes are within 1 MB  
<br>
range. When i try to send larger size messages, application crashes  
<br>
with segmentation fault. I have tried to increase the size of btl_tcp  
<br>
send and receive buffer, but it does not seem to be working.
<br>
<p>Are there any other settings i need to change to enable large messages  
<br>
to be sent ?
<br>
I am using boost serialization and boost mpi libraries to simplify  
<br>
message packing and unpacking.
<br>
<p>mpirun -np 3  --mca btl_tcp_eager_limit 536870912 --mca  
<br>
btl_tcp_max_send_size 536870912 --mca  
<br>
btl_tcp_rdma_pipeline_send_length 524288 --mca btl_tcp_sndbuf  
<br>
536870912 --mca btl_tcp_rcvbuf
<br>
536870912 --hostfile hostfile2 --rankfile rankfile2  ./ 
<br>
boost_binomial_no_LB
<br>
<p><p>[rh5x64-u16:25446] *** Process received signal ***
<br>
[rh5x64-u16:25446] Signal: Segmentation fault (11)
<br>
[rh5x64-u16:25446] Signal code: Address not mapped (1)
<br>
[rh5x64-u16:25446] Failing at address: 0x2b12d14aafdc
<br>
[rh5x64-u16:25446] [ 0] /lib64/libpthread.so.0 [0x3ba680e7c0]
<br>
[rh5x64-u16:25446] [ 1] /lib64/libc.so.6(memcpy+0xa0) [0x3ba5c7be50]
<br>
[rh5x64-u16:25446] [ 2] /usr/local/lib/libmpi.so.0 [0x2b11ccbe0c02]
<br>
[rh5x64-u16:25446] [ 3] /usr/local/lib/libmpi.so.0(ompi_convertor_pack 
<br>
+0x160) [0x2b11ccbe4930]
<br>
[rh5x64-u16:25446] [ 4] /usr/local/lib/openmpi/mca_btl_tcp.so  
<br>
[0x2b11cffcaf67]
<br>
[rh5x64-u16:25446] [ 5] /usr/local/lib/openmpi/mca_pml_ob1.so  
<br>
[0x2b11cf5af97a]
<br>
[rh5x64-u16:25446] [ 6] /usr/local/lib/openmpi/mca_pml_ob1.so  
<br>
[0x2b11cf5a9b0d]
<br>
[rh5x64-u16:25446] [ 7] /usr/local/lib/openmpi/mca_btl_tcp.so  
<br>
[0x2b11cffcd693]
<br>
[rh5x64-u16:25446] [ 8] /usr/local/lib/libopen-pal.so.0 [0x2b11cd0ab95b]
<br>
[rh5x64-u16:25446] [ 9] /usr/local/lib/libopen-pal.so.0(opal_progress 
<br>
+0x9e) [0x2b11cd0a0b3e]
<br>
[rh5x64-u16:25446] [10] /usr/local/lib/libmpi.so.0 [0x2b11ccbd62c9]
<br>
[rh5x64-u16:25446] [11] /usr/local/lib/libmpi.so.0(PMPI_Test+0x73)  
<br>
[0x2b11ccbfc863]
<br>
[rh5x64-u16:25446] [12] /usr/local/lib/libboost_mpi.so. 
<br>
1.42.0(_ZN5boost3mpi7request4testEv+0x13d) [0x2b11cc50451d]
<br>
[rh5x64-u16:25446] [13] ./ 
<br>
boost_binomial_no_LB(_ZN5boost3mpi8wait_allIPNS0_7requestEEEvT_S4_ 
<br>
+0x19d) [0x42206d]
<br>
[rh5x64-u16:25446] [14] ./boost_binomial_no_LB [0x41c82a]
<br>
[rh5x64-u16:25446] [15] ./boost_binomial_no_LB(main+0x169) [0x41d4a9]
<br>
[rh5x64-u16:25446] [16] /lib64/libc.so.6(__libc_start_main+0xf4)  
<br>
[0x3ba5c1d994]
<br>
[rh5x64-u16:25446] [17] ./ 
<br>
boost_binomial_no_LB(__gxx_personality_v0+0x371) [0x41a799]
<br>
[rh5x64-u16:25446] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 25446 on node 172.10.0.116  
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12808.php">Prentice Bisbal: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>Previous message:</strong> <a href="12806.php">Ralph Castain: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>In reply to:</strong> <a href="12806.php">Ralph Castain: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12815.php">Timur Magomedov: "Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<li><strong>Reply:</strong> <a href="12815.php">Timur Magomedov: "Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
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
