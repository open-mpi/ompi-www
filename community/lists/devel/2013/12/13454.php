<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  IB tests in OSHMEM";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 16 15:23:03 2013" -->
<!-- isoreceived="20131216202303" -->
<!-- sent="Mon, 16 Dec 2013 20:22:46 +0000" -->
<!-- isosent="20131216202246" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  IB tests in OSHMEM" -->
<!-- id="CED4AF03.16032%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyatmOD2nkzNA9a1MVzKTkDy3UOmwtskySC3gvY98Te4VQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:  IB tests in OSHMEM<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-16 15:22:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13455.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13453.php">Nathan Hjelm: "[OMPI devel] RFC: move openib free list initialization to add procs"</a>
<li><strong>In reply to:</strong> <a href="13433.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for not being clear; that's exactly what I was saying.
<br>
<p>Brian
<br>
<p>On 12/14/13 8:49 AM, &quot;Mike Dubman&quot; &lt;miked_at_[hidden]&lt;mailto:miked_at_[hidden]&gt;&gt; wrote:
<br>
<p>ohh.. i see.
<br>
thanks for clarification.
<br>
This is exactly how it is treated in our internal repo based on 1.7 and we will push it into trunk soon.
<br>
<p><p>On Sat, Dec 14, 2013 at 5:01 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
I think what Brian is saying is that we don't generally link IB libraries into the upper-level library - instead, they are only linked to the specific components that need them. The core code (i.e., non-component) should not be calling anything in IB itself. So anything that specifies &quot;with IB&quot; should be in the .m4 for the component that will use IB.
<br>
<p>The oshmem_configure_options.m4 code should be in the top-level config directory.
<br>
<p>On Dec 14, 2013, at 6:34 AM, Mike Dubman &lt;miked_at_[hidden]&lt;mailto:miked_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hi,
<br>
In our internal oshmem v1.7 based branch it is in oshmem/config/oshmem_configure_options.m4 and not in config/oshmem_configure_options.m4
<br>
<p>Is that a way to go to have it under oshmem/config?
<br>
Will check why it is missing.
<br>
<p>Thanks
<br>
M
<br>
<p><p>On Fri, Dec 13, 2013 at 11:21 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&lt;mailto:bwbarre_at_[hidden]&gt;&gt; wrote:
<br>
Mellanox -
<br>
<p>In cleaning up some code, I noticed that the OSHMEM_SETUP_CFLAGS test is
<br>
testing for infiniband libraries and then linking them into the OSHMEM
<br>
library.  This is fairly different than what we do for the MPI layer; is
<br>
there a reason those tests are in the top-level configure and not in a
<br>
component's configure test?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13454/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13455.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13453.php">Nathan Hjelm: "[OMPI devel] RFC: move openib free list initialization to add procs"</a>
<li><strong>In reply to:</strong> <a href="13433.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
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
