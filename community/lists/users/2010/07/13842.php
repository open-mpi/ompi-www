<?
$subject_val = "[OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 12:29:00 2010" -->
<!-- isoreceived="20100728162900" -->
<!-- sent="Wed, 28 Jul 2010 18:28:54 +0200" -->
<!-- isosent="20100728162854" -->
<!-- name="christophe petit" -->
<!-- email="christophe.petit09_at_[hidden]" -->
<!-- subject="[OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop" -->
<!-- id="AANLkTi=X5Z8VRHJs9p0MKGRnFYsSqq9gDuvZ-7a0_dX0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop<br>
<strong>From:</strong> christophe petit (<em>christophe.petit09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 12:28:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13843.php">Ralph Castain: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>Previous message:</strong> <a href="13841.php">&#197;ke Sandgren: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13843.php">Ralph Castain: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>Reply:</strong> <a href="13843.php">Ralph Castain: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>Reply:</strong> <a href="13844.php">Jeff Squyres: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello,
<br>
<p>i have a problem concerning the execution of a f90 program (explicitPar)
<br>
compiled with openmpi-1.4.2. I get nearly the same error on my debian
<br>
desktop ( AMD Phenom(tm) 9550 Quad-Core Processor) and my mac pro i7 laptop
<br>
:
<br>
<p>on mac pro i7 :
<br>
<p>$ mpiexec -np 2 explicitPar
<br>
[macbook-pro-de-fab.livebox.home:48805] *** An error occurred in
<br>
MPI_Cart_shift
<br>
[macbook-pro-de-fab.livebox.home:48805] *** on communicator MPI_COMM_WORLD
<br>
[macbook-pro-de-fab.livebox.home:48805] *** MPI_ERR_COMM: invalid
<br>
communicator
<br>
[macbook-pro-de-fab.livebox.home:48805] *** MPI_ERRORS_ARE_FATAL (your MPI
<br>
job will now abort)
<br>
--------------------------------------------------------------------------
<br>
mpiexec has exited due to process rank 1 with PID 48805 on
<br>
node macbook-pro-de-fab.livebox.home exiting without calling &quot;finalize&quot;.
<br>
This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpiexec (as reported here).
<br>
<p>---------------------------------------------------------------------------
<br>
<p>on my debian desktop :
<br>
<p>mpirun -np 2 explicitPar
<br>
[pablo:11665] *** An error occurred in MPI_Cart_shift
<br>
[pablo:11665] *** on communicator MPI_COMM_WORLD
<br>
[pablo:11665] *** MPI_ERR_COMM: invalid communicator
<br>
[pablo:11665] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 11665 on
<br>
node pablo exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p><p>I have installed openmpi-1.4.2 with the following options :
<br>
<p>./configure --prefix=/usr/local/openmpi --enable-mpi-f77 --enable-mpi-f90
<br>
<p>with exported variables on bash shell : FC=gfortran F90=gfortran
<br>
F77=gfortran CC=gcc CXX=g++
<br>
<p>The  installation has been completed, the program compiles fine but i don't
<br>
understand what's wrong. I note that with a single processor (&quot;mpirun -np 1
<br>
explicitPar&quot;), execution works fine.
<br>
<p>My debian desktop is a quad-core, so, theoretically, i can put up to 4 for
<br>
&quot;np&quot; parameter.
<br>
On my mac pro i7, i don't know how processors are there, but the &quot;htop&quot;
<br>
command makes appear 4 cores too.
<br>
<p>Anyone has a solution ?
<br>
<p>Regards.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13842/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13843.php">Ralph Castain: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>Previous message:</strong> <a href="13841.php">&#197;ke Sandgren: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13843.php">Ralph Castain: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>Reply:</strong> <a href="13843.php">Ralph Castain: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>Reply:</strong> <a href="13844.php">Jeff Squyres: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
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
