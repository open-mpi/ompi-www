<?
$subject_val = "[OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 13:12:41 2016" -->
<!-- isoreceived="20160420171241" -->
<!-- sent="Wed, 20 Apr 2016 19:12:30 +0200" -->
<!-- isosent="20160420171230" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8" -->
<!-- id="1caffaea-8385-b5cb-bc4a-b62e1d24cf3c_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-20 13:12:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28984.php">Siegmar Gross: "[OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490"</a>
<li><strong>Previous message:</strong> <a href="28982.php">George Bosilca: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28986.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="28986.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have built openmpi-v2.x-dev-1280-gc110ae8 on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
<br>
12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. Unfortunately I get
<br>
runtime errors for some programs.
<br>
<p><p>Sun C 5.13:
<br>
===========
<br>
<p>For all my test programs I get the same error on Solaris Sparc and
<br>
Solaris x86_64, while the programs work fine on Linux.
<br>
<p>tyr hello_1 115 mpiexec -np 2 hello_1_mpi
<br>
[tyr.informatik.hs-fulda.de:22373] [[61763,0],0] ORTE_ERROR_LOG: Not found in 
<br>
file 
<br>
../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c 
<br>
at line 638
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;opal_pmix_base_select failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
tyr hello_1 116
<br>
<p><p><p><p>GCC-5.1.0:
<br>
==========
<br>
<p>tyr spawn 121 mpiexec -np 1 --host tyr,sunpc1,linpc1,ruester spawn_multiple_master
<br>
<p>Parent process 0 running on tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;I create 3 slave processes.
<br>
<p>[tyr.informatik.hs-fulda.de:25366] PMIX ERROR: UNPACK-PAST-END in file 
<br>
../../../../../../openmpi-v2.x-dev-1280-gc110ae8/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c 
<br>
at line 829
<br>
[tyr.informatik.hs-fulda.de:25366] PMIX ERROR: UNPACK-PAST-END in file 
<br>
../../../../../../openmpi-v2.x-dev-1280-gc110ae8/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c 
<br>
at line 2176
<br>
[tyr:25377] *** An error occurred in MPI_Comm_spawn_multiple
<br>
[tyr:25377] *** reported by process [3308257281,0]
<br>
[tyr:25377] *** on communicator MPI_COMM_WORLD
<br>
[tyr:25377] *** MPI_ERR_SPAWN: could not spawn processes
<br>
[tyr:25377] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now 
<br>
abort,
<br>
[tyr:25377] ***    and potentially your MPI job)
<br>
tyr spawn 122
<br>
<p><p>I would be grateful if somebody can fix the problems. Thank you very
<br>
much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>

<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28983/hello_1_mpi.c">hello_1_mpi.c</a>
</ul>
<!-- attachment="hello_1_mpi.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28983/spawn_multiple_master.c">spawn_multiple_master.c</a>
</ul>
<!-- attachment="spawn_multiple_master.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28984.php">Siegmar Gross: "[OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490"</a>
<li><strong>Previous message:</strong> <a href="28982.php">George Bosilca: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28986.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="28986.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
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
