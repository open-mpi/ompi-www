<?
$subject_val = "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 31 10:56:09 2010" -->
<!-- isoreceived="20101231155609" -->
<!-- sent="Fri, 31 Dec 2010 10:58:50 -0500" -->
<!-- isosent="20101231155850" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR" -->
<!-- id="85D9996F-8488-45A7-9280-9F351E09318A_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D1D3539.7030904_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-31 10:58:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8825.php">Ralph Castain: "[OMPI devel] RFC: VM launch"</a>
<li><strong>Previous message:</strong> <a href="8823.php">Eugene Loh: "[OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>In reply to:</strong> <a href="8823.php">Eugene Loh: "[OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8827.php">Eugene Loh: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8827.php">Eugene Loh: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene,
<br>
<p>This error indicate that somehow we're accessing the QP while the QP is in &quot;down&quot; state. As the asynchronous thread is the one that see this error, I wonder if it doesn't look for some information about a QP that has been destroyed by the main thread (as this only occurs in MPI_Finalize).
<br>
<p>Can you look in the syslog to see if there is any additional info related to this issue there?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>&quot;All the books in the world contain no more information than is broadcast as video in a single large American city in a single year. Not all bits have equal value.&quot;. -- Carl Sagan
<br>
<p>On Dec 30, 2010, at 20:43, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I was running a bunch of np=4 test programs over two nodes.  Occasionally, *one* of the codes would see an IBV_EVENT_QP_ACCESS_ERR during MPI_Finalize().  I traced the code and ran another program that mimicked the particular MPI calls made by that program.  This other program, too, would occasionally trigger this error.  I never saw the problem with other tests.  Rate of incidence could go from consecutive runs (I saw this once) to 1:100s (more typically) to even less frequently -- I've had 1000s of consecutive runs with no problems.  (The tests run a few seconds apiece.)  The traffic pattern is sends from non-zero ranks to rank 0, with root-0 gathers, and lots of Allgathers.  The largest messages are 1000bytes.  It appears the problem is always seen on rank 3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, I wouldn't mind someone telling me, based on that little information, what the problem is here, but I guess I don't expect that.  What I am asking is what IBV_EVENT_QP_ACCESS_ERR means.  Again, it's seen during MPI_Finalize.  The async thread is seeing this.  What is this error trying to tell me?
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8825.php">Ralph Castain: "[OMPI devel] RFC: VM launch"</a>
<li><strong>Previous message:</strong> <a href="8823.php">Eugene Loh: "[OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>In reply to:</strong> <a href="8823.php">Eugene Loh: "[OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8827.php">Eugene Loh: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8827.php">Eugene Loh: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
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
