<?
$subject_val = "[OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 05:00:20 2011" -->
<!-- isoreceived="20110906090020" -->
<!-- sent="Tue, 06 Sep 2011 11:01:18 +0200" -->
<!-- isosent="20110906090118" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&amp;quot; (-26) instead of &amp;quot;Success&amp;quot;" -->
<!-- id="4E65E15E.3000105_at_dps.uibk.ac.at" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;<br>
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-06 05:01:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17161.php">Shiqing Fan: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Previous message:</strong> <a href="17159.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17165.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Reply:</strong> <a href="17165.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
I am developing an MPI application which uses heavily MPI_Spawn. Usually 
<br>
everything works fine for the first hundred spawn but after a while the 
<br>
application exist with a curious message:
<br>
<p>[arch-top:27712] [[36904,165],0] ORTE_ERROR_LOG: Data unpack would read 
<br>
past end of buffer in file base/grpcomm_base_modex.c at line 349
<br>
[arch-top:27712] [[36904,165],0] ORTE_ERROR_LOG: Data unpack would read 
<br>
past end of buffer in file grpcomm_bad_module.c at line 518
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;&nbsp;ompi_proc_set_arch failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) 
<br>
instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** The MPI_Init_thread() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
[arch-top:27712] Abort before MPI_INIT completed successfully; not able 
<br>
to guarantee that all other processes were killed!
<br>
[arch-top:27714] [[36904,165],0] ORTE_ERROR_LOG: Data unpack would read 
<br>
past end of buffer in file base/grpcomm_base_modex.c at line 349
<br>
[arch-top:27714] [[36904,165],0] ORTE_ERROR_LOG: Data unpack would read 
<br>
past end of buffer in file grpcomm_bad_module.c at line 518
<br>
*** The MPI_Init_thread() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
[arch-top:27714] Abort before MPI_INIT completed successfully; not able 
<br>
to guarantee that all other processes were killed!
<br>
[arch-top:27226] 1 more process has sent help message help-mpi-runtime / 
<br>
mpi_init:startup:internal-failure
<br>
[arch-top:27226] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to 
<br>
see all help / error messages
<br>
<p>Also using MPI_init instead of MPI_Init_thread does not help, the same 
<br>
error occurs.
<br>
<p>Strangely the error does not occur if I run the code enabling debug in 
<br>
(-mca plm_base_verbose 5 -mca rmaps_base_verbose 5).
<br>
<p>I am using OpenMPI 1.5.3
<br>
<p>cheers, Simone
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17161.php">Shiqing Fan: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Previous message:</strong> <a href="17159.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17165.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Reply:</strong> <a href="17165.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
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
