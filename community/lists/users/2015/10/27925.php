<?
$subject_val = "Re: [OMPI users] MPI_Wait stalls";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 02:39:37 2015" -->
<!-- isoreceived="20151027063937" -->
<!-- sent="Tue, 27 Oct 2015 15:39:29 +0900" -->
<!-- isosent="20151027063929" -->
<!-- name="ABE Hiroshi" -->
<!-- email="habe36_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Wait stalls" -->
<!-- id="E945F9F8-7B74-438F-9A80-B0635263A1C5_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="562F04D0.6010906_at_rist.or.jp" -->
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
<strong>Date:</strong> 2015-10-27 02:39:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27926.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27924.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="27924.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27927.php">Nathan Hjelm: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gilles-san,
<br>
<p>Thank you for your prompt reply. 
<br>
The code is a licenced one so I will try to make a sample code from scratch to reproduce the behavior. But I&#226;&#128;&#153;m afraid the simple one might be work without any problems. Because I have a feeling this problem is caused by a comflict with the other library or something unexpected (by me).
<br>
<p>It should take some time, please wait.
<br>
<p>Thank you.
<br>
<p>2015/10/27 14:00&#227;&#128;&#129;Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; &#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;&#239;&#188;&#154;
<br>
<p><span class="quotelev1">&gt; Abe-san,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; could you please post a (ideally trimmed) version of your program so we can try to reproduce and investigate the issue ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/27/2015 12:17 PM, ABE Hiroshi wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a multithread-ed program and as a next step it is reconstructing to MPI program. The code is to be MPI / Multithread hybrid one.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The code proceeds MPI-routines as:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Send data by MPI_Isend with exlusive tag numbers to the other node. This is done in ONE master thread.
</span><br>
<span class="quotelev2">&gt;&gt; 2. Receive the sent data by MPI_Irecv in several threads (usually the same as the number of CPU core) and do their jobs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is one main thread (main process) and one master thread and several working threads in the code. MPI_Isend is called in the master thread.
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Irecv is called in the working threads.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My problem is MPI_Wait stalls after calling MPI_Isend. MPI_Wait is called just after MPI_Isend.  Several time the routines get through, but after sending several data MPI_Wait stalls.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Using Xcode debugger, the loop with c-&gt;c_signaled at line 70 of opal_conidition_wait (opal/threads/condition.h) never escape.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I guess I would make something wrong. I would like to know how to find the problem. 
</span><br>
<span class="quotelev2">&gt;&gt; I would be obliged if you&#226;&#128;&#153;d point the solution or the next direction to be investigated for debugging.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My Environment : OSX 10.9.5, Apple LLVM 6.0 (LLVM 3.5svn), OpenMPI 1.10.0
</span><br>
<span class="quotelev2">&gt;&gt; The thread is wxThread from wxWidgets Library (3.0.2) which is a wrapper of pthread.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI is configure-ed : --enable-mpi-thread-multiple --enable-debug --enable-event-debug
</span><br>
<span class="quotelev2">&gt;&gt; Please find the detail (config.log and ompi_info &#226;&#128;&#148;all) attached in this mail.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much in advance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sincerely,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ABE Hiroshi
</span><br>
<span class="quotelev2">&gt;&gt;  from Tokorozawa, JAPAN
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27923.php">http://www.open-mpi.org/community/lists/users/2015/10/27923.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27924.php">http://www.open-mpi.org/community/lists/users/2015/10/27924.php</a>
</span><br>
<p>ABE Hiroshi
<br>
&nbsp;from Tokorozawa, JAPAN
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27925/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27926.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27924.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="27924.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27927.php">Nathan Hjelm: "Re: [OMPI users] MPI_Wait stalls"</a>
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
