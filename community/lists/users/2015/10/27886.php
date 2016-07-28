<?
$subject_val = "[OMPI users] Seg fault in MPI_FINALIZE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 16 15:25:14 2015" -->
<!-- isoreceived="20151016192514" -->
<!-- sent="Fri, 16 Oct 2015 19:25:09 +0000" -->
<!-- isosent="20151016192509" -->
<!-- name="McGrattan, Kevin B. Dr." -->
<!-- email="kevin.mcgrattan_at_[hidden]" -->
<!-- subject="[OMPI users] Seg fault in MPI_FINALIZE" -->
<!-- id="BN3PR09MB03693DBA03E49DFE75E493988E3D0_at_BN3PR09MB0369.namprd09.prod.outlook.com" -->
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
<strong>Subject:</strong> [OMPI users] Seg fault in MPI_FINALIZE<br>
<strong>From:</strong> McGrattan, Kevin B. Dr. (<em>kevin.mcgrattan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-16 15:25:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="27885.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>Reply:</strong> <a href="27887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>Maybe reply:</strong> <a href="27918.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My group is running a fairly large CFD code compiled with Intel Fortran 16.0.0 and OpenMPI 1.8.4. Each night we run hundreds of simple test cases, using a range of MPI processes from 1 to 16. I have noticed that if we submit these jobs on our linux cluster and assign each job exclusive rights to an entire node or two, the jobs run fine. By restrict, I mean that each job is launched via a PBS script that includes
<br>
<p>#PBS -l nodes=X:ppn=8
<br>
<p>because each node on our cluster has 8 cores. However, if we do not restrict the jobs to use the entire node by itself, we occasionally get seg faults during MPI_FINALIZE. When a  job fails, I see that each MPI process writes out the following message, and all processes arrive at and pass the barrier:
<br>
<p>WRITE(LU_ERR,'(A,I4,A)') 'MPI process ',MYID,' has completed'
<br>
CALL MPI_BARRIER(MPI_COMM_WORLD,IERR)
<br>
CALL MPI_FINALIZE(IERR)
<br>
<p>But at least one MPI process gets stuck in the MPI_FINALIZE routine. I do not get back any error message other than that a seg fault occurred.
<br>
<p>I cannot nail this down any better because this happens like every other night, with about 1 out of a hundred jobs. Can anyone think of a reason why the job would seg fault in MPI_FINALIZE, but only under conditions where the jobs are tightly packed onto our cluster?
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27886/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="27885.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>Reply:</strong> <a href="27887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>Maybe reply:</strong> <a href="27918.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
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
