<?
$subject_val = "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 29 14:28:55 2012" -->
<!-- isoreceived="20120629182855" -->
<!-- sent="Fri, 29 Jun 2012 14:28:50 -0400" -->
<!-- isosent="20120629182850" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6" -->
<!-- id="67730F38-8E4A-4A9E-B270-AD7CD926BD95_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CADEJBEU6CADWzs3ttjw1DLk3mZ5K73Uv+MTJ58kMObJbg9T7eA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-06-29 14:28:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19715.php">William Au: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>Previous message:</strong> <a href="19713.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>In reply to:</strong> <a href="19713.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19500.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Apparently, I can't read -- I'm sorry; you did say exactly the right thing and my eyes parsed it wrong.
<br>
<p>Yes, you did the right thing by removing mca_btl_mx.*.
<br>
<p>I can't imagine why you're getting those errors -- there should be nothing else in OMPI that refers to mca_btl_mx.*.  
<br>
<p>*** George -- any ideas?  I'm not an MX guy, nor do I have any MX hardware to test with.
<br>
<p><p><p>On Jun 29, 2012, at 2:24 PM, Yong Qin wrote:
<br>
<p><span class="quotelev1">&gt; I'm confused now :).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought that's what I did, removing &quot;mca_btl_mx.la&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;mca_btl_mx.so&quot;. This is the MX BTL plugin, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 29, 2012 at 11:16 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 29, 2012, at 2:14 PM, Yong Qin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Jeff for the doc. However I'm not sure if I understand your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following comment correctly. If I remove the MX BTL plugins, a.k.a.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_btl_mx.la and mca_btl_mx.so, I'm now getting errors of these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components not found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0026.hbar:09467] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .../mca_btl_mx.la: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0026.hbar:09467] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .../mca_btl_mx.so: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And it still uses TCP BTL instead of MX MTL from what I can tell. Am I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doing things wrong?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yoinks, I'm sorry -- that's not quite what I meant.  I meant remove the *BTL* plugin, not the *MTL* plugin.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I.e., if *only* the MX MTL is there, there should be no conflict between the two (per that bug you and George found), and you should be ok.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19715.php">William Au: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>Previous message:</strong> <a href="19713.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>In reply to:</strong> <a href="19713.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19500.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
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
