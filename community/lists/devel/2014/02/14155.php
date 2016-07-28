<?
$subject_val = "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 17 10:26:04 2014" -->
<!-- isoreceived="20140217152604" -->
<!-- sent="Mon, 17 Feb 2014 07:25:22 -0800" -->
<!-- isosent="20140217152522" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings" -->
<!-- id="194157DB-CB82-4D18-964D-EC648FCE68AC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EEAD862-F429-495C-A8AD-0C2839D0E12C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-17 10:25:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14156.php">Adrian Reber: "[OMPI devel] OPAL_CRS_* meaning"</a>
<li><strong>Previous message:</strong> <a href="14154.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<li><strong>In reply to:</strong> <a href="14154.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking at your cmd line, it looks like you are trying to get diagnostic output from the mapper? If so, that cmd line is totally wrong. First, there are no &quot;OPAL_OUTPUT&quot; calls (at least, that I know of) in the orte layer as I studiously avoid them. Instead, everything is either cap or lower case opal_output_verbose. The cap version is only in the debug builds.
<br>
<p>Regardless, you are almost certainly not seeing any output because you aren't passing the right param. You need something like this:
<br>
<p>oshrun -map-by node -np 2 -mca rmaps_base_verbose 10 ./examples/ring_oshmem
<br>
<p>That will output the diagnostics from the mapper framework.
<br>
<p><p>On Feb 17, 2014, at 3:40 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; OPAL_OUTPUT is the exact equivalent of opal_output(), except that it is complied out for non-debug builds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So if you did a production build (E.g., a vpath build), OPAL_OUTPUT() will be compiled out.  Otherwise, we typically use stream 0 for debugging stuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 17, 2014, at 3:21 AM, Alex Margolin &lt;alex.margolin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm having trouble getting the OPAL_OUTPUT to print. I'm trying the following command line (with no success):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; `pwd`/osh_install/bin/oshrun --map-by node  -np 2 -mca orte_debug true -mca orte_debug_verbose 100 -mca orte_report_silent_errors true -mca orte_map_stddiag_to_stderr true ./examples/ring_oshmem
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How can I get it to print these strings? Online search was surprisingly fruitless.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Alex
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; P.S. all the mca params are available if I look at &quot;oshmem_info -a&quot;, so I suppose I can use them, but there are a lot more params so I'm not sure what I need to add here...
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="14156.php">Adrian Reber: "[OMPI devel] OPAL_CRS_* meaning"</a>
<li><strong>Previous message:</strong> <a href="14154.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<li><strong>In reply to:</strong> <a href="14154.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
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
