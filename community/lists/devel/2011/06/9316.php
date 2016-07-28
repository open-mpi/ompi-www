<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 14:39:41 2011" -->
<!-- isoreceived="20110607183941" -->
<!-- sent="Tue, 7 Jun 2011 12:39:36 -0600" -->
<!-- isosent="20110607183936" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="BANLkTi=nayTQgaxiVrLD5BZK_Xa=QEs6hw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="844C768C-7020-43AC-BD7E-CD4E705EB38E_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Resilient ORTE<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 14:39:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9317.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9315.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9314.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9349.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jun 7, 2011 at 10:37 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 7, 2011, at 12:14 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; But the epoch is process-unique - i.e., it is the number of times that
</span><br>
<span class="quotelev1">&gt; this specific process has been started, which differs per proc since we
</span><br>
<span class="quotelev1">&gt; don't restart all the procs every time one fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes the epoch is per process, but it is distributed among all participants.
</span><br>
<span class="quotelev1">&gt; The difficulty here is to make sure the global view of the processes
</span><br>
<span class="quotelev1">&gt; converges toward a common value of the epoch for each process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sounds racy...is it actually necessary to have a global agreement on epoch?
<br>
Per my other note, perhaps we really need a primer on this epoch concept.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; So if I look at the epoch of the proc sending me a message, I really
</span><br>
<span class="quotelev1">&gt; can't check it against my own value as the comparison is meaningless. All I
</span><br>
<span class="quotelev1">&gt; really can do is check to see if it changed from the last time I heard from
</span><br>
<span class="quotelev1">&gt; that proc, which would tell me that the proc has been restarted in the
</span><br>
<span class="quotelev1">&gt; interim.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I fail to understand your statement here. However, comparing message epoch
</span><br>
<span class="quotelev1">&gt; is critical to ensure the correct behavior.  It ensures we do not react on
</span><br>
<span class="quotelev1">&gt; old messages (that were floating in the system for some obscure reasons),
</span><br>
<span class="quotelev1">&gt; and that we have the right contact information for a specific peer (on the
</span><br>
<span class="quotelev1">&gt; correct epoch).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Again, maybe we need a better understanding of what you mean by epoch -
<br>
clearly, there is misunderstanding of what you are proposing to do.
<br>
<p>I'm leery of anything that requires a general consensus as it creates a lot
<br>
of race conditions - might work under certain circumstances, but we've been
<br>
burned by that approach too many times.
<br>
<p><p><p><span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9316/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9317.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9315.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9314.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9349.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
