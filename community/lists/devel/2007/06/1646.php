<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 16:23:45 2007" -->
<!-- isoreceived="20070607202345" -->
<!-- sent="Thu, 7 Jun 2007 23:23:38 +0300" -->
<!-- isosent="20070607202338" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768" -->
<!-- id="20070607202338.GE28796_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BDBDE004-50AD-4A55-88FA-6C5086D9A867_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-06-07 16:23:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1647.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1645.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1639.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1581.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jun 07, 2007 at 02:38:51PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 7, 2007, at 1:28 PM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;On Thu, Jun 07, 2007 at 11:11:12AM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;) I expect you to revise the patch in order to propose a generic
</span><br>
<span class="quotelev3">&gt; &gt;&gt;solution or I'll trigger a vote against the patch. I vote to be
</span><br>
<span class="quotelev3">&gt; &gt;&gt;backed out of the trunk as it export way to much knowledge from the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Open IB BTL into the PML layer.
</span><br>
<span class="quotelev2">&gt; &gt;The patch solves real problem. If we want to back it out we need to  
</span><br>
<span class="quotelev2">&gt; &gt;find
</span><br>
<span class="quotelev2">&gt; &gt;another solution. I also didn't like this change too much, but I  
</span><br>
<span class="quotelev2">&gt; &gt;thought
</span><br>
<span class="quotelev2">&gt; &gt;about other solutions and haven't found something better that what
</span><br>
<span class="quotelev2">&gt; &gt;Galen did. If you have something in mind lets discuss it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, I didn't really investigate this matter, as for all devices  
</span><br>
<span class="quotelev1">&gt; where I work this never happens. What really bother me, and which is  
</span><br>
<span class="quotelev1">&gt; not as Galen describe it is the following line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;frag-&gt;base.order = order
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As the value of &quot;order&quot; come from the PML level and the Open IB BTL  
</span><br>
The intention is that most of the time PML will use NO_ORDER, but
<br>
sometimes order is important.
<br>
<p><span class="quotelev1">&gt; use it without any change, to me it means that some knowledge  
</span><br>
<span class="quotelev1">&gt; belonging to the BTL (BTL_OPENIB_LP_QP is clearly Open IB related  
</span><br>
<span class="quotelev1">&gt; isn't it?) has ben exported to the PML. You can turn it any way you  
</span><br>
BTL_OPENIB_LP_QP is never used in PML code. It just like some kind of
<br>
cookie that is transparent to PML. You don't claim that we expose BTL
<br>
internals if BTL setups callback for PML to use, don't you?
<br>
<p><span class="quotelev1">&gt; want, this clearly means that the PML is able to give direct orders  
</span><br>
<span class="quotelev1">&gt; to the BTL which allow it to put the fragment in the high or low  
</span><br>
<span class="quotelev1">&gt; priority queue (which is a VERY Open IB feature).
</span><br>
OpenIB and UDAPL are only two BTLs that can reorder packets currently, so
<br>
we have two choses here. We can prohibit from BTL to reorder packets or we
<br>
have to provide a way to insure ordering between certain packets. The
<br>
former will limit BTL interface IMHO.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, if we create a constant MCA_BTL_HP_QUEUE it might look better.  
</span><br>
<span class="quotelev1">&gt; But, again as all others BTLs will completely ignore this, it look  
</span><br>
<span class="quotelev1">&gt; like a Open IB feature exported to the PML to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Galen currently works on adding arbitrary number of different sized
<br>
queues in openib BTL. There will be much more then two queues. This kind
<br>
of thing is really internal to BTL.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1647.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1645.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1639.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1581.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
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
