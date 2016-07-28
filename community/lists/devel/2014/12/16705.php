<?
$subject_val = "Re: [OMPI devel] libfabric, config.h and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 20 12:37:24 2014" -->
<!-- isoreceived="20141220173724" -->
<!-- sent="Sat, 20 Dec 2014 17:37:22 +0000" -->
<!-- isosent="20141220173722" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libfabric, config.h and hwloc" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC56F62704_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2014-12-20 12:37:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Previous message:</strong> <a href="16704.php">Paul Hargrove: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<li><strong>In reply to:</strong> <a href="16668.php">Gilles Gouaillardet: "[OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This should be fixed now.  Let me know if it's not.

--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

________________________________________
From: devel [devel-bounces_at_[hidden]] on behalf of Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
Sent: Thursday, December 18, 2014 3:13 AM
To: Open MPI Developers
Subject: [OMPI devel] libfabric, config.h and hwloc

Jeff,

currently, ompi master cannot be built if configured with
--without-hwloc *and without* --without-libfabric.

the root cause is HAVE_CONFIG_H is defined but no config.h file is found.

i digged a bit and found that config.h is taken from a hwloc directory
(if the --without-hwloc option is not used),
so even if this &quot;works&quot; that is unlikely the expected behaviour.

the attached patch fixes some missing #ifdef

two workarounds are (after configure)
1) after configure, manually touch
$top_builddir/opal/mca/common/libfabric/config.h
2) manually hack $top_builddir/opal/mca/common/libfabric/Makefile and
replace
DEFS = -DHAVE_CONFIG_H
with
DEFS =


my last (cosmetic) comment is about
$srcdir/opal/mca/common/libfabric/Makefile.in (and several other
Makefile.in) :

CONFIG_HEADER = $(top_builddir)/opal/include/opal_config.h \
        $(top_builddir)/ompi/include/mpi.h \
        $(top_builddir)/oshmem/include/shmem.h \

$(top_builddir)/opal/mca/hwloc/hwloc191/hwloc/include/private/autogen/config.h
\

$(top_builddir)/opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen/config.h

the last two files do not exist when ompi is configured with
--without-hwloc, is there any way
to have them excluded from Makefile by configure ?

Cheers,

Gilles

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Previous message:</strong> <a href="16704.php">Paul Hargrove: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<li><strong>In reply to:</strong> <a href="16668.php">Gilles Gouaillardet: "[OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
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
