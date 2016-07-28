<?
$subject_val = "[OMPI users] MPIIO and derived data types";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 20 17:23:19 2014" -->
<!-- isoreceived="20140720212319" -->
<!-- sent="Sun, 20 Jul 2014 14:23:16 -0700" -->
<!-- isosent="20140720212316" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] MPIIO and derived data types" -->
<!-- id="1405891396.3246.28.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> [OMPI users] MPIIO and derived data types<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-20 17:23:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24831.php">Timur Ismagilov: "Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="24829.php">Ralph Castain: "Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24838.php">Rob Latham: "Re: [OMPI users] MPIIO and derived data types"</a>
<li><strong>Reply:</strong> <a href="24838.php">Rob Latham: "Re: [OMPI users] MPIIO and derived data types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>For several years I have successfully used MPIIO in a Fortran global
<br>
atmospheric ensemble data assimilation system.  However, I always
<br>
wondered if I was fully exploiting the power of MPIIO, specifically by
<br>
using derived data types to better describe memory and file data
<br>
layouts.  All of my IO has been using elementary data types, e.g.
<br>
mpi_real, mpi_integer, for file 'datatype's, and numerous references
<br>
suggest that datatypes of derived data types could improve IO
<br>
performance.
<br>
<p>Attached is a KSH script with an included fortran program of a very
<br>
simple example of what I am now doing successfully, and poses the
<br>
question why doesn't my attempt with a derived data type work.  The
<br>
fortran program is well commented to explain each step.  I run the
<br>
script on a 4 core linux workstation, and the example is setup for that
<br>
system.  On a similar system just 'chmod' the script executable and run
<br>
it.  The script will compile amd execute the program .  It should first
<br>
show printed output from successful IO using my current approach, and
<br>
then aborts when trying my derived data type test.  What am I doing
<br>
wrong?  Any advice is appreciated.
<br>
<p>I am running OpenMpi 1.8.1 with Intel fortran, Version 12.0.3.174
<br>
<p>T. Rosmond
<br>
<p><p><p>
<br><p>
<p><hr>
<ul>
<li>application/x-shellscript attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24830/chkio.ksh">chkio.ksh</a>
</ul>
<!-- attachment="chkio.ksh" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24831.php">Timur Ismagilov: "Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="24829.php">Ralph Castain: "Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24838.php">Rob Latham: "Re: [OMPI users] MPIIO and derived data types"</a>
<li><strong>Reply:</strong> <a href="24838.php">Rob Latham: "Re: [OMPI users] MPIIO and derived data types"</a>
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
