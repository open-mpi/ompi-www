<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  8 06:35:42 2006" -->
<!-- isoreceived="20061208113542" -->
<!-- sent="Fri, 8 Dec 2006 12:35:27 +0100" -->
<!-- isosent="20061208113527" -->
<!-- name="Christian Leber" -->
<!-- email="christian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] clarification regarding optimization of MPI collective calls" -->
<!-- id="20061208113527.GA1627_at_core" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b1a9299d0612080241s36350591jaba410aa30b5d2c1_at_mail.gmail.com" -->
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
<strong>From:</strong> Christian Leber (<em>christian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-08 06:35:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1229.php">Jeff Squyres: "Re: [OMPI devel] clarification regarding optimization of MPI collective calls"</a>
<li><strong>Previous message:</strong> <a href="1227.php">krishna chaitanya: "[OMPI devel] clarification regarding optimization of MPI collective calls"</a>
<li><strong>In reply to:</strong> <a href="1227.php">krishna chaitanya: "[OMPI devel] clarification regarding optimization of MPI collective calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1229.php">Jeff Squyres: "Re: [OMPI devel] clarification regarding optimization of MPI collective calls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 08, 2006 at 04:11:04PM +0530, krishna chaitanya wrote:
<br>
<p><span class="quotelev1">&gt;                  I learnt from a reliable source that MPI uses the services
</span><br>
<span class="quotelev1">&gt;    provided by TCP/IP or infiniband.
</span><br>
<p>Did you hear that from a whistle-blower?
<br>
<p><span class="quotelev1">&gt; Suppose that there is a bottle-neck in
</span><br>
<span class="quotelev1">&gt; the TCP/IP layer itself, how will optimization of MPI calls really help?
</span><br>
<p>Bottleneck is usually a fuzzy term.
<br>
<p>Collective calls basically means for example that you tell MPI:
<br>
&quot;send this to all nodes&quot;
<br>
instead of
<br>
for(i=0;i&lt;number_of_nodes;i++) &quot;send this to node i&quot;
<br>
<p>Therefore you don't have serialization of the tasks and the MPI layer
<br>
could do optmizations.
<br>
For example the connection network could have a way to broadcast or at
<br>
least sending could be interleaved.
<br>
<p>Christian Leber
<br>
<p><pre>
-- 
<a href="http://rettetdieti.vde-uni-mannheim.de/">http://rettetdieti.vde-uni-mannheim.de/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1229.php">Jeff Squyres: "Re: [OMPI devel] clarification regarding optimization of MPI collective calls"</a>
<li><strong>Previous message:</strong> <a href="1227.php">krishna chaitanya: "[OMPI devel] clarification regarding optimization of MPI collective calls"</a>
<li><strong>In reply to:</strong> <a href="1227.php">krishna chaitanya: "[OMPI devel] clarification regarding optimization of MPI collective calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1229.php">Jeff Squyres: "Re: [OMPI devel] clarification regarding optimization of MPI collective calls"</a>
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
