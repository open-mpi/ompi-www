<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 17:25:52 2009" -->
<!-- isoreceived="20090326212552" -->
<!-- sent="Thu, 26 Mar 2009 13:25:16 -0800" -->
<!-- isosent="20090326212516" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="49CBF2BC.2080205_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="29ED446C-7456-41DC-BE4E-DF0394B895D3_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-26 17:25:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5710.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5708.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5705.php">Ralph Castain: "[OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5710.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5710.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; It looks like the SM revisions we inserted into 1.3.2 are a great  
</span><br>
<span class="quotelev1">&gt; detector for shared memory init failures - it segfaulted 143 times  
</span><br>
<span class="quotelev1">&gt; last night on IU's sif computer, 34 times on Sun/Linux, and 3 times 
</span><br>
<span class="quotelev1">&gt; on  Sun/SunOS...almost every single time due to &quot;Address not mapped&quot;  
</span><br>
<span class="quotelev1">&gt; errors in the sm btl during init.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Might be worth someone looking at the MTT output stack traces -this 
</span><br>
<span class="quotelev1">&gt; is  something that now appears to be reproducible, and should be 
</span><br>
<span class="quotelev1">&gt; addressed  before we release 1.3.2 as it seems far more likely to 
</span><br>
<span class="quotelev1">&gt; happen than in  the past.
</span><br>
<p>Okay.  I look at <a href="http://www.open-mpi.org/mtt/index.php?do_redir=973">http://www.open-mpi.org/mtt/index.php?do_redir=973</a>
<br>
<p>If we start with the 3 Sun/SunOS failures (row #7), these seem to be 
<br>
labeled 1.3.1 (&quot;MPI Version&quot;).  So, not 1.3.2.  And, I don't know how to 
<br>
make sense of the stack trace...  there an &quot;mca_common_sm_mmap_init&quot; 
<br>
ftruncate problem and stuff apparently much later on.  How can this be?
<br>
<p>The Sun/Linux problems must be row #6.  Yes?  Again, the &quot;MPI Version&quot; 
<br>
is labeled 1.3.1.  Is that informative or misleading?  Lots of stacks 
<br>
looking like this is happening during MPI_Init.  I try running a code 
<br>
that just does MPI_Init on similar configs and seem unable to trigger 
<br>
this problem.
<br>
<p>How do I figure out the compiler used?
<br>
<p>I need help reproducing this problem.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5710.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5708.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5705.php">Ralph Castain: "[OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5710.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5710.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
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
