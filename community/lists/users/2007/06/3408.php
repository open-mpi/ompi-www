<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  8 01:11:47 2007" -->
<!-- isoreceived="20070608051147" -->
<!-- sent="Fri, 8 Jun 2007 01:11:36 -0400" -->
<!-- isosent="20070608051136" -->
<!-- name="Aaron Thompson" -->
<!-- email="aaron.p.thompson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with DL POLY" -->
<!-- id="83814C2C-4C98-4385-9F7C-6249E0623E4A_at_vanderbilt.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9F548661-6E3E-47EB-846A-F3DCF3ACBAEF_at_umich.edu" -->
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
<strong>From:</strong> Aaron Thompson (<em>aaron.p.thompson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-08 01:11:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3409.php">Code Master: "[OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<li><strong>Previous message:</strong> <a href="3407.php">Code Master: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>In reply to:</strong> <a href="3404.php">Brock Palen: "Re: [OMPI users] Issues with DL POLY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3405.php">Michael Edwards: "Re: [OMPI users] Issues with DL POLY"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Very interesting, I certainly hope that my problem is this and not  
<br>
some kind of error.  I'll put the program on some more nodes and run  
<br>
some tests and see what runs fastest.
<br>
My only experience so far with MPI is with LAMMPS, and the simulation  
<br>
I ran had an almost linear speedup from 1 -&gt; 10 machines (11 -&gt; 1.2  
<br>
hours), very satisfying!
<br>
<p>Aaron Thompson
<br>
Vanderbilt University
<br>
aaron.p.thompson_at_[hidden]
<br>
<p><p><p>On Jun 7, 2007, at 8:44 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; We have a few users using DLPOLY  with OMPI.  Running just fine.
</span><br>
<span class="quotelev1">&gt; Watch out what kind of simulation you are doing like all MD
</span><br>
<span class="quotelev1">&gt; software,  not all simulations are better in parallel.  In some the
</span><br>
<span class="quotelev1">&gt; comunication overhead is much worse than running on just one cpu.  I
</span><br>
<span class="quotelev1">&gt; see this all the time.  You could try just 2 cpus, on one node some
</span><br>
<span class="quotelev1">&gt; times that is ok (memory access vs network access)  But its not
</span><br>
<span class="quotelev1">&gt; uncommon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 7, 2007, at 8:24 PM, Aaron Thompson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 	Does anyone have experience using DL POLY with OpenMPI?  I've gotten
</span><br>
<span class="quotelev2">&gt;&gt; it to compile, but when I run a simulation using mpirun with two  
</span><br>
<span class="quotelev2">&gt;&gt; dual-
</span><br>
<span class="quotelev2">&gt;&gt; processor machines, it runs a little *slower* than on one CPU on one
</span><br>
<span class="quotelev2">&gt;&gt; machine!  Yet the program is running two instances on each node.  Any
</span><br>
<span class="quotelev2">&gt;&gt; ideas?  The test programs included with OpenMPI show that it is
</span><br>
<span class="quotelev2">&gt;&gt; running correctly across multiple nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 	Sorry if this is a little off-topic, I wasn't able to find help on
</span><br>
<span class="quotelev2">&gt;&gt; the official DL POLY mailing list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	Thank you!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aaron Thompson
</span><br>
<span class="quotelev2">&gt;&gt; Vanderbilt University
</span><br>
<span class="quotelev2">&gt;&gt; aaron.p.thompson_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3409.php">Code Master: "[OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<li><strong>Previous message:</strong> <a href="3407.php">Code Master: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>In reply to:</strong> <a href="3404.php">Brock Palen: "Re: [OMPI users] Issues with DL POLY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3405.php">Michael Edwards: "Re: [OMPI users] Issues with DL POLY"</a>
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
