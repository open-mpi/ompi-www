<?
$subject_val = "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 08:56:32 2016" -->
<!-- isoreceived="20160227135632" -->
<!-- sent="Sat, 27 Feb 2016 14:56:23 +0100" -->
<!-- isosent="20160227135623" -->
<!-- name="Emmanuel Thom&#195;&#169;" -->
<!-- email="emmanuel.thome_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks" -->
<!-- id="CAPLAFj49YJMe4wMRVjeEHaXkndJM62EfUmP83_+-Vnn8Ao-27Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5sq_fs-Kg39hxm2R9Bn0P8p1RFkrmVgftGtZaaWkYxSLQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks<br>
<strong>From:</strong> Emmanuel Thom&#195;&#169; (<em>emmanuel.thome_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-27 08:56:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28602.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28597.php">Gilles Gouaillardet: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28598.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's how libtool is called at build time, that is, at the point
<br>
where it creates the libmpi.la file, as well as the synthetized gcc
<br>
command line.
<br>
<p>(sorry, loong line)
<br>
<p>/bin/sh ../libtool  --tag=CC   --mode=link gcc -std=gnu99  -O3
<br>
-DNDEBUG -finline-functions -fno-strict-aliasing -pthread
<br>
-version-info 12:2:0   -o libmpi.la -rpath /tmp/test2/lib
<br>
class/ompi_free_list.lo class/ompi_rb_tree.lo
<br>
class/ompi_seq_tracker.lo attribute/attribute.lo
<br>
attribute/attribute_predefined.lo communicator/comm_init.lo
<br>
communicator/comm.lo communicator/comm_cid.lo
<br>
communicator/comm_request.lo communicator/comm_helpers.lo
<br>
errhandler/errhandler.lo errhandler/errhandler_invoke.lo
<br>
errhandler/errhandler_predefined.lo errhandler/errcode.lo
<br>
errhandler/errcode-internal.lo file/file.lo group/group.lo
<br>
group/group_init.lo group/group_set_rank.lo group/group_plist.lo
<br>
group/group_sporadic.lo group/group_strided.lo group/group_bitmap.lo
<br>
info/info.lo message/message.lo op/op.lo  proc/proc.lo
<br>
request/grequest.lo request/request.lo request/req_test.lo
<br>
request/req_wait.lo runtime/ompi_mpi_abort.lo runtime/ompi_mpi_init.lo
<br>
runtime/ompi_mpi_finalize.lo runtime/ompi_mpi_params.lo
<br>
runtime/ompi_mpi_preconnect.lo runtime/ompi_cr.lo
<br>
runtime/ompi_module_exchange.lo runtime/ompi_info_support.lo
<br>
win/win.lo mpiext/mpiext.lo patterns/net/netpatterns_base.lo
<br>
patterns/net/netpatterns_multinomial_tree.lo
<br>
patterns/net/netpatterns_nary_tree.lo
<br>
patterns/net/netpatterns_knomial_tree.lo patterns/comm/allreduce.lo
<br>
patterns/comm/allgather.lo patterns/comm/bcast.lo
<br>
datatype/libdatatype.la debuggers/libdebuggers.la mpi/c/libmpi_c.la
<br>
mpi/tool/libmpi_mpit_common.la  mpi/c/profile/libmpi_c_pmpi.la
<br>
mpi/tool/profile/libmpi_pmpit.la
<br>
mca/common/verbs_usnic/libmca_common_verbs_usnic.la
<br>
mca/allocator/libmca_allocator.la  mca/bcol/libmca_bcol.la
<br>
mca/bml/libmca_bml.la  mca/btl/libmca_btl.la  mca/coll/libmca_coll.la
<br>
mca/crcp/libmca_crcp.la  mca/dpm/libmca_dpm.la
<br>
mca/fbtl/libmca_fbtl.la  mca/fcoll/libmca_fcoll.la
<br>
mca/fs/libmca_fs.la  mca/io/libmca_io.la  mca/mpool/libmca_mpool.la
<br>
mca/mtl/libmca_mtl.la  mca/op/libmca_op.la  mca/osc/libmca_osc.la
<br>
mca/pml/libmca_pml.la mca/pml/v/libmca_pml_v.la
<br>
mca/pubsub/libmca_pubsub.la  mca/rcache/libmca_rcache.la
<br>
mca/rte/libmca_rte.la mca/rte/orte/libmca_rte_orte.la
<br>
mca/sbgp/libmca_sbgp.la  mca/sharedfp/libmca_sharedfp.la
<br>
mca/topo/libmca_topo.la  mca/vprotocol/libmca_vprotocol.la
<br>
/tmp/openmpi-1.10.2/orte/libopen-rte.la
<br>
/tmp/openmpi-1.10.2/opal/libopen-pal.la -lrt -lm -lutil
<br>
<p>libtool: link: gcc -std=gnu99 -shared  -fPIC -DPIC
<br>
class/.libs/ompi_free_list.o class/.libs/ompi_rb_tree.o
<br>
class/.libs/ompi_seq_tracker.o attribute/.libs/attribute.o
<br>
attribute/.libs/attribute_predefined.o communicator/.libs/comm_init.o
<br>
communicator/.libs/comm.o communicator/.libs/comm_cid.o
<br>
communicator/.libs/comm_request.o communicator/.libs/comm_helpers.o
<br>
errhandler/.libs/errhandler.o errhandler/.libs/errhandler_invoke.o
<br>
errhandler/.libs/errhandler_predefined.o errhandler/.libs/errcode.o
<br>
errhandler/.libs/errcode-internal.o file/.libs/file.o
<br>
group/.libs/group.o group/.libs/group_init.o
<br>
group/.libs/group_set_rank.o group/.libs/group_plist.o
<br>
group/.libs/group_sporadic.o group/.libs/group_strided.o
<br>
group/.libs/group_bitmap.o info/.libs/info.o message/.libs/message.o
<br>
op/.libs/op.o proc/.libs/proc.o request/.libs/grequest.o
<br>
request/.libs/request.o request/.libs/req_test.o
<br>
request/.libs/req_wait.o runtime/.libs/ompi_mpi_abort.o
<br>
runtime/.libs/ompi_mpi_init.o runtime/.libs/ompi_mpi_finalize.o
<br>
runtime/.libs/ompi_mpi_params.o runtime/.libs/ompi_mpi_preconnect.o
<br>
runtime/.libs/ompi_cr.o runtime/.libs/ompi_module_exchange.o
<br>
runtime/.libs/ompi_info_support.o win/.libs/win.o
<br>
mpiext/.libs/mpiext.o patterns/net/.libs/netpatterns_base.o
<br>
patterns/net/.libs/netpatterns_multinomial_tree.o
<br>
patterns/net/.libs/netpatterns_nary_tree.o
<br>
patterns/net/.libs/netpatterns_knomial_tree.o
<br>
patterns/comm/.libs/allreduce.o patterns/comm/.libs/allgather.o
<br>
patterns/comm/.libs/bcast.o  -Wl,--whole-archive
<br>
datatype/.libs/libdatatype.a debuggers/.libs/libdebuggers.a
<br>
mpi/c/.libs/libmpi_c.a mpi/tool/.libs/libmpi_mpit_common.a
<br>
mpi/c/profile/.libs/libmpi_c_pmpi.a
<br>
mpi/tool/profile/.libs/libmpi_pmpit.a
<br>
mca/common/verbs_usnic/.libs/libmca_common_verbs_usnic.a
<br>
mca/allocator/.libs/libmca_allocator.a mca/bcol/.libs/libmca_bcol.a
<br>
mca/bml/.libs/libmca_bml.a mca/btl/.libs/libmca_btl.a
<br>
mca/coll/.libs/libmca_coll.a mca/crcp/.libs/libmca_crcp.a
<br>
mca/dpm/.libs/libmca_dpm.a mca/fbtl/.libs/libmca_fbtl.a
<br>
mca/fcoll/.libs/libmca_fcoll.a mca/fs/.libs/libmca_fs.a
<br>
mca/io/.libs/libmca_io.a mca/mpool/.libs/libmca_mpool.a
<br>
mca/mtl/.libs/libmca_mtl.a mca/op/.libs/libmca_op.a
<br>
mca/osc/.libs/libmca_osc.a mca/pml/.libs/libmca_pml.a
<br>
mca/pml/v/.libs/libmca_pml_v.a mca/pubsub/.libs/libmca_pubsub.a
<br>
mca/rcache/.libs/libmca_rcache.a mca/rte/.libs/libmca_rte.a
<br>
mca/rte/orte/.libs/libmca_rte_orte.a mca/sbgp/.libs/libmca_sbgp.a
<br>
mca/sharedfp/.libs/libmca_sharedfp.a mca/topo/.libs/libmca_topo.a
<br>
mca/vprotocol/.libs/libmca_vprotocol.a -Wl,--no-whole-archive
<br>
-Wl,-rpath -Wl,/tmp/openmpi-1.10.2/orte/.libs -Wl,-rpath
<br>
-Wl,/tmp/openmpi-1.10.2/opal/.libs -Wl,-rpath -Wl,/tmp/test2/lib
<br>
-L/tmp/openmpi-1.10.2/opal/.libs /usr/lib/libosmcomp.so -libumad
<br>
-lpthread -libverbs /tmp/openmpi-1.10.2/orte/.libs/libopen-rte.so
<br>
/tmp/openmpi-1.10.2/opal/.libs/libopen-pal.so -lnuma -ldl -lrt -lm
<br>
-lutil  -O3 -pthread   -pthread -Wl,-soname -Wl,libmpi.so.12 -o
<br>
.libs/libmpi.so.12.0.2
<br>
<p>The .la file which gets created by the libtool command line above is
<br>
the one I attached in my answer to Jeff a minute ago. Things go wrong
<br>
when libtool does the relink step using that file.
<br>
<p>E.
<br>
<p><p>On Sat, Feb 27, 2016 at 12:20 PM, Gilles Gouaillardet
<br>
&lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Emmanuel,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By any chance, does libosmcomp.la contains a -rpath line ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, you can simply
</span><br>
<span class="quotelev1">&gt; make V=1
</span><br>
<span class="quotelev1">&gt; In order to see how libtool is invoked, and how it will invoke bcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Saturday, February 27, 2016, Emmanuel Thom&#195;&#169; &lt;emmanuel.thome_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your answer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have no LD_LIBRARY_PATH. I am not sure it should matter anyway,
</span><br>
<span class="quotelev2">&gt;&gt; though: the objdump command looks at what the object file requests,
</span><br>
<span class="quotelev2">&gt;&gt; not necessarily what happens at runtime as if we were using ldd.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This seems to be related to the MOFED debian packages including a .la
</span><br>
<span class="quotelev2">&gt;&gt; file for the stuff they install (which is against debian practice,
</span><br>
<span class="quotelev2">&gt;&gt; although not exactly for the same reason:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://wiki.debian.org/ReleaseGoals/LAFileRemoval">https://wiki.debian.org/ReleaseGoals/LAFileRemoval</a> ).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Specifically, I have /usr/lib/libosmcomp.la. If I delete that file,
</span><br>
<span class="quotelev2">&gt;&gt; then no -L/usr/lib shows up in the relink command for libmpi; libtool
</span><br>
<span class="quotelev2">&gt;&gt; just emits -losmcomp alone, which is fine. Then the subsequent
</span><br>
<span class="quotelev2">&gt;&gt; -lopen-rte finds the one installed for the library being build, not
</span><br>
<span class="quotelev2">&gt;&gt; the /usr one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It still does not look good that the libmpi.la file has the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; dependency_libs=' -losmcomp -libverbs
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-1.10.2/orte/libopen-rte.la
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-1.10.2/opal/libopen-pal.la -lnuma -ldl -lrt -lm -lutil'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (here on a machine without /usr/lib/libosmcomp.la ; when the .la file
</span><br>
<span class="quotelev2">&gt;&gt; exists, -loscomp is replaced by /usr/lib/libosmcomp.la).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have the impression that having -losmcomp -libverbs *after* the opal
</span><br>
<span class="quotelev2">&gt;&gt; and orte .la files would be better. I don't see how to achieve this,
</span><br>
<span class="quotelev2">&gt;&gt; though (just playing with ompi/Makefile.am at the moment, to no avail
</span><br>
<span class="quotelev2">&gt;&gt; so far).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; E.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Feb 27, 2016 at 5:58 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Out of curiosity, do you have your version of OMPI at the _beginning_ of
</span><br>
<span class="quotelev3">&gt;&gt; &gt; your LD_LIBRARY_PATH?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Feb 26, 2016, at 8:24 AM, Emmanuel Thom&#195;&#169; &lt;emmanuel.thome_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Fri, Feb 26, 2016 at 5:21 PM, Emmanuel Thom&#195;&#169;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &lt;emmanuel.thome_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; happens to have an openmpi-1.6.5 installation in /usr, as well as .
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Sorry for copy-paste failure. 1.6.5 is only in /usr, of course.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; E.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28592.php">http://www.open-mpi.org/community/lists/users/2016/02/28592.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28595.php">http://www.open-mpi.org/community/lists/users/2016/02/28595.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28596.php">http://www.open-mpi.org/community/lists/users/2016/02/28596.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28597.php">http://www.open-mpi.org/community/lists/users/2016/02/28597.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28602.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28597.php">Gilles Gouaillardet: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28598.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
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
