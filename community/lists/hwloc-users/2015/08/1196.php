<?
$subject_val = "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 09:32:15 2015" -->
<!-- isoreceived="20150824133215" -->
<!-- sent="Mon, 24 Aug 2015 15:32:12 +0200" -->
<!-- isosent="20150824133212" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family" -->
<!-- id="55DB1CDC.1070105_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="17357250.X2PxHYJ39O_at_linux-4dxf" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 09:32:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1197.php">Brice Goglin: "[hwloc-users] hwloc tutorial @ EuroMPI - Sept 21st"</a>
<li><strong>Previous message:</strong> <a href="1195.php">Ond&#197;&#153;ej Vl&#196;&#141;ek: "[hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1195.php">Ond&#197;&#153;ej Vl&#196;&#141;ek: "[hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1198.php">vlcek_at_[hidden]: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1198.php">vlcek_at_[hidden]: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1199.php">Ondřej Vlček: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>hwloc 1.7 is very old, I am surprised CentOS 7 doesn't have anything
<br>
more recent, maybe not in &quot;standard&quot; packages?
<br>
<p>Anyway, this is a very common error on AMD 6200 and 6300 machines.
<br>
See
<br>
<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.11.0/a00030.php#faq_os_error">http://www.open-mpi.org/projects/hwloc/doc/v1.11.0/a00030.php#faq_os_error</a>
<br>
Assuming you kernel isn't too old (CentOS7 should be fine), you should
<br>
try to upgrade the BIOS.
<br>
<p>Brice
<br>
<p><p>Le 24/08/2015 15:06, Ond&#197;&#153;ej Vl&#196;&#141;ek a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;   I have encountered hwloc error for the AMD Opteron 6300 processor family 
</span><br>
<span class="quotelev1">&gt; (see below). I am using hwloc.x86_64 v1.7-3.el7, which is its latest version 
</span><br>
<span class="quotelev1">&gt; available in standard packages for CentOS 7. Is this something, what has been 
</span><br>
<span class="quotelev1">&gt; already encountered and fixed in newer versions of hwloc? Output from the 
</span><br>
<span class="quotelev1">&gt; hwloc-gather-topology.sh script is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; Ondrej Vlcek
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ hwloc-info
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; * Hwloc has encountered what looks like an error from the operating system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * object (L3 cpuset 0x000003f0) intersection without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 753
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; depth 0:        1 Machine (type #1)
</span><br>
<span class="quotelev1">&gt;  depth 1:       4 Socket (type #3)
</span><br>
<span class="quotelev1">&gt;   depth 2:      8 NUMANode (type #2)
</span><br>
<span class="quotelev1">&gt;    depth 3:     8 L3Cache (type #4)
</span><br>
<span class="quotelev1">&gt;     depth 4:    24 L2Cache (type #4)
</span><br>
<span class="quotelev1">&gt;      depth 5:   24 L1iCache (type #4)
</span><br>
<span class="quotelev1">&gt;       depth 6:  48 L1dCache (type #4)
</span><br>
<span class="quotelev1">&gt;        depth 7: 48 Core (type #5)
</span><br>
<span class="quotelev1">&gt;         depth 8:        48 PU (type #6)
</span><br>
<span class="quotelev1">&gt; Special depth -3:       4 Bridge (type #9)
</span><br>
<span class="quotelev1">&gt; Special depth -4:       6 PCI Device (type #10)
</span><br>
<span class="quotelev1">&gt; Special depth -5:       9 OS Device (type #11)
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1196.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1196.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1196/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1197.php">Brice Goglin: "[hwloc-users] hwloc tutorial @ EuroMPI - Sept 21st"</a>
<li><strong>Previous message:</strong> <a href="1195.php">Ond&#197;&#153;ej Vl&#196;&#141;ek: "[hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1195.php">Ond&#197;&#153;ej Vl&#196;&#141;ek: "[hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1198.php">vlcek_at_[hidden]: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1198.php">vlcek_at_[hidden]: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1199.php">Ondřej Vlček: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
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
