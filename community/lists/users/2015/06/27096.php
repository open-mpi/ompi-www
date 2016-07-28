<?
$subject_val = "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 12:08:34 2015" -->
<!-- isoreceived="20150611160834" -->
<!-- sent="Thu, 11 Jun 2015 17:08:32 +0100" -->
<!-- isosent="20150611160832" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Looking for LAM-MPI sources to create a mirror" -->
<!-- id="87zj462pof.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="27DD74A2-58D8-4793-9280-FF16C0755796_at_cisco.com" -->
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
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-11 12:08:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27097.php">Dave Love: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<li><strong>Previous message:</strong> <a href="27095.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27082.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27120.php">Cian Davis: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>Reply:</strong> <a href="27120.php">Cian Davis: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Sadly, I have minimal experience with .debs... if someone would contribute the necessary packaging, we could talk about hosting a source deb on the main Open MPI site.
</span><br>
<p>What's wrong with the Debian packages (if you really want LAM)?
<br>
<p>&nbsp;&nbsp;$ apt-cache show lam-runtime 
<br>
&nbsp;&nbsp;Package: lam-runtime
<br>
&nbsp;&nbsp;Source: lam
<br>
&nbsp;&nbsp;Version: 7.1.4-3.1
<br>
&nbsp;&nbsp;Installed-Size: 1363
<br>
&nbsp;&nbsp;Maintainer: Camm Maguire &lt;camm_at_[hidden]&gt;
<br>
&nbsp;&nbsp;Architecture: amd64
<br>
&nbsp;&nbsp;Replaces: lam, lam1-runtime, lam4-dev (&lt;= 7.1.2-2)
<br>
&nbsp;&nbsp;Depends: libc6 (&gt;= 2.14), libgcc1 (&gt;= 1:4.1.1), liblam4, libstdc++6 (&gt;= 4.4.0), openssh-client | ssh-client | rsh-client, openssh-server | ssh-server | rsh-server
<br>
&nbsp;&nbsp;Conflicts: lam, lam1-runtime, lam4-dev (&lt;= 7.1.2-2)
<br>
&nbsp;&nbsp;Description-en: LAM runtime environment for executing parallel programs
<br>
&nbsp;&nbsp;&nbsp;LAM (Local Area Multicomputer) is an open source implementation of the
<br>
&nbsp;&nbsp;&nbsp;Message Passing Interface (MPI) standard.
<br>
&nbsp;&nbsp;&nbsp;.
<br>
&nbsp;&nbsp;&nbsp;Some enhancements in LAM 6.3 are:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;o Added the MPI-2 C++ bindings package (chapter 10 from the MPI-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;standard) from the Laboratory for Scientific Computing at the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;University of Notre Dame.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;o Added ROMIO MPI I/O package (chapter 9 from the MPI-2 standard)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from the Argonne National Laboratory.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;o Pseudo-tty support for remote IO (e.g., line buffered output).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;o Ability to pass environment variables through mpirun.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;o Ability to mpirun shell scripts/debuggers/etc. (that eventually
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;run LAM/MPI programs).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;o Ability to execute non-MPI programs across the multicomputer.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;o Added configurable ability to zero-fill internal LAM buffers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;before they are used (for development tools such as Purify).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;o Greatly expanded error messages; provided for customizable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local help files.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;o Expanded and updated documentation.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;o Various bug fixes and minor enhancements.
<br>
&nbsp;&nbsp;Description-md5: 070247a6e39a81b5bb5c1009c75deb58
<br>
&nbsp;&nbsp;Tag: devel::runtime, implemented-in::fortran, network::configuration,
<br>
&nbsp;&nbsp;&nbsp;role::program, scope::utility
<br>
&nbsp;&nbsp;Section: utils
<br>
&nbsp;&nbsp;Priority: extra
<br>
&nbsp;&nbsp;Filename: pool/main/l/lam/lam-runtime_7.1.4-3.1_amd64.deb
<br>
&nbsp;&nbsp;Size: 961826
<br>
&nbsp;&nbsp;MD5sum: 7d21dc63336ea5ba7f0eff3354dcc7cb
<br>
&nbsp;&nbsp;SHA1: fd7f2941cd3798373fa488235e99a2d9a2d75519
<br>
&nbsp;&nbsp;SHA256: 5993995b93fe960d58f4fdd55e156a6732aaad3815fe8070dabf1f7c8de17ecd
<br>
<p>The LAM site housed one or two things other than LAM which might still
<br>
be of interest, but I don't remember what off-hand.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27097.php">Dave Love: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<li><strong>Previous message:</strong> <a href="27095.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27082.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27120.php">Cian Davis: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>Reply:</strong> <a href="27120.php">Cian Davis: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
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
