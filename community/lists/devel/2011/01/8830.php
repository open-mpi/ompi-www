<?
$subject_val = "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  3 22:04:17 2011" -->
<!-- isoreceived="20110104030417" -->
<!-- sent="Mon, 03 Jan 2011 22:04:11 -0500" -->
<!-- isosent="20110104030411" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR" -->
<!-- id="75D69A08-982F-4EBF-856E-8076A3198D23_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8980B08E-269F-4F40-AB40-90C5BDB78A1C_at_cisco.com" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-03 22:04:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8831.php">Jeff Squyres: "Re: [OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<li><strong>Previous message:</strong> <a href="8829.php">Eugene Loh: "[OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<li><strong>In reply to:</strong> <a href="8828.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks that we are touching some QP that was released. Before close the QP we make sure to complete all outstanding messages on the endpoint. Once all qps (and other resources) are closed , we signal to async thread to remove this hca from monitoring list.  For me it looks that somehow we close the QP before all outstanding requests were completed.
<br>
<p>Regards
<br>
<pre>
---
Pavel Shamis (Pasha)
On Jan 3, 2011, at 12:44 PM, Jeff Squyres (jsquyres) wrote:
&gt; I'd guess thesame thing as George - a race condition in the shutdown of the async thread...?  I haven't looked at that code in a long log time to remember how it tried to defend against the race condition. 
&gt; 
&gt; Sent from my PDA. No type good. 
&gt; 
&gt; On Jan 3, 2011, at 2:31 PM, &quot;Eugene Loh&quot; &lt;eugene.loh_at_[hidden]&gt; wrote:
&gt; 
&gt;&gt; George Bosilca wrote:
&gt;&gt; 
&gt;&gt;&gt; Eugene,
&gt;&gt;&gt; 
&gt;&gt;&gt; This error indicate that somehow we're accessing the QP while the QP is in &quot;down&quot; state. As the asynchronous thread is the one that see this error, I wonder if it doesn't look for some information about a QP that has been destroyed by the main thread (as this only occurs in MPI_Finalize).
&gt;&gt;&gt; 
&gt;&gt;&gt; Can you look in the syslog to see if there is any additional info related to this issue there?
&gt;&gt;&gt; 
&gt;&gt; Not much.  A one-liner like this:
&gt;&gt; 
&gt;&gt; Dec 27 21:49:36 burl-ct-x4150-11 hermon: [ID 492207 kern.info] hermon1: EQE local access violation
&gt;&gt; 
&gt;&gt;&gt; On Dec 30, 2010, at 20:43, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; I was running a bunch of np=4 test programs over two nodes.  Occasionally, *one* of the codes would see an IBV_EVENT_QP_ACCESS_ERR during MPI_Finalize().  I traced the code and ran another program that mimicked the particular MPI calls made by that program.  This other program, too, would occasionally trigger this error.  I never saw the problem with other tests.  Rate of incidence could go from consecutive runs (I saw this once) to 1:100s (more typically) to even less frequently -- I've had 1000s of consecutive runs with no problems.  (The tests run a few seconds apiece.)  The traffic pattern is sends from non-zero ranks to rank 0, with root-0 gathers, and lots of Allgathers.  The largest messages are 1000bytes.  It appears the problem is always seen on rank 3.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Now, I wouldn't mind someone telling me, based on that little information, what the problem is here, but I guess I don't expect that.  What I am asking is what IBV_EVENT_QP_ACCESS_ERR means.  Again, it's seen during MPI_Finalize.  The async thread is seeing this.  What is this error trying to tell me?
&gt;&gt;&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8831.php">Jeff Squyres: "Re: [OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<li><strong>Previous message:</strong> <a href="8829.php">Eugene Loh: "[OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<li><strong>In reply to:</strong> <a href="8828.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
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
