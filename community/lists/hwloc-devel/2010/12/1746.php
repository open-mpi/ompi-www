<?
$subject_val = "Re: [hwloc-devel] gather-topology fix and manpage";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 21 02:36:04 2010" -->
<!-- isoreceived="20101221073604" -->
<!-- sent="Tue, 21 Dec 2010 08:35:55 +0100" -->
<!-- isosent="20101221073555" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] gather-topology fix and manpage" -->
<!-- id="4D1058DB.5060701_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTikd__S_RbKbH70c99CCgN8k7m78aHvhE9Gx6Oph_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] gather-topology fix and manpage<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-21 02:35:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1747.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<li><strong>Previous message:</strong> <a href="1745.php">Jiri Hladky: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<li><strong>In reply to:</strong> <a href="1745.php">Jiri Hladky: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1747.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 21/12/2010 00:37, Jiri Hladky a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Regarding the naming. I would argue that since the utility is
</span><br>
<span class="quotelev1">&gt; currently called
</span><br>
<span class="quotelev1">&gt; hwloc-gather-topology.sh
</span><br>
<span class="quotelev1">&gt; then the man page should be named
</span><br>
<span class="quotelev1">&gt; hwloc-gather-topology.sh.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's your opinion?
</span><br>
<p>Fine with me. I wasn't sure because you originally named your file
<br>
without .sh.
<br>
<p><span class="quotelev1">&gt; Your code will give a usage message whenever -&lt;anything&gt; is used.
</span><br>
<span class="quotelev1">&gt; Would not be better to use the case statement to check if
</span><br>
<span class="quotelev1">&gt; -h | --help has been used to give the usage message
</span><br>
<span class="quotelev1">&gt; -&lt;anything&gt; to check if invalid option has been entered and give:
</span><br>
<span class="quotelev1">&gt; error message Unknown option and usage message
</span><br>
<p>I fixed this.
<br>
<p><span class="quotelev1">&gt; BTW, there are Bash's native commands to get a substring.
</span><br>
<span class="quotelev1">&gt; ${string:position:length}. To get the first char just do
</span><br>
<span class="quotelev1">&gt; echo ${name:0:1}
</span><br>
<span class="quotelev1">&gt; See <a href="http://tldp.org/LDP/abs/html/string-manipulation.html">http://tldp.org/LDP/abs/html/string-manipulation.html</a>
</span><br>
<p>Right, but it's bash specific, so I am not sure we want to go there. We
<br>
only use sh only so far.
<br>
<p><span class="quotelev1">&gt; Also, is there any reason not have -h|--help officially documented in
</span><br>
<span class="quotelev1">&gt; the man page?
</span><br>
<p>-h|--help wasn't properly implemented, I'll add it now.
<br>
<p>I am pushing all this to trunk now. And I will likely backport
<br>
everything to v1.1 later today (I need to make sure that I didn't break
<br>
the build system by having the new manpage only built/installed on Linux).
<br>
<p>thanks,
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1747.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<li><strong>Previous message:</strong> <a href="1745.php">Jiri Hladky: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<li><strong>In reply to:</strong> <a href="1745.php">Jiri Hladky: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1747.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
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
