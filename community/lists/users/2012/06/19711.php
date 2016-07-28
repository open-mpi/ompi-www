<?
$subject_val = "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 29 14:17:01 2012" -->
<!-- isoreceived="20120629181701" -->
<!-- sent="Fri, 29 Jun 2012 14:16:56 -0400" -->
<!-- isosent="20120629181656" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6" -->
<!-- id="2C83F3F5-ACBC-45A9-B7CB-724B7A151928_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CADEJBEUr9RtwAT9=Z6E2+RS+3vjtwGe8TirR=9=uo7tuFrB0Rw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-29 14:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19712.php">Sébastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Previous message:</strong> <a href="19710.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>In reply to:</strong> <a href="19710.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19713.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19713.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 29, 2012, at 2:14 PM, Yong Qin wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Jeff for the doc. However I'm not sure if I understand your
</span><br>
<span class="quotelev1">&gt; following comment correctly. If I remove the MX BTL plugins, a.k.a.,
</span><br>
<span class="quotelev1">&gt; mca_btl_mx.la and mca_btl_mx.so, I'm now getting errors of these
</span><br>
<span class="quotelev1">&gt; components not found.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [n0026.hbar:09467] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; .../mca_btl_mx.la: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [n0026.hbar:09467] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; .../mca_btl_mx.so: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And it still uses TCP BTL instead of MX MTL from what I can tell. Am I
</span><br>
<span class="quotelev1">&gt; doing things wrong?
</span><br>
<p>Yoinks, I'm sorry -- that's not quite what I meant.  I meant remove the *BTL* plugin, not the *MTL* plugin.
<br>
<p>I.e., if *only* the MX MTL is there, there should be no conflict between the two (per that bug you and George found), and you should be ok.
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
<li><strong>Next message:</strong> <a href="19712.php">Sébastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Previous message:</strong> <a href="19710.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>In reply to:</strong> <a href="19710.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19713.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19713.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
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
