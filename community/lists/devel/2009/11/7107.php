<?
$subject_val = "Re: [OMPI devel] opal_convertor / ompi_convertor";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 11:06:41 2009" -->
<!-- isoreceived="20091109160641" -->
<!-- sent="Mon, 9 Nov 2009 11:06:37 -0500" -->
<!-- isosent="20091109160637" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_convertor / ompi_convertor" -->
<!-- id="4C1A5C88-B0ED-4399-8A9B-A7BE41CA877D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="69446317-57D1-459B-86F5-24E66A8FFFDB_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_convertor / ompi_convertor<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-09 11:06:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7108.php">George Bosilca: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>Previous message:</strong> <a href="7106.php">George Bosilca: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>In reply to:</strong> <a href="7106.php">George Bosilca: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7108.php">George Bosilca: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>Reply:</strong> <a href="7108.php">George Bosilca: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 9, 2009, at 10:56 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; To your last question the short answer is: the obsolete one is the
</span><br>
<span class="quotelev1">&gt; ompi_convertor. About two months ago, most of the datatype was moved
</span><br>
<span class="quotelev1">&gt; from the OMPI layer into the OPAL one. When I say most this means
</span><br>
<span class="quotelev1">&gt; everything not MPI specific was moved in OPAL, everything else was
</span><br>
<span class="quotelev1">&gt; kept in OMPI. The convertor is MPI agnostic so it ended in OPAL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>To be clear about this: if you're using the convertor from the MPI  
<br>
layer, you should probably be using ompi_convertor.  ompi_convertor  
<br>
wasn't fully deprecated -- as George mentioned, a bunch of it just  
<br>
moved down to OPAL.
<br>
<p>If you're using the convertor from ORTE or OPAL, you should be using  
<br>
opal_convertor.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7108.php">George Bosilca: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>Previous message:</strong> <a href="7106.php">George Bosilca: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>In reply to:</strong> <a href="7106.php">George Bosilca: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7108.php">George Bosilca: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>Reply:</strong> <a href="7108.php">George Bosilca: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
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
