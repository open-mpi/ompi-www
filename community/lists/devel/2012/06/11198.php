<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  u_int32_t typo in nbc_internal.h?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 28 10:09:04 2012" -->
<!-- isoreceived="20120628140904" -->
<!-- sent="Thu, 28 Jun 2012 14:08:39 +0000" -->
<!-- isosent="20120628140839" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  u_int32_t typo in nbc_internal.h?" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD23918E68_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FEBC553.9010808_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  u_int32_t typo in nbc_internal.h?<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-28 10:08:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/07/11199.php">Nathan Hjelm: "[OMPI devel] Trunk compilation broken"</a>
<li><strong>Previous message:</strong> <a href="11197.php">Eugene Loh: "[OMPI devel] u_int32_t typo in nbc_internal.h?"</a>
<li><strong>In reply to:</strong> <a href="11197.php">Eugene Loh: "[OMPI devel] u_int32_t typo in nbc_internal.h?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I think that's right.  Sorry, this is what happens when you use code from Torsten ;).
<br>
<p>I'll fix today.
<br>
<p>Brian
<br>
<p>On Jun 27, 2012, at 8:45 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; ompi/mca/coll/libnbc/nbc_internal.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   259    /* Schedule cache structures/functions */
</span><br>
<span class="quotelev1">&gt;   260    u_int32_t adler32(u_int32_t adler, int8_t *buf, int len);
</span><br>
<span class="quotelev1">&gt;   261    void NBC_SchedCache_args_delete(void *entry);
</span><br>
<span class="quotelev1">&gt;   262    void NBC_SchedCache_args_delete_key_dummy(void *k);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; u_int32_t
</span><br>
<span class="quotelev1">&gt; -&gt;
</span><br>
<span class="quotelev1">&gt; uint32_t
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; perhaps?
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
<p><p>
<br><p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11198/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/07/11199.php">Nathan Hjelm: "[OMPI devel] Trunk compilation broken"</a>
<li><strong>Previous message:</strong> <a href="11197.php">Eugene Loh: "[OMPI devel] u_int32_t typo in nbc_internal.h?"</a>
<li><strong>In reply to:</strong> <a href="11197.php">Eugene Loh: "[OMPI devel] u_int32_t typo in nbc_internal.h?"</a>
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
