<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 10:35:39 2008" -->
<!-- isoreceived="20080410143539" -->
<!-- sent="Thu, 10 Apr 2008 10:35:32 -0400" -->
<!-- isosent="20080410143532" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115" -->
<!-- id="93791552-8C08-495A-8C95-B55C633EBBF7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C422DCB4.4CD3%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-10 10:35:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3697.php">Swati Kher: "[OMPI devel] configuring with --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="3695.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>In reply to:</strong> <a href="3695.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the fix. I can confirm that the trunk is working again with  
<br>
the unity component.
<br>
<p>I agree that I should support the 'tree' component, but I probably  
<br>
won't be able to get to it for another couple of weeks.
<br>
<p>Thanks again,
<br>
Josh
<br>
<p>On Apr 9, 2008, at 10:51 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Okay, the irony here is truly humorous. This took several hours to  
</span><br>
<span class="quotelev1">&gt; chase
</span><br>
<span class="quotelev1">&gt; down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you may recall, we had an earlier problem with the unity routed  
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev1">&gt; where I gave you a couple of options for repairing it. Well, it  
</span><br>
<span class="quotelev1">&gt; turned out
</span><br>
<span class="quotelev1">&gt; that the latest changes obviated the need for that hack...and so the  
</span><br>
<span class="quotelev1">&gt; hack
</span><br>
<span class="quotelev1">&gt; caused the system to fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, having now removed the prior hack required to keep the module  
</span><br>
<span class="quotelev1">&gt; alive, you
</span><br>
<span class="quotelev1">&gt; should find it happy again!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW: it isn't that the unity module is such a pain in itself. The  
</span><br>
<span class="quotelev1">&gt; problem
</span><br>
<span class="quotelev1">&gt; lies in our efforts to shift data movement to the daemon level for
</span><br>
<span class="quotelev1">&gt; scalability, versus the inherent &quot;everything happens directly  
</span><br>
<span class="quotelev1">&gt; between the
</span><br>
<span class="quotelev1">&gt; apps&quot; approach of the unity module. As we move more and more things  
</span><br>
<span class="quotelev1">&gt; to the
</span><br>
<span class="quotelev1">&gt; daemon level, we are achieving the scalability we want - it just  
</span><br>
<span class="quotelev1">&gt; makes it
</span><br>
<span class="quotelev1">&gt; harder to find a way to blend the conflicting approach in unity so  
</span><br>
<span class="quotelev1">&gt; it can
</span><br>
<span class="quotelev1">&gt; keep running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe we have now reached a point, though, where it may now be  
</span><br>
<span class="quotelev1">&gt; easier to
</span><br>
<span class="quotelev1">&gt; keep that module alive. Everything we need to shift to the daemons  
</span><br>
<span class="quotelev1">&gt; has now
</span><br>
<span class="quotelev1">&gt; been shifted, so I don't believe unity is going to present as much  
</span><br>
<span class="quotelev1">&gt; of a
</span><br>
<span class="quotelev1">&gt; problem going forward.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I still think it would be good for you to get C/R to work with non- 
</span><br>
<span class="quotelev1">&gt; unity
</span><br>
<span class="quotelev1">&gt; routed modules for scalability reasons - unity is still inherently
</span><br>
<span class="quotelev1">&gt; non-scalable. But hopefully it won't be as much of a roller-coaster  
</span><br>
<span class="quotelev1">&gt; for you
</span><br>
<span class="quotelev1">&gt; as we go forward.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the patience
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/9/08 5:15 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Groan...yes, will look at it this evening and get it fixed as  
</span><br>
<span class="quotelev2">&gt;&gt; quickly as I
</span><br>
<span class="quotelev2">&gt;&gt; can.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry...like I said, unity is getting harder and harder to keep  
</span><br>
<span class="quotelev2">&gt;&gt; alive. :-/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 4/9/08 5:01 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that the 'unity' component of the routed framework is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; broken
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as a result of this commit. :(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any chance you can take a look at this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 9, 2008, at 6:10 PM, rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: rhc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2008-04-09 18:10:53 EDT (Wed, 09 Apr 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 18115
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18115">https://svn.open-mpi.org/trac/ompi/changeset/18115</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fully implement the inbound binomial allgather for daemon-based
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collectives. Supports both modex and barrier operations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Comm_spawn still uses the rank=0 method - shifting that algo to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemons is under study.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Removed:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/grpcomm/base/grpcomm_base_barrier.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/grpcomm/exp/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/pml/ob1/pml_ob1.c                              
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/ess/hnp/ess_hnp_module.c                       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/grpcomm/base/Makefile.am                       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/grpcomm/base/base.h                            
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/grpcomm/base/grpcomm_base_allgather.c         |
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 253 -----------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/grpcomm/basic/grpcomm_basic_component.c        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/grpcomm/basic/grpcomm_basic_module.c          |
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 832 ++++++++++++++++++++++++++++++++++-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/grpcomm/cnos/grpcomm_cnos_module.c             
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/grpcomm/grpcomm.h                             |
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 27 +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/grpcomm/grpcomm_types.h                        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/odls/base/odls_base_close.c                    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/odls/base/odls_base_default_fns.c             |
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 131 ++++-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/odls/base/odls_base_open.c                    |
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 24 +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/odls/base/odls_private.h                       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |    16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/plm/base/plm_base_launch_support.c             
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/rmaps/base/rmaps_base_map_job.c                
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/rmaps/base/rmaps_base_open.c                   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c           |
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 186 +-------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/rmaps/base/rmaps_private.h                     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c              
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/rmaps/rmaps_types.h                           |
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 28 +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/rmaps/round_robin/rmaps_rr.c                   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/rmaps/seq/rmaps_seq.c                          
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/rml/rml_types.h                                
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |    36
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/orted/orted_comm.c                                |
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 43 +-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/runtime/data_type_support/orte_dt_copy_fns.c       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/runtime/data_type_support/orte_dt_packing_fns.c    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/runtime/data_type_support/orte_dt_print_fns.c      
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/runtime/data_type_support/orte_dt_unpacking_fns.c  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/runtime/orte_globals.c                             
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/runtime/orte_globals.h                             
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/runtime/orte_globals_class_instances.h             
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |     2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  32 files changed, 1019 insertions(+), 631 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Diff not shown due to size (106446 bytes).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn diff -r 18114:18115 --no-diff-deleted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3697.php">Swati Kher: "[OMPI devel] configuring with --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="3695.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>In reply to:</strong> <a href="3695.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
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
