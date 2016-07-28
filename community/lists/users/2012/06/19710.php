<?
$subject_val = "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 29 14:14:41 2012" -->
<!-- isoreceived="20120629181441" -->
<!-- sent="Fri, 29 Jun 2012 11:14:16 -0700" -->
<!-- isosent="20120629181416" -->
<!-- name="Yong Qin" -->
<!-- email="yong.qin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6" -->
<!-- id="CADEJBEUr9RtwAT9=Z6E2+RS+3vjtwGe8TirR=9=uo7tuFrB0Rw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="040CF1DF-24FB-4D63-8B7B-31BE197F71EF_at_cisco.com" -->
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
<strong>From:</strong> Yong Qin (<em>yong.qin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-29 14:14:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19711.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Previous message:</strong> <a href="19709.php">Elken, Tom: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>In reply to:</strong> <a href="19703.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19711.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19711.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff for the doc. However I'm not sure if I understand your
<br>
following comment correctly. If I remove the MX BTL plugins, a.k.a.,
<br>
mca_btl_mx.la and mca_btl_mx.so, I'm now getting errors of these
<br>
components not found.
<br>
<p>[n0026.hbar:09467] mca: base: component_find: unable to open
<br>
.../mca_btl_mx.la: file not found (ignored)
<br>
[n0026.hbar:09467] mca: base: component_find: unable to open
<br>
.../mca_btl_mx.so: file not found (ignored)
<br>
<p>And it still uses TCP BTL instead of MX MTL from what I can tell. Am I
<br>
doing things wrong?
<br>
<p>Thanks,
<br>
<p>Yong
<br>
<p>On Fri, Jun 29, 2012 at 4:23 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; If you want to use the MX MTL, it may be simplest to simply remove the MX BTL plugin from your installation directory. &#160;That way, it *should* auto-select the MX MTL when you have machines with MX, and when you're on machines that do not have MX but do have OpenFabrics devices, it should auto-select the openib BTL.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19711.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Previous message:</strong> <a href="19709.php">Elken, Tom: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>In reply to:</strong> <a href="19703.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19711.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19711.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
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
