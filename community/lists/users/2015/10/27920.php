<?
$subject_val = "Re: [OMPI users] Questions about non-blocking collective calls...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 00:30:01 2015" -->
<!-- isoreceived="20151023043001" -->
<!-- sent="Fri, 23 Oct 2015 00:29:56 -0400" -->
<!-- isosent="20151023042956" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about non-blocking collective calls..." -->
<!-- id="A0E17D93-4CDD-4375-859D-2C1C9AA43C38_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56290DEF.6050705_at_giref.ulaval.ca" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-23 00:29:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27921.php">Sasso, John (GE Power & Water, Non-GE): "[OMPI users] Finding amount of pinned memory &amp; regions"</a>
<li><strong>Previous message:</strong> <a href="27919.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>In reply to:</strong> <a href="27917.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/12/28174.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric,
<br>
<p>A tree based implementation for a gather is not that critical, because the root will always have to gather the entire data, so from it&#226;&#128;&#153;s perspective going from a star to a tree-based topology is basically exchanging latencies for bandwidth (a little bit more complicated in practice). In fact from the amount of data injected on the network, the star topology is optimal for this particular collective.
<br>
<p>Moreover, with your homemade implementation you have the opportunity to execute something after each successful receive, which might improve your communication/computation overlap, and have an impact on overall performance. I would carefully benchmark both approaches based on some concrete example (taking in account the size of the communicator and the size of the data being transmitted).
<br>
<p>More inline.
<br>
<p><p><span class="quotelev1">&gt; On Oct 22, 2015, at 12:25 , Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Gilles and Josh,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think my reply apply to both of your answers which I thank you for.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 21/10/15 08:31 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Eric,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #2 maybe not ...
</span><br>
<span class="quotelev2">&gt;&gt; a tree based approach has O(log(n)) scaling
</span><br>
<span class="quotelev2">&gt;&gt; (compared to O(n) scaling with your linear method.
</span><br>
<span class="quotelev2">&gt;&gt; so at scale, MPI_Igather will hopefully scale better (and especially if
</span><br>
<span class="quotelev2">&gt;&gt; you are transmitting small messages)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see.  Now, please don't blame me for not reading the mpi standard, but:  is it or should it be guaranteed by the standard?  If not, isn't it a repetitive work for all mpi users to re-implement a (debugged) tree based approach in all their code?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In other words, if everybody knows that to scale well, you have to program a tree based approach for the communications, why isn&#226;&#128;&#153;t it in the standard?
</span><br>
<p>The MPI standard defines an API and the outcome of each function, without messing with the way they are implemented in the different MPI implementation. Thus, the standard defines what a gather operations is, one process gathering data from all the others, without imposing how this goal should be reached (such as internal copies on intermediary nodes on the tree structure).
<br>
<p><span class="quotelev2">&gt;&gt; #3 difficult question ...
</span><br>
<span class="quotelev2">&gt;&gt; first, keep in mind there is currently no progress thread in Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; that means messages can be received only when MPI_Wait* or MPI_Test* is
</span><br>
<span class="quotelev2">&gt;&gt; invoked. you might hope messages are received when doing some
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ok!  So it may be different with another MPI&#226;&#128;&#166;?
</span><br>
<p>Only the API is the same, each MPI has different perks and drawbacks. Moreover, each MPI implement the collective communications differently.
<br>
<p><span class="quotelev2">&gt;&gt; computation (overlap of computation and communication) but unfortunatly,
</span><br>
<span class="quotelev2">&gt;&gt; that does not happen most of the time.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; linear gather does not scale well (see my previous comment) plus you
</span><br>
<span class="quotelev2">&gt;&gt; openmpi might malloc some space &quot;under the hood&quot; so MPI_Igather will
</span><br>
<span class="quotelev2">&gt;&gt; hopefully scale better.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is something I was asking myself about&#226;&#128;&#166; will I over-allocate memory with all our MPI_Isend/Irecv...?
</span><br>
<p>Only if you generate unexpected messages (the send has been posted, but the local receive not). This is the most memory constraint approach.
<br>
<p><span class="quotelev1">&gt;  I simple test with the code I sent in the first mail show a small extra use of memory, but I didn't go very far with the test yet...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; is there any hard reason why you are using non blocking collective ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No.  Our home-made non-blocking collective is just an initial design that is still used in our code, but I want a sufficient number of good reasons to change it or not, to non-blocking or blocking collective calls&#226;&#128;&#166;
</span><br>
<p>1. You should expect portability and maybe even some performance portability.
<br>
2. Someone else already debug it
<br>
3. It&#226;&#128;&#153;s trendy to say that you use igather
<br>
<p>George.
<br>
<p><span class="quotelev2">&gt;&gt; if your application is known to be highly asynchronous and some message
</span><br>
<span class="quotelev2">&gt;&gt; might arrive (way) later than others, and computation is quite
</span><br>
<span class="quotelev2">&gt;&gt; expensive, then your approach might be a good fit.
</span><br>
<span class="quotelev2">&gt;&gt; if your application is pretty synchronous, and cost of computation that
</span><br>
<span class="quotelev2">&gt;&gt; might overlap with communication is not significant, your approach might
</span><br>
<span class="quotelev2">&gt;&gt; have little benefits and poor scalability, so MPI_Gather (not
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Igather since you might have no computation that could overlap with
</span><br>
<span class="quotelev2">&gt;&gt; communication) might be a better choice.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good Question.  It is a finite elements code.  Some work may be highly asynchronous but other not...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have any suggestion for some good further reading about all this matter?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27917.php">http://www.open-mpi.org/community/lists/users/2015/10/27917.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27921.php">Sasso, John (GE Power & Water, Non-GE): "[OMPI users] Finding amount of pinned memory &amp; regions"</a>
<li><strong>Previous message:</strong> <a href="27919.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>In reply to:</strong> <a href="27917.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/12/28174.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
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
