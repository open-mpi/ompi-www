<?
$subject_val = "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc-gather-topology";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 14:14:12 2015" -->
<!-- isoreceived="20150217191412" -->
<!-- sent="Tue, 17 Feb 2015 20:14:10 +0100" -->
<!-- isosent="20150217191410" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc-gather-topology" -->
<!-- id="54E39302.9040702_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1424199872.31236.5.camel_at_its.aau.dk" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc-gather-topology<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-17 14:14:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1154.php">Michael F.: "[hwloc-users] hwloc has encountered what looks like an error from the operating system"</a>
<li><strong>Previous message:</strong> <a href="1152.php">Mads Boye: "[hwloc-users] hwloc-gather-topology"</a>
<li><strong>In reply to:</strong> <a href="1152.php">Mads Boye: "[hwloc-users] hwloc-gather-topology"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>This is a widespread problem with AMD machines. Buggy platforms
<br>
reporting invalid L3 cache information in this case. Upgrading the BIOS
<br>
may help.
<br>
<p>If your program doesn't care about cache affinity, you can hide/ignore
<br>
the message by setting HWLOC_HIDE_ERRORS=1 in the environment.
<br>
More details also
<br>
<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.10.1/a00028.php#faq_os_error">http://www.open-mpi.org/projects/hwloc/doc/v1.10.1/a00028.php#faq_os_error</a>
<br>
&lt;<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_os_error">http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_os_error</a>&gt;
<br>
<p><p>We get so many report about these AMD L3 bugs that I added more details
<br>
to this FAQ, and I wonder if we should start manually fixing these.
<br>
<p>Brice
<br>
<p><p>Le 17/02/2015 20:04, Mads Boye a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi.
</span><br>
<span class="quotelev1">&gt; I am experincing the following issues when using openmpi on my new AMD
</span><br>
<span class="quotelev1">&gt; machine.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; * hwloc has encountered what looks like an error from the operating
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * L3 (cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset
</span><br>
<span class="quotelev1">&gt; 0x0000003f) without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 940
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with the output from the hwloc-gather-topology script.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As suggested by the error message, here is the hwloc-gather-topology
</span><br>
<span class="quotelev1">&gt; attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If further information is needed please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1153/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1154.php">Michael F.: "[hwloc-users] hwloc has encountered what looks like an error from the operating system"</a>
<li><strong>Previous message:</strong> <a href="1152.php">Mads Boye: "[hwloc-users] hwloc-gather-topology"</a>
<li><strong>In reply to:</strong> <a href="1152.php">Mads Boye: "[hwloc-users] hwloc-gather-topology"</a>
<!-- nextthread="start" -->
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
