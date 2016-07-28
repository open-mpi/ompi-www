<?
$subject_val = "[OMPI users] Experience with MXM, yalla, FCA and HCOLL with Mellanox HCA ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 27 16:41:41 2016" -->
<!-- isoreceived="20160627204141" -->
<!-- sent="Mon, 27 Jun 2016 16:41:36 -0400" -->
<!-- isosent="20160627204136" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[OMPI users] Experience with MXM, yalla, FCA and HCOLL with Mellanox HCA ?" -->
<!-- id="0B97558E6915A6419306E91FD1DACA0E5AFF9AF7E7_at_NRCCENMB1.nrc.ca" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Experience with MXM, yalla, FCA and HCOLL with Mellanox HCA ?<br>
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-27 16:41:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29553.php">Richard C. Wagner: "Re: [OMPI users] FORTH and MPI"</a>
<li><strong>Previous message:</strong> <a href="29551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Open MPI Users and Developers,
<br>
<p>I would like to know your experience with the optional middleware and the corresponding Open MPI framework/components for recent Mellanox Infiniband HCA, especially concerning MXM, FCA (the latest versions bring HCOLL I think) and the related Open MPI framework/components such as the MTL/mxm, PML/yalla, the COLL/fca and COLL/hcoll.
<br>
<p>Does MXM when used with MTL/mxm or PML/yalla really improve communication speed over the plain BTL/openib ?
<br>
<p>Especially since MXM allows matching message tags, I suppose that in addition to improving a little the usual latency/bandwidth metrics, it would increase the communication/computation overlap potential when used with non-blocking MPI calls since the adapter is more autonomous.
<br>
<p>I remember that with old Myrinet networks, the matching MX middleware for our application was way better than the earlier non-matching GM middleware. I guess it is the same thing now with Infiniband / OpenFabric networks. Matching middleware should therefore be better.
<br>
<p><p>Also concerning FCA and HCOLL,  do they really improve the speed of the collective operations ?
<br>
<p><span class="quotelev1">&gt;From the Mellanox documentation I saw they are supposed to use hardware broadcast and take into account the topology to favor the faster connections between process located on the same nodes. I also saw in these documents that recent version of FCA is able to perform the reduction operations on the HCA itself, even the floating point ones. This should greatly improve the speed of MPI_Allreduce() in our codes !
</span><br>
<p>So for those lucky who have access to a recent well configured Mellanox Infiniband cluster with recent middleware and an Open MPI library well configured to take advantage of this, does it deliver its promises ?
<br>
<p>The only documentation/reports I could find on Internet on these subjects are from Mellanox in addition to this for PML/yalla and MTL/mxm (slide 32):
<br>
<p>&nbsp;&nbsp;<a href="https://www.open-mpi.org/papers/sc-2014/Open-MPI-SC14-BOF.pdf">https://www.open-mpi.org/papers/sc-2014/Open-MPI-SC14-BOF.pdf</a>
<br>
<p>Thanks in advance,
<br>
<p><p>Martin Audet
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29552/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29553.php">Richard C. Wagner: "Re: [OMPI users] FORTH and MPI"</a>
<li><strong>Previous message:</strong> <a href="29551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
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
