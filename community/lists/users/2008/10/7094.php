<?
$subject_val = "[OMPI users] Mixed Threaded MPI code, how to launch?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 25 17:37:56 2008" -->
<!-- isoreceived="20081025213756" -->
<!-- sent="Sat, 25 Oct 2008 17:36:51 -0400" -->
<!-- isosent="20081025213651" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] Mixed Threaded MPI code, how to launch?" -->
<!-- id="92550C1E-FE1D-4EC1-A0A1-5BEAC9983419_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] Mixed Threaded MPI code, how to launch?<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-25 17:36:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7095.php">Davi Vercillo C. Garcia (ダヴィ): "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>Previous message:</strong> <a href="7093.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7098.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Reply:</strong> <a href="7098.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Reply:</strong> <a href="7134.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a user with a code that uses threaded solvers inside each MPI  
<br>
rank.  They would like to run two threads per process.
<br>
<p>The question is how to launch this?  The default -byslot puts all the  
<br>
processes on the first sets of cpus not leaving any cpus for the  
<br>
second thread for each process.  And half the cpus are wasted.
<br>
<p>The -bynode option works in theory, if all our nodes had the same  
<br>
number of core (they do not).
<br>
<p>So right now the user did:
<br>
<p>#PBS -l nodes=22:ppn=2
<br>
export OMP_NUM_THREADS=2
<br>
mpirun -np 22 app
<br>
<p>Which made me aware of the problem.
<br>
<p>How can I basically tell OMPI that a 'slot'  is two cores on the same  
<br>
machine?    This needs to work inside out torque based queueing system.
<br>
<p>Sorry If I was not clear about my goal.
<br>
<p><p>Brock Palen
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
<li><strong>Next message:</strong> <a href="7095.php">Davi Vercillo C. Garcia (ダヴィ): "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>Previous message:</strong> <a href="7093.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7098.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Reply:</strong> <a href="7098.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Reply:</strong> <a href="7134.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
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
