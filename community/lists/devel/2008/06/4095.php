<?
$subject_val = "[OMPI devel] some Makefile.am questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 17:15:58 2008" -->
<!-- isoreceived="20080604211558" -->
<!-- sent="Wed, 4 Jun 2008 23:15:31 +0200" -->
<!-- isosent="20080604211531" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] some Makefile.am questions" -->
<!-- id="20080604211531.GD16961_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] some Makefile.am questions<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 17:15:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4096.php">Brian W. Barrett: "Re: [OMPI devel] memory manager RFC"</a>
<li><strong>Previous message:</strong> <a href="4094.php">Andreas Sch&#228;fer: "Re: [OMPI devel] devel Digest, Vol 1080, Issue 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4100.php">Jeff Squyres: "Re: [OMPI devel] some Makefile.am questions"</a>
<li><strong>Reply:</strong> <a href="4100.php">Jeff Squyres: "Re: [OMPI devel] some Makefile.am questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>perusing the OMPI source tree a bit more, I stumbled over a couple of
<br>
things:
<br>
<p>1) This is from test/Makefile.am:
<br>
<p>--- snip ---
<br>
# This should be libsupport.a, not libsupport.la.  Automake doesn't
<br>
# support check_LTLIBRARIES, as technically you have to install a
<br>
# shared library before you can use it.
<br>
#
<br>
check_LIBRARIES = libsupport.a
<br>
<p>libsupport_a_SOURCES = \
<br>
--- snip ---
<br>
<p>The statement in the comment is not true; Automake supports
<br>
check_LTLIBRARIES, and they don't have to be installed before use
<br>
either.  What may be confusing is that, by default, check_LTLIBRARIES
<br>
will be convenience archives rather than shared libraries.  If you want
<br>
to have an uninstalled shared library for testing, then you can use
<br>
<p>check_LTLIBRARIES = libsupport.la
<br>
# induce libtool to create a shared library:
<br>
libsupport_la_LDFLAGS = -rpath /nowhere
<br>
libsupport_la_SOURCES = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p><p><p>2) test/dss/ has only a Makefile with 'CC = mpicc' hardcoded.  That
<br>
looks like it won't use the correct (uninstalled) mpicc but requires a
<br>
prior 'make install'.  Not sure whether that's intentional.
<br>
<p>3) in opal/mca/paffinity/linux/plpa/src/plpa-taskset/Makefile.am, there
<br>
are some manual dependencies listed that should not be necessary, as
<br>
Automake should treat bison/yacc generated files correctly.  IOW, the
<br>
patch below, which simplifies things slightly, should still generate a
<br>
functional Makefile.  If it doesn't, I'd like to hear about it (because
<br>
that could be an Automake bug).
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>Automake takes care of bison/yacc output file dependencies.
<br>
<p>Index: opal/mca/paffinity/linux/plpa/src/plpa-taskset/Makefile.am
<br>
===================================================================
<br>
--- opal/mca/paffinity/linux/plpa/src/plpa-taskset/Makefile.am	(revision 18570)
<br>
+++ opal/mca/paffinity/linux/plpa/src/plpa-taskset/Makefile.am	(working copy)
<br>
@@ -22,11 +22,6 @@
<br>
&nbsp;bin_PROGRAMS += plpa-taskset
<br>
&nbsp;endif
<br>
&nbsp;
<br>
-# Force recognition that tokens.h is generated via tokens.c; there's a
<br>
-# rule to create tokens.c from tokens.y.
<br>
-tokens.c: tokens.y
<br>
-tokens.h: tokens.c
<br>
-
<br>
&nbsp;# Force parser.c to be re-compiled when tokens.h is re-generated
<br>
&nbsp;parser.c: tokens.h
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4096.php">Brian W. Barrett: "Re: [OMPI devel] memory manager RFC"</a>
<li><strong>Previous message:</strong> <a href="4094.php">Andreas Sch&#228;fer: "Re: [OMPI devel] devel Digest, Vol 1080, Issue 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4100.php">Jeff Squyres: "Re: [OMPI devel] some Makefile.am questions"</a>
<li><strong>Reply:</strong> <a href="4100.php">Jeff Squyres: "Re: [OMPI devel] some Makefile.am questions"</a>
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
