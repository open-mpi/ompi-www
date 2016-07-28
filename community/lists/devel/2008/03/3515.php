<?
$subject_val = "Re: [OMPI devel] iof/libevent failures?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 09:22:16 2008" -->
<!-- isoreceived="20080325132216" -->
<!-- sent="Tue, 25 Mar 2008 09:22:14 -0400" -->
<!-- isosent="20080325132214" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iof/libevent failures?" -->
<!-- id="47E8FC86.6030904_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7168CC06-01D2-482A-AD2C-0C6D5CF6B010_at_cisco.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 09:22:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3516.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Previous message:</strong> <a href="3514.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>In reply to:</strong> <a href="3514.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3516.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Reply:</strong> <a href="3516.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was able to replicate the failure with a debug build by running mpirun 
<br>
through a batch job. I then added the parameter you gave me, and it 
<br>
worked fine with the parameter.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; We're chasing down a problem that we're having on OSX w.r.t. libevent,  
</span><br>
<span class="quotelev1">&gt; too -- can you try running with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     --mca opal_event_include select
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and see if that fixes the problem for you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 25, 2008, at 8:49 AM, Tim Prins wrote:
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
<span class="quotelev2">&gt;&gt; mpirun was unable to start the specified application as it encountered
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
<span class="quotelev2">&gt;&gt; I cannot replicate this with a debug build, so I thought I would throw
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3516.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Previous message:</strong> <a href="3514.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>In reply to:</strong> <a href="3514.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3516.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Reply:</strong> <a href="3516.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
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
