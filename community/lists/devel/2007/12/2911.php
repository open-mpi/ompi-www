<?
$subject_val = "[OMPI devel] SDP support for OPEN-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 31 03:41:22 2007" -->
<!-- isoreceived="20071231084122" -->
<!-- sent="Mon, 31 Dec 2007 10:41:12 +0200" -->
<!-- isosent="20071231084112" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="[OMPI devel] SDP support for OPEN-MPI" -->
<!-- id="39C75744D164D948A170E9792AF8E7CA4296AD_at_exil.voltaire.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] SDP support for OPEN-MPI<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lennyb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-31 03:41:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2912.php">Brian Barrett: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Previous message:</strong> <a href="2910.php">Gleb Natapov: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent	of any one user process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2912.php">Brian Barrett: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="2912.php">Brian Barrett: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2917.php">Patrick Geoffray: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
<p>Hi,
<br>
<p>We would like to add SDP support for OPENMPI.
<br>
<p>&nbsp;
<br>
<p>SDP - Socket Direct Protocol is a byte-stream transport protocol
<br>
implementing the TCP SOCK_STREAM semantics utilizing transport
<br>
offloading capabilities of the InfiniBand fabric 
<br>
<p>(<a href="http://www.mellanox.com/pdf/whitepapers/SDP_Whitepaper.pdf">http://www.mellanox.com/pdf/whitepapers/SDP_Whitepaper.pdf</a>,
<br>
<a href="http://www.openfabrics.org/archives/aug2005datacenter/das_SDP_Linux.pdf">http://www.openfabrics.org/archives/aug2005datacenter/das_SDP_Linux.pdf</a>
<br>
).
<br>
<p>&nbsp;
<br>
<p>SDP can be used to accelerate job start ( oob over sdp ) and IPoIB
<br>
performance.
<br>
<p>&nbsp;
<br>
<p>The main idea is to use AF_INET_SDP protocol family instead of AF_INET
<br>
and AF_INET6 when opening sockets.
<br>
<p>SDP will be used in OOB and BTL with appropriate mca parameters - 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca btl_tcp_sdp_enable 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca oob_tcp_sdp_enable 1
<br>
<p>&nbsp;
<br>
<p>Since not all functions support this family, the changes were maid only
<br>
in critical sections of the code
<br>
<p>&nbsp;
<br>
<p>Since SDP support is relevant only for InfiniBand Fabrics you need to
<br>
configure sdp support with -enable-sdp flag. SDP will be disabled by
<br>
default.
<br>
<p>./configure -enable-sdp
<br>
<p>&nbsp;
<br>
<p>Test results of running bandwidth and latency of SDP on 2 DDR nodes.
<br>
<p>&nbsp;
<br>
<p>BWsize             VERBS             IPoIB  connected           IPoIB
<br>
datagram              btl SDP
<br>
<p>1000000            1507.68             665.70
<br>
425.21                          1272.37
<br>
<p>&nbsp;
<br>
<p>LTsize
<br>
<p>5                      3.82                  28.83
<br>
28.24                            25.73
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Index: opal/include/opal_config_bottom.h
<br>
<p>===================================================================
<br>
<p>--- opal/include/opal_config_bottom.h     (revision 17027)
<br>
<p>+++ opal/include/opal_config_bottom.h     (working copy)
<br>
<p>@@ -509,7 +509,15 @@
<br>
<p>&nbsp;#if !HAVE_DECL_PF_INET6
<br>
<p>&nbsp;#define PF_INET6 PF_UNSPEC
<br>
<p>&nbsp;#endif
<br>
<p>+#if !HAVE_DECL_AF_INET_SDP
<br>
<p>+#define AF_INET_SDP 27
<br>
<p>+#endif
<br>
<p>&nbsp;
<br>
<p>+#if OPAL_ENABLE_SDP
<br>
<p>+#define OPAL_WANT_SDP 1
<br>
<p>+#else
<br>
<p>+#define OPAL_WANT_SDP 0
<br>
<p>+#endif
<br>
<p>&nbsp;#if defined(__APPLE__) &amp;&amp; defined(HAVE_INTTYPES_H)
<br>
<p>&nbsp;/* Prior to Mac OS X 10.3, the length modifier &quot;ll&quot; wasn't
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;supported, but &quot;q&quot; was for long long.  This isn't ANSI
<br>
<p>Index: configure.ac
<br>
<p>===================================================================
<br>
<p>--- configure.ac  (revision 17027)
<br>
<p>+++ configure.ac  (working copy)
<br>
<p>@@ -674,7 +674,7 @@
<br>
<p>&nbsp;#include &lt;netinet/in.h&gt;
<br>
<p>&nbsp;#endif])
<br>
<p>&nbsp;
<br>
<p>-AC_CHECK_DECLS([AF_UNSPEC, PF_UNSPEC, AF_INET6, PF_INET6], 
<br>
<p>+AC_CHECK_DECLS([AF_UNSPEC, PF_UNSPEC, AF_INET6, PF_INET6, AF_INET_SDP],
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[], [], [AC_INCLUDES_DEFAULT
<br>
<p>&nbsp;#if HAVE_SYS_SOCKET_H
<br>
<p>&nbsp;#include &lt;sys/socket.h&gt;
<br>
<p>Index: ompi/mca/btl/tcp/btl_tcp_component.c
<br>
<p>===================================================================
<br>
<p>--- ompi/mca/btl/tcp/btl_tcp_component.c  (revision 17027)
<br>
<p>+++ ompi/mca/btl/tcp/btl_tcp_component.c  (working copy)
<br>
<p>@@ -263,6 +263,10 @@
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_tcp_component.tcp_disable_family =
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_tcp_param_register_int (&quot;disable_family&quot;, NULL, 0);
<br>
<p>+#if OPAL_WANT_SDP
<br>
<p>+    mca_btl_tcp_component.sdp_enable =
<br>
<p>+        mca_btl_tcp_param_register_int(&quot;sdp_enable&quot;, &quot;Enable SDP for
<br>
TCP connections&quot;, 0);
<br>
<p>+#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
<p>&nbsp;}
<br>
<p>&nbsp;
<br>
<p>@@ -527,6 +531,11 @@
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset (&amp;hints, 0, sizeof(hints));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hints.ai_family = af_family;
<br>
<p>+#if OPAL_WANT_SDP
<br>
<p>+     if ( mca_btl_tcp_component.sdp_enable ) {
<br>
<p>+         hints.ai_family = AF_INET6;
<br>
<p>+     }
<br>
<p>+#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hints.ai_socktype = SOCK_STREAM;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hints.ai_flags = AI_PASSIVE;
<br>
<p>&nbsp;
<br>
<p>@@ -555,7 +564,7 @@
<br>
<p>&nbsp;#endif /* IPV6_V6ONLY */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;#else
<br>
<p>-    ((struct sockaddr_in*) &amp;inaddr)-&gt;sin_family = AF_INET;
<br>
<p>+    ((struct sockaddr_in*) &amp;inaddr)-&gt;sin_family = af_family;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((struct sockaddr_in*) &amp;inaddr)-&gt;sin_addr.s_addr = INADDR_ANY;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;addrlen = sizeof(struct sockaddr_in);
<br>
<p>&nbsp;#endif
<br>
<p>@@ -600,7 +609,11 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto socket_binded;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-        if( AF_INET == af_family ) {
<br>
<p>+#if OPAL_WANT_SDP
<br>
<p>+     if( AF_INET == af_family|| AF_INET_SDP == af_family) {
<br>
<p>+#else
<br>
<p>+        if( AF_INET == af_family) {
<br>
<p>+#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_ERROR((&quot;bind() failed: no port available in the range
<br>
[%d..%d]&quot;,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_tcp_component.tcp_port_min,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_tcp_component.tcp_port_min + range));
<br>
<p>@@ -624,7 +637,11 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERROR;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;
<br>
<p>-    if (AF_INET == af_family) {
<br>
<p>+#if OPAL_WANT_SDP
<br>
<p>+        if( AF_INET == af_family|| AF_INET_SDP == af_family) {
<br>
<p>+#else
<br>
<p>+        if( AF_INET == af_family) {
<br>
<p>+#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_tcp_component.tcp_listen_port = ((struct sockaddr_in*)
<br>
&amp;inaddr)-&gt;sin_port;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_tcp_component.tcp_listen_sd = sd;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>@@ -660,7 +677,11 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* register listen port */
<br>
<p>-    if (AF_INET == af_family) {
<br>
<p>+#if OPAL_WANT_SDP
<br>
<p>+        if( AF_INET == af_family|| AF_INET_SDP == af_family) {
<br>
<p>+#else
<br>
<p>+        if( AF_INET == af_family) {
<br>
<p>+#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_event_set( &amp;mca_btl_tcp_component.tcp_recv_event,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_tcp_component.tcp_listen_sd,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_EV_READ|OPAL_EV_PERSIST,
<br>
<p>@@ -822,6 +843,12 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* create a TCP listen socket for incoming connection attempts */
<br>
<p>+#if OPAL_WANT_SDP
<br>
<p>+    if (mca_btl_tcp_component.sdp_enable) {
<br>
<p>+        if(OMPI_SUCCESS != (ret =
<br>
mca_btl_tcp_component_create_listen(AF_INET_SDP) )) {
<br>
<p>+           return 0;
<br>
<p>+        }
<br>
<p>+    } else {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(OMPI_SUCCESS != (ret =
<br>
mca_btl_tcp_component_create_listen(AF_INET) )) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>@@ -833,7 +860,21 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;#endif
<br>
<p>+    }
<br>
<p>&nbsp;
<br>
<p>+#else
<br>
<p>+    if(OMPI_SUCCESS != (ret =
<br>
mca_btl_tcp_component_create_listen(AF_INET) )) {
<br>
<p>+        return 0;
<br>
<p>+    }
<br>
<p>+#if OPAL_WANT_IPV6
<br>
<p>+    if((ret = mca_btl_tcp_component_create_listen(AF_INET6)) !=
<br>
OMPI_SUCCESS) {
<br>
<p>+        if (!(OMPI_ERR_IN_ERRNO == ret &amp;&amp; EAFNOSUPPORT ==
<br>
opal_socket_errno)) {
<br>
<p>+            opal_output (0, &quot;mca_btl_tcp_component: IPv6 listening
<br>
socket failed\n&quot;);
<br>
<p>+            return 0;
<br>
<p>+        }
<br>
<p>+    }
<br>
<p>+#endif
<br>
<p>+#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* publish TCP parameters with the MCA framework */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(OMPI_SUCCESS != (ret = mca_btl_tcp_component_exchange() )) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>Index: ompi/mca/btl/tcp/btl_tcp_endpoint.c
<br>
<p>===================================================================
<br>
<p>--- ompi/mca/btl/tcp/btl_tcp_endpoint.c   (revision 17027)
<br>
<p>+++ ompi/mca/btl/tcp/btl_tcp_endpoint.c   (working copy)
<br>
<p>@@ -535,7 +535,14 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;addrlen = sizeof (struct sockaddr_in6);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;#endif
<br>
<p>-    
<br>
<p>+
<br>
<p>+#if OPAL_WANT_SDP
<br>
<p>+   if ( mca_btl_tcp_component.sdp_enable){
<br>
<p>+       af_family = AF_INET_SDP;
<br>
<p>+       addrlen = sizeof(struct sockaddr_in);
<br>
<p>+    }
<br>
<p>+#endif
<br>
<p>+
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_endpoint-&gt;endpoint_sd = socket(af_family, SOCK_STREAM, 0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (btl_endpoint-&gt;endpoint_sd &lt; 0) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_endpoint-&gt;endpoint_retries++;
<br>
<p>Index: ompi/mca/btl/tcp/btl_tcp.h
<br>
<p>===================================================================
<br>
<p>--- ompi/mca/btl/tcp/btl_tcp.h      (revision 17027)
<br>
<p>+++ ompi/mca/btl/tcp/btl_tcp.h      (working copy)
<br>
<p>@@ -90,6 +90,9 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int    tcp_sndbuf;                      /**&lt; socket sndbuf size */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int    tcp_rcvbuf;                      /**&lt; socket rcvbuf size */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int    tcp_disable_family;              /**&lt; disabled AF_family */
<br>
<p>+#if OPAL_WANT_SDP
<br>
<p>+    int    sdp_enable;                      /**&lt; enable SDP         */
<br>
<p>+#endif /* OPAL_WANT_SDP */
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* free list of fragment descriptors */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_t tcp_frag_eager;
<br>
<p>Index: config/ompi_configure_options.m4
<br>
<p>===================================================================
<br>
<p>--- config/ompi_configure_options.m4      (revision 17027)
<br>
<p>+++ config/ompi_configure_options.m4      (working copy)
<br>
<p>@@ -683,6 +683,23 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Enable IPv6 support, but only if the underlying
<br>
system supports it])
<br>
<p>&nbsp;
<br>
<p>&nbsp;#
<br>
<p>+# Do we want to disable SDP support?
<br>
<p>+#
<br>
<p>+AC_MSG_CHECKING([if want SDP support])
<br>
<p>+AC_ARG_ENABLE([sdp],
<br>
<p>+    [AC_HELP_STRING([--enable-sdp],
<br>
<p>+        [Enable SDP support (default: disabled)])])
<br>
<p>+if test &quot;$enable_sdp&quot; = &quot;yes&quot;; then
<br>
<p>+    AC_MSG_RESULT([yes])
<br>
<p>+    opal_want_sdp=1
<br>
<p>+else
<br>
<p>+    AC_MSG_RESULT([no])
<br>
<p>+    opal_want_sdp=0
<br>
<p>+fi
<br>
<p>+AC_DEFINE_UNQUOTED([OPAL_ENABLE_SDP], [$opal_want_sdp],
<br>
<p>+                   [Enable SDP support])
<br>
<p>+
<br>
<p>+#
<br>
<p>&nbsp;# Do we want orterun's --prefix behavior to be enabled by default?
<br>
<p>&nbsp;#
<br>
<p>&nbsp;AC_MSG_CHECKING([if want orterun &quot;--prefix&quot; behavior to be enabled by
<br>
default])
<br>
<p>Index: orte/mca/oob/tcp/oob_tcp_peer.c
<br>
<p>===================================================================
<br>
<p>--- orte/mca/oob/tcp/oob_tcp_peer.c (revision 17027)
<br>
<p>+++ orte/mca/oob/tcp/oob_tcp_peer.c (working copy)
<br>
<p>@@ -371,7 +371,15 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_net_get_port((struct sockaddr*) &amp;inaddr));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;
<br>
<p>-        rc = mca_oob_tcp_peer_create_socket(peer, inaddr.ss_family);
<br>
<p>+#if OPAL_WANT_SDP
<br>
<p>+     if (mca_oob_tcp_component.sdp_enable) {
<br>
<p>+            rc = mca_oob_tcp_peer_create_socket(peer, AF_INET_SDP);
<br>
<p>+     } else {
<br>
<p>+         rc = mca_oob_tcp_peer_create_socket(peer, inaddr.ss_family);
<br>
<p>+     }
<br>
<p>+#else
<br>
<p>+     rc = mca_oob_tcp_peer_create_socket(peer, inaddr.ss_family);
<br>
<p>+#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != rc) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct timeval tv = { 1,0 };
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_evtimer_add(&amp;peer-&gt;peer_timer_event, &amp;tv);
<br>
<p>Index: orte/mca/oob/tcp/oob_tcp.c
<br>
<p>===================================================================
<br>
<p>--- orte/mca/oob/tcp/oob_tcp.c      (revision 17027)
<br>
<p>+++ orte/mca/oob/tcp/oob_tcp.c      (working copy)
<br>
<p>@@ -380,6 +380,13 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_oob_tcp_component.tcp6_listen_sd = -1;
<br>
<p>&nbsp;#endif  /* OPAL_WANT_IPV6 */
<br>
<p>&nbsp;
<br>
<p>+#if OPAL_WANT_SDP
<br>
<p>+    mca_base_param_reg_int(&amp;mca_oob_tcp_component.super.oob_base,
<br>
<p>+                           &quot;sdp_enable&quot;,&quot;Enable SDP for TCP
<br>
connections&quot;,
<br>
<p>+                            false, false,
<br>
<p>+                            0,
<br>
<p>+                            &amp;mca_oob_tcp_component.sdp_enable);
<br>
<p>+#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* initialize state */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_oob_tcp_component.tcp_shutdown = false;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_oob_tcp_component.tcp_listen_sd = -1;
<br>
<p>@@ -514,7 +521,7 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int error;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset(&amp;hints, 0, sizeof(hints));
<br>
<p>-        hints.ai_family = af_family;
<br>
<p>+        hints.ai_family = AF_INET6;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hints.ai_socktype = SOCK_STREAM;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hints.ai_flags = AI_PASSIVE;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>@@ -542,9 +549,6 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;#endif /* IPV6_V6ONLY */
<br>
<p>&nbsp;#else
<br>
<p>-    if (AF_INET != af_family) {
<br>
<p>-        return ORTE_ERROR;
<br>
<p>-    }
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((struct sockaddr_in*) &amp;inaddr)-&gt;sin_family = af_family;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((struct sockaddr_in*) &amp;inaddr)-&gt;sin_addr.s_addr = INADDR_ANY;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;addrlen = sizeof(struct sockaddr_in);
<br>
<p>@@ -590,7 +594,11 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto socket_binded;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-        if( AF_INET == af_family ) {
<br>
<p>+#if OPAL_WANT_SDP
<br>
<p>+        if( AF_INET == af_family || AF_INET_SDP == af_family) {
<br>
<p>+#else
<br>
<p>+     if( AF_INET == af_family) {
<br>
<p>+#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output( 0, &quot;bind() failed: no port available in the
<br>
range [%d..%d]&quot;,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_oob_tcp_component.tcp_port_min,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_oob_tcp_component.tcp_port_min + range);
<br>
<p>@@ -614,7 +622,11 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_ERROR;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;
<br>
<p>-    if (AF_INET == af_family) {
<br>
<p>+#if OPAL_WANT_SDP
<br>
<p>+        if( AF_INET == af_family || AF_INET_SDP == af_family) {
<br>
<p>+#else
<br>
<p>+        if( AF_INET == af_family) {
<br>
<p>+#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_oob_tcp_component.tcp_listen_port = ((struct sockaddr_in*)
<br>
&amp;inaddr)-&gt;sin_port;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_oob_tcp_component.tcp_listen_sd = *target_sd;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>@@ -647,7 +659,11 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* register listen port */
<br>
<p>-    if (AF_INET == af_family) {
<br>
<p>+#if OPAL_WANT_SDP
<br>
<p>+        if( AF_INET == af_family || AF_INET_SDP == af_family) {
<br>
<p>+#else
<br>
<p>+        if( AF_INET == af_family) {
<br>
<p>+#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_event_set(&amp;mca_oob_tcp_component.tcp_recv_event,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*target_sd,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_EV_READ|OPAL_EV_PERSIST,
<br>
<p>@@ -822,6 +838,7 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int flags;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* create a listen socket for incoming connections */
<br>
<p>+    /* FIXME add support for SDP */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_oob_tcp_component.tcp_listen_sd = socket(AF_INET, SOCK_STREAM,
<br>
0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(mca_oob_tcp_component.tcp_listen_sd &lt; 0) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0,&quot;mca_oob_tcp_component_init: socket() failed: %s
<br>
(%d)&quot;,
<br>
<p>@@ -1194,26 +1211,41 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;but can't do that since we weren't the HNP. */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_oob_tcp_component.tcp_listen_type = OOB_TCP_EVENT;
<br>
<p>&nbsp;
<br>
<p>-        rc =
<br>
mca_oob_tcp_create_listen(&amp;mca_oob_tcp_component.tcp_listen_sd,
<br>
<p>-                                       AF_INET);
<br>
<p>-        if (ORTE_SUCCESS != rc &amp;&amp; 
<br>
<p>-            (EAFNOSUPPORT != opal_socket_errno ||
<br>
<p>-             mca_oob_tcp_component.tcp_debug &gt;= OOB_TCP_DEBUG_CONNECT))
<br>
{
<br>
<p>-            opal_output(0,
<br>
<p>-                        &quot;mca_oob_tcp_init: unable to create IPv4 listen
<br>
socket: %s\n&quot;,
<br>
<p>+#if OPAL_WANT_SDP
<br>
<p>+        if ( mca_oob_tcp_component.sdp_enable){
<br>
<p>+                rc =
<br>
mca_oob_tcp_create_listen(&amp;mca_oob_tcp_component.tcp_listen_sd,
<br>
<p>+                                       AF_INET_SDP);
<br>
<p>+         if (ORTE_SUCCESS != rc &amp;&amp;
<br>
<p>+             (EAFNOSUPPORT != opal_socket_errno ||
<br>
<p>+              mca_oob_tcp_component.tcp_debug &gt;=
<br>
OOB_TCP_DEBUG_CONNECT)) {
<br>
<p>+              opal_output(0,
<br>
<p>+                        &quot;mca_oob_tcp_init: unable to create SDP listen
<br>
socket: %s\n&quot;,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_strerror(rc));
<br>
<p>-        }
<br>
<p>+            }
<br>
<p>+        } else 
<br>
<p>+#endif
<br>
<p>+     {
<br>
<p>+           rc =
<br>
mca_oob_tcp_create_listen(&amp;mca_oob_tcp_component.tcp_listen_sd,
<br>
<p>+                                         AF_INET);
<br>
<p>+        if (ORTE_SUCCESS != rc &amp;&amp; 
<br>
<p>+              (EAFNOSUPPORT != opal_socket_errno ||
<br>
<p>+               mca_oob_tcp_component.tcp_debug &gt;=
<br>
OOB_TCP_DEBUG_CONNECT)) {
<br>
<p>+               opal_output(0,
<br>
<p>+                         &quot;mca_oob_tcp_init: unable to create IPv4
<br>
listen socket: %s\n&quot;,
<br>
<p>+                         opal_strerror(rc));
<br>
<p>+         }
<br>
<p>&nbsp;#if OPAL_WANT_IPV6
<br>
<p>-        rc =
<br>
mca_oob_tcp_create_listen(&amp;mca_oob_tcp_component.tcp6_listen_sd,
<br>
<p>-                                       AF_INET6);
<br>
<p>-        if (ORTE_SUCCESS != rc &amp;&amp; 
<br>
<p>-            (EAFNOSUPPORT != opal_socket_errno ||
<br>
<p>-             mca_oob_tcp_component.tcp_debug &gt;= OOB_TCP_DEBUG_CONNECT))
<br>
{
<br>
<p>-            opal_output(0,
<br>
<p>-                        &quot;mca_oob_tcp_init: unable to create IPv6 listen
<br>
socket: %s\n&quot;,
<br>
<p>-                        opal_strerror(rc));
<br>
<p>-        }
<br>
<p>+           rc =
<br>
mca_oob_tcp_create_listen(&amp;mca_oob_tcp_component.tcp6_listen_sd,
<br>
<p>+                                         AF_INET6);
<br>
<p>+           if (ORTE_SUCCESS != rc &amp;&amp; 
<br>
<p>+              (EAFNOSUPPORT != opal_socket_errno ||
<br>
<p>+              mca_oob_tcp_component.tcp_debug &gt;=
<br>
OOB_TCP_DEBUG_CONNECT)) {
<br>
<p>+              opal_output(0,
<br>
<p>+                         &quot;mca_oob_tcp_init: unable to create IPv6
<br>
listen socket: %s\n&quot;,
<br>
<p>+                         opal_strerror(rc));
<br>
<p>+           }
<br>
<p>&nbsp;#endif
<br>
<p>+     }
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mca_oob_tcp_component.tcp_debug &gt;= OOB_TCP_DEBUG_INFO) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;%s accepting connections via event
<br>
library&quot;,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_PRINT(orte_process_info.my_name));
<br>
<p>Index: orte/mca/oob/tcp/oob_tcp.h
<br>
<p>===================================================================
<br>
<p>--- orte/mca/oob/tcp/oob_tcp.h      (revision 17027)
<br>
<p>+++ orte/mca/oob/tcp/oob_tcp.h      (working copy)
<br>
<p>@@ -217,6 +217,9 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                tcp6_port_min;        /**&lt; Minimum allowed port
<br>
for the OOB listen socket */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                tcp6_port_range;      /**&lt; Range of allowed TCP
<br>
ports */
<br>
<p>&nbsp;#endif  /* OPAL_WANT_IPV6 */
<br>
<p>+#if OPAL_WANT_SDP
<br>
<p>+    int                sdp_enable;           /**&lt; support for SDP */   
<br>
<p>+#endif /* OAP_WANT_SDP */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_mutex_t       tcp_lock;             /**&lt; lock for accessing
<br>
module state */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_t        tcp_events;           /**&lt; list of pending
<br>
events (accepts) */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_t        tcp_msg_post;         /**&lt; list of recieves user
<br>
has posted */
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>Verkhovsky Lenny.
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2911/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2912.php">Brian Barrett: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Previous message:</strong> <a href="2910.php">Gleb Natapov: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent	of any one user process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2912.php">Brian Barrett: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="2912.php">Brian Barrett: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2917.php">Patrick Geoffray: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
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
