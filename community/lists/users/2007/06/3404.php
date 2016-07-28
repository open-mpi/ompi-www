<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 20:45:55 2007" -->
<!-- isoreceived="20070608004555" -->
<!-- sent="Thu, 7 Jun 2007 20:44:52 -0400" -->
<!-- isosent="20070608004452" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with DL POLY" -->
<!-- id="9F548661-6E3E-47EB-846A-F3DCF3ACBAEF_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C359F781-2CEC-45CD-A888-2BC360C3AAF1_at_vanderbilt.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 20:44:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3405.php">Michael Edwards: "Re: [OMPI users] Issues with DL POLY"</a>
<li><strong>Previous message:</strong> <a href="3403.php">Aaron Thompson: "[OMPI users] Issues with DL POLY"</a>
<li><strong>In reply to:</strong> <a href="3403.php">Aaron Thompson: "[OMPI users] Issues with DL POLY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3408.php">Aaron Thompson: "Re: [OMPI users] Issues with DL POLY"</a>
<li><strong>Reply:</strong> <a href="3408.php">Aaron Thompson: "Re: [OMPI users] Issues with DL POLY"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a few users using DLPOLY  with OMPI.  Running just fine.
<br>
Watch out what kind of simulation you are doing like all MD  
<br>
software,  not all simulations are better in parallel.  In some the  
<br>
comunication overhead is much worse than running on just one cpu.  I  
<br>
see this all the time.  You could try just 2 cpus, on one node some  
<br>
times that is ok (memory access vs network access)  But its not  
<br>
uncommon.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Jun 7, 2007, at 8:24 PM, Aaron Thompson wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 	Does anyone have experience using DL POLY with OpenMPI?  I've gotten
</span><br>
<span class="quotelev1">&gt; it to compile, but when I run a simulation using mpirun with two dual-
</span><br>
<span class="quotelev1">&gt; processor machines, it runs a little *slower* than on one CPU on one
</span><br>
<span class="quotelev1">&gt; machine!  Yet the program is running two instances on each node.  Any
</span><br>
<span class="quotelev1">&gt; ideas?  The test programs included with OpenMPI show that it is
</span><br>
<span class="quotelev1">&gt; running correctly across multiple nodes.
</span><br>
<span class="quotelev1">&gt; 	Sorry if this is a little off-topic, I wasn't able to find help on
</span><br>
<span class="quotelev1">&gt; the official DL POLY mailing list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aaron Thompson
</span><br>
<span class="quotelev1">&gt; Vanderbilt University
</span><br>
<span class="quotelev1">&gt; aaron.p.thompson_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3405.php">Michael Edwards: "Re: [OMPI users] Issues with DL POLY"</a>
<li><strong>Previous message:</strong> <a href="3403.php">Aaron Thompson: "[OMPI users] Issues with DL POLY"</a>
<li><strong>In reply to:</strong> <a href="3403.php">Aaron Thompson: "[OMPI users] Issues with DL POLY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3408.php">Aaron Thompson: "Re: [OMPI users] Issues with DL POLY"</a>
<li><strong>Reply:</strong> <a href="3408.php">Aaron Thompson: "Re: [OMPI users] Issues with DL POLY"</a>
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
