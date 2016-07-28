<?
$subject_val = "[OMPI devel] FreeBSD timer_base_open error?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 23 00:54:32 2008" -->
<!-- isoreceived="20080323045432" -->
<!-- sent="Sat, 22 Mar 2008 21:54:21 -0700" -->
<!-- isosent="20080323045421" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="[OMPI devel] FreeBSD timer_base_open error?" -->
<!-- id="b89c3c270803222154w52112a7bgc10f819a475e9bde_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] FreeBSD timer_base_open error?<br>
<strong>From:</strong> Brad Penoff (<em>penoff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-23 00:54:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3500.php">Gleb Natapov: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3498.php">Jeff Squyres: "Re: [OMPI devel] Makefile.am updates"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Reply:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>In an MTT run just now, I'm noticing these funny output messages in
<br>
the middle of an early phase:
<br>
<p>&lt;snip snip&gt;
<br>
<p><span class="quotelev2">&gt;&gt; MPI install [mpi install: gcc warnings]
</span><br>
&nbsp;&nbsp;&nbsp;Installing MPI: [ompi-nightly-trunk] / [1.3a1r17921] / [gcc warnings]...
<br>
[pc23.netbed.icics.ubc.ca:59263] mca: base: components_open: component
<br>
timer / linux open function failed
<br>
[pc23.netbed.icics.ubc.ca:59264] mca: base: components_open: component
<br>
timer / linux open function failed
<br>
[pc23.netbed.icics.ubc.ca:59265] mca: base: components_open: component
<br>
timer / linux open function failed
<br>
[pc23.netbed.icics.ubc.ca:59266] mca: base: components_open: component
<br>
timer / linux open function failed
<br>
<p>&lt;snip snip&gt;
<br>
<p>Has anyone ever seen these?
<br>
<p>Nonetheless, my tests proceed and run after this.  This is on a
<br>
FreeBSD 6.2 system, so having &quot;linux&quot; in the message seems
<br>
interesting...  any suggestions?
<br>
<p>Thanks!
<br>
brad
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3500.php">Gleb Natapov: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3498.php">Jeff Squyres: "Re: [OMPI devel] Makefile.am updates"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Reply:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
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
