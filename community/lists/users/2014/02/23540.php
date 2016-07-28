<?
$subject_val = "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 06:25:30 2014" -->
<!-- isoreceived="20140203112530" -->
<!-- sent="Mon, 03 Feb 2014 12:25:28 +0100" -->
<!-- isosent="20140203112528" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface" -->
<!-- id="52EF7CA8.7060604_at_hpc2n.umu.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0E161B2F-5FCE-429D-BF02-41004892FF0A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 06:25:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23541.php">Patrick Boehl: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Previous message:</strong> <a href="23539.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis"</a>
<li><strong>In reply to:</strong> <a href="23526.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/01/2014 03:12 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev2">&gt;&gt; I think that ompi_funloc_variant1 needs to do IMPORT to have access to the callback_variant1 definition before using it to define &quot;FN&quot;
</span><br>
<span class="quotelev2">&gt;&gt; I.e.
</span><br>
<span class="quotelev2">&gt;&gt;      !
</span><br>
<span class="quotelev2">&gt;&gt;       function ompi_funloc_variant1(fn)
</span><br>
<span class="quotelev2">&gt;&gt;         use, intrinsic :: iso_c_binding, only: c_funptr
</span><br>
<span class="quotelev2">&gt;&gt;         import
</span><br>
<span class="quotelev2">&gt;&gt;         procedure(callback_variant1) :: fn
</span><br>
<p>At work reading the specs it is clear that it needs the IMPORT clause.
<br>
Could probably do IMPORT :: callback_variant1 if you want to import as 
<br>
little as possible.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23541.php">Patrick Boehl: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Previous message:</strong> <a href="23539.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis"</a>
<li><strong>In reply to:</strong> <a href="23526.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
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
