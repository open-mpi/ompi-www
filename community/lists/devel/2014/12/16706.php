<?
$subject_val = "Re: [OMPI devel] libfabric, config.h and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 20 12:37:38 2014" -->
<!-- isoreceived="20141220173738" -->
<!-- sent="Sat, 20 Dec 2014 17:37:37 +0000" -->
<!-- isosent="20141220173737" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libfabric, config.h and hwloc" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC56F62716_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMJJpkU6svfbsCa+8n9dEb3NDrM5WsMCm+yXGQ1o2LeZcROttg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-20 12:37:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16707.php">Ralph Castain: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Previous message:</strong> <a href="16705.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>In reply to:</strong> <a href="16703.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16707.php">Ralph Castain: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Reply:</strong> <a href="16707.php">Ralph Castain: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed.
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
________________________________
From: devel [devel-bounces_at_[hidden]] on behalf of George Bosilca [bosilca_at_[hidden]]
Sent: Saturday, December 20, 2014 12:56 AM
To: Open MPI Developers
Subject: Re: [OMPI devel] libfabric, config.h and hwloc
The trunk is broken:
libfabric/libfabric/include/fi.h:50:25: error: stdatomic.h: No such file or directory
George.
On Fri, Dec 19, 2014 at 2:03 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
Jeff,
the include path is $top_srcdir/opal/mca/event/libevent2021/libevent
and the libevent config.h is in
$top_builddir/opal/mca/event/libevent2021/libevent
so if you do not use VPATH, $top_srcdir = $top_builddir and make success,
but since i use VPATH, $top_srcdir != $top_builddir and there is no
config.h in my include path,
and hence make fails.
Cheers,
Gilles
 On 2014/12/19 4:12, Jeff Squyres (jsquyres) wrote:
&gt; On Dec 18, 2014, at 3:13 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
&gt;
&gt;&gt; currently, ompi master cannot be built if configured with
&gt;&gt; --without-hwloc *and without* --without-libfabric.
&gt;&gt;
&gt;&gt; the root cause is HAVE_CONFIG_H is defined but no config.h file is found.
&gt;&gt;
&gt;&gt; i digged a bit and found that config.h is taken from a hwloc directory
&gt;&gt; (if the --without-hwloc option is not used),
&gt;&gt; so even if this &quot;works&quot; that is unlikely the expected behavior.
&gt; Mmm.  I see what you're saying -- the libfabric code expects there to be a config.h file; it'll basically take any config.h that's in the include path.
&gt;
&gt; I actually find several config.h's in the tree:
&gt;
&gt; -----
&gt; $ find . -name config.h
&gt; ./opal/libltdl/config.h
&gt; ./opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen/config.h
&gt; ./opal/mca/hwloc/hwloc191/hwloc/include/private/autogen/config.h
&gt; ./opal/mca/event/libevent2021/libevent/config.h
&gt; ./ompi/contrib/vt/vt/extlib/otf/config.h
&gt; ./ompi/contrib/vt/vt/config.h
&gt; -----
&gt;
&gt; However, even if I exclude libltdl, vt, and hwloc (so that there's only a single config.h left in the tree -- for libevent), everything still works:
&gt;
&gt; ----
&gt; $ ./configure --prefix=$bogus --disable-dlopen --disable-vt --without-hwloc
&gt; ...etc...
&gt; $ make
&gt; [...succeeds...]
&gt; $ find . -name config.h
&gt; ./opal/mca/event/libevent2021/libevent/config.h
&gt; -----
&gt;
&gt; So I agree with you that it only works by chance (sorta -- libevent's config.h will still have all the Right Stuff in it), I can't find a case that fails.
&gt;
&gt; Can you detail what your specific case is that is failing?
&gt;
&gt; (SIDENOTE: I might not be able to find the failure because of what I mention below...)
&gt;
&gt;&gt; the attached patch fixes some missing #ifdef
&gt; Good catch.  I fixed those a different way (just deleted the #includes -- they weren't necessary); I committed the fix both in OMPI and upstream in libfabric.
&gt;
&gt;&gt; my last (cosmetic) comment is about
&gt;&gt; $srcdir/opal/mca/common/libfabric/Makefile.in (and several other
&gt;&gt; Makefile.in) :
&gt;&gt; [snipped]
&gt; Good catch.  Fixed in <a href="https://github.com/open-mpi/ompi/commit/be6d46490f7b80d4f5ea90c859ccbebe96bdaaba">https://github.com/open-mpi/ompi/commit/be6d46490f7b80d4f5ea90c859ccbebe96bdaaba</a>.  And then later fixed *that* a followup commit.  :-(
&gt;
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16684.php">http://www.open-mpi.org/community/lists/devel/2014/12/16684.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16706/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16707.php">Ralph Castain: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Previous message:</strong> <a href="16705.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>In reply to:</strong> <a href="16703.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16707.php">Ralph Castain: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Reply:</strong> <a href="16707.php">Ralph Castain: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
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
