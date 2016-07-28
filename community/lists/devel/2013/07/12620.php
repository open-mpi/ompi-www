<?
$subject_val = "Re: [OMPI devel] RFC: add support for large counts using derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 16 16:56:07 2013" -->
<!-- isoreceived="20130716205607" -->
<!-- sent="Tue, 16 Jul 2013 14:56:03 -0600" -->
<!-- isosent="20130716205603" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add support for large counts using derived datatypes" -->
<!-- id="20130716205603.GJ18047_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E33F93CB-9FE2-4837-AE2E-21D1381211C2_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add support for large counts using derived datatypes<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-16 16:56:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12619.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12618.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12624.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12624.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you meant signed. It is signed in both configure.ac and ompi_datatype_module.c.
<br>
<p>-Nathan
<br>
<p>On Tue, Jul 16, 2013 at 10:48:12PM +0200, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; It's a typo, MPI_Aint is of course unsigned.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 16, 2013, at 22:37 , David Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 16, 2013, at 3:22 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I read your code and it's definitively looking good. I have however few minor issues with your patch.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. MPI_Aint is unsigned as it must represent the difference between two memory arbitrary locations. In your MPI_Type_get_[true_]extent_x you go through size_t possibly reducing it's extent. I would suggest you used ssize_t instead.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Aint must be signed for Fortran compatibility (among other reasons).  If OMPI's MPI_Aint is unsigned then that's a bug in OMPI.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Dave
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12619.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12618.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12624.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12624.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
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
