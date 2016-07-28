<?
$subject_val = "Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 27 07:29:25 2010" -->
<!-- isoreceived="20100427112925" -->
<!-- sent="Tue, 27 Apr 2010 15:29:11 +0400" -->
<!-- isosent="20100427112911" -->
<!-- name="Timur Magomedov" -->
<!-- email="timur.magomedov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages" -->
<!-- id="1272367752.2064.5.camel_at_magomedov-desktop" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5C565838-45AF-4DAA-856C-420CC9929BB7_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages<br>
<strong>From:</strong> Timur Magomedov (<em>timur.magomedov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-27 07:29:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12816.php">Frederik Himpe: "[OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Previous message:</strong> <a href="12814.php">Ralph Castain: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>In reply to:</strong> <a href="12807.php">Pooja Varshneya: "[OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12837.php">Pooja Varshneya: "Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<li><strong>Reply:</strong> <a href="12837.php">Pooja Varshneya: "Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
Are you using heterogeneous environment? There was a similar issue
<br>
recently with segfault on mixed x86 and x86_64 environment. Here is
<br>
corresponding thread in ompi-devel:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2010/04/7787.php">http://www.open-mpi.org/community/lists/devel/2010/04/7787.php</a>
<br>
This was fixed in trunk and will likely be fixed in next 1.4 release.
<br>
You can download last trunk snapshot from here
<br>
<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
and test it.
<br>
<p>&#208;&#146; &#208;&#159;&#208;&#189;&#208;&#180;, 26/04/2010 &#208;&#178; 15:28 -0400, Pooja Varshneya &#208;&#191;&#208;&#184;&#209;&#136;&#208;&#181;&#209;&#130;:
<br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.4 on a cluster of Intel quad-core processors  
</span><br>
<span class="quotelev1">&gt; running Linux and connected by ethernet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In an application, i m trying  to send and receive large messages of  
</span><br>
<span class="quotelev1">&gt; sizes ranging from 1 KB upto 500 MB.
</span><br>
<span class="quotelev1">&gt; The application works fine if the messages sizes are within 1 MB  
</span><br>
<span class="quotelev1">&gt; range. When i try to send larger size messages, application crashes  
</span><br>
<span class="quotelev1">&gt; with segmentation fault. I have tried to increase the size of btl_tcp  
</span><br>
<span class="quotelev1">&gt; send and receive buffer, but it does not seem to be working.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there any other settings i need to change to enable large messages  
</span><br>
<span class="quotelev1">&gt; to be sent ?
</span><br>
<span class="quotelev1">&gt; I am using boost serialization and boost mpi libraries to simplify  
</span><br>
<span class="quotelev1">&gt; message packing and unpacking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 3  --mca btl_tcp_eager_limit 536870912 --mca  
</span><br>
<span class="quotelev1">&gt; btl_tcp_max_send_size 536870912 --mca  
</span><br>
<span class="quotelev1">&gt; btl_tcp_rdma_pipeline_send_length 524288 --mca btl_tcp_sndbuf  
</span><br>
<span class="quotelev1">&gt; 536870912 --mca btl_tcp_rcvbuf
</span><br>
<span class="quotelev1">&gt; 536870912 --hostfile hostfile2 --rankfile rankfile2  ./ 
</span><br>
<span class="quotelev1">&gt; boost_binomial_no_LB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] Failing at address: 0x2b12d14aafdc
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [ 0] /lib64/libpthread.so.0 [0x3ba680e7c0]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [ 1] /lib64/libc.so.6(memcpy+0xa0) [0x3ba5c7be50]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [ 2] /usr/local/lib/libmpi.so.0 [0x2b11ccbe0c02]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [ 3] /usr/local/lib/libmpi.so.0(ompi_convertor_pack 
</span><br>
<span class="quotelev1">&gt; +0x160) [0x2b11ccbe4930]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [ 4] /usr/local/lib/openmpi/mca_btl_tcp.so  
</span><br>
<span class="quotelev1">&gt; [0x2b11cffcaf67]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [ 5] /usr/local/lib/openmpi/mca_pml_ob1.so  
</span><br>
<span class="quotelev1">&gt; [0x2b11cf5af97a]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [ 6] /usr/local/lib/openmpi/mca_pml_ob1.so  
</span><br>
<span class="quotelev1">&gt; [0x2b11cf5a9b0d]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [ 7] /usr/local/lib/openmpi/mca_btl_tcp.so  
</span><br>
<span class="quotelev1">&gt; [0x2b11cffcd693]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [ 8] /usr/local/lib/libopen-pal.so.0 [0x2b11cd0ab95b]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [ 9] /usr/local/lib/libopen-pal.so.0(opal_progress 
</span><br>
<span class="quotelev1">&gt; +0x9e) [0x2b11cd0a0b3e]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [10] /usr/local/lib/libmpi.so.0 [0x2b11ccbd62c9]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [11] /usr/local/lib/libmpi.so.0(PMPI_Test+0x73)  
</span><br>
<span class="quotelev1">&gt; [0x2b11ccbfc863]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [12] /usr/local/lib/libboost_mpi.so. 
</span><br>
<span class="quotelev1">&gt; 1.42.0(_ZN5boost3mpi7request4testEv+0x13d) [0x2b11cc50451d]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [13] ./ 
</span><br>
<span class="quotelev1">&gt; boost_binomial_no_LB(_ZN5boost3mpi8wait_allIPNS0_7requestEEEvT_S4_ 
</span><br>
<span class="quotelev1">&gt; +0x19d) [0x42206d]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [14] ./boost_binomial_no_LB [0x41c82a]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [15] ./boost_binomial_no_LB(main+0x169) [0x41d4a9]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [16] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev1">&gt; [0x3ba5c1d994]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] [17] ./ 
</span><br>
<span class="quotelev1">&gt; boost_binomial_no_LB(__gxx_personality_v0+0x371) [0x41a799]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u16:25446] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 25446 on node 172.10.0.116  
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Kind regards,
Timur Magomedov
Senior C++ Developer
DevelopOnBox LLC / Zodiac Interactive
<a href="http://www.zodiac.tv/">http://www.zodiac.tv/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12816.php">Frederik Himpe: "[OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Previous message:</strong> <a href="12814.php">Ralph Castain: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>In reply to:</strong> <a href="12807.php">Pooja Varshneya: "[OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12837.php">Pooja Varshneya: "Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<li><strong>Reply:</strong> <a href="12837.php">Pooja Varshneya: "Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
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
