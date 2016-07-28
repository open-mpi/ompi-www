<?
$subject_val = "[OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 20:14:38 2009" -->
<!-- isoreceived="20090623001438" -->
<!-- sent="Mon, 22 Jun 2009 20:14:20 -0400" -->
<!-- isosent="20090623001420" -->
<!-- name="Jim Kress ORG" -->
<!-- email="jimkress_58_at_[hidden]" -->
<!-- subject="[OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband" -->
<!-- id="1245716060.13868.10.camel_at_master.org" -->
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
<strong>Subject:</strong> [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband<br>
<strong>From:</strong> Jim Kress ORG (<em>jimkress_58_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-22 20:14:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9666.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9664.php">Jeff Squyres: "Re: [OMPI users] Problem with GNU GFortran OpenMPI 1.3.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9666.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9666.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9670.php">Pavel Shamis (Pasha): "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the app I am using, ORCA (a Quantum Chemistry program), when it was
<br>
compiled using openMPI 1.2.8 and run under 1.2.8 with the following in
<br>
the openmpi-mca-params.conf file:
<br>
<p>btl=self,openib
<br>
<p>the app ran fine with no traffic over my Ethernet network and all
<br>
traffic over my Infiniband network.
<br>
<p>However, now that ORCA has been recompiled with openMPI v1.3.2 and run
<br>
under 1.3.2 (using the same openmpi-mca-params.conf file), the
<br>
performance has been reduced by 50% and all the MPI traffic is going
<br>
over the Ethernet network.
<br>
<p>As a matter of fact, the openMPI v1.3.2 performance now looks exactly
<br>
like the performance I get if I use MPICH 1.2.7.
<br>
<p>Anyone have any ideas:
<br>
<p>1) How could this have happened?
<br>
<p>2) How can I fix it?
<br>
<p>a 50% reduction in performance is just not acceptable.  Ideas/
<br>
suggestions would be appreciated.
<br>
<p>Jim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9666.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9664.php">Jeff Squyres: "Re: [OMPI users] Problem with GNU GFortran OpenMPI 1.3.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9666.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9666.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9670.php">Pavel Shamis (Pasha): "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
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
