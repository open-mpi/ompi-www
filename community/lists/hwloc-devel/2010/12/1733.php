<?
$subject_val = "Re: [hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 19 17:30:11 2010" -->
<!-- isoreceived="20101219223011" -->
<!-- sent="Sun, 19 Dec 2010 23:30:06 +0100" -->
<!-- isosent="20101219223006" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset" -->
<!-- id="AANLkTinn41BY_PdguggDYXp=X8VFbr+0seMuBb7OQe-g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20101219085214.GA6826_at_const" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-19 17:30:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1734.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2955)"</a>
<li><strong>Previous message:</strong> <a href="1732.php">Jiri Hladky: "Re: [hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset"</a>
<li><strong>In reply to:</strong> <a href="1731.php">Samuel Thibault: "Re: [hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1736.php">Brice Goglin: "Re: [hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset"</a>
<li><strong>Reply:</strong> <a href="1736.php">Brice Goglin: "Re: [hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel,
<br>
<p>I have now patch file ready:-) Thanks.
<br>
<p>However, I have decided to improve hwloc-gather-topology.sh and added the
<br>
man page to hwloc-gather-topology.sh as well.
<br>
<p>In the current version (1.1), hwloc-gather-topology.sh is not very robust:
<br>
===========================================================
<br>
hwloc-gather-topology.sh /tmp
<br>
mv: cannot move `/tmp/tmp.YteCuaPyok/tmp.tar.bz2' to `//tmp.tar.bz2':
<br>
Permission denied
<br>
Hierarchy gathered in //tmp.tar.bz2 and kept in /tmp/tmp.YteCuaPyok/tmp/
<br>
/usr/bin/hwloc-gather-topology.sh: line 83: //tmp.output: Permission denied
<br>
Expected topology output stored in //tmp.output
<br>
===========================================================
<br>
<p>I have decided to implement --help command line option to get the basic
<br>
usage message.
<br>
$./hwloc-gather-topology.sh --help
<br>
./hwloc-gather-topology.sh &lt;savepath&gt;
<br>
&nbsp;&nbsp;Saves the Linux topology files (/sys, /proc, ...) under &lt;savepath&gt;.tar.bz2
<br>
&nbsp;&nbsp;and the corresponding lstopo verbose output under &lt;savepath&gt;.output
<br>
&nbsp;&nbsp;Example ./hwloc-gather-topology.sh /tmp/$(uname -n)
<br>
<p>I have added test if dirname=`dirname &quot;$name&quot;` is writable to avoid the
<br>
problem above.
<br>
<p>I have written a draft of the man page for hwloc-gather-topology.sh as well.
<br>
<p>I have attached my changes. Could you please kindly review them and if you
<br>
like it add them to the upstream?
<br>
<p>Please let me know your opinion. If you like these changes is there any way
<br>
to release 1.11 any soon? I would then hold creating the RPM package for
<br>
Fedora and RHEL. I would consider this better solution than to patch
<br>
original 1.1 version.
<br>
<p>Thanks
<br>
Jirka
<br>
<p>On Sun, Dec 19, 2010 at 9:52 AM, Samuel Thibault
<br>
&lt;samuel.thibault_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Jiri Hladky, le Sat 18 Dec 2010 23:53:55 +0100, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Can you please point me to the files which has been touched by this fix?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See svn diff -c 2936 and svn diff -c 2955 in trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1733/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1733/hwloc-gather-topology.sh.in">hwloc-gather-topology.sh.in</a>
</ul>
<!-- attachment="hwloc-gather-topology.sh.in" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1733/hwloc-gather-topology.1in">hwloc-gather-topology.1in</a>
</ul>
<!-- attachment="hwloc-gather-topology.1in" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1734.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2955)"</a>
<li><strong>Previous message:</strong> <a href="1732.php">Jiri Hladky: "Re: [hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset"</a>
<li><strong>In reply to:</strong> <a href="1731.php">Samuel Thibault: "Re: [hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1736.php">Brice Goglin: "Re: [hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset"</a>
<li><strong>Reply:</strong> <a href="1736.php">Brice Goglin: "Re: [hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset"</a>
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
