<?
$subject_val = "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 23 01:38:56 2010" -->
<!-- isoreceived="20100423053856" -->
<!-- sent="Fri, 23 Apr 2010 01:38:46 -0400" -->
<!-- isosent="20100423053846" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment" -->
<!-- id="68C765E4-7A53-485B-B86F-C4C00F96291A_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1271941705.2086.60.camel_at_magomedov-desktop" -->
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
<strong>Date:</strong> 2010-04-23 01:38:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7797.php">Timur Magomedov: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="7795.php">Ralph Castain: "[OMPI devel] Errmgr update"</a>
<li><strong>In reply to:</strong> <a href="7787.php">Timur Magomedov: "[OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7797.php">Timur Magomedov: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>Reply:</strong> <a href="7797.php">Timur Magomedov: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Timur,
<br>
<p>Thanks for the very detailed analysis of the problem. Based on your observations, I was able to track down the issue pretty quickly. In few words, the 64 bits machine sent a pointer to the 32 bits one, and expected that it will get it back untouched. Unfortunately, on the 32 bits machine this pointer was translated into a void* and the upper 32 bits were lost.
<br>
<p>I don't have a heterogeneous environment available right away to test my patch. I would really appreciate it if you can test it and let us know if it solve this problem.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>PS: In order to apply it, please go in the ompi/mca/pml/ob1 directory and do the &quot;patch -p0&quot; from there.
<br>
<p>

