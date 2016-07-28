<?
$subject_val = "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  3 12:58:33 2009" -->
<!-- isoreceived="20090703165833" -->
<!-- sent="Fri, 3 Jul 2009 10:58:18 -0600" -->
<!-- isosent="20090703165818" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics" -->
<!-- id="80D1D367-A036-464C-9878-C2FBC031F958_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A4E2E6C.1000707_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-03 12:58:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9818.php">Luis Vitorio Cargnini: "[OMPI users] MPI and C++"</a>
<li><strong>Previous message:</strong> <a href="9816.php">Simone Pellegrini: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>In reply to:</strong> <a href="9816.php">Simone Pellegrini: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
app0 will have ranks 0-2, app2 will have rank 3-(2+x), app3 will have  
<br>
rank....you get the picture.
<br>
<p>On Jul 3, 2009, at 10:14 AM, Simone Pellegrini wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sure:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --np 3 mpi_app1 &quot;app1_args&quot; : -np x mpi_app2 &quot;app2_args&quot; : - 
</span><br>
<span class="quotelev2">&gt;&gt; np y mpi_app3 &quot;app3_args&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Nice, but what the implication with the process rank?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I assume that app1 will have rank 0, app2 rank 1 and app3 rank  
</span><br>
<span class="quotelev1">&gt; 3? or there are no assumption that can me made?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks again, regards Simone
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 3, 2009, at 9:36 AM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; current implementation of mpirun starts the executable in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different nodes. For some reason I need to start different MPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; applications across nodes and I want to use MPI to communicate  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; among these applications. For short I want to breakdown the SPMD  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model, something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --np 3 mpi_app1 &quot;app1_args&quot;, mpi_app2, &quot;app2_args&quot;,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_app3, &quot;app3_args&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it possible to have this kind of behavior with the current  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation of mpirun?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if not... it's implement it via changing the mpirun and/or mpiexec  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; routines or does it implies radical changes to the entire Open MPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regards, Simone
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="9818.php">Luis Vitorio Cargnini: "[OMPI users] MPI and C++"</a>
<li><strong>Previous message:</strong> <a href="9816.php">Simone Pellegrini: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>In reply to:</strong> <a href="9816.php">Simone Pellegrini: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
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
