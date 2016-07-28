<?
$subject_val = "Re: [OMPI devel] Open MPI autogen.pl in tarball";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 20:23:46 2015" -->
<!-- isoreceived="20151028002346" -->
<!-- sent="Wed, 28 Oct 2015 00:23:18 +0000" -->
<!-- isosent="20151028002318" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI autogen.pl in tarball" -->
<!-- id="03C964CC-370D-4010-BFFA-6FE7626FE37B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56300CBB.5090908_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI autogen.pl in tarball<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 20:23:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18297.php">George Bosilca: "[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>Previous message:</strong> <a href="18295.php">Gilles Gouaillardet: "Re: [OMPI devel] master build fails"</a>
<li><strong>In reply to:</strong> <a href="18293.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18324.php">Barrett, Brian: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Reply:</strong> <a href="18324.php">Barrett, Brian: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 27, 2015, at 4:46 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my 0.02 US$ ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - autogen.pl was recently used with v1.10 on a PowerPC Little Endian arch
</span><br>
<span class="quotelev1">&gt; (that was mandatory since the libtool we use to generate v1.10 series do not yet support PPC LE)
</span><br>
<p>True.  But we fixed that; it'll be in 1.10.1.
<br>
<p><span class="quotelev1">&gt; - if we remove (from the tarball) autogen.pl, should we also remove configure.ac ?
</span><br>
<span class="quotelev1">&gt;  and what about m4 files and Makefile.am ?
</span><br>
<p>Nope; if we remove those, the dependencies will be off and Bad Things will happen.
<br>
<p><span class="quotelev1">&gt; - an alternative to removing autogen.pl (from the tarball) is to have autogen.pl
</span><br>
<span class="quotelev1">&gt;  test repo_rev and/or tarball_version from VERSION so we can detect if autogen.pl is ran
</span><br>
<span class="quotelev1">&gt;  from a tarball. in that case, we could fail with a message such as
</span><br>
<span class="quotelev1">&gt;  &quot;you might not want to do that, but if you really do, re-run autogen.pl with the --force parameter&quot;
</span><br>
<p>That's a good idea.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18297.php">George Bosilca: "[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>Previous message:</strong> <a href="18295.php">Gilles Gouaillardet: "Re: [OMPI devel] master build fails"</a>
<li><strong>In reply to:</strong> <a href="18293.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18324.php">Barrett, Brian: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Reply:</strong> <a href="18324.php">Barrett, Brian: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
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
