<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 21 11:58:04 2007" -->
<!-- isoreceived="20070821155804" -->
<!-- sent="Tue, 21 Aug 2007 11:57:56 -0400" -->
<!-- isosent="20070821155756" -->
<!-- name="Jelena Pjesivac-Grbovic" -->
<!-- email="pjesa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi broadcast" -->
<!-- id="46CB0B84.6030902_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46CAF8C0.6010801_at_higgs.gen.tr" -->
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
<strong>From:</strong> Jelena Pjesivac-Grbovic (<em>pjesa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-21 11:57:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3894.php">Hiep Bui Hoang: "[OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>Previous message:</strong> <a href="3892.php">Sefa Arslan: "[OMPI users] mpi broadcast"</a>
<li><strong>In reply to:</strong> <a href="3892.php">Sefa Arslan: "[OMPI users] mpi broadcast"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sefa,
<br>
I presume you are talking about C or C++.
<br>
If yes, it depends how you allocated 2D array. If it is not continuous 
<br>
data (i.e. 1D array you are accessing in 2D manner) - you have to define 
<br>
special datatype.
<br>
Hope this helps,
<br>
Jelena
<br>
<p>Sefa Arslan wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a special way to broadcast a 2D array, or just using the
</span><br>
<span class="quotelev1">&gt; standart MPI_Bcast is enough? When I try to send/broadcast 2D arrays 
</span><br>
<span class="quotelev1">&gt; every time operation is terminated, and get   a message like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;rank 2 in job 71  XXXXX_49783   caused collective abort of all ranks 
</span><br>
<span class="quotelev1">&gt; exit status of rank 2: killed by signal 9&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sefa Arslan
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
<li><strong>Next message:</strong> <a href="3894.php">Hiep Bui Hoang: "[OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>Previous message:</strong> <a href="3892.php">Sefa Arslan: "[OMPI users] mpi broadcast"</a>
<li><strong>In reply to:</strong> <a href="3892.php">Sefa Arslan: "[OMPI users] mpi broadcast"</a>
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
