<?
$subject_val = "[OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 17:39:28 2007" -->
<!-- isoreceived="20071105223928" -->
<!-- sent="Mon, 5 Nov 2007 16:39:20 -0600" -->
<!-- isosent="20071105223920" -->
<!-- name="Mike Hanby" -->
<!-- email="mhanby_at_[hidden]" -->
<!-- subject="[OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &amp;quot;IPO link: can not find -lvapi&amp;quot;" -->
<!-- id="16AE1027F52DD64CB278BD8950529B636204DA_at_UABEXMB5.ad.uab.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Mike Hanby (<em>mhanby_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 17:39:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4405.php">Jeff Squyres: "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;"</a>
<li><strong>Previous message:</strong> <a href="4403.php">Robert Latham: "Re: [OMPI users] MPI_Request and attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4405.php">Jeff Squyres: "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;"</a>
<li><strong>Reply:</strong> <a href="4405.php">Jeff Squyres: "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;"</a>
<li><strong>Reply:</strong> <a href="4407.php">Chris Slaughter: "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howdy,
<br>
<p>&nbsp;
<br>
<p>I'm attempting to compile OpenMPI using Intel compilers (9.1.047) with
<br>
Topspin Infiniband support (on CentOS 4.4 64bit).
<br>
<p>&nbsp;
<br>
<p>Configuring:
<br>
<p>&nbsp;
<br>
<p>./configure CC=icc CXX=icpc FC=ifort F77=ifort F90=ifort
<br>
--with-mvapi=/usr/local/topspin
<br>
--with-mvapi-libdir=/usr/local/topspin/lib64 --enable-static
<br>
--prefix=/share/apps/openmpi/intel/openmpi-1.2.4-64
<br>
<p>&nbsp;
<br>
<p>make runs for 5 minutes or so and errors with:
<br>
<p>&nbsp;
<br>
<p>IPO link: can not find -lvapi
<br>
<p>icc: error: problem during multi-file optimization compilation (code 1)
<br>
<p>make[2]: *** [libmpi.la] Error 1
<br>
<p>make[2]: Leaving directory
<br>
`/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/ompi'
<br>
<p>make[1]: *** [install-recursive] Error 1
<br>
<p>make[1]: Leaving directory
<br>
`/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/ompi'
<br>
<p>&nbsp;
<br>
<p>I used the same configuration for OpenMPI 1.1.2 and it compiled and
<br>
installed successfully.
<br>
<p>&nbsp;
<br>
<p>Any suggestions?
<br>
<p>&nbsp;
<br>
<p>The following are the last several lines in the make log file:
<br>
<p>====================================================================
<br>
<p>libtool: compile:  /share/apps/intel/cce/9.1.047/bin/icc -DHAVE_CONFIG_H
<br>
-I. -I../opal/include -I../orte/include -I../ompi/include -I..
<br>
-I/share/apps/intel/cce/9.1.047/include -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -restrict -pthread -MT runtime/ompi_mpi_params.lo
<br>
-MD -MP -MF runtime/.deps/ompi_mpi_params.Tpo -c
<br>
runtime/ompi_mpi_params.c -o runtime/ompi_mpi_params.o &gt;/dev/null 2&gt;&amp;1
<br>
<p>depbase=`echo runtime/ompi_mpi_preconnect.lo | sed
<br>
's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
<p>/bin/sh ../libtool --tag=CC   --mode=compile
<br>
/share/apps/intel/cce/9.1.047/bin/icc -DHAVE_CONFIG_H -I.
<br>
-I../opal/include -I../orte/include -I../ompi/include   -I..
<br>
-I/share/apps/intel/cce/9.1.047/include   -O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing -restrict -pthread -MT
<br>
runtime/ompi_mpi_preconnect.lo -MD -MP -MF $depbase.Tpo -c -o
<br>
runtime/ompi_mpi_preconnect.lo runtime/ompi_mpi_preconnect.c &amp;&amp;\
<br>
<p>mv -f $depbase.Tpo $depbase.Plo
<br>
<p>libtool: compile:  /share/apps/intel/cce/9.1.047/bin/icc -DHAVE_CONFIG_H
<br>
-I. -I../opal/include -I../orte/include -I../ompi/include -I..
<br>
-I/share/apps/intel/cce/9.1.047/include -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -restrict -pthread -MT
<br>
runtime/ompi_mpi_preconnect.lo -MD -MP -MF
<br>
runtime/.deps/ompi_mpi_preconnect.Tpo -c runtime/ompi_mpi_preconnect.c
<br>
-fPIC -DPIC -o runtime/.libs/ompi_mpi_preconnect.o
<br>
<p>libtool: compile:  /share/apps/intel/cce/9.1.047/bin/icc -DHAVE_CONFIG_H
<br>
-I. -I../opal/include -I../orte/include -I../ompi/include -I..
<br>
-I/share/apps/intel/cce/9.1.047/include -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -restrict -pthread -MT
<br>
runtime/ompi_mpi_preconnect.lo -MD -MP -MF
<br>
runtime/.deps/ompi_mpi_preconnect.Tpo -c runtime/ompi_mpi_preconnect.c
<br>
-o runtime/ompi_mpi_preconnect.o &gt;/dev/null 2&gt;&amp;1
<br>
<p>depbase=`echo win/win.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
<p>/bin/sh ../libtool --tag=CC   --mode=compile
<br>
/share/apps/intel/cce/9.1.047/bin/icc -DHAVE_CONFIG_H -I.
<br>
-I../opal/include -I../orte/include -I../ompi/include   -I..
<br>
-I/share/apps/intel/cce/9.1.047/include   -O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing -restrict -pthread -MT
<br>
win/win.lo -MD -MP -MF $depbase.Tpo -c -o win/win.lo win/win.c &amp;&amp;\
<br>
<p>mv -f $depbase.Tpo $depbase.Plo
<br>
<p>libtool: compile:  /share/apps/intel/cce/9.1.047/bin/icc -DHAVE_CONFIG_H
<br>
-I. -I../opal/include -I../orte/include -I../ompi/include -I..
<br>
-I/share/apps/intel/cce/9.1.047/include -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -restrict -pthread -MT win/win.lo -MD -MP -MF
<br>
win/.deps/win.Tpo -c win/win.c  -fPIC -DPIC -o win/.libs/win.o
<br>
<p>libtool: compile:  /share/apps/intel/cce/9.1.047/bin/icc -DHAVE_CONFIG_H
<br>
-I. -I../opal/include -I../orte/include -I../ompi/include -I..
<br>
-I/share/apps/intel/cce/9.1.047/include -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -restrict -pthread -MT win/win.lo -MD -MP -MF
<br>
win/.deps/win.Tpo -c win/win.c -o win/win.o &gt;/dev/null 2&gt;&amp;1
<br>
<p>/bin/sh ../libtool --tag=CC   --mode=link
<br>
/share/apps/intel/cce/9.1.047/bin/icc  -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -restrict -pthread  -export-dynamic
<br>
-L/share/apps/intel/cce/9.1.047/lib  -o libmpi.la -rpath
<br>
/share/apps/openmpi/intel/openmpi-1.2.4-64/lib  class/ompi_bitmap.lo
<br>
class/ompi_free_list.lo class/ompi_pointer_array.lo
<br>
class/ompi_rb_tree.lo class/ompi_seq_tracker.lo attribute/attribute.lo
<br>
attribute/attribute_predefined.lo communicator/comm_init.lo
<br>
communicator/comm.lo communicator/comm_cid.lo communicator/comm_dyn.lo
<br>
communicator/comm_publish.lo errhandler/errhandler.lo
<br>
errhandler/errhandler_invoke.lo errhandler/errhandler_predefined.lo
<br>
errhandler/errcode.lo errhandler/errcode-internal.lo file/file.lo
<br>
group/group.lo group/group_init.lo group/group_set_rank.lo info/info.lo
<br>
op/op.lo op/op_predefined.lo  proc/proc.lo request/grequest.lo
<br>
request/request.lo request/req_test.lo request/req_wait.lo
<br>
runtime/ompi_mpi_abort.lo runtime/ompi_mpi_init.lo
<br>
runtime/ompi_mpi_finalize.lo runtime/ompi_mpi_params.lo
<br>
runtime/ompi_mpi_preconnect.lo win/win.lo datatype/libdatatype.la
<br>
debuggers/libdebuggers.la mpi/c/libmpi_c.la
<br>
mpi/c/profile/libmpi_c_pmpi.la mpi/f77/libmpi_f77_base.la
<br>
mca/allocator/libmca_allocator.la
<br>
mca/allocator/bucket/libmca_allocator_bucket.la
<br>
mca/allocator/basic/libmca_allocator_basic.la  mca/bml/libmca_bml.la
<br>
mca/bml/r2/libmca_bml_r2.la  mca/btl/libmca_btl.la
<br>
mca/btl/tcp/libmca_btl_tcp.la mca/btl/mvapi/libmca_btl_mvapi.la
<br>
mca/btl/sm/libmca_btl_sm.la mca/btl/self/libmca_btl_self.la
<br>
mca/coll/libmca_coll.la mca/coll/tuned/libmca_coll_tuned.la
<br>
mca/coll/sm/libmca_coll_sm.la mca/coll/self/libmca_coll_self.la
<br>
mca/coll/basic/libmca_coll_basic.la  mca/common/sm/libmca_common_sm.la
<br>
mca/io/libmca_io.la mca/io/romio/libmca_io_romio.la
<br>
mca/mpool/libmca_mpool.la mca/mpool/sm/libmca_mpool_sm.la
<br>
mca/mpool/rdma/libmca_mpool_rdma.la  mca/mtl/libmca_mtl.la
<br>
mca/osc/libmca_osc.la mca/osc/pt2pt/libmca_osc_pt2pt.la
<br>
mca/pml/libmca_pml.la mca/pml/ob1/libmca_pml_ob1.la
<br>
mca/pml/cm/libmca_pml_cm.la  mca/rcache/libmca_rcache.la
<br>
mca/rcache/vma/libmca_rcache_vma.la  mca/topo/libmca_topo.la
<br>
mca/topo/unity/libmca_topo_unity.la
<br>
/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/orte/libopen-r
<br>
te.la -lnsl -lutil
<br>
<p>libtool: link: /share/apps/intel/cce/9.1.047/bin/icc -shared
<br>
class/.libs/ompi_bitmap.o class/.libs/ompi_free_list.o
<br>
class/.libs/ompi_pointer_array.o class/.libs/ompi_rb_tree.o
<br>
class/.libs/ompi_seq_tracker.o attribute/.libs/attribute.o
<br>
attribute/.libs/attribute_predefined.o communicator/.libs/comm_init.o
<br>
communicator/.libs/comm.o communicator/.libs/comm_cid.o
<br>
communicator/.libs/comm_dyn.o communicator/.libs/comm_publish.o
<br>
errhandler/.libs/errhandler.o errhandler/.libs/errhandler_invoke.o
<br>
errhandler/.libs/errhandler_predefined.o errhandler/.libs/errcode.o
<br>
errhandler/.libs/errcode-internal.o file/.libs/file.o
<br>
group/.libs/group.o group/.libs/group_init.o
<br>
group/.libs/group_set_rank.o info/.libs/info.o op/.libs/op.o
<br>
op/.libs/op_predefined.o proc/.libs/proc.o request/.libs/grequest.o
<br>
request/.libs/request.o request/.libs/req_test.o
<br>
request/.libs/req_wait.o runtime/.libs/ompi_mpi_abort.o
<br>
runtime/.libs/ompi_mpi_init.o runtime/.libs/ompi_mpi_finalize.o
<br>
runtime/.libs/ompi_mpi_params.o runtime/.libs/ompi_mpi_preconnect.o
<br>
win/.libs/win.o  -Wl,--whole-archive datatype/.libs/libdatatype.a
<br>
debuggers/.libs/libdebuggers.a mpi/c/.libs/libmpi_c.a
<br>
mpi/c/profile/.libs/libmpi_c_pmpi.a mpi/f77/.libs/libmpi_f77_base.a
<br>
mca/allocator/.libs/libmca_allocator.a
<br>
mca/allocator/bucket/.libs/libmca_allocator_bucket.a
<br>
mca/allocator/basic/.libs/libmca_allocator_basic.a
<br>
mca/bml/.libs/libmca_bml.a mca/bml/r2/.libs/libmca_bml_r2.a
<br>
mca/btl/.libs/libmca_btl.a mca/btl/tcp/.libs/libmca_btl_tcp.a
<br>
mca/btl/mvapi/.libs/libmca_btl_mvapi.a mca/btl/sm/.libs/libmca_btl_sm.a
<br>
mca/btl/self/.libs/libmca_btl_self.a mca/coll/.libs/libmca_coll.a
<br>
mca/coll/tuned/.libs/libmca_coll_tuned.a
<br>
mca/coll/sm/.libs/libmca_coll_sm.a
<br>
mca/coll/self/.libs/libmca_coll_self.a
<br>
mca/coll/basic/.libs/libmca_coll_basic.a
<br>
mca/common/sm/.libs/libmca_common_sm_noinst.a mca/io/.libs/libmca_io.a
<br>
mca/io/romio/.libs/libmca_io_romio.a mca/mpool/.libs/libmca_mpool.a
<br>
mca/mpool/sm/.libs/libmca_mpool_sm.a
<br>
mca/mpool/rdma/.libs/libmca_mpool_rdma.a mca/mtl/.libs/libmca_mtl.a
<br>
mca/osc/.libs/libmca_osc.a mca/osc/pt2pt/.libs/libmca_osc_pt2pt.a
<br>
mca/pml/.libs/libmca_pml.a mca/pml/ob1/.libs/libmca_pml_ob1.a
<br>
mca/pml/cm/.libs/libmca_pml_cm.a mca/rcache/.libs/libmca_rcache.a
<br>
mca/rcache/vma/.libs/libmca_rcache_vma.a mca/topo/.libs/libmca_topo.a
<br>
mca/topo/unity/.libs/libmca_topo_unity.a -Wl,--no-whole-archive
<br>
-Wl,-rpath
<br>
-Wl,/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/orte/.libs
<br>
-Wl,-rpath
<br>
-Wl,/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/opal/.libs
<br>
-Wl,-rpath -Wl,/share/apps/openmpi/intel/openmpi-1.2.4-64/lib
<br>
-L/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/opal/.libs
<br>
-L/share/apps/intel/cce/9.1.047/lib -lvapi -lmosal -lrt
<br>
/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/orte/.libs/lib
<br>
open-rte.so
<br>
/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/opal/.libs/lib
<br>
open-pal.so -lnuma -ldl -lnsl -lutil  -pthread   -pthread -Wl,-soname
<br>
-Wl,libmpi.so.0 -o .libs/libmpi.so.0.0.0
<br>
<p>IPO link: can not find -lvapi
<br>
<p>icc: error: problem during multi-file optimization compilation (code 1)
<br>
<p>make[2]: *** [libmpi.la] Error 1
<br>
<p>make[2]: Leaving directory
<br>
`/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/ompi'
<br>
<p>make[1]: *** [all-recursive] Error 1
<br>
<p>make[1]: Leaving directory
<br>
`/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/ompi'
<br>
<p>make: *** [all-recursive] Error 1
<br>
<p>&nbsp;
<br>
<p>-----
<br>
<p>Mike Hanby
<br>
<p>Information Systems Specialist II
<br>
<p>School of Engineering Dean's Office
<br>
<p>University of Alabama at Birmingham
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4404/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4405.php">Jeff Squyres: "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;"</a>
<li><strong>Previous message:</strong> <a href="4403.php">Robert Latham: "Re: [OMPI users] MPI_Request and attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4405.php">Jeff Squyres: "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;"</a>
<li><strong>Reply:</strong> <a href="4405.php">Jeff Squyres: "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;"</a>
<li><strong>Reply:</strong> <a href="4407.php">Chris Slaughter: "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;"</a>
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
