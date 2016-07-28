<?
$subject_val = "Re: [OMPI users] Debugging memory use of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 14:21:31 2009" -->
<!-- isoreceived="20090414182131" -->
<!-- sent="Tue, 14 Apr 2009 12:21:22 -0600" -->
<!-- isosent="20090414182122" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging memory use of Open MPI" -->
<!-- id="B5223271-4BBC-4A2E-805E-5B627645BC69_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49E4CFAD.4060307_at_bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging memory use of Open MPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 14:21:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8916.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8914.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8913.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8916.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8916.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14, 2009, at 12:02 PM, Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; Hi Eugene,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; At 2500 bytes, all messages will presumably be sent &quot;eagerly&quot; --  
</span><br>
<span class="quotelev2">&gt;&gt; without waiting for the receiver to indicate that it's ready to  
</span><br>
<span class="quotelev2">&gt;&gt; receive that particular message.  This would suggest congestion, if  
</span><br>
<span class="quotelev2">&gt;&gt; any, is on the receiver side.  Some kind of congestion could, I  
</span><br>
<span class="quotelev2">&gt;&gt; suppose, still occur and back up on the sender side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone chime in as to what the message size limit is for an  
</span><br>
<span class="quotelev1">&gt; `eager' transmission?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the other hand, I assume the memory imbalance we're talking  
</span><br>
<span class="quotelev2">&gt;&gt; about is rather severe.  Much more than 2500 bytes to be  
</span><br>
<span class="quotelev2">&gt;&gt; noticeable, I would think.  Is that really the situation you're  
</span><br>
<span class="quotelev2">&gt;&gt; imagining?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The memory imbalance is drastic. I'm expecting 2 GB of memory use  
</span><br>
<span class="quotelev1">&gt; per process. The heaving processes (13/16) use the expected amount  
</span><br>
<span class="quotelev1">&gt; of memory; the remainder (3/16) misbehaving processes use more than  
</span><br>
<span class="quotelev1">&gt; twice as much memory. The specifics vary from run to run of course.  
</span><br>
<span class="quotelev1">&gt; So, yes, there is gigs of unexpected memory use to track down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are tracing tools to look at this sort of thing.  The only  
</span><br>
<span class="quotelev2">&gt;&gt; one I have much familiarity with is Sun Studio / Sun HPC  
</span><br>
<span class="quotelev2">&gt;&gt; ClusterTools.  Free download, available on Solaris or Linux, SPARC  
</span><br>
<span class="quotelev2">&gt;&gt; or x64, plays with OMPI.  You can see a timeline with message lines  
</span><br>
<span class="quotelev2">&gt;&gt; on it to give you an idea if messages are being received/completed  
</span><br>
<span class="quotelev2">&gt;&gt; long after they were sent.  Another interesting view is  
</span><br>
<span class="quotelev2">&gt;&gt; constructing a plot vs time of how many messages are in-flight at  
</span><br>
<span class="quotelev2">&gt;&gt; any moment (including as a function of receiver).  Lots of similar  
</span><br>
<span class="quotelev2">&gt;&gt; tools out there... VampirTrace (tracing side only, need to analyze  
</span><br>
<span class="quotelev2">&gt;&gt; the data), Jumpshot, etc.  Again, though, there's a question in my  
</span><br>
<span class="quotelev2">&gt;&gt; mind if you're really backing up 1000s or more of messages.  (I'm  
</span><br>
<span class="quotelev2">&gt;&gt; assuming the memory imbalances are at least Mbytes.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll check out Sun HPC ClusterTools. Thanks for the tip.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Assuming the problem is congestion and that messages are backing up,  
</span><br>
<span class="quotelev1">&gt; is there an accepted method of dealing with this situation? It seems  
</span><br>
<span class="quotelev1">&gt; to me the general approach would be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (number of outstanding messages &gt; high water mark)
</span><br>
<span class="quotelev1">&gt;    wait until (number of outstanding messages &lt; low water mark)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where I suppose the `number of outstanding messages' is defined as  
</span><br>
<span class="quotelev1">&gt; the number of messages that have been sent and not yet received by  
</span><br>
<span class="quotelev1">&gt; the other side. Is there a way to get this number from MPI without  
</span><br>
<span class="quotelev1">&gt; having to code it at the application level?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It isn't quite that simple. The problem is that these are typically  
<br>
&quot;unexpected&quot; messages - i.e., some processes are running faster than  
<br>
this one, so this one keeps falling behind, which means it has to  
<br>
&quot;stockpile&quot; messages for later processing.
<br>
<p>It is impossible to predict who is going to send the next unexpected  
<br>
message, so attempting to say &quot;wait&quot; means sending a broadcast to all  
<br>
procs - a very expensive operation, especially since it can be any  
<br>
number of procs that feel overloaded.
<br>
<p>We had the same problem when working with collectives, where memory  
<br>
was being overwhelmed by stockpiled messages. The solution (available  
<br>
in the 1.3 series) in that case was to use the &quot;sync&quot; collective  
<br>
system. This monitors the number of times a collective is being  
<br>
executed that can cause this type of problem, and then inserts an  
<br>
MPI_Barrier to allow time for the processes to &quot;drain&quot; all pending  
<br>
messages. You can control how frequently this happens, and whether to  
<br>
barrier occurs before or after the specified number of operations.
<br>
<p>If you are using collectives, or can reframe the algorithm so you do,  
<br>
you might give that  a try - it has solved similar problems here. If  
<br>
it helps, then you should &quot;tune&quot; it by increasing the provided number  
<br>
(thus decreasing the frequency of the inserted barrier) until you find  
<br>
a value that works for you - this will minimize performance impact on  
<br>
your job caused by the inserted barriers.
<br>
<p>If you are not using collectives and/or cannot do so, then perhaps we  
<br>
need to consider a similar approach for simple send/recv operations.  
<br>
It would probably have to be done inside the MPI library, but may be  
<br>
hard to implement. The collective works because we know everyone has  
<br>
to be in it. That isn't true for send/recv, so the barrier approach  
<br>
won't work there - we would need some other method of stopping procs  
<br>
to allow things to catch up.
<br>
<p>Not sure what that would be offhand....but perhaps some other wiser  
<br>
head will think of something!
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Shaun
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8916.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8914.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8913.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8916.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8916.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
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
