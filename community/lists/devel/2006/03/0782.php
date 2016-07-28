<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 08:40:08 2006" -->
<!-- isoreceived="20060331134008" -->
<!-- sent="Fri, 31 Mar 2006 15:40:34 +0200" -->
<!-- isosent="20060331134034" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="20060331134034.GP16388_at_drcomp.erfurt.thur.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20060331084411.GA12470_at_ipc256.inf.uni-jena.de" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 08:40:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0783.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0781.php">Christian Kauhaus: "[OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0781.php">Christian Kauhaus: "[OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0784.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0784.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 31, 2006 at 10:44:11AM +0200, Christian Kauhaus wrote:
<br>
<p><span class="quotelev1">&gt; Hello *,
</span><br>
<p>Hi.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; University of Jena (Germany). Our work group is digging into how to
</span><br>
<span class="quotelev1">&gt; connect several clusters on a campus. 
</span><br>
<p>I think I'm also a member of this workgroup, though I am not
<br>
working at University of Jena, but studying there.
<br>
<p><span class="quotelev1">&gt; First we are interested to integrate IPv6 support into the tcp btl.
</span><br>
<span class="quotelev1">&gt; Does anyone know if there is someone already working on this?
</span><br>
<p>I have a first quick and dirty patch, replacing AF_INET by AF_INET6,
<br>
the sockaddr_in structs and so on.
<br>
<p>I think it is broken, the calculation of net1 and net2 in
<br>
btl_tcp_proc.c isn't really ported and to be honest: I don't
<br>
understand the details, i.e. do I have to port name lookups,
<br>
are there high level structures relying on IPv4 structs
<br>
and so on.
<br>
<p>At least it compiles ;) (let's ship it)
<br>
<p>I don't know if this patched tcp-component can handle
<br>
IPv6 connections, I've never tested it. I think it
<br>
even breaks IPv4 functionality; we should make clear
<br>
how IPv4 and IPv6 may work in parallel (or may not, if
<br>
one considers IPv4 deprecated ;)
<br>
<p>You can retrieve the patch here:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://cluster.inf-ra.uni-jena.de/~adi/ompi.ipv6.v1.patch">http://cluster.inf-ra.uni-jena.de/~adi/ompi.ipv6.v1.patch</a>
<br>
<p>I'd also appreciate any suggestions, hints or even success stories ;)
<br>
<p><p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Bill Gates's Motto: &quot;If you can't make it good, make it look good!&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0783.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0781.php">Christian Kauhaus: "[OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0781.php">Christian Kauhaus: "[OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0784.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0784.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
