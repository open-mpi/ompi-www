<?
$subject_val = "Re: [OMPI devel] libfabric, config.h and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 02:03:12 2014" -->
<!-- isoreceived="20141219070312" -->
<!-- sent="Fri, 19 Dec 2014 16:03:13 +0900" -->
<!-- isosent="20141219070313" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libfabric, config.h and hwloc" -->
<!-- id="5493CDB1.8050401_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3C69CB49-A325-435F-B4F9-879E56F78BD5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] libfabric, config.h and hwloc<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 02:03:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16685.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16683.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16679.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16703.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Reply:</strong> <a href="16703.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>the include path is $top_srcdir/opal/mca/event/libevent2021/libevent
<br>
and the libevent config.h is in
<br>
$top_builddir/opal/mca/event/libevent2021/libevent
<br>
<p>so if you do not use VPATH, $top_srcdir = $top_builddir and make success,
<br>
but since i use VPATH, $top_srcdir != $top_builddir and there is no
<br>
config.h in my include path,
<br>
and hence make fails.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>&nbsp;On 2014/12/19 4:12, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Dec 18, 2014, at 3:13 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; currently, ompi master cannot be built if configured with
</span><br>
<span class="quotelev2">&gt;&gt; --without-hwloc *and without* --without-libfabric.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the root cause is HAVE_CONFIG_H is defined but no config.h file is found.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i digged a bit and found that config.h is taken from a hwloc directory
</span><br>
<span class="quotelev2">&gt;&gt; (if the --without-hwloc option is not used),
</span><br>
<span class="quotelev2">&gt;&gt; so even if this &quot;works&quot; that is unlikely the expected behavior.
</span><br>
<span class="quotelev1">&gt; Mmm.  I see what you're saying -- the libfabric code expects there to be a config.h file; it'll basically take any config.h that's in the include path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I actually find several config.h's in the tree:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; $ find . -name config.h
</span><br>
<span class="quotelev1">&gt; ./opal/libltdl/config.h
</span><br>
<span class="quotelev1">&gt; ./opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen/config.h
</span><br>
<span class="quotelev1">&gt; ./opal/mca/hwloc/hwloc191/hwloc/include/private/autogen/config.h
</span><br>
<span class="quotelev1">&gt; ./opal/mca/event/libevent2021/libevent/config.h
</span><br>
<span class="quotelev1">&gt; ./ompi/contrib/vt/vt/extlib/otf/config.h
</span><br>
<span class="quotelev1">&gt; ./ompi/contrib/vt/vt/config.h
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, even if I exclude libltdl, vt, and hwloc (so that there's only a single config.h left in the tree -- for libevent), everything still works:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=$bogus --disable-dlopen --disable-vt --without-hwloc
</span><br>
<span class="quotelev1">&gt; ...etc...
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; [...succeeds...]
</span><br>
<span class="quotelev1">&gt; $ find . -name config.h
</span><br>
<span class="quotelev1">&gt; ./opal/mca/event/libevent2021/libevent/config.h
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I agree with you that it only works by chance (sorta -- libevent's config.h will still have all the Right Stuff in it), I can't find a case that fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you detail what your specific case is that is failing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (SIDENOTE: I might not be able to find the failure because of what I mention below...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the attached patch fixes some missing #ifdef
</span><br>
<span class="quotelev1">&gt; Good catch.  I fixed those a different way (just deleted the #includes -- they weren't necessary); I committed the fix both in OMPI and upstream in libfabric.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; my last (cosmetic) comment is about
</span><br>
<span class="quotelev2">&gt;&gt; $srcdir/opal/mca/common/libfabric/Makefile.in (and several other
</span><br>
<span class="quotelev2">&gt;&gt; Makefile.in) :
</span><br>
<span class="quotelev2">&gt;&gt; [snipped]
</span><br>
<span class="quotelev1">&gt; Good catch.  Fixed in <a href="https://github.com/open-mpi/ompi/commit/be6d46490f7b80d4f5ea90c859ccbebe96bdaaba">https://github.com/open-mpi/ompi/commit/be6d46490f7b80d4f5ea90c859ccbebe96bdaaba</a>.  And then later fixed *that* a followup commit.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16685.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16683.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16679.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16703.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Reply:</strong> <a href="16703.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
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
