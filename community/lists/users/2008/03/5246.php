<?
$subject_val = "[OMPI users] SLURM and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 10:24:30 2008" -->
<!-- isoreceived="20080320142430" -->
<!-- sent="Thu, 20 Mar 2008 15:24:12 +0100" -->
<!-- isosent="20080320142412" -->
<!-- name="Werner Augustin" -->
<!-- email="Werner.Augustin_at_[hidden]" -->
<!-- subject="[OMPI users] SLURM and OpenMPI" -->
<!-- id="20080320152412.052704e8_at_notebook" -->
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
<strong>Subject:</strong> [OMPI users] SLURM and OpenMPI<br>
<strong>From:</strong> Werner Augustin (<em>Werner.Augustin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-20 10:24:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5247.php">Eidson, Eric D: "[OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings"</a>
<li><strong>Previous message:</strong> <a href="5245.php">Chembeti, Ramesh (S&amp;T-Student): "Re: [OMPI users] parallel molecular Dynamic simulations: All to AllComunication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5251.php">Tim Prins: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5251.php">Tim Prins: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5917.php">Ralph H Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5935.php">Ralph H Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5970.php">Sacerdoti, Federico: "Re: [OMPI users] SLURM and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>At our site here at the University of Karlsruhe we are running two
<br>
large clusters with SLURM and HP-MPI. For our new cluster we want to
<br>
keep SLURM and switch to OpenMPI. While testing I got the following
<br>
problem:
<br>
<p>with HP-MPI I do something like
<br>
<p>srun -N 2 -n 2 -b mpirun -srun helloworld
<br>
<p>and get 
<br>
<p>Hi, here is process 0 of 2, running MPI version 2.0 on xc3n13.
<br>
Hi, here is process 1 of 2, running MPI version 2.0 on xc3n14.
<br>
<p>when I try the same with OpenMPI (version 1.2.4)
<br>
<p>srun -N 2 -n 2 -b mpirun helloworld
<br>
<p>I get
<br>
<p>Hi, here is process 1 of 8, running MPI version 2.0 on xc3n13.
<br>
Hi, here is process 0 of 8, running MPI version 2.0 on xc3n13.
<br>
Hi, here is process 5 of 8, running MPI version 2.0 on xc3n14.
<br>
Hi, here is process 2 of 8, running MPI version 2.0 on xc3n13.
<br>
Hi, here is process 4 of 8, running MPI version 2.0 on xc3n14.
<br>
Hi, here is process 3 of 8, running MPI version 2.0 on xc3n13.
<br>
Hi, here is process 6 of 8, running MPI version 2.0 on xc3n14.
<br>
Hi, here is process 7 of 8, running MPI version 2.0 on xc3n14.
<br>
<p>and with 
<br>
<p>srun -N 2 -n 2 -b mpirun -np 2 helloworld
<br>
<p>Hi, here is process 0 of 2, running MPI version 2.0 on xc3n13.
<br>
Hi, here is process 1 of 2, running MPI version 2.0 on xc3n13.
<br>
<p>which is still wrong, because it uses only one of the two allocated
<br>
nodes.
<br>
<p>OpenMPI uses the SLURM_NODELIST and SLURM_TASKS_PER_NODE environment
<br>
variables, starts with slurm one orted per node and tasks upto the
<br>
maximum number of slots on every node. So basically it also does
<br>
some 'resource management' and interferes with slurm. OK, I can fix that
<br>
with a mpirun wrapper script which calls mpirun with the right -np and
<br>
the right rmaps_base_n_pernode setting, but it gets worse. We want to
<br>
allocate computing power on a per cpu base instead of per node, i.e.
<br>
different user might share a node. In addition slurm allows to schedule
<br>
according to memory usage. Therefore it is important that on every node
<br>
there is exactly the number of tasks running that slurm wants. The only
<br>
solution I came up with is to generate for every job a detailed
<br>
hostfile and call mpirun --hostfile. Any suggestions for improvement?
<br>
<p>I've found a discussion thread &quot;slurm and all-srun orterun&quot; in the
<br>
mailinglist archive concerning the same problem, where Ralph Castain
<br>
announced that he is working on two new launch methods which would fix
<br>
my problems. Unfortunately his email address is deleted from the
<br>
archive, so it would be really nice if the friendly elf mentioned there
<br>
is still around and could forward my mail to him.
<br>
<p>Thanks in advance,
<br>
Werner Augustin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5247.php">Eidson, Eric D: "[OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings"</a>
<li><strong>Previous message:</strong> <a href="5245.php">Chembeti, Ramesh (S&amp;T-Student): "Re: [OMPI users] parallel molecular Dynamic simulations: All to AllComunication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5251.php">Tim Prins: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5251.php">Tim Prins: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5917.php">Ralph H Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5935.php">Ralph H Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5970.php">Sacerdoti, Federico: "Re: [OMPI users] SLURM and OpenMPI"</a>
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
