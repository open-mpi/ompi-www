<?
$subject_val = "Re: [OMPI devel] Shared library versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 08:44:57 2009" -->
<!-- isoreceived="20090729124457" -->
<!-- sent="Wed, 29 Jul 2009 06:45:00 -0500" -->
<!-- isosent="20090729114500" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Shared library versioning" -->
<!-- id="7666FE86-C071-431B-B9D7-8E4A95A41147_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090728185613.GA9394_at_gmx.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 07:45:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6540.php">Jeff Squyres: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6538.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>In reply to:</strong> <a href="6530.php">Ralf Wildenhues: "Re: [OMPI devel] Shared library versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6542.php">Brian W. Barrett: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Reply:</strong> <a href="6542.php">Brian W. Barrett: "Re: [OMPI devel] Shared library versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 28, 2009, at 1:56 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev2">&gt; &gt; - support files are not versioned (e.g., show_help text files)
</span><br>
<span class="quotelev2">&gt; &gt; - include files are not versioned (e.g., mpi.h)
</span><br>
<span class="quotelev2">&gt; &gt; - OMPI's DSOs actually are versioned, but more work would be needed
</span><br>
<span class="quotelev2">&gt; &gt; in this area to make that versioning scheme work in real world
</span><br>
<span class="quotelev2">&gt; &gt; scenarios
</span><br>
<span class="quotelev2">&gt; &gt; - ...and probably some other things that I'm not thinking of...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can probably solve most of these issues by just versioning the
</span><br>
<span class="quotelev1">&gt; directory names where you put the files; and with some luck, some
</span><br>
<span class="quotelev1">&gt; downstream distribution can achieve this by merely passing a bunch of
</span><br>
<span class="quotelev1">&gt; --foodir=... options to configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is probably true -- we do obey all the Autoconf-specified  
<br>
directories, so overriding --foodir= should work.  It may break things  
<br>
like mpirun --prefix behavior, though.  But I think that the  
<br>
executables would be problematic -- you'd only have 1 mpirun, orted,  
<br>
etc.  OMPI does *not* currently handle the Autoconf --program-*  
<br>
configure options properly.  I confess to not recalling the specific  
<br>
issues, but I recall we had long discussions about them -- the issues  
<br>
are quite tangled and complicated.  And I remember coming to the  
<br>
conclusion &quot;not worth supporting those.&quot;
<br>
<p>FWIW, Chris is probably right that it's far easier to simply install  
<br>
different OMPI versions into different $prefix trees (IMHO).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6540.php">Jeff Squyres: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6538.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>In reply to:</strong> <a href="6530.php">Ralf Wildenhues: "Re: [OMPI devel] Shared library versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6542.php">Brian W. Barrett: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Reply:</strong> <a href="6542.php">Brian W. Barrett: "Re: [OMPI devel] Shared library versioning"</a>
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
