<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Aug 27 09:39:57 2006" -->
<!-- isoreceived="20060827133957" -->
<!-- sent="Sun, 27 Aug 2006 15:39:43 +0200" -->
<!-- isosent="20060827133943" -->
<!-- name="Reinhold Bader" -->
<!-- email="Reinh.Bader_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with symbols and shared libraries" -->
<!-- id="44F1A09F.50005_at_lrz.de" -->
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
<strong>From:</strong> Reinhold Bader (<em>Reinh.Bader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-27 09:39:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1780.php">Reinhold Bader: "[OMPI users] Follow-on to previous mail"</a>
<li><strong>Previous message:</strong> <a href="1778.php">Michael Kluskens: "[OMPI users] LSF with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>&nbsp;Hello,
<br>
<p>&nbsp;&nbsp;I am trying to get OpenMPI 1.1 to run on an SGI Altix 4700 (with SLES10).
<br>
&nbsp;&nbsp;A trivial Fortran 90 application using MPI_Wtime() does not link:
<br>
<p>mpif90 -g -o runhost.exe runhost.o
<br>
/lrz/sys/openmpi/intel_altix_mt/1.1/lib/libmpi_f90.a(mpi_wtime_f90.o): In function `mpi_wtime_':
<br>
mpi_wtime_f90.f90:(.text+0x22): undefined reference to `mpi_wtime_f90_'
<br>
<p>&nbsp;&nbsp;it appears
<br>
&nbsp;&nbsp;the default linkage uses the static libraries. If the &quot;-shared&quot; switch is added, linkage is
<br>
&nbsp;&nbsp;successful, but execution fails, sometimes silently with an exit status of 139, sometimes
<br>
&nbsp;&nbsp;with the additional message
<br>
<p>1 additional process aborted (not shown)
<br>
<p>&nbsp;&nbsp;The compiler releases used: ifort 9.1.33, icc 9.1.39
<br>
<p>&nbsp;&nbsp;I am attaching a UNIX archive with build info.
<br>
&nbsp;&nbsp;A second archive with configure and install info as well as ompi_info output follows with a
<br>
&nbsp;&nbsp;separate mail (100 kByte limit exceeded otherwise).
<br>
&nbsp;&nbsp;Any hints?
<br>
<p><p>&nbsp;&nbsp;[Note: I've also tried building the most up to date SVN tree, but this fails since the Fortran 90
<br>
&nbsp;&nbsp;&nbsp;module build attempts to generate a shared library; the -soname switch used is not accepted by
<br>
&nbsp;&nbsp;&nbsp;Intel Fortran. Trying to build with static libraries only works, but mpirun then fails with the
<br>
&nbsp;&nbsp;&nbsp;message &quot;You must use mpirun to start up MPI programs.&quot;]
<br>
<p><p>Regards
<br>
<p><p>- --
<br>
&nbsp;Dr. Reinhold Bader
<br>
<p>&nbsp;Leibniz-Rechenzentrum, Abt. Hochleistungssysteme | Tel. +49 89 35831 8825
<br>
&nbsp;Boltzmannstr. 1, 85748 Garching                  | Fax  +49 89 35831 9700
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.2 (GNU/Linux)
<br>
Comment: Using GnuPG with SUSE - <a href="http://enigmail.mozdev.org">http://enigmail.mozdev.org</a>
<br>
<p>iD8DBQFE8aCfzwkB8vcRvCoRAv52AJ9t7xt++pbhSoIoUWzWrSBHk8+9wACfUDDn
<br>
mIo/DqAZt6VvifrhaEAkFBk=
<br>
=xFBm
<br>
-----END PGP SIGNATURE-----
<br>
<p>
<br><hr>
<ul>
<li>application/x-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1779/openmpi_pmr_1.tar.bz2">openmpi_pmr_1.tar.bz2</a>
</ul>
<!-- attachment="openmpi_pmr_1.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1780.php">Reinhold Bader: "[OMPI users] Follow-on to previous mail"</a>
<li><strong>Previous message:</strong> <a href="1778.php">Michael Kluskens: "[OMPI users] LSF with OpenMPI"</a>
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
