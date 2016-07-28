<?
$subject_val = "Re: [OMPI users] slurm openmpi 1.8.3 core bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 23:37:29 2015" -->
<!-- isoreceived="20150202043729" -->
<!-- sent="Sun, 1 Feb 2015 20:37:25 -0800" -->
<!-- isosent="20150202043725" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slurm openmpi 1.8.3 core bindings" -->
<!-- id="76F6BA3F-B12A-4AD6-9BF3-D43950837189_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CABOsP2NJY_r4xKePsS1uzxr89ncCskcZ8JTXnVUXbvZG=a9+kw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] slurm openmpi 1.8.3 core bindings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-01 23:37:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26252.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26250.php">Gilles Gouaillardet: "Re: [OMPI users] using multiple IB connections between hosts"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26245.php">Michael Di Domenico: "[OMPI users] slurm openmpi 1.8.3 core bindings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, I don&#226;&#128;&#153;t think that the slurm bindings will work for you. Problem is that the slurm directive gets applied to the launch of our daemon, not the application procs. So what you&#226;&#128;&#153;ve done is bind our daemon to 3 cpus. This has nothing to do with the OMPI-Slurm integration - you told slurm to bind any  process it launches to 3 cpus, and the only &#226;&#128;&#156;processes&#226;&#128;&#157; slurm launches are our daemons.
<br>
<p>The only way to get what you want is to have slurm make the allocation without specifying cpus-per-task, and then have mpirun do the pe=N.
<br>
<p><p><span class="quotelev1">&gt; On Jan 30, 2015, at 8:20 AM, Michael Di Domenico &lt;mdidomenico4_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to get slurm and openmpi to cooperate when running multi
</span><br>
<span class="quotelev1">&gt; thread jobs.  i'm sure i'm doing something wrong, but i can't figure
</span><br>
<span class="quotelev1">&gt; out what
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my node configuration is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2 nodes
</span><br>
<span class="quotelev1">&gt; 2 sockets
</span><br>
<span class="quotelev1">&gt; 6 cores per socket
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i want to run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sbatch -N2 -n 8 --ntasks-per-node=4 --cpus-per-task=3 -w node1,node2
</span><br>
<span class="quotelev1">&gt; program.sbatch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; inside the program.sbatch i'm calling openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n $SLURM_NTASKS --report-bindings program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when the binds report comes out i get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node1 rank 0 socket 0 core 0
</span><br>
<span class="quotelev1">&gt; node1 rank 1 socket 1 core 6
</span><br>
<span class="quotelev1">&gt; node1 rank 2 socket 0 core 1
</span><br>
<span class="quotelev1">&gt; node1 rank 3 socket 1 core 7
</span><br>
<span class="quotelev1">&gt; node2 rank 4 socket 0 core 0
</span><br>
<span class="quotelev1">&gt; node2 rank 5 socket 1 core 6
</span><br>
<span class="quotelev1">&gt; node2 rank 6 socket 0 core 1
</span><br>
<span class="quotelev1">&gt; node2 rank 7 socket 1 core 7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which is semi-fine, but when the job runs the resulting threads from
</span><br>
<span class="quotelev1">&gt; the program are locked (according to top) to those eight cores rather
</span><br>
<span class="quotelev1">&gt; then spreading themselves over the 24 cores available
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i tried a few incantations of the map-by, bind-to, etc, but openmpi
</span><br>
<span class="quotelev1">&gt; basically complained about everything i tried for one reason or
</span><br>
<span class="quotelev1">&gt; another
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my understand is that slurm should be passing the requested config to
</span><br>
<span class="quotelev1">&gt; openmpi (or openmpi is pulling from the environment somehow) and it
</span><br>
<span class="quotelev1">&gt; should magically work
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if i skip slurm and run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 8 --map-by node:pe=3 -bind-to core -host node1,node2
</span><br>
<span class="quotelev1">&gt; --report-bindings program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node1 rank 0 socket 0 core 0
</span><br>
<span class="quotelev1">&gt; node2 rank 1 socket 0 core 0
</span><br>
<span class="quotelev1">&gt; node1 rank 2 socket 0 core 3
</span><br>
<span class="quotelev1">&gt; node2 rank 3 socket 0 core 3
</span><br>
<span class="quotelev1">&gt; node1 rank 4 socket 1 core 6
</span><br>
<span class="quotelev1">&gt; node2 rank 5 socket 1 core 6
</span><br>
<span class="quotelev1">&gt; node1 rank 6 socket 1 core 9
</span><br>
<span class="quotelev1">&gt; node2 rank 7 socket 1 core 9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i do get the behavior i want (though i would prefer a -npernode switch
</span><br>
<span class="quotelev1">&gt; in there, but openmpi complains).  the bindings look better and the
</span><br>
<span class="quotelev1">&gt; threads are not locked to the particular cores
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; therefore i'm pretty sure this is a problem between openmpi and slurm
</span><br>
<span class="quotelev1">&gt; and not necessarily with either individually
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i did compile openmpi with the slurm support switch and we're using
</span><br>
<span class="quotelev1">&gt; the cgroups taskplugin within slurm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i guess ancillary to this, is there a way to turn off core
</span><br>
<span class="quotelev1">&gt; binding/placement routines and control the placement manually?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26245.php">http://www.open-mpi.org/community/lists/users/2015/01/26245.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26252.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26250.php">Gilles Gouaillardet: "Re: [OMPI users] using multiple IB connections between hosts"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26245.php">Michael Di Domenico: "[OMPI users] slurm openmpi 1.8.3 core bindings"</a>
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
