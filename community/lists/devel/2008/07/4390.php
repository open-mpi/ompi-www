<?
$subject_val = "Re: [OMPI devel] v1.3: libnbc and sm2 coll components";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 20:56:57 2008" -->
<!-- isoreceived="20080722005657" -->
<!-- sent="Mon, 21 Jul 2008 20:56:37 -0400" -->
<!-- isosent="20080722005637" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.3: libnbc and sm2 coll components" -->
<!-- id="B1E4C59E-03F7-48ED-BED2-362E0B82A1BF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080721223646.GD3187_at_benten.cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.3: libnbc and sm2 coll components<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-21 20:56:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4391.php">Richard Graham: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<li><strong>Previous message:</strong> <a href="4389.php">Jeff Squyres: "Re: [OMPI devel] MCA base component changes"</a>
<li><strong>In reply to:</strong> <a href="4386.php">Torsten Hoefler: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4391.php">Richard Graham: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!  I'll delete from the trunk an v1.3.
<br>
<p><p>On Jul 21, 2008, at 6:36 PM, Torsten Hoefler wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; Should these 2 components be in v1.3?
</span><br>
<span class="quotelev1">&gt; for LibNBC: no. This was a test to implement blocking colls on top of
</span><br>
<span class="quotelev1">&gt; non-blocking when the tuned implementation was lacking some ops (e.g.,
</span><br>
<span class="quotelev1">&gt; Allgather). Tuned now efficiently implements most collectives which
</span><br>
<span class="quotelev1">&gt; makes the blocking version of LibNBC unnecessary. Non-blocking
</span><br>
<span class="quotelev1">&gt; collectives are not supported by Open MPI (and were not implemented in
</span><br>
<span class="quotelev1">&gt; this component).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I (as the author) would vote to delete it from the trunk :).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;  Torsten
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; bash$ :(){ :|:&amp;};: --------------------- <a href="http://www.unixer.de/">http://www.unixer.de/</a> -----
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4391.php">Richard Graham: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<li><strong>Previous message:</strong> <a href="4389.php">Jeff Squyres: "Re: [OMPI devel] MCA base component changes"</a>
<li><strong>In reply to:</strong> <a href="4386.php">Torsten Hoefler: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4391.php">Richard Graham: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
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
