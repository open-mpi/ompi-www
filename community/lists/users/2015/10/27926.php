<?
$subject_val = "Re: [OMPI users] OMPI users] MPI_Wait stalls";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 05:25:23 2015" -->
<!-- isoreceived="20151027092523" -->
<!-- sent="Tue, 27 Oct 2015 18:25:12 +0900" -->
<!-- isosent="20151027092512" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI_Wait stalls" -->
<!-- id="99yx2ro3j22ed2eto4ousp2x.1445937912210_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] MPI_Wait stalls" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] MPI_Wait stalls<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 05:25:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27927.php">Nathan Hjelm: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27925.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27986.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27986.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Abe-san,
<br>
<p>Please make sure you use the same message size in your application and your test case. Using small messages can hide some application level deadlock.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>ABE Hiroshi &lt;habe36_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Dear Gilles-san,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thank you for your prompt reply.&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The code is a licenced one so I will try to make a sample code from scratch to reproduce the behavior. But I&#226;&#128;&#153;m afraid the simple one might be work without any problems. Because I have a feeling this problem is caused by a comflict with the other library or something unexpected (by me).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It should take some time, please wait.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2015/10/27 14:00&#227;&#128;&#129;Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; &#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;&#239;&#188;&#154;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Abe-san,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;could you please post a (ideally trimmed) version of your program so we can try to reproduce and investigate the issue ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 10/27/2015 12:17 PM, ABE Hiroshi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dear All, I have a multithread-ed program and as a next step it is reconstructing to MPI program. The code is to be MPI / Multithread hybrid one. The code proceeds MPI-routines as: 1. Send data by MPI_Isend with exlusive tag numbers to the other node. This is done in ONE master thread. 2. Receive the sent data by MPI_Irecv in several threads (usually the same as the number of CPU core) and do their jobs. There is one main thread (main process) and one master thread and several working threads in the code. MPI_Isend is called in the master thread. MPI_Irecv is called in the working threads. My problem is MPI_Wait stalls after calling MPI_Isend. MPI_Wait is called just after MPI_Isend. Several time the routines get through, but after sending several data MPI_Wait stalls. Using Xcode debugger, the loop with c-&gt;c_signaled at line 70 of opal_conidition_wait (opal/threads/condition.h) never escape. I guess I would make something wrong. I would like to know how to find the problem. I would be obliged if you&#226;&#128;&#153;d point the solution or the next direction to be investigated for debugging. My Environment : OSX 10.9.5, Apple LLVM 6.0 (LLVM 3.5svn), OpenMPI 1.10.0 The thread is wxThread from wxWidgets Library (3.0.2) which is a wrapper of pthread. OpenMPI is configure-ed : --enable-mpi-thread-multiple --enable-debug --enable-event-debug Please find the detail (config.log and ompi_info &#226;&#128;&#148;all) attached in this mail. Thank you very much in advance. Sincerely, ABE Hiroshi from Tokorozawa, JAPAN 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ users mailing list users_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27923.php">http://www.open-mpi.org/community/lists/users/2015/10/27923.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27924.php">http://www.open-mpi.org/community/lists/users/2015/10/27924.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;ABE Hiroshi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;from Tokorozawa, JAPAN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27926/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27927.php">Nathan Hjelm: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27925.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27986.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27986.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
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
