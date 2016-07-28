<?
$subject_val = "[OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-4.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 09:10:26 2009" -->
<!-- isoreceived="20090212141026" -->
<!-- sent="Thu, 12 Feb 2009 15:10:02 +0100 (CET)" -->
<!-- isosent="20090212141002" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-4.3.2" -->
<!-- id="200902121410.n1CEA2vW023106_at_tyr.informatik.fh-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-4.3.2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 09:10:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8037.php">Ralph Castain: "Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<li><strong>Previous message:</strong> <a href="8035.php">Gary Draving: "Re: [OMPI users] openmpi/ib noob question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have installed openmpi-1.3 using Cygwin 1.5 on top of Windows
<br>
XP Pro with gcc-4.3.2 with the following commands.
<br>
<p>At first I added &quot;#define NOMINMAX&quot; before the line
<br>
&quot;#include MCA_timer_IMPLEMENTATION_HEADER&quot; and &quot;#undef NOMINMAX&quot;
<br>
after that line in file &quot;ompi/tools/ompi_info/param.cc&quot; as described
<br>
in the mail archives.
<br>
<p>configure --prefix=/usr/local/openmpi-1.3-gcc-4 \
<br>
&nbsp;&nbsp;CFLAGS=&quot;&quot; CXXFLAGS=&quot;&quot; FFLAGS=&quot;&quot; FCFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;CPPFLAGS=&quot;&quot; C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
<br>
&nbsp;&nbsp;OBJC_INCLUDE_PATH=&quot;&quot; \
<br>
&nbsp;&nbsp;CC=&quot;gcc-4&quot; CPP=&quot;cpp-4&quot; CXX=&quot;g++-4&quot; CXXCPP=&quot;cpp-4&quot; F77=&quot;gfortran-4&quot; \
<br>
&nbsp;&nbsp;FC=&quot;gfortran-4&quot; \
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
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.gcc-4
<br>
<p>make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.gcc-4
<br>
make install |&amp; tee log.make-install.$SYSTEM_ENV.$MACHINE_ENV.gcc-4
<br>
<p><p><p>I get the following output when I run some commands.
<br>
<p><p>eiger Admin 4 set MPI = openmpi-1.3-gcc-4
<br>
eiger Admin 5 source .mpi.csh
<br>
<p>eiger hello1 8 make
<br>
mpicc   -c -o hello1_mpi.o \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hello1_mpi.c
<br>
mpicc   -o /home/Admin/Cygwin/x86/bin/hello1_mpi.exe hello1_mpi.o 
<br>
<p>eiger hello1 9 mpiexec -np 2 hello1_mpi
<br>
[eiger:01120] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
<br>
ess_hnp_module.c at line 126
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_plm_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[eiger:01120] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
<br>
runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[eiger:01120] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file orterun.c at 
<br>
line 454
<br>
<p><p><p><p>eiger hello1 11 ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI Admin_at_eiger Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.3
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r20295
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Jan 19, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.3
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r20295
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Jan 19, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r20295
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Jan 19, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr/local/openmpi-1.3-gcc-4
<br>
&nbsp;Configured architecture: i686-pc-cygwin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: eiger
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: Admin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Sun Feb  8 13:14:24     2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: eiger
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: Admin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Sun Feb  8 16:15:32     2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: eiger
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (single underscore)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc-4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc-4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++-4
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++-4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran-4
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/gfortran-4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran-4
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /usr/bin/gfortran-4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: yes, progress: yes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: always
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: yes
<br>
&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
Symbol visibility support: no
<br>
&nbsp;&nbsp;&nbsp;FT Checkpoint support: no  (checkpoint thread: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: none (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: file (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: windows (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3)
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: env (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: singleton (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: tool (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3)
<br>
eiger hello1 12 
<br>
<p><p><p><p>When I search the log-files I can find the following problems.
<br>
<p><p>openmpi-1.3-gcc-4:
<br>
------------------
<br>
<p>wi23 openmpi-1.3-gcc-4 16 grep -i warning log.configure.Cygwin.x86.gcc-4 
<br>
configure: WARNING:  -fno-strict-aliasing has been added to CFLAGS
<br>
configure: WARNING:  -finline-functions has been added to CXXFLAGS
<br>
configure: WARNING: MPI_REAL16 and MPI_COMPLEX32 support have been disabled
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
wi23 openmpi-1.3-gcc-4 17 
<br>
<p><p><p>wi23 openmpi-1.3-gcc-4 17 grep -i warning log.make.Cygwin.x86.gcc-4     
<br>
libtool: link: warning: undefined symbols not allowed in i686-pc-cygwin shared 
<br>
libraries
<br>
base/plm_base_launch_support.c:334: warning: passing argument 3 of 
<br>
'opal_dss.unpack' from incompatible pointer type
<br>
base/plm_base_launch_support.c:360: warning: passing argument 3 of 
<br>
'opal_dss.unpack' from incompatible pointer type
<br>
runtime/orte_mca_params.c:159: warning: passing argument 7 of 
<br>
'mca_base_param_reg_int_name' from incompatible pointer type
<br>
util/nidmap.c:370: warning: passing argument 3 of 'opal_dss.unpack' from 
<br>
incompatible pointer type
<br>
util/nidmap.c:394: warning: passing argument 3 of 'opal_dss.unpack' from 
<br>
incompatible pointer type
<br>
util/nidmap.c:401: warning: passing argument 3 of 'opal_dss.unpack' from 
<br>
incompatible pointer type
<br>
util/nidmap.c:409: warning: passing argument 3 of 'opal_dss.unpack' from 
<br>
incompatible pointer type
<br>
util/nidmap.c:416: warning: passing argument 3 of 'opal_dss.unpack' from 
<br>
incompatible pointer type
<br>
util/nidmap.c:423: warning: passing argument 3 of 'opal_dss.unpack' from 
<br>
incompatible pointer type
<br>
util/nidmap.c:430: warning: passing argument 3 of 'opal_dss.unpack' from 
<br>
incompatible pointer type
<br>
util/nidmap.c:437: warning: passing argument 3 of 'opal_dss.unpack' from 
<br>
incompatible pointer type
<br>
util/nidmap.c:479: warning: passing argument 3 of 'opal_dss.unpack' from 
<br>
incompatible pointer type
<br>
util/nidmap.c:485: warning: passing argument 3 of 'opal_dss.unpack' from 
<br>
incompatible pointer type
<br>
util/nidmap.c:508: warning: passing argument 3 of 'opal_dss.unpack' from 
<br>
incompatible pointer type
<br>
util/nidmap.c:519: warning: passing argument 3 of 'opal_dss.unpack' from 
<br>
incompatible pointer type
<br>
util/nidmap.c:546: warning: passing argument 3 of 'opal_dss.unpack' from 
<br>
incompatible pointer type
<br>
util/nidmap.c:560: warning: passing argument 3 of 'opal_dss.unpack' from 
<br>
incompatible pointer type
<br>
*** Warning: This system can not link to static lib archive 
<br>
/home/Admin/MPI/OpenMpi/openmpi-1.3-gcc/opal/libopen-pal.la.
<br>
libtool: link: warning: undefined symbols not allowed in i686-pc-cygwin shared 
<br>
libraries
<br>
orte-ps.c:802: warning: passing argument 3 of 'orte_util_comm_query_job_info' 
<br>
from incompatible pointer type
<br>
orte-ps.c:813: warning: passing argument 3 of 'orte_util_comm_query_node_info' 
<br>
from incompatible pointer type
<br>
../../ompi/datatype/datatype_pack.h:41: warning: passing argument 5 of 
<br>
'opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
../../ompi/datatype/datatype_pack.h:51: warning: passing argument 5 of 
<br>
'opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
../../ompi/datatype/datatype_pack.h:82: warning: passing argument 5 of 
<br>
'opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
datatype_pack.c:75: warning: passing argument 3 of 'opal_uicsum_partial' from 
<br>
incompatible pointer type
<br>
datatype_pack.c:80: warning: passing argument 5 of 'opal_bcopy_uicsum_partial' 
<br>
from incompatible pointer type
<br>
datatype_pack.c:143: warning: passing argument 3 of 'opal_uicsum_partial' from 
<br>
incompatible pointer type
<br>
datatype_pack.c:162: warning: passing argument 3 of 'opal_uicsum_partial' from 
<br>
incompatible pointer type
<br>
datatype_pack.c:168: warning: passing argument 3 of 'opal_uicsum_partial' from 
<br>
incompatible pointer type
<br>
datatype_pack.c:193: warning: passing argument 5 of 'opal_bcopy_uicsum_partial' 
<br>
from incompatible pointer type
<br>
datatype_pack.c:203: warning: passing argument 5 of 'opal_bcopy_uicsum_partial' 
<br>
from incompatible pointer type
<br>
datatype_pack.c:214: warning: passing argument 5 of 'opal_bcopy_uicsum_partial' 
<br>
from incompatible pointer type
<br>
../../ompi/datatype/datatype_unpack.h:41: warning: passing argument 5 of 
<br>
'opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
../../ompi/datatype/datatype_unpack.h:51: warning: passing argument 5 of 
<br>
'opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
../../ompi/datatype/datatype_unpack.h:82: warning: passing argument 5 of 
<br>
'opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
datatype_unpack.c:221: warning: passing argument 5 of 
<br>
'opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
datatype_unpack.c:239: warning: passing argument 5 of 
<br>
'opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
datatype_unpack.c:250: warning: passing argument 5 of 
<br>
'opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
datatype_unpack.c:263: warning: passing argument 5 of 
<br>
'opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
datatype_unpack.c:400: warning: passing argument 3 of 'opal_uicsum_partial' from 
<br>
incompatible pointer type
<br>
datatype_unpack.c:434: warning: passing argument 3 of 'opal_uicsum_partial' from 
<br>
incompatible pointer type
<br>
dt_args.c:605: warning: passing argument 1 of '__ompi_ddt_create_from_args' from 
<br>
incompatible pointer type
<br>
dt_args.c:642: warning: passing argument 2 of 'ompi_ddt_create_indexed' from 
<br>
incompatible pointer type
<br>
dt_args.c:642: warning: passing argument 3 of 'ompi_ddt_create_indexed' from 
<br>
incompatible pointer type
<br>
dt_args.c:647: warning: passing argument 2 of 'ompi_ddt_create_hindexed' from 
<br>
incompatible pointer type
<br>
dt_args.c:651: warning: passing argument 3 of 'ompi_ddt_create_indexed_block' 
<br>
from incompatible pointer type
<br>
dt_args.c:656: warning: passing argument 2 of 'ompi_ddt_create_struct' from 
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
ppack_external.c:93: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
ppack.c:91: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
ptype_contiguous.c:66: warning: passing argument 3 of 'ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
ptype_create_darray.c:226: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
ptype_create_f90_complex.c:101: warning: passing argument 3 of 
<br>
'ompi_ddt_set_args' from incompatible pointer type
<br>
ptype_create_f90_integer.c:100: warning: passing argument 3 of 
<br>
'ompi_ddt_set_args' from incompatible pointer type
<br>
ptype_create_f90_real.c:102: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
ptype_create_hindexed.c:84: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
ptype_create_hvector.c:77: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
ptype_create_indexed_block.c:76: warning: passing argument 3 of 
<br>
'ompi_ddt_set_args' from incompatible pointer type
<br>
ptype_create_struct.c:92: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
ptype_create_subarray.c:147: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
ptype_get_contents.c:68: warning: passing argument 3 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_contents.c:68: warning: passing argument 4 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_contents.c:68: warning: passing argument 5 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_contents.c:68: warning: passing argument 7 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_envelope.c:63: warning: passing argument 3 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_envelope.c:63: warning: passing argument 5 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_envelope.c:63: warning: passing argument 7 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_envelope.c:63: warning: passing argument 9 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_indexed.c:88: warning: passing argument 3 of 'ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
ptype_vector.c:73: warning: passing argument 3 of 'ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
punpack_external.c:85: warning: passing argument 3 of 'ompi_convertor_unpack' 
<br>
from incompatible pointer type
<br>
punpack.c:96: warning: passing argument 3 of 'ompi_convertor_unpack' from 
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
pack_external.c:93: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pack.c:91: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
type_contiguous.c:66: warning: passing argument 3 of 'ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
type_create_darray.c:226: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
type_create_f90_complex.c:101: warning: passing argument 3 of 
<br>
'ompi_ddt_set_args' from incompatible pointer type
<br>
type_create_f90_integer.c:100: warning: passing argument 3 of 
<br>
'ompi_ddt_set_args' from incompatible pointer type
<br>
type_create_f90_real.c:102: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
type_create_hindexed.c:84: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
type_create_hvector.c:77: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
type_create_indexed_block.c:76: warning: passing argument 3 of 
<br>
'ompi_ddt_set_args' from incompatible pointer type
<br>
type_create_struct.c:92: warning: passing argument 3 of 'ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
type_create_subarray.c:147: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
type_get_contents.c:68: warning: passing argument 3 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_contents.c:68: warning: passing argument 4 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_contents.c:68: warning: passing argument 5 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_contents.c:68: warning: passing argument 7 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_envelope.c:63: warning: passing argument 3 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_envelope.c:63: warning: passing argument 5 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_envelope.c:63: warning: passing argument 7 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_envelope.c:63: warning: passing argument 9 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_indexed.c:88: warning: passing argument 3 of 'ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
type_vector.c:73: warning: passing argument 3 of 'ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
unpack_external.c:85: warning: passing argument 3 of 'ompi_convertor_unpack' 
<br>
from incompatible pointer type
<br>
unpack.c:96: warning: passing argument 3 of 'ompi_convertor_unpack' from 
<br>
incompatible pointer type
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
base/pml_base_bsend.c:258: warning: passing argument 3 of 'ompi_convertor_pack' 
<br>
from incompatible pointer type
<br>
pml_cm_send.c:79: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pml_cm_send.c:144: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pml_cm_start.c:116: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pml_ob1_sendreq.c:388: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pml_ob1_sendreq.c:427: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pml_ob1_sendreq.c:534: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing argument 3 of 
<br>
'ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing argument 3 of 
<br>
'ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing argument 3 of 
<br>
'ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing argument 3 of 
<br>
'ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing argument 3 of 
<br>
'ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing argument 3 of 
<br>
'ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing argument 3 of 
<br>
'ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_start.c:29: warning: passing argument 1 of 
<br>
'vprotocol_pessimist_matching_replay' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing argument 3 of 
<br>
'ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing argument 3 of 
<br>
'ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing argument 3 of 
<br>
'ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing argument 3 of 
<br>
'ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing argument 3 of 
<br>
'ompi_convertor_pack' from incompatible pointer type
<br>
vprotocol_pessimist_sender_based.h:55: warning: passing argument 3 of 
<br>
'ompi_convertor_pack' from incompatible pointer type
<br>
attribute/attribute.c:681: warning: passing argument 1 of 
<br>
'keyval-&gt;delete_attr_fn.attr_mpi1_fortran_delete_fn' from incompatible pointer 
<br>
type
<br>
attribute/attribute.c:681: warning: passing argument 1 of 
<br>
'keyval-&gt;delete_attr_fn.attr_mpi2_fortran_delete_fn' from incompatible pointer 
<br>
type
<br>
attribute/attribute.c:897: warning: passing argument 1 of 
<br>
'hash_value-&gt;copy_attr_fn.attr_mpi1_fortran_copy_fn' from incompatible pointer 
<br>
type
<br>
attribute/attribute.c:897: warning: passing argument 1 of 
<br>
'hash_value-&gt;copy_attr_fn.attr_mpi2_fortran_copy_fn' from incompatible pointer 
<br>
type
<br>
attribute/attribute.c:1067: warning: passing argument 1 of 
<br>
'keyval-&gt;delete_attr_fn.attr_mpi1_fortran_delete_fn' from incompatible pointer 
<br>
type
<br>
attribute/attribute.c:1067: warning: passing argument 1 of 
<br>
'keyval-&gt;delete_attr_fn.attr_mpi2_fortran_delete_fn' from incompatible pointer 
<br>
type
<br>
*** Warning: This system can not link to static lib archive 
<br>
/home/Admin/MPI/OpenMpi/openmpi-1.3-gcc/orte/libopen-rte.la.
<br>
*** Warning: This system can not link to static lib archive 
<br>
/home/Admin/MPI/OpenMpi/openmpi-1.3-gcc/opal/libopen-pal.la.
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
/home/Admin/MPI/OpenMpi/openmpi-1.3-gcc/orte/libopen-rte.la.
<br>
*** Warning: This system can not link to static lib archive 
<br>
/home/Admin/MPI/OpenMpi/openmpi-1.3-gcc/opal/libopen-pal.la.
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
/home/Admin/MPI/OpenMpi/openmpi-1.3-gcc/orte/libopen-rte.la.
<br>
*** Warning: This system can not link to static lib archive 
<br>
/home/Admin/MPI/OpenMpi/openmpi-1.3-gcc/opal/libopen-pal.la.
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
/home/Admin/MPI/OpenMpi/openmpi-1.3-gcc/orte/libopen-rte.la.
<br>
*** Warning: This system can not link to static lib archive 
<br>
/home/Admin/MPI/OpenMpi/openmpi-1.3-gcc/opal/libopen-pal.la.
<br>
libtool: link: warning: undefined symbols not allowed in i686-pc-cygwin shared 
<br>
libraries
<br>
wi23 openmpi-1.3-gcc-4 18 
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
<li><strong>Next message:</strong> <a href="8037.php">Ralph Castain: "Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<li><strong>Previous message:</strong> <a href="8035.php">Gary Draving: "Re: [OMPI users] openmpi/ib noob question"</a>
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
