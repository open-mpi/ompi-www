<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 11:55:19 2007" -->
<!-- isoreceived="20070607155519" -->
<!-- sent="Thu, 7 Jun 2007 09:55:11 -0600" -->
<!-- isosent="20070607155511" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768" -->
<!-- id="6568D67F-C0A4-4F5D-B5B9-B7C75B924EC2_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0A04435F-5872-4EAC-B23E-D71406E732C5_at_cs.utk.edu" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 11:55:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1636.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1634.php">Jeff Squyres: "Re: [OMPI devel] request help debugging openmpi on openib/ipath"</a>
<li><strong>In reply to:</strong> <a href="1633.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1637.php">Galen Shipman: "[OMPI devel] BTL Semantics Teleconference: was : Re: [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1637.php">Galen Shipman: "[OMPI devel] BTL Semantics Teleconference: was : Re: [OMPI svn] svn:open-mpi r14768"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 7, 2007, at 9:11 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; There is something weird with this change, and the patch reflect  
</span><br>
<span class="quotelev1">&gt; it. The new argument &quot;order&quot; come from the PML level and might be  
</span><br>
<span class="quotelev1">&gt; MCA_BTL_NO_ORDER (which is kind of global) or BTL_OPENIB_LP_QP or  
</span><br>
<span class="quotelev1">&gt; BTL_OPENIB_HP_QP (which are definitively Open IB related). Do you  
</span><br>
<span class="quotelev1">&gt; really intend to let the PML knows about Open IB internal constants ?
</span><br>
<p>No, the PML knows only one thing about the order tag, it is either  
<br>
MCA_BTL_NO_ORDER or it is something that the BTL assigns.
<br>
The PML has no idea about BTL_OPENIB_LP_QP or BTL_OPENIB_HP_QP, to  
<br>
the PML it is just an order tag assigned to a fragment by the BTL.
<br>
<p>So the semantics are that after a btl_send/put/get an order tag may  
<br>
be assigned by the BTL to the descriptor,
<br>
This order tag can then be specified to subsequent calls to btl_alloc  
<br>
or btl_prepare. The PML has no idea what the value means, other than  
<br>
he is requesting a descriptor that will be ordered w.r.t. a  
<br>
previously transmitted descriptor.
<br>
<p><p><span class="quotelev1">&gt; If it's the case (which seems to be true from the following snippet
</span><br>
<span class="quotelev1">&gt;     if(MCA_BTL_NO_ORDER == order) {
</span><br>
<span class="quotelev1">&gt;         frag-&gt;base.order = BTL_OPENIB_LP_QP;
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;         frag-&gt;base.order = order;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
So I am choosing some ordering to use here because the PML told me he  
<br>
doesn't care, what is wrong with this?
<br>
<p><p><p><span class="quotelev1">&gt; ) I expect you to revise the patch in order to propose a generic  
</span><br>
<span class="quotelev1">&gt; solution or I'll trigger a vote against the patch.
</span><br>
This exports no knowledge of the Open IB BTL to the PML layer, the  
<br>
PML doesn't know that this is a QP index, he doesn't care! The PML  
<br>
simply uses this value (if it wants to) to request ordering with  
<br>
subsequent fragments. We use the QP index only as a BTL optimization,  
<br>
it could have been anything. So the only new knowledge that the PML  
<br>
has is how to request that ordering of fragments be enforced, and the  
<br>
BTL doesn't even have to provide this if it doesn't want, that is the  
<br>
reason for MCA_BTL_NO_ORDER.
<br>
<p><p>Please describe a use case where this is not a generic solution. Keep  
<br>
in mind that MX, TCP, GM all can provide ordering guarantees if they  
<br>
wish, in fact for MX you can simply always assign an order tag, say  
<br>
the value is 1. MX can then guarantee ordering of all fragments sent  
<br>
over the same BTL.
<br>
<p><p><span class="quotelev1">&gt; I vote to be backed out of the trunk as it export way to much  
</span><br>
<span class="quotelev1">&gt; knowledge from the Open IB BTL into the PML layer.
</span><br>
<p>The only other option that I have identified that doesn't push PML  
<br>
level protocol into the BTL is to require that BTLs always guarantee  
<br>
ordering of fragments sent/put/get over the same BTL.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: With Gleb changes the problem is the same. The following  
</span><br>
<span class="quotelev1">&gt; snippet reflect exactly the same behavior as the original patch.
</span><br>
<p>Gleb's changes don't change the semantic guarantees that I have  
<br>
described above.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; frag-&gt;base.order = order;
</span><br>
<span class="quotelev1">&gt; assert(frag-&gt;base.order != BTL_OPENIB_HP_QP);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 7, 2007, at 9:49 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Galen,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, May 27, 2007 at 10:19:09AM -0600, Galen Shipman wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With current code this is not the case. Order tag is set during a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fragment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocation. It seems wrong according to your description. Attached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; patch fixes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this. If no specific ordering tag is provided to allocation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function order of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the fragment is set to be MCA_BTL_NO_ORDER. After call to send/put/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; get order
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is set to whatever QP was used for communication. If order is set
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; before send call
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it is used to choose QP.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do set the order tag during allocation/prepare, but the defined
</span><br>
<span class="quotelev3">&gt;&gt;&gt; semantics are that the tag is only valid after send/put/get. We can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set them up any where we wish in the BTL, the PML however cannot  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on anything until after the send/put/get call. So really this is an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue of semantics versus implementation. The implementation I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; believe does conform to the semantics as the upper layer (PML)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't use the tag value until after a call to send/put/get.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will look over the patch however, might make more sense to delay
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setting the value until the actual send/put/get call.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you had a chance to look over the patch?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1636.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1634.php">Jeff Squyres: "Re: [OMPI devel] request help debugging openmpi on openib/ipath"</a>
<li><strong>In reply to:</strong> <a href="1633.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1637.php">Galen Shipman: "[OMPI devel] BTL Semantics Teleconference: was : Re: [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1637.php">Galen Shipman: "[OMPI devel] BTL Semantics Teleconference: was : Re: [OMPI svn] svn:open-mpi r14768"</a>
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
