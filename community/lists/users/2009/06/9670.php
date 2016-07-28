<?
$subject_val = "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 07:24:22 2009" -->
<!-- isoreceived="20090623112422" -->
<!-- sent="Tue, 23 Jun 2009 14:24:09 +0300" -->
<!-- isosent="20090623112409" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband" -->
<!-- id="4A40BB59.6060708_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1245716060.13868.10.camel_at_master.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 07:24:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9671.php">Ray Muno: "[OMPI users] OpenMPI and SGE"</a>
<li><strong>Previous message:</strong> <a href="9669.php">Don Kerr: "Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2 forcing all MPI	traffic over Ethernet instead of using	Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9665.php">Jim Kress ORG: "[OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9678.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9678.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9680.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jim,
<br>
Can you please share with us you mca conf file.
<br>
<p>Pasha.
<br>
Jim Kress ORG wrote:
<br>
<span class="quotelev1">&gt; For the app I am using, ORCA (a Quantum Chemistry program), when it was
</span><br>
<span class="quotelev1">&gt; compiled using openMPI 1.2.8 and run under 1.2.8 with the following in
</span><br>
<span class="quotelev1">&gt; the openmpi-mca-params.conf file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl=self,openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the app ran fine with no traffic over my Ethernet network and all
</span><br>
<span class="quotelev1">&gt; traffic over my Infiniband network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, now that ORCA has been recompiled with openMPI v1.3.2 and run
</span><br>
<span class="quotelev1">&gt; under 1.3.2 (using the same openmpi-mca-params.conf file), the
</span><br>
<span class="quotelev1">&gt; performance has been reduced by 50% and all the MPI traffic is going
</span><br>
<span class="quotelev1">&gt; over the Ethernet network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a matter of fact, the openMPI v1.3.2 performance now looks exactly
</span><br>
<span class="quotelev1">&gt; like the performance I get if I use MPICH 1.2.7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone have any ideas:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) How could this have happened?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) How can I fix it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a 50% reduction in performance is just not acceptable.  Ideas/
</span><br>
<span class="quotelev1">&gt; suggestions would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9671.php">Ray Muno: "[OMPI users] OpenMPI and SGE"</a>
<li><strong>Previous message:</strong> <a href="9669.php">Don Kerr: "Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2 forcing all MPI	traffic over Ethernet instead of using	Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9665.php">Jim Kress ORG: "[OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9678.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9678.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9680.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
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
