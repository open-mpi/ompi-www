<?
$subject_val = "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 21:06:16 2013" -->
<!-- isoreceived="20131106020616" -->
<!-- sent="Wed, 6 Nov 2013 02:06:15 +0000" -->
<!-- isosent="20131106020615" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme" -->
<!-- id="09AFA674-CC70-452C-B1ED-20813B7D2BC3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkWeniXcBmjEM4k6N5qFTE51BU+E72vmNcqn_K2m58Hccg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-05 21:06:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13193.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="13190.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13204.php">Nathan Hjelm: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13204.php">Nathan Hjelm: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 5, 2013, at 2:59 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a question regarding the extension of this concept to multi-BTL
</span><br>
<span class="quotelev1">&gt; runs. Granted we will have to have a local indexing of BTL (I'm not
</span><br>
<span class="quotelev1">&gt; concerned about this). But how do we ensure the naming is globally
</span><br>
<span class="quotelev1">&gt; consistent (in the sense that all processes in the job will agree that
</span><br>
<span class="quotelev1">&gt; usnic0 is index 0) even when we have a heterogeneous environment?
</span><br>
<p>The MPI_T pvars are local-only.  So even if index 0 is usnic_0 in proc A, but index 0 is usnic_3 in proc B, it shouldn't matter.  More specifically: these values only have meaning within the process from which they were gathered.
<br>
<p>I guess I'm trying to say that there's no need to ensure globally consistent ordering between processes.  ...unless I'm missing something?
<br>
<p><span class="quotelev1">&gt; As
</span><br>
<span class="quotelev1">&gt; an example some of our clusters have 1 NIC on some nodes, and 2 on
</span><br>
<span class="quotelev1">&gt; others. Of course we can say we don't guarantee consistent naming, but
</span><br>
<span class="quotelev1">&gt; for tools trying to understand communication issues on distributed
</span><br>
<span class="quotelev1">&gt; environments having a global view is a clear plus.
</span><br>
<p>A good point.  But even with globally consistent ordering, you don't know that usnic_0 in process A communicates with usnic_0 in process B (indeed, we run some QA cases here at Cisco where we deliberately ensure that usnic_X in process A is on the same subnet as usnic_Y in process B, where X!=Y, and everything still works properly).
<br>
<p><span class="quotelev1">&gt; Another question is about the level of details. I wonder if this level
</span><br>
<span class="quotelev1">&gt; of details is really needed, or providing the aggregate pvar will be
</span><br>
<span class="quotelev1">&gt; enough in most cases. The problem I see here is the lack of
</span><br>
<span class="quotelev1">&gt; topological knowledge at the upper level. Seeing a large number of
</span><br>
<span class="quotelev1">&gt; messages on a particular BTL might suggest that something is wrong
</span><br>
<span class="quotelev1">&gt; inside the implementation, when in fact the BTL is the only one
</span><br>
<span class="quotelev1">&gt; connecting a subset of peers. Without us exposing this information,
</span><br>
<span class="quotelev1">&gt; I'm afraid the tool might get the wrong picture ...
</span><br>
<p>I think exposing network-level information can only be used to infer indirect information about the upper-layer MPI semantics.  However, exposing these counters was not intended to be used for MPI-application-level semantic information; it was more intended to expose information about what is happening on your underlying network -- something that OS bypass networks don't otherwise provide.
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
<li><strong>Next message:</strong> <a href="13193.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="13190.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13204.php">Nathan Hjelm: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13204.php">Nathan Hjelm: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
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
