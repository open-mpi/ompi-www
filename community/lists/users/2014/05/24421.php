<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 16:09:14 2014" -->
<!-- isoreceived="20140516200914" -->
<!-- sent="Fri, 16 May 2014 13:07:20 -0700" -->
<!-- isosent="20140516200720" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="F11FFA15-8375-4083-98E8-262B9C5B98B3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53766F24.6000301_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 16:07:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24422.php">Hjelm, Nathan T: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24420.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24420.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24422.php">Hjelm, Nathan T: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24422.php">Hjelm, Nathan T: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24424.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 16, 2014, at 1:03 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Em 16-05-2014 10:06, Jeff Squyres (jsquyres) escreveu:
</span><br>
<span class="quotelev2">&gt;&gt; On May 15, 2014, at 8:00 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nobody is disagreeing that one could find a way to make CMake
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; work - all we are saying is that (a) CMake has issues too, just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like autotools, and (b) we have yet to see a compelling reason to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; undertake the transition...which would have to be a *very*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compelling one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was simply agreeing with Maxime about why it could work. ;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But if you and the other devels are fine with it, i'm fine too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, simply for my own curiosity's sake, if someone could confirm
</span><br>
<span class="quotelev2">&gt;&gt; deny whether cmake:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Supports the following compiler suites: GNU (that's a given, I
</span><br>
<span class="quotelev2">&gt;&gt; assume), Clang, OS X native (which is variants of GNU and Clang),
</span><br>
<span class="quotelev2">&gt;&gt; Absoft, PGI, Intel, Cray, HP-UX, Oracle Solaris (Linux and Solaris),
</span><br>
<span class="quotelev2">&gt;&gt; Tru64, Microsoft Visual, IBM BlueGene (I think that's gcc, but am
</span><br>
<span class="quotelev2">&gt;&gt; not entirely sure).  (some of these matter mainly to hwloc, not
</span><br>
<span class="quotelev2">&gt;&gt; necessarily OMPI)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not 100% confirmed, but this is good evidence that cmake does indeed supports all these suites. See the file list:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://fr2.rpmfind.net//linux/RPM/centos/6.5/x86_64/Packages/cmake-2.6.4-5.el6.x86_64.html">http://fr2.rpmfind.net//linux/RPM/centos/6.5/x86_64/Packages/cmake-2.6.4-5.el6.x86_64.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://fr2.rpmfind.net//linux/RPM/dag/redhat/el6/x86_64/extras/cmake-2.8.8-1.el6.rfx.x86_64.html">http://fr2.rpmfind.net//linux/RPM/dag/redhat/el6/x86_64/extras/cmake-2.8.8-1.el6.rfx.x86_64.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://fr2.rpmfind.net//linux/RPM/opensuse/factory/aarch64/aarch64/cmake-3.0.0~rc4-2.1.aarch64.html">http://fr2.rpmfind.net//linux/RPM/opensuse/factory/aarch64/aarch64/cmake-3.0.0~rc4-2.1.aarch64.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. Bootstrap a tarball such that an end user does not need to have
</span><br>
<span class="quotelev2">&gt;&gt; cmake installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do you mean by 'bootstrapping a tarball' ?
</span><br>
<p>If someone doesn't have cmake installed and downloads a tarball that was built from a CMake-based project, can they configure/build that tarball? Or do they have to install cmake first?
<br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24421/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24422.php">Hjelm, Nathan T: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24420.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24420.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24422.php">Hjelm, Nathan T: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24422.php">Hjelm, Nathan T: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24424.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
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