<br><p>
<p><p>On Apr 22, 2010, at 09:08 , Timur Magomedov wrote:
<br>
<p><span class="quotelev1">&gt; Hello, list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a strange segmentation fault on x86_64 machine running together
</span><br>
<span class="quotelev1">&gt; with x86.
</span><br>
<span class="quotelev1">&gt; I am running attached program that sends some bytes from process 0 to
</span><br>
<span class="quotelev1">&gt; process 1. My configuration is:
</span><br>
<span class="quotelev1">&gt; Machine #1: (process 0)
</span><br>
<span class="quotelev1">&gt;  arch: x86
</span><br>
<span class="quotelev1">&gt;  hostname: magomedov-desktop
</span><br>
<span class="quotelev1">&gt;  linux distro: Ubuntu 9.10
</span><br>
<span class="quotelev1">&gt;  Open MPI: v1.4 configured with --enable-heterogeneous --enable-debug
</span><br>
<span class="quotelev1">&gt; Machine #2: (process 1)
</span><br>
<span class="quotelev1">&gt;  arch: x86_64
</span><br>
<span class="quotelev1">&gt;  hostname: linuxtche
</span><br>
<span class="quotelev1">&gt;  linux distro: Fedora 12
</span><br>
<span class="quotelev1">&gt;  Open MPI: v1.4 configured with --enable-heterogeneous
</span><br>
<span class="quotelev1">&gt; --prefix=/home/magomedov/openmpi/ --enable-debug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They are connected by ethernet.
</span><br>
<span class="quotelev1">&gt; My user environment on second (x86_64) machine is set up to use Open MPI
</span><br>
<span class="quotelev1">&gt; from /home/magomedov/openmpi/.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then I compile attached program on both machines (at the same path) and
</span><br>
<span class="quotelev1">&gt; run it. Process 0 from x86 machine should send data to process 1 on
</span><br>
<span class="quotelev1">&gt; x86_64 machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, let's send 65530 bytes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -host timur,linuxtche -np
</span><br>
<span class="quotelev1">&gt; 2 /home/magomedov/workspace/mpi-test/mpi-send-test 65530
</span><br>
<span class="quotelev1">&gt; magomedov_at_linuxtche's password: 
</span><br>
<span class="quotelev1">&gt; *** processor magomedov-desktop, comm size is 2, my rank is 0, pid 21875
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; *** processor linuxtche, comm size is 2, my rank is 1, pid 11357 ***
</span><br>
<span class="quotelev1">&gt; Received 65530 bytes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's OK. Then let's send 65537 bytes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; magomedov_at_magomedov-desktop:~/workspace/mpi-test$ mpirun -host
</span><br>
<span class="quotelev1">&gt; timur,linuxtche -np 2 /home/magomedov/workspace/mpi-test/mpi-send-test
</span><br>
<span class="quotelev1">&gt; 65537
</span><br>
<span class="quotelev1">&gt; magomedov_at_linuxtche's password: 
</span><br>
<span class="quotelev1">&gt; *** processor magomedov-desktop, comm size is 2, my rank is 0, pid 9205
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; *** processor linuxtche, comm size is 2, my rank is 1, pid 28858 ***
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858] Failing at address: 0x201143bf8
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858] [ 0] /lib64/libpthread.so.0() [0x3600c0f0f0]
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858]
</span><br>
<span class="quotelev1">&gt; [ 1] /home/magomedov/openmpi/lib/openmpi/mca_pml_ob1.so(+0xfc27)
</span><br>
<span class="quotelev1">&gt; [0x7f5e94076c27]
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858]
</span><br>
<span class="quotelev1">&gt; [ 2] /home/magomedov/openmpi/lib/openmpi/mca_btl_tcp.so(+0xadac)
</span><br>
<span class="quotelev1">&gt; [0x7f5e935c3dac]
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858]
</span><br>
<span class="quotelev1">&gt; [ 3] /home/magomedov/openmpi/lib/libopen-pal.so.0(+0x27611)
</span><br>
<span class="quotelev1">&gt; [0x7f5e96575611]
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858]
</span><br>
<span class="quotelev1">&gt; [ 4] /home/magomedov/openmpi/lib/libopen-pal.so.0(+0x27c57)
</span><br>
<span class="quotelev1">&gt; [0x7f5e96575c57]
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858]
</span><br>
<span class="quotelev1">&gt; [ 5] /home/magomedov/openmpi/lib/libopen-pal.so.0(opal_event_loop+0x1f)
</span><br>
<span class="quotelev1">&gt; [0x7f5e96575848]
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858]
</span><br>
<span class="quotelev1">&gt; [ 6] /home/magomedov/openmpi/lib/libopen-pal.so.0(opal_progress+0x89)
</span><br>
<span class="quotelev1">&gt; [0x7f5e965648dd]
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858]
</span><br>
<span class="quotelev1">&gt; [ 7] /home/magomedov/openmpi/lib/openmpi/mca_pml_ob1.so(+0x762f)
</span><br>
<span class="quotelev1">&gt; [0x7f5e9406e62f]
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858]
</span><br>
<span class="quotelev1">&gt; [ 8] /home/magomedov/openmpi/lib/openmpi/mca_pml_ob1.so(+0x777d)
</span><br>
<span class="quotelev1">&gt; [0x7f5e9406e77d]
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858]
</span><br>
<span class="quotelev1">&gt; [ 9] /home/magomedov/openmpi/lib/openmpi/mca_pml_ob1.so(+0x8246)
</span><br>
<span class="quotelev1">&gt; [0x7f5e9406f246]
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858] [10] /home/magomedov/openmpi/lib/libmpi.so.0(MPI_Recv
</span><br>
<span class="quotelev1">&gt; +0x2d2) [0x7f5e96af832c]
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858]
</span><br>
<span class="quotelev1">&gt; [11] /home/magomedov/workspace/mpi-test/mpi-send-test(main+0x1e4)
</span><br>
<span class="quotelev1">&gt; [0x400ee8]
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858] [12] /lib64/libc.so.6(__libc_start_main+0xfd)
</span><br>
<span class="quotelev1">&gt; [0x360001eb1d]
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858]
</span><br>
<span class="quotelev1">&gt; [13] /home/magomedov/workspace/mpi-test/mpi-send-test() [0x400c49]
</span><br>
<span class="quotelev1">&gt; [linuxtche:28858] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 28858 on node linuxtche
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I am trying to send &gt;= 65537 bytes from x86 I always get segfault on
</span><br>
<span class="quotelev1">&gt; x86_64.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I made some investigations and found that &quot;bad&quot; pointer always has a
</span><br>
<span class="quotelev1">&gt; valid pointer actually in it's lower 32-bit word and &quot;2&quot; or &quot;1&quot; in it's
</span><br>
<span class="quotelev1">&gt; upper word. Program segfaults in pml_ob1_recvfrag.c, in function
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_recv_frag_callback_fin(), rdma pointer is broken. I inserted
</span><br>
<span class="quotelev1">&gt; rdma = (mca_btl_base_descriptor_t*)((unsigned long)rdma &amp; 0xFFFFFFFF);
</span><br>
<span class="quotelev1">&gt; line which I believe truncates 64-bit pointer to 32 bits and segfaults
</span><br>
<span class="quotelev1">&gt; disappeared. However, this is not the solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After some investigations with gdb it seems to me like this pointer was
</span><br>
<span class="quotelev1">&gt; sent to x86 machine and was received from it broken but I don't realize
</span><br>
<span class="quotelev1">&gt; what is going on enough to fix it...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone reproduce it?
</span><br>
<span class="quotelev1">&gt; I got the same results on openmpi-1.4.2rc1 too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like the same problem was described here
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/02/12182.php">http://www.open-mpi.org/community/lists/users/2010/02/12182.php</a> in
</span><br>
<span class="quotelev1">&gt; ompi-users list.
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
<span class="quotelev1">&gt; &lt;mpi-send-test.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7796/heterogeneous.patch">heterogeneous.patch</a>
</ul>
<!-- attachment="heterogeneous.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7797.php">Timur Magomedov: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="7795.php">Ralph Castain: "[OMPI devel] Errmgr update"</a>
<li><strong>In reply to:</strong> <a href="7787.php">Timur Magomedov: "[OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7797.php">Timur Magomedov: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>Reply:</strong> <a href="7797.php">Timur Magomedov: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
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
