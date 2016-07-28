<?
$subject_val = "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 19:58:00 2015" -->
<!-- isoreceived="20150716235800" -->
<!-- sent="Thu, 16 Jul 2015 16:57:55 -0700" -->
<!-- isosent="20150716235755" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10" -->
<!-- id="41451F9D-F22D-4BF2-BC62-36F1B9BBDB11_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAvDA16whjjj8Le_k4USw65V9c4exc9_O6Y3UhNCa84TGsfBLA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-16 19:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17650.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc1 available for testing"</a>
<li><strong>Previous message:</strong> <a href="17648.php">Paul Hargrove: "[OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>In reply to:</strong> <a href="17648.php">Paul Hargrove: "[OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17657.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>Reply:</strong> <a href="17657.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul - I&#226;&#128;&#153;ll take care of it!
<br>
<p><p><span class="quotelev1">&gt; On Jul 16, 2015, at 4:49 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With pgi-12.10 I see the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PGC-S-0173-Array element designator used in a struct/union context (/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc1-linux-x86_64-pgi-12.10/openmpi-1.10.0rc1/orte/mca/state/dvm/state_dvm_component.c: 60)
</span><br>
<span class="quotelev1">&gt; PGC-S-0173-Array element designator used in a struct/union context (/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc1-linux-x86_64-pgi-12.10/openmpi-1.10.0rc1/orte/mca/state/dvm/state_dvm_component.c: 60)
</span><br>
<span class="quotelev1">&gt; PGC/x86-64 Linux 12.10-0: compilation completed with severe errors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With versions 9.0-4, 10.9, 11.9, 13.6 and 14.7 things built fine.
</span><br>
<span class="quotelev1">&gt; So, this is most likely a PGI bug rather than a Open MPI problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HOWEVER, removing the designators (they are not used in the other state components) would eliminate this for pgi-12.10 *and* for any older compiler that doesn't grok this c99 feature.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17648.php">http://www.open-mpi.org/community/lists/devel/2015/07/17648.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17649/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17650.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc1 available for testing"</a>
<li><strong>Previous message:</strong> <a href="17648.php">Paul Hargrove: "[OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>In reply to:</strong> <a href="17648.php">Paul Hargrove: "[OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17657.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>Reply:</strong> <a href="17657.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
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
