<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 16 11:23:43 2006" -->
<!-- isoreceived="20061016152343" -->
<!-- sent="Mon, 16 Oct 2006 08:23:31 -0700" -->
<!-- isosent="20061016152331" -->
<!-- name="Scott Weitzenkamp \(sweitzen\)" -->
<!-- email="sweitzen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on mpi collectives" -->
<!-- id="A15335FBE9BD2449AF2C9EF3D1EB8EA30266F239_at_xmb-sjc-216.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Question on mpi collectives" -->
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
<strong>From:</strong> Scott Weitzenkamp \(sweitzen\) (<em>sweitzen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-16 11:23:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1991.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>Previous message:</strong> <a href="1989.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Maybe in reply to:</strong> <a href="1988.php">Maestas, Christopher Daniel: "[OMPI users] Question on mpi collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1996.php">Jeff Squyres: "Re: [OMPI users] Question on mpi collectives"</a>
<li><strong>Reply:</strong> <a href="1996.php">Jeff Squyres: "Re: [OMPI users] Question on mpi collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see this too, and had filed
<br>
<a href="http://openib.org/bugzilla/show_bug.cgi?id=188">http://openib.org/bugzilla/show_bug.cgi?id=188</a> for it.  I think Jeff
<br>
opened a bug in the Open MPI bug tracker for this, he can comment on
<br>
when it is scheduled to be fixed.
<br>
<p>Scott Weitzenkamp
<br>
SQA and Release Manager
<br>
Server Virtualization Business Unit
<br>
Cisco Systems
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Maestas, 
</span><br>
<span class="quotelev1">&gt; Christopher Daniel
</span><br>
<span class="quotelev1">&gt; Sent: Monday, October 16, 2006 7:00 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Question on mpi collectives
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How fast/well are MPI collectives implemented in ompi?
</span><br>
<span class="quotelev1">&gt; I'm running the Intel MPI 1.1. benchmarks and seeing the need to set
</span><br>
<span class="quotelev1">&gt; wall clock times &gt; 12 hours for run sizes of 200 and 300 
</span><br>
<span class="quotelev1">&gt; nodes for 1ppn
</span><br>
<span class="quotelev1">&gt; and 2ppn cases.  The collective tests that usually pass in 2ppn cases:
</span><br>
<span class="quotelev1">&gt;  Barrier, Reduce scatter, allreduce, bcast
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ones that take long or never run:
</span><br>
<span class="quotelev1">&gt;  Allgather, alltoall, allgatherv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -cdm
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1991.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>Previous message:</strong> <a href="1989.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Maybe in reply to:</strong> <a href="1988.php">Maestas, Christopher Daniel: "[OMPI users] Question on mpi collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1996.php">Jeff Squyres: "Re: [OMPI users] Question on mpi collectives"</a>
<li><strong>Reply:</strong> <a href="1996.php">Jeff Squyres: "Re: [OMPI users] Question on mpi collectives"</a>
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
