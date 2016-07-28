<?
$subject_val = "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 23 10:33:35 2010" -->
<!-- isoreceived="20100423143335" -->
<!-- sent="Fri, 23 Apr 2010 10:33:35 -0400" -->
<!-- isosent="20100423143335" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment" -->
<!-- id="AD87F714-AD43-4BC1-97E5-20CDCBEBEBB2_at_eecs.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1272008617.2082.8.camel_at_magomedov-desktop" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-23 10:33:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7800.php">George Bosilca: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<li><strong>Previous message:</strong> <a href="7798.php">hu yaohui: "[OMPI devel] OpenMPI &#215;&#220;&#189;&#225;"</a>
<li><strong>In reply to:</strong> <a href="7797.php">Timur Magomedov: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, I will apply the patch to all branches later today. Thanks for your help!
<br>
<p>&nbsp;&nbsp;George
<br>
<p><p>&quot;All the books in the world contain no more information than is broadcast as video in a single large American city in a single year. Not all bits have equal value.&quot;. -- Carl Sagan
<br>
<p>On Apr 23, 2010, at 3:43, Timur Magomedov &lt;timur.magomedov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you, George!
</span><br>
<span class="quotelev1">&gt; I checked out trunk version 1.7a1r23028 and got the same errors as on
</span><br>
<span class="quotelev1">&gt; 1.4.*. Then I applied your patch, fixed one more file 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- pml_ob1_recvreq.c	(revision 23028)
</span><br>
<span class="quotelev1">&gt; +++ pml_ob1_recvreq.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -331,7 +331,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mca_pml_ob1_send_fin(recvreq-&gt;req_recv.req_base.req_proc,
</span><br>
<span class="quotelev1">&gt;                          bml_btl,
</span><br>
<span class="quotelev1">&gt; -                         frag-&gt;rdma_hdr.hdr_rget.hdr_des.pval,
</span><br>
<span class="quotelev1">&gt; +                         frag-&gt;rdma_hdr.hdr_rget.hdr_des,
</span><br>
<span class="quotelev1">&gt;                          des-&gt;order, 0); 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* is receive request complete */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the problem disappeared.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#208;&#146; &#208;&#159;&#209;&#130;&#208;&#189;, 23/04/2010 &#208;&#178; 01:38 -0400, George Bosilca &#208;&#191;&#208;&#184;&#209;&#136;&#208;&#181;&#209;&#130;:
</span><br>
<span class="quotelev2">&gt;&gt; Timur,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the very detailed analysis of the problem. Based on your observations, I was able to track down the issue pretty quickly. In few words, the 64 bits machine sent a pointer to the 32 bits one, and expected that it will get it back untouched. Unfortunately, on the 32 bits machine this pointer was translated into a void* and the upper 32 bits were lost.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't have a heterogeneous environment available right away to test my patch. I would really appreciate it if you can test it and let us know if it solve this problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS: In order to apply it, please go in the ompi/mca/pml/ob1 directory and do the &quot;patch -p0&quot; from there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 22, 2010, at 09:08 , Timur Magomedov wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a strange segmentation fault on x86_64 machine running together
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with x86.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am running attached program that sends some bytes from process 0 to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 1. My configuration is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Machine #1: (process 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch: x86
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname: magomedov-desktop
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linux distro: Ubuntu 9.10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI: v1.4 configured with --enable-heterogeneous --enable-debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Machine #2: (process 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch: x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname: linuxtche
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linux distro: Fedora 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI: v1.4 configured with --enable-heterogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/home/magomedov/openmpi/ --enable-debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; They are connected by ethernet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My user environment on second (x86_64) machine is set up to use Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from /home/magomedov/openmpi/.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then I compile attached program on both machines (at the same path) and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run it. Process 0 from x86 machine should send data to process 1 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x86_64 machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First, let's send 65530 bytes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -host timur,linuxtche -np
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 /home/magomedov/workspace/mpi-test/mpi-send-test 65530
</span><br>
<span class="quotelev3">&gt;&gt;&gt; magomedov_at_linuxtche's password: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** processor magomedov-desktop, comm size is 2, my rank is 0, pid 21875
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** processor linuxtche, comm size is 2, my rank is 1, pid 11357 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Received 65530 bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's OK. Then let's send 65537 bytes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; magomedov_at_magomedov-desktop:~/workspace/mpi-test$ mpirun -host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; timur,linuxtche -np 2 /home/magomedov/workspace/mpi-test/mpi-send-test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 65537
</span><br>
<span class="quotelev3">&gt;&gt;&gt; magomedov_at_linuxtche's password: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** processor magomedov-desktop, comm size is 2, my rank is 0, pid 9205
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** processor linuxtche, comm size is 2, my rank is 1, pid 28858 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858] Failing at address: 0x201143bf8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858] [ 0] /lib64/libpthread.so.0() [0x3600c0f0f0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 1] /home/magomedov/openmpi/lib/openmpi/mca_pml_ob1.so(+0xfc27)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f5e94076c27]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 2] /home/magomedov/openmpi/lib/openmpi/mca_btl_tcp.so(+0xadac)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f5e935c3dac]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 3] /home/magomedov/openmpi/lib/libopen-pal.so.0(+0x27611)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f5e96575611]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 4] /home/magomedov/openmpi/lib/libopen-pal.so.0(+0x27c57)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f5e96575c57]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 5] /home/magomedov/openmpi/lib/libopen-pal.so.0(opal_event_loop+0x1f)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f5e96575848]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 6] /home/magomedov/openmpi/lib/libopen-pal.so.0(opal_progress+0x89)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f5e965648dd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 7] /home/magomedov/openmpi/lib/openmpi/mca_pml_ob1.so(+0x762f)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f5e9406e62f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 8] /home/magomedov/openmpi/lib/openmpi/mca_pml_ob1.so(+0x777d)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f5e9406e77d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 9] /home/magomedov/openmpi/lib/openmpi/mca_pml_ob1.so(+0x8246)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f5e9406f246]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858] [10] /home/magomedov/openmpi/lib/libmpi.so.0(MPI_Recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +0x2d2) [0x7f5e96af832c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [11] /home/magomedov/workspace/mpi-test/mpi-send-test(main+0x1e4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x400ee8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858] [12] /lib64/libc.so.6(__libc_start_main+0xfd)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x360001eb1d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [13] /home/magomedov/workspace/mpi-test/mpi-send-test() [0x400c49]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxtche:28858] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 28858 on node linuxtche
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I am trying to send &gt;= 65537 bytes from x86 I always get segfault on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x86_64.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I made some investigations and found that &quot;bad&quot; pointer always has a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valid pointer actually in it's lower 32-bit word and &quot;2&quot; or &quot;1&quot; in it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; upper word. Program segfaults in pml_ob1_recvfrag.c, in function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_ob1_recv_frag_callback_fin(), rdma pointer is broken. I inserted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rdma = (mca_btl_base_descriptor_t*)((unsigned long)rdma &amp; 0xFFFFFFFF);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line which I believe truncates 64-bit pointer to 32 bits and segfaults
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disappeared. However, this is not the solution.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After some investigations with gdb it seems to me like this pointer was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sent to x86 machine and was received from it broken but I don't realize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what is going on enough to fix it...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anyone reproduce it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got the same results on openmpi-1.4.2rc1 too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like the same problem was described here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/02/12182.php">http://www.open-mpi.org/community/lists/users/2010/02/12182.php</a> in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi-users list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Timur Magomedov
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Senior C++ Developer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DevelopOnBox LLC / Zodiac Interactive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.zodiac.tv/">http://www.zodiac.tv/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mpi-send-test.c&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Timur Magomedov
</span><br>
<span class="quotelev1">&gt; Senior C++ Developer
</span><br>
<span class="quotelev1">&gt; DevelopOnBox LLC / Zodiac Interactive
</span><br>
<span class="quotelev1">&gt; <a href="http://www.zodiac.tv/">http://www.zodiac.tv/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7800.php">George Bosilca: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<li><strong>Previous message:</strong> <a href="7798.php">hu yaohui: "[OMPI devel] OpenMPI &#215;&#220;&#189;&#225;"</a>
<li><strong>In reply to:</strong> <a href="7797.php">Timur Magomedov: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
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
