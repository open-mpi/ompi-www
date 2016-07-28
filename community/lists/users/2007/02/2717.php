<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 20 04:25:24 2007" -->
<!-- isoreceived="20070220092524" -->
<!-- sent="Tue, 20 Feb 2007 12:25:08 +0300" -->
<!-- isosent="20070220092508" -->
<!-- name="Kobotov, Alexander V" -->
<!-- email="alexander.v.kobotov_at_[hidden]" -->
<!-- subject="[OMPI users] BLACS tests fails on IPF" -->
<!-- id="E3C0BCA40296C347AF7142161DB9FC82AF6143_at_mssmsx411" -->
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
<strong>From:</strong> Kobotov, Alexander V (<em>alexander.v.kobotov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-20 04:25:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2718.php">Arif Ali: "[OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2716.php">Mark Kosmowski: "[OMPI users] performance question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2758.php">Jeff Squyres: "Re: [OMPI users] BLACS tests fails on IPF"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2758.php">Jeff Squyres: "Re: [OMPI users] BLACS tests fails on IPF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>&nbsp;
<br>
<p>I built BLACS on Itanium using Intel compilers under linux
<br>
(2.6.9-34.EL). But it fails default BLACS Fortran tests (xFbtest), C
<br>
tests (xCbtest) are ok. I've tried different configurations combining
<br>
OpenMPI-1.1.2 or OpenMPI-1.1.4, ICC 9.1.038 or ICC 8.1.38, IFORT 9.1.33
<br>
or IFORT 8.1.34, but all results were the same. OpenMPI is built using
<br>
9.1 compilers. Also I've tried the same using em64t compiler on Intel
<br>
XEON - all tests were passed. MPICH2 on IPF also works fine.
<br>
<p>&nbsp;
<br>
<p>Is that an OpenMPI bug? Maybe some workaround exists?
<br>
<p>&nbsp;
<br>
<p>Bmake.inc is attached.
<br>
<p>Below is output I've got (Don't pay attention to blacs warnings, they
<br>
are normal for MPI):
<br>
<p>===[ begin of: xFbtest output ]=====================================
<br>
<p>-bash-3.00$  mpirun -np 4 xFbtest_MPI-LINUX-0
<br>
<p>BLACS WARNING 'No need to set message ID range due to MPI communicator.'
<br>
<p>from {-1,-1}, pnum=1, Contxt=-1, on line 18 of file 'blacs_set_.c'.
<br>
<p>&nbsp;
<br>
<p>BLACS WARNING 'No need to set message ID range due to MPI communicator.'
<br>
<p>from {-1,-1}, pnum=3, Contxt=-1, on line 18 of file 'blacs_set_.c'.
<br>
<p>&nbsp;
<br>
<p>BLACS WARNING 'No need to set message ID range due to MPI communicator.'
<br>
<p>from {-1,-1}, pnum=0, Contxt=-1, on line 18 of file 'blacs_set_.c'.
<br>
<p>&nbsp;
<br>
<p>BLACS WARNING 'No need to set message ID range due to MPI communicator.'
<br>
<p>from {-1,-1}, pnum=2, Contxt=-1, on line 18 of file 'blacs_set_.c'.
<br>
<p>&nbsp;
<br>
<p>[comp-pvfs-0-7.local:30119] *** An error occurred in MPI_Comm_group
<br>
<p>[comp-pvfs-0-7.local:30118] *** An error occurred in MPI_Comm_group
<br>
<p>[comp-pvfs-0-7.local:30118] *** on communicator MPI_COMM_WORLD
<br>
<p>[comp-pvfs-0-7.local:30118] *** MPI_ERR_COMM: invalid communicator
<br>
<p>[comp-pvfs-0-7.local:30119] *** on communicator MPI_COMM_WORLD
<br>
<p>[comp-pvfs-0-7.local:30119] *** MPI_ERR_COMM: invalid communicator
<br>
<p>[comp-pvfs-0-7.local:30119] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>[comp-pvfs-0-7.local:30116] *** An error occurred in MPI_Comm_group
<br>
<p>[comp-pvfs-0-7.local:30116] *** on communicator MPI_COMM_WORLD
<br>
<p>[comp-pvfs-0-7.local:30118] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>[comp-pvfs-0-7.local:30116] *** MPI_ERR_COMM: invalid communicator
<br>
<p>[comp-pvfs-0-7.local:30116] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>[comp-pvfs-0-7.local:30117] *** An error occurred in MPI_Comm_group
<br>
<p>[comp-pvfs-0-7.local:30117] *** on communicator MPI_COMM_WORLD
<br>
<p>[comp-pvfs-0-7.local:30117] *** MPI_ERR_COMM: invalid communicator
<br>
<p>[comp-pvfs-0-7.local:30117] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>forrtl: error (78): process killed (SIGTERM)
<br>
<p>forrtl: error (78): process killed (SIGTERM)
<br>
<p>forrtl: error (78): process killed (SIGTERM)
<br>
<p>forrtl: error (78): process killed (SIGTERM)
<br>
<p>===[ end of: xFbtest output ]=====================================
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>W.B.R.,
<br>
<p>Kobotov Alexander
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2717/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2717/Bmake.inc">Bmake.inc</a>
</ul>
<!-- attachment="Bmake.inc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2718.php">Arif Ali: "[OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2716.php">Mark Kosmowski: "[OMPI users] performance question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2758.php">Jeff Squyres: "Re: [OMPI users] BLACS tests fails on IPF"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2758.php">Jeff Squyres: "Re: [OMPI users] BLACS tests fails on IPF"</a>
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
