<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 26 12:51:10 2007" -->
<!-- isoreceived="20071026165110" -->
<!-- sent="Fri, 26 Oct 2007 12:50:47 -0400" -->
<!-- isosent="20071026165047" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16584" -->
<!-- id="FB163793-D4D9-487D-881D-2D7D060475B8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200710261636.l9QGapAd031828_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-26 12:50:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2508.php">George Bosilca: "[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>Previous message:</strong> <a href="2506.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>Can you send me a writeup on how this stuff works?  I can add it to  
<br>
the FAQ.
<br>
<p>Thanks!
<br>
<p><p>On Oct 26, 2007, at 12:36 PM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2007-10-26 12:36:51 EDT (Fri, 26 Oct 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 16584
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16584">https://svn.open-mpi.org/trac/ompi/changeset/16584</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Restrict the port range for the OOB and the BTL. Each protocols (v4  
</span><br>
<span class="quotelev1">&gt; and v6)
</span><br>
<span class="quotelev1">&gt; has his own range which is defined by a min value and a range. By  
</span><br>
<span class="quotelev1">&gt; default
</span><br>
<span class="quotelev1">&gt; there is no limitation on the port range, which is exactly the same
</span><br>
<span class="quotelev1">&gt; behavior as before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp.h           |    11 +
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_component.c |   146 ++++++++++++++ 
</span><br>
<span class="quotelev1">&gt; ++++++---------
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/oob/tcp/oob_tcp.c           |   189 ++++++++++++++ 
</span><br>
<span class="quotelev1">&gt; ++++++++++++++-----------
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/oob/tcp/oob_tcp.h           |    14 ++
</span><br>
<span class="quotelev1">&gt;    4 files changed, 254 insertions(+), 106 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp.h
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp.h	2007-10-26 12:36:51 EDT (Fri,  
</span><br>
<span class="quotelev1">&gt; 26 Oct 2007)
</span><br>
<span class="quotelev1">&gt; @@ -70,16 +70,21 @@
</span><br>
<span class="quotelev1">&gt;      opal_hash_table_t tcp_procs;            /**&lt; hash table of tcp  
</span><br>
<span class="quotelev1">&gt; proc structures */
</span><br>
<span class="quotelev1">&gt;      opal_list_t tcp_events;                 /**&lt; list of pending  
</span><br>
<span class="quotelev1">&gt; tcp events */
</span><br>
<span class="quotelev1">&gt;      opal_mutex_t tcp_lock;                  /**&lt; lock for  
</span><br>
<span class="quotelev1">&gt; accessing module state */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      opal_event_t tcp_recv_event;            /**&lt; recv event for  
</span><br>
<span class="quotelev1">&gt; IPv4 listen socket */
</span><br>
<span class="quotelev1">&gt; -#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; -    opal_event_t tcp6_recv_event;           /**&lt; recv event for  
</span><br>
<span class="quotelev1">&gt; IPv6 listen socket */
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt;      int tcp_listen_sd;                      /**&lt; IPv4 listen  
</span><br>
<span class="quotelev1">&gt; socket for incoming connection requests */
</span><br>
<span class="quotelev1">&gt;      unsigned short tcp_listen_port;         /**&lt; IPv4 listen port */
</span><br>
<span class="quotelev1">&gt; +    int32_t tcp_port_min;                   /**&lt; IPv4 minimum port */
</span><br>
<span class="quotelev1">&gt; +    int32_t tcp_port_range;                 /**&lt; IPv4 port range */
</span><br>
<span class="quotelev1">&gt;  #if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; +    opal_event_t tcp6_recv_event;           /**&lt; recv event for  
</span><br>
<span class="quotelev1">&gt; IPv6 listen socket */
</span><br>
<span class="quotelev1">&gt;      int tcp6_listen_sd;                     /**&lt; IPv6 listen  
</span><br>
<span class="quotelev1">&gt; socket for incoming connection requests */
</span><br>
<span class="quotelev1">&gt;      unsigned short tcp6_listen_port;        /**&lt; IPv6 listen port */
</span><br>
<span class="quotelev1">&gt; +    int32_t tcp6_port_min;                  /**&lt; IPv4 minimum port */
</span><br>
<span class="quotelev1">&gt; +    int32_t tcp6_port_range;                /**&lt; IPv4 port range */
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; +        /* Port range restriction */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      char*  tcp_if_include;                  /**&lt; comma seperated  
</span><br>
<span class="quotelev1">&gt; list of interface to include */
</span><br>
<span class="quotelev1">&gt;      char*  tcp_if_exclude;                  /**&lt; comma seperated  
</span><br>
<span class="quotelev1">&gt; list of interface to exclude */
</span><br>
<span class="quotelev1">&gt;      int    tcp_sndbuf;                      /**&lt; socket sndbuf  
</span><br>
<span class="quotelev1">&gt; size */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_component.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_component.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_component.c	2007-10-26 12:36:51  
</span><br>
<span class="quotelev1">&gt; EDT (Fri, 26 Oct 2007)
</span><br>
<span class="quotelev1">&gt; @@ -217,10 +217,33 @@
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_component.tcp_rcvbuf =
</span><br>
<span class="quotelev1">&gt;          mca_btl_tcp_param_register_int (&quot;rcvbuf&quot;, NULL, 128*1024);
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_component.tcp_endpoint_cache =
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_param_register_int (&quot;endpoint_cache&quot;, NULL,  
</span><br>
<span class="quotelev1">&gt; 30*1024);
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_param_register_int (&quot;endpoint_cache&quot;,
</span><br>
<span class="quotelev1">&gt; +            &quot;The size of the internal cache for each TCP  
</span><br>
<span class="quotelev1">&gt; connection. This cache is&quot;
</span><br>
<span class="quotelev1">&gt; +            &quot; used to reduce the number of syscalls, by replacing  
</span><br>
<span class="quotelev1">&gt; them with memcpy.&quot;
</span><br>
<span class="quotelev1">&gt; +            &quot; Every read will read the expected data plus the  
</span><br>
<span class="quotelev1">&gt; amount of the&quot;
</span><br>
<span class="quotelev1">&gt; +            &quot; endpoint_cache&quot;, 30*1024);
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_component.tcp_use_nodelay =
</span><br>
<span class="quotelev1">&gt;          !mca_btl_tcp_param_register_int (&quot;use_nagle&quot;, &quot;Whether to  
</span><br>
<span class="quotelev1">&gt; use Nagle's algorithm or not (using Nagle's algorithm may increase  
</span><br>
<span class="quotelev1">&gt; short message latency)&quot;, 0);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +    mca_btl_tcp_component.tcp_port_min =
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_param_register_int( &quot;port_min_v4&quot;,
</span><br>
<span class="quotelev1">&gt; +            &quot;The minimum port where the TCP BTL will try to bind  
</span><br>
<span class="quotelev1">&gt; (default 0)&quot;, 0 );
</span><br>
<span class="quotelev1">&gt; +    mca_btl_tcp_component.tcp_port_range =
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_param_register_int( &quot;port_range_v4&quot;,
</span><br>
<span class="quotelev1">&gt; +            &quot;The number of ports where the TCP BTL will try to  
</span><br>
<span class="quotelev1">&gt; bind (default 64K).&quot;
</span><br>
<span class="quotelev1">&gt; +            &quot; This parameter together with the port min, define a  
</span><br>
<span class="quotelev1">&gt; range of ports&quot;
</span><br>
<span class="quotelev1">&gt; +            &quot; where Open MPI will open sockets.&quot;,
</span><br>
<span class="quotelev1">&gt; +            64*1024 - mca_btl_tcp_component.tcp_port_min - 1);
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; +    mca_btl_tcp_component.tcp6_port_min =
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_param_register_int( &quot;port_min_v6&quot;,
</span><br>
<span class="quotelev1">&gt; +            &quot;The minimum port where the TCP BTL will try to bind  
</span><br>
<span class="quotelev1">&gt; (default 0)&quot;, 0 );
</span><br>
<span class="quotelev1">&gt; +    mca_btl_tcp_component.tcp6_port_range =
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_param_register_int( &quot;port_range_v6&quot;,
</span><br>
<span class="quotelev1">&gt; +            &quot;The number of ports where the TCP BTL will try to  
</span><br>
<span class="quotelev1">&gt; bind (default 64K).&quot;
</span><br>
<span class="quotelev1">&gt; +            &quot; This parameter together with the port min, define a  
</span><br>
<span class="quotelev1">&gt; range of ports&quot;
</span><br>
<span class="quotelev1">&gt; +            &quot; where Open MPI will open sockets.&quot;,
</span><br>
<span class="quotelev1">&gt; +            64*1024 - mca_btl_tcp_component.tcp6_port_min - 1);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_module.super.btl_exclusivity =   
</span><br>
<span class="quotelev1">&gt; MCA_BTL_EXCLUSIVITY_LOW;
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_module.super.btl_eager_limit = 64*1024;
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_module.super.btl_min_send_size = 64*1024;
</span><br>
<span class="quotelev1">&gt; @@ -482,11 +505,7 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      int flags;
</span><br>
<span class="quotelev1">&gt;      int sd;
</span><br>
<span class="quotelev1">&gt; -#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; -    struct sockaddr_in6 inaddr;
</span><br>
<span class="quotelev1">&gt; -#else
</span><br>
<span class="quotelev1">&gt; -    struct sockaddr_in inaddr;
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; +    struct sockaddr_storage inaddr;
</span><br>
<span class="quotelev1">&gt;      opal_socklen_t addrlen;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* create a listen socket for incoming connections */
</span><br>
<span class="quotelev1">&gt; @@ -499,24 +518,8 @@
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERR_IN_ERRNO;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    /* we now have a socket. Assign it to the real  
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_component */
</span><br>
<span class="quotelev1">&gt; -#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; -    if (AF_INET6 == af_family) {
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_component.tcp6_listen_sd = sd;
</span><br>
<span class="quotelev1">&gt; -        addrlen = sizeof(struct sockaddr_in6);
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_component.tcp_listen_sd = sd;
</span><br>
<span class="quotelev1">&gt; -        addrlen = sizeof(struct sockaddr_in);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -#else
</span><br>
<span class="quotelev1">&gt; -    mca_btl_tcp_component.tcp_listen_sd = sd;
</span><br>
<span class="quotelev1">&gt; -    addrlen = sizeof(struct sockaddr_in);
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_set_socket_options(sd);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    /* bind to all addresses and dynamically assigned port */
</span><br>
<span class="quotelev1">&gt; -    memset(&amp;inaddr, 0, sizeof(inaddr));
</span><br>
<span class="quotelev1">&gt;  #if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt;          struct addrinfo hints, *res = NULL;
</span><br>
<span class="quotelev1">&gt; @@ -531,7 +534,8 @@
</span><br>
<span class="quotelev1">&gt;              opal_output (0,
</span><br>
<span class="quotelev1">&gt;                 &quot;mca_btl_tcp_create_listen: unable to resolve. %s\n&quot;,
</span><br>
<span class="quotelev1">&gt;                 gai_strerror (error));
</span><br>
<span class="quotelev1">&gt; -               return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt; +            CLOSE_THE_SOCKET(sd);
</span><br>
<span class="quotelev1">&gt; +            return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          memcpy (&amp;inaddr, res-&gt;ai_addr, res-&gt;ai_addrlen);
</span><br>
<span class="quotelev1">&gt; @@ -551,39 +555,93 @@
</span><br>
<span class="quotelev1">&gt;  #endif /* IPV6_V6ONLY */
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt; -    inaddr.sin_family = AF_INET;
</span><br>
<span class="quotelev1">&gt; -    inaddr.sin_addr.s_addr = INADDR_ANY;
</span><br>
<span class="quotelev1">&gt; -    inaddr.sin_port = 0;
</span><br>
<span class="quotelev1">&gt; +    ((struct sockaddr_in*) &amp;inaddr)-&gt;sin_family = AF_INET;
</span><br>
<span class="quotelev1">&gt; +    ((struct sockaddr_in*) &amp;inaddr)-&gt;sin_addr.s_addr = INADDR_ANY;
</span><br>
<span class="quotelev1">&gt; +    addrlen = sizeof(struct sockaddr_in);
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if(bind(sd, (struct sockaddr*)&amp;inaddr, addrlen) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;bind() failed: %s (%d)&quot;,
</span><br>
<span class="quotelev1">&gt; -                   strerror(opal_socket_errno), opal_socket_errno));
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +    {  /* Don't reuse ports */
</span><br>
<span class="quotelev1">&gt; +        int flg = 0;
</span><br>
<span class="quotelev1">&gt; +        if (setsockopt (sd, SOL_SOCKET, SO_REUSEPORT, &amp;flg, sizeof  
</span><br>
<span class="quotelev1">&gt; (flg)) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +            BTL_ERROR((0, &quot;mca_btl_tcp_create_listen: unable to  
</span><br>
<span class="quotelev1">&gt; unset the &quot;
</span><br>
<span class="quotelev1">&gt; +                           &quot;SO_REUSEADDR option (%s:%d)\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                           strerror(opal_socket_errno),  
</span><br>
<span class="quotelev1">&gt; opal_socket_errno));
</span><br>
<span class="quotelev1">&gt; +            CLOSE_THE_SOCKET(sd);
</span><br>
<span class="quotelev1">&gt; +            return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    {
</span><br>
<span class="quotelev1">&gt; +        int index, range, port;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        if( AF_INET == af_family ) {
</span><br>
<span class="quotelev1">&gt; +            range = mca_btl_tcp_component.tcp_port_range;
</span><br>
<span class="quotelev1">&gt; +            port = mca_btl_tcp_component.tcp_port_min;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; +        if (AF_INET6 == af_family) {
</span><br>
<span class="quotelev1">&gt; +            range = mca_btl_tcp_component.tcp6_port_range;
</span><br>
<span class="quotelev1">&gt; +            port = mca_btl_tcp_component.tcp6_port_min;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +#endif  /* OPAL_WANT_IPV6 */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        for( index = 0;  index &lt; range; index++ ) {
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; +            ((struct sockaddr_in6*) &amp;inaddr)-&gt;sin6_port = port +  
</span><br>
<span class="quotelev1">&gt; index;
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +            ((struct sockaddr_in*) &amp;inaddr)-&gt;sin_port = port + index;
</span><br>
<span class="quotelev1">&gt; +#endif  /* OPAL_WANT_IPV6 */
</span><br>
<span class="quotelev1">&gt; +            if(bind(sd, (struct sockaddr*)&amp;inaddr, addrlen) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +                if( (EADDRINUSE == opal_socket_errno) ||  
</span><br>
<span class="quotelev1">&gt; (EADDRNOTAVAIL == opal_socket_errno) ) {
</span><br>
<span class="quotelev1">&gt; +                    continue;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +                BTL_ERROR((&quot;bind() failed: %s (%d)&quot;,
</span><br>
<span class="quotelev1">&gt; +                          strerror(opal_socket_errno),  
</span><br>
<span class="quotelev1">&gt; opal_socket_errno));
</span><br>
<span class="quotelev1">&gt; +                CLOSE_THE_SOCKET(sd);
</span><br>
<span class="quotelev1">&gt; +                return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            goto socket_binded;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        if( AF_INET == af_family ) {
</span><br>
<span class="quotelev1">&gt; +            BTL_ERROR((&quot;bind() failed: no port available in the  
</span><br>
<span class="quotelev1">&gt; range [%d..%d]&quot;,
</span><br>
<span class="quotelev1">&gt; +                       mca_btl_tcp_component.tcp_port_min,
</span><br>
<span class="quotelev1">&gt; +                       mca_btl_tcp_component.tcp_port_min + range));
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; +        if (AF_INET6 == af_family) {
</span><br>
<span class="quotelev1">&gt; +            BTL_ERROR((&quot;bind6() failed: no port available in the  
</span><br>
<span class="quotelev1">&gt; range [%d..%d]&quot;,
</span><br>
<span class="quotelev1">&gt; +                       mca_btl_tcp_component.tcp6_port_min,
</span><br>
<span class="quotelev1">&gt; +                       mca_btl_tcp_component.tcp6_port_min + range));
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +#endif  /* OPAL_WANT_IPV6 */
</span><br>
<span class="quotelev1">&gt; +        CLOSE_THE_SOCKET(sd);
</span><br>
<span class="quotelev1">&gt; +        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +  socket_binded:
</span><br>
<span class="quotelev1">&gt;      /* resolve system assignend port */
</span><br>
<span class="quotelev1">&gt;      if(getsockname(sd, (struct sockaddr*)&amp;inaddr, &amp;addrlen) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;          BTL_ERROR((&quot;getsockname() failed: %s (%d)&quot;,
</span><br>
<span class="quotelev1">&gt;                     strerror(opal_socket_errno), opal_socket_errno));
</span><br>
<span class="quotelev1">&gt; +        CLOSE_THE_SOCKET(sd);
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt;      if (AF_INET == af_family) {
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_component.tcp_listen_port = inaddr.sin6_port;
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_component.tcp_listen_port = ((struct  
</span><br>
<span class="quotelev1">&gt; sockaddr_in*) &amp;inaddr)-&gt;sin_port;
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_component.tcp_listen_sd = sd;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt;      if (AF_INET6 == af_family) {
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_component.tcp6_listen_port = inaddr.sin6_port;
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_component.tcp6_listen_port = ((struct  
</span><br>
<span class="quotelev1">&gt; sockaddr_in6*) &amp;inaddr)-&gt;sin6_port;
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_component.tcp6_listen_sd = sd;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -#else
</span><br>
<span class="quotelev1">&gt; -    mca_btl_tcp_component.tcp_listen_port = inaddr.sin_port;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* setup listen backlog to maximum allowed by kernel */
</span><br>
<span class="quotelev1">&gt;      if(listen(sd, SOMAXCONN) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;          BTL_ERROR((&quot;listen() failed: %s (%d)&quot;,
</span><br>
<span class="quotelev1">&gt;                     strerror(opal_socket_errno), opal_socket_errno));
</span><br>
<span class="quotelev1">&gt; +        CLOSE_THE_SOCKET(sd);
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -591,42 +649,36 @@
</span><br>
<span class="quotelev1">&gt;      if((flags = fcntl(sd, F_GETFL, 0)) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;          BTL_ERROR((&quot;fcntl(F_GETFL) failed: %s (%d)&quot;,
</span><br>
<span class="quotelev1">&gt;                     strerror(opal_socket_errno), opal_socket_errno));
</span><br>
<span class="quotelev1">&gt; +        CLOSE_THE_SOCKET(sd);
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          flags |= O_NONBLOCK;
</span><br>
<span class="quotelev1">&gt;          if(fcntl(sd, F_SETFL, flags) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;              BTL_ERROR((&quot;fcntl(F_SETFL) failed: %s (%d)&quot;,
</span><br>
<span class="quotelev1">&gt;                         strerror(opal_socket_errno),  
</span><br>
<span class="quotelev1">&gt; opal_socket_errno));
</span><br>
<span class="quotelev1">&gt; +            CLOSE_THE_SOCKET(sd);
</span><br>
<span class="quotelev1">&gt;              return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* register listen port */
</span><br>
<span class="quotelev1">&gt; -#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt;      if (AF_INET == af_family) {
</span><br>
<span class="quotelev1">&gt;          opal_event_set( &amp;mca_btl_tcp_component.tcp_recv_event,
</span><br>
<span class="quotelev1">&gt; -                        sd,
</span><br>
<span class="quotelev1">&gt; +                        mca_btl_tcp_component.tcp_listen_sd,
</span><br>
<span class="quotelev1">&gt;                          OPAL_EV_READ|OPAL_EV_PERSIST,
</span><br>
<span class="quotelev1">&gt;                          mca_btl_tcp_component_accept_handler,
</span><br>
<span class="quotelev1">&gt;                          0 );
</span><br>
<span class="quotelev1">&gt;          opal_event_add(&amp;mca_btl_tcp_component.tcp_recv_event, 0);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt;      if (AF_INET6 == af_family) {
</span><br>
<span class="quotelev1">&gt;          opal_event_set( &amp;mca_btl_tcp_component.tcp6_recv_event,
</span><br>
<span class="quotelev1">&gt; -                        sd,
</span><br>
<span class="quotelev1">&gt; +                        mca_btl_tcp_component.tcp6_listen_sd,
</span><br>
<span class="quotelev1">&gt;                          OPAL_EV_READ|OPAL_EV_PERSIST,
</span><br>
<span class="quotelev1">&gt;                          mca_btl_tcp_component_accept_handler,
</span><br>
<span class="quotelev1">&gt;                          0 );
</span><br>
<span class="quotelev1">&gt;          opal_event_add(&amp;mca_btl_tcp_component.tcp6_recv_event, 0);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -#else
</span><br>
<span class="quotelev1">&gt; -    opal_event_set( &amp;mca_btl_tcp_component.tcp_recv_event,
</span><br>
<span class="quotelev1">&gt; -                    mca_btl_tcp_component.tcp_listen_sd,
</span><br>
<span class="quotelev1">&gt; -                    OPAL_EV_READ|OPAL_EV_PERSIST,
</span><br>
<span class="quotelev1">&gt; -                    mca_btl_tcp_component_accept_handler,
</span><br>
<span class="quotelev1">&gt; -                    0 );
</span><br>
<span class="quotelev1">&gt; -    opal_event_add(&amp;mca_btl_tcp_component.tcp_recv_event,0);
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/oob/tcp/oob_tcp.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/oob/tcp/oob_tcp.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/oob/tcp/oob_tcp.c	2007-10-26 12:36:51 EDT (Fri,  
</span><br>
<span class="quotelev1">&gt; 26 Oct 2007)
</span><br>
<span class="quotelev1">&gt; @@ -356,10 +356,33 @@
</span><br>
<span class="quotelev1">&gt;                             10,
</span><br>
<span class="quotelev1">&gt;                              
</span><br>
<span class="quotelev1">&gt; &amp;mca_oob_tcp_component.tcp_copy_spin_count);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    mca_base_param_reg_int(&amp;mca_oob_tcp_component.super.oob_base,
</span><br>
<span class="quotelev1">&gt; +                           &quot;port_min_v4&quot;, &quot;Starting port allowed  
</span><br>
<span class="quotelev1">&gt; (IPv4)&quot;,
</span><br>
<span class="quotelev1">&gt; +                           false, false,
</span><br>
<span class="quotelev1">&gt; +                           0,
</span><br>
<span class="quotelev1">&gt; +                           &amp;mca_oob_tcp_component.tcp_port_min);
</span><br>
<span class="quotelev1">&gt; +    mca_base_param_reg_int(&amp;mca_oob_tcp_component.super.oob_base,
</span><br>
<span class="quotelev1">&gt; +                           &quot;port_range_v4&quot;, &quot;Range of allowed  
</span><br>
<span class="quotelev1">&gt; ports (IPv4)&quot;,
</span><br>
<span class="quotelev1">&gt; +                           false, false,
</span><br>
<span class="quotelev1">&gt; +                           64*1024 - 1 -  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_component.tcp_port_min,
</span><br>
<span class="quotelev1">&gt; +                           &amp;mca_oob_tcp_component.tcp_port_range);
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; +    mca_base_param_reg_int(&amp;mca_oob_tcp_component.super.oob_base,
</span><br>
<span class="quotelev1">&gt; +                           &quot;port_min_v6&quot;, &quot;Starting port allowed  
</span><br>
<span class="quotelev1">&gt; (IPv6)&quot;,
</span><br>
<span class="quotelev1">&gt; +                           false, false,
</span><br>
<span class="quotelev1">&gt; +                           0,
</span><br>
<span class="quotelev1">&gt; +                           &amp;mca_oob_tcp_component.tcp6_port_min);
</span><br>
<span class="quotelev1">&gt; +    mca_base_param_reg_int(&amp;mca_oob_tcp_component.super.oob_base,
</span><br>
<span class="quotelev1">&gt; +                           &quot;port_range_v6&quot;, &quot;Range of allowed  
</span><br>
<span class="quotelev1">&gt; ports (IPv6)&quot;,
</span><br>
<span class="quotelev1">&gt; +                           false, false,
</span><br>
<span class="quotelev1">&gt; +                           64*1024 - 1 -  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_component.tcp6_port_min,
</span><br>
<span class="quotelev1">&gt; +                           &amp;mca_oob_tcp_component.tcp6_port_range);
</span><br>
<span class="quotelev1">&gt; +    mca_oob_tcp_component.tcp6_listen_sd = -1;
</span><br>
<span class="quotelev1">&gt; +#endif  /* OPAL_WANT_IPV6 */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      /* initialize state */
</span><br>
<span class="quotelev1">&gt;      mca_oob_tcp_component.tcp_shutdown = false;
</span><br>
<span class="quotelev1">&gt;      mca_oob_tcp_component.tcp_listen_sd = -1;
</span><br>
<span class="quotelev1">&gt; -    mca_oob_tcp_component.tcp6_listen_sd = -1;
</span><br>
<span class="quotelev1">&gt;      mca_oob_tcp_component.tcp_match_count = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mca_oob_tcp_component.tcp_last_copy_time = 0;
</span><br>
<span class="quotelev1">&gt; @@ -471,14 +494,9 @@
</span><br>
<span class="quotelev1">&gt;      int flags;
</span><br>
<span class="quotelev1">&gt;      struct sockaddr_storage inaddr;
</span><br>
<span class="quotelev1">&gt;      opal_socklen_t addrlen;
</span><br>
<span class="quotelev1">&gt; -#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; -    struct addrinfo hints, *res = NULL;
</span><br>
<span class="quotelev1">&gt; -    int error;
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* create a listen socket for incoming connections */
</span><br>
<span class="quotelev1">&gt;      *target_sd = socket(af_family, SOCK_STREAM, 0);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;      if(*target_sd &lt; 0) {
</span><br>
<span class="quotelev1">&gt;          if (EAFNOSUPPORT != opal_socket_errno) {
</span><br>
<span class="quotelev1">&gt;              opal_output(0,&quot;mca_oob_tcp_component_init: socket()  
</span><br>
<span class="quotelev1">&gt; failed: %s (%d)&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -490,69 +508,125 @@
</span><br>
<span class="quotelev1">&gt;      /* setup socket options */
</span><br>
<span class="quotelev1">&gt;      mca_oob_tcp_set_socket_options(*target_sd);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    /* bind address */
</span><br>
<span class="quotelev1">&gt; -    memset(&amp;inaddr, 0, sizeof(inaddr));
</span><br>
<span class="quotelev1">&gt;  #if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; -    memset(&amp;hints, 0, sizeof(hints));
</span><br>
<span class="quotelev1">&gt; -    hints.ai_family = af_family;
</span><br>
<span class="quotelev1">&gt; -    hints.ai_socktype = SOCK_STREAM;
</span><br>
<span class="quotelev1">&gt; -    hints.ai_flags = AI_PASSIVE;
</span><br>
<span class="quotelev1">&gt; +    {
</span><br>
<span class="quotelev1">&gt; +        struct addrinfo hints, *res = NULL;
</span><br>
<span class="quotelev1">&gt; +        int error;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        memset(&amp;hints, 0, sizeof(hints));
</span><br>
<span class="quotelev1">&gt; +        hints.ai_family = af_family;
</span><br>
<span class="quotelev1">&gt; +        hints.ai_socktype = SOCK_STREAM;
</span><br>
<span class="quotelev1">&gt; +        hints.ai_flags = AI_PASSIVE;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if ((error = getaddrinfo(NULL, &quot;0&quot;, &amp;hints, &amp;res))) {
</span><br>
<span class="quotelev1">&gt; -        opal_output (0,
</span><br>
<span class="quotelev1">&gt; -                     &quot;mca_oob_tcp_create_listen: unable to  
</span><br>
<span class="quotelev1">&gt; resolve. %s\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                     gai_strerror (error));
</span><br>
<span class="quotelev1">&gt; -        return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +        if ((error = getaddrinfo(NULL, &quot;0&quot;, &amp;hints, &amp;res))) {
</span><br>
<span class="quotelev1">&gt; +            opal_output (0,
</span><br>
<span class="quotelev1">&gt; +                        &quot;mca_oob_tcp_create_listen: unable to  
</span><br>
<span class="quotelev1">&gt; resolve. %s\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                        gai_strerror (error));
</span><br>
<span class="quotelev1">&gt; +            return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    memcpy (&amp;inaddr, res-&gt;ai_addr, res-&gt;ai_addrlen);
</span><br>
<span class="quotelev1">&gt; -    addrlen = res-&gt;ai_addrlen;
</span><br>
<span class="quotelev1">&gt; -    freeaddrinfo (res);
</span><br>
<span class="quotelev1">&gt; +        memcpy (&amp;inaddr, res-&gt;ai_addr, res-&gt;ai_addrlen);
</span><br>
<span class="quotelev1">&gt; +        addrlen = res-&gt;ai_addrlen;
</span><br>
<span class="quotelev1">&gt; +        freeaddrinfo (res);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #ifdef IPV6_V6ONLY
</span><br>
<span class="quotelev1">&gt; -    /* in case of AF_INET6, disable v4-mapped addresses */
</span><br>
<span class="quotelev1">&gt; -    if (AF_INET6 == af_family) {
</span><br>
<span class="quotelev1">&gt; -        int flg = 0;
</span><br>
<span class="quotelev1">&gt; -        if (setsockopt (*target_sd, IPPROTO_IPV6, IPV6_V6ONLY,
</span><br>
<span class="quotelev1">&gt; -                        &amp;flg, sizeof (flg)) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; -            opal_output(0,
</span><br>
<span class="quotelev1">&gt; -                        &quot;mca_oob_tcp_create_listen: unable to  
</span><br>
<span class="quotelev1">&gt; disable v4-mapped addresses\n&quot;);
</span><br>
<span class="quotelev1">&gt; +        /* in case of AF_INET6, disable v4-mapped addresses */
</span><br>
<span class="quotelev1">&gt; +        if (AF_INET6 == af_family) {
</span><br>
<span class="quotelev1">&gt; +            int flg = 0;
</span><br>
<span class="quotelev1">&gt; +            if (setsockopt (*target_sd, IPPROTO_IPV6, IPV6_V6ONLY,
</span><br>
<span class="quotelev1">&gt; +                            &amp;flg, sizeof (flg)) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +                opal_output(0,
</span><br>
<span class="quotelev1">&gt; +                            &quot;mca_oob_tcp_create_listen: unable to  
</span><br>
<span class="quotelev1">&gt; disable v4-mapped addresses\n&quot;);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  #endif /* IPV6_V6ONLY */
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt; -    if (AF_INET == af_family) {
</span><br>
<span class="quotelev1">&gt; -        struct sockaddr_in * in = (struct sockaddr_in*) &amp;inaddr;
</span><br>
<span class="quotelev1">&gt; -        in-&gt;sin_family = af_family;
</span><br>
<span class="quotelev1">&gt; -        in-&gt;sin_addr.s_addr = INADDR_ANY;
</span><br>
<span class="quotelev1">&gt; -        in-&gt;sin_port = 0;
</span><br>
<span class="quotelev1">&gt; -        addrlen = sizeof(struct sockaddr_in);
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; +    if (AF_INET != af_family) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    ((struct sockaddr_in*) &amp;inaddr)-&gt;sin_family = af_family;
</span><br>
<span class="quotelev1">&gt; +    ((struct sockaddr_in*) &amp;inaddr)-&gt;sin_addr.s_addr = INADDR_ANY;
</span><br>
<span class="quotelev1">&gt; +    addrlen = sizeof(struct sockaddr_in);
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (bind(*target_sd, (struct sockaddr*)&amp;inaddr, addrlen) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; -        opal_output(0,&quot;mca_oob_tcp_create_listen: bind() failed: % 
</span><br>
<span class="quotelev1">&gt; s (%d)&quot;,
</span><br>
<span class="quotelev1">&gt; -                    strerror(opal_socket_errno), opal_socket_errno);
</span><br>
<span class="quotelev1">&gt; -        return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt; +    {  /* Don't reuse ports */
</span><br>
<span class="quotelev1">&gt; +        int flg = 0;
</span><br>
<span class="quotelev1">&gt; +        if (setsockopt (*target_sd, SOL_SOCKET, SO_REUSEPORT,  
</span><br>
<span class="quotelev1">&gt; &amp;flg, sizeof (flg)) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +            opal_output(0, &quot;mca_oob_tcp_create_listen: unable to  
</span><br>
<span class="quotelev1">&gt; unset the &quot;
</span><br>
<span class="quotelev1">&gt; +                        &quot;SO_REUSEADDR option (%s:%d)\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                        strerror(opal_socket_errno),  
</span><br>
<span class="quotelev1">&gt; opal_socket_errno);
</span><br>
<span class="quotelev1">&gt; +            CLOSE_THE_SOCKET(*target_sd);
</span><br>
<span class="quotelev1">&gt; +            return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    {
</span><br>
<span class="quotelev1">&gt; +        int index, range, port;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        if( AF_INET == af_family ) {
</span><br>
<span class="quotelev1">&gt; +            range = mca_oob_tcp_component.tcp_port_range;
</span><br>
<span class="quotelev1">&gt; +            port = mca_oob_tcp_component.tcp_port_min;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; +        if (AF_INET6 == af_family) {
</span><br>
<span class="quotelev1">&gt; +            range = mca_oob_tcp_component.tcp6_port_range;
</span><br>
<span class="quotelev1">&gt; +            port = mca_oob_tcp_component.tcp6_port_min;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +#endif  /* OPAL_WANT_IPV6 */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        for( index = 0;  index &lt; range; index++ ) {
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; +            ((struct sockaddr_in6*) &amp;inaddr)-&gt;sin6_port = port +  
</span><br>
<span class="quotelev1">&gt; index;
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +            ((struct sockaddr_in*) &amp;inaddr)-&gt;sin_port = port + index;
</span><br>
<span class="quotelev1">&gt; +#endif  /* OPAL_WANT_IPV6 */
</span><br>
<span class="quotelev1">&gt; +            if(bind(*target_sd, (struct sockaddr*)&amp;inaddr,  
</span><br>
<span class="quotelev1">&gt; addrlen) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +                if( (EADDRINUSE == opal_socket_errno) ||  
</span><br>
<span class="quotelev1">&gt; (EADDRNOTAVAIL == opal_socket_errno) ) {
</span><br>
<span class="quotelev1">&gt; +                    continue;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +                opal_output( 0, &quot;bind() failed: %s (%d)&quot;,
</span><br>
<span class="quotelev1">&gt; +                             strerror(opal_socket_errno),  
</span><br>
<span class="quotelev1">&gt; opal_socket_errno );
</span><br>
<span class="quotelev1">&gt; +                CLOSE_THE_SOCKET(*target_sd);
</span><br>
<span class="quotelev1">&gt; +                return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            goto socket_binded;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        if( AF_INET == af_family ) {
</span><br>
<span class="quotelev1">&gt; +            opal_output( 0, &quot;bind() failed: no port available in  
</span><br>
<span class="quotelev1">&gt; the range [%d..%d]&quot;,
</span><br>
<span class="quotelev1">&gt; +                         mca_oob_tcp_component.tcp_port_min,
</span><br>
<span class="quotelev1">&gt; +                         mca_oob_tcp_component.tcp_port_min + range);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; +        if (AF_INET6 == af_family) {
</span><br>
<span class="quotelev1">&gt; +            opal_output( 0, &quot;bind6() failed: no port available in  
</span><br>
<span class="quotelev1">&gt; the range [%d..%d]&quot;,
</span><br>
<span class="quotelev1">&gt; +                         mca_oob_tcp_component.tcp6_port_min,
</span><br>
<span class="quotelev1">&gt; +                         mca_oob_tcp_component.tcp6_port_min +  
</span><br>
<span class="quotelev1">&gt; range );
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +#endif  /* OPAL_WANT_IPV6 */
</span><br>
<span class="quotelev1">&gt; +        CLOSE_THE_SOCKET(*target_sd);
</span><br>
<span class="quotelev1">&gt; +        return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +  socket_binded:
</span><br>
<span class="quotelev1">&gt;      /* resolve system assigned port */
</span><br>
<span class="quotelev1">&gt;      if (getsockname(*target_sd, (struct sockaddr*)&amp;inaddr,  
</span><br>
<span class="quotelev1">&gt; &amp;addrlen) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;          opal_output(0, &quot;mca_oob_tcp_create_listen: getsockname(): % 
</span><br>
<span class="quotelev1">&gt; s (%d)&quot;,
</span><br>
<span class="quotelev1">&gt;                      strerror(opal_socket_errno), opal_socket_errno);
</span><br>
<span class="quotelev1">&gt; +        CLOSE_THE_SOCKET(*target_sd);
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (AF_INET == af_family) {
</span><br>
<span class="quotelev1">&gt; -        mca_oob_tcp_component.tcp_listen_port =
</span><br>
<span class="quotelev1">&gt; -            ((struct sockaddr_in*) &amp;inaddr)-&gt;sin_port;
</span><br>
<span class="quotelev1">&gt; -    } else if (AF_INET6 == af_family) {
</span><br>
<span class="quotelev1">&gt; -        mca_oob_tcp_component.tcp6_listen_port =
</span><br>
<span class="quotelev1">&gt; -            ((struct sockaddr_in6*) &amp;inaddr)-&gt;sin6_port;
</span><br>
<span class="quotelev1">&gt; +        mca_oob_tcp_component.tcp_listen_port = ((struct  
</span><br>
<span class="quotelev1">&gt; sockaddr_in*) &amp;inaddr)-&gt;sin_port;
</span><br>
<span class="quotelev1">&gt; +        mca_oob_tcp_component.tcp_listen_sd = *target_sd;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; +    if (AF_INET6 == af_family) {
</span><br>
<span class="quotelev1">&gt; +        mca_oob_tcp_component.tcp6_listen_port = ((struct  
</span><br>
<span class="quotelev1">&gt; sockaddr_in6*) &amp;inaddr)-&gt;sin6_port;
</span><br>
<span class="quotelev1">&gt; +        mca_oob_tcp_component.tcp6_listen_sd = *target_sd;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +#endif  /* OPAL_WANT_IPV6 */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      /* setup listen backlog to maximum allowed by kernel */
</span><br>
<span class="quotelev1">&gt;      if(listen(*target_sd, SOMAXCONN) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;          opal_output(0, &quot;mca_oob_tcp_component_init: listen(): %s (% 
</span><br>
<span class="quotelev1">&gt; d)&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -582,7 +656,9 @@
</span><br>
<span class="quotelev1">&gt;                         mca_oob_tcp_recv_handler,
</span><br>
<span class="quotelev1">&gt;                         0);
</span><br>
<span class="quotelev1">&gt;          opal_event_add(&amp;mca_oob_tcp_component.tcp_recv_event, 0);
</span><br>
<span class="quotelev1">&gt; -    } else if (AF_INET6 == af_family) {
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; +    if (AF_INET6 == af_family) {
</span><br>
<span class="quotelev1">&gt;          opal_event_set(&amp;mca_oob_tcp_component.tcp6_recv_event,
</span><br>
<span class="quotelev1">&gt;                         *target_sd,
</span><br>
<span class="quotelev1">&gt;                         OPAL_EV_READ|OPAL_EV_PERSIST,
</span><br>
<span class="quotelev1">&gt; @@ -590,7 +666,7 @@
</span><br>
<span class="quotelev1">&gt;                         0);
</span><br>
<span class="quotelev1">&gt;          opal_event_add(&amp;mca_oob_tcp_component.tcp6_recv_event, 0);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +#endif  /* OPAL_WANT_IPV6 */
</span><br>
<span class="quotelev1">&gt;      return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -909,8 +985,11 @@
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* accept new connections on the listen socket */
</span><br>
<span class="quotelev1">&gt; -    if((mca_oob_tcp_component.tcp_listen_sd == sd) ||
</span><br>
<span class="quotelev1">&gt; -       (mca_oob_tcp_component.tcp6_listen_sd == sd)) {
</span><br>
<span class="quotelev1">&gt; +    if( (mca_oob_tcp_component.tcp_listen_sd == sd)
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; +        || (mca_oob_tcp_component.tcp6_listen_sd == sd)
</span><br>
<span class="quotelev1">&gt; +#endif  /* OPAL_WANT_IPV6 */
</span><br>
<span class="quotelev1">&gt; +       ) {
</span><br>
<span class="quotelev1">&gt;          mca_oob_tcp_accept(sd);
</span><br>
<span class="quotelev1">&gt;          return;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -1040,8 +1119,9 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* intialize event library */
</span><br>
<span class="quotelev1">&gt;      memset(&amp;mca_oob_tcp_component.tcp_recv_event, 0, sizeof 
</span><br>
<span class="quotelev1">&gt; (opal_event_t));
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt;      memset(&amp;mca_oob_tcp_component.tcp6_recv_event, 0, sizeof 
</span><br>
<span class="quotelev1">&gt; (opal_event_t));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +#endif  /* OPAL_WANT_IPV6 */
</span><br>
<span class="quotelev1">&gt;      return &amp;mca_oob_tcp;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -1161,12 +1241,14 @@
</span><br>
<span class="quotelev1">&gt;          if (OOB_TCP_EVENT == mca_oob_tcp_component.tcp_listen_type) {
</span><br>
<span class="quotelev1">&gt;              opal_event_del(&amp;mca_oob_tcp_component.tcp_recv_event);
</span><br>
<span class="quotelev1">&gt;              CLOSE_THE_SOCKET(mca_oob_tcp_component.tcp_listen_sd);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +            mca_oob_tcp_component.tcp_listen_sd = -1;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt;              if (mca_oob_tcp_component.tcp6_listen_sd &gt;= 0) {
</span><br>
<span class="quotelev1">&gt;                  opal_event_del 
</span><br>
<span class="quotelev1">&gt; (&amp;mca_oob_tcp_component.tcp6_recv_event);
</span><br>
<span class="quotelev1">&gt;                  CLOSE_THE_SOCKET 
</span><br>
<span class="quotelev1">&gt; (mca_oob_tcp_component.tcp6_listen_sd);
</span><br>
<span class="quotelev1">&gt;                  mca_oob_tcp_component.tcp6_listen_sd = -1;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; +#endif  /* OPAL_WANT_IPV6 */
</span><br>
<span class="quotelev1">&gt;          } else if (OOB_TCP_LISTEN_THREAD ==  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_component.tcp_listen_type) {
</span><br>
<span class="quotelev1">&gt;              void *data;
</span><br>
<span class="quotelev1">&gt;              /* adi_at_2007-04-12: Bug, FIXME:
</span><br>
<span class="quotelev1">&gt; @@ -1251,10 +1333,13 @@
</span><br>
<span class="quotelev1">&gt;          if (dev-&gt;if_addr.ss_family == AF_INET) {
</span><br>
<span class="quotelev1">&gt;              ptr += sprintf(ptr, &quot;tcp://%s:%d&quot;,  
</span><br>
<span class="quotelev1">&gt; opal_net_get_hostname((struct sockaddr*) &amp;dev-&gt;if_addr),
</span><br>
<span class="quotelev1">&gt;                             ntohs 
</span><br>
<span class="quotelev1">&gt; (mca_oob_tcp_component.tcp_listen_port));
</span><br>
<span class="quotelev1">&gt; -        } else if (dev-&gt;if_addr.ss_family == AF_INET6) {
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; +        if (dev-&gt;if_addr.ss_family == AF_INET6) {
</span><br>
<span class="quotelev1">&gt;              ptr += sprintf(ptr, &quot;tcp6://%s:%d&quot;,  
</span><br>
<span class="quotelev1">&gt; opal_net_get_hostname((struct sockaddr*) &amp;dev-&gt;if_addr),
</span><br>
<span class="quotelev1">&gt;                             ntohs 
</span><br>
<span class="quotelev1">&gt; (mca_oob_tcp_component.tcp6_listen_port));
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; +#endif  /* OPAL_WANT_IPV6 */
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      return contact_info;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/oob/tcp/oob_tcp.h
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/oob/tcp/oob_tcp.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/oob/tcp/oob_tcp.h	2007-10-26 12:36:51 EDT (Fri,  
</span><br>
<span class="quotelev1">&gt; 26 Oct 2007)
</span><br>
<span class="quotelev1">&gt; @@ -196,10 +196,6 @@
</span><br>
<span class="quotelev1">&gt;      mca_oob_base_component_1_0_0_t super;  /**&lt; base OOB component */
</span><br>
<span class="quotelev1">&gt;      char*              tcp_include;          /**&lt; list of ip  
</span><br>
<span class="quotelev1">&gt; interfaces to include */
</span><br>
<span class="quotelev1">&gt;      char*              tcp_exclude;          /**&lt; list of ip  
</span><br>
<span class="quotelev1">&gt; interfaces to exclude */
</span><br>
<span class="quotelev1">&gt; -    int                tcp_listen_sd;        /**&lt; listen socket  
</span><br>
<span class="quotelev1">&gt; for incoming IPv4 connection requests */
</span><br>
<span class="quotelev1">&gt; -    unsigned short     tcp_listen_port;      /**&lt; IPv4 listen port */
</span><br>
<span class="quotelev1">&gt; -    int                tcp6_listen_sd;       /**&lt; listen socket  
</span><br>
<span class="quotelev1">&gt; for incoming IPv6 connection requests */
</span><br>
<span class="quotelev1">&gt; -    unsigned short     tcp6_listen_port;     /**&lt; IPv6 listen port */
</span><br>
<span class="quotelev1">&gt;      opal_list_t        tcp_peer_list;        /**&lt; list of peers  
</span><br>
<span class="quotelev1">&gt; sorted in mru order */
</span><br>
<span class="quotelev1">&gt;      opal_hash_table_t  tcp_peers;            /**&lt; peers sorted by  
</span><br>
<span class="quotelev1">&gt; name */
</span><br>
<span class="quotelev1">&gt;      opal_hash_table_t  tcp_peer_names;       /**&lt; cache of peer  
</span><br>
<span class="quotelev1">&gt; contact info sorted by name */
</span><br>
<span class="quotelev1">&gt; @@ -210,7 +206,17 @@
</span><br>
<span class="quotelev1">&gt;      int                tcp_rcvbuf;           /**&lt; socket recv  
</span><br>
<span class="quotelev1">&gt; buffer size */
</span><br>
<span class="quotelev1">&gt;      opal_free_list_t   tcp_msgs;             /**&lt; free list of  
</span><br>
<span class="quotelev1">&gt; messages */
</span><br>
<span class="quotelev1">&gt;      opal_event_t       tcp_recv_event;       /**&lt; event structure  
</span><br>
<span class="quotelev1">&gt; for IPv4 recvs */
</span><br>
<span class="quotelev1">&gt; +    int                tcp_listen_sd;        /**&lt; listen socket  
</span><br>
<span class="quotelev1">&gt; for incoming IPv4 connection requests */
</span><br>
<span class="quotelev1">&gt; +    unsigned short     tcp_listen_port;      /**&lt; IPv4 listen port */
</span><br>
<span class="quotelev1">&gt; +    int                tcp_port_min;         /**&lt; Minimum allowed  
</span><br>
<span class="quotelev1">&gt; port for the OOB listen socket */
</span><br>
<span class="quotelev1">&gt; +    int                tcp_port_range;       /**&lt; Range of allowed  
</span><br>
<span class="quotelev1">&gt; TCP ports */
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt;      opal_event_t       tcp6_recv_event;      /**&lt; event structure  
</span><br>
<span class="quotelev1">&gt; for IPv6 recvs */
</span><br>
<span class="quotelev1">&gt; +    int                tcp6_listen_sd;       /**&lt; listen socket  
</span><br>
<span class="quotelev1">&gt; for incoming IPv6 connection requests */
</span><br>
<span class="quotelev1">&gt; +    unsigned short     tcp6_listen_port;     /**&lt; IPv6 listen port */
</span><br>
<span class="quotelev1">&gt; +    int                tcp6_port_min;        /**&lt; Minimum allowed  
</span><br>
<span class="quotelev1">&gt; port for the OOB listen socket */
</span><br>
<span class="quotelev1">&gt; +    int                tcp6_port_range;      /**&lt; Range of allowed  
</span><br>
<span class="quotelev1">&gt; TCP ports */
</span><br>
<span class="quotelev1">&gt; +#endif  /* OPAL_WANT_IPV6 */
</span><br>
<span class="quotelev1">&gt;      opal_mutex_t       tcp_lock;             /**&lt; lock for  
</span><br>
<span class="quotelev1">&gt; accessing module state */
</span><br>
<span class="quotelev1">&gt;      opal_list_t        tcp_events;           /**&lt; list of pending  
</span><br>
<span class="quotelev1">&gt; events (accepts) */
</span><br>
<span class="quotelev1">&gt;      opal_list_t        tcp_msg_post;         /**&lt; list of recieves  
</span><br>
<span class="quotelev1">&gt; user has posted */
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2508.php">George Bosilca: "[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>Previous message:</strong> <a href="2506.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
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
