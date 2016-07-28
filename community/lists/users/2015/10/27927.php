<?
$subject_val = "Re: [OMPI users] MPI_Wait stalls";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 10:56:40 2015" -->
<!-- isoreceived="20151027145640" -->
<!-- sent="Tue, 27 Oct 2015 08:56:35 -0600" -->
<!-- isosent="20151027145635" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Wait stalls" -->
<!-- id="20151027145635.GA81628_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="23A17804-F8E5-4A18-BF98-D6F273CA34B3_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Wait stalls<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 10:56:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27928.php">Tim Mattox: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>Previous message:</strong> <a href="27926.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="27923.php">ABE Hiroshi: "[OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27929.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="27929.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have seen hangs when the tcp component is in use. If you are running
<br>
on a single machine running with mpirun -mca btl self,vader.
<br>
<p>-Nathan
<br>
<p>On Mon, Oct 26, 2015 at 09:17:20PM -0600, ABE Hiroshi wrote:
<br>
<span class="quotelev1">&gt;    Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I have a multithread-ed program and as a next step it is reconstructing to
</span><br>
<span class="quotelev1">&gt;    MPI program. The code is to be MPI / Multithread hybrid one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The code proceeds MPI-routines as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1. Send data by MPI_Isend with exlusive tag numbers to the other node.
</span><br>
<span class="quotelev1">&gt;    This is done in ONE master thread.
</span><br>
<span class="quotelev1">&gt;    2. Receive the sent data by MPI_Irecv in several threads (usually the same
</span><br>
<span class="quotelev1">&gt;    as the number of CPU core) and do their jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    There is one main thread (main process) and one master thread and several
</span><br>
<span class="quotelev1">&gt;    working threads in the code. MPI_Isend is called in the master thread.
</span><br>
<span class="quotelev1">&gt;    MPI_Irecv is called in the working threads.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    My problem is MPI_Wait stalls after calling MPI_Isend. MPI_Wait is called
</span><br>
<span class="quotelev1">&gt;    just after MPI_Isend.  Several time the routines get through, but after
</span><br>
<span class="quotelev1">&gt;    sending several data MPI_Wait stalls.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Using Xcode debugger, the loop with c-&gt;c_signaled at line 70 of
</span><br>
<span class="quotelev1">&gt;    opal_conidition_wait (opal/threads/condition.h) never escape.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I guess I would make something wrong. I would like to know how to find the
</span><br>
<span class="quotelev1">&gt;    problem.
</span><br>
<span class="quotelev1">&gt;    I would be obliged if you'd point the solution or the next direction to be
</span><br>
<span class="quotelev1">&gt;    investigated for debugging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    My Environment : OSX 10.9.5, Apple LLVM 6.0 (LLVM 3.5svn), OpenMPI 1.10.0
</span><br>
<span class="quotelev1">&gt;    The thread is wxThread from wxWidgets Library (3.0.2) which is a wrapper
</span><br>
<span class="quotelev1">&gt;    of pthread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    OpenMPI is configure-ed : --enable-mpi-thread-multiple --enable-debug
</span><br>
<span class="quotelev1">&gt;    --enable-event-debug
</span><br>
<span class="quotelev1">&gt;    Please find the detail (config.log and ompi_info -all) attached in this
</span><br>
<span class="quotelev1">&gt;    mail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thank you very much in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Sincerely,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ABE Hiroshi
</span><br>
<span class="quotelev1">&gt;     from Tokorozawa, JAPAN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt;    users mailing list
</span><br>
<span class="quotelev1">&gt;    users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;    Link to this post:
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/lists/users/2015/10/27923.php">http://www.open-mpi.org/community/lists/users/2015/10/27923.php</a>
</span><br>
<p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27927/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27928.php">Tim Mattox: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>Previous message:</strong> <a href="27926.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="27923.php">ABE Hiroshi: "[OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27929.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="27929.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
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
