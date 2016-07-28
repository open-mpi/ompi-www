<?
$subject_val = "Re: [OMPI devel] openib choosing the wrong queue settings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 17:33:24 2014" -->
<!-- isoreceived="20141104223324" -->
<!-- sent="Tue, 4 Nov 2014 15:33:23 -0700" -->
<!-- isosent="20141104223323" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib choosing the wrong queue settings" -->
<!-- id="20141104223323.GJ6508_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BA2FD58-3342-414F-8625-3DD278012517_at_cisco.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 17:33:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16191.php">Steve Wise: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>Previous message:</strong> <a href="16189.php">Nathan Hjelm: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>In reply to:</strong> <a href="16188.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16191.php">Steve Wise: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>Reply:</strong> <a href="16191.php">Steve Wise: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like there is no issue in 1.8.4 except for the message coalescing
<br>
bug. Ralph, Howard, and I agree that disabling message coalescing for
<br>
1.8.4 is the safest way forward. We can back-port the real fix for an
<br>
eventual 1.8.5. Message rates no longer seem to care about message
<br>
coalescing in the openib btl anymore. We beat mvapich handily without
<br>
the feature.
<br>
<p>-Nathan
<br>
<p>On Tue, Nov 04, 2014 at 10:27:56PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; That sounds fine, but I think Steve's point is that he is being bitten by this bug now, so it would probably be good to even include this one particular fix in 1.8.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 4, 2014, at 5:24 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Going to put the RFC out today with a timeout of about 2 weeks. This
</span><br>
<span class="quotelev2">&gt; &gt; will give me some time to talk with other Open MPI developers
</span><br>
<span class="quotelev2">&gt; &gt; face-to-face at SC14.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If the RFC fails I will still bring that and a couple of other fixes
</span><br>
<span class="quotelev2">&gt; &gt; into the master.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Nov 04, 2014 at 04:06:45PM -0600, Steve Wise wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Ok, sounds like I should let you continue the good work! :)  When do you
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   plan to merge this into ompi proper?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   On 11/4/2014 3:58 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That certainly addresses part of the problem. I am working on a complete
</span><br>
<span class="quotelev3">&gt; &gt;&gt; revamp of the btl RDMA interface. It contains this fix:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="https://github.com/hjelmn/ompi/commit/66fa429e306beb9fca59da0a4554e9b98d788316">https://github.com/hjelmn/ompi/commit/66fa429e306beb9fca59da0a4554e9b98d788316</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, Nov 04, 2014 at 03:27:23PM -0600, Steve Wise wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I found the bug.  Here is the fix:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_stevo1 openib]# git diff
</span><br>
<span class="quotelev3">&gt; &gt;&gt; diff --git a/opal/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; b/opal/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; index d876e21..8a5ea82 100644
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- a/opal/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ b/opal/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -1960,9 +1960,8 @@ static int init_one_device(opal_list_t *btl_list,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; struct ibv_device* ib_dev)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          /* If the MCA param was specified, skip all the checks */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -        if ( MCA_BASE_VAR_SOURCE_COMMAND_LINE ||
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -                MCA_BASE_VAR_SOURCE_ENV ==
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -            mca_btl_openib_component.receive_queues_source) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        if (MCA_BASE_VAR_SOURCE_COMMAND_LINE ==
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_btl_openib_component.receive_queues_source||
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +            MCA_BASE_VAR_SOURCE_ENV ==
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_btl_openib_component.receive_queues_source) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              goto good;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 11/4/2014 3:08 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have run into the issue as well. I will open a pull request for 1.8.4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; as part of a patch fixing the coalescing issues.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, Nov 04, 2014 at 02:50:30PM -0600, Steve Wise wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 11/4/2014 2:09 PM, Steve Wise wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm running ompi top-o-tree from github and seeing an openib btl issue
</span><br>
<span class="quotelev3">&gt; &gt;&gt; where the qp/srq configuration is incorrect for the given device id.  This
</span><br>
<span class="quotelev3">&gt; &gt;&gt; works fine in 1.8.4rc1, but I see the problem in top-of-tree.  A simple 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node IMB-MPI1 pingpong fails to get the ranks setup.  I see this logged:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /opt/ompi-trunk/bin/mpirun --allow-run-as-root --np 2 --host stevo1,stevo2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --mca btl openib,sm,self /opt/ompi-trunk/bin/IMB-MPI1 pingpong
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Adding this works around the issue:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --mca btl_openib_receive_queues P,65536,64
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I also confirmed that opal_btl_openib_ini_query() is getting the correct
</span><br>
<span class="quotelev3">&gt; &gt;&gt; receive_queues string from the .ini file on both nodes for the cxgb4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; device...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The Open MPI receive queue configuration for the OpenFabrics devices
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on two nodes are incompatible, meaning that MPI processes on two
</span><br>
<span class="quotelev3">&gt; &gt;&gt; specific nodes were unable to communicate with each other.  This
</span><br>
<span class="quotelev3">&gt; &gt;&gt; generally happens when you are using OpenFabrics devices from
</span><br>
<span class="quotelev3">&gt; &gt;&gt; different vendors on the same network.  You should be able to use the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_btl_openib_receive_queues MCA parameter to set a uniform receive
</span><br>
<span class="quotelev3">&gt; &gt;&gt; queue configuration for all the devices in the MPI job, and therefore
</span><br>
<span class="quotelev3">&gt; &gt;&gt; be able to run successfully.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Local host:       stevo2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Local adapter:    cxgb4_0 (vendor 0x1425, part ID 21520)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Local queues: P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Remote host:      stevo1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Remote adapter:   (vendor 0x1425, part ID 21520)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Remote queues:    P,65536,64
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The stevo1 rank has the correct queue settings: P,65536,64.  For some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; reason, stevo2 has the wrong settings, even though it has the correct
</span><br>
<span class="quotelev3">&gt; &gt;&gt; device id info.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any suggestions on debugging this?  Like where to dig in the src to see if
</span><br>
<span class="quotelev3">&gt; &gt;&gt; somehow the .ini parsing is broken...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Steve.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16179.php">http://www.open-mpi.org/community/lists/devel/2014/11/16179.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16180.php">http://www.open-mpi.org/community/lists/devel/2014/11/16180.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16181.php">http://www.open-mpi.org/community/lists/devel/2014/11/16181.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16182.php">http://www.open-mpi.org/community/lists/devel/2014/11/16182.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16184.php">http://www.open-mpi.org/community/lists/devel/2014/11/16184.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16185.php">http://www.open-mpi.org/community/lists/devel/2014/11/16185.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16187.php">http://www.open-mpi.org/community/lists/devel/2014/11/16187.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16188.php">http://www.open-mpi.org/community/lists/devel/2014/11/16188.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16190/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16191.php">Steve Wise: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>Previous message:</strong> <a href="16189.php">Nathan Hjelm: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>In reply to:</strong> <a href="16188.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16191.php">Steve Wise: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>Reply:</strong> <a href="16191.php">Steve Wise: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
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
