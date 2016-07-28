<?
$subject_val = "[OMPI users] orte_debugger_select and orte_ess_set_name failed";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 19 10:24:02 2011" -->
<!-- isoreceived="20111119152402" -->
<!-- sent="Sat, 19 Nov 2011 15:24:02 -0000" -->
<!-- isosent="20111119152402" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="[OMPI users] orte_debugger_select and orte_ess_set_name failed" -->
<!-- id="002201cca6cf$45f7ca90$d1e75fb0$_at_com" -->
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
<strong>Subject:</strong> [OMPI users] orte_debugger_select and orte_ess_set_name failed<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-19 10:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17791.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>Previous message:</strong> <a href="17789.php">MM: "Re: [OMPI users] vs2010: MPI_Address() unresolved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17799.php">Shiqing Fan: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Reply:</strong> <a href="17799.php">Shiqing Fan: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Maybe reply:</strong> <a href="17856.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Maybe reply:</strong> <a href="17857.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Trying to run my program linked against debug 1.5.4 on vs2010 fails:
<br>
<p><span class="quotelev3">&gt;&gt;&gt;mpirun -np 1 .\nhui\Debug\nhui.exe : -np 1 .\nhcomp\Debug\nhcomp.exe
</span><br>
[PCNAME:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in file C:\Program
<br>
Files\openmpi-1.5.4\orte\mca\ess\hnp\ess_hnp_module.c at line 536
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
<p>&nbsp;&nbsp;orte_debugger_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[PCNAME:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in file C:\Program
<br>
Files\openmpi-1.5.4\orte\runtime\orte_init.c at line 128
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
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[LLDNRATDHY9H4J:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in file
<br>
C:\Program Files\openmpi-1.5.4\orte\tools\orterun\orterun.c at line 616
<br>
<p>any help is appreciated,
<br>
MM
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17791.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>Previous message:</strong> <a href="17789.php">MM: "Re: [OMPI users] vs2010: MPI_Address() unresolved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17799.php">Shiqing Fan: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Reply:</strong> <a href="17799.php">Shiqing Fan: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Maybe reply:</strong> <a href="17856.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Maybe reply:</strong> <a href="17857.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
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
