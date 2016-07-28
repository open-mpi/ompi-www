<?
$subject_val = "[OMPI users] infiniband question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 09:17:31 2009" -->
<!-- isoreceived="20090917131731" -->
<!-- sent="Thu, 17 Sep 2009 15:17:26 +0200" -->
<!-- isosent="20090917131726" -->
<!-- name="Yann JOBIC" -->
<!-- email="jobic_at_[hidden]" -->
<!-- subject="[OMPI users] infiniband question" -->
<!-- id="4AB236E6.3090609_at_polytech.univ-mrs.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] infiniband question<br>
<strong>From:</strong> Yann JOBIC (<em>jobic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-17 09:17:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10669.php">Jeff Squyres: "Re: [OMPI users] infiniband question"</a>
<li><strong>Previous message:</strong> <a href="10667.php">Joshua Hursey: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10669.php">Jeff Squyres: "Re: [OMPI users] infiniband question"</a>
<li><strong>Reply:</strong> <a href="10669.php">Jeff Squyres: "Re: [OMPI users] infiniband question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm new to infiniband.
<br>
I installed the rdma_cm, rdma_ucm and ib_uverbs kernel modules.
<br>
<p>When i'm running a ring test openmpi code, i've got :
<br>
[Lidia][0,1,1][btl_openib_endpoint.c:992:mca_btl_openib_endpoint_qp_init_query] 
<br>
Set MTU to IBV value 4 (2048 bytes)
<br>
[Lidia][0,1,1][btl_openib_endpoint.c:992:mca_btl_openib_endpoint_qp_init_query] 
<br>
Set MTU to IBV value 4 (2048 bytes)
<br>
[Lilou][0,1,0][btl_openib_endpoint.c:992:mca_btl_openib_endpoint_qp_init_query] 
<br>
Set MTU to IBV value 4 (2048 bytes)
<br>
[Lilou][0,1,0][btl_openib_endpoint.c:992:mca_btl_openib_endpoint_qp_init_query] 
<br>
Set MTU to IBV value 4 (2048 bytes)
<br>
<p>And then, the program hangs.
<br>
<p>I thought i only need rdma communications, and don't need the DALP lib 
<br>
(with the iboip module).
<br>
<p>I am wrong ?
<br>
<p>Thanks,
<br>
<p>Yann
<br>
<p><p><p><pre>
-- 
___________________________
Yann JOBIC
HPC engineer
Polytech Marseille DME
IUSTI-CNRS UMR 6595
Technop&#244;le de Ch&#226;teau Gombert
5 rue Enrico Fermi
13453 Marseille cedex 13
Tel : (33) 4 91 10 69 39
  ou  (33) 4 91 10 69 43
Fax : (33) 4 91 10 69 69 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10669.php">Jeff Squyres: "Re: [OMPI users] infiniband question"</a>
<li><strong>Previous message:</strong> <a href="10667.php">Joshua Hursey: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10669.php">Jeff Squyres: "Re: [OMPI users] infiniband question"</a>
<li><strong>Reply:</strong> <a href="10669.php">Jeff Squyres: "Re: [OMPI users] infiniband question"</a>
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
