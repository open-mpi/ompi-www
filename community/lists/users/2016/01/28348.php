<?
$subject_val = "[OMPI users] Error in BTL with larger number of nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 23 00:14:01 2016" -->
<!-- isoreceived="20160123051401" -->
<!-- sent="Sat, 23 Jan 2016 05:13:59 +0000" -->
<!-- isosent="20160123051359" -->
<!-- name="Emani, Murali" -->
<!-- email="emani1_at_[hidden]" -->
<!-- subject="[OMPI users] Error in BTL with larger number of nodes" -->
<!-- id="D2C84C16.1075%emani1_at_llnl.gov" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Error in BTL with larger number of nodes<br>
<strong>From:</strong> Emani, Murali (<em>emani1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-23 00:13:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28349.php">Steve O'Hara: "[OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="28347.php">Gilles Gouaillardet: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have been trying out few sample examples in ULFM library. When I run one such example with OpenMPI on a cluster with infiniband interconnect using 32 nodes, 512 processes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun &#150;np 512 &#150;am ft-enable-mpi ./simpleagree
<br>
<p>I get this error,
<br>
<p>[btl_openib_endpoint.c:694:mca_btl_openib_endpoint_connected] Error posting send
<br>
<p>But when I execute the same program with fewer nodes (till 8 nodes, 128 processes) it executes fine. I tried tuning the BTL parameters to tcp, sm, self, openib but I get the same error. Can someone let me know if I&#146;m missing something here. Is this likely to be an issue with openmpi.
<br>
<p>Thanks,
<br>
Murali
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28348/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28349.php">Steve O'Hara: "[OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="28347.php">Gilles Gouaillardet: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
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
