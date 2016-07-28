<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  1 09:50:15 2005" -->
<!-- isoreceived="20050901145015" -->
<!-- sent="Thu, 01 Sep 2005 08:50:11 -0600" -->
<!-- isosent="20050901145011" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  gm configure status" -->
<!-- id="43171523.20101_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="26e80ac5f1149a65dac347fb18b460ae_at_open-mpi.org" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-01 09:50:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0294.php">Jeff Squyres: "IU odin cluster"</a>
<li><strong>Previous message:</strong> <a href="0292.php">Jeff Squyres: "Re:  gm configure status"</a>
<li><strong>In reply to:</strong> <a href="0292.php">Jeff Squyres: "Re:  gm configure status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0296.php">Brian Barrett: "Re:  gm configure status"</a>
<li><strong>Reply:</strong> <a href="0296.php">Brian Barrett: "Re:  gm configure status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well ... I actually needed both. This is still an issue w/ static builds.
<br>
I'll try a shared build.
<br>
<p>Tim
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I think Brian sent the workaround the other day (I don't know if he got 
</span><br>
<span class="quotelev1">&gt; to commit a proper fix or not -- he left for travel shortly after 
</span><br>
<span class="quotelev1">&gt; that), but I also thought that George fixed the issue in his 
</span><br>
<span class="quotelev1">&gt; configure.m4...?  (could be wrong; I don't build GM regularly)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 	From: 	  brbarret_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 	Subject: 	[O-MPI devel] WRAPPER_EXTRA_LIBS build issues
</span><br>
<span class="quotelev1">&gt; 	Date: 	August 30, 2005 1:06:14 PM EDT
</span><br>
<span class="quotelev1">&gt; 	To: 	  devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 	Reply-To: 	  devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for those having issues with WRAPPER_EXTRA_LIBS/LDFLAGS constants
</span><br>
<span class="quotelev1">&gt; showing up in the output of mpicc, a quick workaround is to disable
</span><br>
<span class="quotelev1">&gt; the GM PTL during configure.  This can be accomplished by adding the
</span><br>
<span class="quotelev1">&gt; configure flag:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     --enable-mca-no-build=ptl-gm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to your configure line, then rebuilding.  I hope to have a proper
</span><br>
<span class="quotelev1">&gt; solution later today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 1, 2005, at 10:00 AM, Tim S. Woodall wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;What is the status of the gm configure issue:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;mpicc -O -DMPI ./src/netpipe.c ./src/mpi.c -o NPmpi -I./src
</span><br>
<span class="quotelev2">&gt;&gt;gcc: WRAPPER_ALWAYS_EXTRA_LIBS: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;gcc: WRAPPER_ALWAYS_EXTRA_LIBS: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Is there a simple work-around, or should I just compile/link
</span><br>
<span class="quotelev2">&gt;&gt;the app w/out mpicc?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0294.php">Jeff Squyres: "IU odin cluster"</a>
<li><strong>Previous message:</strong> <a href="0292.php">Jeff Squyres: "Re:  gm configure status"</a>
<li><strong>In reply to:</strong> <a href="0292.php">Jeff Squyres: "Re:  gm configure status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0296.php">Brian Barrett: "Re:  gm configure status"</a>
<li><strong>Reply:</strong> <a href="0296.php">Brian Barrett: "Re:  gm configure status"</a>
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
