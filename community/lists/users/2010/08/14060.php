<?
$subject_val = "Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 17 11:42:06 2010" -->
<!-- isoreceived="20100817154206" -->
<!-- sent="Tue, 17 Aug 2010 11:41:56 -0400" -->
<!-- isosent="20100817154156" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1" -->
<!-- id="4C6AADC4.50203_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="74F7E507-5011-4D9F-99AD-53D9732E93CE_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-17 11:41:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14061.php">Yong Qin: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<li><strong>Previous message:</strong> <a href="14059.php">Gijsbert Wiesenekker: "Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
<li><strong>In reply to:</strong> <a href="14056.php">Gijsbert Wiesenekker: "[OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gijsbert
<br>
<p>This may be more on the Torque side, but not necessarily so.
<br>
ClusterResources has decent documentation:
<br>
<a href="http://www.clusterresources.com/pages/products/torque-resource-manager.php">http://www.clusterresources.com/pages/products/torque-resource-manager.php</a>
<br>
<p>1) To verify Torque+OpenMPI functionality/support try first
<br>
a non-mpi executable, e.g.:
<br>
<p>#PBS -lnodes=4:ppn=4
<br>
<p>mpiexec -np 16 hostname
<br>
<p>Use full path to
<br>
<p>2) Check your ${TORQUE}/server_priv/nodes file.
<br>
It should be something like this:
<br>
<p>node01 np=4
<br>
node02 np=4
<br>
node03 np=4
<br>
node04 np=4
<br>
<p>3) Verify that the pbs_mom daemons are working on all nodes
<br>
(service pbs_mom status)
<br>
In some setups this is called &quot;pbs&quot; instead of &quot;pbs_mom&quot;.
<br>
<p>4) Check that your PATH is being set correctly
<br>
for both Torque and OpenMPI, if they are installed in non-standard places.
<br>
You can try for instance:
<br>
<p>mpirun -np 16 &quot;hostname&quot;
<br>
mpirun -np 16 &quot;echo $PATH&quot;
<br>
mpirun -np 16 &quot;which mpiexec&quot;
<br>
mpirun -np 16 &quot;which qsub&quot;
<br>
<p>Your PATH may be set perhaps on your .bashrc/.cshrc file,
<br>
*on all nodes*.
<br>
If your home directory is mounted over NFS on the nodes,
<br>
this should be one single file.
<br>
However, if the home directories are local to all nodes,
<br>
then one file per node.
<br>
Sometimes this is done alternatively in specific files on
<br>
/etc/profile.d, e.g.torque.[sh,csh].
<br>
Yet another alternative is via &quot;environment modules&quot;.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>Gijsbert Wiesenekker wrote:
<br>
<span class="quotelev1">&gt; I have a four-node quad core cluster. I am running OpenMPI (version 1.4.2) jobs with Torque (version 2.4.8). I can submit jobs using
</span><br>
<span class="quotelev1">&gt; #PBS -lnodes=4:ppn=4
</span><br>
<span class="quotelev1">&gt; And 16 processes are launched. However if I use
</span><br>
<span class="quotelev1">&gt; #PBS -lnodes=4:ppn=1 
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; #PBS -lnodes=4
</span><br>
<span class="quotelev1">&gt; The call to MPI_Init is succesful, but the call to 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;mpi_nprocs)
</span><br>
<span class="quotelev1">&gt; hangs and never returns.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas? Any workarounds?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gijsbert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14061.php">Yong Qin: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<li><strong>Previous message:</strong> <a href="14059.php">Gijsbert Wiesenekker: "Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
<li><strong>In reply to:</strong> <a href="14056.php">Gijsbert Wiesenekker: "[OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
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
