<?
$subject_val = "Re: [OMPI users] Segmentation fault in mca_btl_tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 07:40:52 2010" -->
<!-- isoreceived="20100415114052" -->
<!-- sent="Thu, 15 Apr 2010 07:40:46 -0400" -->
<!-- isosent="20100415114046" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in mca_btl_tcp" -->
<!-- id="5C492018-1317-40DE-89F9-89F67ADF9388_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1271315912.15915.258.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in mca_btl_tcp<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-15 07:40:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12641.php">Werner Van Geit: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>Previous message:</strong> <a href="12639.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>In reply to:</strong> <a href="12635.php">Ake Sandgren: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12641.php">Werner Van Geit: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 15, 2010, at 3:18 AM, Ake Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; We sometimes see mysterious crashes like this one. At least some of them
</span><br>
<span class="quotelev1">&gt; are caused by port scanners, i.e. unexpected non-mpi related packets
</span><br>
<span class="quotelev1">&gt; coming in on the sockets will sometimes cause havoc.
</span><br>
<p>Ooohhh... ouch.
<br>
<p><span class="quotelev1">&gt; We've been getting http traffic in the jobs stdout/err sometimes. That
</span><br>
<span class="quotelev1">&gt; really makes the users confused :-)
</span><br>
<p>Yikes!
<br>
<p>This is definitely bug-worthy; I'll go file one right now.  Probably won't be fixed for 1.4.x, but I think we should be able to fix this somewhere in the 1.5 series.  I didn't realize that this was happening out in the real world!
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
<li><strong>Next message:</strong> <a href="12641.php">Werner Van Geit: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>Previous message:</strong> <a href="12639.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>In reply to:</strong> <a href="12635.php">Ake Sandgren: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12641.php">Werner Van Geit: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
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
