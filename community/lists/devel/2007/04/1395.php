<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  3 14:33:10 2007" -->
<!-- isoreceived="20070403183310" -->
<!-- sent="Tue, 03 Apr 2007 12:33:05 -0600" -->
<!-- isosent="20070403183305" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level" -->
<!-- id="C237FA01.86FA%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1175614358.4371.2.camel_at_exponential.lanl.gov" -->
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
<strong>Date:</strong> 2007-04-03 14:33:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1396.php">Li-Ta Lo: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1394.php">Li-Ta Lo: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1394.php">Li-Ta Lo: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1396.php">Li-Ta Lo: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<li><strong>Reply:</strong> <a href="1396.php">Li-Ta Lo: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/3/07 9:32 AM, &quot;Li-Ta Lo&quot; &lt;ollie_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Sun, 2007-04-01 at 13:12 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. I'm not sure what you mean by mapping MPI processes to &quot;physical&quot;
</span><br>
<span class="quotelev2">&gt;&gt; processes, but I assume you mean how do we assign MPI ranks to processes on
</span><br>
<span class="quotelev2">&gt;&gt; specific nodes. You will find that done in the orte/mca/rmaps framework. We
</span><br>
<span class="quotelev2">&gt;&gt; currently only have one component in that framework - the round-robin
</span><br>
<span class="quotelev2">&gt;&gt; implementation - that maps either by slot or by node, as indicated by the
</span><br>
<span class="quotelev2">&gt;&gt; user. That code is fairly heavily commented, so you hopefully can understand
</span><br>
<span class="quotelev2">&gt;&gt; what it is doing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How does this work in a multi-core environment? the optimal way may be
</span><br>
<span class="quotelev1">&gt; putting processes on every other &quot;slot&quot; on a two cores system?
</span><br>
<p>Well, that's a good question. At the moment, the only environments where we
<br>
encounter multiple cores treat each core as a separate &quot;slot&quot; when they
<br>
assign resources. We don't currently provide an option that says &quot;map by
<br>
two&quot;, so the only way to do what you describe would be to manually specify
<br>
the mapping, slot by slot.
<br>
<p>Not very pretty.
<br>
<p>If someone cares to suggest some alternative notation/option for requesting
<br>
that kind of mapping flexibility, I'm certainly willing to implement it (it
<br>
would be rather trivial to do &quot;map by N&quot;, but might be more complicated if
<br>
you want other things).
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ollie
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
<li><strong>Next message:</strong> <a href="1396.php">Li-Ta Lo: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1394.php">Li-Ta Lo: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1394.php">Li-Ta Lo: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1396.php">Li-Ta Lo: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<li><strong>Reply:</strong> <a href="1396.php">Li-Ta Lo: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
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
