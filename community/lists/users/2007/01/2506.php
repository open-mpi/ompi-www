<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 02:54:37 2007" -->
<!-- isoreceived="20070119075437" -->
<!-- sent="Fri, 19 Jan 2007 02:54:33 -0500" -->
<!-- isosent="20070119075433" -->
<!-- name="Robin Humble" -->
<!-- email="rjh+openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB bandwidth vs. kernels" -->
<!-- id="20070119075433.GA26955_at_lemming.cita.utoronto.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070118131015.GF1631_at_minantech.com" -->
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
<strong>From:</strong> Robin Humble (<em>rjh+openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-19 02:54:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2507.php">Barry Evans: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2505.php">Robert Bicknell: "[OMPI users] Slurm and Openmpi"</a>
<li><strong>In reply to:</strong> <a href="2495.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2492.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 18, 2007 at 03:10:15PM +0200, Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt;On Thu, Jan 18, 2007 at 07:17:13AM -0500, Robin Humble wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jan 18, 2007 at 11:08:04AM +0200, Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;On Thu, Jan 18, 2007 at 03:52:19AM -0500, Robin Humble wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Wed, Jan 17, 2007 at 08:55:31AM -0700, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;On Jan 17, 2007, at 2:39 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; On Wed, Jan 17, 2007 at 04:12:10AM -0500, Robin Humble wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; basically I'm seeing wildly different bandwidths over InfiniBand 4x DDR
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; when I use different kernels.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; Try to load ib_mthca with tune_pci=1 option on those kernels that are
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; slow.
</span><br>
<span class="quotelev1">&gt;...
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; tune_pci=1 makes a huge difference at the top end, and
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Well this is broken BIOS then. Look here for more explanation:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;<a href="https://staging.openfabrics.org/svn/openib/gen2/branches/1.1/ofed/docs/mthca_release_notes.txt">https://staging.openfabrics.org/svn/openib/gen2/branches/1.1/ofed/docs/mthca_release_notes.txt</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;search for &quot;tune_pci=1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; ok. thanks :-/
</span><br>
<span class="quotelev1">&gt;...
</span><br>
<span class="quotelev1">&gt;BIOS should configure MaxReadReq to maximum value supported by chipset.
</span><br>
<span class="quotelev1">&gt;Linux shouldn't touch this value at all.
</span><br>
<p>thanks. I'm told there's a bug already open with our vendor on this
<br>
issue and they're talking to Intel.
<br>
<p>looks similar to this thread:
<br>
&nbsp;&nbsp;<a href="http://www.mail-archive.com/openib-general&#64;openib.org/msg25305.html">http://www.mail-archive.com/openib-general&#64;openib.org/msg25305.html</a>
<br>
<p><span class="quotelev2">&gt;&gt; is there a way to check pci burst settings from userland? or BIOS?
</span><br>
<span class="quotelev1">&gt;You can see PCI settings with lspci. Newest lspci decode this value for
</span><br>
<span class="quotelev1">&gt;you, with older once you'll have to dump PCI config space to the file
</span><br>
<span class="quotelev1">&gt;and decode it by yourself.
</span><br>
<p>ah, yes, thanks. lspci -vvv can see MaxReadReq.
<br>
for the IB card:
<br>
<p>&nbsp;MaxReadReq(bytes)    kernel                         OS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         2.6.16.21-0.8-smp                sles10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512          2.6.9-42.0.3.ELsmp               centos4.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128          2.6.19.2                         centos4.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128          2.6.18-1.2732.4.2.el5.OFED_1_1   centos4.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128          2.6.20-rc4                       centos4.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         anything + tune_pci=1            centos4.4
<br>
<p>so errr... I have no idea which is the correct one :-/
<br>
bandwidth is only crap with 128.
<br>
<p>thanks for all your help.
<br>
<p>cheers,
<br>
robin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2507.php">Barry Evans: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2505.php">Robert Bicknell: "[OMPI users] Slurm and Openmpi"</a>
<li><strong>In reply to:</strong> <a href="2495.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2492.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
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
