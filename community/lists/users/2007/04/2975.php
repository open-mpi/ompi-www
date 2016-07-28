<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  2 12:11:35 2007" -->
<!-- isoreceived="20070402161135" -->
<!-- sent="Mon, 02 Apr 2007 10:11:27 -0600" -->
<!-- isosent="20070402161127" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI error when using MPI_Comm_spawn" -->
<!-- id="C236874F.24C6%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="s610f1b7.002_at_n6mcgw16.cchmc.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-02 12:11:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2976.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="2974.php">Prakash Velayutham: "[OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="2974.php">Prakash Velayutham: "[OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2977.php">Jeremy Buisson: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="2977.php">Jeremy Buisson: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The runtime underneath Open MPI (called OpenRTE) will not allow you to spawn
<br>
processes on nodes outside of your allocation. This is for several reasons,
<br>
but primarily because (a) we only know about the nodes that were allocated,
<br>
so we have no idea how to spawn a process anywhere else, and (b) most
<br>
resource managers wouldn't let us do it anyway.
<br>
<p>I gather you have some node that you know about and have hard-coded into
<br>
your application? How do you know the name of the node if it isn't in your
<br>
allocation??
<br>
<p>Ralph
<br>
<p><p>On 4/2/07 10:05 AM, &quot;Prakash Velayutham&quot; &lt;Prakash.Velayutham_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have built Open MPI (1.2) with run-time environment enabled for Torque
</span><br>
<span class="quotelev1">&gt; (2.1.6) resource manager. Initially I am requesting 4 nodes (1 CPU each)
</span><br>
<span class="quotelev1">&gt; from Torque. The from inside of my MPI code I am trying to spawn more
</span><br>
<span class="quotelev1">&gt; processes to nodes outside of Torque-assigned nodes using
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn, but this is failing with an error below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [wins04:13564] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt; [wins04:13564] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [wins04:13564] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; [wins04:13564] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 1 with PID 15070 on node wins03 exited on
</span><br>
<span class="quotelev1">&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 2 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         MPI_Info info;
</span><br>
<span class="quotelev1">&gt;         MPI_Comm comm, *intercomm;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;         char *key, *value;
</span><br>
<span class="quotelev1">&gt;         key = &quot;host&quot;;
</span><br>
<span class="quotelev1">&gt;         value = &quot;wins08&quot;;
</span><br>
<span class="quotelev1">&gt;         rc1 = MPI_Info_create(&amp;info);
</span><br>
<span class="quotelev1">&gt;         rc1 = MPI_Info_set(info, key, value);
</span><br>
<span class="quotelev1">&gt;         rc1 = MPI_Comm_spawn(slave,MPI_ARGV_NULL, 1, info, 0,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, intercomm, arr);
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###################################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would this work as it is or is something wrong with my assumption? Is
</span><br>
<span class="quotelev1">&gt; OpenRTE stopping me from spawning processes outside of the initially
</span><br>
<span class="quotelev1">&gt; allocated nodes through Torque?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Prakash
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
<li><strong>Next message:</strong> <a href="2976.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="2974.php">Prakash Velayutham: "[OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="2974.php">Prakash Velayutham: "[OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2977.php">Jeremy Buisson: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="2977.php">Jeremy Buisson: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
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
