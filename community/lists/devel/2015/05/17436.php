<?
$subject_val = "Re: [OMPI devel] smcuda higher exclusivity than anything else?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 15:25:26 2015" -->
<!-- isoreceived="20150520192526" -->
<!-- sent="Wed, 20 May 2015 12:25:22 -0700" -->
<!-- isosent="20150520192522" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] smcuda higher exclusivity than anything else?" -->
<!-- id="BBBCE19C-F107-412A-8260-9D5D845F52ED_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="35D2E31A-30B9-4CA5-A459-D2A69D7D3A0D_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] smcuda higher exclusivity than anything else?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-20 15:25:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17437.php">Rolf vandeVaart: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
<li><strong>Previous message:</strong> <a href="17435.php">Aur&#195;&#169;lien Bouteiller: "[OMPI devel] smcuda higher exclusivity than anything else?"</a>
<li><strong>In reply to:</strong> <a href="17435.php">Aur&#195;&#169;lien Bouteiller: "[OMPI devel] smcuda higher exclusivity than anything else?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17437.php">Rolf vandeVaart: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
<li><strong>Reply:</strong> <a href="17437.php">Rolf vandeVaart: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf - this doesn&#226;&#128;&#153;t sound right to me. I assume that smcuda is only supposed to build if cuda support was found/requested, but if there are no cuda adapters, then I would have thought it should disqualify itself.
<br>
<p>Can we do something about this for 1.8.6?
<br>
<p><span class="quotelev1">&gt; On May 20, 2015, at 11:14 AM, Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was making basic performance measurements on our machine after installing 1.8.5, the performance were looking bad. It turns out that the smcuda btl has a higher exclusivity than both vader and sm, even on machines with no nvidia adapters. Is there a strong reason why the default exclusivity is set so high ? Of course it can be easily fixed with a couple of mca options, but unsuspecting users that &#226;&#128;&#156;just run&#226;&#128;&#157; will experience 1/3 overhead across the board for shared memory communication according to my measurements.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Side note: from my understanding of the smcuda component, performance should be identical to the regular sm component (as long as no GPU
</span><br>
<span class="quotelev1">&gt; operation are required). This is not the case, there is some performance penalty with smcuda compared to sm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Aur&#195;&#169;lien Bouteiller ~~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17435.php">http://www.open-mpi.org/community/lists/devel/2015/05/17435.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17437.php">Rolf vandeVaart: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
<li><strong>Previous message:</strong> <a href="17435.php">Aur&#195;&#169;lien Bouteiller: "[OMPI devel] smcuda higher exclusivity than anything else?"</a>
<li><strong>In reply to:</strong> <a href="17435.php">Aur&#195;&#169;lien Bouteiller: "[OMPI devel] smcuda higher exclusivity than anything else?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17437.php">Rolf vandeVaart: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
<li><strong>Reply:</strong> <a href="17437.php">Rolf vandeVaart: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
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
