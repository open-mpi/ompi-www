<?
$subject_val = "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 20 14:07:59 2010" -->
<!-- isoreceived="20100820180759" -->
<!-- sent="Fri, 20 Aug 2010 20:07:51 +0200" -->
<!-- isosent="20100820180751" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers" -->
<!-- id="20100820180751.GB11418_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A245A018-DAA8-48F1-A479-C6A66976717E_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-20 14:07:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8306.php">David Gunter: "[OMPI devel] Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers"</a>
<li><strong>Previous message:</strong> <a href="8304.php">Larry Baker: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="8304.php">Larry Baker: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Larry, Jeff,
<br>
<p>I'm one of the Libtool developers.  I'm happy to take things over to the
<br>
Libtool source tree and help get them incorporated.
<br>
<p>Jeff, any chance you could give me a heads-up when all of them are
<br>
incorporated in one of the OpenMPI branches so I can pick them up from
<br>
there?
<br>
<p>Thanks,
<br>
Ralf
<br>
<p>* Larry Baker wrote on Fri, Aug 20, 2010 at 07:15:05PM CEST:
<br>
<span class="quotelev1">&gt; Without the 1.4.2 fix in configure to correctly parse the PGI
</span><br>
<span class="quotelev1">&gt; version no. (the same fix you have in 1.5rc5), I'm pretty sure the
</span><br>
<span class="quotelev1">&gt; make of 1.4.2 fails for PGI 10.x.  Also, I think the inline assembly
</span><br>
<span class="quotelev1">&gt; of atomic instructions might not be correct for the C++ version of
</span><br>
<span class="quotelev1">&gt; the library without the other fix in configure to hard-code
</span><br>
<span class="quotelev1">&gt; disabling that feature for PGI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know anything about Libtool, like where it comes from, which
</span><br>
<span class="quotelev1">&gt; pieces of OpenMPI come from Libtool, and, probably more significant,
</span><br>
<span class="quotelev1">&gt; how those pieces might have been modified when they were
</span><br>
<span class="quotelev1">&gt; incorporated into OpenMPI.  The fixes to configure and libtool.m4
</span><br>
<span class="quotelev1">&gt; that I sent seem to already be well known.  (They were passed on to
</span><br>
<span class="quotelev1">&gt; me when I fixed them while installing netCDF.) I'm happy to report
</span><br>
<span class="quotelev1">&gt; bugs and fixes to the developers of the code I use.  I really have
</span><br>
<span class="quotelev1">&gt; to leave it up to them to decide whether to pass them on to their
</span><br>
<span class="quotelev1">&gt; upstream providers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 20, 2010, at 8:24 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;On Aug 17, 2010, at 9:50 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;I patched OpenMPI 1.4.2 to fix some problems/warnings when using the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;PGI compilers.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;FWIW, if there are fixes suitable for upstream Libtool in your
</span><br>
<span class="quotelev3">&gt; &gt;&gt;changes,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;we would be glad if you could send them as bug reports or even
</span><br>
<span class="quotelev3">&gt; &gt;&gt;'diff -u'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;patches to the bug-libtool at gnu.org list.  Line numbers don't help
</span><br>
<span class="quotelev3">&gt; &gt;&gt;because they change too quickly, and issues might have been
</span><br>
<span class="quotelev3">&gt; &gt;&gt;fixed in the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;git version of Libtool already.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Yes, that would be great -- would you mind submitting these
</span><br>
<span class="quotelev2">&gt; &gt;upstream to Libtool?  We try to do that when I fix something so
</span><br>
<span class="quotelev2">&gt; &gt;that it's there for us without patching in future releases.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Thanks for the v1.4 fixes!  But given that you also submitted them
</span><br>
<span class="quotelev2">&gt; &gt;for v1.5, since none of them are drastic correctness issues, we
</span><br>
<span class="quotelev2">&gt; &gt;might well opt to only fix them in the v1.5 series.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8306.php">David Gunter: "[OMPI devel] Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers"</a>
<li><strong>Previous message:</strong> <a href="8304.php">Larry Baker: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="8304.php">Larry Baker: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<!-- nextthread="start" -->
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
