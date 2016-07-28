<?
$subject_val = "Re: [OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 19:31:30 2008" -->
<!-- isoreceived="20080411233130" -->
<!-- sent="Fri, 11 Apr 2008 16:30:09 -0700" -->
<!-- isosent="20080411233009" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)" -->
<!-- id="39E5B2EE-703B-45C8-B77E-83264C853425_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d105ee120804041447k557dc4c6n59fdec44538c13d2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-11 19:30:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5380.php">Jeff Squyres: "Re: [OMPI users] 32-bit openib btl fails on 64-bit OS"</a>
<li><strong>Previous message:</strong> <a href="5378.php">Danesh Daroui: "Re: [OMPI users] Passing data structure"</a>
<li><strong>In reply to:</strong> <a href="5320.php">Matt Hughes: "[OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 4, 2008, at 2:47 PM, Matt Hughes wrote:
<br>
<span class="quotelev1">&gt; I was able to eliminate the hang I was seeing with 1.2.5 during the
</span><br>
<span class="quotelev1">&gt; gather operation by using these btl parameters (found at
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/btl/openib/btl-openib-benchmark">http://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/btl/openib/btl-openib-benchmark</a>) 
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_openib_max_btls=20
</span><br>
<span class="quotelev1">&gt; btl_openib_rd_num=128
</span><br>
<span class="quotelev1">&gt; btl_openib_rd_low=75
</span><br>
<span class="quotelev1">&gt; btl_openib_rd_win=50
</span><br>
<span class="quotelev1">&gt; btl_openib_max_eager_rdma=32
</span><br>
<span class="quotelev1">&gt; mpool_base_use_mem_hooks=1
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Only the btl_openib_rd_low=75 and btl_openib_rd_num=128 parameters are
</span><br>
<span class="quotelev1">&gt; necessary to avoid the hang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The information given for the parameters in ompi_info is not very
</span><br>
<span class="quotelev1">&gt; helpful.  Can anyone explain (or point me to a reference) what these
</span><br>
<span class="quotelev1">&gt; parameters do and how they affect collective operations?
</span><br>
<p><p>Yes (btl_openib_ prefix omitted for brevity):
<br>
<p>max_btls: the maximum number of active IB ports that Open MPI will use  
<br>
in each MPI process
<br>
<p>rd_num: Number of per-peer receive buffers posted when a connection is  
<br>
made between two MPI processes.  I.e., the first time you MPI_SEND/ 
<br>
MPI_RECV between a pair of MPI peers, rd_num buffers are posted for  
<br>
incoming messages.  More on this below.
<br>
<p>rd_low: When the number of available buffers left on a per-peer queue  
<br>
pair reaches this number (the low watermark), it is time to post more.
<br>
<p>rd_win: When the number of available buffers left on a per-peer queue  
<br>
pair reaches this number, send a flow control message to the peer.
<br>
<p>max_eager_rdma: How many buffers to post for &quot;eager&quot; RDMA short  
<br>
messages between explicit pairs of MPI processes.  Note that eager  
<br>
RDMA is only used between a fixed number of pairs of peers in order to  
<br>
a) conserve registered memory and b) limit the number of memory  
<br>
locations that must be polled to check for message passing progress.   
<br>
Check out this [relatively new] FAQ entry for more details: <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-small-message-rdma">http://www.open-mpi.org/faq/?category=openfabrics#ib-small-message-rdma</a>
<br>
<p>mpool_base_use_mem_hooks: If compiled with support for it (which is  
<br>
usually the default), allow the use of the mpi_leave_pinned parameter.
<br>
<p>mpi_leave_pinned: The simple description of this parameter is that if  
<br>
you use the same buffers repeatedly for sending and receiving buffers,  
<br>
enabling mpi_leave_pinned will likely result in a performance boost.   
<br>
Check out these [relatively] new FAQ entries for more details: <a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.2">http://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.2</a> 
<br>
&nbsp;&nbsp;and <a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned">http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned</a> 
<br>
.
<br>
<p>Note that long message tuning parameters are changing slightly in the  
<br>
upcoming v1.3 series.  Check out this FAQ entry:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.3">http://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.3</a>
<br>
<p>Does this help?  Sorry it took so long to answer your questions;  
<br>
please feel free to ask more.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5380.php">Jeff Squyres: "Re: [OMPI users] 32-bit openib btl fails on 64-bit OS"</a>
<li><strong>Previous message:</strong> <a href="5378.php">Danesh Daroui: "Re: [OMPI users] Passing data structure"</a>
<li><strong>In reply to:</strong> <a href="5320.php">Matt Hughes: "[OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)"</a>
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
