<?
$subject_val = "[OMPI users] orte error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 08:27:13 2009" -->
<!-- isoreceived="20091209132713" -->
<!-- sent="Wed, 9 Dec 2009 15:29:47 +0200" -->
<!-- isosent="20091209132947" -->
<!-- name="Andrew McBride" -->
<!-- email="andrew.mcbride_at_[hidden]" -->
<!-- subject="[OMPI users] orte error" -->
<!-- id="0AA1523B-8687-495B-B6A1-A98ED2728BC4_at_uct.ac.za" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] orte error<br>
<strong>From:</strong> Andrew McBride (<em>andrew.mcbride_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 08:29:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11471.php">Ralph Castain: "Re: [OMPI users] orte error"</a>
<li><strong>Previous message:</strong> <a href="11469.php">Iris Pernille Lohmann: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11471.php">Ralph Castain: "Re: [OMPI users] orte error"</a>
<li><strong>Reply:</strong> <a href="11471.php">Ralph Castain: "Re: [OMPI users] orte error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I've installed trilinos using the openmpi 1.3.3 libraries. I'm configuring openmpi as follows:
<br>
/configure CXX=/usr/local/bin/g++ CC=/usr/local/bin/gcc F77=/usr/local/bin/gfortran - prefix=/Users/andrewmcbride/lib/openmpi-1.3.3/MAC
<br>
<p>Trilinos compiles without problem but the test fail (see below). I'm running a Mac with OSX10.6 (snow leopard). The mpi tests seem to run fine:
<br>
<p>bash-3.2$ ~/lib/openmpi-1.3.3/MAC/bin/mpicc hello_c.c 
<br>
bash-3.2$ ~/lib/openmpi-1.3.3/MAC/bin/mpirun -np 2 hello_
<br>
bash-3.2$ ~/lib/openmpi-1.3.3/MAC/bin/mpirun -np 2 a.out 
<br>
Hello, world, I am 0 of 2
<br>
Hello, world, I am 1 of 2
<br>
<p>I'm convinced that the problem has to do with the paths and different versions of mpi lurking on the mac. I don't want to use the version of openmpi that comes bundled with the mac for a different reason. 
<br>
<p>Any help would be most appreciated
<br>
<p>Andrew
<br>
<p><p>Start testing: Dec 09 12:18 SAST
<br>
----------------------------------------------------------
<br>
1/534 Testing: Teuchos_BLAS_test_MPI_1
<br>
1/534 Test: Teuchos_BLAS_test_MPI_1
<br>
Command: &quot;/Users/andrewmcbride/lib/openmpi-1.3.3/MAC/bin/mpiexec&quot; &quot;-np&quot; &quot;1&quot; &quot;/Users/andrewmcbride/lib/trilinos-10.0.2-Source/MAC_SL/packages/teuchos/test/BLAS/Teuchos_BLAS_test.exe&quot; &quot;-v&quot;
<br>
Directory: /Users/andrewmcbride/lib/trilinos-10.0.2-Source/MAC_SL/packages/teuchos/test/BLAS
<br>
&quot;Teuchos_BLAS_test_MPI_1&quot; start time: Dec 09 12:18 SAST
<br>
Output:
<br>
----------------------------------------------------------
<br>
[macs-mac.local:71058] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 125
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
<p>&nbsp;&nbsp;orte_ess_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[macs-mac.local:71058] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11471.php">Ralph Castain: "Re: [OMPI users] orte error"</a>
<li><strong>Previous message:</strong> <a href="11469.php">Iris Pernille Lohmann: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11471.php">Ralph Castain: "Re: [OMPI users] orte error"</a>
<li><strong>Reply:</strong> <a href="11471.php">Ralph Castain: "Re: [OMPI users] orte error"</a>
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
