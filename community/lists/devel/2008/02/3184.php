<?
$subject_val = "[OMPI devel] Fixlet for config/ompi_contrib.m4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 15:14:54 2008" -->
<!-- isoreceived="20080211201454" -->
<!-- sent="Mon, 11 Feb 2008 21:14:43 +0100" -->
<!-- isosent="20080211201443" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] Fixlet for config/ompi_contrib.m4" -->
<!-- id="20080211201442.GB10939_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> [OMPI devel] Fixlet for config/ompi_contrib.m4<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-11 15:14:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3185.php">Greg Watson: "[OMPI devel] Leopard problems"</a>
<li><strong>Previous message:</strong> <a href="3183.php">Ralf Wildenhues: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3195.php">Matthias Jurenz: "Re: [OMPI devel] Fixlet for config/ompi_contrib.m4"</a>
<li><strong>Reply:</strong> <a href="3195.php">Matthias Jurenz: "Re: [OMPI devel] Fixlet for config/ompi_contrib.m4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>please apply this patch, to make future contrib integration just a tad
<br>
bit easier.  I verified that the generated configure script is
<br>
identical, minus whitespace and comments.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>2008-02-11  Ralf Wildenhues  &lt;Ralf.Wildenhues_at_[hidden]&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* config/ompi_contrib.m4 (OMPI_CONTRIB): Unify listings of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contrib software packages.
<br>
<p>Index: config/ompi_contrib.m4
<br>
===================================================================
<br>
--- config/ompi_contrib.m4	(Revision 17419)
<br>
+++ config/ompi_contrib.m4	(Arbeitskopie)
<br>
@@ -67,20 +67,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Cycle through each of the hard-coded software packages and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# configure them if not disabled.  May someday be expanded to have
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# autogen find the packages instead of this hard-coded list
<br>
-    # (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1162">https://svn.open-mpi.org/trac/ompi/ticket/1162</a>).  I couldn't
<br>
-    # figure out a simple/easy way to have the m4 foreach do the m4
<br>
-    # include *and* all the rest of the stuff, so I settled for having
<br>
-    # two lists: each contribted software package will need to add its
<br>
-    # configure.m4 list here and then add its name to the m4 define
<br>
-    # for contrib_software_list.  Cope.
<br>
-#dnl    m4_include(ompi/contrib/libnbc/configure.m4)
<br>
-    m4_include(ompi/contrib/vt/configure.m4)
<br>
-
<br>
-    m4_define(contrib_software_list, [vt])
<br>
-#dnl    m4_define(contrib_software_list, [libnbc, vt])
<br>
+    # (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1162">https://svn.open-mpi.org/trac/ompi/ticket/1162</a>).
<br>
+    # m4_define([contrib_software_list], [libnbc, vt])
<br>
+    m4_define([contrib_software_list], [vt])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m4_foreach(software, [contrib_software_list],
<br>
-               [OMPI_CONTRIB_DIST_SUBDIRS=&quot;$OMPI_CONTRIB_DIST_SUBDIRS contrib/software&quot;
<br>
-               _OMPI_CONTRIB_CONFIGURE(software)])
<br>
+	       [m4_include([ompi/contrib/]software[/configure.m4])
<br>
+	       OMPI_CONTRIB_DIST_SUBDIRS=&quot;$OMPI_CONTRIB_DIST_SUBDIRS contrib/software&quot;
<br>
+	       _OMPI_CONTRIB_CONFIGURE(software)])
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Setup the top-level glue
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_SUBST(OMPI_CONTRIB_SUBDIRS)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3185.php">Greg Watson: "[OMPI devel] Leopard problems"</a>
<li><strong>Previous message:</strong> <a href="3183.php">Ralf Wildenhues: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3195.php">Matthias Jurenz: "Re: [OMPI devel] Fixlet for config/ompi_contrib.m4"</a>
<li><strong>Reply:</strong> <a href="3195.php">Matthias Jurenz: "Re: [OMPI devel] Fixlet for config/ompi_contrib.m4"</a>
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
