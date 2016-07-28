<?
$subject_val = "[OMPI users] ADIOI_Set_lock failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 12:13:38 2008" -->
<!-- isoreceived="20080116171338" -->
<!-- sent="Wed, 16 Jan 2008 12:12:35 -0500" -->
<!-- isosent="20080116171235" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] ADIOI_Set_lock failure" -->
<!-- id="537FA7A0-208D-4BC0-8C7B-2729923D87ED_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] ADIOI_Set_lock failure<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-16 12:12:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4845.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4843.php">Roland Albrecht: "[OMPI users] Communications Problems when application distributed over different nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4852.php">Jeff Squyres: "Re: [OMPI users] ADIOI_Set_lock failure"</a>
<li><strong>Reply:</strong> <a href="4852.php">Jeff Squyres: "Re: [OMPI users] ADIOI_Set_lock failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
Using OpenMPI-1.2.3+pgi-7.0+hdf5 parallel + lustre is giving me the  
<br>
error:
<br>
<p>File locking failed in ADIOI_Set_lock. If the file system is NFS, you  
<br>
need to use NFS version 3, ensure that the lockd daemon is running on  
<br>
all the machines, and mount the directory with the 'noac' option (no  
<br>
attribute caching).
<br>
[nyx357.engin.umich.edu:21186] MPI_ABORT invoked on rank 0 in  
<br>
communicator MPI_COMM_WORLD with errorcode 1
<br>
<p>Has anyone else managed to use hdf5+lustre+openMPI's romio setup?  I  
<br>
can do MPI_File_wirte and MPI_File_read just fine.
<br>
<p><p>Brock Palen
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
<li><strong>Next message:</strong> <a href="4845.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4843.php">Roland Albrecht: "[OMPI users] Communications Problems when application distributed over different nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4852.php">Jeff Squyres: "Re: [OMPI users] ADIOI_Set_lock failure"</a>
<li><strong>Reply:</strong> <a href="4852.php">Jeff Squyres: "Re: [OMPI users] ADIOI_Set_lock failure"</a>
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
