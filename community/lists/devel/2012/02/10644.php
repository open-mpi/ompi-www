<?
$subject_val = "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 13:35:42 2012" -->
<!-- isoreceived="20120229183542" -->
<!-- sent="Wed, 29 Feb 2012 13:35:32 -0500" -->
<!-- isosent="20120229183532" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3" -->
<!-- id="797E1B91-E6F3-4A5E-B06A-DD9A743CBB52_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F4D65E3.4040005_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 13:35:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10645.php">Paul Hargrove: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>Previous message:</strong> <a href="10643.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID"</a>
<li><strong>In reply to:</strong> <a href="10635.php">Paul H. Hargrove: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10645.php">Paul Hargrove: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>Reply:</strong> <a href="10645.php">Paul Hargrove: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2012, at 6:40 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Testing 1.5.5rc3 on a &quot;representative sampling&quot; of my many platforms looks good.
</span><br>
<span class="quotelev1">&gt; In particular, I've retested various platforms that showed any significant problems previously and found them to be fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Though minor, I do see that the following patches I've posted are not applied
</span><br>
<span class="quotelev1">&gt; + Add a Mellanox PCI vendor ID to the device params file
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10615.php">http://www.open-mpi.org/community/lists/devel/2012/02/10615.php</a>
</span><br>
<span class="quotelev1">&gt;    Posted 13 hours ago and not yet on trunk
</span><br>
<p>Just pinged Mellanox for confirmation.  I see no reason to do this, but it is their hardware, so I want them in the loop.
<br>
<p><span class="quotelev1">&gt; + Fix show_help_lex.l to avoid undefined behavior (and silence associated warning from flex)
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10521.php">http://www.open-mpi.org/community/lists/devel/2012/02/10521.php</a>
</span><br>
<span class="quotelev1">&gt;    Was applied to trunk as r25983
</span><br>
<p>Pushed this to v1.6 (because we know that the trailing context is ok in all OMPI cases): CMR #3025.
<br>
<p><span class="quotelev1">&gt; + Reorder includes to avoid &quot;'struct in_addr' declared inside parameter list&quot; warnings
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10484.php">http://www.open-mpi.org/community/lists/devel/2012/02/10484.php</a>
</span><br>
<span class="quotelev1">&gt;    Was applied to trunk as r25984
</span><br>
<p>Pushed this to v1.6: CMR #3026.
<br>
<p><span class="quotelev1">&gt; I am assuming there is no interest in the MIPS atomics fixes, or the PPC64 atomics work-around for an XLC bug.
</span><br>
<span class="quotelev1">&gt; MIPS 1of2: <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10416.php">http://www.open-mpi.org/community/lists/devel/2012/02/10416.php</a>
</span><br>
<span class="quotelev1">&gt; MIPS 2of2: <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10417.php">http://www.open-mpi.org/community/lists/devel/2012/02/10417.php</a>
</span><br>
<span class="quotelev1">&gt; PPC64/XLC: <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10603.php">http://www.open-mpi.org/community/lists/devel/2012/02/10603.php</a>
</span><br>
<span class="quotelev1">&gt; If there *is* interest in these, let me know if there is any assistance I can lend.
</span><br>
<p>There actually is, but I'm ok pushing all of these to v1.6.  I'll file tickets for v1.6.
<br>
<p>So far as I see it, there's just the 1 issue of the Mellanox device ID.  Which, honestly, I'm ok pushing to v1.6 because it's for fairly old Mellanox hardware -- that ID is already in the ConnectX entry.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10645.php">Paul Hargrove: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>Previous message:</strong> <a href="10643.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID"</a>
<li><strong>In reply to:</strong> <a href="10635.php">Paul H. Hargrove: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10645.php">Paul Hargrove: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>Reply:</strong> <a href="10645.php">Paul Hargrove: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
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
