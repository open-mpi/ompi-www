<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 09:11:59 2007" -->
<!-- isoreceived="20070510131159" -->
<!-- sent="Thu, 10 May 2007 09:11:38 -0400" -->
<!-- isosent="20070510131138" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened" -->
<!-- id="A342C73A-E51B-4E96-A90F-78CDF2F2A38E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="464317C9.3020601_at_voltaire.com" -->
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
<strong>Date:</strong> 2007-05-10 09:11:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1531.php">Gleb Natapov: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
<li><strong>Previous message:</strong> <a href="1529.php">Gleb Natapov: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>Maybe in reply to:</strong> <a href="1528.php">Jeff Squyres: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1531.php">Gleb Natapov: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 10, 2007, at 9:02 AM, Or Gerlitz wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; A different approach which you might want to consider is to have  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at the btl level --two-- connections per &lt;src,dst&gt; ranks. so if A  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wants to send B it does so through the A --&gt; B connection and if  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; B wants to send A it does so through the B --&gt; A connection. To  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some extent, this is the approach taken by IPoIB-CM (I am not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enough into the RFC to understand the reasoning but i am quite  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sure this was the approach in the initial implementation). At  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first thought it mights seems not very elegant, but taking it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into the details (projected on the ompi env) you might find it   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; even nice.
</span><br>
<span class="quotelev2">&gt;&gt; What is the advantage of this approach?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To start with, my hope here is at least to be able play defensive  
</span><br>
<span class="quotelev1">&gt; here, that is convince you that the disadvantages are minor, where  
</span><br>
<span class="quotelev1">&gt; only if this fails, would schedule myself some reading into the  
</span><br>
<span class="quotelev1">&gt; ipoib-cm rfc to dig the advantages.
</span><br>
<p>I ask about the advantages because OMPI currently treats QP's as bi- 
<br>
directional.  Having OMPI treat them at unidirectional would be a  
<br>
change.  I'm not against such a change, but I think we'd need to be  
<br>
convinced that there are good reasons to do so.  For example, on the  
<br>
surface, it seems like this scheme would simply consume more QPs and  
<br>
potentially more registered memory (and is therefore unattractive).
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
<li><strong>Next message:</strong> <a href="1531.php">Gleb Natapov: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
<li><strong>Previous message:</strong> <a href="1529.php">Gleb Natapov: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>Maybe in reply to:</strong> <a href="1528.php">Jeff Squyres: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1531.php">Gleb Natapov: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
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
