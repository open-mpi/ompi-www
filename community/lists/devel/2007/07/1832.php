<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 09:51:19 2007" -->
<!-- isoreceived="20070710135119" -->
<!-- sent="Tue, 10 Jul 2007 07:51:01 -0600" -->
<!-- isosent="20070710135101" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-environment builds" -->
<!-- id="9AA65B55-6A04-41AD-8541-07E1713569D7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="469384FA.8010906_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 09:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1833.php">Ralph H Castain: "[OMPI devel] Bproc support"</a>
<li><strong>Previous message:</strong> <a href="1831.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>In reply to:</strong> <a href="1829.php">Tim Prins: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1837.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1837.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 10, 2007, at 7:09 AM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 2. The &quot;--enable-mca-no-build&quot; option takes a comma-delimited list of
</span><br>
<span class="quotelev2">&gt;&gt; components that will then not be built.  Granted, this option isn't
</span><br>
<span class="quotelev2">&gt;&gt; exactly intuitive, but it was the best that we could think of at the
</span><br>
<span class="quotelev2">&gt;&gt; time to present a general solution for inhibiting the build of a
</span><br>
<span class="quotelev2">&gt;&gt; selected list of components.  Hence, &quot;--enable-mca-no-build=pls-
</span><br>
<span class="quotelev2">&gt;&gt; slurm,ras-slurm&quot; would inhibit building the SLURM RAS and PLS
</span><br>
<span class="quotelev2">&gt;&gt; components (note that the SLURM components currently do not require
</span><br>
<span class="quotelev2">&gt;&gt; any additional libraries, so a) there is no corresponding --with 
</span><br>
<span class="quotelev2">&gt;&gt; [out]-
</span><br>
<span class="quotelev2">&gt;&gt; slurm option, and b) they are usually always built).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, there are --with-slurm/--without-slurm options. We  
</span><br>
<span class="quotelev1">&gt; default to
</span><br>
<span class="quotelev1">&gt; building slurm support automatically on linux and aix, but not on  
</span><br>
<span class="quotelev1">&gt; other
</span><br>
<span class="quotelev1">&gt; platforms.
</span><br>
<p>On a mostly unrelated note...  We should probably also now build the  
<br>
SLURM component for OS X, since SLURM is now available for OS X as  
<br>
well.  And probably should also check for SLURM's srun and build if  
<br>
we find it even if we aren't on Linux, AIX, or OS X.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1833.php">Ralph H Castain: "[OMPI devel] Bproc support"</a>
<li><strong>Previous message:</strong> <a href="1831.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>In reply to:</strong> <a href="1829.php">Tim Prins: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1837.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1837.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
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
