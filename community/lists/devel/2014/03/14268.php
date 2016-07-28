<?
$subject_val = "Re: [OMPI devel] Fix compiler warnings in FT code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 08:25:43 2014" -->
<!-- isoreceived="20140303132543" -->
<!-- sent="Mon, 3 Mar 2014 14:25:43 +0100" -->
<!-- isosent="20140303132543" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fix compiler warnings in FT code" -->
<!-- id="20140303132543.GU10516_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjEkEQLWggBHYjaTE7q9UYyhiirZ6Lc6LTuYo4B38PHtkEA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fix compiler warnings in FT code<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 08:25:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14269.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30905 - in trunk/ompi/mca/btl/openib:	. connect"</a>
<li><strong>Previous message:</strong> <a href="14267.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>In reply to:</strong> <a href="14267.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14274.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Reply:</strong> <a href="14274.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I removed a complete function because it was not used:
<br>
<p>../../../../../orte/mca/sstore/stage/sstore_stage_component.c: At top level:
<br>
../../../../../orte/mca/sstore/stage/sstore_stage_component.c:77:12: warning: 'sstore_stage_select' defined but not used [-Wunused-function]
<br>
&nbsp;static int sstore_stage_select (void)
<br>
<p>And grepping through the code it seems the compiler is right.
<br>
<p>Should we keep the code and maybe just #ifdef it out.
<br>
<p>On Mon, Mar 03, 2014 at 07:17:19AM -0600, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; It looks like you removed a number of sstore stage MCA parameters. Did they
</span><br>
<span class="quotelev1">&gt; move somewhere else? or do you have a different way to set those parameters?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other than that it looks good to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 3, 2014 at 5:29 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have a simple patch which fixes the remaining compiler warnings when
</span><br>
<span class="quotelev2">&gt; &gt; running with '--with-ft':
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=4dee703a0a2e64972b0c35b7693c11a09f1fbe5f">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=4dee703a0a2e64972b0c35b7693c11a09f1fbe5f</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does anybody see any problems with this patch?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 Adrian
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14269.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30905 - in trunk/ompi/mca/btl/openib:	. connect"</a>
<li><strong>Previous message:</strong> <a href="14267.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>In reply to:</strong> <a href="14267.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14274.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Reply:</strong> <a href="14274.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
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
