<?
$subject_val = "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 17 18:55:48 2015" -->
<!-- isoreceived="20150717225548" -->
<!-- sent="Fri, 17 Jul 2015 15:55:34 -0700" -->
<!-- isosent="20150717225534" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10" -->
<!-- id="A9ECDC8A-CEBE-4B1D-AF77-AE99D6256FE0_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAvDA15n+5mKDbVy+3ck6T6hX1dDqZUjDPRmex4z7ieHRD8H7w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-07-17 18:55:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17660.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>Previous message:</strong> <a href="17658.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>In reply to:</strong> <a href="17658.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17660.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>Reply:</strong> <a href="17660.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good to know - I&#226;&#128;&#153;ll add a general statement in the 1.10 NEWS for now, and identify that specific version as an example
<br>
<p>Thanks!
<br>
<p><span class="quotelev1">&gt; On Jul 17, 2015, at 2:51 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please note that I saw no problems with pgi-9,10,11,13 or 14.  Only pgi-12 was complaining.
</span><br>
<span class="quotelev1">&gt; So, I am fairly confident that pgi-12.10 (the final in the 12.x series) is broken, but that PGI is &quot;OK&quot; in general with respect to C99.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As 2.x nears readiness, it seems possible that the README will need to enumerate C compilers with broken C99 support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 17, 2015 at 2:32 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I went ahead and removed those, but this raises a rather major red flag for us. We made a definite move towards requiring C99 awhile back now - it isn&#226;&#128;&#153;t broadly reflected in the 1.10 series solely because that was branched from the 1.8 series, which predates the change. There will likely be leakage, though, as I don&#226;&#128;&#153;t believe we&#226;&#128;&#153;ve been reviewing to remove C99 code when moving things into the 1.10 branch - and so there may be other places that your test didn&#226;&#128;&#153;t build that are likewise impacted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition, C99 will be the norm starting with 2.x. Your observation would imply that we will be encountering problems with some of the PGI compilers when we begin that release process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something the 2.x RMs will have to keep in mind, I guess - and I&#226;&#128;&#153;ll have to deal with for 1.10. Sigh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 16, 2015, at 4:57 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Paul - I&#226;&#128;&#153;ll take care of it!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 16, 2015, at 4:49 PM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With pgi-12.10 I see the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGC-S-0173-Array element designator used in a struct/union context (/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc1-linux-x86_64-pgi-12.10/openmpi-1.10.0rc1/orte/mca/state/dvm/state_dvm_component.c: 60)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGC-S-0173-Array element designator used in a struct/union context (/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc1-linux-x86_64-pgi-12.10/openmpi-1.10.0rc1/orte/mca/state/dvm/state_dvm_component.c: 60)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGC/x86-64 Linux 12.10-0: compilation completed with severe errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With versions 9.0-4, 10.9, 11.9, 13.6 and 14.7 things built fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, this is most likely a PGI bug rather than a Open MPI problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOWEVER, removing the designators (they are not used in the other state components) would eliminate this for pgi-12.10 *and* for any older compiler that doesn't grok this c99 feature.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17648.php">http://www.open-mpi.org/community/lists/devel/2015/07/17648.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17648.php">http://www.open-mpi.org/community/lists/devel/2015/07/17648.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17657.php">http://www.open-mpi.org/community/lists/devel/2015/07/17657.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17657.php">http://www.open-mpi.org/community/lists/devel/2015/07/17657.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17658.php">http://www.open-mpi.org/community/lists/devel/2015/07/17658.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17659/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17660.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>Previous message:</strong> <a href="17658.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>In reply to:</strong> <a href="17658.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17660.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>Reply:</strong> <a href="17660.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
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
