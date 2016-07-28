<?
$subject_val = "Re: [OMPI users] ABI stabilization/versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 09:09:56 2010" -->
<!-- isoreceived="20100125140956" -->
<!-- sent="Mon, 25 Jan 2010 09:09:47 -0500" -->
<!-- isosent="20100125140947" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ABI stabilization/versioning" -->
<!-- id="1DE1A9C7-2690-43D3-A00F-251794C8AC23_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87r5pebcz5.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] ABI stabilization/versioning<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 09:09:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11867.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Previous message:</strong> <a href="11865.php">Jeff Squyres: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>In reply to:</strong> <a href="11862.php">Dave Love: "[OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11872.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11872.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11889.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 25, 2010, at 7:11 AM, Dave Love wrote:
<br>
<p><span class="quotelev1">&gt; What's the status of (stabilizing and?) versioning libraries?  If I
</span><br>
<span class="quotelev1">&gt; recall correctly, it was supposed to be defined as fixed for some
</span><br>
<span class="quotelev1">&gt; release period as of 1.3.something.
</span><br>
<p>Correct.  We started with 1.3.2 or 1.3.3, IIRC...?  I'd have to go back and check to be sure.
<br>
<p>To be clear, however, we are only versioning the MPI libraries (as you noted, libmpi went to 0.0.1).  That is, the hidden sub-libraries (libopen-rte and libopen-pal) are still NOT versioned for complex, icky reasons (see <a href="https://svn.open-mpi.org/trac/ompi/ticket/2092">https://svn.open-mpi.org/trac/ompi/ticket/2092</a> for more details).  The short version is that the possibility of static linking really fouls up the scheme, and we haven't figured out a good way around this yet.  :-(
<br>
<p>To be absolutely crystal clear: OMPI's MPI shared libraries now have .so versioning enabled, but you still can't install two copies of Open MPI into the same $prefix (without overriding a bunch of other directory names, that is, like $pkglibdir, etc.).  This is because Open MPI has a bunch of files that are not named in relation to OMPI's version number (e.g., $includedir/mpi.h, $mandir/man3/*, $pkgdir/*, libopen-rte.so, etc.).  That is, the lack of .so versioning in libopen-rte and libopen-pal are only two of (unfortunately) many reasons that you can't install 2 different versions of Open MPI into the same $prefix.
<br>
<p>Does that make sense?
<br>
<p><span class="quotelev1">&gt; I assumed that the libraries would then be versioned (at least for ELF
</span><br>
<span class="quotelev1">&gt; -- I don't know about other formats) and we could remove a major source
</span><br>
<span class="quotelev1">&gt; of grief from dynamically linking against the wrong thing, and I think
</span><br>
<span class="quotelev1">&gt; Jeff said that would happen.  
</span><br>
<p>Right -- we're using the Libtool shared library versioning scheme.
<br>
<p><span class="quotelev1">&gt; However, the current sources don't seem to
</span><br>
<span class="quotelev1">&gt; be trying to set libtool version info, though I'm not sure what
</span><br>
<span class="quotelev1">&gt; determines them producing .so.0.0.1 instead of .0.0.0 in other binaries
</span><br>
<span class="quotelev1">&gt; I have.  
</span><br>
<p>The top-level VERSION file has text fields that set what the version numbers will be for each of the so libraries.  These numbers get pasted in to various Makefile's in the build process; hence, the LT .so versioning info is included down at the level where each .so library is created (by Libtool).  
<br>
<p>Check out our wiki page about the shared library version numbering: <a href="https://svn.open-mpi.org/trac/ompi/wiki/ReleaseProcedures">https://svn.open-mpi.org/trac/ompi/wiki/ReleaseProcedures</a>.
<br>
<p><span class="quotelev1">&gt; This doesn't seem to have been addressed in the Debian or
</span><br>
<span class="quotelev1">&gt; Fedora packaging, either
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that just an oversight or something dropped, so it could be fixed
</span><br>
<span class="quotelev1">&gt; (modulo historical mess) if someone did the work?  It isn't covered
</span><br>
<span class="quotelev1">&gt; under <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a> or as far as I can
</span><br>
<span class="quotelev1">&gt; tell in the FAQ, and seems important (like plenty of other things, I'm
</span><br>
<span class="quotelev1">&gt; sure!), given how much of a problem it's been for users and admins doing
</span><br>
<span class="quotelev1">&gt; updates.
</span><br>
<p>Good point -- I'll take a to-do to add some text about the shared library versioning scheme in the FAQ and the /versions/ page.  Probably not today, but I should be able to get to it this week.
<br>
<p>Do the links and text I provided above give you enough information / rationale?
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
<li><strong>Next message:</strong> <a href="11867.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Previous message:</strong> <a href="11865.php">Jeff Squyres: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>In reply to:</strong> <a href="11862.php">Dave Love: "[OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11872.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11872.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11889.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
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
