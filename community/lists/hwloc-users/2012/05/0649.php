<?
$subject_val = "Re: [hwloc-users] q about mem binding API usage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 31 12:07:05 2012" -->
<!-- isoreceived="20120531160705" -->
<!-- sent="Thu, 31 May 2012 12:07:00 -0400" -->
<!-- isosent="20120531160700" -->
<!-- name="Vlad" -->
<!-- email="vlad_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] q about mem binding API usage" -->
<!-- id="CAM-qmzbAYD+yPxsrks2wsYJ1A2sC8C4y9f=sAYBMc3_KXjEOGg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120531152824.GA3357_at_type.bordeaux.inria.fr" -->
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
<strong>From:</strong> Vlad (<em>vlad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-31 12:07:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-users] q about mem binding API usage"</a>
<li><strong>Previous message:</strong> <a href="0648.php">Samuel Thibault: "Re: [hwloc-users] q about mem binding API usage"</a>
<li><strong>In reply to:</strong> <a href="0648.php">Samuel Thibault: "Re: [hwloc-users] q about mem binding API usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-users] q about mem binding API usage"</a>
<li><strong>Reply:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-users] q about mem binding API usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel,
<br>
<p>Thanks a lot ! This is exactly the kind of clarification I've been looking
<br>
for and it's great to know it's been added to the official docs. hwloc is a
<br>
pleasure to work with.
<br>
<p>On Thu, May 31, 2012 at 11:28 AM, Samuel Thibault
<br>
&lt;samuel.thibault_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vlad, le Thu 31 May 2012 16:49:00 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; This might be a naive question, but I'd like to clarify nonetheless: to
</span><br>
<span class="quotelev1">&gt; provide
</span><br>
<span class="quotelev2">&gt; &gt; any sort of affinity guarantees, hwloc mem binding APIs assume that any
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev2">&gt; &gt; allocation is done exclusively via hwloc_alloc_membind() and friends?
</span><br>
<span class="quotelev1">&gt; And if I
</span><br>
<span class="quotelev2">&gt; &gt; use &quot;raw&quot; calls to malloc() or posix_memalign() etc then any ensuing
</span><br>
<span class="quotelev1">&gt; affinity
</span><br>
<span class="quotelev2">&gt; &gt; will be incidental at best?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems the documentation lacks explanation about that indeed. I have
</span><br>
<span class="quotelev1">&gt; added the following text:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Memory binding can be done three ways:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - explicit memory allocation thanks to hwloc_alloc_membind and friends:
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt;    binding will have effect on the memory allocated by these functions.
</span><br>
<span class="quotelev1">&gt;  - implicit memory binding through binding policy: hwloc_set_membind and
</span><br>
<span class="quotelev1">&gt;    friends only define the current policy of the process, which will be
</span><br>
<span class="quotelev1">&gt;    applied to the subsequent calls to malloc() and friends.
</span><br>
<span class="quotelev1">&gt;  - migration of existing memory ranges, thanks to hwloc_set_area_membind()
</span><br>
<span class="quotelev1">&gt;    and friends, which move already-allocated data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does it answer your question? (i.e. the first way doesn't have effect on
</span><br>
<span class="quotelev1">&gt; malloc, while the second way does)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0649/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-users] q about mem binding API usage"</a>
<li><strong>Previous message:</strong> <a href="0648.php">Samuel Thibault: "Re: [hwloc-users] q about mem binding API usage"</a>
<li><strong>In reply to:</strong> <a href="0648.php">Samuel Thibault: "Re: [hwloc-users] q about mem binding API usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-users] q about mem binding API usage"</a>
<li><strong>Reply:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-users] q about mem binding API usage"</a>
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
