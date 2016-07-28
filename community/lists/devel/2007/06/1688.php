<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 13:20:04 2007" -->
<!-- isoreceived="20070613172004" -->
<!-- sent="Wed, 13 Jun 2007 11:19:55 -0600" -->
<!-- isosent="20070613171955" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with openib on demand connection bring up." -->
<!-- id="10B81726-9F50-4C8A-99A2-2571702A12EA_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5d5f7eba0706131015x6a1329far9da1540a287f2627_at_mail.gmail.com" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-13 13:19:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1689.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1687.php">Nysal Jan: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1687.php">Nysal Jan: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1689.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 13, 2007, at 11:15 AM, Nysal Jan wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was just bitten yesterday by a problem that I've known about for a
</span><br>
<span class="quotelev1">&gt; while but had never gotten around to looking into (I could have sworn
</span><br>
<span class="quotelev1">&gt; that there was an open trac ticket on this, but I can't find one
</span><br>
<span class="quotelev1">&gt; anywhere).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have 2 hosts: one with 3 active ports and one with 2 active ports.
</span><br>
<span class="quotelev1">&gt; If I run an MPI job between them, the openib BTL wireup got badly and
</span><br>
<span class="quotelev1">&gt; it aborts.  So handling a heterogeneous number of ports is not
</span><br>
<span class="quotelev1">&gt; currently handled properly in the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if Gleb's patch addresses this situation or not; I'll
</span><br>
<span class="quotelev1">&gt; look at his patch this afternoon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a ticket (closed) here: <a href="https://svn.open-mpi.org/trac/ompi/">https://svn.open-mpi.org/trac/ompi/</a> 
</span><br>
<span class="quotelev1">&gt; ticket/548
</span><br>
<span class="quotelev1">&gt; It was fixed by Galen for 1.2. There is a FAQ entry also about  
</span><br>
<span class="quotelev1">&gt; this  <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-port">http://www.open-mpi.org/faq/?category=openfabrics#ofa-port</a>- 
</span><br>
<span class="quotelev1">&gt; wireup
</span><br>
<p>I think Gleb's patch addresses a potential race condition when both  
<br>
sides attempt to connect at the same time.
<br>
<p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1688/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1689.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1687.php">Nysal Jan: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1687.php">Nysal Jan: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1689.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
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
