<?
$subject_val = "[OMPI users] v1.5.1 build failed with PGI compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  4 05:41:26 2011" -->
<!-- isoreceived="20110104104126" -->
<!-- sent="Tue, 04 Jan 2011 11:41:21 +0100" -->
<!-- isosent="20110104104121" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] v1.5.1 build failed with PGI compiler" -->
<!-- id="4D22F951.4020406_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] v1.5.1 build failed with PGI compiler<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-04 05:41:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15264.php">Jeff Squyres: "Re: [OMPI users] v1.5.1 build failed with PGI compiler"</a>
<li><strong>Previous message:</strong> <a href="15262.php">Hicham Mouline: "Re: [OMPI users] Can openmpi run on two different operating system?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15264.php">Jeff Squyres: "Re: [OMPI users] v1.5.1 build failed with PGI compiler"</a>
<li><strong>Reply:</strong> <a href="15264.php">Jeff Squyres: "Re: [OMPI users] v1.5.1 build failed with PGI compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI folks,
<br>
<p>I tried to buld the version 1.5.1 with different compilers, and the 
<br>
build with PGI compilers failed. I believe, the configuration of the 
<br>
final link stage goes not well - an option (LDFLAGS) explicitly given by 
<br>
configuring is partially lost. In the past we were able to build 1.4.x 
<br>
versions with the same compilers and configuration options, so it looks 
<br>
for me as a new configuration issue in 1.5.x
<br>
<p><p>Configured with:
<br>
<p>###################################################################
<br>
./configure --with-openib --with-devel-headers 
<br>
--enable-contrib-no-build=vt --enable-mpi-threads
<br>
CFLAGS=-fastsse -tp k8-32 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/libso 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/lib 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-32/10.9/lib 
<br>
CXXFLAGS=-fastsse -tp k8-32 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/libso 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/lib 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-32/10.9/lib 
<br>
FFLAGS=-fastsse -tp k8-32 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/libso 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/lib 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-32/10.9/lib
<br>
FCFLAGS= -tp k8-32 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/libso 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/lib 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-32/10.9/lib
<br>
F77=pgf90
<br>
LDFLAGS=-fastsse -tp k8-32 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/libso 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/lib 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-32/10.9/lib 
<br>
--prefix=/....../MPI/openmpi-1.5.1mt/linux32/pgi
<br>
###################################################################
<br>
<p>Note the use of &quot;-tp k8-32&quot; flag for building 32bit version. Similarly, 
<br>
for 64bit we use &quot;-tp k8-64&quot; flag with same behaviour. If compiling, the 
<br>
following error happens:
<br>
<p><p>###################################################################
<br>
gmake[2]: Entering directory 
<br>
`/....../home/..../OpenMPI/openmpi-1.5.1_linux32_pgi/opal'
<br>
&nbsp;&nbsp;&nbsp;CCLD   libopen-pal.la
<br>
.........
<br>
pgcc-Fatal-Switch -tp must have a value
<br>
.........
<br>
gmake[2]: *** [libopen-pal.la] Error 2
<br>
gmake[2]: Leaving directory 
<br>
`/....../home/..../OpenMPI/openmpi-1.5.1_linux32_pgi/opal'
<br>
###################################################################
<br>
<p><p><p>Looking to the underlying real command line which was called you will 
<br>
see the &quot;k8-32&quot; part of the LDFLAGS option being lost:
<br>
<p><p><p>/....../home/..../OpenMPI/openmpi-1.5.1_linux32_pgi/opal
<br>
-shared -fpic -DPIC class/.libs/opal_bitmap.o 
<br>
class/.libs/opal_free_list.o class/.libs/opal_hash_table.o 
<br>
class/.libs/opal_list.o class/.libs/opal_object.o 
<br>
class/.libs/opal_graph.o class/.libs/opal_atomic_lifo.o 
<br>
class/.libs/opal_pointer_array.o class/.libs/opal_value_array.o 
<br>
memoryhooks/.libs/memory.o runtime/.libs/opal_progress.o 
<br>
runtime/.libs/opal_finalize.o runtime/.libs/opal_init.o 
<br>
runtime/.libs/opal_params.o runtime/.libs/opal_cr.o 
<br>
threads/.libs/condition.o threads/.libs/mutex.o threads/.libs/thread.o 
<br>
threads/.libs/tsd.o dss/.libs/dss_internal_functions.o 
<br>
dss/.libs/dss_compare.o dss/.libs/dss_copy.o dss/.libs/dss_dump.o 
<br>
dss/.libs/dss_get.o dss/.libs/dss_load_unload.o dss/.libs/dss_lookup.o 
<br>
dss/.libs/dss_pack.o dss/.libs/dss_peek.o dss/.libs/dss_print.o 
<br>
dss/.libs/dss_register.o dss/.libs/dss_release.o dss/.libs/dss_set.o 
<br>
dss/.libs/dss_set_buffer_type.o dss/.libs/dss_size.o 
<br>
dss/.libs/dss_unpack.o dss/.libs/dss_open_close.o 
<br>
-Wl,--whole-archive,../opal/libltdl/.libs/libltdlc.a,asm/.libs/libasm.a,datatype/.libs/libdatatype.a,event/.libs/libevent.a,mca/base/.libs/libmca_base.a,util/.libs/libopalutil.a,mca/backtrace/.libs/libmca_backtrace.a,mca/backtrace/execinfo/.libs/libmca_backtrace_execinfo.a,mca/carto/.libs/libmca_carto.a,mca/crs/.libs/libmca_crs.a,mca/installdirs/.libs/libmca_installdirs.a,mca/installdirs/config/.libs/libmca_installdirs_config.a,mca/installdirs/env/.libs/libmca_installdirs_env.a,mca/maffinity/.libs/libmca_maffinity.a,mca/memchecker/.libs/libmca_memchecker.a,mca/memcpy/.libs/libmca_memcpy.a,mca/memory/.libs/libmca_memory.a,mca/memory/ptmalloc2/.libs/libmca_memory_ptmalloc2.a,mca/paffinity/.libs/libmca_paffinity.a,mca/pstat/.libs/libmca_pstat.a,mca/sysinfo/.libs/libmca_sysinfo.a,mca/timer/.libs/libmca_timer.a,mca/timer/linux/.libs/libmca_timer_linux.a 
<br>
-Wl,--no-whole-archive -ldl -lnsl -lutil -lpthread -lc -tp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^^^^^^^^^^^^^
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/libso 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/lib 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-32/10.9/lib -tp 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/libso 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/lib 
<br>
-Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-32/10.9/lib 
<br>
-Wl,-soname -Wl,libopen-pal.so.1 -o .libs/libopen-pal.so.1.0.0
<br>
<p><p><p>Best wishes,
<br>
<p>Paul
<br>
<p><p><p><p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15263/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15264.php">Jeff Squyres: "Re: [OMPI users] v1.5.1 build failed with PGI compiler"</a>
<li><strong>Previous message:</strong> <a href="15262.php">Hicham Mouline: "Re: [OMPI users] Can openmpi run on two different operating system?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15264.php">Jeff Squyres: "Re: [OMPI users] v1.5.1 build failed with PGI compiler"</a>
<li><strong>Reply:</strong> <a href="15264.php">Jeff Squyres: "Re: [OMPI users] v1.5.1 build failed with PGI compiler"</a>
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
