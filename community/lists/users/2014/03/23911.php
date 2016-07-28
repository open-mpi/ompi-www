<?
$subject_val = "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel	nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 05:00:18 2014" -->
<!-- isoreceived="20140321090018" -->
<!-- sent="Fri, 21 Mar 2014 08:57:47 +0000 (UTC)" -->
<!-- isosent="20140321085747" -->
<!-- name="hsaeed" -->
<!-- email="e.hamidsaeed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel	nodes" -->
<!-- id="loom.20140321T095522-958_at_post.gmane.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAJTHAufNCyHBp=-4L4tK01A2VAK6CVPG3SZkojQvyXGCaEpoYg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel	nodes<br>
<strong>From:</strong> hsaeed (<em>e.hamidsaeed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 04:57:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23912.php">Ralph Castain: "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23910.php">Hamid Saeed: "[OMPI users] problem for multiple clusters using mpirun"</a>
<li><strong>In reply to:</strong> <a href="23733.php">Victor: "[OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Victor &lt;victor.major &lt;at&gt; gmail.com&gt; writes:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got 4 x AMD A-10 6800K nodes on loan for a few months and added them to 
</span><br>
my existing Intel nodes.
<br>
<span class="quotelev1">&gt; All nodes share the relevant directories via NFS. I have OpenMPI 1.6.5 
</span><br>
which was build with Open-MX 1.5.3 support networked via GbE.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All nodes run Ubuntu 12.04.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can run a job EITHER on 4 x AMD nodes OR on 2 x Intel nodes, but I 
</span><br>
cannot run a job on any combination of an AMD and Intel node, ie. 1 x AMD 
<br>
node + 1 x Intel node = error below.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error that I get during job setup is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
At least one pair of MPI processes are unable to reach each other forMPI 
<br>
communications. &#194;&#160;This means that no Open MPI device has indicated
<br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes. &#194;&#160;This isan 
</span><br>
error; Open MPI requires that all MPI processes be able to reacheach other. 
<br>
&#194;&#160;This error can sometimes be the result of forgetting tospecify the &quot;self&quot; 
<br>
BTL.
<br>
<span class="quotelev1">&gt; &#194;&#160; Process 1 ([[2229,1],1]) is on host: AMD-Node-1&#194;&#160; Process 2 
</span><br>
([[2229,1],8]) is on host: Intel-Node-1&#194;&#160; BTLs attempted: self sm tcpYour MPI 
<br>
job is now going to abort; sorry.-------------------------------------------
<br>
-------------------------------
<br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
MPI_INIT has failed because at least one MPI process is unreachablefrom 
<br>
another. &#194;&#160;This *usually* means that an underlying communication
<br>
<span class="quotelev1">&gt; plugin -- such as a BTL or an MTL -- has either not loaded or notallowed 
</span><br>
itself to be used. &#194;&#160;Your MPI job will now abort.You may wish to try to 
<br>
narrow down the problem;&#194;&#160;* Check the output of ompi_info to see which 
<br>
BTL/MTL plugins are
<br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160;available.&#194;&#160;* Run your application with MPI_THREAD_SINGLE.&#194;&#160;* Set the MCA 
</span><br>
parameter btl_base_verbose to 100 (or mtl_base_verbose,&#194;&#160; &#194;&#160;if using MTL-based 
<br>
communications) to see exactly which&#194;&#160; &#194;&#160;communication plugins were considered 
<br>
and/or discarded.
<br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
[AMD-Node-1:3932] *** An error occurred in MPI_Init[AMD-Node-1:3932] *** on 
<br>
a NULL communicator[AMD-Node-1:3932] *** Unknown error[AMD-Node-1:3932] *** 
<br>
MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
An MPI process is aborting at a time when it cannot guarantee that allof its 
<br>
peer processes in the job will be killed properly. &#194;&#160;You should
<br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.&#194;&#160; Reason: &#194;&#160; &#194;&#160; Before 
</span><br>
MPI_INIT completed&#194;&#160; Local host: AMD-Node-1&#194;&#160; PID: &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;3932----------------
<br>
----------------------------------------------------------
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I would like to know is, is it actually difficult (impossible) to mix 
</span><br>
AMD and Intel machines in the same cluster and have them run the same job, 
<br>
or am I missing something obvious, or not so obvious when it comes to the 
<br>
communication stack on the Intel nodes for example.&#194;&#160;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I set up the AMD nodes just yesterday, but I used the same OpenMPI and 
</span><br>
Open-MX versions, however I may have inadvertently done something different, 
<br>
so I am thinking (hoping) that it is possible to run such a heterogeneous 
<br>
cluster, and that all I need to do is ensure that all OpenMPI modules are 
<br>
correctly installed on all nodes.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need the extra 32 Gb RAM and the AMD nodes bring as I need to validate 
</span><br>
our CFD application, and our additional Intel nodes are still not here (ETA 
<br>
2 weeks).
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Victor
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users &lt;at&gt; open-mpi.org
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>I know you can help me in solving this problem.
<br>
<p>I can compile my helloworld.c program using mpicc and I have confirmed that 
<br>
the script runs correctly on another working cluster, so the local paths are 
<br>
set up correctly I think and the script definitely works.
<br>
<p>If I execute mpirun from my master node, and using only the master node, 
<br>
helloworld executes correctly:
<br>
<p>mpirun -n 1 -host master --mca btl sm,openib,self ./helloworldmpi
<br>
hello world from process 0 of 1
<br>
If I execute mpirun from my master node, using only the worker node, 
<br>
helloworld executes correctly:
<br>
<p>mpirun -n 1 -host node001 --mca btl sm,openib,self./helloworldmpi
<br>
hello world from process 0 of 1
<br>
Now, my problem is that if I try to run helloworld on both nodes, I get an 
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
Abort before MPI_INIT completed successfully; not able to guarantee that all 
<br>
other processes were killed!
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
Abort before MPI_INIT completed successfully; not able to guarantee that all 
<br>
other processes were killed!
<br>
1 more process has sent help message help-mca-bml-r2.txt / unreachable proc
<br>
Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error 
<br>
messages
<br>
1 more process has sent help message help-mpi-runtime
<br>
<p>i tried using
<br>
mpirun -n 2 -host master,node001 --mca btl tcp,sm,self ./helloworldmpi
<br>
mpirun -n 2 -host master,node001 --mca btl o
<br>
penib,tcp,self ./helloworldmpi
<br>
etc..
<br>
<p>But no flag is works.
<br>
<p><p>Can some one reply with the idea.
<br>
<p>Thanks in Advance.
<br>
<p>Regards--
<br>
hamid
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23912.php">Ralph Castain: "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23910.php">Hamid Saeed: "[OMPI users] problem for multiple clusters using mpirun"</a>
<li><strong>In reply to:</strong> <a href="23733.php">Victor: "[OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
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
