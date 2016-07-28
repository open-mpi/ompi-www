<?
$subject_val = "[OMPI users] psm plm failure when infinipathlibs installed but no psm device present";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 12:57:16 2010" -->
<!-- isoreceived="20100311175716" -->
<!-- sent="Thu, 11 Mar 2010 12:56:59 -0500" -->
<!-- isosent="20100311175659" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] psm plm failure when infinipathlibs installed but no psm device present" -->
<!-- id="899E88ED-424A-4B3B-A606-FAD2C22E6336_at_umich.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] psm plm failure when infinipathlibs installed but no psm device present<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 12:56:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12330.php">Jed Brown: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12328.php">Cole, Derek E: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We rely heavily on OpenMPI's ability to 'fall though' to the next best  
<br>
option on our cluster. Example we have some IB (verbs nodes) and most  
<br>
have TCP.
<br>
<p>Recently we added some qlogic IB that uses PSM to get good  
<br>
performance.  We built OpenMPI to include PSM in addition to verbs,  
<br>
and TCP.  We also added the needed libs (infinipath package from  
<br>
qlogic) to our load so it is on all the nodes.
<br>
<p>So OpenMPI works fine on PSM when ran on nodes that have the psm  
<br>
(qlogic) hardware installed.
<br>
The problem is when you run OpenMPI on nodes that have just TCP  
<br>
networks it does not fall to TCP if the infinipath libs are found:
<br>
<p>(using 1.4.1 with intel compilers)
<br>
mpirun -H nyx0818,nyx0819 /home/brockp/a.out
<br>
<p>nyx0818.engin.umich.edu.28120ipath_wait_for_device: The /dev/ipath  
<br>
device failed to appear after 30.0 seconds: Connection timed out
<br>
nyx0818.engin.umich.edu.28120PSM Could not find an InfiniPath Unit on  
<br>
device /dev/ipath (30s elapsed) (err=21)
<br>
nyx0819.engin.umich.edu.7384ipath_wait_for_device: The /dev/ipath  
<br>
device failed to appear after 30.0 seconds: Connection timed out
<br>
nyx0819.engin.umich.edu.7384PSM Could not find an InfiniPath Unit on  
<br>
device /dev/ipath (30s elapsed) (err=21)
<br>
--------------------------------------------------------------------------
<br>
PSM was unable to open an endpoint. Please make sure that the network  
<br>
link is
<br>
active on the node and the hardware is functioning.
<br>
<p>&nbsp;&nbsp;&nbsp;Error: PSM Could not find an InfiniPath Unit
<br>
<p><p>Is there a way to set openMPI to fail to verbs or tcp should psm fail?
<br>
Thanks
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12330.php">Jed Brown: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12328.php">Cole, Derek E: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
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
