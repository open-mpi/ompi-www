<?
$subject_val = "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE	2011 (aka 12.0)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 25 19:06:35 2011" -->
<!-- isoreceived="20110525230635" -->
<!-- sent="Wed, 25 May 2011 19:06:29 -0400" -->
<!-- isosent="20110525230629" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE	2011 (aka 12.0)" -->
<!-- id="6D03E4D7-628D-4850-94DE-7FC8CDA409A7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="99F1D9BD-4921-40C3-B09F-A7D275B4246A_at_enea.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE	2011 (aka 12.0)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-25 19:06:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16631.php">Jeff Squyres: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>Previous message:</strong> <a href="16629.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>In reply to:</strong> <a href="16609.php">Salvatore Podda: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE	2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16646.php">Robert Horton: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Reply:</strong> <a href="16646.php">Robert Horton: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2011, at 7:29 AM, Salvatore Podda wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Yes, it was a typo, I use to add the &quot;sm&quot; flag to the &quot;--mca btl&quot;
</span><br>
<span class="quotelev2">&gt;&gt; option. However I think this is not mandatory, as I suppose
</span><br>
<span class="quotelev2">&gt;&gt; openmpi use the the so-called &quot;Law of Least Astonishment&quot;
</span><br>
<span class="quotelev2">&gt;&gt; also in this case and adopts &quot;sm&quot; for the intra-node communication
</span><br>
<span class="quotelev2">&gt;&gt; or, if you prefer, avoiding to add the sm string does not mean &quot;not use
</span><br>
<span class="quotelev2">&gt;&gt; shared memory&quot;.
</span><br>
<p>I'm not sure what you're saying here.  There is a large difference between &quot;--mca a,b,c&quot; and &quot;--mca a,b&quot;.
<br>
<p>In the former, all 3 communication methods will be used (a, b, and c).  In the latter, only 2 will be used (a and b).
<br>
<p>To be clear, if you explicitly list which BTLs to use, OMPI will only (try to) use exactly those and no others.
<br>
<p>For your specific issue, I don't think there's much we can do with regards to the 1.2 series -- it's so ancient that unless you have a support contract with someone, we really don't offer public/mailing list support for it any more.  :-(
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16631.php">Jeff Squyres: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>Previous message:</strong> <a href="16629.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>In reply to:</strong> <a href="16609.php">Salvatore Podda: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE	2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16646.php">Robert Horton: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Reply:</strong> <a href="16646.php">Robert Horton: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
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
