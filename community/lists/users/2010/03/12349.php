<?
$subject_val = "Re: [OMPI users] OMPI looking for PBS file?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 14 17:20:46 2010" -->
<!-- isoreceived="20100314212046" -->
<!-- sent="Sun, 14 Mar 2010 22:20:31 +0100" -->
<!-- isosent="20100314212031" -->
<!-- name="Josh Bernstein" -->
<!-- email="jbernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI looking for PBS file?" -->
<!-- id="4CD8D807-C6AD-4C4B-AE04-9B4C852F2E97_at_penguincomputing.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4B9D483D.5070602_at_txcorp.com" -->
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
<strong>From:</strong> Josh Bernstein (<em>jbernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-14 17:20:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12350.php">nad labassi: "[OMPI users] mpirun over infiniband."</a>
<li><strong>Previous message:</strong> <a href="12348.php">John R. Cary: "[OMPI users] OMPI looking for PBS file?"</a>
<li><strong>In reply to:</strong> <a href="12348.php">John R. Cary: "[OMPI users] OMPI looking for PBS file?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12351.php">Ralph Castain: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<li><strong>Reply:</strong> <a href="12351.php">Ralph Castain: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<li><strong>Reply:</strong> <a href="12360.php">John R Cary: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi John,
<br>
<p>Mpiexec isn't needed with OMPI, in fact if you are using the one from  
<br>
OSC, it only works with MPICH.
<br>
<p>Instead just build OMPI with --with-tm, and it will link against  
<br>
TORQUE and start up and track jobs properly.
<br>
<p>-Joshua Bernstein
<br>
Penguin Computing
<br>
<p>On Mar 14, 2010, at 21:35, &quot;John R. Cary&quot; &lt;cary_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a script that launches a bunch of runs on some compute nodes of
</span><br>
<span class="quotelev1">&gt; a cluster.  Once I get through the queue, I query PBS for my machine
</span><br>
<span class="quotelev1">&gt; file, then I copy that to a local file 'nodes' which I use for  
</span><br>
<span class="quotelev1">&gt; mpiexec:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -machinefile /home/research/cary/projects/vpall/vptests/ 
</span><br>
<span class="quotelev1">&gt; nodes -np 6 /hom
</span><br>
<span class="quotelev1">&gt; e/research/cary/projects/vpall/builds/vorpal/par/vorpal/vorpal -i  
</span><br>
<span class="quotelev1">&gt; bathtubAntenna
</span><br>
<span class="quotelev1">&gt; .in -dim 2 -o bathtubAntenna2p -n 100 -d 100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but this fails with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node47:07004] [[25769,0],0] ORTE_ERROR_LOG: File open failure in  
</span><br>
<span class="quotelev1">&gt; file ../../../
</span><br>
<span class="quotelev1">&gt; ../../orte/mca/ras/tm/ras_tm_module.c at line 153
</span><br>
<span class="quotelev1">&gt; [node47:07004] [[25769,0],0] ORTE_ERROR_LOG: File open failure in  
</span><br>
<span class="quotelev1">&gt; file ../../../
</span><br>
<span class="quotelev1">&gt; ../../orte/mca/ras/tm/ras_tm_module.c at line 87
</span><br>
<span class="quotelev1">&gt; [node47:07004] [[25769,0],0] ORTE_ERROR_LOG: File open failure in  
</span><br>
<span class="quotelev1">&gt; file ../../../
</span><br>
<span class="quotelev1">&gt; ../orte/mca/ras/base/ras_base_allocate.c at line 133
</span><br>
<span class="quotelev1">&gt; [node47:07004] [[25769,0],0] ORTE_ERROR_LOG: File open failure in  
</span><br>
<span class="quotelev1">&gt; file ../../../
</span><br>
<span class="quotelev1">&gt; ../orte/mca/plm/base/plm_base_launch_support.c at line 72
</span><br>
<span class="quotelev1">&gt; [node47:07004] [[25769,0],0] ORTE_ERROR_LOG: File open failure in  
</span><br>
<span class="quotelev1">&gt; file ../../../
</span><br>
<span class="quotelev1">&gt; ../../orte/mca/plm/tm/plm_tm_module.c at line 167
</span><br>
<span class="quotelev1">&gt; --- 
</span><br>
<span class="quotelev1">&gt; --- 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while  
</span><br>
<span class="quotelev1">&gt; attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The appropriate code snippet is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* setup the full path to the PBS file */
</span><br>
<span class="quotelev1">&gt;     filename = opal_os_path(false, mca_ras_tm_component.nodefile_dir,
</span><br>
<span class="quotelev1">&gt;                             pbs_jobid, NULL);
</span><br>
<span class="quotelev1">&gt;     fp = fopen(filename, &quot;r&quot;);
</span><br>
<span class="quotelev1">&gt;     if (NULL == fp) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(ORTE_ERR_FILE_OPEN_FAILURE);
</span><br>
<span class="quotelev1">&gt;         free(filename);
</span><br>
<span class="quotelev1">&gt;         return ORTE_ERR_FILE_OPEN_FAILURE;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which kind of looks like it might be trying to open my pbs file  
</span><br>
<span class="quotelev1">&gt; instead
</span><br>
<span class="quotelev1">&gt; of the file I gave on the command line?  I really don't know, but does
</span><br>
<span class="quotelev1">&gt; anyone have any ideas here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thx....John Cary
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12349/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12350.php">nad labassi: "[OMPI users] mpirun over infiniband."</a>
<li><strong>Previous message:</strong> <a href="12348.php">John R. Cary: "[OMPI users] OMPI looking for PBS file?"</a>
<li><strong>In reply to:</strong> <a href="12348.php">John R. Cary: "[OMPI users] OMPI looking for PBS file?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12351.php">Ralph Castain: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<li><strong>Reply:</strong> <a href="12351.php">Ralph Castain: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<li><strong>Reply:</strong> <a href="12360.php">John R Cary: "Re: [OMPI users] OMPI looking for PBS file?"</a>
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
