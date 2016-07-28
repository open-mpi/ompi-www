<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 17 10:33:42 2006" -->
<!-- isoreceived="20060317153342" -->
<!-- sent="Fri, 17 Mar 2006 10:33:35 -0500" -->
<!-- isosent="20060317153335" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bproc configure help" -->
<!-- id="7E6FB294-E445-4F2E-BC55-FD8BB0FEF441_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="34AED18B-0DF3-4DA3-9B90-712B25A6E700_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-03-17 10:33:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0759.php">Ralf Wildenhues: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Previous message:</strong> <a href="0757.php">Greg Watson: "[OMPI devel] bproc configure help"</a>
<li><strong>In reply to:</strong> <a href="0757.php">Greg Watson: "[OMPI devel] bproc configure help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0760.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Reply:</strong> <a href="0760.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 17, 2006, at 10:17 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; I'm building OMPI 1.0.2a9 on a bproc machine (Yellow Dog Linux 4.0/
</span><br>
<span class="quotelev1">&gt; ppc). It just has an ethernet interface, no fancy network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried configuring as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --enable-static --disable-shared --without-threads --with-
</span><br>
<span class="quotelev1">&gt; devel-headers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --enable-static --disable-shared --without-threads --
</span><br>
<span class="quotelev1">&gt; without-mpi-threads --with-devel-headers
</span><br>
<p>The second one should be --disable-mpi-threads, but it really doesn't  
<br>
matter - specifying --without-threads will automatically disable mpi  
<br>
threads.  So these are both correct for what you are trying to do.   
<br>
Clearly, however, something else is going on :/.
<br>
<p><span class="quotelev1">&gt; In both cases, I'm still seeing the thread library linked in the
</span><br>
<span class="quotelev1">&gt; final executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc -o testmpi testmpi.c
</span><br>
<span class="quotelev1">&gt; $ ldd testmpi
</span><br>
<span class="quotelev1">&gt;          libutil.so.1 =&gt; /lib/libutil.so.1 (0x0f590000)
</span><br>
<span class="quotelev1">&gt;          libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x0e850000)
</span><br>
<span class="quotelev1">&gt;          libdl.so.2 =&gt; /lib/libdl.so.2 (0x0fdc0000)
</span><br>
<span class="quotelev1">&gt;          libbproc.so.4 =&gt; /usr/lib/libbproc.so.4 (0x0fe50000)
</span><br>
<span class="quotelev1">&gt;          libpthread.so.0 =&gt; /lib/tls/libpthread.so.0 (0x0fc40000)
</span><br>
<span class="quotelev1">&gt;          librt.so.1 =&gt; /lib/tls/librt.so.1 (0x0f660000)
</span><br>
<span class="quotelev1">&gt;          libm.so.6 =&gt; /lib/tls/libm.so.6 (0x30013000)
</span><br>
<span class="quotelev1">&gt;          libc.so.6 =&gt; /lib/tls/libc.so.6 (0x0fe70000)
</span><br>
<span class="quotelev1">&gt;          /lib/ld.so.1 =&gt; /lib/ld.so.1 (0x0ffd0000)
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<p>What does &quot;mpicc -showme&quot; show?  If it includes something like - 
<br>
pthread or -lpthread, can you send the config.log file from Open MPI?
<br>
<p>Since ldd doesn't list the OMPI libraries as dependencies, it's a  
<br>
pretty good assumption that they were statically linked in (so at  
<br>
least the --disable-shared part worked).  Therefore, if mpicc doesn't  
<br>
explicitly list -pthread or -lpthread, then the dependency is coming  
<br>
from one of two places.  Either the compiler is explicitly adding - 
<br>
lpthread anyway (unlikely) or one of the other libraries that we  
<br>
added a -l for does depend on pthreads for some reason.  I can't  
<br>
think off hand what we might add to cause this, so it might mean  
<br>
searching through the list of libraries with ldd to see if one of  
<br>
them includes a dependency on /lib/tls/libpthread.so.
<br>
<p><span class="quotelev1">&gt; Checking ompi_config.h shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define HAVE_PTHREAD_H 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_ENABLE_MPI_THREADS 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_ENABLE_PROGRESS_THREADS 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_POSIX_THREADS 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_SOLARIS_THREADS 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If anyone can tell me what I'm doing wrong, it would be appreciated.
</span><br>
<span class="quotelev1">&gt; I need to get this working for a demo on Monday.
</span><br>
<p>That looks like Open MPI's configure script disabled threads  
<br>
support.  The HAVE_PTHREAD_H should not be used to figure out if we  
<br>
should use pthread support or not - it's only given to indicate  
<br>
whether pthread.h exists as a useable header file.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0759.php">Ralf Wildenhues: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Previous message:</strong> <a href="0757.php">Greg Watson: "[OMPI devel] bproc configure help"</a>
<li><strong>In reply to:</strong> <a href="0757.php">Greg Watson: "[OMPI devel] bproc configure help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0760.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Reply:</strong> <a href="0760.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
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
