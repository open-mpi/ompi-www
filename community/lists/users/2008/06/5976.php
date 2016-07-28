<?
$subject_val = "Re: [OMPI users] null characters in output";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 18:11:54 2008" -->
<!-- isoreceived="20080623221154" -->
<!-- sent="Mon, 23 Jun 2008 16:11:31 -0600" -->
<!-- isosent="20080623221131" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] null characters in output" -->
<!-- id="C4857BB3.552A%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AE3C65E73659C647AD0EBCF50DC996BF057E84_at_maildrd1.nyc.deshaw.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 18:11:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5977.php">Aditya Vasal: "[OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Previous message:</strong> <a href="5975.php">Sacerdoti, Federico: "Re: [OMPI users] null characters in output"</a>
<li><strong>In reply to:</strong> <a href="5975.php">Sacerdoti, Federico: "Re: [OMPI users] null characters in output"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/23/08 2:50 PM, &quot;Sacerdoti, Federico&quot;
<br>
&lt;Federico.Sacerdoti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm working on a test-case for that now, hopefully I can nail it down to
</span><br>
<span class="quotelev1">&gt; a particular openmpi version.
</span><br>
<p>Great - thanks! I have since seen something where a forwarded output can
<br>
have a funny character on the end - I haven't tracked down the precise
<br>
character yet, but probably a NULL. If it's the same problem, you would only
<br>
see it on output from a remote proc, not on something output by mpirun
<br>
itself.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have another small issue, which is somewhat bothering: orterun 1.2.6
</span><br>
<span class="quotelev1">&gt; exits with return code zero if the executable cannot be found. Should
</span><br>
<span class="quotelev1">&gt; this be non-zero?
</span><br>
<p>Yes - it is fixed in 1.3.
<br>
<p>We are also trying to expand our test coverage for the 1.3 release to catch
<br>
more of these non-MPI issues, so hopefully they won't slip by in future
<br>
releases.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; E.g.
</span><br>
<span class="quotelev1">&gt; $ orterun /asdf
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Failed to find or execute the following executable:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host:       drdblogin2.en.desres.deshaw.com
</span><br>
<span class="quotelev1">&gt; Executable: /asdf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cannot continue.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; $ echo $?
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Federico
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph H Castain
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 19, 2008 10:24 AM
</span><br>
<span class="quotelev1">&gt; To: Sacerdoti, Federico; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] null characters in output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, I haven't seen that - if you can provide an example, we can take a
</span><br>
<span class="quotelev1">&gt; look
</span><br>
<span class="quotelev1">&gt; at it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 6/19/08 8:15 AM, &quot;Sacerdoti, Federico&quot;
</span><br>
<span class="quotelev1">&gt; &lt;Federico.Sacerdoti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph, another issue perhaps you can shed some light on.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When launching with orterun, we sometimes see null characters in the
</span><br>
<span class="quotelev2">&gt;&gt; stdout output. These do not show up on a terminal, but when piped to a
</span><br>
<span class="quotelev2">&gt;&gt; file they are visible in an editor. They also can show up in the
</span><br>
<span class="quotelev1">&gt; middle
</span><br>
<span class="quotelev2">&gt;&gt; of a line, and so can interfere with greps on the output, etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Have you seen this before? I am working on a simple test case, but
</span><br>
<span class="quotelev2">&gt;&gt; unfortunately have not found one that is deterministic so far.
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
<span class="quotelev2">&gt;&gt; From: Ralph H Castain [mailto:rhc_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, June 17, 2008 1:09 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Sacerdoti, Federico; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] SLURM and OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can believe 1.2.x has problems in that regard. Some of that has
</span><br>
<span class="quotelev2">&gt;&gt; nothing to
</span><br>
<span class="quotelev2">&gt;&gt; do with slurm and reflects internal issues with 1.2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have made it much more resistant to those problems in the upcoming
</span><br>
<span class="quotelev2">&gt;&gt; 1.3
</span><br>
<span class="quotelev2">&gt;&gt; release, but there is no plan to retrofit those changes to 1.2. Part
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; problem was that we weren't using the --kill-on-bad-exit flag when we
</span><br>
<span class="quotelev2">&gt;&gt; called
</span><br>
<span class="quotelev2">&gt;&gt; srun internally, which has been fixed for 1.3.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; BTW: we actually do use srun to launch the daemons - we just call it
</span><br>
<span class="quotelev2">&gt;&gt; internally from inside orterun. The only real difference is that we
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev2">&gt;&gt; orterun to setup the cmd line and then tell the daemons what they need
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; do. The issues you are seeing relate to our ability to detect that
</span><br>
<span class="quotelev1">&gt; srun
</span><br>
<span class="quotelev2">&gt;&gt; has
</span><br>
<span class="quotelev2">&gt;&gt; failed, and/or that one or more daemons have failed to launch or do
</span><br>
<span class="quotelev2">&gt;&gt; something they were supposed to do. The 1.2 system has problems in
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; regard, which was one motivation for the 1.3 overhaul.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would argue that slurm allowing us to attempt to launch on a
</span><br>
<span class="quotelev2">&gt;&gt; no-longer-valid allocation is a slurm issue, not OMPI's. As I said, we
</span><br>
<span class="quotelev2">&gt;&gt; use
</span><br>
<span class="quotelev2">&gt;&gt; srun to launch the daemons - the only reason we hang is that srun is
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev2">&gt;&gt; returning with an error. I've seen this on other systems as well, but
</span><br>
<span class="quotelev2">&gt;&gt; have
</span><br>
<span class="quotelev2">&gt;&gt; no real answer - if slurm doesn't indicate an error has occurred, I'm
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev2">&gt;&gt; sure what I can do about it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are unlikely to use srun to directly launch jobs (i.e., to have
</span><br>
<span class="quotelev1">&gt; slurm
</span><br>
<span class="quotelev2">&gt;&gt; directly launch the job from an srun cmd line without mpirun) anytime
</span><br>
<span class="quotelev2">&gt;&gt; soon.
</span><br>
<span class="quotelev2">&gt;&gt; It isn't clear there is enough benefit to justify the rather large
</span><br>
<span class="quotelev2">&gt;&gt; effort,
</span><br>
<span class="quotelev2">&gt;&gt; especially considering what would be required to maintain scalability.
</span><br>
<span class="quotelev2">&gt;&gt; Decisions on all that are still pending, though, which means any
</span><br>
<span class="quotelev2">&gt;&gt; significant
</span><br>
<span class="quotelev2">&gt;&gt; change in that regard wouldn't be released until sometime next year.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 6/17/08 10:39 AM, &quot;Sacerdoti, Federico&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Federico.Sacerdoti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was wondering what the status of this feature was (using srun to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch orted daemons)? I have two new bug reports to add from our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; experience using orterun from 1.2.6 on our 4000 CPU infiniband
</span><br>
<span class="quotelev2">&gt;&gt; cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Orterun will happily hang if it is asked to run on an invalid
</span><br>
<span class="quotelev1">&gt; slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job, e.g. if the job has exceeded its timelimit. This would be
</span><br>
<span class="quotelev2">&gt;&gt; trivially
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fixed if you used srun to launch, as they would fail with non-zero
</span><br>
<span class="quotelev2">&gt;&gt; exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; codes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. A very simple orterun invocation hangs instead of exiting with an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error. In this case the executable does not exist, and we would
</span><br>
<span class="quotelev1">&gt; expect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun to exit non-zero. This has caused
</span><br>
<span class="quotelev3">&gt;&gt;&gt; headaches with some workflow management script that automatically
</span><br>
<span class="quotelev2">&gt;&gt; start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jobs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; salloc -N2 -p swdev orterun dummy-binary-I-dont-exist
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hang]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun dummy-binary-I-dont-exist
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hang]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Federico
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Sacerdoti, Federico
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, March 21, 2008 5:41 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: RE: [OMPI users] SLURM and OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;I don't know if I would say we &quot;interfere&quot; with SLURM - I would say
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are only lightly integrated with SLURM at this time. We use SLURM as
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resource manager to assign nodes, and then map processes onto those
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; according to the user's wishes. We chose to do this because srun
</span><br>
<span class="quotelev2">&gt;&gt; applies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; its
</span><br>
<span class="quotelev3">&gt;&gt;&gt; own load balancing algorithms if you launch processes directly with
</span><br>
<span class="quotelev2">&gt;&gt; it,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which leaves the user with little flexibility to specify their
</span><br>
<span class="quotelev1">&gt; desired
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank/slot mapping. We chose to support the greater flexibility.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph, we wrote a launcher for mvapich that uses srun to launch but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; keeps tight control of where processes are started. The way we did it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was to force srun to launch a single process on a particular node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The launcher calls many of these:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  srun --jobid $JOBID -N 1 -n 1 -w host005 CMD ARGS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope this helps (and we are looking forward to a tighter
</span><br>
<span class="quotelev1">&gt; orterun/slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; integration as you know).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Federico
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, March 20, 2008 6:41 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cc: Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] SLURM and OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am no slurm expert. However, it is our understanding that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_TASKS_PER_NODE means the number of slots allocated to the job,
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number of tasks to be executed on each node. So the 4(x2) tells us
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have 4 slots on each of two nodes to work with. You got 4 slots on
</span><br>
<span class="quotelev2">&gt;&gt; each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because you used the -N option, which told slurm to assign all slots
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node to this job - I assume you have 4 processors on your nodes.
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parses that string to get the allocation, then maps the number of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specified
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes against it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is possible that the interpretation of SLURM_TASKS_PER_NODE is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when used to allocate as opposed to directly launch processes. Our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typical
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usage is for someone to do:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srun -N 2 -A
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 helloworld
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In other words, we use srun to create an allocation, and then run
</span><br>
<span class="quotelev2">&gt;&gt; mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; separately within it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am therefore unsure what the &quot;-n 2&quot; will do here. If I believe the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; documentation, it would seem to imply that srun will attempt to
</span><br>
<span class="quotelev1">&gt; launch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copies of &quot;mpirun -np 2 helloworld&quot;, yet your output doesn't seem to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that interpretation. It would appear that the &quot;-n 2&quot; is being ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only one copy of mpirun is being launched. I'm no slurm expert, so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perhaps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that interpretation is incorrect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assuming that the -n 2 is ignored in this situation, your command
</span><br>
<span class="quotelev2">&gt;&gt; line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; srun -N 2 -n 2 -b mpirun -np 2 helloworld
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will cause mpirun to launch two processes, mapped byslot against the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation of two nodes, each having 4 slots. Thus, both processes
</span><br>
<span class="quotelev2">&gt;&gt; will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launched on the first node, which is what you observed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Similarly, the command line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; srun -N 2 -n 2 -b mpirun helloworld
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't specify the #procs to mpirun. In that case, mpirun will
</span><br>
<span class="quotelev1">&gt; launch
</span><br>
<span class="quotelev2">&gt;&gt; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process on every available slot in the allocation. Given this
</span><br>
<span class="quotelev1">&gt; command,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; means 4 procs will be launched on each of the 2 nodes, for a total of
</span><br>
<span class="quotelev2">&gt;&gt; 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procs. Ranks 0-3 will be placed on the first node, ranks 4-7 on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; second.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Again, this is what you observed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know if I would say we &quot;interfere&quot; with SLURM - I would say
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are only lightly integrated with SLURM at this time. We use SLURM as
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resource manager to assign nodes, and then map processes onto those
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; according to the user's wishes. We chose to do this because srun
</span><br>
<span class="quotelev2">&gt;&gt; applies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; its
</span><br>
<span class="quotelev3">&gt;&gt;&gt; own load balancing algorithms if you launch processes directly with
</span><br>
<span class="quotelev2">&gt;&gt; it,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which leaves the user with little flexibility to specify their
</span><br>
<span class="quotelev1">&gt; desired
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank/slot mapping. We chose to support the greater flexibility.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using the SLURM-defined mapping will require launching without our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This capability is still under development, and there are issues with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that in slurm environments which need to be addressed. It is at a
</span><br>
<span class="quotelev2">&gt;&gt; lower
</span><br>
<span class="quotelev3">&gt;&gt;&gt; priority than providing such support for TM right now, so I wouldn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it to become available for several months at least.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alternatively, it may be possible for mpirun to get the SLURM-defined
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mapping and use it to launch the processes. If we can get it somehow,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is no problem launching it as specified - the problem is how to get
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; map!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, slurm's licensing prevents us from using its internal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; APIs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so obtaining the map is not an easy thing to do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyone who wants to help accelerate that timetable is welcome to
</span><br>
<span class="quotelev2">&gt;&gt; contact
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We know the technical issues - this is mostly a problem of (a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; priorities
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versus my available time, and (b) similar considerations on the part
</span><br>
<span class="quotelev2">&gt;&gt; of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurm folks to do the work themselves.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 3/20/08 3:48 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Werner,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI does things a little bit differently than other MPIs when
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comes to supporting SLURM. See
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=slurm">http://www.open-mpi.org/faq/?category=slurm</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for general information about running with Open MPI on SLURM.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; After trying the commands you sent, I am actually a bit surprised by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; results. I would have expected this mode of operation to work. But
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; looking at the environment variables that SLURM is setting for us, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; see why it doesn't.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On a cluster with 4 cores/node, I ran:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tprins_at_odin ~]$ cat mprun.sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; printenv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tprins_at_odin ~]$  srun -N 2 -n 2 -b mprun.sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; srun: jobid 55641 submitted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tprins_at_odin ~]$ cat slurm-55641.out |grep SLURM_TASKS_PER_NODE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_TASKS_PER_NODE=4(x2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tprins_at_odin ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Which seems to be wrong, since the srun man page says that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_TASKS_PER_NODE is the &quot;Number  of tasks to be initiated on
</span><br>
<span class="quotelev1">&gt; each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node&quot;. This seems to imply that the value should be &quot;1(x2)&quot;. So
</span><br>
<span class="quotelev1">&gt; maybe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this is a SLURM problem? If this value were correctly reported, Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should work fine for what you wanted to do.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Two other things:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. You should probably use the command line option '--npernode' for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun instead of setting the rmaps_base_n_pernode directly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. In regards to your second example below, Open MPI by default maps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slot'. That is, it will fill all available slots on the first node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; before moving to the second. You can change this, see:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have copied Ralph on this mail to see if he has a better response.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Werner Augustin wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; At our site here at the University of Karlsruhe we are running two
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; large clusters with SLURM and HP-MPI. For our new cluster we want
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; keep SLURM and switch to OpenMPI. While testing I got the following
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with HP-MPI I do something like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; srun -N 2 -n 2 -b mpirun -srun helloworld
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and get 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi, here is process 0 of 2, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi, here is process 1 of 2, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when I try the same with OpenMPI (version 1.2.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; srun -N 2 -n 2 -b mpirun helloworld
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I get
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi, here is process 1 of 8, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi, here is process 0 of 8, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi, here is process 5 of 8, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi, here is process 2 of 8, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi, here is process 4 of 8, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi, here is process 3 of 8, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi, here is process 6 of 8, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi, here is process 7 of 8, running MPI version 2.0 on xc3n14.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and with 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; srun -N 2 -n 2 -b mpirun -np 2 helloworld
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi, here is process 0 of 2, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi, here is process 1 of 2, running MPI version 2.0 on xc3n13.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; which is still wrong, because it uses only one of the two allocated
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OpenMPI uses the SLURM_NODELIST and SLURM_TASKS_PER_NODE
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; variables, starts with slurm one orted per node and tasks upto the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; maximum number of slots on every node. So basically it also does
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some 'resource management' and interferes with slurm. OK, I can fix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with a mpirun wrapper script which calls mpirun with the right -np
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the right rmaps_base_n_pernode setting, but it gets worse. We want
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocate computing power on a per cpu base instead of per node,
</span><br>
<span class="quotelev1">&gt; i.e.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; different user might share a node. In addition slurm allows to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; schedule
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; according to memory usage. Therefore it is important that on every
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; there is exactly the number of tasks running that slurm wants. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; solution I came up with is to generate for every job a detailed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hostfile and call mpirun --hostfile. Any suggestions for
</span><br>
<span class="quotelev2">&gt;&gt; improvement?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've found a discussion thread &quot;slurm and all-srun orterun&quot; in the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mailinglist archive concerning the same problem, where Ralph
</span><br>
<span class="quotelev1">&gt; Castain
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; announced that he is working on two new launch methods which would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fix
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; my problems. Unfortunately his email address is deleted from the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; archive, so it would be really nice if the friendly elf mentioned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is still around and could forward my mail to him.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Werner Augustin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="5977.php">Aditya Vasal: "[OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Previous message:</strong> <a href="5975.php">Sacerdoti, Federico: "Re: [OMPI users] null characters in output"</a>
<li><strong>In reply to:</strong> <a href="5975.php">Sacerdoti, Federico: "Re: [OMPI users] null characters in output"</a>
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
