<?
$subject_val = "Re: [OMPI devel] v1.8 - compile/dist problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 03:58:08 2014" -->
<!-- isoreceived="20140724075808" -->
<!-- sent="Thu, 24 Jul 2014 09:57:53 +0200" -->
<!-- isosent="20140724075753" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8 - compile/dist problem" -->
<!-- id="53D0BC81.7040006_at_tu-dresden.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAO1KybSAa8RS07Biy9QjvujvLnRfBspbwpOhNTRoY48pBdnTw_at_mail.gmail.com" -->
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
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 03:57:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15237.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15235.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15235.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15237.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15237.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/24/2014 09:32 AM, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt; yes, sure - it fails on sles12, rhel 7, fedora 14-20, debian 6.5-7.5,
</span><br>
<span class="quotelev1">&gt; ubuntu 12-14
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It fails on &quot;rpmbuild&quot; from latest ompi-1.8.2rc2.src.rpm
</span><br>
<span class="quotelev1">&gt; it passes on rhel 6.x, sles 11.x, oel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Just tried the rc2 package, but I could not reproduce it on Ubuntu 
<br>
12.04. The 'hooks' directory was created by the depfiles command, in 
<br>
case of an out-of-tree build. So there should be no error.
<br>
<p>Here are my configure flags:
<br>
<p>../configure --prefix=/home/wesarg/opt/openmpi-1.8.2rc2 
<br>
--enable-mem-debug --enable-mem-profile --enable-debug 
<br>
--enable-pretty-print-stacktrace --enable-orterun-prefix-by-default 
<br>
--enable-wrapper-rpath --enable-builtin-atomics 
<br>
--with-mpi-param-check=always
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[6]: Entering directory
</span><br>
<span class="quotelev1">&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/mpi'
</span><br>
<span class="quotelev1">&gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify.cc
</span><br>
<span class="quotelev1">&gt; vt_unify.cc
</span><br>
<span class="quotelev1">&gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_defs.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_defs.cc
</span><br>
<span class="quotelev1">&gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_defs_recs.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_defs_recs.cc
</span><br>
<span class="quotelev1">&gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_events_stats.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_events_stats.cc
</span><br>
<span class="quotelev1">&gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_handlers.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_handlers.cc
</span><br>
<span class="quotelev1">&gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_hooks.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_hooks.cc
</span><br>
<span class="quotelev1">&gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_markers.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_markers.cc
</span><br>
<span class="quotelev1">&gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_sync.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_sync.cc
</span><br>
<span class="quotelev1">&gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_tkfac.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_tkfac.cc
</span><br>
<span class="quotelev1">&gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_usrcom.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_usrcom.cc
</span><br>
<span class="quotelev1">&gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev1">&gt; hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev1">&gt; ln: failed to create symbolic link &#226;&#128;&#152;hooks/vt_unify_hooks_base.cc&#226;&#128;&#153;: No
</span><br>
<span class="quotelev1">&gt; such file or directory
</span><br>
<span class="quotelev1">&gt; Makefile:1593: recipe for target 'hooks/vt_unify_hooks_base.cc' failed
</span><br>
<span class="quotelev1">&gt; make[6]: *** [hooks/vt_unify_hooks_base.cc] Error 1
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory
</span><br>
<span class="quotelev1">&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/mpi'
</span><br>
<span class="quotelev1">&gt; Makefile:3548: recipe for target '../tools/vtunify/mpi/libvt-mpi-unify.la'
</span><br>
<span class="quotelev1">&gt; failed
</span><br>
<span class="quotelev1">&gt; make[5]: *** [../tools/vtunify/mpi/libvt-mpi-unify.la] Error 2
</span><br>
<span class="quotelev1">&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 23, 2014 at 5:09 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure something isn't stale?  I.e., did you do a fresh checkout
</span><br>
<span class="quotelev2">&gt;&gt; since the last build, or a &quot;git clean&quot;, or something?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 23, 2014, at 10:02 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nope, we use git.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it passed on rhel 6.x, failed on ubuntu/debian/fedora and rhel 7.x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jul 23, 2014 at 4:03 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mike --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you having the same jenkins problem we ran into yesterday?  If so,
</span><br>
<span class="quotelev2">&gt;&gt; it's a simple fix:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15211.php">http://www.open-mpi.org/community/lists/devel/2014/07/15211.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 23, 2014, at 9:01 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    CC       libvt_mpi_la-vt_iowrap_helper.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    CC       libvt_mpi_la-vt_libwrap.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    CC       libvt_mpi_la-vt_mallocwrap.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    CC       libvt_mpi_la-vt_mpifile.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[6]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/mpi'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify.cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_defs.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_defs.cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_defs_recs.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_defs_recs.cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_events_stats.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_events_stats.cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_handlers.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_handlers.cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_hooks.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_hooks.cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_markers.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_markers.cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_sync.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_sync.cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_tkfac.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_tkfac.cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_usrcom.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_usrcom.cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev2">&gt;&gt; hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln: failed to create symbolic link &#226;&#128;&#152;hooks/vt_unify_hooks_base.cc&#226;&#128;&#153;:
</span><br>
<span class="quotelev2">&gt;&gt; No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:1593: recipe for target 'hooks/vt_unify_hooks_base.cc' failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[6]: *** [hooks/vt_unify_hooks_base.cc] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[6]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/mpi'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:3548: recipe for target '../tools/vtunify/mpi/
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi-unify.la' failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[5]: *** [../tools/vtunify/mpi/libvt-mpi-unify.la] Error 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[5]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:810: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:679: recipe for target 'all' failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:1579: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:3152: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:1714: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error: Bad exit status from /var/tmp/rpm-tmp.QzMv2a (%build)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15214.php">http://www.open-mpi.org/community/lists/devel/2014/07/15214.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15215.php">http://www.open-mpi.org/community/lists/devel/2014/07/15215.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15217.php">http://www.open-mpi.org/community/lists/devel/2014/07/15217.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15218.php">http://www.open-mpi.org/community/lists/devel/2014/07/15218.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15235.php">http://www.open-mpi.org/community/lists/devel/2014/07/15235.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: bert.wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15236/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15237.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15235.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15235.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15237.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15237.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
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
