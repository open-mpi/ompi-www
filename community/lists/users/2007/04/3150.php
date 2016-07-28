<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 26 15:22:17 2007" -->
<!-- isoreceived="20070426192217" -->
<!-- sent="Thu, 26 Apr 2007 15:22:17 -0400" -->
<!-- isosent="20070426192217" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI over uDAPL doesn't work" -->
<!-- id="4630FBE9.9080707_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="462E13A6.3030207_at_lfbs.rwth-aachen.de" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-26 15:22:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3151.php">Nuno Sucena Almeida: "[OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>Previous message:</strong> <a href="3149.php">Donald Kerr: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>In reply to:</strong> <a href="3128.php">Andreas Kuntze: "[OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3180.php">Andreas Kuntze: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3180.php">Andreas Kuntze: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which uDAPL implementation are you using, over what sort of network? 
<br>
I'm guessing OpenIB/InfiniBand, but want to make sure.
<br>
<p>One other thing I noticed, you say native IB works, yet looking at your 
<br>
ompi_info/config.log neither OpenIB nor MVAPI support was enabled.
<br>
<p>Andrew
<br>
<p>Andreas Kuntze wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I finally managed to run open MPI with uDAPl but all MPI programs  hang 
</span><br>
<span class="quotelev1">&gt; up, when they use MPI_Recv. If I use TCP or native InfiniBand instead, 
</span><br>
<span class="quotelev1">&gt; it works. Maybe you have an idea where the problem could be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andreas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="3151.php">Nuno Sucena Almeida: "[OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>Previous message:</strong> <a href="3149.php">Donald Kerr: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>In reply to:</strong> <a href="3128.php">Andreas Kuntze: "[OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3180.php">Andreas Kuntze: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3180.php">Andreas Kuntze: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
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
