<?
$subject_val = "[OMPI devel] RFC: pkg-config(1) files for OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 18 12:10:39 2010" -->
<!-- isoreceived="20100218171039" -->
<!-- sent="Thu, 18 Feb 2010 12:10:34 -0500" -->
<!-- isosent="20100218171034" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: pkg-config(1) files for OMPI" -->
<!-- id="6CFED234-D53A-4B69-A7FA-49B893B437D6_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: pkg-config(1) files for OMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-18 12:10:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7458.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<li><strong>Previous message:</strong> <a href="7456.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Add pkg-config(1) data files for Open MPI
<br>
<p>WHY: pkg-config is a de facto Linux standard.  At least one user asked for it; it was easy to do
<br>
<p>WHERE: */config/config_files.m4, */tools/wrappers
<br>
<p>WHEN: Can be for 1.5 or 1.5.1; I don't really have a strong opinion
<br>
<p>TIMEOUT: Next Tuesday teleconf
<br>
<p>-------------------------------------------
<br>
<p>pkg-config(1) is fairly common in Linux and *BSD distributions.  See <a href="http://linux.die.net/man/1/pkg-config">http://linux.die.net/man/1/pkg-config</a> for a description of the pkg-config software.  It's basically an alternate, de facto standard way to get to OMPI's wrapper compiler flags.  Something like this works, for example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;gcc mpi_ring.c `pkg-config ompi-c --cflags --libs` -o mpi_ring 
<br>
<p>All this does is add a few configure-generated files that get installed under $libdir/pkgconfig.  I did almost all the work while waiting for other compilers.  MPICH2 provides a pkg-config file.
<br>
<p>I think we should include it because it affects almost nothing else, is easy to do, and at least 1 user asked for it.
<br>
<p>I don't expect this to be contentious.  We can discuss next Tuesday, but feel free to pipe up before then if you have any objections.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7458.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<li><strong>Previous message:</strong> <a href="7456.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
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
