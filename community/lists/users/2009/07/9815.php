<?
$subject_val = "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  3 11:42:21 2009" -->
<!-- isoreceived="20090703154221" -->
<!-- sent="Fri, 3 Jul 2009 09:42:07 -0600" -->
<!-- isosent="20090703154207" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics" -->
<!-- id="A4B24E57-0455-4D58-8A4D-BE025246DFCD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A4E2573.3080809_at_dps.uibk.ac.at" -->
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
<strong>Date:</strong> 2009-07-03 11:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9816.php">Simone Pellegrini: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>Previous message:</strong> <a href="9814.php">Simone Pellegrini: "[OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>In reply to:</strong> <a href="9814.php">Simone Pellegrini: "[OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9816.php">Simone Pellegrini: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>Reply:</strong> <a href="9816.php">Simone Pellegrini: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure:
<br>
<p>mpirun --np 3 mpi_app1 &quot;app1_args&quot; : -np x mpi_app2 &quot;app2_args&quot; : -np  
<br>
y mpi_app3 &quot;app3_args&quot;
<br>
<p><p>On Jul 3, 2009, at 9:36 AM, Simone Pellegrini wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; current implementation of mpirun starts the executable in different  
</span><br>
<span class="quotelev1">&gt; nodes. For some reason I need to start different MPI applications  
</span><br>
<span class="quotelev1">&gt; across nodes and I want to use MPI to communicate among these  
</span><br>
<span class="quotelev1">&gt; applications. For short I want to breakdown the SPMD model,  
</span><br>
<span class="quotelev1">&gt; something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --np 3 mpi_app1 &quot;app1_args&quot;, mpi_app2, &quot;app2_args&quot;, mpi_app3,  
</span><br>
<span class="quotelev1">&gt; &quot;app3_args&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to have this kind of behavior with the current  
</span><br>
<span class="quotelev1">&gt; implementation of mpirun?
</span><br>
<span class="quotelev1">&gt; if not... it's implement it via changing the mpirun and/or mpiexec  
</span><br>
<span class="quotelev1">&gt; routines or does it implies radical changes to the entire Open MPI  
</span><br>
<span class="quotelev1">&gt; library?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards, Simone
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
<li><strong>Next message:</strong> <a href="9816.php">Simone Pellegrini: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>Previous message:</strong> <a href="9814.php">Simone Pellegrini: "[OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>In reply to:</strong> <a href="9814.php">Simone Pellegrini: "[OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9816.php">Simone Pellegrini: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>Reply:</strong> <a href="9816.php">Simone Pellegrini: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
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
