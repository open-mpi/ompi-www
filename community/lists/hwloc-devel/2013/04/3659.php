<?
$subject_val = "[hwloc-devel] hwloc embedding vs libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 05:30:53 2013" -->
<!-- isoreceived="20130430093053" -->
<!-- sent="Tue, 30 Apr 2013 11:30:36 +0200" -->
<!-- isosent="20130430093036" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc embedding vs libltdl" -->
<!-- id="517F8F3C.1040301_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc embedding vs libltdl<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 05:30:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3660.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Previous message:</strong> <a href="3658.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3712.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3712.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I've been working on making hwloc v1.7 pass our tests/embedded scripts
<br>
in the last days. I fixed some minor issues but here's the remaining
<br>
(big) one.
<br>
<p>First problem is that we need the AM_CONDITIONAL for HWLOC_LTDL_INCLUDED
<br>
to be executed when embedded. I can fix this by moving into
<br>
HWLOC_DO_AM_CONDITIONAL. But...
<br>
<p>We conditionally enable SUBDIRS=libltdl (in src/Makefile.am) when
<br>
plugins are enabled and the internal ltdl is used. Assuming embedders
<br>
don't want hwloc plugins, this builds fine since we don't enter libltdl
<br>
during &quot;make&quot;, and we can avoid the (ugly) ltdl configuration entirely
<br>
[1]. But &quot;make distclean&quot; still enters libltdl unconditionally, and it
<br>
fails if LTDL wasn't configured because the Makefile is missing.
<br>
<p>For the record, you had a similar issue with doc/tests/tools where you
<br>
don't even have a Makefile.am in these directories in OMPI. You fixed it
<br>
by doing DIST_SUBDIRS=$(SUBDIRS). It means that distclean doesn't enter
<br>
those directories at all. But it also means that you don't get
<br>
doc/tests/tools in make dist when embedded is enabled. We don't build
<br>
hwloc tarballs in embedded mode so that's fine. Using the same idea for
<br>
my issue would require to build hwloc tarballs with plugins enabled and
<br>
ltld included (both non default), I don't thing we should to this way.
<br>
<p>So we need a way to have src/libltdl stay in DIST_SUBDIRS by default, go
<br>
in SUBDIRS when needed, and disappear totally when embedded. So here's
<br>
the only solution I finally found: hwloc configure.ac sets a shell
<br>
variable to yes, and a new AM_CONDITIONAL adds src/libltdl to
<br>
DIST_SUBDIRS only when this variable is &quot;yes&quot;.
<br>
This still causes hwloc tarballs to contain libltdl (because hwloc
<br>
configure.ac sets the variable to yes). It's still enabled only when the
<br>
system doesn't have libltdl installed or --with-included-ltdl is given,
<br>
as previously. And embedders totally ignore src/libltdl, including in
<br>
distclean, because they don't set the variable to yes.
<br>
<p>If an embedder ever wants to use hwloc plugins, he will have to
<br>
duplicate what the hwloc configure.ac does [1], and it can still link
<br>
with another libltdl if needed (to be tested).
<br>
<p>Patch attached, on top of trunk. Note that you may need these additional
<br>
commits if you or Pavan want to test things [2]
<br>
<p>Let me know what you think because you have the same problem as Pavan
<br>
when OMPI switches to hwloc v1.6+
<br>
<p>Brice
<br>
<p><p><p><p>[1] Enabling ltdl requires some code like below:configure.ac
<br>
AM_PROG_LIBTOOL([dlopen win32-dll])
<br>
LT_LANG([C])
<br>
# Here's what we need to configure ltdl properly
<br>
LT_CONFIG_LTDL_DIR([src/libltdl])
<br>
LTDL_INIT([recursive convenience])
<br>
AC_CONFIG_FILES([src/libltdl/Makefile])
<br>
# Tell src/Makefile.am that things were configured under src/libltdl/
<br>
hwloc_mayenter_src_libltdl=yes
<br>
<p>libtool doesn't seem to like having it in a HWLOC_SETUP_LTDL macro
<br>
outside of the main, and I think we have to let embedders call
<br>
AM_PROG_LIBTOOL() directly in case they need other options.
<br>
<p>There's also a hack below these lines that is specific to the
<br>
&quot;recursive&quot; mode, but we may switch to &quot;subproject&quot; mode  (hwloc
<br>
configure explicitly calls libltdl configure) at some point if libtool
<br>
doesn't fix the issue.
<br>
<p>[2]
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/changeset/5563">https://svn.open-mpi.org/trac/hwloc/changeset/5563</a>
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/changeset/5562">https://svn.open-mpi.org/trac/hwloc/changeset/5562</a>
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3659/ltdl.patch">ltdl.patch</a>
</ul>
<!-- attachment="ltdl.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3660.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Previous message:</strong> <a href="3658.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3712.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3712.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
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
