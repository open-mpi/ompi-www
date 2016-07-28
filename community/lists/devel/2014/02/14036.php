<?
$subject_val = "Re: [OMPI devel] Bcol/mcol violations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 16:35:25 2014" -->
<!-- isoreceived="20140207213525" -->
<!-- sent="Fri, 7 Feb 2014 13:34:05 -0800" -->
<!-- isosent="20140207213405" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bcol/mcol violations" -->
<!-- id="55850392-2CCA-4C6E-8640-F5CFE57CFDB3_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="9714AFB0-29B3-4533-9D36-A3224D760702_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bcol/mcol violations<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 16:34:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14037.php">Adrian Reber: "[OMPI devel] new CRS component added (criu)"</a>
<li><strong>Previous message:</strong> <a href="14035.php">Shamis, Pavel: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>In reply to:</strong> <a href="14035.php">Shamis, Pavel: "Re: [OMPI devel] Bcol/mcol violations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you guys....deeply appreciate your quick resolution to this problem
<br>
<p><p>On Feb 7, 2014, at 10:10 AM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Exchange is evil&#133;.
</span><br>
<span class="quotelev1">&gt; Attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; P
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;p4.patch.gz&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 7, 2014, at 12:41 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you gzip the patch. The local exchange server has a habit of
</span><br>
<span class="quotelev2">&gt;&gt; converting LF to CRLF.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Feb 07, 2014 at 12:14:02PM -0500, Shamis, Pavel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you please give a try to the attached hot-fix.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It unrolls most of the spaghetti, except the iboffload component (which is anyway disabled).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry for the mess.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pasha
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 7, 2014, at 10:52 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&lt;mailto:hjelmn_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Feb 07, 2014 at 07:46:03AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The issue in 1.7 is all the cross-integration, which means we violate our normal behavior when it comes to no-building and user-directed component selection. Jeff and I just discussed how this could be resolved using the PML-BTL model, but (a) that is not what we have in 1.7, and (b) it isn't clear to me how hard it will be to do, and when it might be ready.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, we don't have the problem of incorrect results that we do in the trunk, so we do have a little more latitude.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the situation with respect to 1.7 is pretty clear: if we can get a PML-BTL model in place within the next week, then we can let things continue as-is. If we can't, then we remove the coll/ml component and the bcol framework from 1.7, leaving the door open to reinstatement whenever the code is actually ready.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should be ready today. The use of that coll/ml structure is unnecessary
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at this time. I am removing it in bcol right now. In the future we will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; put in a better fix but this should work for 1.7.x/1.8.x.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ATT00001&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ATT00001&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14036/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14037.php">Adrian Reber: "[OMPI devel] new CRS component added (criu)"</a>
<li><strong>Previous message:</strong> <a href="14035.php">Shamis, Pavel: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>In reply to:</strong> <a href="14035.php">Shamis, Pavel: "Re: [OMPI devel] Bcol/mcol violations"</a>
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
