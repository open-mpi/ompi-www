<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 31 18:24:17 2006" -->
<!-- isoreceived="20060131232417" -->
<!-- sent="Tue, 31 Jan 2006 15:23:53 -0800 (PST)" -->
<!-- isosent="20060131232353" -->
<!-- name="Konstantin Kudin" -->
<!-- email="konstantin_kudin_at_[hidden]" -->
<!-- subject="[O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2" -->
<!-- id="20060131232353.57005.qmail_at_web52001.mail.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Konstantin Kudin (<em>konstantin_kudin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-31 18:23:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0550.php">Brian Granger: "[O-MPI users] Bug in C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="0548.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0553.php">Konstantin Kudin: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0553.php">Konstantin Kudin: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi all,
<br>
<p>&nbsp;The package Quantum Espresso (QE) 3.0 from www.pwscf.org works fine
<br>
with MPICH 1.2.7 and these versions of Intel compilers.
<br>
<p>&nbsp;QE also compiles fine with Open-MPI. However, when trying to run the
<br>
CP program from the package with either Open-MPI v1.0.1, or the latest
<br>
nightly build [ 1.0.2a4r8848 ], the following error is produced (also
<br>
in the *.tar.gz file):
<br>
<p><span class="quotelev1">&gt; ./wat01.j
</span><br>
forrtl: Input/output error
<br>
forrtl: severe (39): error during read, unit 5, file /dev/ptmx
<br>
Image              PC                Routine            Line       
<br>
Source
<br>
cp.x               000000000084931F  Unknown               Unknown 
<br>
Unknown
<br>
<p>&nbsp;The program cp.x reads its data from the std. input, and writes to
<br>
std. output.
<br>
<p>&nbsp;The files config.log, ompi_info.log, and a slightly more detailed
<br>
output of the error are in the attached file.
<br>
<p>&nbsp;Any ideas what might be wrong?
<br>
<p>&nbsp;Thanks!
<br>
&nbsp;Konstantin
<br>
<p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>

<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0549/openmpi.tar.gz">2351859203-openmpi.tar.gz</a>
</ul>
<!-- attachment="openmpi.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0550.php">Brian Granger: "[O-MPI users] Bug in C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="0548.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0553.php">Konstantin Kudin: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0553.php">Konstantin Kudin: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
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
