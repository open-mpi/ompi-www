<?
$subject_val = "[OMPI devel] PkgSrc build of 1.8.1 gives a portability error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 00:32:50 2014" -->
<!-- isoreceived="20140717043250" -->
<!-- sent="Thu, 17 Jul 2014 16:32:48 +1200" -->
<!-- isosent="20140717043248" -->
<!-- name="Kevin Buckley" -->
<!-- email="kevin.buckley.ecs.vuw.ac.nz_at_[hidden]" -->
<!-- subject="[OMPI devel] PkgSrc build of 1.8.1 gives a portability error" -->
<!-- id="CABwOO=dgWTUb2vBKzCgmwjanSzd7qwY_HpQbR=-HN0Dvbp8j=g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] PkgSrc build of 1.8.1 gives a portability error<br>
<strong>From:</strong> Kevin Buckley (<em>kevin.buckley.ecs.vuw.ac.nz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-17 00:32:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15188.php">Gilles Gouaillardet: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>Previous message:</strong> <a href="15186.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15188.php">Gilles Gouaillardet: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>Reply:</strong> <a href="15188.php">Gilles Gouaillardet: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>Reply:</strong> <a href="15189.php">Bert Wesarg: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello again OpenMPI folk,  been a while.
<br>
<p>Have just come to build OpenMPI 1.8.1 within a PkgSrc environment for
<br>
our ArchLinux machines (yes, we used to be NetBSD, yes).
<br>
<p>Latest PkgSrc build was for 1.6.4.
<br>
<p>The 1.6.4 PkgSrc build required 4 patches, 3 of which were PkgSrc-specific
<br>
and just defined a
<br>
<p>sysconfexampledir = $(pkgdatadir)/examples
<br>
<p>so that the PkgSrc build could &quot;Install configuration files into
<br>
example directory&quot;
<br>
<p>Those patches affected
<br>
<p>orte/etc/Makefile.in
<br>
opal/etc/Makefile.in
<br>
ompi/etc/Makefile.in
<br>
<p>The 4th patch, affecting
<br>
<p>opal/tools/wrappers/opal_wrapper.c
<br>
<p>added some &quot;Missing RPATH support&quot;
<br>
<p>I fixed up those four patches so that they appled cleanly to 1.8.1 ,
<br>
however I have
<br>
been informed, by the PkgSrc build process, of the following
<br>
<p>---8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;------
<br>
=&gt; Checking for portability problems in extracted files
<br>
ERROR: [check-portability.awk] =&gt; Found test ... == ...:
<br>
ERROR: [check-portability.awk] configure:  if test &quot;$enable_oshmem&quot; ==
<br>
&quot;yes&quot; -a &quot;$ompi_fortran_happy&quot; == &quot;1&quot; -a \
<br>
<p>Explanation:
<br>
===========================================================================
<br>
The &quot;test&quot; command, as well as the &quot;[&quot; command, are not required to know
<br>
the &quot;==&quot; operator. Only a few implementations like bash and some
<br>
versions of ksh support it.
<br>
<p>When you run &quot;test foo == foo&quot; on a platform that does not support the
<br>
&quot;==&quot; operator, the result will be &quot;false&quot; instead of &quot;true&quot;. This can
<br>
lead to unexpected behavior.
<br>
<p>There are two ways to fix this error message. If the file that contains
<br>
the &quot;test ==&quot; is needed for building the package, you should create a
<br>
patch for it, replacing the &quot;==&quot; operator with &quot;=&quot;. If the file is not
<br>
needed, add its name to the CHECK_PORTABILITY_SKIP variable in the
<br>
package Makefile.
<br>
===========================================================================
<br>
<p>---8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;------
<br>
<p>Obviously, the file that needs to be patched is really
<br>
<p>configure.ac
<br>
<p>and not
<br>
<p>configure
<br>
<p>but anyroad, the place at which the oshmen stanza has used the &quot;non-portable&quot;
<br>
double-equals construct is shown in the following attempted patch
<br>
<p><p>---8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;------
<br>
--- configure.ac.orig   2014-04-22 14:51:44.000000000 +0000
<br>
+++ configure.ac
<br>
@@ -611,8 +611,8 @@ m4_ifdef([project_ompi], [OMPI_SETUP_MPI
<br>
&nbsp;])
<br>
<p>&nbsp;AM_CONDITIONAL(OSHMEM_BUILD_FORTRAN_BINDINGS,
<br>
-    [test &quot;$enable_oshmem&quot; == &quot;yes&quot; -a &quot;$ompi_fortran_happy&quot; == &quot;1&quot; -a \
<br>
-          &quot;$OMPI_WANT_FORTRAN_BINDINGS&quot; == &quot;1&quot; -a \
<br>
+    [test &quot;$enable_oshmem&quot; = &quot;yes&quot; -a &quot;$ompi_fortran_happy&quot; = &quot;1&quot; -a \
<br>
+          &quot;$OMPI_WANT_FORTRAN_BINDINGS&quot; = &quot;1&quot; -a \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;$enable_oshmem_fortran&quot; != &quot;no&quot;])
<br>
<p>&nbsp;# checkpoint results
<br>
---8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;------
<br>
<p>Someone may wish to give that the &quot;once over&quot; ahead of the 1.8.2 release, in
<br>
light of what PkgSrc considers to be portable.
<br>
<p>All the best,
<br>
Kevin M. Buckley
<br>
<p>eScience Consultant
<br>
School of Engineering and Computer Science
<br>
Victoria University of Wellington
<br>
New Zealand
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15188.php">Gilles Gouaillardet: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>Previous message:</strong> <a href="15186.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15188.php">Gilles Gouaillardet: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>Reply:</strong> <a href="15188.php">Gilles Gouaillardet: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>Reply:</strong> <a href="15189.php">Bert Wesarg: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
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
