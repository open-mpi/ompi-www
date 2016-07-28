<?
$subject_val = "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 18:18:18 2010" -->
<!-- isoreceived="20100311231818" -->
<!-- sent="Fri, 12 Mar 2010 00:18:12 +0100" -->
<!-- isosent="20100311231812" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines" -->
<!-- id="36ca99e91003111518tc9ab422pc1ee818ad9586949_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="36ca99e91003111514w316fa62cq767ba1ee5d45f_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-03-11 18:18:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0737.php">Jeff Squyres: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mountslines"</a>
<li><strong>Previous message:</strong> <a href="0735.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>In reply to:</strong> <a href="0735.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0738.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Reply:</strong> <a href="0738.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 12, 2010 at 00:14, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Fri, Mar 12, 2010 at 00:03, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you actually test this ? The way I am reading the manpage is that
</span><br>
<span class="quotelev2">&gt;&gt; you need to open with setmntent and close with endmntent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have read the man page, but only about getmntent, and than read the
</span><br>
<span class="quotelev1">&gt; source code for getmntent from glibc.
</span><br>
<span class="quotelev1">&gt; So yes, it is better to use setmntent/endmntent to be conform.
</span><br>
<p>Ups, what about the fsroot_fd now? I think this has something to do if
<br>
/proc and /sys are not mounted at the root, for example in test mode,
<br>
right?
<br>
<p>Bert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0737.php">Jeff Squyres: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mountslines"</a>
<li><strong>Previous message:</strong> <a href="0735.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>In reply to:</strong> <a href="0735.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0738.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Reply:</strong> <a href="0738.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
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
