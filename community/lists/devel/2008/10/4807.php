<?
$subject_val = "[OMPI devel] snprintf vs. sprintf";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 08:08:09 2008" -->
<!-- isoreceived="20081027120809" -->
<!-- sent="Mon, 27 Oct 2008 05:08:05 -0700" -->
<!-- isosent="20081027120805" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="[OMPI devel] snprintf vs. sprintf" -->
<!-- id="b89c3c270810270508v6553d984vb0387e087065be7d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] snprintf vs. sprintf<br>
<strong>From:</strong> Brad Penoff (<em>penoff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 08:08:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4808.php">Matney Sr, Kenneth D.: "[OMPI devel] Moving Fix for ALPS from trunk into v1.3"</a>
<li><strong>Previous message:</strong> <a href="4806.php">Jeff Squyres: "[OMPI devel] Fwd: Subversion 1.5.4 Released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4810.php">George Bosilca: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Reply:</strong> <a href="4810.php">George Bosilca: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>In the current ompi-trunk (r19808), my build was breaking.  I have
<br>
created a small patch to fix this, but I wanted to ask the team about
<br>
something first.  One of the problems was with snprintf.  I read a
<br>
little bit more about this and I found this quote about snprintf:
<br>
<p>&quot;snprintf does not form part of the widely implemented ANSI C
<br>
standard, as sprintf does. However, it came into the language for the
<br>
later C99 standard and often existed in C libraries before that.&quot;
<br>
<p>So I'm wondering, should the use of snprintf as in
<br>
ompi/contrib/vt/vt/tools/opari/tool/opari.cc depend on the value of
<br>
_GLIBCXX_USE_C99 ?
<br>
<p>For my system, one &quot;fix&quot; seemed to be to just delete this &quot;using
<br>
std::snprintf;&quot; line. Everything then compiled and worked, but I don't
<br>
know how general/desired this &quot;solution&quot; is.  Any comments on snprintf
<br>
and this solution?
<br>
<p>Thanks,
<br>
brad
<br>
<p>$ svn diff
<br>
Index: ompi/contrib/vt/vt/tools/opari/tool/opari.cc
<br>
===================================================================
<br>
--- ompi/contrib/vt/vt/tools/opari/tool/opari.cc	(revision 19808)
<br>
+++ ompi/contrib/vt/vt/tools/opari/tool/opari.cc	(working copy)
<br>
@@ -15,7 +15,6 @@
<br>
&nbsp;&nbsp;&nbsp;using std::cout;
<br>
&nbsp;&nbsp;&nbsp;using std::cerr;
<br>
&nbsp;#include &lt;cstdio&gt;
<br>
-  using std::snprintf;
<br>
&nbsp;&nbsp;&nbsp;using std::remove;
<br>
&nbsp;#include &lt;cstring&gt;
<br>
&nbsp;&nbsp;&nbsp;using std::strcmp;
<br>
Index: orte/tools/orte-iof/orte-iof.c
<br>
===================================================================
<br>
--- orte/tools/orte-iof/orte-iof.c	(revision 19808)
<br>
+++ orte/tools/orte-iof/orte-iof.c	(working copy)
<br>
@@ -37,6 +37,9 @@
<br>
&nbsp;#ifdef HAVE_STDLIB_H
<br>
&nbsp;#include &lt;stdlib.h&gt;
<br>
&nbsp;#endif  /*  HAVE_STDLIB_H */
<br>
+#ifdef HAVE_SIGNAL_H
<br>
+#include &lt;signal.h&gt;
<br>
+#endif  /*  HAVE_SIGNAL_H */
<br>
&nbsp;#ifdef HAVE_SYS_STAT_H
<br>
&nbsp;#include &lt;sys/stat.h&gt;
<br>
&nbsp;#endif  /* HAVE_SYS_STAT_H */
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4808.php">Matney Sr, Kenneth D.: "[OMPI devel] Moving Fix for ALPS from trunk into v1.3"</a>
<li><strong>Previous message:</strong> <a href="4806.php">Jeff Squyres: "[OMPI devel] Fwd: Subversion 1.5.4 Released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4810.php">George Bosilca: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Reply:</strong> <a href="4810.php">George Bosilca: "Re: [OMPI devel] snprintf vs. sprintf"</a>
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
