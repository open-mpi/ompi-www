<?
$subject_val = "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 18:03:43 2010" -->
<!-- isoreceived="20100311230343" -->
<!-- sent="Fri, 12 Mar 2010 00:03:37 +0100" -->
<!-- isosent="20100311230337" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines" -->
<!-- id="4B9976C9.1070207_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1268346657-8983-1-git-send-email-bert.wesarg_at_googlemail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 18:03:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0734.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Previous message:</strong> <a href="0732.php">Bert Wesarg: "[hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>In reply to:</strong> <a href="0732.php">Bert Wesarg: "[hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0734.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Reply:</strong> <a href="0734.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Reply:</strong> <a href="0735.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt; This does multiple things at once:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I) it uses getmntent_r(3) to parse lines from /proc/mounts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  II) while doing this, it uses the correct un-escape rules for this
</span><br>
<span class="quotelev1">&gt;      file format.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      The current code converts &quot;\ &quot; to &quot; &quot;, while linux uses a &quot;\040&quot; to
</span><br>
<span class="quotelev1">&gt;      &quot; &quot; escaping rule.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  III) it accurately finds the cpuset option for a cgroups mount point.
</span><br>
<span class="quotelev1">&gt;       The current code would fail if &quot;cpuset&quot; would be a substring
</span><br>
<span class="quotelev1">&gt;       of an other mount option.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Did you actually test this ? The way I am reading the manpage is that
<br>
you need to open with setmntent and close with endmntent.
<br>
<p>Also, isn't getmntent (without _r) enough here?
<br>
<p>And finally, it seems to me that hasmntopt is probably the best way to
<br>
look for the 'cpuset' option.
<br>
<p>Thanks a lot for the patch anyway, we should probably use something like
<br>
this instead of my manual parsing code. I see some potential configure
<br>
problems on HP-UX in Google, I might put the configure checks inside &quot;if
<br>
Linux&quot;. We might even not need any configure checks since only Linux
<br>
uses all this so far. I'll play with all this tomorrow and probably
<br>
commit something.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0734.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Previous message:</strong> <a href="0732.php">Bert Wesarg: "[hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>In reply to:</strong> <a href="0732.php">Bert Wesarg: "[hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0734.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Reply:</strong> <a href="0734.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Reply:</strong> <a href="0735.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
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
