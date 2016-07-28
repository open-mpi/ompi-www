<?
$subject_val = "Re: [OMPI users] OpenMPI job launch failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 14:05:14 2013" -->
<!-- isoreceived="20130214190514" -->
<!-- sent="Thu, 14 Feb 2013 14:04:42 -0500" -->
<!-- isosent="20130214190442" -->
<!-- name="Bharath Ramesh" -->
<!-- email="bramesh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI job launch failures" -->
<!-- id="20130214190442.GC21849_at_vt.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A00FA882-F1FB-4AEA-9567-513973161758_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-02-14 14:04:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21404.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Previous message:</strong> <a href="21402.php">Bharath Ramesh: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>In reply to:</strong> <a href="21401.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21404.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Reply:</strong> <a href="21404.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When I set the OPAL_OUTPUT_STDERR_FD=0 I receive a whole bunch of
<br>
mca_oob_tcp_message_recv_complete: invalid message type errors
<br>
and the job just hangs even when all the nodes have fired off the
<br>
MPI application.
<br>
<p><p><pre>
-- 
Bharath
On Thu, Feb 14, 2013 at 09:51:50AM -0800, Ralph Castain wrote:
&gt; I don't think this is documented anywhere, but it is an available trick (not sure if it is in 1.6.1, but might be): if you set OPAL_OUTPUT_STDERR_FD=N in your environment, we will direct all our error outputs to that file descriptor. If it is &quot;0&quot;, then it goes to stdout.
&gt; 
&gt; Might be worth a try?
&gt; 
&gt; 
&gt; On Feb 14, 2013, at 8:38 AM, Bharath Ramesh &lt;bramesh_at_[hidden]&gt; wrote:
&gt; 
&gt; &gt; Is there any way to prevent the output of more than one node
&gt; &gt; written to the same line. I tried setting --output-filename,
&gt; &gt; which didnt help. For some reason only stdout was written to the
&gt; &gt; files. Making it little bit hard to read close to a 6M output
&gt; &gt; file.
&gt; &gt; 
&gt; &gt; -- 
&gt; &gt; Bharath
&gt; &gt; 
&gt; &gt; On Thu, Feb 14, 2013 at 07:35:02AM -0800, Ralph Castain wrote:
&gt; &gt;&gt; Sounds like the orteds aren't reporting back to mpirun after launch. The MPI_proctable observation just means that the procs didn't launch in those cases where it is absent, which is something you already observed.
&gt; &gt;&gt; 
&gt; &gt;&gt; Set &quot;-mca plm_base_verbose 5&quot; on your cmd line. You should see each orted report back to mpirun after it launches. If not, then it is likely that something is blocking it.
&gt; &gt;&gt; 
&gt; &gt;&gt; You could also try updating to 1.6.3/4 in case there is some race condition in 1.6.1, though we haven't heard of it to-date.
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; On Feb 14, 2013, at 7:21 AM, Bharath Ramesh &lt;bramesh_at_[hidden]&gt; wrote:
&gt; &gt;&gt; 
&gt; &gt;&gt;&gt; On our cluster we are noticing intermediate job launch failure when using OpenMPI. We are currently using OpenMPI-1.6.1 on our cluster and it is integrated with Torque-4.1.3. It failes even for a simple MPI hello world applications. The issue is that orted gets launched on all the nodes but there are a bunch of nodes that dont launch the actual MPI application. There are no errors reported when the job gets killed because the walltime expires. Enabling --debug-daemons doesnt show any errors either. The only difference being that successful runs have MPI_proctable listed and for failures this is absent. Any help in debugging this issue is greatly appreciated.
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; -- 
&gt; &gt;&gt;&gt; Bharath
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21403/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21404.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Previous message:</strong> <a href="21402.php">Bharath Ramesh: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>In reply to:</strong> <a href="21401.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21404.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Reply:</strong> <a href="21404.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
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
