<?
$subject_val = "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 10:22:37 2014" -->
<!-- isoreceived="20140211152237" -->
<!-- sent="Tue, 11 Feb 2014 15:22:35 +0000" -->
<!-- isosent="20140211152235" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset" -->
<!-- id="B1D2F96C-285F-4BF2-AFF1-14D949A33B4C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F8708667-FBE7-48FE-8ADD-F89D91564C4C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-11 10:22:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14101.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14099.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14083.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2014, at 6:14 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As a side effect, this means that -- for 32 bit builds -- we will not support large filesystems well (e.g., filesystems with 64 bit offsets).  BlueGene is an example of such a system (not that OMPI supports BlueGene, but...).
</span><br>
<p>To clarify and head off unnecessary quibbling, I'll point out that by &quot;BlueGene&quot;, Jeff means &quot;Blue Gene/P&quot; (/Q is 64-bit).  This issue applies to any machine with 32-bit addresses that might want to access files larger than 2 GiB.
<br>
<p><span class="quotelev1">&gt; Specifically: for 32 bit builds, we'll only allow MPI_Offset to be 32 bits.  I don't think that this is a major issue, because 32 bit builds are not a huge issue for the OMPI community, but I raise the point in the spirit of full disclosure.  Fixing it to allow 32 bit MPI_Aint but 64 bit MPI_Offset and MPI_Count would likely mean re-tooling the PML/BML/BTL/convertor infrastructure to use something other than size_t, and I have zero desire to do that!  (please, no OMPI vendor reveal that they're going to seriously build giant 32 bit systems...)
</span><br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14101.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14099.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14083.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
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
