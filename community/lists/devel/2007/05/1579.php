<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 27 09:49:19 2007" -->
<!-- isoreceived="20070527134919" -->
<!-- sent="Sun, 27 May 2007 16:49:11 +0300" -->
<!-- isosent="20070527134911" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768" -->
<!-- id="20070527134911.GB4715_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="96E1AA23-E03A-4824-95FA-1AB192225030_at_lanl.gov" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-27 09:49:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1580.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1578.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1578.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1580.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1580.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1581.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, May 25, 2007 at 09:31:33PM -0600, Galen Shipman wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 24, 2007, at 2:48 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I see the problem this patch try to solve, but I fail to correctly  
</span><br>
<span class="quotelev2">&gt; &gt; understand the implementation. The patch affect all PML and BTL in  
</span><br>
<span class="quotelev2">&gt; &gt; the code base by adding one more argument to some of the most often  
</span><br>
<span class="quotelev2">&gt; &gt; called functions. And there is only one BTL (openib) who seems to  
</span><br>
<span class="quotelev2">&gt; &gt; use it while all others completely ignore it. Moreover, there seems  
</span><br>
<span class="quotelev2">&gt; &gt; to be already a very similar mechanism based on the  
</span><br>
<span class="quotelev2">&gt; &gt; MCA_BTL_DES_FLAGS_PRIORITY flag, which can be set by the PML level  
</span><br>
<span class="quotelev2">&gt; &gt; into the btl_descriptor.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So what's the difference between the additional argument and a  
</span><br>
<span class="quotelev2">&gt; &gt; correct usage of the MCA_BTL_DES_FLAGS_PRIORITY flag ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that MCA_BTL_DES_FLAGS_PRIORITY  was meant to indicate  
</span><br>
<span class="quotelev1">&gt; that the fragment was higher priority, but the fragment isn't higher  
</span><br>
<span class="quotelev1">&gt; priority. It simply needs to be ordered w.r.t. a previous fragment,  
</span><br>
<span class="quotelev1">&gt; an RDMA in this case.
</span><br>
But after the change priority flags is totally ignored.
<br>
<p><span class="quotelev1">&gt; This being said, we could have just added an rdma fin flag, but this  
</span><br>
<span class="quotelev1">&gt; would mix protocol a bit too much between the BTL and the PML in my  
</span><br>
<span class="quotelev1">&gt; opinion.
</span><br>
<span class="quotelev1">&gt; What we have with this fix is that the BTL can assign an order tag to  
</span><br>
<span class="quotelev1">&gt; any descriptor if it wishes, this order tag is only valid after a  
</span><br>
<span class="quotelev1">&gt; call to btl_send or btl_put/get. This order tag can then be used to  
</span><br>
With current code this is not the case. Order tag is set during a fragment
<br>
allocation. It seems wrong according to your description. Attached patch fixes
<br>
this. If no specific ordering tag is provided to allocation function order of
<br>
the fragment is set to be MCA_BTL_NO_ORDER. After call to send/put/get order
<br>
is set to whatever QP was used for communication. If order is set before send call
<br>
it is used to choose QP.
<br>
<p><pre>
--
			Gleb.

</pre>
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1579/patch.diff">patch.diff</a>
</ul>
<!-- attachment="patch.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1580.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1578.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1578.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1580.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1580.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1581.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
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
