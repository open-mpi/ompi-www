<?
$subject_val = "Re: [OMPI users] debugging performance regressions between versions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 23 06:47:27 2013" -->
<!-- isoreceived="20131023104727" -->
<!-- sent="Wed, 23 Oct 2013 11:47:25 +0100" -->
<!-- isosent="20131023104725" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] debugging performance regressions between versions" -->
<!-- id="87a9i0gt6q.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5A5117ABD18DE547BB3D3FE3D0CB318840D085_at_MBX1.rwth-ad.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] debugging performance regressions between versions<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-23 06:47:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22819.php">Jeff Squyres (jsquyres): "[OMPI users] Get your Open MPI schwag!"</a>
<li><strong>Previous message:</strong> <a href="22817.php">Gerlach, Charles A.: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>In reply to:</strong> <a href="22804.php">Iliev, Hristo: "Re: [OMPI users] debugging performance regressions between versions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Iliev, Hristo&quot; &lt;Iliev_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Hi Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it MPI_ALLTOALL or MPI_ALLTOALLV that runs slower?
</span><br>
<p>Well, the output says MPI_ALLTOALL, but this prompted me to check, and
<br>
it turns out that it's lumping both together.
<br>
<p><span class="quotelev1">&gt; If it is the latter,
</span><br>
<span class="quotelev1">&gt; the reason could be that the default implementation of MPI_ALLTOALLV in
</span><br>
<span class="quotelev1">&gt; 1.6.5 is different from that in 1.5.4. To switch back to the previous one,
</span><br>
<span class="quotelev1">&gt; use:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca coll_tuned_use_dynamic_rules 1 --mca coll_tuned_alltoallv_algorithm 1
</span><br>
<p>Yes, that does it.
<br>
<p>Can someone comment generally on the situations in which the new default
<br>
wins?
<br>
<p>I suspect where I'm seeing it lose (on dual-socket sandybridge, QDR IB)
<br>
is representative of a lot of chemistry code which tends to be a/the
<br>
major consumer of academic HPC cycles.  If so, this probably merits an
<br>
FAQ entry.
<br>
<p><span class="quotelev1">&gt; The logic that selects the MPI_ALLTOALL implementation is the same in both
</span><br>
<span class="quotelev1">&gt; versions, although the pairwise implementation in 1.6.5 is a bit different.
</span><br>
<span class="quotelev1">&gt; The difference should have negligible effects though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that coll_tuned_use_dynamic_rules has to be enabled in order for MCA
</span><br>
<span class="quotelev1">&gt; parameters that allows you to select the algorithms to be registered.
</span><br>
<p>Ah, thanks.  This now seems familiar, but still obscure.
<br>
<p><span class="quotelev1">&gt; Therefore you have use ompi_info as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info --mca coll_tuned_use_dynamic_rules 1 --param coll tuned
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps!
</span><br>
<p>Ja, danke!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22819.php">Jeff Squyres (jsquyres): "[OMPI users] Get your Open MPI schwag!"</a>
<li><strong>Previous message:</strong> <a href="22817.php">Gerlach, Charles A.: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>In reply to:</strong> <a href="22804.php">Iliev, Hristo: "Re: [OMPI users] debugging performance regressions between versions"</a>
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
