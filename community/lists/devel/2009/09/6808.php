<?
$subject_val = "Re: [OMPI devel] application hangs with multiple dup";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 11:42:54 2009" -->
<!-- isoreceived="20090909154254" -->
<!-- sent="Wed, 09 Sep 2009 17:44:01 +0200" -->
<!-- isosent="20090909154401" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] application hangs with multiple dup" -->
<!-- id="4AA7CD41.60006_at_irisa.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1252507368.31827.17.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI devel] application hangs with multiple dup<br>
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 11:44:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6809.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6807.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>In reply to:</strong> <a href="6807.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6810.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6810.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; On Tue, 2009-09-08 at 15:00 +0200, Thomas Ropars wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm working on r21949 of the trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run on a single node with 4 processes this simple program calling 
</span><br>
<span class="quotelev2">&gt;&gt; 2 times MPI_Comm_dup , the processes hang from time to time in the 2nd dup.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't reproduce this, how often does it fail?  I've run it in a loop
</span><br>
<span class="quotelev1">&gt; hundreds of times here and not had one hang.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
It happens once every 4 or 5 runs. And it also happens if the processes 
<br>
are on different nodes.
<br>
<p>Here is the ouptut I get from padb -axt :
<br>
<p>main() at ?:?
<br>
&nbsp;&nbsp;PMPI_Comm_dup() at pcomm_dup.c:62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_comm_dup() at communicator/comm.c:661
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[0,2] (2 processes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_comm_nextcid() at communicator/comm_cid.c:264
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_comm_allreduce_intra() at communicator/comm_cid.c:619
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allreduce_intra_dec_fixed() at 
<br>
coll_tuned_decision_fixed.c:61
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allreduce_intra_recursivedoubling() at 
<br>
coll_tuned_allreduce.c:223
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_default_wait_all() at request/req_wait.c:262
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_condition_wait() at ../opal/threads/condition.h:99
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,3] (2 processes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_comm_nextcid() at communicator/comm_cid.c:245
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_comm_allreduce_intra() at communicator/comm_cid.c:619
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allreduce_intra_dec_fixed() at 
<br>
coll_tuned_decision_fixed.c:61
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allreduce_intra_recursivedoubling() at 
<br>
coll_tuned_allreduce.c:223
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_default_wait_all() at request/req_wait.c:262
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_condition_wait() at ../opal/threads/condition.h:99
<br>
<p>Thomas
<br>
<span class="quotelev1">&gt; Off-topic I know but this is exactly the type of problem that padb is
</span><br>
<span class="quotelev1">&gt; designed to help with, if you could get it to hang and then run &quot;padb
</span><br>
<span class="quotelev1">&gt; -axt&quot; in another window on the same node and send along the output I'm
</span><br>
<span class="quotelev1">&gt; sure it would be of help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6809.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6807.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>In reply to:</strong> <a href="6807.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6810.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6810.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
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
