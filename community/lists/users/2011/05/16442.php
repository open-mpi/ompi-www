<?
$subject_val = "[OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 10:05:28 2011" -->
<!-- isoreceived="20110504140528" -->
<!-- sent="Wed, 4 May 2011 19:34:37 +0530" -->
<!-- isosent="20110504140437" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="[OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD" -->
<!-- id="BANLkTimH=2WkooA=E42op3GmjwGjLJ9EBQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD<br>
<strong>From:</strong> hi (<em>hiralsmaillist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-04 10:04:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16443.php">Peter Kjellström: "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<li><strong>Previous message:</strong> <a href="16441.php">Ralph Castain: "Re: [OMPI users] [Wrf-users] WRF Problem running in Parallel on multiple nodes(cluster)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16443.php">Peter Kjellström: "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<li><strong>Reply:</strong> <a href="16443.php">Peter Kjellström: "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings !!!
<br>
<p>I am observing following error messages when executing attached test program...
<br>
<p><p>C:\test&gt;mpirun mar_f.exe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0
<br>
&nbsp;size=           1 , rank=           0
<br>
&nbsp;start --
<br>
&nbsp;a=   2.00000000000000        2.00000000000000        2.00000000000000
<br>
&nbsp;&nbsp;&nbsp;2.00000000000000        2.00000000000000
<br>
&nbsp;b=   3.00000000000000        3.00000000000000        3.00000000000000
<br>
&nbsp;&nbsp;&nbsp;3.00000000000000        3.00000000000000        3.00000000000000
<br>
&nbsp;&nbsp;&nbsp;3.00000000000000        3.00000000000000        3.00000000000000
<br>
&nbsp;&nbsp;&nbsp;3.00000000000000        3.00000000000000        3.00000000000000
<br>
&nbsp;&nbsp;&nbsp;3.00000000000000        3.00000000000000        3.00000000000000
<br>
&nbsp;&nbsp;&nbsp;3.00000000000000        3.00000000000000        3.00000000000000
<br>
&nbsp;&nbsp;&nbsp;3.00000000000000        3.00000000000000        3.00000000000000
<br>
&nbsp;&nbsp;&nbsp;3.00000000000000        3.00000000000000        3.00000000000000
<br>
&nbsp;&nbsp;&nbsp;3.00000000000000
<br>
&nbsp;c=  0.000000000000000E+000  0.000000000000000E+000  0.000000000000000E+000
<br>
&nbsp;&nbsp;0.000000000000000E+000  0.000000000000000E+000
<br>
&nbsp;sum=  0.000000000000000E+000  0.000000000000000E+000  0.000000000000000E+000
<br>
&nbsp;&nbsp;0.000000000000000E+000  0.000000000000000E+000
<br>
&nbsp;sum=   30.0000000000000        30.0000000000000        30.0000000000000
<br>
&nbsp;&nbsp;&nbsp;30.0000000000000        30.0000000000000
<br>
[vbgyor:9920] *** An error occurred in MPI_Allreduce
<br>
[vbgyor:9920] *** on communicator MPI_COMM_WORLD
<br>
[vbgyor:9920] *** MPI_ERR_OP: invalid reduce operation
<br>
[vbgyor:9920] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[vbgyor:09736] [[27471,0],0]-[[27471,1],0] mca_oob_tcp_msg_recv: readv
<br>
failed: Unknown error (10054)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 488 on node vbgyor
<br>
exiting improperly. There are two reasons this could occur:
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
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>Environment:
<br>
OS: Windows 7 64-bit
<br>
Compilers: Visual Studio 2008 32bit and Intel ifort 32bit
<br>
OpenMPI: OpenMPI-1.5.2 pre-built libraries and also with locally built libraries
<br>
<p>Thank you.
<br>
-Hiral
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16442/mar_f.f">mar_f.f</a>
</ul>
<!-- attachment="mar_f.f" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16443.php">Peter Kjellström: "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<li><strong>Previous message:</strong> <a href="16441.php">Ralph Castain: "Re: [OMPI users] [Wrf-users] WRF Problem running in Parallel on multiple nodes(cluster)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16443.php">Peter Kjellström: "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<li><strong>Reply:</strong> <a href="16443.php">Peter Kjellström: "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
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
