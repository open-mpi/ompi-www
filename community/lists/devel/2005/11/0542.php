<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 22 17:54:03 2005" -->
<!-- isoreceived="20051122225403" -->
<!-- sent="Tue, 22 Nov 2005 17:53:55 -0500" -->
<!-- isosent="20051122225355" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="mvapi change" -->
<!-- id="d9a6c06a3d9483ec8c551877830b7c0a_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200511222151.jAMLp7mG028649_at_magrathea.osl.iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-22 17:53:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0543.php">Galen M. Shipman: "Re:  mvapi change"</a>
<li><strong>Previous message:</strong> <a href="0541.php">Jeff Squyres: "1.0.1rc2 now available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0543.php">Galen M. Shipman: "Re:  mvapi change"</a>
<li><strong>Reply:</strong> <a href="0543.php">Galen M. Shipman: "Re:  mvapi change"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George/Tim/Galen --
<br>
<p>Does this need to come over to v1.0?
<br>
<p><p><p>On Nov 22, 2005, at 4:51 PM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2005-11-22 16:51:04 -0500 (Tue, 22 Nov 2005)
</span><br>
<span class="quotelev1">&gt; New Revision: 8237
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/mvapi/btl_mvapi.c
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Update the correct sended size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/mvapi/btl_mvapi.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/mvapi/btl_mvapi.c	2005-11-22 17:24:47 UTC (rev 
</span><br>
<span class="quotelev1">&gt; 8236)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/mvapi/btl_mvapi.c	2005-11-22 21:51:04 UTC (rev 
</span><br>
<span class="quotelev1">&gt; 8237)
</span><br>
<span class="quotelev1">&gt; @@ -294,10 +294,10 @@
</span><br>
<span class="quotelev1">&gt;          iov.iov_base = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          ompi_convertor_pack(convertor, &amp;iov, &amp;iov_count, &amp;max_data, 
</span><br>
<span class="quotelev1">&gt; &amp;free_after);
</span><br>
<span class="quotelev1">&gt; +        *size = max_data;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          frag-&gt;segment.seg_len = max_data;
</span><br>
<span class="quotelev1">&gt;          frag-&gt;segment.seg_addr.pval = iov.iov_base;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;          reg_len = (unsigned char*)vapi_reg-&gt;base_reg.bound - 
</span><br>
<span class="quotelev1">&gt; (unsigned char*)iov.iov_base + 1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          frag-&gt;sg_entry.len = max_data;
</span><br>
<span class="quotelev1">&gt; @@ -337,8 +337,8 @@
</span><br>
<span class="quotelev1">&gt;          iov.iov_base = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          ompi_convertor_pack(convertor, &amp;iov, &amp;iov_count, &amp;max_data, 
</span><br>
<span class="quotelev1">&gt; &amp;free_after);
</span><br>
<span class="quotelev1">&gt; +        *size = max_data;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;          frag-&gt;segment.seg_len = max_data;
</span><br>
<span class="quotelev1">&gt;          frag-&gt;segment.seg_addr.pval = iov.iov_base;
</span><br>
<span class="quotelev1">&gt;          frag-&gt;base.des_flags = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0543.php">Galen M. Shipman: "Re:  mvapi change"</a>
<li><strong>Previous message:</strong> <a href="0541.php">Jeff Squyres: "1.0.1rc2 now available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0543.php">Galen M. Shipman: "Re:  mvapi change"</a>
<li><strong>Reply:</strong> <a href="0543.php">Galen M. Shipman: "Re:  mvapi change"</a>
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
