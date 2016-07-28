<?
$subject_val = "Re: [OMPI users] Questions about non-blocking collective calls...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 03:18:01 2015" -->
<!-- isoreceived="20151022071801" -->
<!-- sent="Thu, 22 Oct 2015 03:17:58 -0400" -->
<!-- isosent="20151022071758" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about non-blocking collective calls..." -->
<!-- id="CAG4F6z9jkLQ=H_CFzhc_Pte83BQCNDpApTo1YQKGJ-9deAPYQg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-22 03:17:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27917.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Previous message:</strong> <a href="27915.php">Gilles Gouaillardet: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>In reply to:</strong> <a href="27915.php">Gilles Gouaillardet: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27917.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Instead of posting a single, big MPI_Igather, why not post and
<br>
simultaneously progress multiple, small MPI_Igathers? In this way, you can
<br>
pipeline multiple outstanding collectives and do post collective processing
<br>
as soon as requests complete. Without network hardware offload
<br>
capability, Gilles'
<br>
observation about the perceived overlap not being truly asynchronous is
<br>
true; however, you will be able to at least leverage more
<br>
scalable logarithmic algorithms (depending on which library implementation
<br>
you use), and make more effective use of CPU cycles.
<br>
<p>Josh
<br>
<p>On Wed, Oct 21, 2015 at 8:31 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #1 MPI_Igather uses only one MPI_Request, and it is marked as completed
</span><br>
<span class="quotelev1">&gt; when all data has been received.
</span><br>
<span class="quotelev1">&gt; so no, you cannot process data as it is received.
</span><br>
<span class="quotelev1">&gt; (and btw, that would require extra subroutines to ask which piece of data
</span><br>
<span class="quotelev1">&gt; has already been received)
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #3 difficult question ...
</span><br>
<span class="quotelev1">&gt; first, keep in mind there is currently no progress thread in Open MPI.
</span><br>
<span class="quotelev1">&gt; that means messages can be received only when MPI_Wait* or MPI_Test* is
</span><br>
<span class="quotelev1">&gt; invoked. you might hope messages are received when doing some computation
</span><br>
<span class="quotelev1">&gt; (overlap of computation and communication) but unfortunatly, that does not
</span><br>
<span class="quotelev1">&gt; happen most of the time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linear gather does not scale well (see my previous comment) plus you
</span><br>
<span class="quotelev1">&gt; openmpi might malloc some space &quot;under the hood&quot; so MPI_Igather will
</span><br>
<span class="quotelev1">&gt; hopefully scale better.
</span><br>
<span class="quotelev1">&gt; is there any hard reason why you are using non blocking collective ?
</span><br>
<span class="quotelev1">&gt; if your application is known to be highly asynchronous and some message
</span><br>
<span class="quotelev1">&gt; might arrive (way) later than others, and computation is quite expensive,
</span><br>
<span class="quotelev1">&gt; then your approach might be a good fit.
</span><br>
<span class="quotelev1">&gt; if your application is pretty synchronous, and cost of computation that
</span><br>
<span class="quotelev1">&gt; might overlap with communication is not significant, your approach might
</span><br>
<span class="quotelev1">&gt; have little benefits and poor scalability, so MPI_Gather (not MPI_Igather
</span><br>
<span class="quotelev1">&gt; since you might have no computation that could overlap with communication)
</span><br>
<span class="quotelev1">&gt; might be a better choice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/22/2015 4:46 AM, Eric Chamberland wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A long time ago (in 2002) we programmed here a non-blocking MPI_Igather
</span><br>
<span class="quotelev1">&gt; with equivalent calls to MPI_Isend/MPI_Irecv (see the 2 attached files).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A very convenient advantage of this version, is that I can do some work on
</span><br>
<span class="quotelev1">&gt; the root process as soon as it start receiving data...  Then, it wait for
</span><br>
<span class="quotelev1">&gt; the next communication to terminate and process the received data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, I am looking at MPI_Igather (and all non-blocking collective MPI
</span><br>
<span class="quotelev1">&gt; calls), and I am somewhat surprised (or ignorant) that I cannot have the
</span><br>
<span class="quotelev1">&gt; root rank receive some data, then process it, then wait until the next
</span><br>
<span class="quotelev1">&gt; &quot;MPI_irecv&quot; terminate...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In other words, a MPI_Igather generate only 1 MPI_Request but I would like
</span><br>
<span class="quotelev1">&gt; to have either &quot;p&quot; (with p = size of communicator) MPI_Request generated or
</span><br>
<span class="quotelev1">&gt; be able to call &quot;p&quot; times MPI_WaitAny with the same MPI_Request...  Am I
</span><br>
<span class="quotelev1">&gt; normal? :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my 3 questions are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #1- Is there a way to use MPI_Igather with MPI_WaitAny (or something
</span><br>
<span class="quotelev1">&gt; else?) to process data as it is received?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #2- Big question: will our implementation with MPI_Isend/MPI_Irecv scale
</span><br>
<span class="quotelev1">&gt; to a large number of processes?  What are the possible drawbacks of doing
</span><br>
<span class="quotelev1">&gt; it like we did?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #3- Why should I replace our implementation by the native MPI_Igather?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27914.php">http://www.open-mpi.org/community/lists/users/2015/10/27914.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27915.php">http://www.open-mpi.org/community/lists/users/2015/10/27915.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27916/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27917.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Previous message:</strong> <a href="27915.php">Gilles Gouaillardet: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>In reply to:</strong> <a href="27915.php">Gilles Gouaillardet: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27917.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
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
