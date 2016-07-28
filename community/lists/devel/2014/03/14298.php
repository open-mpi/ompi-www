<?
$subject_val = "Re: [OMPI devel] Fix compiler warnings in FT code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 13:14:28 2014" -->
<!-- isoreceived="20140305181428" -->
<!-- sent="Wed, 5 Mar 2014 19:14:27 +0100" -->
<!-- isosent="20140305181427" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fix compiler warnings in FT code" -->
<!-- id="20140305181427.GI25323_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140303164213.GW10516_at_lisas.de" -->
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
<strong>Date:</strong> 2014-03-05 13:14:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14299.php">Ralph Castain: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Previous message:</strong> <a href="14297.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14275.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14299.php">Ralph Castain: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Reply:</strong> <a href="14299.php">Ralph Castain: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh, please have a look at:
<br>
<p><a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=5d5edafa36605ca7650eafa7f99fa1985641e488">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=5d5edafa36605ca7650eafa7f99fa1985641e488</a>
<br>
<p>I moved the parameter initialization to sstore_stage_register() and can
<br>
now see that the variables are correctly used:
<br>
<p>$ orterun --mca sstore_stage_verbose 30
<br>
[...]
<br>
[dcbz:02880] sstore:stage: open()
<br>
[dcbz:02880] sstore:stage: open: priority   = 10
<br>
[dcbz:02880] sstore:stage: open: verbosity  = 30
<br>
[dcbz:02880] sstore:stage: open: Local snapshot directory = /tmp
<br>
[dcbz:02880] sstore:stage: open: Is Global dir. shared    = False
<br>
[dcbz:02880] sstore:stage: open: Node Local Caching       = Disabled
<br>
[dcbz:02880] sstore:stage: open: Compression              = Disabled
<br>
[dcbz:02880] sstore:stage: open: Compression Delay        = 0
<br>
[dcbz:02880] sstore:stage: open: Skip FileM (Debug Only)  = False
<br>
<p><p><p>On Mon, Mar 03, 2014 at 05:42:13PM +0100, Adrian Reber wrote:
<br>
<span class="quotelev1">&gt; I will prepare a patch that moves the parameter initialization somewhere else
</span><br>
<span class="quotelev1">&gt; and will not remove it. Do you think the other parts of the patch can be
</span><br>
<span class="quotelev1">&gt; applied (without sstore_stage_select() removal)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 03, 2014 at 10:07:36AM -0600, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt; &gt; It should probably be moved to the component initialization of the sstore
</span><br>
<span class="quotelev2">&gt; &gt; stage component since those parameters are how the user controls where to
</span><br>
<span class="quotelev2">&gt; &gt; store those files. I think there is an MCA registration function that is
</span><br>
<span class="quotelev2">&gt; &gt; called after component initialization - that would be the best spot, but I
</span><br>
<span class="quotelev2">&gt; &gt; do not remember how to set it up at the moment.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Mar 3, 2014 at 7:25 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I removed a complete function because it was not used:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../../../../orte/mca/sstore/stage/sstore_stage_component.c: At top
</span><br>
<span class="quotelev3">&gt; &gt; &gt; level:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../../../../orte/mca/sstore/stage/sstore_stage_component.c:77:12:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; warning: 'sstore_stage_select' defined but not used [-Wunused-function]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  static int sstore_stage_select (void)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; And grepping through the code it seems the compiler is right.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Should we keep the code and maybe just #ifdef it out.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mon, Mar 03, 2014 at 07:17:19AM -0600, Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; It looks like you removed a number of sstore stage MCA parameters. Did
</span><br>
<span class="quotelev3">&gt; &gt; &gt; they
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; move somewhere else? or do you have a different way to set those
</span><br>
<span class="quotelev3">&gt; &gt; &gt; parameters?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Other than that it looks good to me.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Mon, Mar 3, 2014 at 5:29 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I have a simple patch which fixes the remaining compiler warnings when
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; running with '--with-ft':
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=4dee703a0a2e64972b0c35b7693c11a09f1fbe5f">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=4dee703a0a2e64972b0c35b7693c11a09f1fbe5f</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Does anybody see any problems with this patch?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;                 Adrian
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p><pre>
-- 
Adrian Reber &lt;adrian_at_[hidden]&gt;            <a href="http://lisas.de/~adrian/">http://lisas.de/~adrian/</a>
guru, n.:
	A person in T-shirt and sandals who took an elevator ride with
	a senior vice-president and is ultimately responsible for the
	phone call you are about to receive from your boss.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14299.php">Ralph Castain: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Previous message:</strong> <a href="14297.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14275.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14299.php">Ralph Castain: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Reply:</strong> <a href="14299.php">Ralph Castain: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
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
