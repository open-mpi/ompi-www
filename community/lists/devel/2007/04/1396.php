<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  3 15:07:41 2007" -->
<!-- isoreceived="20070403190741" -->
<!-- sent="Tue, 03 Apr 2007 13:07:35 -0600" -->
<!-- isosent="20070403190735" -->
<!-- name="Li-Ta Lo" -->
<!-- email="ollie_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level" -->
<!-- id="1175627255.4371.23.camel_at_exponential.lanl.gov" -->
<!-- inreplyto="C237FA01.86FA%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-04-03 15:07:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1397.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1395.php">Ralph H Castain: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1395.php">Ralph H Castain: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1398.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<li><strong>Reply:</strong> <a href="1398.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2007-04-03 at 12:33 -0600, Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/3/07 9:32 AM, &quot;Li-Ta Lo&quot; &lt;ollie_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sun, 2007-04-01 at 13:12 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. I'm not sure what you mean by mapping MPI processes to &quot;physical&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processes, but I assume you mean how do we assign MPI ranks to processes on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; specific nodes. You will find that done in the orte/mca/rmaps framework. We
</span><br>
<span class="quotelev3">&gt; &gt;&gt; currently only have one component in that framework - the round-robin
</span><br>
<span class="quotelev3">&gt; &gt;&gt; implementation - that maps either by slot or by node, as indicated by the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; user. That code is fairly heavily commented, so you hopefully can understand
</span><br>
<span class="quotelev3">&gt; &gt;&gt; what it is doing.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; How does this work in a multi-core environment? the optimal way may be
</span><br>
<span class="quotelev2">&gt; &gt; putting processes on every other &quot;slot&quot; on a two cores system?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, that's a good question. At the moment, the only environments where we
</span><br>
<span class="quotelev1">&gt; encounter multiple cores treat each core as a separate &quot;slot&quot; when they
</span><br>
<span class="quotelev1">&gt; assign resources. We don't currently provide an option that says &quot;map by
</span><br>
<span class="quotelev1">&gt; two&quot;, so the only way to do what you describe would be to manually specify
</span><br>
<span class="quotelev1">&gt; the mapping, slot by slot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I also don't understand how Paffinity work for this case. When orted
<br>
launch N processes on a node, does it have control on how those 
<br>
processes are started and mapped to the core/processor? Or is it
<br>
the case that O.S. puts the process on whatever cores it picks and
<br>
the paffinity module will try to &quot;pin&quot; the process on the core (picked
<br>
by O.S.)?
<br>
&nbsp;&nbsp;
<br>
<span class="quotelev1">&gt; Not very pretty.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If someone cares to suggest some alternative notation/option for requesting
</span><br>
<span class="quotelev1">&gt; that kind of mapping flexibility, I'm certainly willing to implement it (it
</span><br>
<span class="quotelev1">&gt; would be rather trivial to do &quot;map by N&quot;, but might be more complicated if
</span><br>
<span class="quotelev1">&gt; you want other things).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>What is the current syntax of the config file/command line? Can we do 
<br>
something like array index in those script languages e.g. [0:N:2]?
<br>
<p>Ollie
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1397.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1395.php">Ralph H Castain: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1395.php">Ralph H Castain: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1398.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<li><strong>Reply:</strong> <a href="1398.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
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
