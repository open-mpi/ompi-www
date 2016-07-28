<?
$subject_val = "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 09:21:23 2016" -->
<!-- isoreceived="20160524132123" -->
<!-- sent="Tue, 24 May 2016 13:21:20 +0000" -->
<!-- isosent="20160524132120" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2" -->
<!-- id="E61D6969-4FC6-4C9F-8EEC-21F944E6F5A4_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="92d7afea-42e0-83bb-2d02-92e834033afc_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-24 09:21:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29304.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Previous message:</strong> <a href="29302.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="29300.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2016, at 7:19 AM, Siegmar Gross &lt;siegmar.gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't see a difference for my spawned processes, because both functions will
</span><br>
<span class="quotelev1">&gt; &quot;wait&quot; until all pending operations have finished, before the object will be
</span><br>
<span class="quotelev1">&gt; destroyed. Nevertheless, perhaps my small example program worked all the years
</span><br>
<span class="quotelev1">&gt; by chance.
</span><br>
<p>FWIW: COMM_DISCONNECT is (effectively) used to guarantee that a communicator is destroyed.  It can actually be used with any communicator (other than COMM_WORLD and COMM_SELF), but is typically used with communicators created by CONNECT, ACCEPT, JOIN, SPAWN, or SPAWN_MULTIPLE.
<br>
<p>When used with a communicator that was created by the dynamic operations (e.g., SPAWN), it effectively &quot;disconnects&quot; the two groups in the communicator that it just freed (assuming that that communicator was the only one spanning the two groups).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29304.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Previous message:</strong> <a href="29302.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="29300.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
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
