<?
$subject_val = "[OMPI devel] OpenIB BTL - removing btl_openib_ib_pkey_ix parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 12:36:46 2008" -->
<!-- isoreceived="20081007163646" -->
<!-- sent="Tue, 07 Oct 2008 18:36:40 +0200" -->
<!-- isosent="20081007163640" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenIB BTL - removing btl_openib_ib_pkey_ix parameter" -->
<!-- id="48EB9018.6030509_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> [OMPI devel] OpenIB BTL - removing btl_openib_ib_pkey_ix parameter<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-07 12:36:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4746.php">Matt Burgess: "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="4744.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4757.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenIB BTL - removing btl_openib_ib_pkey_ix parameter"</a>
<li><strong>Reply:</strong> <a href="4757.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenIB BTL - removing btl_openib_ib_pkey_ix parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I would like to remove the btl_openib_ib_pkey_ix (btl_openib_ib_pkey_ix) 
<br>
parameter.
<br>
The partition key index (btl_openib_ib_pkey_ix) is defined locally by 
<br>
each HCA, so in most cases each host will have different pkey index and
<br>
user have no control over this value. So direct pkey_ix specification is 
<br>
not possible because each HCA will have different value.
<br>
If user want to use specific partition he should specify only the 
<br>
btl_openib_ibib_pkey_val parameter, and Open-mpi translate it to 
<br>
corresponding pkey_ix.
<br>
<p>I think the btl_openib_ib_pkey_ix is useless and I would like to remove it.
<br>
<p>Comments ?
<br>
<p><pre>
--
Pavel Shamis (Pasha)
Mellanox Technologies LTD.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4746.php">Matt Burgess: "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="4744.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4757.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenIB BTL - removing btl_openib_ib_pkey_ix parameter"</a>
<li><strong>Reply:</strong> <a href="4757.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenIB BTL - removing btl_openib_ib_pkey_ix parameter"</a>
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
