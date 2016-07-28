<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 13:54:42 2007" -->
<!-- isoreceived="20070613175442" -->
<!-- sent="Wed, 13 Jun 2007 13:54:28 -0400" -->
<!-- isosent="20070613175428" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with openib on demand connection bring up." -->
<!-- id="3BA8ECB2-001C-4DBB-A15C-8D3F597D6626_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070613173722.GC6519_at_minantech.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-13 13:54:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1695.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1693.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>In reply to:</strong> <a href="1690.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1695.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1695.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1712.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 13, 2007, at 1:37 PM, Gleb Natapov wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I have 2 hosts: one with 3 active ports and one with 2 active ports.
</span><br>
<span class="quotelev2">&gt;&gt; If I run an MPI job between them, the openib BTL wireup got badly and
</span><br>
<span class="quotelev2">&gt;&gt; it aborts.  So handling a heterogeneous number of ports is not
</span><br>
<span class="quotelev2">&gt;&gt; currently handled properly in the code.
</span><br>
<span class="quotelev1">&gt; Are the all in the same subnet? If not I fixed some bug yesterday that
</span><br>
<span class="quotelev1">&gt; may help.
</span><br>
<p>No, they are not all on the same subnet:
<br>
<p>host svbu-mpi002:
<br>
port 1: DDR, subnet A
<br>
ports 2 and 3: SDR, subnet B
<br>
<p>host svbu-mpi003:
<br>
port 1: DDR, subnet A
<br>
port 2: SDR, subnet B
<br>
<p>With today's trunk, I still see the problem:
<br>
<p>[10:52] svbu-mpi:~/mpi % mpirun --mca btl openib,self -np 2 --host  
<br>
svbu-mpi002,svbu-mpi003 ring
<br>
Process 1 waiting to receive from 0: tag 201
<br>
Process 0 sending 10 to 1, tag 201
<br>
[svbu-mpi002][0,1,0][btl_openib_endpoint.c: 
<br>
794:mca_btl_openib_endpoint_recv] can't find suitable endpoint for  
<br>
this peer
<br>
<p>I'll try to look into this today or tomorrow...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1695.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1693.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>In reply to:</strong> <a href="1690.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1695.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1695.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1712.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
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
