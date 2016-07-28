<?
$subject_val = "Re: [OMPI devel] osu_mbw_mr error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 16:18:08 2014" -->
<!-- isoreceived="20141106211808" -->
<!-- sent="Thu, 6 Nov 2014 14:18:07 -0700" -->
<!-- isosent="20141106211807" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] osu_mbw_mr error" -->
<!-- id="20141106211807.GT6508_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG4F6z_i5QvS=L4=WdMAfJ7HCXWpE-LHTL=BgGht=HO7tG3oFA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] osu_mbw_mr error<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 16:18:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16252.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Previous message:</strong> <a href="16250.php">Joshua Ladd: "[OMPI devel]  osu_mbw_mr error"</a>
<li><strong>In reply to:</strong> <a href="16250.php">Joshua Ladd: "[OMPI devel]  osu_mbw_mr error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16252.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Reply:</strong> <a href="16252.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Nov 06, 2014 at 04:06:23PM -0500, Joshua Ladd wrote:
<br>
<span class="quotelev1">&gt;    Nathan,
</span><br>
<span class="quotelev1">&gt;    Has this bug always been present in OpenIB or is this a recent addition?
</span><br>
<span class="quotelev1">&gt;    If this is regression, I would also be inclined to say that this is a
</span><br>
<p>The bug is as old as the message coalescing feature in the openib
<br>
btl. When the feature was added the openib btl no longer supported
<br>
calling btl_free on descriptors allocated by sendi (a serious bug).
<br>
<p><span class="quotelev1">&gt;    blocker for 1.8.4. This is a SIGNIFICANT bug. Both Howard and I were quite
</span><br>
<span class="quotelev1">&gt;    surprised that all the while this code has been in use at LANL
</span><br>
<span class="quotelev1">&gt;    in production systems, this issue was never discovered. 
</span><br>
<p>Don't know why it suddenly came up but in 1.8.1 we added a inline send
<br>
optimization to the MPI_Isend path. The optimization uses the btl_sendi
<br>
function to get the fragment on the wire without allocating a send
<br>
request. If this fails the btl fragment returned by sendi is released
<br>
with btl_free, a send request is allocated, and the normal send path is
<br>
used. The optimization was tested with the openib btl so I don't know
<br>
why this wasn't caught earlier. My guess is some other change may have
<br>
triggered it.
<br>
<p>We fixed the bug in 1.8.4 by totally disabling message coalescing. The
<br>
feature is meant to game the osu_mbw_mr test and does next to nothing
<br>
for real apps. Additionally, the inline send optimization makes the
<br>
feature less of a win with osu_mbw_mr anyway. We beat mvapich handily on
<br>
LANL systems without message coalescing.
<br>
<p>For master I have a fix that allows the message coalescing feature to
<br>
remain on. This fix will come over with the btl changes. I may backport
<br>
this fix to 1.8.5 as it fixes another long standing bug with message
<br>
coalescing.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16251/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16252.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Previous message:</strong> <a href="16250.php">Joshua Ladd: "[OMPI devel]  osu_mbw_mr error"</a>
<li><strong>In reply to:</strong> <a href="16250.php">Joshua Ladd: "[OMPI devel]  osu_mbw_mr error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16252.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Reply:</strong> <a href="16252.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
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
