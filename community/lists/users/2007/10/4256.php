<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 19 09:57:17 2007" -->
<!-- isoreceived="20071019135717" -->
<!-- sent="Fri, 19 Oct 2007 09:57:04 -0400" -->
<!-- isosent="20071019135704" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] which alternative to OpenMPI should I choose?" -->
<!-- id="37D09997-78C5-4928-B9A4-29E0FACC8206_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4718B157.9000201_at_lnl.infn.it" -->
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
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-19 09:57:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4257.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>Previous message:</strong> <a href="4255.php">Marcin Skoczylas: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>In reply to:</strong> <a href="4255.php">Marcin Skoczylas: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4276.php">Marcin Skoczylas: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>Reply:</strong> <a href="4276.php">Marcin Skoczylas: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 19, 2007, at 9:29 AM, Marcin Skoczylas wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 18, 2007, at 9:24 AM, Marcin Skoczylas wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /I assume this could be because of:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ /sbin/route
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kernel IP routing table
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Destination     Gateway         Genmask         Flags Metric Ref
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Iface
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 192.125.17.0    *               255.255.255.0   U     0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0        0 eth1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 192.168.12.0    *               255.255.255.0   U     0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0        0 eth1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 161.254.0.0     *               255.255.0.0     U     0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0        0 eth1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default         192.125.17.1    0.0.0.0         UG    0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0        0 eth1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually the configuration here is quite strange, this is not a  
</span><br>
<span class="quotelev2">&gt;&gt; private
</span><br>
<span class="quotelev1">&gt; address. The head node sits on a public address from 192.125.17.0 net
</span><br>
<span class="quotelev1">&gt; (routable from outside), workers are on 192.168.12.0
</span><br>
<p>I have an almost similar configuration that works just fine with  
<br>
OpenMPI, in my case the head node has three interfaces and the worker  
<br>
nodes each have two interfaces, the configuration is roughly:
<br>
<p>master: eth0: 192.168.x.x, eth1 &amp; eth2 bonded to 10.0.0.1
<br>
node2: eth0 &amp; eth1 bonded to 10.0.0.2
<br>
nodeN: eth0 &amp; eth1 bonded to 10.0.0.N
<br>
<p>So our &quot;outside&quot; communication with the head node is on the 192.168  
<br>
network and the internal communication is on the 10.0.0.x network.
<br>
<p>In your case the &quot;outside&quot; communication is on the the 192.125  
<br>
network and the internal communication is on the 192.168 network.
<br>
<p>The primary difference seems to be that you have all communication  
<br>
going over a single interface.
<br>
<p>I'm a little surprised there is any problem at all with OpenMPI &amp;  
<br>
your configuration as my configuration is more complicated.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4257.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>Previous message:</strong> <a href="4255.php">Marcin Skoczylas: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>In reply to:</strong> <a href="4255.php">Marcin Skoczylas: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4276.php">Marcin Skoczylas: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>Reply:</strong> <a href="4276.php">Marcin Skoczylas: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
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
