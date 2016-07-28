<?
$subject_val = "[OMPI devel] Inconsistent description of btl_openib_eager_rdma_num parameter in FAQ";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 10 05:38:39 2013" -->
<!-- isoreceived="20130910093839" -->
<!-- sent="Tue, 10 Sep 2013 11:42:16 +0200" -->
<!-- isosent="20130910094216" -->
<!-- name="Lars Sch&#228;fers" -->
<!-- email="slars_at_[hidden]" -->
<!-- subject="[OMPI devel] Inconsistent description of btl_openib_eager_rdma_num parameter in FAQ" -->
<!-- id="1378806136.25393.39.camel_at_gogfx-desktop" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Inconsistent description of btl_openib_eager_rdma_num parameter in FAQ<br>
<strong>From:</strong> Lars Sch&#228;fers (<em>slars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-10 05:42:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12880.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12878.php">Matthias Jurenz: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>for quite a long time already, there is a confusing inconsistency of the
<br>
description of the OpenIB parameters related to eager messages on this
<br>
FAQ site (see details below):
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics">http://www.open-mpi.org/faq/?category=openfabrics</a>
<br>
<p>Does somebody here has the necessary permissions to fix this?
<br>
<p><p>The answer to question 20 says (last row in the table): 
<br>
<p>&quot;Each MPI process will use RDMA buffers for eager fragments up to
<br>
btl_openib_eager_rdma_num MPI peers. Upon receiving the
<br>
btl_openib_eager_rdma_threshhold'th message from an MPI peer process, if
<br>
both sides have not yet setup btl_openib_eager_rdma_num sets of eager
<br>
RDMA buffers, a new set will be created. The set will contain
<br>
btl_openib_max_eager_rdma buffers; each buffer will be
<br>
btl_openib_eager_limit bytes (i.e., the maximum size of an eager
<br>
fragment).&quot;
<br>
<p><p>while part of the answer of question 24 says the following:
<br>
<p>&nbsp;&nbsp;* btl_openib_max_eager_rdma (default value: 16): This parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;controls the maximum number of peers that can receive and RDMA
<br>
&nbsp;&nbsp;&nbsp;&nbsp;connection for short messages. It is not advisable to change this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;value to a very large number because the polling time increase with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the number of the connections; as a direct result, short message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;latency will increase.
<br>
<p>&nbsp;&nbsp;* btl_openib_eager_rdma_num (default value: 16): This parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;controls the maximum number of pre-allocated buffers allocated to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;each peer for small messages.  
<br>
<p><p>- Lars
<br>
<p><p><pre>
-- 
Lars Schaefers
Computer Engineering Group of Prof. Dr. Marco Platzner
Paderborn Center for Parallel Computing, University of Paderborn
Pohlweg 47-49, 33098 Paderborn, Germany
Tel: +49 (0)5251 60 4341, Fax: +49 (0)5251 60 5377
Office: Building O 3.119
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12880.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12878.php">Matthias Jurenz: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<!-- nextthread="start" -->
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
