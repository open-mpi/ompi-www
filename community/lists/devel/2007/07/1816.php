<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 15:17:57 2007" -->
<!-- isoreceived="20070709191757" -->
<!-- sent="Mon, 9 Jul 2007 21:17:23 +0200" -->
<!-- isosent="20070709191723" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="[OMPI devel] &amp;quot;New&amp;quot; IB vendor and MTU question" -->
<!-- id="200707092117.27894.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-15" -->
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
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-09 15:17:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1817.php">Jeff Squyres: "Re: [OMPI devel] &quot;New&quot; IB vendor and MTU question"</a>
<li><strong>Previous message:</strong> <a href="1815.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1817.php">Jeff Squyres: "Re: [OMPI devel] &quot;New&quot; IB vendor and MTU question"</a>
<li><strong>Reply:</strong> <a href="1817.php">Jeff Squyres: "Re: [OMPI devel] &quot;New&quot; IB vendor and MTU question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Our new HP cluster has 25208 HCAs (Mellanox Arbel) but a new vendor-id... We 
<br>
have 0x1708 (presumably HP, hardware wise Cisco (Mellanox)) to add to the 
<br>
existing list in share/openmpi/mca-btl-openib-hca-params.ini that currently 
<br>
contains:
<br>
&nbsp;# Mellanox      0x2c9
<br>
&nbsp;# Cisco         0x5ad
<br>
&nbsp;# Silverstorm   0x66a
<br>
&nbsp;# Voltaire      0x8f1
<br>
<p>Somewhat related question 1: Is there a blessed way to map these ids back to 
<br>
strings?
<br>
<p>question 2: Is 1024 really the best MTU for DDR Arbel? I seem to remember this 
<br>
being 2048...
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1816/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1817.php">Jeff Squyres: "Re: [OMPI devel] &quot;New&quot; IB vendor and MTU question"</a>
<li><strong>Previous message:</strong> <a href="1815.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1817.php">Jeff Squyres: "Re: [OMPI devel] &quot;New&quot; IB vendor and MTU question"</a>
<li><strong>Reply:</strong> <a href="1817.php">Jeff Squyres: "Re: [OMPI devel] &quot;New&quot; IB vendor and MTU question"</a>
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
