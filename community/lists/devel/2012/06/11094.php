<?
$subject_val = "Re: [OMPI devel] Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 09:03:27 2012" -->
<!-- isoreceived="20120613130327" -->
<!-- sent="Wed, 13 Jun 2012 13:03:20 +0000" -->
<!-- isosent="20120613130320" -->
<!-- name="Richard Graham" -->
<!-- email="richardg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Modex" -->
<!-- id="3D8F945A4E59E644AE9205E5CD3708E50574CAEC_at_MTIDAG02.mtl.com" -->
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
<strong>From:</strong> Richard Graham (<em>richardg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-13 09:03:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11095.php">Ralph Castain: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="11093.php">Ralph Castain: "[OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="11093.php">Ralph Castain: "[OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11095.php">Ralph Castain: "Re: [OMPI devel] Modex"</a>
<li><strong>Reply:</strong> <a href="11095.php">Ralph Castain: "Re: [OMPI devel] Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would suggest exposing modex at the pineapple level, and not tie it to a particular instance of run-time instantiation.  This decouples the instantiation from the details of the run-time, and also gives the freedom to provide different instantiations for different job scenarios.
<br>
<p>Rich
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, June 13, 2012 12:10 AM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] Modex
<br>
<p>George raised something during this morning's call that I wanted to follow-up on relating to improving our modex operation. I've been playing with an approach that sounded similar to what he suggested, and perhaps we could pursue it in accordance with moving the BTL's to OPAL.
<br>
<p>We currently block on exchange of contact information for the BTL's when we perform an all-to-all operation we term the &quot;modex&quot;. At the end of that operation, each process constructs a list of information for all processes in the job, and each process contains the complete BTL contact info for every process in its modex database. This consumes a significant amount of memory, especially as we scale to ever larger applications. In addition, the modex operation itself is one of the largest time consumers during MPI_Init.
<br>
<p>An alternative approach is for the BTL's to &quot;add proc&quot; only on &quot;first message&quot; to or from that process - i.e., we would not construct a list of all procs during MPI_Init, but only add an entry for a process with which we communicate. The method would go like this:
<br>
<p>1. during MPI_Init, each BTL posts its contact info to the local modex
<br>
<p>2. the &quot;modex&quot; call in MPI_Init simply sends that data to the local daemon, which asynchronously executes an all-to-all collective with the other daemons in the job. At the end of that operation, each daemon holds a complete modex database for the job. Meantime, the application process continues to run.
<br>
<p>3. we remove the &quot;add_procs&quot; call within MPI_Init, and perhaps can eliminate the ORTE barrier at the end of MPI_Init. The reason we had that barrier was to ensure that all procs were ready to communicate before we allowed anyone to send a message. However, with this method, that may no longer be required.
<br>
<p>4. we modify the BTL's so they (a) can receive a message from an unknown source, adding that source to their local proc list, and (b) when sending a message to another process, obtain the required contact info from their local daemon if they don't already have it. Thus, we will see an increased latency on first message - but we will ONLY store info for processes with which we actually communicate (thus reducing the memory burden) and will wireup much faster than we do today.
<br>
<p>I'm not (yet) that familiar with the details of many of the BTLs, but my initial review of them didn't see any showstoppers for this approach. If people think this might work and be an interesting approach, I'd be happy to help implement a prototype to quantify its behavior.
<br>
<p>Ralph
<br>
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
<li><strong>Next message:</strong> <a href="11095.php">Ralph Castain: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="11093.php">Ralph Castain: "[OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="11093.php">Ralph Castain: "[OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11095.php">Ralph Castain: "Re: [OMPI devel] Modex"</a>
<li><strong>Reply:</strong> <a href="11095.php">Ralph Castain: "Re: [OMPI devel] Modex"</a>
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
