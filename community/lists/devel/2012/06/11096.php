<?
$subject_val = "Re: [OMPI devel] Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 12:05:09 2012" -->
<!-- isoreceived="20120613160509" -->
<!-- sent="Wed, 13 Jun 2012 12:05:04 -0400" -->
<!-- isosent="20120613160504" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Modex" -->
<!-- id="3DDD573E-688E-4207-9B1B-23BE3C33BE58_at_ornl.gov" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-13 12:05:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11097.php">Nathan Hjelm: "[OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>Previous message:</strong> <a href="11095.php">Ralph Castain: "Re: [OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="11093.php">Ralph Castain: "[OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11122.php">George Bosilca: "Re: [OMPI devel] Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We currently block on exchange of contact information for the BTL's when we perform an all-to-all operation we term the &quot;modex&quot;.
</span><br>
<p>Do we have to do all-to-all or allgather ? allgather should be enough ...
<br>
<p><span class="quotelev1">&gt; At the end of that operation, each process constructs a list of information for all processes in the job, and each process contains the complete BTL contact info for every process in its modex database. This consumes a significant amount of memory, especially as we scale to ever larger applications. In addition, the modex operation itself is one of the largest time consumers during MPI_Init.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An alternative approach is for the BTL's to &quot;add proc&quot; only on &quot;first message&quot; to or from that process - i.e., we would not construct a list of all procs during MPI_Init, but only add an entry for a process with which we communicate. The method would go like this:
</span><br>
<p><span class="quotelev1">&gt; 
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
<p>It is right direction. As far as I see for changes (1-2) we don't have to do any changes in MPI level code, all the new logic will sit behind modex. 
<br>
<p>4 - On the first message we already do a lot of crap, so it is not a big deal. Even so, we have to make this change really careful, there are potential pitfalls. If you want, we may discuss it offline. 
<br>
<p><span class="quotelev1">&gt; I'm not (yet) that familiar with the details of many of the BTLs, but my initial review of them didn't see any showstoppers for this approach. If people think this might work and be an interesting approach, I'd be happy to help implement a prototype to quantify its behavior.
</span><br>
<p>I'm interested. Let's talk.
<br>
<p>-Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11097.php">Nathan Hjelm: "[OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>Previous message:</strong> <a href="11095.php">Ralph Castain: "Re: [OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="11093.php">Ralph Castain: "[OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11122.php">George Bosilca: "Re: [OMPI devel] Modex"</a>
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
