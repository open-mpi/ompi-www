<?
$subject_val = "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 17:33:10 2009" -->
<!-- isoreceived="20090619213310" -->
<!-- sent="Fri, 19 Jun 2009 14:33:14 -0700" -->
<!-- isosent="20090619213314" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes" -->
<!-- id="4A3C041A.1090105_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7FC6EE14-B57E-4ED3-BF69-51E06E004917_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 17:33:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9649.php">Honest Guvnor: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>Previous message:</strong> <a href="9647.php">George Bosilca: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>In reply to:</strong> <a href="9647.php">George Bosilca: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9654.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Reply:</strong> <a href="9654.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; MPI does not impose any global order on the messages. The only  
</span><br>
<span class="quotelev1">&gt; requirement is that between two peers on the same communicator the  
</span><br>
<span class="quotelev1">&gt; messages (or at least the part required for the matching) is 
</span><br>
<span class="quotelev1">&gt; delivered  in order. This make both execution traces you sent with 
</span><br>
<span class="quotelev1">&gt; your original  email (shared memory and TCP) valid from the MPI 
</span><br>
<span class="quotelev1">&gt; perspective.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Moreover, MPI doesn't impose any order in the matching when 
</span><br>
<span class="quotelev1">&gt; ANY_SOURCE  is used. In Open MPI we do the matching _ALWAYS_ starting 
</span><br>
<span class="quotelev1">&gt; from rank 0  to n in the specified communicator. BEWARE: The remaining 
</span><br>
<span class="quotelev1">&gt; of this  paragraph is deep black magic of an MPI implementation 
</span><br>
<span class="quotelev1">&gt; internals. The  main difference between the behavior of SM and TCP 
</span><br>
<span class="quotelev1">&gt; here directly  reflect their eager size, 4K for SM and 64K for TCP. 
</span><br>
<span class="quotelev1">&gt; Therefore, for  your example, for TCP all your messages are eager 
</span><br>
<span class="quotelev1">&gt; messages (i.e. are  completely transfered to the destination process 
</span><br>
<span class="quotelev1">&gt; in just one go),  while for SM they all require a rendez-vous. This 
</span><br>
<span class="quotelev1">&gt; directly impact the  ordering of the messages on the receiver, and 
</span><br>
<span class="quotelev1">&gt; therefore the order of  the matching. However, I have to insist on 
</span><br>
<span class="quotelev1">&gt; this, this behavior is  correct based on the MPI standard specifications.
</span><br>
<p>I'm going to try a technical explanation of what's going on inside OMPI 
<br>
and then words of advice to Mark.
<br>
<p>First, the technical explanation.  As George says, what's going on is 
<br>
legal.  The &quot;servers&quot; all queue up sends to the &quot;compositor&quot;.  These are 
<br>
long, rendezvous sends (at least when they're on-node).  So, none of 
<br>
these sends completes.  The compositor looks for an in-coming message.  
<br>
It's gets the header of the message and sends back an acknowledgement 
<br>
that the rest of the message can be sent.  The &quot;server&quot; gets the 
<br>
acknowledgement and starts sending more of the message.  The compositor, 
<br>
in order to get to the remainder of the message, keeps draining all the 
<br>
other stuff servers are sending it.  Once the first message is 
<br>
completely received, the compositor looks for the next message to 
<br>
process and happens to pick up the first server again.  It won't go to 
<br>
anyone else under server 1 is exhausted.  Legal, but from Mark's point 
<br>
of view not desirable.  The compositor is busy all the time.  Mark just 
<br>
wants it to employ a different order.
<br>
<p>The receives are &quot;serialized&quot;.  Of course they must be since the 
<br>
receiver is a single process.  But Mark's performance issue is that the 
<br>
servers aren't being serviced equally.  So, they back up while server 
<br>
unfairly gets all the attention.
<br>
<p>Mark, your test code has a set of buffers it cycles through on each 
<br>
server.  Could you do something similar on the compositor side?  Have a 
<br>
set of resources for each server.  If you want the compositor to service 
<br>
all servers equally/fairly, you're going to have to prescribe this 
<br>
behavior in your MPI code.  The MPI implementation can't be relied on to 
<br>
do this for you.
<br>
<p>If this doesn't make sense, let me know and I'll try to sketch is out 
<br>
more explicitly.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9649.php">Honest Guvnor: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>Previous message:</strong> <a href="9647.php">George Bosilca: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>In reply to:</strong> <a href="9647.php">George Bosilca: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9654.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Reply:</strong> <a href="9654.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
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
