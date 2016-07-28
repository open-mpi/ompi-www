<?
$subject_val = "Re: [OMPI users] about using mpi-thread-multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 13 11:21:13 2014" -->
<!-- isoreceived="20140913152113" -->
<!-- sent="Sat, 13 Sep 2014 11:21:12 -0400" -->
<!-- isosent="20140913152112" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] about using mpi-thread-multiple" -->
<!-- id="541460E8.6080902_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b01be62bce7b29b29abaa2d839509846_at_inf.ufpr.br" -->
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
<strong>Subject:</strong> Re: [OMPI users] about using mpi-thread-multiple<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-13 11:21:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25329.php">Ahmed Salama: "[OMPI users] oepnmpi-1.8.2 cann't complete configure"</a>
<li><strong>Previous message:</strong> <a href="25327.php">Ralph Castain: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<li><strong>In reply to:</strong> <a href="25326.php">etcamargo: "[OMPI users] about using mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
You need to compile OpenMPI with --enable-mpi-thread-multiple. However, 
<br>
OpenMPI used to have problem with that level of threading. Is that still 
<br>
the case in the 1.8 series ? I know in 1.6 series, that was a no go. It 
<br>
caused all sorts of hanging in the openib BTL.
<br>
<p>If the problems are not solved in the 1.8 series and you really need 
<br>
that level of threading, you may want to take a look to mvapich2 which I 
<br>
believe supports thread multiple.
<br>
<p>Maxime
<br>
<p>Le 2014-09-12 14:43, etcamargo a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to know what is the mpi version recomended for running 
</span><br>
<span class="quotelev1">&gt; multiple mpi call per process, i.e., MPI_THREAD_MULTIPLE in 
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Edson
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25326.php">http://www.open-mpi.org/community/lists/users/2014/09/25326.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25329.php">Ahmed Salama: "[OMPI users] oepnmpi-1.8.2 cann't complete configure"</a>
<li><strong>Previous message:</strong> <a href="25327.php">Ralph Castain: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<li><strong>In reply to:</strong> <a href="25326.php">etcamargo: "[OMPI users] about using mpi-thread-multiple"</a>
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
