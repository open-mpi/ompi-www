<?
$subject_val = "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 14:51:04 2008" -->
<!-- isoreceived="20081106195104" -->
<!-- sent="Thu, 6 Nov 2008 14:48:44 -0500" -->
<!-- isosent="20081106194844" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: libopen-rte --&amp;gt; libompi-rte" -->
<!-- id="CD615A96-68C8-4B6F-A20D-894544C42187_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081106194257.GB7190_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 14:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4857.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Previous message:</strong> <a href="4855.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>In reply to:</strong> <a href="4855.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4857.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Reply:</strong> <a href="4857.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 6, 2008, at 2:42 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Changing the library name is an incompatible change for all programs  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; libraries that are linked against it; i.e., it requires relinking.
</span><br>
<p>Agreed.
<br>
<p><span class="quotelev1">&gt; Hmm, OpenMPI seems not to use versioning for its shared libraries.
</span><br>
<p>That was on the to-do list for this release, but it just didn't  
<br>
happen.  :-\
<br>
<p><span class="quotelev1">&gt; Do you just declare each release API+ABI-incompatible to each other  
</span><br>
<span class="quotelev1">&gt; release?
</span><br>
<p><p>MPI API is compatible across releases; it hasn't changed.  We have  
<br>
never [yet] claimed ABI compatible across releases -- we may still do  
<br>
this someday.
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
<li><strong>Next message:</strong> <a href="4857.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Previous message:</strong> <a href="4855.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>In reply to:</strong> <a href="4855.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4857.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Reply:</strong> <a href="4857.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
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
