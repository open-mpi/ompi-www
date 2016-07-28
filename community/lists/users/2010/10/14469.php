<?
$subject_val = "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 17:31:33 2010" -->
<!-- isoreceived="20101014213133" -->
<!-- sent="Thu, 14 Oct 2010 17:31:28 -0400" -->
<!-- isosent="20101014213128" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)" -->
<!-- id="0AFAB789-BCA3-4290-A28D-D0870B93C5E7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimWtC62sD3mJqhkNqw_v0v-nezcMV9fotf=1j_n_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-10-14 17:31:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14470.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14468.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14468.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14470.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14470.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 14, 2010, at 5:09 PM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; libtool: link: clang++ -DVT_MPI -g -finline-functions -pthread -o .libs/vtunify-mpi vtunify_mpi-vt_unify_mpi.o vtunify_mpi-vt_unify.o vtunify_mpi-vt_unify_defs.o vtunify_mpi-vt_unify_defs_hdlr.o vtunify_mpi-vt_unify_events.o vtunify_mpi-vt_unify_events_hdlr.o vtunify_mpi-vt_unify_markers.o vtunify_mpi-vt_unify_markers_hdlr.o vtunify_mpi-vt_unify_stats.o vtunify_mpi-vt_unify_stats_hdlr.o vtunify_mpi-vt_unify_tkfac.o  ../../../util/.libs/libutil.a ../../../extlib/otf/otflib/.libs/libotf.so -lz -L/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/../../../.libs /home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/../../../.libs/libmpi.so -ldl -lnsl -lutil -lm -pthread -Wl,-rpath -Wl,/home/jed/usr/ompi-1.5-clang/lib
</span><br>
<span class="quotelev1">&gt; vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Abort':
</span><br>
<span class="quotelev1">&gt; /home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:63: undefined reference to `MPI_Abort'
</span><br>
<p>Strange, because I see /home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/../../../.libs/libmpi.so explicitly listed in the link line, which should contain MPI_Abort.  Can you nm on that file and ensure that it is actually listed there?
<br>
<p>VT guys -- any ideas here?
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
<li><strong>Next message:</strong> <a href="14470.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14468.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14468.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14470.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14470.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
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
