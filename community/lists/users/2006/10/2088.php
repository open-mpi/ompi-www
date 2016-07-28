<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 31 09:51:25 2006" -->
<!-- isoreceived="20061031145125" -->
<!-- sent="Tue, 31 Oct 2006 16:51:16 +0200" -->
<!-- isosent="20061031145116" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerance &amp;amp; Behavior" -->
<!-- id="20061031145116.GF14049_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="op.th8zqtsuzidtg1_at_rygel.lnxi.com" -->
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
<strong>Date:</strong> 2006-10-31 09:51:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2089.php">Michael Kluskens: "[OMPI users]   tickets 39 &amp; 55"</a>
<li><strong>Previous message:</strong> <a href="2087.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>In reply to:</strong> <a href="2085.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2090.php">Galen M. Shipman: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2090.php">Galen M. Shipman: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Oct 30, 2006 at 11:45:53AM -0700, Troy Telford wrote:
<br>
<span class="quotelev1">&gt; On Sun, 29 Oct 2006 01:34:06 -0700, Gleb Natapov &lt;glebn_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If you use OB1 PML (default one) it will never recover from link down
</span><br>
<span class="quotelev2">&gt; &gt; error no matter how many other transports you have. The reason is that
</span><br>
<span class="quotelev2">&gt; &gt; OB1 never tracks what happens with buffers submitted to BTL. So if BTL
</span><br>
<span class="quotelev2">&gt; &gt; can't, for any reason, transmit packet passed to it by OB1 the job will
</span><br>
<span class="quotelev2">&gt; &gt; stuck because OB1 doesn't have enough information to try to resend the
</span><br>
<span class="quotelev2">&gt; &gt; packet via another transport. For this kind of resource tracking there
</span><br>
<span class="quotelev2">&gt; &gt; is DR PML. In case of IB BTL link down event generates error for each
</span><br>
<span class="quotelev2">&gt; &gt; packet submitted for sending to the device. IB BTL simply discards all
</span><br>
<span class="quotelev2">&gt; &gt; this packets and relies on PML to resend them, so even after link up
</span><br>
<span class="quotelev2">&gt; &gt; event a job will not recover if OB1 PML is used with IB BTL. This may be
</span><br>
<span class="quotelev2">&gt; &gt; different with another transports.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This makes sense; one thing I'm wondering now is if the OB1 PML is able  
</span><br>
<span class="quotelev1">&gt; (and/or had enough information) to figure out that it can't continue at  
</span><br>
<span class="quotelev1">&gt; all, and will abort the job.
</span><br>
<p>In case of openib BTL I don't see how job may recover from link down
<br>
event so I think aborting the job is the right thing to do. In case of
<br>
other transports if transport can continue after link up event as if
<br>
nothing happened it is worth to wait for link up. This capability may be
<br>
added to openib BTL too, it's just nobody cares enough.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2089.php">Michael Kluskens: "[OMPI users]   tickets 39 &amp; 55"</a>
<li><strong>Previous message:</strong> <a href="2087.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>In reply to:</strong> <a href="2085.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2090.php">Galen M. Shipman: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2090.php">Galen M. Shipman: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
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
