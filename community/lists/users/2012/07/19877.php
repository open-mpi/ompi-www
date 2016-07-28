<?
$subject_val = "Re: [OMPI users] infiniband with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 31 10:27:34 2012" -->
<!-- isoreceived="20120731142734" -->
<!-- sent="Tue, 31 Jul 2012 10:27:28 -0400" -->
<!-- isosent="20120731142728" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] infiniband with MPI" -->
<!-- id="BFF4AB93-54B4-4E7F-BD30-DAA21F3911FB_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAC5ABPEdtdQ6P5+a56p5t8cgtgc+jEtX8ghxOoHrjHS9L7=tSQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] infiniband with MPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-31 10:27:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19878.php">Zbigniew Koza: "[OMPI users] bug in CUDA support for dual-processor systems?"</a>
<li><strong>Previous message:</strong> <a href="19876.php">Jeff Squyres: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>In reply to:</strong> <a href="19873.php">Joen Chen: "[OMPI users]  infiniband with MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 31, 2012, at 12:14 AM, Joen Chen wrote:
<br>
<p><span class="quotelev1">&gt; After reading the FAQ about OFED, I knew that openMPI can collaborate with RoCE.
</span><br>
<p>Correct -- Open MPI can use RoCE interfaces, if they are available.
<br>
<p><span class="quotelev1">&gt; Moreover, using the RoCE make some overhead because the underlying network layers. In my infiniband bandwidth testing, I get the 5Gbps using IPoIB and 12Gbps using RDMA. The performance gap is huge for my application.
</span><br>
<p>I'm not sure how you get 12Gbps -- RoCE interfaces are 10Gbps per port, aren't they? :-)
<br>
<p><span class="quotelev1">&gt; My question is: Could the OpenMPI use the RDMA raw api not via network layer?!
</span><br>
<p><p>I think you're mixing terminology here.
<br>
<p>- IPoIB: an emulated TCP/IP stack over OpenFabrics devices (to include InfiniBand and RoCE devices).  Emulating the TCP/IP stack leads to quite a bit of overhead (compared to raw verbs mode), and results in significantly lower performance.  Open MPI will use the TCP BTL to access such devices.
<br>
<p>- Verbs: the &quot;raw&quot; or &quot;native&quot; API to access OpenFabrics devices (to include InfiniBand and RoCE devices).  This mode is much higher performance than IPoIB.  Open MPI will use the &quot;openib&quot; BTL to access such devices.
<br>
<p>For a RoCE device, you can have it configured to simultaneously support both IPoIB and Verbs modes.  Hence, you can have some applications using IPoIB and others using Verbs.
<br>
<p>Open MPI will prefer using the verbs mode (and will ignore the IPoIB mode if the verbs mode is enabled).
<br>
<p>Hence, if you use Open MPI 1.6.x, it should automatically default to using the openib BTL over your RoCE devices, which should result in higher performance than the IPoIB mode, or even native TCP/IP mode (IIRC -- but I'm not 100% sure of this -- since RoCE devices are Ethernet devices, they can run Linux's raw TCP/IP stack, too, not just the IPoIB stack).
<br>
<p>Can you explain how you got your 5Gpbs and 12Gbps numbers?  I'm already suspicious of your testing methodology because 12Gpbs over a single RoCE port just isn't possible...  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19878.php">Zbigniew Koza: "[OMPI users] bug in CUDA support for dual-processor systems?"</a>
<li><strong>Previous message:</strong> <a href="19876.php">Jeff Squyres: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>In reply to:</strong> <a href="19873.php">Joen Chen: "[OMPI users]  infiniband with MPI"</a>
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
