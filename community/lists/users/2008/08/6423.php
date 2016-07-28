<?
$subject_val = "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 25 13:44:20 2008" -->
<!-- isoreceived="20080825174420" -->
<!-- sent="Mon, 25 Aug 2008 13:44:16 -0400 (EDT)" -->
<!-- isosent="20080825174416" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness" -->
<!-- id="alpine.DEB.1.10.0808251342240.6842_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF62ECAB58.F3835EFE-ON852574B0.005857E3-852574B0.0060EEF6_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-25 13:44:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6424.php">Mi Yan: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<li><strong>Previous message:</strong> <a href="6422.php">Mi Yan: "[OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<li><strong>In reply to:</strong> <a href="6422.php">Mi Yan: "[OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6424.php">Mi Yan: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<li><strong>Reply:</strong> <a href="6424.php">Mi Yan: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 25 Aug 2008, Mi Yan wrote:
<br>
<p><span class="quotelev1">&gt; Does OpenMPI always use SEND/RECV protocol between heterogeneous
</span><br>
<span class="quotelev1">&gt; processors with different endianness?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried btl_openib_flags to be 2 , 4 and 6 respectively to allowe RDMA,
</span><br>
<span class="quotelev1">&gt; but the bandwidth between the two heterogeneous nodes is slow, same as
</span><br>
<span class="quotelev1">&gt; the bandwidth when btl_openib_flags to be 1. Seems to me SEND/RECV is
</span><br>
<span class="quotelev1">&gt; always used no matter btl_openib_flags is. Can I force OpenMPI to use
</span><br>
<span class="quotelev1">&gt; RDMA between x86 and PPC? I only transfer MPI_BYTE, so we do not need the
</span><br>
<span class="quotelev1">&gt; support for endianness.
</span><br>
<p>Which version of Open MPI are you using?  In recent versions (I don't 
<br>
remember exactly when the change occured, unfortuantely), the decision 
<br>
between send/recv and rdma was moved from being solely based on the 
<br>
architecture of the remote process to being based on the architecture and 
<br>
datatype.  It's possible this has been broken again, but there defintiely 
<br>
was some window (possibly only on the development trunk) when that worked 
<br>
correctly.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6424.php">Mi Yan: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<li><strong>Previous message:</strong> <a href="6422.php">Mi Yan: "[OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<li><strong>In reply to:</strong> <a href="6422.php">Mi Yan: "[OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6424.php">Mi Yan: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<li><strong>Reply:</strong> <a href="6424.php">Mi Yan: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
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
