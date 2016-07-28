<?
$subject_val = "Re: [OMPI users] libfabric/usnic does not compile in 2.x";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 17:04:37 2015" -->
<!-- isoreceived="20150930210437" -->
<!-- sent="Wed, 30 Sep 2015 21:04:35 +0000" -->
<!-- isosent="20150930210435" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libfabric/usnic does not compile in 2.x" -->
<!-- id="46C1699A-65B6-4888-B10B-F2E022740F14_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="560C346F.8050602_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] libfabric/usnic does not compile in 2.x<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 17:04:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27756.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27754.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>In reply to:</strong> <a href="27751.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27754.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 30, 2015, at 3:13 PM, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for this clear explanation. I do not have True Scale on 'my' machine, so unless Mellanox gets involved - no juice for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Makes me wonder. libfabric is marketed as a next-generation solution. Clearly it has some reported advantage for Cisco usnic, but since you claim no improvement over psm, then I guess it is nothing to look forward to, is it? 
</span><br>
<p>We'll have to let Intel speak to their roadmap, but they have publicly stated that the goal is to move libfabric to be a &quot;native&quot; provider for PSM2 / OmniPath (I'm not sure if they intend to do so for PSM / TrueScale?).  I.e., the first implementation over PSM and PSM2 is a stepping stone towards the ultimate solution.
<br>
<p>Cray is also implementing a uGNI provider for their networks.
<br>
<p>Basically: libfabric is the next-generation API for all manner of networks (vs. the verbs API, which is strongly tied to InfiniBand hardware and wire protocol abstractions, which is why all of us fled verbs -- because we don't all sell IB hardware -- and went to libfabric).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27756.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27754.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>In reply to:</strong> <a href="27751.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27754.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
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
