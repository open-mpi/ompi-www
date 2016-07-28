<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 21 10:34:26 2005" -->
<!-- isoreceived="20051121153426" -->
<!-- sent="Mon, 21 Nov 2005 08:34:03 -0700" -->
<!-- isosent="20051121153403" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Minor issue: Failthrough of MCA components." -->
<!-- id="op.s0lj61jaies9li_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ec3e6c13dda2e265651437ed81d2e3d_at_open-mpi.org" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-21 10:34:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0374.php">Brian Barrett: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Previous message:</strong> <a href="0372.php">Jeff Squyres: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>In reply to:</strong> <a href="0372.php">Jeff Squyres: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0374.php">Brian Barrett: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Reply:</strong> <a href="0374.php">Brian Barrett: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 21 Nov 2005 06:00:05 -0700, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Although George fixed the MX-abort error, let me clarify the rationale
</span><br>
<span class="quotelev1">&gt; here...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are correct that at run-time, OMPI tries to load an run every
</span><br>
<span class="quotelev1">&gt; component that it finds.  So if you have BTL components build for all
</span><br>
<span class="quotelev1">&gt; interconnects, OMPI will query each of them at run-time and try to use
</span><br>
<span class="quotelev1">&gt; them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But right now, we do not have a way to show exactly which interconnects
</span><br>
<span class="quotelev1">&gt; and which networks are actually being used.  Although this is a planned
</span><br>
<span class="quotelev1">&gt; feature, for 1.0 we compromised and decided that if any of the
</span><br>
<span class="quotelev1">&gt; low-latency/high-speed network components decided that they could not
</span><br>
<span class="quotelev1">&gt; be used, they would print out a warning message.  This should cover
</span><br>
<span class="quotelev1">&gt; 95+% of misconfiguration cases (e.g., the user meant to be using IB,
</span><br>
<span class="quotelev1">&gt; but something went wrong and OMPI failed over to TCP).
</span><br>
<p>It's certainly not a bad thing IMHO, either.  It's pretty obvious there's  
<br>
*something* wrong when you can only see 20 MB/sec over Infiniband.  (It's  
<br>
certainly easier to diagnose exactly what /something/ when the cluster's  
<br>
Ethernet switch is a 10/100, not Gig-E.)
<br>
<p><span class="quotelev1">&gt; These warnings will likely be removed (or, more specifically, only
</span><br>
<span class="quotelev1">&gt; displayed if requested) once we include the feature to display which
</span><br>
<span class="quotelev1">&gt; BTL components/networks are being used at run-time.
</span><br>
<p>While only really useful for testing, it would be neat to be able to say  
<br>
'try to use every component execept this one.'  For instance, should I  
<br>
feel the need to scratch the itch of using IP-over-IB or TCP over Myrinet  
<br>
-- in my case, this would mainly be because of my cluster's 10/100 switch,  
<br>
and I'd like to test/tune either OMPI's TCP performance, or IPoIB/TCPoMyri  
<br>
driver performance.  In such a case, I could say 'ignore mvapi; yes RDMA  
<br>
is good, sure it's a silly thing do do -- now bow to my will ye minions,  
<br>
and despair.'
<br>
<p>Naturally, I could do this by simply removing the openib, mvapi, gm,  
<br>
and/or mx components; but that would require typing more characters than  
<br>
'--ignore_mca btl gm'.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0374.php">Brian Barrett: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Previous message:</strong> <a href="0372.php">Jeff Squyres: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>In reply to:</strong> <a href="0372.php">Jeff Squyres: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0374.php">Brian Barrett: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Reply:</strong> <a href="0374.php">Brian Barrett: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
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
