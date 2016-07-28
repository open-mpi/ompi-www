<?
$subject_val = "[OMPI users] importing to MPI data already in memory from another process";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 09:53:36 2014" -->
<!-- isoreceived="20140627135336" -->
<!-- sent="Fri, 27 Jun 2014 09:53:31 -0400" -->
<!-- isosent="20140627135331" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] importing to MPI data already in memory from another process" -->
<!-- id="F1F6AF73-D64E-4A2F-B0DB-331E15C54E2C_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] importing to MPI data already in memory from another process<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-27 09:53:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24717.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>Previous message:</strong> <a href="24715.php">Luigi Santangelo: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24717.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>Reply:</strong> <a href="24717.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>Reply:</strong> <a href="24720.php">Dave Goodell (dgoodell): "Re: [OMPI users] importing to MPI data already in memory from another	process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a way to import/map memory from a process (data acquisition) such that an MPI program could 'take' or see that memory?
<br>
<p>We have a need to do data acquisition at the rate of .7TB/s and need todo some shuffles/computation on these data,  some of the nodes are directly connected to the device, and some will do processing. 
<br>
<p>Here is the proposed flow:
<br>
<p>* Data collector nodes runs process collecting data from device
<br>
* Those nodes somehow pass the data to an MPI job running on these nodes and a number of other nodes (cpu need for filterting is greater than what the 16 data nodes can provide).
<br>
<p>One thought is to have the data collector processes be threads inside the MPI job running across all nodes, but was curious is there is a way to pass data still in memory (to much to hit disk) to the running MPI filter job.
<br>
<p>Thanks! 
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24716/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24717.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>Previous message:</strong> <a href="24715.php">Luigi Santangelo: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24717.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>Reply:</strong> <a href="24717.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>Reply:</strong> <a href="24720.php">Dave Goodell (dgoodell): "Re: [OMPI users] importing to MPI data already in memory from another	process"</a>
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
