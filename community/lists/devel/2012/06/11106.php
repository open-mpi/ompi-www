<?
$subject_val = "Re: [OMPI devel] Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 10:45:32 2012" -->
<!-- isoreceived="20120615144532" -->
<!-- sent="Fri, 15 Jun 2012 10:45:27 -0400" -->
<!-- isosent="20120615144527" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Modex" -->
<!-- id="CAANzjEn-f=gNmUBnCKvLotVZc2gF7sQWi_-jAC5Ea9+sC85FdQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-15 10:45:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11107.php">Eugene Loh: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<li><strong>Previous message:</strong> <a href="11105.php">George Bosilca: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>In reply to:</strong> <a href="11095.php">Ralph Castain: "Re: [OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11096.php">Shamis, Pavel: "Re: [OMPI devel] Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(I'm catching up on email from an unanticipated absence - forgive the delay)
<br>
<p>Pineapple did not hit a roadblock during the call. It is still on
<br>
track. I will start a separate thread for the discussion. As I have
<br>
said many (many, many) times, if the pineapple interface needs to
<br>
change for OMPI/ORTE/OPAL then we will change it. George's problem (as
<br>
best I could tell) was not with the interface, but with pineapple
<br>
being a separate project in the tree versus being a framework in OMPI.
<br>
But that is a discussion we can have on another thread.
<br>
<p>-- Jsoh
<br>
<p>On Wed, Jun 13, 2012 at 9:07 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; ?????
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm talking about how to implement it, not what level holds the interface. Besides, &quot;pineapple&quot; hit a roadblock during the call and is a totally separate discussion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 13, 2012, at 7:03 AM, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would suggest exposing modex at the pineapple level, and not tie it to a particular instance of run-time instantiation. &#160;This decouples the instantiation from the details of the run-time, and also gives the freedom to provide different instantiations for different job scenarios.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, June 13, 2012 12:10 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] Modex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George raised something during this morning's call that I wanted to follow-up on relating to improving our modex operation. I've been playing with an approach that sounded similar to what he suggested, and perhaps we could pursue it in accordance with moving the BTL's to OPAL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We currently block on exchange of contact information for the BTL's when we perform an all-to-all operation we term the &quot;modex&quot;. At the end of that operation, each process constructs a list of information for all processes in the job, and each process contains the complete BTL contact info for every process in its modex database. This consumes a significant amount of memory, especially as we scale to ever larger applications. In addition, the modex operation itself is one of the largest time consumers during MPI_Init.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An alternative approach is for the BTL's to &quot;add proc&quot; only on &quot;first message&quot; to or from that process - i.e., we would not construct a list of all procs during MPI_Init, but only add an entry for a process with which we communicate. The method would go like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. during MPI_Init, each BTL posts its contact info to the local modex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. the &quot;modex&quot; call in MPI_Init simply sends that data to the local daemon, which asynchronously executes an all-to-all collective with the other daemons in the job. At the end of that operation, each daemon holds a complete modex database for the job. Meantime, the application process continues to run.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. we remove the &quot;add_procs&quot; call within MPI_Init, and perhaps can eliminate the ORTE barrier at the end of MPI_Init. The reason we had that barrier was to ensure that all procs were ready to communicate before we allowed anyone to send a message. However, with this method, that may no longer be required.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. we modify the BTL's so they (a) can receive a message from an unknown source, adding that source to their local proc list, and (b) when sending a message to another process, obtain the required contact info from their local daemon if they don't already have it. Thus, we will see an increased latency on first message - but we will ONLY store info for processes with which we actually communicate (thus reducing the memory burden) and will wireup much faster than we do today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not (yet) that familiar with the details of many of the BTLs, but my initial review of them didn't see any showstoppers for this approach. If people think this might work and be an interesting approach, I'd be happy to help implement a prototype to quantify its behavior.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11107.php">Eugene Loh: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<li><strong>Previous message:</strong> <a href="11105.php">George Bosilca: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>In reply to:</strong> <a href="11095.php">Ralph Castain: "Re: [OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11096.php">Shamis, Pavel: "Re: [OMPI devel] Modex"</a>
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
