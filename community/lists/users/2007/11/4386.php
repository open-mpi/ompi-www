<?
$subject_val = "[OMPI users] Slightly OT: mpi job terminates";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 14:59:22 2007" -->
<!-- isoreceived="20071101185922" -->
<!-- sent="Thu, 1 Nov 2007 18:59:16 +0000" -->
<!-- isosent="20071101185916" -->
<!-- name="Karsten Bolding" -->
<!-- email="karsten_at_[hidden]" -->
<!-- subject="[OMPI users] Slightly OT: mpi job terminates" -->
<!-- id="20071101185916.GA31984_at_dbmail.dk" -->
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
<strong>From:</strong> Karsten Bolding (<em>karsten_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-01 14:59:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4387.php">Jon Mason: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Previous message:</strong> <a href="4385.php">Adrian Knoth: "Re: [OMPI users] Too many open files Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4420.php">Jeff Squyres: "Re: [OMPI users] Slightly OT: mpi job terminates"</a>
<li><strong>Reply:</strong> <a href="4420.php">Jeff Squyres: "Re: [OMPI users] Slightly OT: mpi job terminates"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is not OpenMPI specific - but maybe somebody on the list can give a
<br>
hint.
<br>
<p>I start a parallel job with:
<br>
mpirun -np 19 -nolocal -machinefile machinefile bin/getm_prod_IFORT.0096x0096
<br>
<p>everything starts OK and the simulation carries on 2+ hours of
<br>
wall clock time - then suddenly without a trace in the logfile:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;19:48:46.172 n=        1800
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2003-09-01 05:06:00: reading 2D boundary data ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;19:49:21.710 n=        1900
<br>
&nbsp;&nbsp;&nbsp;&nbsp;19:49:50.490 n=        2000
<br>
<p>or in any system logfiles the simulation stops and all related processes
<br>
on the nodes stops.
<br>
<p>If I re-run the simulation does not stop at the same time.
<br>
<p>Does anybody have a clue where I shall search.
<br>
<p>I use a 4 machine/dual P/dual core cluster connected via GBit/s ethernet.
<br>
<p>Karsten
<br>
<p>PS: If I use MPICH I get the same problem.
<br>
<p><p><pre>
-- 
----------------------------------------------------------------------
Karsten Bolding                    Bolding &amp; Burchard Hydrodynamics
Strandgyden 25                     Phone: +45 64422058
DK-5466 Asperup                    Fax:   +45 64422068
Denmark                            Email: karsten_at_[hidden]
<a href="http://www.findvej.dk/Strandgyden25,5466,11,3">http://www.findvej.dk/Strandgyden25,5466,11,3</a>
----------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4387.php">Jon Mason: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Previous message:</strong> <a href="4385.php">Adrian Knoth: "Re: [OMPI users] Too many open files Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4420.php">Jeff Squyres: "Re: [OMPI users] Slightly OT: mpi job terminates"</a>
<li><strong>Reply:</strong> <a href="4420.php">Jeff Squyres: "Re: [OMPI users] Slightly OT: mpi job terminates"</a>
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
