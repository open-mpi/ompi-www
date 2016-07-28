<?
$subject_val = "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 10:26:54 2013" -->
<!-- isoreceived="20131106152654" -->
<!-- sent="Wed, 6 Nov 2013 08:26:53 -0700" -->
<!-- isosent="20131106152653" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme" -->
<!-- id="20131106152653.GF37395_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="09AFA674-CC70-452C-B1ED-20813B7D2BC3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-06 10:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13205.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Previous message:</strong> <a href="13203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies"</a>
<li><strong>In reply to:</strong> <a href="13192.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13285.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13285.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov 06, 2013 at 02:06:15AM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Nov 5, 2013, at 2:59 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have a question regarding the extension of this concept to multi-BTL
</span><br>
<span class="quotelev2">&gt; &gt; runs. Granted we will have to have a local indexing of BTL (I'm not
</span><br>
<span class="quotelev2">&gt; &gt; concerned about this). But how do we ensure the naming is globally
</span><br>
<span class="quotelev2">&gt; &gt; consistent (in the sense that all processes in the job will agree that
</span><br>
<span class="quotelev2">&gt; &gt; usnic0 is index 0) even when we have a heterogeneous environment?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The MPI_T pvars are local-only.  So even if index 0 is usnic_0 in proc A, but index 0 is usnic_3 in proc B, it shouldn't matter.  More specifically: these values only have meaning within the process from which they were gathered.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess I'm trying to say that there's no need to ensure globally consistent ordering between processes.  ...unless I'm missing something?
</span><br>
<p>There is no need to ensure global consistency unless you declare the pvar to
<br>
have a global scope (MCA_BASE_VAR_SCOPE_GROUP, MCA_BASE_VAR_SCOPE_GROUP_EQ,
<br>
MCA_BASE_VAR_SCOPE_ALL, or MCA_BASE_VAR_SCOPE_ALL_EQ.)
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13205.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Previous message:</strong> <a href="13203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies"</a>
<li><strong>In reply to:</strong> <a href="13192.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13285.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13285.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
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
