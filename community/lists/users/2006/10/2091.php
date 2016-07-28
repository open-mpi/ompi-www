<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 31 10:43:15 2006" -->
<!-- isoreceived="20061031154315" -->
<!-- sent="Tue, 31 Oct 2006 08:43:10 -0700" -->
<!-- isosent="20061031154310" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerance &amp;amp; Behavior" -->
<!-- id="45476F0E.8070808_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="45476BE2.6060200_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-10-31 10:43:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2092.php">Florian Fleissner: "[OMPI users] ompi_info fails: ...invalid ELF header (ignored)"</a>
<li><strong>Previous message:</strong> <a href="2090.php">Galen M. Shipman: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>In reply to:</strong> <a href="2090.php">Galen M. Shipman: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2099.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2099.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Galen M. Shipman wrote:
<br>
<p><span class="quotelev1">&gt;Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Mon, Oct 30, 2006 at 11:45:53AM -0700, Troy Telford wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Sun, 29 Oct 2006 01:34:06 -0700, Gleb Natapov &lt;glebn_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;If you use OB1 PML (default one) it will never recover from link down
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;error no matter how many other transports you have. The reason is that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;OB1 never tracks what happens with buffers submitted to BTL. So if BTL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;can't, for any reason, transmit packet passed to it by OB1 the job will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;stuck because OB1 doesn't have enough information to try to resend the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;packet via another transport. For this kind of resource tracking there
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;is DR PML. In case of IB BTL link down event generates error for each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;packet submitted for sending to the device. IB BTL simply discards all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;this packets and relies on PML to resend them, so even after link up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;event a job will not recover if OB1 PML is used with IB BTL. This may be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;different with another transports.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;This makes sense; one thing I'm wondering now is if the OB1 PML is able  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;(and/or had enough information) to figure out that it can't continue at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;all, and will abort the job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;In case of openib BTL I don't see how job may recover from link down
</span><br>
<span class="quotelev2">&gt;&gt;event so I think aborting the job is the right thing to do. In case of
</span><br>
<span class="quotelev2">&gt;&gt;other transports if transport can continue after link up event as if
</span><br>
<span class="quotelev2">&gt;&gt;nothing happened it is worth to wait for link up. This capability may be
</span><br>
<span class="quotelev2">&gt;&gt;added to openib BTL too, it's just nobody cares enough.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;Ethernet doesn't fail in this case because the TCP stack handles this 
</span><br>
<span class="quotelev1">&gt;gracefully. The same behavior can be observed when disconnecting an 
</span><br>
<span class="quotelev1">&gt;ethernet cable while a ssh session exists, plug it back in and you are 
</span><br>
<span class="quotelev1">&gt;probably good to go, after a bit of time (due to exponential backoff on 
</span><br>
<span class="quotelev1">&gt;retrans). For GM/MX over myrinet the timeout is quite high on connection 
</span><br>
<span class="quotelev1">&gt;down and the software stack handles this gracefully. For IB the link 
</span><br>
<span class="quotelev1">&gt;state transitions from LinkActive to LinkActDefer until LinkDownTimeout 
</span><br>
<span class="quotelev1">&gt;expires and the link transitions to LinkDown state.
</span><br>
<span class="quotelev1">&gt; From the spec: LinkDownTimeout occurs when the port state machine has 
</span><br>
<span class="quotelev1">&gt;continuously been in the LinkActDefer state for 10ms + 3% /-51%   .. I 
</span><br>
<span class="quotelev1">&gt;have no idea what that formula means, perhaps my pdf of the spec is 
</span><br>
<span class="quotelev1">&gt;messed up.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Okay, so these are percentage not modulus, the formula makes some sense 
<br>
now..
<br>
so the timeout is between 4.9 and 10.3 ms, you had better plug the cable 
<br>
in/out very quickly ;-)
<br>
<p><span class="quotelev1">&gt;So transitioning to the LinkDown state is dictated by the IB spec, it 
</span><br>
<span class="quotelev1">&gt;would seem that we would want to defer the transition based on a user 
</span><br>
<span class="quotelev1">&gt;configurable parameter, this is link layer so it would probably be 
</span><br>
<span class="quotelev1">&gt;necessary to do this when loading the IB driver. Am I interpreting this 
</span><br>
<span class="quotelev1">&gt;correctly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;--
</span><br>
<span class="quotelev2">&gt;&gt;			Gleb.
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="2092.php">Florian Fleissner: "[OMPI users] ompi_info fails: ...invalid ELF header (ignored)"</a>
<li><strong>Previous message:</strong> <a href="2090.php">Galen M. Shipman: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>In reply to:</strong> <a href="2090.php">Galen M. Shipman: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2099.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2099.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
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
