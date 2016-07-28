<?
$subject_val = "Re: [OMPI devel] Cross-job disconnect is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 16:59:22 2015" -->
<!-- isoreceived="20150908205922" -->
<!-- sent="Tue, 8 Sep 2015 16:59:20 -0400" -->
<!-- isosent="20150908205920" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Cross-job disconnect is broken" -->
<!-- id="CAMJJpkVOkpaOGRB=sKCr6pGU6cpPJurqWTRm4D05ZJJm3u=bcQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7CE8733F-24F5-46E6-9371-99CDB4794FCD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Cross-job disconnect is broken<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-08 16:59:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17985.php">Ralph Castain: "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>Previous message:</strong> <a href="17983.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>In reply to:</strong> <a href="17983.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17985.php">Ralph Castain: "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>Reply:</strong> <a href="17985.php">Ralph Castain: "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>Reply:</strong> <a href="17986.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why would anyone use connect/accept (or join) between processes on the same
<br>
job? The only environment where such a functionality makes sense is where
<br>
disjoint applications (think computing part and the visualization part) are
<br>
able to connect together. There are application that use such a model, but
<br>
I bet they don't use OMPI.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Tue, Sep 8, 2015 at 4:50 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 7, 2015, at 5:07 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * two jobs started by the same mpirun - supported today by ORTE
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * two jobs started by different mpiruns - we used to support, but is
</span><br>
<span class="quotelev1">&gt; broken in grpcomm/barrier
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * two direct-launched jobs  - never supported
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * one direct-launched job and one started by mpirun  - never supported
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Given lack of use out there, I don&#226;&#128;&#153;t see a reason to hold release of the
</span><br>
<span class="quotelev1">&gt; 2.x series over this issue. Will keep you posted on progress towards a
</span><br>
<span class="quotelev1">&gt; resolution
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, I think it *would* be useful to be able to connect/accept
</span><br>
<span class="quotelev1">&gt; between &quot;two jobs started by different mpiruns.&quot;  It's a bit of a
</span><br>
<span class="quotelev1">&gt; chicken-n-egg problem: no one does it because no one supports it, and vice
</span><br>
<span class="quotelev1">&gt; versa.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree it's low in the priority list, but I'd put the &quot;two jobs started
</span><br>
<span class="quotelev1">&gt; by different mpiruns&quot; in the &quot;nice to have&quot; category.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17983.php">http://www.open-mpi.org/community/lists/devel/2015/09/17983.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17984/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17985.php">Ralph Castain: "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>Previous message:</strong> <a href="17983.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>In reply to:</strong> <a href="17983.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17985.php">Ralph Castain: "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>Reply:</strong> <a href="17985.php">Ralph Castain: "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>Reply:</strong> <a href="17986.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Cross-job disconnect is broken"</a>
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
