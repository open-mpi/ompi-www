<?
$subject_val = "Re: [OMPI users] OMPI looking for PBS file?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 15 20:02:28 2010" -->
<!-- isoreceived="20100316000228" -->
<!-- sent="Mon, 15 Mar 2010 18:02:15 -0600" -->
<!-- isosent="20100316000215" -->
<!-- name="John R Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI looking for PBS file?" -->
<!-- id="89FEA42C-2833-4196-8964-2D90B1350DDA_at_txcorp.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CD8D807-C6AD-4C4B-AE04-9B4C852F2E97_at_penguincomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI looking for PBS file?<br>
<strong>From:</strong> John R Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-15 20:02:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12361.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Previous message:</strong> <a href="12359.php">Ashley Pittman: "Re: [OMPI users] viewing message queues for running job"</a>
<li><strong>In reply to:</strong> <a href="12349.php">Josh Bernstein: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 14, 2010, at 3:20 PM, Josh Bernstein wrote:
<br>
<p><span class="quotelev1">&gt; Hi John,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mpiexec isn't needed with OMPI, in fact if you are using the one from OSC, it only works with MPICH.
</span><br>
<p><p>Hi Josh,
<br>
<p>I guess I don't understand.  I think we do link against torque, but what I 
<br>
am trying to do is multiple mpi runs.  So I qsub a script that might have
<br>
in it
<br>
<p>script1.sh
<br>
<p>script2.sh
<br>
<p>...
<br>
<p>Inside of script1.sh is some various logic culminating in
<br>
<p>&nbsp;&nbsp;mpiexec &lt;app&gt; -i appinputfile1
<br>
<p>script2.sh similarly invokes
<br>
<p>&nbsp;&nbsp;mpiexec &lt;app&gt; -i appinputfile2
<br>
<p>but then those fail as shown below.
<br>
<p>So I am not sure what is going on.
<br>
<p>Thx....John
<br>
<p><p><p><p><p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Instead just build OMPI with --with-tm, and it will link against TORQUE and start up and track jobs properly. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Joshua Bernstein
</span><br>
<span class="quotelev1">&gt; Penguin Computing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 14, 2010, at 21:35, &quot;John R. Cary&quot; &lt;cary_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a script that launches a bunch of runs on some compute nodes of
</span><br>
<span class="quotelev2">&gt;&gt; a cluster.  Once I get through the queue, I query PBS for my machine
</span><br>
<span class="quotelev2">&gt;&gt; file, then I copy that to a local file 'nodes' which I use for mpiexec:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -machinefile /home/research/cary/projects/vpall/vptests/nodes -np 6 /hom
</span><br>
<span class="quotelev2">&gt;&gt; e/research/cary/projects/vpall/builds/vorpal/par/vorpal/vorpal -i bathtubAntenna
</span><br>
<span class="quotelev2">&gt;&gt; .in -dim 2 -o bathtubAntenna2p -n 100 -d 100
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; but this fails with
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [node47:07004] [[25769,0],0] ORTE_ERROR_LOG: File open failure in file ../../../
</span><br>
<span class="quotelev2">&gt;&gt; ../../orte/mca/ras/tm/ras_tm_module.c at line 153
</span><br>
<span class="quotelev2">&gt;&gt; [node47:07004] [[25769,0],0] ORTE_ERROR_LOG: File open failure in file ../../../
</span><br>
<span class="quotelev2">&gt;&gt; ../../orte/mca/ras/tm/ras_tm_module.c at line 87
</span><br>
<span class="quotelev2">&gt;&gt; [node47:07004] [[25769,0],0] ORTE_ERROR_LOG: File open failure in file ../../../
</span><br>
<span class="quotelev2">&gt;&gt; ../orte/mca/ras/base/ras_base_allocate.c at line 133
</span><br>
<span class="quotelev2">&gt;&gt; [node47:07004] [[25769,0],0] ORTE_ERROR_LOG: File open failure in file ../../../
</span><br>
<span class="quotelev2">&gt;&gt; ../orte/mca/plm/base/plm_base_launch_support.c at line 72
</span><br>
<span class="quotelev2">&gt;&gt; [node47:07004] [[25769,0],0] ORTE_ERROR_LOG: File open failure in file ../../../
</span><br>
<span class="quotelev2">&gt;&gt; ../../orte/mca/plm/tm/plm_tm_module.c at line 167
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev2">&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The appropriate code snippet is
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     /* setup the full path to the PBS file */
</span><br>
<span class="quotelev2">&gt;&gt;     filename = opal_os_path(false, mca_ras_tm_component.nodefile_dir,
</span><br>
<span class="quotelev2">&gt;&gt;                             pbs_jobid, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;     fp = fopen(filename, &quot;r&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     if (NULL == fp) {
</span><br>
<span class="quotelev2">&gt;&gt;         ORTE_ERROR_LOG(ORTE_ERR_FILE_OPEN_FAILURE);
</span><br>
<span class="quotelev2">&gt;&gt;         free(filename);
</span><br>
<span class="quotelev2">&gt;&gt;         return ORTE_ERR_FILE_OPEN_FAILURE;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; which kind of looks like it might be trying to open my pbs file instead
</span><br>
<span class="quotelev2">&gt;&gt; of the file I gave on the command line?  I really don't know, but does
</span><br>
<span class="quotelev2">&gt;&gt; anyone have any ideas here?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thx....John Cary
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
John R Cary
cary_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12361.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Previous message:</strong> <a href="12359.php">Ashley Pittman: "Re: [OMPI users] viewing message queues for running job"</a>
<li><strong>In reply to:</strong> <a href="12349.php">Josh Bernstein: "Re: [OMPI users] OMPI looking for PBS file?"</a>
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
