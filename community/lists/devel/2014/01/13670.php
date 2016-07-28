<?
$subject_val = "Re: [OMPI devel] MX and PSM in 1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 23:56:08 2014" -->
<!-- isoreceived="20140110045608" -->
<!-- sent="Thu, 9 Jan 2014 20:55:58 -0800" -->
<!-- isosent="20140110045558" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MX and PSM in 1.7.4" -->
<!-- id="0E620E51-202B-4600-9523-21660C5B5479_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA140mwn7W39UfEZyriVW1nBrHJQ-R+xwJ1PgNP_yPufx4Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MX and PSM in 1.7.4<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 23:55:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13671.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Previous message:</strong> <a href="13669.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>In reply to:</strong> <a href="13661.php">Paul Hargrove: "[OMPI devel] MX and PSM in 1.7.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So far as I know, yes - still being tested and used. Glad to hear you could validate the QLogic stuff - I don't know about Myrinet, but imagine someone will shout if it has an issue
<br>
<p><p><p>On Jan 9, 2014, at 5:52 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is anybody still testing MX and PSM?
</span><br>
<span class="quotelev1">&gt; They are both still present in ompi/mca/mtl/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have access to a system w/ QLogic HCAs w/ PSM and have verified that I can:
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl sm,self -np 2 -host n15,n16 -mca mtl psm examples/ring_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an x86 (32-bit) system w/ MX headers and libs that I have successfully configured and built on.
</span><br>
<span class="quotelev1">&gt; However, I no longer have Myrinet h/w (well, there is some in a box in the machine room but my dedication to Open MPI rc testing doesn't extend far enough to install the h/w).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13670/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13671.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Previous message:</strong> <a href="13669.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>In reply to:</strong> <a href="13661.php">Paul Hargrove: "[OMPI devel] MX and PSM in 1.7.4"</a>
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
