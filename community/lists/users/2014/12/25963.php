<?
$subject_val = "[OMPI users] ERROR: C_FUNLOC function";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 12:39:26 2014" -->
<!-- isoreceived="20141211173926" -->
<!-- sent="Thu, 11 Dec 2014 18:28:08 +0100 (CET)" -->
<!-- isosent="20141211172808" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] ERROR: C_FUNLOC function" -->
<!-- id="201412111728.sBBHS8IM022093_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] ERROR: C_FUNLOC function<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 12:28:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25964.php">Jorge D'Elia: "[OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Previous message:</strong> <a href="25962.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25992.php">Gilles Gouaillardet: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Reply:</strong> <a href="25992.php">Gilles Gouaillardet: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Maybe reply:</strong> <a href="25993.php">Siegmar Gross: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Maybe reply:</strong> <a href="26012.php">Siegmar Gross: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Maybe reply:</strong> <a href="26032.php">Siegmar Gross: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>will you have the time to fix the Fortran problem for the new Oracle
<br>
Solaris Studio 12.4 compiler suite in openmpi-1.8.4?
<br>
<p>tyr openmpi-1.8.4rc2-SunOS.sparc.64_cc 103 tail -15 log.make.SunOS.sparc.64_cc 
<br>
&nbsp;&nbsp;PPFC     comm_compare_f08.lo
<br>
&nbsp;&nbsp;PPFC     comm_connect_f08.lo
<br>
&nbsp;&nbsp;PPFC     comm_create_errhandler_f08.lo
<br>
<p>&nbsp;&nbsp;&nbsp;fn = c_funloc(comm_errhandler_fn)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^                   
<br>
&quot;../../../../../openmpi-1.8.4rc2/ompi/mpi/fortran/use-mpi-f08/comm_create_errhan
<br>
dler_f08.F90&quot;, Line = 22, Column = 18: ERROR: C_FUNLOC function argument must be 
<br>
a procedure that is interoperable or a procedure pointer associated with an 
<br>
interoperable procedure.
<br>
...
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25964.php">Jorge D'Elia: "[OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Previous message:</strong> <a href="25962.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25992.php">Gilles Gouaillardet: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Reply:</strong> <a href="25992.php">Gilles Gouaillardet: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Maybe reply:</strong> <a href="25993.php">Siegmar Gross: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Maybe reply:</strong> <a href="26012.php">Siegmar Gross: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Maybe reply:</strong> <a href="26032.php">Siegmar Gross: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
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
