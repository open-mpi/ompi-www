<?
$subject_val = "[OMPI users] Problem installing Dalton with OpenMPI over PelicanHPC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 11:14:00 2009" -->
<!-- isoreceived="20090512151400" -->
<!-- sent="Tue, 12 May 2009 08:13:54 -0700 (PDT)" -->
<!-- isosent="20090512151354" -->
<!-- name="Silviu Groza" -->
<!-- email="silviugroza_at_[hidden]" -->
<!-- subject="[OMPI users] Problem installing Dalton with OpenMPI over PelicanHPC" -->
<!-- id="682756.92120.qm_at_web111312.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem installing Dalton with OpenMPI over PelicanHPC<br>
<strong>From:</strong> Silviu Groza (<em>silviugroza_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 11:13:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9316.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Previous message:</strong> <a href="9314.php">Katz, Jacob: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9351.php">Silviu Groza: "Re: [OMPI users] Problem installing Dalton with OpenMPI over PelicanHPC"</a>
<li><strong>Maybe reply:</strong> <a href="9351.php">Silviu Groza: "Re: [OMPI users] Problem installing Dalton with OpenMPI over PelicanHPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
I am trying to install Dalton quantum chemistry program with OpenMPI over PelicanHPC, but it ends with an error.
<br>
PelicanHPC comes with both LAM and OpenMPI preinstalled. The version of OpenMPI is &quot;OMPI_VERSION &quot;1.2.7rc2&quot;&quot; (from version.h).
<br>
The wrappers that I use are mpif77.openmpi and mpicc.openmpicc.
<br>
Bellow, you can see the &quot;link&quot; and &quot;include&quot; of the wrappers:
<br>
<p>++++++++++++++++++++++++++++++++++++++
<br>
<p>pelican:/# mpicc.openmpi -show
<br>
gcc -I/usr/lib/openmpi/include/openmpi -I/usr/lib/openmpi/include -pthread -L/usr/lib/openmpi/lib -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
<p>pelican:/# mpif77.openmpi -show
<br>
gfortran -I/usr/lib/openmpi/include -pthread -L/usr/lib/openmpi/lib -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
<p>pelican:/# mpif77.openmpi -v
<br>
Using built-in specs.
<br>
Target: x86_64-linux-gnu
<br>
Configured with: ../src/configure -v --with-pkgversion='Debian 4.3.2-1.1' --with-bugurl=file:///usr/share/doc/gcc-4.3/README.Bugs --enable-languages=c,c++,fortran,objc,obj-c++ --prefix=/usr --enable-shared --with-system-zlib --libexecdir=/usr/lib --without-included-gettext --enable-threads=posix --enable-nls --with-gxx-include-dir=/usr/include/c++/4.3 --program-suffix=-4.3 --enable-clocale=gnu --enable-libstdcxx-debug --enable-objc-gc --enable-mpfr --enable-cld --enable-checking=release --build=x86_64-linux-gnu --host=x86_64-linux-gnu --target=x86_64-linux-gnu
<br>
Thread model: posix
<br>
gcc version 4.3.2 (Debian 4.3.2-1.1)
<br>
<p>+++++++++++++++++++++++++++++++++++++
<br>
<p>The Makefile.conf of Dalton is:
<br>
<p>++++++++++++++++++++++++++++++++++++++
<br>
<p>ARCH&#160;&#160;&#160;&#160;&#160;&#160;&#160; = linux
<br>
#
<br>
#
<br>
CPPFLAGS&#160;&#160;&#160;&#160;&#160; = -DVAR_G77 -DSYS_LINUX -DVAR_MFDS -DVAR_SPLITFILES -D'INSTALL_WRKMEM=60000000' -D'INSTALL_BASDIR=&quot;/root/Fig/dalton-2.0/basis/&quot;' -DVAR_MPI -DIMPLICIT_NONE
<br>
F77&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; = mpif77.openmpi
<br>
CC&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; = mpicc.openmpi
<br>
RM&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; = rm -f
<br>
FFLAGS&#160;&#160;&#160;&#160;&#160;&#160;&#160; = -march=x86-64 -O3 -ffast-math -fexpensive-optimizations -funroll-loops -fno-range-check -fsecond-underscore
<br>
SAFEFFLAGS&#160;&#160;&#160; = -march=x86-64 -O3 -ffast-math -fexpensive-optimizations -funroll-loops -fno-range-check -fsecond-underscore
<br>
CFLAGS&#160;&#160;&#160;&#160;&#160;&#160;&#160; = -march=x86-64 -O3 -ffast-math -fexpensive-optimizations -funroll-loops -std=c99 -DRESTRICT=restrict
<br>
INCLUDES&#160;&#160;&#160;&#160;&#160; = -I../include 
<br>
LIBS&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; = -L/usr/lib -llapack -lblas 
<br>
INSTALLDIR&#160;&#160;&#160; = /root/Fig/dalton-2.0/bin
<br>
PDPACK_EXTRAS = linpack.o eispack.o
<br>
GP_EXTRAS&#160;&#160;&#160;&#160; = 
<br>
AR&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; = ar
<br>
ARFLAGS&#160;&#160;&#160;&#160;&#160;&#160; = rvs
<br>
# flags for ftnchek on Dalton /hjaaj
<br>
CHEKFLAGS&#160; = -nopure -nopretty -nocommon -nousage -noarray -notruncation -quiet&#160; -noargumants -arguments=number&#160; -usage=var-unitialized
<br>
# -usage=var-unitialized:arg-const-modified:arg-alias
<br>
# -usage=var-unitialized:var-set-unused:arg-unused:arg-const-modified:arg-alias
<br>
#
<br>
default : linuxparallel.x
<br>
#
<br>
# Parallel initialization
<br>
#
<br>
MPI_INCLUDE_DIR = -I/usr/lib/openmpi/include
<br>
MPI_LIB_PATH&#160;&#160;&#160; = -L/usr/lib/openmpi/lib
<br>
MPI_LIB&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; = -lmpi
<br>
#
<br>
#
<br>
# Suffix rules
<br>
# hjaaj Oct 04: .g is a &quot;cheat&quot; suffix, for debugging.
<br>
#&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 'make x.g' will create x.o from x.F or x.c with -g debug flag set.
<br>
#
<br>
..SUFFIXES : .F .o .c .i .g
<br>
<p>..F.o:
<br>
&#160;&#160;&#160; $(F77) $(INCLUDES) $(CPPFLAGS) $(FFLAGS) -c $*.F 
<br>
<p>..F.g:
<br>
&#160;&#160;&#160; $(F77) $(INCLUDES) $(CPPFLAGS) $(FFLAGS) -g -c $*.F 
<br>
<p>..c.o:
<br>
&#160;&#160;&#160; $(CC) $(INCLUDES) $(CPPFLAGS) $(CFLAGS) -c $*.c 
<br>
<p>..c.g:
<br>
&#160;&#160;&#160; $(CC) $(INCLUDES) $(CPPFLAGS) $(CFLAGS) -g -c $*.c 
<br>
<p>..F.i:
<br>
&#160;&#160;&#160; $(F77) $(INCLUDES) $(CPPFLAGS) -E $*.F &gt; $*.i
<br>
<p>++++++++++++++++++++++++++++++++++++
<br>
<p>&quot;make&quot; command gives me the error:
<br>
<p>+++++++++++++++++++++++++++++++++++++++
<br>
<p>---------------&gt; Linking sequential dalton.x ...
<br>
mpif77.openmpi -march=x86-64 -O3 -ffast-math -fexpensive-optimizations -funroll-loops -fno-range-check -fsecond-underscore \
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160; -o /root/Fig/dalton-2.0/bin/dalton.x abacus/dalton.o cc/crayio.o abacus/linux_mem_allo.o \
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160; abacus/herpar.o eri/eri2par.o amfi/amfi.o amfi/symtra..o gp/mpi_dummy.o -Labacus -labacus -Lrsp -lrsp -Lsirius -lsirius -labacus -Leri -leri -Ldensfit -ldensfit -Lcc&#160; -lcc -Ldft -ldft -Lgp -lgp -Lpdpack -lpdpack -L/usr/lib -llapack -lblas
<br>
dft/libdft.a(general.o): In function `mpi_sync_data':
<br>
general.c:(.text+0x78): undefined reference to `ompi_mpi_comm_world'
<br>
general.c:(.text+0xc3): undefined reference to `ompi_mpi_comm_world'
<br>
general.c:(.text+0xdc): undefined reference to `ompi_mpi_comm_world'
<br>
general.c:(.text+0xff): undefined reference to `ompi_mpi_comm_world'
<br>
general.c:(.text+0x122): undefined reference to `ompi_mpi_comm_world'
<br>
dft/libdft.a(general.o):general.c:(.text+0x136): more undefined references to `ompi_mpi_comm_world' follow
<br>
dft/libdft.a(general.o): In function `dft_cslave__':
<br>
general.c:(.text+0x44e): undefined reference to `ompi_mpi_int'
<br>
dft/libdft.a(general.o): In function `dft_wake_slaves':
<br>
general.c:(.text+0x485): undefined reference to `ompi_mpi_comm_world'
<br>
general.c:(.text+0x4e7): undefined reference to `ompi_mpi_comm_world'
<br>
general.c:(.text+0x4ee): undefined reference to `ompi_mpi_int'
<br>
general.c:(.text+0x507): undefined reference to `ompi_mpi_comm_world'
<br>
general.c:(.text+0x50e): undefined reference to `ompi_mpi_int'
<br>
general.c:(.text+0x528): undefined reference to `ompi_mpi_comm_world'
<br>
general.c:(.text+0x52f): undefined reference to `ompi_mpi_int'
<br>
dft/libdft.a(general.o): In function `dftfuncsync_':
<br>
general.c:(.text+0x13d1): undefined reference to `ompi_mpi_comm_world'
<br>
general.c:(.text+0x13d6): undefined reference to `ompi_mpi_int'
<br>
general.c:(.text+0x140c): undefined reference to `ompi_mpi_comm_world'
<br>
general.c:(.text+0x1411): undefined reference to `ompi_mpi_char'
<br>
dft/libdft.a(grid-gen.o): In function `grid_generate':
<br>
grid-gen.c:(.text+0x6bc1): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x6bc6): undefined reference to `ompi_mpi_int'
<br>
grid-gen.c:(.text+0x6c00): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x6c10): undefined reference to `ompi_mpi_int'
<br>
grid-gen.c:(.text+0x6c2d): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x6c38): undefined reference to `ompi_mpi_double'
<br>
grid-gen.c:(.text+0x6c5c): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x6c67): undefined reference to `ompi_mpi_double'
<br>
grid-gen.c:(.text+0x6c8a): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x6c95): undefined reference to `ompi_mpi_double'
<br>
grid-gen.c:(.text+0x6cbb): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x6cc6): undefined reference to `ompi_mpi_int'
<br>
dft/libdft.a(grid-gen.o): In function `grid_open':
<br>
grid-gen.c:(.text+0x7c7d): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x7c8c): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x7cfe): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x7d03): undefined reference to `ompi_mpi_double'
<br>
grid-gen.c:(.text+0x7d26): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x7d2d): undefined reference to `ompi_mpi_int'
<br>
grid-gen.c:(.text+0x7f71): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x7f7e): undefined reference to `ompi_mpi_int'
<br>
grid-gen.c:(.text+0x8001): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x83cc): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x83d7): undefined reference to `ompi_mpi_int'
<br>
grid-gen.c:(.text+0x8410): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x841b): undefined reference to `ompi_mpi_int'
<br>
grid-gen.c:(.text+0x8449): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x8454): undefined reference to `ompi_mpi_double'
<br>
grid-gen.c:(.text+0x847c): undefined reference to `ompi_mpi_double'
<br>
grid-gen.c:(.text+0x848d): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x84af): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x84ba): undefined reference to `ompi_mpi_double'
<br>
grid-gen.c:(.text+0x84df): undefined reference to `ompi_mpi_comm_world'
<br>
grid-gen.c:(.text+0x84ea): undefined reference to `ompi_mpi_int'
<br>
dft/libdft.a(prop-eval.o): In function `dft_lin_respf__':
<br>
prop-eval.c:(.text+0x3e6c): undefined reference to `ompi_mpi_comm_world'
<br>
prop-eval.c:(.text+0x3e71): undefined reference to `ompi_mpi_int'
<br>
prop-eval.c:(.text+0x41c1): undefined reference to `ompi_mpi_op_sum'
<br>
prop-eval.c:(.text+0x41c6): undefined reference to `ompi_mpi_double'
<br>
prop-eval.c:(.text+0x41ce): undefined reference to `ompi_mpi_comm_world'
<br>
prop-eval.c:(.text+0x45f7): undefined reference to `ompi_mpi_op_sum'
<br>
prop-eval.c:(.text+0x45fc): undefined reference to `ompi_mpi_double'
<br>
prop-eval.c:(.text+0x460a): undefined reference to `ompi_mpi_comm_world'
<br>
dft/libdft.a(prop-eval.o): In function `dft_lin_respab__':
<br>
prop-eval.c:(.text+0x9ebb): undefined reference to `ompi_mpi_int'
<br>
prop-eval.c:(.text+0x9ec1): undefined reference to `ompi_mpi_comm_world'
<br>
dft/libdft.a(prop-eval.o): In function `dft_lin_resp_':
<br>
prop-eval.c:(.text+0xa882): undefined reference to `ompi_mpi_comm_world'
<br>
prop-eval.c:(.text+0xa887): undefined reference to `ompi_mpi_int'
<br>
dft/libdft.a(prop-eval.o):(.data+0x10): undefined reference to `ompi_mpi_double'
<br>
dft/libdft.a(prop-eval.o):(.data+0x28): undefined reference to `ompi_mpi_double'
<br>
dft/libdft.a(prop-eval.o):(.data+0x40): undefined reference to `ompi_mpi_int'
<br>
dft/libdft.a(prop-eval.o):(.data+0x58): undefined reference to `ompi_mpi_int'
<br>
dft/libdft.a(quad-fast.o): In function `dftqrcf_':
<br>
quad-fast.c:(.text+0x354): undefined reference to `ompi_mpi_op_sum'
<br>
quad-fast.c:(.text+0x359): undefined reference to `ompi_mpi_double'
<br>
quad-fast.c:(.text+0x364): undefined reference to `ompi_mpi_comm_world'
<br>
dft/libdft.a(quad-fast.o):(.data+0x10): undefined reference to `ompi_mpi_double'
<br>
dft/libdft.a(quad-fast.o):(.data+0x28): undefined reference to `ompi_mpi_double'
<br>
dft/libdft.a(quad-fast.o):(.data+0x40): undefined reference to `ompi_mpi_double'
<br>
dft/libdft.a(quad-fast.o):(.data+0x58): undefined reference to `ompi_mpi_int'
<br>
dft/libdft.a(quad-fast.o):(.data+0x70): undefined reference to `ompi_mpi_int'
<br>
dft/libdft.a(quad-fast.o):(.data+0x88): undefined reference to `ompi_mpi_int'
<br>
dft/libdft.a(quad-fast.o):(.data+0xa0): undefined reference to `ompi_mpi_int'
<br>
dft/libdft.a(quad-fast.o):(.data+0xb8): undefined reference to `ompi_mpi_int'
<br>
dft/libdft.a(quad-fast.o):(.rodata+0x30): more undefined references to `ompi_mpi_int' follow
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_get_group'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_get_view'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_sync'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_get_amode'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Pack_external'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_iwrite_at'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Status_set_elements'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_fortran_status_ignore'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Add_error_class'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_get_type_extent'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_delete'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_FORTRAN_BOTTOM'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_write_all_begin'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_read_at_all_end'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_fortran_bottom'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_fortran_argv_f2c'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_mpi_param_check'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_FORTRAN_IN_PLACE'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_write_ordered'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_request_null'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_set_errhandler'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_attr_get_fortran_mpi2'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_fortran_statuses_ignore'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_read_all_begin'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_read_ordered_begin'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Pack_external_size'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_fortran_bottom_'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_set_atomicity'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_iwrite'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_errhandler_invoke'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_fortran_string_f2c'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_write_all_end'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_seek'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_write_at_all_begin'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_read_at_all_begin'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_FORTRAN_ARGV_NULL'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_write_at_all'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_get_atomicity'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_read_ordered_end'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_open'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Win_unlock'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_fortran_in_place'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_fortran_status_ignore_'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_read_all'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_write_ordered_begin'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_fortran_statuses_ignore_'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Type_create_indexed_block'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Grequest_complete'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Unpack_external'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_fortran_errcodes_ignore'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_fortran_in_place_'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_c2f'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_iwrite_shared'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_attr_get_fortran_mpi1'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_attr_set_fortran_mpi2'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_mpi_finalized'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_read_at'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_read_ordered'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_FORTRAN_STATUS_IGNORE'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_read'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Win_test'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_fortran_multiple_argvs_f2c'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_get_errhandler'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_errcode_intern_lastused'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_f2c'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_iread_at'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_mpi_initialized'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_iread'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_create_errhandler'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_mpi_file_null'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_set_info'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_read_shared'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_fortran_argv_null_'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_attr_create_keyval'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_read_at_all'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_preallocate'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_iread_shared'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_FORTRAN_ERRCODES_IGNORE'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_close'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Register_datarep'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_FORTRAN_STATUSES_IGNORE'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_write_at'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_set_size'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_fortran_errcodes_ignore_'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Type_create_f90_real'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_write_shared'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_attr_set_fortran_mpi1'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_write'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_write_ordered_end'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_mpi_datatype_null'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_get_info'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_set_view'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Win_lock'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Request_get_status'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_fortran_argv_null'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_read_all_end'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_call_errhandler'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Add_error_string'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_errcodes_intern'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_get_position'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_get_size'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_write_all'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_get_byte_offset'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_ddt_match_size'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_FORTRAN_ARGVS_NULL'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Comm_call_errhandler'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_fortran_argvs_null'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_get_position_shared'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_mpi_errors_are_fatal_comm_handler'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_fortran_string_c2f'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_File_write_at_all_end'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Type_create_f90_integer'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Type_create_f90_complex'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Status_set_cancelled'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Win_call_errhandler'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Add_error_code'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_fortran_argvs_null_'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_Grequest_start'
<br>
collect2: ld returned 1 exit status
<br>
make: *** [linux.x] Error 1
<br>
pelican:~/Fig/dalton-2.0#&#160; 
<br>
<p>+++++++++++++++++++++++++++++++++++
<br>
<p>I think that there is some sort of mixing LAM with OpenMPI libraries.
<br>
I don't know what am I doing wrong.
<br>
Thank you
<br>
<p><p><p><p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9315/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9316.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Previous message:</strong> <a href="9314.php">Katz, Jacob: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9351.php">Silviu Groza: "Re: [OMPI users] Problem installing Dalton with OpenMPI over PelicanHPC"</a>
<li><strong>Maybe reply:</strong> <a href="9351.php">Silviu Groza: "Re: [OMPI users] Problem installing Dalton with OpenMPI over PelicanHPC"</a>
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
