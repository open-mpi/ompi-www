<?
$subject_val = "Re: [OMPI devel] v1.8 - compile/dist problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 09:03:13 2014" -->
<!-- isoreceived="20140723130313" -->
<!-- sent="Wed, 23 Jul 2014 13:03:11 +0000" -->
<!-- isosent="20140723130311" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8 - compile/dist problem" -->
<!-- id="B0C4FEC8-ED04-465A-8080-FC91778EDEF4_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CAAO1KybPyc45xg6Oixdxd8dM1DE_kZzbZPFDfuiZm1dwD4vC8A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-07-23 09:03:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15216.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15214.php">Mike Dubman: "[OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15214.php">Mike Dubman: "[OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15217.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15217.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike --
<br>
<p>Are you having the same jenkins problem we ran into yesterday?  If so, it's a simple fix:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15211.php">http://www.open-mpi.org/community/lists/devel/2014/07/15211.php</a>
<br>
<p><p>On Jul 23, 2014, at 9:01 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CC       libvt_mpi_la-vt_iowrap_helper.lo
</span><br>
<span class="quotelev1">&gt;   CC       libvt_mpi_la-vt_libwrap.lo
</span><br>
<span class="quotelev1">&gt;   CC       libvt_mpi_la-vt_mallocwrap.lo
</span><br>
<span class="quotelev1">&gt;   CC       libvt_mpi_la-vt_mpifile.lo
</span><br>
<span class="quotelev1">&gt; make[6]: Entering directory '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/mpi'
</span><br>
<span class="quotelev1">&gt; ln -s /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify.cc vt_unify.cc
</span><br>
<span class="quotelev1">&gt; ln -s /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_defs.cc vt_unify_defs.cc
</span><br>
<span class="quotelev1">&gt; ln -s /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_defs_recs.cc vt_unify_defs_recs.cc
</span><br>
<span class="quotelev1">&gt; ln -s /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_events_stats.cc vt_unify_events_stats.cc
</span><br>
<span class="quotelev1">&gt; ln -s /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_handlers.cc vt_unify_handlers.cc
</span><br>
<span class="quotelev1">&gt; ln -s /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_hooks.cc vt_unify_hooks.cc
</span><br>
<span class="quotelev1">&gt; ln -s /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_markers.cc vt_unify_markers.cc
</span><br>
<span class="quotelev1">&gt; ln -s /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_sync.cc vt_unify_sync.cc
</span><br>
<span class="quotelev1">&gt; ln -s /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_tkfac.cc vt_unify_tkfac.cc
</span><br>
<span class="quotelev1">&gt; ln -s /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/vt_unify_usrcom.cc vt_unify_usrcom.cc
</span><br>
<span class="quotelev1">&gt; ln -s /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_base.cc hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev1">&gt; ln: failed to create symbolic link &#226;&#128;&#152;hooks/vt_unify_hooks_base.cc&#226;&#128;&#153;: No such file or directory
</span><br>
<span class="quotelev1">&gt; Makefile:1593: recipe for target 'hooks/vt_unify_hooks_base.cc' failed
</span><br>
<span class="quotelev1">&gt; make[6]: *** [hooks/vt_unify_hooks_base.cc] Error 1
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/tools/vtunify/mpi'
</span><br>
<span class="quotelev1">&gt; Makefile:3548: recipe for target '../tools/vtunify/mpi/libvt-mpi-unify.la' failed
</span><br>
<span class="quotelev1">&gt; make[5]: *** [../tools/vtunify/mpi/libvt-mpi-unify.la] Error 2
</span><br>
<span class="quotelev1">&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt; Makefile:810: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; Makefile:679: recipe for target 'all' failed
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; Makefile:1579: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; Makefile:3152: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi'
</span><br>
<span class="quotelev1">&gt; Makefile:1714: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; error: Bad exit status from /var/tmp/rpm-tmp.QzMv2a (%build)
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15214.php">http://www.open-mpi.org/community/lists/devel/2014/07/15214.php</a>
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
<li><strong>Next message:</strong> <a href="15216.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15214.php">Mike Dubman: "[OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15214.php">Mike Dubman: "[OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15217.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15217.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
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
