<?
$subject_val = "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 18:00:45 2007" -->
<!-- isoreceived="20071105230045" -->
<!-- sent="Mon, 5 Nov 2007 17:59:03 -0500" -->
<!-- isosent="20071105225903" -->
<!-- name="Chris Slaughter" -->
<!-- email="slaughterc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &amp;quot;IPO link: can not find -lvapi&amp;quot;" -->
<!-- id="9a457d410711051459kac58128kb14465381ace17ac_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="16AE1027F52DD64CB278BD8950529B636204DA_at_UABEXMB5.ad.uab.edu" -->
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
<strong>From:</strong> Chris Slaughter (<em>slaughterc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 17:59:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4408.php">Michael Schulz: "[OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="4406.php">Mike Hanby: "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infinibandsupport &quot;IPO link: can not find -lvapi&quot;"</a>
<li><strong>In reply to:</strong> <a href="4404.php">Mike Hanby: "[OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had this problem with the SilverStorm/QLogic stack.  The vapi
<br>
includes were in /usr/include/iba/vapi.  I created a link
<br>
/usr/include/vapi that points to /usr/include/iba/vapi, and I
<br>
was able to compile.  Not sure if this is what topspin does as
<br>
well...
<br>
<p>On 11/5/07, Mike Hanby &lt;mhanby_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howdy,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm attempting to compile OpenMPI using Intel compilers (9.1.047) with
</span><br>
<span class="quotelev1">&gt; Topspin Infiniband support (on CentOS 4.4 64bit).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configuring:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc CXX=icpc FC=ifort F77=ifort F90=ifort
</span><br>
<span class="quotelev1">&gt; --with-mvapi=/usr/local/topspin
</span><br>
<span class="quotelev1">&gt; --with-mvapi-libdir=/usr/local/topspin/lib64
</span><br>
<span class="quotelev1">&gt; --enable-static
</span><br>
<span class="quotelev1">&gt; --prefix=/share/apps/openmpi/intel/openmpi-1.2.4-64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make runs for 5 minutes or so and errors with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IPO link: can not find -lvapi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; icc: error: problem during multi-file optimization compilation (code 1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmpi.la] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the same configuration for OpenMPI 1.1.2 and it compiled and
</span><br>
<span class="quotelev1">&gt; installed successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following are the last several lines in the make log file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ====================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /share/apps/intel/cce/9.1.047/bin/icc
</span><br>
<span class="quotelev1">&gt; -DHAVE_CONFIG_H -I. -I../opal/include -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev1">&gt; -I.. -I/share/apps/intel/cce/9.1.047/include -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict -pthread -MT
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_params.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; runtime/.deps/ompi_mpi_params.Tpo -c
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_params.c -o runtime/ompi_mpi_params.o &gt;/dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; depbase=`echo runtime/ompi_mpi_preconnect.lo | sed
</span><br>
<span class="quotelev1">&gt; 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile
</span><br>
<span class="quotelev1">&gt; /share/apps/intel/cce/9.1.047/bin/icc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I../opal/include -I../orte/include -I../ompi/include   -I..
</span><br>
<span class="quotelev1">&gt; -I/share/apps/intel/cce/9.1.047/include   -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict -pthread -MT
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_preconnect.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_preconnect.lo runtime/ompi_mpi_preconnect.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /share/apps/intel/cce/9.1.047/bin/icc
</span><br>
<span class="quotelev1">&gt; -DHAVE_CONFIG_H -I. -I../opal/include -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev1">&gt; -I.. -I/share/apps/intel/cce/9.1.047/include -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict -pthread -MT
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_preconnect.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; runtime/.deps/ompi_mpi_preconnect.Tpo -c
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_preconnect.c  -fPIC -DPIC -o
</span><br>
<span class="quotelev1">&gt; runtime/.libs/ompi_mpi_preconnect.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /share/apps/intel/cce/9.1.047/bin/icc
</span><br>
<span class="quotelev1">&gt; -DHAVE_CONFIG_H -I. -I../opal/include -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev1">&gt; -I.. -I/share/apps/intel/cce/9.1.047/include -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict -pthread -MT
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_preconnect.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; runtime/.deps/ompi_mpi_preconnect.Tpo -c
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_preconnect.c -o runtime/ompi_mpi_preconnect.o &gt;/dev/null
</span><br>
<span class="quotelev1">&gt; 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; depbase=`echo win/win.lo | sed
</span><br>
<span class="quotelev1">&gt; 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile
</span><br>
<span class="quotelev1">&gt; /share/apps/intel/cce/9.1.047/bin/icc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I../opal/include -I../orte/include -I../ompi/include   -I..
</span><br>
<span class="quotelev1">&gt; -I/share/apps/intel/cce/9.1.047/include   -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict -pthread -MT win/win.lo
</span><br>
<span class="quotelev1">&gt; -MD -MP -MF $depbase.Tpo -c -o win/win.lo win/win.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /share/apps/intel/cce/9.1.047/bin/icc
</span><br>
<span class="quotelev1">&gt; -DHAVE_CONFIG_H -I. -I../opal/include -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev1">&gt; -I.. -I/share/apps/intel/cce/9.1.047/include -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict -pthread -MT win/win.lo
</span><br>
<span class="quotelev1">&gt; -MD -MP -MF win/.deps/win.Tpo -c win/win.c  -fPIC -DPIC -o win/.libs/win.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /share/apps/intel/cce/9.1.047/bin/icc
</span><br>
<span class="quotelev1">&gt; -DHAVE_CONFIG_H -I. -I../opal/include -I../orte/include -I../ompi/include
</span><br>
<span class="quotelev1">&gt; -I.. -I/share/apps/intel/cce/9.1.047/include -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict -pthread -MT win/win.lo
</span><br>
<span class="quotelev1">&gt; -MD -MP -MF win/.deps/win.Tpo -c win/win.c -o win/win.o &gt;/dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=link
</span><br>
<span class="quotelev1">&gt; /share/apps/intel/cce/9.1.047/bin/icc  -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict -pthread  -export-dynamic
</span><br>
<span class="quotelev1">&gt; -L/share/apps/intel/cce/9.1.047/lib  -o libmpi.la -rpath
</span><br>
<span class="quotelev1">&gt; /share/apps/openmpi/intel/openmpi-1.2.4-64/lib
</span><br>
<span class="quotelev1">&gt; class/ompi_bitmap.lo class/ompi_free_list.lo class/ompi_pointer_array.lo
</span><br>
<span class="quotelev1">&gt; class/ompi_rb_tree.lo class/ompi_seq_tracker.lo attribute/attribute.lo
</span><br>
<span class="quotelev1">&gt; attribute/attribute_predefined.lo communicator/comm_init.lo
</span><br>
<span class="quotelev1">&gt; communicator/comm.lo communicator/comm_cid.lo communicator/comm_dyn.lo
</span><br>
<span class="quotelev1">&gt; communicator/comm_publish.lo errhandler/errhandler.lo
</span><br>
<span class="quotelev1">&gt; errhandler/errhandler_invoke.lo
</span><br>
<span class="quotelev1">&gt; errhandler/errhandler_predefined.lo errhandler/errcode.lo
</span><br>
<span class="quotelev1">&gt; errhandler/errcode-internal.lo file/file.lo group/group.lo
</span><br>
<span class="quotelev1">&gt; group/group_init.lo group/group_set_rank.lo info/info.lo op/op.lo
</span><br>
<span class="quotelev1">&gt; op/op_predefined.lo  proc/proc.lo request/grequest.lo request/request.lo
</span><br>
<span class="quotelev1">&gt; request/req_test.lo request/req_wait.lo runtime/ompi_mpi_abort.lo
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_init.lo runtime/ompi_mpi_finalize.lo
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_params.lo runtime/ompi_mpi_preconnect.lo win/win.lo
</span><br>
<span class="quotelev1">&gt; datatype/libdatatype.la debuggers/libdebuggers.la mpi/c/libmpi_c.la
</span><br>
<span class="quotelev1">&gt; mpi/c/profile/libmpi_c_pmpi.la mpi/f77/libmpi_f77_base.la
</span><br>
<span class="quotelev1">&gt; mca/allocator/libmca_allocator.la
</span><br>
<span class="quotelev1">&gt; mca/allocator/bucket/libmca_allocator_bucket.la
</span><br>
<span class="quotelev1">&gt; mca/allocator/basic/libmca_allocator_basic.la
</span><br>
<span class="quotelev1">&gt; mca/bml/libmca_bml.la mca/bml/r2/libmca_bml_r2.la  mca/btl/libmca_btl.la
</span><br>
<span class="quotelev1">&gt; mca/btl/tcp/libmca_btl_tcp.la
</span><br>
<span class="quotelev1">&gt; mca/btl/mvapi/libmca_btl_mvapi.la
</span><br>
<span class="quotelev1">&gt; mca/btl/sm/libmca_btl_sm.la mca/btl/self/libmca_btl_self.la
</span><br>
<span class="quotelev1">&gt;  mca/coll/libmca_coll.la
</span><br>
<span class="quotelev1">&gt; mca/coll/tuned/libmca_coll_tuned.la
</span><br>
<span class="quotelev1">&gt; mca/coll/sm/libmca_coll_sm.la
</span><br>
<span class="quotelev1">&gt; mca/coll/self/libmca_coll_self.la
</span><br>
<span class="quotelev1">&gt; mca/coll/basic/libmca_coll_basic.la
</span><br>
<span class="quotelev1">&gt; mca/common/sm/libmca_common_sm.la  mca/io/libmca_io.la
</span><br>
<span class="quotelev1">&gt; mca/io/romio/libmca_io_romio.la  mca/mpool/libmca_mpool.la
</span><br>
<span class="quotelev1">&gt; mca/mpool/sm/libmca_mpool_sm.la
</span><br>
<span class="quotelev1">&gt; mca/mpool/rdma/libmca_mpool_rdma.la  mca/mtl/libmca_mtl.la
</span><br>
<span class="quotelev1">&gt; mca/osc/libmca_osc.la mca/osc/pt2pt/libmca_osc_pt2pt.la
</span><br>
<span class="quotelev1">&gt; mca/pml/libmca_pml.la mca/pml/ob1/libmca_pml_ob1.la
</span><br>
<span class="quotelev1">&gt; mca/pml/cm/libmca_pml_cm.la  mca/rcache/libmca_rcache.la
</span><br>
<span class="quotelev1">&gt; mca/rcache/vma/libmca_rcache_vma.la
</span><br>
<span class="quotelev1">&gt; mca/topo/libmca_topo.la mca/topo/unity/libmca_topo_unity.la
</span><br>
<span class="quotelev1">&gt; /home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/orte/libopen-rte.la
</span><br>
<span class="quotelev1">&gt; -lnsl -lutil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: link: /share/apps/intel/cce/9.1.047/bin/icc
</span><br>
<span class="quotelev1">&gt; -shared  class/.libs/ompi_bitmap.o class/.libs/ompi_free_list.o
</span><br>
<span class="quotelev1">&gt; class/.libs/ompi_pointer_array.o class/.libs/ompi_rb_tree.o
</span><br>
<span class="quotelev1">&gt; class/.libs/ompi_seq_tracker.o attribute/.libs/attribute.o
</span><br>
<span class="quotelev1">&gt; attribute/.libs/attribute_predefined.o
</span><br>
<span class="quotelev1">&gt; communicator/.libs/comm_init.o communicator/.libs/comm.o
</span><br>
<span class="quotelev1">&gt; communicator/.libs/comm_cid.o communicator/.libs/comm_dyn.o
</span><br>
<span class="quotelev1">&gt; communicator/.libs/comm_publish.o
</span><br>
<span class="quotelev1">&gt; errhandler/.libs/errhandler.o
</span><br>
<span class="quotelev1">&gt; errhandler/.libs/errhandler_invoke.o
</span><br>
<span class="quotelev1">&gt; errhandler/.libs/errhandler_predefined.o
</span><br>
<span class="quotelev1">&gt; errhandler/.libs/errcode.o errhandler/.libs/errcode-internal.o
</span><br>
<span class="quotelev1">&gt; file/.libs/file.o group/.libs/group.o group/.libs/group_init.o
</span><br>
<span class="quotelev1">&gt; group/.libs/group_set_rank.o info/.libs/info.o op/.libs/op.o
</span><br>
<span class="quotelev1">&gt; op/.libs/op_predefined.o proc/.libs/proc.o request/.libs/grequest.o
</span><br>
<span class="quotelev1">&gt; request/.libs/request.o request/.libs/req_test.o request/.libs/req_wait.o
</span><br>
<span class="quotelev1">&gt; runtime/.libs/ompi_mpi_abort.o runtime/.libs/ompi_mpi_init.o
</span><br>
<span class="quotelev1">&gt; runtime/.libs/ompi_mpi_finalize.o
</span><br>
<span class="quotelev1">&gt; runtime/.libs/ompi_mpi_params.o
</span><br>
<span class="quotelev1">&gt; runtime/.libs/ompi_mpi_preconnect.o win/.libs/win.o
</span><br>
<span class="quotelev1">&gt; -Wl,--whole-archive datatype/.libs/libdatatype.a
</span><br>
<span class="quotelev1">&gt; debuggers/.libs/libdebuggers.a mpi/c/.libs/libmpi_c.a
</span><br>
<span class="quotelev1">&gt; mpi/c/profile/.libs/libmpi_c_pmpi.a
</span><br>
<span class="quotelev1">&gt; mpi/f77/.libs/libmpi_f77_base.a
</span><br>
<span class="quotelev1">&gt; mca/allocator/.libs/libmca_allocator.a
</span><br>
<span class="quotelev1">&gt; mca/allocator/bucket/.libs/libmca_allocator_bucket.a
</span><br>
<span class="quotelev1">&gt; mca/allocator/basic/.libs/libmca_allocator_basic.a
</span><br>
<span class="quotelev1">&gt; mca/bml/.libs/libmca_bml.a mca/bml/r2/.libs/libmca_bml_r2.a
</span><br>
<span class="quotelev1">&gt; mca/btl/.libs/libmca_btl.a
</span><br>
<span class="quotelev1">&gt; mca/btl/tcp/.libs/libmca_btl_tcp.a
</span><br>
<span class="quotelev1">&gt; mca/btl/mvapi/.libs/libmca_btl_mvapi.a
</span><br>
<span class="quotelev1">&gt; mca/btl/sm/.libs/libmca_btl_sm.a
</span><br>
<span class="quotelev1">&gt; mca/btl/self/.libs/libmca_btl_self.a
</span><br>
<span class="quotelev1">&gt; mca/coll/.libs/libmca_coll.a
</span><br>
<span class="quotelev1">&gt; mca/coll/tuned/.libs/libmca_coll_tuned.a
</span><br>
<span class="quotelev1">&gt; mca/coll/sm/.libs/libmca_coll_sm.a
</span><br>
<span class="quotelev1">&gt; mca/coll/self/.libs/libmca_coll_self.a
</span><br>
<span class="quotelev1">&gt; mca/coll/basic/.libs/libmca_coll_basic.a
</span><br>
<span class="quotelev1">&gt; mca/common/sm/.libs/libmca_common_sm_noinst.a
</span><br>
<span class="quotelev1">&gt; mca/io/.libs/libmca_io.a
</span><br>
<span class="quotelev1">&gt; mca/io/romio/.libs/libmca_io_romio.a
</span><br>
<span class="quotelev1">&gt; mca/mpool/.libs/libmca_mpool.a
</span><br>
<span class="quotelev1">&gt; mca/mpool/sm/.libs/libmca_mpool_sm.a
</span><br>
<span class="quotelev1">&gt; mca/mpool/rdma/.libs/libmca_mpool_rdma.a
</span><br>
<span class="quotelev1">&gt; mca/mtl/.libs/libmca_mtl.a mca/osc/.libs/libmca_osc.a
</span><br>
<span class="quotelev1">&gt; mca/osc/pt2pt/.libs/libmca_osc_pt2pt.a
</span><br>
<span class="quotelev1">&gt; mca/pml/.libs/libmca_pml.a
</span><br>
<span class="quotelev1">&gt; mca/pml/ob1/.libs/libmca_pml_ob1.a
</span><br>
<span class="quotelev1">&gt; mca/pml/cm/.libs/libmca_pml_cm.a
</span><br>
<span class="quotelev1">&gt; mca/rcache/.libs/libmca_rcache.a
</span><br>
<span class="quotelev1">&gt; mca/rcache/vma/.libs/libmca_rcache_vma.a
</span><br>
<span class="quotelev1">&gt; mca/topo/.libs/libmca_topo.a
</span><br>
<span class="quotelev1">&gt; mca/topo/unity/.libs/libmca_topo_unity.a
</span><br>
<span class="quotelev1">&gt; -Wl,--no-whole-archive  -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/orte/.libs
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/opal/.libs
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/share/apps/openmpi/intel/openmpi-1.2.4-64/lib
</span><br>
<span class="quotelev1">&gt; -L/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/opal/.libs
</span><br>
<span class="quotelev1">&gt; -L/share/apps/intel/cce/9.1.047/lib -lvapi -lmosal -lrt
</span><br>
<span class="quotelev1">&gt; /home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/orte/.libs/libopen-rte.so
</span><br>
<span class="quotelev1">&gt; /home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt; -lnuma -ldl -lnsl -lutil  -pthread   -pthread -Wl,-soname -Wl,libmpi.so.0 -o
</span><br>
<span class="quotelev1">&gt; .libs/libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IPO link: can not find -lvapi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; icc: error: problem during multi-file optimization compilation (code 1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmpi.la] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mike Hanby
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Information Systems Specialist II
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; School of Engineering Dean's Office
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; University of Alabama at Birmingham
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4408.php">Michael Schulz: "[OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="4406.php">Mike Hanby: "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infinibandsupport &quot;IPO link: can not find -lvapi&quot;"</a>
<li><strong>In reply to:</strong> <a href="4404.php">Mike Hanby: "[OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;"</a>
<!-- nextthread="start" -->
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
