<?
$subject_val = "Re: [OMPI devel] making Fortran MPI_Status components public";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 27 03:47:35 2012" -->
<!-- isoreceived="20120927074735" -->
<!-- sent="27 Sep 2012 08:47:30 +0100" -->
<!-- isosent="20120927074730" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] making Fortran MPI_Status components public" -->
<!-- id="Prayer.1.3.5.1209270847300.24903_at_hermes-1.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BC0042AF-8C62-4904-9BDC-8F92B728D4F1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] making Fortran MPI_Status components public<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-27 03:47:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11534.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Previous message:</strong> <a href="11532.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>In reply to:</strong> <a href="11531.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11534.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Reply:</strong> <a href="11534.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 27 2012, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;On Sep 27, 2012, at 7:30 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PUBLIC should be a standard part of F95 (no configure probe required).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, the presence of &quot;OMPI_PRIVATE&quot; suggests you already have a 
</span><br>
<span class="quotelev2">&gt;&gt; configure probe for the &quot;PRIVATE&quot; keyword.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yes, we do, because not all compilers support it (yet?).
</span><br>
<p>All serious compilers do, and have for a long time.  I should be interested
<br>
to know which ones are actually used that don't.  There are a couple of
<br>
Fortran compilers around that aren't really maintained and haven't been
<br>
upgraded in a decade, but it is ridiculous to attempt to support such
<br>
things.  It's like attempting to support K&amp;R C compilers!
<br>
<p>There is a high chance that these portability problems are actually
<br>
caused by the configuration mechanism - indeed, I would give three to
<br>
one on that being the cause.  I use PUBLIC and PRIVATE in my course,
<br>
and I am pretty sure that I tested with Sun ONE Studio, so Oracle
<br>
Studio is probably OK :-)
<br>
<p>A VERY strong recommendation for portability is to minimise the use of
<br>
that obscene hack (by which I mean configure).  OpenMPI probably can't
<br>
avoid using it, but its use should be minimised - it is FAR better to
<br>
clean up code and make it fully portable than to use it to hack around
<br>
a problem.  And far too few configuration scripts get the software
<br>
engineering and maintenance that they need.
<br>
<p>Here, for example, there is absolutely NO point in supporting anything
<br>
beyond the pure Fortran 77 interfaces for any compiler that isn't a
<br>
full Fortran 95 one.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11534.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Previous message:</strong> <a href="11532.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>In reply to:</strong> <a href="11531.php">Jeff Squyres: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11534.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Reply:</strong> <a href="11534.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
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
