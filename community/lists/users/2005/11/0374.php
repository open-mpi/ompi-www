<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 21 10:39:23 2005" -->
<!-- isoreceived="20051121153923" -->
<!-- sent="Mon, 21 Nov 2005 10:39:16 -0500" -->
<!-- isosent="20051121153916" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Minor issue: Failthrough of MCA components." -->
<!-- id="33F2BE26-A1B6-427A-86EF-8B455963FA76_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.s0lj61jaies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-21 10:39:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0375.php">Borenstein, Bernard S: "[O-MPI users] problem with overflow 1.8ab code using GM"</a>
<li><strong>Previous message:</strong> <a href="0373.php">Troy Telford: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>In reply to:</strong> <a href="0373.php">Troy Telford: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 21, 2005, at 10:34 AM, Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 21 Nov 2005 06:00:05 -0700, Jeff Squyres &lt;jsquyres_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These warnings will likely be removed (or, more specifically, only
</span><br>
<span class="quotelev2">&gt;&gt; displayed if requested) once we include the feature to display which
</span><br>
<span class="quotelev2">&gt;&gt; BTL components/networks are being used at run-time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While only really useful for testing, it would be neat to be able  
</span><br>
<span class="quotelev1">&gt; to say
</span><br>
<span class="quotelev1">&gt; 'try to use every component execept this one.'  For instance, should I
</span><br>
<span class="quotelev1">&gt; feel the need to scratch the itch of using IP-over-IB or TCP over  
</span><br>
<span class="quotelev1">&gt; Myrinet
</span><br>
<span class="quotelev1">&gt; -- in my case, this would mainly be because of my cluster's 10/100  
</span><br>
<span class="quotelev1">&gt; switch,  
</span><br>
<span class="quotelev1">&gt; and I'd like to test/tune either OMPI's TCP performance, or IPoIB/ 
</span><br>
<span class="quotelev1">&gt; TCPoMyri
</span><br>
<span class="quotelev1">&gt; driver performance.  In such a case, I could say 'ignore mvapi; yes  
</span><br>
<span class="quotelev1">&gt; RDMA
</span><br>
<span class="quotelev1">&gt; is good, sure it's a silly thing do do -- now bow to my will ye  
</span><br>
<span class="quotelev1">&gt; minions,
</span><br>
<span class="quotelev1">&gt; and despair.'
</span><br>
<p>I'm going to have to remember that one :).
<br>
<p><span class="quotelev1">&gt; Naturally, I could do this by simply removing the openib, mvapi, gm,
</span><br>
<span class="quotelev1">&gt; and/or mx components; but that would require typing more characters  
</span><br>
<span class="quotelev1">&gt; than
</span><br>
<span class="quotelev1">&gt; '--ignore_mca btl gm'.
</span><br>
<p>We actually have this feature already...  You can either do:
<br>
<p>&nbsp;&nbsp;&nbsp;-mca btl_base_exclude mvapi
<br>
<p>or
<br>
<p>&nbsp;&nbsp;&nbsp;-mca btl ^mvapi
<br>
<p>They are essentially equivalent.  The first will load the mvapi  
<br>
component, but never schedule any fragments on it.  The second will  
<br>
just not load the mvapi component.  Sometimes we actually anticipate  
<br>
user requests - not often, but sometimes ;).
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   LAM/MPI developer and all around nice guy
   Have a LAM/MPI day: <a href="http://www.lam-mpi.org/">http://www.lam-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0375.php">Borenstein, Bernard S: "[O-MPI users] problem with overflow 1.8ab code using GM"</a>
<li><strong>Previous message:</strong> <a href="0373.php">Troy Telford: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>In reply to:</strong> <a href="0373.php">Troy Telford: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<!-- nextthread="start" -->
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
