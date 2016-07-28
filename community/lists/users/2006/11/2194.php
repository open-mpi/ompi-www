<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 20 15:26:01 2006" -->
<!-- isoreceived="20061120202601" -->
<!-- sent="Mon, 20 Nov 2006 13:25:55 -0700" -->
<!-- isosent="20061120202555" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] myrinet mx and openmpi using solaris, sun compilers" -->
<!-- id="45620F53.806_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.GSO.4.53.0611201939260.3758_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-20 15:25:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2195.php">Maestas, Christopher Daniel: "[OMPI users] Quote on mvapich site"</a>
<li><strong>Previous message:</strong> <a href="2193.php">Lydia Heck: "[OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<li><strong>In reply to:</strong> <a href="2193.php">Lydia Heck: "[OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2197.php">Lydia Heck: "Re: [OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;m2001(120) &gt; mpirun -np 6 -hostfile hostsfile -mca btl mx,self  b_eff
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This does appear to be a bug, although you are using the MX BTL. Our 
<br>
higher performance path is the MX MTL. To use this try:
<br>
<p>mpirun -np 6 -hostfile hostsfile -mca pml cm b_eff
<br>
<p>Also, just for grins, could you try:
<br>
<p>mpirun -np 6 -hostfile hostsfile -mca btl mx,sm,self b_eff
<br>
<p>This will use the BTL interface but provides Shared Memory between 
<br>
processes on the same node.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;Process 0.1.0 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt;usable components.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;Process 0.1.2 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt;usable components.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;Process 0.1.4 is unable to reach 0.1.4 for MPI communication.
</span><br>
<span class="quotelev1">&gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt;usable components.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt;usable components.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;Process 0.1.5 is unable to reach 0.1.4 for MPI communication.
</span><br>
<span class="quotelev1">&gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt;usable components.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;Process 0.1.3 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt;usable components.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt;problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt;additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt;developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt;problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt;additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt;developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt;problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt;additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt;developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;*** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;*** before MPI was initialized
</span><br>
<span class="quotelev1">&gt;*** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;*** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;*** before MPI was initialized
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt;problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt;additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt;developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;*** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;*** before MPI was initialized
</span><br>
<span class="quotelev1">&gt;*** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;*** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;m2001(121) &gt; mpirun -np 4 -hostfile hostsfile -mca btl mx b_eff
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;Process 0.1.0 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt;usable components.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt;usable components.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;Process 0.1.2 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt;usable components.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;Process 0.1.3 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt;usable components.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt;problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt;additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt;developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt;problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt;additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt;developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;*** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;*** before MPI was initialized
</span><br>
<span class="quotelev1">&gt;*** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;*** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;*** before MPI was initialized
</span><br>
<span class="quotelev1">&gt;*** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt;problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt;additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt;developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;*** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;*** before MPI was initialized
</span><br>
<span class="quotelev1">&gt;*** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt;problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt;additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt;developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;*** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;*** before MPI was initialized
</span><br>
<span class="quotelev1">&gt;*** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------
</span><br>
<span class="quotelev1">&gt;Dr E L  Heck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;University of Durham
</span><br>
<span class="quotelev1">&gt;Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt;Ogden Centre
</span><br>
<span class="quotelev1">&gt;Department of Physics
</span><br>
<span class="quotelev1">&gt;South Road
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;DURHAM, DH1 3LE
</span><br>
<span class="quotelev1">&gt;United Kingdom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt;Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt;___________________________________________
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2195.php">Maestas, Christopher Daniel: "[OMPI users] Quote on mvapich site"</a>
<li><strong>Previous message:</strong> <a href="2193.php">Lydia Heck: "[OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<li><strong>In reply to:</strong> <a href="2193.php">Lydia Heck: "[OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2197.php">Lydia Heck: "Re: [OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
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
