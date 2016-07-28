<?
$subject_val = "Re: [OMPI devel] collective problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 23:37:35 2007" -->
<!-- isoreceived="20071108043735" -->
<!-- sent="Wed, 07 Nov 2007 23:37:18 -0400" -->
<!-- isosent="20071108033718" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="C357FCAE.1065C%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47328FC7.5020307_at_myri.com" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 22:37:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2579.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2577.php">Shipman, Galen M.: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2576.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2581.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/8/07 12:25 AM, &quot;Patrick Geoffray&quot; &lt;patrick_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The real problem, as you and others have pointed out is the lack of
</span><br>
<span class="quotelev2">&gt;&gt; predictable time slices for the progress engine to do its work, when relying
</span><br>
<span class="quotelev2">&gt;&gt; on the ULP to make calls into the library...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The real, real problem is that the BTL should handle progression at
</span><br>
<span class="quotelev1">&gt; their level, specially when the buffering is due to BTL-level flow
</span><br>
<span class="quotelev1">&gt; control. When I write something into a socket, TCP will take care of
</span><br>
<span class="quotelev1">&gt; sending it eventually, for example.
</span><br>
<p>Agreed - but if it relies on the ULP to get into the progress engine, you
<br>
still have the problem of a lack of predictable time slices.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich, your clock is one hour late (we change to standard time a couple
</span><br>
<span class="quotelev1">&gt; of days ago...)
</span><br>
<p>Thanks.  This is an Entourage problem I have not yet managed to figure out
<br>
how to fix ...
<br>
<p>Rich
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2579.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2577.php">Shipman, Galen M.: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2576.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2581.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
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
