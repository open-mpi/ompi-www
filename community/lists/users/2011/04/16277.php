<?
$subject_val = "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 09:52:24 2011" -->
<!-- isoreceived="20110419135224" -->
<!-- sent="Tue, 19 Apr 2011 19:22:17 +0530" -->
<!-- isosent="20110419135217" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)" -->
<!-- id="BANLkTimJUagOtPp6TbwSwjmGs_KDsZHTLA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AD313277-E5E3-46FE-ADFF-872CEA9BA51F_at_open-mpi.org" -->
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
<strong>From:</strong> hi (<em>hiralsmaillist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-19 09:52:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16278.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<li><strong>Previous message:</strong> <a href="16276.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<li><strong>In reply to:</strong> <a href="16276.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16278.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<li><strong>Reply:</strong> <a href="16278.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>The Fortran code snippet is as follow...
<br>
<p>&lt;&lt;&lt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) &quot;calling blacs_pinfo()...&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL BLACS_PINFO(IAM, NPROCS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*), &quot;after blacs_pinfo()...&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*), &quot;IAM=&quot;, IAM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*), &quot;NPROCS=&quot;, NPROCS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<p>As you can notice, below-mentioned crash is happening in call to BLACS_PINFO().
<br>
<p>I am using following environment:
<br>
&nbsp;OS: Windows 7 64-bit
<br>
&nbsp;Compilers: Visual Studio 2008 32bit and Intel ifort 32bit
<br>
&nbsp;OpenMPI: OpenMPI-1.5.3 pre-built libraries and also with
<br>
&nbsp;OpenMPI-1.5.2. locally built libraries
<br>
&nbsp;BLACS: pre-built libraries taken from
<br>
<a href="http://icl.cs.utk.edu/lapack-for-windows/scalapack/index.html#librairies">http://icl.cs.utk.edu/lapack-for-windows/scalapack/index.html#librairies</a>
<br>
<p>Thank you.
<br>
-Hiral
<br>
<p>On Tue, Apr 19, 2011 at 6:56 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Just a suggestion: have you looked at it in a debugger? The error isn't coming from OMPI - looks like a segfault caused by an error in the program or how it is being run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 19, 2011, at 7:19 AM, hi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On WINDOWS platform, I am observing following error when executing
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpirun blacs_hello_example.exe&quot; (example program to test BLACS taken
</span><br>
<span class="quotelev2">&gt;&gt; from <a href="http://www.netlib.org/blacs/BLACS/Examples.html#HELLO">http://www.netlib.org/blacs/BLACS/Examples.html#HELLO</a>)...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; C:\blacs_examples&gt; mpirun blacs_hello_example.exe
</span><br>
<span class="quotelev2">&gt;&gt; calling blacs_pinfo()...
</span><br>
<span class="quotelev2">&gt;&gt; forrtl: severe (157): Program Exception - access violation
</span><br>
<span class="quotelev2">&gt;&gt; Image &#160; &#160; &#160; &#160; &#160; &#160; &#160;PC &#160; &#160; &#160; &#160;Routine &#160; &#160; &#160; &#160; &#160; &#160;Line &#160; &#160; &#160; &#160;Source
</span><br>
<span class="quotelev2">&gt;&gt; libmpid.dll &#160; &#160; &#160; &#160;6A8E2DC5 &#160;Unknown &#160; &#160; &#160; &#160; &#160; &#160; &#160; Unknown &#160;Unknown
</span><br>
<span class="quotelev2">&gt;&gt; libmpid.dll &#160; &#160; &#160; &#160;6A8E2C31 &#160;Unknown &#160; &#160; &#160; &#160; &#160; &#160; &#160; Unknown &#160;Unknown
</span><br>
<span class="quotelev2">&gt;&gt; blacs_ex01.exe &#160; &#160; 00402357 &#160;Unknown &#160; &#160; &#160; &#160; &#160; &#160; &#160; Unknown &#160;Unknown
</span><br>
<span class="quotelev2">&gt;&gt; libifcorert.dll &#160; &#160;1002A1C1 &#160;Unknown &#160; &#160; &#160; &#160; &#160; &#160; &#160; Unknown &#160;Unknown
</span><br>
<span class="quotelev2">&gt;&gt; [myhost1:15340] [[30379,0],0]-[[30379,1],0] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev2">&gt;&gt; readv failed:Unknown error (10054)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.exe has exited due to process rank 0 with PID 528 on node
</span><br>
<span class="quotelev2">&gt;&gt; vibgyor exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in the
</span><br>
<span class="quotelev2">&gt;&gt; job did. This can cause a job to hang indefinitely while it waits for
</span><br>
<span class="quotelev2">&gt;&gt; all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev2">&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun.exe (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Environment:
</span><br>
<span class="quotelev2">&gt;&gt; OS: Windows 7 64-bit
</span><br>
<span class="quotelev2">&gt;&gt; Compilers: Visual Studio 2008 32bit and Intel ifort 32bit
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI: OpenMPI-1.5.3 pre-built libraries and also with
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI-1.5.2. locally built libraries
</span><br>
<span class="quotelev2">&gt;&gt; BLACS: pre-built libraries taken from
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://icl.cs.utk.edu/lapack-for-windows/scalapack/index.html#librairies">http://icl.cs.utk.edu/lapack-for-windows/scalapack/index.html#librairies</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea on how to resolve this???
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance.
</span><br>
<span class="quotelev2">&gt;&gt; -Hiral
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16278.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<li><strong>Previous message:</strong> <a href="16276.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<li><strong>In reply to:</strong> <a href="16276.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16278.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<li><strong>Reply:</strong> <a href="16278.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
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
