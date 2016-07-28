<?
$subject_val = "Re: [OMPI devel] PGI error invoked when svnversion is unavailable";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 15 20:13:17 2011" -->
<!-- isoreceived="20111116011317" -->
<!-- sent="Tue, 15 Nov 2011 19:17:47 -0600" -->
<!-- isosent="20111116011747" -->
<!-- name="Thomas Rothrock CTR SMDC SimCtr/GaN Corporation" -->
<!-- email="thomas.w.rothrock.ctr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PGI error invoked when svnversion is unavailable" -->
<!-- id="BD36066269DB4A4BB18E7D99D297C5F4411446BB75_at_WSUS.simctr.usasmdch" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="E6C92FED-E574-4CDE-AE46-5E815AC78B9D_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PGI error invoked when svnversion is unavailable<br>
<strong>From:</strong> Thomas Rothrock CTR SMDC SimCtr/GaN Corporation (<em>thomas.w.rothrock.ctr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-15 20:17:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9974.php">Jeff Squyres: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Previous message:</strong> <a href="9972.php">Larry Baker: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>In reply to:</strong> <a href="9972.php">Larry Baker: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10015.php">Jeff Squyres: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>Reply:</strong> <a href="10015.php">Jeff Squyres: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the reply and attachments.  I searched the archive before
<br>
sending my own email and did find a couple of the previous messages, but
<br>
believe mine is a different situation.  The macro expansion is working (I'm
<br>
using PGI 11.10) but the macro is set to &quot;&quot; instead of &quot;1.7a1? (no
<br>
svnversion) MM-DD-YYYY&quot; by an error in the configure script generation.
<br>
Installing subversion is a cheap workaround that makes the svnversion
<br>
command available and the macro gets set to &quot;1.7a1r25476M&quot; or whatever repo
<br>
version you are at.
<br>
<p>I did not mention it before but this happens when I try to build the trunk
<br>
or the 1.5 development branch.  The 1.4 branch's configure code doesn't even
<br>
bother to test for svnversion failing and just ends up setting OMPI_VERSION
<br>
to &quot;1.4.4rc5r&quot;
<br>
<p>The problem is with configure's with_ident_string assignment:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with_ident_string=&quot;`echo $with_ident_string | sed -e
<br>
's/%VERSION%/'$OMPI_VERSION/`&quot;
<br>
<p>OMPI_VERSION is set to &quot;1.7a1? (no svnversion) MM-DD-YYYY&quot; but the spaces in
<br>
OMPI_VERSION break the expression because sed sees the rest of the version
<br>
string as extra arguments instead of part of the -e script.  It doesn't show
<br>
up in config.log, but the configure output to the terminal at this point is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking if want ident string... sed: -e expression #1, char 18:
<br>
unterminated `s' command
<br>
<p>The config.status shows:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D[&quot;OPAL_IDENT_STRING&quot;]=&quot; \&quot;\&quot;&quot;
<br>
<p>If I patch config/opal_get_version.m4 to remove the spaces:
<br>
<p><p><p>diff -Naurd openmpi-trunk.a/config/opal_get_version.m4
<br>
openmpi-trunk.b/config/opal_get_version.m4
<br>
--- openmpi-trunk.a/config/opal_get_version.m4  2011-09-21
<br>
23:17:36.000000000 -0500
<br>
+++ openmpi-trunk.b/config/opal_get_version.m4  2011-11-15
<br>
17:36:09.000000000 -0600
<br>
@@ -81,7 +81,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test $? != 0; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# The following is too long for Fortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# $2_REPO_REV=&quot;unknown svn version (svnversion not
<br>
found); $d&quot;
<br>
-                        $2_REPO_REV=&quot;? (no svnversion); $d&quot;
<br>
+                        $2_REPO_REV=&quot;?(nosvnversion);$d&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elif test -d &quot;$srcdir/.hg&quot; ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Check to see if we can find the hg command
<br>
<p><p><p>it verifies that the spaces were the problem.  OMPI_VERSION gets set to
<br>
&quot;1.7a1?(nosvnversion);11-15-2011&quot;, configure runs without an sed error, and
<br>
config.status shows:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D[&quot;OPAL_IDENT_STRING&quot;]=&quot; \&quot;1.7a1?(nosvnversion);11-15-2011\&quot;&quot;
<br>
<p>and opal/runtime/opal_init.c compiles without triggering the misleading PGI
<br>
error, but doesn't look quite as pretty.  Perhaps a better solution is to
<br>
modify the with_ident_string assignment to work correclty with spaces in
<br>
OMPI_VERSION intact:
<br>
<p><p><p>diff -Naurd openmpi-trunk.a/opal/config/opal_configure_options.m4
<br>
openmpi-trunk.b/opal/config/opal_configure_options.m4
<br>
--- openmpi-trunk.a/opal/config/opal_configure_options.m4       2011-11-15
<br>
17:55:36.000000000 -0600
<br>
+++ openmpi-trunk.b/opal/config/opal_configure_options.m4       2011-11-15
<br>
18:29:43.000000000 -0600
<br>
@@ -489,7 +489,7 @@
<br>
&nbsp;if test &quot;$with_ident_string&quot; = &quot;&quot; -o &quot;$with_ident_string&quot; = &quot;no&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with_ident_string=&quot;%VERSION%&quot;
<br>
&nbsp;fi
<br>
-with_ident_string=&quot;`echo $with_ident_string | sed -e
<br>
's/%VERSION%/'$OMPI_VERSION/`&quot;
<br>
+with_ident_string=&quot;`echo $with_ident_string | sed -e
<br>
's/%VERSION%/'&quot;$OMPI_VERSION&quot;'/'`&quot;
<br>
&nbsp;AC_DEFINE_UNQUOTED([OPAL_IDENT_STRING], [&quot;$with_ident_string&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ident string for Open MPI])
<br>
&nbsp;AC_MSG_RESULT([$with_ident_string])
<br>
<p><p>In this case the resulting config.status has:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D[&quot;OPAL_IDENT_STRING&quot;]=&quot; \&quot;1.7a1? (no svnversion); 11-15-2011\&quot;&quot;
<br>
<p>and the compile works.  I have attached the second patch for both trunk and
<br>
1.5 as it is probably the better solution (don't assume OMPI_VERSION has no
<br>
spaces) and I have not found other instances of spaces in the version string
<br>
breaking anything.  As for OpenMPI 1.4's development branch, I'll leave the
<br>
choice to patch or leave as-is for someone else to discuss.
<br>
<p>FYI, PGI has assigned my support request TPR #18274.  I'm curious what they
<br>
will come back with.
<br>
<p>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; -----------------------------------------------------------
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Tom Rothrock&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&lt;Thomas.W.Rothrock.CTR_at_[hidden]&gt;
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; US Army Space &amp; Missile Defense Command Simulation Center
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 256-955-3382 (DSN 645)&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; FAX 256-955-1231
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &lt;<a href="http://www.sc.army.mil">http://www.sc.army.mil</a>&gt; Main SimCtr Phone:&#160; 256-955-3750
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; -----------------------------------------------------------
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; This email capability is supported by Department of Defense
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; systems and is subject to monitoring.&#160; Please refrain from
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; using this address for non-Government purposes.
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; -----------------------------------------------------------
<br>
<p>-----Original Message-----
<br>
From: Larry Baker [mailto:baker_at_[hidden]] 
<br>
Sent: Tuesday, November 15, 2011 4:08 PM
<br>
To: Thomas Rothrock CTR SMDC SimCtr/GaN Corporation
<br>
Cc: Open MPI Developers; Eugene Loh
<br>
Subject: Re: [OMPI devel] PGI error invoked when svnversion is unavailable
<br>
<p>Tom,
<br>
<p>This is because the code in OpenMPI presumes macros will be expanded in
<br>
pragmas, but that is not required by the C standard.  (See my e-mails below
<br>
from last year with PGI, TPR 17186.)  I fixed OpenMPI 1.4.3 configure in the
<br>
attached patch.  My patch also disables inline assembly for PGI C++, the
<br>
same as for PGI C.  (Something similar may also have to be done to solve
<br>
Eugene's asm statement warnings on Solaris 11.)  It also fixes detection of
<br>
support for marshaling Fortran REAL16 and COMPLEX32 data types.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>

<br><p>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9973/openmpi-1.5-ident_string.patch">openmpi-1.5-ident_string.patch</a>
</ul>
<!-- attachment="openmpi-1.5-ident_string.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9973/openmpi-trunk-ident_string.patch">openmpi-trunk-ident_string.patch</a>
</ul>
<!-- attachment="openmpi-trunk-ident_string.patch" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9973/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9974.php">Jeff Squyres: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Previous message:</strong> <a href="9972.php">Larry Baker: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>In reply to:</strong> <a href="9972.php">Larry Baker: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10015.php">Jeff Squyres: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>Reply:</strong> <a href="10015.php">Jeff Squyres: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
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
