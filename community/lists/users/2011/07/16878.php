<?
$subject_val = "[OMPI users] Error installing OpenMPI 1.5.3";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 10 12:01:13 2011" -->
<!-- isoreceived="20110710160113" -->
<!-- sent="Sun, 10 Jul 2011 20:01:05 +0400" -->
<!-- isosent="20110710160105" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="[OMPI users] Error installing OpenMPI 1.5.3" -->
<!-- id="CAGR4S9FAvKtKRbvcz5ivBuLGEYobVqTonpEgEH4T_1te1XxuaA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Error installing OpenMPI 1.5.3<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-10 12:01:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16879.php">Dmitry N. Mikushin: "Re: [OMPI users] Error installing OpenMPI 1.5.3"</a>
<li><strong>Previous message:</strong> <a href="16877.php">Yevgeny Kliteynik: "Re: [OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16879.php">Dmitry N. Mikushin: "Re: [OMPI users] Error installing OpenMPI 1.5.3"</a>
<li><strong>Reply:</strong> <a href="16879.php">Dmitry N. Mikushin: "Re: [OMPI users] Error installing OpenMPI 1.5.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Maybe it would be useful to report the openmpi 1.5.3 archive currently
<br>
has a strange issue when installing on Fedora 15 x86_64 (gcc 4.6),
<br>
that *does not* happen with 1.4.3:
<br>
<p>$ ../configure --prefix=/opt/openmpi_kgen-1.5.3 CC=gcc CXX=g++
<br>
F77=gfortran FC=gfortran
<br>
<p>...
<br>
<p>$ sudo make install
<br>
<p>...
<br>
<p>make[5]: Entering directory
<br>
`/home/marcusmae/Programming/openmpi-1.5.3/build/ompi/mpi/f90'
<br>
test -z &quot;/opt/openmpi_kgen-1.5.3/lib&quot; || /bin/mkdir -p
<br>
&quot;/opt/openmpi_kgen-1.5.3/lib&quot;
<br>
&nbsp;/bin/sh ../../../libtool   --mode=install /usr/bin/install -c
<br>
libmpi_f90.la '/opt/openmpi_kgen-1.5.3/lib'
<br>
libtool: install: warning: relinking `libmpi_f90.la'
<br>
libtool: install: (cd
<br>
/home/marcusmae/Programming/openmpi-1.5.3/build/ompi/mpi/f90; /bin/sh
<br>
/home/marcusmae/Programming/openmpi-1.5.3/build/libtool  --silent
<br>
--tag FC --mode=relink /usr/bin/gfortran -I../../../ompi/include
<br>
-I../../../../ompi/include -I. -I../../../../ompi/mpi/f90
<br>
-I../../../ompi/mpi/f90 -version-info 1:1:0 -export-dynamic -o
<br>
libmpi_f90.la -rpath /opt/openmpi_kgen-1.5.3/lib mpi.lo mpi_sizeof.lo
<br>
mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo
<br>
mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo
<br>
mpi_wtime_f90.lo ../../../ompi/mpi/f77/libmpi_f77.la -lnsl -lutil -lm
<br>
)
<br>
mv: cannot stat `libmpi_f90.so.1.0.1': No such file or directory
<br>
libtool: install: error: relink `libmpi_f90.la' with the above command
<br>
before installing it
<br>
make[5]: *** [install-libLTLIBRARIES] Error 1
<br>
make[5]: Leaving directory
<br>
`/home/marcusmae/Programming/openmpi-1.5.3/build/ompi/mpi/f90'
<br>
make[4]: *** [install-am] Error 2
<br>
make[4]: Leaving directory
<br>
`/home/marcusmae/Programming/openmpi-1.5.3/build/ompi/mpi/f90'
<br>
make[3]: *** [install-recursive] Error 1
<br>
make[3]: Leaving directory
<br>
`/home/marcusmae/Programming/openmpi-1.5.3/build/ompi/mpi/f90'
<br>
make[2]: *** [install] Error 2
<br>
make[2]: Leaving directory
<br>
`/home/marcusmae/Programming/openmpi-1.5.3/build/ompi/mpi/f90'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/home/marcusmae/Programming/openmpi-1.5.3/build/ompi'
<br>
make: *** [install-recursive] Error 1
<br>
<p>Is it a known problem?
<br>
<p>Thanks,
<br>
- D.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16879.php">Dmitry N. Mikushin: "Re: [OMPI users] Error installing OpenMPI 1.5.3"</a>
<li><strong>Previous message:</strong> <a href="16877.php">Yevgeny Kliteynik: "Re: [OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16879.php">Dmitry N. Mikushin: "Re: [OMPI users] Error installing OpenMPI 1.5.3"</a>
<li><strong>Reply:</strong> <a href="16879.php">Dmitry N. Mikushin: "Re: [OMPI users] Error installing OpenMPI 1.5.3"</a>
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
