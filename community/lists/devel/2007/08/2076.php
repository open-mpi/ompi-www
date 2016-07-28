<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Aug  5 17:05:56 2007" -->
<!-- isoreceived="20070805210556" -->
<!-- sent="Sun, 5 Aug 2007 23:05:51 +0200" -->
<!-- isosent="20070805210551" -->
<!-- name="dispanser_at_[hidden]" -->
<!-- email="dispanser_at_[hidden]" -->
<!-- subject="[OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)" -->
<!-- id="20070805210550.GB7677_at_ndfa" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> <a href="mailto:dispanser_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Startup%20failure%20on%20mixed%20IPv4/IPv6%20environment%20(oob%20tcp%20bug?)"><em>dispanser_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-08-05 17:05:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2077.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Previous message:</strong> <a href="2075.php">Jeff Squyres: "[OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2084.php">Brian Barrett: "Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<li><strong>Reply:</strong> <a href="2084.php">Brian Barrett: "Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>testing some stuff on a weird network setup, I came across a possible
<br>
bug in the oob tcp module.
<br>
Setup: two nodes, vm0 and vm2, which both have IPv4 addresses that can't
<br>
connect to each other, and IPv6.
<br>
The call &quot;mpirun -host vm0,vm2 /bin/hostname&quot; never finishes, because
<br>
the node vm2 does not connect back to vm0:
<br>
<p>- mca_oob_tcp_peer_try_connect is called, and first attempts to connect
<br>
&nbsp;&nbsp;to the IPv4 address of vm0. peer-&gt;peer_state == MCA_OOB_TCP_CONNECTING
<br>
- it creates an IPv4 socket (mca_oob_tcp_create_socket())
<br>
- connecting fails (network unreachable)
<br>
- next try: the IPv6 address
<br>
- mca_oob_tcp_create_socket calls mca_oob_tcp_peer_shutdown, because
<br>
&nbsp;&nbsp;the address family of the existing socket does not match.
<br>
&nbsp;&nbsp;mca_oob_tcp_peer_shutdown sets peer-peer_state =
<br>
&nbsp;&nbsp;MCA_OOB_TCP_CLOSED
<br>
- mca_oob_tcp_peer_try_connect successfully connects to the IPv6
<br>
&nbsp;&nbsp;address
<br>
<p>Despite the successful connection, we have a wrong peer state and
<br>
consequently, mca_oob_tcp_peer_send_handler bails out with &quot;invalid
<br>
connection state&quot;.
<br>
<p>I fixed the problem by setting the peer_state to MCA_OOB_TCP_CONNECTING
<br>
after creating the socket, which works for me.  I'm not sure if this is
<br>
always correct, though.
<br>
<p>Thomas
<br>
<p><pre>
--
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2077.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Previous message:</strong> <a href="2075.php">Jeff Squyres: "[OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2084.php">Brian Barrett: "Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<li><strong>Reply:</strong> <a href="2084.php">Brian Barrett: "Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
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
