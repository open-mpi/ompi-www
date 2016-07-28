<?
$subject_val = "[OMPI devel] v1.8 - compile/dist problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 09:01:07 2014" -->
<!-- isoreceived="20140723130107" -->
<!-- sent="Wed, 23 Jul 2014 16:01:05 +0300" -->
<!-- isosent="20140723130105" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.8 - compile/dist problem" -->
<!-- id="CAAO1KybPyc45xg6Oixdxd8dM1DE_kZzbZPFDfuiZm1dwD4vC8A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] v1.8 - compile/dist problem<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-23 09:01:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15215.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15213.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15215.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15215.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15216.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;CC       libvt_mpi_la-vt_iowrap_helper.lo
<br>
&nbsp;&nbsp;CC       libvt_mpi_la-vt_libwrap.lo
<br>
&nbsp;&nbsp;CC       libvt_mpi_la-vt_mallocwrap.lo
<br>
&nbsp;&nbsp;CC       libvt_mpi_la-vt_mpifile.lo
<br>
make[6]: Entering directory
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
make[5]: Leaving directory
<br>
'/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/vtlib'
<br>
Makefile:810: recipe for target 'all-recursive' failed
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[4]: Leaving directory
<br>
'/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt'
<br>
Makefile:679: recipe for target 'all' failed
<br>
make[3]: *** [all] Error 2
<br>
make[3]: Leaving directory
<br>
'/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt'
<br>
Makefile:1579: recipe for target 'all-recursive' failed
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory
<br>
'/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt'
<br>
Makefile:3152: recipe for target 'all-recursive' failed
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
'/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi'
<br>
Makefile:1714: recipe for target 'all-recursive' failed
<br>
make: *** [all-recursive] Error 1
<br>
error: Bad exit status from /var/tmp/rpm-tmp.QzMv2a (%build)
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15214/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15215.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15213.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15215.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15215.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15216.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
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
