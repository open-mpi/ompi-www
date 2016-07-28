<?
$subject_val = "[OMPI devel] reorder parameter in MPI_Cart_create";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 05:37:33 2009" -->
<!-- isoreceived="20090813093733" -->
<!-- sent="Thu, 13 Aug 2009 11:38:18 +0200" -->
<!-- isosent="20090813093818" -->
<!-- name="Kiril Dichev" -->
<!-- email="dichev_at_[hidden]" -->
<!-- subject="[OMPI devel] reorder parameter in MPI_Cart_create" -->
<!-- id="1250156298.7103.20.camel_at_hp-laptop" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] reorder parameter in MPI_Cart_create<br>
<strong>From:</strong> Kiril Dichev (<em>dichev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-13 05:38:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6628.php">Terry Dontje: "[OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6626.php">Ralph Castain: "Re: [OMPI devel] MTL PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6629.php">Jeff Squyres: "Re: [OMPI devel] reorder parameter in MPI_Cart_create"</a>
<li><strong>Reply:</strong> <a href="6629.php">Jeff Squyres: "Re: [OMPI devel] reorder parameter in MPI_Cart_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>a tool developer reported a problem with MPI_Cart_create. The function
<br>
seems to be non-standard conform.
<br>
<p>The parameter &quot;reorder&quot; is a logical flag. According to section 2.6.3
<br>
from the MPI standard, a value &quot;0&quot; means false, and a non-zero value
<br>
means &quot;true&quot;. However, anything other than &quot;0&quot; and &quot;1&quot; leads to program
<br>
abortion for this parameter.
<br>
<p>I attach the trivial patch I propose for this (to be applied in
<br>
&quot;ompi/mpi/c/&quot;) and the test program used.
<br>
<p>Regards,
<br>
Kiril
<br>
<p><pre>
-- 
Dipl.-Inf. Kiril Dichev
Tel.: +49 711 685 60492
E-mail: dichev_at_[hidden]
High Performance Computing Center Stuttgart (HLRS)
Universit&#195;&#164;t Stuttgart
70550 Stuttgart
Germany


</pre>
<p>
<p><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6627/cart.c__charset_UTF-8">cart.c__charset_UTF-8</a>
</ul>
<!-- attachment="cart.c__charset_UTF-8" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6627/cart_create.c.diff__charset_UTF-8">cart_create.c.diff__charset_UTF-8</a>
</ul>
<!-- attachment="cart_create.c.diff__charset_UTF-8" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6628.php">Terry Dontje: "[OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6626.php">Ralph Castain: "Re: [OMPI devel] MTL PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6629.php">Jeff Squyres: "Re: [OMPI devel] reorder parameter in MPI_Cart_create"</a>
<li><strong>Reply:</strong> <a href="6629.php">Jeff Squyres: "Re: [OMPI devel] reorder parameter in MPI_Cart_create"</a>
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
