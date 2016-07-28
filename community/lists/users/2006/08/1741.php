<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 12 11:24:25 2006" -->
<!-- isoreceived="20060812152425" -->
<!-- sent="Sat, 12 Aug 2006 16:24:16 +0100" -->
<!-- isosent="20060812152416" -->
<!-- name="Nym" -->
<!-- email="neverwillreply_at_[hidden]" -->
<!-- subject="[OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem" -->
<!-- id="eb51483d0608120824j5d355542m445011ca21200733_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-08-12 11:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1742.php">Brock Palen: "[OMPI users] pvfs2 and romio"</a>
<li><strong>Previous message:</strong> <a href="1740.php">Nym: "[OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1830.php">Jeff Squyres: "Re: [OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1830.php">Jeff Squyres: "Re: [OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem"</a>
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
get the same result. Attached at the configuration logs and make outputs
<br>
from compiling OpenMPI with version 1.1.1. (However only the configure
<br>
output and make all output are included, and they are bzip2'ed and not
<br>
gzip'ed. I tried to include everything specified on
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>, and have it tared, but it was
<br>
over 100kb)
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reorderRanks, comm, err)
<br>
<p>After some investigation, if I replace the logicals with Integers I
<br>
get it to compile. I haven't manage to test it yet due to some
<br>
gfortran error elsewhere. However, I'm not that keen on using integers
<br>
when they should be logicals. Also, I think according to the
<br>
specification, <a href="http://www.netlib.org/utk/papers/mpi-book/node153.html#SECTION00751000000000000000">http://www.netlib.org/utk/papers/mpi-book/node153.html#SECTION00751000000000000000</a>
<br>
, logicals should be accepted.
<br>
<p>Is there a way to get MPI_CART_CREATE working with logicals on my system?
<br>
<p>Nym.
<br>
<p>p.s. I also apologise if this has been sent twice.
<br>
<p>
<br><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1741/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1742.php">Brock Palen: "[OMPI users] pvfs2 and romio"</a>
<li><strong>Previous message:</strong> <a href="1740.php">Nym: "[OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1830.php">Jeff Squyres: "Re: [OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1830.php">Jeff Squyres: "Re: [OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem"</a>
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
