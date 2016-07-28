<?
$subject_val = "Re: [OMPI users] SLURM environment variables at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 12:50:20 2011" -->
<!-- isoreceived="20110223175020" -->
<!-- sent="Wed, 23 Feb 2011 10:39:14 -0700" -->
<!-- isosent="20110223173914" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLURM environment variables at runtime" -->
<!-- id="AANLkTimdMhVw9aUpgP4MRhZtdq73rhkgjAT_EnmGb=8G_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="8BC9254C6D66C746B00D00661FAD9AF06E515B60DA_at_GVW1341EXA.americas.hpqcorp.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] SLURM environment variables at runtime<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 12:39:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15701.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15699.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15698.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15727.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We use srun internally to start the remote daemons. We construct a
<br>
nodelist from the user-specified inputs, and pass that to srun so it
<br>
knows where to start the daemons.
<br>
<p><p>On Wednesday, February 23, 2011, Henderson, Brent
<br>
&lt;brent.henderson_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; SLURM seems to be doing this in the case of a regular srun:&#160;[brent_at_node1 mpi]$ srun -N 2 -n 4 env | egrep SLURM_NODEID\|SLURM_PROCID\|SLURM_LOCALID | sortSLURM_LOCALID=0SLURM_LOCALID=0SLURM_LOCALID=1SLURM_LOCALID=1SLURM_NODEID=0SLURM_NODEID=0SLURM_NODEID=1SLURM_NODEID=1SLURM_PROCID=0SLURM_PROCID=1SLURM_PROCID=2SLURM_PROCID=3[brent_at_node1 mpi]$&#160;Since srun is not supported currently by OpenMPI, I have to use salloc &#150; right? &#160;In this case, it is up to OpenMPI to interpret the SLURM environment variables it sees in the one process that is launched and &#145;do the right thing&#146; &#150; whatever that means in this case.&#160; How does OpenMPI start the processes on the remote nodes under the covers?&#160; (use srun, generate a hostfile and launch as you would outside SLURM, &#133;)&#160; This may be the difference between HP-MPI and OpenMPI.&#160;Thanks,&#160;Brent&#160;&#160;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, February 23, 2011 10:07 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] SLURM environment variables at runtime&#160;Resource managers generally frown on the idea of any program passing RM-managed envars from one node to another, and this is certainly true of slurm. The reason is that the RM reserves those values for its own use when managing remote nodes. For example, if you got an allocation and then used mpirun to launch a job across only a portion of that allocation, and then ran another mpirun instance in parallel on the remainder of the nodes, the slurm envars for those two mpirun instances -need- to be quite different. Having mpirun forward the values it sees would cause the system to become very confused.&#160;We learned the hard way never to cross that line :-(&#160;You have two options:&#160;(a) you could get your sys admin to configure slurm correctly to provide your desired envars on the remote nodes. This is the recommended (by slurm and other RMs) way of getting what you requested. It is a simple configuration option - if he needs help, he should contact the</span><br>
&nbsp;slurm mailing list&#160;(b) you can ask mpirun to do so, at your own risk. Specify each parameter with a &quot;-x FOO&quot; argument. See &quot;man mpirun&quot; for details. Keep an eye out for aberrant behavior.&#160;Ralph&#160;On Wed, Feb 23, 2011 at 8:38 AM, Henderson, Brent &lt;brent.henderson_at_[hidden]&gt; wrote:Hi Everyone, I have an OpenMPI/SLURM specific question,&#160;I&#146;m using MPI as a launcher for another application I&#146;m working on and it is dependent on the SLURM environment variables making their way into the a.out&#146;s environment.&#160; This works as I need if I use HP-MPI/PMPI, but when I use OpenMPI, it appears that not all are set as I would like across all of the ranks.&#160;I have example output below from a simple a.out that just writes out the environment that it sees to a file whose name is based on the node name and rank number.&#160; Note that with OpenMPI, that things like SLURM_NNODES and SLURM_TASKS_PER_NODE are not set the same for ranks on the different nodes and things like SLURM_LOCALID are just missing entirely.&#160;So the question is, should t<br>
he environment variables on the remote nodes (from the perspective of where the job is launched) have the full set of SLURM environment variables as seen on the launching node?&#160;Thanks,&#160;Brent Henderson&#160;[brent_at_node2 mpi]$ rm node*[brent_at_node2 mpi]$ mkdir openmpi hpmpi[brent_at_node2 mpi]$ salloc -N 2 -n 4 mpirun ./printenv.openmpi salloc: Granted job allocation 23Hello world! I'm 3 of 4 on node1Hello world! I'm 2 of 4 on node1Hello world! I'm 1 of 4 on node2Hello world! I'm 0 of 4 on node2salloc: Relinquishing job allocation 23[brent_at_node2 mpi]$ mv node* openmpi/[brent_at_node2 mpi]$ egrep 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER' openmpi/node1.3.of.4 SLURM_JOB_NODELIST=node[1-2]SLURM_NNODES=1SLURM_NODELIST=node[1-2]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15701.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15699.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15698.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15727.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
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
