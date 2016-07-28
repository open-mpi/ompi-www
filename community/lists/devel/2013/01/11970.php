<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 - trunk/ompi/mca/btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 10:27:55 2013" -->
<!-- isoreceived="20130123152755" -->
<!-- sent="Wed, 23 Jan 2013 10:27:48 -0500" -->
<!-- isosent="20130123152748" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 - trunk/ompi/mca/btl/tcp" -->
<!-- id="C9DA2F35-7C5D-4327-9EF4-FA4F2319F164_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC3E08DC8C_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 - trunk/ompi/mca/btl/tcp<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-23 10:27:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11971.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework"</a>
<li><strong>Previous message:</strong> <a href="11969.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework"</a>
<li><strong>In reply to:</strong> <a href="11966.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 -	trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11972.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="11972.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 -	trunk/ompi/mca/btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While we always strive to improve this functionality, it was available as a separate software packages for quite some time.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Jan 23, 2013, at 08:05 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Are you going to develop anything further with regards to this functionality, and target that stuff for v1.7?  Or should all of this just wait until 1.9?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I don't really care either way; I'm asking out of curiosity)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2013, at 7:24 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Nobody cared about error cases so far, I don't personally see any incentive to push this patch in the 1.7 right now. But I won't be against as it is not hurting either.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 22, 2013, at 16:28 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Similar question on this one: should it be CMR'ed to v1.7?  (I kinda doubt it's appropriate for v1.6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 21, 2013, at 6:41 AM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2013-01-21 06:41:08 EST (Mon, 21 Jan 2013)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 27881
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27881">https://svn.open-mpi.org/trac/ompi/changeset/27881</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Make the TCP BTL really fail-safe. It now trigger the error callback on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all pending fragments when the destination goes down. This allows the PML
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to recalibrate its behavior, either find an alternate route or just give up.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c |    29 +++++++++++++++++++++++++++--           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/tcp/btl_tcp_frag.c     |     7 ++++++-                                 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/tcp/btl_tcp_proc.c     |     2 +-                                      
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3 files changed, 34 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c	Mon Jan 21 06:35:42 2013	(r27880)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c	2013-01-21 06:41:08 EST (Mon, 21 Jan 2013)	(r27881)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -2,7 +2,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *                         University Research and Technology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - * Copyright (c) 2004-2008 The University of Tennessee and The University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2004-2013 The University of Tennessee and The University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *                         reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -295,6 +295,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          if(opal_socket_errno != EINTR &amp;&amp; opal_socket_errno != EAGAIN &amp;&amp; opal_socket_errno != EWOULDBLOCK) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              BTL_ERROR((&quot;send() failed: %s (%d)&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         strerror(opal_socket_errno), opal_socket_errno));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                btl_endpoint-&gt;endpoint_state = MCA_BTL_TCP_FAILED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              return -1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -359,6 +360,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      btl_endpoint-&gt;endpoint_sd = sd;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      if(mca_btl_tcp_endpoint_send_connect_ack(btl_endpoint) != OMPI_SUCCESS) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            btl_endpoint-&gt;endpoint_state = MCA_BTL_TCP_FAILED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          OPAL_THREAD_UNLOCK(&amp;btl_endpoint-&gt;endpoint_send_lock);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          OPAL_THREAD_UNLOCK(&amp;btl_endpoint-&gt;endpoint_recv_lock);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -389,7 +391,6 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  if(btl_endpoint-&gt;endpoint_sd &lt; 0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      return;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    btl_endpoint-&gt;endpoint_state = MCA_BTL_TCP_CLOSED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  btl_endpoint-&gt;endpoint_retries++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  opal_event_del(&amp;btl_endpoint-&gt;endpoint_recv_event);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  opal_event_del(&amp;btl_endpoint-&gt;endpoint_send_event);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -401,6 +402,24 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  btl_endpoint-&gt;endpoint_cache_pos    = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  btl_endpoint-&gt;endpoint_cache_length = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #endif  /* MCA_BTL_TCP_ENDPOINT_CACHE */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    /**
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +     * If we keep failing to connect to the peer let the caller know about
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +     * this situation by triggering all the pending fragments callback and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +     * reporting the error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +     */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    if( MCA_BTL_TCP_FAILED == btl_endpoint-&gt;endpoint_state ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        mca_btl_tcp_frag_t* frag = btl_endpoint-&gt;endpoint_send_frag;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        if( NULL == frag ) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            frag = (mca_btl_tcp_frag_t*)opal_list_remove_first(&amp;btl_endpoint-&gt;endpoint_frags);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        while(NULL != frag) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            frag-&gt;base.des_cbfunc(&amp;frag-&gt;btl-&gt;super, frag-&gt;endpoint, &amp;frag-&gt;base, OMPI_ERR_UNREACH);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            frag = (mca_btl_tcp_frag_t*)opal_list_remove_first(&amp;btl_endpoint-&gt;endpoint_frags);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        btl_endpoint-&gt;endpoint_state = MCA_BTL_TCP_CLOSED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -444,6 +463,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      /* remote closed connection */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      if(retval == 0) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            btl_endpoint-&gt;endpoint_state = MCA_BTL_TCP_FAILED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          return -1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -453,6 +473,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          if(opal_socket_errno != EINTR &amp;&amp; opal_socket_errno != EAGAIN &amp;&amp; opal_socket_errno != EWOULDBLOCK) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              BTL_ERROR((&quot;recv(%d) failed: %s (%d)&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         btl_endpoint-&gt;endpoint_sd, strerror(opal_socket_errno), opal_socket_errno));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                btl_endpoint-&gt;endpoint_state = MCA_BTL_TCP_FAILED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              return -1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -589,6 +610,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                          address,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         btl_endpoint-&gt;endpoint_addr-&gt;addr_port, strerror(opal_socket_errno) ) );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        btl_endpoint-&gt;endpoint_state = MCA_BTL_TCP_FAILED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      btl_endpoint-&gt;endpoint_retries++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      return OMPI_ERR_UNREACH;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -599,6 +621,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      btl_endpoint-&gt;endpoint_state = MCA_BTL_TCP_CONNECT_ACK;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      opal_event_add(&amp;btl_endpoint-&gt;endpoint_recv_event, 0);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        btl_endpoint-&gt;endpoint_state = MCA_BTL_TCP_FAILED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -645,6 +668,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      btl_endpoint-&gt;endpoint_state = MCA_BTL_TCP_CONNECT_ACK;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      opal_event_add(&amp;btl_endpoint-&gt;endpoint_recv_event, 0);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        btl_endpoint-&gt;endpoint_state = MCA_BTL_TCP_FAILED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -747,6 +771,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  default:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      OPAL_THREAD_UNLOCK(&amp;btl_endpoint-&gt;endpoint_recv_lock);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      BTL_ERROR((&quot;invalid socket state(%d)&quot;, btl_endpoint-&gt;endpoint_state));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        btl_endpoint-&gt;endpoint_state = MCA_BTL_TCP_FAILED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_frag.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_frag.c	Mon Jan 21 06:35:42 2013	(r27880)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_frag.c	2013-01-21 06:41:08 EST (Mon, 21 Jan 2013)	(r27881)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -2,7 +2,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *                         University Research and Technology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - * Copyright (c) 2004-2006 The University of Tennessee and The University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2004-2013 The University of Tennessee and The University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *                         reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -115,12 +115,14 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              BTL_ERROR((&quot;mca_btl_tcp_frag_send: writev error (%p, %lu)\n\t%s(%lu)\n&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  frag-&gt;iov_ptr[0].iov_base, (unsigned long) frag-&gt;iov_ptr[0].iov_len,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  strerror(opal_socket_errno), (unsigned long) frag-&gt;iov_cnt));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                frag-&gt;endpoint-&gt;endpoint_state = MCA_BTL_TCP_FAILED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              mca_btl_tcp_endpoint_close(frag-&gt;endpoint);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              return false;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          default:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              BTL_ERROR((&quot;mca_btl_tcp_frag_send: writev failed: %s (%d)&quot;, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         strerror(opal_socket_errno),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         opal_socket_errno));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                frag-&gt;endpoint-&gt;endpoint_state = MCA_BTL_TCP_FAILED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              mca_btl_tcp_endpoint_close(frag-&gt;endpoint);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              return false;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -195,6 +197,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      cnt = readv(sd, frag-&gt;iov_ptr, num_vecs);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	if( 0 &lt; cnt ) goto advance_iov_position;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	if( cnt == 0 ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            btl_endpoint-&gt;endpoint_state = MCA_BTL_TCP_FAILED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	    mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	    return false;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -207,12 +210,14 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          BTL_ERROR((&quot;mca_btl_tcp_frag_recv: readv error (%p, %lu)\n\t%s(%lu)\n&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     frag-&gt;iov_ptr[0].iov_base, (unsigned long) frag-&gt;iov_ptr[0].iov_len,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     strerror(opal_socket_errno), (unsigned long) frag-&gt;iov_cnt));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            btl_endpoint-&gt;endpoint_state = MCA_BTL_TCP_FAILED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	    mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	    return false;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	default:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          BTL_ERROR((&quot;mca_btl_tcp_frag_recv: readv failed: %s (%d)&quot;, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     strerror(opal_socket_errno),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     opal_socket_errno));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            btl_endpoint-&gt;endpoint_state = MCA_BTL_TCP_FAILED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	    mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	    return false;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_proc.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_proc.c	Mon Jan 21 06:35:42 2013	(r27880)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_proc.c	2013-01-21 06:41:08 EST (Mon, 21 Jan 2013)	(r27881)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -680,7 +680,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  size_t i;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  OPAL_THREAD_LOCK(&amp;btl_proc-&gt;proc_lock);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    for(i=0; i&lt;btl_proc-&gt;proc_endpoint_count; i++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    for(i = 0; i &lt; btl_proc-&gt;proc_endpoint_count; i++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      if(btl_proc-&gt;proc_endpoints[i] == btl_endpoint) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          memmove(btl_proc-&gt;proc_endpoints+i, btl_proc-&gt;proc_endpoints+i+1,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              (btl_proc-&gt;proc_endpoint_count-i-1)*sizeof(mca_btl_base_endpoint_t*));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11971.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework"</a>
<li><strong>Previous message:</strong> <a href="11969.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework"</a>
<li><strong>In reply to:</strong> <a href="11966.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 -	trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11972.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="11972.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 -	trunk/ompi/mca/btl/tcp"</a>
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
