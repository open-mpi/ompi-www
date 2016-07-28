<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jun 16 03:22:15 2007" -->
<!-- isoreceived="20070616072215" -->
<!-- sent="Sat, 16 Jun 2007 00:22:11 -0700 (PDT)" -->
<!-- isosent="20070616072211" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi/numa" -->
<!-- id="439773.25373.qm_at_web58907.mail.re1.yahoo.com" -->
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
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-16 03:22:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3499.php">Code Master: "[OMPI users] mpirun in openmpi-1.2.3-rc1 hangs at the end when nproc &gt;=16 (was Re: mpirun in openmpi-1.2.2 fails to exit after client program finishes)"</a>
<li><strong>Previous message:</strong> <a href="3497.php">Jeff Squyres: "Re: [OMPI users] Thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3527.php">Jeff Squyres: "Re: [OMPI users] openmpi/numa"</a>
<li><strong>Reply:</strong> <a href="3527.php">Jeff Squyres: "Re: [OMPI users] openmpi/numa"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I already posed this question a couple of days ago,
<br>
though on a wrong list, and I can't any more trace it.
<br>
Sorry.
<br>
<p>The question is whether, in compiling openmpi,the flag
<br>
libnuma is needed or simply useful also in the special
<br>
arrangement of the Tyan S2895 Thunder K8WE with two
<br>
dual-core opterons and eighth memory modules, two GB
<br>
each.
<br>
<p>If so (being first time to compile a mpi, and being
<br>
nonexpert singleuser/administrator) I would be much
<br>
obliged for checking the series of commands below (as
<br>
superuser) for Linux Debian amd64 etch:
<br>
<p>cd /usr/local
<br>
<p>bunzip2 openmpi-1.2.2.tar.bz2
<br>
<p>tar xvf openmpi-1.2.2.tar
<br>
<p>cd /usr/local/openmpi-1.2.2
<br>
<p>FC=/opt/intel/cce/9.1.036/bin/ifort; export FC
<br>
<p>CC=/opt/intel/cce/9.1.042/bin/icc; export CC
<br>
<p>CXX=/opt/intel/cce/9.1.042/bin/icpc; export CXX
<br>
<p>./configure --with-libnuma=/full pat to libnuma-dev   
<br>
0.9.11-4, 0.9.11-3 (not yet installed)
<br>
<p>make
<br>
<p>make install
<br>
<p>followed by setting as user in my .bashrc
<br>
<p>MPI_HOME=/usr/local; export MPI_HOME
<br>
____
<br>
mpi for a computational application that is best
<br>
compiled with intel. On my system those intels already
<br>
furnish runtime 
<br>
<p>/opt/intel/fce/9.1.036/lib/libimf.so
<br>
/opt/intel/cce/9.1.042/lib/libimf.so
<br>
<p>to a QM code (NWChem 5.0) that is built-in
<br>
parallelized with TCGMSG.
<br>
<p>Thanks
<br>
<p>francesco pietra
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
____________________________________________________________________________________
<br>
Yahoo! oneSearch: Finally, mobile search 
<br>
that gives answers, not web links. 
<br>
<a href="http://mobile.yahoo.com/mobileweb/onesearch?refer=1ONXIC">http://mobile.yahoo.com/mobileweb/onesearch?refer=1ONXIC</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3499.php">Code Master: "[OMPI users] mpirun in openmpi-1.2.3-rc1 hangs at the end when nproc &gt;=16 (was Re: mpirun in openmpi-1.2.2 fails to exit after client program finishes)"</a>
<li><strong>Previous message:</strong> <a href="3497.php">Jeff Squyres: "Re: [OMPI users] Thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3527.php">Jeff Squyres: "Re: [OMPI users] openmpi/numa"</a>
<li><strong>Reply:</strong> <a href="3527.php">Jeff Squyres: "Re: [OMPI users] openmpi/numa"</a>
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
