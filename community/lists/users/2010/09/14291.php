<?
$subject_val = "Re: [OMPI users] Question about Asynchronous collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 09:47:07 2010" -->
<!-- isoreceived="20100923134707" -->
<!-- sent="Thu, 23 Sep 2010 09:47:03 -0400" -->
<!-- isosent="20100923134703" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about Asynchronous collectives" -->
<!-- id="42723AED-EFEA-434E-AAD5-29C8B7135738_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimW7oPmTKvb4=SFrRojkM1Fad_w7c330MgHy9Qk_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-09-23 09:47:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14292.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Previous message:</strong> <a href="14290.php">Lewis, Ambrose J.: "[OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>In reply to:</strong> <a href="14288.php">Gabriele Fatigati: "[OMPI users] Question about Asynchronous collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14292.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Reply:</strong> <a href="14292.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 23, 2010, at 6:28 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; i'm studing the interfaces of new collective routines in next MPI-3, and i've read that new collectives haven't any tag. 
</span><br>
<p>Correct.
<br>
<p><span class="quotelev1">&gt; So all collective operations must follow the ordering rules for collective calls.
</span><br>
<p>Also correct.
<br>
<p><span class="quotelev1">&gt; From what i understand, this means that i can't use:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_1) // first Bcast
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_2) // second Bcast
</span><br>
<p>No, not quite right.  You can have multiple outstanding ibcast's -- they'll just be satisfied in the same order in all participating MPI processes.
<br>
<p><span class="quotelev1">&gt; but is it possible to do this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_1) // first Bcast
</span><br>
<span class="quotelev1">&gt; MPI_IReducet(MPI_COMM_WORLD, request_2) // othwer collective
</span><br>
<p>Correct -- this is also possible.
<br>
<p>More generally, you can have multiple outstanding non-blocking collectives on a single communicator -- it doesn't matter if they are the same or different collective operations. They will each be unique instances and will be satisfied in order.
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
<li><strong>Next message:</strong> <a href="14292.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Previous message:</strong> <a href="14290.php">Lewis, Ambrose J.: "[OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>In reply to:</strong> <a href="14288.php">Gabriele Fatigati: "[OMPI users] Question about Asynchronous collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14292.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Reply:</strong> <a href="14292.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
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
