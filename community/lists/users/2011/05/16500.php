<?
$subject_val = "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 09:54:28 2011" -->
<!-- isoreceived="20110510135428" -->
<!-- sent="Tue, 10 May 2011 06:54:31 -0700" -->
<!-- isosent="20110510135431" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION" -->
<!-- id="EF5C22C7-E4A1-4671-9DE1-1F6F323DD314_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTi=-PTpKVMCCQZSaLcUb82WZAAjTkQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-10 09:54:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16501.php">Tyler W. Wilson: "[OMPI users] Issue with Open MPI 1.5.3 Windows binary builds"</a>
<li><strong>Previous message:</strong> <a href="16499.php">francoise.roch_at_[hidden]: "[OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="16497.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16506.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16506.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 10, 2011, at 2:30 AM, hi wrote:
<br>
<p><span class="quotelev2">&gt;&gt; You didn't answer my prior questions.  :-)
</span><br>
<span class="quotelev1">&gt; I am observing this crash using MPI_ALLREDUCE() in test program; and
</span><br>
<span class="quotelev1">&gt; which does not have any memory corruption issue. ;)
</span><br>
<p>Can you send the info listed on the help page?
<br>
<p><span class="quotelev2">&gt;&gt; I ran your test program with -np 2 and -np 4 and it seemed to work ok.
</span><br>
<span class="quotelev1">&gt; Can you please let me know what environment (including os, compilers)
</span><br>
<span class="quotelev1">&gt; are you using?
</span><br>
<p>RHEL 5.4, gcc 4.5.
<br>
<p>This could be a Windows-specific thing, but I would find that unlikely (but heck, I don't know much about Windows...).
<br>
<p><span class="quotelev1">&gt; I am able to reproduce the crash using attached simplified test
</span><br>
<span class="quotelev1">&gt; program with 5 element array.
</span><br>
<span class="quotelev1">&gt; Please note that these experiments I am doing on Windows7 using
</span><br>
<span class="quotelev1">&gt; msys/mingw console; see attached makefile for more information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When running this program as &quot;C:\&gt;mpirun mar_f_dp2.exe&quot; it works fine;
</span><br>
<span class="quotelev1">&gt; but when running it as &quot;C:\&gt;mpirun -np 2 mar_f_dp2.exe&quot; it generates
</span><br>
<span class="quotelev1">&gt; following error on console...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; C:\&gt;mpirun -np 2 mar_f_dp2.exe
</span><br>
<span class="quotelev1">&gt;           0
</span><br>
<span class="quotelev1">&gt;           0
</span><br>
<span class="quotelev1">&gt;           0
</span><br>
<span class="quotelev1">&gt; size=           2 , rank=           0
</span><br>
<span class="quotelev1">&gt; start --
</span><br>
<span class="quotelev1">&gt;           0
</span><br>
<span class="quotelev1">&gt;           0
</span><br>
<span class="quotelev1">&gt;           0
</span><br>
<span class="quotelev1">&gt; size=           2 , rank=           1
</span><br>
<span class="quotelev1">&gt; start --
</span><br>
<span class="quotelev1">&gt; forrtl: severe (157): Program Exception - access violation
</span><br>
<span class="quotelev1">&gt; Image              PC        Routine            Line        Source
</span><br>
<span class="quotelev1">&gt; [vibgyor:09168] [[28311,0],0]-[[28311,1],0] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev1">&gt; readv failed: Unknown error (108)
</span><br>
<p>You forgot ierr in the call to MPI_Finalize.  You also paired DOUBLE_PRECISION data with MPI_INTEGER in the call to allreduce.  And you mixed sndbuf and rcvbuf in the call to allreduce, meaning that when your print rcvbuf afterwards, it'll always still be 0.
<br>
<p>I pared your sample program down to the following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program Test_MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOUBLE PRECISION rcvbuf(5), sndbuf(5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER nproc, rank, ierr, n, i, ret
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n = 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i = 1, n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sndbuf(i) = 2.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rcvbuf(i) = 0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, nproc, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) &quot;size=&quot;, nproc, &quot;, rank=&quot;, rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) &quot;start --, rcvbuf=&quot;, rcvbuf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_ALLREDUCE(sndbuf, rcvbuf, n,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;              MPI_DOUBLE_PRECISION, MPI_SUM, MPI_COMM_WORLD, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) &quot;end --, rcvbuf=&quot;, rcvbuf
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_Finalize(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p>(you could use &quot;include 'mpif.h'&quot;, too -- I tried both)
<br>
<p>This program works fine for me.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16501.php">Tyler W. Wilson: "[OMPI users] Issue with Open MPI 1.5.3 Windows binary builds"</a>
<li><strong>Previous message:</strong> <a href="16499.php">francoise.roch_at_[hidden]: "[OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="16497.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16506.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16506.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
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
