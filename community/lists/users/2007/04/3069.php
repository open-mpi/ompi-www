<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 12 12:41:20 2007" -->
<!-- isoreceived="20070412164120" -->
<!-- sent="Thu, 12 Apr 2007 11:41:16 -0500 (CDT)" -->
<!-- isosent="20070412164116" -->
<!-- name="Galen Arnold" -->
<!-- email="arnoldg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi tcp error..." -->
<!-- id="Pine.LNX.4.64.0704121140100.8306_at_osage.ncsa.uiuc.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0704120927470.8306_at_osage.ncsa.uiuc.edu" -->
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
<strong>From:</strong> Galen Arnold (<em>arnoldg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-12 12:41:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3070.php">Rohit_Singh_at_[hidden]: "Re: [OMPI users] OpenMPI for Windows?"</a>
<li><strong>Previous message:</strong> <a href="3068.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>In reply to:</strong> <a href="3067.php">Galen Arnold: "[OMPI users] mpi tcp error..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nevermind, found the answer in:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2005/10/0250.php">http://www.open-mpi.org/community/lists/users/2005/10/0250.php</a>
<br>
<p>&quot;-mca btl_tcp_exclude eth1 &quot;
<br>
<p>-Galen
<br>
<p>+
<br>
Galen Arnold, consulting group--system engineer
<br>
National Center for Supercomputing Applications
<br>
1205 W. Clark St.                                    (217) 244-3473
<br>
Urbana, IL 61801                                     arnoldg_at_[hidden]
<br>
<p>On Thu, 12 Apr 2007, Galen Arnold wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What was the fix last time [openmpi 1.2 is in action below] ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [arnoldg_at_honest3 mpi]$ !mpirun
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl self,sm,tcp -np 4 -machinefile hosts allall_openmpi_icc
</span><br>
<span class="quotelev1">&gt; 50 50 1000
</span><br>
<span class="quotelev1">&gt; [honest1][0,1,0][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 21119 on node honest1 exited on
</span><br>
<span class="quotelev1">&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Troy and I talked about this off-list and resolved that the issue was
</span><br>
<span class="quotelev2">&gt;&gt; with the TCP setup on the nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But it is worth noting that we had previously fixed a bug in the TCP
</span><br>
<span class="quotelev2">&gt;&gt; setup in 1.0.2 with respect to the SEGVs that Troy was seeing -- hence,
</span><br>
<span class="quotelev2">&gt;&gt; when he tested the 1.0.3 prerelease tarballs, there were no SEGVs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Galen
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; Galen Arnold, consulting group--system engineer
</span><br>
<span class="quotelev1">&gt; National Center for Supercomputing Applications
</span><br>
<span class="quotelev1">&gt; 1205 W. Clark St.                                    (217) 244-3473
</span><br>
<span class="quotelev1">&gt; Urbana, IL 61801                                     arnoldg_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3070.php">Rohit_Singh_at_[hidden]: "Re: [OMPI users] OpenMPI for Windows?"</a>
<li><strong>Previous message:</strong> <a href="3068.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>In reply to:</strong> <a href="3067.php">Galen Arnold: "[OMPI users] mpi tcp error..."</a>
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
