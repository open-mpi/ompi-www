<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  7 10:20:27 2006" -->
<!-- isoreceived="20060607142027" -->
<!-- sent="Wed, 7 Jun 2006 22:20:24 +0800" -->
<!-- isosent="20060607142024" -->
<!-- name="Weihua Li" -->
<!-- email="whli76_at_[hidden]" -->
<!-- subject="[OMPI users] error for open-mpi application" -->
<!-- id="41def11e0606070720j2a02df8enf8984bdfc98e5f46_at_mail.gmail.com" -->
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
<strong>From:</strong> Weihua Li (<em>whli76_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-07 10:20:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1382.php">Hugh Merz: "Re: [OMPI users] error for open-mpi application"</a>
<li><strong>Previous message:</strong> <a href="1380.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] CPU use in MPI_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1382.php">Hugh Merz: "Re: [OMPI users] error for open-mpi application"</a>
<li><strong>Reply:</strong> <a href="1382.php">Hugh Merz: "Re: [OMPI users] error for open-mpi application"</a>
<li><strong>Reply:</strong> <a href="1383.php">Brian Barrett: "Re: [OMPI users] error for open-mpi application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU: AMD opeteron Linux86-64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I used the following command to configure the open-mpi-1.0.2.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --prefix=/home/ytang/gdata/whli/openmpi CC=pgcc CXX=pgCC
<br>
F90=gpf90 --with-openib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and set environment variables in .bashrc as follows:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export MPI_HOME=/home/ytang/gdata/whli/openmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export PATH=$MPI_HOME/bin:$PATH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export LD_LIBRARY_PATH=$MPI_HOME/lib:$LD_LIBRARY_PATH
<br>
<p>In the ~openmpi/lib directory:
<br>
libmca_common_sm.la        libmpi_cxx.la        libmpi_f90.a
<br>
libmpi.so.0.0.0  libopal.so.0.0.0  liborte.so.0.0.0
<br>
libmca_common_sm.so        libmpi_cxx.so        libmpi.la     libopal.la
<br>
liborte.la        mpi_kinds.mod
<br>
libmca_common_sm.so.0      libmpi_cxx.so.0      libmpi.so     libopal.so
<br>
liborte.so        mpi.mod
<br>
libmca_common_sm.so.0.0.0  libmpi_cxx.so.0.0.0  libmpi.so.0   libopal.so.0
<br>
liborte.so.0      openmpi
<br>
<p><p><p>However, when I used openmpi to compile a application program( Molecular
<br>
dynamcis code: Amber9), error messages are given:
<br>
<p>For PMEMD module:
<br>
<p>pgf90  -o pmemd gbl_constants.o gbl_datatypes.o state_info.o file_io_dat.o
<br>
parallel_dat.o mdin_ctrl_dat.o mdin_ewald_dat.o prmtop_dat.o inpcrd
<br>
_dat.o dynamics_dat.o img.o parallel.o pme_direct.o pme_recip.o pme_fft.o
<br>
fft1d.o bspline.o pme_force.o pbc.o nb_pairlist.o cit.o dynamics.o b
<br>
onds.o angles.o dihedrals.o runmd.o loadbal.o shake.o runmin.o
<br>
constraints.oaxis_optimize.o gb_ene.o
<br>
veclib.o gb_force.o timers.o pmemd_lib.o
<br>
&nbsp;runfiles.o file_io.o bintraj.o pmemd_clib.o pmemd.o random.o degcnt.o
<br>
erfcfun.o nmr_calls.o nmr_lib.o get_cmdline.o  master_setup.o alltasks_s
<br>
etup.o pme_setup.o ene_frc_splines.o nextprmtop_section.o
<br>
-L/home/ytang/gdata/whli/openmpi/lib -lmpich
<br>
/usr/bin/ld: cannot find -lmpich
<br>
make[1]: *** [pmemd] Error 2
<br>
make[1]: Leaving directory `/gdata/lun8/ytang/whli/amber9/src/pmemd/src'
<br>
make: *** [install] Error 2
<br>
<p>For sander module:
<br>
<p>&nbsp;../lmod/lmod.a ../lapack/lapack.a ../blas/blas.a \
<br>
../lib/nxtsec.o ../lib/sys.a  -L/home/ytang/gdata/whli/openmpi/lib -lmpi_f90
<br>
-lmpi -lorte -lopal -lutil -lnsl -lpthread -ldl -Wl,--export-dynamic -lm
<br>
-lutil -lnsl -lpthread -ldl
<br>
/usr/bin/ld: skipping incompatible
<br>
/home/ytang/gdata/whli/openmpi/lib/libmpi_f90.a when searching for -lmpi_f90
<br>
/usr/bin/ld: cannot find -lmpi_f90
<br>
make[1]: *** [sander.MPI] Error 2
<br>
make[1]: Leaving directory `/gdata/lun8/ytang/whli/amber9/src/sander'
<br>
make: *** [parallel] Error 2
<br>
<p>I know it must be something wrong with the installation of open-mpi, but I
<br>
don't know where it is.
<br>
<p>Could you please give me some advice?
<br>
<p><p><p>Best regards,
<br>
<p>Weihua Li
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1381/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1382.php">Hugh Merz: "Re: [OMPI users] error for open-mpi application"</a>
<li><strong>Previous message:</strong> <a href="1380.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] CPU use in MPI_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1382.php">Hugh Merz: "Re: [OMPI users] error for open-mpi application"</a>
<li><strong>Reply:</strong> <a href="1382.php">Hugh Merz: "Re: [OMPI users] error for open-mpi application"</a>
<li><strong>Reply:</strong> <a href="1383.php">Brian Barrett: "Re: [OMPI users] error for open-mpi application"</a>
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
