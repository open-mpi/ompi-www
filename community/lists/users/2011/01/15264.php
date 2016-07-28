<?
$subject_val = "Re: [OMPI users] v1.5.1 build failed with PGI compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  4 08:30:48 2011" -->
<!-- isoreceived="20110104133048" -->
<!-- sent="Tue, 4 Jan 2011 08:30:41 -0500" -->
<!-- isosent="20110104133041" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.5.1 build failed with PGI compiler" -->
<!-- id="94910EB7-FB37-4220-8896-2922CE99BF36_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D22F951.4020406_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] v1.5.1 build failed with PGI compiler<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-04 08:30:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15265.php">Ralph Castain: "Re: [OMPI users] Can openmpi run on two different operating system?"</a>
<li><strong>Previous message:</strong> <a href="15263.php">Paul Kapinos: "[OMPI users] v1.5.1 build failed with PGI compiler"</a>
<li><strong>In reply to:</strong> <a href="15263.php">Paul Kapinos: "[OMPI users] v1.5.1 build failed with PGI compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this was recently fixed on the trunk, and Ethan just filed a CMR to bring this over to the v1.4 series.
<br>
<p>Ethan -- did this go to v1.5 as well?  If so, Paul, you should be able to get a 1.5 nightly snapshot tarball to try that.
<br>
<p><p><p>On Jan 4, 2011, at 5:41 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to buld the version 1.5.1 with different compilers, and the build with PGI compilers failed. I believe, the configuration of the final link stage goes not well - an option (LDFLAGS) explicitly given by configuring is partially lost. In the past we were able to build 1.4.x versions with the same compilers and configuration options, so it looks for me as a new configuration issue in 1.5.x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configured with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###################################################################
</span><br>
<span class="quotelev1">&gt; ./configure --with-openib --with-devel-headers --enable-contrib-no-build=vt --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; CFLAGS=-fastsse -tp k8-32 -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/libso -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/lib -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-32/10.9/lib CXXFLAGS=-fastsse -tp k8-32 -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/libso -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/lib -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-32/10.9/lib FFLAGS=-fastsse -tp k8-32 -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/libso -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/lib -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-32/10.9/lib
</span><br>
<span class="quotelev1">&gt; FCFLAGS= -tp k8-32 -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/libso -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/lib -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-32/10.9/lib
</span><br>
<span class="quotelev1">&gt; F77=pgf90
</span><br>
<span class="quotelev1">&gt; LDFLAGS=-fastsse -tp k8-32 -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/libso -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/lib -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-32/10.9/lib --prefix=/....../MPI/openmpi-1.5.1mt/linux32/pgi
</span><br>
<span class="quotelev1">&gt; ###################################################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note the use of &quot;-tp k8-32&quot; flag for building 32bit version. Similarly, for 64bit we use &quot;-tp k8-64&quot; flag with same behaviour. If compiling, the following error happens:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###################################################################
</span><br>
<span class="quotelev1">&gt; gmake[2]: Entering directory `/....../home/..../OpenMPI/openmpi-1.5.1_linux32_pgi/opal'
</span><br>
<span class="quotelev1">&gt;  CCLD   libopen-pal.la
</span><br>
<span class="quotelev1">&gt; .........
</span><br>
<span class="quotelev1">&gt; pgcc-Fatal-Switch -tp must have a value
</span><br>
<span class="quotelev1">&gt; .........
</span><br>
<span class="quotelev1">&gt; gmake[2]: *** [libopen-pal.la] Error 2
</span><br>
<span class="quotelev1">&gt; gmake[2]: Leaving directory `/....../home/..../OpenMPI/openmpi-1.5.1_linux32_pgi/opal'
</span><br>
<span class="quotelev1">&gt; ###################################################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking to the underlying real command line which was called you will see the &quot;k8-32&quot; part of the LDFLAGS option being lost:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /....../home/..../OpenMPI/openmpi-1.5.1_linux32_pgi/opal
</span><br>
<span class="quotelev1">&gt; -shared -fpic -DPIC class/.libs/opal_bitmap.o class/.libs/opal_free_list.o class/.libs/opal_hash_table.o class/.libs/opal_list.o class/.libs/opal_object.o class/.libs/opal_graph.o class/.libs/opal_atomic_lifo.o class/.libs/opal_pointer_array.o class/.libs/opal_value_array.o memoryhooks/.libs/memory.o runtime/.libs/opal_progress.o runtime/.libs/opal_finalize.o runtime/.libs/opal_init.o runtime/.libs/opal_params.o runtime/.libs/opal_cr.o threads/.libs/condition.o threads/.libs/mutex.o threads/.libs/thread.o threads/.libs/tsd.o dss/.libs/dss_internal_functions.o dss/.libs/dss_compare.o dss/.libs/dss_copy.o dss/.libs/dss_dump.o dss/.libs/dss_get.o dss/.libs/dss_load_unload.o dss/.libs/dss_lookup.o dss/.libs/dss_pack.o dss/.libs/dss_peek.o dss/.libs/dss_print.o dss/.libs/dss_register.o dss/.libs/dss_release.o dss/.libs/dss_set.o dss/.libs/dss_set_buffer_type.o dss/.libs/dss_size.o dss/.libs/dss_unpack.o dss/.libs/dss_open_close.o -Wl,--whole-archive,../opal/libltdl/.libs/libltdlc.a,asm/.libs/libasm.a,datatype/.</span><br>
libs/libdatatype.a,event/.libs/libevent.a,mca/base/.libs/libmca_base.a,util/.libs/libopalutil.a,mca/backtrace/.libs/libmca_backtrace.a,mca/backtrace/execinfo/.libs/libmca_backtrace_execinfo.a,mca/carto/.libs/libmca_carto.a,mca/crs/.libs/libmca_crs.a,mca/installdirs/.libs/libmca_installdirs.a,mca/installdirs/config/.libs/libmca_installdirs_config.a,mca/installdirs/env/.libs/libmca_installdirs_env.a,mca/maffinity/.libs/libmca_maffinity.a,mca/memchecker/.libs/libmca_memchecker.a,mca/memcpy/.libs/libmca_memcpy.a,mca/memory/.libs/libmca_memory.a,mca/memory/ptmalloc2/.libs/libmca_memory_ptmalloc2.a,mca/paffinity/.libs/libmca_paffinity.a,mca/pstat/.libs/libmca_pstat.a,mca/sysinfo/.libs/libmca_sysinfo.a,mca/timer/.libs/libmca_timer.a,mca/timer/linux/.libs/libmca_timer_linux.a -Wl,--no-whole-archive -ldl -lnsl -lutil -lpthread -lc -tp
<br>
<span class="quotelev1">&gt;                                                       ^^^^^^^^^^^^^
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/libso -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/lib -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-32/10.9/lib -tp -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/libso -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-64/10.9/lib -Wl,-rpath=/....../PGI/PGI_10.9_CENTOS_64/linux86-32/10.9/lib -Wl,-soname -Wl,libopen-pal.so.1 -o .libs/libopen-pal.so.1.0.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15265.php">Ralph Castain: "Re: [OMPI users] Can openmpi run on two different operating system?"</a>
<li><strong>Previous message:</strong> <a href="15263.php">Paul Kapinos: "[OMPI users] v1.5.1 build failed with PGI compiler"</a>
<li><strong>In reply to:</strong> <a href="15263.php">Paul Kapinos: "[OMPI users] v1.5.1 build failed with PGI compiler"</a>
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
