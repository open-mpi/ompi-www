<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 16:03:53 2014" -->
<!-- isoreceived="20140516200353" -->
<!-- sent="Fri, 16 May 2014 17:03:48 -0300" -->
<!-- isosent="20140516200348" -->
<!-- name="Fabricio Cannini" -->
<!-- email="fcannini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="53766F24.6000301_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="29C44E31-2E31-4731-AAB4-E0305C1C4E56_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about scheduler support<br>
<strong>From:</strong> Fabricio Cannini (<em>fcannini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 16:03:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24421.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24419.php">Sylvain Huet: "[OMPI users] can't disable infiniband communication"</a>
<li><strong>In reply to:</strong> <a href="24416.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24421.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24421.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Em 16-05-2014 10:06, Jeff Squyres (jsquyres) escreveu:
<br>
<span class="quotelev1">&gt; On May 15, 2014, at 8:00 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nobody is disagreeing that one could find a way to make CMake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work - all we are saying is that (a) CMake has issues too, just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like autotools, and (b) we have yet to see a compelling reason to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; undertake the transition...which would have to be a *very*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compelling one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was simply agreeing with Maxime about why it could work. ;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But if you and the other devels are fine with it, i'm fine too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, simply for my own curiosity's sake, if someone could confirm
</span><br>
<span class="quotelev1">&gt; deny whether cmake:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Supports the following compiler suites: GNU (that's a given, I
</span><br>
<span class="quotelev1">&gt; assume), Clang, OS X native (which is variants of GNU and Clang),
</span><br>
<span class="quotelev1">&gt; Absoft, PGI, Intel, Cray, HP-UX, Oracle Solaris (Linux and Solaris),
</span><br>
<span class="quotelev1">&gt;  Tru64, Microsoft Visual, IBM BlueGene (I think that's gcc, but am
</span><br>
<span class="quotelev1">&gt; not entirely sure).  (some of these matter mainly to hwloc, not
</span><br>
<span class="quotelev1">&gt; necessarily OMPI)
</span><br>
<p>Not 100% confirmed, but this is good evidence that cmake does indeed 
<br>
supports all these suites. See the file list:
<br>
<p><a href="http://fr2.rpmfind.net//linux/RPM/centos/6.5/x86_64/Packages/cmake-2.6.4-5.el6.x86_64.html">http://fr2.rpmfind.net//linux/RPM/centos/6.5/x86_64/Packages/cmake-2.6.4-5.el6.x86_64.html</a>
<br>
<p><a href="http://fr2.rpmfind.net//linux/RPM/dag/redhat/el6/x86_64/extras/cmake-2.8.8-1.el6.rfx.x86_64.html">http://fr2.rpmfind.net//linux/RPM/dag/redhat/el6/x86_64/extras/cmake-2.8.8-1.el6.rfx.x86_64.html</a>
<br>
<p><a href="http://fr2.rpmfind.net//linux/RPM/opensuse/factory/aarch64/aarch64/cmake-3.0.0~rc4-2.1.aarch64.html">http://fr2.rpmfind.net//linux/RPM/opensuse/factory/aarch64/aarch64/cmake-3.0.0~rc4-2.1.aarch64.html</a>
<br>
<p><span class="quotelev1">&gt; 2. Bootstrap a tarball such that an end user does not need to have
</span><br>
<span class="quotelev1">&gt; cmake installed.
</span><br>
<p>What do you mean by 'bootstrapping a tarball' ?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24421.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24419.php">Sylvain Huet: "[OMPI users] can't disable infiniband communication"</a>
<li><strong>In reply to:</strong> <a href="24416.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24421.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24421.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
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
