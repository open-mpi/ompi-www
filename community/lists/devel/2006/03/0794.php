<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 11:22:57 2006" -->
<!-- isoreceived="20060331162257" -->
<!-- sent="Fri, 31 Mar 2006 18:22:47 +0200" -->
<!-- isosent="20060331162247" -->
<!-- name="Christian Kauhaus" -->
<!-- email="ckauhaus_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="20060331162247.GB1642_at_ipc256.inf.uni-jena.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA0DA839-294F-49E2-8E4A-BD6275186D1C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-03-31 11:22:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0795.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0793.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0783.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0785.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Barrett &lt;brbarret_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;Great!  We currently only have IPv4 support, but IPv6 has always been  
</span><br>
<span class="quotelev1">&gt;on the wishlist.  Most of the developers in the States don't have  
</span><br>
<p>This is very fine. :-)
<br>
<p><span class="quotelev1">&gt;As far as I'm aware, there is no one working on IPv6 support for Open  
</span><br>
<span class="quotelev1">&gt;MPI.  We would welcome anyone willing to work on the support :).  And  
</span><br>
<p>Then it looks like we are going to start it...
<br>
<p><span class="quotelev1">&gt;Are your hosts configured for both IPv4 and IPv6 traffic (or are they  
</span><br>
<span class="quotelev1">&gt;IPv6 only)?  I ask because that will determine what your first step  
</span><br>
<span class="quotelev1">&gt;is.  There are two TCP communication channels in Open MPI -- the tcp  
</span><br>
<p>We currently have dual-stacked hosts. Everything else is sort of
<br>
ridiculous at the current time. 
<br>
<p><span class="quotelev1">&gt;MPI traffic.  Without a working tcp oob component, it's pretty close  
</span><br>
<span class="quotelev1">&gt;to impossible to start the tcp btl, so if you only have IPv6 on your  
</span><br>
<span class="quotelev1">&gt;machines, that will dictate starting with the tcp oob component.   
</span><br>
<p>Since we are able to reach every node both on IPv4 and IPv6, we do not
<br>
have the bootstrapping problem. It looks to me that ORTE/OOB would be
<br>
the easier part to start with anyway. 
<br>
<p>-Christian
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
<li><strong>Next message:</strong> <a href="0795.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0793.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0783.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0785.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
