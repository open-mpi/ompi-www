<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 11:13:06 2007" -->
<!-- isoreceived="20070607151306" -->
<!-- sent="Thu, 7 Jun 2007 11:11:12 -0400" -->
<!-- isosent="20070607151112" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768" -->
<!-- id="0A04435F-5872-4EAC-B23E-D71406E732C5_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070607134905.GE3292_at_minantech.com" -->
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
<strong>Date:</strong> 2007-06-07 11:11:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1634.php">Jeff Squyres: "Re: [OMPI devel] request help debugging openmpi on openib/ipath"</a>
<li><strong>Previous message:</strong> <a href="1632.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1632.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1635.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1635.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1636.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is something weird with this change, and the patch reflect it.  
<br>
The new argument &quot;order&quot; come from the PML level and might be  
<br>
MCA_BTL_NO_ORDER (which is kind of global) or BTL_OPENIB_LP_QP or  
<br>
BTL_OPENIB_HP_QP (which are definitively Open IB related). Do you  
<br>
really intend to let the PML knows about Open IB internal constants ?  
<br>
If it's the case (which seems to be true from the following snippet
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(MCA_BTL_NO_ORDER == order) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.order = BTL_OPENIB_LP_QP;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.order = order;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
) I expect you to revise the patch in order to propose a generic  
<br>
solution or I'll trigger a vote against the patch. I vote to be  
<br>
backed out of the trunk as it export way to much knowledge from the  
<br>
Open IB BTL into the PML layer.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>PS: With Gleb changes the problem is the same. The following snippet  
<br>
reflect exactly the same behavior as the original patch.
<br>
<p>frag-&gt;base.order = order;
<br>
assert(frag-&gt;base.order != BTL_OPENIB_HP_QP);
<br>
<p>On Jun 7, 2007, at 9:49 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; Hi Galen,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, May 27, 2007 at 10:19:09AM -0600, Galen Shipman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With current code this is not the case. Order tag is set during a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fragment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation. It seems wrong according to your description. Attached
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patch fixes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this. If no specific ordering tag is provided to allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function order of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the fragment is set to be MCA_BTL_NO_ORDER. After call to send/put/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get order
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is set to whatever QP was used for communication. If order is set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before send call
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is used to choose QP.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do set the order tag during allocation/prepare, but the defined
</span><br>
<span class="quotelev2">&gt;&gt; semantics are that the tag is only valid after send/put/get. We can
</span><br>
<span class="quotelev2">&gt;&gt; set them up any where we wish in the BTL, the PML however cannot rely
</span><br>
<span class="quotelev2">&gt;&gt; on anything until after the send/put/get call. So really this is an
</span><br>
<span class="quotelev2">&gt;&gt; issue of semantics versus implementation. The implementation I
</span><br>
<span class="quotelev2">&gt;&gt; believe does conform to the semantics as the upper layer (PML)
</span><br>
<span class="quotelev2">&gt;&gt; doesn't use the tag value until after a call to send/put/get.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will look over the patch however, might make more sense to delay
</span><br>
<span class="quotelev2">&gt;&gt; setting the value until the actual send/put/get call.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Have you had a chance to look over the patch?
</span><br>
<span class="quotelev1">&gt;
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1633/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1634.php">Jeff Squyres: "Re: [OMPI devel] request help debugging openmpi on openib/ipath"</a>
<li><strong>Previous message:</strong> <a href="1632.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1632.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1635.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1635.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1636.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
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
