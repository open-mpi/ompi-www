<?
$subject_val = "Re: [OMPI devel] Shared library versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 10:53:23 2009" -->
<!-- isoreceived="20090729145323" -->
<!-- sent="Wed, 29 Jul 2009 10:53:19 -0400 (EDT)" -->
<!-- isosent="20090729145319" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Shared library versioning" -->
<!-- id="alpine.DEB.1.10.0907291050030.28692_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7666FE86-C071-431B-B9D7-8E4A95A41147_at_cisco.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 10:53:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6543.php">Brian W. Barrett: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6541.php">Brian W. Barrett: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>In reply to:</strong> <a href="6539.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 29 Jul 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 28, 2009, at 1:56 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - support files are not versioned (e.g., show_help text files)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - include files are not versioned (e.g., mpi.h)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - OMPI's DSOs actually are versioned, but more work would be needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in this area to make that versioning scheme work in real world
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scenarios
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ...and probably some other things that I'm not thinking of...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can probably solve most of these issues by just versioning the
</span><br>
<span class="quotelev2">&gt;&gt; directory names where you put the files; and with some luck, some
</span><br>
<span class="quotelev2">&gt;&gt; downstream distribution can achieve this by merely passing a bunch of
</span><br>
<span class="quotelev2">&gt;&gt; --foodir=... options to configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is probably true -- we do obey all the Autoconf-specified directories, 
</span><br>
<span class="quotelev1">&gt; so overriding --foodir= should work.  It may break things like mpirun 
</span><br>
<span class="quotelev1">&gt; --prefix behavior, though.  But I think that the executables would be 
</span><br>
<span class="quotelev1">&gt; problematic -- you'd only have 1 mpirun, orted, etc.  OMPI does *not* 
</span><br>
<span class="quotelev1">&gt; currently handle the Autoconf --program-* configure options properly.  I 
</span><br>
<span class="quotelev1">&gt; confess to not recalling the specific issues, but I recall we had long 
</span><br>
<span class="quotelev1">&gt; discussions about them -- the issues are quite tangled and complicated.  And 
</span><br>
<span class="quotelev1">&gt; I remember coming to the conclusion &quot;not worth supporting those.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, Chris is probably right that it's far easier to simply install 
</span><br>
<span class="quotelev1">&gt; different OMPI versions into different $prefix trees (IMHO).
</span><br>
<p>Agreeed.  I was looking at the versioning of shared libraries not as a way 
<br>
to allow multiple installs in the same prefix, but to allow users to know 
<br>
when it was time to recompile their application.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6543.php">Brian W. Barrett: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6541.php">Brian W. Barrett: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>In reply to:</strong> <a href="6539.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
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
