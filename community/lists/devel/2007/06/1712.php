<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 14 06:32:56 2007" -->
<!-- isoreceived="20070614103256" -->
<!-- sent="Thu, 14 Jun 2007 13:32:48 +0300" -->
<!-- isosent="20070614103248" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with openib on demand connection bring up." -->
<!-- id="20070614103248.GH482_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3BA8ECB2-001C-4DBB-A15C-8D3F597D6626_at_cisco.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-14 06:32:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1713.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1711.php">Patrick Geoffray: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>In reply to:</strong> <a href="1694.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1717.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1717.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jun 13, 2007 at 01:54:28PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 13, 2007, at 1:37 PM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have 2 hosts: one with 3 active ports and one with 2 active ports.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If I run an MPI job between them, the openib BTL wireup got badly and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it aborts.  So handling a heterogeneous number of ports is not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; currently handled properly in the code.
</span><br>
<span class="quotelev2">&gt; &gt; Are the all in the same subnet? If not I fixed some bug yesterday that
</span><br>
<span class="quotelev2">&gt; &gt; may help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, they are not all on the same subnet:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; host svbu-mpi002:
</span><br>
<span class="quotelev1">&gt; port 1: DDR, subnet A
</span><br>
<span class="quotelev1">&gt; ports 2 and 3: SDR, subnet B
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; host svbu-mpi003:
</span><br>
<span class="quotelev1">&gt; port 1: DDR, subnet A
</span><br>
<span class="quotelev1">&gt; port 2: SDR, subnet B
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With today's trunk, I still see the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [10:52] svbu-mpi:~/mpi % mpirun --mca btl openib,self -np 2 --host  
</span><br>
<span class="quotelev1">&gt; svbu-mpi002,svbu-mpi003 ring
</span><br>
<span class="quotelev1">&gt; Process 1 waiting to receive from 0: tag 201
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 1, tag 201
</span><br>
<span class="quotelev1">&gt; [svbu-mpi002][0,1,0][btl_openib_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 794:mca_btl_openib_endpoint_recv] can't find suitable endpoint for  
</span><br>
<span class="quotelev1">&gt; this peer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Now I see that my fix was in the right place, but still a little bit
<br>
wrong. I committed a fix to my fix in r15073. Can you check it?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1713.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1711.php">Patrick Geoffray: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>In reply to:</strong> <a href="1694.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1717.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1717.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
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
