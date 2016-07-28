<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  6 10:18:01 2005" -->
<!-- isoreceived="20051206151801" -->
<!-- sent="Tue, 6 Dec 2005 10:17:51 -0500" -->
<!-- isosent="20051206151751" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  [OMPI svn-full] svn:open-mpi r8379 -	trunk/ompi/mca/btl/self" -->
<!-- id="70441422-A17C-4D2E-B121-27EA73230FB6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4395A071.2000903_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-12-06 10:17:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0588.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Previous message:</strong> <a href="0586.php">Tim S. Woodall: "Re:  [OMPI svn-full] svn:open-mpi r8379 -	trunk/ompi/mca/btl/self"</a>
<li><strong>In reply to:</strong> <a href="0586.php">Tim S. Woodall: "Re:  [OMPI svn-full] svn:open-mpi r8379 -	trunk/ompi/mca/btl/self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0591.php">George Bosilca: "Re:  [OMPI svn-full] svn:open-mpi r8379	- trunk/ompi/mca/btl/self"</a>
<li><strong>Reply:</strong> <a href="0591.php">George Bosilca: "Re:  [OMPI svn-full] svn:open-mpi r8379	- trunk/ompi/mca/btl/self"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George -- can you review r8379?
<br>
<p><p>On Dec 6, 2005, at 9:30 AM, Tim S. Woodall wrote:
<br>
<p><span class="quotelev1">&gt; Most definately. Any large sends to self would not deliver
</span><br>
<span class="quotelev1">&gt; the correct data, exhibited in NPB2.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Tim --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does this need to come over to v1.0?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 5, 2005, at 6:36 PM, twoodall_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: twoodall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2005-12-05 18:36:33 -0500 (Mon, 05 Dec 2005)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 8379
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/ompi/mca/btl/self/btl_self.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fix send to self for large messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/self/btl_self.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/btl/self/btl_self.c	2005-12-03 15:38:42 UTC (rev
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8378)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/btl/self/btl_self.c	2005-12-05 23:36:33 UTC (rev
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8379)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -201,7 +201,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* non-contigous data */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    if(ompi_convertor_need_buffers(convertor) || max_data &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_btl_self.btl_max_send_size ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if(ompi_convertor_need_buffers(convertor) || max_data &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_btl_self.btl_max_send_size || reserve != 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MCA_BTL_SELF_FRAG_ALLOC_SEND(frag, rc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         if(NULL == frag) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             return NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -237,7 +237,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             return NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         frag-&gt;segment.seg_addr.pval = iov.iov_base;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        frag-&gt;segment.seg_len = reserve + max_data;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        frag-&gt;segment.seg_len = max_data;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         frag-&gt;base.des_src = &amp;frag-&gt;segment;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         frag-&gt;base.des_src_cnt = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         frag-&gt;base.des_dst = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -326,7 +326,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mca_btl_base_segment_t* dst = des-&gt;des_dst;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     size_t src_cnt = des-&gt;des_src_cnt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     size_t dst_cnt = des-&gt;des_dst_cnt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    unsigned char* src_addr = dst-&gt;seg_addr.pval;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    unsigned char* src_addr = src-&gt;seg_addr.pval;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     size_t src_len = src-&gt;seg_len;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     unsigned char* dst_addr = dst-&gt;seg_addr.pval;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     size_t dst_len = dst-&gt;seg_len;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev2">&gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0588.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Previous message:</strong> <a href="0586.php">Tim S. Woodall: "Re:  [OMPI svn-full] svn:open-mpi r8379 -	trunk/ompi/mca/btl/self"</a>
<li><strong>In reply to:</strong> <a href="0586.php">Tim S. Woodall: "Re:  [OMPI svn-full] svn:open-mpi r8379 -	trunk/ompi/mca/btl/self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0591.php">George Bosilca: "Re:  [OMPI svn-full] svn:open-mpi r8379	- trunk/ompi/mca/btl/self"</a>
<li><strong>Reply:</strong> <a href="0591.php">George Bosilca: "Re:  [OMPI svn-full] svn:open-mpi r8379	- trunk/ompi/mca/btl/self"</a>
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
