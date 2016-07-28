<?
$subject_val = "[OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 09:19:40 2011" -->
<!-- isoreceived="20110419131940" -->
<!-- sent="Tue, 19 Apr 2011 18:49:34 +0530" -->
<!-- isosent="20110419131934" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="[OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)" -->
<!-- id="BANLkTiky6ir=NCbwRxAGPNsDj+bpfyFD1A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)<br>
<strong>From:</strong> hi (<em>hiralsmaillist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-19 09:19:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16276.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<li><strong>Previous message:</strong> <a href="16274.php">Eloi Gaudry: "[OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16276.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<li><strong>Reply:</strong> <a href="16276.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On WINDOWS platform, I am observing following error when executing
<br>
&quot;mpirun blacs_hello_example.exe&quot; (example program to test BLACS taken
<br>
from <a href="http://www.netlib.org/blacs/BLACS/Examples.html#HELLO">http://www.netlib.org/blacs/BLACS/Examples.html#HELLO</a>)...
<br>
<p>C:\blacs_examples&gt; mpirun blacs_hello_example.exe
<br>
&nbsp;calling blacs_pinfo()...
<br>
forrtl: severe (157): Program Exception - access violation
<br>
Image              PC        Routine            Line        Source
<br>
libmpid.dll        6A8E2DC5  Unknown               Unknown  Unknown
<br>
libmpid.dll        6A8E2C31  Unknown               Unknown  Unknown
<br>
blacs_ex01.exe     00402357  Unknown               Unknown  Unknown
<br>
libifcorert.dll    1002A1C1  Unknown               Unknown  Unknown
<br>
[myhost1:15340] [[30379,0],0]-[[30379,1],0] mca_oob_tcp_msg_recv:
<br>
readv failed:Unknown error (10054)
<br>
--------------------------------------------------------------------------
<br>
mpirun.exe has exited due to process rank 0 with PID 528 on node
<br>
vibgyor exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in the
<br>
job did. This can cause a job to hang indefinitely while it waits for
<br>
all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun.exe (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>Environment:
<br>
OS: Windows 7 64-bit
<br>
Compilers: Visual Studio 2008 32bit and Intel ifort 32bit
<br>
OpenMPI: OpenMPI-1.5.3 pre-built libraries and also with
<br>
OpenMPI-1.5.2. locally built libraries
<br>
BLACS: pre-built libraries taken from
<br>
<a href="http://icl.cs.utk.edu/lapack-for-windows/scalapack/index.html#librairies">http://icl.cs.utk.edu/lapack-for-windows/scalapack/index.html#librairies</a>
<br>
<p>Any idea on how to resolve this???
<br>
<p>Thank you in advance.
<br>
-Hiral
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16276.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<li><strong>Previous message:</strong> <a href="16274.php">Eloi Gaudry: "[OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16276.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<li><strong>Reply:</strong> <a href="16276.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
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
