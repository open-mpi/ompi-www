<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 30 11:07:55 2007" -->
<!-- isoreceived="20070830150755" -->
<!-- sent="Thu, 30 Aug 2007 09:07:44 -0600" -->
<!-- isosent="20070830150744" -->
<!-- name="Li-Ta Lo" -->
<!-- email="ollie_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?" -->
<!-- id="1188486464.7923.85.camel_at_exponential.lanl.gov" -->
<!-- inreplyto="46D6D3AF.1010305_at_Sun.COM" -->
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
<strong>From:</strong> Li-Ta Lo (<em>ollie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-30 11:07:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2271.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2269.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2269.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2007-08-30 at 10:26 -0400, Rolf.Vandevaart_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Li-Ta Lo wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;On Tue, 2007-08-28 at 10:12 -0600, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;On Aug 28, 2007, at 9:05 AM, Li-Ta Lo wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;On Mon, 2007-08-27 at 15:10 -0400, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;We are running into a problem when running on one of our larger SMPs
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;using the latest Open MPI v1.2 branch.  We are trying to run a job
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;with np=128 within a single node.  We are seeing the following error:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&quot;SM failed to send message due to shortage of shared memory.&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;We then increased the allowable maximum size of the shared segment to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;2Gigabytes-1 which is the maximum allowed on 32-bit application.  We
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;used the mca parameter to increase it as shown here.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;-mca mpool_sm_max_size 2147483647
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;This allowed the program to run to completion.  Therefore, we would
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;like to increase the default maximum from 512Mbytes to 2G-1  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Gigabytes.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Does anyone have an objection to this change?  Soon we are going to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;have larger CPU counts and would like to increase the odds that  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;things
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;work &quot;out of the box&quot; on these large SMPs.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;There is a serious problem with the 1.2 branch, it does not allocate
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;any SM area for each process at the beginning. SM areas are allocated
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;on demand and if some of the processes are more aggressive than the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;others, it will cause starvation. This problem is fixed in the trunk
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;by assign at least one SM area for each process. I think this is what
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;you saw (starvation) and an increase of max size may not be necessary.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Although I'm pretty sure this is fixed in the v1.2 branch already.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;It should never happen for the new code. The only way we can get the
</span><br>
<span class="quotelev2">&gt; &gt;message is when MCA_BTL_SM_FIFO_WRITE return rc != OMPI_SUCCESS, but
</span><br>
<span class="quotelev2">&gt; &gt;the new MCA_BTL_SM_FIFO_WRITE always return rc = OMPI_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;#define MCA_BTL_SM_FIFO_WRITE(endpoint_peer,
</span><br>
<span class="quotelev2">&gt; &gt;my_smp_rank,peer_smp_rank,hdr,rc) \
</span><br>
<span class="quotelev2">&gt; &gt;do { \
</span><br>
<span class="quotelev2">&gt; &gt;    ompi_fifo_t* fifo; \
</span><br>
<span class="quotelev2">&gt; &gt;    fifo=&amp;(mca_btl_sm_component.fifo[peer_smp_rank][my_smp_rank]); \
</span><br>
<span class="quotelev2">&gt; &gt; \
</span><br>
<span class="quotelev2">&gt; &gt;    /* thread lock */ \
</span><br>
<span class="quotelev2">&gt; &gt;    if(opal_using_threads()) \
</span><br>
<span class="quotelev2">&gt; &gt;        opal_atomic_lock(fifo-&gt;head_lock); \
</span><br>
<span class="quotelev2">&gt; &gt;    /* post fragment */ \
</span><br>
<span class="quotelev2">&gt; &gt;    while(ompi_fifo_write_to_head(hdr, fifo, \
</span><br>
<span class="quotelev2">&gt; &gt;        mca_btl_sm_component.sm_mpool) != OMPI_SUCCESS) \
</span><br>
<span class="quotelev2">&gt; &gt;        opal_progress(); \
</span><br>
<span class="quotelev2">&gt; &gt;    MCA_BTL_SM_SIGNAL_PEER(endpoint_peer); \
</span><br>
<span class="quotelev2">&gt; &gt;    rc=OMPI_SUCCESS; \
</span><br>
<span class="quotelev2">&gt; &gt;    if(opal_using_threads()) \
</span><br>
<span class="quotelev2">&gt; &gt;        opal_atomic_unlock(fifo-&gt;head_lock); \
</span><br>
<span class="quotelev2">&gt; &gt;} while(0)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Rolf, are you using the really last 1.2 branch?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Ollie
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Thanks for all the input.  It turns out I was originally *not* using
</span><br>
<span class="quotelev1">&gt; the latest 1.2 branch.  So, we redid the tests with the latest 1.2.
</span><br>
<span class="quotelev1">&gt; And, I am happy to report that we no longer get the&quot;SM failed to
</span><br>
<span class="quotelev1">&gt; send message due to shortage of shared memory&quot; error.  However,
</span><br>
<span class="quotelev1">&gt; now the program hangs.  So, it looks like we traded one problem for
</span><br>
<span class="quotelev1">&gt; another.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Can I see your test code?
<br>
<p>Ollie
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2271.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2269.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2269.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
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
