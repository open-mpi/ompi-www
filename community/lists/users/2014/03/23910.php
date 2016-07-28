<?
$subject_val = "[OMPI users] problem for multiple clusters using mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 03:43:22 2014" -->
<!-- isoreceived="20140321074322" -->
<!-- sent="Fri, 21 Mar 2014 08:43:20 +0100" -->
<!-- isosent="20140321074320" -->
<!-- name="Hamid Saeed" -->
<!-- email="e.hamidsaeed_at_[hidden]" -->
<!-- subject="[OMPI users] problem for multiple clusters using mpirun" -->
<!-- id="CAADBNWzjZrwdCtXTyT51GZY5u=_oHmmqXgNz20Or4vSPf7vqZQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] problem for multiple clusters using mpirun<br>
<strong>From:</strong> Hamid Saeed (<em>e.hamidsaeed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 03:43:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23911.php">hsaeed: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel	nodes"</a>
<li><strong>Previous message:</strong> <a href="23909.php">madhurima madhunapanthula: "[OMPI users] Segmentation Fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23912.php">Ralph Castain: "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<li><strong>Reply:</strong> <a href="23912.php">Ralph Castain: "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All:
<br>
<p>I know there will be some one who can help me in solving this problem.
<br>
<p><p>&nbsp;&nbsp;&nbsp;-
<br>
<p>&nbsp;&nbsp;&nbsp;I can compile my helloworld.c program using mpicc and I have confirmed
<br>
&nbsp;&nbsp;&nbsp;that the script runs correctly on another working cluster, so the local
<br>
&nbsp;&nbsp;&nbsp;paths are set up correctly I think and the script definitely works.
<br>
&nbsp;&nbsp;&nbsp;-
<br>
<p>&nbsp;&nbsp;&nbsp;If I execute mpirun from my master node, and using only the master node,
<br>
&nbsp;&nbsp;&nbsp;helloworld executes correctly:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -n 1 -host master --mca btl sm,openib,self ./helloworldmpi
<br>
&nbsp;&nbsp;&nbsp;hello world from process 0 of 1
<br>
<p>&nbsp;&nbsp;&nbsp;-
<br>
<p>&nbsp;&nbsp;&nbsp;If I execute mpirun from my master node, using only the worker node,
<br>
&nbsp;&nbsp;&nbsp;helloworld executes correctly:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -n 1 -host node001 --mca btl sm,openib,self./helloworldmpi
<br>
&nbsp;&nbsp;&nbsp;hello world from process 0 of 1
<br>
<p><p>Now, my problem is that if I try to run helloworld on both nodes, I get an
<br>
error:
<br>
<p>mpirun -n 2 -host master,node001 --mca btl openib,self ./helloworldmpi
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[5228,1],0]) is on host: hsaeed
<br>
&nbsp;&nbsp;Process 2 ([[5228,1],1]) is on host: node001
<br>
&nbsp;&nbsp;BTLs attempted: self
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
Abort before MPI_INIT completed successfully; not able to guarantee
<br>
that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 7037 on
<br>
node xxxx exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
Abort before MPI_INIT completed successfully; not able to guarantee
<br>
that all other processes were killed!
<br>
1 more process has sent help message help-mca-bml-r2.txt / unreachable proc
<br>
Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help /
<br>
error messages
<br>
1 more process has sent help message help-mpi-runtime
<br>
<p><p>i tried using 
<br>
<p>mpirun -n 2 -host master,node001 --mca btl tcp,sm,self ./helloworldmpi
<br>
<p>mpirun -n 2 -host master,node001 --mca btl o
<br>
penib,tcp,
<br>
self ./helloworldmpi
<br>
<p>etc..
<br>
<p>But no flag is works.
<br>
<p><p>Can some one reply with the idea.
<br>
<p>Thanks in Advance.
<br>
<p><p>Regards--
<br>
<pre>
-- 
_______________________________________________
Hamid Saeed
_______________________________________________
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23910/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23911.php">hsaeed: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel	nodes"</a>
<li><strong>Previous message:</strong> <a href="23909.php">madhurima madhunapanthula: "[OMPI users] Segmentation Fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23912.php">Ralph Castain: "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<li><strong>Reply:</strong> <a href="23912.php">Ralph Castain: "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
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
