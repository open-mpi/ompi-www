<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 17 11:33:45 2006" -->
<!-- isoreceived="20060317163345" -->
<!-- sent="Fri, 17 Mar 2006 11:33:38 -0500" -->
<!-- isosent="20060317163338" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bproc configure help" -->
<!-- id="EA5EA451-99AA-4DA3-8E19-B1895EBD412E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6CBFDF03-A2CC-40D7-8B7C-F7F3CDBB2765_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-17 11:33:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0764.php">Brian Barrett: "[OMPI devel] app contexts broken on trunk?"</a>
<li><strong>Previous message:</strong> <a href="0762.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9323 - Missing	datatype_memcpy.c"</a>
<li><strong>In reply to:</strong> <a href="0760.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0767.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Reply:</strong> <a href="0767.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As suspected, it was a component adding the -lpthread.  The problem  
<br>
is that the component in question is ROMIO and it does it because it  
<br>
thinks that -lpthread is needed to make asynchronous I/O work  
<br>
properly.  Which is actually a possibility, depending on which  
<br>
version of the Linux kernel you are using.
<br>
<p>If you need asynchronous MPI-2 IO functions, I think you have to live  
<br>
with the dependency on -lpthread.  However, if you don't need MPI-2  
<br>
IO functionality at all, you can configure Open MPI with --disable-io- 
<br>
romio or if you can live without aio support for ROMIO, you can  
<br>
configure Open MPI with --with-io-romio-flags='--disable-aio'.
<br>
<p>I believe that disabling aio support in ROMIO will remove the pthread  
<br>
dependency.
<br>
<p>Brian
<br>
<p>On Mar 17, 2006, at 10:57 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; $ mpicc -showme
</span><br>
<span class="quotelev1">&gt; gcc -I/usr/local/include -I/usr/local/include/openmpi -I/usr/local/
</span><br>
<span class="quotelev1">&gt; include/openmpi/opal -I/usr/local/include/openmpi/orte -I/usr/local/
</span><br>
<span class="quotelev1">&gt; include/openmpi/ompi -L/usr/local/lib -lmpi -lorte -lopal -lutil -
</span><br>
<span class="quotelev1">&gt; lnsl -ldl -lbproc -lbproc -lbproc -lbproc -lbproc -lbproc -lpthread -
</span><br>
<span class="quotelev1">&gt; lrt -Wl,--export-dynamic -lm -lutil -lnsl -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like -lpthread is there...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 17, 2006, at 8:33 AM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 17, 2006, at 10:17 AM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm building OMPI 1.0.2a9 on a bproc machine (Yellow Dog Linux 4.0/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ppc). It just has an ethernet interface, no fancy network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've tried configuring as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --enable-static --disable-shared --without-threads --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel-headers
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --enable-static --disable-shared --without-threads --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without-mpi-threads --with-devel-headers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The second one should be --disable-mpi-threads, but it really doesn't
</span><br>
<span class="quotelev2">&gt;&gt; matter - specifying --without-threads will automatically disable mpi
</span><br>
<span class="quotelev2">&gt;&gt; threads.  So these are both correct for what you are trying to do.
</span><br>
<span class="quotelev2">&gt;&gt; Clearly, however, something else is going on :/.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In both cases, I'm still seeing the thread library linked in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; final executable:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpicc -o testmpi testmpi.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ldd testmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libutil.so.1 =&gt; /lib/libutil.so.1 (0x0f590000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x0e850000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libdl.so.2 =&gt; /lib/libdl.so.2 (0x0fdc0000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libbproc.so.4 =&gt; /usr/lib/libbproc.so.4 (0x0fe50000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libpthread.so.0 =&gt; /lib/tls/libpthread.so.0 (0x0fc40000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          librt.so.1 =&gt; /lib/tls/librt.so.1 (0x0f660000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libm.so.6 =&gt; /lib/tls/libm.so.6 (0x30013000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libc.so.6 =&gt; /lib/tls/libc.so.6 (0x0fe70000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          /lib/ld.so.1 =&gt; /lib/ld.so.1 (0x0ffd0000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What does &quot;mpicc -showme&quot; show?  If it includes something like -
</span><br>
<span class="quotelev2">&gt;&gt; pthread or -lpthread, can you send the config.log file from Open MPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since ldd doesn't list the OMPI libraries as dependencies, it's a
</span><br>
<span class="quotelev2">&gt;&gt; pretty good assumption that they were statically linked in (so at
</span><br>
<span class="quotelev2">&gt;&gt; least the --disable-shared part worked).  Therefore, if mpicc doesn't
</span><br>
<span class="quotelev2">&gt;&gt; explicitly list -pthread or -lpthread, then the dependency is coming
</span><br>
<span class="quotelev2">&gt;&gt; from one of two places.  Either the compiler is explicitly adding -
</span><br>
<span class="quotelev2">&gt;&gt; lpthread anyway (unlikely) or one of the other libraries that we
</span><br>
<span class="quotelev2">&gt;&gt; added a -l for does depend on pthreads for some reason.  I can't
</span><br>
<span class="quotelev2">&gt;&gt; think off hand what we might add to cause this, so it might mean
</span><br>
<span class="quotelev2">&gt;&gt; searching through the list of libraries with ldd to see if one of
</span><br>
<span class="quotelev2">&gt;&gt; them includes a dependency on /lib/tls/libpthread.so.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Checking ompi_config.h shows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define HAVE_PTHREAD_H 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define OMPI_ENABLE_MPI_THREADS 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define OMPI_ENABLE_PROGRESS_THREADS 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define OMPI_HAVE_POSIX_THREADS 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define OMPI_HAVE_SOLARIS_THREADS 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If anyone can tell me what I'm doing wrong, it would be appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need to get this working for a demo on Monday.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That looks like Open MPI's configure script disabled threads
</span><br>
<span class="quotelev2">&gt;&gt; support.  The HAVE_PTHREAD_H should not be used to figure out if we
</span><br>
<span class="quotelev2">&gt;&gt; should use pthread support or not - it's only given to indicate
</span><br>
<span class="quotelev2">&gt;&gt; whether pthread.h exists as a useable header file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0764.php">Brian Barrett: "[OMPI devel] app contexts broken on trunk?"</a>
<li><strong>Previous message:</strong> <a href="0762.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9323 - Missing	datatype_memcpy.c"</a>
<li><strong>In reply to:</strong> <a href="0760.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0767.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Reply:</strong> <a href="0767.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
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
