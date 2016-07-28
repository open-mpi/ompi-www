<?
$subject_val = "Re: [OMPI users] Question about Asynchronous collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 10:13:08 2010" -->
<!-- isoreceived="20100923141308" -->
<!-- sent="Thu, 23 Sep 2010 10:13:04 -0400" -->
<!-- isosent="20100923141304" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about Asynchronous collectives" -->
<!-- id="E8BD1BDD-B7E0-420F-91ED-FEE412923B6A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikiYUC-A-9QMjWPzf18dc8imLgkHVrqCGBKG5S9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about Asynchronous collectives<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 10:13:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14294.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Previous message:</strong> <a href="14292.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>In reply to:</strong> <a href="14292.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14294.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Reply:</strong> <a href="14294.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 23, 2010, at 10:00 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; to be sure, if i have one processor who does:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_1) // first Bcast
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_2) // second Bcast
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it means that i can't have another process who does the follow:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_2) // firt Bcast for another process
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_1) // second Bcast for another process
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because first Bcast of second process matches with first Bcast of first process, and it's wrong.
</span><br>
<p>If you did a &quot;waitall&quot; on both requests, it would probably work because MPI would just &quot;figure it out&quot;.  But if you did something like:
<br>
<p>proc 0:
<br>
MPI_IBcast(MPI_COMM_WORLD, request_1) // first Bcast
<br>
MPI_IBcast(MPI_COMM_WORLD, request_2) // second Bcast
<br>
MPI_Wait(&amp;request_1, ...);
<br>
MPI_Wait(&amp;request_2, ...);
<br>
<p>proc 1:
<br>
MPI_IBcast(MPI_COMM_WORLD, request_2) // first Bcast
<br>
MPI_IBcast(MPI_COMM_WORLD, request_1) // second Bcast
<br>
MPI_Wait(&amp;request_1, ...);
<br>
MPI_Wait(&amp;request_2, ...);
<br>
<p>That may/will deadlock.
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
<li><strong>Next message:</strong> <a href="14294.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Previous message:</strong> <a href="14292.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>In reply to:</strong> <a href="14292.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14294.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Reply:</strong> <a href="14294.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
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
