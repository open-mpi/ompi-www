<?
$subject_val = "Re: [OMPI devel] RFC: Fix for 2157 (mpool/rdma change)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 19:49:22 2011" -->
<!-- isoreceived="20111201004922" -->
<!-- sent="Wed, 30 Nov 2011 19:49:17 -0500" -->
<!-- isosent="20111201004917" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Fix for 2157 (mpool/rdma change)" -->
<!-- id="5790A54B-EC8D-4DBC-8810-DB7C6214C014_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1111301720360.68631_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Fix for 2157 (mpool/rdma change)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-30 19:49:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10049.php">Y.MATSUMOTO: "[OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<li><strong>Previous message:</strong> <a href="10047.php">Nathan Hjelm: "[OMPI devel] RFC: Fix for 2157 (mpool/rdma change)"</a>
<li><strong>In reply to:</strong> <a href="10047.php">Nathan Hjelm: "[OMPI devel] RFC: Fix for 2157 (mpool/rdma change)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks good to me.
<br>
<p>One minor suggestion: change the new inline function mca_mpool_rdma_deregister_lru() to return a bool instead of an int (since it only returns 0/1 anyway).
<br>
<p>And the name &quot;lru&quot; makes more sense to me, too.
<br>
<p>As Nathan mentioned, this patch addresses the case where we can evict some still-registered memory from rcache that isn't currently being used:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2157">https://svn.open-mpi.org/trac/ompi/ticket/2157</a>
<br>
<p>But fixing #2157 won't help if we genuinely run out of registered memory (i.e., there's no more registered memory to evict), covered by these two tickets:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2155">https://svn.open-mpi.org/trac/ompi/ticket/2155</a>
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2295">https://svn.open-mpi.org/trac/ompi/ticket/2295</a>
<br>
<p><p>On Nov 30, 2011, at 7:33 PM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; Attached is a fix for ticket 2157. Changes:
</span><br>
<span class="quotelev1">&gt; - Rename the mru_list to lru_list. lru_list make more sense as it is a list of the Least Recently Used cached registrations.
</span><br>
<span class="quotelev1">&gt; - If a memory registration fails because we are out of resources deregister the least recently used cached registration and try again. Give up when the lru is empty.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This patch addresses 2157 but it might also have a positive impact on a number of other tickets related to the exhaustion of registered memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If there are no objections I will apply this change to the trunk and CMR it to 1.4.5 and 1.5.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Timeout: 7 days, Dec 7, 2011
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What: fix for ticket 2157
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Question? Comments? Objections?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan&lt;mpool.patch&gt;_______________________________________________
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10049.php">Y.MATSUMOTO: "[OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<li><strong>Previous message:</strong> <a href="10047.php">Nathan Hjelm: "[OMPI devel] RFC: Fix for 2157 (mpool/rdma change)"</a>
<li><strong>In reply to:</strong> <a href="10047.php">Nathan Hjelm: "[OMPI devel] RFC: Fix for 2157 (mpool/rdma change)"</a>
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
