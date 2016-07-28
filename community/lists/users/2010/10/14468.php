<?
$subject_val = "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 17:09:46 2010" -->
<!-- isoreceived="20101014210946" -->
<!-- sent="Thu, 14 Oct 2010 23:09:41 +0200" -->
<!-- isosent="20101014210941" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)" -->
<!-- id="AANLkTimWtC62sD3mJqhkNqw_v0v-nezcMV9fotf=1j_n_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B3ED8CA3-AC27-421B-BF78-6D0712B740C3_at_cisco.com" -->
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
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 17:09:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14469.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14467.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14467.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14469.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14469.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct 14, 2010 at 22:36, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 11, 2010, at 4:50 PM, Jed Brown wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note that this is an out-of-source build.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ../configure --enable-debug --enable-mem-debug
</span><br>
<span class="quotelev1">&gt; --prefix=/home/jed/usr/ompi-1.5-clang CC=clang CXX=clang++
</span><br>
<span class="quotelev2">&gt; &gt; $ make
</span><br>
<span class="quotelev2">&gt; &gt; [...]
</span><br>
<span class="quotelev2">&gt; &gt;   CXXLD  vtunify-mpi
</span><br>
<span class="quotelev2">&gt; &gt; vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Abort':
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:63:
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI_Abort'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well this is disappointing.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you &quot;make V=1&quot; so that we can see the command line here that is
</span><br>
<span class="quotelev1">&gt; failing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>libtool: link: clang++ -DVT_MPI -g -finline-functions -pthread -o
<br>
.libs/vtunify-mpi vtunify_mpi-vt_unify_mpi.o vtunify_mpi-vt_unify.o
<br>
vtunify_mpi-vt_unify_defs.o vtunify_mpi-vt_unify_defs_hdlr.o
<br>
vtunify_mpi-vt_unify_events.o vtunify_mpi-vt_unify_events_hdlr.o
<br>
vtunify_mpi-vt_unify_markers.o vtunify_mpi-vt_unify_markers_hdlr.o
<br>
vtunify_mpi-vt_unify_stats.o vtunify_mpi-vt_unify_stats_hdlr.o
<br>
vtunify_mpi-vt_unify_tkfac.o  ../../../util/.libs/libutil.a
<br>
../../../extlib/otf/otflib/.libs/libotf.so -lz
<br>
-L/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/../../../.libs
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/../../../.libs/libmpi.so
<br>
-ldl -lnsl -lutil -lm -pthread -Wl,-rpath
<br>
-Wl,/home/jed/usr/ompi-1.5-clang/lib
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Abort':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:63:
<br>
undefined reference to `MPI_Abort'
<br>
<p><p><span class="quotelev1">&gt; FWIW, this looks like a problem that is self-contained in VampirTrace, so
</span><br>
<span class="quotelev1">&gt; you can likely get a working build with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --enable-contrib-no-build=vt ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Leaving out the debugging flags gets me further (no compilation error,
</span><br>
<span class="quotelev1">&gt; just this link error):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ../configure --prefix=/home/jed/usr/ompi-1.5-clang CC=clang CXX=clang++
</span><br>
<span class="quotelev2">&gt; &gt; $ make
</span><br>
<span class="quotelev2">&gt; &gt; [...]
</span><br>
<span class="quotelev2">&gt; &gt;   CCLD   libutil.la
</span><br>
<span class="quotelev2">&gt; &gt; ar:
</span><br>
<span class="quotelev1">&gt; /home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/util/.libs/libutil.a: No
</span><br>
<span class="quotelev1">&gt; such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; make[5]: *** [libutil.la] Error 9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's a weird one -- it should be *creating* that library, so I'm not sure
</span><br>
<span class="quotelev1">&gt; why it would complain that the library doesn't exist...?  This could be a
</span><br>
<span class="quotelev1">&gt; red herring, though -- perhaps some oddity in your tree and/or
</span><br>
<span class="quotelev1">&gt; filesystem...?  (I've seen this kind of thing before such that a &quot;make
</span><br>
<span class="quotelev1">&gt; distclean&quot; fixed the issue, I think)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sure enough, using a new build directory, I get the same error as above:
<br>
<p>libtool: link: clang++ -DVT_MPI -O3 -DNDEBUG -finline-functions -pthread -o
<br>
.libs/vtunify-mpi vtunify_mpi-vt_unify_mpi.o vtunify_mpi-vt_unify.o vtunif
<br>
y_mpi-vt_unify_defs.o vtunify_mpi-vt_unify_defs_hdlr.o
<br>
vtunify_mpi-vt_unify_events.o vtunify_mpi-vt_unify_events_hdlr.o
<br>
vtunify_mpi-vt_unify_markers.o
<br>
&nbsp;vtunify_mpi-vt_unify_markers_hdlr.o vtunify_mpi-vt_unify_stats.o
<br>
vtunify_mpi-vt_unify_stats_hdlr.o vtunify_mpi-vt_unify_tkfac.o
<br>
&nbsp;../../../util/.libs/
<br>
libutil.a ../../../extlib/otf/otflib/.libs/libotf.so -lz
<br>
-L/home/jed/src/openmpi-1.5/bclang-nodbg/ompi/contrib/vt/vt/../../../.libs
<br>
/home/jed/src/open
<br>
mpi-1.5/bclang-nodbg/ompi/contrib/vt/vt/../../../.libs/libmpi.so -ldl -lnsl
<br>
-lutil -lm -pthread -Wl,-rpath -Wl,/home/jed/usr/ompi-1.5-clang-nodbg/lib
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Abort':
<br>
../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:(.text+0xa):
<br>
undefined reference to `MPI_Abort'
<br>
<p>Grab config.log for this case here:
<br>
<p><a href="http://59A2.org/files/openmpi-1.5-clang-config.log">http://59A2.org/files/openmpi-1.5-clang-config.log</a>
<br>
<p><p><span class="quotelev2">&gt; &gt; I also get this last failure with gcc-4.5.1, but only with the debug
</span><br>
<span class="quotelev1">&gt; flags:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ../configure --enable-debug --enable-mem-debug
</span><br>
<span class="quotelev1">&gt; --prefix=/home/jed/usr/ompi-1.5-gcc CC=gcc CXX=g++
</span><br>
<span class="quotelev2">&gt; &gt; $ make
</span><br>
<span class="quotelev2">&gt; &gt; [...]
</span><br>
<span class="quotelev2">&gt; &gt; Making all in util
</span><br>
<span class="quotelev2">&gt; &gt;   CC     libutil_la-installdirs.lo
</span><br>
<span class="quotelev2">&gt; &gt;   CCLD   libutil.la
</span><br>
<span class="quotelev2">&gt; &gt; ar:
</span><br>
<span class="quotelev1">&gt; /home/jed/src/openmpi-1.5/bgcc/ompi/contrib/vt/vt/util/.libs/libutil.a: No
</span><br>
<span class="quotelev1">&gt; such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same error.  Weird.  Can you &quot;make V=1&quot; here, too?
</span><br>
<p><p>This one completes with a clean build directory, reconfiguring from a
<br>
non-debug build must have caused this issue the first time around.
<br>
<p>Jed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14468/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14469.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14467.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14467.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14469.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14469.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
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
