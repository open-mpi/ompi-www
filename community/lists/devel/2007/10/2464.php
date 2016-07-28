<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 18 04:13:48 2007" -->
<!-- isoreceived="20071018081348" -->
<!-- sent="Thu, 18 Oct 2007 10:13:40 +0200" -->
<!-- isosent="20071018081340" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] putting common request completion waiting code	into separate inline function" -->
<!-- id="20071018081340.GA21159_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5435F543-B865-4440-920E-C38B1835DA5F_at_cisco.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-18 04:13:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2465.php">George Bosilca: "Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<li><strong>Previous message:</strong> <a href="2463.php">Tobias Hilbrich: "Re: [OMPI devel] Hybrid examples"</a>
<li><strong>In reply to:</strong> <a href="2459.php">Jeff Squyres: "Re: [OMPI devel] putting common request completion waiting code into separate	inline function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2466.php">George Bosilca: "Re: [OMPI devel] putting common request completion waiting code	into separate inline function"</a>
<li><strong>Reply:</strong> <a href="2466.php">George Bosilca: "Re: [OMPI devel] putting common request completion waiting code	into separate inline function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 17, 2007 at 05:32:47PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Gleb -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not overly familiar with all these portions of the pml code  
</span><br>
<span class="quotelev1">&gt; base, but it looks like not all of these places have exactly the same  
</span><br>
<span class="quotelev1">&gt; code: the inline version is much shorter than some of the original  
</span><br>
<span class="quotelev1">&gt; pml codes that it replaced.  Is the logic equivalent?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
My claim is that the logic is equivalent :) But I am asking here for
<br>
others to comment.
<br>
<p>In most places the logic is like this:
<br>
if (req is not completed) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (more then one thread) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;acquire lock
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wait for completion
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;release lock
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wait for completion
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>inline function does:
<br>
if (req is not completed) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (more then one thread) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;acquire lock
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;wait for completion
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (more then one thread) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;release lock
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>And in non threaded build both &quot;if (one the one thread){}&quot; statements are
<br>
removed by preprocessor.
<br>
<p><span class="quotelev1">&gt; Also, a minor nit -- it would be nice if the new inline function  
</span><br>
<span class="quotelev1">&gt; conformed to our coding standards (constants on the left of ==, {}  
</span><br>
<span class="quotelev1">&gt; around all blocks, etc.).  :-)
</span><br>
OK. The new code mimics the code it replaces :)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 15, 2007, at 10:27 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Each time a someone needs to wait for request completion he
</span><br>
<span class="quotelev2">&gt; &gt; implements the same piece of code. Why not put this code into
</span><br>
<span class="quotelev2">&gt; &gt; inline function and use it instead. Look at the included patch, it
</span><br>
<span class="quotelev2">&gt; &gt; moves the common code into ompi_request_wait_completion() function.
</span><br>
<span class="quotelev2">&gt; &gt; Does somebody have any objection against committing it to the trunk?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/crcp/coord/crcp_coord_pml.c b/ompi/mca/crcp/ 
</span><br>
<span class="quotelev2">&gt; &gt; coord/crcp_coord_pml.c
</span><br>
<span class="quotelev2">&gt; &gt; index b2392e4..eb9b9c1 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/crcp/coord/crcp_coord_pml.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/crcp/coord/crcp_coord_pml.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -3857,13 +3857,7 @@ static int coord_request_wait_all( size_t  
</span><br>
<span class="quotelev2">&gt; &gt; count,
</span><br>
<span class="quotelev2">&gt; &gt;  static int coord_request_wait( ompi_request_t * req,
</span><br>
<span class="quotelev2">&gt; &gt;                                 ompi_status_public_t * status)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt; -    OPAL_THREAD_LOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -    ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -    while (req-&gt;req_complete == false) {
</span><br>
<span class="quotelev2">&gt; &gt; -        opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; -    ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -    OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_request_wait_completion(req);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      if( MPI_STATUS_IGNORE != status ) {
</span><br>
<span class="quotelev2">&gt; &gt;          status-&gt;MPI_TAG    = req-&gt;req_status.MPI_TAG;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/pml/cm/pml_cm_recv.c b/ompi/mca/pml/cm/ 
</span><br>
<span class="quotelev2">&gt; &gt; pml_cm_recv.c
</span><br>
<span class="quotelev2">&gt; &gt; index 0e23c9a..00efffc 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/pml/cm/pml_cm_recv.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/pml/cm/pml_cm_recv.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -112,22 +112,7 @@ mca_pml_cm_recv(void *addr,
</span><br>
<span class="quotelev2">&gt; &gt;          return ret;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (recvreq-&gt;req_base.req_ompi.req_complete == false) {
</span><br>
<span class="quotelev2">&gt; &gt; -        /* give up and sleep until completion */
</span><br>
<span class="quotelev2">&gt; &gt; -        if (opal_using_threads()) {
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_mutex_lock(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -            while (recvreq-&gt;req_base.req_ompi.req_complete == false)
</span><br>
<span class="quotelev2">&gt; &gt; -                opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_mutex_unlock(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -        } else {
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -            while (recvreq-&gt;req_base.req_ompi.req_complete == false)
</span><br>
<span class="quotelev2">&gt; &gt; -                opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_request_wait_completion(&amp;recvreq-&gt;req_base.req_ompi);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      if (NULL != status) {  /* return status */
</span><br>
<span class="quotelev2">&gt; &gt;          *status = recvreq-&gt;req_base.req_ompi.req_status;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/pml/cm/pml_cm_send.c b/ompi/mca/pml/cm/ 
</span><br>
<span class="quotelev2">&gt; &gt; pml_cm_send.c
</span><br>
<span class="quotelev2">&gt; &gt; index ed9b189..f7d2e8c 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/pml/cm/pml_cm_send.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/pml/cm/pml_cm_send.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -175,23 +175,8 @@ mca_pml_cm_send(void *buf,
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA_PML_CM_THIN_SEND_REQUEST_RETURN(sendreq);
</span><br>
<span class="quotelev2">&gt; &gt;                  return ret;
</span><br>
<span class="quotelev2">&gt; &gt;              }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -            if (sendreq-&gt;req_send.req_base.req_ompi.req_complete  
</span><br>
<span class="quotelev2">&gt; &gt; == false) {
</span><br>
<span class="quotelev2">&gt; &gt; -                /* give up and sleep until completion */
</span><br>
<span class="quotelev2">&gt; &gt; -                if (opal_using_threads()) {
</span><br>
<span class="quotelev2">&gt; &gt; -                    opal_mutex_lock(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -                    ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -                    while (sendreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_send.req_base.req_ompi.req_complete == false)
</span><br>
<span class="quotelev2">&gt; &gt; -                        opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -                    ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -                    opal_mutex_unlock(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -                } else {
</span><br>
<span class="quotelev2">&gt; &gt; -                    ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -                    while (sendreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_send.req_base.req_ompi.req_complete == false)
</span><br>
<span class="quotelev2">&gt; &gt; -                        opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -                    ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -                }
</span><br>
<span class="quotelev2">&gt; &gt; -            }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            ompi_request_wait_completion(&amp;sendreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_send.req_base.req_ompi);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              ompi_request_free( (ompi_request_t**)&amp;sendreq );
</span><br>
<span class="quotelev2">&gt; &gt;          } else {
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/pml/dr/pml_dr_iprobe.c b/ompi/mca/pml/dr/ 
</span><br>
<span class="quotelev2">&gt; &gt; pml_dr_iprobe.c
</span><br>
<span class="quotelev2">&gt; &gt; index 9149174..2063c54 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/pml/dr/pml_dr_iprobe.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/pml/dr/pml_dr_iprobe.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -64,22 +64,7 @@ int mca_pml_dr_probe(int src,
</span><br>
<span class="quotelev2">&gt; &gt;      MCA_PML_DR_RECV_REQUEST_INIT(&amp;recvreq, NULL, 0,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_mpi_char, src, tag, comm, true);
</span><br>
<span class="quotelev2">&gt; &gt;      MCA_PML_DR_RECV_REQUEST_START(&amp;recvreq);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (recvreq.req_recv.req_base.req_ompi.req_complete == false) {
</span><br>
<span class="quotelev2">&gt; &gt; -        /* give up and sleep until completion */
</span><br>
<span class="quotelev2">&gt; &gt; -        if (opal_using_threads()) {
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_mutex_lock(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -            while (recvreq.req_recv.req_base.req_ompi.req_complete  
</span><br>
<span class="quotelev2">&gt; &gt; == false)
</span><br>
<span class="quotelev2">&gt; &gt; -                opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_mutex_unlock(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -        } else {
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -            while (recvreq.req_recv.req_base.req_ompi.req_complete  
</span><br>
<span class="quotelev2">&gt; &gt; == false)
</span><br>
<span class="quotelev2">&gt; &gt; -                opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_request_wait_completion 
</span><br>
<span class="quotelev2">&gt; &gt; (&amp;recvreq.req_recv.req_base.req_ompi);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      if (NULL != status) {
</span><br>
<span class="quotelev2">&gt; &gt;          *status = recvreq.req_recv.req_base.req_ompi.req_status;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -87,4 +72,3 @@ int mca_pml_dr_probe(int src,
</span><br>
<span class="quotelev2">&gt; &gt;      MCA_PML_BASE_RECV_REQUEST_FINI( &amp;recvreq.req_recv );
</span><br>
<span class="quotelev2">&gt; &gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/pml/dr/pml_dr_irecv.c b/ompi/mca/pml/dr/ 
</span><br>
<span class="quotelev2">&gt; &gt; pml_dr_irecv.c
</span><br>
<span class="quotelev2">&gt; &gt; index 4627341..8dd8c57 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/pml/dr/pml_dr_irecv.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/pml/dr/pml_dr_irecv.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -87,33 +87,8 @@ int mca_pml_dr_recv(void *addr,
</span><br>
<span class="quotelev2">&gt; &gt;                                     count, datatype, src, tag,  
</span><br>
<span class="quotelev2">&gt; &gt; comm, false);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      MCA_PML_DR_RECV_REQUEST_START(recvreq);
</span><br>
<span class="quotelev2">&gt; &gt; -    if (recvreq-&gt;req_recv.req_base.req_ompi.req_complete == false) {
</span><br>
<span class="quotelev2">&gt; &gt; -#if OMPI_ENABLE_PROGRESS_THREADS
</span><br>
<span class="quotelev2">&gt; &gt; -        if(opal_progress_spin(&amp;recvreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_recv.req_base.req_ompi.req_complete)) {
</span><br>
<span class="quotelev2">&gt; &gt; -            goto finished;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -#endif
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_request_wait_completion(&amp;recvreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_recv.req_base.req_ompi);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -        /* give up and sleep until completion */
</span><br>
<span class="quotelev2">&gt; &gt; -        if (opal_using_threads()) {
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_mutex_lock(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -            while (recvreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_recv.req_base.req_ompi.req_complete == false)
</span><br>
<span class="quotelev2">&gt; &gt; -                opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_mutex_unlock(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -        } else {
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -            while (recvreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_recv.req_base.req_ompi.req_complete == false)
</span><br>
<span class="quotelev2">&gt; &gt; -                opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -#if OMPI_ENABLE_PROGRESS_THREADS
</span><br>
<span class="quotelev2">&gt; &gt; -finished:
</span><br>
<span class="quotelev2">&gt; &gt; -#endif
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;      if (NULL != status) {  /* return status */
</span><br>
<span class="quotelev2">&gt; &gt;          *status = recvreq-&gt;req_recv.req_base.req_ompi.req_status;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/pml/dr/pml_dr_isend.c b/ompi/mca/pml/dr/ 
</span><br>
<span class="quotelev2">&gt; &gt; pml_dr_isend.c
</span><br>
<span class="quotelev2">&gt; &gt; index 206599a..b4d9192 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/pml/dr/pml_dr_isend.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/pml/dr/pml_dr_isend.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -105,33 +105,10 @@ int mca_pml_dr_send(void *buf,
</span><br>
<span class="quotelev2">&gt; &gt;          return rc;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (sendreq-&gt;req_send.req_base.req_ompi.req_complete == false) {
</span><br>
<span class="quotelev2">&gt; &gt; -#if OMPI_ENABLE_PROGRESS_THREADS
</span><br>
<span class="quotelev2">&gt; &gt; -        if(opal_progress_spin(&amp;sendreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_send.req_base.req_ompi.req_complete)) {
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_free( (ompi_request_t**)&amp;sendreq );
</span><br>
<span class="quotelev2">&gt; &gt; -            return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -#endif
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -        /* give up and sleep until completion */
</span><br>
<span class="quotelev2">&gt; &gt; -        if (opal_using_threads()) {
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_mutex_lock(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -            while (sendreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_send.req_base.req_ompi.req_complete == false)
</span><br>
<span class="quotelev2">&gt; &gt; -                opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_mutex_unlock(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -        } else {
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -            while (sendreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_send.req_base.req_ompi.req_complete == false)
</span><br>
<span class="quotelev2">&gt; &gt; -                opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_request_wait_completion(&amp;sendreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_send.req_base.req_ompi);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      /* return request to pool */
</span><br>
<span class="quotelev2">&gt; &gt;      rc = sendreq-&gt;req_send.req_base.req_ompi.req_status.MPI_ERROR;
</span><br>
<span class="quotelev2">&gt; &gt;      ompi_request_free((ompi_request_t **) &amp; sendreq);
</span><br>
<span class="quotelev2">&gt; &gt;      return rc;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/pml/ob1/pml_ob1_iprobe.c b/ompi/mca/pml/ob1/ 
</span><br>
<span class="quotelev2">&gt; &gt; pml_ob1_iprobe.c
</span><br>
<span class="quotelev2">&gt; &gt; index ac0c54d..c86f1c7 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/pml/ob1/pml_ob1_iprobe.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/pml/ob1/pml_ob1_iprobe.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -64,22 +64,7 @@ int mca_pml_ob1_probe(int src,
</span><br>
<span class="quotelev2">&gt; &gt;      MCA_PML_OB1_RECV_REQUEST_INIT(&amp;recvreq, NULL, 0,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_mpi_char, src, tag, comm, true);
</span><br>
<span class="quotelev2">&gt; &gt;      MCA_PML_OB1_RECV_REQUEST_START(&amp;recvreq);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (recvreq.req_recv.req_base.req_ompi.req_complete == false) {
</span><br>
<span class="quotelev2">&gt; &gt; -        /* give up and sleep until completion */
</span><br>
<span class="quotelev2">&gt; &gt; -        if (opal_using_threads()) {
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_mutex_lock(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -            while (recvreq.req_recv.req_base.req_ompi.req_complete  
</span><br>
<span class="quotelev2">&gt; &gt; == false)
</span><br>
<span class="quotelev2">&gt; &gt; -                opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_mutex_unlock(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -        } else {
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -            while (recvreq.req_recv.req_base.req_ompi.req_complete  
</span><br>
<span class="quotelev2">&gt; &gt; == false)
</span><br>
<span class="quotelev2">&gt; &gt; -                opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_request_wait_completion 
</span><br>
<span class="quotelev2">&gt; &gt; (&amp;recvreq.req_recv.req_base.req_ompi);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      if (NULL != status) {
</span><br>
<span class="quotelev2">&gt; &gt;          *status = recvreq.req_recv.req_base.req_ompi.req_status;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -87,4 +72,3 @@ int mca_pml_ob1_probe(int src,
</span><br>
<span class="quotelev2">&gt; &gt;      MCA_PML_BASE_RECV_REQUEST_FINI( &amp;recvreq.req_recv );
</span><br>
<span class="quotelev2">&gt; &gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/pml/ob1/pml_ob1_irecv.c b/ompi/mca/pml/ob1/ 
</span><br>
<span class="quotelev2">&gt; &gt; pml_ob1_irecv.c
</span><br>
<span class="quotelev2">&gt; &gt; index d2d89ce..a8d95bd 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/pml/ob1/pml_ob1_irecv.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/pml/ob1/pml_ob1_irecv.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -101,37 +101,7 @@ int mca_pml_ob1_recv(void *addr,
</span><br>
<span class="quotelev2">&gt; &gt;                               PERUSE_RECV);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      MCA_PML_OB1_RECV_REQUEST_START(recvreq);
</span><br>
<span class="quotelev2">&gt; &gt; -    if (recvreq-&gt;req_recv.req_base.req_ompi.req_complete == false) {
</span><br>
<span class="quotelev2">&gt; &gt; -#if OMPI_ENABLE_PROGRESS_THREADS
</span><br>
<span class="quotelev2">&gt; &gt; -        if(opal_progress_spin(&amp;recvreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_recv.req_base.req_ompi.req_complete)) {
</span><br>
<span class="quotelev2">&gt; &gt; -            goto finished;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -#endif
</span><br>
<span class="quotelev2">&gt; &gt; -        /* give up and sleep until completion */
</span><br>
<span class="quotelev2">&gt; &gt; -        if (opal_using_threads()) {
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_mutex_lock(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -            while (recvreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_recv.req_base.req_ompi.req_complete == false)
</span><br>
<span class="quotelev2">&gt; &gt; -                opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_mutex_unlock(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -        } else {
</span><br>
<span class="quotelev2">&gt; &gt; -#if OMPI_ENABLE_DEBUG &amp;&amp; !OMPI_HAVE_THREAD_SUPPORT
</span><br>
<span class="quotelev2">&gt; &gt; -            OPAL_THREAD_LOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -#endif
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -            while (recvreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_recv.req_base.req_ompi.req_complete == false)
</span><br>
<span class="quotelev2">&gt; &gt; -                opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -#if OMPI_ENABLE_DEBUG &amp;&amp; !OMPI_HAVE_THREAD_SUPPORT
</span><br>
<span class="quotelev2">&gt; &gt; -            OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -#endif
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -#if OMPI_ENABLE_PROGRESS_THREADS
</span><br>
<span class="quotelev2">&gt; &gt; -finished:
</span><br>
<span class="quotelev2">&gt; &gt; -#endif
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_request_wait_completion(&amp;recvreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_recv.req_base.req_ompi);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      if (NULL != status) {  /* return status */
</span><br>
<span class="quotelev2">&gt; &gt;          *status = recvreq-&gt;req_recv.req_base.req_ompi.req_status;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/pml/ob1/pml_ob1_isend.c b/ompi/mca/pml/ob1/ 
</span><br>
<span class="quotelev2">&gt; &gt; pml_ob1_isend.c
</span><br>
<span class="quotelev2">&gt; &gt; index a647fac..0fbf7f6 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/pml/ob1/pml_ob1_isend.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/pml/ob1/pml_ob1_isend.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -120,38 +120,9 @@ int mca_pml_ob1_send(void *buf,
</span><br>
<span class="quotelev2">&gt; &gt;          return rc;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (sendreq-&gt;req_send.req_base.req_ompi.req_complete == false) {
</span><br>
<span class="quotelev2">&gt; &gt; -#if OMPI_ENABLE_PROGRESS_THREADS
</span><br>
<span class="quotelev2">&gt; &gt; -        if(opal_progress_spin(&amp;sendreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_send.req_base.req_ompi.req_complete)) {
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_free( (ompi_request_t**)&amp;sendreq );
</span><br>
<span class="quotelev2">&gt; &gt; -            return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -#endif
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -        /* give up and sleep until completion */
</span><br>
<span class="quotelev2">&gt; &gt; -        if (opal_using_threads()) {
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_mutex_lock(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -            while (sendreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_send.req_base.req_ompi.req_complete == false)
</span><br>
<span class="quotelev2">&gt; &gt; -                opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_mutex_unlock(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -        } else {
</span><br>
<span class="quotelev2">&gt; &gt; -#if OMPI_ENABLE_DEBUG &amp;&amp; !OMPI_HAVE_THREAD_SUPPORT
</span><br>
<span class="quotelev2">&gt; &gt; -            OPAL_THREAD_LOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -#endif
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -            while (sendreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_send.req_base.req_ompi.req_complete == false)
</span><br>
<span class="quotelev2">&gt; &gt; -                opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -#if OMPI_ENABLE_DEBUG &amp;&amp; !OMPI_HAVE_THREAD_SUPPORT
</span><br>
<span class="quotelev2">&gt; &gt; -            OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -#endif
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_request_wait_completion(&amp;sendreq- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;req_send.req_base.req_ompi);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      rc = sendreq-&gt;req_send.req_base.req_ompi.req_status.MPI_ERROR;
</span><br>
<span class="quotelev2">&gt; &gt;      ompi_request_free( (ompi_request_t**)&amp;sendreq );
</span><br>
<span class="quotelev2">&gt; &gt;      return rc;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/request/req_wait.c b/ompi/request/req_wait.c
</span><br>
<span class="quotelev2">&gt; &gt; index 0bb4fb3..4751804 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/request/req_wait.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/request/req_wait.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -31,27 +31,7 @@ int ompi_request_wait(
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;      ompi_request_t *req = *req_ptr;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if(req-&gt;req_complete == false) {
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -#if OMPI_ENABLE_PROGRESS_THREADS
</span><br>
<span class="quotelev2">&gt; &gt; -        /* poll for completion */
</span><br>
<span class="quotelev2">&gt; &gt; -        if(opal_progress_spin(&amp;req-&gt;req_complete))
</span><br>
<span class="quotelev2">&gt; &gt; -            goto finished;
</span><br>
<span class="quotelev2">&gt; &gt; -#endif
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -        /* give up and sleep until completion */
</span><br>
<span class="quotelev2">&gt; &gt; -        OPAL_THREAD_LOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -        ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; -        while (req-&gt;req_complete == false) {
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -        ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; -        OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -#if OMPI_ENABLE_PROGRESS_THREADS
</span><br>
<span class="quotelev2">&gt; &gt; -finished:
</span><br>
<span class="quotelev2">&gt; &gt; -#endif
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_request_wait_completion(req);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  #if OPAL_ENABLE_FT == 1
</span><br>
<span class="quotelev2">&gt; &gt;      OMPI_CRCP_REQUEST_COMPLETE(req);
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/request/request.h b/ompi/request/request.h
</span><br>
<span class="quotelev2">&gt; &gt; index 70f38e1..8dc0920 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/request/request.h
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/request/request.h
</span><br>
<span class="quotelev2">&gt; &gt; @@ -374,7 +374,22 @@ OMPI_DECLSPEC int ompi_request_wait_some(
</span><br>
<span class="quotelev2">&gt; &gt;      int * indices,
</span><br>
<span class="quotelev2">&gt; &gt;      ompi_status_public_t * statuses);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +static inline void ompi_request_wait_completion(ompi_request_t *req)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    if(req-&gt;req_complete == false) {
</span><br>
<span class="quotelev2">&gt; &gt; +#if OMPI_ENABLE_PROGRESS_THREADS
</span><br>
<span class="quotelev2">&gt; &gt; +        if(opal_progress_spin(&amp;req-&gt;req_complete))
</span><br>
<span class="quotelev2">&gt; &gt; +            return;
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; +        OPAL_THREAD_LOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; +        ompi_request_waiting++;
</span><br>
<span class="quotelev2">&gt; &gt; +        while(req-&gt;req_complete == false)
</span><br>
<span class="quotelev2">&gt; &gt; +            opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; +        ompi_request_waiting--;
</span><br>
<span class="quotelev2">&gt; &gt; +        OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;  END_C_DECLS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  #endif
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; 			Gleb.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2465.php">George Bosilca: "Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<li><strong>Previous message:</strong> <a href="2463.php">Tobias Hilbrich: "Re: [OMPI devel] Hybrid examples"</a>
<li><strong>In reply to:</strong> <a href="2459.php">Jeff Squyres: "Re: [OMPI devel] putting common request completion waiting code into separate	inline function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2466.php">George Bosilca: "Re: [OMPI devel] putting common request completion waiting code	into separate inline function"</a>
<li><strong>Reply:</strong> <a href="2466.php">George Bosilca: "Re: [OMPI devel] putting common request completion waiting code	into separate inline function"</a>
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
