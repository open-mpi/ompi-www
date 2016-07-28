<?
$subject_val = "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 23 03:43:46 2010" -->
<!-- isoreceived="20100423074346" -->
<!-- sent="Fri, 23 Apr 2010 11:43:37 +0400" -->
<!-- isosent="20100423074337" -->
<!-- name="Timur Magomedov" -->
<!-- email="timur.magomedov_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment" -->
<!-- id="1272008617.2082.8.camel_at_magomedov-desktop" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="68C765E4-7A53-485B-B86F-C4C00F96291A_at_eecs.utk.edu" -->
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
<strong>From:</strong> Timur Magomedov (<em>timur.magomedov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-23 03:43:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7798.php">hu yaohui: "[OMPI devel] OpenMPI &#215;&#220;&#189;&#225;"</a>
<li><strong>Previous message:</strong> <a href="7796.php">George Bosilca: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="7796.php">George Bosilca: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7799.php">George Bosilca: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>Reply:</strong> <a href="7799.php">George Bosilca: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, George!
<br>
I checked out trunk version 1.7a1r23028 and got the same errors as on
<br>
1.4.*. Then I applied your patch, fixed one more file 
<br>
<p>Index: pml_ob1_recvreq.c
<br>
===================================================================
<br>
--- pml_ob1_recvreq.c	(revision 23028)
<br>
+++ pml_ob1_recvreq.c	(working copy)
<br>
@@ -331,7 +331,7 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_send_fin(recvreq-&gt;req_recv.req_base.req_proc,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bml_btl,
<br>
-                         frag-&gt;rdma_hdr.hdr_rget.hdr_des.pval,
<br>
+                         frag-&gt;rdma_hdr.hdr_rget.hdr_des,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;des-&gt;order, 0); 
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* is receive request complete */
<br>
<p>and the problem disappeared.
<br>
<p>&#208;&#146; &#208;&#159;&#209;&#130;&#208;&#189;, 23/04/2010 &#208;&#178; 01:38 -0400, George Bosilca &#208;&#191;&#208;&#184;&#209;&#136;&#208;&#181;&#209;&#130;:
<br>
<span class="quotelev1">&gt; Timur,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the very detailed analysis of the problem. Based on your observations, I was able to track down the issue pretty quickly. In few words, the 64 bits machine sent a pointer to the 32 bits one, and expected that it will get it back untouched. Unfortunately, on the 32 bits machine this pointer was translated into a void* and the upper 32 bits were lost.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have a heterogeneous environment available right away to test my patch. I would really appreciate it if you can test it and let us know if it solve this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: In order to apply it, please go in the ompi/mca/pml/ob1 directory and do the &quot;patch -p0&quot; from there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 22, 2010, at 09:08 , Timur Magomedov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello, list.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have a strange segmentation fault on x86_64 machine running together
</span><br>
<span class="quotelev2">&gt; &gt; with x86.
</span><br>
<span class="quotelev2">&gt; &gt; I am running attached program that sends some bytes from process 0 to
</span><br>
<span class="quotelev2">&gt; &gt; process 1. My configuration is:
</span><br>
<span class="quotelev2">&gt; &gt; Machine #1: (process 0)
</span><br>
<span class="quotelev2">&gt; &gt;  arch: x86
</span><br>
<span class="quotelev2">&gt; &gt;  hostname: magomedov-desktop
</span><br>
<span class="quotelev2">&gt; &gt;  linux distro: Ubuntu 9.10
</span><br>
<span class="quotelev2">&gt; &gt;  Open MPI: v1.4 configured with --enable-heterogeneous --enable-debug
</span><br>
<span class="quotelev2">&gt; &gt; Machine #2: (process 1)
</span><br>
<span class="quotelev2">&gt; &gt;  arch: x86_64
</span><br>
<span class="quotelev2">&gt; &gt;  hostname: linuxtche
</span><br>
<span class="quotelev2">&gt; &gt;  linux distro: Fedora 12
</span><br>
<span class="quotelev2">&gt; &gt;  Open MPI: v1.4 configured with --enable-heterogeneous
</span><br>
<span class="quotelev2">&gt; &gt; --prefix=/home/magomedov/openmpi/ --enable-debug
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; They are connected by ethernet.
</span><br>
<span class="quotelev2">&gt; &gt; My user environment on second (x86_64) machine is set up to use Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; from /home/magomedov/openmpi/.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Then I compile attached program on both machines (at the same path) and
</span><br>
<span class="quotelev2">&gt; &gt; run it. Process 0 from x86 machine should send data to process 1 on
</span><br>
<span class="quotelev2">&gt; &gt; x86_64 machine.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; First, let's send 65530 bytes:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -host timur,linuxtche -np
</span><br>
<span class="quotelev2">&gt; &gt; 2 /home/magomedov/workspace/mpi-test/mpi-send-test 65530
</span><br>
<span class="quotelev2">&gt; &gt; magomedov_at_linuxtche's password: 
</span><br>
<span class="quotelev2">&gt; &gt; *** processor magomedov-desktop, comm size is 2, my rank is 0, pid 21875
</span><br>
<span class="quotelev2">&gt; &gt; ***
</span><br>
<span class="quotelev2">&gt; &gt; *** processor linuxtche, comm size is 2, my rank is 1, pid 11357 ***
</span><br>
<span class="quotelev2">&gt; &gt; Received 65530 bytes
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It's OK. Then let's send 65537 bytes:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; magomedov_at_magomedov-desktop:~/workspace/mpi-test$ mpirun -host
</span><br>
<span class="quotelev2">&gt; &gt; timur,linuxtche -np 2 /home/magomedov/workspace/mpi-test/mpi-send-test
</span><br>
<span class="quotelev2">&gt; &gt; 65537
</span><br>
<span class="quotelev2">&gt; &gt; magomedov_at_linuxtche's password: 
</span><br>
<span class="quotelev2">&gt; &gt; *** processor magomedov-desktop, comm size is 2, my rank is 0, pid 9205
</span><br>
<span class="quotelev2">&gt; &gt; ***
</span><br>
<span class="quotelev2">&gt; &gt; *** processor linuxtche, comm size is 2, my rank is 1, pid 28858 ***
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858] Failing at address: 0x201143bf8
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858] [ 0] /lib64/libpthread.so.0() [0x3600c0f0f0]
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858]
</span><br>
<span class="quotelev2">&gt; &gt; [ 1] /home/magomedov/openmpi/lib/openmpi/mca_pml_ob1.so(+0xfc27)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f5e94076c27]
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858]
</span><br>
<span class="quotelev2">&gt; &gt; [ 2] /home/magomedov/openmpi/lib/openmpi/mca_btl_tcp.so(+0xadac)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f5e935c3dac]
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858]
</span><br>
<span class="quotelev2">&gt; &gt; [ 3] /home/magomedov/openmpi/lib/libopen-pal.so.0(+0x27611)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f5e96575611]
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858]
</span><br>
<span class="quotelev2">&gt; &gt; [ 4] /home/magomedov/openmpi/lib/libopen-pal.so.0(+0x27c57)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f5e96575c57]
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858]
</span><br>
<span class="quotelev2">&gt; &gt; [ 5] /home/magomedov/openmpi/lib/libopen-pal.so.0(opal_event_loop+0x1f)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f5e96575848]
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858]
</span><br>
<span class="quotelev2">&gt; &gt; [ 6] /home/magomedov/openmpi/lib/libopen-pal.so.0(opal_progress+0x89)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f5e965648dd]
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858]
</span><br>
<span class="quotelev2">&gt; &gt; [ 7] /home/magomedov/openmpi/lib/openmpi/mca_pml_ob1.so(+0x762f)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f5e9406e62f]
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858]
</span><br>
<span class="quotelev2">&gt; &gt; [ 8] /home/magomedov/openmpi/lib/openmpi/mca_pml_ob1.so(+0x777d)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f5e9406e77d]
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858]
</span><br>
<span class="quotelev2">&gt; &gt; [ 9] /home/magomedov/openmpi/lib/openmpi/mca_pml_ob1.so(+0x8246)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f5e9406f246]
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858] [10] /home/magomedov/openmpi/lib/libmpi.so.0(MPI_Recv
</span><br>
<span class="quotelev2">&gt; &gt; +0x2d2) [0x7f5e96af832c]
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858]
</span><br>
<span class="quotelev2">&gt; &gt; [11] /home/magomedov/workspace/mpi-test/mpi-send-test(main+0x1e4)
</span><br>
<span class="quotelev2">&gt; &gt; [0x400ee8]
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858] [12] /lib64/libc.so.6(__libc_start_main+0xfd)
</span><br>
<span class="quotelev2">&gt; &gt; [0x360001eb1d]
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858]
</span><br>
<span class="quotelev2">&gt; &gt; [13] /home/magomedov/workspace/mpi-test/mpi-send-test() [0x400c49]
</span><br>
<span class="quotelev2">&gt; &gt; [linuxtche:28858] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that process rank 1 with PID 28858 on node linuxtche
</span><br>
<span class="quotelev2">&gt; &gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If I am trying to send &gt;= 65537 bytes from x86 I always get segfault on
</span><br>
<span class="quotelev2">&gt; &gt; x86_64.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I made some investigations and found that &quot;bad&quot; pointer always has a
</span><br>
<span class="quotelev2">&gt; &gt; valid pointer actually in it's lower 32-bit word and &quot;2&quot; or &quot;1&quot; in it's
</span><br>
<span class="quotelev2">&gt; &gt; upper word. Program segfaults in pml_ob1_recvfrag.c, in function
</span><br>
<span class="quotelev2">&gt; &gt; mca_pml_ob1_recv_frag_callback_fin(), rdma pointer is broken. I inserted
</span><br>
<span class="quotelev2">&gt; &gt; rdma = (mca_btl_base_descriptor_t*)((unsigned long)rdma &amp; 0xFFFFFFFF);
</span><br>
<span class="quotelev2">&gt; &gt; line which I believe truncates 64-bit pointer to 32 bits and segfaults
</span><br>
<span class="quotelev2">&gt; &gt; disappeared. However, this is not the solution.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; After some investigations with gdb it seems to me like this pointer was
</span><br>
<span class="quotelev2">&gt; &gt; sent to x86 machine and was received from it broken but I don't realize
</span><br>
<span class="quotelev2">&gt; &gt; what is going on enough to fix it...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can anyone reproduce it?
</span><br>
<span class="quotelev2">&gt; &gt; I got the same results on openmpi-1.4.2rc1 too.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It looks like the same problem was described here
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2010/02/12182.php">http://www.open-mpi.org/community/lists/users/2010/02/12182.php</a> in
</span><br>
<span class="quotelev2">&gt; &gt; ompi-users list.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards,
</span><br>
<span class="quotelev2">&gt; &gt; Timur Magomedov
</span><br>
<span class="quotelev2">&gt; &gt; Senior C++ Developer
</span><br>
<span class="quotelev2">&gt; &gt; DevelopOnBox LLC / Zodiac Interactive
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.zodiac.tv/">http://www.zodiac.tv/</a>
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mpi-send-test.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="7798.php">hu yaohui: "[OMPI devel] OpenMPI &#215;&#220;&#189;&#225;"</a>
<li><strong>Previous message:</strong> <a href="7796.php">George Bosilca: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="7796.php">George Bosilca: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7799.php">George Bosilca: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>Reply:</strong> <a href="7799.php">George Bosilca: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
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
