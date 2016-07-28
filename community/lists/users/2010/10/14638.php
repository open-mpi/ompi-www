<?
$subject_val = "[OMPI users] Help with a strange error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 28 11:59:26 2010" -->
<!-- isoreceived="20101028155926" -->
<!-- sent="Thu, 28 Oct 2010 17:59:22 +0200" -->
<!-- isosent="20101028155922" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] Help with a strange error" -->
<!-- id="AANLkTikwdynQjsPiUSs49YoxJNsoC_rTqXRgE1t=hmSb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Help with a strange error<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-28 11:59:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14639.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14637.php">Eugene Loh: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I have a (rather complex) OpenMPI application which works nicely.
<br>
In the main file i have the function main(), in which MPI_Comm_size()
<br>
and MPI_Comm_rank() are being called.
<br>
<p>However, when i add a function check() to the main file, process 0 will
<br>
crash in PMPI_Comm_size(), even when the function check() is not called!
<br>
All other processes hang inside PMPI_Init().
<br>
The crash also occurs when the function check() is written after the
<br>
function main
<br>
<p>The gdb stack trace for process 0:
<br>
Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread -1208715568 (LWP 10072)]
<br>
0x0016cb16 in PMPI_Comm_size () from /opt/openmpi/lib/libmpi.so.0
<br>
Current language:  auto; currently c
<br>
(gdb) where
<br>
#0  0x0016cb16 in PMPI_Comm_size () from /opt/openmpi/lib/libmpi.so.0
<br>
#1  0x080c379d in main (iArgC=14, apArgV=0xbfc60bc4) at TDMain.cpp:22
<br>
Missing separate debuginfos, use: debuginfo-install gcc.i386 zlib.i386
<br>
(gdb)
<br>
<p>I am using OpenMPI 1.4.2
<br>
<p>Has anybody got an idea how i could find the problem?
<br>
Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14639.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14637.php">Eugene Loh: "Re: [OMPI users] Using hostfile with default hostfile"</a>
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
