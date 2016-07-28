<?
$subject_val = "Re: [OMPI users] data types and alignment to word boundary";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 12:16:56 2011" -->
<!-- isoreceived="20110629161656" -->
<!-- sent="Wed, 29 Jun 2011 11:16:51 -0500" -->
<!-- isosent="20110629161651" -->
<!-- name="Dave Goodell" -->
<!-- email="goodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] data types and alignment to word boundary" -->
<!-- id="3A18F15B-FBC8-4050-B725-7E8EEF189030_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69255DEF-F0CF-4C91-A7C1-C45BDFB2CF06_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] data types and alignment to word boundary<br>
<strong>From:</strong> Dave Goodell (<em>goodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-29 12:16:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16785.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Previous message:</strong> <a href="16783.php">Jeff Squyres: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>In reply to:</strong> <a href="16783.php">Jeff Squyres: "Re: [OMPI users] data types and alignment to word boundary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16785.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 29, 2011, at 10:56 AM CDT, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; There's probably an alignment gap between the short and char array, and possibly an alignment gap between the char array and the double array (depending on the value of SHORT_INPUT and your architecture).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So for your displacements, you should probably actually measure what the displacements are instead of using sizeof(short), for example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tVStruct foo;
</span><br>
<span class="quotelev1">&gt; aiDispsT5[0] = 0;
</span><br>
<span class="quotelev1">&gt; aiDispsT5[0] = ((char*) &amp;(foo.sCapacityFile) - (char*) &amp;foo);
</span><br>
<p>There's a C-standard &quot;offsetof&quot; macro for this calculation.  Using it instead of the pointer math above greatly improves readability: <a href="http://en.wikipedia.org/wiki/Offsetof">http://en.wikipedia.org/wiki/Offsetof</a>
<br>
<p>So the second line becomes:
<br>
<p>----8&lt;----
<br>
aiDispsT5[1] = offsetof(tVStruct, sCapacityFile);
<br>
----8&lt;----
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16785.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Previous message:</strong> <a href="16783.php">Jeff Squyres: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>In reply to:</strong> <a href="16783.php">Jeff Squyres: "Re: [OMPI users] data types and alignment to word boundary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16785.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
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
