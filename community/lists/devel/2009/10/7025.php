<?
$subject_val = "[OMPI devel] RFC: Use automake &quot;silent rules&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 10:42:26 2009" -->
<!-- isoreceived="20091026144226" -->
<!-- sent="Mon, 26 Oct 2009 10:42:21 -0400" -->
<!-- isosent="20091026144221" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Use automake &amp;quot;silent rules&amp;quot;" -->
<!-- id="20EF89F1-1741-42F0-8A08-07305FA88083_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Use automake &quot;silent rules&quot;<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 10:42:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7026.php">George Bosilca: "Re: [OMPI devel] RFC for patches r22113 and r22138 (and followup fixes)"</a>
<li><strong>Previous message:</strong> <a href="7024.php">Jeff Squyres: "Re: [OMPI devel] RFC for patches r22113 and r22138 (and followup fixes)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7030.php">Ashley Pittman: "Re: [OMPI devel] RFC: Use automake &quot;silent rules&quot;"</a>
<li><strong>Reply:</strong> <a href="7030.php">Ashley Pittman: "Re: [OMPI devel] RFC: Use automake &quot;silent rules&quot;"</a>
<li><strong>Reply:</strong> <a href="7034.php">Chris Samuel: "Re: [OMPI devel] RFC: Use automake &quot;silent rules&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Change OMPI's verbose build output to use Automake's new  
<br>
&quot;silent&quot; rules output (see below)
<br>
<p>WHEN: For the 1.5 series (no particular release targeted)
<br>
<p>WHY: Tidy up the output from &quot;make all&quot;; a nice side effect is that it  
<br>
becomes significantly easier to see compiler warnings
<br>
<p>WHERE: configure.ac., ROMIO and VT's configure.in scripts (see patch  
<br>
below)
<br>
<p>TIMEOUT: Tuesday teleconf, Nov 3 (next week).
<br>
<p>=================================================================
<br>
<p>Details:
<br>
<p>In the hwloc project, Pavan from Argonne suggested using Automake  
<br>
1.11's new &quot;silent rules&quot; option to significantly reduce the output  
<br>
during &quot;make all&quot;.  For example, our current output looks like this:
<br>
<p>libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal/include - 
<br>
I../../orte/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa - 
<br>
I../.. -g -Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing- 
<br>
prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-implicit- 
<br>
function-declaration -finline-functions -fno-strict-aliasing -pthread - 
<br>
fvisibility=hidden -MT opal_datatype_destroy.lo -MD -MP -MF .deps/ 
<br>
opal_datatype_destroy.Tpo -c opal_datatype_destroy.c  -fPIC -DPIC - 
<br>
o .libs/opal_datatype_destroy.o
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal/include - 
<br>
I../../orte/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa - 
<br>
I../.. -g -Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing- 
<br>
prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-implicit- 
<br>
function-declaration -finline-functions -fno-strict-aliasing -pthread - 
<br>
fvisibility=hidden -MT opal_datatype_create_contiguous.lo -MD -MP - 
<br>
MF .deps/opal_datatype_create_contiguous.Tpo -c  
<br>
opal_datatype_create_contiguous.c  -fPIC -DPIC -o .libs/ 
<br>
opal_datatype_create_contiguous.o
<br>
<p>With the new silent rules, the output looks like this:
<br>
<p>&nbsp;&nbsp;&nbsp;CC     opal_datatype_create_contiguous.lo
<br>
&nbsp;&nbsp;&nbsp;CC     opal_datatype_destroy.lo
<br>
<p>Basically, the compile command line is not echoed.  Compiler stdout/ 
<br>
stderr, of course, is still output.  A nice side-effect is that you  
<br>
can see compiler warnings MUCH easier.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;CC     btl_sctp_component.lo
<br>
&nbsp;&nbsp;&nbsp;CC     btl_sctp_frag.lo
<br>
btl_sctp_frag.c: In function `mca_btl_sctp_frag_large_send':
<br>
btl_sctp_frag.c:179: warning: int format, different type arg (arg 3)
<br>
btl_sctp_frag.c:179: warning: int format, different type arg (arg 5)
<br>
btl_sctp_frag.c: In function `mca_btl_sctp_frag_send':
<br>
btl_sctp_frag.c:303: warning: int format, different type arg (arg 3)
<br>
btl_sctp_frag.c:303: warning: int format, different type arg (arg 5)
<br>
&nbsp;&nbsp;&nbsp;CC     btl_sctp_proc.lo
<br>
&nbsp;&nbsp;&nbsp;CC     btl_sctp_recv_handler.lo
<br>
<p>If you are using an Automake prior to v1.11, you won't see the new  
<br>
silent rules -- it will automatically default back to the &quot;verbose&quot;  
<br>
rules.
<br>
<p>Note, too, that even with these changes, you can enable the verbose  
<br>
&quot;make all&quot; output in one of two ways:
<br>
<p>1. Add &quot;V=1&quot; to your &quot;make&quot; command line
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;shell$ make all V=1
<br>
<p>2. Add &quot;--disable-silent-rules&quot; to your &quot;configure&quot; command line:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;shell$ ./configure --disable-silent-rules ...
<br>
<p>FWIW, &quot;verbose&quot; produces about 20x the output as &quot;silent&quot; when  
<br>
building OMPI.  Here's the size of outputs from two identical OMPI  
<br>
builds on my system -- one with &quot;make -j 4&quot; and one with &quot;make -j 4  
<br>
V=1&quot;:
<br>
<p>&nbsp;&nbsp;* Silent output: 109 KB &lt;-- kilobytes
<br>
&nbsp;&nbsp;* Verbose output: 2.2 MB &lt;-- megabytes
<br>
<p>The one down side of using the silent rules by default is that we'll  
<br>
get less diagnostic information when users send their build logs.  I  
<br>
think we should update the web page to request that users send build  
<br>
logs of &quot;make V=1&quot;, but I'm guessing that not everyone will do it.
<br>
<p>The patch to do this is pretty small (adding 1 code line + 1 comment  
<br>
in various configure.ac/configure.in script); I included it below for  
<br>
review.  Note that I did *not* silent-ize the libltdl build (which is  
<br>
a dozen or so files in the beginning of the build) because we wholly  
<br>
import libltdl at autogen time.  I therefore didn't want to patch  
<br>
libltdl (further) after importing it a) to remain as forward- 
<br>
compatible as possible, and b) patching the imported libltdl build  
<br>
system might be tricky in terms of timestamps / dependencies.  So  
<br>
those dozen-or-so files will still be &quot;verbose&quot;, but the rest of the  
<br>
files in OMPI will be &quot;silent&quot;.
<br>
<p>Thoughts / comments?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
Index: configure.ac
===================================================================
--- configure.ac	(revision 22139)
+++ configure.ac	(working copy)
@@ -55,6 +55,9 @@
  m4_pattern_allow([m4_ifval])
