<?
$subject_val = "Re: [OMPI devel] Hangs on the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 16:44:07 2014" -->
<!-- isoreceived="20140714204407" -->
<!-- sent="Mon, 14 Jul 2014 14:44:06 -0600" -->
<!-- isosent="20140714204406" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hangs on the trunk" -->
<!-- id="20140714204406.GI1506_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F360474A9A3C_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Hangs on the trunk<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-14 16:44:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15138.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<li><strong>Previous message:</strong> <a href="15136.php">Rolf vandeVaart: "[OMPI devel] Hangs on the trunk"</a>
<li><strong>In reply to:</strong> <a href="15136.php">Rolf vandeVaart: "[OMPI devel] Hangs on the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15138.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<li><strong>Reply:</strong> <a href="15138.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah. I think it is a problem I introduced. I am trying to track it down
<br>
now. Probably messed up one of the conversions in ob1.
<br>
<p>-Nathan
<br>
<p>On Mon, Jul 14, 2014 at 01:38:38PM -0700, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt;    I have noticed that I am seeing some tests hang on the trunk.  For
</span><br>
<span class="quotelev1">&gt;    example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    $ mpirun --mca btl_tcp_if_include eth0 --host
</span><br>
<span class="quotelev1">&gt;    drossetti-ivy0,drossetti-ivy1 -np 2 --mca pml ob1 --mca btl sm,tcp,self
</span><br>
<span class="quotelev1">&gt;    --mca coll_mdisable_allgather 1 --mca btl_openib_warn_default_gid_prefix 0
</span><br>
<span class="quotelev1">&gt;    send
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    It is not unusual for this test to take several minutes, particularly on
</span><br>
<span class="quotelev1">&gt;    slow networks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Please be patient.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    NOTICE: Using max message size: 10485760
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Progress: [=====          
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Is anyone else seeing this?  (This is really a hang in spite of the
</span><br>
<span class="quotelev1">&gt;    message saying it should take a few minutes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    This started with the changes Nathan did for renaming the descriptor
</span><br>
<span class="quotelev1">&gt;    fields - r32196 through r32202.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    From what I can tell, it looks like it hangs the second time the
</span><br>
<span class="quotelev1">&gt;    rendezvous protocol is used to send the data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev1">&gt;    may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev1">&gt;    disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev1">&gt;    recipient, please contact the sender by reply email and destroy all copies
</span><br>
<span class="quotelev1">&gt;    of the original message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      ----------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15136.php">http://www.open-mpi.org/community/lists/devel/2014/07/15136.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15137/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15138.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<li><strong>Previous message:</strong> <a href="15136.php">Rolf vandeVaart: "[OMPI devel] Hangs on the trunk"</a>
<li><strong>In reply to:</strong> <a href="15136.php">Rolf vandeVaart: "[OMPI devel] Hangs on the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15138.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<li><strong>Reply:</strong> <a href="15138.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
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
