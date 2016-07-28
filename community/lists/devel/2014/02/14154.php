<?
$subject_val = "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 17 06:40:59 2014" -->
<!-- isoreceived="20140217114059" -->
<!-- sent="Mon, 17 Feb 2014 11:40:56 +0000" -->
<!-- isosent="20140217114056" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings" -->
<!-- id="4EEAD862-F429-495C-A8AD-0C2839D0E12C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAoBEv=Sgd7JEfCKP=K2qKAAGM7381aJxMVFXXQ14_pvzf8pAg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-17 06:40:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14155.php">Ralph Castain: "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<li><strong>Previous message:</strong> <a href="14153.php">Alex Margolin: "[OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<li><strong>In reply to:</strong> <a href="14153.php">Alex Margolin: "[OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14155.php">Ralph Castain: "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<li><strong>Reply:</strong> <a href="14155.php">Ralph Castain: "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OPAL_OUTPUT is the exact equivalent of opal_output(), except that it is complied out for non-debug builds.
<br>
<p>So if you did a production build (E.g., a vpath build), OPAL_OUTPUT() will be compiled out.  Otherwise, we typically use stream 0 for debugging stuff.
<br>
<p>On Feb 17, 2014, at 3:21 AM, Alex Margolin &lt;alex.margolin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having trouble getting the OPAL_OUTPUT to print. I'm trying the following command line (with no success):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; `pwd`/osh_install/bin/oshrun --map-by node  -np 2 -mca orte_debug true -mca orte_debug_verbose 100 -mca orte_report_silent_errors true -mca orte_map_stddiag_to_stderr true ./examples/ring_oshmem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I get it to print these strings? Online search was surprisingly fruitless.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. all the mca params are available if I look at &quot;oshmem_info -a&quot;, so I suppose I can use them, but there are a lot more params so I'm not sure what I need to add here...
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14155.php">Ralph Castain: "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<li><strong>Previous message:</strong> <a href="14153.php">Alex Margolin: "[OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<li><strong>In reply to:</strong> <a href="14153.php">Alex Margolin: "[OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14155.php">Ralph Castain: "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<li><strong>Reply:</strong> <a href="14155.php">Ralph Castain: "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
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
