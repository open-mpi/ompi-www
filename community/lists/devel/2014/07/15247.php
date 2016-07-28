<?
$subject_val = "Re: [OMPI devel] v1.8 - compile/dist problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 09:27:59 2014" -->
<!-- isoreceived="20140724132759" -->
<!-- sent="Thu, 24 Jul 2014 13:27:58 +0000" -->
<!-- isosent="20140724132758" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8 - compile/dist problem" -->
<!-- id="A155538B-1D2B-409A-98EE-63B033193282_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KyadbV3NQoPG5NYG=qeQ6Z95mFRZgczHrnpfttSXbyYFvA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.8 - compile/dist problem<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 09:27:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15248.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15246.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15244.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15216.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike --
<br>
<p>If this is Autotools related, then it should be possible to replicate on RHEL 6.x machines.
<br>
<p>What versions of all the autootools are you using?
<br>
<p>Autoconf
<br>
Automake
<br>
Libtool
<br>
m4
<br>
<p><p>On Jul 24, 2014, at 8:39 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; it seems autotools related:
</span><br>
<span class="quotelev1">&gt; it tries to create link in &quot;hooks&quot; subfolder which does not present.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linux:/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/mpi # ls -al
</span><br>
<span class="quotelev1">&gt; total 248
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x 1 hpcuser mtl     474 Jul 24 15:32 .
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x 1 hpcuser mtl    1058 Jul 24 15:16 ..
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 root    root  93739 Jul 24 15:16 Makefile
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 hpcuser mtl    1191 Jul 24 08:49 Makefile.am
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 hpcuser mtl  105110 Jul 24 08:53 Makefile.in
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root    root     88 Jul 24 15:20 vt_unify.cc -&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify.cc
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root    root     93 Jul 24 15:20 vt_unify_defs.cc -&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_defs.cc
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root    root     98 Jul 24 15:20 vt_unify_defs_recs.cc -&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_defs_recs.cc
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root    root    101 Jul 24 15:20 vt_unify_events_stats.cc -&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_events_stats.cc
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root    root     97 Jul 24 15:20 vt_unify_handlers.cc -&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_handlers.cc
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root    root     94 Jul 24 15:20 vt_unify_hooks.cc -&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_hooks.cc
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 hpcuser mtl     574 Jul 24 08:49 vt_unify_lib.h
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root    root     96 Jul 24 15:20 vt_unify_markers.cc -&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_markers.cc
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 hpcuser mtl    1104 Jul 24 08:49 vt_unify_mpi.h
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root    root     93 Jul 24 15:20 vt_unify_sync.cc -&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_sync.cc
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root    root     94 Jul 24 15:20 vt_unify_tkfac.cc -&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_tkfac.cc
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root    root     95 Jul 24 15:20 vt_unify_usrcom.cc -&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_usrcom.cc
</span><br>
<span class="quotelev1">&gt; linux:/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/mpi # make
</span><br>
<span class="quotelev1">&gt;   CXX      libvt_mpi_unify_la-vt_unify.lo
</span><br>
<span class="quotelev1">&gt;   CXX      libvt_mpi_unify_la-vt_unify_defs.lo
</span><br>
<span class="quotelev1">&gt;   CXX      libvt_mpi_unify_la-vt_unify_defs_recs.lo
</span><br>
<span class="quotelev1">&gt;   CXX      libvt_mpi_unify_la-vt_unify_events_stats.lo
</span><br>
<span class="quotelev1">&gt;   CXX      libvt_mpi_unify_la-vt_unify_handlers.lo
</span><br>
<span class="quotelev1">&gt;   CXX      libvt_mpi_unify_la-vt_unify_hooks.lo
</span><br>
<span class="quotelev1">&gt;   CXX      libvt_mpi_unify_la-vt_unify_markers.lo
</span><br>
<span class="quotelev1">&gt;   CXX      libvt_mpi_unify_la-vt_unify_sync.lo
</span><br>
<span class="quotelev1">&gt;   CXX      libvt_mpi_unify_la-vt_unify_tkfac.lo
</span><br>
<span class="quotelev1">&gt;   CXX      libvt_mpi_unify_la-vt_unify_usrcom.lo
</span><br>
<span class="quotelev1">&gt; ln -s /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_base.cc hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev1">&gt; ln: failed to create symbolic link 'hooks/vt_unify_hooks_base.cc': No such file or directory
</span><br>
<span class="quotelev1">&gt; Makefile:1593: recipe for target 'hooks/vt_unify_hooks_base.cc' failed
</span><br>
<span class="quotelev1">&gt; make: *** [hooks/vt_unify_hooks_base.cc] Error 1
</span><br>
<span class="quotelev1">&gt; linux:/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/mpi # make V=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 24, 2014 at 2:45 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I just tried it myself -- &quot;make distcheck&quot; succeeds for both a nightly tarball (openmpi-1.8.2rc2r32302) and in a git or svn checkout on RHEL 6.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not have easy access to RHEL 7 or SLES 12 beta.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone analyze this and figure out what the difference is?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 24, 2014, at 6:21 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am getting reports of similar failures from Cisco QA.  They have clean/fresh checkouts of the OMPI tree.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It does not seem to happen on RHEL 6.5, but does happen on RHEL 7 and SLES 12 (beta).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What's the difference?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 24, 2014, at 6:12 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this is a command line we use:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cd ./contrib/dist/linux
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./contrib/dist/make_tarball -greekonly
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rpmbuild --rebuild  --define '_topdir /var/tmp//OFED_topdir' --define 'dist %{nil}' --target x86_64 --define '_name openmpi' --define 'mpi_selector /usr/bin/mpi-selector' --define 'use_mpi_selector 1' --define 'install_shell_scripts 1' --define 'shell_scripts_basename mpivars' --define '_usr /usr' --define 'ofed 0' --define '_prefix /usr/mpi/gcc/openmpi-1.8.2rc2' --define '_defaultdocdir /usr/mpi/gcc/openmpi-1.8.2rc2' --define '_mandir %{_prefix}/share/man' --define '_datadir %{_prefix}/share' --define 'mflags -j 4' --define 'configure_options    --with-fca=/opt/mellanox/fca --with-hcoll=/opt/mellanox/hcoll  --with-mxm=/opt/mellanox/mxm  --with-knem=/opt/knem-1.1.1.90mlnx --with-platform=contrib/platform/mellanox/optimized  ' --define 'use_default_rpm_opt_flags 1' openmpi-1.8.2rc2-1.src.rpm
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Thu, Jul 24, 2014 at 11:58 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 07/24/2014 10:15 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the problem occurs when build is started from src.rpm (and probably from
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tarball as well):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; try make distcheck and use src tree from tarball.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I did now make distcheck from the rc2 tarball, and it all worked. I don't know what the srpm does differently than an ./configure &amp;&amp; make though.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Bert
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Thu, Jul 24, 2014 at 10:57 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 01062 Dresden
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev3">&gt; &gt;&gt; E-Mail: bert.wesarg_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15238.php">http://www.open-mpi.org/community/lists/devel/2014/07/15238.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15239.php">http://www.open-mpi.org/community/lists/devel/2014/07/15239.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15240.php">http://www.open-mpi.org/community/lists/devel/2014/07/15240.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15242.php">http://www.open-mpi.org/community/lists/devel/2014/07/15242.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15244.php">http://www.open-mpi.org/community/lists/devel/2014/07/15244.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15248.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15246.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15244.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15216.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
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
