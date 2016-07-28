<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 14:45:34 2007" -->
<!-- isoreceived="20070828184534" -->
<!-- sent="Tue, 28 Aug 2007 12:45:23 -0600" -->
<!-- isosent="20070828184523" -->
<!-- name="Li-Ta Lo" -->
<!-- email="ollie_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?" -->
<!-- id="1188326723.7923.61.camel_at_exponential.lanl.gov" -->
<!-- inreplyto="E45DB24E-E742-4DB1-96A3-3D4B589F7A99_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-08-28 14:45:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2247.php">Ralph H Castain: "Re: [OMPI devel] [devel-core]  [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2245.php">Greg Watson: "Re: [OMPI devel] thread model"</a>
<li><strong>In reply to:</strong> <a href="2244.php">Brian Barrett: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2269.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Reply:</strong> <a href="2269.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2007-08-28 at 10:12 -0600, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Aug 28, 2007, at 9:05 AM, Li-Ta Lo wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, 2007-08-27 at 15:10 -0400, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We are running into a problem when running on one of our larger SMPs
</span><br>
<span class="quotelev3">&gt; &gt;&gt; using the latest Open MPI v1.2 branch.  We are trying to run a job
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with np=128 within a single node.  We are seeing the following error:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;SM failed to send message due to shortage of shared memory.&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We then increased the allowable maximum size of the shared segment to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2Gigabytes-1 which is the maximum allowed on 32-bit application.  We
</span><br>
<span class="quotelev3">&gt; &gt;&gt; used the mca parameter to increase it as shown here.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -mca mpool_sm_max_size 2147483647
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This allowed the program to run to completion.  Therefore, we would
</span><br>
<span class="quotelev3">&gt; &gt;&gt; like to increase the default maximum from 512Mbytes to 2G-1  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gigabytes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Does anyone have an objection to this change?  Soon we are going to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have larger CPU counts and would like to increase the odds that  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; things
</span><br>
<span class="quotelev3">&gt; &gt;&gt; work &quot;out of the box&quot; on these large SMPs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There is a serious problem with the 1.2 branch, it does not allocate
</span><br>
<span class="quotelev2">&gt; &gt; any SM area for each process at the beginning. SM areas are allocated
</span><br>
<span class="quotelev2">&gt; &gt; on demand and if some of the processes are more aggressive than the
</span><br>
<span class="quotelev2">&gt; &gt; others, it will cause starvation. This problem is fixed in the trunk
</span><br>
<span class="quotelev2">&gt; &gt; by assign at least one SM area for each process. I think this is what
</span><br>
<span class="quotelev2">&gt; &gt; you saw (starvation) and an increase of max size may not be necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Although I'm pretty sure this is fixed in the v1.2 branch already.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>It should never happen for the new code. The only way we can get the
<br>
message is when MCA_BTL_SM_FIFO_WRITE return rc != OMPI_SUCCESS, but
<br>
the new MCA_BTL_SM_FIFO_WRITE always return rc = OMPI_SUCCESS
<br>
<p>#define MCA_BTL_SM_FIFO_WRITE(endpoint_peer,
<br>
my_smp_rank,peer_smp_rank,hdr,rc) \
<br>
do { \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_fifo_t* fifo; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fifo=&amp;(mca_btl_sm_component.fifo[peer_smp_rank][my_smp_rank]); \
<br>
&nbsp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* thread lock */ \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(opal_using_threads()) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_atomic_lock(fifo-&gt;head_lock); \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* post fragment */ \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while(ompi_fifo_write_to_head(hdr, fifo, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_sm_component.sm_mpool) != OMPI_SUCCESS) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress(); \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_SM_SIGNAL_PEER(endpoint_peer); \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rc=OMPI_SUCCESS; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(opal_using_threads()) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_atomic_unlock(fifo-&gt;head_lock); \
<br>
} while(0)
<br>
<p>Rolf, are you using the really last 1.2 branch?
<br>
<p>Ollie
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2247.php">Ralph H Castain: "Re: [OMPI devel] [devel-core]  [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2245.php">Greg Watson: "Re: [OMPI devel] thread model"</a>
<li><strong>In reply to:</strong> <a href="2244.php">Brian Barrett: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2269.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Reply:</strong> <a href="2269.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
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
