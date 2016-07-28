<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 11 11:53:05 2006" -->
<!-- isoreceived="20060711155305" -->
<!-- sent="Tue, 11 Jul 2006 09:53:02 -0600" -->
<!-- isosent="20060711155302" -->
<!-- name="Daryl W. Grunau" -->
<!-- email="dwg_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI 1.1 build failure with Intel 9.0" -->
<!-- id="20060711155302.GA15018_at_lanl.gov" -->
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
<strong>From:</strong> Daryl W. Grunau (<em>dwg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-11 11:53:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1600.php">David Gunter: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>Previous message:</strong> <a href="1598.php">Eric Thibodeau: "Re: [OMPI users] Tutorial"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1600.php">David Gunter: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>Reply:</strong> <a href="1600.php">David Gunter: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>Reply:</strong> <a href="1602.php">George Bosilca: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>Maybe reply:</strong> <a href="1610.php">Daryl W. Grunau: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to build version 1.1 with Intel 9.0 compilers and getting an
<br>
error at the very end in the tools directory: ompi/tools/ompi_info.  The
<br>
build appears to die with undefined references to things that belong to the
<br>
C++ string class (see long attachment).  Strange thing is that this same
<br>
code compiles fine with the GNU compilers (FC3), PGI (6.1) and Pathscale (2.4).
<br>
FWIW, my arch is x86_64 ...  I wrote a simple hello.cc program that used
<br>
the string class and it also compiled/linked/executed fine with icc.
<br>
Anyone else seeing this problem or is my compiler not installed correctly?
<br>
TIA,
<br>
<p>Daryl
<br>
<p>P.s.  Here's my configure line from config.log:
<br>
<p>&nbsp;&nbsp;$ ./configure --build=x86_64-redhat-linux-gnu --host=x86_64-redhat-linux-gnu --target=x86_64-redhat-linux-gnu --program-prefix= --prefix=/opt/OpenMPI/openmpi-intel-1.1/ib --exec-prefix=/opt/OpenMPI/openmpi-intel-1.1/ib --bindir=/opt/OpenMPI/openmpi-intel-1.1/ib/bin --sbindir=/opt/OpenMPI/openmpi-intel-1.1/ib/sbin --sysconfdir=/etc --datadir=/opt/OpenMPI/openmpi-intel-1.1/ib/share --includedir=/opt/OpenMPI/openmpi-intel-1.1/ib/include --libdir=/opt/OpenMPI/openmpi-intel-1.1/ib/lib64 --libexecdir=/opt/OpenMPI/openmpi-intel-1.1/ib/libexec --localstatedir=/var --sharedstatedir=/opt/OpenMPI/openmpi-intel-1.1/ib/com --mandir=/usr/share/man --infodir=/usr/share/info --prefix=/opt/OpenMPI/openmpi-intel-1.1/ib --sysconfdir=/opt/OpenMPI/openmpi-intel-1.1/ib/etc --mandir=/opt/OpenMPI/openmpi-intel-1.1/ib/man --disable-shared --enable-static --with-bproc --with-openib=/opt/IB/ibgd-2.0.1
<br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1599/make.log">make.log</a>
</ul>
<!-- attachment="make.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1600.php">David Gunter: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>Previous message:</strong> <a href="1598.php">Eric Thibodeau: "Re: [OMPI users] Tutorial"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1600.php">David Gunter: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>Reply:</strong> <a href="1600.php">David Gunter: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>Reply:</strong> <a href="1602.php">George Bosilca: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>Maybe reply:</strong> <a href="1610.php">Daryl W. Grunau: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
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
