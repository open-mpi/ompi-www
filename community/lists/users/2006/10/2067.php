<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 26 19:39:26 2006" -->
<!-- isoreceived="20061026233926" -->
<!-- sent="Thu, 26 Oct 2006 17:39:13 -0600" -->
<!-- isosent="20061026233913" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford.groups_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerance &amp;amp; Behavior" -->
<!-- id="op.th1ynnv5zidtg1_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2A4B790-FAC3-4C62-B0ED-DC12B90F418F_at_cs.utk.edu" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford.groups_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-26 19:39:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2068.php">calin pal: "[OMPI users] abut openmpi"</a>
<li><strong>Previous message:</strong> <a href="2066.php">George Bosilca: "Re: [OMPI users] Error Handling Problem"</a>
<li><strong>In reply to:</strong> <a href="2058.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2081.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2081.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 26 Oct 2006 15:11:46 -0600, George Bosilca &lt;bosilca_at_[hidden]&gt;  
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; The Open MPI behavior is the same independently of the network used
</span><br>
<span class="quotelev1">&gt; for the job. At least the behavior dictated by our internal message
</span><br>
<span class="quotelev1">&gt; passing layer.
</span><br>
<p>Which is one of the things I like about Open MPI.
<br>
<p><span class="quotelev1">&gt; There is nothing (that has a reasonable cost) we can do about this.
</span><br>
<p>Nor do I think there should be something done.  In all honesty, I think  
<br>
it's a good thing that TCP &amp; Myrinet have such a long timeout.  It makes  
<br>
administration a bit less scary; if you accidentally unplug the network  
<br>
cable from the wrong node during maintenance, neither the MPI nor the  
<br>
administrator loses a job.
<br>
<p>I'm also confident that both TCP &amp; Myrinet would throw an error when they  
<br>
time out; it's just that I haven't felt the need to verify it.  (And with  
<br>
some-odd 20 minutes for Myrinet, it takes a bit of attention span.  The  
<br>
last time I tried it I had forgotten about it for about 3-4 hours).
<br>
<p><span class="quotelev1">&gt; If none are available, then Open
</span><br>
<span class="quotelev1">&gt; MPI is supposed to abort the job. For your particular run did you had
</span><br>
<span class="quotelev1">&gt; Ethernet between the nodes ? If yes, I'm quite sure the MPI run
</span><br>
<span class="quotelev1">&gt; wasn't stopped ... it continued using the TCP device (if not disabled
</span><br>
<span class="quotelev1">&gt; by hand at mpirun time).
</span><br>
<p>This brings up an interesting question:  The job was simply Intel's MPI  
<br>
benchmark (IMB), which is fairly chatty (ie. lots of screen output).
<br>
<p>On the first try, I used '--mca btl ^gm,^mx' to start the job.  Ethernet  
<br>
was connected (eth0=10/100, eth1=gigabit), but after the IB cable was  
<br>
disconnected, everything stopped.  The link lights (ethernet &amp; IB) were  
<br>
not blinking, nor do any of the system monitors show much TCP traffic;  
<br>
certainly not the sort of traffic one would expect from an IMB run.
<br>
<p>I've also tried using --mca openib,sm,self,tcp (specifically adding TCP)  
<br>
and didn't see any sort of difference; the job still 'stuck' as soon as  
<br>
the IB cable was removed.  I'll let that job continue to run overnight  
<br>
(ie. --mca btl tcp,openib,sm,self) to see if the job ever wakes up.
<br>
<p><span class="quotelev1">&gt; --mca btl ^tcp (or --mca btl opnib,sm,self).
</span><br>
<p>I get the messages that something is amiss with the IB fabric (as  
<br>
expected).  However, the job does *not* abort.  Every (MPI) process on  
<br>
every node in the job is still active, and sucking 100% of its cpu (I  
<br>
imagine busy-waiting).
<br>
<p><span class="quotelev1">&gt; PS: There are several internal message passing modules available for
</span><br>
<span class="quotelev1">&gt; Open MPI. The default one, look more for performance than
</span><br>
<span class="quotelev1">&gt; reliability. If reliability it's what you need you should use the DR
</span><br>
<span class="quotelev1">&gt; PML. For this, you can specify --mca pml dr at mpirun time. This (DR)
</span><br>
<span class="quotelev1">&gt; PML has data reliability and timeout (Open MPI internal timeout that
</span><br>
<span class="quotelev1">&gt; are configurable), allowing to recover faster from a network failure.
</span><br>
<p>I don't have such a component.  Hopefully it's just the version of Open  
<br>
MPI I'm using (1.1), or an option needed by ./configure I didn't use.  (If  
<br>
it should be in 1.1, I'll take a deeper look, and can provide things like  
<br>
the config.log, etc.  I just don't want to flood the list at the moment.)
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2068.php">calin pal: "[OMPI users] abut openmpi"</a>
<li><strong>Previous message:</strong> <a href="2066.php">George Bosilca: "Re: [OMPI users] Error Handling Problem"</a>
<li><strong>In reply to:</strong> <a href="2058.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2081.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2081.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
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
