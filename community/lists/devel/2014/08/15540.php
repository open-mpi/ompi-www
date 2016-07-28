<?
$subject_val = "[OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 23:25:09 2014" -->
<!-- isoreceived="20140808032509" -->
<!-- sent="Thu, 7 Aug 2014 20:25:08 -0700" -->
<!-- isosent="20140808032508" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC" -->
<!-- id="CAAvDA16KX5Dyc_EdEXLrj0UJri1SPgX5Y3af-NxAdVaAFpkL5w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-07 23:25:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15541.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="15539.php">Paul Hargrove: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15553.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link on	Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="15553.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link on	Solaris-10/SPARC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Testing r32448 on trunk for trac issue #4834, I encounter the following
<br>
which appears unrelated to #4834:
<br>
<p>&nbsp;&nbsp;CCLD     orte-info
<br>
Undefined                       first referenced
<br>
&nbsp;symbol                             in file
<br>
ompi_proc_local_proc
<br>
&nbsp;/sandbox/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u3-v9-static/BLD/opal/.libs/libopen-pal.a(libmca_btl_sm_la-btl_sm_component.o)
<br>
ld: fatal: Symbol referencing errors. No output written to orte-info
<br>
<p>Note that this is *static* linking.
<br>
<p>This appears to indicate a call from OPAL to OMPI, and I am guessing this
<br>
is a side-effect of the BTL move.
<br>
<p>Since OMPI contains (many) calls to OPAL this is a circular library
<br>
dependence.
<br>
Unfortunately, some linkers process their argument strictly left-to-right.
<br>
Thus if this dependence is not eliminated one may need &quot;-lmpi -lopen-pal
<br>
-lmpi&quot; (or similar) to resolve it.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15540/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15541.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="15539.php">Paul Hargrove: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15553.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link on	Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="15553.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link on	Solaris-10/SPARC"</a>
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
