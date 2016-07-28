<?
$subject_val = "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 11:38:04 2012" -->
<!-- isoreceived="20120215163804" -->
<!-- sent="Wed, 15 Feb 2012 11:37:56 -0500" -->
<!-- isosent="20120215163756" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption" -->
<!-- id="EE167F03-E94E-478E-B382-91509147A47A_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F12F1FE.1090404_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 11:37:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18484.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18482.php">Jeff Squyres: "Re: [OMPI users] Different Prefix for different nodes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18165.php">Yevgeny Kliteynik: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may find additional information here : <a href="https://svn.open-mpi.org/trac/ompi/ticket/1900">https://svn.open-mpi.org/trac/ompi/ticket/1900</a>
<br>
Using the information there you may calculate actual memory consumption.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jan 15, 2012, at 10:34 AM, Yevgeny Kliteynik wrote:
On 13-Jan-12 12:23 AM, Nathan Hjelm wrote:
I would start by adjusting btl_openib_receive_queues . The default uses
a per-peer QP which can eat up a lot of memory. I recommend using no
per-peer and several shared receive queues.
We use S,4096,1024:S,12288,512:S,65536,512
And here's the FAQ entry that explains the logic behind this voodoo option:
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-receive-queues">http://www.open-mpi.org/faq/?category=openfabrics#ib-receive-queues</a>
-- YK
-Nathan
On Thu, 12 Jan 2012, V. Ram wrote:
Open MPI IB Gurus,
I have some slightly older InfiniBand-equipped nodes with IB which have
less RAM than we'd like, and on which we tend to run jobs that can span
16-32 nodes of this type. The jobs themselves tend to run on the heavy
side in terms of their own memory requirements.
When we used to run on an older Intel MPI, these jobs managed to run
within the available RAM without paging out to disk. Now using Open MPI
1.5.3, we can end up paging to disk or even running out of memory for
the same codes and exact same jobs and node distributions.
I'm suspecting that I can reduce overall memory consumption by tuning
the IB-related memory that Open MPI consumes. I've looked at the FAQ:
<a href="http://www.open-mpi.org/faq/?category=openfabrics#limiting-registered-memory-usage">http://www.open-mpi.org/faq/?category=openfabrics#limiting-registered-memory-usage</a>
, but I'm still not certain about where I should start. Again, this is
all for 1.5.3 (we are willing to update to 1.5.4 or 1.5.5 when released,
if it would help).
1. It looks like there are several independent IB BTL MCA parameters to
try adjusting: i. mpool_rdma_rcache_size_limit, ii.
btl_openib_free_list_max , iii. btl_openib_max_send_size , iv.
btl_openib_eager_rdma_num, v. btl_openib_max_eager_rdma, vi.
btl_openib_eager_limit . Have I missed any others parameters that
impact InfiniBand-related memory usage? These parameters are listed as
affecting registered memory. Are there parameters that affect
unregistered IB-related memory consumption on the part of Open MPI
itself?
2. Where should I start with this? For example, is it worth trying to
adjust any of the eager parameters, or are the bulk of the memory
requirements coming from the mpool_rdma_rcache_size_limit?
3. Are there any gross/overall &quot;master&quot; parameters that will set limits,
but keep the various buffers in intelligent proportion to one another,
or will I need to manually adjust each set of buffers independently? If
the latter, are there any guidelines on the relative proportions between
buffers, or overall recommendations?
Thank you very much.
--
<a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - A fast, anti-spam email service.
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18484.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18482.php">Jeff Squyres: "Re: [OMPI users] Different Prefix for different nodes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18165.php">Yevgeny Kliteynik: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
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
