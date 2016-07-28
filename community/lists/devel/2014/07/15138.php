<?
$subject_val = "Re: [OMPI devel] Hangs on the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 17:01:05 2014" -->
<!-- isoreceived="20140714210105" -->
<!-- sent="Mon, 14 Jul 2014 15:01:04 -0600" -->
<!-- isosent="20140714210104" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hangs on the trunk" -->
<!-- id="20140714210104.GJ1506_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140714204406.GI1506_at_pn1246003.lanl.gov" -->
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
<strong>Date:</strong> 2014-07-14 17:01:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15139.php">Rolf vandeVaart: "Re: [OMPI devel] Hangs on the trunk"</a>
<li><strong>Previous message:</strong> <a href="15137.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<li><strong>In reply to:</strong> <a href="15137.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15139.php">Rolf vandeVaart: "Re: [OMPI devel] Hangs on the trunk"</a>
<li><strong>Reply:</strong> <a href="15139.php">Rolf vandeVaart: "Re: [OMPI devel] Hangs on the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Found the typo. Fixed in r32232
<br>
<p>-Nathan
<br>
<p>On Mon, Jul 14, 2014 at 02:44:06PM -0600, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; Yeah. I think it is a problem I introduced. I am trying to track it down
</span><br>
<span class="quotelev1">&gt; now. Probably messed up one of the conversions in ob1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 14, 2014 at 01:38:38PM -0700, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    I have noticed that I am seeing some tests hang on the trunk.  For
</span><br>
<span class="quotelev2">&gt; &gt;    example:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    $ mpirun --mca btl_tcp_if_include eth0 --host
</span><br>
<span class="quotelev2">&gt; &gt;    drossetti-ivy0,drossetti-ivy1 -np 2 --mca pml ob1 --mca btl sm,tcp,self
</span><br>
<span class="quotelev2">&gt; &gt;    --mca coll_mdisable_allgather 1 --mca btl_openib_warn_default_gid_prefix 0
</span><br>
<span class="quotelev2">&gt; &gt;    send
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    It is not unusual for this test to take several minutes, particularly on
</span><br>
<span class="quotelev2">&gt; &gt;    slow networks.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Please be patient.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    NOTICE: Using max message size: 10485760
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Progress: [=====          
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Is anyone else seeing this?  (This is really a hang in spite of the
</span><br>
<span class="quotelev2">&gt; &gt;    message saying it should take a few minutes)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    This started with the changes Nathan did for renaming the descriptor
</span><br>
<span class="quotelev2">&gt; &gt;    fields - r32196 through r32202.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    From what I can tell, it looks like it hangs the second time the
</span><br>
<span class="quotelev2">&gt; &gt;    rendezvous protocol is used to send the data.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Rolf
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev2">&gt; &gt;    may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev2">&gt; &gt;    disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev2">&gt; &gt;    recipient, please contact the sender by reply email and destroy all copies
</span><br>
<span class="quotelev2">&gt; &gt;    of the original message.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15136.php">http://www.open-mpi.org/community/lists/devel/2014/07/15136.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15137.php">http://www.open-mpi.org/community/lists/devel/2014/07/15137.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15138/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15139.php">Rolf vandeVaart: "Re: [OMPI devel] Hangs on the trunk"</a>
<li><strong>Previous message:</strong> <a href="15137.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<li><strong>In reply to:</strong> <a href="15137.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15139.php">Rolf vandeVaart: "Re: [OMPI devel] Hangs on the trunk"</a>
<li><strong>Reply:</strong> <a href="15139.php">Rolf vandeVaart: "Re: [OMPI devel] Hangs on the trunk"</a>
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
