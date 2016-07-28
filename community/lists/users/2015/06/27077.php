<?
$subject_val = "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 06:24:57 2015" -->
<!-- isoreceived="20150610102457" -->
<!-- sent="Wed, 10 Jun 2015 10:24:55 +0000" -->
<!-- isosent="20150610102455" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks" -->
<!-- id="AAD354DF-EF74-4C89-9156-9A2C4643413A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201506100535.t5A5Z9lf028081_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-10 06:24:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27078.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27076.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>In reply to:</strong> <a href="27069.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27070.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 10, 2015, at 1:35 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't see any reason why this should be happening to you only
</span><br>
<span class="quotelev2">&gt;&gt; sometimes; this code has been unchanged in *forever*.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It only happens since openmpi-v1.8.5-40-g7b9e672 which I tried to
</span><br>
<span class="quotelev1">&gt; build June 1th and on all versions following-up which I tried
</span><br>
<span class="quotelev1">&gt; (openmpi-v1.8.5-43-g0dd996b, openmpi-v1.8.5-44-g4ec7b80, and
</span><br>
<span class="quotelev1">&gt; openmpi-v1.8.5-46-g9f5f498) It didn't happen with openmpi-1.8.6rc1
</span><br>
<span class="quotelev1">&gt; and before.
</span><br>
<p>Very strange.  Like I said, this particular part of the code has not changed in a very long time.  Shrug.
<br>
<p><span class="quotelev2">&gt;&gt; Regardless, I just pushed what should be a workaround to master
</span><br>
<span class="quotelev2">&gt;&gt; and I'll PR it over to v1.8 and v1.10 (it'll take a day or so
</span><br>
<span class="quotelev2">&gt;&gt; for these to show up in the nightly tarballs) -- it should avoid
</span><br>
<span class="quotelev2">&gt;&gt; the issue altogether.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for your help. I'll try to build the next
</span><br>
<span class="quotelev1">&gt; versions and let you know the results.
</span><br>
<p>Thanks.  The nightly builds from last night should contain the workaround.
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
<li><strong>Next message:</strong> <a href="27078.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27076.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>In reply to:</strong> <a href="27069.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27070.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
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
