<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 08:26:45 2007" -->
<!-- isoreceived="20070510122645" -->
<!-- sent="Thu, 10 May 2007 08:26:22 -0400" -->
<!-- isosent="20070510122622" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened" -->
<!-- id="C28A2DEB-47C4-438A-9C2A-A2C769DF38B2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46430EB2.7080703_at_voltaire.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-10 08:26:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1529.php">Gleb Natapov: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>Previous message:</strong> <a href="1527.php">Jeff Squyres: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1530.php">Jeff Squyres: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
<li><strong>Maybe reply:</strong> <a href="1530.php">Jeff Squyres: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
<li><strong>Maybe reply:</strong> <a href="1531.php">Gleb Natapov: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 10, 2007, at 8:23 AM, Or Gerlitz wrote:
<br>
<p><span class="quotelev1">&gt; A different approach which you might want to consider is to have at  
</span><br>
<span class="quotelev1">&gt; the btl level --two-- connections per &lt;src,dst&gt; ranks. so if A  
</span><br>
<span class="quotelev1">&gt; wants to send B it does so through the A --&gt; B connection and if B  
</span><br>
<span class="quotelev1">&gt; wants to send A it does so through the B --&gt; A connection. To some  
</span><br>
<span class="quotelev1">&gt; extent, this is the approach taken by IPoIB-CM (I am not enough  
</span><br>
<span class="quotelev1">&gt; into the RFC to understand the reasoning but i am quite sure this  
</span><br>
<span class="quotelev1">&gt; was the approach in the initial implementation). At first thought  
</span><br>
<span class="quotelev1">&gt; it mights seems not very elegant, but taking it into the details  
</span><br>
<span class="quotelev1">&gt; (projected on the ompi env) you might find it  even nice.
</span><br>
<p>What is the advantage of this approach?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1529.php">Gleb Natapov: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>Previous message:</strong> <a href="1527.php">Jeff Squyres: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1530.php">Jeff Squyres: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
<li><strong>Maybe reply:</strong> <a href="1530.php">Jeff Squyres: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
<li><strong>Maybe reply:</strong> <a href="1531.php">Gleb Natapov: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
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
