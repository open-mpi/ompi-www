<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jan 14 16:07:22 2006" -->
<!-- isoreceived="20060114210722" -->
<!-- sent="Sat, 14 Jan 2006 16:07:18 -0500 (EST)" -->
<!-- isosent="20060114210718" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re:  [OMPI svn] svn:open-mpi r8692" -->
<!-- id="Pine.LNX.4.62.0601141605140.6239_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200601142021.k0EKLjsJ025271_at_magrathea.osl.iu.edu" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-14 16:07:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0678.php">Tim Prins: "Re:  Intel tests"</a>
<li><strong>Previous message:</strong> <a href="0676.php">Graham E Fagg: "Re:  Intel tests"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
&nbsp;&nbsp;whatever this fixed/changed, I no longer get corrupted memory in the 
<br>
tuned data segment hung off each communicator... ! I'm still testing to 
<br>
see if I get TimPs error.
<br>
G
<br>
<p>On Sat, 14 Jan 2006 bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2006-01-14 15:21:44 -0500 (Sat, 14 Jan 2006)
</span><br>
<span class="quotelev1">&gt; New Revision: 8692
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.h
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_frag.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_frag.h
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; A better implementation for the TCP endpoint cache + few comments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c	2006-01-14 20:19:01 UTC (rev 8691)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c	2006-01-14 20:21:44 UTC (rev 8692)
</span><br>
<span class="quotelev1">&gt; @@ -79,7 +79,7 @@
</span><br>
<span class="quotelev1">&gt;     endpoint-&gt;endpoint_nbo = false;
</span><br>
<span class="quotelev1">&gt; #if MCA_BTL_TCP_ENDPOINT_CACHE
</span><br>
<span class="quotelev1">&gt;     endpoint-&gt;endpoint_cache        = NULL;
</span><br>
<span class="quotelev1">&gt; -    endpoint-&gt;endpoint_cache_pos    = 0;
</span><br>
<span class="quotelev1">&gt; +    endpoint-&gt;endpoint_cache_pos    = NULL;
</span><br>
<span class="quotelev1">&gt;     endpoint-&gt;endpoint_cache_length = 0;
</span><br>
<span class="quotelev1">&gt; #endif  /* MCA_BTL_TCP_ENDPOINT_CACHE */
</span><br>
<span class="quotelev1">&gt;     OBJ_CONSTRUCT(&amp;endpoint-&gt;endpoint_frags, opal_list_t);
</span><br>
<span class="quotelev1">&gt; @@ -187,21 +187,20 @@
</span><br>
<span class="quotelev1">&gt; static inline void mca_btl_tcp_endpoint_event_init(mca_btl_base_endpoint_t* btl_endpoint, int sd)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; #if MCA_BTL_TCP_ENDPOINT_CACHE
</span><br>
<span class="quotelev1">&gt; -    btl_endpoint-&gt;endpoint_cache = (char*)malloc(mca_btl_tcp_component.tcp_endpoint_cache);
</span><br>
<span class="quotelev1">&gt; +    btl_endpoint-&gt;endpoint_cache     = (char*)malloc(mca_btl_tcp_component.tcp_endpoint_cache);
</span><br>
<span class="quotelev1">&gt; +    btl_endpoint-&gt;endpoint_cache_pos = btl_endpoint-&gt;endpoint_cache;
</span><br>
<span class="quotelev1">&gt; #endif  /* MCA_BTL_TCP_ENDPOINT_CACHE */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    opal_event_set(
</span><br>
<span class="quotelev1">&gt; -        &amp;btl_endpoint-&gt;endpoint_recv_event,
</span><br>
<span class="quotelev1">&gt; -        btl_endpoint-&gt;endpoint_sd,
</span><br>
<span class="quotelev1">&gt; -        OPAL_EV_READ|OPAL_EV_PERSIST,
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_endpoint_recv_handler,
</span><br>
<span class="quotelev1">&gt; -        btl_endpoint);
</span><br>
<span class="quotelev1">&gt; -    opal_event_set(
</span><br>
<span class="quotelev1">&gt; -        &amp;btl_endpoint-&gt;endpoint_send_event,
</span><br>
<span class="quotelev1">&gt; -        btl_endpoint-&gt;endpoint_sd,
</span><br>
<span class="quotelev1">&gt; -        OPAL_EV_WRITE|OPAL_EV_PERSIST,
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_endpoint_send_handler,
</span><br>
<span class="quotelev1">&gt; -        btl_endpoint);
</span><br>
<span class="quotelev1">&gt; +    opal_event_set( &amp;btl_endpoint-&gt;endpoint_recv_event,
</span><br>
<span class="quotelev1">&gt; +		    btl_endpoint-&gt;endpoint_sd,
</span><br>
<span class="quotelev1">&gt; +		    OPAL_EV_READ|OPAL_EV_PERSIST,
</span><br>
<span class="quotelev1">&gt; +		    mca_btl_tcp_endpoint_recv_handler,
</span><br>
<span class="quotelev1">&gt; +		    btl_endpoint );
</span><br>
<span class="quotelev1">&gt; +    opal_event_set( &amp;btl_endpoint-&gt;endpoint_send_event,
</span><br>
<span class="quotelev1">&gt; +		    btl_endpoint-&gt;endpoint_sd,
</span><br>
<span class="quotelev1">&gt; +		    OPAL_EV_WRITE|OPAL_EV_PERSIST,
</span><br>
<span class="quotelev1">&gt; +		    mca_btl_tcp_endpoint_send_handler,
</span><br>
<span class="quotelev1">&gt; +		    btl_endpoint);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -357,7 +356,9 @@
</span><br>
<span class="quotelev1">&gt;         btl_endpoint-&gt;endpoint_sd = -1;
</span><br>
<span class="quotelev1">&gt; #if MCA_BTL_TCP_ENDPOINT_CACHE
</span><br>
<span class="quotelev1">&gt;         free( btl_endpoint-&gt;endpoint_cache );
</span><br>
<span class="quotelev1">&gt; -        btl_endpoint-&gt;endpoint_cache = NULL;
</span><br>
<span class="quotelev1">&gt; +        btl_endpoint-&gt;endpoint_cache        = NULL;
</span><br>
<span class="quotelev1">&gt; +        btl_endpoint-&gt;endpoint_cache_pos    = NULL;
</span><br>
<span class="quotelev1">&gt; +        btl_endpoint-&gt;endpoint_cache_length = 0;
</span><br>
<span class="quotelev1">&gt; #endif  /* MCA_BTL_TCP_ENDPOINT_CACHE */
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     btl_endpoint-&gt;endpoint_state = MCA_BTL_TCP_CLOSED;
</span><br>
<span class="quotelev1">&gt; @@ -619,13 +620,12 @@
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if MCA_BTL_TCP_ENDPOINT_CACHE
</span><br>
<span class="quotelev1">&gt; -            btl_endpoint-&gt;endpoint_cache_pos = 0;
</span><br>
<span class="quotelev1">&gt; +            assert( 0 == btl_endpoint-&gt;endpoint_cache_length );
</span><br>
<span class="quotelev1">&gt;         data_still_pending_on_endpoint:
</span><br>
<span class="quotelev1">&gt; #endif  /* MCA_BTL_TCP_ENDPOINT_CACHE */
</span><br>
<span class="quotelev1">&gt;             /* check for completion of non-blocking recv on the current fragment */
</span><br>
<span class="quotelev1">&gt;             if(mca_btl_tcp_frag_recv(frag, sd) == false) {
</span><br>
<span class="quotelev1">&gt;                 btl_endpoint-&gt;endpoint_recv_frag = frag;
</span><br>
<span class="quotelev1">&gt; -                OPAL_THREAD_UNLOCK(&amp;btl_endpoint-&gt;endpoint_recv_lock);
</span><br>
<span class="quotelev1">&gt;             } else {
</span><br>
<span class="quotelev1">&gt;                 btl_endpoint-&gt;endpoint_recv_frag = NULL;
</span><br>
<span class="quotelev1">&gt;                 switch(frag-&gt;hdr.type) {
</span><br>
<span class="quotelev1">&gt; @@ -636,39 +636,37 @@
</span><br>
<span class="quotelev1">&gt;                         break;
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt;                 default:
</span><br>
<span class="quotelev1">&gt; -                    {
</span><br>
<span class="quotelev1">&gt; -                        break;
</span><br>
<span class="quotelev1">&gt; -                    }
</span><br>
<span class="quotelev1">&gt; +                    break;
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt; #if MCA_BTL_TCP_ENDPOINT_CACHE
</span><br>
<span class="quotelev1">&gt;                 if( 0 != btl_endpoint-&gt;endpoint_cache_length ) {
</span><br>
<span class="quotelev1">&gt; +		    /* If the cache still contain some data we can reuse the same fragment
</span><br>
<span class="quotelev1">&gt; +		     * until we flush it completly.
</span><br>
<span class="quotelev1">&gt; +		     */
</span><br>
<span class="quotelev1">&gt;                     MCA_BTL_TCP_FRAG_INIT_DST(frag, btl_endpoint);
</span><br>
<span class="quotelev1">&gt;                     goto data_still_pending_on_endpoint;
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt; #endif  /* MCA_BTL_TCP_ENDPOINT_CACHE */
</span><br>
<span class="quotelev1">&gt;                 MCA_BTL_TCP_FRAG_RETURN_MAX(frag);
</span><br>
<span class="quotelev1">&gt; -                OPAL_THREAD_UNLOCK(&amp;btl_endpoint-&gt;endpoint_recv_lock);
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    case MCA_BTL_TCP_SHUTDOWN:
</span><br>
<span class="quotelev1">&gt; -        {
</span><br>
<span class="quotelev1">&gt;             OPAL_THREAD_UNLOCK(&amp;btl_endpoint-&gt;endpoint_recv_lock);
</span><br>
<span class="quotelev1">&gt; +            assert( 0 == btl_endpoint-&gt;endpoint_cache_length );
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; +    case MCA_BTL_TCP_SHUTDOWN:
</span><br>
<span class="quotelev1">&gt; +        OPAL_THREAD_UNLOCK(&amp;btl_endpoint-&gt;endpoint_recv_lock);
</span><br>
<span class="quotelev1">&gt; +        break;
</span><br>
<span class="quotelev1">&gt;     default:
</span><br>
<span class="quotelev1">&gt; -        {
</span><br>
<span class="quotelev1">&gt; -            OPAL_THREAD_UNLOCK(&amp;btl_endpoint-&gt;endpoint_recv_lock);
</span><br>
<span class="quotelev1">&gt; -            BTL_ERROR((&quot;invalid socket state(%d)&quot;, btl_endpoint-&gt;endpoint_state));
</span><br>
<span class="quotelev1">&gt; -            mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev1">&gt; -            break;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; +        OPAL_THREAD_UNLOCK(&amp;btl_endpoint-&gt;endpoint_recv_lock);
</span><br>
<span class="quotelev1">&gt; +        BTL_ERROR((&quot;invalid socket state(%d)&quot;, btl_endpoint-&gt;endpoint_state));
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev1">&gt; +        break;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt; - * A file descriptor is available/ready for send. Check the state
</span><br>
<span class="quotelev1">&gt; + * A file descriptor is available/ready for send. Check the state
</span><br>
<span class="quotelev1">&gt;  * of the socket and take the appropriate action.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -680,7 +678,7 @@
</span><br>
<span class="quotelev1">&gt;     case MCA_BTL_TCP_CONNECTING:
</span><br>
<span class="quotelev1">&gt;         mca_btl_tcp_endpoint_complete_connect(btl_endpoint);
</span><br>
<span class="quotelev1">&gt;         break;
</span><br>
<span class="quotelev1">&gt; -    case MCA_BTL_TCP_CONNECTED:
</span><br>
<span class="quotelev1">&gt; +    case MCA_BTL_TCP_CONNECTED:
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;         /* complete the current send */
</span><br>
<span class="quotelev1">&gt;         do {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.h	2006-01-14 20:19:01 UTC (rev 8691)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.h	2006-01-14 20:21:44 UTC (rev 8692)
</span><br>
<span class="quotelev1">&gt; @@ -60,9 +60,9 @@
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_tcp_addr_t*      endpoint_addr;         /**&lt; address of endpoint */
</span><br>
<span class="quotelev1">&gt;     int                             endpoint_sd;           /**&lt; socket connection to endpoint */
</span><br>
<span class="quotelev1">&gt; #if MCA_BTL_TCP_ENDPOINT_CACHE
</span><br>
<span class="quotelev1">&gt; -    char*                           endpoint_cache;        /**&lt; cache for the recv (reduce the number of recv syscall */
</span><br>
<span class="quotelev1">&gt; -    size_t                          endpoint_cache_pos;    /**&lt; */
</span><br>
<span class="quotelev1">&gt; -    size_t                          endpoint_cache_length; /**&lt; */
</span><br>
<span class="quotelev1">&gt; +    char*                           endpoint_cache;        /**&lt; cache for the recv (reduce the number of recv syscall) */
</span><br>
<span class="quotelev1">&gt; +    char*                           endpoint_cache_pos;    /**&lt; current position in the cache */
</span><br>
<span class="quotelev1">&gt; +    size_t                          endpoint_cache_length; /**&lt; length of the data in the cache */
</span><br>
<span class="quotelev1">&gt; #endif  /* MCA_BTL_TCP_ENDPOINT_CACHE */
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_tcp_frag_t*      endpoint_send_frag;    /**&lt; current send frag being processed */
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_tcp_frag_t*      endpoint_recv_frag;    /**&lt; current recv frag being processed */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_frag.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_frag.c	2006-01-14 20:19:01 UTC (rev 8691)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_frag.c	2006-01-14 20:21:44 UTC (rev 8692)
</span><br>
<span class="quotelev1">&gt; @@ -119,29 +119,36 @@
</span><br>
<span class="quotelev1">&gt; bool mca_btl_tcp_frag_recv(mca_btl_tcp_frag_t* frag, int sd)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int cnt;
</span><br>
<span class="quotelev1">&gt; -    size_t i, num_vecs = frag-&gt;iov_cnt;
</span><br>
<span class="quotelev1">&gt; +    size_t i, num_vecs;
</span><br>
<span class="quotelev1">&gt;     mca_btl_base_endpoint_t* btl_endpoint = frag-&gt;endpoint;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  repeat:
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +    num_vecs = frag-&gt;iov_cnt;
</span><br>
<span class="quotelev1">&gt; #if MCA_BTL_TCP_ENDPOINT_CACHE
</span><br>
<span class="quotelev1">&gt;     if( 0 != btl_endpoint-&gt;endpoint_cache_length ) {
</span><br>
<span class="quotelev1">&gt;         size_t length = btl_endpoint-&gt;endpoint_cache_length;
</span><br>
<span class="quotelev1">&gt; +        /* It's strange at the first look but cnt have to be set to the full amount of data available.
</span><br>
<span class="quotelev1">&gt; +         * After going to advance_iov_position we will use cnt to detect if there is still some
</span><br>
<span class="quotelev1">&gt; +         * data pending.
</span><br>
<span class="quotelev1">&gt; +         */
</span><br>
<span class="quotelev1">&gt;         cnt = btl_endpoint-&gt;endpoint_cache_length;
</span><br>
<span class="quotelev1">&gt;         for( i = 0; i &lt; frag-&gt;iov_cnt; i++ ) {
</span><br>
<span class="quotelev1">&gt;             if( length &gt; frag-&gt;iov_ptr[i].iov_len )
</span><br>
<span class="quotelev1">&gt;                 length = frag-&gt;iov_ptr[0].iov_len;
</span><br>
<span class="quotelev1">&gt; -            memcpy( frag-&gt;iov_ptr[i].iov_base,
</span><br>
<span class="quotelev1">&gt; -                    btl_endpoint-&gt;endpoint_cache + btl_endpoint-&gt;endpoint_cache_pos,
</span><br>
<span class="quotelev1">&gt; -                    length );
</span><br>
<span class="quotelev1">&gt; +            memcpy( frag-&gt;iov_ptr[i].iov_base, btl_endpoint-&gt;endpoint_cache_pos, length );
</span><br>
<span class="quotelev1">&gt;             btl_endpoint-&gt;endpoint_cache_pos += length;
</span><br>
<span class="quotelev1">&gt;             btl_endpoint-&gt;endpoint_cache_length -= length;
</span><br>
<span class="quotelev1">&gt;             length = btl_endpoint-&gt;endpoint_cache_length;
</span><br>
<span class="quotelev1">&gt; -            if( 0 == length ) break;
</span><br>
<span class="quotelev1">&gt; +            if( 0 == length ) {
</span><br>
<span class="quotelev1">&gt; +		btl_endpoint-&gt;endpoint_cache_pos = btl_endpoint-&gt;endpoint_cache;
</span><br>
<span class="quotelev1">&gt; +	        break;
</span><br>
<span class="quotelev1">&gt; +	    }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         goto advance_iov_position;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +    /* What's happens if all iovecs are used by the fragment ? It still work, as we reserve one
</span><br>
<span class="quotelev1">&gt; +     * iovec for the caching in the fragment structure (the +1).
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt;     frag-&gt;iov_ptr[num_vecs].iov_base = btl_endpoint-&gt;endpoint_cache;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;iov_ptr[num_vecs].iov_len  = mca_btl_tcp_component.tcp_endpoint_cache;
</span><br>
<span class="quotelev1">&gt;     num_vecs++;
</span><br>
<span class="quotelev1">&gt; @@ -162,15 +169,13 @@
</span><br>
<span class="quotelev1">&gt;                              frag-&gt;iov_ptr[0].iov_base, frag-&gt;iov_ptr[0].iov_len,
</span><br>
<span class="quotelev1">&gt;                              strerror(ompi_socket_errno), frag-&gt;iov_cnt );
</span><br>
<span class="quotelev1">&gt;             default:
</span><br>
<span class="quotelev1">&gt; -                {
</span><br>
<span class="quotelev1">&gt; -                    opal_output(0, &quot;mca_btl_tcp_frag_send: writev failed with errno=%d&quot;,
</span><br>
<span class="quotelev1">&gt; -                                ompi_socket_errno);
</span><br>
<span class="quotelev1">&gt; -                    mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev1">&gt; -                    return false;
</span><br>
<span class="quotelev1">&gt; -                }
</span><br>
<span class="quotelev1">&gt; +                opal_output(0, &quot;mca_btl_tcp_frag_send: writev failed with errno=%d&quot;,
</span><br>
<span class="quotelev1">&gt; +                            ompi_socket_errno);
</span><br>
<span class="quotelev1">&gt; +                mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev1">&gt; +                return false;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -        if(cnt == 0) {
</span><br>
<span class="quotelev1">&gt; +        if( cnt == 0 ) {
</span><br>
<span class="quotelev1">&gt;             mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev1">&gt;             return false;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; @@ -180,8 +185,8 @@
</span><br>
<span class="quotelev1">&gt;  advance_iov_position:
</span><br>
<span class="quotelev1">&gt;     /* if the write didn't complete - update the iovec state */
</span><br>
<span class="quotelev1">&gt;     num_vecs = frag-&gt;iov_cnt;
</span><br>
<span class="quotelev1">&gt; -    for(i=0; i&lt;num_vecs; i++) {
</span><br>
<span class="quotelev1">&gt; -        if(cnt &gt;= (int)frag-&gt;iov_ptr-&gt;iov_len) {
</span><br>
<span class="quotelev1">&gt; +    for( i = 0; i &lt; num_vecs; i++ ) {
</span><br>
<span class="quotelev1">&gt; +        if( cnt &gt;= (int)frag-&gt;iov_ptr-&gt;iov_len ) {
</span><br>
<span class="quotelev1">&gt;             cnt -= frag-&gt;iov_ptr-&gt;iov_len;
</span><br>
<span class="quotelev1">&gt;             frag-&gt;iov_idx++;
</span><br>
<span class="quotelev1">&gt;             frag-&gt;iov_ptr++;
</span><br>
<span class="quotelev1">&gt; @@ -190,7 +195,7 @@
</span><br>
<span class="quotelev1">&gt;             frag-&gt;iov_ptr-&gt;iov_base = (ompi_iov_base_ptr_t)
</span><br>
<span class="quotelev1">&gt;                 (((unsigned char*)frag-&gt;iov_ptr-&gt;iov_base) + cnt);
</span><br>
<span class="quotelev1">&gt;             frag-&gt;iov_ptr-&gt;iov_len -= cnt;
</span><br>
<span class="quotelev1">&gt; -	    cnt = 0;
</span><br>
<span class="quotelev1">&gt; +            cnt = 0;
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_frag.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_frag.h	2006-01-14 20:19:01 UTC (rev 8691)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_frag.h	2006-01-14 20:21:44 UTC (rev 8692)
</span><br>
<span class="quotelev1">&gt; @@ -49,7 +49,7 @@
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_endpoint_t *endpoint;
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_tcp_module_t* btl;
</span><br>
<span class="quotelev1">&gt;     mca_btl_tcp_hdr_t hdr;
</span><br>
<span class="quotelev1">&gt; -    struct iovec iov[MCA_BTL_TCP_FRAG_IOVEC_NUMBER];
</span><br>
<span class="quotelev1">&gt; +    struct iovec iov[MCA_BTL_TCP_FRAG_IOVEC_NUMBER + 1];
</span><br>
<span class="quotelev1">&gt;     struct iovec *iov_ptr;
</span><br>
<span class="quotelev1">&gt;     size_t iov_cnt;
</span><br>
<span class="quotelev1">&gt;     size_t iov_idx;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graham.
<br>
----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0678.php">Tim Prins: "Re:  Intel tests"</a>
<li><strong>Previous message:</strong> <a href="0676.php">Graham E Fagg: "Re:  Intel tests"</a>
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
