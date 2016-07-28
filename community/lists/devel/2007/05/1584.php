<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 27 12:34:44 2007" -->
<!-- isoreceived="20070527163444" -->
<!-- sent="Sun, 27 May 2007 10:34:33 -0600" -->
<!-- isosent="20070527163433" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14782" -->
<!-- id="5BE0091D-734B-4AC8-B1BE-7E7C4DD61FD5_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200705271125.l4RBPdu4007806_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-27 12:34:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1585.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1583.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14780"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1588.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14782"</a>
<li><strong>Reply:</strong> <a href="1588.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14782"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, we still need  MCA_BTL_FLAGS_FAKE_RDMA , it can be used as  
<br>
a hint for components such as one-sided.
<br>
<p><p>Galen
<br>
<p>On May 27, 2007, at 5:25 AM, gleb_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: gleb
</span><br>
<span class="quotelev1">&gt; Date: 2007-05-27 07:25:39 EDT (Sun, 27 May 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 14782
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/14782">https://svn.open-mpi.org/trac/ompi/changeset/14782</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; No need for MCA_BTL_FLAGS_NEED_ACK any more. As of commit r14768  
</span><br>
<span class="quotelev1">&gt; this is the
</span><br>
<span class="quotelev1">&gt; default behaviour.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/btl.h                   |     3 ---
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_component.c |     3 +--
</span><br>
<span class="quotelev1">&gt;    2 files changed, 1 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/btl.h
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/btl.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/btl.h	2007-05-27 07:25:39 EDT (Sun, 27 May  
</span><br>
<span class="quotelev1">&gt; 2007)
</span><br>
<span class="quotelev1">&gt; @@ -157,9 +157,6 @@
</span><br>
<span class="quotelev1">&gt;  #define MCA_BTL_FLAGS_NEED_ACK 0x10
</span><br>
<span class="quotelev1">&gt;  #define MCA_BTL_FLAGS_NEED_CSUM 0x20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -/* btl can report put/get completion before data hits the other  
</span><br>
<span class="quotelev1">&gt; side */
</span><br>
<span class="quotelev1">&gt; -#define MCA_BTL_FLAGS_FAKE_RDMA 0x40
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  /* btl needs local rdma completion */
</span><br>
<span class="quotelev1">&gt;  #define MCA_BTL_FLAGS_RDMA_COMPLETION 0x80
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_component.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_component.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_component.c	2007-05-27 07:25:39  
</span><br>
<span class="quotelev1">&gt; EDT (Sun, 27 May 2007)
</span><br>
<span class="quotelev1">&gt; @@ -224,8 +224,7 @@
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_module.super.btl_flags = MCA_BTL_FLAGS_PUT |
</span><br>
<span class="quotelev1">&gt;                                         MCA_BTL_FLAGS_SEND_INPLACE |
</span><br>
<span class="quotelev1">&gt;                                         MCA_BTL_FLAGS_NEED_CSUM |
</span><br>
<span class="quotelev1">&gt; -                                       MCA_BTL_FLAGS_NEED_ACK |
</span><br>
<span class="quotelev1">&gt; -                                       MCA_BTL_FLAGS_FAKE_RDMA;
</span><br>
<span class="quotelev1">&gt; +                                       MCA_BTL_FLAGS_NEED_ACK;
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_module.super.btl_bandwidth = 100;
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_module.super.btl_latency = 0;
</span><br>
<span class="quotelev1">&gt;      mca_btl_base_param_register 
</span><br>
<span class="quotelev1">&gt; (&amp;mca_btl_tcp_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1585.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1583.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14780"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1588.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14782"</a>
<li><strong>Reply:</strong> <a href="1588.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14782"</a>
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
