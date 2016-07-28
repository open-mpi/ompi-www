<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  8 15:58:12 2007" -->
<!-- isoreceived="20070508195812" -->
<!-- sent="Tue, 08 May 2007 14:58:08 -0500" -->
<!-- isosent="20070508195808" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and RDMA-CM)" -->
<!-- id="1178654288.11455.8.camel_at_stevo-desktop" -->
<!-- inreplyto="4640D5BB.8060104_at_ichips.intel.com" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-08 15:58:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1491.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and RDMA-CM)"</a>
<li><strong>Previous message:</strong> <a href="1489.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1491.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and RDMA-CM)"</a>
<li><strong>Maybe reply:</strong> <a href="1491.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and RDMA-CM)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2007-05-08 at 12:55 -0700, Arlin Davis wrote:
<br>
<span class="quotelev1">&gt; Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;1) OMPI shouldn't be stepping on the ia_address.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; stongly agree
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;2) OFA udapl should probably be explicitly binding local cm_ids to port
</span><br>
<span class="quotelev2">&gt; &gt;zero.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; current implementation uses port zero on ep_create and ia_open.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;3) dat_ep_query() should be returning the correct port numbers...
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; agree. I also don't like the common code hands out  pointers to internal 
</span><br>
<span class="quotelev1">&gt; structures...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will work on a patch that will insure compadibility with other 
</span><br>
<span class="quotelev1">&gt; providers but allow the openib_cma provider to return the port on the 
</span><br>
<span class="quotelev1">&gt; ep_query.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -arlin
</span><br>
<p>Cool!  I'll test this over iWARP when you have something...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1491.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and RDMA-CM)"</a>
<li><strong>Previous message:</strong> <a href="1489.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1491.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and RDMA-CM)"</a>
<li><strong>Maybe reply:</strong> <a href="1491.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and RDMA-CM)"</a>
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
