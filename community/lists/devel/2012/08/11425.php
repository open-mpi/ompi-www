<?
$subject_val = "[OMPI devel] r27078 and OMPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 21 11:36:21 2012" -->
<!-- isoreceived="20120821153621" -->
<!-- sent="Tue, 21 Aug 2012 11:36:12 -0400" -->
<!-- isosent="20120821153612" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] r27078 and OMPI build" -->
<!-- id="5033AAEC.2020006_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] r27078 and OMPI build<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-21 11:36:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11426.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11424.php">Dmitri Gribenko: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11426.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11426.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11455.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r27078 (ML collective component) broke some Solaris OMPI builds.
<br>
<p>1)  In ompi/mca/coll/ml/coll_ml_lmngr.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;199 #ifdef HAVE_POSIX_MEMALIGN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;200     if((errno = posix_memalign(&amp;lmngr-&gt;base_addr,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;201                     lmngr-&gt;list_alignment,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;202                     lmngr-&gt;list_size * lmngr-&gt;list_block_size)) 
<br>
!= 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;203         ML_ERROR((&quot;Failed to allocate memory: %s [%d]&quot;, errno, 
<br>
strerror(errno)));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;204         return OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;205     }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;206 #else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;207     lmngr-&gt;base_addr =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;208         malloc(lmngr-&gt;list_size * lmngr-&gt;list_block_size + 
<br>
lmngr-&gt;list_alignment);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;209     if(NULL == lmngr-&gt;base_addr) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;210         ML_ERROR((&quot;Failed to allocate memory: %s [%d]&quot;, errno, 
<br>
strerror(errno)));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;211         return OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;212     }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;213
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;214     lmngr-&gt;base_addr = 
<br>
(void*)OPAL_ALIGN((uintptr_t)lmngr-&gt;base_addr,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;215             lmngr-&gt;list_align, uintptr_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;216 #endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The &quot;#else&quot; code path has multiple problems -- specifically at the 
<br>
statement on lines 214-215:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- OPAL_ALIGN needs to be defined (e.g., #include &quot;opal/align.h&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- uintptr_t need to be defined (e.g., #include &quot;opal_stdint.h&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- list_align should be list_alignment
<br>
<p>I could fix, but need help with...
<br>
<p>2)  <a href="http://www.open-mpi.org/mtt/index.php?do_redir=2089">http://www.open-mpi.org/mtt/index.php?do_redir=2089</a>  Somehow, 
<br>
coll_ml is getting pulled into libmpi.so.  E.g., this doesn't look right:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;% nm ompi/.libs/libmpi.so | grep mca_coll_ml
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[13161] |   2556704|       172|FUNC |LOCL |0    |11     
<br>
|mca_coll_ml_alloc_op_prog_single_frag_dag
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[13171] |   2555488|       344|FUNC |LOCL |0    |11     
<br>
|mca_coll_ml_buffer_recycling
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[13173] |   2555392|        92|FUNC |LOCL |0    |11     |mca_coll_ml_err
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[23992] |         0|         0|FUNC |GLOB |0    |UNDEF  
<br>
|mca_coll_ml_memsync_intra
<br>
<p>The UNDEF is causing a problem, but I'm guessing all that mca_coll_ml_ 
<br>
stuff shouldn't be in there at all in the first place.  This is on one 
<br>
Solaris system, while another doesn't see the problem and builds fine.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11426.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11424.php">Dmitri Gribenko: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11426.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11426.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11455.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
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
