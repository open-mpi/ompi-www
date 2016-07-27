<?
$subject_val = "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 18:15:03 2010" -->
<!-- isoreceived="20100311231503" -->
<!-- sent="Fri, 12 Mar 2010 00:14:58 +0100" -->
<!-- isosent="20100311231458" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines" -->
<!-- id="36ca99e91003111514w316fa62cq767ba1ee5d45f_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4B9976C9.1070207_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 18:14:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0736.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Previous message:</strong> <a href="0734.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>In reply to:</strong> <a href="0733.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0736.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Reply:</strong> <a href="0736.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Reply:</strong> <a href="0737.php">Jeff Squyres: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mountslines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 12, 2010 at 00:03, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you actually test this ? The way I am reading the manpage is that
</span><br>
<span class="quotelev1">&gt; you need to open with setmntent and close with endmntent.
</span><br>
<p>I have read the man page, but only about getmntent, and than read the
<br>
source code for getmntent from glibc.
<br>
So yes, it is better to use setmntent/endmntent to be conform.
<br>
<p><span class="quotelev1">&gt; Also, isn't getmntent (without _r) enough here?
</span><br>
<p>I do not know the policy from this library regarding thread safety, so
<br>
I decided to be on the safe side here.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And finally, it seems to me that hasmntopt is probably the best way to
</span><br>
<span class="quotelev1">&gt; look for the 'cpuset' option.
</span><br>
<p>Yes, thats perfect. Didn't read this neither.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot for the patch anyway, we should probably use something like
</span><br>
<span class="quotelev1">&gt; this instead of my manual parsing code. I see some potential configure
</span><br>
<span class="quotelev1">&gt; problems on HP-UX in Google, I might put the configure checks inside &quot;if
</span><br>
<span class="quotelev1">&gt; Linux&quot;. We might even not need any configure checks since only Linux
</span><br>
<span class="quotelev1">&gt; uses all this so far. I'll play with all this tomorrow and probably
</span><br>
<span class="quotelev1">&gt; commit something.
</span><br>
<p>Thanks. I can post an updated patch which uses the input from this thread.
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0736.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Previous message:</strong> <a href="0734.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>In reply to:</strong> <a href="0733.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0736.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Reply:</strong> <a href="0736.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Reply:</strong> <a href="0737.php">Jeff Squyres: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mountslines"</a>
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
