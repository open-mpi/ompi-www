<?
$subject_val = "[OMPI devel] smcuda higher exclusivity than anything else?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 14:14:47 2015" -->
<!-- isoreceived="20150520181447" -->
<!-- sent="Wed, 20 May 2015 14:14:45 -0400" -->
<!-- isosent="20150520181445" -->
<!-- name="Aur&#195;&#169;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="[OMPI devel] smcuda higher exclusivity than anything else?" -->
<!-- id="35D2E31A-30B9-4CA5-A459-D2A69D7D3A0D_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] smcuda higher exclusivity than anything else?<br>
<strong>From:</strong> Aur&#195;&#169;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-20 14:14:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17436.php">Ralph Castain: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
<li><strong>Previous message:</strong> <a href="17434.php">Burette, Yohann: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17436.php">Ralph Castain: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
<li><strong>Reply:</strong> <a href="17436.php">Ralph Castain: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was making basic performance measurements on our machine after installing 1.8.5, the performance were looking bad. It turns out that the smcuda btl has a higher exclusivity than both vader and sm, even on machines with no nvidia adapters. Is there a strong reason why the default exclusivity is set so high ? Of course it can be easily fixed with a couple of mca options, but unsuspecting users that &#226;&#128;&#156;just run&#226;&#128;&#157; will experience 1/3 overhead across the board for shared memory communication according to my measurements.
<br>
<p><p>Side note: from my understanding of the smcuda component, performance should be identical to the regular sm component (as long as no GPU
<br>
operation are required). This is not the case, there is some performance penalty with smcuda compared to sm.
<br>
<p>Aurelien
<br>
<p><pre>
--
Aur&#195;&#169;lien Bouteiller ~~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17435/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17436.php">Ralph Castain: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
<li><strong>Previous message:</strong> <a href="17434.php">Burette, Yohann: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17436.php">Ralph Castain: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
<li><strong>Reply:</strong> <a href="17436.php">Ralph Castain: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
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
