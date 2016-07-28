<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 18:41:37 2009" -->
<!-- isoreceived="20090326224137" -->
<!-- sent="Thu, 26 Mar 2009 16:41:28 -0600" -->
<!-- isosent="20090326224128" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="A8B3BC94-BDD0-491A-A0B6-E8BB7A9124B8_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49CBF2BC.2080205_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-26 18:41:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5711.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5709.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5709.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5711.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5711.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5712.php">Josh Hursey: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are correct - the Sun errors are in a version prior to the  
<br>
insertion of the SM changes. We didn't relabel the version to 1.3.2  
<br>
until -after- those changes went in, so you have to look for anything  
<br>
with an r number &gt;= 20839.
<br>
<p>The sif errors are all in that group - I would suggest starting there.
<br>
<p>I suspect Josh or someone at IU could tell you the compiler. I would  
<br>
be very surprised if it wasn't gcc, but I don't know what version. I  
<br>
suspect they could even find a way to run some debugging on for you,  
<br>
if that would help.
<br>
<p>The Cisco errors were caused by some config/fabric problems - Jeff is  
<br>
physically there today, so hopefully those will get fixed and we'll  
<br>
see his tests. IIRC, he was seeing these problems before, so hopefully  
<br>
we can see if they are still present.
<br>
<p><p>On Mar 26, 2009, at 3:25 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like the SM revisions we inserted into 1.3.2 are a great   
</span><br>
<span class="quotelev2">&gt;&gt; detector for shared memory init failures - it segfaulted 143 times   
</span><br>
<span class="quotelev2">&gt;&gt; last night on IU's sif computer, 34 times on Sun/Linux, and 3 times  
</span><br>
<span class="quotelev2">&gt;&gt; on  Sun/SunOS...almost every single time due to &quot;Address not  
</span><br>
<span class="quotelev2">&gt;&gt; mapped&quot;  errors in the sm btl during init.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Might be worth someone looking at the MTT output stack traces -this  
</span><br>
<span class="quotelev2">&gt;&gt; is  something that now appears to be reproducible, and should be  
</span><br>
<span class="quotelev2">&gt;&gt; addressed  before we release 1.3.2 as it seems far more likely to  
</span><br>
<span class="quotelev2">&gt;&gt; happen than in  the past.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay.  I look at <a href="http://www.open-mpi.org/mtt/index.php?do_redir=973">http://www.open-mpi.org/mtt/index.php?do_redir=973</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we start with the 3 Sun/SunOS failures (row #7), these seem to be  
</span><br>
<span class="quotelev1">&gt; labeled 1.3.1 (&quot;MPI Version&quot;).  So, not 1.3.2.  And, I don't know  
</span><br>
<span class="quotelev1">&gt; how to make sense of the stack trace...  there an  
</span><br>
<span class="quotelev1">&gt; &quot;mca_common_sm_mmap_init&quot; ftruncate problem and stuff apparently  
</span><br>
<span class="quotelev1">&gt; much later on.  How can this be?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Sun/Linux problems must be row #6.  Yes?  Again, the &quot;MPI  
</span><br>
<span class="quotelev1">&gt; Version&quot; is labeled 1.3.1.  Is that informative or misleading?  Lots  
</span><br>
<span class="quotelev1">&gt; of stacks looking like this is happening during MPI_Init.  I try  
</span><br>
<span class="quotelev1">&gt; running a code that just does MPI_Init on similar configs and seem  
</span><br>
<span class="quotelev1">&gt; unable to trigger this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do I figure out the compiler used?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need help reproducing this problem.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5711.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5709.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5709.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5711.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5711.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5712.php">Josh Hursey: "Re: [OMPI devel] SM init failures"</a>
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
