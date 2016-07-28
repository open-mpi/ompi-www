<?
$subject_val = "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 16:35:15 2009" -->
<!-- isoreceived="20090805203515" -->
<!-- sent="Wed, 05 Aug 2009 23:35:05 +0300" -->
<!-- isosent="20090805203505" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI" -->
<!-- id="4A79ECF9.3010500_at_dev.mellanox.co.il" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4A79A5F0.40409_at_nsc.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-05 16:35:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10216.php">Rolf Vandevaart: "Re: [OMPI users] problem w sge 6.2 &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="10214.php">Eli Morris: "[OMPI users] problem w sge 6.2 &amp; openmpi"</a>
<li><strong>In reply to:</strong> <a href="10213.php">Torgny Faxen: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10220.php">Torgny Faxen: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Reply:</strong> <a href="10220.php">Torgny Faxen: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Reply:</strong> <a href="10228.php">Craig Tierney: "[OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; However, setting:
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_eager_limit 65536
</span><br>
<span class="quotelev1">&gt; gave a 15% improvement so OpenMPI is now down to 326 (from previous 
</span><br>
<span class="quotelev1">&gt; 376 seconds). Still a lot more than ScaliMPI with 214 seconds.
</span><br>
Can you please run ibv_devinfo on one of compute nodes ? It is 
<br>
interesting to know what kind of IB HW you have on our cluster.
<br>
<p>Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10216.php">Rolf Vandevaart: "Re: [OMPI users] problem w sge 6.2 &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="10214.php">Eli Morris: "[OMPI users] problem w sge 6.2 &amp; openmpi"</a>
<li><strong>In reply to:</strong> <a href="10213.php">Torgny Faxen: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10220.php">Torgny Faxen: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Reply:</strong> <a href="10220.php">Torgny Faxen: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Reply:</strong> <a href="10228.php">Craig Tierney: "[OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
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
