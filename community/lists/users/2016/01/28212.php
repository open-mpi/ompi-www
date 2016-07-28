<?
$subject_val = "[OMPI users] cleaning up old ROMIO (MPI-IO) drivers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 12:31:51 2016" -->
<!-- isoreceived="20160105173151" -->
<!-- sent="Tue, 5 Jan 2016 11:31:37 -0600" -->
<!-- isosent="20160105173137" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="[OMPI users] cleaning up old ROMIO (MPI-IO) drivers" -->
<!-- id="568BFDF9.20202_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> [OMPI users] cleaning up old ROMIO (MPI-IO) drivers<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-05 12:31:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28213.php">Gus Correa: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/12/28211.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28213.php">Gus Correa: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>Reply:</strong> <a href="28213.php">Gus Correa: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>Reply:</strong> <a href="28323.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm itching to discard some of the little-used file system drivers in 
<br>
ROMIO, an MPI-IO implementation used by, well, everyone.
<br>
<p>I've got more details in this ROMIO blog post: 
<br>
<a href="http://press3.mcs.anl.gov/romio/2016/01/05/cleaning-out-old-romio-file-system-drivers/">http://press3.mcs.anl.gov/romio/2016/01/05/cleaning-out-old-romio-file-system-drivers/</a>
<br>
<p><p>Right now the plan is to keep these drivers:
<br>
<p>- Lustre
<br>
- GPFS
<br>
- UFS
<br>
- PVFS2
<br>
- PANFS
<br>
- NFS
<br>
- TESTFS
<br>
- XFS
<br>
<p>Do you use any of the other ROMIO file system drivers?  If you don't 
<br>
know if you do, or don't know what a ROMIO file system driver is, then 
<br>
it's unlikely you are using one.
<br>
<p>What if you use a driver and it's not on the list?  First off, let me 
<br>
know and I will probably want to visit your site and take a picture of 
<br>
your system.  Then, let me know how much longer you foresee using the 
<br>
driver and we'll create a &quot;deprecated&quot; list for N more years.
<br>
<p>Thanks
<br>
==rob
<br>
<p><p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28213.php">Gus Correa: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/12/28211.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28213.php">Gus Correa: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>Reply:</strong> <a href="28213.php">Gus Correa: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>Reply:</strong> <a href="28323.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
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
