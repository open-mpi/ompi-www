<?
$subject_val = "Re: [OMPI users] oversubscription of slots with GridEngine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 11:04:21 2014" -->
<!-- isoreceived="20141112160421" -->
<!-- sent="Wed, 12 Nov 2014 08:04:16 -0800" -->
<!-- isosent="20141112160416" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oversubscription of slots with GridEngine" -->
<!-- id="00B5C9AC-F64B-4260-8633-E84092B8D8EC_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8761eklaax.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] oversubscription of slots with GridEngine<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 11:04:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25774.php">Ralph Castain: "Re: [OMPI users] 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="25772.php">Liu Jianyu: "[OMPI users] Question on tunning OFED kernel parameter for Mellanox 56G IB"</a>
<li><strong>In reply to:</strong> <a href="25769.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25808.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25808.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Nov 12, 2014, at 7:15 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You might also add the &#226;&#128;&#148;display-allocation flag to mpirun so we can
</span><br>
<span class="quotelev2">&gt;&gt; see what it thinks the allocation looks like. If there are only 16
</span><br>
<span class="quotelev2">&gt;&gt; slots on the node, it seems odd that OMPI would assign 32 procs to it
</span><br>
<span class="quotelev2">&gt;&gt; unless it thinks there is only 1 node in the job, and oversubscription
</span><br>
<span class="quotelev2">&gt;&gt; is allowed (which it won&#226;&#128;&#153;t be by default if it read the GE allocation)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think there's a problem with documentation at least not being
</span><br>
<span class="quotelev1">&gt; explicit, and it would really help to have it clarified unless I'm
</span><br>
<span class="quotelev1">&gt; missing some.
</span><br>
<p>Not quite sure I understand this comment - the problem is that we aren&#226;&#128;&#153;t correctly reading the allocation, as evidenced by when the user ran with &#226;&#128;&#148;display-allocation. From what we can see, it looks like the PE_HOSTFILE may be containing some unexpected characters that make us think we hit EOF at the end of the first line, thus ignoring the second node.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Although there's probably more to it in this case, the behaviour seemed
</span><br>
<span class="quotelev1">&gt; consistent with what I deduced (without reading the code) from the doc,
</span><br>
<span class="quotelev1">&gt; ompi_info, and experiment that at least wasn't inconsistent:  the node
</span><br>
<span class="quotelev1">&gt; has 32 processing units, and the default allocation is by socket,
</span><br>
<span class="quotelev1">&gt; apparently round-robin within nodes.  I can't check the actual behaviour
</span><br>
<span class="quotelev1">&gt; in that case just now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25769.php">http://www.open-mpi.org/community/lists/users/2014/11/25769.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25774.php">Ralph Castain: "Re: [OMPI users] 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="25772.php">Liu Jianyu: "[OMPI users] Question on tunning OFED kernel parameter for Mellanox 56G IB"</a>
<li><strong>In reply to:</strong> <a href="25769.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25808.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25808.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
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
