<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 14 08:57:57 2006" -->
<!-- isoreceived="20060314135757" -->
<!-- sent="Tue, 14 Mar 2006 08:57:55 -0500" -->
<!-- isosent="20060314135755" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ethernet tuning on Solaris Opteron ?" -->
<!-- id="09114886-97E5-47E9-9789-80679A58BC5A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44169023.9080807_at_obs.ujf-grenoble.fr" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-14 08:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0851.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Previous message:</strong> <a href="0849.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>In reply to:</strong> <a href="0848.php">Pierre Valiron: "[OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 14, 2006, at 4:42 AM, Pierre Valiron wrote:
<br>
<p><span class="quotelev1">&gt; I am now attempting to tune openmpi-1.1a1r9260 on Solaris Opteron.
</span><br>
<p>I guess I should have pointed this out more clearly earlier.  Open  
<br>
MPI 1.1a1 is a nightly build of alpha release from our development  
<br>
trunk.  It isn't guaranteed to be stable.  About the only guarantee  
<br>
made is that it passed &quot;make distcheck&quot; on the Linux box we use to  
<br>
make tarballs.
<br>
<p>The Solaris patches have been moved over to the v1.0 release branch,  
<br>
so if stability is a concern, you might want to switch back to a  
<br>
nightly tarball from the v1.0 release.  We should also be having  
<br>
another beta release of the 1.0.2 release in the near future.
<br>
<p><span class="quotelev1">&gt; Each quadripro node possess two ethernet interfaces bge0 and bge1.
</span><br>
<span class="quotelev1">&gt; Interfaces bge0 are dedicated to parallel jobs and correspond to node
</span><br>
<span class="quotelev1">&gt; names pxx,
</span><br>
<span class="quotelev1">&gt; they use a dedicated gigabit switch.
</span><br>
<span class="quotelev1">&gt; Interfaces bge1 provide nfs sharing etc and correspond to node  
</span><br>
<span class="quotelev1">&gt; names nxx
</span><br>
<span class="quotelev1">&gt; over another gigabit switch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) I allocated 4 quadripro nodes.
</span><br>
<span class="quotelev1">&gt; As documented in the FAQ, mpirun -np 4 -hostfile $OAR_FILE_NODES  
</span><br>
<span class="quotelev1">&gt; runs 4
</span><br>
<span class="quotelev1">&gt; tasks on the first SMP, and mpirun -np 4 -hostfile $OAR_FILE_NODES
</span><br>
<span class="quotelev1">&gt; --bynode distributes a task on each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) According to the users list, mpirun --mca pml teg should revert to
</span><br>
<span class="quotelev1">&gt; 2nd generation TCP instead of default ob1 (3rd gen). Unfortunately  
</span><br>
<span class="quotelev1">&gt; I get
</span><br>
<span class="quotelev1">&gt; the message
</span><br>
<span class="quotelev1">&gt; No available pml components were found!
</span><br>
<span class="quotelev1">&gt; Have you removed the 2nd generation TCP transport ? Do you consider  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; new ob1 is competitive now ?
</span><br>
<p>On the development trunk, we have removed the TEG PML and all the  
<br>
PTLs.  The OB1 PML provides competitive (and most of the time better)  
<br>
performance than the TEG PML for most transports.  The major issue is  
<br>
that when we added one-sided communication, we used the BTL  
<br>
transports directly.  The BTL and PTL frameworks were not designed to  
<br>
live together, so issues were caused with the TEG PML.
<br>
<p><span class="quotelev1">&gt; 3) According to the users list, tuned collective primitives are
</span><br>
<span class="quotelev1">&gt; available. Apparently they are now compiled by default, but the don't
</span><br>
<span class="quotelev1">&gt; seem functional at all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca coll tuned
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Error 0) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<p>Tuned collectives are available, but not as heavily tested as the  
<br>
basic collectives.  Do you have a test case in particular that causes  
<br>
problems?
<br>
<p><span class="quotelev1">&gt; 4) According to the FAQ and to the users list, openmpi attempts to
</span><br>
<span class="quotelev1">&gt; discover and use all interfaces. I attempted to force using bge0 only
</span><br>
<span class="quotelev1">&gt; with no success.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if_exclude bge1
</span><br>
<span class="quotelev1">&gt; [n33:04784] *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev1">&gt; [n33:04784] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [n33:04784] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [n33:04784] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 1 process killed (possibly by Open MPI)
</span><br>
<p>That definitely shouldn't happen - Can you reconfigure / compile with  
<br>
the option --enable-debug, then run with the added option --mca  
<br>
btl_base_debug 2 and send the output you see to us?  That might help  
<br>
in diagnosing the problem.
<br>
<p><span class="quotelev1">&gt; In the FAQ it is stated that a new syntax should be available soon. I
</span><br>
<span class="quotelev1">&gt; tried if it is already implemented in openmpi-1.1a1r9260
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if ^bge0,bge1
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if ^bge1
</span><br>
<span class="quotelev1">&gt; works with identical performances.
</span><br>
<p>This syntax only works for specifying component names, not interface  
<br>
names.  So you would still need to use the btl_tcp_if_include and  
<br>
btl_tcp_if_exclude options.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0851.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Previous message:</strong> <a href="0849.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>In reply to:</strong> <a href="0848.php">Pierre Valiron: "[OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
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
