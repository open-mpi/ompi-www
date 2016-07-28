<?
$subject_val = "[OMPI devel] trunk not compiling for btl_openib_connect_oob.c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 15 13:38:01 2011" -->
<!-- isoreceived="20110315173801" -->
<!-- sent="Tue, 15 Mar 2011 13:39:35 -0400" -->
<!-- isosent="20110315173935" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk not compiling for btl_openib_connect_oob.c" -->
<!-- id="4D7FA457.1020303_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] trunk not compiling for btl_openib_connect_oob.c<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-15 13:39:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9066.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Previous message:</strong> <a href="9064.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9066.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Reply:</strong> <a href="9066.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Reply:</strong> <a href="9067.php">Jeff Squyres: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While compiling btl_openib_connect_oob.c I am getting identifier 
<br>
redeclared: ib_gid_t.  Looks like infiniband/mad.h defines this and then 
<br>
iba/types.h tries to redefine it.
<br>
<p>I am on Linux compiling with gcc.  Is anyone else seeing the same issue 
<br>
or am I possibly dealing with some old s/w?
<br>
<pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9065/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-9065/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9066.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Previous message:</strong> <a href="9064.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9066.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Reply:</strong> <a href="9066.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Reply:</strong> <a href="9067.php">Jeff Squyres: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
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
