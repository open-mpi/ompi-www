<?
$subject_val = "[OMPI users] an MPI process using about 12 file descriptors per neighbour processes - isn't it a bit too much?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 08:52:28 2009" -->
<!-- isoreceived="20090814125228" -->
<!-- sent="Fri, 14 Aug 2009 14:52:24 +0200" -->
<!-- isosent="20090814125224" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] an MPI process using about 12 file descriptors per neighbour processes - isn't it a bit too much?" -->
<!-- id="4A855E08.6090500_at_rz.rwth-aachen.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] an MPI process using about 12 file descriptors per neighbour processes - isn't it a bit too much?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-14 08:52:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10361.php">Alan: "[OMPI users] openmpi with xgrid"</a>
<li><strong>Previous message:</strong> <a href="10359.php">Lee Amy: "[OMPI users] Help: How to accomplish processors affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10364.php">Rolf Vandevaart: "Re: [OMPI users] an MPI process using about 12 file descriptors per neighbour processes - isn't it a bit too much?"</a>
<li><strong>Reply:</strong> <a href="10364.php">Rolf Vandevaart: "Re: [OMPI users] an MPI process using about 12 file descriptors per neighbour processes - isn't it a bit too much?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi OpenMPI folks,
<br>
<p>We use Sun MPI (Cluster Tools 8.2) and also native OpenMPI 1.3.3 and we 
<br>
wonder us about the way OpenMPI devours file descriptors: on our 
<br>
computers, ulimit -n is currently set to 1024, and we found out that we 
<br>
may run maximally 84 MPI processes per box, and if we try to run 85 (or 
<br>
above) processes, we got such error message:
<br>
<p>--------------------------------------------------------------------------
<br>
Error: system limit exceeded on number of network connections that can 
<br>
be open
<br>
.....
<br>
--------------------------------------------------------------------------
<br>
<p>Simple computing tells us, 1024/85 is about 12. This lets us believe 
<br>
that there is an single OpenMPI process, which needs 12 file descriptor 
<br>
per other MPI process.
<br>
<p>By now, we have only one box with more than 100 CPUs on which it may be 
<br>
meaningfull to run more than 85 processes. But in the quite near future, 
<br>
many-core boxes are arising (we also ordered 128-way nehalems), so it 
<br>
may be disadvantageous to consume a lot of file descriptors per MPI 
<br>
process.
<br>
<p><p>We see a possibility to awod this problem by setting the ulimit for file 
<br>
descriptor to a higher value.  This is not easy unter linux: you need 
<br>
either to recompile the kernel (which is not a choise for us), or to set 
<br>
a root process somewhere which will set the ulimit to a higher value 
<br>
(which is a security risk and not easy to implement).
<br>
<p>We also tryed to set the opal_set_max_sys_limits to 1, as the help says 
<br>
(by adding  &quot;-mca opal_set_max_sys_limits 1&quot; to the command line), but 
<br>
we does not see any change of behaviour).
<br>
<p>What is your meaning?
<br>
<p>Best regards,
<br>
Paul Kapinos
<br>
RZ RWTH Aachen
<br>
<p><p><p>#####################################################
<br>
&nbsp;&nbsp;/opt/SUNWhpc/HPC8.2/intel/bin/mpiexec -mca opal_set_max_sys_limits 1 
<br>
-np 86   a.out
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10360/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10361.php">Alan: "[OMPI users] openmpi with xgrid"</a>
<li><strong>Previous message:</strong> <a href="10359.php">Lee Amy: "[OMPI users] Help: How to accomplish processors affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10364.php">Rolf Vandevaart: "Re: [OMPI users] an MPI process using about 12 file descriptors per neighbour processes - isn't it a bit too much?"</a>
<li><strong>Reply:</strong> <a href="10364.php">Rolf Vandevaart: "Re: [OMPI users] an MPI process using about 12 file descriptors per neighbour processes - isn't it a bit too much?"</a>
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
