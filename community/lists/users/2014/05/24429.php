<?
$subject_val = "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 17:40:30 2014" -->
<!-- isoreceived="20140516214030" -->
<!-- sent="Fri, 16 May 2014 21:40:28 +0000" -->
<!-- isosent="20140516214028" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support (or is this about cmake now?)" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB7328F4B6A_at_FMSMSX104.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53768009.1010502_at_txcorp.com" -->
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
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 17:40:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24430.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24428.php">Hjelm, Nathan T: "Re: [OMPI users] Enable PMI build"</a>
<li><strong>In reply to:</strong> <a href="24425.php">John Cary: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24431.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Martin Siegert wrote:
<br>
<span class="quotelev1">&gt;     Just set LDFLAGS='-Wl,-rpath,/usr/local/xyz/lib64' with autotools.
</span><br>
<span class="quotelev1">&gt;     With cmake? Really complicated.
</span><br>
<p>John Cary wrote:
<br>
<span class="quotelev1">&gt; For cmake,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -DCMAKE_SHARED_LINKER_FLAGS:STRING=-Wl,-rpath,'$HDF5_SERSH_DIR/lib'
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; -DCMAKE_EXE_LINKER_FLAGS:STRING=-Wl,-rpath,'$HDF5_SERSH_DIR/lib'
</span><br>
[Tom] 
<br>
OK, so you verified the &quot;really complicated&quot; comment.
<br>
<p>It seems clear to me that the OpenMPI developers are not going to switch to Cmake.
<br>
So why is this discussion continuing?
<br>
<p>-Tom
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have a dog in this, but I will say that we have found supporting
</span><br>
<span class="quotelev1">&gt; Windows
</span><br>
<span class="quotelev1">&gt; to be much easier with cmake.  If that is not an issue, then autotools is
</span><br>
<span class="quotelev1">&gt; is just fine too.  We do both and are happy with either.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, one must build cmake to use it.  Does not seem to be a critical
</span><br>
<span class="quotelev1">&gt; issue to me if one wants to support Windows, as you have to install
</span><br>
<span class="quotelev1">&gt; something (e.g., cygwin) to use autotools.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We looked into cmake for openmpi a while ago, but only because we wondered
</span><br>
<span class="quotelev1">&gt; whether there was much interest in supporting Windows. There wasn't.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As to compiler support, we build our codes on all of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Clang, OS X native (which is variants of GNU and Clang),
</span><br>
<span class="quotelev1">&gt; PGI, Intel, Cray, Microsoft Visual, IBM BlueGene (xl).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have not tried  Absoft, HP-UX, Oracle Solaris (Linux and Solaris), Tru64.
</span><br>
<span class="quotelev1">&gt; Only rarely are we seeing the last three OS's anymore.  No requests.
</span><br>
<span class="quotelev1">&gt; But I am confident cmake could do these.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ..........John
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 5/16/2014 3:00 PM, Martin Siegert wrote:
</span><br>
<span class="quotelev2">&gt; &gt; +1 even if cmake would make life easier for the developpers, you may
</span><br>
<span class="quotelev2">&gt; &gt;     want to consider those sysadmins/users who actually need to compile
</span><br>
<span class="quotelev2">&gt; &gt;     and install the software. And for those cmake is a nightmare. Everytime
</span><br>
<span class="quotelev2">&gt; &gt;     I run into a software package that uses cmake it makes me cringe.
</span><br>
<span class="quotelev2">&gt; &gt;     gromacs is the perfect example - it has become orders of magnitudes
</span><br>
<span class="quotelev2">&gt; &gt;     more complicated to compile just because it now uses cmake. I still
</span><br>
<span class="quotelev2">&gt; &gt;     have not succeeded cross compiling (compiling on a machine with a
</span><br>
<span class="quotelev2">&gt; &gt;     different processor than the code will later run on) gromacs. This was
</span><br>
<span class="quotelev2">&gt; &gt;     trivial before they switched to cmake.
</span><br>
<span class="quotelev2">&gt; &gt;     Another example: want to add RPATH to the executables/libraries?
</span><br>
<span class="quotelev2">&gt; &gt;     Just set LDFLAGS='-Wl,-rpath,/usr/local/xyz/lib64' with autotools.
</span><br>
<span class="quotelev2">&gt; &gt;     With cmake? Really complicated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please, just say no.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; Martin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, May 16, 2014 at 08:33:15PM +0000, Hjelm, Nathan T wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +1 the bootstrapping issue is 50% of the reason I will never use CMake for
</span><br>
<span class="quotelev1">&gt; any production code.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; vygr:~ hjelmn$ type -p cmake
</span><br>
<span class="quotelev3">&gt; &gt;&gt; vygr:~ hjelmn$
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nada, zilch, nothing on standard OS X install. I do not want to put an extra
</span><br>
<span class="quotelev1">&gt; requirement on my users. Nor do I want something as simple-minded as CMake.
</span><br>
<span class="quotelev1">&gt; autotools works great for me.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain
</span><br>
<span class="quotelev1">&gt; [rhc_at_[hidden]]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Friday, May 16, 2014 2:07 PM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] Question about scheduler support
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 16, 2014, at 1:03 PM, Fabricio Cannini
</span><br>
<span class="quotelev1">&gt; &lt;fcannini_at_[hidden]&lt;mailto:fcannini_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Em 16-05-2014 10:06, Jeff Squyres (jsquyres) escreveu:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 15, 2014, at 8:00 PM, Fabricio Cannini
</span><br>
<span class="quotelev1">&gt; &lt;fcannini_at_[hidden]&lt;mailto:fcannini_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nobody is disagreeing that one could find a way to make CMake
</span><br>
<span class="quotelev3">&gt; &gt;&gt; work - all we are saying is that (a) CMake has issues too, just
</span><br>
<span class="quotelev3">&gt; &gt;&gt; like autotools, and (b) we have yet to see a compelling reason to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; undertake the transition...which would have to be a *very*
</span><br>
<span class="quotelev3">&gt; &gt;&gt; compelling one.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I was simply agreeing with Maxime about why it could work. ;)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But if you and the other devels are fine with it, i'm fine too.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FWIW, simply for my own curiosity's sake, if someone could confirm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; deny whether cmake:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. Supports the following compiler suites: GNU (that's a given, I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; assume), Clang, OS X native (which is variants of GNU and Clang),
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Absoft, PGI, Intel, Cray, HP-UX, Oracle Solaris (Linux and Solaris),
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tru64, Microsoft Visual, IBM BlueGene (I think that's gcc, but am
</span><br>
<span class="quotelev3">&gt; &gt;&gt; not entirely sure).  (some of these matter mainly to hwloc, not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; necessarily OMPI)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Not 100% confirmed, but this is good evidence that cmake does indeed
</span><br>
<span class="quotelev1">&gt; supports all these suites. See the file list:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://fr2.rpmfind.net//linux/RPM/centos/6.5/x86_64/Packages/cmake">http://fr2.rpmfind.net//linux/RPM/centos/6.5/x86_64/Packages/cmake</a>-
</span><br>
<span class="quotelev1">&gt; 2.6.4-5.el6.x86_64.html
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://fr2.rpmfind.net//linux/RPM/dag/redhat/el6/x86_64/extras/cmake">http://fr2.rpmfind.net//linux/RPM/dag/redhat/el6/x86_64/extras/cmake</a>-
</span><br>
<span class="quotelev1">&gt; 2.8.8-1.el6.rfx.x86_64.html
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://fr2.rpmfind.net//linux/RPM/opensuse/factory/aarch64/aarch64/cmake">http://fr2.rpmfind.net//linux/RPM/opensuse/factory/aarch64/aarch64/cmake</a>-
</span><br>
<span class="quotelev1">&gt; 3.0.0~rc4-2.1.aarch64.html
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. Bootstrap a tarball such that an end user does not need to have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cmake installed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What do you mean by 'bootstrapping a tarball' ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If someone doesn't have cmake installed and downloads a tarball that was
</span><br>
<span class="quotelev1">&gt; built from a CMake-based project, can they configure/build that tarball? Or do
</span><br>
<span class="quotelev1">&gt; they have to install cmake first?
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24430.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24428.php">Hjelm, Nathan T: "Re: [OMPI users] Enable PMI build"</a>
<li><strong>In reply to:</strong> <a href="24425.php">John Cary: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24431.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
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
