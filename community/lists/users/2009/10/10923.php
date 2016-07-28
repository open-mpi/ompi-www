<?
$subject_val = "[OMPI users] mpirun failure";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 17 13:29:43 2009" -->
<!-- isoreceived="20091017172943" -->
<!-- sent="Sat, 17 Oct 2009 19:29:37 +0200" -->
<!-- isosent="20091017172937" -->
<!-- name="Oswald Benedikt" -->
<!-- email="Benedikt.Oswald_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun failure" -->
<!-- id="0C9CAFE8C4E5CA49884E636AE1D7CD690358D87F_at_MAILBOX0B.psi.ch" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] mpirun failure<br>
<strong>From:</strong> Oswald Benedikt (<em>Benedikt.Oswald_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-17 13:29:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10924.php">Ralph Castain: "Re: [OMPI users] mpirun failure"</a>
<li><strong>Previous message:</strong> <a href="10922.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. card and Mellanox infiniband cards."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10924.php">Ralph Castain: "Re: [OMPI users] mpirun failure"</a>
<li><strong>Reply:</strong> <a href="10924.php">Ralph Castain: "Re: [OMPI users] mpirun failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear open-mpi users / developers, maybe this problem has been treated before but at least I can not find it:
<br>
<p>I have tried both open mpi 1.3.2 and 1.3.3 on Mac OS X (10.5.8). Compilation and installation of openmpi
<br>
works well, also compilation and linking of users applications. However, when I want to start an application
<br>
with mpirun, it crashes, both for open mpi 1.3.3. and 1.3.2 as follows:
<br>
<p><p><p>benedikt-oswalds-macbook-pro:mieScatteringDispersive benediktoswald$ mpirun -np 2 ../../../hades3d/hades3d --option-file=mieScatteringDispersive.job
<br>
[benedikt-oswalds-macbook-pro.local:50793] [[7314,1],0] ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-1.3/orte/mca/ess/env/ess_env_module.c at line 235
<br>
[benedikt-oswalds-macbook-pro.local:50793] [[7314,1],0] ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-1.3/orte/mca/ess/env/ess_env_module.c at line 261
<br>
[benedikt-oswalds-macbook-pro.local:50794] [[7314,1],1] ORTE_ERROR_LOG: Value out of bounds in file ../../../../openmpi-1.3/orte/mca/ess/base/ess_base_nidmap.c at line 153
<br>
[benedikt-oswalds-macbook-pro.local:50794] [[7314,1],1] ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-1.3/orte/mca/ess/env/ess_env_module.c at line 235
<br>
[benedikt-oswalds-macbook-pro.local:50794] [[7314,1],1] ORTE_ERROR_LOG: Value out of bounds in file ../../../../openmpi-1.3/orte/mca/ess/base/ess_base_nidmap.c at line 153
<br>
[benedikt-oswalds-macbook-pro.local:50794] [[7314,1],1] ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-1.3/orte/mca/ess/env/ess_env_module.c at line 261
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
<p>&nbsp;&nbsp;orte_grpcomm_modex failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[benedikt-oswalds-macbook-pro.local:50794] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
[benedikt-oswalds-macbook-pro.local:50794] [[7314,1],1] ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-1.3/orte/mca/ess/env/ess_env_module.c at line 297
<br>
[benedikt-oswalds-macbook-pro.local:50794] [[7314,1],1] ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-1.3/orte/mca/grpcomm/bad/grpcomm_bad_module.c at line 559
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 50794 on
<br>
node benedikt-oswalds-macbook-pro.local exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p><p>Can anyone comment on this ? Is this a basic installation or path problem ?
<br>
<p>openmpi 1.3 does not show this problem.
<br>
<p>Thanks, Benedikt
<br>
<p><p><p><p>------------------------------------------------------------------------------------------------------------------
<br>
Benedikt Oswald, Dr. sc. techn., dipl. El. Ing. ETH, www.psi.ch, Computational Accelerator Scientist
<br>
Paul Scherrer  Institute (PSI), CH-5232 Villigen, Suisse, benedikt.oswald_at_[hidden], +41(0)56 310 32 12
<br>
&quot;Passion is required for any great work, and for the Revolution passion and audacity are required in big doses.&quot;, 
<br>
Ernesto 'Che' Guevara, Letter to his parents.
<br>
<a href="http://maxwell.psi.ch/amaswiki/index.php/User:BenediktOswald">http://maxwell.psi.ch/amaswiki/index.php/User:BenediktOswald</a> 
<br>
------------------------------------------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10924.php">Ralph Castain: "Re: [OMPI users] mpirun failure"</a>
<li><strong>Previous message:</strong> <a href="10922.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. card and Mellanox infiniband cards."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10924.php">Ralph Castain: "Re: [OMPI users] mpirun failure"</a>
<li><strong>Reply:</strong> <a href="10924.php">Ralph Castain: "Re: [OMPI users] mpirun failure"</a>
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
