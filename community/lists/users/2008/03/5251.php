<?
$subject_val = "Re: [OMPI users] SLURM and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 17:48:38 2008" -->
<!-- isoreceived="20080320214838" -->
<!-- sent="Thu, 20 Mar 2008 17:48:20 -0400" -->
<!-- isosent="20080320214820" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLURM and OpenMPI" -->
<!-- id="47E2DBA4.9050608_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080320152412.052704e8_at_notebook" -->
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
<strong>Subject:</strong> Re: [OMPI users] SLURM and OpenMPI<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-20 17:48:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5252.php">Ralph Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5250.php">Dave Grote: "Re: [OMPI users] More on AlltoAll"</a>
<li><strong>In reply to:</strong> <a href="5246.php">Werner Augustin: "[OMPI users] SLURM and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5252.php">Ralph Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5252.php">Ralph Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Werner,
<br>
<p>Open MPI does things a little bit differently than other MPIs when it 
<br>
comes to supporting SLURM. See
<br>
<a href="http://www.open-mpi.org/faq/?category=slurm">http://www.open-mpi.org/faq/?category=slurm</a>
<br>
for general information about running with Open MPI on SLURM.
<br>
<p>After trying the commands you sent, I am actually a bit surprised by the 
<br>
results. I would have expected this mode of operation to work. But 
<br>
looking at the environment variables that SLURM is setting for us, I can 
<br>
see why it doesn't.
<br>
<p>On a cluster with 4 cores/node, I ran:
<br>
[tprins_at_odin ~]$ cat mprun.sh
<br>
#!/bin/sh
<br>
printenv
<br>
[tprins_at_odin ~]$  srun -N 2 -n 2 -b mprun.sh
<br>
srun: jobid 55641 submitted
<br>
[tprins_at_odin ~]$ cat slurm-55641.out |grep SLURM_TASKS_PER_NODE
<br>
SLURM_TASKS_PER_NODE=4(x2)
<br>
[tprins_at_odin ~]$
<br>
<p>Which seems to be wrong, since the srun man page says that 
<br>
SLURM_TASKS_PER_NODE is the &quot;Number  of tasks to be initiated on each 
<br>
node&quot;. This seems to imply that the value should be &quot;1(x2)&quot;. So maybe 
<br>
this is a SLURM problem? If this value were correctly reported, Open MPI 
<br>
should work fine for what you wanted to do.
<br>
<p>Two other things:
<br>
1. You should probably use the command line option '--npernode' for 
<br>
mpirun instead of setting the rmaps_base_n_pernode directly.
<br>
2. In regards to your second example below, Open MPI by default maps 'by 
<br>
slot'. That is, it will fill all available slots on the first node 
<br>
before moving to the second. You can change this, see:
<br>
<a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
<br>
<p>I have copied Ralph on this mail to see if he has a better response.
<br>
<p>Tim
<br>
<p>Werner Augustin wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At our site here at the University of Karlsruhe we are running two
</span><br>
<span class="quotelev1">&gt; large clusters with SLURM and HP-MPI. For our new cluster we want to
</span><br>
<span class="quotelev1">&gt; keep SLURM and switch to OpenMPI. While testing I got the following
</span><br>
<span class="quotelev1">&gt; problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with HP-MPI I do something like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; srun -N 2 -n 2 -b mpirun -srun helloworld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and get 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, here is process 0 of 2, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev1">&gt; Hi, here is process 1 of 2, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when I try the same with OpenMPI (version 1.2.4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; srun -N 2 -n 2 -b mpirun helloworld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, here is process 1 of 8, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev1">&gt; Hi, here is process 0 of 8, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev1">&gt; Hi, here is process 5 of 8, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev1">&gt; Hi, here is process 2 of 8, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev1">&gt; Hi, here is process 4 of 8, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev1">&gt; Hi, here is process 3 of 8, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev1">&gt; Hi, here is process 6 of 8, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev1">&gt; Hi, here is process 7 of 8, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and with 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; srun -N 2 -n 2 -b mpirun -np 2 helloworld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, here is process 0 of 2, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev1">&gt; Hi, here is process 1 of 2, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which is still wrong, because it uses only one of the two allocated
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI uses the SLURM_NODELIST and SLURM_TASKS_PER_NODE environment
</span><br>
<span class="quotelev1">&gt; variables, starts with slurm one orted per node and tasks upto the
</span><br>
<span class="quotelev1">&gt; maximum number of slots on every node. So basically it also does
</span><br>
<span class="quotelev1">&gt; some 'resource management' and interferes with slurm. OK, I can fix that
</span><br>
<span class="quotelev1">&gt; with a mpirun wrapper script which calls mpirun with the right -np and
</span><br>
<span class="quotelev1">&gt; the right rmaps_base_n_pernode setting, but it gets worse. We want to
</span><br>
<span class="quotelev1">&gt; allocate computing power on a per cpu base instead of per node, i.e.
</span><br>
<span class="quotelev1">&gt; different user might share a node. In addition slurm allows to schedule
</span><br>
<span class="quotelev1">&gt; according to memory usage. Therefore it is important that on every node
</span><br>
<span class="quotelev1">&gt; there is exactly the number of tasks running that slurm wants. The only
</span><br>
<span class="quotelev1">&gt; solution I came up with is to generate for every job a detailed
</span><br>
<span class="quotelev1">&gt; hostfile and call mpirun --hostfile. Any suggestions for improvement?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've found a discussion thread &quot;slurm and all-srun orterun&quot; in the
</span><br>
<span class="quotelev1">&gt; mailinglist archive concerning the same problem, where Ralph Castain
</span><br>
<span class="quotelev1">&gt; announced that he is working on two new launch methods which would fix
</span><br>
<span class="quotelev1">&gt; my problems. Unfortunately his email address is deleted from the
</span><br>
<span class="quotelev1">&gt; archive, so it would be really nice if the friendly elf mentioned there
</span><br>
<span class="quotelev1">&gt; is still around and could forward my mail to him.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Werner Augustin
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
<li><strong>Next message:</strong> <a href="5252.php">Ralph Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5250.php">Dave Grote: "Re: [OMPI users] More on AlltoAll"</a>
<li><strong>In reply to:</strong> <a href="5246.php">Werner Augustin: "[OMPI users] SLURM and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5252.php">Ralph Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5252.php">Ralph Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
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
