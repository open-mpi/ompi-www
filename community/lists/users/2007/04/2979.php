<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  2 12:54:18 2007" -->
<!-- isoreceived="20070402165418" -->
<!-- sent="Mon, 02 Apr 2007 12:53:41 -0400" -->
<!-- isosent="20070402165341" -->
<!-- name="Prakash Velayutham" -->
<!-- email="Prakash.Velayutham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI error when using MPI_Comm_spawn" -->
<!-- id="s610fced.089_at_n6mcgw16.cchmc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Open MPI error when using MPI_Comm_spawn" -->
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
<strong>From:</strong> Prakash Velayutham (<em>Prakash.Velayutham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-02 12:53:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2980.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="2978.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Maybe in reply to:</strong> <a href="2974.php">Prakash Velayutham: "[OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2991.php">Jeff Squyres: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="2991.php">Jeff Squyres: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Thanks for the patch. I still do not know the internals of Open MPI, so can't test this right away. But here is another test I ran and that failed too.
<br>
<p>I have now removed Torque from the equation. I am NOT requesting nodes through Torque. I SSH to a compute node and start up the code as below.
<br>
<p>prakash_at_wins04:~/thesis/CS/Samples&gt;mpirun -np 4 --bynode --hostfile machinefile ./parallel.laplace
<br>
<p>[wins01:17699] *** An error occurred in MPI_Comm_spawn
<br>
[wins01:17699] *** on communicator MPI_COMM_WORLD
<br>
[wins01:17699] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[wins01:17699] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
mpirun noticed that job rank 1 with PID 25074 on node wins02 exited on signal 15 (Terminated). 
<br>
2 additional processes aborted (not shown)
<br>
<p>What happened here? Why would orted not let me spawn on new nodes? What kind of restrictions apply in this case? I even have the new node name in the hostfile (machinefile), just in case.
<br>
<p>Thanks,
<br>
Prakash
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt; jbuisson_at_[hidden] 04/02/07 12:34 PM &gt;&gt;&gt;
</span><br>
Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; The runtime underneath Open MPI (called OpenRTE) will not allow you to spawn
</span><br>
<span class="quotelev1">&gt; processes on nodes outside of your allocation. This is for several reasons,
</span><br>
<span class="quotelev1">&gt; but primarily because (a) we only know about the nodes that were allocated,
</span><br>
<span class="quotelev1">&gt; so we have no idea how to spawn a process anywhere else, and (b) most
</span><br>
<span class="quotelev1">&gt; resource managers wouldn't let us do it anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I gather you have some node that you know about and have hard-coded into
</span><br>
<span class="quotelev1">&gt; your application? How do you know the name of the node if it isn't in your
</span><br>
<span class="quotelev1">&gt; allocation??
</span><br>
<p>Because I can give that names to OpenMPI (or OpenRTE, or whatever). I
<br>
also would like to do the same, and I don't want OpenMPI to restrict to
<br>
what it thinks to be the allocation, while I'm sure to know better than
<br>
it what I am doing.
<br>
The concept of nodes being in allocations fixed at launch-time is really
<br>
rigid; and it prevents the application (or whatever else) to modify the
<br>
allocation at runtime, which may be quite nice.
<br>
<p>Here is an ugly patch I've quickly done for my own use, which changes
<br>
the round-robin rmaps such that is first allocates the hosts to the
<br>
rmgr, as a copy&amp;paste of some code in the dash_host ras component. It's
<br>
far from being bugfree, but it can be a startpoint to hack.
<br>
<p>Jeremy
<br>
<p><span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/2/07 10:05 AM, &quot;Prakash Velayutham&quot; &lt;Prakash.Velayutham_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have built Open MPI (1.2) with run-time environment enabled for Torque
</span><br>
<span class="quotelev2">&gt;&gt; (2.1.6) resource manager. Initially I am requesting 4 nodes (1 CPU each)
</span><br>
<span class="quotelev2">&gt;&gt; from Torque. The from inside of my MPI code I am trying to spawn more
</span><br>
<span class="quotelev2">&gt;&gt; processes to nodes outside of Torque-assigned nodes using
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn, but this is failing with an error below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [wins04:13564] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev2">&gt;&gt; [wins04:13564] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [wins04:13564] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev2">&gt;&gt; [wins04:13564] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 1 with PID 15070 on node wins03 exited on
</span><br>
<span class="quotelev2">&gt;&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt; 2 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Info info;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm comm, *intercomm;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;         char *key, *value;
</span><br>
<span class="quotelev2">&gt;&gt;         key = &quot;host&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;         value = &quot;wins08&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;         rc1 = MPI_Info_create(&amp;info);
</span><br>
<span class="quotelev2">&gt;&gt;         rc1 = MPI_Info_set(info, key, value);
</span><br>
<span class="quotelev2">&gt;&gt;         rc1 = MPI_Comm_spawn(slave,MPI_ARGV_NULL, 1, info, 0,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD, intercomm, arr);
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ###################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would this work as it is or is something wrong with my assumption? Is
</span><br>
<span class="quotelev2">&gt;&gt; OpenRTE stopping me from spawning processes outside of the initially
</span><br>
<span class="quotelev2">&gt;&gt; allocated nodes through Torque?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Prakash
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="2980.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="2978.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Maybe in reply to:</strong> <a href="2974.php">Prakash Velayutham: "[OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2991.php">Jeff Squyres: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="2991.php">Jeff Squyres: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
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
