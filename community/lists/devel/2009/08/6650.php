<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 10:51:53 2009" -->
<!-- isoreceived="20090817145153" -->
<!-- sent="Mon, 17 Aug 2009 07:52:32 -0700" -->
<!-- isosent="20090817145232" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="4A896EB0.6080702_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2C16C3AD-EFBA-4813-A66D-D189DEA6E495_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heads up on new feature to 1.3.4<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 10:52:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6651.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6649.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6647.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6652.php">Kenneth Lloyd: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 16, 2009, at 11:02 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; UNLESS you have a threaded application, in which case -any- binding  
</span><br>
<span class="quotelev2">&gt;&gt; can be highly detrimental to performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not quite sure I understand this statement.  Binding is not  
</span><br>
<span class="quotelev1">&gt; inherently contrary to multi-threaded applications.
</span><br>
<p>I think the concern is that if a process binds to a particular core and 
<br>
all threads inherit the same binding, then all threads will bind to the 
<br>
same core, inhibiting multithreading speedups (at best).
<br>
<p>If you bind to sockets rather than specific cores, even if multiple 
<br>
threads inherit the same binding, the contention will be less.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6651.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6649.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6647.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6652.php">Kenneth Lloyd: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
