<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 10 13:49:04 2006" -->
<!-- isoreceived="20061010174904" -->
<!-- sent="Tue, 10 Oct 2006 08:32:01 -0700" -->
<!-- isosent="20061010153201" -->
<!-- name="Andrus, Mr. Brian \(Contractor\)" -->
<!-- email="brian.andrus_at_[hidden]" -->
<!-- subject="[OMPI users] Trouble with shared libraries" -->
<!-- id="D392D4803D14354CBC49D772E19DD0CD16E39F_at_zeus.w2k.nrlmry.navy.mil" -->
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
<strong>From:</strong> Andrus, Mr. Brian \(Contractor\) (<em>brian.andrus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-10 11:32:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1958.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1956.php">Jeff Squyres: "Re: [OMPI users] p4_error: latest msg from perror: Bad file descriptor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1960.php">Jeff Squyres: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>Reply:</strong> <a href="1960.php">Jeff Squyres: "Re: [OMPI users] Trouble with shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I apologize in advance. I am still trying to get openmpi to compile
<br>
and run with PGI, Myrinet and PBSPro.
<br>
<p>I am configuring it with:
<br>
--with-gm=/opt/gm --disable-shared --enable-static
<br>
--enable-mca-static=pml,btl:gm,btl:self --with-tm=/usr/pbs CC=pgcc
<br>
CXX=pgCC F77=pgf77 FC=pgf90 FFLAGS=-fastsse FCFLAGS=-fastsse
<br>
LDFLAGS=-L/opt/gm/lib64
<br>
<p>Everything seems to go fine, but when I try to use mpiexec, I get:
<br>
error while loading shared libraries: libmpi.so.0: cannot open shared
<br>
object file: No such file or directory
<br>
<p><p>Everything runs fine when I use mpirun, however.
<br>
<p>Any assistance is appreciated. Thanks in advance!
<br>
<p>Brian Andrus
<br>
QSS Group, Inc.
<br>
Naval Research Laboratory
<br>
Monterey, California
<br>
Desk: 831-656-4839
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1958.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1956.php">Jeff Squyres: "Re: [OMPI users] p4_error: latest msg from perror: Bad file descriptor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1960.php">Jeff Squyres: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>Reply:</strong> <a href="1960.php">Jeff Squyres: "Re: [OMPI users] Trouble with shared libraries"</a>
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
