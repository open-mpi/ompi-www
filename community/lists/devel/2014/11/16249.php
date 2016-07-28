<?
$subject_val = "Re: [OMPI devel] thread-tests hang";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 15:48:22 2014" -->
<!-- isoreceived="20141106204822" -->
<!-- sent="Thu, 6 Nov 2014 20:48:20 +0000" -->
<!-- isosent="20141106204820" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread-tests hang" -->
<!-- id="9E9E7E90-4252-4157-AA7F-177C67FB1448_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG4F6z9y0nvmkwJbgmGubEwnWrQsyMRctTMSMjGA7mDyNoGAoA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] thread-tests hang<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 15:48:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16250.php">Joshua Ladd: "[OMPI devel]  osu_mbw_mr error"</a>
<li><strong>Previous message:</strong> <a href="16248.php">Joshua Ladd: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16248.php">Joshua Ladd: "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16255.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16255.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 6, 2014, at 3:39 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for taking the time to investigate this, Jeff. SC is a hectic and stressful time for everyone on this list with many deadlines looming. This bug isn't a priority for us, however, it seems to me that your original revert, the one that simply wants to disable threading by default (and for good reason), is a blocker for the 1.8.4 release tomorrow.
</span><br>
<p>I would tend to agree.
<br>
<p><span class="quotelev1">&gt; Therefore, I'm going to once again suggest that unless Nathan finds a solution by COB today, we live with the error that was made back in 1.8.1 and punt on this until 1.9.
</span><br>
<p>I would still disagree.  The performance bug must be fixed.
<br>
<p>The release needs to be delayed, IMHO.
<br>
<p><span class="quotelev1">&gt; The current state of the 1.8.4 prerelease is not acceptable with this commit. 
</span><br>
<p>Yes, I got it.
<br>
<p><span class="quotelev1">&gt; Thanks to Alina for bringing this issue to light.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday, November 6, 2014, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; This thread digressed significantly from the original bug report; I did not realize that the discussion was revolving around the fact that MPI_THREAD_MULTIPLE no longer works *at all*.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So here's where we are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. MPI_THREAD_MULTIPLE doesn't work, even if you --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. It seems that 2c8087d10b10e0efea176db8907de2720a55454e and 09b867374e9618007b81bfaf674ec6df04548bed need to be reverted (in that order)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. That restores MPI_THREAD_MULTIPLE functionality (if you --enable-mpi-thread-multiple)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. However, this brings back the performance problem, too
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've looked at this all day so far, and am unfortunately just out of time -- I have some crushing SC deadlines that I *must* meet.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan will be picking up where I left off later today to see if there's a simple way to fix just the performance issue for the non-THREAD_MULTIPLE cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 4, 2014, at 12:15 PM, Alina Sklarevich &lt;alinas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We observe a hang when running the multi-threading support test &quot;latency.c&quot; (attached to this report), which uses MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The hang happens immediately at the begining of the test and is reproduced in the v1.8 release branch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The command line to reproduce the behavior is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun --map-by node --bind-to core -display-map -np 2 -mca pml ob1 -mca btl tcp,self ./thread-tests-1.1/latency
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The last commit with which the hang doesn't reproduce is:
</span><br>
<span class="quotelev2">&gt; &gt; commit: e4d4266d9c69e
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And problems begin after commit:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; commit 09b867374e9618007b81bfaf674ec6df04548bed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Fri Oct 31 12:42:50 2014 -0700
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Revert most of open-mpi/ompi_at_6ef938de3fa9ca0fed2c5bcb0736f65b0d8803af
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this expected behavior? In other words, should we not expect any stable release in the 1.8.x series to be able to use MPI_THREAD_MULTIPLE with even the TCP and SM BTLs?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please advise.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Alina.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;latency.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16175.php">http://www.open-mpi.org/community/lists/devel/2014/11/16175.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16243.php">http://www.open-mpi.org/community/lists/devel/2014/11/16243.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16248.php">http://www.open-mpi.org/community/lists/devel/2014/11/16248.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16250.php">Joshua Ladd: "[OMPI devel]  osu_mbw_mr error"</a>
<li><strong>Previous message:</strong> <a href="16248.php">Joshua Ladd: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16248.php">Joshua Ladd: "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16255.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16255.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
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
