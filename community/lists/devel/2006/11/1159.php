<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 15:38:47 2006" -->
<!-- isoreceived="20061102203847" -->
<!-- sent="Thu, 02 Nov 2006 13:38:35 -0700" -->
<!-- isosent="20061102203835" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [GE users] OpenMPI 1.2 integration and dedicated MPI networks" -->
<!-- id="454A574B.90304_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="45392516.8050808_at_Sun.COM" -->
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
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-02 15:38:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1160.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Previous message:</strong> <a href="1158.php">Greg Watson: "Re: [OMPI devel] Request for 1.2 build"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/10/1131.php">Pak Lui: "Re: [OMPI devel] [GE users] OpenMPI 1.2 integration and dedicated MPI networks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pak Lui wrote:
<br>
<span class="quotelev1">&gt; Orion Poplawski wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In our setup (which I don't believe is very unique) the nodes are 
</span><br>
<span class="quotelev2">&gt;&gt; connected by two networks:  an &quot;admin&quot; network which allows for 
</span><br>
<span class="quotelev2">&gt;&gt; connections from outside the cluster and an &quot;MPI&quot; network that is a 
</span><br>
<span class="quotelev2">&gt;&gt; private GigE network connecting the nodes for MPI traffic:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        +---------admin net (192.168.0.X)--------+
</span><br>
<span class="quotelev2">&gt;&gt;        |                           |            |
</span><br>
<span class="quotelev2">&gt;&gt; +-----------+                 +--------+    +--------+
</span><br>
<span class="quotelev2">&gt;&gt; | SGE Master|                 | coop00 |    | coop01 |
</span><br>
<span class="quotelev2">&gt;&gt; |           |                 | coop00x|    | coop01x|
</span><br>
<span class="quotelev2">&gt;&gt; +-----------+                 +--------+    +--------+
</span><br>
<span class="quotelev2">&gt;&gt;                                    |            |
</span><br>
<span class="quotelev2">&gt;&gt;                                    +------------+
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     MPI net (192.168.1.X)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So the &quot;x&quot; suffix names are the addresses on the MPI network.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently (loose integration), we create machines files like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; coop00x.cora.nwra.com cpu=2
</span><br>
<span class="quotelev2">&gt;&gt; coop01x.cora.nwra.com cpu=2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which makes the MPI traffic travel over the MPI network.  I'm trying 
</span><br>
<span class="quotelev2">&gt;&gt; to duplicate this under &quot;tight&quot; integration.
</span><br>
<p>Well, this is what we did with LAM and I naively assumed that since 
<br>
OpenMPI used that same machines file format, it worked the same there. 
<br>
But once I finally read the FAQ (specifically: 
<br>
&lt;<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>&gt;) I see that it 
<br>
works totally differently.
<br>
<p>So, default setup with gridengine integration works, and I just have:
<br>
<p>btl_tcp_if_include = eth1
<br>
<p>in my /etc/openmpi-mca-params.conf file.
<br>
<p>Sorry for all the confusion.
<br>
<p><pre>
-- 
Orion Poplawski
System Administrator                  303-415-9701 x222
NWRA/CoRA Division                    FAX: 303-415-9702
3380 Mitchell Lane                  orion_at_[hidden]
Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1160.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Previous message:</strong> <a href="1158.php">Greg Watson: "Re: [OMPI devel] Request for 1.2 build"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/10/1131.php">Pak Lui: "Re: [OMPI devel] [GE users] OpenMPI 1.2 integration and dedicated MPI networks"</a>
<!-- nextthread="start" -->
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
