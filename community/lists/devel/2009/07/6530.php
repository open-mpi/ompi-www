<?
$subject_val = "Re: [OMPI devel] Shared library versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 14:56:20 2009" -->
<!-- isoreceived="20090728185620" -->
<!-- sent="Tue, 28 Jul 2009 20:56:13 +0200" -->
<!-- isosent="20090728185613" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Shared library versioning" -->
<!-- id="20090728185613.GA9394_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6D7F7FD1-9262-41C9-B09A-7FD5932B3659_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Shared library versioning<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-28 14:56:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6531.php">Josh Hursey: "[OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6529.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>In reply to:</strong> <a href="6529.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6534.php">Chris Samuel: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Reply:</strong> <a href="6534.php">Chris Samuel: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Reply:</strong> <a href="6539.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Jeff Squyres wrote on Sat, Jul 25, 2009 at 07:59:25PM CEST:
<br>
<span class="quotelev1">&gt; On Jul 25, 2009, at 12:59 PM, Iain Bason wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We have talked many times about doing proper versioning for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OMPI's .so libraries (e.g., libmpi.so -- *not* our component DSOs).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Forgive me if this has been hashed out, but won't you run into trouble
</span><br>
<span class="quotelev2">&gt; &gt;by not versioning the components?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a good question; it has been discussed a few times, but it's
</span><br>
<span class="quotelev1">&gt; good to get it here on the web archives.  More below.
</span><br>
<p>Blissfully unaware of any prior discussion on this topic, I still cannot
<br>
help but add my two cents here. :-)
<br>
<p><span class="quotelev2">&gt; &gt;What happens when there are
</span><br>
<span class="quotelev2">&gt; &gt;multiple versions of libmpi installed?  The user program will pick up
</span><br>
<span class="quotelev2">&gt; &gt;the correct one because of versioning, but how will libmpi pick up the
</span><br>
<span class="quotelev2">&gt; &gt;correct versions of the components?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even with this shared library versioning, you will still only really
</span><br>
<span class="quotelev1">&gt; install one OMPI per directory tree anyway.  The library versioning
</span><br>
<span class="quotelev1">&gt; won't allow you to install N different versions of OMPI in a single
</span><br>
<span class="quotelev1">&gt; tree because of multiple things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - support files are not versioned (e.g., show_help text files)
</span><br>
<span class="quotelev1">&gt; - include files are not versioned (e.g., mpi.h)
</span><br>
<span class="quotelev1">&gt; - OMPI's DSOs actually are versioned, but more work would be needed
</span><br>
<span class="quotelev1">&gt; in this area to make that versioning scheme work in real world
</span><br>
<span class="quotelev1">&gt; scenarios
</span><br>
<span class="quotelev1">&gt; - ...and probably some other things that I'm not thinking of...
</span><br>
<p>You can probably solve most of these issues by just versioning the
<br>
directory names where you put the files; and with some luck, some
<br>
downstream distribution can achieve this by merely passing a bunch of
<br>
--foodir=... options to configure.
<br>
<p>That is to say, for modules that you actually dlopen, you could just
<br>
ensure that the runtime loader doesn't find these by default, and then
<br>
add some versioned directory to its search path for the right version of
<br>
these files.
<br>
<p>(OMPI probably does all this already; can you tell I have no idea
<br>
whether it does?)
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6531.php">Josh Hursey: "[OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6529.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>In reply to:</strong> <a href="6529.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6534.php">Chris Samuel: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Reply:</strong> <a href="6534.php">Chris Samuel: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Reply:</strong> <a href="6539.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
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
