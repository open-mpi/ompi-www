<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 07:22:34 2007" -->
<!-- isoreceived="20070829112234" -->
<!-- sent="Wed, 29 Aug 2007 07:22:02 -0400" -->
<!-- isosent="20070829112202" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] --trial pruning for v3 schema?" -->
<!-- id="A42090B6-495E-40C2-A235-3FDE2E86AFCE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="904BE0BF-A8A4-422B-967E-F455FDAE022F_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-29 07:22:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0040.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Previous message:</strong> <a href="0038.php">Josh Hursey: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>In reply to:</strong> <a href="0036.php">Jeff Squyres: "Re: [MTT devel] --trial pruning for v3 schema?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yeah I think we should be ok for now leving the trial results in the  
<br>
db. Let's revisit this in the future if things start to slow down again.
<br>
<p>-- Josh
<br>
<p>On Aug 28, 2007, at 3:28 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Let's see how the speed goes as we keep accumulating trials.  If it
</span><br>
<span class="quotelev1">&gt; becomes a problem, we can re-examine pruning.  But unless it becomes
</span><br>
<span class="quotelev1">&gt; a problem, let's just keep the philosophy of &quot;keep everything&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Disk space is cheap.  Hopefully, dbv3 will let us store arbitrary
</span><br>
<span class="quotelev1">&gt; amounts of data with no loss in performance.  :-) :-) :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 28, 2007, at 11:26 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are we not going to prune &quot;trial&quot; results in the new schema?
</span><br>
<span class="quotelev2">&gt;&gt; We previously pruned trial results to improve query speed,
</span><br>
<span class="quotelev2">&gt;&gt; but for small date range intervals this might not be
</span><br>
<span class="quotelev2">&gt;&gt; worthwhile with the new schema. Also, I assume a &quot;trial&quot; MPI
</span><br>
<span class="quotelev2">&gt;&gt; install could key to a &quot;non-trial&quot; test build, which would
</span><br>
<span class="quotelev2">&gt;&gt; mean we can only prune out test runs if we decide to prune
</span><br>
<span class="quotelev2">&gt;&gt; at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0040.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Previous message:</strong> <a href="0038.php">Josh Hursey: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>In reply to:</strong> <a href="0036.php">Jeff Squyres: "Re: [MTT devel] --trial pruning for v3 schema?"</a>
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
