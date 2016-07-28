<?
$subject_val = "Re: [OMPI devel] libfabric, config.h and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 14:12:18 2014" -->
<!-- isoreceived="20141218191218" -->
<!-- sent="Thu, 18 Dec 2014 19:12:16 +0000" -->
<!-- isosent="20141218191216" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libfabric, config.h and hwloc" -->
<!-- id="3C69CB49-A325-435F-B4F9-879E56F78BD5_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54928C8E.3060705_at_iferc.org" -->
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
<strong>Date:</strong> 2014-12-18 14:12:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16680.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16678.php">George Bosilca: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16668.php">Gilles Gouaillardet: "[OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16684.php">Gilles Gouaillardet: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Reply:</strong> <a href="16684.php">Gilles Gouaillardet: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 18, 2014, at 3:13 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; currently, ompi master cannot be built if configured with
</span><br>
<span class="quotelev1">&gt; --without-hwloc *and without* --without-libfabric.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the root cause is HAVE_CONFIG_H is defined but no config.h file is found.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i digged a bit and found that config.h is taken from a hwloc directory
</span><br>
<span class="quotelev1">&gt; (if the --without-hwloc option is not used),
</span><br>
<span class="quotelev1">&gt; so even if this &quot;works&quot; that is unlikely the expected behavior.
</span><br>
<p>Mmm.  I see what you're saying -- the libfabric code expects there to be a config.h file; it'll basically take any config.h that's in the include path.
<br>
<p>I actually find several config.h's in the tree:
<br>
<p>-----
<br>
$ find . -name config.h
<br>
./opal/libltdl/config.h
<br>
./opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen/config.h
<br>
./opal/mca/hwloc/hwloc191/hwloc/include/private/autogen/config.h
<br>
./opal/mca/event/libevent2021/libevent/config.h
<br>
./ompi/contrib/vt/vt/extlib/otf/config.h
<br>
./ompi/contrib/vt/vt/config.h
<br>
-----
<br>
<p>However, even if I exclude libltdl, vt, and hwloc (so that there's only a single config.h left in the tree -- for libevent), everything still works:
<br>
<p><pre>
----
$ ./configure --prefix=$bogus --disable-dlopen --disable-vt --without-hwloc
...etc...
$ make
[...succeeds...]
$ find . -name config.h
./opal/mca/event/libevent2021/libevent/config.h
-----
So I agree with you that it only works by chance (sorta -- libevent's config.h will still have all the Right Stuff in it), I can't find a case that fails.
Can you detail what your specific case is that is failing?
(SIDENOTE: I might not be able to find the failure because of what I mention below...)
&gt; the attached patch fixes some missing #ifdef
Good catch.  I fixed those a different way (just deleted the #includes -- they weren't necessary); I committed the fix both in OMPI and upstream in libfabric.
&gt; my last (cosmetic) comment is about
&gt; $srcdir/opal/mca/common/libfabric/Makefile.in (and several other
&gt; Makefile.in) :
&gt; [snipped]
Good catch.  Fixed in <a href="https://github.com/open-mpi/ompi/commit/be6d46490f7b80d4f5ea90c859ccbebe96bdaaba">https://github.com/open-mpi/ompi/commit/be6d46490f7b80d4f5ea90c859ccbebe96bdaaba</a>.  And then later fixed *that* a followup commit.  :-(
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16680.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16678.php">George Bosilca: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16668.php">Gilles Gouaillardet: "[OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16684.php">Gilles Gouaillardet: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Reply:</strong> <a href="16684.php">Gilles Gouaillardet: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
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
