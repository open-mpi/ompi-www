<?
$subject_val = "[OMPI users] Filem could not be found for one user";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 13:39:17 2014" -->
<!-- isoreceived="20140811173917" -->
<!-- sent="Mon, 11 Aug 2014 13:39:21 -0400" -->
<!-- isosent="20140811173921" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="[OMPI users] Filem could not be found for one user" -->
<!-- id="53E8FFC9.7090409_at_calculquebec.ca" -->
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
<strong>Subject:</strong> [OMPI users] Filem could not be found for one user<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 13:39:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24980.php">Ralph Castain: "Re: [OMPI users] Filem could not be found for one user"</a>
<li><strong>Previous message:</strong> <a href="24978.php">George Bosilca: "Re: [OMPI users] MPI-I/O issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24980.php">Ralph Castain: "Re: [OMPI users] Filem could not be found for one user"</a>
<li><strong>Reply:</strong> <a href="24980.php">Ralph Castain: "Re: [OMPI users] Filem could not be found for one user"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am getting a weird error when running mpiexec with one user :
<br>
<p>[mboisson_at_gpu-k20-14 helios_test]$ mpiexec -np 2 mdrunmpi -ntomp 10 -s 
<br>
prod_s6_01kcal_bb_dr -deffnm testout
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened. This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      gpu-k20-14
<br>
Framework: filem
<br>
Component: rsh
<br>
--------------------------------------------------------------------------
<br>
[gpu-k20-14:205673] mca: base: components_register: registering filem 
<br>
components
<br>
[gpu-k20-14:205673] [[56298,0],0] ORTE_ERROR_LOG: Not found in file 
<br>
ess_hnp_module.c at line 673
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
<p>&nbsp;&nbsp;&nbsp;orte_filem_base_open failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
<p><p>What is weird is that this same command works for other users, on the 
<br>
same node.
<br>
<p>Anyone know what might be going on here ?
<br>
<p>Thanks,
<br>
<p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24980.php">Ralph Castain: "Re: [OMPI users] Filem could not be found for one user"</a>
<li><strong>Previous message:</strong> <a href="24978.php">George Bosilca: "Re: [OMPI users] MPI-I/O issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24980.php">Ralph Castain: "Re: [OMPI users] Filem could not be found for one user"</a>
<li><strong>Reply:</strong> <a href="24980.php">Ralph Castain: "Re: [OMPI users] Filem could not be found for one user"</a>
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
