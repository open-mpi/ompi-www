<?
$subject_val = "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 28 18:10:08 2010" -->
<!-- isoreceived="20100928221008" -->
<!-- sent="Tue, 28 Sep 2010 18:10:04 -0400" -->
<!-- isosent="20100928221004" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66" -->
<!-- id="DA84139B-A1C1-4FF9-ADDC-74D3E5A89F41_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CCDA20C5-3ED8-4954-9E3F-D50A0027A9A0_at_cisco.com" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-28 18:10:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8564.php">Aurélien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Previous message:</strong> <a href="8562.php">Ralph Castain: "[OMPI devel] 1.4.3rc3 available"</a>
<li><strong>In reply to:</strong> <a href="8561.php">Jeff Squyres: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8564.php">Aurélien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Reply:</strong> <a href="8564.php">Aurélien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28 sept. 2010 &#224; 17:55, Jeff Squyres a &#233;crit :
<br>
<p><span class="quotelev1">&gt; On Sep 28, 2010, at 5:30 PM, Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi there, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; has anybody tried to compile ompi trunk with autoconf 2.66 ? It fails when configuring romio with the following error: 
</span><br>
<span class="quotelev2">&gt;&gt; === Processing subdir: /nics/c/home/bouteill/ompi/trunk/ompi/mca/io/romio/romio
</span><br>
<span class="quotelev2">&gt;&gt; --- Found configure.in|ac; running autoreconf...
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: configure.in: not using Gettext
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: running: aclocal --force 
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:2127: warning: macro `AM_PROG_LIBTOOL' not found in library
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This looks like Libtool or Automake isn't installed properly...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
That's a possibility, but one problem at a time :) 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:791: error: AC_CHECK_SIZEOF: requires literal arguments
</span><br>
<span class="quotelev2">&gt;&gt; ../../lib/autoconf/types.m4:765: AC_CHECK_SIZEOF is expanded from...
</span><br>
Apparently, after making some internet search, it looks like autoconf 2.66 is plain broken. I'll try with another one and report on this issue. 
<br>
<p>Aurelien 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8564.php">Aurélien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Previous message:</strong> <a href="8562.php">Ralph Castain: "[OMPI devel] 1.4.3rc3 available"</a>
<li><strong>In reply to:</strong> <a href="8561.php">Jeff Squyres: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8564.php">Aurélien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Reply:</strong> <a href="8564.php">Aurélien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
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
