<?
$subject_val = "Re: [hwloc-users] Hwloc on windows does not show pci devices";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 09:26:06 2015" -->
<!-- isoreceived="20150106142606" -->
<!-- sent="Tue, 06 Jan 2015 15:26:03 +0100" -->
<!-- isosent="20150106142603" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Hwloc on windows does not show pci devices" -->
<!-- id="54ABF07B.6020506_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="54ABEEE0.5040605_at_uffe.org" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Hwloc on windows does not show pci devices<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-06 09:26:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1144.php">Uffe Jakobsen: "Re: [hwloc-users] Hwloc on windows does not show pci devices"</a>
<li><strong>Previous message:</strong> <a href="1142.php">Uffe Jakobsen: "[hwloc-users] Hwloc on windows does not show pci devices"</a>
<li><strong>In reply to:</strong> <a href="1142.php">Uffe Jakobsen: "[hwloc-users] Hwloc on windows does not show pci devices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1144.php">Uffe Jakobsen: "Re: [hwloc-users] Hwloc on windows does not show pci devices"</a>
<li><strong>Reply:</strong> <a href="1144.php">Uffe Jakobsen: "Re: [hwloc-users] Hwloc on windows does not show pci devices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>We don't have PCI support on Windows unfortunately. And on non-Linux
<br>
platforms, you would have PCI devices without their locality, not really
<br>
useful.
<br>
<p>The hwloc I/O doc says:
<br>
&quot;Note that I/O discovery requires significant help from the operating
<br>
system. The pciaccess library (the development package is usually
<br>
|libpciaccess-devel| or |libpciaccess-dev|) is needed to fully detect
<br>
PCI devices and bridges, and the actual locality of these devices is
<br>
only currently detected on Linux. Also, some operating systems require
<br>
privileges for probing PCI devices, see Does hwloc require privileged
<br>
access?
<br>
&lt;<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_privileged">http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_privileged</a>&gt;
<br>
for details.&quot;
<br>
(<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00010.php">http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00010.php</a>)
<br>
<p>There's a ticket about I/O locality on Windows
<br>
(<a href="https://github.com/open-mpi/hwloc/issues/108">https://github.com/open-mpi/hwloc/issues/108</a>). IIRC we need a recent
<br>
Windows to make this work, and I don't have any multisocket Windows
<br>
machine to test the code anyway :/
<br>
<p>Brice
<br>
<p><p><p><p>Le 06/01/2015 15:19, Uffe Jakobsen a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question: the hwloc binaries (1.10.0) for Windows found on the website
</span><br>
<span class="quotelev1">&gt; does not output pci devices even when supplying &quot;--whole-io&quot; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc on both linux and freebsd produces the expected output - with
</span><br>
<span class="quotelev1">&gt; pci devices.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't been able to find any info about reduced functionality in
</span><br>
<span class="quotelev1">&gt; the Windows release of hwloc - it on purpose or an error ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: I'm new to hwloc - so bear with me if I'm asking an utterly stupid
</span><br>
<span class="quotelev1">&gt; question here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Uffe
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1143.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1143.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1143/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1144.php">Uffe Jakobsen: "Re: [hwloc-users] Hwloc on windows does not show pci devices"</a>
<li><strong>Previous message:</strong> <a href="1142.php">Uffe Jakobsen: "[hwloc-users] Hwloc on windows does not show pci devices"</a>
<li><strong>In reply to:</strong> <a href="1142.php">Uffe Jakobsen: "[hwloc-users] Hwloc on windows does not show pci devices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1144.php">Uffe Jakobsen: "Re: [hwloc-users] Hwloc on windows does not show pci devices"</a>
<li><strong>Reply:</strong> <a href="1144.php">Uffe Jakobsen: "Re: [hwloc-users] Hwloc on windows does not show pci devices"</a>
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
