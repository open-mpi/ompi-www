<?
$subject_val = "Re: [OMPI users] multipath support for infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 08:49:03 2010" -->
<!-- isoreceived="20100922124903" -->
<!-- sent="Wed, 22 Sep 2010 08:48:55 -0400" -->
<!-- isosent="20100922124855" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multipath support for infiniband" -->
<!-- id="349F3A3B-DA76-4BE4-8F0F-7624099EC6BD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C99F0E2.20203_at_zih.tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] multipath support for infiniband<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 08:48:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14275.php">Ake Sandgren: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Previous message:</strong> <a href="14273.php">Ake Sandgren: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>In reply to:</strong> <a href="14272.php">Jens Domke: "Re: [OMPI users] multipath support for infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2010, at 8:04 AM, Jens Domke wrote:
<br>
<p><span class="quotelev1">&gt; I already tried this parameter, but I don't see any improvements in the benchmarks. Additionally while doing further investigations into the opensm I didn't see the QP requests for other LIDs than the base LIDs.
</span><br>
<p>I'm afraid that I'm not an InfiniBand vendor anymore, so I haven't looked at this code in a long, long time.  Can an IB vendor comment here?
<br>
<p>One thing to be aware of is that LMC may or may not have much effect on benchmarks.  Remember that LMC is NOT a bandwidth multiplier -- you still have the same links (and total bandwidth) out of each port.  LMC&gt;0 only (potentially) sprays packets across more routes on your network, which *may* (or may *not*) have effects regarding congestion.  If you're running a single app on an otherwise-quiet IB network where all distances are the same (or short enough not to matter), you may not see much difference.
<br>
<p>That being said, if you were watching OMPI's behavior with regard to LIDs and only saw the base LIDs go by, then perhaps something is wrong.  Shrug.
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
<li><strong>Next message:</strong> <a href="14275.php">Ake Sandgren: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Previous message:</strong> <a href="14273.php">Ake Sandgren: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>In reply to:</strong> <a href="14272.php">Jens Domke: "Re: [OMPI users] multipath support for infiniband"</a>
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
