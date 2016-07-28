<?
$subject_val = "Re: [OMPI devel] mca_mtl_psm and java";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 21:18:52 2015" -->
<!-- isoreceived="20150827011852" -->
<!-- sent="Thu, 27 Aug 2015 10:18:46 +0900" -->
<!-- isosent="20150827011846" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_mtl_psm and java" -->
<!-- id="55DE6576.3010501_at_rist.or.jp" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8B6B4F5E-EC81-4AE3-8FEB-2046FB19DBCF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_mtl_psm and java<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-26 21:18:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17875.php">Paul Hargrove: "[OMPI devel] Empty-initializer problems w/ PGI"</a>
<li><strong>Previous message:</strong> <a href="17873.php">Jeff Squyres (jsquyres): "[OMPI devel] Annual Open MPI membership review, and Git repo permissions review"</a>
<li><strong>In reply to:</strong> <a href="17872.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17853.php">Ralph Castain: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>i tried PSM_RCVTHREAD=0 but it did not help
<br>
<p>Jeff,
<br>
<p>you did not read too much ... but my words were not quite accurate.
<br>
<p>yes, the signal handlers are set in the library constructor.
<br>
by reading the source code, i found that can be avoided by setting
<br>
the yet undocumented IPATH_NO_BACKTRACE environment variable (at your 
<br>
own risk
<br>
if you have some infinipath hardware)
<br>
i also noted the signal handlers are not restored (in a destructor) and 
<br>
that is
<br>
likely the root cause of the crash
<br>
that means if ompi is configure'd with --disable-dlopen, the behavior is 
<br>
gonna be different
<br>
(i did not test ...) since libinfinipath is not dlclose'd
<br>
<p>the java binding must be a dynamic library (libmpi_java.so) and i did 
<br>
not try to configure
<br>
with --enable-mpi-java --enable-static --disable-shared
<br>
(not sure whether that would work e.g. libmpi_java.so is linked with 
<br>
libmpi.a and friends, or fail at build or runtime)
<br>
<p>i will also shut up from now and let the fine folks at Intel implement a 
<br>
definitive solution :-D
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 8/27/2015 12:41 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Aug 26, 2015, at 11:29 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...but only when the PSM MTL is not compiled directly into libmpi, e.g., via using --disable-dlopen, or --enable-static (neither of which are the default, but it's worth mentioning).
</span><br>
<span class="quotelev2">&gt;&gt; Is that true? If the problem lies in not &#226;&#128;&#156;nicely&#226;&#128;&#157; handling the errhandler registrations, then so long as PSM is not selected, it shouldn&#226;&#128;&#153;t have an impact.
</span><br>
<span class="quotelev1">&gt; That's what Gilles said.  ...er, I guess he didn't state that directly; he said that the signal handler is set when the DSO is dlopened, which I took to mean that it occurs during a library constructor (and is therefore independent of Open MPI selection):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17857.php">http://www.open-mpi.org/community/lists/devel/2015/08/17857.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could be reading too much into Gilles' words, though...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll just shut up now and let Intel provide definitive answers to this issue.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17875.php">Paul Hargrove: "[OMPI devel] Empty-initializer problems w/ PGI"</a>
<li><strong>Previous message:</strong> <a href="17873.php">Jeff Squyres (jsquyres): "[OMPI devel] Annual Open MPI membership review, and Git repo permissions review"</a>
<li><strong>In reply to:</strong> <a href="17872.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17853.php">Ralph Castain: "Re: [OMPI devel] mca_mtl_psm and java"</a>
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
