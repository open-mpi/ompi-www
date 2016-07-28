<?
$subject_val = "Re: [OMPI users] OMPI looking for PBS file?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 14 18:54:23 2010" -->
<!-- isoreceived="20100314225423" -->
<!-- sent="Sun, 14 Mar 2010 16:54:11 -0600" -->
<!-- isosent="20100314225411" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI looking for PBS file?" -->
<!-- id="C8062850-1848-46F8-8026-13891C6227CB_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-14 18:54:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12352.php">Ralph Castain: "Re: [OMPI users] mpirun over infiniband."</a>
<li><strong>Previous message:</strong> <a href="12350.php">nad labassi: "[OMPI users] mpirun over infiniband."</a>
<li><strong>In reply to:</strong> <a href="12349.php">Josh Bernstein: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12360.php">John R Cary: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to clarify: OMPI is launched with either mpirun or mpiexec commands, so long as your path is pointing to the correct OMPI installation. This looks like that is the case as the error message comes from us.
<br>
<p>It really, really helps if you tell us what version of OMPI you are using. Some older version have known bugs, and the 1.3/1.4 series treats hostfile differently than earlier series.
<br>
<p>OMPI's Torque support will always look for the PBS_NODEFILE as given in the environment by PBS. You don't need to copy it anywhere or specify it with -machinefile. We will abort if we cannot find that file as it indicates to us that something is wrong with the PBS environment.
<br>
<p>So the real question is: why are we not able to find the PBS_NODEFILE? Did you move it instead of copy it? Or is the envar not being set?
<br>
<p>On Mar 14, 2010, at 3:20 PM, Josh Bernstein wrote:
<br>
<p><span class="quotelev1">&gt; Hi John,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mpiexec isn't needed with OMPI, in fact if you are using the one from OSC, it only works with MPICH. 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12351/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12352.php">Ralph Castain: "Re: [OMPI users] mpirun over infiniband."</a>
<li><strong>Previous message:</strong> <a href="12350.php">nad labassi: "[OMPI users] mpirun over infiniband."</a>
<li><strong>In reply to:</strong> <a href="12349.php">Josh Bernstein: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12360.php">John R Cary: "Re: [OMPI users] OMPI looking for PBS file?"</a>
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
