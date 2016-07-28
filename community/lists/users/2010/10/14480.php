<?
$subject_val = "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 15 10:56:54 2010" -->
<!-- isoreceived="20101015145654" -->
<!-- sent="Fri, 15 Oct 2010 16:56:50 +0200" -->
<!-- isosent="20101015145650" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)" -->
<!-- id="201010151656.51489.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)" -->
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
<strong>Subject:</strong> Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-15 10:56:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14481.php">Matthias Jurenz: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14479.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array"</a>
<li><strong>Maybe in reply to:</strong> <a href="14438.php">Jed Brown: "[OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14481.php">Matthias Jurenz: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14481.php">Matthias Jurenz: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Thu, Oct 14, 2010 at 22:36, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 11, 2010, at 4:50 PM, Jed Brown wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Note that this is an out-of-source build.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ ../configure --enable-debug --enable-mem-debug
</span><br>
<span class="quotelev2">&gt; &gt; --prefix=/home/jed/usr/ompi-1.5-clang CC=clang CXX=clang++
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ make
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [...]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CXXLD vtunify-mpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Abort':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:63:
<br>
<span class="quotelev2">&gt; &gt; undefined reference to `MPI_Abort'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Well this is disappointing. :-\
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you &quot;make V=1&quot; so that we can see the command line here that is
</span><br>
<span class="quotelev2">&gt; &gt; failing?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: link: clang++ -DVT_MPI -g -finline-functions -pthread -o
</span><br>
<span class="quotelev1">&gt; .libs/vtunify-mpi vtunify_mpi-vt_unify_mpi.o vtunify_mpi-vt_unify.o
</span><br>
<span class="quotelev1">&gt; vtunify_mpi-vt_unify_defs.o vtunify_mpi-vt_unify_defs_hdlr.o
</span><br>
<span class="quotelev1">&gt; vtunify_mpi-vt_unify_events.o vtunify_mpi-vt_unify_events_hdlr.o
</span><br>
<span class="quotelev1">&gt; vtunify_mpi-vt_unify_markers.o vtunify_mpi-vt_unify_markers_hdlr.o
</span><br>
<span class="quotelev1">&gt; vtunify_mpi-vt_unify_stats.o vtunify_mpi-vt_unify_stats_hdlr.o
</span><br>
<span class="quotelev1">&gt; vtunify_mpi-vt_unify_tkfac.o ../../../util/.libs/libutil.a
</span><br>
<span class="quotelev1">&gt; ../../../extlib/otf/otflib/.libs/libotf.so -lz
</span><br>
<span class="quotelev1">&gt; -L/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/../../../.libs
</span><br>
<span class="quotelev1">&gt; /home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/../../../.libs/libmpi.so
</span><br>
<span class="quotelev1">&gt; -ldl -lnsl -lutil -lm -pthread -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/home/jed/usr/ompi-1.5-clang/lib
</span><br>
<span class="quotelev1">&gt; vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Abort':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:63:
<br>
<span class="quotelev1">&gt; undefined reference to `MPI_Abort'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; FWIW, this looks like a problem that is self-contained in VampirTrace, so
</span><br>
<span class="quotelev2">&gt; &gt; you can likely get a working build with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --enable-contrib-no-build=vt ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Leaving out the debugging flags gets me further (no compilation error,
</span><br>
<span class="quotelev2">&gt; &gt; just this link error):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ ../configure --prefix=/home/jed/usr/ompi-1.5-clang CC=clang CXX=clang++
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ make
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [...]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CCLD libutil.la
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ar:
</span><br>
<span class="quotelev2">&gt; &gt; /home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/util/.libs/libutil.a: 
</span><br>
No
<br>
<span class="quotelev2">&gt; &gt; such file or directory
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[5]: *** [libutil.la] Error 9
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That's a weird one -- it should be *creating* that library, so I'm not 
</span><br>
sure
<br>
<span class="quotelev2">&gt; &gt; why it would complain that the library doesn't exist...? This could be a
</span><br>
<span class="quotelev2">&gt; &gt; red herring, though -- perhaps some oddity in your tree and/or
</span><br>
<span class="quotelev2">&gt; &gt; filesystem...? (I've seen this kind of thing before such that a &quot;make
</span><br>
<span class="quotelev2">&gt; &gt; distclean&quot; fixed the issue, I think)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure enough, using a new build directory, I get the same error as above:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: link: clang++ -DVT_MPI -O3 -DNDEBUG -finline-functions -pthread -o
</span><br>
<span class="quotelev1">&gt; .libs/vtunify-mpi vtunify_mpi-vt_unify_mpi.o vtunify_mpi-vt_unify.o vtunif
</span><br>
<span class="quotelev1">&gt; y_mpi-vt_unify_defs.o vtunify_mpi-vt_unify_defs_hdlr.o
</span><br>
<span class="quotelev1">&gt; vtunify_mpi-vt_unify_events.o vtunify_mpi-vt_unify_events_hdlr.o
</span><br>
<span class="quotelev1">&gt; vtunify_mpi-vt_unify_markers.o
</span><br>
<span class="quotelev1">&gt;  vtunify_mpi-vt_unify_markers_hdlr.o vtunify_mpi-vt_unify_stats.o
</span><br>
<span class="quotelev1">&gt; vtunify_mpi-vt_unify_stats_hdlr.o vtunify_mpi-vt_unify_tkfac.o
</span><br>
<span class="quotelev1">&gt;  ../../../util/.libs/
</span><br>
<span class="quotelev1">&gt; libutil.a ../../../extlib/otf/otflib/.libs/libotf.so -lz
</span><br>
<span class="quotelev1">&gt; -L/home/jed/src/openmpi-1.5/bclang-nodbg/ompi/contrib/vt/vt/../../../.libs
</span><br>
<span class="quotelev1">&gt; /home/jed/src/open
</span><br>
<span class="quotelev1">&gt; mpi-1.5/bclang-nodbg/ompi/contrib/vt/vt/../../../.libs/libmpi.so -ldl -lnsl
</span><br>
<span class="quotelev1">&gt; -lutil -lm -pthread -Wl,-rpath -Wl,/home/jed/usr/ompi-1.5-clang-nodbg/lib
</span><br>
<span class="quotelev1">&gt; vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Abort':
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:
</span><br>
(.text+0xa):
<br>
<span class="quotelev1">&gt; undefined reference to `MPI_Abort'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Grab config.log for this case here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://59A2.org/files/openmpi-1.5-clang-config.log">http://59A2.org/files/openmpi-1.5-clang-config.log</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I also get this last failure with gcc-4.5.1, but only with the debug
</span><br>
<span class="quotelev2">&gt; &gt; flags:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ ../configure --enable-debug --enable-mem-debug
</span><br>
<span class="quotelev2">&gt; &gt; --prefix=/home/jed/usr/ompi-1.5-gcc CC=gcc CXX=g++
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ make
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [...]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Making all in util
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CC libutil_la-installdirs.lo
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CCLD libutil.la
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ar:
</span><br>
<span class="quotelev2">&gt; &gt; /home/jed/src/openmpi-1.5/bgcc/ompi/contrib/vt/vt/util/.libs/libutil.a: No
</span><br>
<span class="quotelev2">&gt; &gt; such file or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Same error. Weird. Can you &quot;make V=1&quot; here, too?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This one completes with a clean build directory, reconfiguring from a
</span><br>
<span class="quotelev1">&gt; non-debug build must have caused this issue the first time around.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This is definitely a Libtool issue. I could simply reproduce this error by 
<br>
reconfiguring from a previous build regardless of which options passed to the 
<br>
configure:
<br>
<p>configure
<br>
make
<br>
configure
<br>
make
<br>
<p>It seems to me that libtool doesn't correctly cleanup its previous created 
<br>
output files. Just before libtool builds the library, it removes libutil.la and 
<br>
libutil.a from the .libs directory, but not libutil.la from CWD.
<br>
<p>If I run 'make clean' or manually remove the libutil.la, it works.
<br>
<p>Unfortunately, this issue is also persistent in Libtool version 2.2.8 and 
<br>
2.2.4.
<br>
<p><p>Matthias
<br>
<p><span class="quotelev1">&gt; Jed 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14481.php">Matthias Jurenz: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14479.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array"</a>
<li><strong>Maybe in reply to:</strong> <a href="14438.php">Jed Brown: "[OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14481.php">Matthias Jurenz: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14481.php">Matthias Jurenz: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
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
