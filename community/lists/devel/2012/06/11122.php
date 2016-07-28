<?
$subject_val = "Re: [OMPI devel] Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 19 10:09:16 2012" -->
<!-- isoreceived="20120619140916" -->
<!-- sent="Tue, 19 Jun 2012 16:09:09 +0200" -->
<!-- isosent="20120619140909" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Modex" -->
<!-- id="8D6FE84A-E9E1-4BBE-B531-97651A8EE01F_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="265188F9-B53B-4682-8541-AE030115863C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Modex<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-19 10:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11123.php">Jeff Squyres: "[OMPI devel] SSL certificates changing"</a>
<li><strong>Previous message:</strong> <a href="11121.php">Nathan Hjelm: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>In reply to:</strong> <a href="11093.php">Ralph Castain: "[OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 13, 2012, at 06:09 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; George raised something during this morning's call that I wanted to follow-up on relating to improving our modex operation. I've been playing with an approach that sounded similar to what he suggested, and perhaps we could pursue it in accordance with moving the BTL's to OPAL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We currently block on exchange of contact information for the BTL's when we perform an all-to-all operation we term the &quot;modex&quot;. At the end of that operation, each process constructs a list of information for all processes in the job, and each process contains the complete BTL contact info for every process in its modex database. This consumes a significant amount of memory, especially as we scale to ever larger applications. In addition, the modex operation itself is one of the largest time consumers during MPI_Init.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An alternative approach is for the BTL's to &quot;add proc&quot; only on &quot;first message&quot; to or from that process -
</span><br>
<p>This is not easy. It requires a completely different initialization steps. The procs will become dynamic, the BTL structures (endpoint and friends) must be initialized on the first message. Plus we have the issue related to the remote architecture, and thus how we store the BTL headers. In addition we should not forget that some BTL will still require a coordinated initialization.
<br>
<p><span class="quotelev1">&gt; i.e., we would not construct a list of all procs during MPI_Init, but only add an entry for a process with which we communicate. The method would go like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. during MPI_Init, each BTL posts its contact info to the local modex
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. the &quot;modex&quot; call in MPI_Init simply sends that data to the local daemon, which asynchronously executes an all-to-all collective with the other daemons in the job. At the end of that operation, each daemon holds a complete modex database for the job. Meantime, the application process continues to run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. we remove the &quot;add_procs&quot; call within MPI_Init, and perhaps can eliminate the ORTE barrier at the end of MPI_Init. The reason we had that barrier was to ensure that all procs were ready to communicate before we allowed anyone to send a message. However, with this method, that may no longer be required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. we modify the BTL's so they (a) can receive a message from an unknown source, adding that source to their local proc list, and (b) when sending a message to another process, obtain the required contact info from their local daemon if they don't already have it. Thus, we will see an increased latency on first message - but we will ONLY store info for processes with which we actually communicate (thus reducing the memory burden) and will wireup much faster than we do today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not (yet) that familiar with the details of many of the BTLs, but my initial review of them didn't see any showstoppers for this approach. If people think this might work and be an interesting approach, I'd be happy to help implement a prototype to quantify its behavior.
</span><br>
<p>It depends from which perspective you look at this. I guess from an engineering perspective, adding this to Open MPI should not hurt. From a research perspective there is incentive, it has ben already done quite a while ago in the context of other runtimes ([1]).
<br>
<p>Having an asynchronous modex is the last step missing from [2]. We expect it to improve the startup performance significantly, especially for sparse communicative environments.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>1. J. Sridhar, M. Koop, J. Perkins and D. K. Panda, ScELA: Scalable and Extensible Launching Architecture for Clusters, International Conference on High Performance Computing (HiPC 08), December 2008.
<br>
<p>2. George Bosilca, Thomas Herault, Ala Rezmerita and Jack Dongarra, On Scalability for MPI Runtime Systems, The International Workshop on Runtime and Operating Systems for Supercomputers, May 31, 2011. 
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="11123.php">Jeff Squyres: "[OMPI devel] SSL certificates changing"</a>
<li><strong>Previous message:</strong> <a href="11121.php">Nathan Hjelm: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>In reply to:</strong> <a href="11093.php">Ralph Castain: "[OMPI devel] Modex"</a>
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
