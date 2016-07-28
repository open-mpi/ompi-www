<?
$subject_val = "[OMPI devel] Use of OPAL_PREFIX to relocate a lib";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 04:55:57 2009" -->
<!-- isoreceived="20090618085557" -->
<!-- sent="Thu, 18 Jun 2009 10:55:42 +0200 (CEST)" -->
<!-- isosent="20090618085542" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="[OMPI devel] Use of OPAL_PREFIX to relocate a lib" -->
<!-- id="alpine.DEB.2.00.0906181047390.4598_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> [OMPI devel] Use of OPAL_PREFIX to relocate a lib<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-18 04:55:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6266.php">Leo P.: "[OMPI devel] some question about OMPI communication infrastructure"</a>
<li><strong>Previous message:</strong> <a href="6264.php">Paul H. Hargrove: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6270.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Reply:</strong> <a href="6270.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Reply:</strong> <a href="6271.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8639.php">Barrett, Brian W: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Until Open MPI 1.3 (maybe 1.3.1), I used to find it convenient to be able 
<br>
to move a library from its &quot;normal&quot; place (either /usr or /opt) to 
<br>
somewhere else (i.e. my NFS home account) to be able to try things only on 
<br>
my account.
<br>
<p>So, I used to set OPAL_PREFIX to the root of the Open MPI directory and 
<br>
all went fine.
<br>
<p>I don't know if relocation was intended in the first place, but with 
<br>
1.3.2, this seems to be broken.
<br>
<p>It may have something to do with this patch (and maybe others) :
<br>
<p># HG changeset patch
<br>
# User bosilca
<br>
# Date 1159647750 0
<br>
# Node ID c7152b893f1ce1bc54eea2dc3f06c7e359011fdd
<br>
# Parent  676a8fbdbb161f0b84a1c6bb12e2324c8a749c56
<br>
All the OPAL_ defines from the install_dirs.h contain ABSOLUTE path. 
<br>
Therefore,
<br>
there is no need to prepend OPAL_PREFIX to them.
<br>
<p>diff -r 676a8fbdbb16 -r c7152b893f1c opal/tools/wrappers/opal_wrapper.c
<br>
--- a/opal/tools/wrappers/opal_wrapper.c        Fri Sep 29 23:58:58 2006 +0000
<br>
+++ b/opal/tools/wrappers/opal_wrapper.c        Sat Sep 30 20:22:30 2006 +0000
<br>
@@ -561,9 +561,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 != strcmp(OPAL_INCLUDEDIR, &quot;/usr/include&quot;)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *line;
<br>
&nbsp;&nbsp;#if defined(__WINDOWS__)
<br>
-            asprintf(&amp;line, OPAL_INCLUDE_PATTERN OPAL_PREFIX &quot;\&quot;\\%s\&quot;&quot;, OPAL_INCLUDEDIR);
<br>
+            asprintf(&amp;line, OPAL_INCLUDE_PATTERN &quot;\&quot;\\%s\&quot;&quot;, OPAL_INCLUDEDIR);
<br>
&nbsp;&nbsp;#else
<br>
-            asprintf(&amp;line, OPAL_INCLUDE_PATTERN OPAL_PREFIX&quot;/%s&quot;, OPAL_INCLUDEDIR);
<br>
+            asprintf(&amp;line, OPAL_INCLUDE_PATTERN &quot;/%s&quot;, OPAL_INCLUDEDIR);
<br>
&nbsp;&nbsp;#endif  /* defined(__WINDOWS__) */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_append_nosize(&amp;data.preproc_flags, line);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(line);
<br>
<p>George, is there a rationale behind this patch for disabling relocation of 
<br>
libraries ? Do you think reverting only this patch would bring back the 
<br>
relocation functionality ?
<br>
<p>TIA,
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6266.php">Leo P.: "[OMPI devel] some question about OMPI communication infrastructure"</a>
<li><strong>Previous message:</strong> <a href="6264.php">Paul H. Hargrove: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6270.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Reply:</strong> <a href="6270.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Reply:</strong> <a href="6271.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8639.php">Barrett, Brian W: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
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
