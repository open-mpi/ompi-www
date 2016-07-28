<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 17 10:58:50 2006" -->
<!-- isoreceived="20060317155850" -->
<!-- sent="Fri, 17 Mar 2006 08:57:21 -0700" -->
<!-- isosent="20060317155721" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bproc configure help" -->
<!-- id="6CBFDF03-A2CC-40D7-8B7C-F7F3CDBB2765_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7E6FB294-E445-4F2E-BC55-FD8BB0FEF441_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-03-17 10:57:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0761.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Previous message:</strong> <a href="0759.php">Ralf Wildenhues: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>In reply to:</strong> <a href="0758.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0763.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Reply:</strong> <a href="0763.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
$ mpicc -showme
<br>
gcc -I/usr/local/include -I/usr/local/include/openmpi -I/usr/local/ 
<br>
include/openmpi/opal -I/usr/local/include/openmpi/orte -I/usr/local/ 
<br>
include/openmpi/ompi -L/usr/local/lib -lmpi -lorte -lopal -lutil - 
<br>
lnsl -ldl -lbproc -lbproc -lbproc -lbproc -lbproc -lbproc -lpthread - 
<br>
lrt -Wl,--export-dynamic -lm -lutil -lnsl -ldl
<br>
<p>Looks like -lpthread is there...
<br>
<p>Thanks,
<br>
<p>Greg
<br>
<p>On Mar 17, 2006, at 8:33 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 17, 2006, at 10:17 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm building OMPI 1.0.2a9 on a bproc machine (Yellow Dog Linux 4.0/
</span><br>
<span class="quotelev2">&gt;&gt; ppc). It just has an ethernet interface, no fancy network.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried configuring as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-static --disable-shared --without-threads -- 
</span><br>
<span class="quotelev2">&gt;&gt; with-
</span><br>
<span class="quotelev2">&gt;&gt; devel-headers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-static --disable-shared --without-threads --
</span><br>
<span class="quotelev2">&gt;&gt; without-mpi-threads --with-devel-headers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The second one should be --disable-mpi-threads, but it really doesn't
</span><br>
<span class="quotelev1">&gt; matter - specifying --without-threads will automatically disable mpi
</span><br>
<span class="quotelev1">&gt; threads.  So these are both correct for what you are trying to do.
</span><br>
<span class="quotelev1">&gt; Clearly, however, something else is going on :/.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In both cases, I'm still seeing the thread library linked in the
</span><br>
<span class="quotelev2">&gt;&gt; final executable:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpicc -o testmpi testmpi.c
</span><br>
<span class="quotelev2">&gt;&gt; $ ldd testmpi
</span><br>
<span class="quotelev2">&gt;&gt;          libutil.so.1 =&gt; /lib/libutil.so.1 (0x0f590000)
</span><br>
<span class="quotelev2">&gt;&gt;          libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x0e850000)
</span><br>
<span class="quotelev2">&gt;&gt;          libdl.so.2 =&gt; /lib/libdl.so.2 (0x0fdc0000)
</span><br>
<span class="quotelev2">&gt;&gt;          libbproc.so.4 =&gt; /usr/lib/libbproc.so.4 (0x0fe50000)
</span><br>
<span class="quotelev2">&gt;&gt;          libpthread.so.0 =&gt; /lib/tls/libpthread.so.0 (0x0fc40000)
</span><br>
<span class="quotelev2">&gt;&gt;          librt.so.1 =&gt; /lib/tls/librt.so.1 (0x0f660000)
</span><br>
<span class="quotelev2">&gt;&gt;          libm.so.6 =&gt; /lib/tls/libm.so.6 (0x30013000)
</span><br>
<span class="quotelev2">&gt;&gt;          libc.so.6 =&gt; /lib/tls/libc.so.6 (0x0fe70000)
</span><br>
<span class="quotelev2">&gt;&gt;          /lib/ld.so.1 =&gt; /lib/ld.so.1 (0x0ffd0000)
</span><br>
<span class="quotelev2">&gt;&gt; $
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does &quot;mpicc -showme&quot; show?  If it includes something like -
</span><br>
<span class="quotelev1">&gt; pthread or -lpthread, can you send the config.log file from Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since ldd doesn't list the OMPI libraries as dependencies, it's a
</span><br>
<span class="quotelev1">&gt; pretty good assumption that they were statically linked in (so at
</span><br>
<span class="quotelev1">&gt; least the --disable-shared part worked).  Therefore, if mpicc doesn't
</span><br>
<span class="quotelev1">&gt; explicitly list -pthread or -lpthread, then the dependency is coming
</span><br>
<span class="quotelev1">&gt; from one of two places.  Either the compiler is explicitly adding -
</span><br>
<span class="quotelev1">&gt; lpthread anyway (unlikely) or one of the other libraries that we
</span><br>
<span class="quotelev1">&gt; added a -l for does depend on pthreads for some reason.  I can't
</span><br>
<span class="quotelev1">&gt; think off hand what we might add to cause this, so it might mean
</span><br>
<span class="quotelev1">&gt; searching through the list of libraries with ldd to see if one of
</span><br>
<span class="quotelev1">&gt; them includes a dependency on /lib/tls/libpthread.so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Checking ompi_config.h shows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define HAVE_PTHREAD_H 1
</span><br>
<span class="quotelev2">&gt;&gt; #define OMPI_ENABLE_MPI_THREADS 0
</span><br>
<span class="quotelev2">&gt;&gt; #define OMPI_ENABLE_PROGRESS_THREADS 0
</span><br>
<span class="quotelev2">&gt;&gt; #define OMPI_HAVE_POSIX_THREADS 0
</span><br>
<span class="quotelev2">&gt;&gt; #define OMPI_HAVE_SOLARIS_THREADS 0
</span><br>
<span class="quotelev2">&gt;&gt; #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If anyone can tell me what I'm doing wrong, it would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; I need to get this working for a demo on Monday.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That looks like Open MPI's configure script disabled threads
</span><br>
<span class="quotelev1">&gt; support.  The HAVE_PTHREAD_H should not be used to figure out if we
</span><br>
<span class="quotelev1">&gt; should use pthread support or not - it's only given to indicate
</span><br>
<span class="quotelev1">&gt; whether pthread.h exists as a useable header file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0761.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Previous message:</strong> <a href="0759.php">Ralf Wildenhues: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>In reply to:</strong> <a href="0758.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0763.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Reply:</strong> <a href="0763.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
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
