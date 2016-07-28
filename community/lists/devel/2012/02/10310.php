<?
$subject_val = "[OMPI devel] MPI-3: MPI_GET_LIBRARY_VERSION";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 19:01:12 2012" -->
<!-- isoreceived="20120203000112" -->
<!-- sent="Thu, 2 Feb 2012 19:01:07 -0500" -->
<!-- isosent="20120203000107" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI-3: MPI_GET_LIBRARY_VERSION" -->
<!-- id="E24E22AC-09C6-44A3-98B6-779EBEDFAF14_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI-3: MPI_GET_LIBRARY_VERSION<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-02 19:01:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10311.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<li><strong>Previous message:</strong> <a href="10309.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10311.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<li><strong>Reply:</strong> <a href="10311.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just committed in <a href="https://svn.open-mpi.org/trac/ompi/changeset/25860">https://svn.open-mpi.org/trac/ompi/changeset/25860</a> the new MPI-3 function MPI_GET_LIBRARY_VERSION (it's been voted in to MPI-3).
<br>
<p>Below shows what the string will return in various types of Open MPI distributions.  Suggestions are welcome to change the content (i.e., feel free to edit ompi/mpi/c/get_library_version.c :-) ).  The intent is that users can submit this string to us with bug reports, etc.  It's a good way to ensure that the version of OMPI that you're running with is the version that you actually think you're running (e.g., if you have your LD_LIBRARY_PATH set wrong).  
<br>
<p>FWIW: this function isn't as valuable to Open MPI as it is to other MPI implementations (e.g., those that don't have an ompi_info-type of tool).
<br>
<p>-----
<br>
<p>Developer checkout:
<br>
<p>Open MPI v1.7a1, package: Open MPI jsquyres_at_svbu-mpi063 Distribution, ident: 1.7a1r12345, repo rev: r12345, Unreleased developer copy
<br>
<p>make dist from developer checkout:
<br>
<p>Open MPI v1.7a1, package: Open MPI jsquyres_at_svbu-mpi063 Distribution, ident: 1.7a1, Unreleased developer copy
<br>
<p>Greek tarball:
<br>
<p>Open MPI v1.7a1, package: Open MPI jsquyres_at_svbu-mpi063 Distribution, ident: 1.7a1, repo rev: rexported, Feb 02, 2012
<br>
<p>Release tarball:
<br>
<p>Open MPI v1.7, package: Open MPI jsquyres_at_svbu-mpi063 Distribution, ident: 1.7, repo rev: rexported, Feb 02, 2012
<br>
<p>Nightly tarball:
<br>
<p>Open MPI v1.7a1, package: Open MPI jsquyres_at_svbu-mpi063 Distribution, ident: 1.7a1r12345, repo rev: r12345, Unreleased developer copy
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
<li><strong>Next message:</strong> <a href="10311.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<li><strong>Previous message:</strong> <a href="10309.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10311.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<li><strong>Reply:</strong> <a href="10311.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
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
