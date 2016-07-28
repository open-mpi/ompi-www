<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 24 06:16:05 2012" -->
<!-- isoreceived="20120224111605" -->
<!-- sent="Fri, 24 Feb 2012 06:16:00 -0500" -->
<!-- isosent="20120224111600" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039" -->
<!-- id="DD3E8B3B-53D6-4383-8823-4ADE206E6770_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E8230AF64_at_HQMAIL02.nvidia.com" -->
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
<strong>Date:</strong> 2012-02-24 06:16:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10597.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc2"</a>
<li><strong>Previous message:</strong> <a href="10595.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<li><strong>In reply to:</strong> <a href="10595.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, I see -- it was already there before this commit.
<br>
<p>FWIW: you might want to move all those CUDA m4 tests into a separate file, like opal/config/opal_check_cuda (or ompi, if CUDA is only used in the ompi layer?).
<br>
<p><p><p>On Feb 24, 2012, at 6:11 AM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is set in opal/config/opal_configure_options.m4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Jeffrey Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, February 24, 2012 6:07 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rolf --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In looking at configure.m4, where does $CUDA_SUPPORT_41 get set?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   AS_IF([test &quot;x$CUDA_SUPPORT_41&quot; = &quot;x1&quot;]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 23, 2012, at 9:13 PM, rolfv_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: rolfv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2012-02-23 21:13:33 EST (Thu, 23 Feb 2012) New Revision: 26039
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26039">https://svn.open-mpi.org/trac/ompi/changeset/26039</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New btl that extends sm btl to support GPU transfers within a node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Uses new CUDA IPC support.  Also, a few minor changes in PML to take
</span><br>
<span class="quotelev3">&gt;&gt;&gt; advantage of it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This code has no effect unless user asks for it explicitly via
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure arguments.  Otherwise, it is either #ifdef'ed out or not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Added:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/contrib/check-btl-sm-diffs.pl   (contents, props changed)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/   (props changed)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/Makefile.am
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/btl_smcuda.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/btl_smcuda.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/btl_smcuda_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/btl_smcuda_endpoint.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/btl_smcuda_fifo.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/btl_smcuda_frag.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/btl_smcuda_frag.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/configure.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/help-mpi-btl-smcuda.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/pml/ob1/pml_ob1_cuda.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/btl.h                 |    14 ++++++++++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/pml/ob1/Makefile.am       |     7 +++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.c |    32
</span><br>
<span class="quotelev2">&gt;&gt; ++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c |    10 +++++++++-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h |    17 +++++++++++------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  5 files changed, 73 insertions(+), 7 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10597.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc2"</a>
<li><strong>Previous message:</strong> <a href="10595.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
<li><strong>In reply to:</strong> <a href="10595.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26039"</a>
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
