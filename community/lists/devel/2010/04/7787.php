<?
$subject_val = "[OMPI devel] Segmentation fault on x86_64 on heterogeneous environment";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 09:08:36 2010" -->
<!-- isoreceived="20100422130836" -->
<!-- sent="Thu, 22 Apr 2010 17:08:24 +0400" -->
<!-- isosent="20100422130824" -->
<!-- name="Timur Magomedov" -->
<!-- email="timur.magomedov_at_[hidden]" -->
<!-- subject="[OMPI devel] Segmentation fault on x86_64 on heterogeneous environment" -->
<!-- id="1271941705.2086.60.camel_at_magomedov-desktop" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment<br>
<strong>From:</strong> Timur Magomedov (<em>timur.magomedov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 09:08:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7788.php">Jeff Squyres: "Re: [OMPI devel] New OMPI MPI extension"</a>
<li><strong>Previous message:</strong> <a href="7786.php">Pascal Deveze: "[OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7796.php">George Bosilca: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>Reply:</strong> <a href="7796.php">George Bosilca: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, list.
<br>
<p>I have a strange segmentation fault on x86_64 machine running together
<br>
with x86.
<br>
I am running attached program that sends some bytes from process 0 to
<br>
process 1. My configuration is:
<br>
Machine #1: (process 0)
<br>
&nbsp;&nbsp;arch: x86
<br>
&nbsp;&nbsp;hostname: magomedov-desktop
<br>
&nbsp;&nbsp;linux distro: Ubuntu 9.10
<br>
&nbsp;&nbsp;Open MPI: v1.4 configured with --enable-heterogeneous --enable-debug
<br>
Machine #2: (process 1)
<br>
&nbsp;&nbsp;arch: x86_64
<br>
&nbsp;&nbsp;hostname: linuxtche
<br>
&nbsp;&nbsp;linux distro: Fedora 12
<br>
&nbsp;&nbsp;Open MPI: v1.4 configured with --enable-heterogeneous
<br>
--prefix=/home/magomedov/openmpi/ --enable-debug
<br>
<p>They are connected by ethernet.
<br>
My user environment on second (x86_64) machine is set up to use Open MPI
<br>
from /home/magomedov/openmpi/.
<br>
<p>Then I compile attached program on both machines (at the same path) and
<br>
run it. Process 0 from x86 machine should send data to process 1 on
<br>
x86_64 machine.
<br>
<p>First, let's send 65530 bytes:
<br>
<p>mpirun -host timur,linuxtche -np
<br>
2 /home/magomedov/workspace/mpi-test/mpi-send-test 65530
<br>
magomedov_at_linuxtche's password: 
<br>
*** processor magomedov-desktop, comm size is 2, my rank is 0, pid 21875
<br>
***
<br>
*** processor linuxtche, comm size is 2, my rank is 1, pid 11357 ***
<br>
Received 65530 bytes
<br>
<p>It's OK. Then let's send 65537 bytes:
<br>
<p>magomedov_at_magomedov-desktop:~/workspace/mpi-test$ mpirun -host
<br>
timur,linuxtche -np 2 /home/magomedov/workspace/mpi-test/mpi-send-test
<br>
65537
<br>
magomedov_at_linuxtche's password: 
<br>
*** processor magomedov-desktop, comm size is 2, my rank is 0, pid 9205
<br>
***
<br>
*** processor linuxtche, comm size is 2, my rank is 1, pid 28858 ***
<br>
[linuxtche:28858] *** Process received signal ***
<br>
[linuxtche:28858] Signal: Segmentation fault (11)
<br>
[linuxtche:28858] Signal code: Address not mapped (1)
<br>
[linuxtche:28858] Failing at address: 0x201143bf8
<br>
[linuxtche:28858] [ 0] /lib64/libpthread.so.0() [0x3600c0f0f0]
<br>
[linuxtche:28858]
<br>
[ 1] /home/magomedov/openmpi/lib/openmpi/mca_pml_ob1.so(+0xfc27)
<br>
[0x7f5e94076c27]
<br>
[linuxtche:28858]
<br>
[ 2] /home/magomedov/openmpi/lib/openmpi/mca_btl_tcp.so(+0xadac)
<br>
[0x7f5e935c3dac]
<br>
[linuxtche:28858]
<br>
[ 3] /home/magomedov/openmpi/lib/libopen-pal.so.0(+0x27611)
<br>
[0x7f5e96575611]
<br>
[linuxtche:28858]
<br>
[ 4] /home/magomedov/openmpi/lib/libopen-pal.so.0(+0x27c57)
<br>
[0x7f5e96575c57]
<br>
[linuxtche:28858]
<br>
[ 5] /home/magomedov/openmpi/lib/libopen-pal.so.0(opal_event_loop+0x1f)
<br>
[0x7f5e96575848]
<br>
[linuxtche:28858]
<br>
[ 6] /home/magomedov/openmpi/lib/libopen-pal.so.0(opal_progress+0x89)
<br>
[0x7f5e965648dd]
<br>
[linuxtche:28858]
<br>
[ 7] /home/magomedov/openmpi/lib/openmpi/mca_pml_ob1.so(+0x762f)
<br>
[0x7f5e9406e62f]
<br>
[linuxtche:28858]
<br>
[ 8] /home/magomedov/openmpi/lib/openmpi/mca_pml_ob1.so(+0x777d)
<br>
[0x7f5e9406e77d]
<br>
[linuxtche:28858]
<br>
[ 9] /home/magomedov/openmpi/lib/openmpi/mca_pml_ob1.so(+0x8246)
<br>
[0x7f5e9406f246]
<br>
[linuxtche:28858] [10] /home/magomedov/openmpi/lib/libmpi.so.0(MPI_Recv
<br>
+0x2d2) [0x7f5e96af832c]
<br>
[linuxtche:28858]
<br>
[11] /home/magomedov/workspace/mpi-test/mpi-send-test(main+0x1e4)
<br>
[0x400ee8]
<br>
[linuxtche:28858] [12] /lib64/libc.so.6(__libc_start_main+0xfd)
<br>
[0x360001eb1d]
<br>
[linuxtche:28858]
<br>
[13] /home/magomedov/workspace/mpi-test/mpi-send-test() [0x400c49]
<br>
[linuxtche:28858] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 28858 on node linuxtche
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>If I am trying to send &gt;= 65537 bytes from x86 I always get segfault on
<br>
x86_64.
<br>
<p>I made some investigations and found that &quot;bad&quot; pointer always has a
<br>
valid pointer actually in it's lower 32-bit word and &quot;2&quot; or &quot;1&quot; in it's
<br>
upper word. Program segfaults in pml_ob1_recvfrag.c, in function
<br>
mca_pml_ob1_recv_frag_callback_fin(), rdma pointer is broken. I inserted
<br>
rdma = (mca_btl_base_descriptor_t*)((unsigned long)rdma &amp; 0xFFFFFFFF);
<br>
line which I believe truncates 64-bit pointer to 32 bits and segfaults
<br>
disappeared. However, this is not the solution.
<br>
<p>After some investigations with gdb it seems to me like this pointer was
<br>
sent to x86 machine and was received from it broken but I don't realize
<br>
what is going on enough to fix it...
<br>
<p>Can anyone reproduce it?
<br>
I got the same results on openmpi-1.4.2rc1 too.
<br>
<p>It looks like the same problem was described here
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/02/12182.php">http://www.open-mpi.org/community/lists/users/2010/02/12182.php</a> in
<br>
ompi-users list.
<br>
<p><pre>
-- 
Kind regards,
Timur Magomedov
Senior C++ Developer
DevelopOnBox LLC / Zodiac Interactive
<a href="http://www.zodiac.tv/">http://www.zodiac.tv/</a>

</pre>
<p>
<p><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7787/mpi-send-test.c">mpi-send-test.c</a>
</ul>
<!-- attachment="mpi-send-test.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7788.php">Jeff Squyres: "Re: [OMPI devel] New OMPI MPI extension"</a>
<li><strong>Previous message:</strong> <a href="7786.php">Pascal Deveze: "[OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7796.php">George Bosilca: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>Reply:</strong> <a href="7796.php">George Bosilca: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
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
