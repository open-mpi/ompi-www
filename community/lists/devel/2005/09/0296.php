<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  1 22:08:21 2005" -->
<!-- isoreceived="20050902030821" -->
<!-- sent="Thu, 1 Sep 2005 22:08:11 -0500" -->
<!-- isosent="20050902030811" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  gm configure status" -->
<!-- id="E0844B2E-A7A5-4A12-948D-8B737F1413E4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43171523.20101_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-09-01 22:08:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0297.php">Peter Kjellstr&#246;m: "Re:  configure hangs in libtool.."</a>
<li><strong>Previous message:</strong> <a href="0295.php">Ralph H. Castain: "Re:  RHC development plans"</a>
<li><strong>In reply to:</strong> <a href="0293.php">Tim S. Woodall: "Re:  gm configure status"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is fixed in SVN.  Sorry for the delay in getting it fixed.
<br>
<p>Brian
<br>
<p>On Sep 1, 2005, at 9:50 AM, Tim S. Woodall wrote:
<br>
<p><span class="quotelev1">&gt; Well ... I actually needed both. This is still an issue w/ static  
</span><br>
<span class="quotelev1">&gt; builds.
</span><br>
<span class="quotelev1">&gt; I'll try a shared build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think Brian sent the workaround the other day (I don't know if  
</span><br>
<span class="quotelev2">&gt;&gt; he got
</span><br>
<span class="quotelev2">&gt;&gt; to commit a proper fix or not -- he left for travel shortly after
</span><br>
<span class="quotelev2">&gt;&gt; that), but I also thought that George fixed the issue in his
</span><br>
<span class="quotelev2">&gt;&gt; configure.m4...?  (could be wrong; I don't build GM regularly)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;     From:       brbarret_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     Subject:     [O-MPI devel] WRAPPER_EXTRA_LIBS build issues
</span><br>
<span class="quotelev2">&gt;&gt;     Date:     August 30, 2005 1:06:14 PM EDT
</span><br>
<span class="quotelev2">&gt;&gt;     To:       devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     Reply-To:       devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for those having issues with WRAPPER_EXTRA_LIBS/LDFLAGS constants
</span><br>
<span class="quotelev2">&gt;&gt; showing up in the output of mpicc, a quick workaround is to disable
</span><br>
<span class="quotelev2">&gt;&gt; the GM PTL during configure.  This can be accomplished by adding the
</span><br>
<span class="quotelev2">&gt;&gt; configure flag:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-mca-no-build=ptl-gm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to your configure line, then rebuilding.  I hope to have a proper
</span><br>
<span class="quotelev2">&gt;&gt; solution later today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 1, 2005, at 10:00 AM, Tim S. Woodall wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the status of the gm configure issue:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc -O -DMPI ./src/netpipe.c ./src/mpi.c -o NPmpi -I./src
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc: WRAPPER_ALWAYS_EXTRA_LIBS: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc: WRAPPER_ALWAYS_EXTRA_LIBS: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a simple work-around, or should I just compile/link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the app w/out mpicc?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0297.php">Peter Kjellstr&#246;m: "Re:  configure hangs in libtool.."</a>
<li><strong>Previous message:</strong> <a href="0295.php">Ralph H. Castain: "Re:  RHC development plans"</a>
<li><strong>In reply to:</strong> <a href="0293.php">Tim S. Woodall: "Re:  gm configure status"</a>
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
