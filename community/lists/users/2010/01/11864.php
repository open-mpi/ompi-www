<?
$subject_val = "Re: [OMPI users] ABI stabilization/versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 07:55:26 2010" -->
<!-- isoreceived="20100125125526" -->
<!-- sent="Mon, 25 Jan 2010 13:55:17 +0100" -->
<!-- isosent="20100125125517" -->
<!-- name="Manuel Prinz" -->
<!-- email="manuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ABI stabilization/versioning" -->
<!-- id="1264424117.10611.7.camel_at_ce170155.zmb.uni-duisburg-essen.de" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Manuel Prinz (<em>manuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 07:55:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11865.php">Jeff Squyres: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Previous message:</strong> <a href="11863.php">Rafael Arco Arredondo: "[OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="11862.php">Dave Love: "[OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11888.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11888.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am Montag, den 25.01.2010, 12:11 +0000 schrieb Dave Love:
<br>
<span class="quotelev1">&gt; I assumed that the libraries would then be versioned (at least for ELF
</span><br>
<span class="quotelev1">&gt; -- I don't know about other formats) and we could remove a major source
</span><br>
<span class="quotelev1">&gt; of grief from dynamically linking against the wrong thing, and I think
</span><br>
<span class="quotelev1">&gt; Jeff said that would happen.  However, the current sources don't seem to
</span><br>
<span class="quotelev1">&gt; be trying to set libtool version info, though I'm not sure what
</span><br>
<span class="quotelev1">&gt; determines them producing .so.0.0.1 instead of .0.0.0 in other binaries
</span><br>
<span class="quotelev1">&gt; I have.  This doesn't seem to have been addressed in the Debian or
</span><br>
<span class="quotelev1">&gt; Fedora packaging, either
</span><br>
<p>The ABI should be stable since 1.3.2. OMPI 1.4.x does set the libtool
<br>
version info; Versions where bumped to 0.0.1 for libmpi which has no
<br>
effect for dynamic linking.
<br>
<p>Could you please elaborate on what needs to be addressed? Debian does
<br>
not have 1.4.1 yet though I'm planning to upload it really soon. The ABI
<br>
did not change (also not in an incompatible way, AFAICS). If you know of
<br>
any issues, I'd be glad if you could tell us, so we can find a solution
<br>
before any damage is done. Thanks in advance!
<br>
<p>Best regards
<br>
Manuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11865.php">Jeff Squyres: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Previous message:</strong> <a href="11863.php">Rafael Arco Arredondo: "[OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="11862.php">Dave Love: "[OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11888.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11888.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
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
