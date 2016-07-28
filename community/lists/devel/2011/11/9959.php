<?
$subject_val = "Re: [OMPI devel] debugger changes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 18:32:44 2011" -->
<!-- isoreceived="20111108233244" -->
<!-- sent="Tue, 8 Nov 2011 16:32:35 -0700" -->
<!-- isosent="20111108233235" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] debugger changes" -->
<!-- id="996B87E7-32D5-4630-B404-16D789A279F5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EB9B3AD.1070108_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] debugger changes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 18:32:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9960.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9958.php">Kenneth Lloyd: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>In reply to:</strong> <a href="9955.php">Paul H. Hargrove: "Re: [OMPI devel] debugger changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9961.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<li><strong>Reply:</strong> <a href="9961.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 8, 2011, at 3:56 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; In theory, might a sufficiently smart compiler and linker eliminate some MPIR_* variables after optimization?  If that could potentially be true, then perhaps the volatile qualifier would prevent such a removal, which would break the existence check(s) by the debugger?  Just a thought.
</span><br>
<p>That was the experience - after thrashing for quite some time, we finally found that the volatile qualifiers fixed the problem. Hence my request that people check to see if anything is broken.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/8/2011 2:46 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This value is not even read by the debugger. It only check for it's existence in the startup process, so I guess we're safe here as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9960.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9958.php">Kenneth Lloyd: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>In reply to:</strong> <a href="9955.php">Paul H. Hargrove: "Re: [OMPI devel] debugger changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9961.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<li><strong>Reply:</strong> <a href="9961.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
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
