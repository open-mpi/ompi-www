<?
$subject_val = "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  3 12:14:41 2009" -->
<!-- isoreceived="20090703161441" -->
<!-- sent="Fri, 03 Jul 2009 18:14:36 +0200" -->
<!-- isosent="20090703161436" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics" -->
<!-- id="4A4E2E6C.1000707_at_dps.uibk.ac.at" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A4B24E57-0455-4D58-8A4D-BE025246DFCD_at_open-mpi.org" -->
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
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-03 12:14:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9817.php">Ralph Castain: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>Previous message:</strong> <a href="9815.php">Ralph Castain: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>In reply to:</strong> <a href="9815.php">Ralph Castain: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9817.php">Ralph Castain: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>Reply:</strong> <a href="9817.php">Ralph Castain: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Sure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --np 3 mpi_app1 &quot;app1_args&quot; : -np x mpi_app2 &quot;app2_args&quot; : -np 
</span><br>
<span class="quotelev1">&gt; y mpi_app3 &quot;app3_args&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Nice, but what the implication with the process rank?
<br>
<p>Can I assume that app1 will have rank 0, app2 rank 1 and app3 rank 3? or 
<br>
there are no assumption that can me made?
<br>
<p>thanks again, regards Simone
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 3, 2009, at 9:36 AM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; current implementation of mpirun starts the executable in different 
</span><br>
<span class="quotelev2">&gt;&gt; nodes. For some reason I need to start different MPI applications 
</span><br>
<span class="quotelev2">&gt;&gt; across nodes and I want to use MPI to communicate among these 
</span><br>
<span class="quotelev2">&gt;&gt; applications. For short I want to breakdown the SPMD model, something 
</span><br>
<span class="quotelev2">&gt;&gt; like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --np 3 mpi_app1 &quot;app1_args&quot;, mpi_app2, &quot;app2_args&quot;, mpi_app3, 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;app3_args&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible to have this kind of behavior with the current 
</span><br>
<span class="quotelev2">&gt;&gt; implementation of mpirun?
</span><br>
<span class="quotelev2">&gt;&gt; if not... it's implement it via changing the mpirun and/or mpiexec 
</span><br>
<span class="quotelev2">&gt;&gt; routines or does it implies radical changes to the entire Open MPI 
</span><br>
<span class="quotelev2">&gt;&gt; library?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; regards, Simone
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
<li><strong>Next message:</strong> <a href="9817.php">Ralph Castain: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>Previous message:</strong> <a href="9815.php">Ralph Castain: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>In reply to:</strong> <a href="9815.php">Ralph Castain: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9817.php">Ralph Castain: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>Reply:</strong> <a href="9817.php">Ralph Castain: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
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
