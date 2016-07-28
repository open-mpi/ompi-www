<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 11:58:19 2007" -->
<!-- isoreceived="20070613155819" -->
<!-- sent="Wed, 13 Jun 2007 09:58:11 -0600" -->
<!-- isosent="20070613155811" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with openib on demand connection bring up." -->
<!-- id="65B99B44-5301-404A-B35B-448498780DC7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070613154945.GC19009_at_ringo.informatik.tu-chemnitz.de" -->
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
<strong>Date:</strong> 2007-06-13 11:58:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1681.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Previous message:</strong> <a href="1679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>In reply to:</strong> <a href="1678.php">Torsten Hoefler: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1682.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 13, 2007, at 9:49 AM, Torsten Hoefler wrote:
<br>
<p><span class="quotelev1">&gt; Hi Galen,Gleb,
</span><br>
<span class="quotelev1">&gt; there is also something weird going on if I call the basic alltoall
</span><br>
<span class="quotelev1">&gt; during the module_init() of a collective module (I need to wire up my
</span><br>
<span class="quotelev1">&gt; own QPs in my coll component). It takes 7 seconds for 4 nodes and more
</span><br>
<span class="quotelev1">&gt; than 30 minutes for 120 nodes. It seems to be an OpenIB wireup issue
</span><br>
<span class="quotelev1">&gt; because if I start with -mca btl tcp,self this goes as fast as  
</span><br>
<span class="quotelev1">&gt; expected
</span><br>
<span class="quotelev1">&gt; (&lt;2 seconds).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will this issue be fixed with your patch?
</span><br>
<p>No, this is a separate issue.
<br>
<p>Try:
<br>
-mca mpi_preconnect_oob 1
<br>
<p>then try:
<br>
<p>-mca mpi_preconnect_all 1
<br>
<p>and let us know what the times are.
<br>
<p>thx,
<br>
<p>galen
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;   Torsten
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  bash$ :(){ :|:&amp;};: --------------------- <a href="http://www.unixer.de/">http://www.unixer.de/</a> -----
</span><br>
<span class="quotelev1">&gt; Indiana University    | <a href="http://www.indiana.edu">http://www.indiana.edu</a>
</span><br>
<span class="quotelev1">&gt; Open Systems Lab      | <a href="http://osl.iu.edu/">http://osl.iu.edu/</a>
</span><br>
<span class="quotelev1">&gt; 150 S. Woodlawn Ave.  | Bloomington, IN, 474045-7104 | USA
</span><br>
<span class="quotelev1">&gt; Lindley Hall Room 135 | +01 (812) 855-3608
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1681.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Previous message:</strong> <a href="1679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>In reply to:</strong> <a href="1678.php">Torsten Hoefler: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1682.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
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
