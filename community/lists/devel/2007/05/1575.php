<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 24 08:39:25 2007" -->
<!-- isoreceived="20070524123925" -->
<!-- sent="Thu, 24 May 2007 06:39:20 -0600" -->
<!-- isosent="20070524123920" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTE registry patch" -->
<!-- id="C27AE398.9430%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="766E6649-2D99-4194-9108-BEDE8CB39209_at_cs.utk.edu" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-24 08:39:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1576.php">Jeff Squyres: "[OMPI devel] jnysal-openib-wireup branch"</a>
<li><strong>Previous message:</strong> <a href="1574.php">George Bosilca: "[OMPI devel] ORTE registry patch"</a>
<li><strong>In reply to:</strong> <a href="1574.php">George Bosilca: "[OMPI devel] ORTE registry patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1603.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Reply:</strong> <a href="1603.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks - I'll take a look at this (and the prior ones!) in the next couple
<br>
of weeks when time permits and get back to you.
<br>
<p>Ralph
<br>
<p><p>On 5/23/07 1:11 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Attached is another patch to the ORTE layer, more specifically the
</span><br>
<span class="quotelev1">&gt; replica. The idea is to decrease the number of strcmp by using a
</span><br>
<span class="quotelev1">&gt; small hash function before doing the strcmp. The hask key for each
</span><br>
<span class="quotelev1">&gt; registry entry is computed when it is added to the registry. When
</span><br>
<span class="quotelev1">&gt; we're doing a query, instead of comparing the 2 strings we first
</span><br>
<span class="quotelev1">&gt; check if the hash key match, and if they do match then we compare the
</span><br>
<span class="quotelev1">&gt; 2 strings in order to make sure we eliminate collisions from our
</span><br>
<span class="quotelev1">&gt; answers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is some benefit in terms of performance. It's hardly visible
</span><br>
<span class="quotelev1">&gt; for few processes, but it start showing up when the number of
</span><br>
<span class="quotelev1">&gt; processes increase. In fact the number of strcmp in the trace file
</span><br>
<span class="quotelev1">&gt; drastically decrease. The main reason it works well, is because most
</span><br>
<span class="quotelev1">&gt; of the keys start with basically the same chars (such as orte-
</span><br>
<span class="quotelev1">&gt; blahblah) which transform the strcmp on a loop over few chars.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph, please consider it for inclusion on the ORTE layer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
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
<li><strong>Next message:</strong> <a href="1576.php">Jeff Squyres: "[OMPI devel] jnysal-openib-wireup branch"</a>
<li><strong>Previous message:</strong> <a href="1574.php">George Bosilca: "[OMPI devel] ORTE registry patch"</a>
<li><strong>In reply to:</strong> <a href="1574.php">George Bosilca: "[OMPI devel] ORTE registry patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1603.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Reply:</strong> <a href="1603.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
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
