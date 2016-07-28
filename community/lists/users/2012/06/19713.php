<?
$subject_val = "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 29 14:24:24 2012" -->
<!-- isoreceived="20120629182424" -->
<!-- sent="Fri, 29 Jun 2012 11:24:00 -0700" -->
<!-- isosent="20120629182400" -->
<!-- name="Yong Qin" -->
<!-- email="yong.qin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6" -->
<!-- id="CADEJBEU6CADWzs3ttjw1DLk3mZ5K73Uv+MTJ58kMObJbg9T7eA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2C83F3F5-ACBC-45A9-B7CB-724B7A151928_at_cisco.com" -->
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
<strong>Date:</strong> 2012-06-29 14:24:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19714.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Previous message:</strong> <a href="19712.php">S&#233;bastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>In reply to:</strong> <a href="19711.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19714.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19714.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm confused now :).
<br>
<p>I thought that's what I did, removing &quot;mca_btl_mx.la&quot; and
<br>
&quot;mca_btl_mx.so&quot;. This is the MX BTL plugin, right?
<br>
<p>On Fri, Jun 29, 2012 at 11:16 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Jun 29, 2012, at 2:14 PM, Yong Qin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Jeff for the doc. However I'm not sure if I understand your
</span><br>
<span class="quotelev2">&gt;&gt; following comment correctly. If I remove the MX BTL plugins, a.k.a.,
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_mx.la and mca_btl_mx.so, I'm now getting errors of these
</span><br>
<span class="quotelev2">&gt;&gt; components not found.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [n0026.hbar:09467] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; .../mca_btl_mx.la: file not found (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [n0026.hbar:09467] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; .../mca_btl_mx.so: file not found (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And it still uses TCP BTL instead of MX MTL from what I can tell. Am I
</span><br>
<span class="quotelev2">&gt;&gt; doing things wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yoinks, I'm sorry -- that's not quite what I meant. &#160;I meant remove the *BTL* plugin, not the *MTL* plugin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I.e., if *only* the MX MTL is there, there should be no conflict between the two (per that bug you and George found), and you should be ok.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19714.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Previous message:</strong> <a href="19712.php">S&#233;bastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>In reply to:</strong> <a href="19711.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19714.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19714.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
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
