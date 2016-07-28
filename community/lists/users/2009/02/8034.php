<?
$subject_val = "[OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 09:09:42 2009" -->
<!-- isoreceived="20090212140942" -->
<!-- sent="Thu, 12 Feb 2009 15:09:23 +0100 (CET)" -->
<!-- isosent="20090212140923" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4" -->
<!-- id="200902121409.n1CE9NiA023103_at_tyr.informatik.fh-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 09:09:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8035.php">Gary Draving: "Re: [OMPI users] openmpi/ib noob question"</a>
<li><strong>Previous message:</strong> <a href="8033.php">Siegmar Gross: "[OMPI users] openmpi-1.2.8: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8037.php">Ralph Castain: "Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<li><strong>Reply:</strong> <a href="8037.php">Ralph Castain: "Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have installed openmpi-1.3 using Cygwin 1.5 on top of Windows
<br>
XP Pro with gcc-3.4.4 with the following commands.
<br>
<p>At first I added &quot;#define NOMINMAX&quot; before the line
<br>
&quot;#include MCA_timer_IMPLEMENTATION_HEADER&quot; and &quot;#undef NOMINMAX&quot;
<br>
after that line in file &quot;ompi/tools/ompi_info/param.cc&quot; as described
<br>
in the mail archives.
<br>
<p>configure --prefix=/usr/local/openmpi-1.3 \
<br>
&nbsp;&nbsp;CFLAGS=&quot;&quot; CXXFLAGS=&quot;&quot; FFLAGS=&quot;&quot; FCFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;CPPFLAGS=&quot;&quot; C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
<br>
&nbsp;&nbsp;OBJC_INCLUDE_PATH=&quot;&quot; \
<br>
&nbsp;&nbsp;--without-udapl \
<br>
&nbsp;&nbsp;--enable-cxx-exceptions --enable-mpi-threads \
<br>
&nbsp;&nbsp;--enable-progress-threads --with-threads=posix \
<br>
&nbsp;&nbsp;--enable-static --without-cs-fs \
<br>
&nbsp;&nbsp;--enable-heterogeneous --with-mpi-param_check=always \
<br>
&nbsp;&nbsp;--enable-contrib-no-build=vt \
<br>
&nbsp;&nbsp;--enable-mca-no-build=memory_mallopt,paffinity \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV
<br>
<p>make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV
<br>
make install |&amp; tee log.make-install.$SYSTEM_ENV.$MACHINE_ENV
<br>
<p><p><p>I get the following output when I run some commands.
<br>
<p><p>eiger Admin 5 set MPI = openmpi-1.3
<br>
eiger Admin 6 source .mpi.csh
<br>
<p>eiger hello1 9 make
<br>
mpicc  -m32 -Wall -Wstrict-prototypes -Wmissing-prototypes -pedantic -std=c99 
<br>
-DCygwin -Dx86 -c -o hello1_mpi.o \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hello1_mpi.c
<br>
mpicc  -m32 -o /home/Admin/Cygwin/x86/bin/hello1_mpi.exe hello1_mpi.o 
<br>
/usr/lib/gcc/i686-pc-cygwin/3.4.4/../../../../i686-pc-cygwin/bin/ld: cannot find 
<br>
-lmpi
<br>
collect2: ld returned 1 exit status
<br>
make: *** [/home/Admin/Cygwin/x86/bin/hello1_mpi.exe] Error 1
<br>
eiger hello1 10 ls -l /usr/local/openmpi-1.3/lib/
<br>
total 5432
<br>
-rwxr-xr-x  1 Admin Kein     969 Feb  8 14:17 libmpi.la
<br>
-rw-r--r--  1 Admin Kein 2852212 Feb  8 14:17 libmpi.lib
<br>
-rwxr-xr-x  1 Admin Kein    1018 Feb  8 14:22 libmpi_cxx.la
<br>
-rw-r--r--  1 Admin Kein  591668 Feb  8 14:22 libmpi_cxx.lib
<br>
-rwxr-xr-x  1 Admin Kein    1018 Feb  8 14:22 libmpi_f77.la
<br>
-rw-r--r--  1 Admin Kein  858986 Feb  8 14:22 libmpi_f77.lib
<br>
-rwxr-xr-x  1 Admin Kein     900 Feb  8 14:13 libopen-pal.la
<br>
-rw-r--r--  1 Admin Kein  468364 Feb  8 14:13 libopen-pal.lib
<br>
-rwxr-xr-x  1 Admin Kein     942 Feb  8 14:14 libopen-rte.la
<br>
-rw-r--r--  1 Admin Kein  758034 Feb  8 14:14 libopen-rte.lib
<br>
drwxr-xr-x+ 2 Admin Kein       0 Feb  8 14:15 openmpi
<br>
eiger hello1 11 
<br>
<p><p><p>Indeed the library isn't available. When I search the log-files I
<br>
can find the following problems.
<br>
<p><p>wi23 openmpi-1.3-gcc 3 grep -i warning log.configure.Cygwin.x86 
<br>
configure: WARNING:  -fno-strict-aliasing has been added to CFLAGS
<br>
configure: WARNING:  -finline-functions has been added to CXXFLAGS
<br>
configure: WARNING: MPI_REAL16 and MPI_COMPLEX32 support have been disabled
<br>
configure: WARNING: *** Fortran 90/95 bindings disabled (could not find 
<br>
compiler)
<br>
configure: WARNING: *** Shared libraries have been disabled (--disable-shared)
<br>
configure: WARNING: *** Building MCA components as DSOs automatically disabled
<br>
configure: WARNING: Unknown architecture ... proceeding anyway
<br>
configure: WARNING: File locks may not work with NFS.  See the Installation and
<br>
configure: WARNING: unrecognized options: --without-udapl, 
<br>
--enable-cxx-exceptions, --enable-mpi-threads, --enable-progress-threads, 
<br>
--with-threads, --without-cs-fs, --enable-heterogeneous, --with-mpi-param_check, 
<br>
--enable-contrib-no-build, --enable-mca-no-build, --enable-ltdl-convenience
<br>
configure: WARNING: unrecognized options: --without-udapl, 
<br>
--enable-cxx-exceptions, --enable-mpi-threads, --enable-progress-threads, 
<br>
--with-threads, --without-cs-fs, --enable-heterogeneous, --with-mpi-param_check, 
<br>
--enable-contrib-no-build, --enable-mca-no-build, --enable-ltdl-convenience
<br>
wi23 openmpi-1.3-gcc 4 
<br>
<p><p><p>wi23 openmpi-1.3-gcc 4 grep -i warning log.make.Cygwin.x86     
<br>
libtool: link: warning: undefined symbols not allowed in i686-pc-cygwin shared 
<br>
libraries
<br>
base/plm_base_launch_support.c:334: warning: passing arg 3 of pointer to 
<br>
function from incompatible pointer type
<br>
base/plm_base_launch_support.c:360: warning: passing arg 3 of pointer to 
<br>
function from incompatible pointer type
<br>
runtime/orte_mca_params.c:159: warning: passing arg 7 of 
<br>
`mca_base_param_reg_int_name' from incompatible pointer type
<br>
util/nidmap.c:370: warning: passing arg 3 of pointer to function from 
<br>
incompatible pointer type
<br>
util/nidmap.c:394: warning: passing arg 3 of pointer to function from 
<br>
incompatible pointer type
<br>
util/nidmap.c:401: warning: passing arg 3 of pointer to function from 
<br>
incompatible pointer type
<br>
util/nidmap.c:409: warning: passing arg 3 of pointer to function from 
<br>
incompatible pointer type
<br>
util/nidmap.c:416: warning: passing arg 3 of pointer to function from 
<br>
incompatible pointer type
<br>
util/nidmap.c:423: warning: passing arg 3 of pointer to function from 
<br>
incompatible pointer type
<br>
util/nidmap.c:430: warning: passing arg 3 of pointer to function from 
<br>
incompatible pointer type
<br>
util/nidmap.c:437: warning: passing arg 3 of pointer to function from 
<br>
incompatible pointer type
<br>
util/nidmap.c:479: warning: passing arg 3 of pointer to function from 
<br>
incompatible pointer type
<br>
util/nidmap.c:485: warning: passing arg 3 of pointer to function from 
<br>
incompatible pointer type
<br>
util/nidmap.c:508: warning: passing arg 3 of pointer to function from 
<br>
incompatible pointer type
<br>
util/nidmap.c:519: warning: passing arg 3 of pointer to function from 
<br>
incompatible pointer type
<br>
util/nidmap.c:546: warning: passing arg 3 of pointer to function from 
<br>
incompatible pointer type
<br>
util/nidmap.c:560: warning: passing arg 3 of pointer to function from 
<br>
incompatible pointer type
<br>
*** Warning: This system can not link to static lib archive 
<br>
/home/Admin/MPI/OpenMpi/openmpi-1.3/opal/libopen-pal.la.
<br>
libtool: link: warning: undefined symbols not allowed in i686-pc-cygwin shared 
<br>
libraries
<br>
orte-ps.c:802: warning: passing arg 3 of `orte_util_comm_query_job_info' from 
<br>
incompatible pointer type
<br>
orte-ps.c:813: warning: passing arg 3 of `orte_util_comm_query_node_info' from 
<br>
incompatible pointer type
<br>
../../ompi/datatype/datatype_pack.h:41: warning: passing arg 5 of 
<br>
`opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
../../ompi/datatype/datatype_pack.h:51: warning: passing arg 5 of 
<br>
`opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
../../ompi/datatype/datatype_pack.h:82: warning: passing arg 5 of 
<br>
`opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
datatype_pack.c:75: warning: passing arg 3 of `opal_uicsum_partial' from 
<br>
incompatible pointer type
<br>
datatype_pack.c:80: warning: passing arg 5 of `opal_bcopy_uicsum_partial' from 
<br>
incompatible pointer type
<br>
datatype_pack.c:143: warning: passing arg 3 of `opal_uicsum_partial' from 
<br>
incompatible pointer type
<br>
datatype_pack.c:162: warning: passing arg 3 of `opal_uicsum_partial' from 
<br>
incompatible pointer type
<br>
datatype_pack.c:168: warning: passing arg 3 of `opal_uicsum_partial' from 
<br>
incompatible pointer type
<br>
datatype_pack.c:193: warning: passing arg 5 of `opal_bcopy_uicsum_partial' from 
<br>
incompatible pointer type
<br>
datatype_pack.c:203: warning: passing arg 5 of `opal_bcopy_uicsum_partial' from 
<br>
incompatible pointer type
<br>
datatype_pack.c:214: warning: passing arg 5 of `opal_bcopy_uicsum_partial' from 
<br>
incompatible pointer type
<br>
../../ompi/datatype/datatype_unpack.h:41: warning: passing arg 5 of 
<br>
`opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
../../ompi/datatype/datatype_unpack.h:51: warning: passing arg 5 of 
<br>
`opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
../../ompi/datatype/datatype_unpack.h:82: warning: passing arg 5 of 
<br>
`opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
datatype_unpack.c:221: warning: passing arg 5 of `opal_bcopy_uicsum_partial' 
<br>
from incompatible pointer type
<br>
datatype_unpack.c:239: warning: passing arg 5 of `opal_bcopy_uicsum_partial' 
<br>
from incompatible pointer type
<br>
datatype_unpack.c:250: warning: passing arg 5 of `opal_bcopy_uicsum_partial' 
<br>
from incompatible pointer type
<br>
datatype_unpack.c:263: warning: passing arg 5 of `opal_bcopy_uicsum_partial' 
<br>
from incompatible pointer type
<br>
datatype_unpack.c:400: warning: passing arg 3 of `opal_uicsum_partial' from 
<br>
incompatible pointer type
<br>
datatype_unpack.c:434: warning: passing arg 3 of `opal_uicsum_partial' from 
<br>
incompatible pointer type
<br>
dt_args.c:605: warning: passing arg 1 of `__ompi_ddt_create_from_args' from 
<br>
incompatible pointer type
<br>
dt_args.c:642: warning: passing arg 2 of `ompi_ddt_create_indexed' from 
<br>
incompatible pointer type
<br>
dt_args.c:642: warning: passing arg 3 of `ompi_ddt_create_indexed' from 
<br>
incompatible pointer type
<br>
dt_args.c:647: warning: passing arg 2 of `ompi_ddt_create_hindexed' from 
<br>
incompatible pointer type
<br>
dt_args.c:651: warning: passing arg 3 of `ompi_ddt_create_indexed_block' from 
<br>
incompatible pointer type
<br>
dt_args.c:656: warning: passing arg 2 of `ompi_ddt_create_struct' from 
<br>
incompatible pointer type
<br>
libtool: link: warning: undefined symbols not allowed in i686-pc-cygwin shared 
<br>
libraries
<br>
pcomm_get_errhandler.c:65: warning: cast from pointer to integer of different 
<br>
size
<br>
pcomm_get_errhandler.c:65: warning: cast from pointer to integer of different 
<br>
size
<br>
pcomm_set_errhandler.c:67: warning: cast from pointer to integer of different 
<br>
size
<br>
pcomm_set_errhandler.c:67: warning: cast from pointer to integer of different 
<br>
size
<br>
pcomm_set_errhandler.c:74: warning: cast from pointer to integer of different 
<br>
size
<br>
pcomm_set_errhandler.c:74: warning: cast from pointer to integer of different 
<br>
size
<br>
ppack_external.c:93: warning: passing arg 3 of `ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
ppack.c:91: warning: passing arg 3 of `ompi_convertor_pack' from incompatible 
<br>
pointer type
<br>
ptype_contiguous.c:66: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
ptype_create_darray.c:226: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
ptype_create_f90_complex.c:101: warning: passing arg 3 of `ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
ptype_create_f90_integer.c:100: warning: passing arg 3 of `ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
ptype_create_f90_real.c:102: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
ptype_create_hindexed.c:84: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
ptype_create_hvector.c:77: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
ptype_create_indexed_block.c:76: warning: passing arg 3 of `ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
ptype_create_struct.c:92: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
ptype_create_subarray.c:147: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
ptype_get_contents.c:68: warning: passing arg 3 of `ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_contents.c:68: warning: passing arg 4 of `ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_contents.c:68: warning: passing arg 5 of `ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_contents.c:68: warning: passing arg 7 of `ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_envelope.c:63: warning: passing arg 3 of `ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_envelope.c:63: warning: passing arg 5 of `ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_envelope.c:63: warning: passing arg 7 of `ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_envelope.c:63: warning: passing arg 9 of `ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_indexed.c:88: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
ptype_vector.c:73: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
punpack_external.c:85: warning: passing arg 3 of `ompi_convertor_unpack' from 
<br>
incompatible pointer type
<br>
punpack.c:96: warning: passing arg 3 of `ompi_convertor_unpack' from 
<br>
incompatible pointer type
<br>
pwin_get_errhandler.c:57: warning: cast from pointer to integer of different 
<br>
size
<br>
pwin_get_errhandler.c:57: warning: cast from pointer to integer of different 
<br>
size
<br>
pwin_set_errhandler.c:60: warning: cast from pointer to integer of different 
<br>
size
<br>
pwin_set_errhandler.c:60: warning: cast from pointer to integer of different 
<br>
size
<br>
pwin_set_errhandler.c:66: warning: cast from pointer to integer of different 
<br>
size
<br>
pwin_set_errhandler.c:66: warning: cast from pointer to integer of different 
<br>
size
<br>
pfile_get_errhandler.c:64: warning: cast from pointer to integer of different 
<br>
size
<br>
pfile_get_errhandler.c:64: warning: cast from pointer to integer of different 
<br>
size
<br>
pfile_set_errhandler.c:67: warning: cast from pointer to integer of different 
<br>
size
<br>
pfile_set_errhandler.c:67: warning: cast from pointer to integer of different 
<br>
size
<br>
pfile_set_errhandler.c:73: warning: cast from pointer to integer of different 
<br>
size
<br>
pfile_set_errhandler.c:73: warning: cast from pointer to integer of different 
<br>
size
<br>
comm_get_errhandler.c:65: warning: cast from pointer to integer of different 
<br>
size
<br>
comm_get_errhandler.c:65: warning: cast from pointer to integer of different 
<br>
size
<br>
comm_set_errhandler.c:67: warning: cast from pointer to integer of different 
<br>
size
<br>
comm_set_errhandler.c:67: warning: cast from pointer to integer of different 
<br>
size
<br>
comm_set_errhandler.c:74: warning: cast from pointer to integer of different 
<br>
size
<br>
comm_set_errhandler.c:74: warning: cast from pointer to integer of different 
<br>
size
<br>
pack_external.c:93: warning: passing arg 3 of `ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pack.c:91: warning: passing arg 3 of `ompi_convertor_pack' from incompatible 
<br>
pointer type
<br>
type_contiguous.c:66: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
type_create_darray.c:226: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
type_create_f90_complex.c:101: warning: passing arg 3 of `ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
type_create_f90_integer.c:100: warning: passing arg 3 of `ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
type_create_f90_real.c:102: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
type_create_hindexed.c:84: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
type_create_hvector.c:77: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
type_create_indexed_block.c:76: warning: passing arg 3 of `ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
type_create_struct.c:92: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
type_create_subarray.c:147: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
type_get_contents.c:68: warning: passing arg 3 of `ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_contents.c:68: warning: passing arg 4 of `ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_contents.c:68: warning: passing arg 5 of `ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_contents.c:68: warning: passing arg 7 of `ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_envelope.c:63: warning: passing arg 3 of `ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_envelope.c:63: warning: passing arg 5 of `ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_envelope.c:63: warning: passing arg 7 of `ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_envelope.c:63: warning: passing arg 9 of `ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_indexed.c:88: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
type_vector.c:73: warning: passing arg 3 of `ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
unpack_external.c:85: warning: passing arg 3 of `ompi_convertor_unpack' from 
<br>
incompatible pointer type
<br>
unpack.c:96: warning: passing arg 3 of `ompi_convertor_unpack' from incompatible 
<br>
pointer type
<br>
win_get_errhandler.c:57: warning: cast from pointer to integer of different size
<br>
win_get_errhandler.c:57: warning: cast from pointer to integer of different size
<br>
win_set_errhandler.c:60: warning: cast from pointer to integer of different size
<br>
win_set_errhandler.c:60: warning: cast from pointer to integer of different size
<br>
win_set_errhandler.c:66: warning: cast from pointer to integer of different size
<br>
win_set_errhandler.c:66: warning: cast from pointer to integer of different size
<br>
file_get_errhandler.c:64: warning: cast from pointer to integer of different 
<br>
size
<br>
file_get_errhandler.c:64: warning: cast from pointer to integer of different 
<br>
size
<br>
file_set_errhandler.c:67: warning: cast from pointer to integer of different 
<br>
size
<br>
file_set_errhandler.c:67: warning: cast from pointer to integer of different 
<br>
size
<br>
file_set_errhandler.c:73: warning: cast from pointer to integer of different 
<br>
size
<br>
file_set_errhandler.c:73: warning: cast from pointer to integer of different 
<br>
size
<br>
base/pml_base_bsend.c:258: warning: passing arg 3 of `ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pml_cm_send.c:79: warning: passing arg 3 of `ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pml_cm_send.c:144: warning: passing arg 3 of `ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pml_cm_start.c:116: warning: passing arg 3 of `ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pml_ob1_sendreq.c:388: warning: passing arg 3 of `ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pml_ob1_sendreq.c:427: warning: passing arg 3 of `ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pml_ob1_sendreq.c:534: warning: passing arg 3 of `ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of 
<br>
`ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of 
<br>
`ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of 
<br>
`ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of 
<br>
`ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of 
<br>
`ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of 
<br>
`ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of 
<br>
`ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_start.c:29: warning: passing arg 1 of 
<br>
`vprotocol_pessimist_matching_replay' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of 
<br>
`ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of 
<br>
`ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of 
<br>
`ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of 
<br>
`ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of 
<br>
`ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of 
<br>
`ompi_convertor_pack' from incompatible pointer type
<br>
attribute/attribute.c:681: warning: passing arg 1 of pointer to function from 
<br>
incompatible pointer type
<br>
attribute/attribute.c:681: warning: passing arg 1 of pointer to function from 
<br>
incompatible pointer type
<br>
attribute/attribute.c:897: warning: passing arg 1 of pointer to function from 
<br>
incompatible pointer type
<br>
attribute/attribute.c:897: warning: passing arg 1 of pointer to function from 
<br>
incompatible pointer type
<br>
attribute/attribute.c:1067: warning: passing arg 1 of pointer to function from 
<br>
incompatible pointer type
<br>
attribute/attribute.c:1067: warning: passing arg 1 of pointer to function from 
<br>
incompatible pointer type
<br>
*** Warning: This system can not link to static lib archive 
<br>
/home/Admin/MPI/OpenMpi/openmpi-1.3/orte/libopen-rte.la.
<br>
*** Warning: This system can not link to static lib archive 
<br>
/home/Admin/MPI/OpenMpi/openmpi-1.3/opal/libopen-pal.la.
<br>
libtool: link: warning: undefined symbols not allowed in i686-pc-cygwin shared 
<br>
libraries
<br>
*** Warning: This system can not link to static lib archive 
<br>
../../../ompi/libmpi.la.
<br>
*** Warning: This system can not link to static lib archive 
<br>
/home/Admin/MPI/OpenMpi/openmpi-1.3/orte/libopen-rte.la.
<br>
*** Warning: This system can not link to static lib archive 
<br>
/home/Admin/MPI/OpenMpi/openmpi-1.3/opal/libopen-pal.la.
<br>
libtool: link: warning: undefined symbols not allowed in i686-pc-cygwin shared 
<br>
libraries
<br>
*** Warning: This system can not link to static lib archive 
<br>
../../../ompi/libmpi.la.
<br>
*** Warning: This system can not link to static lib archive 
<br>
/home/Admin/MPI/OpenMpi/openmpi-1.3/orte/libopen-rte.la.
<br>
*** Warning: This system can not link to static lib archive 
<br>
/home/Admin/MPI/OpenMpi/openmpi-1.3/opal/libopen-pal.la.
<br>
libtool: link: warning: undefined symbols not allowed in i686-pc-cygwin shared 
<br>
libraries
<br>
wi23 openmpi-1.3-gcc 5 
<br>
<p><p><p>The log-files contain no errors. Does anybody know what's wrong with
<br>
the installation? Does anybody have a working installation? Thank
<br>
you very much for any help in advance.
<br>
<p><p>Kind regads
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8035.php">Gary Draving: "Re: [OMPI users] openmpi/ib noob question"</a>
<li><strong>Previous message:</strong> <a href="8033.php">Siegmar Gross: "[OMPI users] openmpi-1.2.8: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8037.php">Ralph Castain: "Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<li><strong>Reply:</strong> <a href="8037.php">Ralph Castain: "Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
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
