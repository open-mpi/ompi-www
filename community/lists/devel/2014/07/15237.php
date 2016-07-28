<?
$subject_val = "Re: [OMPI devel] v1.8 - compile/dist problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 04:15:04 2014" -->
<!-- isoreceived="20140724081504" -->
<!-- sent="Thu, 24 Jul 2014 11:15:02 +0300" -->
<!-- isosent="20140724081502" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8 - compile/dist problem" -->
<!-- id="CAAO1KyZsSeoYHyLL0+wXxFvWpe4gvKOvA+3LRa3RfRZzE2gDzA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53D0BC81.7040006_at_tu-dresden.de" -->
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
<strong>Date:</strong> 2014-07-24 04:15:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15238.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15236.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15236.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15238.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15238.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
the problem occurs when build is started from src.rpm (and probably from
<br>
tarball as well):
<br>
<p>try make distcheck and use src tree from tarball.
<br>
<p><p>On Thu, Jul 24, 2014 at 10:57 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On 07/24/2014 09:32 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yes, sure - it fails on sles12, rhel 7, fedora 14-20, debian 6.5-7.5,
</span><br>
<span class="quotelev2">&gt;&gt; ubuntu 12-14
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It fails on &quot;rpmbuild&quot; from latest ompi-1.8.2rc2.src.rpm
</span><br>
<span class="quotelev2">&gt;&gt; it passes on rhel 6.x, sles 11.x, oel
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Just tried the rc2 package, but I could not reproduce it on Ubuntu 12.04.
</span><br>
<span class="quotelev1">&gt; The 'hooks' directory was created by the depfiles command, in case of an
</span><br>
<span class="quotelev1">&gt; out-of-tree build. So there should be no error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are my configure flags:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../configure --prefix=/home/wesarg/opt/openmpi-1.8.2rc2
</span><br>
<span class="quotelev1">&gt; --enable-mem-debug --enable-mem-profile --enable-debug
</span><br>
<span class="quotelev1">&gt; --enable-pretty-print-stacktrace --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; --enable-wrapper-rpath --enable-builtin-atomics
</span><br>
<span class="quotelev1">&gt; --with-mpi-param-check=always
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[6]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev2">&gt;&gt; vt/vt/tools/vtunify/mpi'
</span><br>
<span class="quotelev2">&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev2">&gt;&gt; vt/vt/tools/vtunify/vt_unify.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify.cc
</span><br>
<span class="quotelev2">&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev2">&gt;&gt; vt/vt/tools/vtunify/vt_unify_defs.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_defs.cc
</span><br>
<span class="quotelev2">&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev2">&gt;&gt; vt/vt/tools/vtunify/vt_unify_defs_recs.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_defs_recs.cc
</span><br>
<span class="quotelev2">&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev2">&gt;&gt; vt/vt/tools/vtunify/vt_unify_events_stats.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_events_stats.cc
</span><br>
<span class="quotelev2">&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev2">&gt;&gt; vt/vt/tools/vtunify/vt_unify_handlers.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_handlers.cc
</span><br>
<span class="quotelev2">&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev2">&gt;&gt; vt/vt/tools/vtunify/vt_unify_hooks.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_hooks.cc
</span><br>
<span class="quotelev2">&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev2">&gt;&gt; vt/vt/tools/vtunify/vt_unify_markers.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_markers.cc
</span><br>
<span class="quotelev2">&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev2">&gt;&gt; vt/vt/tools/vtunify/vt_unify_sync.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_sync.cc
</span><br>
<span class="quotelev2">&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev2">&gt;&gt; vt/vt/tools/vtunify/vt_unify_tkfac.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_tkfac.cc
</span><br>
<span class="quotelev2">&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev2">&gt;&gt; vt/vt/tools/vtunify/vt_unify_usrcom.cc
</span><br>
<span class="quotelev2">&gt;&gt; vt_unify_usrcom.cc
</span><br>
<span class="quotelev2">&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev2">&gt;&gt; vt/vt/tools/vtunify/hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev2">&gt;&gt; hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev2">&gt;&gt; ln: failed to create symbolic link &#195;&#162;&#226;&#130;&#172;&#203;&#156;hooks/vt_unify_hooks_base.cc&#195;&#162;&#226;&#130;&#172;&#226;&#132;&#162;: No
</span><br>
<span class="quotelev2">&gt;&gt; such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:1593: recipe for target 'hooks/vt_unify_hooks_base.cc' failed
</span><br>
<span class="quotelev2">&gt;&gt; make[6]: *** [hooks/vt_unify_hooks_base.cc] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[6]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev2">&gt;&gt; vt/vt/tools/vtunify/mpi'
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:3548: recipe for target '../tools/vtunify/mpi/libvt-mpi-unify.la
</span><br>
<span class="quotelev2">&gt;&gt; '
</span><br>
<span class="quotelev2">&gt;&gt; failed
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** [../tools/vtunify/mpi/libvt-mpi-unify.la] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 23, 2014 at 5:09 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Are you sure something isn't stale?  I.e., did you do a fresh checkout
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since the last build, or a &quot;git clean&quot;, or something?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 23, 2014, at 10:02 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  nope, we use git.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it passed on rhel 6.x, failed on ubuntu/debian/fedora and rhel 7.x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Jul 23, 2014 at 4:03 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mike --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you having the same jenkins problem we ran into yesterday?  If so,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's a simple fix:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15211.php">http://www.open-mpi.org/community/lists/devel/2014/07/15211.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 23, 2014, at 9:01 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    CC       libvt_mpi_la-vt_iowrap_helper.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    CC       libvt_mpi_la-vt_libwrap.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    CC       libvt_mpi_la-vt_mallocwrap.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    CC       libvt_mpi_la-vt_mpifile.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[6]: Entering directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt/vt/tools/vtunify/mpi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt/vt/tools/vtunify/vt_unify.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_unify.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt/vt/tools/vtunify/vt_unify_defs.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_unify_defs.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt/vt/tools/vtunify/vt_unify_defs_recs.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_unify_defs_recs.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt/vt/tools/vtunify/vt_unify_events_stats.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_unify_events_stats.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt/vt/tools/vtunify/vt_unify_handlers.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_unify_handlers.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt/vt/tools/vtunify/vt_unify_hooks.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_unify_hooks.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt/vt/tools/vtunify/vt_unify_markers.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_unify_markers.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt/vt/tools/vtunify/vt_unify_sync.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_unify_sync.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt/vt/tools/vtunify/vt_unify_tkfac.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_unify_tkfac.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt/vt/tools/vtunify/vt_unify_usrcom.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_unify_usrcom.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt/vt/tools/vtunify/hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln: failed to create symbolic link &#195;&#162;&#226;&#130;&#172;&#203;&#156;hooks/vt_unify_hooks_base.cc&#195;&#162;&#226;&#130;&#172;&#226;&#132;&#162;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:1593: recipe for target 'hooks/vt_unify_hooks_base.cc' failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[6]: *** [hooks/vt_unify_hooks_base.cc] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[6]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt/vt/tools/vtunify/mpi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:3548: recipe for target '../tools/vtunify/mpi/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libvt-mpi-unify.la' failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[5]: *** [../tools/vtunify/mpi/libvt-mpi-unify.la] Error 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[5]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:810: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:679: recipe for target 'all' failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:1579: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi/contrib/vt'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:3152: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; '/var/tmp/OFED_topdir/BUILD/openmpi-1.8.2rc2/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:1714: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error: Bad exit status from /var/tmp/rpm-tmp.QzMv2a (%build)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15214.php">http://www.open-mpi.org/community/lists/devel/2014/07/15214.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15215.php">http://www.open-mpi.org/community/lists/devel/2014/07/15215.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15217.php">http://www.open-mpi.org/community/lists/devel/2014/07/15217.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15218.php">http://www.open-mpi.org/community/lists/devel/2014/07/15218.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/">http://www.open-mpi.org/community/lists/devel/2014/07/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 15235.php
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev1">&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Technische Universit&#195;&#164;t Dresden
</span><br>
<span class="quotelev1">&gt; Zentrum f&#195;&#188;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev1">&gt; 01062 Dresden
</span><br>
<span class="quotelev1">&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev1">&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev1">&gt; E-Mail: bert.wesarg_at_[hidden]
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15236.php">http://www.open-mpi.org/community/lists/devel/2014/07/15236.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15237/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15238.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15236.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15236.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15238.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15238.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
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
