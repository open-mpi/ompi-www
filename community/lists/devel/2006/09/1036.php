<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  6 11:45:11 2006" -->
<!-- isoreceived="20060906154511" -->
<!-- sent="Wed, 6 Sep 2006 17:44:23 +0200" -->
<!-- isosent="20060906154423" -->
<!-- name="Christian Kauhaus" -->
<!-- email="ckauhaus_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [IPv6] new component oob/tcp6" -->
<!-- id="20060906154423.GA14132_at_cluster.inf-ra.uni-jena.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Christian Kauhaus (<em>ckauhaus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-06 11:44:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1037.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1035.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1034.php">Bogdan Costescu: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1037.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1037.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1038.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bogdan Costescu &lt;Bogdan.Costescu_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;I don't know why you think that this (talking to different nodes via 
</span><br>
<span class="quotelev1">&gt;different channels) is unusual - I think that it's quite probable, 
</span><br>
<span class="quotelev1">&gt;especially in a heterogenous environment.
</span><br>
<p>I think the first goal should be to get IPv6 working -- and this is much
<br>
more easier when we restrict ourselves to the case when all system
<br>
participating in one(!) job are reachable via a single protocol version,
<br>
either IPv4 or IPv6. 
<br>
<p>I'm not quite sure if we need to run a *single* job across a network
<br>
with both systems that are not reachable via IPv4 and systems
<br>
that are not reachable via IPv6. If there is a practical need for this,
<br>
we will probably tackle this in the future. Note that the current plan
<br>
does not restrict the use of OpenMPI in heterogenous IPv4/IPv6
<br>
environments, but we will not support mixed IPv4/IPv6 operation in a
<br>
single job right now. 
<br>
<p>Our current plan is to look into the hostfile and see if there are 
<br>
<p>(1a) just IPv4 addresses
<br>
(1b) IPv4 addresses and hostnames for which 'A' queries can be resolved
<br>
(2a) just IPv6 addresses
<br>
(2b) IPv6 addresses and hostnames for which 'AAAA' queries can be resolved.
<br>
<p>In case 1 we initially use an IPv4 transport and in case 2 we initially
<br>
use an IPv6 transport for the oob. If neither case 1 or 2 are possible,
<br>
we abort. 
<br>
<p>I hope that all can agree that this is a good starting point. 
<br>
<p>Regards
<br>
&nbsp;&nbsp;Christian
<br>
<p><pre>
-- 
Dipl.-Inf. Christian Kauhaus                               &lt;&gt;&lt;
Lehrstuhl fuer Rechnerarchitektur und -kommunikation 
Institut fuer Informatik * Ernst-Abbe-Platz 1-2 * D-07743 Jena
Tel: +49 3641 9 46376  *  Fax: +49 3641 9 46372   *  Raum 3217
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1037.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1035.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1034.php">Bogdan Costescu: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1037.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1037.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1038.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
