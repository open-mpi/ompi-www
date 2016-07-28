<?
$subject_val = "Re: [OMPI devel] thread-tests hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 03:32:04 2014" -->
<!-- isoreceived="20141105083204" -->
<!-- sent="Wed, 5 Nov 2014 03:32:02 -0500" -->
<!-- isosent="20141105083202" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread-tests hang" -->
<!-- id="CAG4F6z8Jf+O4v+W-WM4k3PTSTwAxEw+z1-f0pJ4RiWjumytndA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2B86BEA9-F06F-40D0-B2A1-C1A1D478119F_at_gmail.com" -->
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
<strong>Date:</strong> 2014-11-05 03:32:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16195.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Previous message:</strong> <a href="16193.php">Nathan Hjelm: "[OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>In reply to:</strong> <a href="16177.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16196.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16196.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>What configure voodoo do we need to add to our MTT to get this functional
<br>
again?
<br>
<p>Josh
<br>
<p>On Tue, Nov 4, 2014 at 12:33 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; That would be correct - we restored some configure flags that are required
</span><br>
<span class="quotelev1">&gt; to make multi-thread programs work. Jeff can probably provide more info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 4, 2014, at 9:15 AM, Alina Sklarevich &lt;alinas_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We observe a hang when running the multi-threading support test
</span><br>
<span class="quotelev1">&gt; &quot;latency.c&quot; (attached to this report), which uses MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The hang happens immediately at the begining of the test and is reproduced
</span><br>
<span class="quotelev1">&gt; in the v1.8 release branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The command line to reproduce the behavior is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --map-by node --bind-to core -display-map -np 2 -mca pml ob1 -mca
</span><br>
<span class="quotelev1">&gt; btl tcp,self ./thread-tests-1.1/latency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The last commit with which the hang doesn't reproduce is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; commit: e4d4266d9c69e
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And problems begin after commit:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; commit 09b867374e9618007b81bfaf674ec6df04548bed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Fri Oct 31 12:42:50 2014 -0700
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Revert most of open-mpi/ompi_at_6ef938de3fa9ca0fed2c5bcb0736f65b0d8803af
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this expected behavior? In other words, should we not expect any stable
</span><br>
<span class="quotelev1">&gt; release in the 1.8.x series to be able to use MPI_THREAD_MULTIPLE with even
</span><br>
<span class="quotelev1">&gt; the TCP and SM BTLs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please advise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alina.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;latency.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16175.php">http://www.open-mpi.org/community/lists/devel/2014/11/16175.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16177.php">http://www.open-mpi.org/community/lists/devel/2014/11/16177.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16194/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16195.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Previous message:</strong> <a href="16193.php">Nathan Hjelm: "[OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>In reply to:</strong> <a href="16177.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16196.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16196.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
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
