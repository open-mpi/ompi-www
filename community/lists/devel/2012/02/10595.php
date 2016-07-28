<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 24 06:11:17 2012" -->
<!-- isoreceived="20120224111117" -->
<!-- sent="Fri, 24 Feb 2012 03:11:11 -0800" -->
<!-- isosent="20120224111111" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E8230AF64_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="226CE92A-2775-49FA-86E5-2D0B87458CF9_at_cisco.com" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-24 06:11:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10596.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<li><strong>Previous message:</strong> <a href="10594.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<li><strong>In reply to:</strong> <a href="10594.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10596.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<li><strong>Reply:</strong> <a href="10596.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff:
<br>
<p>It is set in opal/config/opal_configure_options.m4
<br>
<p><p><p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Jeffrey Squyres
</span><br>
<span class="quotelev1">&gt;Sent: Friday, February 24, 2012 6:07 AM
</span><br>
<span class="quotelev1">&gt;To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Rolf --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In looking at configure.m4, where does $CUDA_SUPPORT_41 get set?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    AS_IF([test &quot;x$CUDA_SUPPORT_41&quot; = &quot;x1&quot;]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Feb 23, 2012, at 9:13 PM, rolfv_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: rolfv
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-02-23 21:13:33 EST (Thu, 23 Feb 2012) New Revision: 26039
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26039">https://svn.open-mpi.org/trac/ompi/changeset/26039</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; New btl that extends sm btl to support GPU transfers within a node.
</span><br>
<span class="quotelev2">&gt;&gt; Uses new CUDA IPC support.  Also, a few minor changes in PML to take
</span><br>
<span class="quotelev2">&gt;&gt; advantage of it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This code has no effect unless user asks for it explicitly via
</span><br>
<span class="quotelev2">&gt;&gt; configure arguments.  Otherwise, it is either #ifdef'ed out or not
</span><br>
<span class="quotelev2">&gt;&gt; compiled.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Added:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/contrib/check-btl-sm-diffs.pl   (contents, props changed)
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/   (props changed)
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda.c
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda.h
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda_component.c
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda_endpoint.h
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda_fifo.h
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda_frag.c
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda_frag.h
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/configure.m4
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/help-mpi-btl-smcuda.txt
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_cuda.c
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/btl.h                 |    14 ++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/pml/ob1/Makefile.am       |     7 +++++++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.c |    32
</span><br>
<span class="quotelev1">&gt;++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c |    10 +++++++++-
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h |    17 +++++++++++------
</span><br>
<span class="quotelev2">&gt;&gt;   5 files changed, 73 insertions(+), 7 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10596.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<li><strong>Previous message:</strong> <a href="10594.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<li><strong>In reply to:</strong> <a href="10594.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10596.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<li><strong>Reply:</strong> <a href="10596.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
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
