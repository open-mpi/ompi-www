<?
$subject_val = "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 05:30:44 2011" -->
<!-- isoreceived="20110510093044" -->
<!-- sent="Tue, 10 May 2011 15:00:39 +0530" -->
<!-- isosent="20110510093039" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION" -->
<!-- id="BANLkTi=-PTpKVMCCQZSaLcUb82WZAAjTkQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="96868DAA-418D-4E92-B150-9F7BA532C893_at_cisco.com" -->
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
<strong>Date:</strong> 2011-05-10 05:30:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16498.php">Salvatore Podda: "[OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Previous message:</strong> <a href="16496.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>In reply to:</strong> <a href="16496.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16500.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16500.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><span class="quotelev1">&gt; You didn't answer my prior questions.  :-)
</span><br>
I am observing this crash using MPI_ALLREDUCE() in test program; and
<br>
which does not have any memory corruption issue. ;)
<br>
<p><span class="quotelev1">&gt; I ran your test program with -np 2 and -np 4 and it seemed to work ok.
</span><br>
Can you please let me know what environment (including os, compilers)
<br>
are you using?
<br>
<p>I am able to reproduce the crash using attached simplified test
<br>
program with 5 element array.
<br>
Please note that these experiments I am doing on Windows7 using
<br>
msys/mingw console; see attached makefile for more information.
<br>
<p>When running this program as &quot;C:\&gt;mpirun mar_f_dp2.exe&quot; it works fine;
<br>
but when running it as &quot;C:\&gt;mpirun -np 2 mar_f_dp2.exe&quot; it generates
<br>
following error on console...
<br>
<p>C:\&gt;mpirun -np 2 mar_f_dp2.exe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0
<br>
&nbsp;size=           2 , rank=           0
<br>
&nbsp;start --
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0
<br>
&nbsp;size=           2 , rank=           1
<br>
&nbsp;start --
<br>
forrtl: severe (157): Program Exception - access violation
<br>
Image              PC        Routine            Line        Source
<br>
[vibgyor:09168] [[28311,0],0]-[[28311,1],0] mca_oob_tcp_msg_recv:
<br>
readv failed: Unknown error (108)
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: vibgyor
<br>
PID:  512
<br>
<p>This process may still be running and/or consuming resources.
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 476 on
<br>
node vibgyor exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
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
<p><p><p>Another observation I have with attached test program is that it
<br>
crashes in MPI_Finilize() on running &quot;C:\&gt;mpirun mar_f_dp2.exe&quot; if we
<br>
un-comment following lines (lines 27 and 35)...
<br>
<p>write(*,*) &quot;start --, rcvbuf=&quot;, rcvbuf
<br>
...
<br>
write(*,*) &quot;end --, rcvbuf=&quot;, rcvbuf
<br>
<p><p>Thank you in advance.
<br>
-Hiral
<br>
<p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16497/makefile">makefile</a>
</ul>
<!-- attachment="makefile" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16497/mar_f_dp2.f">mar_f_dp2.f</a>
</ul>
<!-- attachment="mar_f_dp2.f" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16498.php">Salvatore Podda: "[OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Previous message:</strong> <a href="16496.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>In reply to:</strong> <a href="16496.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16500.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16500.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
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
