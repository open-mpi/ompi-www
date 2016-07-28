<?
$subject_val = "Re: [OMPI devel] Fix compiler warnings in FT code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 13:24:08 2014" -->
<!-- isoreceived="20140305182408" -->
<!-- sent="Wed, 5 Mar 2014 10:24:07 -0800" -->
<!-- isosent="20140305182407" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fix compiler warnings in FT code" -->
<!-- id="CAMD57oerZvCmvq7kVt4fgODrm9ke29iOA_2L2hXeufmy0NZQbQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140305181427.GI25323_at_lisas.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-05 13:24:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14300.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Previous message:</strong> <a href="14298.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>In reply to:</strong> <a href="14298.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14300.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Reply:</strong> <a href="14300.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nicely done - thanks!
<br>
<p><p><p>On Wed, Mar 5, 2014 at 10:14 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Josh, please have a look at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=5d5edafa36605ca7650eafa7f99fa1985641e488">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=5d5edafa36605ca7650eafa7f99fa1985641e488</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I moved the parameter initialization to sstore_stage_register() and can
</span><br>
<span class="quotelev1">&gt; now see that the variables are correctly used:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ orterun --mca sstore_stage_verbose 30
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; [dcbz:02880] sstore:stage: open()
</span><br>
<span class="quotelev1">&gt; [dcbz:02880] sstore:stage: open: priority   = 10
</span><br>
<span class="quotelev1">&gt; [dcbz:02880] sstore:stage: open: verbosity  = 30
</span><br>
<span class="quotelev1">&gt; [dcbz:02880] sstore:stage: open: Local snapshot directory = /tmp
</span><br>
<span class="quotelev1">&gt; [dcbz:02880] sstore:stage: open: Is Global dir. shared    = False
</span><br>
<span class="quotelev1">&gt; [dcbz:02880] sstore:stage: open: Node Local Caching       = Disabled
</span><br>
<span class="quotelev1">&gt; [dcbz:02880] sstore:stage: open: Compression              = Disabled
</span><br>
<span class="quotelev1">&gt; [dcbz:02880] sstore:stage: open: Compression Delay        = 0
</span><br>
<span class="quotelev1">&gt; [dcbz:02880] sstore:stage: open: Skip FileM (Debug Only)  = False
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 03, 2014 at 05:42:13PM +0100, Adrian Reber wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I will prepare a patch that moves the parameter initialization somewhere
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev2">&gt; &gt; and will not remove it. Do you think the other parts of the patch can be
</span><br>
<span class="quotelev2">&gt; &gt; applied (without sstore_stage_select() removal)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Mar 03, 2014 at 10:07:36AM -0600, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It should probably be moved to the component initialization of the
</span><br>
<span class="quotelev1">&gt; sstore
</span><br>
<span class="quotelev3">&gt; &gt; &gt; stage component since those parameters are how the user controls where
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; store those files. I think there is an MCA registration function that
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; called after component initialization - that would be the best spot,
</span><br>
<span class="quotelev1">&gt; but I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; do not remember how to set it up at the moment.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mon, Mar 3, 2014 at 7:25 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I removed a complete function because it was not used:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../../../../orte/mca/sstore/stage/sstore_stage_component.c: At top
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; level:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../../../../orte/mca/sstore/stage/sstore_stage_component.c:77:12:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; warning: 'sstore_stage_select' defined but not used
</span><br>
<span class="quotelev1">&gt; [-Wunused-function]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  static int sstore_stage_select (void)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; And grepping through the code it seems the compiler is right.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Should we keep the code and maybe just #ifdef it out.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Mon, Mar 03, 2014 at 07:17:19AM -0600, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; It looks like you removed a number of sstore stage MCA parameters.
</span><br>
<span class="quotelev1">&gt; Did
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; they
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; move somewhere else? or do you have a different way to set those
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; parameters?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Other than that it looks good to me.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; On Mon, Mar 3, 2014 at 5:29 AM, Adrian Reber &lt;adrian_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; I have a simple patch which fixes the remaining compiler
</span><br>
<span class="quotelev1">&gt; warnings when
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; running with '--with-ft':
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=4dee703a0a2e64972b0c35b7693c11a09f1fbe5f">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=4dee703a0a2e64972b0c35b7693c11a09f1fbe5f</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Does anybody see any problems with this patch?
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;                 Adrian
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Adrian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Adrian Reber &lt;adrian_at_[hidden]&gt;            <a href="http://lisas.de/~adrian/">http://lisas.de/~adrian/</a>
</span><br>
<span class="quotelev1">&gt; guru, n.:
</span><br>
<span class="quotelev1">&gt;         A person in T-shirt and sandals who took an elevator ride with
</span><br>
<span class="quotelev1">&gt;         a senior vice-president and is ultimately responsible for the
</span><br>
<span class="quotelev1">&gt;         phone call you are about to receive from your boss.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14298.php">http://www.open-mpi.org/community/lists/devel/2014/03/14298.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14299/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14300.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Previous message:</strong> <a href="14298.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>In reply to:</strong> <a href="14298.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14300.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Reply:</strong> <a href="14300.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
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
