<?
$subject_val = "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 10:14:55 2007" -->
<!-- isoreceived="20071220151455" -->
<!-- sent="Thu, 20 Dec 2007 17:14:48 +0200" -->
<!-- isosent="20071220151448" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process" -->
<!-- id="476A86E8.8020308_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200712201535.37527.jackm_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-20 10:14:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2894.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<li><strong>Previous message:</strong> <a href="2892.php">Jeff Squyres: "Re: [OMPI devel] Making an embeddable libev"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2894.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<li><strong>Reply:</strong> <a href="2894.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<li><strong>Maybe reply:</strong> <a href="2902.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<li><strong>Maybe reply:</strong> <a href="2904.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adding Open MPI and MVAPICH community to the thread.
<br>
<p>Pasha (Pavel Shamis)
<br>
<p>Jack Morgenstein wrote:
<br>
<span class="quotelev1">&gt; background:  see &quot;XRC Cleanup order issue thread&quot; at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	<a href="http://lists.openfabrics.org/pipermail/general/2007-December/043935.html">http://lists.openfabrics.org/pipermail/general/2007-December/043935.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (userspace process which created the receiving XRC qp on a given host dies before
</span><br>
<span class="quotelev1">&gt; other processes which still need to receive XRC messages on their SRQs which are
</span><br>
<span class="quotelev1">&gt; &quot;paired&quot; with the now-destroyed receiving XRC QP.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Solution: Add a userspace verb (as part of the XRC suite) which enables the user process
</span><br>
<span class="quotelev1">&gt; to create an XRC QP owned by the kernel -- which belongs to the required XRC domain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This QP will be destroyed when the XRC domain is closed (i.e., as part of a ibv_close_xrc_domain
</span><br>
<span class="quotelev1">&gt; call, but only when the domain's reference count goes to zero).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below, I give the new userspace API for this function.  Any feedback will be appreciated.
</span><br>
<span class="quotelev1">&gt; This API will be implemented in the upcoming OFED 1.3 release, so we need feedback ASAP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notes:
</span><br>
<span class="quotelev1">&gt; 1. There is no query or destroy verb for this QP. There is also no userspace object for the
</span><br>
<span class="quotelev1">&gt;    QP. Userspace has ONLY the raw qp number to use when creating the (X)RC connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Since the QP is &quot;owned&quot; by kernel space, async events for this QP are also handled in kernel
</span><br>
<span class="quotelev1">&gt;    space (i.e., reported in /var/log/messages). There are no completion events for the QP, since
</span><br>
<span class="quotelev1">&gt;    it does not send, and all receives completions are reported in the XRC SRQ's cq.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    If this QP enters the error state, the remote QP which sends will start receiving RETRY_EXCEEDED
</span><br>
<span class="quotelev1">&gt;    errors, so the application will be aware of the failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Jack
</span><br>
<span class="quotelev1">&gt; ======================================================================================
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * ibv_alloc_xrc_rcv_qp - creates an XRC QP for serving as a receive-side only QP,
</span><br>
<span class="quotelev1">&gt;  *	and moves the created qp through the RESET-&gt;INIT and INIT-&gt;RTR transitions.
</span><br>
<span class="quotelev1">&gt;  *      (The RTR-&gt;RTS transition is not needed, since this QP does no sending).
</span><br>
<span class="quotelev1">&gt;  * 	The sending XRC QP uses this QP as destination, while specifying an XRC SRQ
</span><br>
<span class="quotelev1">&gt;  * 	for actually receiving the transmissions and generating all completions on the
</span><br>
<span class="quotelev1">&gt;  *	receiving side.
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * 	This QP is created in kernel space, and persists until the XRC domain is closed.
</span><br>
<span class="quotelev1">&gt;  *	(i.e., its reference count goes to zero).
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * @pd: protection domain to use.  At lower layer, this provides access to userspace obj
</span><br>
<span class="quotelev1">&gt;  * @xrc_domain: xrc domain to use for the QP.
</span><br>
<span class="quotelev1">&gt;  * @attr: modify-qp attributes needed to bring the QP to RTR.
</span><br>
<span class="quotelev1">&gt;  * @attr_mask:  bitmap indicating which attributes are provided in the attr struct.
</span><br>
<span class="quotelev1">&gt;  * 	used for validity checking.
</span><br>
<span class="quotelev1">&gt;  * @xrc_rcv_qpn: qp_num of created QP (if success). To be passed to the remote node. The
</span><br>
<span class="quotelev1">&gt;  *               remote node will use xrc_rcv_qpn in ibv_post_send when sending to
</span><br>
<span class="quotelev1">&gt;  *		 XRC SRQ's on this host in the same xrc domain.
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * RETURNS: success (0), or a (negative) error value.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int ibv_alloc_xrc_rcv_qp(struct ibv_pd *pd,
</span><br>
<span class="quotelev1">&gt; 			 struct ibv_xrc_domain *xrc_domain,
</span><br>
<span class="quotelev1">&gt; 			 struct ibv_qp_attr *attr,
</span><br>
<span class="quotelev1">&gt; 			 enum ibv_qp_attr_mask attr_mask,
</span><br>
<span class="quotelev1">&gt; 			 uint32_t *xrc_rcv_qpn);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Although the kernel creates the qp in the kernel's own PD, we still need the PD
</span><br>
<span class="quotelev1">&gt;    parameter to determine the device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. I chose to use struct ibv_qp_attr, which is used in modify QP, rather than create
</span><br>
<span class="quotelev1">&gt;    a new structure for this purpose.  This also guards against API changes in the event
</span><br>
<span class="quotelev1">&gt;    that during development I notice that more modify-qp parameters must be specified
</span><br>
<span class="quotelev1">&gt;    for this operation to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Table of the ibv_qp_attr parameters showing what values to set:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; struct ibv_qp_attr {
</span><br>
<span class="quotelev1">&gt; 	enum ibv_qp_state	qp_state;		Not needed
</span><br>
<span class="quotelev1">&gt; 	enum ibv_qp_state	cur_qp_state;		Not needed
</span><br>
<span class="quotelev1">&gt; 		-- Driver starts from RESET and takes qp to RTR.
</span><br>
<span class="quotelev1">&gt; 	enum ibv_mtu		path_mtu;		Yes
</span><br>
<span class="quotelev1">&gt; 	enum ibv_mig_state	path_mig_state;		Yes
</span><br>
<span class="quotelev1">&gt; 	uint32_t		qkey;			Yes
</span><br>
<span class="quotelev1">&gt; 	uint32_t		rq_psn;			Yes
</span><br>
<span class="quotelev1">&gt; 	uint32_t		sq_psn;			Not needed
</span><br>
<span class="quotelev1">&gt; 	uint32_t		dest_qp_num;		Yes -- this is the remote side QP for the RC conn.
</span><br>
<span class="quotelev1">&gt; 	int			qp_access_flags;	Yes
</span><br>
<span class="quotelev1">&gt; 	struct ibv_qp_cap	cap;			Need only XRC domain. 
</span><br>
<span class="quotelev1">&gt; 							Other caps will use hard-coded values:
</span><br>
<span class="quotelev1">&gt; 								max_send_wr = 1;
</span><br>
<span class="quotelev1">&gt; 								max_recv_wr = 0;
</span><br>
<span class="quotelev1">&gt; 								max_send_sge = 1;
</span><br>
<span class="quotelev1">&gt; 								max_recv_sge = 0;
</span><br>
<span class="quotelev1">&gt; 								max_inline_data = 0;
</span><br>
<span class="quotelev1">&gt; 	struct ibv_ah_attr	ah_attr;		Yes
</span><br>
<span class="quotelev1">&gt; 	struct ibv_ah_attr	alt_ah_attr;		Optional
</span><br>
<span class="quotelev1">&gt; 	uint16_t		pkey_index;		Yes
</span><br>
<span class="quotelev1">&gt; 	uint16_t		alt_pkey_index;		Optional
</span><br>
<span class="quotelev1">&gt; 	uint8_t			en_sqd_async_notify;	Not needed (No sq)
</span><br>
<span class="quotelev1">&gt; 	uint8_t			sq_draining;		Not needed (No sq)
</span><br>
<span class="quotelev1">&gt; 	uint8_t			max_rd_atomic;		Not needed (No sq)
</span><br>
<span class="quotelev1">&gt; 	uint8_t			max_dest_rd_atomic;	Yes -- Total max outstanding RDMAs expected
</span><br>
<span class="quotelev1">&gt; 							for ALL srq destinations using this receive QP.
</span><br>
<span class="quotelev1">&gt; 							(if you are only using SENDs, this value can be 0).
</span><br>
<span class="quotelev1">&gt; 	uint8_t			min_rnr_timer;		default - 0
</span><br>
<span class="quotelev1">&gt; 	uint8_t			port_num;		Yes
</span><br>
<span class="quotelev1">&gt; 	uint8_t			timeout;		Yes
</span><br>
<span class="quotelev1">&gt; 	uint8_t			retry_cnt;		Yes
</span><br>
<span class="quotelev1">&gt; 	uint8_t			rnr_retry;		Yes
</span><br>
<span class="quotelev1">&gt; 	uint8_t			alt_port_num;		Optional
</span><br>
<span class="quotelev1">&gt; 	uint8_t			alt_timeout;		Optional
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. Attribute mask bits to set:
</span><br>
<span class="quotelev1">&gt; 	For RESET_to_INIT transition:
</span><br>
<span class="quotelev1">&gt; 		IB_QP_ACCESS_FLAGS | IB_QP_PKEY_INDEX | IB_QP_PORT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	For INIT_to_RTR transition:
</span><br>
<span class="quotelev1">&gt; 		IB_QP_AV | IB_QP_PATH_MTU |
</span><br>
<span class="quotelev1">&gt; 		IB_QP_DEST_QPN | IB_QP_RQ_PSN | IB_QP_MIN_RNR_TIMER
</span><br>
<span class="quotelev1">&gt; 	   If you are using RDMA or atomics, also set:
</span><br>
<span class="quotelev1">&gt; 		IB_QP_MAX_DEST_RD_ATOMIC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; general mailing list
</span><br>
<span class="quotelev1">&gt; general_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general">http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To unsubscribe, please visit <a href="http://openib.org/mailman/listinfo/openib-general">http://openib.org/mailman/listinfo/openib-general</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2894.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<li><strong>Previous message:</strong> <a href="2892.php">Jeff Squyres: "Re: [OMPI devel] Making an embeddable libev"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2894.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<li><strong>Reply:</strong> <a href="2894.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<li><strong>Maybe reply:</strong> <a href="2902.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<li><strong>Maybe reply:</strong> <a href="2904.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
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
