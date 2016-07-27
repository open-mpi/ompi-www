<?
$subject_val = "Re: [hwloc-devel] want 1.0rc4?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 01:54:53 2010" -->
<!-- isoreceived="20100504055453" -->
<!-- sent="Tue, 04 May 2010 07:54:47 +0200" -->
<!-- isosent="20100504055447" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] want 1.0rc4?" -->
<!-- id="4BDFB6A7.8080400_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D45958078CD65C429557B4C5F492B6A60770E4C8_at_IS-EX-BEV3.unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] want 1.0rc4?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 01:54:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0957.php">Samuel Thibault: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>Previous message:</strong> <a href="0955.php">Jeff Squyres: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>In reply to:</strong> <a href="0954.php">Christopher Samuel: "Re: [hwloc-devel] want 1.0rc4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0957.php">Samuel Thibault: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>Reply:</strong> <a href="0957.php">Samuel Thibault: "Re: [hwloc-devel] want 1.0rc4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/05/2010 03:57, Christopher Samuel wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 03/05/10 09:57, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1.0rc4 is up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running coccicheck on 1.0rc4 flags up this construct, I presume
</span><br>
<span class="quotelev1">&gt; as an ambiguous construction:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (!topology-&gt;flags &amp; HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's at line 1518 of src/topology.c in hwloc_discover(). The
</span><br>
<span class="quotelev1">&gt; check file simply says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // !x&amp;y combines boolean negation with bitwise and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's also flagged some unchecked malloc()'s in various bits:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thanks a lot, I think I fixed most of these.
<br>
<p><span class="quotelev1">&gt; line 41 of src/misc.c in hwloc_snprintf():
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      str = malloc(size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I am not sure what to do about this one... Is there any value we could
<br>
return without possibly breaking the caller ?
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0956/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0957.php">Samuel Thibault: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>Previous message:</strong> <a href="0955.php">Jeff Squyres: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>In reply to:</strong> <a href="0954.php">Christopher Samuel: "Re: [hwloc-devel] want 1.0rc4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0957.php">Samuel Thibault: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>Reply:</strong> <a href="0957.php">Samuel Thibault: "Re: [hwloc-devel] want 1.0rc4?"</a>
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
