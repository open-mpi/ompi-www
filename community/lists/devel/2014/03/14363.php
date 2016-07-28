<?
$subject_val = "Re: [OMPI devel] Hang in comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 10:46:18 2014" -->
<!-- isoreceived="20140318144618" -->
<!-- sent="Tue, 18 Mar 2014 07:44:56 -0700" -->
<!-- isosent="20140318144456" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hang in comm_spawn" -->
<!-- id="3024FE51-CC1C-4EC4-80D2-8911056BF801_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140318144238.GG28767_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Hang in comm_spawn<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-18 10:44:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14364.php">Dave Goodell (dgoodell): "[OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<li><strong>Previous message:</strong> <a href="14362.php">Nathan Hjelm: "Re: [OMPI devel] Hang in comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="14362.php">Nathan Hjelm: "Re: [OMPI devel] Hang in comm_spawn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's on the trunk, but I imagine it is on 1.7 as well. I use the &quot;simple_spawn&quot; program in orte/test/mpi, and the cmd line is just &quot;mpirun -np 2 ./simple_spawn&quot;
<br>
<p><p>On Mar 18, 2014, at 7:42 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is this trunk or 1.7? Can you give me your mpirun command?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 18, 2014 at 07:35:01AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   I'm seeing comm_spawn hang here:
</span><br>
<span class="quotelev2">&gt;&gt;   [bend001][[52890,1],0][coll_ml_module.c:3030:mca_coll_ml_comm_query]
</span><br>
<span class="quotelev2">&gt;&gt;   COLL-ML ml_coll_schedule_setup exit with error
</span><br>
<span class="quotelev2">&gt;&gt;   [bend001][[52890,1],1][coll_ml_module.c:3030:mca_coll_ml_comm_query]
</span><br>
<span class="quotelev2">&gt;&gt;   COLL-ML ml_coll_schedule_setup exit with error
</span><br>
<span class="quotelev2">&gt;&gt;   Setting -mca coll ^ml allows things to run to completion just fine, so it
</span><br>
<span class="quotelev2">&gt;&gt;   appears that coll/ml is having a problem with comm_spawn.
</span><br>
<span class="quotelev2">&gt;&gt;   Ralph
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14361.php">http://www.open-mpi.org/community/lists/devel/2014/03/14361.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14362.php">http://www.open-mpi.org/community/lists/devel/2014/03/14362.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14364.php">Dave Goodell (dgoodell): "[OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<li><strong>Previous message:</strong> <a href="14362.php">Nathan Hjelm: "Re: [OMPI devel] Hang in comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="14362.php">Nathan Hjelm: "Re: [OMPI devel] Hang in comm_spawn"</a>
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
