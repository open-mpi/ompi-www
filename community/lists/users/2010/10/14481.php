<?
$subject_val = "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 15 10:59:36 2010" -->
<!-- isoreceived="20101015145936" -->
<!-- sent="Fri, 15 Oct 2010 16:59:32 +0200" -->
<!-- isosent="20101015145932" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)" -->
<!-- id="201010151659.33349.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201010151656.51489.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>Date:</strong> 2010-10-15 10:59:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14482.php">Gus Correa: "Re: [OMPI users] self-messaging questions"</a>
<li><strong>Previous message:</strong> <a href="14480.php">Matthias Jurenz: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14480.php">Matthias Jurenz: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 15 October 2010 16:56:50 you wrote:
<br>
<span class="quotelev2">&gt; &gt; On Thu, Oct 14, 2010 at 22:36, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Oct 11, 2010, at 4:50 PM, Jed Brown wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Note that this is an out-of-source build.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; $ ../configure --enable-debug --enable-mem-debug
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --prefix=/home/jed/usr/ompi-1.5-clang CC=clang CXX=clang++
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; $ make
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [...]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; CXXLD vtunify-mpi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Abort':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:63:
<br>
<span class="quotelev3">&gt; &gt; &gt; undefined reference to `MPI_Abort'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Well this is disappointing. :-\
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Can you &quot;make V=1&quot; so that we can see the command line here that is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; failing?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link: clang++ -DVT_MPI -g -finline-functions -pthread -o
</span><br>
<span class="quotelev2">&gt; &gt; .libs/vtunify-mpi vtunify_mpi-vt_unify_mpi.o vtunify_mpi-vt_unify.o
</span><br>
<span class="quotelev2">&gt; &gt; vtunify_mpi-vt_unify_defs.o vtunify_mpi-vt_unify_defs_hdlr.o
</span><br>
<span class="quotelev2">&gt; &gt; vtunify_mpi-vt_unify_events.o vtunify_mpi-vt_unify_events_hdlr.o
</span><br>
<span class="quotelev2">&gt; &gt; vtunify_mpi-vt_unify_markers.o vtunify_mpi-vt_unify_markers_hdlr.o
</span><br>
<span class="quotelev2">&gt; &gt; vtunify_mpi-vt_unify_stats.o vtunify_mpi-vt_unify_stats_hdlr.o
</span><br>
<span class="quotelev2">&gt; &gt; vtunify_mpi-vt_unify_tkfac.o ../../../util/.libs/libutil.a
</span><br>
<span class="quotelev2">&gt; &gt; ../../../extlib/otf/otflib/.libs/libotf.so -lz
</span><br>
<span class="quotelev2">&gt; &gt; -L/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/../../../.libs
</span><br>
<span class="quotelev2">&gt; &gt; /home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/../../../.libs/libmpi
</span><br>
<span class="quotelev2">&gt; &gt;.so -ldl -lnsl -lutil -lm -pthread -Wl,-rpath
</span><br>
<span class="quotelev2">&gt; &gt; -Wl,/home/jed/usr/ompi-1.5-clang/lib
</span><br>
<span class="quotelev2">&gt; &gt; vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Abort':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:63:
<br>
<span class="quotelev2">&gt; &gt; undefined reference to `MPI_Abort'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; FWIW, this looks like a problem that is self-contained in VampirTrace,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; so you can likely get a working build with:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ./configure --enable-contrib-no-build=vt ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Leaving out the debugging flags gets me further (no compilation
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; error,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; just this link error):
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; $ ../configure --prefix=/home/jed/usr/ompi-1.5-clang CC=clang
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; CXX=clang++ $ make
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [...]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; CCLD libutil.la
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ar:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/util/.libs/libutil.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;a:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; such file or directory
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[5]: *** [libutil.la] Error 9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; That's a weird one -- it should be *creating* that library, so I'm not
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; why it would complain that the library doesn't exist...? This could be
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a red herring, though -- perhaps some oddity in your tree and/or
</span><br>
<span class="quotelev3">&gt; &gt; &gt; filesystem...? (I've seen this kind of thing before such that a &quot;make
</span><br>
<span class="quotelev3">&gt; &gt; &gt; distclean&quot; fixed the issue, I think)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sure enough, using a new build directory, I get the same error as above:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link: clang++ -DVT_MPI -O3 -DNDEBUG -finline-functions -pthread
</span><br>
<span class="quotelev2">&gt; &gt; -o .libs/vtunify-mpi vtunify_mpi-vt_unify_mpi.o vtunify_mpi-vt_unify.o
</span><br>
<span class="quotelev2">&gt; &gt; vtunif y_mpi-vt_unify_defs.o vtunify_mpi-vt_unify_defs_hdlr.o
</span><br>
<span class="quotelev2">&gt; &gt; vtunify_mpi-vt_unify_events.o vtunify_mpi-vt_unify_events_hdlr.o
</span><br>
<span class="quotelev2">&gt; &gt; vtunify_mpi-vt_unify_markers.o
</span><br>
<span class="quotelev2">&gt; &gt;  vtunify_mpi-vt_unify_markers_hdlr.o vtunify_mpi-vt_unify_stats.o
</span><br>
<span class="quotelev2">&gt; &gt; vtunify_mpi-vt_unify_stats_hdlr.o vtunify_mpi-vt_unify_tkfac.o
</span><br>
<span class="quotelev2">&gt; &gt;  ../../../util/.libs/
</span><br>
<span class="quotelev2">&gt; &gt; libutil.a ../../../extlib/otf/otflib/.libs/libotf.so -lz
</span><br>
<span class="quotelev2">&gt; &gt; -L/home/jed/src/openmpi-1.5/bclang-nodbg/ompi/contrib/vt/vt/../../../.lib
</span><br>
<span class="quotelev2">&gt; &gt;s /home/jed/src/open
</span><br>
<span class="quotelev2">&gt; &gt; mpi-1.5/bclang-nodbg/ompi/contrib/vt/vt/../../../.libs/libmpi.so -ldl
</span><br>
<span class="quotelev2">&gt; &gt; -lnsl -lutil -lm -pthread -Wl,-rpath
</span><br>
<span class="quotelev2">&gt; &gt; -Wl,/home/jed/usr/ompi-1.5-clang-nodbg/lib vtunify_mpi-vt_unify_mpi.o: In
</span><br>
<span class="quotelev2">&gt; &gt; function `VTUnify_MPI_Abort':
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi
</span><br>
<span class="quotelev2">&gt; &gt;.c:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (.text+0xa):
</span><br>
<span class="quotelev2">&gt; &gt; undefined reference to `MPI_Abort'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Grab config.log for this case here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://59A2.org/files/openmpi-1.5-clang-config.log">http://59A2.org/files/openmpi-1.5-clang-config.log</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I also get this last failure with gcc-4.5.1, but only with the debug
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; flags:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; $ ../configure --enable-debug --enable-mem-debug
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --prefix=/home/jed/usr/ompi-1.5-gcc CC=gcc CXX=g++
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; $ make
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [...]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Making all in util
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; CC libutil_la-installdirs.lo
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; CCLD libutil.la
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ar:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/jed/src/openmpi-1.5/bgcc/ompi/contrib/vt/vt/util/.libs/libutil.a:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; No such file or directory
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Same error. Weird. Can you &quot;make V=1&quot; here, too?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This one completes with a clean build directory, reconfiguring from a
</span><br>
<span class="quotelev2">&gt; &gt; non-debug build must have caused this issue the first time around.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is definitely a Libtool issue. I could simply reproduce this error by
</span><br>
<span class="quotelev1">&gt; reconfiguring from a previous build regardless of which options passed to
</span><br>
<span class="quotelev1">&gt;  the configure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; configure
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems to me that libtool doesn't correctly cleanup its previous created
</span><br>
<span class="quotelev1">&gt; output files. Just before libtool builds the library, it removes libutil.la
</span><br>
<span class="quotelev1">&gt;  and libutil.a from the .libs directory, but not libutil.la from CWD.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I run 'make clean' or manually remove the libutil.la, it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, this issue is also persistent in Libtool version 2.2.8 and
</span><br>
<span class="quotelev1">&gt; 2.2.4.
</span><br>
I meant version 2.4, not 2.2.4.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14482.php">Gus Correa: "Re: [OMPI users] self-messaging questions"</a>
<li><strong>Previous message:</strong> <a href="14480.php">Matthias Jurenz: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14480.php">Matthias Jurenz: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
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
