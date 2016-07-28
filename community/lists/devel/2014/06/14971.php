<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 10:50:30 2014" -->
<!-- isoreceived="20140604145030" -->
<!-- sent="Wed, 4 Jun 2014 07:50:26 -0700" -->
<!-- isosent="20140604145026" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="773F8C1D-273C-41A3-AB92-0DECE238669C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5smANUoHqdp+btaguzjSuaGQXq31rVmOww26Mp8As=v0w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-06-04 10:50:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14972.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14970.php">Artem Polyakov: "[OMPI devel] OMPI timing fix"</a>
<li><strong>In reply to:</strong> <a href="14969.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14972.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14972.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah crud - I see what's going on. This is an issue of a message coming in on one interface that needs to get transferred to another one for relay. Looks like that mechanism is broken, which is causing us to issue another show_help, which gets caught in the same loop again.
<br>
<p>I'll work on it - may take a day or two to really fix. Only impacts systems with mismatched interfaces, which is why we aren't generally seeing it.
<br>
<p><p>On Jun 3, 2014, at 9:31 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the application still hangs, i attached new logs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on slurm0, if i /sbin/ifconfig eth0:1 down
</span><br>
<span class="quotelev1">&gt; then the application does not hang any more
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 4, 2014 at 12:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I appear to have this fixed now - please give the current trunk (r31949 or above) a spin to see if I got it for you too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;abort.oob.2.log.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14969.php">http://www.open-mpi.org/community/lists/devel/2014/06/14969.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14971/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14972.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14970.php">Artem Polyakov: "[OMPI devel] OMPI timing fix"</a>
<li><strong>In reply to:</strong> <a href="14969.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14972.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14972.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
