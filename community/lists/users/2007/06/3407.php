<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 23:04:26 2007" -->
<!-- isoreceived="20070608030426" -->
<!-- sent="Fri, 8 Jun 2007 15:04:22 +1200" -->
<!-- isosent="20070608030422" -->
<!-- name="Code Master" -->
<!-- email="cpp.codemaster_at_[hidden]" -->
<!-- subject="Re: [OMPI users] making all library components static (questions about --enable-mcs-static)" -->
<!-- id="1626092b0706072004w6f06d6dj5651fae859015ebf_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C70060ED-0B26-4854-827C-24DE957ACD38_at_cisco.com" -->
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
<strong>From:</strong> Code Master (<em>cpp.codemaster_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 23:04:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3408.php">Aaron Thompson: "Re: [OMPI users] Issues with DL POLY"</a>
<li><strong>Previous message:</strong> <a href="3406.php">Ben Allan: "Re: [OMPI users] Issues with DL POLY"</a>
<li><strong>In reply to:</strong> <a href="3393.php">Jeff Squyres: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3550.php">Brian Barrett: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>Reply:</strong> <a href="3550.php">Brian Barrett: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff (and everyone),
<br>
<p>Thanks!  Now I have compiled the openmpi-1.2.2 successfully under i386-Linux
<br>
(Debian Sarge) with the following configurations:
<br>
<p>./configure CFLAGS=-g -pg -O3 --enable-mpi-threads --enable-progress-threads
<br>
--enable-static --disable-shared
<br>
<p>However when I compile my client program using mpicc and I inserted -static,
<br>
<p>(compile is done by a makefile)
<br>
mpicc  -static -g -pg -O3 -W -Wall -pedantic -std=c99 -o raytrace  bbox.o
<br>
cr.o env.o fbuf.o geo.o huprn.o husetup.o hutv.o isect.o main.o matrix.o
<br>
memory.o poly.o raystack.o shade.o sph.o trace.o tri.o debug.o
<br>
<p><p>&nbsp;it fails to link and complains that
<br>
<p>nction `_int_malloc':
<br>
: multiple definition of `_int_malloc'
<br>
/usr/lib/libopen-pal.a(lt1-malloc.o)(.text+0x18a0):openmpi-1.2.2/opal/mca/memory/ptmalloc2/malloc.c:3954:
<br>
first defined here
<br>
/usr/bin/ld: Warning: size of symbol `_int_malloc' changed from 1266 in
<br>
/usr/lib/libopen-pal.a(lt1-malloc.o) to 1333 in
<br>
/home/490_research/490/src/mpi.optimized_profiling//lib/libopen-pal.a(
<br>
lt1-malloc.o)
<br>
<p><p>so what could go wrong here?
<br>
<p>Is it because openmpi has internal implementatios of system-provided
<br>
functions (such as malloc) that are also used in my program, but the one the
<br>
client program use is provided by the system whereas the one in the library
<br>
has a different internal implementation?
<br>
<p>In such case, how could I do the static linking in my client program?  I
<br>
really need static linking as far as possible to do the profiling.
<br>
<p>Thanks!
<br>
<p><p>On 6/8/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 7, 2007, at 2:07 AM, Code Master wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I wish to compile openmpi-1.2.2 so that it:
</span><br>
<span class="quotelev2">&gt; &gt; - support MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev2">&gt; &gt; - enable profiling (generate gmon.out for each process after my
</span><br>
<span class="quotelev2">&gt; &gt; client app finish running) to tell apart CPU time of my client
</span><br>
<span class="quotelev2">&gt; &gt; program from the MPI library
</span><br>
<span class="quotelev2">&gt; &gt; - static linking for everything (incl client app and all components
</span><br>
<span class="quotelev2">&gt; &gt; of library openmpi)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; in the documentation, it says that --enable-mcs-static=&lt;CSV list&gt;
</span><br>
<span class="quotelev2">&gt; &gt; will enable static linking of the modules in the list, however what
</span><br>
<span class="quotelev2">&gt; &gt; can I specify if I want to statically link *all* mcs modules
</span><br>
<span class="quotelev2">&gt; &gt; without knowing the list of modules available?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should be able to do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ./configure --enable-static --disable-shared ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will do 2 things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - libmpi (and friends) will be compiled as .a's (instead of .so's)
</span><br>
<span class="quotelev1">&gt; - all the MCA components will be physically contained in libmpi (and
</span><br>
<span class="quotelev1">&gt; friends) instead of being built as standalone plugins
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also this is the plan for my command used for configuring openmpi:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure CFLAGS=&quot;-g -pg -O3 -static&quot; --prefix=./ --enable-mpi-
</span><br>
<span class="quotelev2">&gt; &gt; threads --enable-progress-threads --enable-static  --disable-shared
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mcs-static --with-devel-headers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's actually --enable-mca-static, not --enable-mcs-static.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, that should not be necessary; the --enable-static and --
</span><br>
<span class="quotelev1">&gt; disable-shared should take care of pulling all the components into
</span><br>
<span class="quotelev1">&gt; the libraries for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3407/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3408.php">Aaron Thompson: "Re: [OMPI users] Issues with DL POLY"</a>
<li><strong>Previous message:</strong> <a href="3406.php">Ben Allan: "Re: [OMPI users] Issues with DL POLY"</a>
<li><strong>In reply to:</strong> <a href="3393.php">Jeff Squyres: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3550.php">Brian Barrett: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>Reply:</strong> <a href="3550.php">Brian Barrett: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
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
