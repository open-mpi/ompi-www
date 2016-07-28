<?
$subject_val = "[OMPI devel] 1.6.x compilation failure with intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 16:29:45 2012" -->
<!-- isoreceived="20120501202945" -->
<!-- sent="Tue, 1 May 2012 23:29:20 +0300" -->
<!-- isosent="20120501202920" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.6.x compilation failure with intel compiler" -->
<!-- id="CAL3GGtrXFU3MvwsUc5Sb9u196AvfoWpZkU3DRPkV4RE6G+xnoA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.6.x compilation failure with intel compiler<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 16:29:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10955.php">Jeff Squyres: "Re: [OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="10953.php">Jeff Squyres: "[OMPI devel] RFC: Upgrade trunk to AC 2.69"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10955.php">Jeff Squyres: "Re: [OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<li><strong>Reply:</strong> <a href="10955.php">Jeff Squyres: "Re: [OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<li><strong>Reply:</strong> <a href="10956.php">Matthias Jurenz: "Re: [OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
ompi 1.6.x - compilation fails with intel compiler, but works with gcc.
<br>
compiler version: 10.1.026
<br>
&nbsp;Regards
<br>
<p>&nbsp;&nbsp;&nbsp;CXX otfaux.o CXX Control.o CXX Handler.o CXX State.o CXXLD otfaux
<br>
../../otflib/.libs/libotf.so: undefined reference to `inflateReset'
<br>
../../otflib/.libs/libotf.so: undefined reference to `inflateEnd'
<br>
../../otflib/.libs/libotf.so: undefined reference to `deflate'
<br>
../../otflib/.libs/libotf.so: undefined reference to `deflateInit_'
<br>
../../otflib/.libs/libotf.so: undefined reference to `inflate'
<br>
../../otflib/.libs/libotf.so: undefined reference to `inflateSync'
<br>
../../otflib/.libs/libotf.so: undefined reference to `deflateEnd'
<br>
../../otflib/.libs/libotf.so: undefined reference to `inflateInit_'
<br>
make[9]: *** [otfaux] Error 1
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10954/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10955.php">Jeff Squyres: "Re: [OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="10953.php">Jeff Squyres: "[OMPI devel] RFC: Upgrade trunk to AC 2.69"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10955.php">Jeff Squyres: "Re: [OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<li><strong>Reply:</strong> <a href="10955.php">Jeff Squyres: "Re: [OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<li><strong>Reply:</strong> <a href="10956.php">Matthias Jurenz: "Re: [OMPI devel] 1.6.x compilation failure with intel compiler"</a>
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
