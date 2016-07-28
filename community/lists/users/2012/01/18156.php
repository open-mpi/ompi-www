<?
$subject_val = "[OMPI users] IB Memory Requirements, adjusting for reduced memory consumption";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 17:10:50 2012" -->
<!-- isoreceived="20120112221050" -->
<!-- sent="Thu, 12 Jan 2012 14:10:45 -0800" -->
<!-- isosent="20120112221045" -->
<!-- name="V. Ram" -->
<!-- email="vramml0_at_[hidden]" -->
<!-- subject="[OMPI users] IB Memory Requirements, adjusting for reduced memory consumption" -->
<!-- id="1326406245.20821.140661022709677_at_webmail.messagingengine.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption<br>
<strong>From:</strong> V. Ram (<em>vramml0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 17:10:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18157.php">Nathan Hjelm: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<li><strong>Previous message:</strong> <a href="18155.php">devendra rai: "Re: [OMPI users] SIGSEGV on MPI_Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18157.php">Nathan Hjelm: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<li><strong>Reply:</strong> <a href="18157.php">Nathan Hjelm: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI IB Gurus,
<br>
<p>I have some slightly older InfiniBand-equipped nodes with IB which have
<br>
less RAM than we'd like, and on which we tend to run jobs that can span
<br>
16-32 nodes of this type.  The jobs themselves tend to run on the heavy
<br>
side in terms of their own memory requirements.
<br>
<p>When we used to run on an older Intel MPI, these jobs managed to run
<br>
within the available RAM without paging out to disk.  Now using Open MPI
<br>
1.5.3, we can end up paging to disk or even running out of memory for
<br>
the same codes and exact same jobs and node distributions.
<br>
<p>I'm suspecting that I can reduce overall memory consumption by tuning
<br>
the IB-related memory that Open MPI consumes.  I've looked at the FAQ:
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#limiting-registered-memory-usage">http://www.open-mpi.org/faq/?category=openfabrics#limiting-registered-memory-usage</a>
<br>
, but I'm still not certain about where I should start.  Again, this is
<br>
all for 1.5.3 (we are willing to update to 1.5.4 or 1.5.5 when released,
<br>
if it would help).
<br>
<p>1. It looks like there are several independent IB BTL MCA parameters to
<br>
try adjusting: i. mpool_rdma_rcache_size_limit, ii.
<br>
btl_openib_free_list_max , iii. btl_openib_max_send_size , iv.
<br>
btl_openib_eager_rdma_num, v. btl_openib_max_eager_rdma, vi.
<br>
btl_openib_eager_limit .  Have I missed any others parameters that
<br>
impact InfiniBand-related memory usage?  These parameters are listed as
<br>
affecting registered memory.  Are there parameters that affect
<br>
unregistered IB-related memory consumption on the part of Open MPI
<br>
itself?
<br>
<p>2. Where should I start with this?  For example, is it worth trying to
<br>
adjust any of the eager parameters, or are the bulk of the memory
<br>
requirements coming from the mpool_rdma_rcache_size_limit?
<br>
<p>3. Are there any gross/overall &quot;master&quot; parameters that will set limits,
<br>
but keep the various buffers in intelligent proportion to one another,
<br>
or will I need to manually adjust each set of buffers independently?  If
<br>
the latter, are there any guidelines on the relative proportions between
<br>
buffers, or overall recommendations?
<br>
<p>Thank you very much.
<br>
<p><pre>
-- 
<a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - A fast, anti-spam email service.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18157.php">Nathan Hjelm: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<li><strong>Previous message:</strong> <a href="18155.php">devendra rai: "Re: [OMPI users] SIGSEGV on MPI_Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18157.php">Nathan Hjelm: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<li><strong>Reply:</strong> <a href="18157.php">Nathan Hjelm: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
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
