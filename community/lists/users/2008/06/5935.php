<?
$subject_val = "Re: [OMPI users] SLURM and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 10:23:48 2008" -->
<!-- isoreceived="20080619142348" -->
<!-- sent="Thu, 19 Jun 2008 08:23:32 -0600" -->
<!-- isosent="20080619142332" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLURM and OpenMPI" -->
<!-- id="C47FC804.DE82%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AE3C65E73659C647AD0EBCF50DC996BF057E58_at_maildrd1.nyc.deshaw.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 10:23:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5936.php">Ralph H Castain: "Re: [OMPI users] null characters in output"</a>
<li><strong>Previous message:</strong> <a href="5934.php">Pavel Shamis (Pasha): "Re: [OMPI users] Open MPI timeout problems."</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5246.php">Werner Augustin: "[OMPI users] SLURM and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5970.php">Sacerdoti, Federico: "Re: [OMPI users] SLURM and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, if the only system I cared about was slurm, there are some things I
<br>
could possibly do to make things better, but at the expense of our support
<br>
for other environments - which is unacceptable.
<br>
<p>There are a few technical barriers to doing this without the orteds on
<br>
slurm, and a major licensing issue that prohibits us from calling any slurm
<br>
APIs. How all that gets resolved is unclear.
<br>
<p>Frankly, one reason we don't put more emphasis on it is that we don't see a
<br>
significant launch time difference between the two modes, and we truly do
<br>
want to retain the ability to utilize different error response strategies
<br>
(which slurm will not allow - you can only follow theirs).
<br>
<p>So I would say we simply have different objectives than what you stated, and
<br>
different concerns that make a deeper slurm integration less favorable. May
<br>
still happen, but not anytime soon.
<br>
<p>Ralph
<br>
<p><p><p>On 6/19/08 8:08 AM, &quot;Sacerdoti, Federico&quot;
<br>
&lt;Federico.Sacerdoti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph thanks for your quick response.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regarding your fourth paragraph, slurm will not let you run on a
</span><br>
<span class="quotelev1">&gt; no-longer-valid allocation, an srun will correctly exit non-zero with a
</span><br>
<span class="quotelev1">&gt; useful failure reason. So perhaps openmpi 1.3 with your changes will
</span><br>
<span class="quotelev1">&gt; just work, I look forward to testing it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; E.g.
</span><br>
<span class="quotelev1">&gt; $ srun hostname
</span><br>
<span class="quotelev1">&gt; srun: error: Unable to confirm allocation for job 745346: Invalid job id
</span><br>
<span class="quotelev1">&gt; specified
</span><br>
<span class="quotelev1">&gt; srun: Check SLURM_JOBID environment variable for expired or invalid job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regarding srun to launch the jobs directly (no orteds), I am sad to hear
</span><br>
<span class="quotelev1">&gt; the idea is not in favor. We have found srun to be extremely scalable
</span><br>
<span class="quotelev1">&gt; (tested up to 4096 MPI processes) and very good at cleaning up after an
</span><br>
<span class="quotelev1">&gt; error or node failure. It seems you could simplify orterun quite a bit
</span><br>
<span class="quotelev1">&gt; by relying on slurm (or whatever  resource manager) to handle job
</span><br>
<span class="quotelev1">&gt; cleanup after failures; it is their responsibility after all, and they
</span><br>
<span class="quotelev1">&gt; have better knowledge about the health and availability of nodes than
</span><br>
<span class="quotelev1">&gt; any launcher can hope for.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I helped write an mvapich launcher used internally called mvrun, which
</span><br>
<span class="quotelev1">&gt; was used for several years. I wrote a lot of logic to run down and stop
</span><br>
<span class="quotelev1">&gt; all processes when one had failed, which I understand you have as well.
</span><br>
<span class="quotelev1">&gt; We came to the conclusion that slurm was in a better position to handle
</span><br>
<span class="quotelev1">&gt; such failures, and in fact did it more effectively. For example if slurm
</span><br>
<span class="quotelev1">&gt; detects a node has failed, it will stop the job, allocate an additional
</span><br>
<span class="quotelev1">&gt; free node to make up the deficit, then relaunch. It more difficult (to
</span><br>
<span class="quotelev1">&gt; put it mildly) for a job launcher to do that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt; Federico
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Ralph H Castain [mailto:rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 17, 2008 1:09 PM
</span><br>
<span class="quotelev1">&gt; To: Sacerdoti, Federico; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] SLURM and OpenMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can believe 1.2.x has problems in that regard. Some of that has
</span><br>
<span class="quotelev1">&gt; nothing to
</span><br>
<span class="quotelev1">&gt; do with slurm and reflects internal issues with 1.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have made it much more resistant to those problems in the upcoming
</span><br>
<span class="quotelev1">&gt; 1.3
</span><br>
<span class="quotelev1">&gt; release, but there is no plan to retrofit those changes to 1.2. Part of
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; problem was that we weren't using the --kill-on-bad-exit flag when we
</span><br>
<span class="quotelev1">&gt; called
</span><br>
<span class="quotelev1">&gt; srun internally, which has been fixed for 1.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW: we actually do use srun to launch the daemons - we just call it
</span><br>
<span class="quotelev1">&gt; internally from inside orterun. The only real difference is that we use
</span><br>
<span class="quotelev1">&gt; orterun to setup the cmd line and then tell the daemons what they need
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; do. The issues you are seeing relate to our ability to detect that srun
</span><br>
<span class="quotelev1">&gt; has
</span><br>
<span class="quotelev1">&gt; failed, and/or that one or more daemons have failed to launch or do
</span><br>
<span class="quotelev1">&gt; something they were supposed to do. The 1.2 system has problems in that
</span><br>
<span class="quotelev1">&gt; regard, which was one motivation for the 1.3 overhaul.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would argue that slurm allowing us to attempt to launch on a
</span><br>
<span class="quotelev1">&gt; no-longer-valid allocation is a slurm issue, not OMPI's. As I said, we
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev1">&gt; srun to launch the daemons - the only reason we hang is that srun is not
</span><br>
<span class="quotelev1">&gt; returning with an error. I've seen this on other systems as well, but
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; no real answer - if slurm doesn't indicate an error has occurred, I'm
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; sure what I can do about it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are unlikely to use srun to directly launch jobs (i.e., to have slurm
</span><br>
<span class="quotelev1">&gt; directly launch the job from an srun cmd line without mpirun) anytime
</span><br>
<span class="quotelev1">&gt; soon.
</span><br>
<span class="quotelev1">&gt; It isn't clear there is enough benefit to justify the rather large
</span><br>
<span class="quotelev1">&gt; effort,
</span><br>
<span class="quotelev1">&gt; especially considering what would be required to maintain scalability.
</span><br>
<span class="quotelev1">&gt; Decisions on all that are still pending, though, which means any
</span><br>
<span class="quotelev1">&gt; significant
</span><br>
<span class="quotelev1">&gt; change in that regard wouldn't be released until sometime next year.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 6/17/08 10:39 AM, &quot;Sacerdoti, Federico&quot;
</span><br>
<span class="quotelev1">&gt; &lt;Federico.Sacerdoti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was wondering what the status of this feature was (using srun to
</span><br>
<span class="quotelev2">&gt;&gt; launch orted daemons)? I have two new bug reports to add from our
</span><br>
<span class="quotelev2">&gt;&gt; experience using orterun from 1.2.6 on our 4000 CPU infiniband
</span><br>
<span class="quotelev1">&gt; cluster.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Orterun will happily hang if it is asked to run on an invalid slurm
</span><br>
<span class="quotelev2">&gt;&gt; job, e.g. if the job has exceeded its timelimit. This would be
</span><br>
<span class="quotelev1">&gt; trivially
</span><br>
<span class="quotelev2">&gt;&gt; fixed if you used srun to launch, as they would fail with non-zero
</span><br>
<span class="quotelev1">&gt; exit
</span><br>
<span class="quotelev2">&gt;&gt; codes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. A very simple orterun invocation hangs instead of exiting with an
</span><br>
<span class="quotelev2">&gt;&gt; error. In this case the executable does not exist, and we would expect
</span><br>
<span class="quotelev2">&gt;&gt; orterun to exit non-zero. This has caused
</span><br>
<span class="quotelev2">&gt;&gt; headaches with some workflow management script that automatically
</span><br>
<span class="quotelev1">&gt; start
</span><br>
<span class="quotelev2">&gt;&gt; jobs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; salloc -N2 -p swdev orterun dummy-binary-I-dont-exist
</span><br>
<span class="quotelev2">&gt;&gt; [hang]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; orterun dummy-binary-I-dont-exist
</span><br>
<span class="quotelev2">&gt;&gt; [hang]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Federico
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Sacerdoti, Federico
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, March 21, 2008 5:41 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev2">&gt;&gt; Subject: RE: [OMPI users] SLURM and OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;I don't know if I would say we &quot;interfere&quot; with SLURM - I would say
</span><br>
<span class="quotelev2">&gt;&gt; that we
</span><br>
<span class="quotelev2">&gt;&gt; are only lightly integrated with SLURM at this time. We use SLURM as a
</span><br>
<span class="quotelev2">&gt;&gt; resource manager to assign nodes, and then map processes onto those
</span><br>
<span class="quotelev2">&gt;&gt; nodes
</span><br>
<span class="quotelev2">&gt;&gt; according to the user's wishes. We chose to do this because srun
</span><br>
<span class="quotelev1">&gt; applies
</span><br>
<span class="quotelev2">&gt;&gt; its
</span><br>
<span class="quotelev2">&gt;&gt; own load balancing algorithms if you launch processes directly with
</span><br>
<span class="quotelev1">&gt; it,
</span><br>
<span class="quotelev2">&gt;&gt; which leaves the user with little flexibility to specify their desired
</span><br>
<span class="quotelev2">&gt;&gt; rank/slot mapping. We chose to support the greater flexibility.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Ralph, we wrote a launcher for mvapich that uses srun to launch but
</span><br>
<span class="quotelev2">&gt;&gt; keeps tight control of where processes are started. The way we did it
</span><br>
<span class="quotelev2">&gt;&gt; was to force srun to launch a single process on a particular node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The launcher calls many of these:
</span><br>
<span class="quotelev2">&gt;&gt;  srun --jobid $JOBID -N 1 -n 1 -w host005 CMD ARGS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hope this helps (and we are looking forward to a tighter orterun/slurm
</span><br>
<span class="quotelev2">&gt;&gt; integration as you know).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Federico
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, March 20, 2008 6:41 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] SLURM and OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi there
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am no slurm expert. However, it is our understanding that
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_TASKS_PER_NODE means the number of slots allocated to the job,
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; number of tasks to be executed on each node. So the 4(x2) tells us
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; we
</span><br>
<span class="quotelev2">&gt;&gt; have 4 slots on each of two nodes to work with. You got 4 slots on
</span><br>
<span class="quotelev1">&gt; each
</span><br>
<span class="quotelev2">&gt;&gt; node
</span><br>
<span class="quotelev2">&gt;&gt; because you used the -N option, which told slurm to assign all slots
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; node to this job - I assume you have 4 processors on your nodes.
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; parses that string to get the allocation, then maps the number of
</span><br>
<span class="quotelev2">&gt;&gt; specified
</span><br>
<span class="quotelev2">&gt;&gt; processes against it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is possible that the interpretation of SLURM_TASKS_PER_NODE is
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; when used to allocate as opposed to directly launch processes. Our
</span><br>
<span class="quotelev2">&gt;&gt; typical
</span><br>
<span class="quotelev2">&gt;&gt; usage is for someone to do:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; srun -N 2 -A
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 helloworld
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In other words, we use srun to create an allocation, and then run
</span><br>
<span class="quotelev1">&gt; mpirun
</span><br>
<span class="quotelev2">&gt;&gt; separately within it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am therefore unsure what the &quot;-n 2&quot; will do here. If I believe the
</span><br>
<span class="quotelev2">&gt;&gt; documentation, it would seem to imply that srun will attempt to launch
</span><br>
<span class="quotelev2">&gt;&gt; two
</span><br>
<span class="quotelev2">&gt;&gt; copies of &quot;mpirun -np 2 helloworld&quot;, yet your output doesn't seem to
</span><br>
<span class="quotelev2">&gt;&gt; support
</span><br>
<span class="quotelev2">&gt;&gt; that interpretation. It would appear that the &quot;-n 2&quot; is being ignored
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; only one copy of mpirun is being launched. I'm no slurm expert, so
</span><br>
<span class="quotelev2">&gt;&gt; perhaps
</span><br>
<span class="quotelev2">&gt;&gt; that interpretation is incorrect.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Assuming that the -n 2 is ignored in this situation, your command
</span><br>
<span class="quotelev1">&gt; line:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srun -N 2 -n 2 -b mpirun -np 2 helloworld
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; will cause mpirun to launch two processes, mapped byslot against the
</span><br>
<span class="quotelev2">&gt;&gt; slurm
</span><br>
<span class="quotelev2">&gt;&gt; allocation of two nodes, each having 4 slots. Thus, both processes
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev2">&gt;&gt; be
</span><br>
<span class="quotelev2">&gt;&gt; launched on the first node, which is what you observed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Similarly, the command line
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srun -N 2 -n 2 -b mpirun helloworld
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; doesn't specify the #procs to mpirun. In that case, mpirun will launch
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev2">&gt;&gt; process on every available slot in the allocation. Given this command,
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; means 4 procs will be launched on each of the 2 nodes, for a total of
</span><br>
<span class="quotelev1">&gt; 8
</span><br>
<span class="quotelev2">&gt;&gt; procs. Ranks 0-3 will be placed on the first node, ranks 4-7 on the
</span><br>
<span class="quotelev2">&gt;&gt; second.
</span><br>
<span class="quotelev2">&gt;&gt; Again, this is what you observed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if I would say we &quot;interfere&quot; with SLURM - I would say
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; we
</span><br>
<span class="quotelev2">&gt;&gt; are only lightly integrated with SLURM at this time. We use SLURM as a
</span><br>
<span class="quotelev2">&gt;&gt; resource manager to assign nodes, and then map processes onto those
</span><br>
<span class="quotelev2">&gt;&gt; nodes
</span><br>
<span class="quotelev2">&gt;&gt; according to the user's wishes. We chose to do this because srun
</span><br>
<span class="quotelev1">&gt; applies
</span><br>
<span class="quotelev2">&gt;&gt; its
</span><br>
<span class="quotelev2">&gt;&gt; own load balancing algorithms if you launch processes directly with
</span><br>
<span class="quotelev1">&gt; it,
</span><br>
<span class="quotelev2">&gt;&gt; which leaves the user with little flexibility to specify their desired
</span><br>
<span class="quotelev2">&gt;&gt; rank/slot mapping. We chose to support the greater flexibility.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Using the SLURM-defined mapping will require launching without our
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.
</span><br>
<span class="quotelev2">&gt;&gt; This capability is still under development, and there are issues with
</span><br>
<span class="quotelev2">&gt;&gt; doing
</span><br>
<span class="quotelev2">&gt;&gt; that in slurm environments which need to be addressed. It is at a
</span><br>
<span class="quotelev1">&gt; lower
</span><br>
<span class="quotelev2">&gt;&gt; priority than providing such support for TM right now, so I wouldn't
</span><br>
<span class="quotelev2">&gt;&gt; expect
</span><br>
<span class="quotelev2">&gt;&gt; it to become available for several months at least.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Alternatively, it may be possible for mpirun to get the SLURM-defined
</span><br>
<span class="quotelev2">&gt;&gt; mapping and use it to launch the processes. If we can get it somehow,
</span><br>
<span class="quotelev2">&gt;&gt; there
</span><br>
<span class="quotelev2">&gt;&gt; is no problem launching it as specified - the problem is how to get
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; map!
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, slurm's licensing prevents us from using its internal
</span><br>
<span class="quotelev2">&gt;&gt; APIs,
</span><br>
<span class="quotelev2">&gt;&gt; so obtaining the map is not an easy thing to do.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyone who wants to help accelerate that timetable is welcome to
</span><br>
<span class="quotelev1">&gt; contact
</span><br>
<span class="quotelev2">&gt;&gt; me.
</span><br>
<span class="quotelev2">&gt;&gt; We know the technical issues - this is mostly a problem of (a)
</span><br>
<span class="quotelev2">&gt;&gt; priorities
</span><br>
<span class="quotelev2">&gt;&gt; versus my available time, and (b) similar considerations on the part
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; slurm folks to do the work themselves.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/20/08 3:48 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Werner,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI does things a little bit differently than other MPIs when it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comes to supporting SLURM. See
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=slurm">http://www.open-mpi.org/faq/?category=slurm</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for general information about running with Open MPI on SLURM.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After trying the commands you sent, I am actually a bit surprised by
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; results. I would have expected this mode of operation to work. But
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking at the environment variables that SLURM is setting for us, I
</span><br>
<span class="quotelev2">&gt;&gt; can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see why it doesn't.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On a cluster with 4 cores/node, I ran:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tprins_at_odin ~]$ cat mprun.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printenv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tprins_at_odin ~]$  srun -N 2 -n 2 -b mprun.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srun: jobid 55641 submitted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tprins_at_odin ~]$ cat slurm-55641.out |grep SLURM_TASKS_PER_NODE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_TASKS_PER_NODE=4(x2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tprins_at_odin ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which seems to be wrong, since the srun man page says that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_TASKS_PER_NODE is the &quot;Number  of tasks to be initiated on each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node&quot;. This seems to imply that the value should be &quot;1(x2)&quot;. So maybe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is a SLURM problem? If this value were correctly reported, Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should work fine for what you wanted to do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Two other things:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. You should probably use the command line option '--npernode' for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun instead of setting the rmaps_base_n_pernode directly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. In regards to your second example below, Open MPI by default maps
</span><br>
<span class="quotelev2">&gt;&gt; 'by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slot'. That is, it will fill all available slots on the first node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before moving to the second. You can change this, see:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have copied Ralph on this mail to see if he has a better response.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Werner Augustin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At our site here at the University of Karlsruhe we are running two
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; large clusters with SLURM and HP-MPI. For our new cluster we want to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; keep SLURM and switch to OpenMPI. While testing I got the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with HP-MPI I do something like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; srun -N 2 -n 2 -b mpirun -srun helloworld
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and get 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, here is process 0 of 2, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, here is process 1 of 2, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when I try the same with OpenMPI (version 1.2.4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; srun -N 2 -n 2 -b mpirun helloworld
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, here is process 1 of 8, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, here is process 0 of 8, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, here is process 5 of 8, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, here is process 2 of 8, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, here is process 4 of 8, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, here is process 3 of 8, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, here is process 6 of 8, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, here is process 7 of 8, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; srun -N 2 -n 2 -b mpirun -np 2 helloworld
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, here is process 0 of 2, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, here is process 1 of 2, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which is still wrong, because it uses only one of the two allocated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI uses the SLURM_NODELIST and SLURM_TASKS_PER_NODE environment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; variables, starts with slurm one orted per node and tasks upto the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; maximum number of slots on every node. So basically it also does
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some 'resource management' and interferes with slurm. OK, I can fix
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with a mpirun wrapper script which calls mpirun with the right -np
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the right rmaps_base_n_pernode setting, but it gets worse. We want
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocate computing power on a per cpu base instead of per node, i.e.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different user might share a node. In addition slurm allows to
</span><br>
<span class="quotelev2">&gt;&gt; schedule
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; according to memory usage. Therefore it is important that on every
</span><br>
<span class="quotelev2">&gt;&gt; node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there is exactly the number of tasks running that slurm wants. The
</span><br>
<span class="quotelev2">&gt;&gt; only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; solution I came up with is to generate for every job a detailed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostfile and call mpirun --hostfile. Any suggestions for
</span><br>
<span class="quotelev1">&gt; improvement?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've found a discussion thread &quot;slurm and all-srun orterun&quot; in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mailinglist archive concerning the same problem, where Ralph Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; announced that he is working on two new launch methods which would
</span><br>
<span class="quotelev2">&gt;&gt; fix
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my problems. Unfortunately his email address is deleted from the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; archive, so it would be really nice if the friendly elf mentioned
</span><br>
<span class="quotelev2">&gt;&gt; there
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is still around and could forward my mail to him.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Werner Augustin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5936.php">Ralph H Castain: "Re: [OMPI users] null characters in output"</a>
<li><strong>Previous message:</strong> <a href="5934.php">Pavel Shamis (Pasha): "Re: [OMPI users] Open MPI timeout problems."</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5246.php">Werner Augustin: "[OMPI users] SLURM and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5970.php">Sacerdoti, Federico: "Re: [OMPI users] SLURM and OpenMPI"</a>
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
