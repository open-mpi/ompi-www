<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 12 06:07:26 2006" -->
<!-- isoreceived="20060912100726" -->
<!-- sent="Tue, 12 Sep 2006 12:07:24 +0200" -->
<!-- isosent="20060912100724" -->
<!-- name="Christian Siebert" -->
<!-- email="christian.siebert_at_[hidden]" -->
<!-- subject="[OMPI devel] portability problem in ompi_info" -->
<!-- id="20060912120724.9rva55fcbogk4c44_at_mail.tu-chemnitz.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Christian Siebert (<em>christian.siebert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-12 06:07:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1063.php">Jeff Squyres: "Re: [OMPI devel] portability problem in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="1061.php">Jeff Squyres: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1063.php">Jeff Squyres: "Re: [OMPI devel] portability problem in ompi_info"</a>
<li><strong>Reply:</strong> <a href="1063.php">Jeff Squyres: "Re: [OMPI devel] portability problem in ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>there is a tiny portability problem located in ompi/tools/ompi_info/param.cc.
<br>
This code uses the asprintf() function, which is a GNU extension and 
<br>
therefore not very portable. Fortunately, it is not hard to exchange 
<br>
the line
<br>
<p>&nbsp;&nbsp;&nbsp;asprintf(&amp;value_string, &quot;%d&quot;, value_int);
<br>
<p>with a separate buffer allocation and the ANSI C function sprintf() 
<br>
(although I'd prefer a pre-allocated buffer). Tip: an integer (whether 
<br>
signed or unsigned) has at most ceil(sizeof(int)*2.41) decimal digits 
<br>
(don't forget the trailing null byte!).
<br>
<p>&nbsp;&nbsp;&nbsp;Christian
<br>
<p>PS: Thanks Jeff for filing the last bug I've mailed.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1063.php">Jeff Squyres: "Re: [OMPI devel] portability problem in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="1061.php">Jeff Squyres: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1063.php">Jeff Squyres: "Re: [OMPI devel] portability problem in ompi_info"</a>
<li><strong>Reply:</strong> <a href="1063.php">Jeff Squyres: "Re: [OMPI devel] portability problem in ompi_info"</a>
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
