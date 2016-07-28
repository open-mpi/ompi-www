<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  3 10:06:20 2012" -->
<!-- isoreceived="20120203150620" -->
<!-- sent="Fri, 3 Feb 2012 15:05:43 +0000" -->
<!-- isosent="20120203150543" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION" -->
<!-- id="CB51459B.A3C2%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E24E22AC-09C6-44A3-98B6-779EBEDFAF14_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-03 10:05:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10312.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<li><strong>Previous message:</strong> <a href="10310.php">Jeff Squyres: "[OMPI devel] MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<li><strong>In reply to:</strong> <a href="10310.php">Jeff Squyres: "[OMPI devel] MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10312.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<li><strong>Reply:</strong> <a href="10312.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>What's the jsquyres_at_svby-mpi063 tag for?  It seems odd to have it there in
<br>
a release tarball, at least as presented.  Having the version number
<br>
earlier seems like a good idea...
<br>
<p>Brian
<br>
<p>On 2/2/12 5:01 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I just committed in <a href="https://svn.open-mpi.org/trac/ompi/changeset/25860">https://svn.open-mpi.org/trac/ompi/changeset/25860</a>
</span><br>
<span class="quotelev1">&gt;the new MPI-3 function MPI_GET_LIBRARY_VERSION (it's been voted in to
</span><br>
<span class="quotelev1">&gt;MPI-3).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Below shows what the string will return in various types of Open MPI
</span><br>
<span class="quotelev1">&gt;distributions.  Suggestions are welcome to change the content (i.e., feel
</span><br>
<span class="quotelev1">&gt;free to edit ompi/mpi/c/get_library_version.c :-) ).  The intent is that
</span><br>
<span class="quotelev1">&gt;users can submit this string to us with bug reports, etc.  It's a good
</span><br>
<span class="quotelev1">&gt;way to ensure that the version of OMPI that you're running with is the
</span><br>
<span class="quotelev1">&gt;version that you actually think you're running (e.g., if you have your
</span><br>
<span class="quotelev1">&gt;LD_LIBRARY_PATH set wrong).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;FWIW: this function isn't as valuable to Open MPI as it is to other MPI
</span><br>
<span class="quotelev1">&gt;implementations (e.g., those that don't have an ompi_info-type of tool).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Developer checkout:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Open MPI v1.7a1, package: Open MPI jsquyres_at_svbu-mpi063 Distribution,
</span><br>
<span class="quotelev1">&gt;ident: 1.7a1r12345, repo rev: r12345, Unreleased developer copy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;make dist from developer checkout:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Open MPI v1.7a1, package: Open MPI jsquyres_at_svbu-mpi063 Distribution,
</span><br>
<span class="quotelev1">&gt;ident: 1.7a1, Unreleased developer copy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Greek tarball:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Open MPI v1.7a1, package: Open MPI jsquyres_at_svbu-mpi063 Distribution,
</span><br>
<span class="quotelev1">&gt;ident: 1.7a1, repo rev: rexported, Feb 02, 2012
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Release tarball:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Open MPI v1.7, package: Open MPI jsquyres_at_svbu-mpi063 Distribution,
</span><br>
<span class="quotelev1">&gt;ident: 1.7, repo rev: rexported, Feb 02, 2012
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Nightly tarball:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Open MPI v1.7a1, package: Open MPI jsquyres_at_svbu-mpi063 Distribution,
</span><br>
<span class="quotelev1">&gt;ident: 1.7a1r12345, repo rev: r12345, Unreleased developer copy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10312.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<li><strong>Previous message:</strong> <a href="10310.php">Jeff Squyres: "[OMPI devel] MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<li><strong>In reply to:</strong> <a href="10310.php">Jeff Squyres: "[OMPI devel] MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10312.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<li><strong>Reply:</strong> <a href="10312.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
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
