<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 19 16:45:09 2007" -->
<!-- isoreceived="20070619204509" -->
<!-- sent="Tue, 19 Jun 2007 22:44:41 +0200" -->
<!-- isosent="20070619204441" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering" -->
<!-- id="200706192244.42194.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E696382C-DB48-432A-A98A-18CD2FDC0382_at_lanl.gov" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-19 16:44:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1733.php">Andrew Friedley: "[OMPI devel] Unreliable Datagram BTL"</a>
<li><strong>Previous message:</strong> <a href="1731.php">Jeff Squyres: "Re: [OMPI devel] openib coord teleconf"</a>
<li><strong>In reply to:</strong> <a href="1730.php">Brian Barrett: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
On Tuesday 19 June 2007 16:41, Brian Barrett wrote:
<br>
<span class="quotelev3">&gt; &gt;&gt; Please raise Your hand if anybody cares.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sun cares very much about this for the exact reason you state (Binary
</span><br>
<span class="quotelev2">&gt; &gt; compatibility).
</span><br>
<span class="quotelev2">&gt; &gt; I'd prefer this ddt is placed at the end of the list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think we should try to avoid binary compatibility changes at the
</span><br>
<span class="quotelev1">&gt; MPI layer if we can, even between our &quot;major&quot; releases.  Especially
</span><br>
<span class="quotelev1">&gt; if they don't take lots of work.  Now if only we would stop changing
</span><br>
<span class="quotelev1">&gt; the size of ompi_communicator_t :).
</span><br>
<p>Alright. As suggested, the two missing parts are committed.
<br>
To the unsuspecting Fortran app, everything should look the same...
<br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1733.php">Andrew Friedley: "[OMPI devel] Unreliable Datagram BTL"</a>
<li><strong>Previous message:</strong> <a href="1731.php">Jeff Squyres: "Re: [OMPI devel] openib coord teleconf"</a>
<li><strong>In reply to:</strong> <a href="1730.php">Brian Barrett: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
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
