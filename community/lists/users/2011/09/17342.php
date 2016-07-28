<?
$subject_val = "Re: [OMPI users] RE :  MPI hangs on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 13:13:17 2011" -->
<!-- isoreceived="20110919171317" -->
<!-- sent="Mon, 19 Sep 2011 13:13:08 -0400" -->
<!-- isosent="20110919171308" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RE :  MPI hangs on multiple nodes" -->
<!-- id="4E777824.60507_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E775A4E.5020405_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] RE :  MPI hangs on multiple nodes<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 13:13:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17343.php">Jeremiah Willcock: "[OMPI users] Typo in MPI_Cart_coords man page"</a>
<li><strong>Previous message:</strong> <a href="17341.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Maybe in reply to:</strong> <a href="17337.php">S&#233;bastien Boisvert: "[OMPI users] RE :  MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17344.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17344.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eugene
<br>
<p>You're right, it is blocking send, buffers can be reused after MPI_Send 
<br>
returns.
<br>
My bad, I only read your answer to Sebastien and Ole
<br>
after I posted mine.
<br>
<p>Could MPI run out of [internal] buffers to hold the messages, perhaps?
<br>
The messages aren't that big anyway [5000 doubles].
<br>
Could MPI behave differently regarding internal
<br>
buffering when communication is intra-node vs. across the network?
<br>
[It works intra-node, according to Ole's posting.]
<br>
<p>I suppose Ole rebuilt OpenMPI on his newly installed Ubuntu.
<br>
<p>Gus Correa
<br>
<p><p>Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; I'm missing the point on the buffer re-use.  It seems to me that the 
</span><br>
<span class="quotelev1">&gt; sample program passes some buffer around in a ring.  Each process 
</span><br>
<span class="quotelev1">&gt; receives the buffer with a blocking receive and then forwards it with a 
</span><br>
<span class="quotelev1">&gt; blocking send.  The blocking send does not return until the send buffer 
</span><br>
<span class="quotelev1">&gt; is safe to reuse.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/19/2011 7:37 AM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You could try the examples/connectivity.c program in the
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI source tree, to test if everything is alright.
</span><br>
<span class="quotelev2">&gt;&gt; It also hints how to solve the buffer re-use issue
</span><br>
<span class="quotelev2">&gt;&gt; that Sebastien [rightfully] pointed out [i.e., declare separate
</span><br>
<span class="quotelev2">&gt;&gt; buffers for MPI_Send and MPI_Recv].
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it safe to re-use the same buffer (variable A) for MPI_Send and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Recv given that MPI_Send may be eager depending on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the MCA parameters ?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17343.php">Jeremiah Willcock: "[OMPI users] Typo in MPI_Cart_coords man page"</a>
<li><strong>Previous message:</strong> <a href="17341.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Maybe in reply to:</strong> <a href="17337.php">S&#233;bastien Boisvert: "[OMPI users] RE :  MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17344.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17344.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
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
