<?
$subject_val = "Re: [OMPI devel] ENOSYS used incorrect in legacy drivers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 10:02:18 2016" -->
<!-- isoreceived="20160429140218" -->
<!-- sent="Fri, 29 Apr 2016 14:02:16 +0000" -->
<!-- isosent="20160429140216" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ENOSYS used incorrect in legacy drivers" -->
<!-- id="3AAACD87-4374-40AC-A2F8-F406DB4D1086_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="85324B38-F05F-4E09-A361-760768FF6318_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ENOSYS used incorrect in legacy drivers<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-29 10:02:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18841.php">Joshua Ladd: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<li><strong>Previous message:</strong> <a href="18839.php">H&#195;&#165;kon Bugge: "[OMPI devel] ENOSYS used incorrect in legacy drivers"</a>
<li><strong>In reply to:</strong> <a href="18839.php">H&#195;&#165;kon Bugge: "[OMPI devel] ENOSYS used incorrect in legacy drivers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!  I've filed <a href="https://github.com/open-mpi/ompi/issues/1607">https://github.com/open-mpi/ompi/issues/1607</a> to follow up.
<br>

<br>
<span class="quotelev1">&gt; On Apr 29, 2016, at 6:43 AM, H&#195;&#165;kon Bugge &lt;hakon.bugge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With patch <a href="https://github.com/torvalds/linux/commit/e15f431fe2d53cd4673510736da7d4fa1090e096">https://github.com/torvalds/linux/commit/e15f431fe2d53cd4673510736da7d4fa1090e096</a>, the use of ENOSYS has been clarified.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt; * This error code is special: arch syscall entry code will return
</span><br>
<span class="quotelev1">&gt; * -ENOSYS if users try to call a syscall that doesn't exist.  To keep
</span><br>
<span class="quotelev1">&gt; * failures of syscalls that really do exist distinguishable from
</span><br>
<span class="quotelev1">&gt; * failures due to attempts to use a nonexistent syscall, syscall
</span><br>
<span class="quotelev1">&gt; * implementations should refrain from returning -ENOSYS.
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; #define ENOSYS          38      /* Invalid system call number */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, legacy HCA drivers returns ENOSYS, for example the mlx4 driver.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI adheres to this, see for example the following code snippet:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_IBV_RESIZE_CQ
</span><br>
<span class="quotelev1">&gt;  else if (cq_size &gt; mca_btl_openib_component.ib_cq_size[cq]){
</span><br>
<span class="quotelev1">&gt;       int rc;
</span><br>
<span class="quotelev1">&gt;       rc = ibv_resize_cq(device-&gt;ib_cq[cq], cq_size);
</span><br>
<span class="quotelev1">&gt;       /* For ConnectX the resize CQ is not implemented and verbs returns -ENOSYS
</span><br>
<span class="quotelev1">&gt;        * but should return ENOSYS. So it is reason for abs */
</span><br>
<span class="quotelev1">&gt;       if(rc &amp;&amp; ENOSYS != abs(rc)) {
</span><br>
<span class="quotelev1">&gt;           BTL_ERROR((&quot;cannot resize completion queue, error: %d&quot;, rc));
</span><br>
<span class="quotelev1">&gt;           return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modern HCA drivers cannot return ENOSYS in this case, because they will not pass checkpatch.pl. See the following patch:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/torvalds/linux/commit/91c9afaf97ee554d2cd3042a5ad01ad21c99e8c4">https://github.com/torvalds/linux/commit/91c9afaf97ee554d2cd3042a5ad01ad21c99e8c4</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, my humble request is that Open MPI also checks for EOPNOTSUPP (the choice of error code can of course be discussed) wherever it checks for ENOSYS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thxs, H&#195;&#165;kon
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18839.php">http://www.open-mpi.org/community/lists/devel/2016/04/18839.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18841.php">Joshua Ladd: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<li><strong>Previous message:</strong> <a href="18839.php">H&#195;&#165;kon Bugge: "[OMPI devel] ENOSYS used incorrect in legacy drivers"</a>
<li><strong>In reply to:</strong> <a href="18839.php">H&#195;&#165;kon Bugge: "[OMPI devel] ENOSYS used incorrect in legacy drivers"</a>
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
