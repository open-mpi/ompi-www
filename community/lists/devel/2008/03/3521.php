<?
$subject_val = "Re: [OMPI devel] iof/libevent failures?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 12:33:47 2008" -->
<!-- isoreceived="20080325163347" -->
<!-- sent="Tue, 25 Mar 2008 12:33:36 -0400" -->
<!-- isosent="20080325163336" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iof/libevent failures?" -->
<!-- id="BC30FB46-D2AE-40B1-A020-83031201DF2E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C40E5242.CC9E%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-03-25 12:33:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3522.php">Jeff Squyres: "[OMPI devel] Using coverity results"</a>
<li><strong>Previous message:</strong> <a href="3520.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.6rc3 has been posted"</a>
<li><strong>In reply to:</strong> <a href="3519.php">Ralph H Castain: "Re: [OMPI devel] iof/libevent failures?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Further discussion on: <a href="https://svn.open-mpi.org/trac/ompi/ticket/1253">https://svn.open-mpi.org/trac/ompi/ticket/1253</a>
<br>
<p><p>On Mar 25, 2008, at 8:54 AM, Ralph H Castain wrote:
<br>
<span class="quotelev2">&gt;&gt; I cannot replicate this with a debug build
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was doing all my work in a debug build, Tim - may be why I didn't  
</span><br>
<span class="quotelev1">&gt; see the
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is an issue with libevent right now and pty's/select/event
</span><br>
<span class="quotelev1">&gt; registration. George, Jeff, and I have been chatting about it as it  
</span><br>
<span class="quotelev1">&gt; breaks
</span><br>
<span class="quotelev1">&gt; the Mac completely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will let them take it from there...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/25/08 6:49 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the last couple nights ALL of our mtt runs have been failing
</span><br>
<span class="quotelev2">&gt;&gt; (although the failure is masked because mpirun is returning the wrong
</span><br>
<span class="quotelev2">&gt;&gt; error code) with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [odin005.cs.indiana.edu:28167] [[46567,0],0] ORTE_ERROR_LOG: Error  
</span><br>
<span class="quotelev2">&gt;&gt; in file
</span><br>
<span class="quotelev2">&gt;&gt; base/plm_base_launch_support.c at line 161
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to start the specified application as it  
</span><br>
<span class="quotelev2">&gt;&gt; encountered
</span><br>
<span class="quotelev2">&gt;&gt; an error.
</span><br>
<span class="quotelev2">&gt;&gt; More information may be available above.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This line is where we try to do an IOF push. It looks like it was  
</span><br>
<span class="quotelev2">&gt;&gt; broken
</span><br>
<span class="quotelev2">&gt;&gt; somewhere between r17922 and r17926, which includes the libevent  
</span><br>
<span class="quotelev2">&gt;&gt; merge.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I cannot replicate this with a debug build, so I thought I would  
</span><br>
<span class="quotelev2">&gt;&gt; throw
</span><br>
<span class="quotelev2">&gt;&gt; this out before I look any further.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="3522.php">Jeff Squyres: "[OMPI devel] Using coverity results"</a>
<li><strong>Previous message:</strong> <a href="3520.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.6rc3 has been posted"</a>
<li><strong>In reply to:</strong> <a href="3519.php">Ralph H Castain: "Re: [OMPI devel] iof/libevent failures?"</a>
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
