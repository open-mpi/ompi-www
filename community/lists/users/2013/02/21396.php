<?
$subject_val = "Re: [OMPI users] OpenMPI job launch failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 10:35:09 2013" -->
<!-- isoreceived="20130214153509" -->
<!-- sent="Thu, 14 Feb 2013 07:35:02 -0800" -->
<!-- isosent="20130214153502" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI job launch failures" -->
<!-- id="3B8E4D72-3000-4DB8-898A-B21A6DA93CAD_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="511D00FF.5070201_at_vt.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI job launch failures<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-14 10:35:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21397.php">Bharath Ramesh: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Previous message:</strong> <a href="21395.php">Bharath Ramesh: "[OMPI users] OpenMPI job launch failures"</a>
<li><strong>In reply to:</strong> <a href="21395.php">Bharath Ramesh: "[OMPI users] OpenMPI job launch failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21397.php">Bharath Ramesh: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Reply:</strong> <a href="21397.php">Bharath Ramesh: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Reply:</strong> <a href="21402.php">Bharath Ramesh: "Re: [OMPI users] OpenMPI job launch failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds like the orteds aren't reporting back to mpirun after launch. The MPI_proctable observation just means that the procs didn't launch in those cases where it is absent, which is something you already observed.
<br>
<p>Set &quot;-mca plm_base_verbose 5&quot; on your cmd line. You should see each orted report back to mpirun after it launches. If not, then it is likely that something is blocking it.
<br>
<p>You could also try updating to 1.6.3/4 in case there is some race condition in 1.6.1, though we haven't heard of it to-date.
<br>
<p><p>On Feb 14, 2013, at 7:21 AM, Bharath Ramesh &lt;bramesh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On our cluster we are noticing intermediate job launch failure when using OpenMPI. We are currently using OpenMPI-1.6.1 on our cluster and it is integrated with Torque-4.1.3. It failes even for a simple MPI hello world applications. The issue is that orted gets launched on all the nodes but there are a bunch of nodes that dont launch the actual MPI application. There are no errors reported when the job gets killed because the walltime expires. Enabling --debug-daemons doesnt show any errors either. The only difference being that successful runs have MPI_proctable listed and for failures this is absent. Any help in debugging this issue is greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Bharath
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
<li><strong>Next message:</strong> <a href="21397.php">Bharath Ramesh: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Previous message:</strong> <a href="21395.php">Bharath Ramesh: "[OMPI users] OpenMPI job launch failures"</a>
<li><strong>In reply to:</strong> <a href="21395.php">Bharath Ramesh: "[OMPI users] OpenMPI job launch failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21397.php">Bharath Ramesh: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Reply:</strong> <a href="21397.php">Bharath Ramesh: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Reply:</strong> <a href="21402.php">Bharath Ramesh: "Re: [OMPI users] OpenMPI job launch failures"</a>
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
