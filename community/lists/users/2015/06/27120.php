<?
$subject_val = "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 07:27:47 2015" -->
<!-- isoreceived="20150612112747" -->
<!-- sent="Fri, 12 Jun 2015 12:27:45 +0100" -->
<!-- isosent="20150612112745" -->
<!-- name="Cian Davis" -->
<!-- email="ciandavis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Looking for LAM-MPI sources to create a mirror" -->
<!-- id="CA+Wyvfj=UtEQJMkO65LSLOKpQBKK=oosWCPjQrT9vJaPy7Tppg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87zj462pof.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Looking for LAM-MPI sources to create a mirror<br>
<strong>From:</strong> Cian Davis (<em>ciandavis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-12 07:27:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27121.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Previous message:</strong> <a href="27119.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>In reply to:</strong> <a href="27096.php">Dave Love: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27133.php">Dave Love: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>Reply:</strong> <a href="27133.php">Dave Love: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dave,
<br>
I use Debian/Ubuntu by default and my first approach (a number of years ago
<br>
at this stage) was to install from apt. However, if memory serves, I had
<br>
difficulty getting the packages LAM-MPI to work with the FDS5 software at
<br>
the time.
<br>
<p>Obviously, this is specifc to the FDS5 software.
<br>
<p>My intention with regard to requesting sources was to create a mirror so
<br>
that people who have to use LAM-MPI (e.g. because their applications were
<br>
statically compiled against them) would still have some way to get LAM-MPI
<br>
instead of scouring the recesses of the web. Having the sources available
<br>
gives the widest possible flexibility (instead of needing a
<br>
Debian/FC/CentOS/RedHat system).
<br>
<p>I just assumed someone here would have a private copy of the LAM-MPI site
<br>
and I was going to host them publicly just in case the wider community
<br>
needed them.
<br>
<p>Regards,
<br>
Cian
<br>
<p><p>On 11 June 2015 at 17:08, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sadly, I have minimal experience with .debs... if someone would
</span><br>
<span class="quotelev1">&gt; contribute the necessary packaging, we could talk about hosting a source
</span><br>
<span class="quotelev1">&gt; deb on the main Open MPI site.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's wrong with the Debian packages (if you really want LAM)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ apt-cache show lam-runtime
</span><br>
<span class="quotelev1">&gt;   Package: lam-runtime
</span><br>
<span class="quotelev1">&gt;   Source: lam
</span><br>
<span class="quotelev1">&gt;   Version: 7.1.4-3.1
</span><br>
<span class="quotelev1">&gt;   Installed-Size: 1363
</span><br>
<span class="quotelev1">&gt;   Maintainer: Camm Maguire &lt;camm_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;   Architecture: amd64
</span><br>
<span class="quotelev1">&gt;   Replaces: lam, lam1-runtime, lam4-dev (&lt;= 7.1.2-2)
</span><br>
<span class="quotelev1">&gt;   Depends: libc6 (&gt;= 2.14), libgcc1 (&gt;= 1:4.1.1), liblam4, libstdc++6 (&gt;=
</span><br>
<span class="quotelev1">&gt; 4.4.0), openssh-client | ssh-client | rsh-client, openssh-server |
</span><br>
<span class="quotelev1">&gt; ssh-server | rsh-server
</span><br>
<span class="quotelev1">&gt;   Conflicts: lam, lam1-runtime, lam4-dev (&lt;= 7.1.2-2)
</span><br>
<span class="quotelev1">&gt;   Description-en: LAM runtime environment for executing parallel programs
</span><br>
<span class="quotelev1">&gt;    LAM (Local Area Multicomputer) is an open source implementation of the
</span><br>
<span class="quotelev1">&gt;    Message Passing Interface (MPI) standard.
</span><br>
<span class="quotelev1">&gt;    .
</span><br>
<span class="quotelev1">&gt;    Some enhancements in LAM 6.3 are:
</span><br>
<span class="quotelev1">&gt;     o Added the MPI-2 C++ bindings package (chapter 10 from the MPI-2
</span><br>
<span class="quotelev1">&gt;         standard) from the Laboratory for Scientific Computing at the
</span><br>
<span class="quotelev1">&gt;         University of Notre Dame.
</span><br>
<span class="quotelev1">&gt;     o Added ROMIO MPI I/O package (chapter 9 from the MPI-2 standard)
</span><br>
<span class="quotelev1">&gt;         from the Argonne National Laboratory.
</span><br>
<span class="quotelev1">&gt;     o Pseudo-tty support for remote IO (e.g., line buffered output).
</span><br>
<span class="quotelev1">&gt;     o Ability to pass environment variables through mpirun.
</span><br>
<span class="quotelev1">&gt;     o Ability to mpirun shell scripts/debuggers/etc. (that eventually
</span><br>
<span class="quotelev1">&gt;         run LAM/MPI programs).
</span><br>
<span class="quotelev1">&gt;     o Ability to execute non-MPI programs across the multicomputer.
</span><br>
<span class="quotelev1">&gt;     o Added configurable ability to zero-fill internal LAM buffers
</span><br>
<span class="quotelev1">&gt;         before they are used (for development tools such as Purify).
</span><br>
<span class="quotelev1">&gt;     o Greatly expanded error messages; provided for customizable
</span><br>
<span class="quotelev1">&gt;         local help files.
</span><br>
<span class="quotelev1">&gt;     o Expanded and updated documentation.
</span><br>
<span class="quotelev1">&gt;     o Various bug fixes and minor enhancements.
</span><br>
<span class="quotelev1">&gt;   Description-md5: 070247a6e39a81b5bb5c1009c75deb58
</span><br>
<span class="quotelev1">&gt;   Tag: devel::runtime, implemented-in::fortran, network::configuration,
</span><br>
<span class="quotelev1">&gt;    role::program, scope::utility
</span><br>
<span class="quotelev1">&gt;   Section: utils
</span><br>
<span class="quotelev1">&gt;   Priority: extra
</span><br>
<span class="quotelev1">&gt;   Filename: pool/main/l/lam/lam-runtime_7.1.4-3.1_amd64.deb
</span><br>
<span class="quotelev1">&gt;   Size: 961826
</span><br>
<span class="quotelev1">&gt;   MD5sum: 7d21dc63336ea5ba7f0eff3354dcc7cb
</span><br>
<span class="quotelev1">&gt;   SHA1: fd7f2941cd3798373fa488235e99a2d9a2d75519
</span><br>
<span class="quotelev1">&gt;   SHA256: 5993995b93fe960d58f4fdd55e156a6732aaad3815fe8070dabf1f7c8de17ecd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The LAM site housed one or two things other than LAM which might still
</span><br>
<span class="quotelev1">&gt; be of interest, but I don't remember what off-hand.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27096.php">http://www.open-mpi.org/community/lists/users/2015/06/27096.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27120/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27121.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Previous message:</strong> <a href="27119.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>In reply to:</strong> <a href="27096.php">Dave Love: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27133.php">Dave Love: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>Reply:</strong> <a href="27133.php">Dave Love: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
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
