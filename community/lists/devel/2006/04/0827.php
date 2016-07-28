<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 19 15:56:14 2006" -->
<!-- isoreceived="20060419195614" -->
<!-- sent="Wed, 19 Apr 2006 12:53:33 -0700" -->
<!-- isosent="20060419195333" -->
<!-- name="Matt Leininger" -->
<!-- email="mlleinin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [openib-general] RFC userspace / MPI multicast support" -->
<!-- id="1145476413.24662.337.camel_at_localhost" -->
<!-- inreplyto="ORSMSX4016BDndvrN6U00000002_at_orsmsx401.amr.corp.intel.com" -->
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
<strong>From:</strong> Matt Leininger (<em>mlleinin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-19 15:53:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0828.php">Greg Watson: "[OMPI devel] opal_event_loop exiting"</a>
<li><strong>Previous message:</strong> <a href="0826.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Branch for v1.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Copying the Open MPI folks on this thread.
<br>
<p>&nbsp;&nbsp;- Matt
<br>
<p><p>On Wed, 2006-04-19 at 12:05 -0700, Sean Hefty wrote:
<br>
<span class="quotelev1">&gt; I'd like to get some feedback regarding the following approach to supporting
</span><br>
<span class="quotelev1">&gt; multicast groups in userspace, and in particular for MPI.  Based on side
</span><br>
<span class="quotelev1">&gt; conversations, I need to know if this approach would meet the needs of MPI
</span><br>
<span class="quotelev1">&gt; developers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To join / leave a multicast group, my proposal is to add the following APIs to
</span><br>
<span class="quotelev1">&gt; the rdma_cm.  (Note I haven't implemented this yet, so I'm just assuming that
</span><br>
<span class="quotelev1">&gt; it's possible at this point.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Asynchronously join a multicast group. */
</span><br>
<span class="quotelev1">&gt; int rdma_set_option(struct rdma_cm_id *id, int level, int optname,
</span><br>
<span class="quotelev1">&gt; 			  void *optval, size_t optlen);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Retrieve multicast group information - not usually called. */
</span><br>
<span class="quotelev1">&gt; int rdma_get_option(struct rdma_cm_id *id, int level, int optname,
</span><br>
<span class="quotelev1">&gt; 			  void *optval, size_t optlen);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Post a message on the QP associated with the cm_id for the
</span><br>
<span class="quotelev1">&gt;  * specified multicast address.
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; int rdma_sendto(struct rdma_cm_id *id, struct ibv_send_wr *send_wr,
</span><br>
<span class="quotelev1">&gt; 		    struct sockaddr *to);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As an example of how these APIs would be used:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* The cm_id provides event handling and context. */
</span><br>
<span class="quotelev1">&gt; rdma_create_id(&amp;id, context);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Bind to a local interface to attach to a local device. */
</span><br>
<span class="quotelev1">&gt; rdma_bind_addr(id, local_addr);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Allocate a PD, CQs, etc. */
</span><br>
<span class="quotelev1">&gt; pd = ibv_alloc_pd(id-&gt;verbs);
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Create a UD QP associated with the cm_id.
</span><br>
<span class="quotelev1">&gt;  * TBD: automatically transition the QP to RTS for UD QP types?
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; rdma_create_qp(id, pd, init_attr);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Bind to multicast group. */
</span><br>
<span class="quotelev1">&gt; mcast_ip = 224.0.0.74.71; /* some fine mcast addr */
</span><br>
<span class="quotelev1">&gt; ip_mreq.imr_multiaddr = mcast_ip.in_addr;
</span><br>
<span class="quotelev1">&gt; rdma_set_option(id, RDMA_PROTO_IP, IP_ADD_MEMBERSHIP, &amp;ip_mreq,
</span><br>
<span class="quotelev1">&gt; 		    sizeof(ip_mreq));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Wait for join to complete. */
</span><br>
<span class="quotelev1">&gt; rdma_get_cm_event(&amp;event);
</span><br>
<span class="quotelev1">&gt; if (event-&gt;event == RDMA_CM_EVENT_JOIN_COMPLETE)
</span><br>
<span class="quotelev1">&gt; 	/* join worked - we could call rdma_get_option() here */
</span><br>
<span class="quotelev1">&gt; 	/* The rdma_cm attached the QP to the multicast group for us. */
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; rdma_ack_cm_event(event);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Format a send wr.  The ah, remote_qpn, and remote_qkey are
</span><br>
<span class="quotelev1">&gt;  * filled out by the rdma_cm based on the provided destination
</span><br>
<span class="quotelev1">&gt;  * address.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; rdma_sendto(id, send_wr, &amp;mcast_ip);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The multicast group information is created / managed by the rdma_cm.  The
</span><br>
<span class="quotelev1">&gt; rdma_cm defines the mgid, q_key, p_key, sl, flowlabel, tclass, and joinstate.
</span><br>
<span class="quotelev1">&gt; Except for mgid, these would most likely match the values used by the ipoib
</span><br>
<span class="quotelev1">&gt; broadcast group.  The mgid mapping would be similar to that used by ipoib.  The
</span><br>
<span class="quotelev1">&gt; actual MCMember record would be available to the user by calling
</span><br>
<span class="quotelev1">&gt; rdma_get_option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't believe that there would be any restriction on the use of the QP that is
</span><br>
<span class="quotelev1">&gt; attached to the multicast group, but it would take more work to support more
</span><br>
<span class="quotelev1">&gt; than one multicast group per QP.  The purpose of the rdma_sendto() routine is to
</span><br>
<span class="quotelev1">&gt; map a given IP address to an allocated address handle and Qkey.  At this point,
</span><br>
<span class="quotelev1">&gt; rdma_sendto would only work for multicast addresses that have been joined by the
</span><br>
<span class="quotelev1">&gt; user.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If a user wanted more control over the multicast group, we could support a call
</span><br>
<span class="quotelev1">&gt; such as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct ib_mreq {
</span><br>
<span class="quotelev1">&gt; 	struct ib_sa_mcmember_rec	rec;
</span><br>
<span class="quotelev1">&gt; 	ib_sa_comp_mask			comp_mask;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rdma_set_option(id, RDMA_PROTO_IB, IB_ADD_MEMBERSHIP, &amp;ib_mreq,
</span><br>
<span class="quotelev1">&gt; 		    sizeof(ib_mreq));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Sean
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; openib-general mailing list
</span><br>
<span class="quotelev1">&gt; openib-general_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://openib.org/mailman/listinfo/openib-general">http://openib.org/mailman/listinfo/openib-general</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To unsubscribe, please visit <a href="http://openib.org/mailman/listinfo/openib-general">http://openib.org/mailman/listinfo/openib-general</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0828.php">Greg Watson: "[OMPI devel] opal_event_loop exiting"</a>
<li><strong>Previous message:</strong> <a href="0826.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Branch for v1.1"</a>
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
