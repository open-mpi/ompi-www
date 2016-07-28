<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 11:10:22 2014" -->
<!-- isoreceived="20140602151022" -->
<!-- sent="Tue, 3 Jun 2014 00:10:21 +0900" -->
<!-- isosent="20140602151021" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="CAAkFZ5urbdesE2xmSOKo+f4U5P5XpHiFz=Fa4_ajeLfM9ALO7g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E548B8D2-5832-42AC-AA9C-FA02D043EA63_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-02 11:10:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14956.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Previous message:</strong> <a href="14954.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14954.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14964.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14964.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph,
<br>
<p>i will try this tomorrow
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>On Tue, Jun 3, 2014 at 12:03 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think I have this fixed with r31928, but have no way to test it on my
</span><br>
<span class="quotelev1">&gt; machine. Please see if it works for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 2, 2014, at 7:09 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is indeed the problem - we are trying to send a message and don't
</span><br>
<span class="quotelev1">&gt; know how to get it somewhere. I'll break the loop, and then ask that you
</span><br>
<span class="quotelev1">&gt; run this again with -mca oob_base_verbose 10 so we can see the intended
</span><br>
<span class="quotelev1">&gt; recipient.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 2, 2014, at 3:55 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #7  0x00007fe8fab67ce3 in mca_oob_tcp_component_hop_unknown () from
</span><br>
<span class="quotelev1">&gt; /.../local/ompi-trunk/lib/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14954.php">http://www.open-mpi.org/community/lists/devel/2014/06/14954.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14955/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14956.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Previous message:</strong> <a href="14954.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14954.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14964.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14964.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
