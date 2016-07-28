<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 09:07:26 2007" -->
<!-- isoreceived="20070404130726" -->
<!-- sent="Wed, 04 Apr 2007 07:07:19 -0600" -->
<!-- isosent="20070404130719" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI error when using MPI_Comm_spawn" -->
<!-- id="C238FF28.876F%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="s611000a.037_at_n6mcgw16.cchmc.org" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-04 09:07:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3012.php">pooja_at_[hidden]: "[OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<li><strong>Previous message:</strong> <a href="3010.php">Marcin Dulak: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<li><strong>Maybe in reply to:</strong> <a href="2974.php">Prakash Velayutham: "[OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Prakash
<br>
<p>I can't really test this solution as the Torque dynamic host allocator
<br>
appears to be something you are adding to that system (so it isn't part of
<br>
the released code). However, the attached code should cleanly add any nodes
<br>
to any existing allocation known to OpenRTE.
<br>
<p>I hope to resume working on the &quot;next-gen&quot; OpenRTE allocation system in the
<br>
fairly near future. This will include support for dynamically obtaining and
<br>
updating host allocations via (hopefully!) convenient APIs. Since I expect
<br>
that won't be included in the Open MPI releases until at least 1.3 (release
<br>
date not known yet, but sometime in the not-near future), I will post a
<br>
patch on the OpenRTE web site in the interim - I'll announce that here as
<br>
well so people can go pick it up if they need that capability.
<br>
<p>Please let me know how this works and/or any changes you have to make to it
<br>
to get it to work. Feel free to holler for help.
<br>
<p>Ralph
<br>
<p><p><p>On 4/2/07 11:07 AM, &quot;Prakash Velayutham&quot; &lt;Prakash.Velayutham_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Ralph. I will wait for your Torque dynamic host addition solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Prakash
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rhc_at_[hidden] 04/02/07 1:00 PM &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Hi Prakash
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is telling you that you have an error in the comm_spawn command itself.
</span><br>
<span class="quotelev1">&gt; I am no expert there, so I'll have to let someone else identify it for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are no limits to launching on nodes in a hostfile - they are all
</span><br>
<span class="quotelev1">&gt; automatically considered &quot;allocated&quot; when the file is read. If you had the
</span><br>
<span class="quotelev1">&gt; node name in the file, then there is no &quot;dynamic&quot; addition of nodes going
</span><br>
<span class="quotelev1">&gt; on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meantime, I am going to send you a different solution to dynamically adding
</span><br>
<span class="quotelev1">&gt; nodes under Torque (or any other resource manager).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/2/07 10:53 AM, &quot;Prakash Velayutham&quot; &lt;Prakash.Velayutham_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the patch. I still do not know the internals of Open MPI, so can't
</span><br>
<span class="quotelev2">&gt;&gt; test this right away. But here is another test I ran and that failed too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have now removed Torque from the equation. I am NOT requesting nodes
</span><br>
<span class="quotelev2">&gt;&gt; through
</span><br>
<span class="quotelev2">&gt;&gt; Torque. I SSH to a compute node and start up the code as below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; prakash_at_wins04:~/thesis/CS/Samples&gt;mpirun -np 4 --bynode --hostfile
</span><br>
<span class="quotelev2">&gt;&gt; machinefile ./parallel.laplace
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [wins01:17699] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev2">&gt;&gt; [wins01:17699] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [wins01:17699] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev2">&gt;&gt; [wins01:17699] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 1 with PID 25074 on node wins02 exited on signal
</span><br>
<span class="quotelev2">&gt;&gt; 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt; 2 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What happened here? Why would orted not let me spawn on new nodes? What kind
</span><br>
<span class="quotelev2">&gt;&gt; of restrictions apply in this case? I even have the new node name in the
</span><br>
<span class="quotelev2">&gt;&gt; hostfile (machinefile), just in case.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Prakash
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jbuisson_at_[hidden] 04/02/07 12:34 PM &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The runtime underneath Open MPI (called OpenRTE) will not allow you to spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes on nodes outside of your allocation. This is for several reasons,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but primarily because (a) we only know about the nodes that were allocated,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so we have no idea how to spawn a process anywhere else, and (b) most
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resource managers wouldn't let us do it anyway.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I gather you have some node that you know about and have hard-coded into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your application? How do you know the name of the node if it isn't in your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation??
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Because I can give that names to OpenMPI (or OpenRTE, or whatever). I
</span><br>
<span class="quotelev2">&gt;&gt; also would like to do the same, and I don't want OpenMPI to restrict to
</span><br>
<span class="quotelev2">&gt;&gt; what it thinks to be the allocation, while I'm sure to know better than
</span><br>
<span class="quotelev2">&gt;&gt; it what I am doing.
</span><br>
<span class="quotelev2">&gt;&gt; The concept of nodes being in allocations fixed at launch-time is really
</span><br>
<span class="quotelev2">&gt;&gt; rigid; and it prevents the application (or whatever else) to modify the
</span><br>
<span class="quotelev2">&gt;&gt; allocation at runtime, which may be quite nice.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is an ugly patch I've quickly done for my own use, which changes
</span><br>
<span class="quotelev2">&gt;&gt; the round-robin rmaps such that is first allocates the hosts to the
</span><br>
<span class="quotelev2">&gt;&gt; rmgr, as a copy&amp;paste of some code in the dash_host ras component. It's
</span><br>
<span class="quotelev2">&gt;&gt; far from being bugfree, but it can be a startpoint to hack.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeremy
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 4/2/07 10:05 AM, &quot;Prakash Velayutham&quot; &lt;Prakash.Velayutham_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have built Open MPI (1.2) with run-time environment enabled for Torque
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (2.1.6) resource manager. Initially I am requesting 4 nodes (1 CPU each)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from Torque. The from inside of my MPI code I am trying to spawn more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes to nodes outside of Torque-assigned nodes using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Comm_spawn, but this is failing with an error below:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [wins04:13564] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [wins04:13564] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [wins04:13564] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [wins04:13564] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that job rank 1 with PID 15070 on node wins03 exited on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 additional processes aborted (not shown)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #################################
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         MPI_Info info;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         MPI_Comm comm, *intercomm;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         char *key, *value;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         key = &quot;host&quot;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         value = &quot;wins08&quot;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         rc1 = MPI_Info_create(&amp;info);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         rc1 = MPI_Info_set(info, key, value);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         rc1 = MPI_Comm_spawn(slave,MPI_ARGV_NULL, 1, info, 0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_COMM_WORLD, intercomm, arr);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ###################################################
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Would this work as it is or is something wrong with my assumption? Is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenRTE stopping me from spawning processes outside of the initially
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocated nodes through Torque?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Prakash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<p><p>
<br><p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3011/test.c">test.c</a>
</ul>
<!-- attachment="test.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3012.php">pooja_at_[hidden]: "[OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<li><strong>Previous message:</strong> <a href="3010.php">Marcin Dulak: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<li><strong>Maybe in reply to:</strong> <a href="2974.php">Prakash Velayutham: "[OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
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
