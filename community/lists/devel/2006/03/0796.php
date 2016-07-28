<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 11:53:12 2006" -->
<!-- isoreceived="20060331165312" -->
<!-- sent="Fri, 31 Mar 2006 18:53:05 +0200" -->
<!-- isosent="20060331165305" -->
<!-- name="Christian Kauhaus" -->
<!-- email="ckauhaus_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="20060331165305.GD1642_at_ipc256.inf.uni-jena.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20060331151551.GR16388_at_drcomp.erfurt.thur.de" -->
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
<strong>Date:</strong> 2006-03-31 11:53:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0797.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0795.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0787.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0797.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0797.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0798.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adrian Knoth &lt;adi_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;(I really prefer the v6-mapped-v4 solution with a single
</span><br>
<span class="quotelev1">&gt; socket, thus eliminating this problem)
</span><br>
<p>One little problem here is that it is possible to disable the
<br>
IPv6-mapped IPv4 addresses at least under Linux and some BSD variants.
<br>
For Linux, have a look at sys.net.ipv6.bindv6only.  Some authors even
<br>
recommend to do so for security considerations (for example, Murphy &amp;
<br>
Malone in IPv6 Network Administration, O'Reilly 2005). 
<br>
<p>So the approach that maximizes the environments where it works out of
<br>
the box is this: Call getaddrinfo with PF_UNSPEC and open a socket for
<br>
each IP version it returns (usually this means two sockets on
<br>
IPv6-enabled hosts, but this may change in the future... who knows?)
<br>
<p>If the connection handling code already makes use of one big select
<br>
loop, this should not be *too* hard...
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
<li><strong>Next message:</strong> <a href="0797.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0795.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0787.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0797.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0797.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0798.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
