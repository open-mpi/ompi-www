<?
$subject_val = "Re: [OMPI users] ABI stabilization/versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 06:22:16 2010" -->
<!-- isoreceived="20100126112216" -->
<!-- sent="Tue, 26 Jan 2010 11:21:48 +0000" -->
<!-- isosent="20100126112148" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ABI stabilization/versioning" -->
<!-- id="87y6jl9kmr.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1DE1A9C7-2690-43D3-A00F-251794C8AC23_at_cisco.com" -->
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
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-26 06:21:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11890.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Previous message:</strong> <a href="11888.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>In reply to:</strong> <a href="11866.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; To be absolutely crystal clear: OMPI's MPI shared libraries now have
</span><br>
<span class="quotelev1">&gt; .so versioning enabled, but you still can't install two copies of Open
</span><br>
<span class="quotelev1">&gt; MPI into the same $prefix (without overriding a bunch of other
</span><br>
<span class="quotelev1">&gt; directory names, that is, like $pkglibdir, etc.).  This is because
</span><br>
<span class="quotelev1">&gt; Open MPI has a bunch of files that are not named in relation to OMPI's
</span><br>
<span class="quotelev1">&gt; version number (e.g., $includedir/mpi.h, $mandir/man3/*, $pkgdir/*,
</span><br>
<span class="quotelev1">&gt; libopen-rte.so, etc.).  That is, the lack of .so versioning in
</span><br>
<span class="quotelev1">&gt; libopen-rte and libopen-pal are only two of (unfortunately) many
</span><br>
<span class="quotelev1">&gt; reasons that you can't install 2 different versions of Open MPI into
</span><br>
<span class="quotelev1">&gt; the same $prefix.
</span><br>
<p>I'd normally expect to install in parallel directories under /opt, in
<br>
which case that's not really a problem.
<br>
<p><span class="quotelev1">&gt; Does that make sense?
</span><br>
<p>Not all, without looking at the link, but I'm glad it is being dealt
<br>
with, thanks.
<br>
<p><span class="quotelev1">&gt; Check out our wiki page about the shared library version numbering:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/ReleaseProcedures">https://svn.open-mpi.org/trac/ompi/wiki/ReleaseProcedures</a>.
</span><br>
<p>Thanks.  Maybe that will indicate how I missed the relevant libtool
<br>
stuff.
<br>
<p><span class="quotelev1">&gt; Do the links and text I provided above give you enough information /
</span><br>
<span class="quotelev1">&gt; rationale?
</span><br>
<p>If not, I'll follow up when I have time.  Thanks for dealing with it.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11890.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Previous message:</strong> <a href="11888.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>In reply to:</strong> <a href="11866.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
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
