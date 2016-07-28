<?
$subject_val = "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 28 17:55:41 2010" -->
<!-- isoreceived="20100928215541" -->
<!-- sent="Tue, 28 Sep 2010 17:55:35 -0400" -->
<!-- isosent="20100928215535" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66" -->
<!-- id="CCDA20C5-3ED8-4954-9E3F-D50A0027A9A0_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-28 17:55:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8562.php">Ralph Castain: "[OMPI devel] 1.4.3rc3 available"</a>
<li><strong>Previous message:</strong> <a href="8560.php">Ralph Castain: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>In reply to:</strong> <a href="8559.php">Aur&#233;lien Bouteiller: "[OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8563.php">Aurélien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Reply:</strong> <a href="8563.php">Aurélien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 28, 2010, at 5:30 PM, Aur&#233;lien Bouteiller wrote:
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
<p>This looks like Libtool or Automake isn't installed properly...?
<br>
<p><p><p><span class="quotelev1">&gt; configure.in:791: error: AC_CHECK_SIZEOF: requires literal arguments
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8562.php">Ralph Castain: "[OMPI devel] 1.4.3rc3 available"</a>
<li><strong>Previous message:</strong> <a href="8560.php">Ralph Castain: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>In reply to:</strong> <a href="8559.php">Aur&#233;lien Bouteiller: "[OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8563.php">Aurélien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Reply:</strong> <a href="8563.php">Aurélien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
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
