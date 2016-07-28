<?
$subject_val = "[OMPI devel] Autogen.pl, romio and autoconf 2.66";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 28 17:31:02 2010" -->
<!-- isoreceived="20100928213102" -->
<!-- sent="Tue, 28 Sep 2010 17:30:54 -0400" -->
<!-- isosent="20100928213054" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="[OMPI devel] Autogen.pl, romio and autoconf 2.66" -->
<!-- id="0C2FDB56-8868-4194-9147-4215FFDF99E0_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Autogen.pl, romio and autoconf 2.66<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-28 17:30:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8560.php">Ralph Castain: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Previous message:</strong> <a href="8558.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8560.php">Ralph Castain: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Reply:</strong> <a href="8560.php">Ralph Castain: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Reply:</strong> <a href="8561.php">Jeff Squyres: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there, 
<br>
<p>has anybody tried to compile ompi trunk with autoconf 2.66 ? It fails when configuring romio with the following error: 
<br>
=== Processing subdir: /nics/c/home/bouteill/ompi/trunk/ompi/mca/io/romio/romio
<br>
--- Found configure.in|ac; running autoreconf...
<br>
autoreconf: Entering directory `.'
<br>
autoreconf: configure.in: not using Gettext
<br>
autoreconf: running: aclocal --force 
<br>
configure.in:2127: warning: macro `AM_PROG_LIBTOOL' not found in library
<br>
configure.in:791: error: AC_CHECK_SIZEOF: requires literal arguments
<br>
../../lib/autoconf/types.m4:765: AC_CHECK_SIZEOF is expanded from...
<br>
configure.in:791: the top level
<br>
autom4te: /sw/xt/autoconf/2.66/cnl2.2_gnu4.4.4/bin/m4 failed with exit status: 1
<br>
aclocal: /sw/xt/autoconf/2.66/cnl2.2_gnu4.4.4/bin/autom4te failed with exit status: 1
<br>
autoreconf: aclocal failed with exit status: 1
<br>
Command failed: autoreconf -ivf
<br>
<p>Should I demote my autoconf to 2.65 ? 
<br>
<p>Thanks, 
<br>
Aurelien 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8560.php">Ralph Castain: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Previous message:</strong> <a href="8558.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8560.php">Ralph Castain: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Reply:</strong> <a href="8560.php">Ralph Castain: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Reply:</strong> <a href="8561.php">Jeff Squyres: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
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
