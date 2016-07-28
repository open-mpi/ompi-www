<?
$subject_val = "Re: [OMPI users] Debugging memory use of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 14:02:55 2009" -->
<!-- isoreceived="20090414180255" -->
<!-- sent="Tue, 14 Apr 2009 11:02:21 -0700" -->
<!-- isosent="20090414180221" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging memory use of Open MPI" -->
<!-- id="49E4CFAD.4060307_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49DE8B26.1030006_at_sun.com" -->
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
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 14:02:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8914.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8912.php">Jeff Squyres: "Re: [OMPI users] all2all algorithms"</a>
<li><strong>In reply to:</strong> <a href="8856.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8914.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8914.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8915.php">Ralph Castain: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eugene,
<br>
<p>Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; At 2500 bytes, all messages will presumably be sent &quot;eagerly&quot; -- without 
</span><br>
<span class="quotelev1">&gt; waiting for the receiver to indicate that it's ready to receive that 
</span><br>
<span class="quotelev1">&gt; particular message.  This would suggest congestion, if any, is on the 
</span><br>
<span class="quotelev1">&gt; receiver side.  Some kind of congestion could, I suppose, still occur 
</span><br>
<span class="quotelev1">&gt; and back up on the sender side.
</span><br>
<p>Can anyone chime in as to what the message size limit is for an 
<br>
`eager' transmission?
<br>
<p><span class="quotelev1">&gt; On the other hand, I assume the memory imbalance we're talking about is 
</span><br>
<span class="quotelev1">&gt; rather severe.  Much more than 2500 bytes to be noticeable, I would 
</span><br>
<span class="quotelev1">&gt; think.  Is that really the situation you're imagining?
</span><br>
<p>The memory imbalance is drastic. I'm expecting 2 GB of memory use per 
<br>
process. The heaving processes (13/16) use the expected amount of 
<br>
memory; the remainder (3/16) misbehaving processes use more than twice 
<br>
as much memory. The specifics vary from run to run of course. So, yes, 
<br>
there is gigs of unexpected memory use to track down.
<br>
<p><span class="quotelev1">&gt; There are tracing tools to look at this sort of thing.  The only one I 
</span><br>
<span class="quotelev1">&gt; have much familiarity with is Sun Studio / Sun HPC ClusterTools.  Free 
</span><br>
<span class="quotelev1">&gt; download, available on Solaris or Linux, SPARC or x64, plays with OMPI.  
</span><br>
<span class="quotelev1">&gt; You can see a timeline with message lines on it to give you an idea if 
</span><br>
<span class="quotelev1">&gt; messages are being received/completed long after they were sent.  
</span><br>
<span class="quotelev1">&gt; Another interesting view is constructing a plot vs time of how many 
</span><br>
<span class="quotelev1">&gt; messages are in-flight at any moment (including as a function of 
</span><br>
<span class="quotelev1">&gt; receiver).  Lots of similar tools out there... VampirTrace (tracing side 
</span><br>
<span class="quotelev1">&gt; only, need to analyze the data), Jumpshot, etc.  Again, though, there's 
</span><br>
<span class="quotelev1">&gt; a question in my mind if you're really backing up 1000s or more of 
</span><br>
<span class="quotelev1">&gt; messages.  (I'm assuming the memory imbalances are at least Mbytes.)
</span><br>
<p>I'll check out Sun HPC ClusterTools. Thanks for the tip.
<br>
<p>Assuming the problem is congestion and that messages are backing up, 
<br>
is there an accepted method of dealing with this situation? It seems 
<br>
to me the general approach would be
<br>
<p>if (number of outstanding messages &gt; high water mark)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wait until (number of outstanding messages &lt; low water mark)
<br>
<p>where I suppose the `number of outstanding messages' is defined as the 
<br>
number of messages that have been sent and not yet received by the 
<br>
other side. Is there a way to get this number from MPI without having 
<br>
to code it at the application level?
<br>
<p>Thanks,
<br>
Shaun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8914.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8912.php">Jeff Squyres: "Re: [OMPI users] all2all algorithms"</a>
<li><strong>In reply to:</strong> <a href="8856.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8914.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8914.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8915.php">Ralph Castain: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
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
