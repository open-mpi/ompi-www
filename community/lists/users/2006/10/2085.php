<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 30 13:47:19 2006" -->
<!-- isoreceived="20061030184719" -->
<!-- sent="Mon, 30 Oct 2006 11:45:53 -0700" -->
<!-- isosent="20061030184553" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford.groups_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerance &amp;amp; Behavior" -->
<!-- id="op.th8zqtsuzidtg1_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20061029083406.GH14123_at_minantech.com" -->
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
<strong>Date:</strong> 2006-10-30 13:45:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2086.php">hpetit_at_[hidden]: "[OMPI users]  Re: Re:  MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Previous message:</strong> <a href="2084.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support problem"</a>
<li><strong>In reply to:</strong> <a href="2081.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2088.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2088.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 29 Oct 2006 01:34:06 -0700, Gleb Natapov &lt;glebn_at_[hidden]&gt;  
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; If you use OB1 PML (default one) it will never recover from link down
</span><br>
<span class="quotelev1">&gt; error no matter how many other transports you have. The reason is that
</span><br>
<span class="quotelev1">&gt; OB1 never tracks what happens with buffers submitted to BTL. So if BTL
</span><br>
<span class="quotelev1">&gt; can't, for any reason, transmit packet passed to it by OB1 the job will
</span><br>
<span class="quotelev1">&gt; stuck because OB1 doesn't have enough information to try to resend the
</span><br>
<span class="quotelev1">&gt; packet via another transport. For this kind of resource tracking there
</span><br>
<span class="quotelev1">&gt; is DR PML. In case of IB BTL link down event generates error for each
</span><br>
<span class="quotelev1">&gt; packet submitted for sending to the device. IB BTL simply discards all
</span><br>
<span class="quotelev1">&gt; this packets and relies on PML to resend them, so even after link up
</span><br>
<span class="quotelev1">&gt; event a job will not recover if OB1 PML is used with IB BTL. This may be
</span><br>
<span class="quotelev1">&gt; different with another transports.
</span><br>
<p>This makes sense; one thing I'm wondering now is if the OB1 PML is able  
<br>
(and/or had enough information) to figure out that it can't continue at  
<br>
all, and will abort the job.
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2086.php">hpetit_at_[hidden]: "[OMPI users]  Re: Re:  MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Previous message:</strong> <a href="2084.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support problem"</a>
<li><strong>In reply to:</strong> <a href="2081.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2088.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2088.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
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
