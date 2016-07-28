<?
$subject_val = "[OMPI users] perhaps an openmpi bug, how best to identify?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 10:20:45 2010" -->
<!-- isoreceived="20100707142045" -->
<!-- sent="Wed, 07 Jul 2010 16:20:38 +0200" -->
<!-- isosent="20100707142038" -->
<!-- name="Olivier Marsden" -->
<!-- email="Olivier.Marsden_at_[hidden]" -->
<!-- subject="[OMPI users] perhaps an openmpi bug, how best to identify?" -->
<!-- id="4C348D36.70905_at_ec-lyon.fr" -->
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
<strong>Subject:</strong> [OMPI users] perhaps an openmpi bug, how best to identify?<br>
<strong>From:</strong> Olivier Marsden (<em>Olivier.Marsden_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 10:20:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13500.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Previous message:</strong> <a href="13498.php">Jeff Squyres: "Re: [OMPI users] Dynamic algorithms problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13500.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Reply:</strong> <a href="13500.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I am developing a fortran mpi code and currently testing it on my 
<br>
workstation,
<br>
so in a shared memory environment.
<br>
The (7 process) code runs correctly on my workstation using mpich2 (latest
<br>
stable version) &amp; ifort 11.1, using intel-mpi &amp; ifort 11.1, but  
<br>
randomly hangs the
<br>
computer (vanilla ubuntu 9.10 kernel v. 2.6.31 ) to the point where only 
<br>
a magic
<br>
sysrq combination can &quot;save&quot; me (i.e. reboot), when using
<br>
- openmpi 1.4.2 compiled from source with gcc, ifort for mpif90
<br>
- clustertools v. 8.2.1c distribution from sun/oracle, also based on 
<br>
openmpi 1.4.2, using sun f90
<br>
&nbsp;&nbsp;for mpif90
<br>
<p>I am prepared to do some testing if that can help, but don't know the 
<br>
best way to identify what's going on.
<br>
I have found no useful information in the syslog files.
<br>
<p>Regards, &amp; thanks for the work on a great open source tool,
<br>
<p><p>Olivier Marsden
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13500.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Previous message:</strong> <a href="13498.php">Jeff Squyres: "Re: [OMPI users] Dynamic algorithms problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13500.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Reply:</strong> <a href="13500.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
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
