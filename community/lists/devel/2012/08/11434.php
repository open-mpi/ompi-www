<?
$subject_val = "Re: [OMPI devel] r27078 and OMPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 23 11:58:11 2012" -->
<!-- isoreceived="20120823155811" -->
<!-- sent="Thu, 23 Aug 2012 11:58:05 -0400" -->
<!-- isosent="20120823155805" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r27078 and OMPI build" -->
<!-- id="8F212A32-1B75-4421-BDC3-C542BF704A53_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5033D13B.1010506_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] r27078 and OMPI build<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-23 11:58:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11435.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11433.php">Josh Hursey: "Re: [OMPI devel] ORCA - Another runtime supported"</a>
<li><strong>In reply to:</strong> <a href="11428.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11435.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11435.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene,
<br>
<p>Did you have chance to make progress on the issue #2 ? I'm wondering how we want to proceed from here.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Aug 21, 2012, at 2:19 PM, Eugene Loh wrote:
On 8/21/2012 9:31 AM, Ralph Castain wrote:
Looks to me like you just need to add a couple of includes and correct a typo - yes?
Right.  This part is under control.
The library issue sounds like something isn't right in the Makefile.am - perhaps the syntax has a typo there as well?
I don't know.  This is the part where I could use help.  I took a quick
peek at some Makefile.am files.  I can't see what the essential
difference is between, say, coll/ml/Makefile.am and, say,
coll/sm/Makefile.am (which behaves all right).  Nor do I see why there
would be a difference in coll/ml between one system (happens to be
SPARC, though I don't know that's significant) and another.
On Aug 21, 2012, at 11:36 AM, Eugene Loh wrote:
r27078 (ML collective component) broke some Solaris OMPI builds.
1)  In ompi/mca/coll/ml/coll_ml_lmngr.c
   199 #ifdef HAVE_POSIX_MEMALIGN
   200     if((errno = posix_memalign(&amp;lmngr-&gt;base_addr,
   201                     lmngr-&gt;list_alignment,
   202                     lmngr-&gt;list_size * lmngr-&gt;list_block_size))
!= 0) {
   203         ML_ERROR((&quot;Failed to allocate memory: %s [%d]&quot;, errno,
strerror(errno)));
   204         return OMPI_ERROR;
   205     }
   206 #else
   207     lmngr-&gt;base_addr =
   208         malloc(lmngr-&gt;list_size * lmngr-&gt;list_block_size +
lmngr-&gt;list_alignment);
   209     if(NULL == lmngr-&gt;base_addr) {
   210         ML_ERROR((&quot;Failed to allocate memory: %s [%d]&quot;, errno,
strerror(errno)));
   211         return OMPI_ERROR;
   212     }
   213
   214     lmngr-&gt;base_addr =
(void*)OPAL_ALIGN((uintptr_t)lmngr-&gt;base_addr,
   215             lmngr-&gt;list_align, uintptr_t);
   216 #endif
  The &quot;#else&quot; code path has multiple problems -- specifically at the
statement on lines 214-215:
  - OPAL_ALIGN needs to be defined (e.g., #include &quot;opal/align.h&quot;)
  - uintptr_t need to be defined (e.g., #include &quot;opal_stdint.h&quot;)
  - list_align should be list_alignment
I could fix, but need help with...
2)  <a href="http://www.open-mpi.org/mtt/index.php?do_redir=2089">http://www.open-mpi.org/mtt/index.php?do_redir=2089</a>  Somehow,
coll_ml is getting pulled into libmpi.so.  E.g., this doesn't look right:
  % nm ompi/.libs/libmpi.so | grep mca_coll_ml
  [13161] |   2556704|       172|FUNC |LOCL |0    |11
|mca_coll_ml_alloc_op_prog_single_frag_dag
  [13171] |   2555488|       344|FUNC |LOCL |0    |11
|mca_coll_ml_buffer_recycling
  [13173] |   2555392|        92|FUNC |LOCL |0    |11     |mca_coll_ml_err
  [23992] |         0|         0|FUNC |GLOB |0    |UNDEF
|mca_coll_ml_memsync_intra
The UNDEF is causing a problem, but I'm guessing all that mca_coll_ml_
stuff shouldn't be in there at all in the first place.  This is on one
Solaris system, while another doesn't see the problem and builds fine.
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11435.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11433.php">Josh Hursey: "Re: [OMPI devel] ORCA - Another runtime supported"</a>
<li><strong>In reply to:</strong> <a href="11428.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11435.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11435.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
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
