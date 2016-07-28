<?
$subject_val = "[OMPI users] Fortran issues on Windows and 1.5 Trunk version";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 00:11:14 2010" -->
<!-- isoreceived="20100512041114" -->
<!-- sent="Tue, 11 May 2010 22:11:00 -0600" -->
<!-- isosent="20100512041100" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="[OMPI users] Fortran issues on Windows and 1.5 Trunk version" -->
<!-- id="4BEA2A54.9030408_at_khubla.com" -->
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
<strong>Subject:</strong> [OMPI users] Fortran issues on Windows and 1.5 Trunk version<br>
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-12 00:11:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13025.php">jody: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="13023.php">ananda.mudar_at_[hidden]: "[OMPI users] ompi-checkpoint fails sometimes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13026.php">Shiqing Fan: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<li><strong>Reply:</strong> <a href="13026.php">Shiqing Fan: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Me again (poor Shiqing, I know...).  I've been trying to get the MUMPS 
<br>
solver running on Windows with Open-MPI.  I can only use the 1.5 branch 
<br>
because that has Fortran support on Windows and 1.4.2 doesn't.  There's 
<br>
a couple of things going wrong:
<br>
<p>First, calls to MPI_Initialized from Fortran report that MPI isn't 
<br>
initialised (MUMPS has a MPI_Initialized check).  If I call 
<br>
MPI_Initialized from C or C++, it is initialized.  I'm not sure what 
<br>
this means for MPI calls from Fortran, but it could be the cause of the 
<br>
second problem, which is:  If I bypass the MPI_Initialized check in 
<br>
MUMPS, I can get the solver to start and run in one process.  If I try 
<br>
and run 2 or more processes, all the processes ramp to 100% CPU in the 
<br>
first parallel section, and sit there with no progress.  If I break in 
<br>
with the debugger, I can usually land on some MPI_IProbe calls, 
<br>
presumably looking for receives that don't exist, possibly because the 
<br>
Fortran MPI environment really isn't initialised.  After many debugger 
<br>
break-ins, I end up in a small group of calls, so it's a loop waiting 
<br>
for something.
<br>
<p>For reference, it was yesterday's 1.5 svn trunk, MUMPS 4.9.2, and Intel 
<br>
Math libraries, and a 32-bit build.  MUMPS is Fortran 90/95 but uses the 
<br>
F77 MPI interfaces.  It does run with MPICH2.  I realise that 1.5 is a 
<br>
dev branch, so it might just be too early for this to work.  I'd be 
<br>
grateful for suggestions though.  I can build and test this on Linux if 
<br>
that would help narrow this down.
<br>
<p>Damien
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13025.php">jody: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="13023.php">ananda.mudar_at_[hidden]: "[OMPI users] ompi-checkpoint fails sometimes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13026.php">Shiqing Fan: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<li><strong>Reply:</strong> <a href="13026.php">Shiqing Fan: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
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
