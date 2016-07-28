<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 08:43:28 2010" -->
<!-- isoreceived="20100205134328" -->
<!-- sent="Fri, 5 Feb 2010 08:43:22 -0500" -->
<!-- isosent="20100205134322" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="6A6FB843-7A43-48BF-A90C-86CA61AB3C36_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201002050235.o152Z5Cj002010_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-05 08:43:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7377.php">Joshua Hursey: "Re: [OMPI devel] New feature for SVN commit messages"</a>
<li><strong>Previous message:</strong> <a href="7375.php">hu yaohui: "[OMPI devel] how do openmpi organize network components?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7380.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was a mistake in the libevent refresh (two files disappeared from libevent that were still listed in our Makefile.am).  Fixed in r22562.
<br>
<p><p>On Feb 4, 2010, at 9:35 PM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev1">&gt;        make distcheck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Start time: Thu Feb  4 21:27:00 EST 2010
</span><br>
<span class="quotelev1">&gt; End time:   Thu Feb  4 21:35:05 EST 2010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt;      am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22560/ompi/opal/asm'
</span><br>
<span class="quotelev1">&gt; make  \
</span><br>
<span class="quotelev1">&gt;   top_distdir=&quot;../../openmpi-1.7a1r22560&quot; distdir=&quot;../../openmpi-1.7a1r22560/opal/asm&quot; \
</span><br>
<span class="quotelev1">&gt;   dist-hook
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22560/ompi/opal/asm'
</span><br>
<span class="quotelev1">&gt; mkdir &quot;../../openmpi-1.7a1r22560/opal/asm/generated&quot;
</span><br>
<span class="quotelev1">&gt; perl &quot;../../opal/asm/generate-all-asm.pl&quot; &quot;perl&quot; &quot;.&quot; &quot;../../openmpi-1.7a1r22560/opal/asm&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;ALPHA&quot; &quot;default-.text-.globl-:--$-_at_-1-1-1-1-1&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;AMD64&quot; &quot;default-.text-.globl-:--.L-_at_-1-0-1-1-1&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;AMD64&quot; &quot;default-.text-.globl-:--.L-_at_-1-0-1-1-0&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;IA32&quot; &quot;default-.text-.globl-:--.L-_at_-1-0-1-1-1&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;IA32&quot; &quot;default-.text-.globl-:--.L-_at_-1-0-1-1-0&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;IA32&quot; &quot;default-.text-.globl-:-_-L--0-1-1-1-0&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;IA32&quot; &quot;default-.text-.globl-:-_-L--0-0-1-1-1&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;IA32&quot; &quot;default-.text-.globl-:-_-L--0-0-1-1-0&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;IA64&quot; &quot;default-.text-.globl-:--.L-_at_-1-0-1-1-1&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;IA64&quot; &quot;default-.text-.globl-:--.L-_at_-1-0-1-1-0&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;POWERPC32&quot; &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;POWERPC32&quot; &quot;default-.text-.globl-:--.L-_at_-1-1-0-0-1&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;POWERPC32&quot; &quot;default-.text-.globl-:--.L-_at_-1-1-0-0-0&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;POWERPC32&quot; &quot;aix-.csect .text[PR]-.globl-:-.-L--0-1-0-0-0&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;POWERPC32&quot; &quot;default-.text-.globl-:-_-L--0-1-1-1-0&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;POWERPC64&quot; &quot;default-.text-.globl-:-_-L--0-1-1-1-0&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;POWERPC64&quot; &quot;default-.text-.globl-:-.-.L-_at_-1-1-0-1-1&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;POWERPC64&quot; &quot;default-.text-.globl-:-.-.L-_at_-1-1-0-1-0&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;POWERPC64&quot; &quot;aix-.csect .text[PR]-.globl-:-.-L--0-1-0-1-0&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;SPARC&quot; &quot;default-.text-.globl-:--.L-#-1-0-1-0-0&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;SPARCV9_32&quot; &quot;default-.text-.globl-:--.L-#-1-0-1-1-0&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;SPARCV9_64&quot; &quot;default-.text-.globl-:--.L-#-1-0-1-1-0&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;MIPS&quot; &quot;default-.text-.globl-:--L--1-1-1-1-0&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;MIPS&quot; &quot;default-.text-.globl-:--L--1-1-1-1-0&quot;
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22560/ompi/opal/asm'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22560/ompi/opal/asm'
</span><br>
<span class="quotelev1">&gt;  (cd datatype &amp;&amp; make  top_distdir=../../openmpi-1.7a1r22560 distdir=../../openmpi-1.7a1r22560/opal/datatype \
</span><br>
<span class="quotelev1">&gt;      am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22560/ompi/opal/datatype'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22560/ompi/opal/datatype'
</span><br>
<span class="quotelev1">&gt;  (cd etc &amp;&amp; make  top_distdir=../../openmpi-1.7a1r22560 distdir=../../openmpi-1.7a1r22560/opal/etc \
</span><br>
<span class="quotelev1">&gt;      am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22560/ompi/opal/etc'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22560/ompi/opal/etc'
</span><br>
<span class="quotelev1">&gt;  (cd event &amp;&amp; make  top_distdir=../../openmpi-1.7a1r22560 distdir=../../openmpi-1.7a1r22560/opal/event \
</span><br>
<span class="quotelev1">&gt;      am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22560/ompi/opal/event'
</span><br>
<span class="quotelev1">&gt; make[2]: *** No rule to make target `WIN32-Code/misc.c', needed by `distdir'.  Stop.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22560/ompi/opal/event'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [distdir] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22560/ompi/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [distdir] Error 1
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; testing mailing list
</span><br>
<span class="quotelev1">&gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7377.php">Joshua Hursey: "Re: [OMPI devel] New feature for SVN commit messages"</a>
<li><strong>Previous message:</strong> <a href="7375.php">hu yaohui: "[OMPI devel] how do openmpi organize network components?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7380.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
