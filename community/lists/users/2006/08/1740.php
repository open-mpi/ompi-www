<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 12 10:42:50 2006" -->
<!-- isoreceived="20060812144250" -->
<!-- sent="Sat, 12 Aug 2006 15:42:44 +0100" -->
<!-- isosent="20060812144244" -->
<!-- name="Nym" -->
<!-- email="neverwillreply_at_[hidden]" -->
<!-- subject="[OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem" -->
<!-- id="eb51483d0608120742w148821c2nae8c9d887c8dcff9_at_mail.gmail.com" -->
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
<strong>From:</strong> Nym (<em>neverwillreply_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-12 10:42:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1741.php">Nym: "[OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem"</a>
<li><strong>Previous message:</strong> <a href="1739.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've been trying to compile OpenMPI with gfortran on Mac OS X, and use
<br>
it with an MPI app that compiles and works using MPICH2 on a Linux
<br>
system.
<br>
<p>I have tried using both versions 1.1 and the pre-release 1.1.1, and I
<br>
get the same result. Attached at the configuration logs and outputs
<br>
from compiling OpenMPI with version 1.1.1.
<br>
<p>The compilation of OpenMPI seems to finish successfully. However, when
<br>
compiling my MPI app I get the error
<br>
<p>Error: Generic subroutine 'mpi_cart_create' at (1) is not an intrinsic
<br>
subroutine
<br>
<p>Other MPI calls, such as MPI_REDUCE, and MPI_SENDRECV do not bring up
<br>
any errors. The call is of the following form, with the variable
<br>
declarations shown:
<br>
<p>INTEGER, PARAMETER :: numDims = 2
<br>
INTEGER :: dimSizes(0:numDims-1)
<br>
LOGICAL :: dimPeriodics(0:numDims-1)
<br>
LOGICAL :: reorderRanks
<br>
INTEGER :: comm
<br>
INTEGER :: err
<br>
<p>CALL MPI_CART_CREATE(MPI_COMM_WORLD, numDims, dimSizes, dimPeriodics, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reorderRanks, comm, err)
<br>
<p>Can anyone help?
<br>
<p>Nym.
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1740/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1741.php">Nym: "[OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem"</a>
<li><strong>Previous message:</strong> <a href="1739.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<!-- nextthread="start" -->
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