+# If Automake supports silent rules, enable them.
+m4_ifdef([AM_SILENT_RULES], [AM_SILENT_RULES([yes])])
+
  # Make configure depend on the VERSION file, since it's used in  
AC_INIT
  AC_SUBST([CONFIGURE_DEPENDENCIES], ['$(top_srcdir)/VERSION'])
Index: ompi/mca/io/romio/romio/configure.in
===================================================================
--- ompi/mca/io/romio/romio/configure.in	(revision 22139)
+++ ompi/mca/io/romio/romio/configure.in	(working copy)
@@ -205,6 +205,9 @@
  # Open MPI: Init automake
  AM_INIT_AUTOMAKE(io-romio, 1.0.0, 'no')
+# Open MPI: If Automake supports silent rules, enable them.
+m4_ifdef([AM_SILENT_RULES], [AM_SILENT_RULES([yes])])
+
  #
  # Check that an arch was set
  # If it wasn't set, try to guess using &quot;util/tarch&quot;
Index: ompi/contrib/vt/vt/configure.in
===================================================================
--- ompi/contrib/vt/vt/configure.in	(revision 22139)
+++ ompi/contrib/vt/vt/configure.in	(working copy)
@@ -6,6 +6,9 @@
  AM_INIT_AUTOMAKE(VampirTrace, 5.4.10)
  AM_CONFIG_HEADER(config.h)
+# Open MPI: If Automake supports silent rules, enable them.
+m4_ifdef([AM_SILENT_RULES], [AM_SILENT_RULES([yes])])
+
  ACVT_CONF_INIT
  ACVT_CONF_TITLE([Initialization])
Index: ompi/contrib/vt/vt/extlib/otf/configure.in
===================================================================
--- ompi/contrib/vt/vt/extlib/otf/configure.in	(revision 22139)
+++ ompi/contrib/vt/vt/extlib/otf/configure.in	(working copy)
@@ -9,6 +9,9 @@
  AC_CONFIG_SRCDIR([config.h.in])
  AM_CONFIG_HEADER(config.h)
+# Open MPI: If Automake supports silent rules, enable them.
+m4_ifdef([AM_SILENT_RULES], [AM_SILENT_RULES([yes])])
+
  # Checks for programs.
  AC_PROG_CXX
  AC_PROG_CC
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7026.php">George Bosilca: "Re: [OMPI devel] RFC for patches r22113 and r22138 (and followup fixes)"</a>
<li><strong>Previous message:</strong> <a href="7024.php">Jeff Squyres: "Re: [OMPI devel] RFC for patches r22113 and r22138 (and followup fixes)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7030.php">Ashley Pittman: "Re: [OMPI devel] RFC: Use automake &quot;silent rules&quot;"</a>
<li><strong>Reply:</strong> <a href="7030.php">Ashley Pittman: "Re: [OMPI devel] RFC: Use automake &quot;silent rules&quot;"</a>
<li><strong>Reply:</strong> <a href="7034.php">Chris Samuel: "Re: [OMPI devel] RFC: Use automake &quot;silent rules&quot;"</a>
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
