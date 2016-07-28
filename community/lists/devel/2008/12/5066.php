<?
$subject_val = "[OMPI devel] All_Reduce scaling?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 14 14:24:45 2008" -->
<!-- isoreceived="20081214192445" -->
<!-- sent="Sun, 14 Dec 2008 12:24:37 -0700" -->
<!-- isosent="20081214192437" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] All_Reduce scaling?" -->
<!-- id="EB74D646-C823-44FF-8589-9CFE1AF5C98A_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1229120910.15315.296.camel_at_squant.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] All_Reduce scaling?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-14 14:24:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5067.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Previous message:</strong> <a href="5065.php">Paul H. Hargrove: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo folks
<br>
<p>The reported results here sound strange to me - any suggestions on  
<br>
what could be going on? This is a 16-core Linux system, with BTL's set  
<br>
to openib,sm,self. The 1.3b version he is using is a little out of  
<br>
date, and I will update it to the latest state of the branch on Monday  
<br>
and ask him to retry it.
<br>
<p>Meantime, has anyone seen behavior like this elsewhere?
<br>
<p>Ralph
<br>
PS. Just to clarify, the blue line in the graph is 1.3b. And no - he  
<br>
didn't tell me what the scales mean (I've asked for more info).
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: michael k lang &lt;mlang_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: December 12, 2008 3:28:30 PM MST
</span><br>
<span class="quotelev1">&gt; To: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: 1.3 beta on lobo collectives
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I looked at allreduce on 1.3b and 1.28 and mvapich1.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For 1 per node all is about the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For 16 per node openmpi is much worse.  I imagine that mvapich does a
</span><br>
<span class="quotelev1">&gt; inter-node in sharedmem, then out of node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does openmpi have a particular tuned version we should be using,  1.3
</span><br>
<span class="quotelev1">&gt; was supposed to have better collectives as I recall.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (allreduce on a single MPI_DOUBLE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --Mike
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5066/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-5066/allreduce.jpeg" alt="allreduce.jpeg">
<!-- attachment="allreduce.jpeg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5067.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Previous message:</strong> <a href="5065.php">Paul H. Hargrove: "Re: [OMPI devel] shared-memory allocations"</a>
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
