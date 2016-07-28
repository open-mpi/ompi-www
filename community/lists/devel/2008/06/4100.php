<?
$subject_val = "Re: [OMPI devel] some Makefile.am questions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 21:21:13 2008" -->
<!-- isoreceived="20080606012113" -->
<!-- sent="Thu, 5 Jun 2008 21:21:03 -0400" -->
<!-- isosent="20080606012103" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] some Makefile.am questions" -->
<!-- id="8B87AC68-5771-499C-8584-D512C9705D00_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080604211531.GD16961_at_ins.uni-bonn.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-05 21:21:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4101.php">Ralf Wildenhues: "Re: [OMPI devel] some Makefile.am questions"</a>
<li><strong>Previous message:</strong> <a href="4099.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="4095.php">Ralf Wildenhues: "[OMPI devel] some Makefile.am questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4101.php">Ralf Wildenhues: "Re: [OMPI devel] some Makefile.am questions"</a>
<li><strong>Reply:</strong> <a href="4101.php">Ralf Wildenhues: "Re: [OMPI devel] some Makefile.am questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 4, 2008, at 5:15 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; 1) This is from test/Makefile.am:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- snip ---
</span><br>
<span class="quotelev1">&gt; # This should be libsupport.a, not libsupport.la.  Automake doesn't
</span><br>
<span class="quotelev1">&gt; # support check_LTLIBRARIES, as technically you have to install a
</span><br>
<span class="quotelev1">&gt; # shared library before you can use it.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; check_LIBRARIES = libsupport.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libsupport_a_SOURCES = \
</span><br>
<span class="quotelev1">&gt; --- snip ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The statement in the comment is not true; Automake supports
</span><br>
<span class="quotelev1">&gt; check_LTLIBRARIES, and they don't have to be installed before use
</span><br>
<span class="quotelev1">&gt; either.  What may be confusing is that, by default, check_LTLIBRARIES
</span><br>
<span class="quotelev1">&gt; will be convenience archives rather than shared libraries.  If you  
</span><br>
<span class="quotelev1">&gt; want
</span><br>
<span class="quotelev1">&gt; to have an uninstalled shared library for testing, then you can use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; check_LTLIBRARIES = libsupport.la
</span><br>
<span class="quotelev1">&gt; # induce libtool to create a shared library:
</span><br>
<span class="quotelev1">&gt; libsupport_la_LDFLAGS = -rpath /nowhere
</span><br>
<span class="quotelev1">&gt; libsupport_la_SOURCES = \
</span><br>
<span class="quotelev1">&gt;        ...
</span><br>
<p>Ah, good to know.  Other than the comment being wrong, is this a  
<br>
problem?
<br>
<p><span class="quotelev1">&gt; 2) test/dss/ has only a Makefile with 'CC = mpicc' hardcoded.  That
</span><br>
<span class="quotelev1">&gt; looks like it won't use the correct (uninstalled) mpicc but requires a
</span><br>
<span class="quotelev1">&gt; prior 'make install'.  Not sure whether that's intentional.
</span><br>
<p>It is actually; these tests are always manually created by a  
<br>
developer.  Our &quot;make check&quot; framework is not very complete.  Maybe  
<br>
someday...
<br>
<p><span class="quotelev1">&gt; 3) in opal/mca/paffinity/linux/plpa/src/plpa-taskset/Makefile.am,  
</span><br>
<span class="quotelev1">&gt; there
</span><br>
<span class="quotelev1">&gt; are some manual dependencies listed that should not be necessary, as
</span><br>
<span class="quotelev1">&gt; Automake should treat bison/yacc generated files correctly.  IOW, the
</span><br>
<span class="quotelev1">&gt; patch below, which simplifies things slightly, should still generate a
</span><br>
<span class="quotelev1">&gt; functional Makefile.  If it doesn't, I'd like to hear about it  
</span><br>
<span class="quotelev1">&gt; (because
</span><br>
<span class="quotelev1">&gt; that could be an Automake bug).
</span><br>
<p>Thanks -- fixed!  (I'm not sure why there were there to begin with)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4101.php">Ralf Wildenhues: "Re: [OMPI devel] some Makefile.am questions"</a>
<li><strong>Previous message:</strong> <a href="4099.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="4095.php">Ralf Wildenhues: "[OMPI devel] some Makefile.am questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4101.php">Ralf Wildenhues: "Re: [OMPI devel] some Makefile.am questions"</a>
<li><strong>Reply:</strong> <a href="4101.php">Ralf Wildenhues: "Re: [OMPI devel] some Makefile.am questions"</a>
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
