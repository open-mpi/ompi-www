<?
$subject_val = "[OMPI users] error on mpiexec";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 27 14:06:34 2010" -->
<!-- isoreceived="20100927180634" -->
<!-- sent="Mon, 27 Sep 2010 20:06:18 +0200" -->
<!-- isosent="20100927180618" -->
<!-- name="Kraus Philipp" -->
<!-- email="philipp.kraus_at_[hidden]" -->
<!-- subject="[OMPI users] error on mpiexec" -->
<!-- id="131F7781-0150-49AF-B3C7-39E3EB92BF7D_at_flashpixx.de" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] error on mpiexec<br>
<strong>From:</strong> Kraus Philipp (<em>philipp.kraus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-27 14:06:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14344.php">Tim Prince: "Re: [OMPI users] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="14342.php">Gabriele Fatigati: "Re: [OMPI users] Memory affinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have compiled open-mpi 1.4.2 and uses them with boost-mpi. I can  
<br>
compile and run my first example. If I run it without mpiexec  
<br>
everything works fine. If I do it with mpiexec -np 1 or 2 I would get  
<br>
messages like:
<br>
<p>[node:05126] [[582,0],0] ORTE_ERROR_LOG: Error in file  
<br>
ess_hnp_module.c at line 230
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
<p>&nbsp;&nbsp;&nbsp;orte_ras_base_open failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
<p>....
<br>
&nbsp;&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
<p>....
<br>
[node:05125] [[581,0],0] ORTE_ERROR_LOG: Error in file orted/ 
<br>
orted_main.c at line 325
<br>
[node:05124] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a  
<br>
daemon on the local node in file ess_singleton_module.c at line 381
<br>
[node:05124] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a  
<br>
daemon on the local node in file ess_singleton_module.c at line 143
<br>
[node:05124] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a  
<br>
daemon on the local node in file runtime/orte_init.c at line 132
<br>
<p>....
<br>
--------------------------------------------------------------------------
<br>
*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
<p>OpenMPI and Boost are installed in a directory under /opt and set with  
<br>
the environmental variables. I'm using the first example at <a href="http://www.boost.org/doc/libs/1_44_0/doc/html/mpi/tutorial.html">http://www.boost.org/doc/libs/1_44_0/doc/html/mpi/tutorial.html</a>
<br>
<p>I'm not sure of the problem is the Boost call or the MPI configuration.
<br>
<p>Does anyone have some ideas for solving my problem?
<br>
<p>Thanks a lot
<br>
<p>Phil
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14344.php">Tim Prince: "Re: [OMPI users] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="14342.php">Gabriele Fatigati: "Re: [OMPI users] Memory affinity"</a>
<!-- nextthread="start" -->
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
