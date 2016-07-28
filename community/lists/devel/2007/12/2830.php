<?
$subject_val = "Re: [OMPI devel] New BTL parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 16:20:05 2007" -->
<!-- isoreceived="20071212212005" -->
<!-- sent="Wed, 12 Dec 2007 13:18:10 -0800" -->
<!-- isosent="20071212211810" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New BTL parameter" -->
<!-- id="47605012.80809_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20071212201814.GB26644_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New BTL parameter<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 16:18:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2831.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2829.php">Brian W. Barrett: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2821.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2840.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Reply:</strong> <a href="2840.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Wed, Dec 12, 2007 at 02:03:02PM -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 9, 2007, at 10:34 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Currently BTL has parameter btl_min_send_size that is no longer used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to change it to be btl_rndv_eager_limit. This new parameter  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; determine a size of a first fragment of rendezvous protocol. Now we  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_eager_limit to set its size. btl_rndv_eager_limit will have to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; smaller or equal to btl_eager_limit. By default it will be equal to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_eager_limit so no behavior change will be observed if default is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Can you describe why it would be better to have the value less than  
</span><br>
<span class="quotelev2">&gt;&gt; the eager limit?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; It is just one more knob to tune OB1 algorithm. I sometimes don't want
</span><br>
<span class="quotelev1">&gt; to send any data by copy in/out at all. This is not possible right now.
</span><br>
<span class="quotelev1">&gt; With this new param I will be able to control this.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>&nbsp;From my experience tuning RDMA-rendezvous for the GASNet communications 
<br>
library, I know that it was beneficial to piggyback some portion of the 
<br>
payload on the rendezvous request.  However, the best [insert your 
<br>
favorite performance metric here] was not always achieved by 
<br>
piggybacking the maximum that could be buffered at the receiver 
<br>
(equivalent of blt_eager_limit).  If I understand correctly, Gleb's 
<br>
btl_rndv_eager_limit parameter would allow tuning for this behavior in OMPI.
<br>
<p>An artificial/simplified example would be if the eager limit is 32K and 
<br>
you have a 64K xfer.  Is it better to send 32K copy in/out plus 32K by 
<br>
RDMA, or to send 8K copy in/out plus 56K by RDMA?  If the memcpy() 
<br>
overhead for 32K of eager payload exceeds what can be overlapped with 
<br>
the rendezvous setup then the second may be the better choice (higher 
<br>
bandwidth, lower latency, and lower CPU overheads on both sender and 
<br>
receiver).
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2831.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2829.php">Brian W. Barrett: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2821.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2840.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Reply:</strong> <a href="2840.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
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
