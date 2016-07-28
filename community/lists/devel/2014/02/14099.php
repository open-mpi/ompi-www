<?
$subject_val = "Re: [OMPI devel] Reviewing MPI_Dims_create";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 09:24:46 2014" -->
<!-- isoreceived="20140211142446" -->
<!-- sent="Tue, 11 Feb 2014 15:25:26 +0100" -->
<!-- isosent="20140211142526" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Reviewing MPI_Dims_create" -->
<!-- id="20140211142526.GA12748_at_neuromancer" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="642234706.241331.1392128451973.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Reviewing MPI_Dims_create<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-11 09:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14100.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<li><strong>Previous message:</strong> <a href="14098.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14098.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14101.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14101.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 15:20 Tue 11 Feb     , Christoph Niethammer wrote:
<br>
<span class="quotelev1">&gt; Ah and some restults for MPI_Dims_create(1000000, 3, {})
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; original: 8.110628 sec
</span><br>
<span class="quotelev1">&gt; optimized-primes: 0.048702 sec
</span><br>
<span class="quotelev1">&gt; optimized-factorization: 0.000013 sec
</span><br>
<p>Awesome! I didn't expect that nested loop for checking whether a
<br>
factor would still have such an impact.
<br>
<p>-Andreas
<br>
<p><p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
<a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14099/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14100.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<li><strong>Previous message:</strong> <a href="14098.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14098.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14101.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14101.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
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
