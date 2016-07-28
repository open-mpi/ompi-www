<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 24 06:07:29 2012" -->
<!-- isoreceived="20120224110729" -->
<!-- sent="Fri, 24 Feb 2012 06:07:11 -0500" -->
<!-- isosent="20120224110711" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039" -->
<!-- id="226CE92A-2775-49FA-86E5-2D0B87458CF9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201202240213.q1O2DZ8b002502_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-24 06:07:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10595.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<li><strong>Previous message:</strong> <a href="10593.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10595.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<li><strong>Reply:</strong> <a href="10595.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf --
<br>
<p>In looking at configure.m4, where does $CUDA_SUPPORT_41 get set?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;x$CUDA_SUPPORT_41&quot; = &quot;x1&quot;]
<br>
<p><p>On Feb 23, 2012, at 9:13 PM, rolfv_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rolfv
</span><br>
<span class="quotelev1">&gt; Date: 2012-02-23 21:13:33 EST (Thu, 23 Feb 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26039
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26039">https://svn.open-mpi.org/trac/ompi/changeset/26039</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; New btl that extends sm btl to support GPU transfers within a node.
</span><br>
<span class="quotelev1">&gt; Uses new CUDA IPC support.  Also, a few minor changes in PML to take
</span><br>
<span class="quotelev1">&gt; advantage of it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This code has no effect unless user asks for it explicitly via 
</span><br>
<span class="quotelev1">&gt; configure arguments.  Otherwise, it is either #ifdef'ed out or
</span><br>
<span class="quotelev1">&gt; not compiled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/contrib/check-btl-sm-diffs.pl   (contents, props changed)
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/   (props changed)
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/Makefile.am
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda_component.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda_endpoint.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda_fifo.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda_frag.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda_frag.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/configure.m4
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/help-mpi-btl-smcuda.txt
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_cuda.c
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/btl.h                 |    14 ++++++++++++++                          
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/Makefile.am       |     7 +++++++                                 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.c |    32 ++++++++++++++++++++++++++++++++        
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c |    10 +++++++++-                              
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h |    17 +++++++++++------                       
</span><br>
<span class="quotelev1">&gt;   5 files changed, 73 insertions(+), 7 deletions(-)
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10595.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<li><strong>Previous message:</strong> <a href="10593.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10595.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<li><strong>Reply:</strong> <a href="10595.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
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
