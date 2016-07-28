<?
$subject_val = "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 03:29:13 2011" -->
<!-- isoreceived="20110511072913" -->
<!-- sent="Wed, 11 May 2011 12:59:03 +0530" -->
<!-- isosent="20110511072903" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION" -->
<!-- id="BANLkTinJTFvink+pfXzEOTfyQbwm894CcA_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EF5C22C7-E4A1-4671-9DE1-1F6F323DD314_at_cisco.com" -->
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
<strong>Date:</strong> 2011-05-11 03:29:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16507.php">hi: "[OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<li><strong>Previous message:</strong> <a href="16505.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>In reply to:</strong> <a href="16500.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16523.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16523.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16529.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16531.php">Rainer Keller: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><span class="quotelev1">&gt; Can you send the info listed on the help page?
</span><br>
<p><span class="quotelev1">&gt;From the HELP page...
</span><br>
<p>***For run-time problems:
<br>
1) Check the FAQ first. Really. This can save you a lot of time; many
<br>
common problems and solutions are listed there.
<br>
I couldn't find reference in FAQ.
<br>
<p>2) The version of Open MPI that you're using.
<br>
I am using pre-built openmpi-1.5.3 64-bit and 32-bit binaries on Window 7
<br>
I also tried with locally built openmpi-1.5.2 using Visual Studio 2008
<br>
32-bit compilers
<br>
I tried various compilers: VS-9 32-bit and VS-10 64-bit and
<br>
corresponding intel ifort compiler.
<br>
<p>3) The config.log file from the top-level Open MPI directory, if
<br>
available (please compress!).
<br>
Don't have.
<br>
<p>4) The output of the &quot;ompi_info --all&quot; command from the node where
<br>
you're invoking mpirun.
<br>
see output of pre-built openmpi-1.5.3_x64/bin/ompi_info --all&quot; in attachments.
<br>
<p>5) If running on more than one node --
<br>
I am running test program on single none.
<br>
<p>6) A detailed description of what is failing.
<br>
Already described in this post.
<br>
<p>7) Please include information about your network:
<br>
As I am running test program on local and single machine, this might
<br>
not be required.
<br>
<p><span class="quotelev1">&gt; You forgot ierr in the call to MPI_Finalize. &#160;You also paired DOUBLE_PRECISION data with MPI_INTEGER in the call to allreduce. &#160;And you mixed sndbuf and rcvbuf in the call to allreduce, meaning that when your print rcvbuf afterwards, it'll always still be 0.
</span><br>
<p>As I am not Fortran programmer, this is my mistake !!!
<br>
<p><p><span class="quotelev1">&gt; &#160; &#160; &#160; &#160;program Test_MPI
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;use mpi
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;DOUBLE PRECISION rcvbuf(5), sndbuf(5)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;INTEGER nproc, rank, ierr, n, i, ret
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;n = 5
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;do i = 1, n
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;sndbuf(i) = 2.0
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;rcvbuf(i) = 0.0
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;end do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;call MPI_COMM_SIZE(MPI_COMM_WORLD, nproc, ierr)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;write(*,*) &quot;size=&quot;, nproc, &quot;, rank=&quot;, rank
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;write(*,*) &quot;start --, rcvbuf=&quot;, rcvbuf
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;CALL MPI_ALLREDUCE(sndbuf, rcvbuf, n,
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &amp; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MPI_DOUBLE_PRECISION, MPI_SUM, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;write(*,*) &quot;end --, rcvbuf=&quot;, rcvbuf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;CALL MPI_Finalize(ierr)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (you could use &quot;include 'mpif.h'&quot;, too -- I tried both)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This program works fine for me.
</span><br>
<p>I am observing same crash, as described in this thread (when executing
<br>
as &quot;mpirun -np 2 mar_f_dp.exe&quot;), even with above correct and simple
<br>
test program. I commented 'use mpi' as it gave me &quot;Error in compiled
<br>
module file&quot; error, so I used 'include &quot;mpif.h&quot;' statement (see
<br>
attachement).
<br>
<p>It seems that Windows specific issue, (I could run this test program
<br>
on Linux with openmpi-1.5.1).
<br>
<p>Can anybody try this test program on Windows?
<br>
<p>Thank you in advance.
<br>
-Hiral
<br>
<p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16506/ompi_info_openmpi-1.5.3_x64.txt">ompi_info_openmpi-1.5.3_x64.txt</a>
</ul>
<!-- attachment="ompi_info_openmpi-1.5.3_x64.txt" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16506/mar_f_dp.f">mar_f_dp.f</a>
</ul>
<!-- attachment="mar_f_dp.f" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16507.php">hi: "[OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<li><strong>Previous message:</strong> <a href="16505.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>In reply to:</strong> <a href="16500.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16523.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16523.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16529.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16531.php">Rainer Keller: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
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
