<?
$subject_val = "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 10:01:51 2011" -->
<!-- isoreceived="20110419140151" -->
<!-- sent="Tue, 19 Apr 2011 08:01:42 -0600" -->
<!-- isosent="20110419140142" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)" -->
<!-- id="7732F874-24DA-4EDF-8885-854B86EF84D4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTimJUagOtPp6TbwSwjmGs_KDsZHTLA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-19 10:01:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16279.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16277.php">hi: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<li><strong>In reply to:</strong> <a href="16277.php">hi: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 19, 2011, at 7:52 AM, hi wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Fortran code snippet is as follow...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;
</span><br>
<span class="quotelev1">&gt;      ...
</span><br>
<span class="quotelev1">&gt;      write(*,*) &quot;calling blacs_pinfo()...&quot;
</span><br>
<span class="quotelev1">&gt;      CALL BLACS_PINFO(IAM, NPROCS)
</span><br>
<span class="quotelev1">&gt;      write(*,*), &quot;after blacs_pinfo()...&quot;
</span><br>
<span class="quotelev1">&gt;      write(*,*), &quot;IAM=&quot;, IAM
</span><br>
<span class="quotelev1">&gt;      write(*,*), &quot;NPROCS=&quot;, NPROCS
</span><br>
<span class="quotelev1">&gt;      ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can notice, below-mentioned crash is happening in call to BLACS_PINFO().
</span><br>
<p>This was my point - BLACS_PINFO has nothing to do with OMPI, so I don't know how we could help you debug it. It sounds like you have a bad blacs library. You might try ensuring it is installed correctly, you have a &quot;good&quot; version built from a compatible compiler, etc.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using following environment:
</span><br>
<span class="quotelev1">&gt; OS: Windows 7 64-bit
</span><br>
<span class="quotelev1">&gt; Compilers: Visual Studio 2008 32bit and Intel ifort 32bit
</span><br>
<span class="quotelev1">&gt; OpenMPI: OpenMPI-1.5.3 pre-built libraries and also with
</span><br>
<span class="quotelev1">&gt; OpenMPI-1.5.2. locally built libraries
</span><br>
<span class="quotelev1">&gt; BLACS: pre-built libraries taken from
</span><br>
<span class="quotelev1">&gt; <a href="http://icl.cs.utk.edu/lapack-for-windows/scalapack/index.html#librairies">http://icl.cs.utk.edu/lapack-for-windows/scalapack/index.html#librairies</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; -Hiral
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 19, 2011 at 6:56 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Just a suggestion: have you looked at it in a debugger? The error isn't coming from OMPI - looks like a segfault caused by an error in the program or how it is being run.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 19, 2011, at 7:19 AM, hi wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On WINDOWS platform, I am observing following error when executing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpirun blacs_hello_example.exe&quot; (example program to test BLACS taken
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from <a href="http://www.netlib.org/blacs/BLACS/Examples.html#HELLO">http://www.netlib.org/blacs/BLACS/Examples.html#HELLO</a>)...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\blacs_examples&gt; mpirun blacs_hello_example.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; calling blacs_pinfo()...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forrtl: severe (157): Program Exception - access violation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Image              PC        Routine            Line        Source
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpid.dll        6A8E2DC5  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpid.dll        6A8E2C31  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blacs_ex01.exe     00402357  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libifcorert.dll    1002A1C1  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [myhost1:15340] [[30379,0],0]-[[30379,1],0] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; readv failed:Unknown error (10054)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun.exe has exited due to process rank 0 with PID 528 on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vibgyor exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job did. This can cause a job to hang indefinitely while it waits for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminated by signals sent by mpirun.exe (as reported here).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Environment:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OS: Windows 7 64-bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Compilers: Visual Studio 2008 32bit and Intel ifort 32bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI: OpenMPI-1.5.3 pre-built libraries and also with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI-1.5.2. locally built libraries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BLACS: pre-built libraries taken from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://icl.cs.utk.edu/lapack-for-windows/scalapack/index.html#librairies">http://icl.cs.utk.edu/lapack-for-windows/scalapack/index.html#librairies</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any idea on how to resolve this???
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Hiral
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16279.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16277.php">hi: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<li><strong>In reply to:</strong> <a href="16277.php">hi: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
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
