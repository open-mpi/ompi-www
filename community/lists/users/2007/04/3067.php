<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 12 10:49:31 2007" -->
<!-- isoreceived="20070412144931" -->
<!-- sent="Thu, 12 Apr 2007 09:49:24 -0500 (CDT)" -->
<!-- isosent="20070412144924" -->
<!-- name="Galen Arnold" -->
<!-- email="arnoldg_at_[hidden]" -->
<!-- subject="[OMPI users] mpi tcp error..." -->
<!-- id="Pine.LNX.4.64.0704120927470.8306_at_osage.ncsa.uiuc.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-04-12 10:49:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3068.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3066.php">Derrick Kondo: "[OMPI users] [CFP] EuroPVM/MPI'07"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3069.php">Galen Arnold: "Re: [OMPI users] mpi tcp error..."</a>
<li><strong>Reply:</strong> <a href="3069.php">Galen Arnold: "Re: [OMPI users] mpi tcp error..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What was the fix last time [openmpi 1.2 is in action below] ?
<br>
<p>[arnoldg_at_honest3 mpi]$ !mpirun
<br>
mpirun --mca btl self,sm,tcp -np 4 -machinefile hosts allall_openmpi_icc 
<br>
50 50 1000
<br>
[honest1][0,1,0][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() failed with errno=113
<br>
mpirun: killing job...
<br>
<p>mpirun noticed that job rank 0 with PID 21119 on node honest1 exited on 
<br>
signal 15 (Terminated).
<br>
3 additional processes aborted (not shown)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Troy and I talked about this off-list and resolved that the issue was
</span><br>
<span class="quotelev1">&gt;with the TCP setup on the nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But it is worth noting that we had previously fixed a bug in the TCP
</span><br>
<span class="quotelev1">&gt;setup in 1.0.2 with respect to the SEGVs that Troy was seeing -- hence,
</span><br>
<span class="quotelev1">&gt;when he tested the 1.0.3 prerelease tarballs, there were no SEGVs.
</span><br>
<p><p>-Galen
<br>
+
<br>
Galen Arnold, consulting group--system engineer
<br>
National Center for Supercomputing Applications
<br>
1205 W. Clark St.                                    (217) 244-3473
<br>
Urbana, IL 61801                                     arnoldg_at_[hidden]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3068.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3066.php">Derrick Kondo: "[OMPI users] [CFP] EuroPVM/MPI'07"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3069.php">Galen Arnold: "Re: [OMPI users] mpi tcp error..."</a>
<li><strong>Reply:</strong> <a href="3069.php">Galen Arnold: "Re: [OMPI users] mpi tcp error..."</a>
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
