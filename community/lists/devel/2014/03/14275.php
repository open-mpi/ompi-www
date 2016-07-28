<?
$subject_val = "Re: [OMPI devel] Fix compiler warnings in FT code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 11:42:14 2014" -->
<!-- isoreceived="20140303164214" -->
<!-- sent="Mon, 3 Mar 2014 17:42:13 +0100" -->
<!-- isosent="20140303164213" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fix compiler warnings in FT code" -->
<!-- id="20140303164213.GW10516_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjEk6-Xc=jg8cDuF6Dn6=i2nAKoa0-8Y=72qRc9SvR-LAAg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-03-03 11:42:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14276.php">Hjelm, Nathan T: "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<li><strong>Previous message:</strong> <a href="14274.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>In reply to:</strong> <a href="14274.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14281.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Reply:</strong> <a href="14281.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Reply:</strong> <a href="14298.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will prepare a patch that moves the parameter initialization somewhere else
<br>
and will not remove it. Do you think the other parts of the patch can be
<br>
applied (without sstore_stage_select() removal)?
<br>
<p><p>On Mon, Mar 03, 2014 at 10:07:36AM -0600, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; It should probably be moved to the component initialization of the sstore
</span><br>
<span class="quotelev1">&gt; stage component since those parameters are how the user controls where to
</span><br>
<span class="quotelev1">&gt; store those files. I think there is an MCA registration function that is
</span><br>
<span class="quotelev1">&gt; called after component initialization - that would be the best spot, but I
</span><br>
<span class="quotelev1">&gt; do not remember how to set it up at the moment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 3, 2014 at 7:25 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I removed a complete function because it was not used:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../orte/mca/sstore/stage/sstore_stage_component.c: At top
</span><br>
<span class="quotelev2">&gt; &gt; level:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../orte/mca/sstore/stage/sstore_stage_component.c:77:12:
</span><br>
<span class="quotelev2">&gt; &gt; warning: 'sstore_stage_select' defined but not used [-Wunused-function]
</span><br>
<span class="quotelev2">&gt; &gt;  static int sstore_stage_select (void)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And grepping through the code it seems the compiler is right.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Should we keep the code and maybe just #ifdef it out.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Mar 03, 2014 at 07:17:19AM -0600, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It looks like you removed a number of sstore stage MCA parameters. Did
</span><br>
<span class="quotelev2">&gt; &gt; they
</span><br>
<span class="quotelev3">&gt; &gt; &gt; move somewhere else? or do you have a different way to set those
</span><br>
<span class="quotelev2">&gt; &gt; parameters?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Other than that it looks good to me.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mon, Mar 3, 2014 at 5:29 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I have a simple patch which fixes the remaining compiler warnings when
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; running with '--with-ft':
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=4dee703a0a2e64972b0c35b7693c11a09f1fbe5f">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=4dee703a0a2e64972b0c35b7693c11a09f1fbe5f</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Does anybody see any problems with this patch?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                 Adrian
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="14276.php">Hjelm, Nathan T: "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<li><strong>Previous message:</strong> <a href="14274.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>In reply to:</strong> <a href="14274.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14281.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Reply:</strong> <a href="14281.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Reply:</strong> <a href="14298.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
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
