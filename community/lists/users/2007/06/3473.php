<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 10:53:06 2007" -->
<!-- isoreceived="20070612145306" -->
<!-- sent="Tue, 12 Jun 2007 08:52:15 -0600" -->
<!-- isosent="20070612145215" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rdma over tcp?" -->
<!-- id="89A6B5FC-59AB-4093-AF28-13EA8376AEA7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7C68F95A-CAEC-49F7-AC2A-1180FBA1A7BD_at_umich.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-12 10:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3474.php">Brock Palen: "Re: [OMPI users] rdma over tcp?"</a>
<li><strong>Previous message:</strong> <a href="3472.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>In reply to:</strong> <a href="3453.php">Brock Palen: "[OMPI users] rdma over tcp?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3474.php">Brock Palen: "Re: [OMPI users] rdma over tcp?"</a>
<li><strong>Reply:</strong> <a href="3474.php">Brock Palen: "Re: [OMPI users] rdma over tcp?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 11, 2007, at 9:27 AM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; With openmpi-1.2.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i ran a:  ompi_info --param btl tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and i see reference to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can TCP support RDMA?  I thought you needed fancy hardware to get
</span><br>
<span class="quotelev1">&gt; such support?  Light on this subject is highly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Also if a user using ethernet, is trying to up the limit for
</span><br>
<span class="quotelev1">&gt; 'greedy'  messages that the btl_tcp_eager_limit?  Is there a problem
</span><br>
<span class="quotelev1">&gt; increasing its size?  We will test it with his app of-course,  but
</span><br>
<span class="quotelev1">&gt; was wondering if there was a 'gotcha'  I was going to walk into.
</span><br>
<p>Hi Brock -
<br>
<p>The &quot;rdma&quot; part of the TCP transport isn't real RDMA, but just which  
<br>
protocol is used by the upper layers to transfer data.  In the send/ 
<br>
receive protocol, receives always involve a copy.  Using the RDMA  
<br>
protocol (which is pretty simple to fake with a send/receive  
<br>
interface), the TCP BTL header includes the remote address and no  
<br>
copy is involved.  So no, we haven't discovered some hidden interface  
<br>
in TCP -- just trying to have as few special cases for various  
<br>
interconnects as possible :).
<br>
<p>Yes, increasing the btl_tcp_eager_limit is how you increase the  
<br>
&quot;greedy&quot; message size.  It's currently 64k, and the only problem with  
<br>
increasing it is memory usage.  With TCP, even if you need to send a  
<br>
4 byte message, 64K will be used on both the sender and receiver  
<br>
during transfer and these fragments are free-listed, so you can very  
<br>
quickly cause Open MPI to use lots and lots of memory if the eager  
<br>
limit is too big.  If you start seeing segfauls, bus errors, and  
<br>
failed mallocs, you might have bumped the eager limit too high and  
<br>
run yourself out of memory...
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3474.php">Brock Palen: "Re: [OMPI users] rdma over tcp?"</a>
<li><strong>Previous message:</strong> <a href="3472.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>In reply to:</strong> <a href="3453.php">Brock Palen: "[OMPI users] rdma over tcp?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3474.php">Brock Palen: "Re: [OMPI users] rdma over tcp?"</a>
<li><strong>Reply:</strong> <a href="3474.php">Brock Palen: "Re: [OMPI users] rdma over tcp?"</a>
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
