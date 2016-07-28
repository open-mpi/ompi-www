<?
$subject_val = "[OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 15:55:41 2016" -->
<!-- isoreceived="20160504195541" -->
<!-- sent="Wed, 4 May 2016 15:55:20 -0400" -->
<!-- isosent="20160504195520" -->
<!-- name="Iman Faraji" -->
<!-- email="i.faraji_at_[hidden]" -->
<!-- subject="[OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use" -->
<!-- id="CADOv2j3_5Exaavj0LUoLeavbZcCYXLTsbnZdLwqGYty2TJd_bQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use<br>
<strong>From:</strong> Iman Faraji (<em>i.faraji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-04 15:55:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29085.php">Zhen Wang: "[OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29083.php">Dave Love: "Re: [OMPI users] barrier algorithm 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29109.php">Jiri Kraus: "Re: [OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use"</a>
<li><strong>Maybe reply:</strong> <a href="29109.php">Jiri Kraus: "Re: [OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I am using multiple MPI non-blocking send receives on the GPU buffer
<br>
followed by a waitall at the end; I also repeat this process multiple times.
<br>
<p>The MPI version that I am using 1.10.2.
<br>
<p>When multiple processes are assigned to a single GPU (or when CUDA IPC is
<br>
used), I get the following error at the beginning
<br>
<p>The call to cuIpcGetEventHandle failed. This is a unrecoverable error and
<br>
will
<br>
cause the program to abort.
<br>
&nbsp;&nbsp;cuIpcGetEventHandle return value:   1
<br>
<p>and this at the end of my benchmark
<br>
<p>The call to cuEventDestory failed. This is a unrecoverable error and will
<br>
cause the program to abort.
<br>
&nbsp;&nbsp;cuEventDestory return value:   400
<br>
Check the cuda.h file for what the return value means.
<br>
<p><p>*Note1: *
<br>
<p>This error doesn't appear if only one iteration of the non-blocking
<br>
send/receive call is used (i.e., using MPI_Waitall only once )
<br>
<p>This error doesn't appear if multiple iterations are used by MPI_Waitall is
<br>
not included.
<br>
<p>*Note 2:*
<br>
<p>This error doesn't exist if the buffer is is allocated on the host.
<br>
<p>*Note 3:*
<br>
<p>This error doesn't exist if cuda_ipc is disabled or OMPI version 1.8.8 is
<br>
used.
<br>
<p><p>I'd appreciate if you let me know what causes this issue and how it can be
<br>
resolved.
<br>
<p>Regards,
<br>
Iman
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29084/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29085.php">Zhen Wang: "[OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29083.php">Dave Love: "Re: [OMPI users] barrier algorithm 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29109.php">Jiri Kraus: "Re: [OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use"</a>
<li><strong>Maybe reply:</strong> <a href="29109.php">Jiri Kraus: "Re: [OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use"</a>
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
