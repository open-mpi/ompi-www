<?
$subject_val = "Re: [OMPI devel] OMPI vs Scali performance comparisons";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 20:03:11 2009" -->
<!-- isoreceived="20090318000311" -->
<!-- sent="Tue, 17 Mar 2009 16:02:34 -0800" -->
<!-- isosent="20090318000234" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI vs Scali performance comparisons" -->
<!-- id="49C03A1A.7010204_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E7FD839BAFD8CA499213A6EE26F2368004CB6C_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI vs Scali performance comparisons<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 20:02:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5654.php">Jeff Squyres: "[OMPI devel] require newer autoconf?"</a>
<li><strong>Previous message:</strong> <a href="5652.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>In reply to:</strong> <a href="5651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5652.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Jeff Squyres (jsquyres) wrote:
<blockquote
 cite="midE7FD839BAFD8CA499213A6EE26F2368004CB6C@xmb-rtp-215.amer.cisco.com"
 type="cite">
  <meta http-equiv="Content-Type" content="text/html; ">
  <meta name="Generator"
 content="MS Exchange Server version 6.5.7654.12">
  <title>Re: [OMPI devel] OMPI vs Scali performance comparisons</title>
<!-- Converted from text/plain format -->
  <p><font size="2">I still think that the pml fast path fixes would be
good.<br>
  </font></p>
</blockquote>
As do I.&nbsp; Again, I think one needs to go to the BTL sendi as soon as
possible after entering the PML, which raised those thorny discussions
about how exactly we must preserve current BTL ordering.<br>
<br>
To catch up to Scali, we need 2x.&nbsp; The PML fast-path stuff I showed in
Feb in San Jose produced 30%-3x, depending on the hardware (that is,
depending on whether the bottleneck is memory performance or
instruction-processing speed).&nbsp; I don't know where this particular
hardware sits in that range.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5654.php">Jeff Squyres: "[OMPI devel] require newer autoconf?"</a>
<li><strong>Previous message:</strong> <a href="5652.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>In reply to:</strong> <a href="5651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5652.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
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
