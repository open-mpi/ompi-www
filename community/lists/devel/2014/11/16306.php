<?
$subject_val = "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 12:42:08 2014" -->
<!-- isoreceived="20141112174208" -->
<!-- sent="Wed, 12 Nov 2014 10:42:07 -0700" -->
<!-- isosent="20141112174207" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is enabled" -->
<!-- id="20141112174207.GA6508_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54633CC8.90605_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is enabled<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 12:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16307.php">SCC: "[OMPI devel] Error in version 1.8.3?!"</a>
<li><strong>Previous message:</strong> <a href="16305.php">Nathan Hjelm: "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
<li><strong>In reply to:</strong> <a href="16300.php">Gilles Gouaillardet: "[OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov 12, 2014 at 07:56:08PM +0900, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found (at least) two issues with oshmem put if btl/vader is used with
</span><br>
<span class="quotelev1">&gt; knem enabled :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ oshrun -np 2 --mca btl vader,self ./oshmem_max_reduction
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; SHMEM_ABORT was invoked on rank 0 (pid 11936, host=soleil) with
</span><br>
<span class="quotelev1">&gt; errorcode -1.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [soleil.iferc.local:11934] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt; help-shmem-api.txt / shmem-abort
</span><br>
<span class="quotelev1">&gt; [soleil.iferc.local:11934] Set MCA parameter &quot;orte_base_help_aggregate&quot;
</span><br>
<span class="quotelev1">&gt; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the error message is not helpful at all ...
</span><br>
<span class="quotelev1">&gt; the abort happens in the vader btl in mca_btl_vader_put_knem
</span><br>
<span class="quotelev1">&gt;    if (OPAL_UNLIKELY(0 != ioctl (mca_btl_vader.knem_fd,
</span><br>
<span class="quotelev1">&gt; KNEM_CMD_INLINE_COPY, &amp;icopy))) {
</span><br>
<span class="quotelev1">&gt;         return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; ioctl fails with EACCES
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the root cause is the symmetric memory was &quot;prepared&quot; with
</span><br>
<span class="quotelev1">&gt; vader_prepare_src that uses
</span><br>
<span class="quotelev1">&gt; knem_cr.protection = PROT_READ;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a trivial workaround (probably not good for production) is to
</span><br>
<span class="quotelev1">&gt; knem_cr.protection = PROT_READ|PROT_WRITE;
</span><br>
<p>I should have commented on this earlier. I think this is the appropriate
<br>
fix for 1.8. There is no way with the old btl interface to register a
<br>
region for both remote read and remote write. The openib btl gets around
<br>
this by always registering for read and write.
<br>
<p>The new btl interface does not have this problem :). Permissions are
<br>
specified when the region is registered... Though I still need to work
<br>
in modifications to the mpool to make sure flags get passed down to the
<br>
mpool if the btl chooses to use one.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16306/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16307.php">SCC: "[OMPI devel] Error in version 1.8.3?!"</a>
<li><strong>Previous message:</strong> <a href="16305.php">Nathan Hjelm: "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
<li><strong>In reply to:</strong> <a href="16300.php">Gilles Gouaillardet: "[OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
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
