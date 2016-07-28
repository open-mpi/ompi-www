<?
$subject_val = "Re: [OMPI users] MPI_Wait stalls";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 19:29:54 2015" -->
<!-- isoreceived="20151027232954" -->
<!-- sent="Wed, 28 Oct 2015 08:29:46 +0900" -->
<!-- isosent="20151027232946" -->
<!-- name="ABE Hiroshi" -->
<!-- email="habe36_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Wait stalls" -->
<!-- id="E3AF7009-2870-4D21-B877-5D0440A632A8_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20151027145635.GA81628_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> ABE Hiroshi (<em>habe36_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 19:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27930.php">Ibrahim Ikhlawi: "[OMPI users] How to multiply two matrices?"</a>
<li><strong>Previous message:</strong> <a href="27928.php">Tim Mattox: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>In reply to:</strong> <a href="27927.php">Nathan Hjelm: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27954.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="27954.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Nathan and all,
<br>
<p>Thank you for your information. I tried it in this morning, it seems to get the same result. I will try another option. Thank you for the key to go in.
<br>
And I found a statement in the FAQ ragarding PETSc which says you should use OpenMPI wrapper compiler. I use wxWidgets library and try to compile with the wrapper.
<br>
&nbsp;
<br>
2015/10/27 23:56&#227;&#128;&#129;Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; &#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;&#239;&#188;&#154;
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have seen hangs when the tcp component is in use. If you are running
</span><br>
<span class="quotelev1">&gt; on a single machine running with mpirun -mca btl self,vader.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 26, 2015 at 09:17:20PM -0600, ABE Hiroshi wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   Dear All,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   I have a multithread-ed program and as a next step it is reconstructing to
</span><br>
<span class="quotelev2">&gt;&gt;   MPI program. The code is to be MPI / Multithread hybrid one.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   The code proceeds MPI-routines as:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   1. Send data by MPI_Isend with exlusive tag numbers to the other node.
</span><br>
<span class="quotelev2">&gt;&gt;   This is done in ONE master thread.
</span><br>
<span class="quotelev2">&gt;&gt;   2. Receive the sent data by MPI_Irecv in several threads (usually the same
</span><br>
<span class="quotelev2">&gt;&gt;   as the number of CPU core) and do their jobs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   There is one main thread (main process) and one master thread and several
</span><br>
<span class="quotelev2">&gt;&gt;   working threads in the code. MPI_Isend is called in the master thread.
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Irecv is called in the working threads.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   My problem is MPI_Wait stalls after calling MPI_Isend. MPI_Wait is called
</span><br>
<span class="quotelev2">&gt;&gt;   just after MPI_Isend.  Several time the routines get through, but after
</span><br>
<span class="quotelev2">&gt;&gt;   sending several data MPI_Wait stalls.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Using Xcode debugger, the loop with c-&gt;c_signaled at line 70 of
</span><br>
<span class="quotelev2">&gt;&gt;   opal_conidition_wait (opal/threads/condition.h) never escape.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   I guess I would make something wrong. I would like to know how to find the
</span><br>
<span class="quotelev2">&gt;&gt;   problem.
</span><br>
<span class="quotelev2">&gt;&gt;   I would be obliged if you'd point the solution or the next direction to be
</span><br>
<span class="quotelev2">&gt;&gt;   investigated for debugging.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   My Environment : OSX 10.9.5, Apple LLVM 6.0 (LLVM 3.5svn), OpenMPI 1.10.0
</span><br>
<span class="quotelev2">&gt;&gt;   The thread is wxThread from wxWidgets Library (3.0.2) which is a wrapper
</span><br>
<span class="quotelev2">&gt;&gt;   of pthread.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   OpenMPI is configure-ed : --enable-mpi-thread-multiple --enable-debug
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-event-debug
</span><br>
<span class="quotelev2">&gt;&gt;   Please find the detail (config.log and ompi_info -all) attached in this
</span><br>
<span class="quotelev2">&gt;&gt;   mail.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Thank you very much in advance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Sincerely,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   ABE Hiroshi
</span><br>
<span class="quotelev2">&gt;&gt;    from Tokorozawa, JAPAN
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;   users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;   users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;   Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/community/lists/users/2015/10/27923.php">http://www.open-mpi.org/community/lists/users/2015/10/27923.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27927.php">http://www.open-mpi.org/community/lists/users/2015/10/27927.php</a>
</span><br>
<p>ABE Hiroshi
<br>
&nbsp;from Tokorozawa, JAPAN
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27930.php">Ibrahim Ikhlawi: "[OMPI users] How to multiply two matrices?"</a>
<li><strong>Previous message:</strong> <a href="27928.php">Tim Mattox: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>In reply to:</strong> <a href="27927.php">Nathan Hjelm: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27954.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="27954.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
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
