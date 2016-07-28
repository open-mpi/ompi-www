<?
$subject_val = "Re: [OMPI devel] RFC: add support for large counts using derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 16 17:12:46 2013" -->
<!-- isoreceived="20130716211246" -->
<!-- sent="Tue, 16 Jul 2013 15:12:42 -0600" -->
<!-- isosent="20130716211242" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add support for large counts using derived datatypes" -->
<!-- id="20130716211242.GM18047_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="23B7CE02-F515-41E3-BF3D-990A773D28F1_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2013-07-16 17:12:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12629.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12626.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 16, 2013 at 11:08:32PM +0200, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 16, 2013, at 23:03 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Jul 16, 2013 at 10:22:33PM +0200, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nathan,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I read your code and it's definitively looking good. I have however few minor issues with your patch.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. MPI_Aint is unsigned as it must represent the difference between two memory arbitrary locations. In your MPI_Type_get_[true_]extent_x you go through size_t possibly reducing it's extent. I would suggest you used ssize_t instead.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. In several other locations size_t is used as a conversion base. In some of these location there is even a comment talking about ssize_t ? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I looked at the code in question and there shouldn't be an issue. Where we want to return MPI_Aint it is never converted to a size_t. The size_t is to ensure that if we return an MPI_Count that the value is never larger than SSIZE_MAX or negative. Am I wrong in assuming MPI_Count can never be negative?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Based on the standard it is both a size and a displacement (including relative) in a file, so my understanding is that it can be negative.
</span><br>
<p>Ugh, that isn't what I wanted to hear. MPI_Count can have the value of MPI_UNDEFINED which we define as -32766. Do we have to redefine this value to ensure there are no problems?
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12629.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12626.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
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
