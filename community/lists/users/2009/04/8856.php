<?
$subject_val = "Re: [OMPI users] Debugging memory use of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  9 19:56:44 2009" -->
<!-- isoreceived="20090409235644" -->
<!-- sent="Thu, 09 Apr 2009 16:56:22 -0700" -->
<!-- isosent="20090409235622" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging memory use of Open MPI" -->
<!-- id="49DE8B26.1030006_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49DE7F59.1010004_at_bcgsc.ca" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-09 19:56:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8857.php">neeraj_at_[hidden]: "[OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8855.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8854.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8913.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8913.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm no expert, but I think it's something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) If the messages are short, they're sent over to the receiver.  If 
</span><br>
<span class="quotelev2">&gt;&gt; the receiver does not expect them (no MPI_Irecv posted), it buffers 
</span><br>
<span class="quotelev2">&gt;&gt; them up.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) If the messages are long, only a little bit is sent over to the 
</span><br>
<span class="quotelev2">&gt;&gt; receiver.  The receiver will take in that little bit, but until an 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Irecv is posted it will not signal the sender that any more can 
</span><br>
<span class="quotelev2">&gt;&gt; be sent.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are these messages being sent over TCP between nodes?  How long are 
</span><br>
<span class="quotelev2">&gt;&gt; they?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each message is 2500 bytes. In this particular case, there are 8 
</span><br>
<span class="quotelev1">&gt; processes on one host and 8 more processes on another host. So, on the 
</span><br>
<span class="quotelev1">&gt; same host the communication will be shared memory, and between hosts 
</span><br>
<span class="quotelev1">&gt; it will be TCP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From your description, I'm guessing that either...
</span><br>
<span class="quotelev1">&gt; one process is falling behind the rest for whatever reason, and that 
</span><br>
<span class="quotelev1">&gt; it's buffering up received messages that haven't been handled by an 
</span><br>
<span class="quotelev1">&gt; MPI_Irecv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or...
</span><br>
<span class="quotelev1">&gt; one process is falling behind and the other processes that have 
</span><br>
<span class="quotelev1">&gt; messages to send to it are being queued up in a transmit buffer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can statistics about the number of buffered messages (either tx or rx) 
</span><br>
<span class="quotelev1">&gt; be collected and reported by Open MPI? I suppose it would have to be a 
</span><br>
<span class="quotelev1">&gt; snapshot in time triggered either programatically or by a special kill 
</span><br>
<span class="quotelev1">&gt; signal, like SIGHUP or SIGUSR1.
</span><br>
<p>At 2500 bytes, all messages will presumably be sent &quot;eagerly&quot; -- without 
<br>
waiting for the receiver to indicate that it's ready to receive that 
<br>
particular message.  This would suggest congestion, if any, is on the 
<br>
receiver side.  Some kind of congestion could, I suppose, still occur 
<br>
and back up on the sender side.
<br>
<p>On the other hand, I assume the memory imbalance we're talking about is 
<br>
rather severe.  Much more than 2500 bytes to be noticeable, I would 
<br>
think.  Is that really the situation you're imagining?
<br>
<p>There are tracing tools to look at this sort of thing.  The only one I 
<br>
have much familiarity with is Sun Studio / Sun HPC ClusterTools.  Free 
<br>
download, available on Solaris or Linux, SPARC or x64, plays with OMPI.  
<br>
You can see a timeline with message lines on it to give you an idea if 
<br>
messages are being received/completed long after they were sent.  
<br>
Another interesting view is constructing a plot vs time of how many 
<br>
messages are in-flight at any moment (including as a function of 
<br>
receiver).  Lots of similar tools out there... VampirTrace (tracing side 
<br>
only, need to analyze the data), Jumpshot, etc.  Again, though, there's 
<br>
a question in my mind if you're really backing up 1000s or more of 
<br>
messages.  (I'm assuming the memory imbalances are at least Mbytes.)
<br>
<p>Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; Each message is 2500 bytes, as I mentioned previously. In fact, each 
</span><br>
<span class="quotelev1">&gt; message is composed of one hundred 25-byte operations that have been 
</span><br>
<span class="quotelev1">&gt; queued up at the application level and sent with a single MPI_Send. It 
</span><br>
<span class="quotelev1">&gt; would depend on the nature of the application of course, but is there 
</span><br>
<span class="quotelev1">&gt; any reason to believe that 100 individual MPI_Send would be any 
</span><br>
<span class="quotelev1">&gt; faster? Or is there a better way to queue up messages for a batch 
</span><br>
<span class="quotelev1">&gt; transmission?
</span><br>
<p>MPI common wisdom would say that if your messages are 25 bytes each and 
<br>
you already went to the pain of batching these messages up, you are 
<br>
lucky.  The overhead on 25-byte messages would be high.  That said, I 
<br>
could think of counterarguments (e.g., having to wait a long time for 
<br>
the last few messages before you can send a 100-message lot off or 
<br>
something), so your mileage will vary.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8857.php">neeraj_at_[hidden]: "[OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8855.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8854.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8913.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8913.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
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
