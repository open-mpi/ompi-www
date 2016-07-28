<?
$subject_val = "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 17:43:55 2007" -->
<!-- isoreceived="20071105224355" -->
<!-- sent="Mon, 5 Nov 2007 17:43:44 -0500" -->
<!-- isosent="20071105224344" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &amp;quot;IPO link: can not find -lvapi&amp;quot;" -->
<!-- id="15138B80-5AF9-4196-A93A-167D520B55C3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 17:43:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4406.php">Mike Hanby: "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infinibandsupport &quot;IPO link: can not find -lvapi&quot;"</a>
<li><strong>Previous message:</strong> <a href="4404.php">Mike Hanby: "[OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;"</a>
<li><strong>In reply to:</strong> <a href="4404.php">Mike Hanby: "[OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4406.php">Mike Hanby: "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infinibandsupport &quot;IPO link: can not find -lvapi&quot;"</a>
<li><strong>Reply:</strong> <a href="4406.php">Mike Hanby: "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infinibandsupport &quot;IPO link: can not find -lvapi&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there any chance that you can upgrade to the OFED IB stack?  Cisco  
<br>
is recommending OFED to all of its customers who are able to upgrade:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#vapi-support">http://www.open-mpi.org/faq/?category=openfabrics#vapi-support</a>
<br>
<p>If you can't upgrade, we'll continue to diagnose (please see <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>) 
<br>
, but I thought I'd at least ask...
<br>
<p>On Nov 5, 2007, at 5:39 PM, Mike Hanby wrote:
<br>
<p><span class="quotelev1">&gt; Howdy,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm attempting to compile OpenMPI using Intel compilers (9.1.047)  
</span><br>
<span class="quotelev1">&gt; with Topspin Infiniband support (on CentOS 4.4 64bit).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configuring:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc CXX=icpc FC=ifort F77=ifort F90=ifort --with- 
</span><br>
<span class="quotelev1">&gt; mvapi=/usr/local/topspin --with-mvapi-libdir=/usr/local/topspin/ 
</span><br>
<span class="quotelev1">&gt; lib64 --enable-static --prefix=/share/apps/openmpi/intel/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4-64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make runs for 5 minutes or so and errors with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IPO link: can not find -lvapi
</span><br>
<span class="quotelev1">&gt; icc: error: problem during multi-file optimization compilation (code  
</span><br>
<span class="quotelev1">&gt; 1)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmpi.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/makeuser/tmp/openmpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4_64/openmpi-1.2.4/ompi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/makeuser/tmp/openmpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4_64/openmpi-1.2.4/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the same configuration for OpenMPI 1.1.2 and it compiled and  
</span><br>
<span class="quotelev1">&gt; installed successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following are the last several lines in the make log file:
</span><br>
<span class="quotelev1">&gt; ====================================================================
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /share/apps/intel/cce/9.1.047/bin/icc - 
</span><br>
<span class="quotelev1">&gt; DHAVE_CONFIG_H -I. -I../opal/include -I../orte/include -I../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I.. -I/share/apps/intel/cce/9.1.047/include -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; finline-functions -fno-strict-aliasing -restrict -pthread -MT  
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_params.lo -MD -MP -MF runtime/.deps/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_params.Tpo -c runtime/ompi_mpi_params.c -o runtime/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_params.o &gt;/dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; depbase=`echo runtime/ompi_mpi_preconnect.lo | sed 's|[^/]*$|.deps/ 
</span><br>
<span class="quotelev1">&gt; &amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile /share/apps/intel/cce/ 
</span><br>
<span class="quotelev1">&gt; 9.1.047/bin/icc -DHAVE_CONFIG_H -I. -I../opal/include -I../orte/ 
</span><br>
<span class="quotelev1">&gt; include -I../ompi/include   -I.. -I/share/apps/intel/cce/9.1.047/ 
</span><br>
<span class="quotelev1">&gt; include   -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; restrict -pthread -MT runtime/ompi_mpi_preconnect.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; $depbase.Tpo -c -o runtime/ompi_mpi_preconnect.lo runtime/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_preconnect.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /share/apps/intel/cce/9.1.047/bin/icc - 
</span><br>
<span class="quotelev1">&gt; DHAVE_CONFIG_H -I. -I../opal/include -I../orte/include -I../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I.. -I/share/apps/intel/cce/9.1.047/include -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; finline-functions -fno-strict-aliasing -restrict -pthread -MT  
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_preconnect.lo -MD -MP -MF runtime/.deps/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_preconnect.Tpo -c runtime/ompi_mpi_preconnect.c  -fPIC - 
</span><br>
<span class="quotelev1">&gt; DPIC -o runtime/.libs/ompi_mpi_preconnect.o
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /share/apps/intel/cce/9.1.047/bin/icc - 
</span><br>
<span class="quotelev1">&gt; DHAVE_CONFIG_H -I. -I../opal/include -I../orte/include -I../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I.. -I/share/apps/intel/cce/9.1.047/include -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; finline-functions -fno-strict-aliasing -restrict -pthread -MT  
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_preconnect.lo -MD -MP -MF runtime/.deps/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_preconnect.Tpo -c runtime/ompi_mpi_preconnect.c -o runtime/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_preconnect.o &gt;/dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; depbase=`echo win/win.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=compile /share/apps/intel/cce/ 
</span><br>
<span class="quotelev1">&gt; 9.1.047/bin/icc -DHAVE_CONFIG_H -I. -I../opal/include -I../orte/ 
</span><br>
<span class="quotelev1">&gt; include -I../ompi/include   -I.. -I/share/apps/intel/cce/9.1.047/ 
</span><br>
<span class="quotelev1">&gt; include   -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; restrict -pthread -MT win/win.lo -MD -MP -MF $depbase.Tpo -c -o win/ 
</span><br>
<span class="quotelev1">&gt; win.lo win/win.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /share/apps/intel/cce/9.1.047/bin/icc - 
</span><br>
<span class="quotelev1">&gt; DHAVE_CONFIG_H -I. -I../opal/include -I../orte/include -I../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I.. -I/share/apps/intel/cce/9.1.047/include -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; finline-functions -fno-strict-aliasing -restrict -pthread -MT win/ 
</span><br>
<span class="quotelev1">&gt; win.lo -MD -MP -MF win/.deps/win.Tpo -c win/win.c  -fPIC -DPIC -o  
</span><br>
<span class="quotelev1">&gt; win/.libs/win.o
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /share/apps/intel/cce/9.1.047/bin/icc - 
</span><br>
<span class="quotelev1">&gt; DHAVE_CONFIG_H -I. -I../opal/include -I../orte/include -I../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I.. -I/share/apps/intel/cce/9.1.047/include -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; finline-functions -fno-strict-aliasing -restrict -pthread -MT win/ 
</span><br>
<span class="quotelev1">&gt; win.lo -MD -MP -MF win/.deps/win.Tpo -c win/win.c -o win/win.o &gt;/dev/ 
</span><br>
<span class="quotelev1">&gt; null 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC   --mode=link /share/apps/intel/cce/ 
</span><br>
<span class="quotelev1">&gt; 9.1.047/bin/icc  -O3 -DNDEBUG -finline-functions -fno-strict- 
</span><br>
<span class="quotelev1">&gt; aliasing -restrict -pthread  -export-dynamic -L/share/apps/intel/cce/ 
</span><br>
<span class="quotelev1">&gt; 9.1.047/lib  -o libmpi.la -rpath /share/apps/openmpi/intel/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4-64/lib  class/ompi_bitmap.lo class/ompi_free_list.lo  
</span><br>
<span class="quotelev1">&gt; class/ompi_pointer_array.lo class/ompi_rb_tree.lo class/ 
</span><br>
<span class="quotelev1">&gt; ompi_seq_tracker.lo attribute/attribute.lo attribute/ 
</span><br>
<span class="quotelev1">&gt; attribute_predefined.lo communicator/comm_init.lo communicator/ 
</span><br>
<span class="quotelev1">&gt; comm.lo communicator/comm_cid.lo communicator/comm_dyn.lo  
</span><br>
<span class="quotelev1">&gt; communicator/comm_publish.lo errhandler/errhandler.lo errhandler/ 
</span><br>
<span class="quotelev1">&gt; errhandler_invoke.lo errhandler/errhandler_predefined.lo errhandler/ 
</span><br>
<span class="quotelev1">&gt; errcode.lo errhandler/errcode-internal.lo file/file.lo group/ 
</span><br>
<span class="quotelev1">&gt; group.lo group/group_init.lo group/group_set_rank.lo info/info.lo op/ 
</span><br>
<span class="quotelev1">&gt; op.lo op/op_predefined.lo  proc/proc.lo request/grequest.lo request/ 
</span><br>
<span class="quotelev1">&gt; request.lo request/req_test.lo request/req_wait.lo runtime/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_abort.lo runtime/ompi_mpi_init.lo runtime/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_finalize.lo runtime/ompi_mpi_params.lo runtime/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_preconnect.lo win/win.lo datatype/libdatatype.la debuggers/ 
</span><br>
<span class="quotelev1">&gt; libdebuggers.la mpi/c/libmpi_c.la  mpi/c/profile/libmpi_c_pmpi.la  
</span><br>
<span class="quotelev1">&gt; mpi/f77/libmpi_f77_base.la mca/allocator/libmca_allocator.la mca/ 
</span><br>
<span class="quotelev1">&gt; allocator/bucket/libmca_allocator_bucket.la mca/allocator/basic/ 
</span><br>
<span class="quotelev1">&gt; libmca_allocator_basic.la  mca/bml/libmca_bml.la mca/bml/r2/ 
</span><br>
<span class="quotelev1">&gt; libmca_bml_r2.la  mca/btl/libmca_btl.la mca/btl/tcp/ 
</span><br>
<span class="quotelev1">&gt; libmca_btl_tcp.la mca/btl/mvapi/libmca_btl_mvapi.la mca/btl/sm/ 
</span><br>
<span class="quotelev1">&gt; libmca_btl_sm.la mca/btl/self/libmca_btl_self.la  mca/coll/ 
</span><br>
<span class="quotelev1">&gt; libmca_coll.la mca/coll/tuned/libmca_coll_tuned.la mca/coll/sm/ 
</span><br>
<span class="quotelev1">&gt; libmca_coll_sm.la mca/coll/self/libmca_coll_self.la mca/coll/basic/ 
</span><br>
<span class="quotelev1">&gt; libmca_coll_basic.la  mca/common/sm/libmca_common_sm.la  mca/io/ 
</span><br>
<span class="quotelev1">&gt; libmca_io.la mca/io/romio/libmca_io_romio.la  mca/mpool/ 
</span><br>
<span class="quotelev1">&gt; libmca_mpool.la mca/mpool/sm/libmca_mpool_sm.la mca/mpool/rdma/ 
</span><br>
<span class="quotelev1">&gt; libmca_mpool_rdma.la  mca/mtl/libmca_mtl.la  mca/osc/libmca_osc.la  
</span><br>
<span class="quotelev1">&gt; mca/osc/pt2pt/libmca_osc_pt2pt.la  mca/pml/libmca_pml.la mca/pml/ob1/ 
</span><br>
<span class="quotelev1">&gt; libmca_pml_ob1.la mca/pml/cm/libmca_pml_cm.la  mca/rcache/ 
</span><br>
<span class="quotelev1">&gt; libmca_rcache.la mca/rcache/vma/libmca_rcache_vma.la  mca/topo/ 
</span><br>
<span class="quotelev1">&gt; libmca_topo.la mca/topo/unity/libmca_topo_unity.la  /home/makeuser/ 
</span><br>
<span class="quotelev1">&gt; tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/orte/libopen-rte.la -lnsl  
</span><br>
<span class="quotelev1">&gt; -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: /share/apps/intel/cce/9.1.047/bin/icc -shared   
</span><br>
<span class="quotelev1">&gt; class/.libs/ompi_bitmap.o class/.libs/ompi_free_list.o class/.libs/ 
</span><br>
<span class="quotelev1">&gt; ompi_pointer_array.o class/.libs/ompi_rb_tree.o class/.libs/ 
</span><br>
<span class="quotelev1">&gt; ompi_seq_tracker.o attribute/.libs/attribute.o attribute/.libs/ 
</span><br>
<span class="quotelev1">&gt; attribute_predefined.o communicator/.libs/comm_init.o  
</span><br>
<span class="quotelev1">&gt; communicator/.libs/comm.o communicator/.libs/comm_cid.o  
</span><br>
<span class="quotelev1">&gt; communicator/.libs/comm_dyn.o communicator/.libs/comm_publish.o  
</span><br>
<span class="quotelev1">&gt; errhandler/.libs/errhandler.o errhandler/.libs/errhandler_invoke.o  
</span><br>
<span class="quotelev1">&gt; errhandler/.libs/errhandler_predefined.o errhandler/.libs/errcode.o  
</span><br>
<span class="quotelev1">&gt; errhandler/.libs/errcode-internal.o file/.libs/file.o group/.libs/ 
</span><br>
<span class="quotelev1">&gt; group.o group/.libs/group_init.o group/.libs/group_set_rank.o  
</span><br>
<span class="quotelev1">&gt; info/.libs/info.o op/.libs/op.o op/.libs/op_predefined.o proc/.libs/ 
</span><br>
<span class="quotelev1">&gt; proc.o request/.libs/grequest.o request/.libs/request.o  
</span><br>
<span class="quotelev1">&gt; request/.libs/req_test.o request/.libs/req_wait.o runtime/.libs/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_abort.o runtime/.libs/ompi_mpi_init.o runtime/.libs/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_finalize.o runtime/.libs/ompi_mpi_params.o runtime/.libs/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_preconnect.o win/.libs/win.o  -Wl,--whole-archive  
</span><br>
<span class="quotelev1">&gt; datatype/.libs/libdatatype.a debuggers/.libs/libdebuggers.a mpi/ 
</span><br>
<span class="quotelev1">&gt; c/.libs/libmpi_c.a mpi/c/profile/.libs/libmpi_c_pmpi.a mpi/f77/.libs/ 
</span><br>
<span class="quotelev1">&gt; libmpi_f77_base.a mca/allocator/.libs/libmca_allocator.a mca/ 
</span><br>
<span class="quotelev1">&gt; allocator/bucket/.libs/libmca_allocator_bucket.a mca/allocator/ 
</span><br>
<span class="quotelev1">&gt; basic/.libs/libmca_allocator_basic.a mca/bml/.libs/libmca_bml.a mca/ 
</span><br>
<span class="quotelev1">&gt; bml/r2/.libs/libmca_bml_r2.a mca/btl/.libs/libmca_btl.a mca/btl/ 
</span><br>
<span class="quotelev1">&gt; tcp/.libs/libmca_btl_tcp.a mca/btl/mvapi/.libs/libmca_btl_mvapi.a  
</span><br>
<span class="quotelev1">&gt; mca/btl/sm/.libs/libmca_btl_sm.a mca/btl/self/.libs/ 
</span><br>
<span class="quotelev1">&gt; libmca_btl_self.a mca/coll/.libs/libmca_coll.a mca/coll/tuned/.libs/ 
</span><br>
<span class="quotelev1">&gt; libmca_coll_tuned.a mca/coll/sm/.libs/libmca_coll_sm.a mca/coll/ 
</span><br>
<span class="quotelev1">&gt; self/.libs/libmca_coll_self.a mca/coll/basic/.libs/ 
</span><br>
<span class="quotelev1">&gt; libmca_coll_basic.a mca/common/sm/.libs/libmca_common_sm_noinst.a  
</span><br>
<span class="quotelev1">&gt; mca/io/.libs/libmca_io.a mca/io/romio/.libs/libmca_io_romio.a mca/ 
</span><br>
<span class="quotelev1">&gt; mpool/.libs/libmca_mpool.a mca/mpool/sm/.libs/libmca_mpool_sm.a mca/ 
</span><br>
<span class="quotelev1">&gt; mpool/rdma/.libs/libmca_mpool_rdma.a mca/mtl/.libs/libmca_mtl.a mca/ 
</span><br>
<span class="quotelev1">&gt; osc/.libs/libmca_osc.a mca/osc/pt2pt/.libs/libmca_osc_pt2pt.a mca/ 
</span><br>
<span class="quotelev1">&gt; pml/.libs/libmca_pml.a mca/pml/ob1/.libs/libmca_pml_ob1.a mca/pml/ 
</span><br>
<span class="quotelev1">&gt; cm/.libs/libmca_pml_cm.a mca/rcache/.libs/libmca_rcache.a mca/rcache/ 
</span><br>
<span class="quotelev1">&gt; vma/.libs/libmca_rcache_vma.a mca/topo/.libs/libmca_topo.a mca/topo/ 
</span><br>
<span class="quotelev1">&gt; unity/.libs/libmca_topo_unity.a -Wl,--no-whole-archive  -Wl,-rpath - 
</span><br>
<span class="quotelev1">&gt; Wl,/home/makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/ 
</span><br>
<span class="quotelev1">&gt; orte/.libs -Wl,-rpath -Wl,/home/makeuser/tmp/openmpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4_64/openmpi-1.2.4/opal/.libs -Wl,-rpath -Wl,/share/apps/ 
</span><br>
<span class="quotelev1">&gt; openmpi/intel/openmpi-1.2.4-64/lib -L/home/makeuser/tmp/openmpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4_64/openmpi-1.2.4/opal/.libs -L/share/apps/intel/cce/ 
</span><br>
<span class="quotelev1">&gt; 9.1.047/lib -lvapi -lmosal -lrt /home/makeuser/tmp/openmpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4_64/openmpi-1.2.4/orte/.libs/libopen-rte.so /home/ 
</span><br>
<span class="quotelev1">&gt; makeuser/tmp/openmpi/openmpi-1.2.4_64/openmpi-1.2.4/opal/.libs/ 
</span><br>
<span class="quotelev1">&gt; libopen-pal.so -lnuma -ldl -lnsl -lutil  -pthread   -pthread -Wl,- 
</span><br>
<span class="quotelev1">&gt; soname -Wl,libmpi.so.0 -o .libs/libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; IPO link: can not find -lvapi
</span><br>
<span class="quotelev1">&gt; icc: error: problem during multi-file optimization compilation (code  
</span><br>
<span class="quotelev1">&gt; 1)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmpi.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/makeuser/tmp/openmpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4_64/openmpi-1.2.4/ompi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/makeuser/tmp/openmpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4_64/openmpi-1.2.4/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; Mike Hanby
</span><br>
<span class="quotelev1">&gt; Information Systems Specialist II
</span><br>
<span class="quotelev1">&gt; School of Engineering Dean's Office
</span><br>
<span class="quotelev1">&gt; University of Alabama at Birmingham
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4406.php">Mike Hanby: "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infinibandsupport &quot;IPO link: can not find -lvapi&quot;"</a>
<li><strong>Previous message:</strong> <a href="4404.php">Mike Hanby: "[OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;"</a>
<li><strong>In reply to:</strong> <a href="4404.php">Mike Hanby: "[OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4406.php">Mike Hanby: "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infinibandsupport &quot;IPO link: can not find -lvapi&quot;"</a>
<li><strong>Reply:</strong> <a href="4406.php">Mike Hanby: "Re: [OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infinibandsupport &quot;IPO link: can not find -lvapi&quot;"</a>
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
