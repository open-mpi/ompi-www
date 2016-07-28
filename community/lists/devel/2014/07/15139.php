<?
$subject_val = "Re: [OMPI devel] Hangs on the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 17:09:32 2014" -->
<!-- isoreceived="20140714210932" -->
<!-- sent="Mon, 14 Jul 2014 14:09:28 -0700" -->
<!-- isosent="20140714210928" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hangs on the trunk" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F360474A9A64_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140714210104.GJ1506_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-14 17:09:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15140.php">Nathan Hjelm: "[OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15138.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<li><strong>In reply to:</strong> <a href="15138.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.  That fixed my issue.  Will check MTT after tonight's run.
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Nathan
</span><br>
<span class="quotelev1">&gt;Hjelm
</span><br>
<span class="quotelev1">&gt;Sent: Monday, July 14, 2014 5:01 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] Hangs on the trunk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* PGP Signed by an unknown key
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Found the typo. Fixed in r32232
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Mon, Jul 14, 2014 at 02:44:06PM -0600, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yeah. I think it is a problem I introduced. I am trying to track it
</span><br>
<span class="quotelev2">&gt;&gt; down now. Probably messed up one of the conversions in ob1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jul 14, 2014 at 01:38:38PM -0700, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    I have noticed that I am seeing some tests hang on the trunk.  For
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    example:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    $ mpirun --mca btl_tcp_if_include eth0 --host
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    drossetti-ivy0,drossetti-ivy1 -np 2 --mca pml ob1 --mca btl sm,tcp,self
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    --mca coll_mdisable_allgather 1 --mca
</span><br>
<span class="quotelev1">&gt;btl_openib_warn_default_gid_prefix 0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    send
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    It is not unusual for this test to take several minutes, particularly on
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    slow networks.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Please be patient.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    NOTICE: Using max message size: 10485760
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Progress: [=====
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Is anyone else seeing this?  (This is really a hang in spite of the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    message saying it should take a few minutes)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    This started with the changes Nathan did for renaming the descriptor
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    fields - r32196 through r32202.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    From what I can tell, it looks like it hangs the second time the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    rendezvous protocol is used to send the data.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Rolf
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    recipient, please contact the sender by reply email and destroy all copies
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    of the original message.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15136.php">http://www.open-mpi.org/community/lists/devel/2014/07/15136.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15137.php">http://www.open-mpi.org/community/lists/devel/2014/07/15137.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* Unknown Key
</span><br>
<span class="quotelev1">&gt;* 0x9AC22B15
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15140.php">Nathan Hjelm: "[OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15138.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<li><strong>In reply to:</strong> <a href="15138.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
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
