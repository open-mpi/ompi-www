<?
$subject_val = "[OMPI devel] libfabric, config.h and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 03:13:03 2014" -->
<!-- isoreceived="20141218081303" -->
<!-- sent="Thu, 18 Dec 2014 17:13:02 +0900" -->
<!-- isosent="20141218081302" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] libfabric, config.h and hwloc" -->
<!-- id="54928C8E.3060705_at_iferc.org" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] libfabric, config.h and hwloc<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-18 03:13:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16669.php">Paul Hargrove: "[OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16667.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16679.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Reply:</strong> <a href="16679.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Reply:</strong> <a href="16705.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>currently, ompi master cannot be built if configured with
<br>
--without-hwloc *and without* --without-libfabric.
<br>
<p>the root cause is HAVE_CONFIG_H is defined but no config.h file is found.
<br>
<p>i digged a bit and found that config.h is taken from a hwloc directory
<br>
(if the --without-hwloc option is not used),
<br>
so even if this &quot;works&quot; that is unlikely the expected behaviour.
<br>
<p>the attached patch fixes some missing #ifdef
<br>
<p>two workarounds are (after configure)
<br>
1) after configure, manually touch
<br>
$top_builddir/opal/mca/common/libfabric/config.h
<br>
2) manually hack $top_builddir/opal/mca/common/libfabric/Makefile and
<br>
replace
<br>
DEFS = -DHAVE_CONFIG_H
<br>
with
<br>
DEFS =
<br>
<p><p>my last (cosmetic) comment is about
<br>
$srcdir/opal/mca/common/libfabric/Makefile.in (and several other
<br>
Makefile.in) :
<br>
<p>CONFIG_HEADER = $(top_builddir)/opal/include/opal_config.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/ompi/include/mpi.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/oshmem/include/shmem.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
$(top_builddir)/opal/mca/hwloc/hwloc191/hwloc/include/private/autogen/config.h
<br>
\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
$(top_builddir)/opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen/config.h
<br>
<p>the last two files do not exist when ompi is configured with
<br>
--without-hwloc, is there any way
<br>
to have them excluded from Makefile by configure ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16668/libfabric.diff">libfabric.diff</a>
</ul>
<!-- attachment="libfabric.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16669.php">Paul Hargrove: "[OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16667.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16679.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Reply:</strong> <a href="16679.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Reply:</strong> <a href="16705.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
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
