<?
$subject_val = "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 28 18:27:22 2010" -->
<!-- isoreceived="20100928222722" -->
<!-- sent="Tue, 28 Sep 2010 18:27:16 -0400" -->
<!-- isosent="20100928222716" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66" -->
<!-- id="3CEB9470-EC2B-418F-93D9-55C1E5A5978A_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DA84139B-A1C1-4FF9-ADDC-74D3E5A89F41_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2010-09-28 18:27:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8565.php">Jeff Squyres: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Previous message:</strong> <a href="8563.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>In reply to:</strong> <a href="8563.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8565.php">Jeff Squyres: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Reply:</strong> <a href="8565.php">Jeff Squyres: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28 sept. 2010 &#224; 18:10, Aur&#233;lien Bouteiller a &#233;crit :
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 28 sept. 2010 &#224; 17:55, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 28, 2010, at 5:30 PM, Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi there, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has anybody tried to compile ompi trunk with autoconf 2.66 ? It fails when configuring romio with the following error: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; === Processing subdir: /nics/c/home/bouteill/ompi/trunk/ompi/mca/io/romio/romio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- Found configure.in|ac; running autoreconf...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: configure.in: not using Gettext
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: running: aclocal --force 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure.in:2127: warning: macro `AM_PROG_LIBTOOL' not found in library
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This looks like Libtool or Automake isn't installed properly...?
</span><br>
You were right on that one. The system provided automake on Kraken is broken. Fixed by installing my own. 
<br>
<p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; That's a possibility, but one problem at a time :) 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure.in:791: error: AC_CHECK_SIZEOF: requires literal arguments
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../lib/autoconf/types.m4:765: AC_CHECK_SIZEOF is expanded from...
</span><br>
<span class="quotelev1">&gt; Apparently, after making some internet search, it looks like autoconf 2.66 is plain broken. I'll try with another one and report on this issue. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Confirmed. Autoconf 2.66 cannot compile romio, 2.68 and 2.65 can, no problem. 
<br>
<p><span class="quotelev1">&gt; Aurelien 
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
<li><strong>Next message:</strong> <a href="8565.php">Jeff Squyres: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Previous message:</strong> <a href="8563.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>In reply to:</strong> <a href="8563.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8565.php">Jeff Squyres: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Reply:</strong> <a href="8565.php">Jeff Squyres: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
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
