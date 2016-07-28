<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20557";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 14 10:22:10 2009" -->
<!-- isoreceived="20090214152210" -->
<!-- sent="Sat, 14 Feb 2009 10:21:44 -0500" -->
<!-- isosent="20090214152144" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20557" -->
<!-- id="4B503891-8A6A-4440-A6BC-4F6400906BFD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220902140634s629b11ffoa8bcd279ed429854_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20557<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-14 10:21:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5422.php">Eugene Loh: "Re: [OMPI devel] Announcing searchable OMPI source code tree"</a>
<li><strong>Previous message:</strong> <a href="5420.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20557"</a>
<li><strong>In reply to:</strong> <a href="5420.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20557"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be fixed in r20559.  Thanks.
<br>
<p>On Feb 14, 2009, at 9:34 AM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; This commit appears to have broken the openib BTL on the trunk.
</span><br>
<span class="quotelev1">&gt; It is possible some other commit was the source of the problem, but
</span><br>
<span class="quotelev1">&gt; this is the only commit that touched the openib BTL yesterday, AFAIK.
</span><br>
<span class="quotelev1">&gt; All of IU's MTT tests that tried to use the openib BTL on the trunk
</span><br>
<span class="quotelev1">&gt; failed last night with error messages similar to this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./c_hello: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /san/homedirs/mpiteam/mtt-runs/sif/20090213-Nightly/pb_1/installs/ 
</span><br>
<span class="quotelev1">&gt; FZJW/install/lib/openmpi/mca_btl_openib.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: OPAL_OUTPUT
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 9 with PID 24480 on
</span><br>
<span class="quotelev1">&gt; node sif4 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 13, 2009 at 9:26 PM,  &lt;rusraink_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: rusraink
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2009-02-13 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 20557
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/20557">https://svn.open-mpi.org/trac/ompi/changeset/20557</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; - On the way to get the BTLs split out and lessen dependency on orte:
</span><br>
<span class="quotelev2">&gt;&gt;  Often, orte/util/show_help.h is included, although no functionality
</span><br>
<span class="quotelev2">&gt;&gt;  is required -- instead, most often opal_output.h, or
</span><br>
<span class="quotelev2">&gt;&gt;  orte/mca/rml/rml_types.h
</span><br>
<span class="quotelev2">&gt;&gt;  Please see orte_show_help_replacement.sh commited next.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Local compilation (Linux/x86_64) w/ -Wimplicit-function-declaration
</span><br>
<span class="quotelev2">&gt;&gt;  actually showed two *missing* #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  in orte/mca/odls/base/odls_base_default_fns.c and
</span><br>
<span class="quotelev2">&gt;&gt;  in orte/tools/orte-top/orte-top.c
</span><br>
<span class="quotelev2">&gt;&gt;  Manually added these.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Let's have MTT the last word.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/class/ompi_free_list.c                              
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/class/ompi_seq_tracker.c                            
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/communicator/comm.c                                 
</span><br>
<span class="quotelev2">&gt;&gt; |     3 ++-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/datatype/copy_functions_heterogeneous.c             
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/datatype/datatype_internal.h                        
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/errhandler/errhandler_predefined.c                  
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/file/file.c                                         
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/group/group.h                                       
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/info/info.c                                         
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/bml/base/bml_base_btl.h                         
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/bml/r2/bml_r2.c                                 
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/bml/r2/bml_r2_ft.c                              
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/bml/r2/bml_r2_ft.h                              
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/base/btl_base_error.h                       
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/base/btl_base_mca.c                         
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/base/btl_base_open.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/base/btl_base_select.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/elan/btl_elan.c                             
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/elan/btl_elan.h                             
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/elan/btl_elan_component.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/gm/btl_gm.c                                 
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/gm/btl_gm.h                                 
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/gm/btl_gm_component.c                       
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/mx/btl_mx.h                                 
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/ofud/btl_ofud.c                             
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/ofud/btl_ofud.h                             
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/openib/btl_openib.c                         
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/openib/btl_openib.h                         
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/openib/btl_openib_component.c               
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/openib/btl_openib_fd.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/openib/btl_openib_mca.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/openib/btl_openib_xrc.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/openib/connect/btl_openib_connect_base.c    
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c    
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c     
</span><br>
<span class="quotelev2">&gt;&gt; |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c  
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c    
</span><br>
<span class="quotelev2">&gt;&gt; |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/sctp/btl_sctp.c                             
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/sctp/btl_sctp.h                             
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/sctp/btl_sctp_component.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/sctp/btl_sctp_recv_handler.c                
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/self/btl_self.c                             
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/self/btl_self_component.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/sm/btl_sm.c                                 
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/sm/btl_sm_component.c                       
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/tcp/btl_tcp.c                               
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/tcp/btl_tcp.h                               
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/tcp/btl_tcp_component.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/tcp/btl_tcp_ft.h                            
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/template/btl_template.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/template/btl_template.h                     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/template/btl_template_component.c           
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/udapl/btl_udapl.c                           
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/udapl/btl_udapl_component.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/udapl/btl_udapl_mca.c                       
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/base/coll_base_comm_select.c               
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/base/coll_base_comm_unselect.c             
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/base/coll_base_find_available.c            
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/base/coll_base_open.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/demo/coll_demo_allgather.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/demo/coll_demo_allgatherv.c                
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/demo/coll_demo_allreduce.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/demo/coll_demo_alltoall.c                  
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/demo/coll_demo_alltoallv.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/demo/coll_demo_alltoallw.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/demo/coll_demo_barrier.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/demo/coll_demo_bcast.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/demo/coll_demo_exscan.c                    
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/demo/coll_demo_gather.c                    
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/demo/coll_demo_gatherv.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/demo/coll_demo_reduce.c                    
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/demo/coll_demo_reduce_scatter.c            
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/demo/coll_demo_scan.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/demo/coll_demo_scatter.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/demo/coll_demo_scatterv.c                  
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/hierarch/coll_hierarch_allreduce.c         
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/hierarch/coll_hierarch_barrier.c           
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/hierarch/coll_hierarch_bcast.c             
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/hierarch/coll_hierarch_reduce.c            
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/inter/coll_inter_bcast.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/sm2/coll_sm2_module.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/tuned/coll_tuned_component.c               
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/tuned/coll_tuned_dynamic_file.c            
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/common/mx/common_mx.c                           
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/common/portals/common_portals_cray_xt_modex.c   
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/common/portals/common_portals_crayxt3.c         
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/common/portals/common_portals_utcp.c            
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/common/sm/common_sm_mmap.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/crcp/base/crcp_base_close.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/crcp/base/crcp_base_fns.c                       
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/crcp/base/crcp_base_open.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/crcp/base/crcp_base_select.c                    
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/dpm/base/dpm_base_close.c                       
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/dpm/base/dpm_base_open.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/dpm/base/dpm_base_select.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/dpm/orte/dpm_orte.c                             
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/io/base/io_base_delete.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/io/base/io_base_file_select.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/io/base/io_base_find_available.c                
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/io/base/io_base_open.c                          
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/base/mtl_base_component.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/mx/mtl_mx_component.c                       
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/mx/mtl_mx_endpoint.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/portals/mtl_portals_component.c             
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/portals/mtl_portals_recv_short.c            
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/portals/mtl_portals_send_short.c            
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/psm/mtl_psm_component.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/psm/mtl_psm_endpoint.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/op/base/op_base_find_available.c                
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/op/base/op_base_op_select.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/osc/base/osc_base_open.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/osc/rdma/osc_rdma_data_move.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pml/base/pml_base_open.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pml/base/pml_base_select.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pml/crcpw/pml_crcpw_component.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pml/ob1/pml_ob1_endpoint.h                      
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pml/v/pml_v_output.c                            
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pml/v/pml_v_output.h                            
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pubsub/base/pubsub_base_close.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pubsub/base/pubsub_base_open.c                  
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pubsub/base/pubsub_base_select.c                
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pubsub/orte/pubsub_orte.c                       
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/topo/base/topo_base_close.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/topo/base/topo_base_comm_select.c               
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/topo/base/topo_base_find_available.c            
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/topo/base/topo_base_open.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mpi/c/comm_spawn.c                                  
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mpi/c/comm_spawn_multiple.c                         
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/runtime/ompi_cr.c                                   
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/runtime/ompi_mpi_finalize.c                         
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/runtime/ompi_mpi_init.c                             
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/runtime/ompi_mpi_params.c                           
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/tools/ompi-server/ompi-server.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/tools/ompi_info/components.cc                       
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/errmgr/base/errmgr_base_fns.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/errmgr/base/errmgr_base_open.c                  
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/errmgr/default/errmgr_default.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/errmgr/default/errmgr_default_component.c       
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/base/ess_base_close.c                       
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/base/ess_base_get.c                         
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/base/ess_base_open.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/base/ess_base_put.c                         
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/base/ess_base_select.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/base/ess_base_std_app.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/cnos/ess_cnos_module.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/env/ess_env_module.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/hnp/ess_hnp_module.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/portals_utcp/ess_portals_utcp_module.c      
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/slave/ess_slave_module.c                    
</span><br>
<span class="quotelev2">&gt;&gt; |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/slurm/ess_slurm_module.c                    
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/filem/base/filem_base_close.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/filem/base/filem_base_fns.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/filem/base/filem_base_open.c                    
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/filem/base/filem_base_receive.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     3 ++-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/filem/base/filem_base_select.c                  
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/filem/rsh/filem_rsh_component.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/filem/rsh/filem_rsh_module.c                    
</span><br>
<span class="quotelev2">&gt;&gt; |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/grpcomm/bad/grpcomm_bad_component.c             
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/grpcomm/bad/grpcomm_bad_module.c                
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/grpcomm/base/grpcomm_base_allgather.c           
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c                
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/grpcomm/base/grpcomm_base_modex.c               
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/grpcomm/base/grpcomm_base_open.c                
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/grpcomm/basic/grpcomm_basic_component.c         
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/grpcomm/basic/grpcomm_basic_module.c            
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/grpcomm/hier/grpcomm_hier_component.c           
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/grpcomm/hier/grpcomm_hier_module.c              
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/base/iof_base_open.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/base/iof_base_select.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/base/iof_base_setup.c                       
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/hnp/iof_hnp.c                               
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/hnp/iof_hnp_component.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     3 ++-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/hnp/iof_hnp_read.c                          
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/hnp/iof_hnp_receive.c                       
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/hnp/iof_hnp_send.c                          
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/orted/iof_orted.c                           
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/orted/iof_orted_component.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/orted/iof_orted_read.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/orted/iof_orted_receive.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/tool/iof_tool.c                             
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/tool/iof_tool_component.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/tool/iof_tool_receive.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/notifier/base/notifier_base_open.c              
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/odls/base/odls_base_default_fns.c               
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/odls/base/odls_base_open.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/oob/base/oob_base_init.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/oob/base/oob_base_open.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/oob/tcp/oob_tcp.c                               
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/oob/tcp/oob_tcp_msg.h                           
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/oob/tcp/oob_tcp_peer.c                          
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/alps/plm_alps_component.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/alps/plm_alps_module.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_heartbeat.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_jobid.c                       
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_launch_support.c              
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_open.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_orted_cmds.c                  
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_proxy.c                       
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_receive.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_rsh_support.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_select.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/bproc/plm_bproc.c                           
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/ccp/plm_ccp_component.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/ccp/plm_ccp_module.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/lsf/plm_lsf_component.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/lsf/plm_lsf_module.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/process/plm_process_module.c                
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/rsh/plm_rsh_component.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/rsh/plm_rsh_module.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/slurm/plm_slurm_component.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/slurm/plm_slurm_module.c                    
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/slurmd/plm_slurmd_component.c               
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/slurmd/plm_slurmd_module.c                  
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/submit/pls_submit_module.c                  
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/tm/plm_tm_component.c                       
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/tm/plm_tm_module.c                          
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/tmd/plm_tmd_component.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/tmd/plm_tmd_module.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ras/alps/ras_alps_component.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ras/alps/ras_alps_module.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ras/base/ras_base_allocate.c                    
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ras/base/ras_base_node.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ras/base/ras_base_select.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ras/ccp/ras_ccp_component.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ras/ccp/ras_ccp_module.c                        
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ras/gridengine/ras_gridengine_component.c       
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ras/gridengine/ras_gridengine_module.c          
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ras/loadleveler/ras_loadleveler_component.c     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ras/loadleveler/ras_loadleveler_module.c        
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ras/lsf/ras_lsf_component.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ras/slurm/ras_slurm_component.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ras/slurm/ras_slurm_module.c                    
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ras/tm/ras_tm_component.c                       
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rmaps/base/rmaps_base_map_job.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rmaps/base/rmaps_base_open.c                    
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_component.c     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rmaps/round_robin/rmaps_rr_component.c          
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rmaps/seq/rmaps_seq_component.c                 
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rmaps/topo/rmaps_topo_component.c               
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rml/base/rml_base_components.c                  
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rml/base/rml_base_contact.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rml/ftrm/rml_ftrm_component.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     4 ++--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rml/ftrm/rml_ftrm_module.c                      
</span><br>
<span class="quotelev2">&gt;&gt; |     3 ++-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rml/oob/rml_oob_component.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     3 ++-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rml/oob/rml_oob_recv.c                          
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rml/oob/rml_oob_send.c                          
</span><br>
<span class="quotelev2">&gt;&gt; |     3 ++-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/base/routed_base_components.c            
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/base/routed_base_receive.c               
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/binomial/routed_binomial.c               
</span><br>
<span class="quotelev2">&gt;&gt; |     3 ++-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/binomial/routed_binomial_component.c     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/linear/routed_linear.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     3 ++-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/linear/routed_linear_component.c         
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/radix/routed_radix.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     3 ++-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/radix/routed_radix_component.c           
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/slave/routed_slave.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     3 ++-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/slave/routed_slave_component.c           
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/snapc/base/snapc_base_close.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/snapc/base/snapc_base_fns.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     3 ++-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/snapc/base/snapc_base_open.c                    
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/snapc/base/snapc_base_select.c                  
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/snapc/full/snapc_full_app.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/snapc/full/snapc_full_component.c               
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/snapc/full/snapc_full_global.c                  
</span><br>
<span class="quotelev2">&gt;&gt; |     3 ++-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/snapc/full/snapc_full_local.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/snapc/full/snapc_full_module.c                  
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/snapc/snapc.h                                   
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/orted/orted_comm.c                                  
</span><br>
<span class="quotelev2">&gt;&gt; |     3 ++-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/orted/orted_main.c                                  
</span><br>
<span class="quotelev2">&gt;&gt; |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/orte_cr.c                                   
</span><br>
<span class="quotelev2">&gt;&gt; |     3 +--
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/orte_finalize.c                             
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/orte_globals.c                              
</span><br>
<span class="quotelev2">&gt;&gt; |     3 ++-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/orte_init.c                                 
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/orte_mca_params.c                           
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/orte_wait.c                                 
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/orte_wait.h                                 
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/test/mpi/hello_output.c                             
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/test/mpi/hello_show_help.c                          
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/tools/orte-checkpoint/orte-checkpoint.c             
</span><br>
<span class="quotelev2">&gt;&gt; |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/tools/orte-ps/orte-ps.c                             
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/tools/orte-restart/orte-restart.c                   
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/tools/orte-top/orte-top.c                           
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/tools/orterun/debuggers.c                           
</span><br>
<span class="quotelev2">&gt;&gt; |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/tools/orterun/orterun.c                             
</span><br>
<span class="quotelev2">&gt;&gt; |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/comm/comm.c                                    
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/hnp_contact.c                                  
</span><br>
<span class="quotelev2">&gt;&gt; |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/hostfile/hostfile.c                            
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/name_fns.c                                     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/nidmap.c                                       
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/pre_condition_transports.c                     
</span><br>
<span class="quotelev2">&gt;&gt; |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/session_dir.c                                  
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/show_help.c                                    
</span><br>
<span class="quotelev2">&gt;&gt; |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  292 files changed, 232 insertions(+), 249 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/class/ompi_free_list.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/class/ompi_free_list.c   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/class/ompi_free_list.c   2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -22,8 +22,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/class/ompi_free_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/include/opal/align.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/sys/cache.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/mpool/mpool.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static void ompi_free_list_construct(ompi_free_list_t* fl);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/class/ompi_seq_tracker.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/class/ompi_seq_tracker.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/class/ompi_seq_tracker.c 2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -20,7 +20,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/class/ompi_seq_tracker.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/sys/cache.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/communicator/comm.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/communicator/comm.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/communicator/comm.c      2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -26,11 +26,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/dss/dss.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/mca/rml/rml_types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/proc/proc.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/threads/mutex.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/bit_ops.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/convert.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/topo/topo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/topo/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/datatype/copy_functions_heterogeneous.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/datatype/copy_functions_heterogeneous.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/datatype/copy_functions_heterogeneous.c  2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -12,7 +12,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/arch.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/datatype/datatype_internal.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/datatype/datatype_internal.h     (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/datatype/datatype_internal.h     2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -23,7 +23,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef HAVE_STRING_H
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #endif  /* HAVE_STRING_H */
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; extern int ompi_ddt_dfd;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/errhandler/errhandler_predefined.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/errhandler/errhandler_predefined.c       (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/errhandler/errhandler_predefined.c       2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -38,6 +38,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/win/win.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/runtime.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/printf.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * Local functions
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/file/file.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/file/file.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/file/file.c      2009-02-13 21:26:12 EST (Fri, 13  
</span><br>
<span class="quotelev2">&gt;&gt; Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -22,10 +22,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/file/file.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/io/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/info/info.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * Table for Fortran &lt;-&gt; C file handle conversion
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/group/group.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/group/group.h    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/group/group.h    2009-02-13 21:26:12 EST (Fri, 13  
</span><br>
<span class="quotelev2">&gt;&gt; Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -28,9 +28,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; #ifndef OMPI_GROUP_H
</span><br>
<span class="quotelev2">&gt;&gt; #define OMPI_GROUP_H
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_pointer_array.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev2">&gt;&gt; extern &quot;C&quot; {
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/info/info.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/info/info.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/info/info.c      2009-02-13 21:26:12 EST (Fri, 13  
</span><br>
<span class="quotelev2">&gt;&gt; Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -19,6 +19,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef HAVE_STRING_H
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -33,7 +34,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/info/info.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/bml/base/bml_base_btl.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/bml/base/bml_base_btl.h      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/bml/base/bml_base_btl.h      2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -23,7 +23,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * Global functions for the BML
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/bml/r2/bml_r2.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/bml/r2/bml_r2.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/bml/r2/bml_r2.c      2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -26,6 +26,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/class/ompi_bitmap.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/bml/bml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/bml/r2/bml_r2_ft.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/bml/r2/bml_r2_ft.c   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/bml/r2/bml_r2_ft.c   2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -20,11 +20,11 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/runtime/ompi_cr.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/class/ompi_bitmap.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/bml/bml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/bml/r2/bml_r2_ft.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/bml/r2/bml_r2_ft.h   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/bml/r2/bml_r2_ft.h   2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -21,7 +21,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #ifndef MCA_BML_R2_FT_H
</span><br>
<span class="quotelev2">&gt;&gt; #define MCA_BML_R2_FT_H
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/base/btl_base_error.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/base/btl_base_error.h    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/base/btl_base_error.h    2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -28,7 +28,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_DECLSPEC extern int mca_btl_base_verbose;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/base/btl_base_mca.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/base/btl_base_mca.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/base/btl_base_mca.c      2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -24,8 +24,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/base/btl_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/base/btl_base_open.c     (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/base/btl_base_open.c     2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -23,10 +23,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/base/btl_base_select.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/base/btl_base_select.c   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/base/btl_base_select.c   2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -20,6 +20,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/elan/btl_elan.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/elan/btl_elan.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/elan/btl_elan.c  2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -10,8 +10,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/elan/btl_elan.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/elan/btl_elan.h  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/elan/btl_elan.h  2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -23,7 +23,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/base/btl_base_error.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/elan/btl_elan_component.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/elan/btl_elan_component.c        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/elan/btl_elan_component.c        2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -14,8 +14,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/gm/btl_gm.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/gm/btl_gm.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/gm/btl_gm.c      2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -19,8 +19,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/gm/btl_gm.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/gm/btl_gm.h      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/gm/btl_gm.h      2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -34,7 +34,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/mpool/mpool.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;btl_gm_endpoint.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/gm/btl_gm_component.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/gm/btl_gm_component.c    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/gm/btl_gm_component.c    2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -22,8 +22,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/request/request.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/mx/btl_mx.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/mx/btl_mx.h      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/mx/btl_mx.h      2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -28,7 +28,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; /* Open MPI includes */
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/class/ompi_free_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/class/ompi_bitmap.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/ofud/btl_ofud.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/ofud/btl_ofud.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/ofud/btl_ofud.c  2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -23,7 +23,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/prefetch.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/datatype/convertor.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/datatype/datatype.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/ofud/btl_ofud.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/ofud/btl_ofud.h  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/ofud/btl_ofud.h  2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -34,7 +34,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* Open MPI includes */
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_hash_table.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/sys/timer.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/class/ompi_free_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/class/ompi_bitmap.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/btl_openib.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/btl_openib.c      2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -28,6 +28,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;inttypes.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/arch.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/btl_openib.h      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/btl_openib.h      2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -36,10 +36,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/class/ompi_free_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/class/ompi_bitmap.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_pointer_array.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/mpool/mpool.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/base/btl_base_error.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/btl_openib_component.c    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_component.c    2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -47,6 +47,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/include/opal/align.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/sys/timer.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/sys/atomic.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_fd.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/btl_openib_fd.c   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_fd.c   2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -34,7 +34,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/btl_openib_mca.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_mca.c  2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -28,6 +28,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/installdirs/installdirs.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;btl_openib.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;btl_openib_mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_xrc.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/btl_openib_xrc.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_xrc.c  2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -16,7 +16,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;errno.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;btl_openib_xrc.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_base.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_base.c  
</span><br>
<span class="quotelev2">&gt;&gt; (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_base.c  
</span><br>
<span class="quotelev2">&gt;&gt; 2009-02-13 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -27,6 +27,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * Array of all possible connection functions
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c  
</span><br>
<span class="quotelev2">&gt;&gt; (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c  
</span><br>
<span class="quotelev2">&gt;&gt; 2009-02-13 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -259,6 +259,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;infiniband/cm.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/error.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_pointer_array.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c   
</span><br>
<span class="quotelev2">&gt;&gt; (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c   
</span><br>
<span class="quotelev2">&gt;&gt; 2009-02-13 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -26,8 +26,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/dss/dss.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/error.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/oob/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/rml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/mca/rml/rml_types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/errmgr/errmgr.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_connect_rdmacm.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_connect_rdmacm.c       (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_connect_rdmacm.c       2009-02-13 21:26:12 EST (Fri, 13  
</span><br>
<span class="quotelev2">&gt;&gt; Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -29,6 +29,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;malloc.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/error.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c  
</span><br>
<span class="quotelev2">&gt;&gt; (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c  
</span><br>
<span class="quotelev2">&gt;&gt; 2009-02-13 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -13,9 +13,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/dss/dss.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/error.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/rml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/mca/rml/rml_types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/errmgr/errmgr.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/dpm/dpm.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/sctp/btl_sctp.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/sctp/btl_sctp.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/sctp/btl_sctp.c  2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -18,7 +18,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/sctp/btl_sctp.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/sctp/btl_sctp.h  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/sctp/btl_sctp.h  2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -35,7 +35,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* Open MPI includes */
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/class/ompi_bitmap.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/class/ompi_free_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/sctp/btl_sctp_component.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/sctp/btl_sctp_component.c        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/sctp/btl_sctp_component.c        2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -48,7 +48,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/oob/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/sctp/btl_sctp_recv_handler.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/sctp/btl_sctp_recv_handler.c     (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/sctp/btl_sctp_recv_handler.c     2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -41,7 +41,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/oob/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/self/btl_self.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/self/btl_self.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/self/btl_self.c  2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -29,7 +29,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/datatype/convertor.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/datatype/datatype.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/sys/atomic.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/printf.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/self/btl_self_component.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/self/btl_self_component.c        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/self/btl_self_component.c        2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -31,7 +31,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/sm/btl_sm.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/sm/btl_sm.c      2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -29,8 +29,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/threads/mutex.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/datatype/convertor.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/sys/atomic.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/carto/carto.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/carto/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/paffinity/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/sm/btl_sm_component.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/sm/btl_sm_component.c    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/sm/btl_sm_component.c    2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -42,8 +42,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/sys/cache.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp.c    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp.c    2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -21,7 +21,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp.h    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp.h    2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -36,7 +36,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* Open MPI includes */
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/class/ompi_bitmap.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/class/ompi_free_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_component.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_component.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_component.c  2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -48,8 +48,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/oob/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_ft.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_ft.h (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_ft.h 2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -24,7 +24,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef HAVE_SYS_TYPES_H
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev2">&gt;&gt; extern &quot;C&quot; {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/template/btl_template.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/template/btl_template.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/template/btl_template.c  2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -18,7 +18,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/template/btl_template.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/template/btl_template.h  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/template/btl_template.h  2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -32,7 +32,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/mpool/mpool.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/template/btl_template_component.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/template/btl_template_component.c         
</span><br>
<span class="quotelev2">&gt;&gt; (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/template/btl_template_component.c         
</span><br>
<span class="quotelev2">&gt;&gt; 2009-02-13 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -22,7 +22,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/udapl/btl_udapl.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/udapl/btl_udapl.c        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/udapl/btl_udapl.c        2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -24,7 +24,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;errno.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/udapl/btl_udapl_component.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/udapl/btl_udapl_component.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/udapl/btl_udapl_component.c      2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -28,7 +28,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/udapl/btl_udapl_mca.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/udapl/btl_udapl_mca.c    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/udapl/btl_udapl_mca.c    2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -19,7 +19,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;btl_udapl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;btl_udapl_mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/base/coll_base_comm_select.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/base/coll_base_comm_select.c    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/base/coll_base_comm_select.c    2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -29,6 +29,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_object.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/base/coll_base_comm_unselect.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/base/coll_base_comm_unselect.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/base/coll_base_comm_unselect.c  2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -24,7 +24,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/base/coll_base_find_available.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/base/coll_base_find_available.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/base/coll_base_find_available.c 2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -26,6 +26,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/base/coll_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/base/coll_base_open.c   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/base/coll_base_open.c   2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -21,12 +21,11 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/demo/coll_demo_allgather.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/demo/coll_demo_allgather.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/demo/coll_demo_allgather.c      2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,10 +17,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_demo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/demo/coll_demo_allgatherv.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/demo/coll_demo_allgatherv.c     (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/demo/coll_demo_allgatherv.c     2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,10 +17,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_demo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/demo/coll_demo_allreduce.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/demo/coll_demo_allreduce.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/demo/coll_demo_allreduce.c      2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,10 +17,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_demo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/demo/coll_demo_alltoall.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/demo/coll_demo_alltoall.c       (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/demo/coll_demo_alltoall.c       2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,10 +17,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_demo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/demo/coll_demo_alltoallv.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/demo/coll_demo_alltoallv.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/demo/coll_demo_alltoallv.c      2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,10 +17,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_demo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/demo/coll_demo_alltoallw.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/demo/coll_demo_alltoallw.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/demo/coll_demo_alltoallw.c      2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,10 +17,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_demo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/demo/coll_demo_barrier.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/demo/coll_demo_barrier.c        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/demo/coll_demo_barrier.c        2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,10 +17,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_demo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/demo/coll_demo_bcast.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/demo/coll_demo_bcast.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/demo/coll_demo_bcast.c  2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,10 +17,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_demo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/demo/coll_demo_exscan.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/demo/coll_demo_exscan.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/demo/coll_demo_exscan.c 2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,10 +17,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_demo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/demo/coll_demo_gather.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/demo/coll_demo_gather.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/demo/coll_demo_gather.c 2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,10 +17,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_demo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/demo/coll_demo_gatherv.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/demo/coll_demo_gatherv.c        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/demo/coll_demo_gatherv.c        2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,10 +17,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_demo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/demo/coll_demo_reduce.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/demo/coll_demo_reduce.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/demo/coll_demo_reduce.c 2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,10 +17,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_demo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/demo/coll_demo_reduce_scatter.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/demo/coll_demo_reduce_scatter.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/demo/coll_demo_reduce_scatter.c 2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,10 +17,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_demo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/demo/coll_demo_scan.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/demo/coll_demo_scan.c   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/demo/coll_demo_scan.c   2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,10 +17,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_demo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/demo/coll_demo_scatter.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/demo/coll_demo_scatter.c        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/demo/coll_demo_scatter.c        2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,10 +17,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_demo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/demo/coll_demo_scatterv.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/demo/coll_demo_scatterv.c       (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/demo/coll_demo_scatterv.c       2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,10 +17,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_demo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/hierarch/coll_hierarch_allreduce.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/hierarch/coll_hierarch_allreduce.c       
</span><br>
<span class="quotelev2">&gt;&gt; (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/hierarch/coll_hierarch_allreduce.c       
</span><br>
<span class="quotelev2">&gt;&gt; 2009-02-13 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -24,7 +24,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/datatype/datatype.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/hierarch/coll_hierarch_barrier.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/hierarch/coll_hierarch_barrier.c         
</span><br>
<span class="quotelev2">&gt;&gt; (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/hierarch/coll_hierarch_barrier.c         
</span><br>
<span class="quotelev2">&gt;&gt; 2009-02-13 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -23,7 +23,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/hierarch/coll_hierarch_bcast.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/hierarch/coll_hierarch_bcast.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/hierarch/coll_hierarch_bcast.c  2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -22,7 +22,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/coll_tags.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/hierarch/coll_hierarch_reduce.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/hierarch/coll_hierarch_reduce.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/hierarch/coll_hierarch_reduce.c 2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -24,7 +24,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/datatype/datatype.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/inter/coll_inter_bcast.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/inter/coll_inter_bcast.c        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/inter/coll_inter_bcast.c        2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -22,7 +22,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/coll_tags.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/sm2/coll_sm2_module.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/sm2/coll_sm2_module.c   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/sm2/coll_sm2_module.c   2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -33,6 +33,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_sm2.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/dpm/dpm.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/tuned/coll_tuned_component.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/tuned/coll_tuned_component.c    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/tuned/coll_tuned_component.c    2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -25,15 +25,14 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_tuned.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_tuned.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * Public string showing the coll ompi_tuned component version number
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/tuned/coll_tuned_dynamic_file.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/tuned/coll_tuned_dynamic_file.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/tuned/coll_tuned_dynamic_file.c 2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -26,7 +26,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/request/request.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_tuned.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* need to include our own topo prototypes so we can malloc data on  
</span><br>
<span class="quotelev2">&gt;&gt; the comm correctly */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/common/mx/common_mx.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/common/mx/common_mx.c        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/common/mx/common_mx.c        2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -20,7 +20,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;common_mx.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -29,6 +28,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;malloc.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/memoryhooks/memory.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/mpool/mpool.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/common/portals/ 
</span><br>
<span class="quotelev2">&gt;&gt; common_portals_cray_xt_modex.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/common/portals/ 
</span><br>
<span class="quotelev2">&gt;&gt; common_portals_cray_xt_modex.c        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/common/portals/ 
</span><br>
<span class="quotelev2">&gt;&gt; common_portals_cray_xt_modex.c        2009-02-13 21:26:12 EST (Fri,  
</span><br>
<span class="quotelev2">&gt;&gt; 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -22,7 +22,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;common_portals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/runtime/ompi_module_exchange.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/common/portals/common_portals_crayxt3.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/common/portals/common_portals_crayxt3.c       
</span><br>
<span class="quotelev2">&gt;&gt; (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/common/portals/common_portals_crayxt3.c       
</span><br>
<span class="quotelev2">&gt;&gt; 2009-02-13 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -18,10 +18,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;catamount/cnos_mpi_os.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/proc/proc.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static bool use_accelerated;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/common/portals/common_portals_utcp.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/common/portals/common_portals_utcp.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/common/portals/common_portals_utcp.c 2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -21,7 +21,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;p3api/debug.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/proc/proc.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/common/sm/common_sm_mmap.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/common/sm/common_sm_mmap.c   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/common/sm/common_sm_mmap.c   2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -46,7 +46,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/proc/proc.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;common_sm_mmap.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/basename.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/align.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/rml_types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/crcp/base/crcp_base_close.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/crcp/base/crcp_base_close.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/crcp/base/crcp_base_close.c  2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -19,7 +19,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/crcp/crcp.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/crcp/base/crcp_base_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/crcp/base/crcp_base_fns.c    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/crcp/base/crcp_base_fns.c    2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -28,7 +28,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/os_dirpath.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/crcp/base/crcp_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/crcp/base/crcp_base_open.c   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/crcp/base/crcp_base_open.c   2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,12 +17,11 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/crcp/crcp.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/crcp/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/crcp/base/crcp_base_select.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/crcp/base/crcp_base_select.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/crcp/base/crcp_base_select.c 2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,9 +17,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/crcp/crcp.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/dpm/base/dpm_base_close.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/dpm/base/dpm_base_close.c    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/dpm/base/dpm_base_close.c    2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -19,7 +19,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/dpm/dpm.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/dpm/base/dpm_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/dpm/base/dpm_base_open.c     (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/dpm/base/dpm_base_open.c     2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,12 +17,11 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/dpm/dpm.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/dpm/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/dpm/base/dpm_base_select.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/dpm/base/dpm_base_select.c   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/dpm/base/dpm_base_select.c   2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -19,7 +19,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_component_repository.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/dpm/orte/dpm_orte.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/dpm/orte/dpm_orte.c  2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -25,7 +25,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;ctype.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/opal_getcwd.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -34,6 +33,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/grpcomm/grpcomm.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/plm/plm.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/rml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/mca/rml/rml_types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/base/rml_contact.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/routed/routed.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/io/base/io_base_delete.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/io/base/io_base_delete.c     (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/io/base/io_base_delete.c     2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -27,7 +27,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/file/file.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/io/io.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/io/base/io_base_file_select.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/io/base/io_base_file_select.c        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/io/base/io_base_file_select.c        2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -26,7 +26,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/file/file.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_object.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/io/base/io_base_find_available.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/io/base/io_base_find_available.c     (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/io/base/io_base_find_available.c     2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -25,7 +25,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_component_repository.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/io/base/io_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/io/base/io_base_open.c       (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/io/base/io_base_open.c       2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -21,12 +21,11 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/class/ompi_free_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/io/io.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/io/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/mtl/base/mtl_base_component.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/mtl/base/mtl_base_component.c        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/mtl/base/mtl_base_component.c        2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -19,10 +19,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/mtl/mtl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/mtl/mx/mtl_mx_component.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/mtl/mx/mtl_mx_component.c    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/mtl/mx/mtl_mx_component.c    2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -20,7 +20,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/datatype/convertor.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/mtl/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/common/mx/common_mx.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/mtl/mx/mtl_mx_endpoint.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/mtl/mx/mtl_mx_endpoint.c     (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/mtl/mx/mtl_mx_endpoint.c     2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -18,10 +18,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;sys/time.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mtl_mx.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mtl_mx_types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mtl_mx_endpoint.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/mtl/portals/mtl_portals_component.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/mtl/portals/mtl_portals_component.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/mtl/portals/mtl_portals_component.c  2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -19,8 +19,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/datatype/convertor.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/common/portals/common_portals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/mtl/portals/mtl_portals_recv_short.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/mtl/portals/mtl_portals_recv_short.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/mtl/portals/mtl_portals_recv_short.c 2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -20,7 +20,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mtl_portals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mtl_portals_recv_short.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/mtl/portals/mtl_portals_send_short.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/mtl/portals/mtl_portals_send_short.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/mtl/portals/mtl_portals_send_short.c 2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,8 +17,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mtl_portals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mtl_portals_request.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/mtl/psm/mtl_psm_component.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/mtl/psm/mtl_psm_component.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/mtl/psm/mtl_psm_component.c  2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -20,8 +20,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/datatype/convertor.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mtl_psm.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/mtl/psm/mtl_psm_endpoint.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/mtl/psm/mtl_psm_endpoint.c   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/mtl/psm/mtl_psm_endpoint.c   2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -25,7 +25,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/oob/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/rml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/errmgr/errmgr.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mtl_psm.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mtl_psm_types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mtl_psm_endpoint.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/op/base/op_base_find_available.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/op/base/op_base_find_available.c     (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/op/base/op_base_find_available.c     2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -26,11 +26,11 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_component_repository.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/op/op.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/op/base/op_base_op_select.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/op/base/op_base_op_select.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/op/base/op_base_op_select.c  2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -31,12 +31,12 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_object.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/op/op.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/op/op.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/osc/base/osc_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/osc/base/osc_base_open.c     (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/osc/base/osc_base_open.c     2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -18,10 +18,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/osc/osc.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/osc/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c      2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -23,8 +23,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;osc_pt2pt_data_move.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;osc_pt2pt_buffer.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/arch.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/sys/atomic.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/datatype/datatype.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/osc/rdma/osc_rdma_data_move.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/osc/rdma/osc_rdma_data_move.c        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/osc/rdma/osc_rdma_data_move.c        2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -24,8 +24,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;osc_rdma_data_move.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;osc_rdma_obj_convert.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/arch.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/sys/atomic.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/bml/bml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/bml/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pml/base/pml_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/base/pml_base_open.c     (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/base/pml_base_open.c     2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -26,10 +26,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #endif  /* HAVE_UNIST_H */
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pml/base/pml_base_select.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/base/pml_base_select.c   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/base/pml_base_select.c   2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -20,6 +20,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/runtime/opal_progress.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pml/crcpw/pml_crcpw_component.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/crcpw/pml_crcpw_component.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/crcpw/pml_crcpw_component.c      2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -18,9 +18,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/sys/cache.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_endpoint.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_endpoint.h   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_endpoint.h   2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -21,7 +21,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #ifndef MCA_PML_OB1_ENDPOINT_H
</span><br>
<span class="quotelev2">&gt;&gt; #define MCA_PML_OB1_ENDPOINT_H
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev2">&gt;&gt; extern &quot;C&quot; {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pml/v/pml_v_output.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/v/pml_v_output.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/v/pml_v_output.c 2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -9,8 +9,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;pml_v_output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pml/v/pml_v_output.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/v/pml_v_output.h (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/v/pml_v_output.h 2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -11,7 +11,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #ifndef PML_V_OUTPUT_H_HAS_BEEN_INCLUDED
</span><br>
<span class="quotelev2">&gt;&gt; #define PML_V_OUTPUT_H_HAS_BEEN_INCLUDED
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal_stdint.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;pml_v.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pubsub/base/pubsub_base_close.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pubsub/base/pubsub_base_close.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pubsub/base/pubsub_base_close.c      2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -19,7 +19,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pubsub/pubsub.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pubsub/base/pubsub_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pubsub/base/pubsub_base_open.c       (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pubsub/base/pubsub_base_open.c       2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,12 +17,11 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pubsub/pubsub.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pubsub/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pubsub/base/pubsub_base_select.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pubsub/base/pubsub_base_select.c     (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pubsub/base/pubsub_base_select.c     2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -19,7 +19,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_component_repository.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pubsub/orte/pubsub_orte.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pubsub/orte/pubsub_orte.c    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pubsub/orte/pubsub_orte.c    2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -33,6 +33,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/grpcomm/grpcomm.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/plm/plm.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/rml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/mca/rml/rml_types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/base/rml_contact.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/routed/routed.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/topo/base/topo_base_close.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/topo/base/topo_base_close.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/topo/base/topo_base_close.c  2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -19,9 +19,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/topo/topo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/topo/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/topo/base/topo_base_comm_select.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/topo/base/topo_base_comm_select.c    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/topo/base/topo_base_comm_select.c    2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -23,11 +23,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/topo/topo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/topo/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/topo/base/topo_base_find_available.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/topo/base/topo_base_find_available.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/topo/base/topo_base_find_available.c 2009-02-13  
</span><br>
<span class="quotelev2">&gt;&gt; 21:26:12 EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -23,7 +23,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_component_repository.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/topo/base/topo_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/topo/base/topo_base_open.c   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/topo/base/topo_base_open.c   2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -21,12 +21,11 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/topo/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mpi/c/comm_spawn.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mpi/c/comm_spawn.c       (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mpi/c/comm_spawn.c       2009-02-13 21:26:12 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -19,7 +19,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/info/info.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mpi/c/bindings.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/dpm/dpm.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mpi/c/comm_spawn_multiple.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mpi/c/comm_spawn_multiple.c      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mpi/c/comm_spawn_multiple.c      2009-02-13 21:26:12  
</span><br>
<span class="quotelev2">&gt;&gt; EST (Fri, 13 Feb 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -19,7 +19,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mpi/c/bindings.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/info/info.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/dpm/dpm.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/runtime/ompi_cr.c
</span><br>
<span class="quotelev2">&gt;&gt; ======...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Message clipped]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="5422.php">Eugene Loh: "Re: [OMPI devel] Announcing searchable OMPI source code tree"</a>
<li><strong>Previous message:</strong> <a href="5420.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20557"</a>
<li><strong>In reply to:</strong> <a href="5420.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20557"</a>
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
