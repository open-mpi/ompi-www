<?
$subject_val = "Re: [hwloc-users] q about mem binding API usage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 31 11:28:29 2012" -->
<!-- isoreceived="20120531152829" -->
<!-- sent="Thu, 31 May 2012 17:28:24 +0200" -->
<!-- isosent="20120531152824" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] q about mem binding API usage" -->
<!-- id="20120531152824.GA3357_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAM-qmzaV5yRM075H+6bqtXmU9QnLyxXqDa3b4xVX70E3M6M0xw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] q about mem binding API usage<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-31 11:28:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0649.php">Vlad: "Re: [hwloc-users] q about mem binding API usage"</a>
<li><strong>Previous message:</strong> <a href="0647.php">Vlad: "[hwloc-users] q about mem binding API usage"</a>
<li><strong>In reply to:</strong> <a href="0647.php">Vlad: "[hwloc-users] q about mem binding API usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0649.php">Vlad: "Re: [hwloc-users] q about mem binding API usage"</a>
<li><strong>Reply:</strong> <a href="0649.php">Vlad: "Re: [hwloc-users] q about mem binding API usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Vlad, le Thu 31 May 2012 16:49:00 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; This might be a naive question, but I'd like to clarify nonetheless: to provide
</span><br>
<span class="quotelev1">&gt; any sort of affinity guarantees, hwloc mem binding APIs assume that any memory
</span><br>
<span class="quotelev1">&gt; allocation is done exclusively via hwloc_alloc_membind() and friends?&#160; And if I
</span><br>
<span class="quotelev1">&gt; use &quot;raw&quot; calls to malloc() or posix_memalign() etc then any ensuing affinity
</span><br>
<span class="quotelev1">&gt; will be incidental at best?
</span><br>
<p>It seems the documentation lacks explanation about that indeed. I have
<br>
added the following text:
<br>
<p>&nbsp;&nbsp;Memory binding can be done three ways:
<br>
&nbsp;
<br>
&nbsp;&nbsp;- explicit memory allocation thanks to hwloc_alloc_membind and friends: the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;binding will have effect on the memory allocated by these functions.
<br>
&nbsp;&nbsp;- implicit memory binding through binding policy: hwloc_set_membind and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;friends only define the current policy of the process, which will be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;applied to the subsequent calls to malloc() and friends.
<br>
&nbsp;&nbsp;- migration of existing memory ranges, thanks to hwloc_set_area_membind()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and friends, which move already-allocated data.
<br>
<p>Does it answer your question? (i.e. the first way doesn't have effect on
<br>
malloc, while the second way does)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0649.php">Vlad: "Re: [hwloc-users] q about mem binding API usage"</a>
<li><strong>Previous message:</strong> <a href="0647.php">Vlad: "[hwloc-users] q about mem binding API usage"</a>
<li><strong>In reply to:</strong> <a href="0647.php">Vlad: "[hwloc-users] q about mem binding API usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0649.php">Vlad: "Re: [hwloc-users] q about mem binding API usage"</a>
<li><strong>Reply:</strong> <a href="0649.php">Vlad: "Re: [hwloc-users] q about mem binding API usage"</a>
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
