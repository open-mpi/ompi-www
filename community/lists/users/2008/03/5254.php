<?
$subject_val = "Re: [OMPI users] SLURM and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 17:41:38 2008" -->
<!-- isoreceived="20080321214138" -->
<!-- sent="Fri, 21 Mar 2008 17:41:28 -0400" -->
<!-- isosent="20080321214128" -->
<!-- name="Sacerdoti, Federico" -->
<!-- email="Federico.Sacerdoti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLURM and OpenMPI" -->
<!-- id="A14F91CBBBA3014385A806944C9BEF1BAE7DF7_at_maildrd1.nyc.deshaw.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C4084409.4ADE%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Sacerdoti, Federico (<em>Federico.Sacerdoti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-21 17:41:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5255.php">Wen Hao Wang: "[OMPI users] RHEL 5.2 and SLES10 SP2 support"</a>
<li><strong>Previous message:</strong> <a href="5253.php">Terry Frankcombe: "Re: [OMPI users] More on AlltoAll"</a>
<li><strong>In reply to:</strong> <a href="5252.php">Ralph Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5278.php">Werner Augustin: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5278.php">Werner Augustin: "Re: [OMPI users] SLURM and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph wrote:
<br>
&quot;I don't know if I would say we &quot;interfere&quot; with SLURM - I would say
<br>
that we
<br>
are only lightly integrated with SLURM at this time. We use SLURM as a
<br>
resource manager to assign nodes, and then map processes onto those
<br>
nodes
<br>
according to the user's wishes. We chose to do this because srun applies
<br>
its
<br>
own load balancing algorithms if you launch processes directly with it,
<br>
which leaves the user with little flexibility to specify their desired
<br>
rank/slot mapping. We chose to support the greater flexibility.&quot;
<br>
&nbsp;
<br>
Ralph, we wrote a launcher for mvapich that uses srun to launch but
<br>
keeps tight control of where processes are started. The way we did it
<br>
was to force srun to launch a single process on a particular node. 
<br>
<p>The launcher calls many of these:
<br>
&nbsp;srun --jobid $JOBID -N 1 -n 1 -w host005 CMD ARGS
<br>
<p>Hope this helps (and we are looking forward to a tighter orterun/slurm
<br>
integration as you know).
<br>
<p>Regards,
<br>
Federico
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: Thursday, March 20, 2008 6:41 PM
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Cc: Ralph Castain
<br>
Subject: Re: [OMPI users] SLURM and OpenMPI
<br>
<p>Hi there
<br>
<p>I am no slurm expert. However, it is our understanding that
<br>
SLURM_TASKS_PER_NODE means the number of slots allocated to the job, not
<br>
the
<br>
number of tasks to be executed on each node. So the 4(x2) tells us that
<br>
we
<br>
have 4 slots on each of two nodes to work with. You got 4 slots on each
<br>
node
<br>
because you used the -N option, which told slurm to assign all slots on
<br>
that
<br>
node to this job - I assume you have 4 processors on your nodes. OpenMPI
<br>
parses that string to get the allocation, then maps the number of
<br>
specified
<br>
processes against it.
<br>
<p>It is possible that the interpretation of SLURM_TASKS_PER_NODE is
<br>
different
<br>
when used to allocate as opposed to directly launch processes. Our
<br>
typical
<br>
usage is for someone to do:
<br>
<p>srun -N 2 -A
<br>
mpirun -np 2 helloworld
<br>
<p>In other words, we use srun to create an allocation, and then run mpirun
<br>
separately within it.
<br>
<p><p>I am therefore unsure what the &quot;-n 2&quot; will do here. If I believe the
<br>
documentation, it would seem to imply that srun will attempt to launch
<br>
two
<br>
copies of &quot;mpirun -np 2 helloworld&quot;, yet your output doesn't seem to
<br>
support
<br>
that interpretation. It would appear that the &quot;-n 2&quot; is being ignored
<br>
and
<br>
only one copy of mpirun is being launched. I'm no slurm expert, so
<br>
perhaps
<br>
that interpretation is incorrect.
<br>
<p>Assuming that the -n 2 is ignored in this situation, your command line:
<br>
<p><span class="quotelev1">&gt; srun -N 2 -n 2 -b mpirun -np 2 helloworld
</span><br>
<p>will cause mpirun to launch two processes, mapped byslot against the
<br>
slurm
<br>
allocation of two nodes, each having 4 slots. Thus, both processes will
<br>
be
<br>
launched on the first node, which is what you observed.
<br>
<p>Similarly, the command line
<br>
<p><span class="quotelev1">&gt; srun -N 2 -n 2 -b mpirun helloworld
</span><br>
<p>doesn't specify the #procs to mpirun. In that case, mpirun will launch a
<br>
process on every available slot in the allocation. Given this command,
<br>
that
<br>
means 4 procs will be launched on each of the 2 nodes, for a total of 8
<br>
procs. Ranks 0-3 will be placed on the first node, ranks 4-7 on the
<br>
second.
<br>
Again, this is what you observed.
<br>
<p>I don't know if I would say we &quot;interfere&quot; with SLURM - I would say that
<br>
we
<br>
are only lightly integrated with SLURM at this time. We use SLURM as a
<br>
resource manager to assign nodes, and then map processes onto those
<br>
nodes
<br>
according to the user's wishes. We chose to do this because srun applies
<br>
its
<br>
own load balancing algorithms if you launch processes directly with it,
<br>
which leaves the user with little flexibility to specify their desired
<br>
rank/slot mapping. We chose to support the greater flexibility.
<br>
<p>Using the SLURM-defined mapping will require launching without our
<br>
mpirun.
<br>
This capability is still under development, and there are issues with
<br>
doing
<br>
that in slurm environments which need to be addressed. It is at a lower
<br>
priority than providing such support for TM right now, so I wouldn't
<br>
expect
<br>
it to become available for several months at least.
<br>
<p>Alternatively, it may be possible for mpirun to get the SLURM-defined
<br>
mapping and use it to launch the processes. If we can get it somehow,
<br>
there
<br>
is no problem launching it as specified - the problem is how to get the
<br>
map!
<br>
Unfortunately, slurm's licensing prevents us from using its internal
<br>
APIs,
<br>
so obtaining the map is not an easy thing to do.
<br>
<p>Anyone who wants to help accelerate that timetable is welcome to contact
<br>
me.
<br>
We know the technical issues - this is mostly a problem of (a)
<br>
priorities
<br>
versus my available time, and (b) similar considerations on the part of
<br>
the
<br>
slurm folks to do the work themselves.
<br>
<p>Ralph
<br>
<p><p>On 3/20/08 3:48 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Werner,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI does things a little bit differently than other MPIs when it
</span><br>
<span class="quotelev1">&gt; comes to supporting SLURM. See
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=slurm">http://www.open-mpi.org/faq/?category=slurm</a>
</span><br>
<span class="quotelev1">&gt; for general information about running with Open MPI on SLURM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After trying the commands you sent, I am actually a bit surprised by
</span><br>
the
<br>
<span class="quotelev1">&gt; results. I would have expected this mode of operation to work. But
</span><br>
<span class="quotelev1">&gt; looking at the environment variables that SLURM is setting for us, I
</span><br>
can
<br>
<span class="quotelev1">&gt; see why it doesn't.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On a cluster with 4 cores/node, I ran:
</span><br>
<span class="quotelev1">&gt; [tprins_at_odin ~]$ cat mprun.sh
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; printenv
</span><br>
<span class="quotelev1">&gt; [tprins_at_odin ~]$  srun -N 2 -n 2 -b mprun.sh
</span><br>
<span class="quotelev1">&gt; srun: jobid 55641 submitted
</span><br>
<span class="quotelev1">&gt; [tprins_at_odin ~]$ cat slurm-55641.out |grep SLURM_TASKS_PER_NODE
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=4(x2)
</span><br>
<span class="quotelev1">&gt; [tprins_at_odin ~]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which seems to be wrong, since the srun man page says that
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE is the &quot;Number  of tasks to be initiated on each
</span><br>
<span class="quotelev1">&gt; node&quot;. This seems to imply that the value should be &quot;1(x2)&quot;. So maybe
</span><br>
<span class="quotelev1">&gt; this is a SLURM problem? If this value were correctly reported, Open
</span><br>
MPI
<br>
<span class="quotelev1">&gt; should work fine for what you wanted to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Two other things:
</span><br>
<span class="quotelev1">&gt; 1. You should probably use the command line option '--npernode' for
</span><br>
<span class="quotelev1">&gt; mpirun instead of setting the rmaps_base_n_pernode directly.
</span><br>
<span class="quotelev1">&gt; 2. In regards to your second example below, Open MPI by default maps
</span><br>
'by
<br>
<span class="quotelev1">&gt; slot'. That is, it will fill all available slots on the first node
</span><br>
<span class="quotelev1">&gt; before moving to the second. You can change this, see:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have copied Ralph on this mail to see if he has a better response.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Werner Augustin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At our site here at the University of Karlsruhe we are running two
</span><br>
<span class="quotelev2">&gt;&gt; large clusters with SLURM and HP-MPI. For our new cluster we want to
</span><br>
<span class="quotelev2">&gt;&gt; keep SLURM and switch to OpenMPI. While testing I got the following
</span><br>
<span class="quotelev2">&gt;&gt; problem:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; with HP-MPI I do something like
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; srun -N 2 -n 2 -b mpirun -srun helloworld
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and get 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, here is process 0 of 2, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev2">&gt;&gt; Hi, here is process 1 of 2, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; when I try the same with OpenMPI (version 1.2.4)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; srun -N 2 -n 2 -b mpirun helloworld
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I get
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, here is process 1 of 8, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev2">&gt;&gt; Hi, here is process 0 of 8, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev2">&gt;&gt; Hi, here is process 5 of 8, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev2">&gt;&gt; Hi, here is process 2 of 8, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev2">&gt;&gt; Hi, here is process 4 of 8, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev2">&gt;&gt; Hi, here is process 3 of 8, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev2">&gt;&gt; Hi, here is process 6 of 8, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev2">&gt;&gt; Hi, here is process 7 of 8, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and with 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; srun -N 2 -n 2 -b mpirun -np 2 helloworld
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, here is process 0 of 2, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev2">&gt;&gt; Hi, here is process 1 of 2, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; which is still wrong, because it uses only one of the two allocated
</span><br>
<span class="quotelev2">&gt;&gt; nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI uses the SLURM_NODELIST and SLURM_TASKS_PER_NODE environment
</span><br>
<span class="quotelev2">&gt;&gt; variables, starts with slurm one orted per node and tasks upto the
</span><br>
<span class="quotelev2">&gt;&gt; maximum number of slots on every node. So basically it also does
</span><br>
<span class="quotelev2">&gt;&gt; some 'resource management' and interferes with slurm. OK, I can fix
</span><br>
that
<br>
<span class="quotelev2">&gt;&gt; with a mpirun wrapper script which calls mpirun with the right -np
</span><br>
and
<br>
<span class="quotelev2">&gt;&gt; the right rmaps_base_n_pernode setting, but it gets worse. We want to
</span><br>
<span class="quotelev2">&gt;&gt; allocate computing power on a per cpu base instead of per node, i.e.
</span><br>
<span class="quotelev2">&gt;&gt; different user might share a node. In addition slurm allows to
</span><br>
schedule
<br>
<span class="quotelev2">&gt;&gt; according to memory usage. Therefore it is important that on every
</span><br>
node
<br>
<span class="quotelev2">&gt;&gt; there is exactly the number of tasks running that slurm wants. The
</span><br>
only
<br>
<span class="quotelev2">&gt;&gt; solution I came up with is to generate for every job a detailed
</span><br>
<span class="quotelev2">&gt;&gt; hostfile and call mpirun --hostfile. Any suggestions for improvement?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've found a discussion thread &quot;slurm and all-srun orterun&quot; in the
</span><br>
<span class="quotelev2">&gt;&gt; mailinglist archive concerning the same problem, where Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; announced that he is working on two new launch methods which would
</span><br>
fix
<br>
<span class="quotelev2">&gt;&gt; my problems. Unfortunately his email address is deleted from the
</span><br>
<span class="quotelev2">&gt;&gt; archive, so it would be really nice if the friendly elf mentioned
</span><br>
there
<br>
<span class="quotelev2">&gt;&gt; is still around and could forward my mail to him.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Werner Augustin
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5255.php">Wen Hao Wang: "[OMPI users] RHEL 5.2 and SLES10 SP2 support"</a>
<li><strong>Previous message:</strong> <a href="5253.php">Terry Frankcombe: "Re: [OMPI users] More on AlltoAll"</a>
<li><strong>In reply to:</strong> <a href="5252.php">Ralph Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5278.php">Werner Augustin: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5278.php">Werner Augustin: "Re: [OMPI users] SLURM and OpenMPI"</a>
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
