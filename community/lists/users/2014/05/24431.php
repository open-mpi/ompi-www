<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 18:05:50 2014" -->
<!-- isoreceived="20140516220550" -->
<!-- sent="Fri, 16 May 2014 18:05:49 -0400" -->
<!-- isosent="20140516220549" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="53768BBD.6080901_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about scheduler support<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 18:05:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24432.php">Maxime Boissonneault: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24430.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24425.php">John Cary: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24424.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
++1
<br>
<p>The original issue was that OMPI builds support for slurm
<br>
and loadlevler by default, and this was not desirable (or desired).
<br>
<p>That is a non-issue.
<br>
If you don't want slurm and loadleveler support,
<br>
just configure OMPI
<br>
<p>--with-slurm=no --with-loadleveler=no
<br>
<p>All other supported schedulers can be dismissed by similar configure 
<br>
flags, if one is strict about having a slim OMPI installation.
<br>
For those who love the minutiae, 'configure --help' will show all 
<br>
options, including those above,
<br>
and I am surprised that this was not noticed first place (and used)
<br>
by those complaining of the default support
<br>
to slurm and loadleveler on OMPI.
<br>
<p>So, why the fuss if the solution is so simple?
<br>
<p>I am happy with the way OMPI builds.
<br>
For me the main goal is to provide a reliable and flexible MPI build
<br>
to support parallel programs, not to fiddle with the build system.
<br>
Given the small number
<br>
of complaints about the OMPI build system on this list so far
<br>
(was there any before this one?),
<br>
I would guess most OMPI users also are happy with its build system.
<br>
We have GigE, Infiniband, and Torque: OMPI picks them up and
<br>
works perfectly with them.
<br>
We don't have Open-MX or Knem, but if we had, I would like them to be
<br>
discovered by OMPI and used.
<br>
As Bert Lance would say:
<br>
&quot;If it ain't broke, don't fix it.&quot;
<br>
But not only it is not broken, it works like a charm.
<br>
<p>Why switch to a different tool chain?
<br>
Is it wise, safe, widely available on the OMPI installed base, 
<br>
convenient to the final user?
<br>
Quite frankly this is the first time I see so much fuss about OMPI's 
<br>
build system.
<br>
<p>Gus Correa
<br>
<p>On 5/16/2014 3:00 PM, Martin Siegert wrote:
<br>
<span class="quotelev2">&gt;&gt; +1 even if cmake would make life easier for the developpers, you may
</span><br>
<span class="quotelev2">&gt;&gt;     want to consider those sysadmins/users who actually need to compile
</span><br>
<span class="quotelev2">&gt;&gt;     and install the software. And for those cmake is a nightmare.
</span><br>
<span class="quotelev2">&gt;&gt; Everytime
</span><br>
<span class="quotelev2">&gt;&gt;     I run into a software package that uses cmake it makes me cringe.
</span><br>
<span class="quotelev2">&gt;&gt;     gromacs is the perfect example - it has become orders of magnitudes
</span><br>
<span class="quotelev2">&gt;&gt;     more complicated to compile just because it now uses cmake. I still
</span><br>
<span class="quotelev2">&gt;&gt;     have not succeeded cross compiling (compiling on a machine with a
</span><br>
<span class="quotelev2">&gt;&gt;     different processor than the code will later run on) gromacs. This
</span><br>
<span class="quotelev2">&gt;&gt; was
</span><br>
<span class="quotelev2">&gt;&gt;     trivial before they switched to cmake.
</span><br>
<span class="quotelev2">&gt;&gt;     Another example: want to add RPATH to the executables/libraries?
</span><br>
<span class="quotelev2">&gt;&gt;     Just set LDFLAGS='-Wl,-rpath,/usr/local/xyz/lib64' with autotools.
</span><br>
<span class="quotelev2">&gt;&gt;     With cmake? Really complicated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please, just say no.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Martin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, May 16, 2014 at 08:33:15PM +0000, Hjelm, Nathan T wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1 the bootstrapping issue is 50% of the reason I will never use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CMake for any production code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vygr:~ hjelmn$ type -p cmake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vygr:~ hjelmn$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nada, zilch, nothing on standard OS X install. I do not want to put
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an extra requirement on my users. Nor do I want something as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simple-minded as CMake. autotools works great for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rhc_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, May 16, 2014 2:07 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Question about scheduler support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 16, 2014, at 1:03 PM, Fabricio Cannini
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;fcannini_at_[hidden]&lt;mailto:fcannini_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Em 16-05-2014 10:06, Jeff Squyres (jsquyres) escreveu:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 15, 2014, at 8:00 PM, Fabricio Cannini
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;fcannini_at_[hidden]&lt;mailto:fcannini_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was simply agreeing with Maxime about why it could work. ;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But if you and the other devels are fine with it, i'm fine too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not 100% confirmed, but this is good evidence that cmake does indeed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supports all these suites. See the file list:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://fr2.rpmfind.net//linux/RPM/centos/6.5/x86_64/Packages/cmake-2.6.4-5.el6.x86_64.html">http://fr2.rpmfind.net//linux/RPM/centos/6.5/x86_64/Packages/cmake-2.6.4-5.el6.x86_64.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://fr2.rpmfind.net//linux/RPM/dag/redhat/el6/x86_64/extras/cmake-2.8.8-1.el6.rfx.x86_64.html">http://fr2.rpmfind.net//linux/RPM/dag/redhat/el6/x86_64/extras/cmake-2.8.8-1.el6.rfx.x86_64.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://fr2.rpmfind.net//linux/RPM/opensuse/factory/aarch64/aarch64/cmake-3.0.0~rc4-2.1.aarch64.html">http://fr2.rpmfind.net//linux/RPM/opensuse/factory/aarch64/aarch64/cmake-3.0.0~rc4-2.1.aarch64.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Bootstrap a tarball such that an end user does not need to have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cmake installed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What do you mean by 'bootstrapping a tarball' ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If someone doesn't have cmake installed and downloads a tarball that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was built from a CMake-based project, can they configure/build that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tarball? Or do they have to install cmake first?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="24432.php">Maxime Boissonneault: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24430.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24425.php">John Cary: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24424.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
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
