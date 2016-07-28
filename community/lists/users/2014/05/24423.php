<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 16:59:50 2014" -->
<!-- isoreceived="20140516205950" -->
<!-- sent="Fri, 16 May 2014 14:00:02 -0700" -->
<!-- isosent="20140516210002" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="20140516210002.GC8738_at_sfu.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A8BDBF1_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 17:00:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24424.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24422.php">Hjelm, Nathan T: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24422.php">Hjelm, Nathan T: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24425.php">John Cary: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<li><strong>Reply:</strong> <a href="24425.php">John Cary: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 even if cmake would make life easier for the developpers, you may
<br>
&nbsp;&nbsp;&nbsp;want to consider those sysadmins/users who actually need to compile
<br>
&nbsp;&nbsp;&nbsp;and install the software. And for those cmake is a nightmare. Everytime
<br>
&nbsp;&nbsp;&nbsp;I run into a software package that uses cmake it makes me cringe.
<br>
&nbsp;&nbsp;&nbsp;gromacs is the perfect example - it has become orders of magnitudes
<br>
&nbsp;&nbsp;&nbsp;more complicated to compile just because it now uses cmake. I still
<br>
&nbsp;&nbsp;&nbsp;have not succeeded cross compiling (compiling on a machine with a
<br>
&nbsp;&nbsp;&nbsp;different processor than the code will later run on) gromacs. This was
<br>
&nbsp;&nbsp;&nbsp;trivial before they switched to cmake.
<br>
&nbsp;&nbsp;&nbsp;Another example: want to add RPATH to the executables/libraries?
<br>
&nbsp;&nbsp;&nbsp;Just set LDFLAGS='-Wl,-rpath,/usr/local/xyz/lib64' with autotools.
<br>
&nbsp;&nbsp;&nbsp;With cmake? Really complicated.
<br>
<p>Please, just say no.
<br>
<p>Cheers,
<br>
Martin
<br>
<p>On Fri, May 16, 2014 at 08:33:15PM +0000, Hjelm, Nathan T wrote:
<br>
<span class="quotelev1">&gt; +1 the bootstrapping issue is 50% of the reason I will never use CMake for any production code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; vygr:~ hjelmn$ type -p cmake
</span><br>
<span class="quotelev1">&gt; vygr:~ hjelmn$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nada, zilch, nothing on standard OS X install. I do not want to put an extra requirement on my users. Nor do I want something as simple-minded as CMake. autotools works great for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, May 16, 2014 2:07 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Question about scheduler support
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 16, 2014, at 1:03 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&lt;mailto:fcannini_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Em 16-05-2014 10:06, Jeff Squyres (jsquyres) escreveu:
</span><br>
<span class="quotelev1">&gt; On May 15, 2014, at 8:00 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&lt;mailto:fcannini_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nobody is disagreeing that one could find a way to make CMake
</span><br>
<span class="quotelev1">&gt; work - all we are saying is that (a) CMake has issues too, just
</span><br>
<span class="quotelev1">&gt; like autotools, and (b) we have yet to see a compelling reason to
</span><br>
<span class="quotelev1">&gt; undertake the transition...which would have to be a *very*
</span><br>
<span class="quotelev1">&gt; compelling one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was simply agreeing with Maxime about why it could work. ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But if you and the other devels are fine with it, i'm fine too.
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
<span class="quotelev1">&gt; Tru64, Microsoft Visual, IBM BlueGene (I think that's gcc, but am
</span><br>
<span class="quotelev1">&gt; not entirely sure).  (some of these matter mainly to hwloc, not
</span><br>
<span class="quotelev1">&gt; necessarily OMPI)
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
<span class="quotelev1">&gt; 2. Bootstrap a tarball such that an end user does not need to have
</span><br>
<span class="quotelev1">&gt; cmake installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do you mean by 'bootstrapping a tarball' ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If someone doesn't have cmake installed and downloads a tarball that was built from a CMake-based project, can they configure/build that tarball? Or do they have to install cmake first?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24424.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24422.php">Hjelm, Nathan T: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24422.php">Hjelm, Nathan T: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24425.php">John Cary: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<li><strong>Reply:</strong> <a href="24425.php">John Cary: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
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
