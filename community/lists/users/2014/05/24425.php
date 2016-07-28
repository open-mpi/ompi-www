<?
$subject_val = "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 17:15:53 2014" -->
<!-- isoreceived="20140516211553" -->
<!-- sent="Fri, 16 May 2014 15:15:53 -0600" -->
<!-- isosent="20140516211553" -->
<!-- name="John Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support (or is this about cmake now?)" -->
<!-- id="53768009.1010502_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140516210002.GC8738_at_sfu.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about scheduler support (or is this about cmake now?)<br>
<strong>From:</strong> John Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 17:15:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24426.php">Brock Palen: "[OMPI users] Enable PMI build"</a>
<li><strong>Previous message:</strong> <a href="24424.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24423.php">Martin Siegert: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24429.php">Elken, Tom: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<li><strong>Reply:</strong> <a href="24429.php">Elken, Tom: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<li><strong>Reply:</strong> <a href="24431.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For cmake,
<br>
<p>-DCMAKE_SHARED_LINKER_FLAGS:STRING=-Wl,-rpath,'$HDF5_SERSH_DIR/lib'
<br>
or
<br>
-DCMAKE_EXE_LINKER_FLAGS:STRING=-Wl,-rpath,'$HDF5_SERSH_DIR/lib'
<br>
<p>I don't have a dog in this, but I will say that we have found supporting 
<br>
Windows
<br>
to be much easier with cmake.  If that is not an issue, then autotools is
<br>
is just fine too.  We do both and are happy with either.
<br>
<p>Yes, one must build cmake to use it.  Does not seem to be a critical
<br>
issue to me if one wants to support Windows, as you have to install
<br>
something (e.g., cygwin) to use autotools.
<br>
<p>We looked into cmake for openmpi a while ago, but only because we wondered
<br>
whether there was much interest in supporting Windows. There wasn't.
<br>
<p>As to compiler support, we build our codes on all of
<br>
<p>Clang, OS X native (which is variants of GNU and Clang),
<br>
PGI, Intel, Cray, Microsoft Visual, IBM BlueGene (xl).
<br>
<p>Have not tried  Absoft, HP-UX, Oracle Solaris (Linux and Solaris), Tru64.
<br>
Only rarely are we seeing the last three OS's anymore.  No requests.
<br>
But I am confident cmake could do these.
<br>
<p>..........John
<br>
<p><p><p><p><p><p>On 5/16/2014 3:00 PM, Martin Siegert wrote:
<br>
<span class="quotelev1">&gt; +1 even if cmake would make life easier for the developpers, you may
</span><br>
<span class="quotelev1">&gt;     want to consider those sysadmins/users who actually need to compile
</span><br>
<span class="quotelev1">&gt;     and install the software. And for those cmake is a nightmare. Everytime
</span><br>
<span class="quotelev1">&gt;     I run into a software package that uses cmake it makes me cringe.
</span><br>
<span class="quotelev1">&gt;     gromacs is the perfect example - it has become orders of magnitudes
</span><br>
<span class="quotelev1">&gt;     more complicated to compile just because it now uses cmake. I still
</span><br>
<span class="quotelev1">&gt;     have not succeeded cross compiling (compiling on a machine with a
</span><br>
<span class="quotelev1">&gt;     different processor than the code will later run on) gromacs. This was
</span><br>
<span class="quotelev1">&gt;     trivial before they switched to cmake.
</span><br>
<span class="quotelev1">&gt;     Another example: want to add RPATH to the executables/libraries?
</span><br>
<span class="quotelev1">&gt;     Just set LDFLAGS='-Wl,-rpath,/usr/local/xyz/lib64' with autotools.
</span><br>
<span class="quotelev1">&gt;     With cmake? Really complicated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please, just say no.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Martin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 16, 2014 at 08:33:15PM +0000, Hjelm, Nathan T wrote:
</span><br>
<span class="quotelev2">&gt;&gt; +1 the bootstrapping issue is 50% of the reason I will never use CMake for any production code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; vygr:~ hjelmn$ type -p cmake
</span><br>
<span class="quotelev2">&gt;&gt; vygr:~ hjelmn$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nada, zilch, nothing on standard OS X install. I do not want to put an extra requirement on my users. Nor do I want something as simple-minded as CMake. autotools works great for me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, May 16, 2014 2:07 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Question about scheduler support
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 16, 2014, at 1:03 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&lt;mailto:fcannini_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Em 16-05-2014 10:06, Jeff Squyres (jsquyres) escreveu:
</span><br>
<span class="quotelev2">&gt;&gt; On May 15, 2014, at 8:00 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&lt;mailto:fcannini_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nobody is disagreeing that one could find a way to make CMake
</span><br>
<span class="quotelev2">&gt;&gt; work - all we are saying is that (a) CMake has issues too, just
</span><br>
<span class="quotelev2">&gt;&gt; like autotools, and (b) we have yet to see a compelling reason to
</span><br>
<span class="quotelev2">&gt;&gt; undertake the transition...which would have to be a *very*
</span><br>
<span class="quotelev2">&gt;&gt; compelling one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was simply agreeing with Maxime about why it could work. ;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But if you and the other devels are fine with it, i'm fine too.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not 100% confirmed, but this is good evidence that cmake does indeed supports all these suites. See the file list:
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
<span class="quotelev2">&gt;&gt; 2. Bootstrap a tarball such that an end user does not need to have
</span><br>
<span class="quotelev2">&gt;&gt; cmake installed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do you mean by 'bootstrapping a tarball' ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If someone doesn't have cmake installed and downloads a tarball that was built from a CMake-based project, can they configure/build that tarball? Or do they have to install cmake first?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24426.php">Brock Palen: "[OMPI users] Enable PMI build"</a>
<li><strong>Previous message:</strong> <a href="24424.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24423.php">Martin Siegert: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24429.php">Elken, Tom: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<li><strong>Reply:</strong> <a href="24429.php">Elken, Tom: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<li><strong>Reply:</strong> <a href="24431.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
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
