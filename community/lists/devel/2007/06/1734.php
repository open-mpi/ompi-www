<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 20 08:29:52 2007" -->
<!-- isoreceived="20070620122952" -->
<!-- sent="Wed, 20 Jun 2007 08:29:14 -0400" -->
<!-- isosent="20070620122914" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] PML/BTL MCA params review" -->
<!-- id="8DEFA3A2-50C4-4E73-8F09-D349DF5986CF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-06-20 08:29:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1735.php">Brian Barrett: "[OMPI devel] forcing a component to build static"</a>
<li><strong>Previous message:</strong> <a href="1733.php">Andrew Friedley: "[OMPI devel] Unreliable Datagram BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1753.php">Jeff Squyres: "Re: [OMPI devel] PML/BTL MCA params review"</a>
<li><strong>Reply:</strong> <a href="1753.php">Jeff Squyres: "Re: [OMPI devel] PML/BTL MCA params review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In reviewing some of the PML and BTL MCA params with Gleb, we have  
<br>
the following questions for the group:
<br>
<p>1. btl_*_min_send_size is used to decide when to stop striping a  
<br>
message across multiple BTL's.  Is there a reason that we don't just  
<br>
use eager_limit for this value?  It seems weird to say &quot;this message  
<br>
is short enough to go across 1 BTL, even though it'll take multiple  
<br>
sends if min_send_size &gt; eager_limit&quot;.  If no one has any objections,  
<br>
we suggest eliminating this MCA parameter (!!) and corresponding  
<br>
value and just using the BTL's eager limit for this value (this value  
<br>
is set by every BTL, but only used in exactly 1 place in OB1).
<br>
<p>Len: please put this on the agenda for next Tuesday (just so that  
<br>
there's a deadline to ensure progress).
<br>
<p>2. rdma_pipeline_offset is bad name; it is not an accurate  
<br>
description of what this value represents.  See the attached figure  
<br>
for what this value is: it is the length that is sent/received after  
<br>
the eager match before the RDMA (it happens to be at the end of the  
<br>
message, but that's irrelevant).  Specifically: it is a length, not  
<br>
an offset.  We should change this name.  Here's some suggestions we  
<br>
came up with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rdma_pipeline_send_length (this is our favorite)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rdma_pipeline_send_recv_length
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rdma_pipeline_send_receive_length
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rdma_pipeline_total_send_length
<br>
<p>If no one has any better suggestions, Gleb will change the name to  
<br>
rdma_pipeline_send_length COB Thursday.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems


</pre>
<p>
<p><p><hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-1734/pml-btl-values.jpg" alt="pml-btl-values.jpg">
<!-- attachment="pml-btl-values.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1735.php">Brian Barrett: "[OMPI devel] forcing a component to build static"</a>
<li><strong>Previous message:</strong> <a href="1733.php">Andrew Friedley: "[OMPI devel] Unreliable Datagram BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1753.php">Jeff Squyres: "Re: [OMPI devel] PML/BTL MCA params review"</a>
<li><strong>Reply:</strong> <a href="1753.php">Jeff Squyres: "Re: [OMPI devel] PML/BTL MCA params review"</a>
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
