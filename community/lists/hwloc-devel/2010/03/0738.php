<?
$subject_val = "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 18:37:14 2010" -->
<!-- isoreceived="20100311233714" -->
<!-- sent="Fri, 12 Mar 2010 00:37:09 +0100" -->
<!-- isosent="20100311233709" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines" -->
<!-- id="36ca99e91003111537y10d6daf4ndec4c2ba05379549_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="36ca99e91003111518tc9ab422pc1ee818ad9586949_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-03-11 18:37:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0739.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mountslines"</a>
<li><strong>Previous message:</strong> <a href="0737.php">Jeff Squyres: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mountslines"</a>
<li><strong>In reply to:</strong> <a href="0736.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0745.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Reply:</strong> <a href="0745.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 12, 2010 at 00:18, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Fri, Mar 12, 2010 at 00:14, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 12, 2010 at 00:03, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you actually test this ? The way I am reading the manpage is that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you need to open with setmntent and close with endmntent.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have read the man page, but only about getmntent, and than read the
</span><br>
<span class="quotelev2">&gt;&gt; source code for getmntent from glibc.
</span><br>
<span class="quotelev2">&gt;&gt; So yes, it is better to use setmntent/endmntent to be conform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ups, what about the fsroot_fd now? I think this has something to do if
</span><br>
<span class="quotelev1">&gt; /proc and /sys are not mounted at the root, for example in test mode,
</span><br>
<span class="quotelev1">&gt; right?
</span><br>
<p>I'm right. The only way out I see is to step aside from openat and use
<br>
string operations to for this.
<br>
<p>Also, I remember that in PLPA we only allowed to set the FSROOT with
<br>
an environment variable in DEBUG mode.
<br>
<p>I see that this would limit the test suit for debug builds, but I also
<br>
don't see a need for a user to set the FSROOT in a production system
<br>
either.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0739.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mountslines"</a>
<li><strong>Previous message:</strong> <a href="0737.php">Jeff Squyres: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mountslines"</a>
<li><strong>In reply to:</strong> <a href="0736.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0745.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Reply:</strong> <a href="0745.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
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
