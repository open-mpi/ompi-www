<?
$subject_val = "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 12 10:22:50 2011" -->
<!-- isoreceived="20110512142250" -->
<!-- sent="Thu, 12 May 2011 19:52:45 +0530" -->
<!-- isosent="20110512142245" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION" -->
<!-- id="BANLkTi=X5rh0Xpfm-dPNNUQEziBhJpn+mg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTikoUxU4KgVCqE2i-NHszd6e-xRfWA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-05-12 10:22:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16531.php">Rainer Keller: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16529.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>In reply to:</strong> <a href="16523.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16529.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can please try this test program on Windows environment.
<br>
<p>Thank you.
<br>
-Hiral
<br>
<p>On Thu, May 12, 2011 at 10:59 AM, hi &lt;hiralsmaillist_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Any comment or suggestion on my below update....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 11, 2011 at 12:59 PM, hi &lt;hiralsmaillist_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you send the info listed on the help page?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From the HELP page...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ***For run-time problems:
</span><br>
<span class="quotelev2">&gt;&gt; 1) Check the FAQ first. Really. This can save you a lot of time; many
</span><br>
<span class="quotelev2">&gt;&gt; common problems and solutions are listed there.
</span><br>
<span class="quotelev2">&gt;&gt; I couldn't find reference in FAQ.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) The version of Open MPI that you're using.
</span><br>
<span class="quotelev2">&gt;&gt; I am using pre-built openmpi-1.5.3 64-bit and 32-bit binaries on Window 7
</span><br>
<span class="quotelev2">&gt;&gt; I also tried with locally built openmpi-1.5.2 using Visual Studio 2008
</span><br>
<span class="quotelev2">&gt;&gt; 32-bit compilers
</span><br>
<span class="quotelev2">&gt;&gt; I tried various compilers: VS-9 32-bit and VS-10 64-bit and
</span><br>
<span class="quotelev2">&gt;&gt; corresponding intel ifort compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) The config.log file from the top-level Open MPI directory, if
</span><br>
<span class="quotelev2">&gt;&gt; available (please compress!).
</span><br>
<span class="quotelev2">&gt;&gt; Don't have.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4) The output of the &quot;ompi_info --all&quot; command from the node where
</span><br>
<span class="quotelev2">&gt;&gt; you're invoking mpirun.
</span><br>
<span class="quotelev2">&gt;&gt; see output of pre-built openmpi-1.5.3_x64/bin/ompi_info --all&quot; in attachments.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 5) If running on more than one node --
</span><br>
<span class="quotelev2">&gt;&gt; I am running test program on single none.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 6) A detailed description of what is failing.
</span><br>
<span class="quotelev2">&gt;&gt; Already described in this post.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 7) Please include information about your network:
</span><br>
<span class="quotelev2">&gt;&gt; As I am running test program on local and single machine, this might
</span><br>
<span class="quotelev2">&gt;&gt; not be required.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You forgot ierr in the call to MPI_Finalize. &#160;You also paired DOUBLE_PRECISION data with MPI_INTEGER in the call to allreduce. &#160;And you mixed sndbuf and rcvbuf in the call to allreduce, meaning that when your print rcvbuf afterwards, it'll always still be 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As I am not Fortran programmer, this is my mistake !!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160;program Test_MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;use mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;implicit none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;DOUBLE PRECISION rcvbuf(5), sndbuf(5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;INTEGER nproc, rank, ierr, n, i, ret
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;n = 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;do i = 1, n
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;sndbuf(i) = 2.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;rcvbuf(i) = 0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;end do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;call MPI_INIT(ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;call MPI_COMM_SIZE(MPI_COMM_WORLD, nproc, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;write(*,*) &quot;size=&quot;, nproc, &quot;, rank=&quot;, rank
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;write(*,*) &quot;start --, rcvbuf=&quot;, rcvbuf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;CALL MPI_ALLREDUCE(sndbuf, rcvbuf, n,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &amp; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MPI_DOUBLE_PRECISION, MPI_SUM, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;write(*,*) &quot;end --, rcvbuf=&quot;, rcvbuf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;CALL MPI_Finalize(ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160;end
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (you could use &quot;include 'mpif.h'&quot;, too -- I tried both)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This program works fine for me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am observing same crash, as described in this thread (when executing
</span><br>
<span class="quotelev2">&gt;&gt; as &quot;mpirun -np 2 mar_f_dp.exe&quot;), even with above correct and simple
</span><br>
<span class="quotelev2">&gt;&gt; test program. I commented 'use mpi' as it gave me &quot;Error in compiled
</span><br>
<span class="quotelev2">&gt;&gt; module file&quot; error, so I used 'include &quot;mpif.h&quot;' statement (see
</span><br>
<span class="quotelev2">&gt;&gt; attachement).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that Windows specific issue, (I could run this test program
</span><br>
<span class="quotelev2">&gt;&gt; on Linux with openmpi-1.5.1).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody try this test program on Windows?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance.
</span><br>
<span class="quotelev2">&gt;&gt; -Hiral
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16531.php">Rainer Keller: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16529.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>In reply to:</strong> <a href="16523.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16529.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
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
