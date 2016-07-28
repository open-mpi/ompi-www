<?
$subject_val = "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 16:36:52 2010" -->
<!-- isoreceived="20101014203652" -->
<!-- sent="Thu, 14 Oct 2010 16:36:47 -0400" -->
<!-- isosent="20101014203647" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)" -->
<!-- id="B3ED8CA3-AC27-421B-BF78-6D0712B740C3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikoTSWwbjMx00s7LkRrJoTGW1Nidy_6O4_7GPxo_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 16:36:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14468.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14466.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>In reply to:</strong> <a href="14438.php">Jed Brown: "[OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14468.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14468.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 11, 2010, at 4:50 PM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; Note that this is an out-of-source build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ../configure --enable-debug --enable-mem-debug --prefix=/home/jed/usr/ompi-1.5-clang CC=clang CXX=clang++
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;   CXXLD  vtunify-mpi
</span><br>
<span class="quotelev1">&gt; vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Abort':
</span><br>
<span class="quotelev1">&gt; /home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:63: undefined reference to `MPI_Abort'
</span><br>
<p>Well this is disappointing.  :-\
<br>
<p>Can you &quot;make V=1&quot; so that we can see the command line here that is failing?
<br>
<p>FWIW, this looks like a problem that is self-contained in VampirTrace, so you can likely get a working build with:
<br>
<p>./configure --enable-contrib-no-build=vt ...
<br>
<p><span class="quotelev1">&gt; Leaving out the debugging flags gets me further (no compilation error, just this link error):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ../configure --prefix=/home/jed/usr/ompi-1.5-clang CC=clang CXX=clang++
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;   CCLD   libutil.la
</span><br>
<span class="quotelev1">&gt; ar: /home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/util/.libs/libutil.a: No such file or directory
</span><br>
<span class="quotelev1">&gt; make[5]: *** [libutil.la] Error 9
</span><br>
<p>That's a weird one -- it should be *creating* that library, so I'm not sure why it would complain that the library doesn't exist...?  This could be a red herring, though -- perhaps some oddity in your tree and/or filesystem...?  (I've seen this kind of thing before such that a &quot;make distclean&quot; fixed the issue, I think)
<br>
<p><span class="quotelev1">&gt; I also get this last failure with gcc-4.5.1, but only with the debug flags:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ../configure --enable-debug --enable-mem-debug --prefix=/home/jed/usr/ompi-1.5-gcc CC=gcc CXX=g++
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; Making all in util
</span><br>
<span class="quotelev1">&gt;   CC     libutil_la-installdirs.lo
</span><br>
<span class="quotelev1">&gt;   CCLD   libutil.la
</span><br>
<span class="quotelev1">&gt; ar: /home/jed/src/openmpi-1.5/bgcc/ompi/contrib/vt/vt/util/.libs/libutil.a: No such file or directory
</span><br>
<p>Same error.  Weird.  Can you &quot;make V=1&quot; here, too?
<br>
<p><span class="quotelev1">&gt; There are also lots of these warnings (almost every compilation unit).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../opal/include/opal/sys/atomic_impl.h:124:7: warning: indirection of non-volatile null pointer will be deleted, not trap
</span><br>
<span class="quotelev1">&gt;      *(int*)(0) = 0;
</span><br>
<span class="quotelev1">&gt;      ^~~~~~~~~~
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../opal/include/opal/sys/atomic_impl.h:124:7: note: consider using __builtin_trap() or qualifying pointer with 'volatile'
</span><br>
<p>Well that is annoying, but not a deal breaker -- should be easy to fix.  This portion of code is deliberately causing a segv (obviously).  We should just call abort() here instead of trying to cause a segv.
<br>
<p><span class="quotelev1">&gt; Trunk became unbuildable for me a couple months ago, but it was written off (could find the bug number) as being the fault of my autotools being too new, thus I haven't built from mercurial recently.  Otherwise I might have been able to point these out prior to the release.
</span><br>
<p>Ralph is just going through the pain right now of upgrading to Autoconf 2.68 / Libtool 2.4; hopefully we'll have fixes on the trunk RSN for the newest-of-the-new autotools.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="14468.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14466.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>In reply to:</strong> <a href="14438.php">Jed Brown: "[OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14468.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14468.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
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
