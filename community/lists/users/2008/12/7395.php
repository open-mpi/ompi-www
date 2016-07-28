<?
$subject_val = "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 15:20:54 2008" -->
<!-- isoreceived="20081204202054" -->
<!-- sent="Thu, 4 Dec 2008 13:20:44 -0700" -->
<!-- isosent="20081204202044" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processor/core selection/affinity for large shared memory systems" -->
<!-- id="AF11A122-7342-40F6-8108-3E24B2095382_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1228420257.7539.1288309177_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Processor/core selection/affinity for large shared memory systems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-04 15:20:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7396.php">V. Ram: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>Previous message:</strong> <a href="7394.php">V. Ram: "[OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>In reply to:</strong> <a href="7394.php">V. Ram: "[OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7396.php">V. Ram: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I confess to confusion. OpenMPI will by default map your processes in  
<br>
a round-robin fashion based on process slot. If you are in a resource  
<br>
managed environment (e.g., TM or SLURM), then the slots correspond to  
<br>
cores. If you are in an unmanaged environment, then your hostfile  
<br>
needs to specify a single hostname, and the slots=x number should  
<br>
reflect the total number of cores on your machine.
<br>
<p>If you then set mpi_paffinity_alone=1, OMPI will bind each rank to its  
<br>
associated core.
<br>
<p>Is that not what you are trying to do?
<br>
Ralph
<br>
<p>On Dec 4, 2008, at 12:50 PM, V. Ram wrote:
<br>
<p><span class="quotelev1">&gt; We have an 8-way, 32-core AMD processor machine (single system image)
</span><br>
<span class="quotelev1">&gt; and are at present running OpenMPI 1.2.8 .  Jobs are launched  
</span><br>
<span class="quotelev1">&gt; locally on
</span><br>
<span class="quotelev1">&gt; the machine itself.  As far as I can see, there doesn't seem to be any
</span><br>
<span class="quotelev1">&gt; way to tell OpenMPI to launch the MPI processes on adjacent cores.
</span><br>
<span class="quotelev1">&gt; Presumably such functionality is technically possible via PLPA.  Is
</span><br>
<span class="quotelev1">&gt; there in fact a way to specify such a thing with 1.2.8, and if not,  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; 1.3 support these kinds arguments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  V. Ram
</span><br>
<span class="quotelev1">&gt;  v_r_959_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - Or how I learned to stop worrying and
</span><br>
<span class="quotelev1">&gt;                          love email again
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
<li><strong>Next message:</strong> <a href="7396.php">V. Ram: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>Previous message:</strong> <a href="7394.php">V. Ram: "[OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>In reply to:</strong> <a href="7394.php">V. Ram: "[OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7396.php">V. Ram: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
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
