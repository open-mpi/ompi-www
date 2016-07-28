<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 11:45:51 2006" -->
<!-- isoreceived="20060331164551" -->
<!-- sent="Fri, 31 Mar 2006 18:45:47 +0200" -->
<!-- isosent="20060331164547" -->
<!-- name="Christian Kauhaus" -->
<!-- email="ckauhaus_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="20060331164547.GC1642_at_ipc256.inf.uni-jena.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.0603311656390.18735_at_dingo.iwr.uni-heidelberg.de" -->
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
<strong>Date:</strong> 2006-03-31 11:45:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0796.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0794.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0788.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/04/0805.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/04/0805.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bogdan Costescu &lt;Bogdan.Costescu_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;- are all computers that should participate in a job configured 
</span><br>
<span class="quotelev1">&gt;similarly (only IPv6 or both IPv4 and IPv6) ? If not all are, then 
</span><br>
<span class="quotelev1">&gt;should some part of the computers communicate over one protocol and 
</span><br>
<span class="quotelev1">&gt;the rest over the other ? I think that this split coomunication would 
</span><br>
<p>This should be really possible. If we do the connection handling code
<br>
correctly, the Internet Protocol version should not matter. Many other
<br>
daemons are coded right this way. The basic algorithm is like this:
<br>
<p>/* retrieve list of addresses bound to the given target host */
<br>
getaddrinfo(..., &amp;addr_list);
<br>
<p>for (addr_res in addr_list) {
<br>
&nbsp;&nbsp;/* initialize socket of the correct address family */
<br>
&nbsp;&nbsp;fd = socket(addr_res-&gt;ai_family, ...);
<br>
<p>&nbsp;&nbsp;if (try_to_connect(fd)) break;
<br>
}
<br>
<p>So the resolver already does the complicated work for us, since it
<br>
returns all addresses associated to a given target (hostname or IP-addr
<br>
notation) in the order of decreasing preference.
<br>
<p><span class="quotelev1">&gt;- a related point is whether the 2 protocols should really be regarded 
</span><br>
<span class="quotelev1">&gt;as 2 different communication channels. OpenMPI is able to use several 
</span><br>
<span class="quotelev1">&gt;communication channels between 2 processes/MPI ranks at the same time, 
</span><br>
<span class="quotelev1">&gt;so should the same physical interface be split between the 2 logical 
</span><br>
<span class="quotelev1">&gt;protocols for communication between the same pair of computers ?
</span><br>
<p>This one is sort of complicated. According to OMPI, there are several
<br>
interfaces on a host, and each interface has access to some fraction of
<br>
the total bandwidth. Now we also have two different protocols on each
<br>
interface. 
<br>
<p>Possible scenarios:
<br>
<p>- We add the IP version to the OMP interface name. So instead of eth0
<br>
&nbsp;&nbsp;and eth1 we would get eth0 eth0.v6 eth1 eth1.v6. Using this approach
<br>
&nbsp;&nbsp;one could quite easily state her preferences using the btl command
<br>
&nbsp;&nbsp;line arguments. Of course, the latency/bandwidth code would need to be
<br>
&nbsp;&nbsp;re-worked, since now all traffic on a IPv6 interface would take
<br>
&nbsp;&nbsp;available bandwidth away from the corresponding IPv4 interface.
<br>
<p>- We do not add the IP version to the interface name, but perform
<br>
&nbsp;&nbsp;protocol selection automatically based on resolver results. In this
<br>
&nbsp;&nbsp;case the modification to the interface selection algorithm would
<br>
&nbsp;&nbsp;probably a minor one. Backdraw: we cannot control the IP version
<br>
&nbsp;&nbsp;beyond the resolver configuration, which is probably out of reach from
<br>
&nbsp;&nbsp;the user. Since IPv6 imposes a slightly higher protocol overhead,
<br>
&nbsp;&nbsp;users might want to use IPv4 in the local network, but cannot do
<br>
&nbsp;&nbsp;anything if the automatic selection does it wrong.
<br>
<p>- We introduce another parameter, which allows an IP version selection 
<br>
&nbsp;&nbsp;both globally and on a per-interface basis. Something like:
<br>
&nbsp;&nbsp;IPv4-only / prefer IPv4 / auto (resolver) / prefer IPv6 / IPv6-only
<br>
<p>The third approach would possibly the cleanest one.
<br>
<p><span class="quotelev1">&gt;of the computers. For example, if the remote computer has IPv6 
</span><br>
<span class="quotelev1">&gt;configured but the sshd is restricted to bind to IPv4, then a ssh 
</span><br>
<span class="quotelev1">&gt;connection to this computer using the IPv6 address (which would be 
</span><br>
<span class="quotelev1">&gt;specified in the hostfile) will fail, while OpenMPI processes [...]
</span><br>
<p>In my experience, this is no problem. We currently have some IPv6 test
<br>
networks running and also one of our clusters does IPv6 on its internal
<br>
ethernet. Hosts which are generally not IPv6-ready get no IPv6 address
<br>
in the DNS / hosts file. This prevents any contact using IPv6, since
<br>
their address is not known. Hosts which have some IPv6 support get a
<br>
double entry in the DNS or hosts file. Since it is standard behaviour
<br>
for every IPv6 app to try all known addresses for the target host until
<br>
any one succeeds, we are also able to connect to a IPv6-enabled host
<br>
where the target daemon does not listen on a IPv6 interface. For
<br>
example, we ran several weeks without an IPv6-enabled rsh, which is used
<br>
to handle MPI job startup on the cluster, without any problems. 
<br>
<p><span class="quotelev1">&gt;IMHO, some discussion of them should occur before the actual coding...
</span><br>
<p>I agree. So here we go :-)
<br>
<p>&nbsp;&nbsp;Christian
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
<li><strong>Next message:</strong> <a href="0796.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0794.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0788.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/04/0805.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/04/0805.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
