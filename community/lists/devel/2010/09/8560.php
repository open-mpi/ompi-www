<?
$subject_val = "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 28 17:45:04 2010" -->
<!-- isoreceived="20100928214504" -->
<!-- sent="Tue, 28 Sep 2010 15:44:55 -0600" -->
<!-- isosent="20100928214455" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66" -->
<!-- id="EFC0EC65-BD2B-435A-875B-8290D17747E0_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0C2FDB56-8868-4194-9147-4215FFDF99E0_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-28 17:44:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8561.php">Jeff Squyres: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Previous message:</strong> <a href="8559.php">Aur&#233;lien Bouteiller: "[OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>In reply to:</strong> <a href="8559.php">Aur&#233;lien Bouteiller: "[OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8561.php">Jeff Squyres: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It works for me using autoconf 2.68 - I get these warnings, but no failures:
<br>
<p>configure.ac:1045: warning: AC_LANG_CONFTEST: no AC_LANG_SOURCE call detected in body
<br>
../../lib/autoconf/lang.m4:194: AC_LANG_CONFTEST is expanded from...
<br>
../../lib/autoconf/general.m4:2662: _AC_LINK_IFELSE is expanded from...
<br>
../../lib/autoconf/general.m4:2679: AC_LINK_IFELSE is expanded from...
<br>
config/libtool.m4:4207: _LT_LINKER_SHLIBS is expanded from...
<br>
config/libtool.m4:5339: _LT_LANG_C_CONFIG is expanded from...
<br>
config/libtool.m4:143: _LT_SETUP is expanded from...
<br>
config/libtool.m4:69: LT_INIT is expanded from...
<br>
configure.ac:1045: the top level
<br>
<p><p>On Sep 28, 2010, at 3:30 PM, Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; Hi there, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; has anybody tried to compile ompi trunk with autoconf 2.66 ? It fails when configuring romio with the following error: 
</span><br>
<span class="quotelev1">&gt; === Processing subdir: /nics/c/home/bouteill/ompi/trunk/ompi/mca/io/romio/romio
</span><br>
<span class="quotelev1">&gt; --- Found configure.in|ac; running autoreconf...
</span><br>
<span class="quotelev1">&gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev1">&gt; autoreconf: configure.in: not using Gettext
</span><br>
<span class="quotelev1">&gt; autoreconf: running: aclocal --force 
</span><br>
<span class="quotelev1">&gt; configure.in:2127: warning: macro `AM_PROG_LIBTOOL' not found in library
</span><br>
<span class="quotelev1">&gt; configure.in:791: error: AC_CHECK_SIZEOF: requires literal arguments
</span><br>
<span class="quotelev1">&gt; ../../lib/autoconf/types.m4:765: AC_CHECK_SIZEOF is expanded from...
</span><br>
<span class="quotelev1">&gt; configure.in:791: the top level
</span><br>
<span class="quotelev1">&gt; autom4te: /sw/xt/autoconf/2.66/cnl2.2_gnu4.4.4/bin/m4 failed with exit status: 1
</span><br>
<span class="quotelev1">&gt; aclocal: /sw/xt/autoconf/2.66/cnl2.2_gnu4.4.4/bin/autom4te failed with exit status: 1
</span><br>
<span class="quotelev1">&gt; autoreconf: aclocal failed with exit status: 1
</span><br>
<span class="quotelev1">&gt; Command failed: autoreconf -ivf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should I demote my autoconf to 2.65 ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, 
</span><br>
<span class="quotelev1">&gt; Aurelien 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8561.php">Jeff Squyres: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Previous message:</strong> <a href="8559.php">Aur&#233;lien Bouteiller: "[OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>In reply to:</strong> <a href="8559.php">Aur&#233;lien Bouteiller: "[OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8561.php">Jeff Squyres: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
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
