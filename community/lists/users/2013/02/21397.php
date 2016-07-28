<?
$subject_val = "Re: [OMPI users] OpenMPI job launch failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 11:39:21 2013" -->
<!-- isoreceived="20130214163921" -->
<!-- sent="Thu, 14 Feb 2013 11:38:51 -0500" -->
<!-- isosent="20130214163851" -->
<!-- name="Bharath Ramesh" -->
<!-- email="bramesh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI job launch failures" -->
<!-- id="20130214163851.GA21849_at_vt.edu" -->
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
<strong>Date:</strong> 2013-02-14 11:38:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21398.php">Maxime Boissonneault: "[OMPI users] Very high latency with openib btl"</a>
<li><strong>Previous message:</strong> <a href="21396.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>In reply to:</strong> <a href="21396.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21401.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Reply:</strong> <a href="21401.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there any way to prevent the output of more than one node
<br>
written to the same line. I tried setting --output-filename,
<br>
which didnt help. For some reason only stdout was written to the
<br>
files. Making it little bit hard to read close to a 6M output
<br>
file.
<br>
<p><pre>
-- 
Bharath
On Thu, Feb 14, 2013 at 07:35:02AM -0800, Ralph Castain wrote:
&gt; Sounds like the orteds aren't reporting back to mpirun after launch. The MPI_proctable observation just means that the procs didn't launch in those cases where it is absent, which is something you already observed.
&gt; 
&gt; Set &quot;-mca plm_base_verbose 5&quot; on your cmd line. You should see each orted report back to mpirun after it launches. If not, then it is likely that something is blocking it.
&gt; 
&gt; You could also try updating to 1.6.3/4 in case there is some race condition in 1.6.1, though we haven't heard of it to-date.
&gt; 
&gt; 
&gt; On Feb 14, 2013, at 7:21 AM, Bharath Ramesh &lt;bramesh_at_[hidden]&gt; wrote:
&gt; 
&gt; &gt; On our cluster we are noticing intermediate job launch failure when using OpenMPI. We are currently using OpenMPI-1.6.1 on our cluster and it is integrated with Torque-4.1.3. It failes even for a simple MPI hello world applications. The issue is that orted gets launched on all the nodes but there are a bunch of nodes that dont launch the actual MPI application. There are no errors reported when the job gets killed because the walltime expires. Enabling --debug-daemons doesnt show any errors either. The only difference being that successful runs have MPI_proctable listed and for failures this is absent. Any help in debugging this issue is greatly appreciated.
&gt; &gt; 
&gt; &gt; -- 
&gt; &gt; Bharath
&gt; &gt; 
&gt; &gt; 
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<p>
<p><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21397/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21398.php">Maxime Boissonneault: "[OMPI users] Very high latency with openib btl"</a>
<li><strong>Previous message:</strong> <a href="21396.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>In reply to:</strong> <a href="21396.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21401.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Reply:</strong> <a href="21401.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
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
