<?
$subject_val = "[OMPI devel] [Patch] For Fortran, support GCC/gfortran 4.9's TYPE(*) with NO_ARG_CHECK";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 16:18:56 2014" -->
<!-- isoreceived="20140107211856" -->
<!-- sent="Tue, 07 Jan 2014 22:18:53 +0100" -->
<!-- isosent="20140107211853" -->
<!-- name="Tobias Burnus" -->
<!-- email="burnus_at_[hidden]" -->
<!-- subject="[OMPI devel] [Patch] For Fortran, support GCC/gfortran 4.9's TYPE(*) with NO_ARG_CHECK" -->
<!-- id="52CC6F3D.1080802_at_net-b.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI devel] [Patch] For Fortran, support GCC/gfortran 4.9's TYPE(*) with NO_ARG_CHECK<br>
<strong>From:</strong> Tobias Burnus (<em>burnus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 16:18:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13576.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<li><strong>Previous message:</strong> <a href="13574.php">Adrian Reber: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13582.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Patch] For Fortran, support GCC/gfortran 4.9's TYPE(*) with NO_ARG_CHECK"</a>
<li><strong>Reply:</strong> <a href="13582.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Patch] For Fortran, support GCC/gfortran 4.9's TYPE(*) with NO_ARG_CHECK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'd like to see the following patch to be included in Open MPI, which 
<br>
enabled interface checking also with GCC's gfortran.
<br>
<p>While TYPE(*), DIMENSION(*) is already tested for, it cannot be used for 
<br>
scalars (and &quot;TYPE(*)&quot; cannot be used with arrays). [Those were added in 
<br>
GCC 4.8, which diagnoses the rank mismatch. Fortran 2015 (?) will add 
<br>
support for both scalars and dimensions.]
<br>
<p>In GCC 4.9, gfortran joins other compilers by supporting a directive 
<br>
which disables the argument check (type, kind, rank checking: TKR): 
<br>
NO_ARG_CHECK.
<br>
<p>The attached patch does so. The original version has been added 8 months 
<br>
ago to 
<br>
<a href="https://bitbucket.org/jsquyres/mpi3-fortran/commits/243ffae9f63ffc8fcdfdc604796ef290963ea1c4">https://bitbucket.org/jsquyres/mpi3-fortran/commits/243ffae9f63ffc8fcdfdc604796ef290963ea1c4</a> 
<br>
- but as it hasn't been merged to the Open MPI, I submit it with this 
<br>
email (rediffed with some additional cases).
<br>
<p>I'd be delighted if the patch could be applied to the trunk - and 
<br>
possibly even be backported to 1.7. (I think it also applies to 1.6 but 
<br>
I haven't checked.)
<br>
<p>Tobias
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13575/gcc-no-arg-check.diff">gcc-no-arg-check.diff</a>
</ul>
<!-- attachment="gcc-no-arg-check.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13576.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<li><strong>Previous message:</strong> <a href="13574.php">Adrian Reber: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13582.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Patch] For Fortran, support GCC/gfortran 4.9's TYPE(*) with NO_ARG_CHECK"</a>
<li><strong>Reply:</strong> <a href="13582.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Patch] For Fortran, support GCC/gfortran 4.9's TYPE(*) with NO_ARG_CHECK"</a>
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
