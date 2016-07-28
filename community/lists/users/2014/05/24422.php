<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 16:33:17 2014" -->
<!-- isoreceived="20140516203317" -->
<!-- sent="Fri, 16 May 2014 20:33:15 +0000" -->
<!-- isosent="20140516203315" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A8BDBF1_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 16:33:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24423.php">Martin Siegert: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24421.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24421.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24423.php">Martin Siegert: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24423.php">Martin Siegert: "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 the bootstrapping issue is 50% of the reason I will never use CMake for any production code.
<br>
<p>vygr:~ hjelmn$ type -p cmake
<br>
vygr:~ hjelmn$ 
<br>
<p>Nada, zilch, nothing on standard OS X install. I do not want to put an extra requirement on my users. Nor do I want something as simple-minded as CMake. autotools works great for me.
<br>
<p>-Nathan
<br>
<p>________________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Friday, May 16, 2014 2:07 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Question about scheduler support
<br>
<p>On May 16, 2014, at 1:03 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&lt;mailto:fcannini_at_[hidden]&gt;&gt; wrote:
<br>
<p>Em 16-05-2014 10:06, Jeff Squyres (jsquyres) escreveu:
<br>
On May 15, 2014, at 8:00 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&lt;mailto:fcannini_at_[hidden]&gt;&gt;
<br>
wrote:
<br>
<p>Nobody is disagreeing that one could find a way to make CMake
<br>
work - all we are saying is that (a) CMake has issues too, just
<br>
like autotools, and (b) we have yet to see a compelling reason to
<br>
undertake the transition...which would have to be a *very*
<br>
compelling one.
<br>
<p>I was simply agreeing with Maxime about why it could work. ;)
<br>
<p>But if you and the other devels are fine with it, i'm fine too.
<br>
<p>FWIW, simply for my own curiosity's sake, if someone could confirm
<br>
deny whether cmake:
<br>
<p>1. Supports the following compiler suites: GNU (that's a given, I
<br>
assume), Clang, OS X native (which is variants of GNU and Clang),
<br>
Absoft, PGI, Intel, Cray, HP-UX, Oracle Solaris (Linux and Solaris),
<br>
Tru64, Microsoft Visual, IBM BlueGene (I think that's gcc, but am
<br>
not entirely sure).  (some of these matter mainly to hwloc, not
<br>
necessarily OMPI)
<br>
<p>Not 100% confirmed, but this is good evidence that cmake does indeed supports all these suites. See the file list:
<br>
<p><a href="http://fr2.rpmfind.net//linux/RPM/centos/6.5/x86_64/Packages/cmake-2.6.4-5.el6.x86_64.html">http://fr2.rpmfind.net//linux/RPM/centos/6.5/x86_64/Packages/cmake-2.6.4-5.el6.x86_64.html</a>
<br>
<p><a href="http://fr2.rpmfind.net//linux/RPM/dag/redhat/el6/x86_64/extras/cmake-2.8.8-1.el6.rfx.x86_64.html">http://fr2.rpmfind.net//linux/RPM/dag/redhat/el6/x86_64/extras/cmake-2.8.8-1.el6.rfx.x86_64.html</a>
<br>
<p><a href="http://fr2.rpmfind.net//linux/RPM/opensuse/factory/aarch64/aarch64/cmake-3.0.0~rc4-2.1.aarch64.html">http://fr2.rpmfind.net//linux/RPM/opensuse/factory/aarch64/aarch64/cmake-3.0.0~rc4-2.1.aarch64.html</a>
<br>
<p>2. Bootstrap a tarball such that an end user does not need to have
<br>
cmake installed.
<br>
<p>What do you mean by 'bootstrapping a tarball' ?
<br>
<p>If someone doesn't have cmake installed and downloads a tarball that was built from a CMake-based project, can they configure/build that tarball? Or do they have to install cmake first?
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24423.php">Martin Siegert: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24421.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24421.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24423.php">Martin Siegert: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24423.php">Martin Siegert: "Re: [OMPI users] Question about scheduler support"</a>
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
