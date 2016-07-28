<?
$subject_val = "[OMPI devel] MPI_Comm_spawn fails under certain conditions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 06:40:48 2014" -->
<!-- isoreceived="20140624104048" -->
<!-- sent="Tue, 24 Jun 2014 19:40:52 +0900" -->
<!-- isosent="20140624104052" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Comm_spawn fails under certain conditions" -->
<!-- id="53A955B4.1050609_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Comm_spawn fails under certain conditions<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-24 06:40:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15048.php">Ralph Castain: "Re: [OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>Previous message:</strong> <a href="15046.php">Gilles Gouaillardet: "[OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15051.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<li><strong>Reply:</strong> <a href="15051.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>this issue is related to the failures reported by mtt on the trunk when
<br>
the ibm test suite invokes MPI_Comm_spawn.
<br>
<p>my test bed is made of 3 (virtual) machines with 2 sockets and 8 cpus
<br>
per socket each.
<br>
<p>if i run on one host (without any batch manager)
<br>
<p>mpirun -np 16 --host slurm1 --oversubscribe --mca coll ^ml
<br>
./intercomm_create
<br>
<p>then the test is a success with the following warning  :
<br>
<p>--------------------------------------------------------------------------
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;Node:        slurm2
<br>
&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
--------------------------------------------------------------------------
<br>
<p><p>now if i run on three hosts
<br>
<p>mpirun -np 16 --host slurm1,slurm2,slurm3 --oversubscribe --mca coll ^ml
<br>
./intercomm_create
<br>
<p>then the test is a success without any warning
<br>
<p><p>but now, if i run on two hosts
<br>
<p>mpirun -np 16 --host slurm1,slurm2 --oversubscribe --mca coll ^ml
<br>
./intercomm_create
<br>
<p>then the test is a failure.
<br>
<p>first, i get the following same warning :
<br>
<p>--------------------------------------------------------------------------
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;Node:        slurm2
<br>
&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
--------------------------------------------------------------------------
<br>
<p>followed by a crash
<br>
<p>[slurm1:2482] *** An error occurred in MPI_Comm_spawn
<br>
[slurm1:2482] *** reported by process [2068512769,0]
<br>
[slurm1:2482] *** on communicator MPI_COMM_WORLD
<br>
[slurm1:2482] *** MPI_ERR_SPAWN: could not spawn processes
<br>
[slurm1:2482] *** MPI_ERRORS_ARE_FATAL (processes in this communicator
<br>
will now abort,
<br>
[slurm1:2482] ***    and potentially your MPI job)
<br>
<p><p>that being said, i the following command works :
<br>
<p>mpirun -np 16 --host slurm1,slurm2 --mca coll ^ml --bind-to none
<br>
./intercomm_create
<br>
<p><p>1) what does the first message means ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is it a warning ? /* if yes, why does mpirun on two hosts fail ? */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is it a fatal error ? /* if yes, why does mpirun on one host success
<br>
? */
<br>
<p>2) generally speaking, and assuming the first message is a warning,
<br>
should --oversubscribe automatically set overload-allowed ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* as far as i am concerned, that would be much more intuitive */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15048.php">Ralph Castain: "Re: [OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>Previous message:</strong> <a href="15046.php">Gilles Gouaillardet: "[OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15051.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<li><strong>Reply:</strong> <a href="15051.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
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
