<?
$subject_val = "Re: [hwloc-devel] documentation/implementation questions with the snprintf routines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 11:29:36 2011" -->
<!-- isoreceived="20110106162936" -->
<!-- sent="Thu, 06 Jan 2011 17:29:28 +0100" -->
<!-- isosent="20110106162928" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] documentation/implementation questions with the snprintf routines" -->
<!-- id="4D25EDE8.4050106_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D25EA16.8090002_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] documentation/implementation questions with the snprintf routines<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 11:29:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1802.php">Jeff Squyres: "[hwloc-devel] Docs updates"</a>
<li><strong>Previous message:</strong> <a href="1800.php">Guy Streeter: "[hwloc-devel] documentation/implementation questions with the snprintf routines"</a>
<li><strong>In reply to:</strong> <a href="1800.php">Guy Streeter: "[hwloc-devel] documentation/implementation questions with the snprintf routines"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/01/2011 17:13, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; The man pages for the various snprintf routines indicate that they
</span><br>
<span class="quotelev1">&gt; return the number of characters written. My testing indicates that
</span><br>
<span class="quotelev1">&gt; they always return the number of characters required, which can be
</span><br>
<span class="quotelev1">&gt; more or less than the space supplied.
</span><br>
<p>Indeed, most comments in the API are wrong. All our snprintf functions
<br>
return the number of required characters.
<br>
<p><span class="quotelev1">&gt; My testing also indicates that if the buffer size is indicated as
</span><br>
<span class="quotelev1">&gt; zero, the buffer pointer is not referenced.
</span><br>
<p>This is *mostly* true. We only have a couple corner cases that I should
<br>
be able to fix.
<br>
<p><span class="quotelev1">&gt; This allows me to pass in NULL and zero to determine the required size
</span><br>
<span class="quotelev1">&gt; before allocating the space. I would like to see that explicitly
</span><br>
<span class="quotelev1">&gt; promised so I can count on it going forward.
</span><br>
<p>Once I fix the aforementioned corner cases, we'll explicitly promise
<br>
this in the API comments. Should be ok for 1.1.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1802.php">Jeff Squyres: "[hwloc-devel] Docs updates"</a>
<li><strong>Previous message:</strong> <a href="1800.php">Guy Streeter: "[hwloc-devel] documentation/implementation questions with the snprintf routines"</a>
<li><strong>In reply to:</strong> <a href="1800.php">Guy Streeter: "[hwloc-devel] documentation/implementation questions with the snprintf routines"</a>
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
