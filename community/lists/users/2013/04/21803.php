<?
$subject_val = "[OMPI users] ADIOI Lock problems on NFS and Panasas with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 26 11:21:36 2013" -->
<!-- isoreceived="20130426152136" -->
<!-- sent="Fri, 26 Apr 2013 11:21:29 -0400" -->
<!-- isosent="20130426152129" -->
<!-- name="Mehmet Belgin" -->
<!-- email="mehmet.belgin_at_[hidden]" -->
<!-- subject="[OMPI users] ADIOI Lock problems on NFS and Panasas with OpenMPI" -->
<!-- id="20DF5E63-C457-49F5-B45A-65F66ECAA578_at_oit.gatech.edu" -->
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
<strong>Subject:</strong> [OMPI users] ADIOI Lock problems on NFS and Panasas with OpenMPI<br>
<strong>From:</strong> Mehmet Belgin (<em>mehmet.belgin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-26 11:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21804.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="21802.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>OpenMPI crashes when doing parallel HDF5 on both NFS and Panasas systems:
<br>
<p>On NFS, we are getting:
<br>
<p>ADIOI_Set_lock:: No locks available
<br>
ADIOI_Set_lock:offset 69744, length 256
<br>
application called MPI_Abort(MPI_COMM_WORLD, 1) - process 124
<br>
File locking failed in ADIOI_Set_lock(fd 25,cmd F_SETLKW/7,type F_WRLCK/1,whence 0) with return value FFFFFFFF and errno 25.
<br>
If the file system is NFS, you need to use NFS version 3, ensure that the lockd daemon is running on all the machines, and mount the directory with the 'noac' option (no attribute caching).
<br>
<p>On Panasas:
<br>
<p>ADIOI_PANFS_RESIZE: Rank 13: Resize failed: requested=46996328 actual=9187464.
<br>
<p>We are using intel 12.1.4, openMPI (tried all new versions) and HDF5 1.8.10. 
<br>
<p>I searched the forum archives and found two identical questions from 2008. One was left unanswered, and the other answered by Jeff (Squyres) suggesting checking with ROMIO maintainers. So, I went ahead and recompiled everything without romio, but I am still seeing the same errors.
<br>
<p>Any suggestions will be very much appreciated!
<br>
<p>Thanks,
<br>
-Mehmet
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21803/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21804.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="21802.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
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
