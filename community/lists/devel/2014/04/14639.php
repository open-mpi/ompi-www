<?
$subject_val = "Re: [OMPI devel] RFC: Remove heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 14:00:17 2014" -->
<!-- isoreceived="20140428180017" -->
<!-- sent="Mon, 28 Apr 2014 12:00:09 -0600" -->
<!-- isosent="20140428180009" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove heterogeneous support" -->
<!-- id="20140428180009.GC80196_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="08A7714F-2D89-4B93-A479-74F3DDC89538_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove heterogeneous support<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 14:00:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14640.php">Alex Margolin: "Re: [OMPI devel] mosix patches"</a>
<li><strong>Previous message:</strong> <a href="14638.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14638.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14659.php">Joshua Ladd: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14659.php">Joshua Ladd: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 28, 2014 at 01:58:13PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; My concern was more about the &#226;&#128;&#156;what&quot; factor: what do you write on remote memory in a heterogeneous case. I imagine you can either write the converted data or you can convert remotely after writing. Anyway, on both cases you need intermediary buffers to do the conversion (especially if we are looking a size mismatch), so the interest of RMA is quickly vanishing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For now, I would just not support heterogeneous environments for RMA. We might want to add a check at windows creation time, so at least the users are warned.
</span><br>
<p>Good point. I will look at adding a warning now.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14639/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14640.php">Alex Margolin: "Re: [OMPI devel] mosix patches"</a>
<li><strong>Previous message:</strong> <a href="14638.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14638.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14659.php">Joshua Ladd: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14659.php">Joshua Ladd: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
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
