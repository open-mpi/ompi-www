<?
$subject_val = "[OMPI users] possibly undefined macro: AC_PROG_LIBTOOL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 29 16:52:43 2011" -->
<!-- isoreceived="20111229215243" -->
<!-- sent="Fri, 30 Dec 2011 00:52:37 +0300" -->
<!-- isosent="20111229215237" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="[OMPI users] possibly undefined macro: AC_PROG_LIBTOOL" -->
<!-- id="CAGR4S9GZFAMe7YrXb9FyY+D+XR-uKXwkTbfNZ-osTGXka=G3oQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-29 16:52:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18074.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>Previous message:</strong> <a href="18072.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18074.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>Reply:</strong> <a href="18074.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI Community,
<br>
<p>I need a custom OpenMPI build. While running ./autogen.pl on Debian
<br>
Squeeze, there is an error:
<br>
<p>--- Found autogen.sh; running...
<br>
autoreconf2.50: Entering directory `.'
<br>
autoreconf2.50: configure.in: not using Gettext
<br>
autoreconf2.50: running: aclocal --force -I m4
<br>
autoreconf2.50: configure.in: tracing
<br>
autoreconf2.50: configure.in: not using Libtool
<br>
autoreconf2.50: running: /usr/bin/autoconf --force
<br>
configure.in:113: error: possibly undefined macro: AC_PROG_LIBTOOL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If this token and others are legitimate, please use m4_pattern_allow.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See the Autoconf documentation.
<br>
autoreconf2.50: /usr/bin/autoconf failed with exit status: 1
<br>
Command failed: ./autogen.sh
<br>
<p>It's a bit confusing, because automake, libtool, autoconf are
<br>
installed. What might be the other reasons of this error?
<br>
<p>Thanks,
<br>
- Dima.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18074.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>Previous message:</strong> <a href="18072.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18074.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>Reply:</strong> <a href="18074.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
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
