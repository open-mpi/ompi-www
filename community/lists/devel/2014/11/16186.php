<?
$subject_val = "Re: [OMPI devel] openib choosing the wrong queue settings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 17:11:29 2014" -->
<!-- isoreceived="20141104221129" -->
<!-- sent="Tue, 4 Nov 2014 22:11:26 +0000" -->
<!-- isosent="20141104221126" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib choosing the wrong queue settings" -->
<!-- id="225EBDFB-D546-4660-9074-B7573B91DFC5_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54594DF5.5040506_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib choosing the wrong queue settings<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 17:11:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16187.php">Nathan Hjelm: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>Previous message:</strong> <a href="16185.php">Steve Wise: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>In reply to:</strong> <a href="16185.php">Steve Wise: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16189.php">Nathan Hjelm: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>Reply:</strong> <a href="16189.php">Nathan Hjelm: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds like this fix should be merged in soon.
<br>
<p>Nathan: are your other changes bug fixes, or part of your BTL revamp branch?
<br>
<p><p>On Nov 4, 2014, at 5:06 PM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ok, sounds like I should let you continue the good work! :)  When do you plan to merge this into ompi proper?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/4/2014 3:58 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; That certainly addresses part of the problem. I am working on a complete
</span><br>
<span class="quotelev2">&gt;&gt; revamp of the btl RDMA interface. It contains this fix:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/hjelmn/ompi/commit/66fa429e306beb9fca59da0a4554e9b98d788316">https://github.com/hjelmn/ompi/commit/66fa429e306beb9fca59da0a4554e9b98d788316</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Nov 04, 2014 at 03:27:23PM -0600, Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found the bug.  Here is the fix:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_stevo1 openib]# git diff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/opal/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b/opal/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index d876e21..8a5ea82 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/opal/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/opal/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1960,9 +1960,8 @@ static int init_one_device(opal_list_t *btl_list,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; struct ibv_device* ib_dev)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          /* If the MCA param was specified, skip all the checks */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        if ( MCA_BASE_VAR_SOURCE_COMMAND_LINE ||
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                MCA_BASE_VAR_SOURCE_ENV ==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            mca_btl_openib_component.receive_queues_source) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (MCA_BASE_VAR_SOURCE_COMMAND_LINE ==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_btl_openib_component.receive_queues_source||
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            MCA_BASE_VAR_SOURCE_ENV ==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_btl_openib_component.receive_queues_source) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              goto good;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/4/2014 3:08 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have run into the issue as well. I will open a pull request for 1.8.4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as part of a patch fixing the coalescing issues.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Nov 04, 2014 at 02:50:30PM -0600, Steve Wise wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 11/4/2014 2:09 PM, Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm running ompi top-o-tree from github and seeing an openib btl issue
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; where the qp/srq configuration is incorrect for the given device id.  This
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; works fine in 1.8.4rc1, but I see the problem in top-of-tree.  A simple 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node IMB-MPI1 pingpong fails to get the ranks setup.  I see this logged:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /opt/ompi-trunk/bin/mpirun --allow-run-as-root --np 2 --host stevo1,stevo2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --mca btl openib,sm,self /opt/ompi-trunk/bin/IMB-MPI1 pingpong
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Adding this works around the issue:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --mca btl_openib_receive_queues P,65536,64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I also confirmed that opal_btl_openib_ini_query() is getting the correct
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; receive_queues string from the .ini file on both nodes for the cxgb4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; device...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The Open MPI receive queue configuration for the OpenFabrics devices
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on two nodes are incompatible, meaning that MPI processes on two
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; specific nodes were unable to communicate with each other.  This
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; generally happens when you are using OpenFabrics devices from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; different vendors on the same network.  You should be able to use the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mca_btl_openib_receive_queues MCA parameter to set a uniform receive
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; queue configuration for all the devices in the MPI job, and therefore
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; be able to run successfully.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Local host:       stevo2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Local adapter:    cxgb4_0 (vendor 0x1425, part ID 21520)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Local queues: P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Remote host:      stevo1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Remote adapter:   (vendor 0x1425, part ID 21520)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Remote queues:    P,65536,64
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The stevo1 rank has the correct queue settings: P,65536,64.  For some
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; reason, stevo2 has the wrong settings, even though it has the correct
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; device id info.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any suggestions on debugging this?  Like where to dig in the src to see if
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; somehow the .ini parsing is broken...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16179.php">http://www.open-mpi.org/community/lists/devel/2014/11/16179.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16180.php">http://www.open-mpi.org/community/lists/devel/2014/11/16180.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16181.php">http://www.open-mpi.org/community/lists/devel/2014/11/16181.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16182.php">http://www.open-mpi.org/community/lists/devel/2014/11/16182.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16184.php">http://www.open-mpi.org/community/lists/devel/2014/11/16184.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16185.php">http://www.open-mpi.org/community/lists/devel/2014/11/16185.php</a>
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
<li><strong>Next message:</strong> <a href="16187.php">Nathan Hjelm: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>Previous message:</strong> <a href="16185.php">Steve Wise: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>In reply to:</strong> <a href="16185.php">Steve Wise: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16189.php">Nathan Hjelm: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>Reply:</strong> <a href="16189.php">Nathan Hjelm: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
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
