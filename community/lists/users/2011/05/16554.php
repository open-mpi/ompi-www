<?
$subject_val = "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 17 02:54:46 2011" -->
<!-- isoreceived="20110517065446" -->
<!-- sent="Tue, 17 May 2011 12:24:40 +0530" -->
<!-- isosent="20110517065440" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION" -->
<!-- id="BANLkTimh+=YEHt-2cdXGyFLR1GmBPnwYXg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTimh4RxQ_UMzPs1bRjWS94G7Enw-JQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION<br>
<strong>From:</strong> hi (<em>hiralsmaillist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-17 02:54:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16555.php">Jeff Squyres: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="16553.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>In reply to:</strong> <a href="16535.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16657.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you tried these test programs?
<br>
Or any suggestion to overcome this bug???
<br>
<p>Thank you.
<br>
-Hiral
<br>
<p>On Fri, May 13, 2011 at 11:20 AM, hi &lt;hiralsmaillist_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Rainer,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does REAL work for You?
</span><br>
<span class="quotelev1">&gt; No.
</span><br>
<span class="quotelev1">&gt; I am observing same errors (see below) even with INTEGER; please find
</span><br>
<span class="quotelev1">&gt; the attached test programs with INTEGER and REAL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\test&gt; mpirun mar_f_i.exe
</span><br>
<span class="quotelev1">&gt; &#160;size= &#160; &#160; &#160; &#160; &#160; 1 , rank= &#160; &#160; &#160; &#160; &#160; 0
</span><br>
<span class="quotelev1">&gt; &#160;start --, rcvbuf= &#160; &#160; &#160; &#160; &#160; 0 &#160; &#160; &#160; &#160; &#160; 0 &#160; &#160; &#160; &#160; &#160; 0 &#160; &#160; &#160; &#160; &#160; 0 &#160; &#160; &#160; &#160; &#160; 0
</span><br>
<span class="quotelev1">&gt; &#160;end --, rcvbuf= &#160; &#160; &#160; &#160; &#160; 2 &#160; &#160; &#160; &#160; &#160; 2 &#160; &#160; &#160; &#160; &#160; 2 &#160; &#160; &#160; &#160; &#160; 2 &#160; &#160; &#160; &#160; &#160; 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\test&gt; mpirun -np 2 mar_f_i.exe
</span><br>
<span class="quotelev1">&gt; &#160;size= &#160; &#160; &#160; &#160; &#160; 2 , rank= &#160; &#160; &#160; &#160; &#160; 0
</span><br>
<span class="quotelev1">&gt; &#160;start --, rcvbuf= &#160; &#160; &#160; &#160; &#160; 0 &#160; &#160; &#160; &#160; &#160; 0 &#160; &#160; &#160; &#160; &#160; 0 &#160; &#160; &#160; &#160; &#160; 0 &#160; &#160; &#160; &#160; &#160; 0
</span><br>
<span class="quotelev1">&gt; &#160;size= &#160; &#160; &#160; &#160; &#160; 2 , rank= &#160; &#160; &#160; &#160; &#160; 1
</span><br>
<span class="quotelev1">&gt; &#160;start --, rcvbuf= &#160; &#160; &#160; &#160; &#160; 0 &#160; &#160; &#160; &#160; &#160; 0 &#160; &#160; &#160; &#160; &#160; 0 &#160; &#160; &#160; &#160; &#160; 0 &#160; &#160; &#160; &#160; &#160; 0
</span><br>
<span class="quotelev1">&gt; forrtl: severe (157): Program Exception - access violation
</span><br>
<span class="quotelev1">&gt; Image &#160; &#160; &#160; &#160; &#160; &#160; &#160;PC &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Routine &#160; &#160; &#160; &#160; &#160; &#160;Line &#160; &#160; &#160; &#160;Source
</span><br>
<span class="quotelev1">&gt; [vibgyor:12628] [[31763,0],0]-[[31763,1],0] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev1">&gt; readv failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host: vibgyor
</span><br>
<span class="quotelev1">&gt; PID: &#160;488
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 452 on node vibgyor
</span><br>
<span class="quotelev1">&gt; exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in the
</span><br>
<span class="quotelev1">&gt; job did. This can cause a job to hang indefinitely while it waits for
</span><br>
<span class="quotelev1">&gt; all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; -Hiral
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, May 12, 2011 at 9:03 PM, Rainer Keller &lt;keller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Hiral,
</span><br>
<span class="quotelev2">&gt;&gt; in the ompi_info You attached, the fortran size detection did not work
</span><br>
<span class="quotelev2">&gt;&gt; correctly (on viscluster -- aka that shows the you used the std.-installation
</span><br>
<span class="quotelev2">&gt;&gt; package):
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160;Fort dbl prec size: 4
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This most probably does not match Your compiler's setting for DOUBLE
</span><br>
<span class="quotelev2">&gt;&gt; PRECISION, which probably considers this to be 8.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does REAL work for You?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing is currently away, will ask when he returns.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Rainer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday 11 May 2011 09:29:03 hi wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Can you send the info listed on the help page?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;From the HELP page...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***For run-time problems:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) Check the FAQ first. Really. This can save you a lot of time; many
</span><br>
<span class="quotelev3">&gt;&gt;&gt; common problems and solutions are listed there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I couldn't find reference in FAQ.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) The version of Open MPI that you're using.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using pre-built openmpi-1.5.3 64-bit and 32-bit binaries on Window 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also tried with locally built openmpi-1.5.2 using Visual Studio 2008
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32-bit compilers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried various compilers: VS-9 32-bit and VS-10 64-bit and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corresponding intel ifort compiler.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) The config.log file from the top-level Open MPI directory, if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available (please compress!).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Don't have.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4) The output of the &quot;ompi_info --all&quot; command from the node where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you're invoking mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see output of pre-built openmpi-1.5.3_x64/bin/ompi_info --all&quot; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attachments.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5) If running on more than one node --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am running test program on single none.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6) A detailed description of what is failing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Already described in this post.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7) Please include information about your network:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I am running test program on local and single machine, this might
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not be required.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; You forgot ierr in the call to MPI_Finalize. &#160;You also paired
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; DOUBLE_PRECISION data with MPI_INTEGER in the call to allreduce. &#160;And
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; you mixed sndbuf and rcvbuf in the call to allreduce, meaning that when
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; your print rcvbuf afterwards, it'll always still be 0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I am not Fortran programmer, this is my mistake !!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160;program Test_MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;use mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;implicit none
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;DOUBLE PRECISION rcvbuf(5), sndbuf(5)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;INTEGER nproc, rank, ierr, n, i, ret
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;n = 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;do i = 1, n
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;sndbuf(i) = 2.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;rcvbuf(i) = 0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;end do
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;call MPI_INIT(ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;call MPI_COMM_SIZE(MPI_COMM_WORLD, nproc, ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;write(*,*) &quot;size=&quot;, nproc, &quot;, rank=&quot;, rank
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;write(*,*) &quot;start --, rcvbuf=&quot;, rcvbuf
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;CALL MPI_ALLREDUCE(sndbuf, rcvbuf, n,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &amp; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MPI_DOUBLE_PRECISION, MPI_SUM, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;write(*,*) &quot;end --, rcvbuf=&quot;, rcvbuf
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;CALL MPI_Finalize(ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; &#160; &#160; &#160;end
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; (you could use &quot;include 'mpif.h'&quot;, too -- I tried both)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; This program works fine for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am observing same crash, as described in this thread (when executing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as &quot;mpirun -np 2 mar_f_dp.exe&quot;), even with above correct and simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test program. I commented 'use mpi' as it gave me &quot;Error in compiled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module file&quot; error, so I used 'include &quot;mpif.h&quot;' statement (see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attachement).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that Windows specific issue, (I could run this test program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on Linux with openmpi-1.5.1).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anybody try this test program on Windows?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Hiral
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Dr.-Ing. Rainer Keller &#160;<a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
</span><br>
<span class="quotelev2">&gt;&gt; &#160;HLRS &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Tel: ++49 (0)711-685 6 5858
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Nobelstrasse 19 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Fax: ++49 (0)711-685 6 5832
</span><br>
<span class="quotelev2">&gt;&gt; &#160;70550 Stuttgart &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;email: keller_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Germany &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; AIM/Skype:rusraink
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16555.php">Jeff Squyres: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="16553.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>In reply to:</strong> <a href="16535.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16657.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
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
