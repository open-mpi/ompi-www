<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 26 17:42:13 2007" -->
<!-- isoreceived="20070626214213" -->
<!-- sent="Tue, 26 Jun 2007 17:42:05 -0400" -->
<!-- isosent="20070626214205" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Improve OB1 performance when multiple NICs are available" -->
<!-- id="0D330A29-F7B0-40C3-8A1F-10BA417E4648_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070625122827.GZ1164_at_minantech.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-26 17:42:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1772.php">Karol Mroz: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="1770.php">George Bosilca: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="1756.php">Gleb Natapov: "[OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1774.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Reply:</strong> <a href="1774.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Reply:</strong> <a href="1778.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb,
<br>
<p>Simplifying the code and getting better performance is always a good  
<br>
approach (at least from my perspective). However, your patch still  
<br>
dispatch the messages over the BTLs in a round robin fashion, which  
<br>
doesn't look to me as the best approach. How about merging your patch  
<br>
and mine ? We will get a better data distribution and a better  
<br>
scheduling (on-demand based on the network load).
<br>
<p>Btw, did you compare my patch with yours on your multi-NIC system ?  
<br>
With my patch on our system with 3 networks (2*1Gbs and one 100 Mbs)  
<br>
I'm close to 99% of the total bandwidth. I'll try to see what I get  
<br>
with yours.
<br>
<p>Now that we're looking at improving the performances of the multi-BTL  
<br>
stuff I think I have another idea. How about merging the ack with the  
<br>
next pipeline fragment for RDMA (except for the last fragment) ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 25, 2007, at 8:28 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Attached patch improves OB1 scheduling algorithm between multiple
</span><br>
<span class="quotelev1">&gt; links. Current algorithm perform very poorly if interconnects with  
</span><br>
<span class="quotelev1">&gt; very
</span><br>
<span class="quotelev1">&gt; different bandwidth values are used. For big message sizes it always
</span><br>
<span class="quotelev1">&gt; divide traffic equally between all available interconnects. Attached
</span><br>
<span class="quotelev1">&gt; patch change this. It calculates for each message how much data  
</span><br>
<span class="quotelev1">&gt; should be
</span><br>
<span class="quotelev1">&gt; send via each link according to relative weight of the link. This is
</span><br>
<span class="quotelev1">&gt; done for RDMAed part of the message as well as for the part that is  
</span><br>
<span class="quotelev1">&gt; send
</span><br>
<span class="quotelev1">&gt; by send/recv in the case of pipeline protocol. As a side effect
</span><br>
<span class="quotelev1">&gt; send_schedule/recv_schedule functions are greatly simplified.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Surprisingly (at least for me) this patch is also greatly improves  
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev1">&gt; benchmarks results when multiple links with the same bandwidth are  
</span><br>
<span class="quotelev1">&gt; in use.
</span><br>
<span class="quotelev1">&gt; Attached postscript shows some benchmark results with and without the
</span><br>
<span class="quotelev1">&gt; patch. I used two computers connected with 4 DDR HCAs for this  
</span><br>
<span class="quotelev1">&gt; benchmark.
</span><br>
<span class="quotelev1">&gt; Each HCA is capable of ~1600MB on its own.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			 
</span><br>
<span class="quotelev1">&gt; Gleb.&lt;ob1_multi_nic_scheduling.diff&gt;&lt;openib_mulihca_bw.ps&gt;____________ 
</span><br>
<span class="quotelev1">&gt; ___________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1771/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1772.php">Karol Mroz: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="1770.php">George Bosilca: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="1756.php">Gleb Natapov: "[OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1774.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Reply:</strong> <a href="1774.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Reply:</strong> <a href="1778.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
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
