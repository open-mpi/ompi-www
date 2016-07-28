<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  1 09:24:35 2005" -->
<!-- isoreceived="20050901142435" -->
<!-- sent="Thu, 1 Sep 2005 10:24:13 -0400" -->
<!-- isosent="20050901142413" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  gm configure status" -->
<!-- id="26e80ac5f1149a65dac347fb18b460ae_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43170986.7040903_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-01 09:24:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0293.php">Tim S. Woodall: "Re:  gm configure status"</a>
<li><strong>Previous message:</strong> <a href="0291.php">Tim S. Woodall: "gm configure status"</a>
<li><strong>In reply to:</strong> <a href="0291.php">Tim S. Woodall: "gm configure status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0293.php">Tim S. Woodall: "Re:  gm configure status"</a>
<li><strong>Reply:</strong> <a href="0293.php">Tim S. Woodall: "Re:  gm configure status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Brian sent the workaround the other day (I don't know if he got 
<br>
to commit a proper fix or not -- he left for travel shortly after 
<br>
that), but I also thought that George fixed the issue in his 
<br>
configure.m4...?  (could be wrong; I don't build GM regularly)
<br>
<p><p>-----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: 	  brbarret_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: 	[O-MPI devel] WRAPPER_EXTRA_LIBS build issues
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date: 	August 30, 2005 1:06:14 PM EDT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: 	  devel_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reply-To: 	  devel_at_[hidden]
<br>
<p>Hi all -
<br>
<p>for those having issues with WRAPPER_EXTRA_LIBS/LDFLAGS constants
<br>
showing up in the output of mpicc, a quick workaround is to disable
<br>
the GM PTL during configure.  This can be accomplished by adding the
<br>
configure flag:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--enable-mca-no-build=ptl-gm
<br>
<p>to your configure line, then rebuilding.  I hope to have a proper
<br>
solution later today.
<br>
<p>Brian
<br>
-----
<br>
<p><p><p>On Sep 1, 2005, at 10:00 AM, Tim S. Woodall wrote:
<br>
<p><span class="quotelev1">&gt; What is the status of the gm configure issue:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc -O -DMPI ./src/netpipe.c ./src/mpi.c -o NPmpi -I./src
</span><br>
<span class="quotelev1">&gt; gcc: WRAPPER_ALWAYS_EXTRA_LIBS: No such file or directory
</span><br>
<span class="quotelev1">&gt; gcc: WRAPPER_ALWAYS_EXTRA_LIBS: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a simple work-around, or should I just compile/link
</span><br>
<span class="quotelev1">&gt; the app w/out mpicc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
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
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0293.php">Tim S. Woodall: "Re:  gm configure status"</a>
<li><strong>Previous message:</strong> <a href="0291.php">Tim S. Woodall: "gm configure status"</a>
<li><strong>In reply to:</strong> <a href="0291.php">Tim S. Woodall: "gm configure status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0293.php">Tim S. Woodall: "Re:  gm configure status"</a>
<li><strong>Reply:</strong> <a href="0293.php">Tim S. Woodall: "Re:  gm configure status"</a>
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
