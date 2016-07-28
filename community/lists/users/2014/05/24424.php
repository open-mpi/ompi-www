<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 17:15:50 2014" -->
<!-- isoreceived="20140516211550" -->
<!-- sent="Fri, 16 May 2014 18:15:47 -0300" -->
<!-- isosent="20140516211547" -->
<!-- name="Fabricio Cannini" -->
<!-- email="fcannini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="53768003.7090806_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F11FFA15-8375-4083-98E8-262B9C5B98B3_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-05-16 17:15:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24425.php">John Cary: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<li><strong>Previous message:</strong> <a href="24423.php">Martin Siegert: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24421.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24366.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Em 16-05-2014 17:07, Ralph Castain escreveu:
<br>
<span class="quotelev3">&gt;&gt;&gt; FWIW, simply for my own curiosity's sake, if someone could confirm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deny whether cmake:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Supports the following compiler suites: GNU (that's a given, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assume), Clang, OS X native (which is variants of GNU and Clang),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Absoft, PGI, Intel, Cray, HP-UX, Oracle Solaris (Linux and Solaris),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tru64, Microsoft Visual, IBM BlueGene (I think that's gcc, but am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not entirely sure).  (some of these matter mainly to hwloc, not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; necessarily OMPI)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not 100% confirmed, but this is good evidence that cmake does indeed
</span><br>
<span class="quotelev2">&gt;&gt; supports all these suites. See the file list:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://fr2.rpmfind.net//linux/RPM/centos/6.5/x86_64/Packages/cmake-2.6.4-5.el6.x86_64.html">http://fr2.rpmfind.net//linux/RPM/centos/6.5/x86_64/Packages/cmake-2.6.4-5.el6.x86_64.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://fr2.rpmfind.net//linux/RPM/dag/redhat/el6/x86_64/extras/cmake-2.8.8-1.el6.rfx.x86_64.html">http://fr2.rpmfind.net//linux/RPM/dag/redhat/el6/x86_64/extras/cmake-2.8.8-1.el6.rfx.x86_64.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://fr2.rpmfind.net//linux/RPM/opensuse/factory/aarch64/aarch64/cmake-3.0.0~rc4-2.1.aarch64.html">http://fr2.rpmfind.net//linux/RPM/opensuse/factory/aarch64/aarch64/cmake-3.0.0~rc4-2.1.aarch64.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Bootstrap a tarball such that an end user does not need to have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cmake installed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do you mean by 'bootstrapping a tarball' ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If someone doesn't have cmake installed and downloads a tarball that was
</span><br>
<span class="quotelev1">&gt; built from a CMake-based project, can they configure/build that tarball?
</span><br>
<span class="quotelev1">&gt; Or do they have to install cmake first?
</span><br>
<p>Ah, right. Yes, cmake must be installed to bootstrap the tarball.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24425.php">John Cary: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<li><strong>Previous message:</strong> <a href="24423.php">Martin Siegert: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24421.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24366.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
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
