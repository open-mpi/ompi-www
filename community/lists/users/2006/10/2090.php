<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 31 10:29:49 2006" -->
<!-- isoreceived="20061031152949" -->
<!-- sent="Tue, 31 Oct 2006 08:29:38 -0700" -->
<!-- isosent="20061031152938" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerance &amp;amp; Behavior" -->
<!-- id="45476BE2.6060200_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20061031145116.GF14049_at_minantech.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-31 10:29:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2091.php">Galen M. Shipman: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2089.php">Michael Kluskens: "[OMPI users]   tickets 39 &amp; 55"</a>
<li><strong>In reply to:</strong> <a href="2088.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2091.php">Galen M. Shipman: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2091.php">Galen M. Shipman: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt;On Mon, Oct 30, 2006 at 11:45:53AM -0700, Troy Telford wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Sun, 29 Oct 2006 01:34:06 -0700, Gleb Natapov &lt;glebn_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;If you use OB1 PML (default one) it will never recover from link down
</span><br>
<span class="quotelev3">&gt;&gt;&gt;error no matter how many other transports you have. The reason is that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OB1 never tracks what happens with buffers submitted to BTL. So if BTL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;can't, for any reason, transmit packet passed to it by OB1 the job will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;stuck because OB1 doesn't have enough information to try to resend the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;packet via another transport. For this kind of resource tracking there
</span><br>
<span class="quotelev3">&gt;&gt;&gt;is DR PML. In case of IB BTL link down event generates error for each
</span><br>
<span class="quotelev3">&gt;&gt;&gt;packet submitted for sending to the device. IB BTL simply discards all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;this packets and relies on PML to resend them, so even after link up
</span><br>
<span class="quotelev3">&gt;&gt;&gt;event a job will not recover if OB1 PML is used with IB BTL. This may be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;different with another transports.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;This makes sense; one thing I'm wondering now is if the OB1 PML is able  
</span><br>
<span class="quotelev2">&gt;&gt;(and/or had enough information) to figure out that it can't continue at  
</span><br>
<span class="quotelev2">&gt;&gt;all, and will abort the job.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In case of openib BTL I don't see how job may recover from link down
</span><br>
<span class="quotelev1">&gt;event so I think aborting the job is the right thing to do. In case of
</span><br>
<span class="quotelev1">&gt;other transports if transport can continue after link up event as if
</span><br>
<span class="quotelev1">&gt;nothing happened it is worth to wait for link up. This capability may be
</span><br>
<span class="quotelev1">&gt;added to openib BTL too, it's just nobody cares enough.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Ethernet doesn't fail in this case because the TCP stack handles this 
<br>
gracefully. The same behavior can be observed when disconnecting an 
<br>
ethernet cable while a ssh session exists, plug it back in and you are 
<br>
probably good to go, after a bit of time (due to exponential backoff on 
<br>
retrans). For GM/MX over myrinet the timeout is quite high on connection 
<br>
down and the software stack handles this gracefully. For IB the link 
<br>
state transitions from LinkActive to LinkActDefer until LinkDownTimeout 
<br>
expires and the link transitions to LinkDown state.
<br>
&nbsp;From the spec: LinkDownTimeout occurs when the port state machine has 
<br>
continuously been in the LinkActDefer state for 10ms + 3% /-51%   .. I 
<br>
have no idea what that formula means, perhaps my pdf of the spec is 
<br>
messed up.
<br>
<p>So transitioning to the LinkDown state is dictated by the IB spec, it 
<br>
would seem that we would want to defer the transition based on a user 
<br>
configurable parameter, this is link layer so it would probably be 
<br>
necessary to do this when loading the IB driver. Am I interpreting this 
<br>
correctly?
<br>
<p>- Galen
<br>
<p><p><span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;			Gleb.
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2091.php">Galen M. Shipman: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2089.php">Michael Kluskens: "[OMPI users]   tickets 39 &amp; 55"</a>
<li><strong>In reply to:</strong> <a href="2088.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2091.php">Galen M. Shipman: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2091.php">Galen M. Shipman: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
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
