<?
$subject_val = "Re: [OMPI devel] Hang in collectives involving shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 12:29:15 2009" -->
<!-- isoreceived="20090610162915" -->
<!-- sent="Wed, 10 Jun 2009 18:29:01 +0200 (CEST)" -->
<!-- isosent="20090610162901" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hang in collectives involving shared memory" -->
<!-- id="alpine.DEB.2.00.0906101803510.4598_at_jeaugeys.frec.bull.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="71d2d8cc0906100807j7c4b75dek946b48493af95fdb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Hang in collectives involving shared memory<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-10 12:29:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6214.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6212.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6211.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6216.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6216.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6226.php">Sylvain Jeaugey: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hum, very glad that padb works with Open MPI, I couldn't live without it. 
<br>
In my opinion, the best debug tool for parallel applications, and more 
<br>
importantly, the only one that scales.
<br>
<p>About the issue, I couldn't reproduce it on my platform (tried 2 nodes 
<br>
with 2 to 8 processes each, nodes are twin 2.93 GHz Nehalem, IB is 
<br>
Mellanox QDR).
<br>
<p>So my feeling about that is that is may be very hardware related. 
<br>
Especially if you use the hierarch component, some transactions will be 
<br>
done through RDMA on one side and read directly through shared memory on 
<br>
the other side, which can, depending on the hardware, produce very 
<br>
different timings and bugs. Did you try with a different collective 
<br>
component (i.e. not hierarch) ? Or with another interconnect ? [Yes, of 
<br>
course, if it is a race condition, we might well avoid the bug because 
<br>
timings will be different, but that's still information]
<br>
<p>Perhaps all what I'm saying makes no sense or you already thought about 
<br>
this, anyway, if you want me to try different things, just let me know.
<br>
<p>Sylvain
<br>
<p>On Wed, 10 Jun 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ashley
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks! I would definitely be interested and will look at the tool. Meantime, I have filed a bunch of data on this in
</span><br>
<span class="quotelev1">&gt; ticket #1944, so perhaps you might take a glance at that and offer some thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1944">https://svn.open-mpi.org/trac/ompi/ticket/1944</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will be back after I look at the tool.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 10, 2009 at 8:51 AM, Ashley Pittman &lt;ashley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       If I may say this is exactly the type of problem the tool I have been
</span><br>
<span class="quotelev1">&gt;       working on recently aims to help with and I'd be happy to help you
</span><br>
<span class="quotelev1">&gt;       through it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Firstly I'd say of the three collectives you mention, MPI_Allgather,
</span><br>
<span class="quotelev1">&gt;       MPI_Reduce and MPI_Bcast one exhibit a many-to-many, one a many-to-one
</span><br>
<span class="quotelev1">&gt;       and the last a many-to-one communication pattern. &#160;The scenario of a
</span><br>
<span class="quotelev1">&gt;       root process falling behind and getting swamped in comms is a plausible
</span><br>
<span class="quotelev1">&gt;       one for MPI_Reduce only but doesn't hold water with the other two. &#160;You
</span><br>
<span class="quotelev1">&gt;       also don't mention if the loop is over a single collective or if you
</span><br>
<span class="quotelev1">&gt;       have loop calling a number of different collectives each iteration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       padb, the tool I've been working on has the ability to look at parallel
</span><br>
<span class="quotelev1">&gt;       jobs and report on the state of collective comms and should help narrow
</span><br>
<span class="quotelev1">&gt;       you down on erroneous processes and those simply blocked waiting for
</span><br>
<span class="quotelev1">&gt;       comms. &#160;I'd recommend using it to look at maybe four or five instances
</span><br>
<span class="quotelev1">&gt;       where the application has hung and look for any common features between
</span><br>
<span class="quotelev1">&gt;       them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Let me know if you are willing to try this route and I'll talk, the code
</span><br>
<span class="quotelev1">&gt;       is downloadable from <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a> and if you want the full
</span><br>
<span class="quotelev1">&gt;       collective functionality you'll need to patch openmp with the patch from
</span><br>
<span class="quotelev1">&gt;       <a href="http://padb.pittman.org.uk/extensions.html">http://padb.pittman.org.uk/extensions.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt;       <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6214.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6212.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6211.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6216.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6216.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6226.php">Sylvain Jeaugey: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
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
