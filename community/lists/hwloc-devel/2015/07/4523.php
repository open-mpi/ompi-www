<?
$subject_val = "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 17:15:42 2015" -->
<!-- isoreceived="20150728211542" -->
<!-- sent="Tue, 28 Jul 2015 23:15:40 +0200" -->
<!-- isosent="20150728211540" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler" -->
<!-- id="20150728211540.GA3467_at_type.home" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14MjkA16T8p=rn6rXUq42J6Vn4diwVCgew72U62niWyLA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-28 17:15:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4524.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4522.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4522.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4524.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4524.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Paul Hargrove, le Tue 28 Jul 2015 13:28:00 -0700, a &#233;crit :
<br>
<span class="quotelev1">&gt; I am more concerned about dropping the input constraints in favor of &quot;+a&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;+c&quot;.
</span><br>
<span class="quotelev1">&gt; For a *correct* compiler that should be equivalent, but the reason we are doing
</span><br>
<span class="quotelev1">&gt; this is because some compilers are buggy.
</span><br>
<p>I wouldn't say &quot;buggy&quot;. Usually the issue is that the register allocator
<br>
is not smart enough to get its way through (which was the original issue
<br>
of this thread).  I'd be really surprised that there'd be real bugs
<br>
here, and to me &quot;+a&quot; seems actually safer than &quot;=a&quot; : &quot;0&quot;, if any.
<br>
<p><span class="quotelev1">&gt; However, in this case I don't see why an early-clobber should make a
</span><br>
<span class="quotelev1">&gt; difference.&#160; Am I missing something?
</span><br>
<p>Right, here we don't have any input which isn't also an output already.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4524.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4522.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4522.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4524.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4524.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
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
