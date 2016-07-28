<?
$subject_val = "Re: [OMPI devel] thread-tests hang";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 15:39:33 2014" -->
<!-- isoreceived="20141106203933" -->
<!-- sent="Thu, 6 Nov 2014 15:39:31 -0500" -->
<!-- isosent="20141106203931" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread-tests hang" -->
<!-- id="CAG4F6z9y0nvmkwJbgmGubEwnWrQsyMRctTMSMjGA7mDyNoGAoA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CE28047E-3D74-4F83-990E-A9551D4D409D_at_cisco.com" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 15:39:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16249.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Previous message:</strong> <a href="16247.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Pull requests on the trunk"</a>
<li><strong>In reply to:</strong> <a href="16243.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16249.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16249.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for taking the time to investigate this, Jeff. SC is a hectic and
<br>
stressful time for everyone on this list with many deadlines looming. This
<br>
bug isn't a priority for us, however, it seems to me that your original
<br>
revert, the one that simply wants to disable threading by default (and for
<br>
good reason), is a blocker for the 1.8.4 release tomorrow. Therefore, I'm
<br>
going to once again suggest that unless Nathan finds a solution by COB
<br>
today, we live with the error that was made back in 1.8.1 and punt on this
<br>
until 1.9. The current state of the 1.8.4 prerelease is not acceptable with
<br>
this commit.
<br>
<p>Thanks to Alina for bringing this issue to light.
<br>
<p>Josh
<br>
<p><p>On Thursday, November 6, 2014, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; This thread digressed significantly from the original bug report; I did
</span><br>
<span class="quotelev1">&gt; not realize that the discussion was revolving around the fact that
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE no longer works *at all*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So here's where we are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. MPI_THREAD_MULTIPLE doesn't work, even if you
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. It seems that 2c8087d10b10e0efea176db8907de2720a55454e and
</span><br>
<span class="quotelev1">&gt; 09b867374e9618007b81bfaf674ec6df04548bed need to be reverted (in that order)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. That restores MPI_THREAD_MULTIPLE functionality (if you
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. However, this brings back the performance problem, too
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've looked at this all day so far, and am unfortunately just out of time
</span><br>
<span class="quotelev1">&gt; -- I have some crushing SC deadlines that I *must* meet.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nathan will be picking up where I left off later today to see if there's a
</span><br>
<span class="quotelev1">&gt; simple way to fix just the performance issue for the non-THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt; cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 4, 2014, at 12:15 PM, Alina Sklarevich &lt;alinas_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We observe a hang when running the multi-threading support test
</span><br>
<span class="quotelev1">&gt; &quot;latency.c&quot; (attached to this report), which uses MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The hang happens immediately at the begining of the test and is
</span><br>
<span class="quotelev1">&gt; reproduced in the v1.8 release branch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The command line to reproduce the behavior is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun --map-by node --bind-to core -display-map -np 2 -mca pml ob1
</span><br>
<span class="quotelev1">&gt; -mca btl tcp,self ./thread-tests-1.1/latency
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
<span class="quotelev2">&gt; &gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden] &lt;javascript:;&gt;&gt;
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
<span class="quotelev2">&gt; &gt; Is this expected behavior? In other words, should we not expect any
</span><br>
<span class="quotelev1">&gt; stable release in the 1.8.x series to be able to use MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt; with even the TCP and SM BTLs?
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
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16175.php">http://www.open-mpi.org/community/lists/devel/2014/11/16175.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16243.php">http://www.open-mpi.org/community/lists/devel/2014/11/16243.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16248/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16249.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Previous message:</strong> <a href="16247.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Pull requests on the trunk"</a>
<li><strong>In reply to:</strong> <a href="16243.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16249.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16249.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
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
