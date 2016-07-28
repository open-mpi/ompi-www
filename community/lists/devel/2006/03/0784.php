<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 09:07:40 2006" -->
<!-- isoreceived="20060331140740" -->
<!-- sent="Fri, 31 Mar 2006 09:07:39 -0500" -->
<!-- isosent="20060331140739" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="41E866EC-A39A-40B6-A22A-D54E5B72DB8A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060331134034.GP16388_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 09:07:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0785.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0783.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0782.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0786.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0786.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 31, 2006, at 8:40 AM, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Mar 31, 2006 at 10:44:11AM +0200, Christian Kauhaus wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello *,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; University of Jena (Germany). Our work group is digging into how to
</span><br>
<span class="quotelev2">&gt;&gt; connect several clusters on a campus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I'm also a member of this workgroup, though I am not
</span><br>
<span class="quotelev1">&gt; working at University of Jena, but studying there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First we are interested to integrate IPv6 support into the tcp btl.
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone know if there is someone already working on this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a first quick and dirty patch, replacing AF_INET by AF_INET6,
</span><br>
<span class="quotelev1">&gt; the sockaddr_in structs and so on.
</span><br>
<p>Is there a way to do this to better support both IPv4 and IPv6?  it  
<br>
looks like you had to change an awful lot of interface declarations,  
<br>
making the code IPv6 only...
<br>
<p><span class="quotelev1">&gt; I think it is broken, the calculation of net1 and net2 in
</span><br>
<span class="quotelev1">&gt; btl_tcp_proc.c isn't really ported and to be honest: I don't
</span><br>
<span class="quotelev1">&gt; understand the details, i.e. do I have to port name lookups,
</span><br>
<span class="quotelev1">&gt; are there high level structures relying on IPv4 structs
</span><br>
<span class="quotelev1">&gt; and so on.
</span><br>
<p>The port name information will all be in the modex share that I  
<br>
talked about in the previous e-mail, so it's just a matter of looking  
<br>
it up in the endpoint information.  As for the code in  
<br>
mca_btl_tcp_proc_insert(), which is what I think you're referring to  
<br>
by the net1/net2 code, that's intended to be used to try to get all  
<br>
the multi-nic scenarios wired up in the most advantageous way  
<br>
possible.  So we look at the combination IPv4 addr and netmask and  
<br>
prefer to connect two endpoints in the same subnet.  We also try not  
<br>
to connect public and private addresses, as that rarely works the way  
<br>
people intend.
<br>
<p>As an example, say we have two hosts, both with two NICs:
<br>
<p>&nbsp;&nbsp;&nbsp;host1: 129.79.200.1/255.255.0.0, 129.72.100.1/255.255.0.0
<br>
&nbsp;&nbsp;&nbsp;host2: 129.79.200.2/255.255.0.0, 129.72.100.2/255.255.0.0
<br>
<p>When host1 is trying to wire-up connections to host2, it's going to  
<br>
figure out how to wire up the btl instance for the 79.200 address and  
<br>
the 72.100 address separately.  For the 79.200.1 address, we're going  
<br>
to see we have two addresses we can connect to - 129.79.200.2 and  
<br>
129.72.100.2.  By looking at netmasks and addresses, we can make the  
<br>
guess that the 79.200.2 address is on the &quot;same&quot; network and the  
<br>
72.100.2 address is on a &quot;different&quot; network.  I'm not sure how IPv6  
<br>
deals with netmasks and routing, but I'm assuming there would be  
<br>
something similar.
<br>
<p><span class="quotelev1">&gt; At least it compiles ;) (let's ship it)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if this patched tcp-component can handle
</span><br>
<span class="quotelev1">&gt; IPv6 connections, I've never tested it. I think it
</span><br>
<span class="quotelev1">&gt; even breaks IPv4 functionality; we should make clear
</span><br>
<span class="quotelev1">&gt; how IPv4 and IPv6 may work in parallel (or may not, if
</span><br>
<span class="quotelev1">&gt; one considers IPv4 deprecated ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can retrieve the patch here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://cluster.inf-ra.uni-jena.de/~adi/ompi.ipv6.v1.patch">http://cluster.inf-ra.uni-jena.de/~adi/ompi.ipv6.v1.patch</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd also appreciate any suggestions, hints or even success stories ;)
</span><br>
<p>&nbsp;From a practical standpoint, Open MPI has to support both IPv4 and  
<br>
IPv6 for the foreseeable future.  We currently try to wire up one  
<br>
connection per &quot;IP device&quot;, so it seems like we should be able to  
<br>
find some way to automatically switch between IPv6 or IPv4 based on  
<br>
what we determine is available on that host, right?  I'll admit it  
<br>
has been a year or so since I've looked at this, so I could be  
<br>
completely off base there.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0785.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0783.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0782.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0786.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0786.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
