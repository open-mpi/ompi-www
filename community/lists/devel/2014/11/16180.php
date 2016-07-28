<?
$subject_val = "Re: [OMPI devel] openib choosing the wrong queue settings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 15:50:27 2014" -->
<!-- isoreceived="20141104205027" -->
<!-- sent="Tue, 04 Nov 2014 14:50:30 -0600" -->
<!-- isosent="20141104205030" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib choosing the wrong queue settings" -->
<!-- id="54593C16.3050305_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="54593273.7030507_at_opengridcomputing.com" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 15:50:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16181.php">Nathan Hjelm: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>Previous message:</strong> <a href="16179.php">Steve Wise: "[OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>In reply to:</strong> <a href="16179.php">Steve Wise: "[OMPI devel] openib choosing the wrong queue settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16181.php">Nathan Hjelm: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>Reply:</strong> <a href="16181.php">Nathan Hjelm: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/4/2014 2:09 PM, Steve Wise wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running ompi top-o-tree from github and seeing an openib btl issue 
</span><br>
<span class="quotelev1">&gt; where the qp/srq configuration is incorrect for the given device id.  
</span><br>
<span class="quotelev1">&gt; This works fine in 1.8.4rc1, but I see the problem in top-of-tree.  A 
</span><br>
<span class="quotelev1">&gt; simple 2 node IMB-MPI1 pingpong fails to get the ranks setup.  I see 
</span><br>
<span class="quotelev1">&gt; this logged:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/ompi-trunk/bin/mpirun --allow-run-as-root --np 2 --host 
</span><br>
<span class="quotelev1">&gt; stevo1,stevo2 --mca btl openib,sm,self /opt/ompi-trunk/bin/IMB-MPI1 
</span><br>
<span class="quotelev1">&gt; pingpong
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Adding this works around the issue:
<br>
<p>--mca btl_openib_receive_queues P,65536,64
<br>
<p>I also confirmed that opal_btl_openib_ini_query() is getting the correct 
<br>
receive_queues string from the .ini file on both nodes for the cxgb4 
<br>
device...
<br>
<p><p><span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Open MPI receive queue configuration for the OpenFabrics devices
</span><br>
<span class="quotelev1">&gt; on two nodes are incompatible, meaning that MPI processes on two
</span><br>
<span class="quotelev1">&gt; specific nodes were unable to communicate with each other.  This
</span><br>
<span class="quotelev1">&gt; generally happens when you are using OpenFabrics devices from
</span><br>
<span class="quotelev1">&gt; different vendors on the same network.  You should be able to use the
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_receive_queues MCA parameter to set a uniform receive
</span><br>
<span class="quotelev1">&gt; queue configuration for all the devices in the MPI job, and therefore
</span><br>
<span class="quotelev1">&gt; be able to run successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:       stevo2
</span><br>
<span class="quotelev1">&gt;   Local adapter:    cxgb4_0 (vendor 0x1425, part ID 21520)
</span><br>
<span class="quotelev1">&gt;   Local queues: 
</span><br>
<span class="quotelev1">&gt; P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Remote host:      stevo1
</span><br>
<span class="quotelev1">&gt;   Remote adapter:   (vendor 0x1425, part ID 21520)
</span><br>
<span class="quotelev1">&gt;   Remote queues:    P,65536,64
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The stevo1 rank has the correct queue settings: P,65536,64.  For some 
</span><br>
<span class="quotelev1">&gt; reason, stevo2 has the wrong settings, even though it has the correct 
</span><br>
<span class="quotelev1">&gt; device id info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions on debugging this?  Like where to dig in the src to 
</span><br>
<span class="quotelev1">&gt; see if somehow the .ini parsing is broken...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steve.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16179.php">http://www.open-mpi.org/community/lists/devel/2014/11/16179.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16181.php">Nathan Hjelm: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>Previous message:</strong> <a href="16179.php">Steve Wise: "[OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>In reply to:</strong> <a href="16179.php">Steve Wise: "[OMPI devel] openib choosing the wrong queue settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16181.php">Nathan Hjelm: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>Reply:</strong> <a href="16181.php">Nathan Hjelm: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
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
