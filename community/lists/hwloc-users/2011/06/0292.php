<?
$subject_val = "Re: [hwloc-users] Patch to disable GCC __builtin_ operations";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 17:14:19 2011" -->
<!-- isoreceived="20110608211419" -->
<!-- sent="Wed, 8 Jun 2011 17:14:14 -0400" -->
<!-- isosent="20110608211414" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Patch to disable GCC __builtin_ operations" -->
<!-- id="BANLkTikPpy5SeuiWPPmVq3+xTKYYCC_GcA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FE47126B-572D-4688-9B46-D93C32B233E0_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-08 17:14:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0293.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="0291.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>In reply to:</strong> <a href="0291.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0293.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Reply:</strong> <a href="0293.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In short, I haven't yet. I figured out the problem was in hwloc, and
<br>
started with the hwloc branch by itself.
<br>
<p>In Open MPI, we should be able to pass the --disable-gcc-builtin from
<br>
the main configure, right (since we pull in config/hwloc_internal.m4)?
<br>
So we would pass it similar to how we had to pass --disable-xml to
<br>
turn off that feature in the builtin hwloc (before it was turned off
<br>
by default).
<br>
<p>-- Josh
<br>
<p>On Wed, Jun 8, 2011 at 4:50 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Josh --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How did you get this disabled from within OMPI? &#160;We don't invoke hwloc's configure via sub-shell; we directly invoke its m4, so we don't have an opportunity to pass --disable-gcc-builtin. &#160;Unless you passed that to the top-level OMPI configure script...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 8, 2011, at 4:28 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (This should have gone to the devel list)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The attached patch adds a configure option (--disable-gcc-builtin) to
</span><br>
<span class="quotelev2">&gt;&gt; disable the use of GCC __builtin_ operations, even if the GCC compiler
</span><br>
<span class="quotelev2">&gt;&gt; supports them. The patch is a diff from the r3509 revision of the
</span><br>
<span class="quotelev2">&gt;&gt; hwloc trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hit a problem when installing hwloc statically on a machine with a
</span><br>
<span class="quotelev2">&gt;&gt; slightly different gcc support libraries and OSs on the head/compile
</span><br>
<span class="quotelev2">&gt;&gt; node versus the compute nodes. The builtin functions would cause hwloc
</span><br>
<span class="quotelev2">&gt;&gt; to segfault when run on the compute nodes. By disabling the builtin
</span><br>
<span class="quotelev2">&gt;&gt; operations, and using the more portable techniques seemed to do the
</span><br>
<span class="quotelev2">&gt;&gt; trick.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This problem first became apparent when using hwloc as part of Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI. In Open MPI the mpirun process runs on the headnode, so the hwloc
</span><br>
<span class="quotelev2">&gt;&gt; install would work in the mpirun process but cause the compute
</span><br>
<span class="quotelev2">&gt;&gt; processes to segv.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you review the patch, and apply it to the trunk? Once the patch is
</span><br>
<span class="quotelev2">&gt;&gt; in the trunk, then I'll work on the Open MPI folks to update their
</span><br>
<span class="quotelev2">&gt;&gt; revision.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;hwloc-diff-r3509.diff&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0293.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="0291.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>In reply to:</strong> <a href="0291.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0293.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Reply:</strong> <a href="0293.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
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
