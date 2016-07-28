<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 09:44:10 2007" -->
<!-- isoreceived="20070510134410" -->
<!-- sent="Thu, 10 May 2007 16:44:05 +0300" -->
<!-- isosent="20070510134405" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened" -->
<!-- id="20070510134405.GH24497_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46431E73.70505_at_voltaire.com" -->
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
<strong>Date:</strong> 2007-05-10 09:44:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1532.php">Jeff Squyres: "Re: [OMPI devel] [ewg] Re:  Re: OMPI over ofed	udapl -	bugs	opened"</a>
<li><strong>Previous message:</strong> <a href="1530.php">Jeff Squyres: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
<li><strong>Maybe in reply to:</strong> <a href="1528.php">Jeff Squyres: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 10, 2007 at 04:30:27PM +0300, Or Gerlitz wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;On May 10, 2007, at 9:02 AM, Or Gerlitz wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;To start with, my hope here is at least to be able play defensive 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;here, that is convince you that the disadvantages are minor, where 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;only if this fails, would schedule myself some reading into the 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;ipoib-cm rfc to dig the advantages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;I ask about the advantages because OMPI currently treats QP's as 
</span><br>
<span class="quotelev2">&gt; &gt;bi-directional.  Having OMPI treat them at unidirectional would be a 
</span><br>
<span class="quotelev2">&gt; &gt;change.  I'm not against such a change, but I think we'd need to be 
</span><br>
<span class="quotelev2">&gt; &gt;convinced that there are good reasons to do so.  For example, on the 
</span><br>
<span class="quotelev2">&gt; &gt;surface, it seems like this scheme would simply consume more QPs and 
</span><br>
<span class="quotelev2">&gt; &gt;potentially more registered memory (and is therefore unattractive).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed you would need two QPs per btl connection, however, for each 
</span><br>
<span class="quotelev1">&gt; direction you can make the relevant QP consume ~zero resources per the 
</span><br>
<span class="quotelev1">&gt; other direction, ie on side A:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for the A --&gt; B QP : RX WR num  = 0, RX SG size = 0
</span><br>
<span class="quotelev1">&gt; for the B --&gt; A QP : TX WR num  = 0, TX SG size = 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and on side B the other way. I think that IB disallows to have zero len 
</span><br>
<span class="quotelev1">&gt; WR num so you set it actually to 1. Note that since you use SRQ for 
</span><br>
<span class="quotelev1">&gt; large jobs you have zero overhead for RX resources and this one TX WR 
</span><br>
<span class="quotelev1">&gt; overhead for the &quot;RX&quot; connection on each side. This is the only memory 
</span><br>
<span class="quotelev1">&gt; related overhead since you don't have to allocate any extra buffers over 
</span><br>
<span class="quotelev1">&gt; what you do now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
QP is a limited resource and we already have 2 per connection (and much
<br>
more if LMC is in used), so I don't see any reason to use this scheme only
<br>
to overcome brain damaged design of iWarp.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1532.php">Jeff Squyres: "Re: [OMPI devel] [ewg] Re:  Re: OMPI over ofed	udapl -	bugs	opened"</a>
<li><strong>Previous message:</strong> <a href="1530.php">Jeff Squyres: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
<li><strong>Maybe in reply to:</strong> <a href="1528.php">Jeff Squyres: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
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
