<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 22 23:00:55 2005" -->
<!-- isoreceived="20051123040055" -->
<!-- sent="Tue, 22 Nov 2005 21:00:42 -0700" -->
<!-- isosent="20051123040042" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re:  mvapi change" -->
<!-- id="59CFC668-F307-41EB-AAB9-FF6299661228_at_cs.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d9a6c06a3d9483ec8c551877830b7c0a_at_open-mpi.org" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-22 23:00:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0544.php">George Bosilca: "ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0542.php">Jeff Squyres: "mvapi change"</a>
<li><strong>In reply to:</strong> <a href="0542.php">Jeff Squyres: "mvapi change"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While this change is technically correct and should remain in the  
<br>
trunk, in both of these cases we are only using the convertor to get  
<br>
the address of the users buffer. The data is contiguous in both these  
<br>
cases so the size should not be changed by the convertor, as far as I  
<br>
know. The short of this, I don't think this needs to be in v1.0 as it  
<br>
is essentially a no-op as max_data = size.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p><p>On Nov 22, 2005, at 3:53 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; George/Tim/Galen --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this need to come over to v1.0?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 22, 2005, at 4:51 PM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2005-11-22 16:51:04 -0500 (Tue, 22 Nov 2005)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 8237
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/mvapi/btl_mvapi.c
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Update the correct sended size.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/mvapi/btl_mvapi.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/mvapi/btl_mvapi.c    2005-11-22 17:24:47  
</span><br>
<span class="quotelev2">&gt;&gt; UTC (rev
</span><br>
<span class="quotelev2">&gt;&gt; 8236)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/mvapi/btl_mvapi.c    2005-11-22 21:51:04  
</span><br>
<span class="quotelev2">&gt;&gt; UTC (rev
</span><br>
<span class="quotelev2">&gt;&gt; 8237)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -294,10 +294,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;          iov.iov_base = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          ompi_convertor_pack(convertor, &amp;iov, &amp;iov_count, &amp;max_data,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;free_after);
</span><br>
<span class="quotelev2">&gt;&gt; +        *size = max_data;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          frag-&gt;segment.seg_len = max_data;
</span><br>
<span class="quotelev2">&gt;&gt;          frag-&gt;segment.seg_addr.pval = iov.iov_base;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;          reg_len = (unsigned char*)vapi_reg-&gt;base_reg.bound -
</span><br>
<span class="quotelev2">&gt;&gt; (unsigned char*)iov.iov_base + 1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          frag-&gt;sg_entry.len = max_data;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -337,8 +337,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;          iov.iov_base = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          ompi_convertor_pack(convertor, &amp;iov, &amp;iov_count, &amp;max_data,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;free_after);
</span><br>
<span class="quotelev2">&gt;&gt; +        *size = max_data;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;          frag-&gt;segment.seg_len = max_data;
</span><br>
<span class="quotelev2">&gt;&gt;          frag-&gt;segment.seg_addr.pval = iov.iov_base;
</span><br>
<span class="quotelev2">&gt;&gt;          frag-&gt;base.des_flags = 0;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0544.php">George Bosilca: "ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0542.php">Jeff Squyres: "mvapi change"</a>
<li><strong>In reply to:</strong> <a href="0542.php">Jeff Squyres: "mvapi change"</a>
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
