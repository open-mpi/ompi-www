<?
$subject_val = "Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 10:45:50 2009" -->
<!-- isoreceived="20090212154550" -->
<!-- sent="Thu, 12 Feb 2009 10:45:41 -0500" -->
<!-- isosent="20090212154541" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4" -->
<!-- id="C499BCB9-4145-4186-88C9-DD40FC7F239C_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="51883C5D-0626-4509-999D-716C8FC2C0FE_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 10:45:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8040.php">George Bosilca: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Previous message:</strong> <a href="8038.php">Jeff Squyres: "Re: [OMPI users] openmpi-mca-params.conf"</a>
<li><strong>In reply to:</strong> <a href="8037.php">Ralph Castain: "Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Windows do not have natively ssh installed, so we didn't bother making  
<br>
sure we can start MPI applications using rsh/ssh. There is a special  
<br>
PLM (process starter) for Windows called process, but I didn't test it  
<br>
in a long time. Anyway, this only allow you to start local MPI jobs.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 12, 2009, at 09:19 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I don't believe we support cygwin at this time...native Windows  
</span><br>
<span class="quotelev1">&gt; support is coming in a later release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 12, 2009, at 7:09 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have installed openmpi-1.3 using Cygwin 1.5 on top of Windows
</span><br>
<span class="quotelev2">&gt;&gt; XP Pro with gcc-3.4.4 with the following commands.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At first I added &quot;#define NOMINMAX&quot; before the line
</span><br>
<span class="quotelev2">&gt;&gt; &quot;#include MCA_timer_IMPLEMENTATION_HEADER&quot; and &quot;#undef NOMINMAX&quot;
</span><br>
<span class="quotelev2">&gt;&gt; after that line in file &quot;ompi/tools/ompi_info/param.cc&quot; as described
</span><br>
<span class="quotelev2">&gt;&gt; in the mail archives.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure --prefix=/usr/local/openmpi-1.3 \
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS=&quot;&quot; CXXFLAGS=&quot;&quot; FFLAGS=&quot;&quot; FCFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt; CPPFLAGS=&quot;&quot; C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt; OBJC_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt; --without-udapl \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-cxx-exceptions --enable-mpi-threads \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-progress-threads --with-threads=posix \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-static --without-cs-fs \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-heterogeneous --with-mpi-param_check=always \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-contrib-no-build=vt \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mca-no-build=memory_mallopt,paffinity \
</span><br>
<span class="quotelev2">&gt;&gt; |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV
</span><br>
<span class="quotelev2">&gt;&gt; make install |&amp; tee log.make-install.$SYSTEM_ENV.$MACHINE_ENV
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following output when I run some commands.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; eiger Admin 5 set MPI = openmpi-1.3
</span><br>
<span class="quotelev2">&gt;&gt; eiger Admin 6 source .mpi.csh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; eiger hello1 9 make
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -m32 -Wall -Wstrict-prototypes -Wmissing-prototypes - 
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -std=c99
</span><br>
<span class="quotelev2">&gt;&gt; -DCygwin -Dx86 -c -o hello1_mpi.o \
</span><br>
<span class="quotelev2">&gt;&gt;       hello1_mpi.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc  -m32 -o /home/Admin/Cygwin/x86/bin/hello1_mpi.exe hello1_mpi.o
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/../../../../i686-pc-cygwin/bin/ 
</span><br>
<span class="quotelev2">&gt;&gt; ld: cannot find
</span><br>
<span class="quotelev2">&gt;&gt; -lmpi
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [/home/Admin/Cygwin/x86/bin/hello1_mpi.exe] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; eiger hello1 10 ls -l /usr/local/openmpi-1.3/lib/
</span><br>
<span class="quotelev2">&gt;&gt; total 5432
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x  1 Admin Kein     969 Feb  8 14:17 libmpi.la
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--  1 Admin Kein 2852212 Feb  8 14:17 libmpi.lib
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x  1 Admin Kein    1018 Feb  8 14:22 libmpi_cxx.la
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--  1 Admin Kein  591668 Feb  8 14:22 libmpi_cxx.lib
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x  1 Admin Kein    1018 Feb  8 14:22 libmpi_f77.la
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--  1 Admin Kein  858986 Feb  8 14:22 libmpi_f77.lib
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x  1 Admin Kein     900 Feb  8 14:13 libopen-pal.la
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--  1 Admin Kein  468364 Feb  8 14:13 libopen-pal.lib
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x  1 Admin Kein     942 Feb  8 14:14 libopen-rte.la
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--  1 Admin Kein  758034 Feb  8 14:14 libopen-rte.lib
</span><br>
<span class="quotelev2">&gt;&gt; drwxr-xr-x+ 2 Admin Kein       0 Feb  8 14:15 openmpi
</span><br>
<span class="quotelev2">&gt;&gt; eiger hello1 11
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Indeed the library isn't available. When I search the log-files I
</span><br>
<span class="quotelev2">&gt;&gt; can find the following problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wi23 openmpi-1.3-gcc 3 grep -i warning log.configure.Cygwin.x86
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING:  -fno-strict-aliasing has been added to CFLAGS
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: MPI_REAL16 and MPI_COMPLEX32 support have been  
</span><br>
<span class="quotelev2">&gt;&gt; disabled
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** Fortran 90/95 bindings disabled (could not  
</span><br>
<span class="quotelev2">&gt;&gt; find
</span><br>
<span class="quotelev2">&gt;&gt; compiler)
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** Shared libraries have been disabled (-- 
</span><br>
<span class="quotelev2">&gt;&gt; disable-shared)
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** Building MCA components as DSOs  
</span><br>
<span class="quotelev2">&gt;&gt; automatically disabled
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: Unknown architecture ... proceeding anyway
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: File locks may not work with NFS.  See the  
</span><br>
<span class="quotelev2">&gt;&gt; Installation and
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: unrecognized options: --without-udapl,
</span><br>
<span class="quotelev2">&gt;&gt; --enable-cxx-exceptions, --enable-mpi-threads, --enable-progress- 
</span><br>
<span class="quotelev2">&gt;&gt; threads,
</span><br>
<span class="quotelev2">&gt;&gt; --with-threads, --without-cs-fs, --enable-heterogeneous, --with-mpi- 
</span><br>
<span class="quotelev2">&gt;&gt; param_check,
</span><br>
<span class="quotelev2">&gt;&gt; --enable-contrib-no-build, --enable-mca-no-build, --enable-ltdl- 
</span><br>
<span class="quotelev2">&gt;&gt; convenience
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: unrecognized options: --without-udapl,
</span><br>
<span class="quotelev2">&gt;&gt; --enable-cxx-exceptions, --enable-mpi-threads, --enable-progress- 
</span><br>
<span class="quotelev2">&gt;&gt; threads,
</span><br>
<span class="quotelev2">&gt;&gt; --with-threads, --without-cs-fs, --enable-heterogeneous, --with-mpi- 
</span><br>
<span class="quotelev2">&gt;&gt; param_check,
</span><br>
<span class="quotelev2">&gt;&gt; --enable-contrib-no-build, --enable-mca-no-build, --enable-ltdl- 
</span><br>
<span class="quotelev2">&gt;&gt; convenience
</span><br>
<span class="quotelev2">&gt;&gt; wi23 openmpi-1.3-gcc 4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wi23 openmpi-1.3-gcc 4 grep -i warning log.make.Cygwin.x86
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: warning: undefined symbols not allowed in i686-pc- 
</span><br>
<span class="quotelev2">&gt;&gt; cygwin shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries
</span><br>
<span class="quotelev2">&gt;&gt; base/plm_base_launch_support.c:334: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; pointer to
</span><br>
<span class="quotelev2">&gt;&gt; function from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; base/plm_base_launch_support.c:360: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; pointer to
</span><br>
<span class="quotelev2">&gt;&gt; function from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_mca_params.c:159: warning: passing arg 7 of
</span><br>
<span class="quotelev2">&gt;&gt; `mca_base_param_reg_int_name' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; util/nidmap.c:370: warning: passing arg 3 of pointer to function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; util/nidmap.c:394: warning: passing arg 3 of pointer to function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; util/nidmap.c:401: warning: passing arg 3 of pointer to function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; util/nidmap.c:409: warning: passing arg 3 of pointer to function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; util/nidmap.c:416: warning: passing arg 3 of pointer to function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; util/nidmap.c:423: warning: passing arg 3 of pointer to function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; util/nidmap.c:430: warning: passing arg 3 of pointer to function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; util/nidmap.c:437: warning: passing arg 3 of pointer to function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; util/nidmap.c:479: warning: passing arg 3 of pointer to function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; util/nidmap.c:485: warning: passing arg 3 of pointer to function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; util/nidmap.c:508: warning: passing arg 3 of pointer to function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; util/nidmap.c:519: warning: passing arg 3 of pointer to function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; util/nidmap.c:546: warning: passing arg 3 of pointer to function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; util/nidmap.c:560: warning: passing arg 3 of pointer to function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; *** Warning: This system can not link to static lib archive
</span><br>
<span class="quotelev2">&gt;&gt; /home/Admin/MPI/OpenMpi/openmpi-1.3/opal/libopen-pal.la.
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: warning: undefined symbols not allowed in i686-pc- 
</span><br>
<span class="quotelev2">&gt;&gt; cygwin shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries
</span><br>
<span class="quotelev2">&gt;&gt; orte-ps.c:802: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `orte_util_comm_query_job_info' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; orte-ps.c:813: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `orte_util_comm_query_node_info' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ../../ompi/datatype/datatype_pack.h:41: warning: passing arg 5 of
</span><br>
<span class="quotelev2">&gt;&gt; `opal_bcopy_uicsum_partial' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ../../ompi/datatype/datatype_pack.h:51: warning: passing arg 5 of
</span><br>
<span class="quotelev2">&gt;&gt; `opal_bcopy_uicsum_partial' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ../../ompi/datatype/datatype_pack.h:82: warning: passing arg 5 of
</span><br>
<span class="quotelev2">&gt;&gt; `opal_bcopy_uicsum_partial' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; datatype_pack.c:75: warning: passing arg 3 of `opal_uicsum_partial'  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; datatype_pack.c:80: warning: passing arg 5 of  
</span><br>
<span class="quotelev2">&gt;&gt; `opal_bcopy_uicsum_partial' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; datatype_pack.c:143: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `opal_uicsum_partial' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; datatype_pack.c:162: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `opal_uicsum_partial' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; datatype_pack.c:168: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `opal_uicsum_partial' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; datatype_pack.c:193: warning: passing arg 5 of  
</span><br>
<span class="quotelev2">&gt;&gt; `opal_bcopy_uicsum_partial' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; datatype_pack.c:203: warning: passing arg 5 of  
</span><br>
<span class="quotelev2">&gt;&gt; `opal_bcopy_uicsum_partial' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; datatype_pack.c:214: warning: passing arg 5 of  
</span><br>
<span class="quotelev2">&gt;&gt; `opal_bcopy_uicsum_partial' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ../../ompi/datatype/datatype_unpack.h:41: warning: passing arg 5 of
</span><br>
<span class="quotelev2">&gt;&gt; `opal_bcopy_uicsum_partial' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ../../ompi/datatype/datatype_unpack.h:51: warning: passing arg 5 of
</span><br>
<span class="quotelev2">&gt;&gt; `opal_bcopy_uicsum_partial' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ../../ompi/datatype/datatype_unpack.h:82: warning: passing arg 5 of
</span><br>
<span class="quotelev2">&gt;&gt; `opal_bcopy_uicsum_partial' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; datatype_unpack.c:221: warning: passing arg 5 of  
</span><br>
<span class="quotelev2">&gt;&gt; `opal_bcopy_uicsum_partial'
</span><br>
<span class="quotelev2">&gt;&gt; from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; datatype_unpack.c:239: warning: passing arg 5 of  
</span><br>
<span class="quotelev2">&gt;&gt; `opal_bcopy_uicsum_partial'
</span><br>
<span class="quotelev2">&gt;&gt; from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; datatype_unpack.c:250: warning: passing arg 5 of  
</span><br>
<span class="quotelev2">&gt;&gt; `opal_bcopy_uicsum_partial'
</span><br>
<span class="quotelev2">&gt;&gt; from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; datatype_unpack.c:263: warning: passing arg 5 of  
</span><br>
<span class="quotelev2">&gt;&gt; `opal_bcopy_uicsum_partial'
</span><br>
<span class="quotelev2">&gt;&gt; from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; datatype_unpack.c:400: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `opal_uicsum_partial' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; datatype_unpack.c:434: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `opal_uicsum_partial' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; dt_args.c:605: warning: passing arg 1 of  
</span><br>
<span class="quotelev2">&gt;&gt; `__ompi_ddt_create_from_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; dt_args.c:642: warning: passing arg 2 of `ompi_ddt_create_indexed'  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; dt_args.c:642: warning: passing arg 3 of `ompi_ddt_create_indexed'  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; dt_args.c:647: warning: passing arg 2 of `ompi_ddt_create_hindexed'  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; dt_args.c:651: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_create_indexed_block' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; dt_args.c:656: warning: passing arg 2 of `ompi_ddt_create_struct'  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: warning: undefined symbols not allowed in i686-pc- 
</span><br>
<span class="quotelev2">&gt;&gt; cygwin shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries
</span><br>
<span class="quotelev2">&gt;&gt; pcomm_get_errhandler.c:65: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pcomm_get_errhandler.c:65: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pcomm_set_errhandler.c:67: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pcomm_set_errhandler.c:67: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pcomm_set_errhandler.c:74: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pcomm_set_errhandler.c:74: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; ppack_external.c:93: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ppack.c:91: warning: passing arg 3 of `ompi_convertor_pack' from  
</span><br>
<span class="quotelev2">&gt;&gt; incompatible
</span><br>
<span class="quotelev2">&gt;&gt; pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_contiguous.c:66: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_create_darray.c:226: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_create_f90_complex.c:101: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args'
</span><br>
<span class="quotelev2">&gt;&gt; from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_create_f90_integer.c:100: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args'
</span><br>
<span class="quotelev2">&gt;&gt; from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_create_f90_real.c:102: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_create_hindexed.c:84: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_create_hvector.c:77: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_create_indexed_block.c:76: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args'
</span><br>
<span class="quotelev2">&gt;&gt; from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_create_struct.c:92: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_create_subarray.c:147: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_get_contents.c:68: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_get_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_get_contents.c:68: warning: passing arg 4 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_get_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_get_contents.c:68: warning: passing arg 5 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_get_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_get_contents.c:68: warning: passing arg 7 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_get_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_get_envelope.c:63: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_get_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_get_envelope.c:63: warning: passing arg 5 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_get_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_get_envelope.c:63: warning: passing arg 7 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_get_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_get_envelope.c:63: warning: passing arg 9 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_get_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_indexed.c:88: warning: passing arg 3 of `ompi_ddt_set_args'  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; ptype_vector.c:73: warning: passing arg 3 of `ompi_ddt_set_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; punpack_external.c:85: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_unpack' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; punpack.c:96: warning: passing arg 3 of `ompi_convertor_unpack' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; pwin_get_errhandler.c:57: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pwin_get_errhandler.c:57: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pwin_set_errhandler.c:60: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pwin_set_errhandler.c:60: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pwin_set_errhandler.c:66: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pwin_set_errhandler.c:66: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pfile_get_errhandler.c:64: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pfile_get_errhandler.c:64: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pfile_set_errhandler.c:67: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pfile_set_errhandler.c:67: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pfile_set_errhandler.c:73: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pfile_set_errhandler.c:73: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; comm_get_errhandler.c:65: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; comm_get_errhandler.c:65: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; comm_set_errhandler.c:67: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; comm_set_errhandler.c:67: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; comm_set_errhandler.c:74: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; comm_set_errhandler.c:74: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; pack_external.c:93: warning: passing arg 3 of `ompi_convertor_pack'  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; pack.c:91: warning: passing arg 3 of `ompi_convertor_pack' from  
</span><br>
<span class="quotelev2">&gt;&gt; incompatible
</span><br>
<span class="quotelev2">&gt;&gt; pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_contiguous.c:66: warning: passing arg 3 of `ompi_ddt_set_args'  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_create_darray.c:226: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_create_f90_complex.c:101: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args'
</span><br>
<span class="quotelev2">&gt;&gt; from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_create_f90_integer.c:100: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args'
</span><br>
<span class="quotelev2">&gt;&gt; from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_create_f90_real.c:102: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_create_hindexed.c:84: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_create_hvector.c:77: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_create_indexed_block.c:76: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args'
</span><br>
<span class="quotelev2">&gt;&gt; from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_create_struct.c:92: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_create_subarray.c:147: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_set_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_get_contents.c:68: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_get_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_get_contents.c:68: warning: passing arg 4 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_get_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_get_contents.c:68: warning: passing arg 5 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_get_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_get_contents.c:68: warning: passing arg 7 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_get_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_get_envelope.c:63: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_get_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_get_envelope.c:63: warning: passing arg 5 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_get_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_get_envelope.c:63: warning: passing arg 7 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_get_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_get_envelope.c:63: warning: passing arg 9 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_ddt_get_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_indexed.c:88: warning: passing arg 3 of `ompi_ddt_set_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; type_vector.c:73: warning: passing arg 3 of `ompi_ddt_set_args' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; unpack_external.c:85: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_unpack' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; unpack.c:96: warning: passing arg 3 of `ompi_convertor_unpack' from  
</span><br>
<span class="quotelev2">&gt;&gt; incompatible
</span><br>
<span class="quotelev2">&gt;&gt; pointer type
</span><br>
<span class="quotelev2">&gt;&gt; win_get_errhandler.c:57: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different size
</span><br>
<span class="quotelev2">&gt;&gt; win_get_errhandler.c:57: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different size
</span><br>
<span class="quotelev2">&gt;&gt; win_set_errhandler.c:60: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different size
</span><br>
<span class="quotelev2">&gt;&gt; win_set_errhandler.c:60: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different size
</span><br>
<span class="quotelev2">&gt;&gt; win_set_errhandler.c:66: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different size
</span><br>
<span class="quotelev2">&gt;&gt; win_set_errhandler.c:66: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different size
</span><br>
<span class="quotelev2">&gt;&gt; file_get_errhandler.c:64: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; file_get_errhandler.c:64: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; file_set_errhandler.c:67: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; file_set_errhandler.c:67: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; file_set_errhandler.c:73: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; file_set_errhandler.c:73: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; base/pml_base_bsend.c:258: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; pml_cm_send.c:79: warning: passing arg 3 of `ompi_convertor_pack'  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; pml_cm_send.c:144: warning: passing arg 3 of `ompi_convertor_pack'  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; pml_cm_start.c:116: warning: passing arg 3 of `ompi_convertor_pack'  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; pml_ob1_sendreq.c:388: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; pml_ob1_sendreq.c:427: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; pml_ob1_sendreq.c:534: warning: passing arg 3 of  
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_start.c:29: warning: passing arg 1 of
</span><br>
<span class="quotelev2">&gt;&gt; `vprotocol_pessimist_matching_replay' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.h:55: warning: passing arg 3 of
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_convertor_pack' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; attribute/attribute.c:681: warning: passing arg 1 of pointer to  
</span><br>
<span class="quotelev2">&gt;&gt; function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; attribute/attribute.c:681: warning: passing arg 1 of pointer to  
</span><br>
<span class="quotelev2">&gt;&gt; function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; attribute/attribute.c:897: warning: passing arg 1 of pointer to  
</span><br>
<span class="quotelev2">&gt;&gt; function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; attribute/attribute.c:897: warning: passing arg 1 of pointer to  
</span><br>
<span class="quotelev2">&gt;&gt; function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; attribute/attribute.c:1067: warning: passing arg 1 of pointer to  
</span><br>
<span class="quotelev2">&gt;&gt; function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; attribute/attribute.c:1067: warning: passing arg 1 of pointer to  
</span><br>
<span class="quotelev2">&gt;&gt; function from
</span><br>
<span class="quotelev2">&gt;&gt; incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; *** Warning: This system can not link to static lib archive
</span><br>
<span class="quotelev2">&gt;&gt; /home/Admin/MPI/OpenMpi/openmpi-1.3/orte/libopen-rte.la.
</span><br>
<span class="quotelev2">&gt;&gt; *** Warning: This system can not link to static lib archive
</span><br>
<span class="quotelev2">&gt;&gt; /home/Admin/MPI/OpenMpi/openmpi-1.3/opal/libopen-pal.la.
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: warning: undefined symbols not allowed in i686-pc- 
</span><br>
<span class="quotelev2">&gt;&gt; cygwin shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries
</span><br>
<span class="quotelev2">&gt;&gt; *** Warning: This system can not link to static lib archive
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/libmpi.la.
</span><br>
<span class="quotelev2">&gt;&gt; *** Warning: This system can not link to static lib archive
</span><br>
<span class="quotelev2">&gt;&gt; /home/Admin/MPI/OpenMpi/openmpi-1.3/orte/libopen-rte.la.
</span><br>
<span class="quotelev2">&gt;&gt; *** Warning: This system can not link to static lib archive
</span><br>
<span class="quotelev2">&gt;&gt; /home/Admin/MPI/OpenMpi/openmpi-1.3/opal/libopen-pal.la.
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: warning: undefined symbols not allowed in i686-pc- 
</span><br>
<span class="quotelev2">&gt;&gt; cygwin shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries
</span><br>
<span class="quotelev2">&gt;&gt; *** Warning: This system can not link to static lib archive
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/libmpi.la.
</span><br>
<span class="quotelev2">&gt;&gt; *** Warning: This system can not link to static lib archive
</span><br>
<span class="quotelev2">&gt;&gt; /home/Admin/MPI/OpenMpi/openmpi-1.3/orte/libopen-rte.la.
</span><br>
<span class="quotelev2">&gt;&gt; *** Warning: This system can not link to static lib archive
</span><br>
<span class="quotelev2">&gt;&gt; /home/Admin/MPI/OpenMpi/openmpi-1.3/opal/libopen-pal.la.
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: warning: undefined symbols not allowed in i686-pc- 
</span><br>
<span class="quotelev2">&gt;&gt; cygwin shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries
</span><br>
<span class="quotelev2">&gt;&gt; wi23 openmpi-1.3-gcc 5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The log-files contain no errors. Does anybody know what's wrong with
</span><br>
<span class="quotelev2">&gt;&gt; the installation? Does anybody have a working installation? Thank
</span><br>
<span class="quotelev2">&gt;&gt; you very much for any help in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regads
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8040.php">George Bosilca: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Previous message:</strong> <a href="8038.php">Jeff Squyres: "Re: [OMPI users] openmpi-mca-params.conf"</a>
<li><strong>In reply to:</strong> <a href="8037.php">Ralph Castain: "Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
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
