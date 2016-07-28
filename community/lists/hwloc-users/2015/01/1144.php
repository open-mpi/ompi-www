<?
$subject_val = "Re: [hwloc-users] Hwloc on windows does not show pci devices";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 09:49:34 2015" -->
<!-- isoreceived="20150106144934" -->
<!-- sent="Tue, 06 Jan 2015 15:49:29 +0100" -->
<!-- isosent="20150106144929" -->
<!-- name="Uffe Jakobsen" -->
<!-- email="uffe_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Hwloc on windows does not show pci devices" -->
<!-- id="54ABF5F9.9090507_at_uffe.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="54ABF07B.6020506_at_inria.fr" -->
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
<strong>From:</strong> Uffe Jakobsen (<em>uffe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-06 09:49:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1145.php">Pradeep Kiruvale: "[hwloc-users] PCI devices topology"</a>
<li><strong>Previous message:</strong> <a href="1143.php">Brice Goglin: "Re: [hwloc-users] Hwloc on windows does not show pci devices"</a>
<li><strong>In reply to:</strong> <a href="1143.php">Brice Goglin: "Re: [hwloc-users] Hwloc on windows does not show pci devices"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, that explains - thanks for clarifying
<br>
<p>/Uffe
<br>
<p>On 2015-01-06 15:26, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We don't have PCI support on Windows unfortunately. And on non-Linux
</span><br>
<span class="quotelev1">&gt; platforms, you would have PCI devices without their locality, not really
</span><br>
<span class="quotelev1">&gt; useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The hwloc I/O doc says:
</span><br>
<span class="quotelev1">&gt; &quot;Note that I/O discovery requires significant help from the operating
</span><br>
<span class="quotelev1">&gt; system. The pciaccess library (the development package is usually
</span><br>
<span class="quotelev1">&gt; |libpciaccess-devel| or |libpciaccess-dev|) is needed to fully detect
</span><br>
<span class="quotelev1">&gt; PCI devices and bridges, and the actual locality of these devices is
</span><br>
<span class="quotelev1">&gt; only currently detected on Linux. Also, some operating systems require
</span><br>
<span class="quotelev1">&gt; privileges for probing PCI devices, see Does hwloc require privileged
</span><br>
<span class="quotelev1">&gt; access?
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_privileged">http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_privileged</a>&gt;
</span><br>
<span class="quotelev1">&gt; for details.&quot;
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00010.php">http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00010.php</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's a ticket about I/O locality on Windows
</span><br>
<span class="quotelev1">&gt; (<a href="https://github.com/open-mpi/hwloc/issues/108">https://github.com/open-mpi/hwloc/issues/108</a>). IIRC we need a recent
</span><br>
<span class="quotelev1">&gt; Windows to make this work, and I don't have any multisocket Windows
</span><br>
<span class="quotelev1">&gt; machine to test the code anyway :/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 06/01/2015 15:19, Uffe Jakobsen a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Question: the hwloc binaries (1.10.0) for Windows found on the website
</span><br>
<span class="quotelev2">&gt;&gt; does not output pci devices even when supplying &quot;--whole-io&quot; option.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc on both linux and freebsd produces the expected output - with
</span><br>
<span class="quotelev2">&gt;&gt; pci devices.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I haven't been able to find any info about reduced functionality in
</span><br>
<span class="quotelev2">&gt;&gt; the Windows release of hwloc - it on purpose or an error ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS: I'm new to hwloc - so bear with me if I'm asking an utterly stupid
</span><br>
<span class="quotelev2">&gt;&gt; question here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /Uffe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1145.php">Pradeep Kiruvale: "[hwloc-users] PCI devices topology"</a>
<li><strong>Previous message:</strong> <a href="1143.php">Brice Goglin: "Re: [hwloc-users] Hwloc on windows does not show pci devices"</a>
<li><strong>In reply to:</strong> <a href="1143.php">Brice Goglin: "Re: [hwloc-users] Hwloc on windows does not show pci devices"</a>
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
