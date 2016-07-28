<?
$subject_val = "Re: [OMPI devel] r27078 and OMPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 21 14:53:54 2012" -->
<!-- isoreceived="20120821185354" -->
<!-- sent="Tue, 21 Aug 2012 14:53:48 -0400" -->
<!-- isosent="20120821185348" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r27078 and OMPI build" -->
<!-- id="713DC8BB-EAF3-4A70-9936-32938A4C86CC_at_ornl.gov" -->
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
<strong>Date:</strong> 2012-08-21 14:53:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11430.php">Jeff Squyres: "[OMPI devel] git mirror"</a>
<li><strong>Previous message:</strong> <a href="11428.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>In reply to:</strong> <a href="11428.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11434.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/21/2012 9:31 AM, Ralph Castain wrote:
<br>
Looks to me like you just need to add a couple of includes and correct a typo - yes?
<br>
Right.  This part is under control.
<br>
<p>I hope r27100&lt;<a href="https://svn.open-mpi.org/trac/ompi/changeset/27100">https://svn.open-mpi.org/trac/ompi/changeset/27100</a>&gt; resolves the issue #1
<br>
<p>The library issue sounds like something isn't right in the Makefile.am - perhaps the syntax has a typo there as well?
<br>
I don't know.  This is the part where I could use help.  I took a quick
<br>
peek at some Makefile.am files.  I can't see what the essential
<br>
difference is between, say, coll/ml/Makefile.am and, say,
<br>
coll/sm/Makefile.am (which behaves all right).  Nor do I see why there
<br>
would be a difference in coll/ml between one system (happens to be
<br>
SPARC, though I don't know that's significant) and another.
<br>
<p>I can't reproduce the problem on mac and linux systems....
<br>
<p>On Aug 21, 2012, at 11:36 AM, Eugene Loh wrote:
<br>
<p>r27078 (ML collective component) broke some Solaris OMPI builds.
<br>
<p>1)  In ompi/mca/coll/ml/coll_ml_lmngr.c
<br>
&nbsp;&nbsp;&nbsp;199 #ifdef HAVE_POSIX_MEMALIGN
<br>
&nbsp;&nbsp;&nbsp;200     if((errno = posix_memalign(&amp;lmngr-&gt;base_addr,
<br>
&nbsp;&nbsp;&nbsp;201                     lmngr-&gt;list_alignment,
<br>
&nbsp;&nbsp;&nbsp;202                     lmngr-&gt;list_size * lmngr-&gt;list_block_size))
<br>
!= 0) {
<br>
&nbsp;&nbsp;&nbsp;203         ML_ERROR((&quot;Failed to allocate memory: %s [%d]&quot;, errno,
<br>
strerror(errno)));
<br>
&nbsp;&nbsp;&nbsp;204         return OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;205     }
<br>
&nbsp;&nbsp;&nbsp;206 #else
<br>
&nbsp;&nbsp;&nbsp;207     lmngr-&gt;base_addr =
<br>
&nbsp;&nbsp;&nbsp;208         malloc(lmngr-&gt;list_size * lmngr-&gt;list_block_size +
<br>
lmngr-&gt;list_alignment);
<br>
&nbsp;&nbsp;&nbsp;209     if(NULL == lmngr-&gt;base_addr) {
<br>
&nbsp;&nbsp;&nbsp;210         ML_ERROR((&quot;Failed to allocate memory: %s [%d]&quot;, errno,
<br>
strerror(errno)));
<br>
&nbsp;&nbsp;&nbsp;211         return OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;212     }
<br>
&nbsp;&nbsp;&nbsp;213
<br>
&nbsp;&nbsp;&nbsp;214     lmngr-&gt;base_addr =
<br>
(void*)OPAL_ALIGN((uintptr_t)lmngr-&gt;base_addr,
<br>
&nbsp;&nbsp;&nbsp;215             lmngr-&gt;list_align, uintptr_t);
<br>
&nbsp;&nbsp;&nbsp;216 #endif
<br>
&nbsp;&nbsp;The &quot;#else&quot; code path has multiple problems -- specifically at the
<br>
statement on lines 214-215:
<br>
&nbsp;&nbsp;- OPAL_ALIGN needs to be defined (e.g., #include &quot;opal/align.h&quot;)
<br>
&nbsp;&nbsp;- uintptr_t need to be defined (e.g., #include &quot;opal_stdint.h&quot;)
<br>
&nbsp;&nbsp;- list_align should be list_alignment
<br>
<p>I could fix, but need help with...
<br>
<p>2)  <a href="http://www.open-mpi.org/mtt/index.php?do_redir=2089">http://www.open-mpi.org/mtt/index.php?do_redir=2089</a>  Somehow,
<br>
coll_ml is getting pulled into libmpi.so.  E.g., this doesn't look right:
<br>
<p>&nbsp;&nbsp;% nm ompi/.libs/libmpi.so | grep mca_coll_ml
<br>
&nbsp;&nbsp;[13161] |   2556704|       172|FUNC |LOCL |0    |11
<br>
|mca_coll_ml_alloc_op_prog_single_frag_dag
<br>
&nbsp;&nbsp;[13171] |   2555488|       344|FUNC |LOCL |0    |11
<br>
|mca_coll_ml_buffer_recycling
<br>
&nbsp;&nbsp;[13173] |   2555392|        92|FUNC |LOCL |0    |11     |mca_coll_ml_err
<br>
&nbsp;&nbsp;[23992] |         0|         0|FUNC |GLOB |0    |UNDEF
<br>
|mca_coll_ml_memsync_intra
<br>
<p>The UNDEF is causing a problem, but I'm guessing all that mca_coll_ml_
<br>
stuff shouldn't be in there at all in the first place.  This is on one
<br>
Solaris system, while another doesn't see the problem and builds fine.
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11430.php">Jeff Squyres: "[OMPI devel] git mirror"</a>
<li><strong>Previous message:</strong> <a href="11428.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>In reply to:</strong> <a href="11428.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11434.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
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
