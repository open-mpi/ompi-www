<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  6 13:45:51 2006" -->
<!-- isoreceived="20060906174551" -->
<!-- sent="Wed, 06 Sep 2006 11:45:47 -0600" -->
<!-- isosent="20060906174547" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [IPv6] new component oob/tcp6" -->
<!-- id="C124656B.444B%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060906154423.GA14132_at_cluster.inf-ra.uni-jena.de" -->
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
<strong>Date:</strong> 2006-09-06 13:45:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1039.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1037.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1036.php">Christian Kauhaus: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/6/06 9:44 AM, &quot;Christian Kauhaus&quot; &lt;ckauhaus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Bogdan Costescu &lt;Bogdan.Costescu_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; I don't know why you think that this (talking to different nodes via
</span><br>
<span class="quotelev2">&gt;&gt; different channels) is unusual - I think that it's quite probable,
</span><br>
<span class="quotelev2">&gt;&gt; especially in a heterogenous environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the first goal should be to get IPv6 working -- and this is much
</span><br>
<span class="quotelev1">&gt; more easier when we restrict ourselves to the case when all system
</span><br>
<span class="quotelev1">&gt; participating in one(!) job are reachable via a single protocol version,
</span><br>
<span class="quotelev1">&gt; either IPv4 or IPv6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not quite sure if we need to run a *single* job across a network
</span><br>
<span class="quotelev1">&gt; with both systems that are not reachable via IPv4 and systems
</span><br>
<span class="quotelev1">&gt; that are not reachable via IPv6. If there is a practical need for this,
</span><br>
<span class="quotelev1">&gt; we will probably tackle this in the future. Note that the current plan
</span><br>
<span class="quotelev1">&gt; does not restrict the use of OpenMPI in heterogenous IPv4/IPv6
</span><br>
<span class="quotelev1">&gt; environments, but we will not support mixed IPv4/IPv6 operation in a
</span><br>
<span class="quotelev1">&gt; single job right now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our current plan is to look into the hostfile and see if there are
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1a) just IPv4 addresses
</span><br>
<span class="quotelev1">&gt; (1b) IPv4 addresses and hostnames for which 'A' queries can be resolved
</span><br>
<span class="quotelev1">&gt; (2a) just IPv6 addresses
</span><br>
<span class="quotelev1">&gt; (2b) IPv6 addresses and hostnames for which 'AAAA' queries can be resolved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In case 1 we initially use an IPv4 transport and in case 2 we initially
</span><br>
<span class="quotelev1">&gt; use an IPv6 transport for the oob. If neither case 1 or 2 are possible,
</span><br>
<span class="quotelev1">&gt; we abort. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Actually, that could cause us considerable problem. Only a subset of OpenRTE
<br>
and OpenMPI users actually have hostfiles - the majority do not. Hence, if
<br>
we base the IPv6 operation on what is in a hostfile we will be in trouble.
<br>
<p>I believe we are going to have to use the &quot;select&quot; mechanism of the OOB
<br>
and/or the RML frameworks to let us know which protocol to use when talking
<br>
to a specific host.
<br>
<p>I also believe you cannot assume that this choice will be consistent for all
<br>
processes involved in a job. For example, the head node process must talk to
<br>
the external network, which may well be IPv6. However, the nodes *inside*
<br>
the cluster may well be IPv4 since they could likely be sitting on a NAT.
<br>
The HNP still needs to talk to those nodes as well as the external network.
<br>
<p>I don't believe that letting both modes co-exist is all that much harder a
<br>
problem to solve. We have similar situations elsewhere in the code base and
<br>
have found that the framework mechanism works very well in this situation.
<br>
<p>I need to answer Adrian's note anyway and will describe there how to handle
<br>
multiple component operations.
<br>
<p><span class="quotelev1">&gt; I hope that all can agree that this is a good starting point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;   Christian
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1039.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1037.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1036.php">Christian Kauhaus: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
