<?
$subject_val = "Re: [OMPI users] Extent of Distributed Array Type?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 24 18:31:40 2012" -->
<!-- isoreceived="20120724223140" -->
<!-- sent="Tue, 24 Jul 2012 18:31:36 -0400" -->
<!-- isosent="20120724223136" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Extent of Distributed Array Type?" -->
<!-- id="E5DD4476-970F-402A-B526-8E64029F0BE6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5D76FA7F-E7A8-4D4E-A109-523D7B492723_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Extent of Distributed Array Type?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-24 18:31:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19819.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Previous message:</strong> <a href="19817.php">George Bosilca: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>In reply to:</strong> <a href="19817.php">George Bosilca: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19819.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 24, 2012, at 6:28 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for identifying this issue and for the short example. I can confirm your original understanding was right, the upper bound should be identical on all ranks. I just pushed a patch (r26862), let me know if this fixes your issue.
</span><br>
<p>Note that this patch is on the OMPI SVN trunk.  You can either build directly from an SVN checkout or grab a nightly tarball here (get any r number &gt;= 26862, obviously, which will be tonight around 10pm US Eastern time at the earliest):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
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
<li><strong>Next message:</strong> <a href="19819.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Previous message:</strong> <a href="19817.php">George Bosilca: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>In reply to:</strong> <a href="19817.php">George Bosilca: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19819.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
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
