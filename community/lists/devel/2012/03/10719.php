<?
$subject_val = "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 20:16:03 2012" -->
<!-- isoreceived="20120316001603" -->
<!-- sent="Thu, 15 Mar 2012 18:15:55 -0600" -->
<!-- isosent="20120316001555" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?" -->
<!-- id="7FADFC26-6DE0-49E0-9ECD-F7C76B8237C3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F617DBD.6000607_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 20:15:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10720.php">Tomoya Adachi: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Previous message:</strong> <a href="10718.php">Shamis, Pavel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>In reply to:</strong> <a href="10714.php">Eugene Loh: "[OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<li><strong>Reply:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me know what you find - I took a look at the code and it looks correct. All required changes were included in the patch that was applied to the branch.
<br>
<p><p>On Mar 14, 2012, at 11:27 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I'm quitting for the day, but happened to notice that all our v1.5 MTT runs are failing with r26133, though tests ran fine as of r26129.  Things run fine on-node, but if you run even just &quot;hostname&quot; on a remote node, the job fails with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orted: Command not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get this problem whether I include &quot;--prefix $OPAL_PREFIX&quot; or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at recent putbacks, I see r26132 pulls in r26081 to fix #3047.  According to both the trac ticket and <a href="http://www.open-mpi.org/community/lists/devel/2012/03/10672.php">http://www.open-mpi.org/community/lists/devel/2012/03/10672.php</a> , r26081 alone isn't enough, but... whatever, I'm going to bed.  It does seem like r26132 isn't quite right.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10720.php">Tomoya Adachi: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Previous message:</strong> <a href="10718.php">Shamis, Pavel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>In reply to:</strong> <a href="10714.php">Eugene Loh: "[OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<li><strong>Reply:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
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
