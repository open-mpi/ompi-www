<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 14:11:04 2007" -->
<!-- isoreceived="20070607181104" -->
<!-- sent="Thu, 7 Jun 2007 12:10:58 -0600" -->
<!-- isosent="20070607181058" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="[OMPI devel] BTL Semantics Teleconference: was : Re: [OMPI svn] svn:open-mpi r14768" -->
<!-- id="27CDDF6F-3904-459D-BF4B-452B508C614B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6568D67F-C0A4-4F5D-B5B9-B7C75B924EC2_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-06-07 14:10:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1638.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1636.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1635.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1636.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just had a discussion with Rich regarding the BTL semantics.
<br>
I think what might be helpful here is for us to have telecon to  
<br>
discuss this further.
<br>
<p>I only have one goal out of this, and that is to firmly define the  
<br>
ordering semantics of the BTL, or alternatively local/remote  
<br>
completion semantics of the BTL, whatever they may be.
<br>
<p>I have created a wiki here to help describe the issue as I currently  
<br>
see it, please feel free to add to this with suggestions/etc..
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/BTLSemantics">https://svn.open-mpi.org/trac/ompi/wiki/BTLSemantics</a>
<br>
<p><p>- Galen
<br>
<p><p><p><p><p><p>On Jun 7, 2007, at 9:55 AM, Galen Shipman wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 7, 2007, at 9:11 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is something weird with this change, and the patch reflect
</span><br>
<span class="quotelev2">&gt;&gt; it. The new argument &quot;order&quot; come from the PML level and might be
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BTL_NO_ORDER (which is kind of global) or BTL_OPENIB_LP_QP or
</span><br>
<span class="quotelev2">&gt;&gt; BTL_OPENIB_HP_QP (which are definitively Open IB related). Do you
</span><br>
<span class="quotelev2">&gt;&gt; really intend to let the PML knows about Open IB internal constants ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, the PML knows only one thing about the order tag, it is either
</span><br>
<span class="quotelev1">&gt; MCA_BTL_NO_ORDER or it is something that the BTL assigns.
</span><br>
<span class="quotelev1">&gt; The PML has no idea about BTL_OPENIB_LP_QP or BTL_OPENIB_HP_QP, to
</span><br>
<span class="quotelev1">&gt; the PML it is just an order tag assigned to a fragment by the BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the semantics are that after a btl_send/put/get an order tag may
</span><br>
<span class="quotelev1">&gt; be assigned by the BTL to the descriptor,
</span><br>
<span class="quotelev1">&gt; This order tag can then be specified to subsequent calls to btl_alloc
</span><br>
<span class="quotelev1">&gt; or btl_prepare. The PML has no idea what the value means, other than
</span><br>
<span class="quotelev1">&gt; he is requesting a descriptor that will be ordered w.r.t. a
</span><br>
<span class="quotelev1">&gt; previously transmitted descriptor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If it's the case (which seems to be true from the following snippet
</span><br>
<span class="quotelev2">&gt;&gt;     if(MCA_BTL_NO_ORDER == order) {
</span><br>
<span class="quotelev2">&gt;&gt;         frag-&gt;base.order = BTL_OPENIB_LP_QP;
</span><br>
<span class="quotelev2">&gt;&gt;     } else {
</span><br>
<span class="quotelev2">&gt;&gt;         frag-&gt;base.order = order;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev1">&gt; So I am choosing some ordering to use here because the PML told me he
</span><br>
<span class="quotelev1">&gt; doesn't care, what is wrong with this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ) I expect you to revise the patch in order to propose a generic
</span><br>
<span class="quotelev2">&gt;&gt; solution or I'll trigger a vote against the patch.
</span><br>
<span class="quotelev1">&gt; This exports no knowledge of the Open IB BTL to the PML layer, the
</span><br>
<span class="quotelev1">&gt; PML doesn't know that this is a QP index, he doesn't care! The PML
</span><br>
<span class="quotelev1">&gt; simply uses this value (if it wants to) to request ordering with
</span><br>
<span class="quotelev1">&gt; subsequent fragments. We use the QP index only as a BTL optimization,
</span><br>
<span class="quotelev1">&gt; it could have been anything. So the only new knowledge that the PML
</span><br>
<span class="quotelev1">&gt; has is how to request that ordering of fragments be enforced, and the
</span><br>
<span class="quotelev1">&gt; BTL doesn't even have to provide this if it doesn't want, that is the
</span><br>
<span class="quotelev1">&gt; reason for MCA_BTL_NO_ORDER.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please describe a use case where this is not a generic solution. Keep
</span><br>
<span class="quotelev1">&gt; in mind that MX, TCP, GM all can provide ordering guarantees if they
</span><br>
<span class="quotelev1">&gt; wish, in fact for MX you can simply always assign an order tag, say
</span><br>
<span class="quotelev1">&gt; the value is 1. MX can then guarantee ordering of all fragments sent
</span><br>
<span class="quotelev1">&gt; over the same BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I vote to be backed out of the trunk as it export way to much
</span><br>
<span class="quotelev2">&gt;&gt; knowledge from the Open IB BTL into the PML layer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only other option that I have identified that doesn't push PML
</span><br>
<span class="quotelev1">&gt; level protocol into the BTL is to require that BTLs always guarantee
</span><br>
<span class="quotelev1">&gt; ordering of fragments sent/put/get over the same BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS: With Gleb changes the problem is the same. The following
</span><br>
<span class="quotelev2">&gt;&gt; snippet reflect exactly the same behavior as the original patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gleb's changes don't change the semantic guarantees that I have
</span><br>
<span class="quotelev1">&gt; described above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; frag-&gt;base.order = order;
</span><br>
<span class="quotelev2">&gt;&gt; assert(frag-&gt;base.order != BTL_OPENIB_HP_QP);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 7, 2007, at 9:49 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Galen,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sun, May 27, 2007 at 10:19:09AM -0600, Galen Shipman wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With current code this is not the case. Order tag is set during a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fragment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocation. It seems wrong according to your description. Attached
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; patch fixes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this. If no specific ordering tag is provided to allocation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; function order of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the fragment is set to be MCA_BTL_NO_ORDER. After call to send/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; put/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; get order
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is set to whatever QP was used for communication. If order is set
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; before send call
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it is used to choose QP.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I do set the order tag during allocation/prepare, but the defined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; semantics are that the tag is only valid after send/put/get. We can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set them up any where we wish in the BTL, the PML however cannot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rely
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on anything until after the send/put/get call. So really this is an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; issue of semantics versus implementation. The implementation I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; believe does conform to the semantics as the upper layer (PML)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't use the tag value until after a call to send/put/get.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I will look over the patch however, might make more sense to delay
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setting the value until the actual send/put/get call.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have you had a chance to look over the patch?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="1638.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1636.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1635.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1636.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
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
