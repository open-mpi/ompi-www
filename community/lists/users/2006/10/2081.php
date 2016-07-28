<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Oct 29 03:34:19 2006" -->
<!-- isoreceived="20061029083419" -->
<!-- sent="Sun, 29 Oct 2006 10:34:06 +0200" -->
<!-- isosent="20061029083406" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerance &amp;amp; Behavior" -->
<!-- id="20061029083406.GH14123_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="op.th1ynnv5zidtg1_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-29 03:34:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2082.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="2080.php">Tony Ladd: "[OMPI users] OMPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="2067.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2085.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2085.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct 26, 2006 at 05:39:13PM -0600, Troy Telford wrote:
<br>
<span class="quotelev1">&gt; I'm also confident that both TCP &amp; Myrinet would throw an error when they  
</span><br>
<span class="quotelev1">&gt; time out; it's just that I haven't felt the need to verify it.  (And with  
</span><br>
<span class="quotelev1">&gt; some-odd 20 minutes for Myrinet, it takes a bit of attention span.  The  
</span><br>
<span class="quotelev1">&gt; last time I tried it I had forgotten about it for about 3-4 hours).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If none are available, then Open
</span><br>
<span class="quotelev2">&gt; &gt; MPI is supposed to abort the job. For your particular run did you had
</span><br>
<span class="quotelev2">&gt; &gt; Ethernet between the nodes ? If yes, I'm quite sure the MPI run
</span><br>
<span class="quotelev2">&gt; &gt; wasn't stopped ... it continued using the TCP device (if not disabled
</span><br>
<span class="quotelev2">&gt; &gt; by hand at mpirun time).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This brings up an interesting question:  The job was simply Intel's MPI  
</span><br>
<span class="quotelev1">&gt; benchmark (IMB), which is fairly chatty (ie. lots of screen output).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the first try, I used '--mca btl ^gm,^mx' to start the job.  Ethernet  
</span><br>
<span class="quotelev1">&gt; was connected (eth0=10/100, eth1=gigabit), but after the IB cable was  
</span><br>
<span class="quotelev1">&gt; disconnected, everything stopped.  The link lights (ethernet &amp; IB) were  
</span><br>
<span class="quotelev1">&gt; not blinking, nor do any of the system monitors show much TCP traffic;  
</span><br>
<span class="quotelev1">&gt; certainly not the sort of traffic one would expect from an IMB run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've also tried using --mca openib,sm,self,tcp (specifically adding TCP)  
</span><br>
<span class="quotelev1">&gt; and didn't see any sort of difference; the job still 'stuck' as soon as  
</span><br>
<span class="quotelev1">&gt; the IB cable was removed.  I'll let that job continue to run overnight  
</span><br>
<span class="quotelev1">&gt; (ie. --mca btl tcp,openib,sm,self) to see if the job ever wakes up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
If you use OB1 PML (default one) it will never recover from link down
<br>
error no matter how many other transports you have. The reason is that
<br>
OB1 never tracks what happens with buffers submitted to BTL. So if BTL
<br>
can't, for any reason, transmit packet passed to it by OB1 the job will
<br>
stuck because OB1 doesn't have enough information to try to resend the
<br>
packet via another transport. For this kind of resource tracking there
<br>
is DR PML. In case of IB BTL link down event generates error for each
<br>
packet submitted for sending to the device. IB BTL simply discards all 
<br>
this packets and relies on PML to resend them, so even after link up
<br>
event a job will not recover if OB1 PML is used with IB BTL. This may be
<br>
different with another transports.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2082.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="2080.php">Tony Ladd: "[OMPI users] OMPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="2067.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2085.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2085.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
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
