<?
$subject_val = "Re: [OMPI devel] PLPA ready?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 08:01:44 2008" -->
<!-- isoreceived="20080220130144" -->
<!-- sent="Wed, 20 Feb 2008 06:01:34 -0700" -->
<!-- isosent="20080220130134" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLPA ready?" -->
<!-- id="B8801C48-7A60-4732-B585-C3199CF1D2FE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="53d4221c0802190912i63489948q2257864e1e0b28ba_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PLPA ready?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-20 08:01:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3272.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3270.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>In reply to:</strong> <a href="3266.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3272.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3272.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 19, 2008, at 10:12 AM, Sharon Melamed wrote:
<br>
<p><span class="quotelev1">&gt; In the patch you sent the variables: num_processors, num_sockets and
</span><br>
<span class="quotelev1">&gt; num_cores are lost outside the paffinity framework.
</span><br>
<span class="quotelev1">&gt; I need those in the ODLS framework. what do think about the attached  
</span><br>
<span class="quotelev1">&gt; patch?
</span><br>
<p>I guess I was torn between reporting num_processors/sockets and  
<br>
max_socket|core_id.  Really, you need both, right?  It is possible  
<br>
that the number of processors and/or sockets are not contiguous.
<br>
<p>(fwiw: this is specifically what I was referring to when I was talking  
<br>
about returning the paffinity API)
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
<li><strong>Next message:</strong> <a href="3272.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3270.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>In reply to:</strong> <a href="3266.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3272.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3272.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
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
