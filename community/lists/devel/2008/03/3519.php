<?
$subject_val = "Re: [OMPI devel] iof/libevent failures?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 10:49:03 2008" -->
<!-- isoreceived="20080325144903" -->
<!-- sent="Tue, 25 Mar 2008 06:54:58 -0600" -->
<!-- isosent="20080325125458" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iof/libevent failures?" -->
<!-- id="C40E5242.CC9E%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47E8F4CD.8080508_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] iof/libevent failures?<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 08:54:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3520.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.6rc3 has been posted"</a>
<li><strong>Previous message:</strong> <a href="3518.php">Jeff Squyres: "[OMPI devel] Coverity results"</a>
<li><strong>In reply to:</strong> <a href="3513.php">Tim Prins: "[OMPI devel] iof/libevent failures?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3521.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Reply:</strong> <a href="3521.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I cannot replicate this with a debug build
</span><br>
<p>I was doing all my work in a debug build, Tim - may be why I didn't see the
<br>
problem.
<br>
<p>There is an issue with libevent right now and pty's/select/event
<br>
registration. George, Jeff, and I have been chatting about it as it breaks
<br>
the Mac completely.
<br>
<p>Will let them take it from there...
<br>
<p><p>On 3/25/08 6:49 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the last couple nights ALL of our mtt runs have been failing
</span><br>
<span class="quotelev1">&gt; (although the failure is masked because mpirun is returning the wrong
</span><br>
<span class="quotelev1">&gt; error code) with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [odin005.cs.indiana.edu:28167] [[46567,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; base/plm_base_launch_support.c at line 161
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to start the specified application as it encountered
</span><br>
<span class="quotelev1">&gt; an error.
</span><br>
<span class="quotelev1">&gt; More information may be available above.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This line is where we try to do an IOF push. It looks like it was broken
</span><br>
<span class="quotelev1">&gt; somewhere between r17922 and r17926, which includes the libevent merge.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I cannot replicate this with a debug build, so I thought I would throw
</span><br>
<span class="quotelev1">&gt; this out before I look any further.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
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
<li><strong>Next message:</strong> <a href="3520.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.6rc3 has been posted"</a>
<li><strong>Previous message:</strong> <a href="3518.php">Jeff Squyres: "[OMPI devel] Coverity results"</a>
<li><strong>In reply to:</strong> <a href="3513.php">Tim Prins: "[OMPI devel] iof/libevent failures?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3521.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Reply:</strong> <a href="3521.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
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
