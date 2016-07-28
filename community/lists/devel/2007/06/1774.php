<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 27 01:50:00 2007" -->
<!-- isoreceived="20070627055000" -->
<!-- sent="Wed, 27 Jun 2007 08:49:54 +0300" -->
<!-- isosent="20070627054954" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Improve OB1 performance when multiple NICs are available" -->
<!-- id="20070627054954.GL1164_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0D330A29-F7B0-40C3-8A1F-10BA417E4648_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-06-27 01:49:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1775.php">Georg Wassen: "Re: [OMPI devel] send/recv during initialization"</a>
<li><strong>Previous message:</strong> <a href="1773.php">Brian Barrett: "Re: [OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="1771.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1778.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jun 26, 2007 at 05:42:05PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Gleb,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Simplifying the code and getting better performance is always a good  
</span><br>
<span class="quotelev1">&gt; approach (at least from my perspective). However, your patch still  
</span><br>
<span class="quotelev1">&gt; dispatch the messages over the BTLs in a round robin fashion, which  
</span><br>
<span class="quotelev1">&gt; doesn't look to me as the best approach. How about merging your patch  
</span><br>
<span class="quotelev1">&gt; and mine ? We will get a better data distribution and a better  
</span><br>
<span class="quotelev1">&gt; scheduling (on-demand based on the network load).
</span><br>
Yes, my patch still does round robing. Incorporate your idea into OB1 is
<br>
on my todo list. We just need to honor OB1 multithreaded rules i.e if on
<br>
RDMA completion scheduling for the request is already running do nothing
<br>
otherwise restart scheduling from the BTL that received a completion.
<br>
The problem is that multiple completions may run in different threads
<br>
simultaneously, so we have to be careful and I don't want to introduce
<br>
new locks if possible.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Btw, did you compare my patch with yours on your multi-NIC system ?  
</span><br>
<span class="quotelev1">&gt; With my patch on our system with 3 networks (2*1Gbs and one 100 Mbs)  
</span><br>
<span class="quotelev1">&gt; I'm close to 99% of the total bandwidth. I'll try to see what I get  
</span><br>
<span class="quotelev1">&gt; with yours.
</span><br>
I tested only with multiple HCAs not ethernet NICs. The TCP BTL is
<br>
special because its rdma_pipline_frag configured to be INT_MAX thus
<br>
there is no fairness issue in OB1 scheduling because request is send by
<br>
only looping once in recv_schedule_exclusive function. I think that if you'll
<br>
configure rdma_pipline_frag to be 128K your overall bandwidth will drop
<br>
to less then 50% (I don't have such setup so can't check) and that is the
<br>
problem I tried to address with the patch.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now that we're looking at improving the performances of the multi-BTL  
</span><br>
<span class="quotelev1">&gt; stuff I think I have another idea. How about merging the ack with the  
</span><br>
<span class="quotelev1">&gt; next pipeline fragment for RDMA (except for the last fragment) ?
</span><br>
Can you elaborate? If you are talking about ACK from receiver on match
<br>
then we already merge it with first PUT message if possible.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 25, 2007, at 8:28 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Attached patch improves OB1 scheduling algorithm between multiple
</span><br>
<span class="quotelev2">&gt; &gt;links. Current algorithm perform very poorly if interconnects with  
</span><br>
<span class="quotelev2">&gt; &gt;very
</span><br>
<span class="quotelev2">&gt; &gt;different bandwidth values are used. For big message sizes it always
</span><br>
<span class="quotelev2">&gt; &gt;divide traffic equally between all available interconnects. Attached
</span><br>
<span class="quotelev2">&gt; &gt;patch change this. It calculates for each message how much data  
</span><br>
<span class="quotelev2">&gt; &gt;should be
</span><br>
<span class="quotelev2">&gt; &gt;send via each link according to relative weight of the link. This is
</span><br>
<span class="quotelev2">&gt; &gt;done for RDMAed part of the message as well as for the part that is  
</span><br>
<span class="quotelev2">&gt; &gt;send
</span><br>
<span class="quotelev2">&gt; &gt;by send/recv in the case of pipeline protocol. As a side effect
</span><br>
<span class="quotelev2">&gt; &gt;send_schedule/recv_schedule functions are greatly simplified.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Surprisingly (at least for me) this patch is also greatly improves  
</span><br>
<span class="quotelev2">&gt; &gt;some
</span><br>
<span class="quotelev2">&gt; &gt;benchmarks results when multiple links with the same bandwidth are  
</span><br>
<span class="quotelev2">&gt; &gt;in use.
</span><br>
<span class="quotelev2">&gt; &gt;Attached postscript shows some benchmark results with and without the
</span><br>
<span class="quotelev2">&gt; &gt;patch. I used two computers connected with 4 DDR HCAs for this  
</span><br>
<span class="quotelev2">&gt; &gt;benchmark.
</span><br>
<span class="quotelev2">&gt; &gt;Each HCA is capable of ~1600MB on its own.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;--
</span><br>
<span class="quotelev2">&gt; &gt;			 
</span><br>
<span class="quotelev2">&gt; &gt;Gleb.&lt;ob1_multi_nic_scheduling.diff&gt;&lt;openib_mulihca_bw.ps&gt;____________ 
</span><br>
<span class="quotelev2">&gt; &gt;___________________________________
</span><br>
<span class="quotelev2">&gt; &gt;devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="1775.php">Georg Wassen: "Re: [OMPI devel] send/recv during initialization"</a>
<li><strong>Previous message:</strong> <a href="1773.php">Brian Barrett: "Re: [OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="1771.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1778.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
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
