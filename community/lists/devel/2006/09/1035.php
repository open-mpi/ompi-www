<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  6 10:24:41 2006" -->
<!-- isoreceived="20060906142441" -->
<!-- sent="Wed, 06 Sep 2006 08:24:32 -0600" -->
<!-- isosent="20060906142432" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [IPv6] new component oob/tcp6" -->
<!-- id="C1243640.442F%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0609061606410.9599_at_dingo.iwr.uni-heidelberg.de" -->
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
<strong>Date:</strong> 2006-09-06 10:24:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1036.php">Christian Kauhaus: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1034.php">Bogdan Costescu: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1034.php">Bogdan Costescu: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1036.php">Christian Kauhaus: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I was a part of that thread - see my comments beginning with
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2006/03/0797.php">http://www.open-mpi.org/community/lists/devel/2006/03/0797.php</a>.
<br>
<p>Perhaps I communicated poorly here. The issue in the prior thread was that
<br>
few systems nowadays don't offer at least some level of IPv6 compatibility,
<br>
even if nothing more than mapping IPv6 addresses to IPv4. My point in that
<br>
thread was that some types of systems (e.g., embedded systems) don't - they
<br>
have no ability to interact with IPv6 at all - but that these are not
<br>
commonly found in the high performance world (the focus of OpenMPI).
<br>
<p>Although I expect hetero operations to be fairly common, I don't expect to
<br>
see too many high performance systems that have no library support at all
<br>
for IPv6.
<br>
<p>Hope that clarifies my comment. The intent is to fully support both types of
<br>
systems anyway, so I'll concede that the point (i.e., how unusual the
<br>
situation might be) is somewhat moot.
<br>
<p><p>On 9/6/06 8:13 AM, &quot;Bogdan Costescu&quot; &lt;Bogdan.Costescu_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 1 Sep 2006, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The only use case I am really concerned about is that of a Head Node
</span><br>
<span class="quotelev2">&gt;&gt; Process (HNP) that needs to talk to both IPv6 and IPv4 systems. I
</span><br>
<span class="quotelev2">&gt;&gt; admit this will be unusual,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This and other aspects were discussed or at least mentioned in a
</span><br>
<span class="quotelev1">&gt; thread starting at:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2006/03/0781.php">http://www.open-mpi.org/community/lists/devel/2006/03/0781.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know why you think that this (talking to different nodes via
</span><br>
<span class="quotelev1">&gt; different channels) is unusual - I think that it's quite probable,
</span><br>
<span class="quotelev1">&gt; especially in a heterogenous environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, if the present discussion is only about a proof of concept
</span><br>
<span class="quotelev1">&gt; version, then I'd say that anything to show IPv6 functionality would
</span><br>
<span class="quotelev1">&gt; be acceptable.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1036.php">Christian Kauhaus: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1034.php">Bogdan Costescu: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1034.php">Bogdan Costescu: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1036.php">Christian Kauhaus: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
