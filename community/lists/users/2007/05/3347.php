<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 31 00:58:25 2007" -->
<!-- isoreceived="20070531045825" -->
<!-- sent="Thu, 31 May 2007 00:58:14 -0400" -->
<!-- isosent="20070531045814" -->
<!-- name="Aaron Thompson" -->
<!-- email="aaron.p.thompson_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4" -->
<!-- id="81D746A4-AA3F-4995-BA3B-7E085965EA8B_at_vanderbilt.edu" -->
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
<strong>From:</strong> Aaron Thompson (<em>aaron.p.thompson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-31 00:58:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3348.php">Marcin Skoczylas: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="3346.php">smairal_at_[hidden]: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3359.php">Christian Simon: "Re: [OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3359.php">Christian Simon: "Re: [OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear list,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm having a terrible time trying to get OpenMPI running on a G5  
<br>
with Mac OS X 10.4 and with Fortran support.  The F77 example  
<br>
hello_f77.f compiles and runs as expected, but hello_f90.f90, when  
<br>
compiled with mpif90, gives me this mysterious error:
<br>
Fatal Error: Reading module mpi at line 3562 column 2: Expected integer
<br>
<p>Here's what I did in detail.
<br>
I downloaded gfortran 4.3 from <a href="http://hpc.sourceforge.net/">http://hpc.sourceforge.net/</a> and that  
<br>
installed fine.  Simple programs compile.
<br>
I downloaded OpenMPI 1.2.2 from source tarball.  Here's what I did  
<br>
for configure:
<br>
./configure --with-f77 --with-f90 F77=gfortran FC=gfortran
<br>
No errors yet at configure.  make, sudo make install also yield no  
<br>
errors.
<br>
cd to examples, mpif77 hello_f77.f, ./a.out works
<br>
mpif90 hello_f90.f90 gives me the error above:
<br>
Fatal Error: Reading module mpi at line 3562 column 2: Expected integer
<br>
<p>mpif90 -showme outputs:
<br>
gfortran -I/usr/local/include -I/usr/local/lib -Wl,-u,_munmap -Wl,- 
<br>
multiply_defined,suppress -L/usr/local/lib -lmpi_f90 -lmpi_f77 -lmpi - 
<br>
lopen-rte -lopen-pal
<br>
<p>Any ideas what could be wrong?  I think I'm going to be seeing ./ 
<br>
configure script output in my dreams...
<br>
<p>Thank you,
<br>
<p>Aaron Thompson
<br>
Vanderbilt University
<br>
Dept. of Chemical Engineering
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3348.php">Marcin Skoczylas: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="3346.php">smairal_at_[hidden]: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3359.php">Christian Simon: "Re: [OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3359.php">Christian Simon: "Re: [OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4"</a>
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
