<?
$subject_val = "[OMPI devel] Empty-initializer problems w/ PGI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 00:16:53 2015" -->
<!-- isoreceived="20150827041653" -->
<!-- sent="Wed, 26 Aug 2015 21:16:50 -0700" -->
<!-- isosent="20150827041650" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Empty-initializer problems w/ PGI" -->
<!-- id="CAAvDA17CS1d+A4+rGs4fcQxSQATN2dy-BoZSheS5bgueGfg0jg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Empty-initializer problems w/ PGI<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-27 00:16:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17876.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Previous message:</strong> <a href="17874.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17896.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Empty-initializer problems w/ PGI"</a>
<li><strong>Reply:</strong> <a href="17896.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Empty-initializer problems w/ PGI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am pretty sure we fixed something very similar a couple months back.
<br>
The following is from &quot;make check&quot; with a recent (Tuesday night?) master
<br>
tarball.
<br>
<p>&nbsp;&nbsp;CC       unpack_ooo.o
<br>
PGC-S-0155-Empty initializer not supported
<br>
&nbsp;(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-13.10/openmpi-dev-2371-gea935df/test/datatype/unpack_ooo.c:
<br>
34)
<br>
PGC-S-0155-Empty initializer not supported
<br>
&nbsp;(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-13.10/openmpi-dev-2371-gea935df/test/datatype/unpack_ooo.c:
<br>
39)
<br>
PGC/x86-64 Linux 13.10-0: compilation completed with severe errors
<br>
<p>Running &quot;make -k check&quot; shows no other errors.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17875/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17876.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Previous message:</strong> <a href="17874.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17896.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Empty-initializer problems w/ PGI"</a>
<li><strong>Reply:</strong> <a href="17896.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Empty-initializer problems w/ PGI"</a>
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
