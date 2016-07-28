<?
$subject_val = "Re: [OMPI users] Is there a interrupt-base receiving mode implementedin OPENMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 11:40:41 2009" -->
<!-- isoreceived="20090618154041" -->
<!-- sent="Thu, 18 Jun 2009 11:40:34 -0400" -->
<!-- isosent="20090618154034" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is there a interrupt-base receiving mode implementedin OPENMPI?" -->
<!-- id="217536EB-9D2E-4222-BC94-E57546BDF7CA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A3A5E6B.5030205_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is there a interrupt-base receiving mode implementedin OPENMPI?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-18 11:40:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9634.php">Honest Guvnor: "[OMPI users] mpirun fails on the host"</a>
<li><strong>Previous message:</strong> <a href="9632.php">Hsing-bung Chen: "[OMPI users] Is there a interrupt-base receiving mode implemented in OPENMPI?"</a>
<li><strong>In reply to:</strong> <a href="9632.php">Hsing-bung Chen: "[OMPI users] Is there a interrupt-base receiving mode implemented in OPENMPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 18, 2009, at 11:34 AM, Hsing-bung Chen wrote:
<br>
<p><span class="quotelev1">&gt; Is there a interrupt-base receiving mode implemented in OPENMPI?
</span><br>
<span class="quotelev1">&gt; How do I  enable it and when I build the openmpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>It depends what you mean by &quot;interrupt-based receiving mode&quot; -- OMPI  
<br>
currently polls for progress because that's typically how you get the  
<br>
lowest latency.  We don't currently have any blocking mode for  
<br>
receives, although it has been on the to-do list for a while (but at a  
<br>
fairly low priority).
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
<li><strong>Next message:</strong> <a href="9634.php">Honest Guvnor: "[OMPI users] mpirun fails on the host"</a>
<li><strong>Previous message:</strong> <a href="9632.php">Hsing-bung Chen: "[OMPI users] Is there a interrupt-base receiving mode implemented in OPENMPI?"</a>
<li><strong>In reply to:</strong> <a href="9632.php">Hsing-bung Chen: "[OMPI users] Is there a interrupt-base receiving mode implemented in OPENMPI?"</a>
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
