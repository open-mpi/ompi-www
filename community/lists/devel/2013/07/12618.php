<?
$subject_val = "Re: [OMPI devel] RFC: add support for large counts using derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 16 16:48:18 2013" -->
<!-- isoreceived="20130716204818" -->
<!-- sent="Tue, 16 Jul 2013 22:48:12 +0200" -->
<!-- isosent="20130716204812" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add support for large counts using derived datatypes" -->
<!-- id="E33F93CB-9FE2-4837-AE2E-21D1381211C2_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8E25A938F00ED34D90F8C49322FDF1928B9EDB_at_xmb-rcd-x09.cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-16 16:48:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12619.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12617.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<li><strong>In reply to:</strong> <a href="12617.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12620.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12620.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's a typo, MPI_Aint is of course unsigned.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Jul 16, 2013, at 22:37 , David Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 16, 2013, at 3:22 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I read your code and it's definitively looking good. I have however few minor issues with your patch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. MPI_Aint is unsigned as it must represent the difference between two memory arbitrary locations. In your MPI_Type_get_[true_]extent_x you go through size_t possibly reducing it's extent. I would suggest you used ssize_t instead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Aint must be signed for Fortran compatibility (among other reasons).  If OMPI's MPI_Aint is unsigned then that's a bug in OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
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
<li><strong>Next message:</strong> <a href="12619.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12617.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<li><strong>In reply to:</strong> <a href="12617.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12620.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12620.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
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
