<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 17 08:50:34 2007" -->
<!-- isoreceived="20070417125034" -->
<!-- sent="Tue, 17 Apr 2007 06:50:29 -0600" -->
<!-- isosent="20070417125029" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTE scalability issues" -->
<!-- id="C24A1EB5.8B31%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070417073103.GA8725_at_ipc256.inf.uni-jena.de" -->
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
<strong>Date:</strong> 2007-04-17 08:50:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1426.php">Sharon Melamed: "[OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="1424.php">Christian Kauhaus: "Re: [OMPI devel] ORTE scalability issues"</a>
<li><strong>In reply to:</strong> <a href="1424.php">Christian Kauhaus: "Re: [OMPI devel] ORTE scalability issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Christian.
<br>
<p>Actually, I was aware of that and should have clarified that these tests did
<br>
*not* involve the IPv6 code.
<br>
<p>Ralph
<br>
<p><p>On 4/17/07 1:31 AM, &quot;Christian Kauhaus&quot; &lt;ckauhaus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph H Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; even though the HNP isn't actually part of the MPI job itself, or the
</span><br>
<span class="quotelev2">&gt;&gt; processes are opening duplicate OOB sockets back to the HNP. I am not
</span><br>
<span class="quotelev2">&gt;&gt; certain which (or either) of these is the root cause, however - it needs
</span><br>
<span class="quotelev2">&gt;&gt; further investigation to identify the source of the extra sockets.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are using the IPv6-ready code: in this case we need to create two
</span><br>
<span class="quotelev1">&gt; sockets for each OOB/TCP. One uses AF_INET and one uses AF_INET6.
</span><br>
<span class="quotelev1">&gt; IIRC, we close the superfluous socket once the connection attempt on
</span><br>
<span class="quotelev1">&gt; either one succeeds. Adrian, correct me if I'm wrong. :-)
</span><br>
<span class="quotelev1">&gt; Unfortunately, there's no easy way around this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christian
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1426.php">Sharon Melamed: "[OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="1424.php">Christian Kauhaus: "Re: [OMPI devel] ORTE scalability issues"</a>
<li><strong>In reply to:</strong> <a href="1424.php">Christian Kauhaus: "Re: [OMPI devel] ORTE scalability issues"</a>
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
