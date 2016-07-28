<?
$subject_val = "[OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  8 10:59:19 2010" -->
<!-- isoreceived="20101208155919" -->
<!-- sent="Wed, 8 Dec 2010 16:59:12 +0100" -->
<!-- isosent="20101208155912" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="[OMPI users] Trouble with IPM &amp;amp; OpenMPI on SGI Altix" -->
<!-- id="4CFFAB50.9020809_at_cern.ch" -->
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
<strong>Subject:</strong> [OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix<br>
<strong>From:</strong> Gilbert Grosdidier (<em>Gilbert.Grosdidier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-08 10:59:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15040.php">ºî½Ü: "[OMPI users] questions about the openib component"</a>
<li><strong>Previous message:</strong> <a href="15038.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15160.php">Jeff Squyres: "Re: [OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix"</a>
<li><strong>Reply:</strong> <a href="15160.php">Jeff Squyres: "Re: [OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour,
<br>
<p>&nbsp;&nbsp;I have trouble when trying to compile&amp;  run IPM on an SGI Altix cluster.
<br>
<p>&nbsp;&nbsp;The issue is: this cluster is providing a default SGI MPT
<br>
implementation of MPI,
<br>
but I want to use a private installation of OpenMPI 1.4.3 instead.
<br>
<p>1) When I compile IPM as recommended, everything works fine, but, clearly
<br>
the shared lib which is built is aiming at the default SGI-MPT install.
<br>
The configure command line was:
<br>
./configure --with-compiler=INTEL --prefix=/home/myhome/ipm/ipmoicc/ipm
<br>
<p>2) When trying to run the application with the relevant LD_PRELOAD, this
<br>
failure occurs:
<br>
mpiexec: symbol lookup error:
<br>
/home/myhome/ipm/ipmoicc/ipm/lib/libipm.so: undefined symbol:
<br>
mpi_sgi_status_ignore
<br>
leading to the diagnostic above.
<br>
<p>3) Of course, if one forces the linking of the application with -lipm,
<br>
the same kind of culprit is found:
<br>
undefined reference to &#171; mpi_sgi_status_ignore &#187;
<br>
<p>&nbsp;&nbsp;My feeling is I am missing the right way to make IPM pointing at my
<br>
private install of OpenMPI
<br>
at IPM compile time. How to achieve this, please ? I found no indication
<br>
on the Web, unfortunately, looking MPI or IPM ways :-)
<br>
<p>&nbsp;&nbsp;Thanks in advance for any hint,   Regards,   G.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15040.php">ºî½Ü: "[OMPI users] questions about the openib component"</a>
<li><strong>Previous message:</strong> <a href="15038.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15160.php">Jeff Squyres: "Re: [OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix"</a>
<li><strong>Reply:</strong> <a href="15160.php">Jeff Squyres: "Re: [OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix"</a>
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
