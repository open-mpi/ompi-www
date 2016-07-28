<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 14:40:06 2007" -->
<!-- isoreceived="20070607184006" -->
<!-- sent="Thu, 7 Jun 2007 14:38:51 -0400" -->
<!-- isosent="20070607183851" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768" -->
<!-- id="BDBDE004-50AD-4A55-88FA-6C5086D9A867_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070607172858.GA28796_at_minantech.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 14:38:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1640.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1638.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1636.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1646.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1646.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 7, 2007, at 1:28 PM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Jun 07, 2007 at 11:11:12AM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; ) I expect you to revise the patch in order to propose a generic
</span><br>
<span class="quotelev2">&gt;&gt; solution or I'll trigger a vote against the patch. I vote to be
</span><br>
<span class="quotelev2">&gt;&gt; backed out of the trunk as it export way to much knowledge from the
</span><br>
<span class="quotelev2">&gt;&gt; Open IB BTL into the PML layer.
</span><br>
<span class="quotelev1">&gt; The patch solves real problem. If we want to back it out we need to  
</span><br>
<span class="quotelev1">&gt; find
</span><br>
<span class="quotelev1">&gt; another solution. I also didn't like this change too much, but I  
</span><br>
<span class="quotelev1">&gt; thought
</span><br>
<span class="quotelev1">&gt; about other solutions and haven't found something better that what
</span><br>
<span class="quotelev1">&gt; Galen did. If you have something in mind lets discuss it.
</span><br>
<p>Well, I didn't really investigate this matter, as for all devices  
<br>
where I work this never happens. What really bother me, and which is  
<br>
not as Galen describe it is the following line:
<br>
<p><span class="quotelev1">&gt; frag-&gt;base.order = order
</span><br>
<p>As the value of &quot;order&quot; come from the PML level and the Open IB BTL  
<br>
use it without any change, to me it means that some knowledge  
<br>
belonging to the BTL (BTL_OPENIB_LP_QP is clearly Open IB related  
<br>
isn't it?) has ben exported to the PML. You can turn it any way you  
<br>
want, this clearly means that the PML is able to give direct orders  
<br>
to the BTL which allow it to put the fragment in the high or low  
<br>
priority queue (which is a VERY Open IB feature).
<br>
<p>Now, if we create a constant MCA_BTL_HP_QUEUE it might look better.  
<br>
But, again as all others BTLs will completely ignore this, it look  
<br>
like a Open IB feature exported to the PML to me.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a general comment this kind of discussion is why I prefer to send
</span><br>
<span class="quotelev1">&gt; significant changes as a patch to the list for discussion before
</span><br>
<span class="quotelev1">&gt; committing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS: With Gleb changes the problem is the same. The following snippet
</span><br>
<span class="quotelev2">&gt;&gt; reflect exactly the same behavior as the original patch.
</span><br>
<span class="quotelev1">&gt; I didn't try to change the semantic. Just make the code to match the
</span><br>
<span class="quotelev1">&gt; semantic that Galen described.
</span><br>
<p>You didn't change compared with Galen patch. But the same knowledge  
<br>
export happens with your patch (for the same reasons as described  
<br>
above).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1639/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1640.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1638.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1636.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1646.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1646.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
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
