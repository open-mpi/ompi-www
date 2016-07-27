<?
$subject_val = "[hwloc-devel] doxygen autoconf setup";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 16:57:47 2009" -->
<!-- isoreceived="20090909205747" -->
<!-- sent="Wed, 9 Sep 2009 16:57:35 -0400" -->
<!-- isosent="20090909205735" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] doxygen autoconf setup" -->
<!-- id="52937630-0155-4F9C-9A42-9ABFA762F279_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] doxygen autoconf setup<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 16:57:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0010.php">Brice Goglin: "Re: [hwloc-devel] doxygen autoconf setup"</a>
<li><strong>Previous message:</strong> <a href="0008.php">Jeff Squyres: "[hwloc-devel] Trac, etc."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0010.php">Brice Goglin: "Re: [hwloc-devel] doxygen autoconf setup"</a>
<li><strong>Reply:</strong> <a href="0010.php">Brice Goglin: "Re: [hwloc-devel] doxygen autoconf setup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm a little confused by the doxygen setup in configure.ac -- can one  
<br>
of you shed some light on this?
<br>
<p>After the DX_* macros, I see the following:
<br>
<p>AC_CHECK_FILE(${srcdir}/doc/doxygen-doc/man, [hwloc_have_man=yes], [:])
<br>
AC_CHECK_FILE(${srcdir}/doc/doxygen-doc/hwloc.pdf,  
<br>
[hwloc_have_pdf=yes], [:])
<br>
AC_CHECK_FILE(${srcdir}/doc/doxygen-doc/html, [hwloc_have_html=yes],  
<br>
[:])
<br>
AC_CHECK_FILE(${srcdir}/doc/doxygen-doc/hwloc.tag,  
<br>
[hwloc_have_tag=yes], [:])
<br>
<p>What are these supposed to do?  None of those directories will exist  
<br>
the first time you run configure.  Indeed, these tests really only  
<br>
test what happened the last time you built the doxygen output -- not  
<br>
what *will* happen when you run &quot;make&quot;.
<br>
<p>Is the real goal here to figure out whether doxygen supports the above  
<br>
output types so that you can do the following AM_CONDITIONAL's?
<br>
<p>AM_CONDITIONAL([HWLOC_HAVE_MAN], [test &quot;x$hwloc_have_man&quot; = &quot;xyes&quot;])
<br>
AM_CONDITIONAL([HWLOC_HAVE_PDF], [test &quot;x$hwloc_have_pdf&quot; = &quot;xyes&quot;])
<br>
AM_CONDITIONAL([HWLOC_HAVE_HTML], [test &quot;x$hwloc_have_html&quot; = &quot;xyes&quot;])
<br>
AM_CONDITIONAL([HWLOC_HAVE_DOC], [test &quot;x$hwloc_have_html&quot; = &quot;xyes&quot;])
<br>
AM_CONDITIONAL([HWLOC_HAVE_TAG], [test &quot;x$hwloc_have_tag&quot; = &quot;xyes&quot;])
<br>
AM_CONDITIONAL([HWLOC_INSTALL_MAN], [test &quot;x$hwloc_have_man&quot; = &quot;xyes&quot; - 
<br>
o &quot;x$DX_FLAG_man&quot; = &quot;x1&quot; ])
<br>
AM_CONDITIONAL([HWLOC_INSTALL_PDF], [test &quot;x$hwloc_have_pdf&quot; = &quot;xyes&quot; - 
<br>
o \( &quot;x$DX_FLAG_pdf&quot; = &quot;x1&quot; -a &quot;x$FIG2DEV&quot; != &quot;x&quot; \) ])
<br>
AM_CONDITIONAL([HWLOC_INSTALL_HTML], [test &quot;x$hwloc_have_html&quot; =  
<br>
&quot;xyes&quot; -o \( &quot;x$DX_FLAG_html&quot; = &quot;x1&quot; -a &quot;x$FIG2DEV&quot; != &quot;x&quot; \) ])
<br>
AM_CONDITIONAL([HWLOC_WILLHAVE_TAG], [test &quot;x$hwloc_have_tag&quot; = &quot;xyes&quot;  
<br>
-o \( &quot;x$DX_DOXYGEN&quot; != &quot;x&quot; -a &quot;x$FIG2DEV&quot; != &quot;x&quot; \) ])
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0010.php">Brice Goglin: "Re: [hwloc-devel] doxygen autoconf setup"</a>
<li><strong>Previous message:</strong> <a href="0008.php">Jeff Squyres: "[hwloc-devel] Trac, etc."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0010.php">Brice Goglin: "Re: [hwloc-devel] doxygen autoconf setup"</a>
<li><strong>Reply:</strong> <a href="0010.php">Brice Goglin: "Re: [hwloc-devel] doxygen autoconf setup"</a>
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
