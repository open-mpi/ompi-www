<?
$subject_val = "Re: [OMPI devel] what's the relationship between proc, endpoint and btl?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 12:16:28 2010" -->
<!-- isoreceived="20100224171628" -->
<!-- sent="Wed, 24 Feb 2010 12:16:19 -0500" -->
<!-- isosent="20100224171619" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] what's the relationship between proc, endpoint and btl?" -->
<!-- id="DF5BE0D1-C576-4AC5-A47C-CCF04C04D588_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="632a27d11002240659h664151f8ufe4988031e7e5f8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] what's the relationship between proc, endpoint and btl?<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 12:16:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7478.php">Jeff Squyres: "[OMPI devel] OFED 1.4.1-2ofed SRPM"</a>
<li><strong>Previous message:</strong> <a href="7476.php">hu yaohui: "[OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<li><strong>In reply to:</strong> <a href="7476.php">hu yaohui: "[OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7481.php">Jeff Squyres: "Re: [OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<li><strong>Reply:</strong> <a href="7481.php">Jeff Squyres: "Re: [OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
btl is the component responsible for a particular type of fabric. Endpoint is somewhat the instantiation of a btl to reach a particular destination on a particular fabric, proc is the generic name and properties of a destination. 
<br>
<p>Aurelien
<br>
<p>Le 24 f&#233;vr. 2010 &#224; 09:59, hu yaohui a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Could someone tell me the relationship between proc,endpoint and btl?
</span><br>
<span class="quotelev1">&gt;                  thanks &amp; regards
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
<li><strong>Next message:</strong> <a href="7478.php">Jeff Squyres: "[OMPI devel] OFED 1.4.1-2ofed SRPM"</a>
<li><strong>Previous message:</strong> <a href="7476.php">hu yaohui: "[OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<li><strong>In reply to:</strong> <a href="7476.php">hu yaohui: "[OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7481.php">Jeff Squyres: "Re: [OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<li><strong>Reply:</strong> <a href="7481.php">Jeff Squyres: "Re: [OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
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
