<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec 14 14:01:59 2006" -->
<!-- isoreceived="20061214190159" -->
<!-- sent="Thu, 14 Dec 2006 14:01:54 -0500" -->
<!-- isosent="20061214190154" -->
<!-- name="Michael Galloway" -->
<!-- email="mgx_at_[hidden]" -->
<!-- subject="[OMPI users] pgi compiler configure problems" -->
<!-- id="20061214190154.GJ30568_at_sif.lsd.ornl.gov" -->
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
<strong>From:</strong> Michael Galloway (<em>mgx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-14 14:01:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2365.php">David Gunter: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>Previous message:</strong> <a href="2363.php">Rainer Keller: "Re: [OMPI users] OMPI tested on Solaris 10 for AMD CPUs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2365.php">David Gunter: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>Reply:</strong> <a href="2365.php">David Gunter: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>Reply:</strong> <a href="2366.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
good day all, i've been trying to build ompi with the 6.2-X version of the pgi
<br>
compiler set (pgcc 6.2-4 64-bit target on x86-64 Linux). i've tried both 1.1.2 and
<br>
the current nightly build 1.1.3b2r12766, both fail with this error from configure:
<br>
<p>*** Fortran 77 compiler
<br>
checking whether we are using the GNU Fortran 77 compiler... no
<br>
checking whether /opt/pgi/linux86-64/6.2/bin/pgf77 accepts -g... yes
<br>
checking if Fortran 77 compiler works... yes
<br>
checking /opt/pgi/linux86-64/6.2/bin/pgf77 external symbol convention... single underscore
<br>
checking if Fortran 77 compiler supports LOGICAL... yes
<br>
checking size of Fortran 77 LOGICAL... 4
<br>
checking for C type corresponding to LOGICAL... not found
<br>
configure: WARNING: *** Did not find corresponding C type
<br>
configure: error: Cannot continue
<br>
<p>i will attache the config.log file. i've looked around the maillist and i've seen a few issue
<br>
similar but no real resolution. the env i used to build is:
<br>
<p>F90=/opt/pgi/linux86-64/6.2/bin/pgf90
<br>
F77=/opt/pgi/linux86-64/6.2/bin/pgf77
<br>
LM_LICENSE_FILE=/opt/pgi/license.dat
<br>
CXX=/opt/pgi/linux86-64/6.2/bin/pgCC
<br>
FC=/opt/pgi/linux86-64/6.2/bin/pgf90
<br>
CC=/opt/pgi/linux86-64/6.2/bin/pgcc
<br>
<p>F90FLAGS=-fastsse
<br>
CXXFLAGS=-g -O3 -Minfo=all  -fastsse -Mipa=fast -Knoieee -mp
<br>
FCFLAGS=-fastsse
<br>
CFLAGS=-g -O3 -Minfo=all  -fastsse -Mipa=fast -Knoieee -mp
<br>
FFLAGS=-fastsse
<br>
<p>is there something simple i'm messing up? thanks!
<br>
<p>-- michael
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2364/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2365.php">David Gunter: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>Previous message:</strong> <a href="2363.php">Rainer Keller: "Re: [OMPI users] OMPI tested on Solaris 10 for AMD CPUs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2365.php">David Gunter: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>Reply:</strong> <a href="2365.php">David Gunter: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>Reply:</strong> <a href="2366.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
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
