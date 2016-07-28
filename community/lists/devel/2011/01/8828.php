<?
$subject_val = "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  3 14:44:31 2011" -->
<!-- isoreceived="20110103194431" -->
<!-- sent="Mon, 3 Jan 2011 14:44:17 -0500" -->
<!-- isosent="20110103194417" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR" -->
<!-- id="8980B08E-269F-4F40-AB40-90C5BDB78A1C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D222378.90207_at_oracle.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-03 14:44:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8829.php">Eugene Loh: "[OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<li><strong>Previous message:</strong> <a href="8827.php">Eugene Loh: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>In reply to:</strong> <a href="8827.php">Eugene Loh: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8830.php">Shamis, Pavel: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Reply:</strong> <a href="8830.php">Shamis, Pavel: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd guess thesame thing as George - a race condition in the shutdown of the async thread...?  I haven't looked at that code in a long log time to remember how it tried to defend against the race condition. 
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Jan 3, 2011, at 2:31 PM, &quot;Eugene Loh&quot; &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Eugene,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This error indicate that somehow we're accessing the QP while the QP is in &quot;down&quot; state. As the asynchronous thread is the one that see this error, I wonder if it doesn't look for some information about a QP that has been destroyed by the main thread (as this only occurs in MPI_Finalize).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you look in the syslog to see if there is any additional info related to this issue there?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Not much.  A one-liner like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dec 27 21:49:36 burl-ct-x4150-11 hermon: [ID 492207 kern.info] hermon1: EQE local access violation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 30, 2010, at 20:43, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was running a bunch of np=4 test programs over two nodes.  Occasionally, *one* of the codes would see an IBV_EVENT_QP_ACCESS_ERR during MPI_Finalize().  I traced the code and ran another program that mimicked the particular MPI calls made by that program.  This other program, too, would occasionally trigger this error.  I never saw the problem with other tests.  Rate of incidence could go from consecutive runs (I saw this once) to 1:100s (more typically) to even less frequently -- I've had 1000s of consecutive runs with no problems.  (The tests run a few seconds apiece.)  The traffic pattern is sends from non-zero ranks to rank 0, with root-0 gathers, and lots of Allgathers.  The largest messages are 1000bytes.  It appears the problem is always seen on rank 3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now, I wouldn't mind someone telling me, based on that little information, what the problem is here, but I guess I don't expect that.  What I am asking is what IBV_EVENT_QP_ACCESS_ERR means.  Again, it's seen during MPI_Finalize.  The async thread is seeing this.  What is this error trying to tell me?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
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
<li><strong>Next message:</strong> <a href="8829.php">Eugene Loh: "[OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<li><strong>Previous message:</strong> <a href="8827.php">Eugene Loh: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>In reply to:</strong> <a href="8827.php">Eugene Loh: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8830.php">Shamis, Pavel: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Reply:</strong> <a href="8830.php">Shamis, Pavel: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
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
