<?
$subject_val = "Re: [OMPI devel] Shared library versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 25 13:59:30 2009" -->
<!-- isoreceived="20090725175930" -->
<!-- sent="Sat, 25 Jul 2009 13:59:25 -0400" -->
<!-- isosent="20090725175925" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Shared library versioning" -->
<!-- id="6D7F7FD1-9262-41C9-B09A-7FD5932B3659_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4C6F9CFC-5D2E-46BE-8EF6-93C39C069137_at_sun.com" -->
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
<strong>Date:</strong> 2009-07-25 13:59:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6530.php">Ralf Wildenhues: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Previous message:</strong> <a href="6528.php">Iain Bason: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>In reply to:</strong> <a href="6528.php">Iain Bason: "Re: [OMPI devel] Shared library versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6530.php">Ralf Wildenhues: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Reply:</strong> <a href="6530.php">Ralf Wildenhues: "Re: [OMPI devel] Shared library versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 25, 2009, at 12:59 PM, Iain Bason wrote:
<br>
<p><span class="quotelev2">&gt; &gt; We have talked many times about doing proper versioning for
</span><br>
<span class="quotelev2">&gt; &gt; OMPI's .so libraries (e.g., libmpi.so -- *not* our component DSOs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Forgive me if this has been hashed out, but won't you run into trouble
</span><br>
<span class="quotelev1">&gt; by not versioning the components?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is a good question; it has been discussed a few times, but it's  
<br>
good to get it here on the web archives.  More below.
<br>
<p><span class="quotelev1">&gt; What happens when there are
</span><br>
<span class="quotelev1">&gt; multiple versions of libmpi installed?  The user program will pick up
</span><br>
<span class="quotelev1">&gt; the correct one because of versioning, but how will libmpi pick up the
</span><br>
<span class="quotelev1">&gt; correct versions of the components?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Even with this shared library versioning, you will still only really  
<br>
install one OMPI per directory tree anyway.  The library versioning  
<br>
won't allow you to install N different versions of OMPI in a single  
<br>
tree because of multiple things:
<br>
<p>- support files are not versioned (e.g., show_help text files)
<br>
- include files are not versioned (e.g., mpi.h)
<br>
- OMPI's DSOs actually are versioned, but more work would be needed in  
<br>
this area to make that versioning scheme work in real world scenarios
<br>
- ...and probably some other things that I'm not thinking of...
<br>
<p>We probably could solve all of these problems if we wanted to (and  
<br>
therefore make it safe to install multiple OMPI's in a single  
<br>
directory tree), but there hasn't been much demand for it.  The  
<br>
rationale for library versioning is:
<br>
<p>- We're weird (and lying) for always using 0:0:0 in different releases
<br>
- The rest of the world does shared library versioning
<br>
- I've gotten pushback from Red Hat, Suse, and Debian
<br>
- It'll prevent at least some cases of MPI apps accidentally using an  
<br>
incompatible libmpi
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
<li><strong>Next message:</strong> <a href="6530.php">Ralf Wildenhues: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Previous message:</strong> <a href="6528.php">Iain Bason: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>In reply to:</strong> <a href="6528.php">Iain Bason: "Re: [OMPI devel] Shared library versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6530.php">Ralf Wildenhues: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Reply:</strong> <a href="6530.php">Ralf Wildenhues: "Re: [OMPI devel] Shared library versioning"</a>
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
