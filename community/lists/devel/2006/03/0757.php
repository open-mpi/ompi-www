<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 17 10:17:33 2006" -->
<!-- isoreceived="20060317151733" -->
<!-- sent="Fri, 17 Mar 2006 08:17:27 -0700" -->
<!-- isosent="20060317151727" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="[OMPI devel] bproc configure help" -->
<!-- id="34AED18B-0DF3-4DA3-9B90-712B25A6E700_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2006-03-17 10:17:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0758.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Previous message:</strong> <a href="0756.php">Sven Stork: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9323 - Missing datatype_memcpy.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0758.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Reply:</strong> <a href="0758.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Reply:</strong> <a href="0759.php">Ralf Wildenhues: "Re: [OMPI devel] bproc configure help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm building OMPI 1.0.2a9 on a bproc machine (Yellow Dog Linux 4.0/ 
<br>
ppc). It just has an ethernet interface, no fancy network.
<br>
<p>I've tried configuring as follows:
<br>
<p>./configure --enable-static --disable-shared --without-threads --with- 
<br>
devel-headers
<br>
<p>and
<br>
<p>./configure --enable-static --disable-shared --without-threads -- 
<br>
without-mpi-threads --with-devel-headers
<br>
<p>In both cases, I'm still seeing the thread library linked in the  
<br>
final executable:
<br>
<p>$ mpicc -o testmpi testmpi.c
<br>
$ ldd testmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/libutil.so.1 (0x0f590000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x0e850000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/libdl.so.2 (0x0fdc0000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libbproc.so.4 =&gt; /usr/lib/libbproc.so.4 (0x0fe50000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/tls/libpthread.so.0 (0x0fc40000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib/tls/librt.so.1 (0x0f660000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/tls/libm.so.6 (0x30013000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/tls/libc.so.6 (0x0fe70000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib/ld.so.1 =&gt; /lib/ld.so.1 (0x0ffd0000)
<br>
$
<br>
<p>Checking ompi_config.h shows:
<br>
<p>#define HAVE_PTHREAD_H 1
<br>
#define OMPI_ENABLE_MPI_THREADS 0
<br>
#define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
#define OMPI_HAVE_POSIX_THREADS 0
<br>
#define OMPI_HAVE_SOLARIS_THREADS 0
<br>
#define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
<p>If anyone can tell me what I'm doing wrong, it would be appreciated.  
<br>
I need to get this working for a demo on Monday.
<br>
<p>Thanks,
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0758.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Previous message:</strong> <a href="0756.php">Sven Stork: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9323 - Missing datatype_memcpy.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0758.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Reply:</strong> <a href="0758.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Reply:</strong> <a href="0759.php">Ralf Wildenhues: "Re: [OMPI devel] bproc configure help"</a>
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
