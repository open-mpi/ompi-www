<?
$subject_val = "Re: [OMPI devel] libfabric, config.h and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 20 12:46:56 2014" -->
<!-- isoreceived="20141220174656" -->
<!-- sent="Sat, 20 Dec 2014 09:46:52 -0800" -->
<!-- isosent="20141220174652" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libfabric, config.h and hwloc" -->
<!-- id="904A9BEC-1223-4272-B973-4DF4E8B49A2D_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC56F62716_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-20 12:46:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16708.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Previous message:</strong> <a href="16706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>In reply to:</strong> <a href="16706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16708.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Reply:</strong> <a href="16708.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Works for me&#133;thanks!
<br>
<p><span class="quotelev1">&gt; On Dec 20, 2014, at 9:37 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt; From: devel [devel-bounces_at_[hidden] &lt;mailto:devel-bounces_at_[hidden]&gt;] on behalf of George Bosilca [bosilca_at_[hidden] &lt;mailto:bosilca_at_[hidden]&gt;]
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, December 20, 2014 12:56 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] libfabric, config.h and hwloc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The trunk is broken:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libfabric/libfabric/include/fi.h:50:25: error: stdatomic.h: No such file or directory
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 19, 2014 at 2:03 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Jeff,
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
<span class="quotelev2">&gt; &gt; On Dec 18, 2014, at 3:13 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; currently, ompi master cannot be built if configured with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --without-hwloc *and without* --without-libfabric.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the root cause is HAVE_CONFIG_H is defined but no config.h file is found.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; i digged a bit and found that config.h is taken from a hwloc directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (if the --without-hwloc option is not used),
</span><br>
<span class="quotelev3">&gt; &gt;&gt; so even if this &quot;works&quot; that is unlikely the expected behavior.
</span><br>
<span class="quotelev2">&gt; &gt; Mmm.  I see what you're saying -- the libfabric code expects there to be a config.h file; it'll basically take any config.h that's in the include path.
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
<span class="quotelev2">&gt; &gt; However, even if I exclude libltdl, vt, and hwloc (so that there's only a single config.h left in the tree -- for libevent), everything still works:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; $ ./configure --prefix=$bogus --disable-dlopen --disable-vt --without-hwloc
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
<span class="quotelev2">&gt; &gt; So I agree with you that it only works by chance (sorta -- libevent's config.h will still have all the Right Stuff in it), I can't find a case that fails.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you detail what your specific case is that is failing?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (SIDENOTE: I might not be able to find the failure because of what I mention below...)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the attached patch fixes some missing #ifdef
</span><br>
<span class="quotelev2">&gt; &gt; Good catch.  I fixed those a different way (just deleted the #includes -- they weren't necessary); I committed the fix both in OMPI and upstream in libfabric.
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
<span class="quotelev2">&gt; &gt; Good catch.  Fixed in <a href="https://github.com/open-mpi/ompi/commit/be6d46490f7b80d4f5ea90c859ccbebe96bdaaba">https://github.com/open-mpi/ompi/commit/be6d46490f7b80d4f5ea90c859ccbebe96bdaaba</a> &lt;<a href="https://github.com/open-mpi/ompi/commit/be6d46490f7b80d4f5ea90c859ccbebe96bdaaba">https://github.com/open-mpi/ompi/commit/be6d46490f7b80d4f5ea90c859ccbebe96bdaaba</a>&gt;.  And then later fixed *that* a followup commit.  :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16684.php">http://www.open-mpi.org/community/lists/devel/2014/12/16684.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16684.php">http://www.open-mpi.org/community/lists/devel/2014/12/16684.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16706.php">http://www.open-mpi.org/community/lists/devel/2014/12/16706.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16706.php">http://www.open-mpi.org/community/lists/devel/2014/12/16706.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16707/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16708.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Previous message:</strong> <a href="16706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>In reply to:</strong> <a href="16706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16708.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Reply:</strong> <a href="16708.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
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
