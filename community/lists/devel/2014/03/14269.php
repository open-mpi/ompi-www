<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30905 - in trunk/ompi/mca/btl/openib:	. connect";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 10:08:58 2014" -->
<!-- isoreceived="20140303150858" -->
<!-- sent="Mon, 3 Mar 2014 15:08:56 +0000" -->
<!-- isosent="20140303150856" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30905 - in trunk/ompi/mca/btl/openib:	. connect" -->
<!-- id="A8DD858C-7F0B-482C-B409-0DDD505E5DAA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140303064147.0B70B160CA4_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30905 - in trunk/ompi/mca/btl/openib:	. connect<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 10:08:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14270.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: . config"</a>
<li><strong>Previous message:</strong> <a href="14268.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please note Open MPI standards state that for .m4 files, you need to always define preprocessor macros that are used for logical tests -- it is not sufficient to #define them or not.  Instead, always define them to 0 or 1 (which would have made much of the original patch be valid).
<br>
<p>Please update; thanks.
<br>
<p><p>On Mar 2, 2014, at 10:41 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: vasily (Vasily Philipov)
</span><br>
<span class="quotelev1">&gt; Date: 2014-03-03 01:41:46 EST (Mon, 03 Mar 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 30905
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30905">https://svn.open-mpi.org/trac/ompi/changeset/30905</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; OPENIB BTL/CONNECT: warning fixes caused by r30875.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/configure.m4                        |     3 ++                                      
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c |    52 ++++++++++++++++++++--------------------
</span><br>
<span class="quotelev1">&gt;   2 files changed, 29 insertions(+), 26 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/configure.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/configure.m4	Sat Mar  1 22:48:56 2014	(r30904)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/configure.m4	2014-03-03 01:41:46 EST (Mon, 03 Mar 2014)	(r30905)
</span><br>
<span class="quotelev1">&gt; @@ -102,6 +102,9 @@
</span><br>
<span class="quotelev1">&gt;                     ],
</span><br>
<span class="quotelev1">&gt;                     [ AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt;                       AC_MSG_WARN([rsockets does not support keepalives. librdmacm 1.0.18 or beyond is needed.])
</span><br>
<span class="quotelev1">&gt; +                    ],
</span><br>
<span class="quotelev1">&gt; +                    [
</span><br>
<span class="quotelev1">&gt; +                      AC_MSG_WARN([cross compiling detected - disable IB addressing support in RDMACM openib BTL.])
</span><br>
<span class="quotelev1">&gt;                     ]
</span><br>
<span class="quotelev1">&gt;                   )
</span><br>
<span class="quotelev1">&gt;                   LDFLAGS=&quot;$LDFLAGS_save&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c	Sat Mar  1 22:48:56 2014	(r30904)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c	2014-03-03 01:41:46 EST (Mon, 03 Mar 2014)	(r30905)
</span><br>
<span class="quotelev1">&gt; @@ -58,7 +58,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_openib_ip.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_openib_ini.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt; #include &lt;infiniband/ib.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -89,7 +89,7 @@
</span><br>
<span class="quotelev1">&gt;     /* Dummy QP only used when we expect the connection to be
</span><br>
<span class="quotelev1">&gt;        rejected */
</span><br>
<span class="quotelev1">&gt;     struct ibv_cq *dummy_cq;
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;     union ibv_gid gid;
</span><br>
<span class="quotelev1">&gt;     uint64_t service_id;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; @@ -123,7 +123,7 @@
</span><br>
<span class="quotelev1">&gt; typedef struct {
</span><br>
<span class="quotelev1">&gt;     int device_max_qp_rd_atom;
</span><br>
<span class="quotelev1">&gt;     int device_max_qp_init_rd_atom;
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;     uint8_t  gid[16];
</span><br>
<span class="quotelev1">&gt;     uint64_t service_id;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; @@ -161,7 +161,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; typedef struct {
</span><br>
<span class="quotelev1">&gt;     uint32_t rem_index;
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;     uint64_t rem_port;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;     uint16_t rem_port;
</span><br>
<span class="quotelev1">&gt; @@ -233,7 +233,7 @@
</span><br>
<span class="quotelev1">&gt;     contents-&gt;endpoint = NULL;
</span><br>
<span class="quotelev1">&gt;     contents-&gt;openib_btl = NULL;
</span><br>
<span class="quotelev1">&gt;     contents-&gt;dummy_cq = NULL;
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;     contents-&gt;service_id = 0;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;     contents-&gt;ipaddr = 0;
</span><br>
<span class="quotelev1">&gt; @@ -355,7 +355,7 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; static mca_btl_openib_endpoint_t *rdmacm_find_endpoint(rdmacm_contents_t *contents,
</span><br>
<span class="quotelev1">&gt;                                                        struct rdma_cm_id *id,
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;                                                        uint64_t rem_port)
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;                                                        uint16_t rem_port)
</span><br>
<span class="quotelev1">&gt; @@ -366,7 +366,7 @@
</span><br>
<span class="quotelev1">&gt;     opal_pointer_array_t *endpoints = contents-&gt;openib_btl-&gt;device-&gt;endpoints;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     struct sockaddr *peeraddr = rdma_get_peer_addr(id);
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;     union ibv_gid *ep_gid, peer_gid;
</span><br>
<span class="quotelev1">&gt;     memcpy(peer_gid.raw, ((struct sockaddr_ib *) peeraddr)-&gt;sib_addr.sib_raw, sizeof peer_gid);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; @@ -401,7 +401,7 @@
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;         ep_gid = (union ibv_gid *) message-&gt;gid;
</span><br>
<span class="quotelev1">&gt;         if (ep_gid-&gt;global.interface_id == peer_gid.global.interface_id &amp;&amp;
</span><br>
<span class="quotelev1">&gt;              ep_gid-&gt;global.subnet_prefix == peer_gid.global.subnet_prefix &amp;&amp;
</span><br>
<span class="quotelev1">&gt; @@ -546,7 +546,7 @@
</span><br>
<span class="quotelev1">&gt;  * node), then the process with the lower TCP port wins.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; static bool i_initiate(uint64_t local_port, uint64_t remote_port,
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;                        union ibv_gid *local_gid, union ibv_gid *remote_gid)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; @@ -558,7 +558,7 @@
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;     if (local_gid-&gt;global.subnet_prefix &lt; remote_gid-&gt;global.subnet_prefix ||
</span><br>
<span class="quotelev1">&gt;         (local_gid-&gt;global.subnet_prefix == remote_gid-&gt;global.subnet_prefix &amp;&amp;
</span><br>
<span class="quotelev1">&gt;          local_gid-&gt;global.interface_id &lt; remote_gid-&gt;global.interface_id) ||
</span><br>
<span class="quotelev1">&gt; @@ -590,7 +590,7 @@
</span><br>
<span class="quotelev1">&gt;     return false;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt; static int get_rdma_addr(char *src, char *dst,
</span><br>
<span class="quotelev1">&gt;                          struct rdma_addrinfo **rdma_addr,
</span><br>
<span class="quotelev1">&gt;                          int server)
</span><br>
<span class="quotelev1">&gt; @@ -641,7 +641,7 @@
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt;     id_context_t *context;
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;     char src_addr[32], dst_addr[32];
</span><br>
<span class="quotelev1">&gt;     struct rdma_addrinfo *rdma_addr;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; @@ -738,7 +738,7 @@
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     OBJ_RETAIN(context);
</span><br>
<span class="quotelev1">&gt;     opal_list_append(&amp;(contents-&gt;ids), &amp;(context-&gt;super));
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;     if (NULL == inet_ntop(AF_INET6, contents-&gt;gid.raw,
</span><br>
<span class="quotelev1">&gt;                                src_addr, sizeof src_addr)) {
</span><br>
<span class="quotelev1">&gt;         BTL_ERROR((&quot;local addr string creating fail&quot;));
</span><br>
<span class="quotelev1">&gt; @@ -760,7 +760,7 @@
</span><br>
<span class="quotelev1">&gt;     ((struct sockaddr_ib *) (rdma_addr-&gt;ai_dst_addr))-&gt;sib_sid = message-&gt;service_id;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;     rc = rdma_resolve_addr(context-&gt;id,
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;                            rdma_addr-&gt;ai_src_addr,
</span><br>
<span class="quotelev1">&gt;                            rdma_addr-&gt;ai_dst_addr,
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; @@ -770,12 +770,12 @@
</span><br>
<span class="quotelev1">&gt;                            rdmacm_resolve_timeout);
</span><br>
<span class="quotelev1">&gt;     if (0 != rc) {
</span><br>
<span class="quotelev1">&gt;         BTL_ERROR((&quot;Failed to resolve the remote address with %d&quot;, rc));
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;         rdma_freeaddrinfo(rdma_addr);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;         goto out1;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;     rdma_freeaddrinfo(rdma_addr);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -852,7 +852,7 @@
</span><br>
<span class="quotelev1">&gt;      * is being connected from, in the case where there are multiple
</span><br>
<span class="quotelev1">&gt;      * listeners on the local system.
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;     memcpy(contents-&gt;gid.raw, local_message-&gt;gid, sizeof(contents-&gt;gid));
</span><br>
<span class="quotelev1">&gt;     contents-&gt;service_id = local_message-&gt;service_id;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; @@ -864,7 +864,7 @@
</span><br>
<span class="quotelev1">&gt;        be rejected? */
</span><br>
<span class="quotelev1">&gt;     endpoint-&gt;endpoint_initiator =
</span><br>
<span class="quotelev1">&gt;         i_initiate(
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;                    contents-&gt;service_id, message-&gt;service_id,
</span><br>
<span class="quotelev1">&gt;                    &amp;contents-&gt;gid, (union ibv_gid *) message-&gt;gid);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; @@ -969,7 +969,7 @@
</span><br>
<span class="quotelev1">&gt;     private_data_t msg;
</span><br>
<span class="quotelev1">&gt;     int rc = -1, qpnum;
</span><br>
<span class="quotelev1">&gt;     uint32_t rem_index;
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;     uint64_t rem_port;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;     uint16_t rem_port;
</span><br>
<span class="quotelev1">&gt; @@ -1005,7 +1005,7 @@
</span><br>
<span class="quotelev1">&gt;     message = (modex_message_t *) endpoint-&gt;endpoint_remote_cpc_data-&gt;cbm_modex_message;
</span><br>
<span class="quotelev1">&gt;     endpoint-&gt;endpoint_initiator =
</span><br>
<span class="quotelev1">&gt;         i_initiate(
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;                   contents-&gt;service_id, rem_port,
</span><br>
<span class="quotelev1">&gt;                   &amp;contents-&gt;gid, (union ibv_gid *) message-&gt;gid);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; @@ -1609,7 +1609,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     msg.qpnum = context-&gt;qpnum;
</span><br>
<span class="quotelev1">&gt;     msg.rem_index = contents-&gt;endpoint-&gt;index;
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;     msg.rem_port = contents-&gt;service_id;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;     msg.rem_port = contents-&gt;tcp_port;
</span><br>
<span class="quotelev1">&gt; @@ -1995,7 +1995,7 @@
</span><br>
<span class="quotelev1">&gt;     message-&gt;device_max_qp_init_rd_atom =
</span><br>
<span class="quotelev1">&gt;         openib_btl-&gt;device-&gt;ib_dev_attr.max_qp_init_rd_atom;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;     memcpy(message-&gt;gid, server-&gt;gid.raw, sizeof(server-&gt;gid));
</span><br>
<span class="quotelev1">&gt;     message-&gt;service_id = server-&gt;service_id;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; @@ -2027,7 +2027,7 @@
</span><br>
<span class="quotelev1">&gt;     id_context_t *context;
</span><br>
<span class="quotelev1">&gt;     rdmacm_contents_t *server = NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;     char rdmacm_addr_str[32];
</span><br>
<span class="quotelev1">&gt;     struct rdma_addrinfo *rdma_addr;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; @@ -2117,7 +2117,7 @@
</span><br>
<span class="quotelev1">&gt;      * port or one specified by a comand arg.
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     rc = rdma_bind_addr(context-&gt;id,
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;                         rdma_addr-&gt;ai_src_addr);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;                        (struct sockaddr *)&amp;sin);
</span><br>
<span class="quotelev1">&gt; @@ -2126,12 +2126,12 @@
</span><br>
<span class="quotelev1">&gt;         opal_output_verbose(5, ompi_btl_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt;                             &quot;openib BTL: rdmacm CPC unable to bind to address&quot;);
</span><br>
<span class="quotelev1">&gt;         rc = OMPI_ERR_UNREACH;
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;         rdma_freeaddrinfo(rdma_addr);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;         goto out5;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -#if BTL_OPENIB_RDMACM_IB_ADDR
</span><br>
<span class="quotelev1">&gt; +#if defined(BTL_OPENIB_RDMACM_IB_ADDR)
</span><br>
<span class="quotelev1">&gt;     server-&gt;service_id = ((struct sockaddr_ib *) (&amp;context-&gt;id-&gt;route.addr.src_addr))-&gt;sib_sid;
</span><br>
<span class="quotelev1">&gt;     rdma_freeaddrinfo(rdma_addr);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14270.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: . config"</a>
<li><strong>Previous message:</strong> <a href="14268.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
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
