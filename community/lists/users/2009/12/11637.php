<?
$subject_val = "[OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 24 18:15:09 2009" -->
<!-- isoreceived="20091224231509" -->
<!-- sent="Thu, 24 Dec 2009 18:15:03 -0500" -->
<!-- isosent="20091224231503" -->
<!-- name="Aaron Knister" -->
<!-- email="aaron.knister_at_[hidden]" -->
<!-- subject="[OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi" -->
<!-- id="CAFA115F-B79E-4A1C-98A4-A6284F52F9B4_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi<br>
<strong>From:</strong> Aaron Knister (<em>aaron.knister_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-24 18:15:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11638.php">Aaron Knister: "Re: [OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi"</a>
<li><strong>Previous message:</strong> <a href="11636.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11638.php">Aaron Knister: "Re: [OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi"</a>
<li><strong>Reply:</strong> <a href="11638.php">Aaron Knister: "Re: [OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm running into a strange problem with openmpi and the pgi compiler (version 9.0-4). I first stumbled across this when using petsc but have reduced it to a few lines of test code to demonstrate the problem I'm seeing. Essentially it appears as if a shared library contains a fortran-compiled object file that a) was built with &quot;-g&quot; and b) contains &quot;use mpi&quot; will produce errors similar to these when it is linked against:
<br>
<p>./libfoo.so: undefined reference to `mpi_sizeof3dch_'
<br>
./libfoo.so: undefined reference to `mpi_sizeof4dl_'
<br>
./libfoo.so: undefined reference to `mpi_sizeof2dl_'
<br>
./libfoo.so: undefined reference to `mpi_sizeof2dch_'
<br>
./libfoo.so: undefined reference to `mpi_sizeof0dl_'
<br>
./libfoo.so: undefined reference to `mpi_sizeof1dch_'
<br>
./libfoo.so: undefined reference to `mpi_sizeof3dl_'
<br>
./libfoo.so: undefined reference to `mpi_sizeof1dl_'
<br>
./libfoo.so: undefined reference to `mpi_sizeof0dch_'
<br>
./libfoo.so: undefined reference to `mpi_sizeof4dch_'
<br>
&nbsp;
<br>
<p>Take the following code-
<br>
<p>libfoo.f90:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subroutine printhi()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use mpi
<br>
!	do some mpi stuff
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, &quot;Hello&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p>main.f90:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program myprog
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call printhi()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end 
<br>
<p>And to compile (using openmpi built with pgi):
<br>
mpif90 -g -c -fPIC libfoo.f90
<br>
cc -shared -Wl -o libfoo.so libfoo.o
<br>
mpif90 -g main.f90 -lfoo -L. -o main
<br>
<p>If I remove the &quot;-g&quot; from the first mpif90 command, then the compile finishes and there are no errors about undefined references.
<br>
<p>This occurs with openmpi-1.4 but ONLY with the pgi fortran compilers. I can't reproduce this behavior with either gnu gfortran or intel's ifort. 
<br>
<p>I'm not sure if this is a pgi problem or an openmpi problem or if I'm missing something.
<br>
<p>Any help would be much appreciated!
<br>
<p>-Aaron
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11638.php">Aaron Knister: "Re: [OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi"</a>
<li><strong>Previous message:</strong> <a href="11636.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11638.php">Aaron Knister: "Re: [OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi"</a>
<li><strong>Reply:</strong> <a href="11638.php">Aaron Knister: "Re: [OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi"</a>
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
