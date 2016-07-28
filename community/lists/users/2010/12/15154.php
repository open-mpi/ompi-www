<?
$subject_val = "Re: [OMPI users] questions about the openib component";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 20:11:03 2010" -->
<!-- isoreceived="20101216011103" -->
<!-- sent="Wed, 15 Dec 2010 20:10:58 -0500" -->
<!-- isosent="20101216011058" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] questions about the openib component" -->
<!-- id="A3CE81FE-5577-4757-9220-262E1D77FF3E_at_cisco.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="COL113-W5457CA257A591F80FC335B82D0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] questions about the openib component<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 20:10:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15155.php">Jeff Squyres: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>Previous message:</strong> <a href="15153.php">Jeff Squyres: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>In reply to:</strong> <a href="15040.php">&#186;&#238;&#189;&#220;: "[OMPI users] questions about the openib component"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 8, 2010, at 10:59 AM, &#186;&#238;&#189;&#220; wrote:
<br>
<p><span class="quotelev1">&gt; Now I am studying the openib component, and I find it is really complicated. Here I have one question to ask,  it is as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the initialization of openib component, the function named setup_qps() is used. In this function, the following code segments are written:
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_component.num_pp_qps = num_pp_qps;
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_component.num_srq_qps = num_srq_qps;
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_component.num_xrc_qps = num_xrc_qps;
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_component.num_qps = num_pp_qps + num_srq_qps + num_xrc_qps;
</span><br>
<span class="quotelev1">&gt; if you run the program in the step way, you will find that at last the value of mca_btl_openib_component.num_qps is 4( the value of num_pp_qps is 1, and the value of        num_srq_qps is 3).  Can someone explain me why 4 QPs(1 normal QP, 3 SRQ QPs) need to be created?
</span><br>
<p>Have a look at this paper:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/papers/euro-pvmmpi-2007-ib/">http://www.open-mpi.org/papers/euro-pvmmpi-2007-ib/</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15155.php">Jeff Squyres: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>Previous message:</strong> <a href="15153.php">Jeff Squyres: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>In reply to:</strong> <a href="15040.php">&#186;&#238;&#189;&#220;: "[OMPI users] questions about the openib component"</a>
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
