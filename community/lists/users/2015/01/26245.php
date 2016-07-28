<?
$subject_val = "[OMPI users] slurm openmpi 1.8.3 core bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 11:20:47 2015" -->
<!-- isoreceived="20150130162047" -->
<!-- sent="Fri, 30 Jan 2015 11:20:46 -0500" -->
<!-- isosent="20150130162046" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="[OMPI users] slurm openmpi 1.8.3 core bindings" -->
<!-- id="CABOsP2NJY_r4xKePsS1uzxr89ncCskcZ8JTXnVUXbvZG=a9+kw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] slurm openmpi 1.8.3 core bindings<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-30 11:20:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26246.php">Diego Avesani: "[OMPI users] vector type"</a>
<li><strong>Previous message:</strong> <a href="26244.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26251.php">Ralph Castain: "Re: [OMPI users] slurm openmpi 1.8.3 core bindings"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26251.php">Ralph Castain: "Re: [OMPI users] slurm openmpi 1.8.3 core bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to get slurm and openmpi to cooperate when running multi
<br>
thread jobs.  i'm sure i'm doing something wrong, but i can't figure
<br>
out what
<br>
<p>my node configuration is
<br>
<p>2 nodes
<br>
2 sockets
<br>
6 cores per socket
<br>
<p>i want to run
<br>
<p>sbatch -N2 -n 8 --ntasks-per-node=4 --cpus-per-task=3 -w node1,node2
<br>
program.sbatch
<br>
<p>inside the program.sbatch i'm calling openmpi
<br>
<p>mpirun -n $SLURM_NTASKS --report-bindings program
<br>
<p>when the binds report comes out i get
<br>
<p>node1 rank 0 socket 0 core 0
<br>
node1 rank 1 socket 1 core 6
<br>
node1 rank 2 socket 0 core 1
<br>
node1 rank 3 socket 1 core 7
<br>
node2 rank 4 socket 0 core 0
<br>
node2 rank 5 socket 1 core 6
<br>
node2 rank 6 socket 0 core 1
<br>
node2 rank 7 socket 1 core 7
<br>
<p>which is semi-fine, but when the job runs the resulting threads from
<br>
the program are locked (according to top) to those eight cores rather
<br>
then spreading themselves over the 24 cores available
<br>
<p>i tried a few incantations of the map-by, bind-to, etc, but openmpi
<br>
basically complained about everything i tried for one reason or
<br>
another
<br>
<p>my understand is that slurm should be passing the requested config to
<br>
openmpi (or openmpi is pulling from the environment somehow) and it
<br>
should magically work
<br>
<p>if i skip slurm and run
<br>
<p>mpirun -n 8 --map-by node:pe=3 -bind-to core -host node1,node2
<br>
--report-bindings program
<br>
<p>node1 rank 0 socket 0 core 0
<br>
node2 rank 1 socket 0 core 0
<br>
node1 rank 2 socket 0 core 3
<br>
node2 rank 3 socket 0 core 3
<br>
node1 rank 4 socket 1 core 6
<br>
node2 rank 5 socket 1 core 6
<br>
node1 rank 6 socket 1 core 9
<br>
node2 rank 7 socket 1 core 9
<br>
<p>i do get the behavior i want (though i would prefer a -npernode switch
<br>
in there, but openmpi complains).  the bindings look better and the
<br>
threads are not locked to the particular cores
<br>
<p>therefore i'm pretty sure this is a problem between openmpi and slurm
<br>
and not necessarily with either individually
<br>
<p>i did compile openmpi with the slurm support switch and we're using
<br>
the cgroups taskplugin within slurm
<br>
<p>i guess ancillary to this, is there a way to turn off core
<br>
binding/placement routines and control the placement manually?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26246.php">Diego Avesani: "[OMPI users] vector type"</a>
<li><strong>Previous message:</strong> <a href="26244.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26251.php">Ralph Castain: "Re: [OMPI users] slurm openmpi 1.8.3 core bindings"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26251.php">Ralph Castain: "Re: [OMPI users] slurm openmpi 1.8.3 core bindings"</a>
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
