<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  3 13:13:37 2006" -->
<!-- isoreceived="20060403171337" -->
<!-- sent="Mon, 3 Apr 2006 19:13:32 +0200" -->
<!-- isosent="20060403171332" -->
<!-- name="Christian Kauhaus" -->
<!-- email="ckauhaus_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="20060403171332.GA2921_at_ipc256.inf.uni-jena.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.0604031655440.1558_at_dingo.iwr.uni-heidelberg.de" -->
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
<strong>Date:</strong> 2006-04-03 13:13:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0812.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0810.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0809.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0812.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0812.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bogdan Costescu &lt;Bogdan.Costescu_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;I beg to disagree. In a setup like the one mentioned, after orted is 
</span><br>
<span class="quotelev1">&gt;started via an IPv4-only rsh/ssh, OpenMPI applications could use IPv6 
</span><br>
<span class="quotelev1">&gt;without problems, just like they could use f.e. GM if Myrinet cards 
</span><br>
<span class="quotelev1">&gt;would be present. I see this very much like your past experience with 
</span><br>
<p>Ok, I slowly get the point... ;-)
<br>
<p>I see two possibilities concerning machinefile contents and how this
<br>
affects both rsh/ssh and OpenMPI.
<br>
<p>1. Put IPv[46] addresses into the machinefile. Since they are
<br>
&nbsp;&nbsp;&nbsp;protocol-specific, both rsh/ssh uses them just the way they are.
<br>
&nbsp;&nbsp;&nbsp;OpenMPI performs interface discovery, possibly getting more
<br>
&nbsp;&nbsp;&nbsp;addresses. The use of these addresses is controlled via runtime
<br>
&nbsp;&nbsp;&nbsp;configuration.
<br>
<p>2. Put hostnames into the machinefile. Both rsh/ssh and OpenMPI perform
<br>
&nbsp;&nbsp;&nbsp;their own resolver lookup. When the resolver library gives both
<br>
&nbsp;&nbsp;&nbsp;addresses (IPv4 and IPv6), which one to used is handled via OpenMPI
<br>
&nbsp;&nbsp;&nbsp;runtime configuration. What rsh/ssh do depends on
<br>
&nbsp;&nbsp;&nbsp;them. Note that you can specify an IP protocol selection at least
<br>
&nbsp;&nbsp;&nbsp;with ssh (-4/-6 cmdline switches).
<br>
<p>Your setup (IPv6 addresses given by the resolver, but no IPv6-aware ssh)
<br>
could be handled in both ways: either by putting numeric IPv4-addresses
<br>
into the machinefile, or by specifying 'ssh -4'.
<br>
<p>Is this a solution?
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
<li><strong>Next message:</strong> <a href="0812.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0810.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0809.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0812.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0812.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
