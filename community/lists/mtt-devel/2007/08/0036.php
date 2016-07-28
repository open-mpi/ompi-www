<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 15:29:06 2007" -->
<!-- isoreceived="20070828192906" -->
<!-- sent="Tue, 28 Aug 2007 15:28:47 -0400" -->
<!-- isosent="20070828192847" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] --trial pruning for v3 schema?" -->
<!-- id="904BE0BF-A8A4-422B-967E-F455FDAE022F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070828152634.GP12598_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-28 15:28:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0037.php">Ethan Mallove: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Previous message:</strong> <a href="0035.php">Jeff Squyres: "[MTT devel] Patch for reporter and friends"</a>
<li><strong>In reply to:</strong> <a href="0034.php">Ethan Mallove: "[MTT devel] --trial pruning for v3 schema?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0039.php">Josh Hursey: "Re: [MTT devel] --trial pruning for v3 schema?"</a>
<li><strong>Reply:</strong> <a href="0039.php">Josh Hursey: "Re: [MTT devel] --trial pruning for v3 schema?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let's see how the speed goes as we keep accumulating trials.  If it  
<br>
becomes a problem, we can re-examine pruning.  But unless it becomes  
<br>
a problem, let's just keep the philosophy of &quot;keep everything&quot;.
<br>
<p>Disk space is cheap.  Hopefully, dbv3 will let us store arbitrary  
<br>
amounts of data with no loss in performance.  :-) :-) :-)
<br>
<p><p>On Aug 28, 2007, at 11:26 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Are we not going to prune &quot;trial&quot; results in the new schema?
</span><br>
<span class="quotelev1">&gt; We previously pruned trial results to improve query speed,
</span><br>
<span class="quotelev1">&gt; but for small date range intervals this might not be
</span><br>
<span class="quotelev1">&gt; worthwhile with the new schema. Also, I assume a &quot;trial&quot; MPI
</span><br>
<span class="quotelev1">&gt; install could key to a &quot;non-trial&quot; test build, which would
</span><br>
<span class="quotelev1">&gt; mean we can only prune out test runs if we decide to prune
</span><br>
<span class="quotelev1">&gt; at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0037.php">Ethan Mallove: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Previous message:</strong> <a href="0035.php">Jeff Squyres: "[MTT devel] Patch for reporter and friends"</a>
<li><strong>In reply to:</strong> <a href="0034.php">Ethan Mallove: "[MTT devel] --trial pruning for v3 schema?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0039.php">Josh Hursey: "Re: [MTT devel] --trial pruning for v3 schema?"</a>
<li><strong>Reply:</strong> <a href="0039.php">Josh Hursey: "Re: [MTT devel] --trial pruning for v3 schema?"</a>
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
