<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov 11 19:42:45 2005" -->
<!-- isoreceived="20051112004245" -->
<!-- sent="Fri, 11 Nov 2005 16:42:30 -0800 (PST)" -->
<!-- isosent="20051112004230" -->
<!-- name="Jonathan Day" -->
<!-- email="imipak_at_[hidden]" -->
<!-- subject="[O-MPI users] Tests with current version" -->
<!-- id="20051112004230.41547.qmail_at_web31510.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="mailman.5203.1131754214.1856.users_at_open-mpi.org" -->
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
<strong>From:</strong> Jonathan Day (<em>imipak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-11 19:42:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0319.php">Dries Kimpe: "Re: [O-MPI users] Tests with current version"</a>
<li><strong>Previous message:</strong> <a href="0317.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0319.php">Dries Kimpe: "Re: [O-MPI users] Tests with current version"</a>
<li><strong>Reply:</strong> <a href="0319.php">Dries Kimpe: "Re: [O-MPI users] Tests with current version"</a>
<li><strong>Reply:</strong> <a href="0322.php">Brian Barrett: "Re: [O-MPI users] Tests with current version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Still working on the Broadcom MIPS64 port, so no news
<br>
on that front yet except to say that I'm getting
<br>
there. (Which seems to be fairly common with people
<br>
using Broadcom CPUs.)
<br>
<p>On the Pentium 4 front, I can say that recent
<br>
snapshots of the experimental GCC 4.1.0 compiled the
<br>
C, C++ and Fortran bindings just fine and all tests
<br>
worked great.
<br>
<p>Because GFortran has serious bugs in it somewhere,
<br>
I've had to use G95 (g95.sourceforge.net) for a lot of
<br>
Fortran 90 and Fortran 95 code. You do have to set
<br>
both the Fortran 77 and Fortran 90 bindings to compile
<br>
with G95 if you do this, but it seems to work just
<br>
fine.
<br>
<p>When enabling threads, remember that the configure
<br>
help menu lies. --with-threads=posix should be used,
<br>
not --with-threads=pthreads
<br>
<p>I've not determined exactly what triggers it, but the
<br>
functions in ompi/ompi/mca/pml/pml_teg_ptl.c can clash
<br>
with functions from ompi/ompi/mca/pml/pml_uniq_ptl.c
<br>
on compile. I'm guessing that I'm using a combination
<br>
of compile options that aren't getting tested that
<br>
often, if I'm the only one noticing this:
<br>
<p>./configure --prefix=/usr/openmpi --enable-mpi-threads
<br>
--enable-progress-threads --with-threads=posix
<br>
--enable-shared --enable-static --enable-mpi-f77
<br>
--enable-mpi-f90
<br>
<p>Could someone verify that this problem is repeatable
<br>
and not simply a problem at this end?
<br>
<p>Thanks.
<br>
<p>Jonathan
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
__________________________________ 
<br>
Yahoo! FareChase: Search multiple travel sites in one click.
<br>
<a href="http://farechase.yahoo.com">http://farechase.yahoo.com</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0319.php">Dries Kimpe: "Re: [O-MPI users] Tests with current version"</a>
<li><strong>Previous message:</strong> <a href="0317.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0319.php">Dries Kimpe: "Re: [O-MPI users] Tests with current version"</a>
<li><strong>Reply:</strong> <a href="0319.php">Dries Kimpe: "Re: [O-MPI users] Tests with current version"</a>
<li><strong>Reply:</strong> <a href="0322.php">Brian Barrett: "Re: [O-MPI users] Tests with current version"</a>
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
