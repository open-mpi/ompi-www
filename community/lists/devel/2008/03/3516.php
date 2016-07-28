<?
$subject_val = "Re: [OMPI devel] iof/libevent failures?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 09:35:35 2008" -->
<!-- isoreceived="20080325133535" -->
<!-- sent="Tue, 25 Mar 2008 09:35:25 -0400" -->
<!-- isosent="20080325133525" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iof/libevent failures?" -->
<!-- id="97A14416-C771-41AE-99C0-4109C9C6CA83_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47E8FC86.6030904_at_cs.indiana.edu" -->
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
<strong>Date:</strong> 2008-03-25 09:35:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3517.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17951"</a>
<li><strong>Previous message:</strong> <a href="3515.php">Tim Prins: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>In reply to:</strong> <a href="3515.php">Tim Prins: "Re: [OMPI devel] iof/libevent failures?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3519.php">Ralph H Castain: "Re: [OMPI devel] iof/libevent failures?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Crud, ok.  I added this info to <a href="https://svn.open-mpi.org/trac/ompi/ticket/1253">https://svn.open-mpi.org/trac/ompi/ticket/1253</a> 
<br>
; hopefully we'll resolve it today.
<br>
<p>I guess people didn't test the libevent-merge branch before we brought  
<br>
it to the trunk.  :-(
<br>
<p><p>On Mar 25, 2008, at 9:22 AM, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; I was able to replicate the failure with a debug build by running  
</span><br>
<span class="quotelev1">&gt; mpirun
</span><br>
<span class="quotelev1">&gt; through a batch job. I then added the parameter you gave me, and it
</span><br>
<span class="quotelev1">&gt; worked fine with the parameter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We're chasing down a problem that we're having on OSX w.r.t.  
</span><br>
<span class="quotelev2">&gt;&gt; libevent,
</span><br>
<span class="quotelev2">&gt;&gt; too -- can you try running with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    --mca opal_event_include select
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and see if that fixes the problem for you?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 25, 2008, at 8:49 AM, Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the last couple nights ALL of our mtt runs have been failing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (although the failure is masked because mpirun is returning the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrong
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error code) with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [odin005.cs.indiana.edu:28167] [[46567,0],0] ORTE_ERROR_LOG: Error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/plm_base_launch_support.c at line 161
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was unable to start the specified application as it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; encountered
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More information may be available above.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This line is where we try to do an IOF push. It looks like it was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; broken
</span><br>
<span class="quotelev3">&gt;&gt;&gt; somewhere between r17922 and r17926, which includes the libevent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; merge.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I cannot replicate this with a debug build, so I thought I would  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; throw
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this out before I look any further.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="3517.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17951"</a>
<li><strong>Previous message:</strong> <a href="3515.php">Tim Prins: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>In reply to:</strong> <a href="3515.php">Tim Prins: "Re: [OMPI devel] iof/libevent failures?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3519.php">Ralph H Castain: "Re: [OMPI devel] iof/libevent failures?"</a>
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
