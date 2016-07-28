<?
$subject_val = "Re: [OMPI users] null characters in output";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 16:50:22 2008" -->
<!-- isoreceived="20080623205022" -->
<!-- sent="Mon, 23 Jun 2008 16:50:14 -0400" -->
<!-- isosent="20080623205014" -->
<!-- name="Sacerdoti, Federico" -->
<!-- email="Federico.Sacerdoti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] null characters in output" -->
<!-- id="AE3C65E73659C647AD0EBCF50DC996BF057E84_at_maildrd1.nyc.deshaw.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200806191428.m5JESG3u021265_at_master.deshaw.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] null characters in output<br>
<strong>From:</strong> Sacerdoti, Federico (<em>Federico.Sacerdoti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 16:50:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5976.php">Ralph Castain: "Re: [OMPI users] null characters in output"</a>
<li><strong>Previous message:</strong> <a href="5974.php">Ralph H Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Maybe in reply to:</strong> <a href="5936.php">Ralph H Castain: "Re: [OMPI users] null characters in output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5976.php">Ralph Castain: "Re: [OMPI users] null characters in output"</a>
<li><strong>Reply:</strong> <a href="5976.php">Ralph Castain: "Re: [OMPI users] null characters in output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I'm working on a test-case for that now, hopefully I can nail it down to
<br>
a particular openmpi version.
<br>
<p>I have another small issue, which is somewhat bothering: orterun 1.2.6
<br>
exits with return code zero if the executable cannot be found. Should
<br>
this be non-zero?
<br>
<p>E.g.
<br>
$ orterun /asdf
<br>
------------------------------------------------------------------------
<br>
<pre>
--
Failed to find or execute the following executable:
Host:       drdblogin2.en.desres.deshaw.com
Executable: /asdf
Cannot continue.
------------------------------------------------------------------------
--
$ echo $?
0
Thanks
Federico
-----Original Message-----
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Ralph H Castain
Sent: Thursday, June 19, 2008 10:24 AM
To: Sacerdoti, Federico; Open MPI Users &lt;users_at_[hidden]&gt;
Subject: Re: [OMPI users] null characters in output
No, I haven't seen that - if you can provide an example, we can take a
look
at it.
Thanks
Ralph
On 6/19/08 8:15 AM, &quot;Sacerdoti, Federico&quot;
&lt;Federico.Sacerdoti_at_[hidden]&gt; wrote:
&gt; Ralph, another issue perhaps you can shed some light on.
&gt; 
&gt; When launching with orterun, we sometimes see null characters in the
&gt; stdout output. These do not show up on a terminal, but when piped to a
&gt; file they are visible in an editor. They also can show up in the
middle
&gt; of a line, and so can interfere with greps on the output, etc.
&gt; 
&gt; Have you seen this before? I am working on a simple test case, but
&gt; unfortunately have not found one that is deterministic so far.
&gt; 
&gt; Thanks,
&gt; Federico 
&gt; 
&gt; -----Original Message-----
&gt; From: Ralph H Castain [mailto:rhc_at_[hidden]]
&gt; Sent: Tuesday, June 17, 2008 1:09 PM
&gt; To: Sacerdoti, Federico; Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Subject: Re: [OMPI users] SLURM and OpenMPI
&gt; 
&gt; I can believe 1.2.x has problems in that regard. Some of that has
&gt; nothing to
&gt; do with slurm and reflects internal issues with 1.2.
&gt; 
&gt; We have made it much more resistant to those problems in the upcoming
&gt; 1.3
&gt; release, but there is no plan to retrofit those changes to 1.2. Part
of
&gt; the
&gt; problem was that we weren't using the --kill-on-bad-exit flag when we
&gt; called
&gt; srun internally, which has been fixed for 1.3.
&gt; 
&gt; BTW: we actually do use srun to launch the daemons - we just call it
&gt; internally from inside orterun. The only real difference is that we
use
&gt; orterun to setup the cmd line and then tell the daemons what they need
&gt; to
&gt; do. The issues you are seeing relate to our ability to detect that
srun
&gt; has
&gt; failed, and/or that one or more daemons have failed to launch or do
&gt; something they were supposed to do. The 1.2 system has problems in
that
&gt; regard, which was one motivation for the 1.3 overhaul.
&gt; 
&gt; I would argue that slurm allowing us to attempt to launch on a
&gt; no-longer-valid allocation is a slurm issue, not OMPI's. As I said, we
&gt; use
&gt; srun to launch the daemons - the only reason we hang is that srun is
not
&gt; returning with an error. I've seen this on other systems as well, but
&gt; have
&gt; no real answer - if slurm doesn't indicate an error has occurred, I'm
&gt; not
&gt; sure what I can do about it.
&gt; 
&gt; We are unlikely to use srun to directly launch jobs (i.e., to have
slurm
&gt; directly launch the job from an srun cmd line without mpirun) anytime
&gt; soon.
&gt; It isn't clear there is enough benefit to justify the rather large
&gt; effort,
&gt; especially considering what would be required to maintain scalability.
&gt; Decisions on all that are still pending, though, which means any
&gt; significant
&gt; change in that regard wouldn't be released until sometime next year.
&gt; 
&gt; Ralph
&gt; 
&gt; On 6/17/08 10:39 AM, &quot;Sacerdoti, Federico&quot;
&gt; &lt;Federico.Sacerdoti_at_[hidden]&gt; wrote:
&gt; 
&gt;&gt; Ralph,
&gt;&gt; 
&gt;&gt; I was wondering what the status of this feature was (using srun to
&gt;&gt; launch orted daemons)? I have two new bug reports to add from our
&gt;&gt; experience using orterun from 1.2.6 on our 4000 CPU infiniband
&gt; cluster.
&gt;&gt; 
&gt;&gt; 1. Orterun will happily hang if it is asked to run on an invalid
slurm
&gt;&gt; job, e.g. if the job has exceeded its timelimit. This would be
&gt; trivially
&gt;&gt; fixed if you used srun to launch, as they would fail with non-zero
&gt; exit
&gt;&gt; codes.
&gt;&gt; 
&gt;&gt; 2. A very simple orterun invocation hangs instead of exiting with an
&gt;&gt; error. In this case the executable does not exist, and we would
expect
&gt;&gt; orterun to exit non-zero. This has caused
&gt;&gt; headaches with some workflow management script that automatically
&gt; start
&gt;&gt; jobs.
&gt;&gt; 
&gt;&gt; salloc -N2 -p swdev orterun dummy-binary-I-dont-exist
&gt;&gt; [hang]
&gt;&gt; 
&gt;&gt; orterun dummy-binary-I-dont-exist
&gt;&gt; [hang]
&gt;&gt; 
&gt;&gt; Thanks,
&gt;&gt; Federico
&gt;&gt; 
&gt;&gt; -----Original Message-----
&gt;&gt; From: Sacerdoti, Federico
&gt;&gt; Sent: Friday, March 21, 2008 5:41 PM
&gt;&gt; To: 'Open MPI Users'
&gt;&gt; Subject: RE: [OMPI users] SLURM and OpenMPI
&gt;&gt; 
&gt;&gt; 
&gt;&gt; Ralph wrote:
&gt;&gt; &quot;I don't know if I would say we &quot;interfere&quot; with SLURM - I would say
&gt;&gt; that we
&gt;&gt; are only lightly integrated with SLURM at this time. We use SLURM as
a
&gt;&gt; resource manager to assign nodes, and then map processes onto those
&gt;&gt; nodes
&gt;&gt; according to the user's wishes. We chose to do this because srun
&gt; applies
&gt;&gt; its
&gt;&gt; own load balancing algorithms if you launch processes directly with
&gt; it,
&gt;&gt; which leaves the user with little flexibility to specify their
desired
&gt;&gt; rank/slot mapping. We chose to support the greater flexibility.&quot;
&gt;&gt;  
&gt;&gt; Ralph, we wrote a launcher for mvapich that uses srun to launch but
&gt;&gt; keeps tight control of where processes are started. The way we did it
&gt;&gt; was to force srun to launch a single process on a particular node.
&gt;&gt; 
&gt;&gt; The launcher calls many of these:
&gt;&gt;  srun --jobid $JOBID -N 1 -n 1 -w host005 CMD ARGS
&gt;&gt; 
&gt;&gt; Hope this helps (and we are looking forward to a tighter
orterun/slurm
&gt;&gt; integration as you know).
&gt;&gt; 
&gt;&gt; Regards,
&gt;&gt; Federico
&gt;&gt; 
&gt;&gt; -----Original Message-----
&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
&gt; On
&gt;&gt; Behalf Of Ralph Castain
&gt;&gt; Sent: Thursday, March 20, 2008 6:41 PM
&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt;&gt; Cc: Ralph Castain
&gt;&gt; Subject: Re: [OMPI users] SLURM and OpenMPI
&gt;&gt; 
&gt;&gt; Hi there
&gt;&gt; 
&gt;&gt; I am no slurm expert. However, it is our understanding that
&gt;&gt; SLURM_TASKS_PER_NODE means the number of slots allocated to the job,
&gt; not
&gt;&gt; the
&gt;&gt; number of tasks to be executed on each node. So the 4(x2) tells us
&gt; that
&gt;&gt; we
&gt;&gt; have 4 slots on each of two nodes to work with. You got 4 slots on
&gt; each
&gt;&gt; node
&gt;&gt; because you used the -N option, which told slurm to assign all slots
&gt; on
&gt;&gt; that
&gt;&gt; node to this job - I assume you have 4 processors on your nodes.
&gt; OpenMPI
&gt;&gt; parses that string to get the allocation, then maps the number of
&gt;&gt; specified
&gt;&gt; processes against it.
&gt;&gt; 
&gt;&gt; It is possible that the interpretation of SLURM_TASKS_PER_NODE is
&gt;&gt; different
&gt;&gt; when used to allocate as opposed to directly launch processes. Our
&gt;&gt; typical
&gt;&gt; usage is for someone to do:
&gt;&gt; 
&gt;&gt; srun -N 2 -A
&gt;&gt; mpirun -np 2 helloworld
&gt;&gt; 
&gt;&gt; In other words, we use srun to create an allocation, and then run
&gt; mpirun
&gt;&gt; separately within it.
&gt;&gt; 
&gt;&gt; 
&gt;&gt; I am therefore unsure what the &quot;-n 2&quot; will do here. If I believe the
&gt;&gt; documentation, it would seem to imply that srun will attempt to
launch
&gt;&gt; two
&gt;&gt; copies of &quot;mpirun -np 2 helloworld&quot;, yet your output doesn't seem to
&gt;&gt; support
&gt;&gt; that interpretation. It would appear that the &quot;-n 2&quot; is being ignored
&gt;&gt; and
&gt;&gt; only one copy of mpirun is being launched. I'm no slurm expert, so
&gt;&gt; perhaps
&gt;&gt; that interpretation is incorrect.
&gt;&gt; 
&gt;&gt; Assuming that the -n 2 is ignored in this situation, your command
&gt; line:
&gt;&gt; 
&gt;&gt;&gt; srun -N 2 -n 2 -b mpirun -np 2 helloworld
&gt;&gt; 
&gt;&gt; will cause mpirun to launch two processes, mapped byslot against the
&gt;&gt; slurm
&gt;&gt; allocation of two nodes, each having 4 slots. Thus, both processes
&gt; will
&gt;&gt; be
&gt;&gt; launched on the first node, which is what you observed.
&gt;&gt; 
&gt;&gt; Similarly, the command line
&gt;&gt; 
&gt;&gt;&gt; srun -N 2 -n 2 -b mpirun helloworld
&gt;&gt; 
&gt;&gt; doesn't specify the #procs to mpirun. In that case, mpirun will
launch
&gt; a
&gt;&gt; process on every available slot in the allocation. Given this
command,
&gt;&gt; that
&gt;&gt; means 4 procs will be launched on each of the 2 nodes, for a total of
&gt; 8
&gt;&gt; procs. Ranks 0-3 will be placed on the first node, ranks 4-7 on the
&gt;&gt; second.
&gt;&gt; Again, this is what you observed.
&gt;&gt; 
&gt;&gt; I don't know if I would say we &quot;interfere&quot; with SLURM - I would say
&gt; that
&gt;&gt; we
&gt;&gt; are only lightly integrated with SLURM at this time. We use SLURM as
a
&gt;&gt; resource manager to assign nodes, and then map processes onto those
&gt;&gt; nodes
&gt;&gt; according to the user's wishes. We chose to do this because srun
&gt; applies
&gt;&gt; its
&gt;&gt; own load balancing algorithms if you launch processes directly with
&gt; it,
&gt;&gt; which leaves the user with little flexibility to specify their
desired
&gt;&gt; rank/slot mapping. We chose to support the greater flexibility.
&gt;&gt; 
&gt;&gt; Using the SLURM-defined mapping will require launching without our
&gt;&gt; mpirun.
&gt;&gt; This capability is still under development, and there are issues with
&gt;&gt; doing
&gt;&gt; that in slurm environments which need to be addressed. It is at a
&gt; lower
&gt;&gt; priority than providing such support for TM right now, so I wouldn't
&gt;&gt; expect
&gt;&gt; it to become available for several months at least.
&gt;&gt; 
&gt;&gt; Alternatively, it may be possible for mpirun to get the SLURM-defined
&gt;&gt; mapping and use it to launch the processes. If we can get it somehow,
&gt;&gt; there
&gt;&gt; is no problem launching it as specified - the problem is how to get
&gt; the
&gt;&gt; map!
&gt;&gt; Unfortunately, slurm's licensing prevents us from using its internal
&gt;&gt; APIs,
&gt;&gt; so obtaining the map is not an easy thing to do.
&gt;&gt; 
&gt;&gt; Anyone who wants to help accelerate that timetable is welcome to
&gt; contact
&gt;&gt; me.
&gt;&gt; We know the technical issues - this is mostly a problem of (a)
&gt;&gt; priorities
&gt;&gt; versus my available time, and (b) similar considerations on the part
&gt; of
&gt;&gt; the
&gt;&gt; slurm folks to do the work themselves.
&gt;&gt; 
&gt;&gt; Ralph
&gt;&gt; 
&gt;&gt; 
&gt;&gt; On 3/20/08 3:48 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt;&gt; Hi Werner,
&gt;&gt;&gt; 
&gt;&gt;&gt; Open MPI does things a little bit differently than other MPIs when
it
&gt;&gt;&gt; comes to supporting SLURM. See
&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=slurm">http://www.open-mpi.org/faq/?category=slurm</a>
&gt;&gt;&gt; for general information about running with Open MPI on SLURM.
&gt;&gt;&gt; 
&gt;&gt;&gt; After trying the commands you sent, I am actually a bit surprised by
&gt;&gt; the
&gt;&gt;&gt; results. I would have expected this mode of operation to work. But
&gt;&gt;&gt; looking at the environment variables that SLURM is setting for us, I
&gt;&gt; can
&gt;&gt;&gt; see why it doesn't.
&gt;&gt;&gt; 
&gt;&gt;&gt; On a cluster with 4 cores/node, I ran:
&gt;&gt;&gt; [tprins_at_odin ~]$ cat mprun.sh
&gt;&gt;&gt; #!/bin/sh
&gt;&gt;&gt; printenv
&gt;&gt;&gt; [tprins_at_odin ~]$  srun -N 2 -n 2 -b mprun.sh
&gt;&gt;&gt; srun: jobid 55641 submitted
&gt;&gt;&gt; [tprins_at_odin ~]$ cat slurm-55641.out |grep SLURM_TASKS_PER_NODE
&gt;&gt;&gt; SLURM_TASKS_PER_NODE=4(x2)
&gt;&gt;&gt; [tprins_at_odin ~]$
&gt;&gt;&gt; 
&gt;&gt;&gt; Which seems to be wrong, since the srun man page says that
&gt;&gt;&gt; SLURM_TASKS_PER_NODE is the &quot;Number  of tasks to be initiated on
each
&gt;&gt;&gt; node&quot;. This seems to imply that the value should be &quot;1(x2)&quot;. So
maybe
&gt;&gt;&gt; this is a SLURM problem? If this value were correctly reported, Open
&gt;&gt; MPI
&gt;&gt;&gt; should work fine for what you wanted to do.
&gt;&gt;&gt; 
&gt;&gt;&gt; Two other things:
&gt;&gt;&gt; 1. You should probably use the command line option '--npernode' for
&gt;&gt;&gt; mpirun instead of setting the rmaps_base_n_pernode directly.
&gt;&gt;&gt; 2. In regards to your second example below, Open MPI by default maps
&gt;&gt; 'by
&gt;&gt;&gt; slot'. That is, it will fill all available slots on the first node
&gt;&gt;&gt; before moving to the second. You can change this, see:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
&gt;&gt;&gt; 
&gt;&gt;&gt; I have copied Ralph on this mail to see if he has a better response.
&gt;&gt;&gt; 
&gt;&gt;&gt; Tim
&gt;&gt;&gt; 
&gt;&gt;&gt; Werner Augustin wrote:
&gt;&gt;&gt;&gt; Hi,
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; At our site here at the University of Karlsruhe we are running two
&gt;&gt;&gt;&gt; large clusters with SLURM and HP-MPI. For our new cluster we want
to
&gt;&gt;&gt;&gt; keep SLURM and switch to OpenMPI. While testing I got the following
&gt;&gt;&gt;&gt; problem:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; with HP-MPI I do something like
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; srun -N 2 -n 2 -b mpirun -srun helloworld
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; and get 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Hi, here is process 0 of 2, running MPI version 2.0 on xc3n13.
&gt;&gt;&gt;&gt; Hi, here is process 1 of 2, running MPI version 2.0 on xc3n14.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; when I try the same with OpenMPI (version 1.2.4)
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; srun -N 2 -n 2 -b mpirun helloworld
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; I get
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Hi, here is process 1 of 8, running MPI version 2.0 on xc3n13.
&gt;&gt;&gt;&gt; Hi, here is process 0 of 8, running MPI version 2.0 on xc3n13.
&gt;&gt;&gt;&gt; Hi, here is process 5 of 8, running MPI version 2.0 on xc3n14.
&gt;&gt;&gt;&gt; Hi, here is process 2 of 8, running MPI version 2.0 on xc3n13.
&gt;&gt;&gt;&gt; Hi, here is process 4 of 8, running MPI version 2.0 on xc3n14.
&gt;&gt;&gt;&gt; Hi, here is process 3 of 8, running MPI version 2.0 on xc3n13.
&gt;&gt;&gt;&gt; Hi, here is process 6 of 8, running MPI version 2.0 on xc3n14.
&gt;&gt;&gt;&gt; Hi, here is process 7 of 8, running MPI version 2.0 on xc3n14.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; and with 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; srun -N 2 -n 2 -b mpirun -np 2 helloworld
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Hi, here is process 0 of 2, running MPI version 2.0 on xc3n13.
&gt;&gt;&gt;&gt; Hi, here is process 1 of 2, running MPI version 2.0 on xc3n13.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; which is still wrong, because it uses only one of the two allocated
&gt;&gt;&gt;&gt; nodes.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; OpenMPI uses the SLURM_NODELIST and SLURM_TASKS_PER_NODE
environment
&gt;&gt;&gt;&gt; variables, starts with slurm one orted per node and tasks upto the
&gt;&gt;&gt;&gt; maximum number of slots on every node. So basically it also does
&gt;&gt;&gt;&gt; some 'resource management' and interferes with slurm. OK, I can fix
&gt;&gt; that
&gt;&gt;&gt;&gt; with a mpirun wrapper script which calls mpirun with the right -np
&gt;&gt; and
&gt;&gt;&gt;&gt; the right rmaps_base_n_pernode setting, but it gets worse. We want
&gt; to
&gt;&gt;&gt;&gt; allocate computing power on a per cpu base instead of per node,
i.e.
&gt;&gt;&gt;&gt; different user might share a node. In addition slurm allows to
&gt;&gt; schedule
&gt;&gt;&gt;&gt; according to memory usage. Therefore it is important that on every
&gt;&gt; node
&gt;&gt;&gt;&gt; there is exactly the number of tasks running that slurm wants. The
&gt;&gt; only
&gt;&gt;&gt;&gt; solution I came up with is to generate for every job a detailed
&gt;&gt;&gt;&gt; hostfile and call mpirun --hostfile. Any suggestions for
&gt; improvement?
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; I've found a discussion thread &quot;slurm and all-srun orterun&quot; in the
&gt;&gt;&gt;&gt; mailinglist archive concerning the same problem, where Ralph
Castain
&gt;&gt;&gt;&gt; announced that he is working on two new launch methods which would
&gt;&gt; fix
&gt;&gt;&gt;&gt; my problems. Unfortunately his email address is deleted from the
&gt;&gt;&gt;&gt; archive, so it would be really nice if the friendly elf mentioned
&gt;&gt; there
&gt;&gt;&gt;&gt; is still around and could forward my mail to him.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Thanks in advance,
&gt;&gt;&gt;&gt; Werner Augustin
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5976.php">Ralph Castain: "Re: [OMPI users] null characters in output"</a>
<li><strong>Previous message:</strong> <a href="5974.php">Ralph H Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Maybe in reply to:</strong> <a href="5936.php">Ralph H Castain: "Re: [OMPI users] null characters in output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5976.php">Ralph Castain: "Re: [OMPI users] null characters in output"</a>
<li><strong>Reply:</strong> <a href="5976.php">Ralph Castain: "Re: [OMPI users] null characters in output"</a>
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
