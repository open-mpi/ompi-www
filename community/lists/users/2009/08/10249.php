<?
$subject_val = "[OMPI users] pipes system limit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 11:21:22 2009" -->
<!-- isoreceived="20090807152122" -->
<!-- sent="Fri, 07 Aug 2009 17:21:16 +0200" -->
<!-- isosent="20090807152116" -->
<!-- name="Yann JOBIC" -->
<!-- email="jobic_at_[hidden]" -->
<!-- subject="[OMPI users] pipes system limit" -->
<!-- id="4A7C466C.1090002_at_polytech.univ-mrs.fr" -->
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
<strong>Subject:</strong> [OMPI users] pipes system limit<br>
<strong>From:</strong> Yann JOBIC (<em>jobic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-07 11:21:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10250.php">Rolf Vandevaart: "Re: [OMPI users] pipes system limit"</a>
<li><strong>Previous message:</strong> <a href="10248.php">Craig Tierney: "[OMPI users] Failure trying to use tuned collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10250.php">Rolf Vandevaart: "Re: [OMPI users] pipes system limit"</a>
<li><strong>Reply:</strong> <a href="10250.php">Rolf Vandevaart: "Re: [OMPI users] pipes system limit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I'm using hpc8.2 :
<br>
Lidia-jobic% ompi_info
<br>
Displaying Open MPI information for 32-bit ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: ClusterTools 8.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.3.3r21324-ct8.2-b09j-r40
<br>
[...]
<br>
<p>And i've got a X4600 machine (8*4 cores).
<br>
<p>When i'm trying to run a 32 processor jobs, i've got :
<br>
<p>Lidia-jobic% mpiexec --mca opal_set_max_sys_limits 1 -n 32 ./exe
<br>
[Lidia:29384] [[61597,0],0] ORTE_ERROR_LOG: The system limit on number 
<br>
of pipes a process can open was reached in file base/iof_base_setup.c at 
<br>
line 112
<br>
[Lidia:29384] [[61597,0],0] ORTE_ERROR_LOG: The system limit on number 
<br>
of pipes a process can open was reached in file odls_default_module.c at 
<br>
line 203
<br>
[Lidia:29384] [[61597,0],0] ORTE_ERROR_LOG: The system limit on number 
<br>
of network connections a process can open was reached in file oob_tcp.c 
<br>
at line 446
<br>
--------------------------------------------------------------------------
<br>
Error: system limit exceeded on number of network connections that can 
<br>
be open
<br>
<p>This can be resolved by setting the mca parameter 
<br>
opal_set_max_sys_limits to 1,
<br>
increasing your limit descriptor setting (using limit or ulimit commands),
<br>
or asking the system administrator to increase the system limit.
<br>
--------------------------------------------------------------------------
<br>
<p>I tried the ulimit, the mca parameter, i've got no idea of where to look at.
<br>
I've got the same computer under linux, and it's working fine...
<br>
<p>Have you seen it ?
<br>
Do you know a way to bypass it ?
<br>
<p>Many thanks,
<br>
<p>Yann
<br>
<p><p><pre>
-- 
___________________________
Yann JOBIC
HPC engineer
Polytech Marseille DME
IUSTI-CNRS UMR 6595
Technop&#244;le de Ch&#226;teau Gombert
5 rue Enrico Fermi
13453 Marseille cedex 13
Tel : (33) 4 91 10 69 39
  ou  (33) 4 91 10 69 43
Fax : (33) 4 91 10 69 69 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10250.php">Rolf Vandevaart: "Re: [OMPI users] pipes system limit"</a>
<li><strong>Previous message:</strong> <a href="10248.php">Craig Tierney: "[OMPI users] Failure trying to use tuned collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10250.php">Rolf Vandevaart: "Re: [OMPI users] pipes system limit"</a>
<li><strong>Reply:</strong> <a href="10250.php">Rolf Vandevaart: "Re: [OMPI users] pipes system limit"</a>
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
