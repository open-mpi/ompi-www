<?
$subject_val = "Re: [OMPI users] OpenMPI job launch failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 13:59:17 2013" -->
<!-- isoreceived="20130214185917" -->
<!-- sent="Thu, 14 Feb 2013 13:58:52 -0500" -->
<!-- isosent="20130214185852" -->
<!-- name="Bharath Ramesh" -->
<!-- email="bramesh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI job launch failures" -->
<!-- id="20130214185852.GB21849_at_vt.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3B8E4D72-3000-4DB8-898A-B21A6DA93CAD_at_open-mpi.org" -->
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
<strong>From:</strong> Bharath Ramesh (<em>bramesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-14 13:58:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21403.php">Bharath Ramesh: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Previous message:</strong> <a href="21401.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>In reply to:</strong> <a href="21396.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After manually fixing some of the issues I see that the failed
<br>
nodes never receive commands to launch the local processes. I am
<br>
going to request the admins to look into the logs for any dropped
<br>
connections.
<br>
<p>On Thu, Feb 14, 2013 at 07:35:02AM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Sounds like the orteds aren't reporting back to mpirun after launch. The MPI_proctable observation just means that the procs didn't launch in those cases where it is absent, which is something you already observed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Set &quot;-mca plm_base_verbose 5&quot; on your cmd line. You should see each orted report back to mpirun after it launches. If not, then it is likely that something is blocking it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You could also try updating to 1.6.3/4 in case there is some race condition in 1.6.1, though we haven't heard of it to-date.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 14, 2013, at 7:21 AM, Bharath Ramesh &lt;bramesh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On our cluster we are noticing intermediate job launch failure when using OpenMPI. We are currently using OpenMPI-1.6.1 on our cluster and it is integrated with Torque-4.1.3. It failes even for a simple MPI hello world applications. The issue is that orted gets launched on all the nodes but there are a bunch of nodes that dont launch the actual MPI application. There are no errors reported when the job gets killed because the walltime expires. Enabling --debug-daemons doesnt show any errors either. The only difference being that successful runs have MPI_proctable listed and for failures this is absent. Any help in debugging this issue is greatly appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Bharath
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><pre>
-- 
Bharath

</pre>
<p>
<p><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21402/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21403.php">Bharath Ramesh: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Previous message:</strong> <a href="21401.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>In reply to:</strong> <a href="21396.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
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
