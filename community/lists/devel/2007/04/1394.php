<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  3 11:32:45 2007" -->
<!-- isoreceived="20070403153245" -->
<!-- sent="Tue, 03 Apr 2007 09:32:38 -0600" -->
<!-- isosent="20070403153238" -->
<!-- name="Li-Ta Lo" -->
<!-- email="ollie_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level" -->
<!-- id="1175614358.4371.2.camel_at_exponential.lanl.gov" -->
<!-- inreplyto="C2356028.248A%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Li-Ta Lo (<em>ollie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-03 11:32:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1395.php">Ralph H Castain: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1393.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1390.php">Ralph Castain: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1395.php">Ralph H Castain: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1395.php">Ralph H Castain: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 2007-04-01 at 13:12 -0600, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. I'm not sure what you mean by mapping MPI processes to &quot;physical&quot;
</span><br>
<span class="quotelev1">&gt; processes, but I assume you mean how do we assign MPI ranks to processes on
</span><br>
<span class="quotelev1">&gt; specific nodes. You will find that done in the orte/mca/rmaps framework. We
</span><br>
<span class="quotelev1">&gt; currently only have one component in that framework - the round-robin
</span><br>
<span class="quotelev1">&gt; implementation - that maps either by slot or by node, as indicated by the
</span><br>
<span class="quotelev1">&gt; user. That code is fairly heavily commented, so you hopefully can understand
</span><br>
<span class="quotelev1">&gt; what it is doing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>How does this work in a multi-core environment? the optimal way may be
<br>
putting processes on every other &quot;slot&quot; on a two cores system?
<br>
<p>Ollie
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1395.php">Ralph H Castain: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1393.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1390.php">Ralph Castain: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1395.php">Ralph H Castain: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1395.php">Ralph H Castain: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
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
