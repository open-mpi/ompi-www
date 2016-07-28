<?
$subject_val = "Re: [OMPI users] Questions about non-blocking collective calls...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 12:25:56 2015" -->
<!-- isoreceived="20151022162556" -->
<!-- sent="Thu, 22 Oct 2015 12:25:19 -0400" -->
<!-- isosent="20151022162519" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about non-blocking collective calls..." -->
<!-- id="56290DEF.6050705_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56282E6B.1050006_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions about non-blocking collective calls...<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-22 12:25:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27918.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="27916.php">Joshua Ladd: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>In reply to:</strong> <a href="27915.php">Gilles Gouaillardet: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27920.php">George Bosilca: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Reply:</strong> <a href="27920.php">George Bosilca: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles and Josh,
<br>
<p>I think my reply apply to both of your answers which I thank you for.
<br>
<p>On 21/10/15 08:31 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #2 maybe not ...
</span><br>
<span class="quotelev1">&gt; a tree based approach has O(log(n)) scaling
</span><br>
<span class="quotelev1">&gt; (compared to O(n) scaling with your linear method.
</span><br>
<span class="quotelev1">&gt; so at scale, MPI_Igather will hopefully scale better (and especially if
</span><br>
<span class="quotelev1">&gt; you are transmitting small messages)
</span><br>
<p>I see.  Now, please don't blame me for not reading the mpi standard, 
<br>
but:  is it or should it be guaranteed by the standard?  If not, isn't 
<br>
it a repetitive work for all mpi users to re-implement a (debugged) tree 
<br>
based approach in all their code?
<br>
<p>In other words, if everybody knows that to scale well, you have to 
<br>
program a tree based approach for the communications, why isn't it in 
<br>
the standard?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #3 difficult question ...
</span><br>
<span class="quotelev1">&gt; first, keep in mind there is currently no progress thread in Open MPI.
</span><br>
<span class="quotelev1">&gt; that means messages can be received only when MPI_Wait* or MPI_Test* is
</span><br>
<span class="quotelev1">&gt; invoked. you might hope messages are received when doing some
</span><br>
<p>ok!  So it may be different with another MPI...?
<br>
<p><span class="quotelev1">&gt; computation (overlap of computation and communication) but unfortunatly,
</span><br>
<span class="quotelev1">&gt; that does not happen most of the time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linear gather does not scale well (see my previous comment) plus you
</span><br>
<span class="quotelev1">&gt; openmpi might malloc some space &quot;under the hood&quot; so MPI_Igather will
</span><br>
<span class="quotelev1">&gt; hopefully scale better.
</span><br>
<p>That is something I was asking myself about... will I over-allocate 
<br>
memory with all our MPI_Isend/Irecv...?  I simple test with the code I 
<br>
sent in the first mail show a small extra use of memory, but I didn't go 
<br>
very far with the test yet...
<br>
<p><span class="quotelev1">&gt; is there any hard reason why you are using non blocking collective ?
</span><br>
<p>No.  Our home-made non-blocking collective is just an initial design 
<br>
that is still used in our code, but I want a sufficient number of good 
<br>
reasons to change it or not, to non-blocking or blocking collective calls...
<br>
<p><span class="quotelev1">&gt; if your application is known to be highly asynchronous and some message
</span><br>
<span class="quotelev1">&gt; might arrive (way) later than others, and computation is quite
</span><br>
<span class="quotelev1">&gt; expensive, then your approach might be a good fit.
</span><br>
<span class="quotelev1">&gt; if your application is pretty synchronous, and cost of computation that
</span><br>
<span class="quotelev1">&gt; might overlap with communication is not significant, your approach might
</span><br>
<span class="quotelev1">&gt; have little benefits and poor scalability, so MPI_Gather (not
</span><br>
<span class="quotelev1">&gt; MPI_Igather since you might have no computation that could overlap with
</span><br>
<span class="quotelev1">&gt; communication) might be a better choice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Good Question.  It is a finite elements code.  Some work may be highly 
<br>
asynchronous but other not...
<br>
<p>Do you have any suggestion for some good further reading about all this 
<br>
matter?
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27918.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="27916.php">Joshua Ladd: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>In reply to:</strong> <a href="27915.php">Gilles Gouaillardet: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27920.php">George Bosilca: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Reply:</strong> <a href="27920.php">George Bosilca: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
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
