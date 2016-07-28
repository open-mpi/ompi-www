<?
$subject_val = "Re: [OMPI devel] Funny warning message";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 10:14:33 2008" -->
<!-- isoreceived="20080728141433" -->
<!-- sent="Mon, 28 Jul 2008 17:14:29 +0300" -->
<!-- isosent="20080728141429" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Funny warning message" -->
<!-- id="453d39990807280714q2f998d74y8fdea771e9d477f5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9444A51D-421D-4A25-9970-B8880752FFFD_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Funny warning message<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 10:14:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4453.php">Lenny Verkhovsky: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4451.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4447.php">Ralph Castain: "[OMPI devel] Funny warning message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4454.php">Adrian Knoth: "Re: [OMPI devel] Funny warning message"</a>
<li><strong>Reply:</strong> <a href="4454.php">Adrian Knoth: "Re: [OMPI devel] Funny warning message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems that the error felt into the helpfile.
<br>
<p>Index: ompi/mca/btl/openib/help-mpi-btl-openib.txt
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/help-mpi-btl-openib.txt (revision 19054)
<br>
+++ ompi/mca/btl/openib/help-mpi-btl-openib.txt (working copy)
<br>
@@ -497,7 +497,7 @@
<br>
&nbsp;#
<br>
&nbsp;[non optimal rd_win]
<br>
&nbsp;WARNING: rd_win specification is non optimal. For maximum performance it is
<br>
-advisable to configure rd_win smaller then (rd_num - rd_low), but currently
<br>
+advisable to configure rd_win bigger then (rd_num - rd_low), but currently
<br>
&nbsp;rd_win = %d and (rd_num - rd_low) = %d.
<br>
&nbsp;#
<br>
&nbsp;[apm without lmc]
<br>
<p>Best regards
<br>
<p>Lenny
<br>
<p>On 7/28/08, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just got this warning today while trying to test IB connections. Last I
</span><br>
<span class="quotelev1">&gt; checked, 32 was indeed smaller than 192...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: rd_win specification is non optimal. For maximum performance it is
</span><br>
<span class="quotelev1">&gt; advisable to configure rd_win smaller then (rd_num - rd_low), but currently
</span><br>
<span class="quotelev1">&gt; rd_win = 32 and (rd_num - rd_low) = 192.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4452/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4453.php">Lenny Verkhovsky: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4451.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4447.php">Ralph Castain: "[OMPI devel] Funny warning message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4454.php">Adrian Knoth: "Re: [OMPI devel] Funny warning message"</a>
<li><strong>Reply:</strong> <a href="4454.php">Adrian Knoth: "Re: [OMPI devel] Funny warning message"</a>
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
