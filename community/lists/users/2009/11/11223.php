<?
$subject_val = "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 15:50:02 2009" -->
<!-- isoreceived="20091117205002" -->
<!-- sent="Wed, 18 Nov 2009 07:49:55 +1100" -->
<!-- isosent="20091117204955" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)" -->
<!-- id="4B030C73.7050105_at_anu.edu.au" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="28D5DE57-D997-43C5-8354-3E419C697AC1_at_open-mpi.org" -->
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
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-17 15:49:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11224.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Previous message:</strong> <a href="11222.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>In reply to:</strong> <a href="11218.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11224.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Reply:</strong> <a href="11224.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Reply:</strong> <a href="11227.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Now I'm in a quandry - if I show you that its actually Open MPI that is
<br>
propagating the environment then you are likely to &quot;fix it&quot; and then tm
<br>
users will lose a nice feature.  :-)
<br>
<p>Can I suggest that &quot;least surprise&quot; would require that MPI tasks get
<br>
exactly the same environment/limits/... as mpirun so that &quot;mpirun a.out&quot;
<br>
behaves just like &quot;a.out&quot;.  [Following this principle we modified
<br>
tm_spawn to propagate the callers rlimits to the spawned tasks.]
<br>
A comment in orterun.c (see below) below suggests that Open MPI is trying
<br>
to distinguish between &quot;local&quot; and &quot;remote&quot; processes.  I would have
<br>
thought that distinction should be invisible to users as much as possible
<br>
- a user asking for 4 cpus would like to see the same behaviour if all
<br>
4 are local or &quot;2 local, 2 remote&quot;.
<br>
<p>As to why tm does &quot;The Right Thing&quot;: in the case of rsh/ssh the full
<br>
mpirun environment is given to the rsh/ssh process locally while in the tm
<br>
case it is an argument to tm_spawn and so gets given to the process (in
<br>
this case orted) being launched remotely. Relevant lines from 1.3.3 below.
<br>
PBS just passes along the environment it is told to.  We dont use torque
<br>
but as of 2.3.3, it was still the same as OpenPBS in this respect.
<br>
<p>Michael just pointed out the slight flaw.  The environment should be
<br>
somewhat selectively propagated (exclude HOSTNAME etc).  I guess if you
<br>
were to &quot;fix&quot; plm_tm_module I would put the propagation behaviour in
<br>
tm_spawn and try to handle these exceptional cases.
<br>
<p>Cheers,
<br>
David
<br>
<p><p>orterun.c:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;510     /* save the environment for launch purposes. This MUST be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;511      * done so that we can pass it to any local procs we
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512      * spawn - otherwise, those local procs won't see any
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;513      * non-MCA envars were set in the enviro prior to calling
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;514      * orterun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;515      */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;516     orte_launch_environ = opal_argv_copy(environ);
<br>
<p><p>plm_rsh_module.c:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;681 /* actually ssh the child */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;682 static void ssh_child(int argc, char **argv,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;683                       orte_vpid_t vpid, int proc_vpid_index)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;684 {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;694     /* setup environment */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;695     env = opal_argv_copy(orte_launch_environ);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;766     execve(exec_path, exec_argv, env);
<br>
<p><p>plm_tm_module.c:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128 static int plm_tm_launch_job(orte_job_t *jdata)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;129 {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;228     /* setup environment */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;229     env = opal_argv_copy(orte_launch_environ);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;311     rc = tm_spawn(argc, argv, env, node-&gt;launch_id, tm_task_ids + launched, tm_events + launched);
<br>
<p><p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Not exactly. It completely depends on how Torque was setup - OMPI isn't forwarding the environment. Torque is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We made a design decision at the very beginning of the OMPI project not to forward non-OMPI envars unless directed to do so by the user. I'm afraid I disagree with Michael's claim that other MPIs do forward them - yes, MPICH does, but not all others do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The world is bigger than MPICH and OMPI :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since there is inconsistency in this regard between MPIs, we chose not to forward. Reason was simple: there is no way to know what is safe to forward vs what is not (e.g., what to do with DISPLAY), nor what the underlying environment is trying to forward vs what it isn't. It is very easy to get cross-wise and cause totally unexpected behavior, as users have complained about for years.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, if you are using a managed environment like Torque, we recommend that you work with your sys admin to decide how to configure it. This is the best way to resolve a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second, if you are not using a managed environment and/or decide not to have that environment do the forwarding, you can tell OMPI to forward the envars you need by specifying them via the -x cmd line option. We already have a request to expand this capability, and I will be doing so as time permits. One option I'll be adding is the reverse of -x - i.e., &quot;forward all envars -except- the specified one(s)&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11224.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Previous message:</strong> <a href="11222.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>In reply to:</strong> <a href="11218.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11224.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Reply:</strong> <a href="11224.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Reply:</strong> <a href="11227.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
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
