<?
$subject_val = "Re: [OMPI devel] v1.8 - compile/dist problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 03:32:55 2014" -->
<!-- isoreceived="20140724073255" -->
<!-- sent="Thu, 24 Jul 2014 10:32:52 +0300" -->
<!-- isosent="20140724073252" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8 - compile/dist problem" -->
<!-- id="CAAO1KybSAa8RS07Biy9QjvujvLnRfBspbwpOhNTRoY48pBdnTw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E8DD8025-B836-4094-A021-3B4F90EC1F4E_at_cisco.com" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 03:32:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15236.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15234.php">Bert Wesarg: "Re: [OMPI devel] Annual SVN account maintenance"</a>
<li><strong>In reply to:</strong> <a href="15218.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15236.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15236.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes, sure - it fails on sles12, rhel 7, fedora 14-20, debian 6.5-7.5,
<br>
ubuntu 12-14
<br>
<p>It fails on &quot;rpmbuild&quot; from latest ompi-1.8.2rc2.src.rpm
<br>
it passes on rhel 6.x, sles 11.x, oel
<br>
<p><p>make[6]: Entering directory
<br>
'/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/mpi'
<br>
ln -s
<br>
/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify.cc
<br>
vt_unify.cc
<br>
ln -s
<br>
/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_defs.cc
<br>
vt_unify_defs.cc
<br>
ln -s
<br>
/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_defs_recs.cc
<br>
vt_unify_defs_recs.cc
<br>
ln -s
<br>
/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_events_stats.cc
<br>
vt_unify_events_stats.cc
<br>
ln -s
<br>
/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_handlers.cc
<br>
vt_unify_handlers.cc
<br>
ln -s
<br>
/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_hooks.cc
<br>
vt_unify_hooks.cc
<br>
ln -s
<br>
/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_markers.cc
<br>
vt_unify_markers.cc
<br>
ln -s
<br>
/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_sync.cc
<br>
vt_unify_sync.cc
<br>
ln -s
<br>
/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_tkfac.cc
<br>
vt_unify_tkfac.cc
<br>
ln -s
<br>
/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_usrcom.cc
<br>
vt_unify_usrcom.cc
<br>
ln -s
<br>
/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_base.cc
<br>
hooks/vt_unify_hooks_base.cc
<br>
ln: failed to create symbolic link &#195;&#162;&#226;&#130;&#172;&#203;&#156;hooks/vt_unify_hooks_base.cc&#195;&#162;&#226;&#130;&#172;&#226;&#132;&#162;: No
<br>
such file or directory
<br>
Makefile:1593: recipe for target 'hooks/vt_unify_hooks_base.cc' failed
<br>
make[6]: *** [hooks/vt_unify_hooks_base.cc] Error 1
<br>
make[6]: Leaving directory
<br>
'/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/mpi'
<br>
Makefile:3548: recipe for target '../tools/vtunify/mpi/libvt-mpi-unify.la'
<br>
failed
<br>
make[5]: *** [../tools/vtunify/mpi/libvt-mpi-unify.la] Error 2
<br>
make[5]: *** Waiting for unfinished jobs....
<br>
<p><p><p><p>On Wed, Jul 23, 2014 at 5:09 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Are you sure something isn't stale?  I.e., did you do a fresh checkout
</span><br>
<span class="quotelev1">&gt; since the last build, or a &quot;git clean&quot;, or something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 23, 2014, at 10:02 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; nope, we use git.
</span><br>
<span class="quotelev2">&gt; &gt; it passed on rhel 6.x, failed on ubuntu/debian/fedora and rhel 7.x
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jul 23, 2014 at 4:03 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Mike --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are you having the same jenkins problem we ran into yesterday?  If so,
</span><br>
<span class="quotelev1">&gt; it's a simple fix:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15211.php">http://www.open-mpi.org/community/lists/devel/2014/07/15211.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 23, 2014, at 9:01 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   CC       libvt_mpi_la-vt_iowrap_helper.lo
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   CC       libvt_mpi_la-vt_libwrap.lo
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   CC       libvt_mpi_la-vt_mallocwrap.lo
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   CC       libvt_mpi_la-vt_mpifile.lo
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[6]: Entering directory
</span><br>
<span class="quotelev1">&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/mpi'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify.cc
</span><br>
<span class="quotelev1">&gt; vt_unify.cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_defs.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_defs.cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_defs_recs.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_defs_recs.cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_events_stats.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_events_stats.cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_handlers.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_handlers.cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_hooks.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_hooks.cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_markers.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_markers.cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_sync.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_sync.cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_tkfac.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_tkfac.cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_usrcom.cc
</span><br>
<span class="quotelev1">&gt; vt_unify_usrcom.cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ln -s
</span><br>
<span class="quotelev1">&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev1">&gt; hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ln: failed to create symbolic link &#195;&#162;&#226;&#130;&#172;&#203;&#156;hooks/vt_unify_hooks_base.cc&#195;&#162;&#226;&#130;&#172;&#226;&#132;&#162;:
</span><br>
<span class="quotelev1">&gt; No such file or directory
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Makefile:1593: recipe for target 'hooks/vt_unify_hooks_base.cc' failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[6]: *** [hooks/vt_unify_hooks_base.cc] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[6]: Leaving directory
</span><br>
<span class="quotelev1">&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/mpi'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Makefile:3548: recipe for target '../tools/vtunify/mpi/
</span><br>
<span class="quotelev1">&gt; libvt-mpi-unify.la' failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[5]: *** [../tools/vtunify/mpi/libvt-mpi-unify.la] Error 2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[5]: Leaving directory
</span><br>
<span class="quotelev1">&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Makefile:810: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Makefile:679: recipe for target 'all' failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Makefile:1579: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Makefile:3152: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Makefile:1714: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error: Bad exit status from /var/tmp/rpm-tmp.QzMv2a (%build)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15214.php">http://www.open-mpi.org/community/lists/devel/2014/07/15214.php</a>
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
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15215.php">http://www.open-mpi.org/community/lists/devel/2014/07/15215.php</a>
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15217.php">http://www.open-mpi.org/community/lists/devel/2014/07/15217.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15218.php">http://www.open-mpi.org/community/lists/devel/2014/07/15218.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15235/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15236.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15234.php">Bert Wesarg: "Re: [OMPI devel] Annual SVN account maintenance"</a>
<li><strong>In reply to:</strong> <a href="15218.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15236.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15236.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
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
