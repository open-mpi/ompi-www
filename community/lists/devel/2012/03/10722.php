<?
$subject_val = "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 16 11:26:57 2012" -->
<!-- isoreceived="20120316152657" -->
<!-- sent="Fri, 16 Mar 2012 08:26:48 -0700" -->
<!-- isosent="20120316152648" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?" -->
<!-- id="4F635BB8.9000101_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7FADFC26-6DE0-49E0-9ECD-F7C76B8237C3_at_open-mpi.org" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-16 11:26:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10723.php">Jeffrey Squyres: "[OMPI devel] Fwd: [hwloc-devel] possible membind changes coming in the Linux kernel"</a>
<li><strong>Previous message:</strong> <a href="10721.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10719.php">Ralph Castain: "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I updated trac 3047.  Thanks for the additional patch:  &quot;mpirun -H 
<br>
&lt;remotenode&gt; hostname&quot; now works.
<br>
<p>On 3/15/2012 5:15 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Let me know what you find - I took a look at the code and it looks correct. All required changes were included in the patch that was applied to the branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 14, 2012, at 11:27 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm quitting for the day, but happened to notice that all our v1.5 MTT runs are failing with r26133, though tests ran fine as of r26129.  Things run fine on-node, but if you run even just &quot;hostname&quot; on a remote node, the job fails with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orted: Command not found
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get this problem whether I include &quot;--prefix $OPAL_PREFIX&quot; or not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking at recent putbacks, I see r26132 pulls in r26081 to fix #3047.  According to both the trac ticket and <a href="http://www.open-mpi.org/community/lists/devel/2012/03/10672.php">http://www.open-mpi.org/community/lists/devel/2012/03/10672.php</a> , r26081 alone isn't enough, but... whatever, I'm going to bed.  It does seem like r26132 isn't quite right.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10723.php">Jeffrey Squyres: "[OMPI devel] Fwd: [hwloc-devel] possible membind changes coming in the Linux kernel"</a>
<li><strong>Previous message:</strong> <a href="10721.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10719.php">Ralph Castain: "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
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
