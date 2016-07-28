<?
$subject_val = "Re: [OMPI devel] SDP support for OPEN-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 31 16:54:08 2007" -->
<!-- isoreceived="20071231215408" -->
<!-- sent="Mon, 31 Dec 2007 14:54:18 -0700" -->
<!-- isosent="20071231215418" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SDP support for OPEN-MPI" -->
<!-- id="CD61CE08-488C-4D13-8F8D-9A5A000D6FC4_at_open-mpi.org" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CA4296AD_at_exil.voltaire.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SDP support for OPEN-MPI<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-31 16:54:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2913.php">Jeff Squyres: "[OMPI devel] Cisco MTT runs"</a>
<li><strong>Previous message:</strong> <a href="2911.php">Lenny Verkhovsky: "[OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>In reply to:</strong> <a href="2911.php">Lenny Verkhovsky: "[OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2917.php">Patrick Geoffray: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since I used to be the OOB guy, I wanted to throw my $0.02 out  
<br>
there.  I think this is the right approach for adding such support.   
<br>
I haven't tested it, but if it works see no reason not to commit.
<br>
<p>Brian
<br>
<p><p>On Dec 31, 2007, at 1:41 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We would like to add SDP support for OPENMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SDP - Socket Direct Protocol is a byte-stream transport protocol  
</span><br>
<span class="quotelev1">&gt; implementing the TCP SOCK_STREAM semantics utilizing transport  
</span><br>
<span class="quotelev1">&gt; offloading capabilities of the InfiniBand fabric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.mellanox.com/pdf/whitepapers/SDP_Whitepaper.pdf">http://www.mellanox.com/pdf/whitepapers/SDP_Whitepaper.pdf</a>, http:// 
</span><br>
<span class="quotelev1">&gt; www.openfabrics.org/archives/aug2005datacenter/das_SDP_Linux.pdf ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SDP can be used to accelerate job start ( oob over sdp ) and IPoIB  
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The main idea is to use AF_INET_SDP protocol family instead of  
</span><br>
<span class="quotelev1">&gt; AF_INET and AF_INET6 when opening sockets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SDP will be used in OOB and BTL with appropriate mca parameters &#150;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             -mca btl_tcp_sdp_enable 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             -mca oob_tcp_sdp_enable 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since not all functions support this family, the changes were maid  
</span><br>
<span class="quotelev1">&gt; only in critical sections of the code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since SDP support is relevant only for InfiniBand Fabrics you need  
</span><br>
<span class="quotelev1">&gt; to configure sdp support with &#150;enable-sdp flag. SDP will be  
</span><br>
<span class="quotelev1">&gt; disabled by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure &#150;enable-sdp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Test results of running bandwidth and latency of SDP on 2 DDR nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BWsize             VERBS             IPoIB  connected            
</span><br>
<span class="quotelev1">&gt; IPoIB datagram              btl SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1000000            1507.68              
</span><br>
<span class="quotelev1">&gt; 665.70                          425.21                           
</span><br>
<span class="quotelev1">&gt; 1272.37
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LTsize
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5                      3.82                   
</span><br>
<span class="quotelev1">&gt; 28.83                            28.24                             
</span><br>
<span class="quotelev1">&gt; 25.73
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: opal/include/opal_config_bottom.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- opal/include/opal_config_bottom.h     (revision 17027)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ opal/include/opal_config_bottom.h     (working copy)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -509,7 +509,15 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #if !HAVE_DECL_PF_INET6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #define PF_INET6 PF_UNSPEC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if !HAVE_DECL_AF_INET_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#define AF_INET_SDP 27
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_ENABLE_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#define OPAL_WANT_SDP 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#define OPAL_WANT_SDP 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #if defined(__APPLE__) &amp;&amp; defined(HAVE_INTTYPES_H)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /* Prior to Mac OS X 10.3, the length modifier &quot;ll&quot; wasn't
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     supported, but &quot;q&quot; was for long long.  This isn't ANSI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: configure.ac
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- configure.ac  (revision 17027)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ configure.ac  (working copy)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -674,7 +674,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;netinet/in.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #endif])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -AC_CHECK_DECLS([AF_UNSPEC, PF_UNSPEC, AF_INET6, PF_INET6],
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +AC_CHECK_DECLS([AF_UNSPEC, PF_UNSPEC, AF_INET6, PF_INET6,  
</span><br>
<span class="quotelev1">&gt; AF_INET_SDP],
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 [], [], [AC_INCLUDES_DEFAULT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #if HAVE_SYS_SOCKET_H
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;sys/socket.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/tcp/btl_tcp_component.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/tcp/btl_tcp_component.c  (revision 17027)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/tcp/btl_tcp_component.c  (working copy)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -263,6 +263,10 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_component.tcp_disable_family =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          mca_btl_tcp_param_register_int (&quot;disable_family&quot;, NULL, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    mca_btl_tcp_component.sdp_enable =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_param_register_int(&quot;sdp_enable&quot;, &quot;Enable SDP  
</span><br>
<span class="quotelev1">&gt; for TCP connections&quot;, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -527,6 +531,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          memset (&amp;hints, 0, sizeof(hints));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          hints.ai_family = af_family;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +     if ( mca_btl_tcp_component.sdp_enable ) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +         hints.ai_family = AF_INET6;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          hints.ai_socktype = SOCK_STREAM;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          hints.ai_flags = AI_PASSIVE;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -555,7 +564,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #endif /* IPV6_V6ONLY */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    ((struct sockaddr_in*) &amp;inaddr)-&gt;sin_family = AF_INET;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    ((struct sockaddr_in*) &amp;inaddr)-&gt;sin_family = af_family;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ((struct sockaddr_in*) &amp;inaddr)-&gt;sin_addr.s_addr = INADDR_ANY;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      addrlen = sizeof(struct sockaddr_in);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -600,7 +609,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              goto socket_binded;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        if( AF_INET == af_family ) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +     if( AF_INET == af_family|| AF_INET_SDP == af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        if( AF_INET == af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              BTL_ERROR((&quot;bind() failed: no port available in the  
</span><br>
<span class="quotelev1">&gt; range [%d..%d]&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         mca_btl_tcp_component.tcp_port_min,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         mca_btl_tcp_component.tcp_port_min + range));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -624,7 +637,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (AF_INET == af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        if( AF_INET == af_family|| AF_INET_SDP == af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        if( AF_INET == af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          mca_btl_tcp_component.tcp_listen_port = ((struct  
</span><br>
<span class="quotelev1">&gt; sockaddr_in*) &amp;inaddr)-&gt;sin_port;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          mca_btl_tcp_component.tcp_listen_sd = sd;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -660,7 +677,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* register listen port */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (AF_INET == af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        if( AF_INET == af_family|| AF_INET_SDP == af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        if( AF_INET == af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          opal_event_set( &amp;mca_btl_tcp_component.tcp_recv_event,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                          mca_btl_tcp_component.tcp_listen_sd,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                          OPAL_EV_READ|OPAL_EV_PERSIST,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -822,6 +843,12 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* create a TCP listen socket for incoming connection attempts */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    if (mca_btl_tcp_component.sdp_enable) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        if(OMPI_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_component_create_listen(AF_INET_SDP) )) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +           return 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if(OMPI_SUCCESS != (ret = mca_btl_tcp_component_create_listen 
</span><br>
<span class="quotelev1">&gt; (AF_INET) )) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          return 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -833,7 +860,21 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    if(OMPI_SUCCESS != (ret = mca_btl_tcp_component_create_listen 
</span><br>
<span class="quotelev1">&gt; (AF_INET) )) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        return 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    if((ret = mca_btl_tcp_component_create_listen(AF_INET6)) !=  
</span><br>
<span class="quotelev1">&gt; OMPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        if (!(OMPI_ERR_IN_ERRNO == ret &amp;&amp; EAFNOSUPPORT ==  
</span><br>
<span class="quotelev1">&gt; opal_socket_errno)) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +            opal_output (0, &quot;mca_btl_tcp_component: IPv6 listening  
</span><br>
<span class="quotelev1">&gt; socket failed\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +            return 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* publish TCP parameters with the MCA framework */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if(OMPI_SUCCESS != (ret = mca_btl_tcp_component_exchange() )) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          return 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/tcp/btl_tcp_endpoint.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/tcp/btl_tcp_endpoint.c   (revision 17027)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/tcp/btl_tcp_endpoint.c   (working copy)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -535,7 +535,14 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          addrlen = sizeof (struct sockaddr_in6);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +   if ( mca_btl_tcp_component.sdp_enable){
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +       af_family = AF_INET_SDP;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +       addrlen = sizeof(struct sockaddr_in);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      btl_endpoint-&gt;endpoint_sd = socket(af_family, SOCK_STREAM, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (btl_endpoint-&gt;endpoint_sd &lt; 0) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          btl_endpoint-&gt;endpoint_retries++;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/tcp/btl_tcp.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/tcp/btl_tcp.h      (revision 17027)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/tcp/btl_tcp.h      (working copy)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -90,6 +90,9 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      int    tcp_sndbuf;                      /**&lt; socket sndbuf  
</span><br>
<span class="quotelev1">&gt; size */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      int    tcp_rcvbuf;                      /**&lt; socket rcvbuf  
</span><br>
<span class="quotelev1">&gt; size */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      int    tcp_disable_family;              /**&lt; disabled  
</span><br>
<span class="quotelev1">&gt; AF_family */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    int    sdp_enable;                      /**&lt; enable  
</span><br>
<span class="quotelev1">&gt; SDP         */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif /* OPAL_WANT_SDP */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* free list of fragment descriptors */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ompi_free_list_t tcp_frag_eager;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: config/ompi_configure_options.m4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- config/ompi_configure_options.m4      (revision 17027)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_configure_options.m4      (working copy)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -683,6 +683,23 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     [Enable IPv6 support, but only if the  
</span><br>
<span class="quotelev1">&gt; underlying system supports it])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +# Do we want to disable SDP support?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +AC_MSG_CHECKING([if want SDP support])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +AC_ARG_ENABLE([sdp],
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    [AC_HELP_STRING([--enable-sdp],
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        [Enable SDP support (default: disabled)])])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +if test &quot;$enable_sdp&quot; = &quot;yes&quot;; then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    opal_want_sdp=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    opal_want_sdp=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +AC_DEFINE_UNQUOTED([OPAL_ENABLE_SDP], [$opal_want_sdp],
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                   [Enable SDP support])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # Do we want orterun's --prefix behavior to be enabled by default?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  AC_MSG_CHECKING([if want orterun &quot;--prefix&quot; behavior to be enabled  
</span><br>
<span class="quotelev1">&gt; by default])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: orte/mca/oob/tcp/oob_tcp_peer.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- orte/mca/oob/tcp/oob_tcp_peer.c (revision 17027)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/oob/tcp/oob_tcp_peer.c (working copy)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -371,7 +371,15 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                          opal_net_get_port((struct sockaddr*)  
</span><br>
<span class="quotelev1">&gt; &amp;inaddr));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        rc = mca_oob_tcp_peer_create_socket(peer, inaddr.ss_family);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +     if (mca_oob_tcp_component.sdp_enable) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +            rc = mca_oob_tcp_peer_create_socket(peer, AF_INET_SDP);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +     } else {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +         rc = mca_oob_tcp_peer_create_socket(peer, inaddr.ss_family);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +     rc = mca_oob_tcp_peer_create_socket(peer, inaddr.ss_family);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              struct timeval tv = { 1,0 };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              opal_evtimer_add(&amp;peer-&gt;peer_timer_event, &amp;tv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: orte/mca/oob/tcp/oob_tcp.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- orte/mca/oob/tcp/oob_tcp.c      (revision 17027)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/oob/tcp/oob_tcp.c      (working copy)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -380,6 +380,13 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mca_oob_tcp_component.tcp6_listen_sd = -1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #endif  /* OPAL_WANT_IPV6 */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    mca_base_param_reg_int(&amp;mca_oob_tcp_component.super.oob_base,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                           &quot;sdp_enable&quot;,&quot;Enable SDP for TCP  
</span><br>
<span class="quotelev1">&gt; connections&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                            false, false,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                            0,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                            &amp;mca_oob_tcp_component.sdp_enable);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* initialize state */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mca_oob_tcp_component.tcp_shutdown = false;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mca_oob_tcp_component.tcp_listen_sd = -1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -514,7 +521,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          int error;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          memset(&amp;hints, 0, sizeof(hints));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        hints.ai_family = af_family;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        hints.ai_family = AF_INET6;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          hints.ai_socktype = SOCK_STREAM;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          hints.ai_flags = AI_PASSIVE;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -542,9 +549,6 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #endif /* IPV6_V6ONLY */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (AF_INET != af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ((struct sockaddr_in*) &amp;inaddr)-&gt;sin_family = af_family;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ((struct sockaddr_in*) &amp;inaddr)-&gt;sin_addr.s_addr = INADDR_ANY;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      addrlen = sizeof(struct sockaddr_in);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -590,7 +594,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              goto socket_binded;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        if( AF_INET == af_family ) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        if( AF_INET == af_family || AF_INET_SDP == af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +     if( AF_INET == af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              opal_output( 0, &quot;bind() failed: no port available in  
</span><br>
<span class="quotelev1">&gt; the range [%d..%d]&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           mca_oob_tcp_component.tcp_port_min,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           mca_oob_tcp_component.tcp_port_min + range);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -614,7 +622,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (AF_INET == af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        if( AF_INET == af_family || AF_INET_SDP == af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        if( AF_INET == af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          mca_oob_tcp_component.tcp_listen_port = ((struct  
</span><br>
<span class="quotelev1">&gt; sockaddr_in*) &amp;inaddr)-&gt;sin_port;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          mca_oob_tcp_component.tcp_listen_sd = *target_sd;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -647,7 +659,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* register listen port */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (AF_INET == af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        if( AF_INET == af_family || AF_INET_SDP == af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        if( AF_INET == af_family) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          opal_event_set(&amp;mca_oob_tcp_component.tcp_recv_event,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         *target_sd,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         OPAL_EV_READ|OPAL_EV_PERSIST,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -822,6 +838,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      int flags;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* create a listen socket for incoming connections */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    /* FIXME add support for SDP */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mca_oob_tcp_component.tcp_listen_sd = socket(AF_INET,  
</span><br>
<span class="quotelev1">&gt; SOCK_STREAM, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if(mca_oob_tcp_component.tcp_listen_sd &lt; 0) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          opal_output(0,&quot;mca_oob_tcp_component_init: socket()  
</span><br>
<span class="quotelev1">&gt; failed: %s (%d)&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -1194,26 +1211,41 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             but can't do that since we weren't the HNP. */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          mca_oob_tcp_component.tcp_listen_type = OOB_TCP_EVENT;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        rc = mca_oob_tcp_create_listen 
</span><br>
<span class="quotelev1">&gt; (&amp;mca_oob_tcp_component.tcp_listen_sd,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -                                       AF_INET);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != rc &amp;&amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -            (EAFNOSUPPORT != opal_socket_errno ||
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -             mca_oob_tcp_component.tcp_debug &gt;=  
</span><br>
<span class="quotelev1">&gt; OOB_TCP_DEBUG_CONNECT)) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -            opal_output(0,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -                        &quot;mca_oob_tcp_init: unable to create IPv4  
</span><br>
<span class="quotelev1">&gt; listen socket: %s\n&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        if ( mca_oob_tcp_component.sdp_enable){
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                rc = mca_oob_tcp_create_listen 
</span><br>
<span class="quotelev1">&gt; (&amp;mca_oob_tcp_component.tcp_listen_sd,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                                       AF_INET_SDP);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +         if (ORTE_SUCCESS != rc &amp;&amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +             (EAFNOSUPPORT != opal_socket_errno ||
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +              mca_oob_tcp_component.tcp_debug &gt;=  
</span><br>
<span class="quotelev1">&gt; OOB_TCP_DEBUG_CONNECT)) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +              opal_output(0,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                        &quot;mca_oob_tcp_init: unable to create SDP  
</span><br>
<span class="quotelev1">&gt; listen socket: %s\n&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                          opal_strerror(rc));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        } else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +     {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +           rc = mca_oob_tcp_create_listen 
</span><br>
<span class="quotelev1">&gt; (&amp;mca_oob_tcp_component.tcp_listen_sd,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                                         AF_INET);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != rc &amp;&amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +              (EAFNOSUPPORT != opal_socket_errno ||
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +               mca_oob_tcp_component.tcp_debug &gt;=  
</span><br>
<span class="quotelev1">&gt; OOB_TCP_DEBUG_CONNECT)) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +               opal_output(0,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                         &quot;mca_oob_tcp_init: unable to create IPv4  
</span><br>
<span class="quotelev1">&gt; listen socket: %s\n&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                         opal_strerror(rc));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        rc = mca_oob_tcp_create_listen 
</span><br>
<span class="quotelev1">&gt; (&amp;mca_oob_tcp_component.tcp6_listen_sd,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -                                       AF_INET6);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != rc &amp;&amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -            (EAFNOSUPPORT != opal_socket_errno ||
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -             mca_oob_tcp_component.tcp_debug &gt;=  
</span><br>
<span class="quotelev1">&gt; OOB_TCP_DEBUG_CONNECT)) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -            opal_output(0,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -                        &quot;mca_oob_tcp_init: unable to create IPv6  
</span><br>
<span class="quotelev1">&gt; listen socket: %s\n&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -                        opal_strerror(rc));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +           rc = mca_oob_tcp_create_listen 
</span><br>
<span class="quotelev1">&gt; (&amp;mca_oob_tcp_component.tcp6_listen_sd,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                                         AF_INET6);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +           if (ORTE_SUCCESS != rc &amp;&amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +              (EAFNOSUPPORT != opal_socket_errno ||
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +              mca_oob_tcp_component.tcp_debug &gt;=  
</span><br>
<span class="quotelev1">&gt; OOB_TCP_DEBUG_CONNECT)) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +              opal_output(0,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                         &quot;mca_oob_tcp_init: unable to create IPv6  
</span><br>
<span class="quotelev1">&gt; listen socket: %s\n&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                         opal_strerror(rc));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +           }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          if (mca_oob_tcp_component.tcp_debug &gt;= OOB_TCP_DEBUG_INFO) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              opal_output(0, &quot;%s accepting connections via event  
</span><br>
<span class="quotelev1">&gt; library&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                          ORTE_NAME_PRINT(orte_process_info.my_name));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: orte/mca/oob/tcp/oob_tcp.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- orte/mca/oob/tcp/oob_tcp.h      (revision 17027)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/oob/tcp/oob_tcp.h      (working copy)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -217,6 +217,9 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      int                tcp6_port_min;        /**&lt; Minimum allowed  
</span><br>
<span class="quotelev1">&gt; port for the OOB listen socket */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      int                tcp6_port_range;      /**&lt; Range of allowed  
</span><br>
<span class="quotelev1">&gt; TCP ports */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #endif  /* OPAL_WANT_IPV6 */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_SDP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    int                sdp_enable;           /**&lt; support for SDP */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#endif /* OAP_WANT_SDP */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      opal_mutex_t       tcp_lock;             /**&lt; lock for  
</span><br>
<span class="quotelev1">&gt; accessing module state */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      opal_list_t        tcp_events;           /**&lt; list of pending  
</span><br>
<span class="quotelev1">&gt; events (accepts) */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      opal_list_t        tcp_msg_post;         /**&lt; list of recieves  
</span><br>
<span class="quotelev1">&gt; user has posted */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Verkhovsky Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2912/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2913.php">Jeff Squyres: "[OMPI devel] Cisco MTT runs"</a>
<li><strong>Previous message:</strong> <a href="2911.php">Lenny Verkhovsky: "[OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>In reply to:</strong> <a href="2911.php">Lenny Verkhovsky: "[OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2917.php">Patrick Geoffray: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
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
