<?
$subject_val = "Re: [hwloc-users] Patch to disable GCC __builtin_ operations";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 17:21:53 2011" -->
<!-- isoreceived="20110608212153" -->
<!-- sent="Wed, 8 Jun 2011 17:21:47 -0400" -->
<!-- isosent="20110608212147" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Patch to disable GCC __builtin_ operations" -->
<!-- id="B38D19C3-1F9B-437D-AA18-803B7B99F260_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTikPpy5SeuiWPPmVq3+xTKYYCC_GcA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Patch to disable GCC __builtin_ operations<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-08 17:21:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0294.php">Dave Goodell: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="0292.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>In reply to:</strong> <a href="0292.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0294.php">Dave Goodell: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Reply:</strong> <a href="0294.php">Dave Goodell: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a reason we wouldn't disable it in OMPI's hwloc by default?
<br>
<p>On Jun 8, 2011, at 5:14 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; In short, I haven't yet. I figured out the problem was in hwloc, and
</span><br>
<span class="quotelev1">&gt; started with the hwloc branch by itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In Open MPI, we should be able to pass the --disable-gcc-builtin from
</span><br>
<span class="quotelev1">&gt; the main configure, right (since we pull in config/hwloc_internal.m4)?
</span><br>
<span class="quotelev1">&gt; So we would pass it similar to how we had to pass --disable-xml to
</span><br>
<span class="quotelev1">&gt; turn off that feature in the builtin hwloc (before it was turned off
</span><br>
<span class="quotelev1">&gt; by default).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 8, 2011 at 4:50 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Josh --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How did you get this disabled from within OMPI?  We don't invoke hwloc's configure via sub-shell; we directly invoke its m4, so we don't have an opportunity to pass --disable-gcc-builtin.  Unless you passed that to the top-level OMPI configure script...?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 8, 2011, at 4:28 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (This should have gone to the devel list)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The attached patch adds a configure option (--disable-gcc-builtin) to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disable the use of GCC __builtin_ operations, even if the GCC compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supports them. The patch is a diff from the r3509 revision of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hit a problem when installing hwloc statically on a machine with a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slightly different gcc support libraries and OSs on the head/compile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node versus the compute nodes. The builtin functions would cause hwloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to segfault when run on the compute nodes. By disabling the builtin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operations, and using the more portable techniques seemed to do the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trick.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This problem first became apparent when using hwloc as part of Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI. In Open MPI the mpirun process runs on the headnode, so the hwloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; install would work in the mpirun process but cause the compute
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes to segv.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you review the patch, and apply it to the trunk? Once the patch is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the trunk, then I'll work on the Open MPI folks to update their
</span><br>
<span class="quotelev3">&gt;&gt;&gt; revision.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;hwloc-diff-r3509.diff&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="0294.php">Dave Goodell: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="0292.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>In reply to:</strong> <a href="0292.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0294.php">Dave Goodell: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Reply:</strong> <a href="0294.php">Dave Goodell: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
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
