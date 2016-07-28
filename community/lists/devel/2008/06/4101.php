<?
$subject_val = "Re: [OMPI devel] some Makefile.am questions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 01:43:07 2008" -->
<!-- isoreceived="20080606054307" -->
<!-- sent="Fri, 6 Jun 2008 07:42:43 +0200" -->
<!-- isosent="20080606054243" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] some Makefile.am questions" -->
<!-- id="20080606054242.GB20135_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8B87AC68-5771-499C-8584-D512C9705D00_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] some Makefile.am questions<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-06 01:42:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4102.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Previous message:</strong> <a href="4100.php">Jeff Squyres: "Re: [OMPI devel] some Makefile.am questions"</a>
<li><strong>In reply to:</strong> <a href="4100.php">Jeff Squyres: "Re: [OMPI devel] some Makefile.am questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Jeff Squyres wrote on Fri, Jun 06, 2008 at 03:21:03AM CEST:
<br>
<span class="quotelev1">&gt; On Jun 4, 2008, at 5:15 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 1) This is from test/Makefile.am:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- snip ---
</span><br>
<span class="quotelev2">&gt; &gt; # This should be libsupport.a, not libsupport.la.  Automake doesn't
</span><br>
<span class="quotelev2">&gt; &gt; # support check_LTLIBRARIES, as technically you have to install a
</span><br>
<span class="quotelev2">&gt; &gt; # shared library before you can use it.
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; check_LIBRARIES = libsupport.a
</span><br>
<p><span class="quotelev2">&gt; &gt; The statement in the comment is not true; Automake supports
</span><br>
<span class="quotelev2">&gt; &gt; check_LTLIBRARIES, and they don't have to be installed before use
</span><br>
<span class="quotelev2">&gt; &gt; either.  What may be confusing is that, by default, check_LTLIBRARIES
</span><br>
<span class="quotelev2">&gt; &gt; will be convenience archives rather than shared libraries.  If you  
</span><br>
<span class="quotelev2">&gt; &gt; want
</span><br>
<span class="quotelev2">&gt; &gt; to have an uninstalled shared library for testing, then you can use
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; check_LTLIBRARIES = libsupport.la
</span><br>
<span class="quotelev2">&gt; &gt; # induce libtool to create a shared library:
</span><br>
<span class="quotelev2">&gt; &gt; libsupport_la_LDFLAGS = -rpath /nowhere
</span><br>
<span class="quotelev2">&gt; &gt; libsupport_la_SOURCES = \
</span><br>
<span class="quotelev2">&gt; &gt;        ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, good to know.  Other than the comment being wrong, is this a  
</span><br>
<span class="quotelev1">&gt; problem?
</span><br>
<p>I don't think so.
<br>
<p><span class="quotelev2">&gt; &gt; 2) test/dss/ has only a Makefile with 'CC = mpicc' hardcoded.  That
</span><br>
<span class="quotelev2">&gt; &gt; looks like it won't use the correct (uninstalled) mpicc but requires a
</span><br>
<span class="quotelev2">&gt; &gt; prior 'make install'.  Not sure whether that's intentional.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is actually; these tests are always manually created by a  
</span><br>
<span class="quotelev1">&gt; developer.  Our &quot;make check&quot; framework is not very complete.  Maybe  
</span><br>
<span class="quotelev1">&gt; someday...
</span><br>
<p>Ah, ok.  I somehow thought you must have completed this long ago,
<br>
having a test framework for uninstalled programs and libraries.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4102.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Previous message:</strong> <a href="4100.php">Jeff Squyres: "Re: [OMPI devel] some Makefile.am questions"</a>
<li><strong>In reply to:</strong> <a href="4100.php">Jeff Squyres: "Re: [OMPI devel] some Makefile.am questions"</a>
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
