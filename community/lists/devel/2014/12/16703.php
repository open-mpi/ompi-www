<?
$subject_val = "Re: [OMPI devel] libfabric, config.h and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 20 00:56:47 2014" -->
<!-- isoreceived="20141220055647" -->
<!-- sent="Sat, 20 Dec 2014 00:56:46 -0500" -->
<!-- isosent="20141220055646" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libfabric, config.h and hwloc" -->
<!-- id="CAMJJpkU6svfbsCa+8n9dEb3NDrM5WsMCm+yXGQ1o2LeZcROttg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5493CDB1.8050401_at_iferc.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-20 00:56:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16704.php">Paul Hargrove: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<li><strong>Previous message:</strong> <a href="16702.php">Rob Latham: "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>In reply to:</strong> <a href="16684.php">Gilles Gouaillardet: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Reply:</strong> <a href="16706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The trunk is broken:
<br>
<p>libfabric/libfabric/include/fi.h:50:25: error: stdatomic.h: No such file or
<br>
directory
<br>
<p>George.
<br>
<p><p><p>On Fri, Dec 19, 2014 at 2:03 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the include path is $top_srcdir/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev1">&gt; and the libevent config.h is in
</span><br>
<span class="quotelev1">&gt; $top_builddir/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so if you do not use VPATH, $top_srcdir = $top_builddir and make success,
</span><br>
<span class="quotelev1">&gt; but since i use VPATH, $top_srcdir != $top_builddir and there is no
</span><br>
<span class="quotelev1">&gt; config.h in my include path,
</span><br>
<span class="quotelev1">&gt; and hence make fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On 2014/12/19 4:12, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 18, 2014, at 3:13 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; currently, ompi master cannot be built if configured with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --without-hwloc *and without* --without-libfabric.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the root cause is HAVE_CONFIG_H is defined but no config.h file is
</span><br>
<span class="quotelev1">&gt; found.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; i digged a bit and found that config.h is taken from a hwloc directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (if the --without-hwloc option is not used),
</span><br>
<span class="quotelev3">&gt; &gt;&gt; so even if this &quot;works&quot; that is unlikely the expected behavior.
</span><br>
<span class="quotelev2">&gt; &gt; Mmm.  I see what you're saying -- the libfabric code expects there to be
</span><br>
<span class="quotelev1">&gt; a config.h file; it'll basically take any config.h that's in the include
</span><br>
<span class="quotelev1">&gt; path.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I actually find several config.h's in the tree:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; $ find . -name config.h
</span><br>
<span class="quotelev2">&gt; &gt; ./opal/libltdl/config.h
</span><br>
<span class="quotelev2">&gt; &gt; ./opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen/config.h
</span><br>
<span class="quotelev2">&gt; &gt; ./opal/mca/hwloc/hwloc191/hwloc/include/private/autogen/config.h
</span><br>
<span class="quotelev2">&gt; &gt; ./opal/mca/event/libevent2021/libevent/config.h
</span><br>
<span class="quotelev2">&gt; &gt; ./ompi/contrib/vt/vt/extlib/otf/config.h
</span><br>
<span class="quotelev2">&gt; &gt; ./ompi/contrib/vt/vt/config.h
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, even if I exclude libltdl, vt, and hwloc (so that there's only
</span><br>
<span class="quotelev1">&gt; a single config.h left in the tree -- for libevent), everything still works:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; $ ./configure --prefix=$bogus --disable-dlopen --disable-vt
</span><br>
<span class="quotelev1">&gt; --without-hwloc
</span><br>
<span class="quotelev2">&gt; &gt; ...etc...
</span><br>
<span class="quotelev2">&gt; &gt; $ make
</span><br>
<span class="quotelev2">&gt; &gt; [...succeeds...]
</span><br>
<span class="quotelev2">&gt; &gt; $ find . -name config.h
</span><br>
<span class="quotelev2">&gt; &gt; ./opal/mca/event/libevent2021/libevent/config.h
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I agree with you that it only works by chance (sorta -- libevent's
</span><br>
<span class="quotelev1">&gt; config.h will still have all the Right Stuff in it), I can't find a case
</span><br>
<span class="quotelev1">&gt; that fails.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you detail what your specific case is that is failing?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (SIDENOTE: I might not be able to find the failure because of what I
</span><br>
<span class="quotelev1">&gt; mention below...)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the attached patch fixes some missing #ifdef
</span><br>
<span class="quotelev2">&gt; &gt; Good catch.  I fixed those a different way (just deleted the #includes
</span><br>
<span class="quotelev1">&gt; -- they weren't necessary); I committed the fix both in OMPI and upstream
</span><br>
<span class="quotelev1">&gt; in libfabric.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; my last (cosmetic) comment is about
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $srcdir/opal/mca/common/libfabric/Makefile.in (and several other
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Makefile.in) :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [snipped]
</span><br>
<span class="quotelev2">&gt; &gt; Good catch.  Fixed in
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/be6d46490f7b80d4f5ea90c859ccbebe96bdaaba">https://github.com/open-mpi/ompi/commit/be6d46490f7b80d4f5ea90c859ccbebe96bdaaba</a>.
</span><br>
<span class="quotelev1">&gt; And then later fixed *that* a followup commit.  :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16684.php">http://www.open-mpi.org/community/lists/devel/2014/12/16684.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16703/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16704.php">Paul Hargrove: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<li><strong>Previous message:</strong> <a href="16702.php">Rob Latham: "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>In reply to:</strong> <a href="16684.php">Gilles Gouaillardet: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Reply:</strong> <a href="16706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
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
