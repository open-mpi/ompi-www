<?
$subject_val = "Re: [OMPI users] Questions about non-blocking collective calls...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 20:31:48 2015" -->
<!-- isoreceived="20151022003148" -->
<!-- sent="Thu, 22 Oct 2015 09:31:39 +0900" -->
<!-- isosent="20151022003139" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about non-blocking collective calls..." -->
<!-- id="56282E6B.1050006_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5627EB91.7090100_at_giref.ulaval.ca" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-21 20:31:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27916.php">Joshua Ladd: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Previous message:</strong> <a href="27914.php">Eric Chamberland: "[OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>In reply to:</strong> <a href="27914.php">Eric Chamberland: "[OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27916.php">Joshua Ladd: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Reply:</strong> <a href="27916.php">Joshua Ladd: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Reply:</strong> <a href="27917.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/12/28174.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric,
<br>
<p>#1 MPI_Igather uses only one MPI_Request, and it is marked as completed 
<br>
when all data has been received.
<br>
so no, you cannot process data as it is received.
<br>
(and btw, that would require extra subroutines to ask which piece of 
<br>
data has already been received)
<br>
<p>#2 maybe not ...
<br>
a tree based approach has O(log(n)) scaling
<br>
(compared to O(n) scaling with your linear method.
<br>
so at scale, MPI_Igather will hopefully scale better (and especially if 
<br>
you are transmitting small messages)
<br>
<p>#3 difficult question ...
<br>
first, keep in mind there is currently no progress thread in Open MPI. 
<br>
that means messages can be received only when MPI_Wait* or MPI_Test* is 
<br>
invoked. you might hope messages are received when doing some 
<br>
computation (overlap of computation and communication) but unfortunatly, 
<br>
that does not happen most of the time.
<br>
<p>linear gather does not scale well (see my previous comment) plus you 
<br>
openmpi might malloc some space &quot;under the hood&quot; so MPI_Igather will 
<br>
hopefully scale better.
<br>
is there any hard reason why you are using non blocking collective ?
<br>
if your application is known to be highly asynchronous and some message 
<br>
might arrive (way) later than others, and computation is quite 
<br>
expensive, then your approach might be a good fit.
<br>
if your application is pretty synchronous, and cost of computation that 
<br>
might overlap with communication is not significant, your approach might 
<br>
have little benefits and poor scalability, so MPI_Gather (not 
<br>
MPI_Igather since you might have no computation that could overlap with 
<br>
communication) might be a better choice.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 10/22/2015 4:46 AM, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A long time ago (in 2002) we programmed here a non-blocking 
</span><br>
<span class="quotelev1">&gt; MPI_Igather with equivalent calls to MPI_Isend/MPI_Irecv (see the 2 
</span><br>
<span class="quotelev1">&gt; attached files).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A very convenient advantage of this version, is that I can do some 
</span><br>
<span class="quotelev1">&gt; work on the root process as soon as it start receiving data... Then, 
</span><br>
<span class="quotelev1">&gt; it wait for the next communication to terminate and process the 
</span><br>
<span class="quotelev1">&gt; received data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, I am looking at MPI_Igather (and all non-blocking collective MPI 
</span><br>
<span class="quotelev1">&gt; calls), and I am somewhat surprised (or ignorant) that I cannot have 
</span><br>
<span class="quotelev1">&gt; the root rank receive some data, then process it, then wait until the 
</span><br>
<span class="quotelev1">&gt; next &quot;MPI_irecv&quot; terminate...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In other words, a MPI_Igather generate only 1 MPI_Request but I would 
</span><br>
<span class="quotelev1">&gt; like to have either &quot;p&quot; (with p = size of communicator) MPI_Request 
</span><br>
<span class="quotelev1">&gt; generated or be able to call &quot;p&quot; times MPI_WaitAny with the same 
</span><br>
<span class="quotelev1">&gt; MPI_Request...  Am I normal? :)
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
<span class="quotelev1">&gt; #2- Big question: will our implementation with MPI_Isend/MPI_Irecv 
</span><br>
<span class="quotelev1">&gt; scale to a large number of processes?  What are the possible drawbacks 
</span><br>
<span class="quotelev1">&gt; of doing it like we did?
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27914.php">http://www.open-mpi.org/community/lists/users/2015/10/27914.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27915/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27916.php">Joshua Ladd: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Previous message:</strong> <a href="27914.php">Eric Chamberland: "[OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>In reply to:</strong> <a href="27914.php">Eric Chamberland: "[OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27916.php">Joshua Ladd: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Reply:</strong> <a href="27916.php">Joshua Ladd: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Reply:</strong> <a href="27917.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/12/28174.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
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
