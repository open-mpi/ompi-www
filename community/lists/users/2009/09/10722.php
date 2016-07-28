<?
$subject_val = "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 11:42:17 2009" -->
<!-- isoreceived="20090922154217" -->
<!-- sent="Tue, 22 Sep 2009 08:43:11 -0700" -->
<!-- isosent="20090922154311" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?" -->
<!-- id="4AB8F08F.4010002_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="COL102-W1609734903C2BD74E663ADA8DC0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-22 11:43:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10723.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10721.php">jody: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="10716.php">guosong: "[OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10723.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10723.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=GB2312" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
guosong wrote:
<blockquote cite="midCOL102-W1609734903C2BD74E663ADA8DC0@phx.gbl"
 type="cite">
  <style><!--
.hmmessage P
{
margin:0px;
padding:0px
}
body.hmmessage
{
font-size: 10pt;
font-family:Verdana
}
--></style>Hi
all,<br>
I would like to write a multi-thread parallel program. I used pthread.
Basicly, I want to create two background threads besides&nbsp;&nbsp;the main
thread(process). For example, if I use&nbsp;"-np 4",&nbsp;the program should have
4 main processes on four processors and two background threads for each
main process. So there&nbsp;should be 8 threads totally.</blockquote>
Wouldn't there be 4 main threads and 8 "slave" threads for a total of
12 threads?&nbsp; Anyhow, doesn't matter.<br>
<br>
I'm not sure where you're starting, but you should at least have a
basic understanding of the different sorts of multithreaded programming
models in MPI.&nbsp; One is that each process is single threaded.&nbsp; Another
is the processes are multithreaded, but only the main thread makes MPI
calls.&nbsp; Another is multithreaded, but only one MPI call at a time.&nbsp;
Finally, there can be full multithreading.&nbsp; You have to decide which of
these programming models you want and which is supported by your MPI
(or, if OMPI, how OMPI was built).<br>
<br>
For more information, try the MPI_Init_thread() man page or<br>
<a class="moz-txt-link-freetext" href="http://www.mpi-forum.org./docs/mpi21-report.pdf">http://www.mpi-forum.org./docs/mpi21-report.pdf</a> ... see Section 12.4 on
"MPI and Threads".<br>
<blockquote cite="midCOL102-W1609734903C2BD74E663ADA8DC0@phx.gbl"
 type="cite">I wrote a test program and it worked unpredictable.
Sometimes I got the result I want, but sometimes&nbsp;the program got
segmentation fault. I used MPI_Isend and MPI_Irecv for sending and
recving. I do&nbsp;not know why? I attached the error message as follow:<br>
&nbsp;<br>
[cheetah:29780] *** Process received signal ***<br>
[cheetah:29780] Signal: Segmentation fault (11)<br>
[cheetah:29780] Signal code: Address not mapped (1)<br>
[cheetah:29780] Failing at address: 0x10<br>
[cheetah:29779] *** Process received signal ***<br>
[cheetah:29779] Signal: Segmentation fault (11)<br>
[cheetah:29779] Signal code: Address not mapped (1)<br>
[cheetah:29779] Failing at address: 0x10<br>
[cheetah:29780] [ 0] /lib64/libpthread.so.0 [0x334b00de70]<br>
[cheetah:29780] [ 1] /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so
[0x2b90e1227940]<br>
[cheetah:29780] [ 2] /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so
[0x2b90e05d61ca]<br>
[cheetah:29780] [ 3] /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so
[0x2b90e05cac86]<br>
[cheetah:29780] [ 4] /act/openmpi/gnu/lib/libmpi.so.0(PMPI_Send+0x13d)
[0x2b90dde7271d]<br>
[cheetah:29780] [ 5] pt_muti(_Z6backIDPv+0x29b) [0x409929]<br>
[cheetah:29780] [ 6] /lib64/libpthread.so.0 [0x334b0062f7]<br>
[cheetah:29780] [ 7] /lib64/libc.so.6(clone+0x6d) [0x334! a4d1e3d]<br>
[cheetah:29780] *** End of error message ***<br>
[cheetah:29779] [ 0] /lib64/libpthread.so.0 [0x334b00de70]<br>
[cheetah:29779] [ 1] /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so
[0x2b39785c0940]<br>
[cheetah:29779] [ 2] /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so
[0x2b397796f1ca]<br>
[cheetah:29779] [ 3] /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so
[0x2b3977963c86]<br>
[cheetah:29779] [ 4] /act/openmpi/gnu/lib/libmpi.so.0(PMPI_Send+0x13d)
[0x2b397520b71d]<br>
[cheetah:29779] [ 5] pt_muti(_Z6backIDPv+0x29b) [0x409929]<br>
[cheetah:29779] [ 6] /lib64/libpthread.so.0 [0x334b0062f7]<br>
[cheetah:29779] [ 7] /lib64/libc.so.6(clone+0x6d) [0x334a4d1e3d]<br>
[cheetah:29779] *** End of error message ***<br>
  <br>
&nbsp;<br>
I used gdb to "bt" the error and I got :<br>
&nbsp;Program terminated with signal 11, Segmentation fault.<br>
#0&nbsp; 0x00002b90e1227940 in mca_btl_sm_alloc ()<br>
&nbsp;&nbsp; from /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so<br>
(gdb) bt<br>
#0&nbsp; 0x00002b90e1227940 in mca_btl_sm_alloc ()<br>
&nbsp;&nbsp; from /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so<br>
#1&nbsp; 0x00002b90e05d61ca in mca_pml_ob1_send_request_start_copy ()<br>
&nbsp;&nbsp; from /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so<br>
#2&nbsp; 0x00002b90e05cac86 in mca_pml_ob1_send ()<br>
&nbsp;&nbsp; from /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so<br>
#3&nbsp; 0x00002b90dde7271d in PMPI_Send () from
/act/openmpi/gnu/lib/libmpi.so.0<br>
#4&nbsp; 0x0000000000409929 in backID (arg=0x0) at pt_muti.cpp:50<br>
#5&nbsp; 0x000000334b0062f7 in start_thread () from /lib64/libpthread.so.0<br>
#6&nbsp; 0x000000334a4d1e3d in clone () from /lib64/libc.so.6<br>
So can anyone give me some suggestions or advice. Thanks very much.</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10723.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10721.php">jody: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="10716.php">guosong: "[OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10723.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10723.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
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
