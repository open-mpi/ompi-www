<?
$subject_val = "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 24 18:51:43 2007" -->
<!-- isoreceived="20071224235143" -->
<!-- sent="Mon, 24 Dec 2007 23:49:37 +0000" -->
<!-- isosent="20071224234937" -->
<!-- name="Tang, Changqing" -->
<!-- email="changquing.tang_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process" -->
<!-- id="D89C2C212795564B837FA1665CAE02990FE241E577_at_G5W0278.americas.hpqcorp.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="476FBC1D.6050900_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Tang, Changqing (<em>changquing.tang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-24 18:49:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2910.php">Gleb Natapov: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent	of any one user process"</a>
<li><strong>Previous message:</strong> <a href="2908.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<li><strong>In reply to:</strong> <a href="2908.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2910.php">Gleb Natapov: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent	of any one user process"</a>
<li><strong>Reply:</strong> <a href="2910.php">Gleb Natapov: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent	of any one user process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Pavel Shamis (Pasha) [mailto:pasha_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, December 24, 2007 8:03 AM
</span><br>
<span class="quotelev1">&gt; To: Tang, Changqing
</span><br>
<span class="quotelev1">&gt; Cc: Jack Morgenstein; Roland Dreier;
</span><br>
<span class="quotelev1">&gt; general_at_[hidden]; Open MPI Developers;
</span><br>
<span class="quotelev1">&gt; mvapich-discuss_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [ofa-general] [RFC] XRC -- make receiving XRC QP
</span><br>
<span class="quotelev1">&gt; independent of any one user process
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi CQ,
</span><br>
<span class="quotelev1">&gt; Tang, Changqing wrote:
</span><br>
<span class="quotelev2">&gt; &gt;         If I have a MPI server processes on a node, many other MPI
</span><br>
<span class="quotelev2">&gt; &gt; client processes will dynamically connect/disconnect with
</span><br>
<span class="quotelev1">&gt; the server. The server use same XRC domain.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Will this cause accumulating the &quot;kernel&quot; QP for such
</span><br>
<span class="quotelev2">&gt; &gt; application ? we want the server to run 365 days a year.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; I have some question about the scenario above. Did you call
</span><br>
<span class="quotelev1">&gt; for the mpi disconnect on the both ends (server/client)
</span><br>
<span class="quotelev1">&gt; before the client exit (did we must to do it?)
</span><br>
<p>Yes, both ends will call disconnect. But for us, MPI_Comm_disconnect() call
<br>
is not a collective call, it is just a local operation.
<br>
<p>--CQ
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pasha.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt; --CQ
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: Pavel Shamis (Pasha) [mailto:pasha_at_[hidden]]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Thursday, December 20, 2007 9:15 AM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Jack Morgenstein
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cc: Tang, Changqing; Roland Dreier;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; general_at_[hidden]; Open MPI Developers;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mvapich-discuss_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [ofa-general] [RFC] XRC -- make receiving XRC QP
</span><br>
<span class="quotelev3">&gt; &gt;&gt; independent of any one user process
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Adding Open MPI and MVAPICH community to the thread.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Pasha (Pavel Shamis)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jack Morgenstein wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; background:  see &quot;XRC Cleanup order issue thread&quot; at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.openfabrics.org/pipermail/general/2007-December/043935.h">http://lists.openfabrics.org/pipermail/general/2007-December/043935.h</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; t
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ml
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (userspace process which created the receiving XRC qp on a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; given host
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; dies before other processes which still need to receive XRC
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; messages
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; on their SRQs which are &quot;paired&quot; with the now-destroyed
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; receiving XRC
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; QP.)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Solution: Add a userspace verb (as part of the XRC suite) which
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; enables the user process to create an XRC QP owned by the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; kernel -- which belongs to the required XRC domain.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This QP will be destroyed when the XRC domain is closed
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (i.e., as part
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; of a ibv_close_xrc_domain call, but only when the domain's
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; reference count goes to zero).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Below, I give the new userspace API for this function.  Any
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; feedback will be appreciated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This API will be implemented in the upcoming OFED 1.3
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; release, so we need feedback ASAP.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Notes:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1. There is no query or destroy verb for this QP. There is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; also no userspace object for the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    QP. Userspace has ONLY the raw qp number to use when
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; creating the (X)RC connection.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2. Since the QP is &quot;owned&quot; by kernel space, async events
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for this QP are also handled in kernel
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    space (i.e., reported in /var/log/messages). There are
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; no completion events for the QP, since
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    it does not send, and all receives completions are
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; reported in the XRC SRQ's cq.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    If this QP enters the error state, the remote QP which
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sends will start receiving RETRY_EXCEEDED
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    errors, so the application will be aware of the failure.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - Jack
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; =====================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ================
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /**
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  * ibv_alloc_xrc_rcv_qp - creates an XRC QP for serving as
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a receive-side only QP,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  *    and moves the created qp through the RESET-&gt;INIT and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; INIT-&gt;RTR transitions.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  *      (The RTR-&gt;RTS transition is not needed, since this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; QP does no sending).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  *    The sending XRC QP uses this QP as destination, while
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; specifying an XRC SRQ
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  *    for actually receiving the transmissions and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; generating all completions on the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  *    receiving side.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  *
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  *    This QP is created in kernel space, and persists
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; until the XRC domain is closed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  *    (i.e., its reference count goes to zero).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  *
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  * @pd: protection domain to use.  At lower layer, this provides
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; access to userspace obj
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  * @xrc_domain: xrc domain to use for the QP.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  * @attr: modify-qp attributes needed to bring the QP to RTR.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  * @attr_mask:  bitmap indicating which attributes are
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; provided in the attr struct.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  *    used for validity checking.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  * @xrc_rcv_qpn: qp_num of created QP (if success). To be
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; passed to the remote node. The
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  *               remote node will use xrc_rcv_qpn in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ibv_post_send when sending to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  *             XRC SRQ's on this host in the same xrc domain.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  *
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  * RETURNS: success (0), or a (negative) error value.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; int ibv_alloc_xrc_rcv_qp(struct ibv_pd *pd,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                        struct ibv_xrc_domain *xrc_domain,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                        struct ibv_qp_attr *attr,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                        enum ibv_qp_attr_mask attr_mask,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                        uint32_t *xrc_rcv_qpn);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Notes:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1. Although the kernel creates the qp in the kernel's own
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PD, we still need the PD
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    parameter to determine the device.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2. I chose to use struct ibv_qp_attr, which is used in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; modify QP, rather than create
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    a new structure for this purpose.  This also guards
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; against API changes in the event
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    that during development I notice that more modify-qp
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; parameters must be specified
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    for this operation to work.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 3. Table of the ibv_qp_attr parameters showing what values to set:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; struct ibv_qp_attr {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       enum ibv_qp_state       qp_state;               Not needed
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       enum ibv_qp_state       cur_qp_state;           Not needed
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;               -- Driver starts from RESET and takes qp to RTR.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       enum ibv_mtu            path_mtu;               Yes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       enum ibv_mig_state      path_mig_state;         Yes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint32_t                qkey;                   Yes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint32_t                rq_psn;                 Yes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint32_t                sq_psn;                 Not needed
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint32_t                dest_qp_num;            Yes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- this is the remote side QP for the RC conn.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       int                     qp_access_flags;        Yes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       struct ibv_qp_cap       cap;                    Need
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; only XRC domain.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                       Other
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; caps will use hard-coded values:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   max_send_wr = 1;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   max_recv_wr = 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   max_send_sge = 1;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   max_recv_sge = 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   max_inline_data = 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       struct ibv_ah_attr      ah_attr;                Yes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       struct ibv_ah_attr      alt_ah_attr;            Optional
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint16_t                pkey_index;             Yes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint16_t                alt_pkey_index;         Optional
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint8_t                 en_sqd_async_notify;    Not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; needed (No sq)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint8_t                 sq_draining;            Not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; needed (No sq)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint8_t                 max_rd_atomic;          Not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; needed (No sq)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint8_t                 max_dest_rd_atomic;     Yes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- Total max outstanding RDMAs expected
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                       for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ALL srq destinations using this receive QP.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                       (if
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you are only using SENDs, this value can be 0).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint8_t                 min_rnr_timer;          default - 0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint8_t                 port_num;               Yes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint8_t                 timeout;                Yes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint8_t                 retry_cnt;              Yes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint8_t                 rnr_retry;              Yes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint8_t                 alt_port_num;           Optional
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       uint8_t                 alt_timeout;            Optional
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; };
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 4. Attribute mask bits to set:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       For RESET_to_INIT transition:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;               IB_QP_ACCESS_FLAGS | IB_QP_PKEY_INDEX | IB_QP_PORT
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       For INIT_to_RTR transition:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;               IB_QP_AV | IB_QP_PATH_MTU |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;               IB_QP_DEST_QPN | IB_QP_RQ_PSN | IB_QP_MIN_RNR_TIMER
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;          If you are using RDMA or atomics, also set:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;               IB_QP_MAX_DEST_RD_ATOMIC
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; general mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; general_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general">http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To unsubscribe, please visit
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://openib.org/mailman/listinfo/openib-general">http://openib.org/mailman/listinfo/openib-general</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2910.php">Gleb Natapov: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent	of any one user process"</a>
<li><strong>Previous message:</strong> <a href="2908.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<li><strong>In reply to:</strong> <a href="2908.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2910.php">Gleb Natapov: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent	of any one user process"</a>
<li><strong>Reply:</strong> <a href="2910.php">Gleb Natapov: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent	of any one user process"</a>
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
