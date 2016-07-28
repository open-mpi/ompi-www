<?
$subject_val = "[OMPI users] openmpi-1.2.8: segmentation fault using Cygwin-1.5 and gcc-4.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 09:09:23 2009" -->
<!-- isoreceived="20090212140923" -->
<!-- sent="Thu, 12 Feb 2009 15:09:03 +0100 (CET)" -->
<!-- isosent="20090212140903" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.2.8: segmentation fault using Cygwin-1.5 and gcc-4.3.2" -->
<!-- id="200902121409.n1CE93Hn023098_at_tyr.informatik.fh-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.2.8: segmentation fault using Cygwin-1.5 and gcc-4.3.2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 09:09:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8033.php">Siegmar Gross: "[OMPI users] openmpi-1.2.8: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<li><strong>Previous message:</strong> <a href="8031.php">Nicolas Moulin: "[OMPI users] openmpi-mca-params.conf"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have installed openmpi-1.2.8 using Cygwin 1.5 on top of Windows
<br>
XP Pro with gcc-4.3.2 with the following commands.
<br>
<p>configure --prefix=/usr/local/openmpi-1.2.8-gcc-4 \
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
&nbsp;&nbsp;--enable-cxx-exceptions --enable-mpi-threads \
<br>
&nbsp;&nbsp;--enable-progress-threads --with-threads=posix \
<br>
&nbsp;&nbsp;--enable-static --without-cs-fs \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.gcc-4
<br>
<p>cp -p opal/mca/timer/windows/timer_windows.h \
<br>
&nbsp;&nbsp;opal/mca/timer/windows/timer_windows_component.h
<br>
<p>make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.gcc-4
<br>
make install |&amp; tee log.make-install.$SYSTEM_ENV.$MACHINE_ENV.gcc-4
<br>
<p><p>I get the following output when I run some commands.
<br>
<p><p>eiger Admin 4 set MPI = openmpi-1.2.8-gcc-4
<br>
eiger Admin 5 source .mpi.csh
<br>
<p>eiger hello1 8 mpicc -show
<br>
[eiger:02344] *** Process received signal ***
<br>
[eiger:02344] Signal: Segmentation fault (11)
<br>
[eiger:02344] Signal code:  (23)
<br>
[eiger:02344] Failing at address: 0x401b0e
<br>
[eiger:02344] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
eiger hello1 9 
<br>
<p><p>I can run &quot;--help&quot; with orted, orterun, and ompi_info, but
<br>
&quot;ompi_info&quot; displays a strange result.
<br>
<p>eiger hello1 12 ompi_info 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.2.8
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r19718
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.2.8
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r19718
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.2.8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r19718
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr/local/openmpi-1.2.8-gcc-4
<br>
&nbsp;Configured architecture: i686-pc-cygwin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: fd1026
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Tue Jan  6 19:55:41     2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: eiger
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: fd1026
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Tue Jan  6 22:44:29     2009
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: yes
<br>
<p>&nbsp;mpirun default --prefix: no
<br>
[eiger:00716] mca: base: component_find: unable to open paffinity windows: can't 
<br>
open the module (ignored)
<br>
[eiger:00716] mca: base: component_find: unable to open maffinity first_use: 
<br>
can't open the module (ignored)
<br>
[eiger:00716] mca: base: component_find: unable to open oob tcp: can't open the 
<br>
module (ignored)
<br>
[eiger:00716] mca: base: component_find: unable to open errmgr hnp: can't open 
<br>
the module (ignored)
<br>
[eiger:00716] mca: base: component_find: unable to open errmgr orted: can't open 
<br>
the module (ignored)
<br>
[eiger:00716] mca: base: component_find: unable to open errmgr proxy: can't open 
<br>
the module (ignored)
<br>
[eiger:00716] mca: base: component_find: unable to open gpr null: can't open the 
<br>
module (ignored)
<br>
[eiger:00716] mca: base: component_find: unable to open gpr proxy: can't open 
<br>
the module (ignored)
<br>
[eiger:00716] mca: base: component_find: unable to open gpr replica: can't open 
<br>
the module (ignored)
<br>
...
<br>
[eiger:00716] mca: base: component_find: unable to open btl tcp: can't open the 
<br>
module (ignored)
<br>
[eiger:00716] mca: base: component_find: unable to open topo unity: can't open 
<br>
the module (ignored)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: none (MCA v1.0, API v1.0, Component v1.2.8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: windows (MCA v1.0, API v1.0, Component v1.2.8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.8)
<br>
eiger hello1 13 
<br>
<p><p><p><p>When I search the log-files I can find the following problems.
<br>
<p>openmpi-1.2.8-gcc-4:
<br>
--------------------
<br>
<p>wi23 openmpi-1.2.8-gcc-4 31 grep -i warning log.configure.Cygwin.x86.gcc-4 
<br>
configure: WARNING:  -fno-strict-aliasing has been added to CFLAGS
<br>
configure: WARNING:  -finline-functions has been added to CXXFLAGS
<br>
configure: WARNING: *** Shared libraries have been disabled (--disable-shared)
<br>
configure: WARNING: *** Building MCA components as DSOs automatically disabled
<br>
configure: WARNING: Unknown architecture ... proceeding anyway
<br>
configure: WARNING: File locks may not work with NFS.  See the Installation and
<br>
wi23 openmpi-1.2.8-gcc-4 32 
<br>
<p><p>wi23 openmpi-1.2.8-gcc-4 32 grep -i warning log.make.Cygwin.x86.gcc-4     
<br>
libtool: link: warning: undefined symbols not allowed in i686-pc-cygwin shared 
<br>
libraries
<br>
*** Warning: This system can not link to static lib archive 
<br>
/home/Admin/MPI/OpenMpi/openmpi-1.2.8-gcc-4/opal/libopen-pal.la.
<br>
libtool: link: warning: undefined symbols not allowed in i686-pc-cygwin shared 
<br>
libraries
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
datatype_unpack.c:216: warning: passing argument 5 of 
<br>
'opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
datatype_unpack.c:234: warning: passing argument 5 of 
<br>
'opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
datatype_unpack.c:245: warning: passing argument 5 of 
<br>
'opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
datatype_unpack.c:258: warning: passing argument 5 of 
<br>
'opal_bcopy_uicsum_partial' from incompatible pointer type
<br>
datatype_unpack.c:395: warning: passing argument 3 of 'opal_uicsum_partial' from 
<br>
incompatible pointer type
<br>
datatype_unpack.c:429: warning: passing argument 3 of 'opal_uicsum_partial' from 
<br>
incompatible pointer type
<br>
dt_args.c:611: warning: passing argument 1 of '__ompi_ddt_create_from_args' from 
<br>
incompatible pointer type
<br>
dt_args.c:649: warning: passing argument 2 of 'ompi_ddt_create_indexed' from 
<br>
incompatible pointer type
<br>
dt_args.c:649: warning: passing argument 3 of 'ompi_ddt_create_indexed' from 
<br>
incompatible pointer type
<br>
dt_args.c:654: warning: passing argument 2 of 'ompi_ddt_create_hindexed' from 
<br>
incompatible pointer type
<br>
dt_args.c:658: warning: passing argument 3 of 'ompi_ddt_create_indexed_block' 
<br>
from incompatible pointer type
<br>
dt_args.c:663: warning: passing argument 2 of 'ompi_ddt_create_struct' from 
<br>
incompatible pointer type
<br>
libtool: link: warning: undefined symbols not allowed in i686-pc-cygwin shared 
<br>
libraries
<br>
ppack_external.c:78: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
ppack.c:80: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
ptype_contiguous.c:58: warning: passing argument 3 of 'ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
ptype_create_darray.c:218: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
ptype_create_hindexed.c:77: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
ptype_create_hvector.c:70: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
ptype_create_indexed_block.c:68: warning: passing argument 3 of 
<br>
'ompi_ddt_set_args' from incompatible pointer type
<br>
ptype_create_struct.c:81: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
ptype_create_subarray.c:143: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
ptype_get_contents.c:61: warning: passing argument 3 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_contents.c:61: warning: passing argument 4 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_contents.c:61: warning: passing argument 5 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_contents.c:61: warning: passing argument 7 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_envelope.c:56: warning: passing argument 3 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_envelope.c:56: warning: passing argument 5 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_envelope.c:56: warning: passing argument 7 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_get_envelope.c:56: warning: passing argument 9 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
ptype_indexed.c:81: warning: passing argument 3 of 'ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
ptype_vector.c:66: warning: passing argument 3 of 'ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
punpack_external.c:75: warning: passing argument 3 of 'ompi_convertor_unpack' 
<br>
from incompatible pointer type
<br>
punpack.c:84: warning: passing argument 3 of 'ompi_convertor_unpack' from 
<br>
incompatible pointer type
<br>
pack_external.c:78: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pack.c:80: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
type_contiguous.c:58: warning: passing argument 3 of 'ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
type_create_darray.c:218: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
type_create_hindexed.c:77: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
type_create_hvector.c:70: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
type_create_indexed_block.c:68: warning: passing argument 3 of 
<br>
'ompi_ddt_set_args' from incompatible pointer type
<br>
type_create_struct.c:81: warning: passing argument 3 of 'ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
type_create_subarray.c:143: warning: passing argument 3 of 'ompi_ddt_set_args' 
<br>
from incompatible pointer type
<br>
type_get_contents.c:61: warning: passing argument 3 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_contents.c:61: warning: passing argument 4 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_contents.c:61: warning: passing argument 5 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_contents.c:61: warning: passing argument 7 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_envelope.c:56: warning: passing argument 3 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_envelope.c:56: warning: passing argument 5 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_envelope.c:56: warning: passing argument 7 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_get_envelope.c:56: warning: passing argument 9 of 'ompi_ddt_get_args' from 
<br>
incompatible pointer type
<br>
type_indexed.c:81: warning: passing argument 3 of 'ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
type_vector.c:66: warning: passing argument 3 of 'ompi_ddt_set_args' from 
<br>
incompatible pointer type
<br>
unpack_external.c:75: warning: passing argument 3 of 'ompi_convertor_unpack' 
<br>
from incompatible pointer type
<br>
unpack.c:84: warning: passing argument 3 of 'ompi_convertor_unpack' from 
<br>
incompatible pointer type
<br>
libtool: link: warning: undefined symbols not allowed in i686-pc-cygwin shared 
<br>
libraries
<br>
libtool: link: warning: undefined symbols not allowed in i686-pc-cygwin shared 
<br>
libraries
<br>
libtool: link: warning: undefined symbols not allowed in i686-pc-cygwin shared 
<br>
libraries
<br>
base/pml_base_bsend.c:255: warning: passing argument 3 of 'ompi_convertor_pack' 
<br>
from incompatible pointer type
<br>
pml_cm_send.c:77: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pml_cm_send.c:142: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pml_cm_start.c:124: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pml_ob1_sendreq.c:417: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pml_ob1_sendreq.c:468: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
pml_ob1_sendreq.c:533: warning: passing argument 3 of 'ompi_convertor_pack' from 
<br>
incompatible pointer type
<br>
attribute/attribute.c:685: warning: passing argument 1 of 
<br>
'keyval-&gt;delete_attr_fn.attr_mpi1_fortran_delete_fn' from incompatible pointer 
<br>
type
<br>
attribute/attribute.c:685: warning: passing argument 1 of 
<br>
'keyval-&gt;delete_attr_fn.attr_mpi2_fortran_delete_fn' from incompatible pointer 
<br>
type
<br>
attribute/attribute.c:901: warning: passing argument 1 of 
<br>
'hash_value-&gt;copy_attr_fn.attr_mpi1_fortran_copy_fn' from incompatible pointer 
<br>
type
<br>
attribute/attribute.c:901: warning: passing argument 1 of 
<br>
'hash_value-&gt;copy_attr_fn.attr_mpi2_fortran_copy_fn' from incompatible pointer 
<br>
type
<br>
attribute/attribute.c:1071: warning: passing argument 1 of 
<br>
'keyval-&gt;delete_attr_fn.attr_mpi1_fortran_delete_fn' from incompatible pointer 
<br>
type
<br>
attribute/attribute.c:1071: warning: passing argument 1 of 
<br>
'keyval-&gt;delete_attr_fn.attr_mpi2_fortran_delete_fn' from incompatible pointer 
<br>
type
<br>
*** Warning: This system can not link to static lib archive 
<br>
/home/Admin/MPI/OpenMpi/openmpi-1.2.8-gcc-4/orte/libopen-rte.la.
<br>
*** Warning: This system can not link to static lib archive 
<br>
/home/Admin/MPI/OpenMpi/openmpi-1.2.8-gcc-4/opal/libopen-pal.la.
<br>
libtool: link: warning: undefined symbols not allowed in i686-pc-cygwin shared 
<br>
libraries
<br>
wi23 openmpi-1.2.8-gcc-4 33 
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
<li><strong>Next message:</strong> <a href="8033.php">Siegmar Gross: "[OMPI users] openmpi-1.2.8: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<li><strong>Previous message:</strong> <a href="8031.php">Nicolas Moulin: "[OMPI users] openmpi-mca-params.conf"</a>
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
