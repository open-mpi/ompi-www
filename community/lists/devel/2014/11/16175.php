<?
$subject_val = "[OMPI devel] thread-tests hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 12:15:54 2014" -->
<!-- isoreceived="20141104171554" -->
<!-- sent="Tue, 4 Nov 2014 19:15:53 +0200" -->
<!-- isosent="20141104171553" -->
<!-- name="Alina Sklarevich" -->
<!-- email="alinas_at_[hidden]" -->
<!-- subject="[OMPI devel] thread-tests hang" -->
<!-- id="CADGp0BTtR_pqM1xYGUcGBNUiSoEoEXNLuQA3stYjAVRJ_kmjsQ_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] thread-tests hang<br>
<strong>From:</strong> Alina Sklarevich (<em>alinas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 12:15:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16176.php">Howard Pritchard: "[OMPI devel] OpenMPI Developers Face to Face Q1 2015 poll"</a>
<li><strong>Previous message:</strong> <a href="16174.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.8.4rc1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16177.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16177.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16243.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We observe a hang when running the multi-threading support test &quot;latency.c&quot;
<br>
(attached to this report), which uses MPI_THREAD_MULTIPLE.
<br>
<p>The hang happens immediately at the begining of the test and is reproduced
<br>
in the v1.8 release branch.
<br>
<p>The command line to reproduce the behavior is:
<br>
<p>$ mpirun --map-by node --bind-to core -display-map -np 2 -mca pml ob1 -mca
<br>
btl tcp,self ./thread-tests-1.1/latency
<br>
<p>The last commit with which the hang doesn't reproduce is:
<br>
<p>commit: e4d4266d9c69e
<br>
<p><p>And problems begin after commit:
<br>
<p><p>commit 09b867374e9618007b81bfaf674ec6df04548bed
<br>
<p>Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p>Date:   Fri Oct 31 12:42:50 2014 -0700
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;Revert most of open-mpi/ompi_at_6ef938de3fa9ca0fed2c5bcb0736f65b0d8803af
<br>
<p><p>Is this expected behavior? In other words, should we not expect any stable
<br>
release in the 1.8.x series to be able to use MPI_THREAD_MULTIPLE with even
<br>
the TCP and SM BTLs?
<br>
<p><p>Please advise.
<br>
<p><p>Thanks,
<br>
<p>Alina.
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16175/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16175/latency.c">latency.c</a>
</ul>
<!-- attachment="latency.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16176.php">Howard Pritchard: "[OMPI devel] OpenMPI Developers Face to Face Q1 2015 poll"</a>
<li><strong>Previous message:</strong> <a href="16174.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.8.4rc1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16177.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16177.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16243.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
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
