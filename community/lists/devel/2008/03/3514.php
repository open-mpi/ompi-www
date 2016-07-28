<?
$subject_val = "Re: [OMPI devel] iof/libevent failures?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 09:11:59 2008" -->
<!-- isoreceived="20080325131159" -->
<!-- sent="Tue, 25 Mar 2008 09:11:12 -0400" -->
<!-- isosent="20080325131112" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iof/libevent failures?" -->
<!-- id="7168CC06-01D2-482A-AD2C-0C6D5CF6B010_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 09:11:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3515.php">Tim Prins: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Previous message:</strong> <a href="3513.php">Tim Prins: "[OMPI devel] iof/libevent failures?"</a>
<li><strong>In reply to:</strong> <a href="3513.php">Tim Prins: "[OMPI devel] iof/libevent failures?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3515.php">Tim Prins: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Reply:</strong> <a href="3515.php">Tim Prins: "Re: [OMPI devel] iof/libevent failures?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We're chasing down a problem that we're having on OSX w.r.t. libevent,  
<br>
too -- can you try running with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--mca opal_event_include select
<br>
<p>and see if that fixes the problem for you?
<br>
<p><p>On Mar 25, 2008, at 8:49 AM, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi everyone,
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
<span class="quotelev1">&gt; [odin005.cs.indiana.edu:28167] [[46567,0],0] ORTE_ERROR_LOG: Error  
</span><br>
<span class="quotelev1">&gt; in file
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
<span class="quotelev1">&gt; This line is where we try to do an IOF push. It looks like it was  
</span><br>
<span class="quotelev1">&gt; broken
</span><br>
<span class="quotelev1">&gt; somewhere between r17922 and r17926, which includes the libevent  
</span><br>
<span class="quotelev1">&gt; merge.
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3515.php">Tim Prins: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Previous message:</strong> <a href="3513.php">Tim Prins: "[OMPI devel] iof/libevent failures?"</a>
<li><strong>In reply to:</strong> <a href="3513.php">Tim Prins: "[OMPI devel] iof/libevent failures?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3515.php">Tim Prins: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Reply:</strong> <a href="3515.php">Tim Prins: "Re: [OMPI devel] iof/libevent failures?"</a>
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
