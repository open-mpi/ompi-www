<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 19 20:46:10 2006" -->
<!-- isoreceived="20060320014610" -->
<!-- sent="Sun, 19 Mar 2006 18:46:04 -0700" -->
<!-- isosent="20060320014604" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bproc configure help" -->
<!-- id="65F3A262-CFD0-4F09-B9DE-010E0A9A9FF9_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EA5EA451-99AA-4DA3-8E19-B1895EBD412E_at_open-mpi.org" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-19 20:46:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0768.php">Josh Hursey: "[OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>Previous message:</strong> <a href="0766.php">Brian Barrett: "Re: [OMPI devel] app contexts broken on trunk?"</a>
<li><strong>In reply to:</strong> <a href="0763.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0759.php">Ralf Wildenhues: "Re: [OMPI devel] bproc configure help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't need ROMIO so I disabled it. Problem fixed.
<br>
<p>Thanks,
<br>
<p>Greg
<br>
<p>On Mar 17, 2006, at 9:33 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; As suspected, it was a component adding the -lpthread.  The problem
</span><br>
<span class="quotelev1">&gt; is that the component in question is ROMIO and it does it because it
</span><br>
<span class="quotelev1">&gt; thinks that -lpthread is needed to make asynchronous I/O work
</span><br>
<span class="quotelev1">&gt; properly.  Which is actually a possibility, depending on which
</span><br>
<span class="quotelev1">&gt; version of the Linux kernel you are using.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you need asynchronous MPI-2 IO functions, I think you have to live
</span><br>
<span class="quotelev1">&gt; with the dependency on -lpthread.  However, if you don't need MPI-2
</span><br>
<span class="quotelev1">&gt; IO functionality at all, you can configure Open MPI with --disable-io-
</span><br>
<span class="quotelev1">&gt; romio or if you can live without aio support for ROMIO, you can
</span><br>
<span class="quotelev1">&gt; configure Open MPI with --with-io-romio-flags='--disable-aio'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that disabling aio support in ROMIO will remove the pthread
</span><br>
<span class="quotelev1">&gt; dependency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 17, 2006, at 10:57 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpicc -showme
</span><br>
<span class="quotelev2">&gt;&gt; gcc -I/usr/local/include -I/usr/local/include/openmpi -I/usr/local/
</span><br>
<span class="quotelev2">&gt;&gt; include/openmpi/opal -I/usr/local/include/openmpi/orte -I/usr/local/
</span><br>
<span class="quotelev2">&gt;&gt; include/openmpi/ompi -L/usr/local/lib -lmpi -lorte -lopal -lutil -
</span><br>
<span class="quotelev2">&gt;&gt; lnsl -ldl -lbproc -lbproc -lbproc -lbproc -lbproc -lbproc -lpthread -
</span><br>
<span class="quotelev2">&gt;&gt; lrt -Wl,--export-dynamic -lm -lutil -lnsl -ldl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like -lpthread is there...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 17, 2006, at 8:33 AM, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 17, 2006, at 10:17 AM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm building OMPI 1.0.2a9 on a bproc machine (Yellow Dog Linux 4.0/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ppc). It just has an ethernet interface, no fancy network.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've tried configuring as follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --enable-static --disable-shared --without-threads --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel-headers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --enable-static --disable-shared --without-threads --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; without-mpi-threads --with-devel-headers
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The second one should be --disable-mpi-threads, but it really  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; matter - specifying --without-threads will automatically disable mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threads.  So these are both correct for what you are trying to do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Clearly, however, something else is going on :/.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In both cases, I'm still seeing the thread library linked in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; final executable:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpicc -o testmpi testmpi.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ldd testmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          libutil.so.1 =&gt; /lib/libutil.so.1 (0x0f590000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x0e850000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          libdl.so.2 =&gt; /lib/libdl.so.2 (0x0fdc0000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          libbproc.so.4 =&gt; /usr/lib/libbproc.so.4 (0x0fe50000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          libpthread.so.0 =&gt; /lib/tls/libpthread.so.0 (0x0fc40000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          librt.so.1 =&gt; /lib/tls/librt.so.1 (0x0f660000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          libm.so.6 =&gt; /lib/tls/libm.so.6 (0x30013000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          libc.so.6 =&gt; /lib/tls/libc.so.6 (0x0fe70000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          /lib/ld.so.1 =&gt; /lib/ld.so.1 (0x0ffd0000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What does &quot;mpicc -showme&quot; show?  If it includes something like -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pthread or -lpthread, can you send the config.log file from Open  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since ldd doesn't list the OMPI libraries as dependencies, it's a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pretty good assumption that they were statically linked in (so at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; least the --disable-shared part worked).  Therefore, if mpicc  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; explicitly list -pthread or -lpthread, then the dependency is coming
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from one of two places.  Either the compiler is explicitly adding -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lpthread anyway (unlikely) or one of the other libraries that we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; added a -l for does depend on pthreads for some reason.  I can't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think off hand what we might add to cause this, so it might mean
</span><br>
<span class="quotelev3">&gt;&gt;&gt; searching through the list of libraries with ldd to see if one of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; them includes a dependency on /lib/tls/libpthread.so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Checking ompi_config.h shows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define HAVE_PTHREAD_H 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define OMPI_ENABLE_MPI_THREADS 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define OMPI_ENABLE_PROGRESS_THREADS 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define OMPI_HAVE_POSIX_THREADS 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define OMPI_HAVE_SOLARIS_THREADS 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If anyone can tell me what I'm doing wrong, it would be  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I need to get this working for a demo on Monday.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That looks like Open MPI's configure script disabled threads
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support.  The HAVE_PTHREAD_H should not be used to figure out if we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should use pthread support or not - it's only given to indicate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whether pthread.h exists as a useable header file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0768.php">Josh Hursey: "[OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>Previous message:</strong> <a href="0766.php">Brian Barrett: "Re: [OMPI devel] app contexts broken on trunk?"</a>
<li><strong>In reply to:</strong> <a href="0763.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0759.php">Ralf Wildenhues: "Re: [OMPI devel] bproc configure help"</a>
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
