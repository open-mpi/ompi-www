<?
$subject_val = "Re: [OMPI devel] libfabric, config.h and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 20 13:48:33 2014" -->
<!-- isoreceived="20141220184833" -->
<!-- sent="Sat, 20 Dec 2014 13:48:32 -0500" -->
<!-- isosent="20141220184832" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libfabric, config.h and hwloc" -->
<!-- id="CAMJJpkWvbJbX4v7Wgv6DvWcwhV2BJwVE7M3SJc95m4Y4xPeJTQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="904A9BEC-1223-4272-B973-4DF4E8B49A2D_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-12-20 13:48:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16709.php">Eric Chamberland: "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Previous message:</strong> <a href="16707.php">Ralph Castain: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>In reply to:</strong> <a href="16707.php">Ralph Castain: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16705.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I confirm this is now fixed. Thanks.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Sat, Dec 20, 2014 at 12:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Works for me&#226;&#128;&#166;thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2014, at 9:37 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* devel [devel-bounces_at_[hidden]] on behalf of George Bosilca [
</span><br>
<span class="quotelev1">&gt; bosilca_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Saturday, December 20, 2014 12:56 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] libfabric, config.h and hwloc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The trunk is broken:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libfabric/libfabric/include/fi.h:50:25: error: stdatomic.h: No such file
</span><br>
<span class="quotelev1">&gt; or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 19, 2014 at 2:03 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the include path is $top_srcdir/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev2">&gt;&gt; and the libevent config.h is in
</span><br>
<span class="quotelev2">&gt;&gt; $top_builddir/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so if you do not use VPATH, $top_srcdir = $top_builddir and make success,
</span><br>
<span class="quotelev2">&gt;&gt; but since i use VPATH, $top_srcdir != $top_builddir and there is no
</span><br>
<span class="quotelev2">&gt;&gt; config.h in my include path,
</span><br>
<span class="quotelev2">&gt;&gt; and hence make fails.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On 2014/12/19 4:12, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Dec 18, 2014, at 3:13 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; currently, ompi master cannot be built if configured with
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --without-hwloc *and without* --without-libfabric.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; the root cause is HAVE_CONFIG_H is defined but no config.h file is
</span><br>
<span class="quotelev2">&gt;&gt; found.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; i digged a bit and found that config.h is taken from a hwloc directory
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; (if the --without-hwloc option is not used),
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; so even if this &quot;works&quot; that is unlikely the expected behavior.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Mmm.  I see what you're saying -- the libfabric code expects there to
</span><br>
<span class="quotelev2">&gt;&gt; be a config.h file; it'll basically take any config.h that's in the include
</span><br>
<span class="quotelev2">&gt;&gt; path.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I actually find several config.h's in the tree:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -----
</span><br>
<span class="quotelev3">&gt;&gt; &gt; $ find . -name config.h
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./opal/libltdl/config.h
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen/config.h
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./opal/mca/hwloc/hwloc191/hwloc/include/private/autogen/config.h
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./opal/mca/event/libevent2021/libevent/config.h
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./ompi/contrib/vt/vt/extlib/otf/config.h
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./ompi/contrib/vt/vt/config.h
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -----
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; However, even if I exclude libltdl, vt, and hwloc (so that there's only
</span><br>
<span class="quotelev2">&gt;&gt; a single config.h left in the tree -- for libevent), everything still works:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ----
</span><br>
<span class="quotelev3">&gt;&gt; &gt; $ ./configure --prefix=$bogus --disable-dlopen --disable-vt
</span><br>
<span class="quotelev2">&gt;&gt; --without-hwloc
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ...etc...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; $ make
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [...succeeds...]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; $ find . -name config.h
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./opal/mca/event/libevent2021/libevent/config.h
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -----
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So I agree with you that it only works by chance (sorta -- libevent's
</span><br>
<span class="quotelev2">&gt;&gt; config.h will still have all the Right Stuff in it), I can't find a case
</span><br>
<span class="quotelev2">&gt;&gt; that fails.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Can you detail what your specific case is that is failing?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (SIDENOTE: I might not be able to find the failure because of what I
</span><br>
<span class="quotelev2">&gt;&gt; mention below...)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; the attached patch fixes some missing #ifdef
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Good catch.  I fixed those a different way (just deleted the #includes
</span><br>
<span class="quotelev2">&gt;&gt; -- they weren't necessary); I committed the fix both in OMPI and upstream
</span><br>
<span class="quotelev2">&gt;&gt; in libfabric.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; my last (cosmetic) comment is about
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; $srcdir/opal/mca/common/libfabric/Makefile.in (and several other
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Makefile.in) :
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; [snipped]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Good catch.  Fixed in
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/be6d46490f7b80d4f5ea90c859ccbebe96bdaaba">https://github.com/open-mpi/ompi/commit/be6d46490f7b80d4f5ea90c859ccbebe96bdaaba</a>.
</span><br>
<span class="quotelev2">&gt;&gt; And then later fixed *that* a followup commit.  :-(
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16684.php">http://www.open-mpi.org/community/lists/devel/2014/12/16684.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16706.php">http://www.open-mpi.org/community/lists/devel/2014/12/16706.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16707.php">http://www.open-mpi.org/community/lists/devel/2014/12/16707.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16708/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16709.php">Eric Chamberland: "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Previous message:</strong> <a href="16707.php">Ralph Castain: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>In reply to:</strong> <a href="16707.php">Ralph Castain: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16705.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
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
