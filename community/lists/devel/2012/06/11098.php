<?
$subject_val = "Re: [OMPI devel] Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 17:09:37 2012" -->
<!-- isoreceived="20120613210937" -->
<!-- sent="Wed, 13 Jun 2012 21:09:30 +0000" -->
<!-- isosent="20120613210930" -->
<!-- name="Richard Graham" -->
<!-- email="richardg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Modex" -->
<!-- id="3D8F945A4E59E644AE9205E5CD3708E50574CF20_at_MTIDAG02.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="67F66F80-8E44-4485-8909-33F1D1080F94_at_open-mpi.org" -->
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
<strong>From:</strong> Richard Graham (<em>richardg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-13 17:09:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11099.php">Jeff Squyres: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>Previous message:</strong> <a href="11097.php">Nathan Hjelm: "[OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>In reply to:</strong> <a href="11095.php">Ralph Castain: "Re: [OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11106.php">Josh Hursey: "Re: [OMPI devel] Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My comment here is that one will want different types of modex capabilities, depending on the type of system being targeted, so the instantiation of an interface needs to accommodate this, regardless of where the interface sits.  When you have order several hundred K end points, like large systems today already have, you likely don't need the information on all endpoints stored in a single location on a &quot;node&quot; that is being used for compute.  So, as the BTL code moves, should keep this in the back of our minds, and consider what impact this may have (if any) on the code.
<br>
<p>Rich
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, June 13, 2012 9:09 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Modex
<br>
<p>?????
<br>
<p>I'm talking about how to implement it, not what level holds the interface. Besides, &quot;pineapple&quot; hit a roadblock during the call and is a totally separate discussion.
<br>
<p><p>On Jun 13, 2012, at 7:03 AM, Richard Graham wrote:
<br>
<p><span class="quotelev1">&gt; I would suggest exposing modex at the pineapple level, and not tie it to a particular instance of run-time instantiation.  This decouples the instantiation from the details of the run-time, and also gives the freedom to provide different instantiations for different job scenarios.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 12:10 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] Modex
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George raised something during this morning's call that I wanted to follow-up on relating to improving our modex operation. I've been playing with an approach that sounded similar to what he suggested, and perhaps we could pursue it in accordance with moving the BTL's to OPAL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We currently block on exchange of contact information for the BTL's when we perform an all-to-all operation we term the &quot;modex&quot;. At the end of that operation, each process constructs a list of information for all processes in the job, and each process contains the complete BTL contact info for every process in its modex database. This consumes a significant amount of memory, especially as we scale to ever larger applications. In addition, the modex operation itself is one of the largest time consumers during MPI_Init.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An alternative approach is for the BTL's to &quot;add proc&quot; only on &quot;first message&quot; to or from that process - i.e., we would not construct a list of all procs during MPI_Init, but only add an entry for a process with which we communicate. The method would go like this:
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
<span class="quotelev1">&gt; 
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
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11099.php">Jeff Squyres: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>Previous message:</strong> <a href="11097.php">Nathan Hjelm: "[OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>In reply to:</strong> <a href="11095.php">Ralph Castain: "Re: [OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11106.php">Josh Hursey: "Re: [OMPI devel] Modex"</a>
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
