<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 12:45:15 2007" -->
<!-- isoreceived="20070613164515" -->
<!-- sent="Wed, 13 Jun 2007 12:45:01 -0400" -->
<!-- isosent="20070613164501" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with openib on demand connection bring up." -->
<!-- id="7B04569E-0147-40C4-BB2A-0166D57D948A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070613160851.GB6519_at_minantech.com" -->
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
<strong>Date:</strong> 2007-06-13 12:45:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1685.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1683.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>In reply to:</strong> <a href="1682.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1687.php">Nysal Jan: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1687.php">Nysal Jan: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1690.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 13, 2007, at 12:08 PM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; I am not committing this yet. I want people to review my logic and the
</span><br>
<span class="quotelev1">&gt; patch. If the change is OK with everyone how cares then I want this
</span><br>
<span class="quotelev1">&gt; change to go into 1.2 branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't care how this change will get to the trunk. I can use patched
</span><br>
<span class="quotelev1">&gt; version for a while. If you branch is in working state right now I can
</span><br>
<span class="quotelev1">&gt; merge this change into it tomorrow.
</span><br>
<p>I was just bitten yesterday by a problem that I've known about for a  
<br>
while but had never gotten around to looking into (I could have sworn  
<br>
that there was an open trac ticket on this, but I can't find one  
<br>
anywhere).
<br>
<p>I have 2 hosts: one with 3 active ports and one with 2 active ports.   
<br>
If I run an MPI job between them, the openib BTL wireup got badly and  
<br>
it aborts.  So handling a heterogeneous number of ports is not  
<br>
currently handled properly in the code.
<br>
<p>I don't know if Gleb's patch addresses this situation or not; I'll  
<br>
look at his patch this afternoon.
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
<li><strong>Next message:</strong> <a href="1685.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1683.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>In reply to:</strong> <a href="1682.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1687.php">Nysal Jan: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1687.php">Nysal Jan: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1690.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
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
