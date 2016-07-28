<?
$subject_val = "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 22:13:49 2009" -->
<!-- isoreceived="20091118031349" -->
<!-- sent="Tue, 17 Nov 2009 20:13:37 -0700" -->
<!-- isosent="20091118031337" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)" -->
<!-- id="C69B1DAB-8FA4-458F-913D-287F500B001E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B030C73.7050105_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-17 22:13:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11228.php">Bill Broadley: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Previous message:</strong> <a href="11226.php">Ralph Castain: "Re: [OMPI users] Problem on openmpi run"</a>
<li><strong>In reply to:</strong> <a href="11223.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry I didn't answer more completely before - a tad tied up today with network problems :-/
<br>
<p>Actually, both you and Michael pointed out the &quot;flaw&quot; in your own reasoning, and hit the reason why we -don't- forward environment. It is obvious, for example, that you don't want to forward HOSTNAME and DISPLAY. But how is OMPI supposed to know precisely what -is- and -isn't- safe to forward?
<br>
<p>Do we grab a sample based on what we developers think? What happens when the sys admin of a cluster sets up the environment with site-specific variables on the head node that must not be forwarded to the backend compute nodes? We had plenty of those at my former employer, and it isn't an uncommon situation. So how does OMPI identify and avoid those?
<br>
<p>This is why we don't forward anything we are not specifically told to forward. The code that crept into the Torque launcher is incorrect and can cause a lot of problems. For one thing, it makes the remote processes think they are running on the incorrect node name!
<br>
<p>Unfortunately, that code was copy/pasted from a different launcher that fork/exec's a local cmd to launch the daemons. In that scenario, passing a copy of mpirun's environment to execve is fine - the environment is not passed to anything remote. tm_spawn is a different story.
<br>
<p>I will consult with other developers, but I do believe the right answer is to not forward the entire environment for the previously identified reasons, and to implement the &quot;forward all except these&quot; as an alternative to the current &quot;-x&quot; option. I'll pass along our decision about what to do with the current code.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Nov 17, 2009, at 1:49 PM, David Singleton wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I'm in a quandry - if I show you that its actually Open MPI that is
</span><br>
<span class="quotelev1">&gt; propagating the environment then you are likely to &quot;fix it&quot; and then tm
</span><br>
<span class="quotelev1">&gt; users will lose a nice feature.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can I suggest that &quot;least surprise&quot; would require that MPI tasks get
</span><br>
<span class="quotelev1">&gt; exactly the same environment/limits/... as mpirun so that &quot;mpirun a.out&quot;
</span><br>
<span class="quotelev1">&gt; behaves just like &quot;a.out&quot;.  [Following this principle we modified
</span><br>
<span class="quotelev1">&gt; tm_spawn to propagate the callers rlimits to the spawned tasks.]
</span><br>
<span class="quotelev1">&gt; A comment in orterun.c (see below) below suggests that Open MPI is trying
</span><br>
<span class="quotelev1">&gt; to distinguish between &quot;local&quot; and &quot;remote&quot; processes.  I would have
</span><br>
<span class="quotelev1">&gt; thought that distinction should be invisible to users as much as possible
</span><br>
<span class="quotelev1">&gt; - a user asking for 4 cpus would like to see the same behaviour if all
</span><br>
<span class="quotelev1">&gt; 4 are local or &quot;2 local, 2 remote&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As to why tm does &quot;The Right Thing&quot;: in the case of rsh/ssh the full
</span><br>
<span class="quotelev1">&gt; mpirun environment is given to the rsh/ssh process locally while in the tm
</span><br>
<span class="quotelev1">&gt; case it is an argument to tm_spawn and so gets given to the process (in
</span><br>
<span class="quotelev1">&gt; this case orted) being launched remotely. Relevant lines from 1.3.3 below.
</span><br>
<span class="quotelev1">&gt; PBS just passes along the environment it is told to.  We dont use torque
</span><br>
<span class="quotelev1">&gt; but as of 2.3.3, it was still the same as OpenPBS in this respect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael just pointed out the slight flaw.  The environment should be
</span><br>
<span class="quotelev1">&gt; somewhat selectively propagated (exclude HOSTNAME etc).  I guess if you
</span><br>
<span class="quotelev1">&gt; were to &quot;fix&quot; plm_tm_module I would put the propagation behaviour in
</span><br>
<span class="quotelev1">&gt; tm_spawn and try to handle these exceptional cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orterun.c:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    510     /* save the environment for launch purposes. This MUST be
</span><br>
<span class="quotelev1">&gt;    511      * done so that we can pass it to any local procs we
</span><br>
<span class="quotelev1">&gt;    512      * spawn - otherwise, those local procs won't see any
</span><br>
<span class="quotelev1">&gt;    513      * non-MCA envars were set in the enviro prior to calling
</span><br>
<span class="quotelev1">&gt;    514      * orterun
</span><br>
<span class="quotelev1">&gt;    515      */
</span><br>
<span class="quotelev1">&gt;    516     orte_launch_environ = opal_argv_copy(environ);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; plm_rsh_module.c:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    681 /* actually ssh the child */
</span><br>
<span class="quotelev1">&gt;    682 static void ssh_child(int argc, char **argv,
</span><br>
<span class="quotelev1">&gt;    683                       orte_vpid_t vpid, int proc_vpid_index)
</span><br>
<span class="quotelev1">&gt;    684 {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    694     /* setup environment */
</span><br>
<span class="quotelev1">&gt;    695     env = opal_argv_copy(orte_launch_environ);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    766     execve(exec_path, exec_argv, env);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; plm_tm_module.c:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    128 static int plm_tm_launch_job(orte_job_t *jdata)
</span><br>
<span class="quotelev1">&gt;    129 {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    228     /* setup environment */
</span><br>
<span class="quotelev1">&gt;    229     env = opal_argv_copy(orte_launch_environ);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    311     rc = tm_spawn(argc, argv, env, node-&gt;launch_id, tm_task_ids + launched, tm_events + launched);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Not exactly. It completely depends on how Torque was setup - OMPI isn't forwarding the environment. Torque is.
</span><br>
<span class="quotelev2">&gt;&gt; We made a design decision at the very beginning of the OMPI project not to forward non-OMPI envars unless directed to do so by the user. I'm afraid I disagree with Michael's claim that other MPIs do forward them - yes, MPICH does, but not all others do.
</span><br>
<span class="quotelev2">&gt;&gt; The world is bigger than MPICH and OMPI :-)
</span><br>
<span class="quotelev2">&gt;&gt; Since there is inconsistency in this regard between MPIs, we chose not to forward. Reason was simple: there is no way to know what is safe to forward vs what is not (e.g., what to do with DISPLAY), nor what the underlying environment is trying to forward vs what it isn't. It is very easy to get cross-wise and cause totally unexpected behavior, as users have complained about for years.
</span><br>
<span class="quotelev2">&gt;&gt; First, if you are using a managed environment like Torque, we recommend that you work with your sys admin to decide how to configure it. This is the best way to resolve a problem.
</span><br>
<span class="quotelev2">&gt;&gt; Second, if you are not using a managed environment and/or decide not to have that environment do the forwarding, you can tell OMPI to forward the envars you need by specifying them via the -x cmd line option. We already have a request to expand this capability, and I will be doing so as time permits. One option I'll be adding is the reverse of -x - i.e., &quot;forward all envars -except- the specified one(s)&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; ralph
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11228.php">Bill Broadley: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Previous message:</strong> <a href="11226.php">Ralph Castain: "Re: [OMPI users] Problem on openmpi run"</a>
<li><strong>In reply to:</strong> <a href="11223.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
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
