<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 10:09:18 2014" -->
<!-- isoreceived="20140602140918" -->
<!-- sent="Mon, 2 Jun 2014 07:09:13 -0700" -->
<!-- isosent="20140602140913" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="FD2B163B-616C-40B2-8D6B-84710FEB0DA3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tECKb_xoFQsthpP4N4RVxPZTzgL+biTv0Xfqjw8pgg2A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intermittent hangs when exiting with error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-02 10:09:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14953.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14951.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<li><strong>In reply to:</strong> <a href="14943.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14954.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14954.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is indeed the problem - we are trying to send a message and don't know how to get it somewhere. I'll break the loop, and then ask that you run this again with -mca oob_base_verbose 10 so we can see the intended recipient.
<br>
<p>On Jun 2, 2014, at 3:55 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; #7  0x00007fe8fab67ce3 in mca_oob_tcp_component_hop_unknown () from /.../local/ompi-trunk/lib/openmpi/mca_oob_tcp.so
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14952/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14953.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14951.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<li><strong>In reply to:</strong> <a href="14943.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14954.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14954.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
