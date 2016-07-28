<?
$subject_val = "Re: [hwloc-users] hwloc has encountered what looks like an error from the operating system";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 08:57:54 2015" -->
<!-- isoreceived="20150223135754" -->
<!-- sent="Mon, 23 Feb 2015 14:57:52 +0100" -->
<!-- isosent="20150223135752" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc has encountered what looks like an error from the operating system" -->
<!-- id="54EB31E0.3070408_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1424697747.1729.46.camel_at_schoenitzer.de" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc has encountered what looks like an error from the operating system<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-23 08:57:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/03/1156.php">Samy CHBINOU: "[hwloc-users] lstopo on AMD APU"</a>
<li><strong>Previous message:</strong> <a href="1154.php">Michael F.: "[hwloc-users] hwloc has encountered what looks like an error from the operating system"</a>
<li><strong>In reply to:</strong> <a href="1154.php">Michael F.: "[hwloc-users] hwloc has encountered what looks like an error from the operating system"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>This is yet another example of buggy AMD topology information unfortunately.
<br>
See
<br>
<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.10.1/a00028.php#faq_os_error">http://www.open-mpi.org/projects/hwloc/doc/v1.10.1/a00028.php#faq_os_error</a>
<br>
<p>In your case, NUMA and processor package/socket information are
<br>
conflicting because NUMA information is buggy. Upgrading the BIOS may help.
<br>
<p>Given your context, you should be able to ignore the warning by setting
<br>
HWLOC_HIDE_ERRORS=1 in the environment. But make sure you don't use
<br>
advanced binding options in Open MPI since most of them they need
<br>
correct NUMA and/or package/socket information.
<br>
<p>Brice
<br>
<p><p><p>Le 23/02/2015 14:22, Michael F. Sch&#246;nitzer a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in our workstation we have a problem with openmpi. The workstation was
</span><br>
<span class="quotelev1">&gt; running under Ubuntu 12.04 were we had already performance issues but
</span><br>
<span class="quotelev1">&gt; didn't got any error messages, after upgrading to Ubuntu 14.04 we get
</span><br>
<span class="quotelev1">&gt; the error message below. Using lstopo reveals that the problem was
</span><br>
<span class="quotelev1">&gt; persistent in the old system, too.
</span><br>
<span class="quotelev1">&gt; Maybe you know what to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;  Michael Sch&#246;nitzer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; * hwloc has encountered what looks like an error from the operating system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * object (Socket P#1 cpuset 0xffff0000) intersection without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 853
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/02/1154.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/02/1154.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/03/1156.php">Samy CHBINOU: "[hwloc-users] lstopo on AMD APU"</a>
<li><strong>Previous message:</strong> <a href="1154.php">Michael F.: "[hwloc-users] hwloc has encountered what looks like an error from the operating system"</a>
<li><strong>In reply to:</strong> <a href="1154.php">Michael F.: "[hwloc-users] hwloc has encountered what looks like an error from the operating system"</a>
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
