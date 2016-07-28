<?
$subject_val = "Re: [OMPI devel] r27078 and OMPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 21 14:19:50 2012" -->
<!-- isoreceived="20120821181950" -->
<!-- sent="Tue, 21 Aug 2012 11:19:39 -0700" -->
<!-- isosent="20120821181939" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r27078 and OMPI build" -->
<!-- id="5033D13B.1010506_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AEE45165-79D3-46FB-A018-CD7C78A7405B_at_open-mpi.org" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-21 14:19:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11429.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11427.php">Ralph Castain: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>In reply to:</strong> <a href="11427.php">Ralph Castain: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11429.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11429.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11434.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/21/2012 9:31 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Looks to me like you just need to add a couple of includes and correct a typo - yes?
</span><br>
Right.  This part is under control.
<br>
<span class="quotelev1">&gt; The library issue sounds like something isn't right in the Makefile.am - perhaps the syntax has a typo there as well?
</span><br>
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
<span class="quotelev2">&gt;&gt; On Aug 21, 2012, at 11:36 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r27078 (ML collective component) broke some Solaris OMPI builds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1)  In ompi/mca/coll/ml/coll_ml_lmngr.c
</span><br>
<span class="quotelev2">&gt;&gt;     199 #ifdef HAVE_POSIX_MEMALIGN
</span><br>
<span class="quotelev2">&gt;&gt;     200     if((errno = posix_memalign(&amp;lmngr-&gt;base_addr,
</span><br>
<span class="quotelev2">&gt;&gt;     201                     lmngr-&gt;list_alignment,
</span><br>
<span class="quotelev2">&gt;&gt;     202                     lmngr-&gt;list_size * lmngr-&gt;list_block_size))
</span><br>
<span class="quotelev2">&gt;&gt; != 0) {
</span><br>
<span class="quotelev2">&gt;&gt;     203         ML_ERROR((&quot;Failed to allocate memory: %s [%d]&quot;, errno,
</span><br>
<span class="quotelev2">&gt;&gt; strerror(errno)));
</span><br>
<span class="quotelev2">&gt;&gt;     204         return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt;     205     }
</span><br>
<span class="quotelev2">&gt;&gt;     206 #else
</span><br>
<span class="quotelev2">&gt;&gt;     207     lmngr-&gt;base_addr =
</span><br>
<span class="quotelev2">&gt;&gt;     208         malloc(lmngr-&gt;list_size * lmngr-&gt;list_block_size +
</span><br>
<span class="quotelev2">&gt;&gt; lmngr-&gt;list_alignment);
</span><br>
<span class="quotelev2">&gt;&gt;     209     if(NULL == lmngr-&gt;base_addr) {
</span><br>
<span class="quotelev2">&gt;&gt;     210         ML_ERROR((&quot;Failed to allocate memory: %s [%d]&quot;, errno,
</span><br>
<span class="quotelev2">&gt;&gt; strerror(errno)));
</span><br>
<span class="quotelev2">&gt;&gt;     211         return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt;     212     }
</span><br>
<span class="quotelev2">&gt;&gt;     213
</span><br>
<span class="quotelev2">&gt;&gt;     214     lmngr-&gt;base_addr =
</span><br>
<span class="quotelev2">&gt;&gt; (void*)OPAL_ALIGN((uintptr_t)lmngr-&gt;base_addr,
</span><br>
<span class="quotelev2">&gt;&gt;     215             lmngr-&gt;list_align, uintptr_t);
</span><br>
<span class="quotelev2">&gt;&gt;     216 #endif
</span><br>
<span class="quotelev2">&gt;&gt;    The &quot;#else&quot; code path has multiple problems -- specifically at the
</span><br>
<span class="quotelev2">&gt;&gt; statement on lines 214-215:
</span><br>
<span class="quotelev2">&gt;&gt;    - OPAL_ALIGN needs to be defined (e.g., #include &quot;opal/align.h&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    - uintptr_t need to be defined (e.g., #include &quot;opal_stdint.h&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    - list_align should be list_alignment
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I could fix, but need help with...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2)  <a href="http://www.open-mpi.org/mtt/index.php?do_redir=2089">http://www.open-mpi.org/mtt/index.php?do_redir=2089</a>  Somehow,
</span><br>
<span class="quotelev2">&gt;&gt; coll_ml is getting pulled into libmpi.so.  E.g., this doesn't look right:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    % nm ompi/.libs/libmpi.so | grep mca_coll_ml
</span><br>
<span class="quotelev2">&gt;&gt;    [13161] |   2556704|       172|FUNC |LOCL |0    |11
</span><br>
<span class="quotelev2">&gt;&gt; |mca_coll_ml_alloc_op_prog_single_frag_dag
</span><br>
<span class="quotelev2">&gt;&gt;    [13171] |   2555488|       344|FUNC |LOCL |0    |11
</span><br>
<span class="quotelev2">&gt;&gt; |mca_coll_ml_buffer_recycling
</span><br>
<span class="quotelev2">&gt;&gt;    [13173] |   2555392|        92|FUNC |LOCL |0    |11     |mca_coll_ml_err
</span><br>
<span class="quotelev2">&gt;&gt;    [23992] |         0|         0|FUNC |GLOB |0    |UNDEF
</span><br>
<span class="quotelev2">&gt;&gt; |mca_coll_ml_memsync_intra
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The UNDEF is causing a problem, but I'm guessing all that mca_coll_ml_
</span><br>
<span class="quotelev2">&gt;&gt; stuff shouldn't be in there at all in the first place.  This is on one
</span><br>
<span class="quotelev2">&gt;&gt; Solaris system, while another doesn't see the problem and builds fine.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11429.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11427.php">Ralph Castain: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>In reply to:</strong> <a href="11427.php">Ralph Castain: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11429.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11429.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11434.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
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
