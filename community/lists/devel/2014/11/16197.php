<?
$subject_val = "Re: [OMPI devel] thread-tests hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 09:42:45 2014" -->
<!-- isoreceived="20141105144245" -->
<!-- sent="Wed, 5 Nov 2014 16:42:43 +0200" -->
<!-- isosent="20141105144243" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread-tests hang" -->
<!-- id="CAAO1KyZM4B-34SVvd3Rkbf0mNd8r0m49pJdQ6j+1PuwrYfk0fA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5E631572-5ECB-4BC8-BC53-C701AF681BD9_at_cisco.com" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 09:42:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16198.php">Nathan Hjelm: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Previous message:</strong> <a href="16196.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16196.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16200.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16200.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Jeff,
<br>
<p>now we use only this &quot;--enable-mpi-thread-multiple&quot; and it worked.
<br>
does it mean that now we need to pass &quot;--enable-mpi-thread-multiple
<br>
--enable-opal-multi-threads&quot;
<br>
to get it working again?
<br>
Maybe if one of the params used it should enable another one as well?
<br>
<p>Thanks
<br>
<p>On Wed, Nov 5, 2014 at 3:47 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; $ ./configure --help |&amp; grep thread
</span><br>
<span class="quotelev1">&gt;                           code will ever run in SMP or multi-threaded
</span><br>
<span class="quotelev1">&gt;   --enable-opal-multi-threads
</span><br>
<span class="quotelev1">&gt;                           Enable thread support inside OPAL (default:
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt;                           Enable MPI_THREAD_MULTIPLE support (default:
</span><br>
<span class="quotelev1">&gt;   --with-threads          Set thread type (posix)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 5, 2014, at 3:32 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What configure voodoo do we need to add to our MTT to get this
</span><br>
<span class="quotelev1">&gt; functional again?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Nov 4, 2014 at 12:33 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; That would be correct - we restored some configure flags that are
</span><br>
<span class="quotelev1">&gt; required to make multi-thread programs work. Jeff can probably provide more
</span><br>
<span class="quotelev1">&gt; info.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Nov 4, 2014, at 9:15 AM, Alina Sklarevich &lt;alinas_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We observe a hang when running the multi-threading support test
</span><br>
<span class="quotelev1">&gt; &quot;latency.c&quot; (attached to this report), which uses MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The hang happens immediately at the begining of the test and is
</span><br>
<span class="quotelev1">&gt; reproduced in the v1.8 release branch.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The command line to reproduce the behavior is:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ mpirun --map-by node --bind-to core -display-map -np 2 -mca pml ob1
</span><br>
<span class="quotelev1">&gt; -mca btl tcp,self ./thread-tests-1.1/latency
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The last commit with which the hang doesn't reproduce is:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; commit: e4d4266d9c69e
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; And problems begin after commit:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; commit 09b867374e9618007b81bfaf674ec6df04548bed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date:   Fri Oct 31 12:42:50 2014 -0700
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Revert most of
</span><br>
<span class="quotelev1">&gt; open-mpi/ompi_at_6ef938de3fa9ca0fed2c5bcb0736f65b0d8803af
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is this expected behavior? In other words, should we not expect any
</span><br>
<span class="quotelev1">&gt; stable release in the 1.8.x series to be able to use MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt; with even the TCP and SM BTLs?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Please advise.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Alina.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;latency.c&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16175.php">http://www.open-mpi.org/community/lists/devel/2014/11/16175.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16177.php">http://www.open-mpi.org/community/lists/devel/2014/11/16177.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16194.php">http://www.open-mpi.org/community/lists/devel/2014/11/16194.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16196.php">http://www.open-mpi.org/community/lists/devel/2014/11/16196.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16197/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16198.php">Nathan Hjelm: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Previous message:</strong> <a href="16196.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16196.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16200.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16200.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
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
