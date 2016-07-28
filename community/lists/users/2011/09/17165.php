<?
$subject_val = "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 10:57:21 2011" -->
<!-- isoreceived="20110906145721" -->
<!-- sent="Tue, 6 Sep 2011 08:57:11 -0600" -->
<!-- isosent="20110906145711" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&amp;quot; (-26) instead of &amp;quot;Success&amp;quot;" -->
<!-- id="B30D1CF7-6A66-4871-9AD2-A7E04272DC9E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E65E15E.3000105_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-06 10:57:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17166.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Previous message:</strong> <a href="17164.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>In reply to:</strong> <a href="17160.php">Simone Pellegrini: "[OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17166.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Reply:</strong> <a href="17166.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Simone
<br>
<p>Just to clarify: is your application threaded? Could you please send the OMPI configure cmd you used?
<br>
<p>Adding the debug flags just changes the race condition. Interestingly, those values only impact the behavior of mpirun, so it looks like the race condition is occurring there.
<br>
<p><p>On Sep 6, 2011, at 3:01 AM, Simone Pellegrini wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; I am developing an MPI application which uses heavily MPI_Spawn. Usually everything works fine for the first hundred spawn but after a while the application exist with a curious message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [arch-top:27712] [[36904,165],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file base/grpcomm_base_modex.c at line 349
</span><br>
<span class="quotelev1">&gt; [arch-top:27712] [[36904,165],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file grpcomm_bad_module.c at line 518
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ompi_proc_set_arch failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init_thread() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [arch-top:27712] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; [arch-top:27714] [[36904,165],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file base/grpcomm_base_modex.c at line 349
</span><br>
<span class="quotelev1">&gt; [arch-top:27714] [[36904,165],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file grpcomm_bad_module.c at line 518
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init_thread() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [arch-top:27714] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; [arch-top:27226] 1 more process has sent help message help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; [arch-top:27226] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also using MPI_init instead of MPI_Init_thread does not help, the same error occurs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Strangely the error does not occur if I run the code enabling debug in (-mca plm_base_verbose 5 -mca rmaps_base_verbose 5).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.5.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers, Simone
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
<li><strong>Next message:</strong> <a href="17166.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Previous message:</strong> <a href="17164.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>In reply to:</strong> <a href="17160.php">Simone Pellegrini: "[OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17166.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Reply:</strong> <a href="17166.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
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
