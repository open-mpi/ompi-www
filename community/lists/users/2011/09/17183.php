<?
$subject_val = "Re: [OMPI users] query regarding Open fabrics connections";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  8 08:18:10 2011" -->
<!-- isoreceived="20110908121810" -->
<!-- sent="Thu, 8 Sep 2011 08:18:03 -0400" -->
<!-- isosent="20110908121803" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] query regarding Open fabrics connections" -->
<!-- id="755DE618-4A5B-4D61-9DD6-3FE0D3B8F816_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPOYHvb+dNPUFwv8r58f139aGinDK_HrdB=bzrV+6usfOshqkg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] query regarding Open fabrics connections<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-08 08:18:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17184.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17182.php">Ghislain Lartigue: "[OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="17180.php">bhimesh akula: "[OMPI users] query regarding Open fabrics connections"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 8, 2011, at 3:15 AM, bhimesh akula wrote:
<br>
<p><span class="quotelev1">&gt; while running MPI cases,option btl_openib_cpc_include used to select the connection manager.MPI provides three types connection managers 1)OOB 2)XOOB 3)RDMA_CM,but we try to use ib_cm as connection manager but failed.Is it possible?if so,can u explain me the procedure.
</span><br>
<p>The IB CM connection manager support in Open MPI is broken (and likely will never be fixed); do not use it.  It is superseded by the RDMA CM.
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
<li><strong>Next message:</strong> <a href="17184.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17182.php">Ghislain Lartigue: "[OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="17180.php">bhimesh akula: "[OMPI users] query regarding Open fabrics connections"</a>
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
