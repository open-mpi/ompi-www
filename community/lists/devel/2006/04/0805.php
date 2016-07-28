<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  3 05:19:41 2006" -->
<!-- isoreceived="20060403091941" -->
<!-- sent="Mon, 3 Apr 2006 11:19:32 +0200 (CEST)" -->
<!-- isosent="20060403091932" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="Pine.LNX.4.64.0604031044230.1234_at_dingo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060331164547.GC1642_at_ipc256.inf.uni-jena.de" -->
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
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-03 05:19:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0806.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/03/0804.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/03/0795.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0806.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0806.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 31 Mar 2006, Christian Kauhaus wrote:
<br>
<p><span class="quotelev1">&gt; So the resolver already does the complicated work for us, since it 
</span><br>
<span class="quotelev1">&gt; returns all addresses associated to a given target (hostname or 
</span><br>
<span class="quotelev1">&gt; IP-addr notation) in the order of decreasing preference.
</span><br>
<p>What you propose here should work for the case of a single BTL that 
<br>
handles both IPv4 and IPv6. How about the case of 2 BTLs ? (as it's 
<br>
not clear to me from the rest of the discussion if one solution is 
<br>
better than the other)
<br>
<p><span class="quotelev1">&gt; Now we also have two different protocols on each interface.
</span><br>
<p>This could theoretically happen in other situations as well. For 
<br>
example, it's possible to set up TCP/IPv4 (and I guess even v6) over 
<br>
Myrinet at the same time with GM over Myrinet, which also brings it to 
<br>
2 (or even 3) protocols over the same physical connection. So how 
<br>
should these situations be handled ? (this is more of a general 
<br>
question, not related to IPv6 implementation).
<br>
<p><span class="quotelev1">&gt; - We introduce another parameter, which allows an IP version selection
</span><br>
<span class="quotelev1">&gt;  both globally and on a per-interface basis. Something like:
</span><br>
<span class="quotelev1">&gt;  IPv4-only / prefer IPv4 / auto (resolver) / prefer IPv6 / IPv6-only
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The third approach would possibly the cleanest one.
</span><br>
<p>I also like it, with emphasis on &quot;both globally and per-interface&quot;.
<br>
<p><span class="quotelev1">&gt; Since it is standard behaviour for every IPv6 app to try all known 
</span><br>
<span class="quotelev1">&gt; addresses for the target host until any one succeeds, we are also 
</span><br>
<span class="quotelev1">&gt; able to connect to a IPv6-enabled host where the target daemon does 
</span><br>
<span class="quotelev1">&gt; not listen on a IPv6 interface.
</span><br>
<p>Err, it's not OpenMPI, but the rsh/ssh client that tries the 
<br>
connections. My point however is a bit different as it also relates to 
<br>
the authentication behind the connection, where the IP (and therefore 
<br>
its flavour) which is used for making the connection counts:
<br>
<p>- if you pass an IPv6 address to a non-IPv6 aware rsh/ssh client, the 
<br>
connection will fail. So the upper level which executes the rsh/ssh 
<br>
client would need to handle the fallback to the different addresses. 
<br>
OTOH, if the rsh/ssh client is IPv6 aware, it might already try them 
<br>
which will lead to an increased time to make (or decide that is not 
<br>
possible to make) the connection.
<br>
<p>- if you try to connect over IPv6 with to a ssh daemon that only has 
<br>
hostbased auth. configured for IPv4 addresses (or viceversa), the 
<br>
hostbased auth. will fail (and most likely will ask for a password). 
<br>
This is quite likely to happen unknowingly if the distribution (like 
<br>
RHEL and Fedora) turn on IPv6 by default and assign link-local 
<br>
addresses, resulting in a working IPv6 configuration on the local 
<br>
network - which would apply to most clusters - without the admin 
<br>
having to do anything about it (guess how I found this out ;-))
<br>
<p><span class="quotelev1">&gt; For example, we ran several weeks without an IPv6-enabled rsh, which 
</span><br>
<span class="quotelev1">&gt; is used to handle MPI job startup on the cluster, without any 
</span><br>
<span class="quotelev1">&gt; problems.
</span><br>
<p>What do you mean by &quot;IPv6-enabled rsh&quot; ? Was it the daemon, client or 
<br>
both ?
<br>
<p><pre>
-- 
Bogdan Costescu
IWR - Interdisziplinaeres Zentrum fuer Wissenschaftliches Rechnen
Universitaet Heidelberg, INF 368, D-69120 Heidelberg, GERMANY
Telephone: +49 6221 54 8869, Telefax: +49 6221 54 8868
E-mail: Bogdan.Costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0806.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/03/0804.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/03/0795.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0806.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0806.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
