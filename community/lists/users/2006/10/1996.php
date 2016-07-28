<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 17 10:20:24 2006" -->
<!-- isoreceived="20061017142024" -->
<!-- sent="Tue, 17 Oct 2006 10:20:11 -0400" -->
<!-- isosent="20061017142011" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on mpi collectives" -->
<!-- id="740EF28A-41D3-4B27-A52D-C93929D04073_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A15335FBE9BD2449AF2C9EF3D1EB8EA30266F239_at_xmb-sjc-216.amer.cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-17 10:20:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1997.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>Previous message:</strong> <a href="1995.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.3a1r12121 ..."</a>
<li><strong>In reply to:</strong> <a href="1990.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] Question on mpi collectives"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Collective performance is something that we are definitely working  
<br>
on.  Some of the collectives have had a fair amount of tuning done  
<br>
(the &quot;tuned&quot; coll component), but
<br>
<p>a) not all of them are done
<br>
b) they were originally tuned for TCP networks
<br>
<p>Note that b) is somewhat misleading; the &quot;tuned&quot; coll component has  
<br>
bunches of different algorithms for each collective operation that it  
<br>
supports.  The difficult part is deciding which algorithm to use in  
<br>
each scenario.  Factors such as message size, number of processes  
<br>
involved, and network latency and bandwidth are all factors in  
<br>
deciding which to use.  The first round of &quot;decision functions&quot; (the  
<br>
run-time entity that decides which algorithm to use) assumed GB TCP  
<br>
networks.
<br>
<p>Work is ongoing at U. Tennessee to incorporate decision functions for  
<br>
other networks (infiniband and myrinet); we hope to include these in  
<br>
v1.2.
<br>
<p><p>On Oct 16, 2006, at 11:23 AM, Scott Weitzenkamp ((sweitzen)) wrote:
<br>
<p><span class="quotelev1">&gt; I see this too, and had filed
</span><br>
<span class="quotelev1">&gt; <a href="http://openib.org/bugzilla/show_bug.cgi?id=188">http://openib.org/bugzilla/show_bug.cgi?id=188</a> for it.  I think Jeff
</span><br>
<span class="quotelev1">&gt; opened a bug in the Open MPI bug tracker for this, he can comment on
</span><br>
<span class="quotelev1">&gt; when it is scheduled to be fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott Weitzenkamp
</span><br>
<span class="quotelev1">&gt; SQA and Release Manager
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Maestas,
</span><br>
<span class="quotelev2">&gt;&gt; Christopher Daniel
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, October 16, 2006 7:00 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Question on mpi collectives
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How fast/well are MPI collectives implemented in ompi?
</span><br>
<span class="quotelev2">&gt;&gt; I'm running the Intel MPI 1.1. benchmarks and seeing the need to set
</span><br>
<span class="quotelev2">&gt;&gt; wall clock times &gt; 12 hours for run sizes of 200 and 300
</span><br>
<span class="quotelev2">&gt;&gt; nodes for 1ppn
</span><br>
<span class="quotelev2">&gt;&gt; and 2ppn cases.  The collective tests that usually pass in 2ppn  
</span><br>
<span class="quotelev2">&gt;&gt; cases:
</span><br>
<span class="quotelev2">&gt;&gt;  Barrier, Reduce scatter, allreduce, bcast
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The ones that take long or never run:
</span><br>
<span class="quotelev2">&gt;&gt;  Allgather, alltoall, allgatherv
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; -cdm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1997.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>Previous message:</strong> <a href="1995.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.3a1r12121 ..."</a>
<li><strong>In reply to:</strong> <a href="1990.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] Question on mpi collectives"</a>
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
