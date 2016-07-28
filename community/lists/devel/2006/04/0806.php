<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  3 08:25:02 2006" -->
<!-- isoreceived="20060403122502" -->
<!-- sent="Mon, 3 Apr 2006 14:24:56 +0200" -->
<!-- isosent="20060403122456" -->
<!-- name="Christian Kauhaus" -->
<!-- email="ckauhaus_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="20060403122455.GA27967_at_ipc256.inf.uni-jena.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.0604031044230.1234_at_dingo.iwr.uni-heidelberg.de" -->
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
<strong>Date:</strong> 2006-04-03 08:24:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0807.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0805.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0805.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0809.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0809.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bogdan Costescu &lt;Bogdan.Costescu_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;What you propose here should work for the case of a single BTL that 
</span><br>
<span class="quotelev1">&gt;handles both IPv4 and IPv6. How about the case of 2 BTLs ? (as it's 
</span><br>
<span class="quotelev1">&gt;not clear to me from the rest of the discussion if one solution is 
</span><br>
<span class="quotelev1">&gt;better than the other)
</span><br>
<p>The introduction of a new 'tcp6' BTL was mentioned several times in the
<br>
discussion. This would result in an enormous amount of duplicated code,
<br>
since the IPv4-&gt;IPv6 transition would only affect a small fraction of
<br>
the total tcp BTL codebase. This is clearly a violation of the DRY
<br>
principle (don't repeat yourself).
<br>
<p><span class="quotelev1">&gt;Myrinet at the same time with GM over Myrinet, which also brings it to 
</span><br>
<span class="quotelev1">&gt;2 (or even 3) protocols over the same physical connection. So how 
</span><br>
<span class="quotelev1">&gt;should these situations be handled ? (this is more of a general 
</span><br>
<span class="quotelev1">&gt;question, not related to IPv6 implementation).
</span><br>
<p>Very good point. Since we do not have Myrinet or IB in our institute
<br>
clusters, I cannot tell. Experiences and suggestions from others?
<br>
<p><span class="quotelev1">&gt;Err, it's not OpenMPI, but the rsh/ssh client that tries the 
</span><br>
<span class="quotelev1">&gt;connections. My point however is a bit different as it also relates to 
</span><br>
<span class="quotelev1">&gt;the authentication behind the connection, where the IP (and therefore 
</span><br>
<span class="quotelev1">&gt;its flavour) which is used for making the connection counts:
</span><br>
<p>When using rsh for startup, any interference between IPv6 and rsh/ssh is
<br>
beyond the scope of OpenMPI. I really don't know which part of the
<br>
OpenMPI code base is able to influence how rsh will authenticate some
<br>
addresses. If rsh/ssh cannot handle or authenticate IPv6 connections,
<br>
the admin must keep the IPv6 addresses out of the resolver, so that
<br>
getaddrbyhost() never returns an IPv6 address. That's it.
<br>
<p><span class="quotelev2">&gt;&gt; For example, we ran several weeks without an IPv6-enabled rsh, which 
</span><br>
<span class="quotelev1">&gt;What do you mean by &quot;IPv6-enabled rsh&quot; ? Was it the daemon, client or 
</span><br>
<span class="quotelev1">&gt;both ?
</span><br>
<p>We had both client and server IPv6-enabled and IPv6 addresses in the
<br>
resolver, but the server did not listen on the IPv6 socket, resulting in
<br>
a connection failure for IPv6. The subsequent connection attempt with the
<br>
IPv4 address did succeed though. 
<br>
<p>&nbsp;Christian
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
<li><strong>Next message:</strong> <a href="0807.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0805.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0805.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0809.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0809.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
