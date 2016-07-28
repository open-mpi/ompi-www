<?
$subject_val = "Re: [OMPI devel] NEWS file for 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 17:14:34 2009" -->
<!-- isoreceived="20091028211434" -->
<!-- sent="Wed, 28 Oct 2009 15:14:28 -0600" -->
<!-- isosent="20091028211428" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] NEWS file for 1.3.4" -->
<!-- id="71d2d8cc0910281414s74032bc5uf34e916e1d115bbb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B1F8A86B-251D-4A78-889D-D1FA0DE37968_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] NEWS file for 1.3.4<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 17:14:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7051.php">David Gunter: "Re: [OMPI devel] NEWS file for 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="7049.php">Jeff Squyres: "Re: [OMPI devel] NEWS file for 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="7046.php">Jeff Squyres: "[OMPI devel] NEWS file for 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7051.php">David Gunter: "Re: [OMPI devel] NEWS file for 1.3.4"</a>
<li><strong>Reply:</strong> <a href="7051.php">David Gunter: "Re: [OMPI devel] NEWS file for 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks fine. There is one point we may want to clarify/highlight in some
<br>
manner. When we reach 1.3.4, the SLURM support changes so things won't work
<br>
for LANL's interactive login method (a rather unique one) unless they
<br>
upgrade to slurm xxx (forget number - can look it up when I get back).
<br>
<p>I'm not sure how to handle that point, though - outside of the tri-labs, who
<br>
already know about the restriction, nobody else is likely to notice or care.
<br>
So perhaps nothing need be said? I fear the language may get complex, and
<br>
wind up confusing people who shouldn't care.
<br>
<p>Thoughts?
<br>
Ralph
<br>
<p><p>On Wed, Oct 28, 2009 at 2:02 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks -- here's what I put in the NEWS section for 1.3.4rc2.  Please send
</span><br>
<span class="quotelev1">&gt; me any corrections / additions / etc. for 1.3.4 final ASAP:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Fix some issues in OMPI's SRPM with regard to shell_scripts_basename
</span><br>
<span class="quotelev1">&gt;  and its use with mpi-selector.  Thanks to Bill Johnstone for
</span><br>
<span class="quotelev1">&gt;  pointing out the problem.
</span><br>
<span class="quotelev1">&gt; - Added many new MPI job process affinity options to mpirun.  See the
</span><br>
<span class="quotelev1">&gt;  newly-updated mpirun(1) man page for details.
</span><br>
<span class="quotelev1">&gt; - Several updates to mpirun's XML output.
</span><br>
<span class="quotelev1">&gt; - Update to fix a few Valgrind warnings with regards to the ptmalloc2
</span><br>
<span class="quotelev1">&gt;  allocator and Open MPI's use of PLPA.
</span><br>
<span class="quotelev1">&gt; - Many updates and fixes to the (non-default) &quot;sm&quot; collective
</span><br>
<span class="quotelev1">&gt;  component (i.e., native shared memory MPI collective operations).
</span><br>
<span class="quotelev1">&gt; - Updates and fixes to some MPI_COMM_SPAWN_MULTIPLE corner cases.
</span><br>
<span class="quotelev1">&gt; - Fix some internal copying functions in Open MPI's use of PLPA.
</span><br>
<span class="quotelev1">&gt; - Correct some SLURM nodelist parsing logic that may have interfered
</span><br>
<span class="quotelev1">&gt;  with large jobs.  Additionally, per advice from the SLURM team,
</span><br>
<span class="quotelev1">&gt;  change the environment variable that we use for obtaining the job's
</span><br>
<span class="quotelev1">&gt;  allocation.
</span><br>
<span class="quotelev1">&gt; - Revert to an older, safer (but slower) communicator ID allocation
</span><br>
<span class="quotelev1">&gt;  algorithm.
</span><br>
<span class="quotelev1">&gt; - Fixed minimum distance finding for OpenFabrics devices in the openib
</span><br>
<span class="quotelev1">&gt;  BTL.
</span><br>
<span class="quotelev1">&gt; - Relax the parameter checking MPI_CART_CREATE a bit.
</span><br>
<span class="quotelev1">&gt; - Fix MPI_COMM_SPAWN[_MULTIPLE] to only error-check the info arguments
</span><br>
<span class="quotelev1">&gt;  on the root process.  Thanks to Federico Golfre Andreasi for
</span><br>
<span class="quotelev1">&gt;  reporting the problem.
</span><br>
<span class="quotelev1">&gt; - Fixed some BLCR configure issues.
</span><br>
<span class="quotelev1">&gt; - Fixed a potential deadlock when the openib BTL was used with
</span><br>
<span class="quotelev1">&gt;  MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev1">&gt; - Fixed dynamic rules selection for the &quot;tuned&quot; coll component.
</span><br>
<span class="quotelev1">&gt; - Added a launch progress meter to mpirun (useful for large jobs; set
</span><br>
<span class="quotelev1">&gt;  the orte_report_launch_progress MCA parameter to 1 to see it).
</span><br>
<span class="quotelev1">&gt; - Reduced the number of file descriptors consumed by each MPI process.
</span><br>
<span class="quotelev1">&gt; - Add new device IDs for Chelsio T3 RNICs to the openib BTL config file.
</span><br>
<span class="quotelev1">&gt; - Fix some CRS self component issues.
</span><br>
<span class="quotelev1">&gt; - Added some MCA parameters to the PSM MTL to tune its run-time
</span><br>
<span class="quotelev1">&gt;  behavior.
</span><br>
<span class="quotelev1">&gt; - Fix some VT issues with MPI_BOTTOM/MPI_IN_PLACE.
</span><br>
<span class="quotelev1">&gt; - Man page updates from the Debain Open MPI package maintainers.
</span><br>
<span class="quotelev1">&gt; - Add cycle counter support for the Alpha and Sparc platforms.
</span><br>
<span class="quotelev1">&gt; - Pass visibility flags to libltdl's configure script, resulting in
</span><br>
<span class="quotelev1">&gt;  those symbols being hidden.  This appears to mainly solve the
</span><br>
<span class="quotelev1">&gt;  problem of applications attempting to use different versions of
</span><br>
<span class="quotelev1">&gt;  libltdl from that used to build Open MPI.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7050/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7051.php">David Gunter: "Re: [OMPI devel] NEWS file for 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="7049.php">Jeff Squyres: "Re: [OMPI devel] NEWS file for 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="7046.php">Jeff Squyres: "[OMPI devel] NEWS file for 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7051.php">David Gunter: "Re: [OMPI devel] NEWS file for 1.3.4"</a>
<li><strong>Reply:</strong> <a href="7051.php">David Gunter: "Re: [OMPI devel] NEWS file for 1.3.4"</a>
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
