<?
$subject_val = "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 12 11:32:21 2011" -->
<!-- isoreceived="20110512153221" -->
<!-- sent="Thu, 12 May 2011 17:33:32 +0200" -->
<!-- isosent="20110512153332" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION" -->
<!-- id="201105121733.33436.keller_at_hlrs.de" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="BANLkTinJTFvink+pfXzEOTfyQbwm894CcA_at_mail.gmail.com" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-12 11:33:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16532.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16530.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>In reply to:</strong> <a href="16506.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16535.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16535.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Hiral,
<br>
in the ompi_info You attached, the fortran size detection did not work 
<br>
correctly (on viscluster -- aka that shows the you used the std.-installation 
<br>
package):
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec size: 4
<br>
...
<br>
<p>This most probably does not match Your compiler's setting for DOUBLE 
<br>
PRECISION, which probably considers this to be 8.
<br>
<p>Does REAL work for You?
<br>
<p>Shiqing is currently away, will ask when he returns.
<br>
<p>With best regards,
<br>
Rainer
<br>
<p><p>On Wednesday 11 May 2011 09:29:03 hi wrote:
<br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can you send the info listed on the help page?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;From the HELP page...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***For run-time problems:
</span><br>
<span class="quotelev1">&gt; 1) Check the FAQ first. Really. This can save you a lot of time; many
</span><br>
<span class="quotelev1">&gt; common problems and solutions are listed there.
</span><br>
<span class="quotelev1">&gt; I couldn't find reference in FAQ.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) The version of Open MPI that you're using.
</span><br>
<span class="quotelev1">&gt; I am using pre-built openmpi-1.5.3 64-bit and 32-bit binaries on Window 7
</span><br>
<span class="quotelev1">&gt; I also tried with locally built openmpi-1.5.2 using Visual Studio 2008
</span><br>
<span class="quotelev1">&gt; 32-bit compilers
</span><br>
<span class="quotelev1">&gt; I tried various compilers: VS-9 32-bit and VS-10 64-bit and
</span><br>
<span class="quotelev1">&gt; corresponding intel ifort compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) The config.log file from the top-level Open MPI directory, if
</span><br>
<span class="quotelev1">&gt; available (please compress!).
</span><br>
<span class="quotelev1">&gt; Don't have.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4) The output of the &quot;ompi_info --all&quot; command from the node where
</span><br>
<span class="quotelev1">&gt; you're invoking mpirun.
</span><br>
<span class="quotelev1">&gt; see output of pre-built openmpi-1.5.3_x64/bin/ompi_info --all&quot; in
</span><br>
<span class="quotelev1">&gt; attachments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5) If running on more than one node --
</span><br>
<span class="quotelev1">&gt; I am running test program on single none.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6) A detailed description of what is failing.
</span><br>
<span class="quotelev1">&gt; Already described in this post.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 7) Please include information about your network:
</span><br>
<span class="quotelev1">&gt; As I am running test program on local and single machine, this might
</span><br>
<span class="quotelev1">&gt; not be required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You forgot ierr in the call to MPI_Finalize.  You also paired
</span><br>
<span class="quotelev2">&gt; &gt; DOUBLE_PRECISION data with MPI_INTEGER in the call to allreduce.  And
</span><br>
<span class="quotelev2">&gt; &gt; you mixed sndbuf and rcvbuf in the call to allreduce, meaning that when
</span><br>
<span class="quotelev2">&gt; &gt; your print rcvbuf afterwards, it'll always still be 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I am not Fortran programmer, this is my mistake !!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        program Test_MPI
</span><br>
<span class="quotelev2">&gt; &gt;            use mpi
</span><br>
<span class="quotelev2">&gt; &gt;            implicit none
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;            DOUBLE PRECISION rcvbuf(5), sndbuf(5)
</span><br>
<span class="quotelev2">&gt; &gt;            INTEGER nproc, rank, ierr, n, i, ret
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;            n = 5
</span><br>
<span class="quotelev2">&gt; &gt;            do i = 1, n
</span><br>
<span class="quotelev2">&gt; &gt;                sndbuf(i) = 2.0
</span><br>
<span class="quotelev2">&gt; &gt;                rcvbuf(i) = 0.0
</span><br>
<span class="quotelev2">&gt; &gt;            end do
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;            call MPI_INIT(ierr)
</span><br>
<span class="quotelev2">&gt; &gt;            call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;            call MPI_COMM_SIZE(MPI_COMM_WORLD, nproc, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;            write(*,*) &quot;size=&quot;, nproc, &quot;, rank=&quot;, rank
</span><br>
<span class="quotelev2">&gt; &gt;            write(*,*) &quot;start --, rcvbuf=&quot;, rcvbuf
</span><br>
<span class="quotelev2">&gt; &gt;            CALL MPI_ALLREDUCE(sndbuf, rcvbuf, n,
</span><br>
<span class="quotelev2">&gt; &gt;     &amp;              MPI_DOUBLE_PRECISION, MPI_SUM, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;            write(*,*) &quot;end --, rcvbuf=&quot;, rcvbuf
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;            CALL MPI_Finalize(ierr)
</span><br>
<span class="quotelev2">&gt; &gt;        end
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (you could use &quot;include 'mpif.h'&quot;, too -- I tried both)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This program works fine for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am observing same crash, as described in this thread (when executing
</span><br>
<span class="quotelev1">&gt; as &quot;mpirun -np 2 mar_f_dp.exe&quot;), even with above correct and simple
</span><br>
<span class="quotelev1">&gt; test program. I commented 'use mpi' as it gave me &quot;Error in compiled
</span><br>
<span class="quotelev1">&gt; module file&quot; error, so I used 'include &quot;mpif.h&quot;' statement (see
</span><br>
<span class="quotelev1">&gt; attachement).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that Windows specific issue, (I could run this test program
</span><br>
<span class="quotelev1">&gt; on Linux with openmpi-1.5.1).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anybody try this test program on Windows?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you in advance.
</span><br>
<span class="quotelev1">&gt; -Hiral
</span><br>
<p><pre>
-- 
----------------------------------------------------------------
 Dr.-Ing. Rainer Keller  <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                         Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                 Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16532.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16530.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>In reply to:</strong> <a href="16506.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16535.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16535.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
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
