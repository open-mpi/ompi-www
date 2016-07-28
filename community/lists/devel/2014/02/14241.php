<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in trunk/ompi/mca: btl/usnic rte";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 06:32:59 2014" -->
<!-- isoreceived="20140227113259" -->
<!-- sent="Thu, 27 Feb 2014 12:33:00 +0100" -->
<!-- isosent="20140227113300" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in trunk/ompi/mca: btl/usnic rte" -->
<!-- id="F377B823-F8D7-493F-98A4-A51673928DE6_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20140226222126.6342915FF25_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in trunk/ompi/mca: btl/usnic rte<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 06:33:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14242.php">Ralph Castain: "Re: [OMPI devel] compile error in v1.7"</a>
<li><strong>Previous message:</strong> <a href="14240.php">Mike Dubman: "[OMPI devel] compile error in v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14244.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Reply:</strong> <a href="14244.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guys,
<br>
<p>I&#146;m concerned about your usage of abort here. Looking at the code I noticed that you call RTE_ABORT deep inside the BTL stack. This is a significant divergence from our current behavior (except for USNIC apparently as the code is now in the 1.7). The BTLs are not deciders, but merely reporters. Any error should be reported upstream, and will be dealt with at that level.
<br>
<p>If you want to pursue such a drastic change in the behavior of Open MPI, you should definitively make it through an RFC.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Feb 26, 2014, at 23:21 , svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt; Date: 2014-02-26 17:21:25 EST (Wed, 26 Feb 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 30860
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30860">https://svn.open-mpi.org/trac/ompi/changeset/30860</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add usnic connectivity-checking agent service.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Basically: since usnic is a connectionless transport, we do not get
</span><br>
<span class="quotelev1">&gt; OS-provided services &quot;for free&quot; that connection-oriented transports
</span><br>
<span class="quotelev1">&gt; get, namely: &quot;hey, I wasn't able to make a connection to peer X&quot;, and
</span><br>
<span class="quotelev1">&gt; &quot;hey, your connection to peer X has died.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This connectivity-checker runs in a separate progress thread in the
</span><br>
<span class="quotelev1">&gt; usnic BTL in local rank 0 on each server.  Upon first send in any
</span><br>
<span class="quotelev1">&gt; process, the connectivty-checker agent will send some UDP pings to the
</span><br>
<span class="quotelev1">&gt; peer to ensure that we can reach it.  If we can't, we'll abort the job
</span><br>
<span class="quotelev1">&gt; with a nice show_help message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's a lengthy comment in btl_usnic_connectivity.h explains the
</span><br>
<span class="quotelev1">&gt; scheme and how it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reviewed by Dave Goodell.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cmr=v1.7.5:ticket=#4253
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14242.php">Ralph Castain: "Re: [OMPI devel] compile error in v1.7"</a>
<li><strong>Previous message:</strong> <a href="14240.php">Mike Dubman: "[OMPI devel] compile error in v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14244.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Reply:</strong> <a href="14244.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
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
